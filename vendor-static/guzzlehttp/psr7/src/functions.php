<?php

namespace GuzzleHttp6\Psr7;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * Returns the string representation of an HTTP message.
 *
 * @param MessageInterface $message message to convert to a string
 *
 * @return string
 */
function str(MessageInterface $message)
{
    if ($message instanceof RequestInterface) {
        $msg = \trim($message->getMethod() . ' '
                . $message->getRequestTarget())
            . ' HTTP/' . $message->getProtocolVersion();
        if (!$message->hasHeader('host')) {
            $msg .= "\r\nHost: " . $message->getUri()->getHost();
        }
    } elseif ($message instanceof ResponseInterface) {
        $msg = 'HTTP/' . $message->getProtocolVersion() . ' '
            . $message->getStatusCode() . ' '
            . $message->getReasonPhrase();
    } else {
        throw new \InvalidArgumentException('Unknown message type');
    }

    foreach ($message->getHeaders() as $name => $values) {
        $msg .= "\r\n{$name}: " . \implode(', ', $values);
    }

    return "{$msg}\r\n\r\n" . $message->getBody();
}

/**
 * Returns a UriInterface for the given value.
 *
 * This function accepts a string or {@see Psr\Http\Message\UriInterface} and
 * returns a UriInterface for the given value. If the value is already a
 * `UriInterface`, it is returned as-is.
 *
 * @param string|UriInterface $uri
 *
 * @throws \InvalidArgumentException
 *
 * @return UriInterface
 */
function uri_for($uri)
{
    if ($uri instanceof UriInterface) {
        return $uri;
    } elseif (\is_string($uri)) {
        return new Uri($uri);
    }

    throw new \InvalidArgumentException('URI must be a string or UriInterface');
}

/**
 * Create a new stream based on the input type.
 *
 * Options is an associative array that can contain the following keys:
 * - metadata: Array of custom metadata.
 * - size: Size of the stream.
 *
 * @param resource|string|int|float|bool|StreamInterface|callable|\Iterator|null $resource Entity body data
 * @param array                                                                  $options  Additional options
 *
 * @throws \InvalidArgumentException if the $resource arg is not valid
 *
 * @return StreamInterface
 */
function stream_for($resource = '', array $options = [])
{
    if (\is_scalar($resource)) {
        $stream = \fopen('php://temp', 'r+');
        if ($resource !== '') {
            \fwrite($stream, $resource);
            \fseek($stream, 0);
        }

        return new Stream($stream, $options);
    }

    switch (\gettype($resource)) {
        case 'resource':
            return new Stream($resource, $options);
        case 'object':
            if ($resource instanceof StreamInterface) {
                return $resource;
            } elseif ($resource instanceof \Iterator) {
                return new PumpStream(function () use ($resource) {
                    if (!$resource->valid()) {
                        return false;
                    }
                    $result = $resource->current();
                    $resource->next();

                    return $result;
                }, $options);
            } elseif (\method_exists($resource, '__toString')) {
                return stream_for((string) $resource, $options);
            }
            break;
        case 'NULL':
            return new Stream(\fopen('php://temp', 'r+'), $options);
    }

    if (\is_callable($resource)) {
        return new PumpStream($resource, $options);
    }

    throw new \InvalidArgumentException('Invalid resource type: ' . \gettype($resource));
}

/**
 * Parse an array of header values containing ";" separated data into an
 * array of associative arrays representing the header key value pair
 * data of the header. When a parameter does not contain a value, but just
 * contains a key, this function will inject a key with a '' string value.
 *
 * @param string|array $header header to parse into components
 *
 * @return array returns the parsed header values
 */
function parse_header($header)
{
    static $trimmed = "\"'  \n\t\r";
    $params = $matches = [];

    foreach (normalize_header($header) as $val) {
        $part = [];
        foreach (\preg_split('/;(?=([^"]*"[^"]*")*[^"]*$)/', $val) as $kvp) {
            if (\preg_match_all('/<[^>]+>|[^=]+/', $kvp, $matches)) {
                $m = $matches[0];
                if (isset($m[1])) {
                    $part[\trim($m[0], $trimmed)] = \trim($m[1], $trimmed);
                } else {
                    $part[] = \trim($m[0], $trimmed);
                }
            }
        }
        if ($part) {
            $params[] = $part;
        }
    }

    return $params;
}

/**
 * Converts an array of header values that may contain comma separated
 * headers into an array of headers with no comma separated values.
 *
 * @param string|array $header header to normalize
 *
 * @return array returns the normalized header field values
 */
function normalize_header($header)
{
    if (!\is_array($header)) {
        return \array_map('trim', \explode(',', $header));
    }

    $result = [];
    foreach ($header as $value) {
        foreach ((array) $value as $v) {
            if (\mb_strpos($v, ',') === false) {
                $result[] = $v;
                continue;
            }
            foreach (\preg_split('/,(?=([^"]*"[^"]*")*[^"]*$)/', $v) as $vv) {
                $result[] = \trim($vv);
            }
        }
    }

    return $result;
}

/**
 * Clone and modify a request with the given changes.
 *
 * The changes can be one of:
 * - method: (string) Changes the HTTP method.
 * - set_headers: (array) Sets the given headers.
 * - remove_headers: (array) Remove the given headers.
 * - body: (mixed) Sets the given body.
 * - uri: (UriInterface) Set the URI.
 * - query: (string) Set the query string value of the URI.
 * - version: (string) Set the protocol version.
 *
 * @param RequestInterface $request request to clone and modify
 * @param array            $changes changes to apply
 *
 * @return RequestInterface
 */
function modify_request(RequestInterface $request, array $changes)
{
    if (!$changes) {
        return $request;
    }

    $headers = $request->getHeaders();

    if (!isset($changes['uri'])) {
        $uri = $request->getUri();
    } else {
        // Remove the host header if one is on the URI
        if ($host = $changes['uri']->getHost()) {
            $changes['set_headers']['Host'] = $host;

            if ($port = $changes['uri']->getPort()) {
                $standardPorts = ['http' => 80, 'https' => 443];
                $scheme = $changes['uri']->getScheme();
                if (isset($standardPorts[$scheme]) && $port !== $standardPorts[$scheme]) {
                    $changes['set_headers']['Host'] .= ':' . $port;
                }
            }
        }
        $uri = $changes['uri'];
    }

    if (!empty($changes['remove_headers'])) {
        $headers = _caseless_remove($changes['remove_headers'], $headers);
    }

    if (!empty($changes['set_headers'])) {
        $headers = _caseless_remove(\array_keys($changes['set_headers']), $headers);
        $headers = $changes['set_headers'] + $headers;
    }

    if (isset($changes['query'])) {
        $uri = $uri->withQuery($changes['query']);
    }

    if ($request instanceof ServerRequestInterface) {
        return (new ServerRequest(
            isset($changes['method']) ? $changes['method'] : $request->getMethod(),
            $uri,
            $headers,
            isset($changes['body']) ? $changes['body'] : $request->getBody(),
            isset($changes['version'])
                ? $changes['version']
                : $request->getProtocolVersion(),
            $request->getServerParams()
        ))
        ->withParsedBody($request->getParsedBody())
        ->withQueryParams($request->getQueryParams())
        ->withCookieParams($request->getCookieParams())
        ->withUploadedFiles($request->getUploadedFiles());
    }

    return new Request(
        isset($changes['method']) ? $changes['method'] : $request->getMethod(),
        $uri,
        $headers,
        isset($changes['body']) ? $changes['body'] : $request->getBody(),
        isset($changes['version'])
            ? $changes['version']
            : $request->getProtocolVersion()
    );
}

/**
 * Attempts to rewind a message body and throws an exception on failure.
 *
 * The body of the message will only be rewound if a call to `tell()` returns a
 * value other than `0`.
 *
 * @param MessageInterface $message Message to rewind
 *
 * @throws \RuntimeException
 */
function rewind_body(MessageInterface $message): void
{
    $body = $message->getBody();

    if ($body->tell()) {
        $body->rewind();
    }
}

/**
 * Safely opens a PHP stream resource using a filename.
 *
 * When fopen fails, PHP normally raises a warning. This function adds an
 * error handler that checks for errors and throws an exception instead.
 *
 * @param string $filename File to open
 * @param string $mode     Mode used to open the file
 *
 * @throws \RuntimeException if the file cannot be opened
 *
 * @return resource
 */
function try_fopen($filename, $mode)
{
    $ex = null;
    \set_error_handler(function () use ($filename, $mode, &$ex): void {
        $ex = new \RuntimeException(\sprintf(
            'Unable to open %s using mode %s: %s',
            $filename,
            $mode,
            \func_get_args()[1]
        ));
    });

    $handle = \fopen($filename, $mode);
    \restore_error_handler();

    if ($ex) {
        /* @var $ex \RuntimeException */
        throw $ex;
    }

    return $handle;
}

/**
 * Copy the contents of a stream into a string until the given number of
 * bytes have been read.
 *
 * @param StreamInterface $stream Stream to read
 * @param int             $maxLen Maximum number of bytes to read. Pass -1
 *                                to read the entire stream.
 *
 * @throws \RuntimeException on error
 *
 * @return string
 */
function copy_to_string(StreamInterface $stream, $maxLen = -1)
{
    $buffer = '';

    if ($maxLen === -1) {
        while (!$stream->eof()) {
            $buf = $stream->read(1048576);
            // Using a loose equality here to match on '' and false.
            if ($buf === null) {
                break;
            }
            $buffer .= $buf;
        }

        return $buffer;
    }

    $len = 0;
    while (!$stream->eof() && $len < $maxLen) {
        $buf = $stream->read($maxLen - $len);
        // Using a loose equality here to match on '' and false.
        if ($buf === null) {
            break;
        }
        $buffer .= $buf;
        $len = \mb_strlen($buffer);
    }

    return $buffer;
}

/**
 * Copy the contents of a stream into another stream until the given number
 * of bytes have been read.
 *
 * @param StreamInterface $source Stream to read from
 * @param StreamInterface $dest   Stream to write to
 * @param int             $maxLen Maximum number of bytes to read. Pass -1
 *                                to read the entire stream.
 *
 * @throws \RuntimeException on error
 */
function copy_to_stream(
    StreamInterface $source,
    StreamInterface $dest,
    $maxLen = -1
): void {
    $bufferSize = 8192;

    if ($maxLen === -1) {
        while (!$source->eof()) {
            if (!$dest->write($source->read($bufferSize))) {
                break;
            }
        }
    } else {
        $remaining = $maxLen;
        while ($remaining > 0 && !$source->eof()) {
            $buf = $source->read(\min($bufferSize, $remaining));
            $len = \mb_strlen($buf);
            if (!$len) {
                break;
            }
            $remaining -= $len;
            $dest->write($buf);
        }
    }
}

/**
 * Calculate a hash of a Stream
 *
 * @param StreamInterface $stream    Stream to calculate the hash for
 * @param string          $algo      Hash algorithm (e.g. md5, crc32, etc)
 * @param bool            $rawOutput Whether or not to use raw output
 *
 * @throws \RuntimeException on error
 *
 * @return string Returns the hash of the stream
 */
function hash(
    StreamInterface $stream,
    $algo,
    $rawOutput = false
) {
    $pos = $stream->tell();

    if ($pos > 0) {
        $stream->rewind();
    }

    $ctx = \hash_init($algo);
    while (!$stream->eof()) {
        \hash_update($ctx, $stream->read(1048576));
    }

    $out = \hash_final($ctx, (bool) $rawOutput);
    $stream->seek($pos);

    return $out;
}

/**
 * Read a line from the stream up to the maximum allowed buffer length
 *
 * @param StreamInterface $stream    Stream to read from
 * @param int             $maxLength Maximum buffer length
 *
 * @return string
 */
function readline(StreamInterface $stream, $maxLength = null)
{
    $buffer = '';
    $size = 0;

    while (!$stream->eof()) {
        // Using a loose equality here to match on '' and false.
        if (($byte = $stream->read(1)) === null) {
            return $buffer;
        }
        $buffer .= $byte;
        // Break when a new line is found or the max length - 1 is reached
        if ($byte === "\n" || ++$size === $maxLength - 1) {
            break;
        }
    }

    return $buffer;
}

/**
 * Parses a request message string into a request object.
 *
 * @param string $message request message string
 *
 * @return Request
 */
function parse_request($message)
{
    $data = _parse_message($message);
    $matches = [];
    if (!\preg_match('/^[\S]+\s+([a-zA-Z]+:\/\/|\/).*/', $data['start-line'], $matches)) {
        throw new \InvalidArgumentException('Invalid request string');
    }
    $parts = \explode(' ', $data['start-line'], 3);
    $version = isset($parts[2]) ? \explode('/', $parts[2])[1] : '1.1';

    $request = new Request(
        $parts[0],
        $matches[1] === '/' ? _parse_request_uri($parts[1], $data['headers']) : $parts[1],
        $data['headers'],
        $data['body'],
        $version
    );

    return $matches[1] === '/' ? $request : $request->withRequestTarget($parts[1]);
}

/**
 * Parses a response message string into a response object.
 *
 * @param string $message response message string
 *
 * @return Response
 */
function parse_response($message)
{
    $data = _parse_message($message);
    // According to https://tools.ietf.org/html/rfc7230#section-3.1.2 the space
    // between status-code and reason-phrase is required. But browsers accept
    // responses without space and reason as well.
    if (!\preg_match('/^HTTP\/.* [0-9]{3}( .*|$)/', $data['start-line'])) {
        throw new \InvalidArgumentException('Invalid response string: ' . $data['start-line']);
    }
    $parts = \explode(' ', $data['start-line'], 3);

    return new Response(
        $parts[1],
        $data['headers'],
        $data['body'],
        \explode('/', $parts[0])[1],
        isset($parts[2]) ? $parts[2] : null
    );
}

/**
 * Parse a query string into an associative array.
 *
 * If multiple values are found for the same key, the value of that key
 * value pair will become an array. This function does not parse nested
 * PHP style arrays into an associative array (e.g., foo[a]=1&foo[b]=2 will
 * be parsed into ['foo[a]' => '1', 'foo[b]' => '2']).
 *
 * @param string   $str         Query string to parse
 * @param int|bool $urlEncoding How the query string is encoded
 *
 * @return array
 */
function parse_query($str, $urlEncoding = true)
{
    $result = [];

    if ($str === '') {
        return $result;
    }

    if ($urlEncoding === true) {
        $decoder = function ($value) {
            return \rawurldecode(\str_replace('+', ' ', $value));
        };
    } elseif ($urlEncoding === PHP_QUERY_RFC3986) {
        $decoder = 'rawurldecode';
    } elseif ($urlEncoding === PHP_QUERY_RFC1738) {
        $decoder = 'urldecode';
    } else {
        $decoder = function ($str) { return $str; };
    }

    foreach (\explode('&', $str) as $kvp) {
        $parts = \explode('=', $kvp, 2);
        $key = $decoder($parts[0]);
        $value = isset($parts[1]) ? $decoder($parts[1]) : null;
        if (!isset($result[$key])) {
            $result[$key] = $value;
        } else {
            if (!\is_array($result[$key])) {
                $result[$key] = [$result[$key]];
            }
            $result[$key][] = $value;
        }
    }

    return $result;
}

/**
 * Build a query string from an array of key value pairs.
 *
 * This function can use the return value of parse_query() to build a query
 * string. This function does not modify the provided keys when an array is
 * encountered (like http_build_query would).
 *
 * @param array     $params   query string parameters
 * @param int|false $encoding set to false to not encode, PHP_QUERY_RFC3986
 *                            to encode using RFC3986, or PHP_QUERY_RFC1738
 *                            to encode using RFC1738
 *
 * @return string
 */
function build_query(array $params, $encoding = PHP_QUERY_RFC3986)
{
    if (!$params) {
        return '';
    }

    if ($encoding === false) {
        $encoder = function ($str) { return $str; };
    } elseif ($encoding === PHP_QUERY_RFC3986) {
        $encoder = 'rawurlencode';
    } elseif ($encoding === PHP_QUERY_RFC1738) {
        $encoder = 'urlencode';
    } else {
        throw new \InvalidArgumentException('Invalid type');
    }

    $qs = '';
    foreach ($params as $k => $v) {
        $k = $encoder($k);
        if (!\is_array($v)) {
            $qs .= $k;
            if ($v !== null) {
                $qs .= '=' . $encoder($v);
            }
            $qs .= '&';
        } else {
            foreach ($v as $vv) {
                $qs .= $k;
                if ($vv !== null) {
                    $qs .= '=' . $encoder($vv);
                }
                $qs .= '&';
            }
        }
    }

    return $qs ? (string) \mb_substr($qs, 0, -1) : '';
}

/**
 * Determines the mimetype of a file by looking at its extension.
 *
 * @param $filename
 *
 * @return string|null
 */
function mimetype_from_filename($filename)
{
    return mimetype_from_extension(\pathinfo($filename, PATHINFO_EXTENSION));
}

/**
 * Maps a file extensions to a mimetype.
 *
 * @param $extension string The file extension
 *
 * @return string|null
 *
 * @see http://svn.apache.org/repos/asf/httpd/httpd/branches/1.3.x/conf/mime.types
 */
function mimetype_from_extension($extension)
{
    static $mimetypes = [
        '3gp' => 'video/3gpp',
        '7z' => 'application/x-7z-compressed',
        'aac' => 'audio/x-aac',
        'ai' => 'application/postscript',
        'aif' => 'audio/x-aiff',
        'asc' => 'text/plain',
        'asf' => 'video/x-ms-asf',
        'atom' => 'application/atom+xml',
        'avi' => 'video/x-msvideo',
        'bmp' => 'image/bmp',
        'bz2' => 'application/x-bzip2',
        'cer' => 'application/pkix-cert',
        'crl' => 'application/pkix-crl',
        'crt' => 'application/x-x509-ca-cert',
        'css' => 'text/css',
        'csv' => 'text/csv',
        'cu' => 'application/cu-seeme',
        'deb' => 'application/x-debian-package',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'dvi' => 'application/x-dvi',
        'eot' => 'application/vnd.ms-fontobject',
        'eps' => 'application/postscript',
        'epub' => 'application/epub+zip',
        'etx' => 'text/x-setext',
        'flac' => 'audio/flac',
        'flv' => 'video/x-flv',
        'gif' => 'image/gif',
        'gz' => 'application/gzip',
        'htm' => 'text/html',
        'html' => 'text/html',
        'ico' => 'image/x-icon',
        'ics' => 'text/calendar',
        'ini' => 'text/plain',
        'iso' => 'application/x-iso9660-image',
        'jar' => 'application/java-archive',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'js' => 'text/javascript',
        'json' => 'application/json',
        'latex' => 'application/x-latex',
        'log' => 'text/plain',
        'm4a' => 'audio/mp4',
        'm4v' => 'video/mp4',
        'mid' => 'audio/midi',
        'midi' => 'audio/midi',
        'mov' => 'video/quicktime',
        'mkv' => 'video/x-matroska',
        'mp3' => 'audio/mpeg',
        'mp4' => 'video/mp4',
        'mp4a' => 'audio/mp4',
        'mp4v' => 'video/mp4',
        'mpe' => 'video/mpeg',
        'mpeg' => 'video/mpeg',
        'mpg' => 'video/mpeg',
        'mpg4' => 'video/mp4',
        'oga' => 'audio/ogg',
        'ogg' => 'audio/ogg',
        'ogv' => 'video/ogg',
        'ogx' => 'application/ogg',
        'pbm' => 'image/x-portable-bitmap',
        'pdf' => 'application/pdf',
        'pgm' => 'image/x-portable-graymap',
        'png' => 'image/png',
        'pnm' => 'image/x-portable-anymap',
        'ppm' => 'image/x-portable-pixmap',
        'ppt' => 'application/vnd.ms-powerpoint',
        'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'ps' => 'application/postscript',
        'qt' => 'video/quicktime',
        'rar' => 'application/x-rar-compressed',
        'ras' => 'image/x-cmu-raster',
        'rss' => 'application/rss+xml',
        'rtf' => 'application/rtf',
        'sgm' => 'text/sgml',
        'sgml' => 'text/sgml',
        'svg' => 'image/svg+xml',
        'swf' => 'application/x-shockwave-flash',
        'tar' => 'application/x-tar',
        'tif' => 'image/tiff',
        'tiff' => 'image/tiff',
        'torrent' => 'application/x-bittorrent',
        'ttf' => 'application/x-font-ttf',
        'txt' => 'text/plain',
        'wav' => 'audio/x-wav',
        'webm' => 'video/webm',
        'webp' => 'image/webp',
        'wma' => 'audio/x-ms-wma',
        'wmv' => 'video/x-ms-wmv',
        'woff' => 'application/x-font-woff',
        'wsdl' => 'application/wsdl+xml',
        'xbm' => 'image/x-xbitmap',
        'xls' => 'application/vnd.ms-excel',
        'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'xml' => 'application/xml',
        'xpm' => 'image/x-xpixmap',
        'xwd' => 'image/x-xwindowdump',
        'yaml' => 'text/yaml',
        'yml' => 'text/yaml',
        'zip' => 'application/zip',
    ];

    $extension = \mb_strtolower($extension);

    return isset($mimetypes[$extension])
        ? $mimetypes[$extension]
        : null;
}

/**
 * Parses an HTTP message into an associative array.
 *
 * The array contains the "start-line" key containing the start line of
 * the message, "headers" key containing an associative array of header
 * array values, and a "body" key containing the body of the message.
 *
 * @param string $message HTTP request or response to parse
 *
 * @return array
 *
 * @internal
 */
function _parse_message($message)
{
    if (!$message) {
        throw new \InvalidArgumentException('Invalid message');
    }

    $message = \ltrim($message, "\r\n");

    $messageParts = \preg_split("/\r?\n\r?\n/", $message, 2);

    if ($messageParts === false || \count($messageParts) !== 2) {
        throw new \InvalidArgumentException('Invalid message: Missing header delimiter');
    }

    list($rawHeaders, $body) = $messageParts;
    $rawHeaders .= "\r\n"; // Put back the delimiter we split previously
    $headerParts = \preg_split("/\r?\n/", $rawHeaders, 2);

    if ($headerParts === false || \count($headerParts) !== 2) {
        throw new \InvalidArgumentException('Invalid message: Missing status line');
    }

    list($startLine, $rawHeaders) = $headerParts;

    if (\preg_match("/(?:^HTTP\/|^[A-Z]+ \S+ HTTP\/)(\d+(?:\.\d+)?)/i", $startLine, $matches) && $matches[1] === '1.0') {
        // Header folding is deprecated for HTTP/1.1, but allowed in HTTP/1.0
        $rawHeaders = \preg_replace(Rfc7230::HEADER_FOLD_REGEX, ' ', $rawHeaders);
    }

    $count = \preg_match_all(Rfc7230::HEADER_REGEX, $rawHeaders, $headerLines, PREG_SET_ORDER);

    // If these aren't the same, then one line didn't match and there's an invalid header.
    if ($count !== \mb_substr_count($rawHeaders, "\n")) {
        // Folding is deprecated, see https://tools.ietf.org/html/rfc7230#section-3.2.4
        if (\preg_match(Rfc7230::HEADER_FOLD_REGEX, $rawHeaders)) {
            throw new \InvalidArgumentException('Invalid header syntax: Obsolete line folding');
        }

        throw new \InvalidArgumentException('Invalid header syntax');
    }

    $headers = [];

    foreach ($headerLines as $headerLine) {
        $headers[$headerLine[1]][] = $headerLine[2];
    }

    return [
        'start-line' => $startLine,
        'headers' => $headers,
        'body' => $body,
    ];
}

/**
 * Constructs a URI for an HTTP request message.
 *
 * @param string $path    Path from the start-line
 * @param array  $headers array of headers (each value an array)
 *
 * @return string
 *
 * @internal
 */
function _parse_request_uri($path, array $headers)
{
    $hostKey = \array_filter(\array_keys($headers), function ($k) {
        return \mb_strtolower($k) === 'host';
    });

    // If no host is found, then a full URI cannot be constructed.
    if (!$hostKey) {
        return $path;
    }

    $host = $headers[\reset($hostKey)][0];
    $scheme = \mb_substr($host, -4) === ':443' ? 'https' : 'http';

    return $scheme . '://' . $host . '/' . \ltrim($path, '/');
}

/**
 * Get a short summary of the message body
 *
 * Will return `null` if the response is not printable.
 *
 * @param MessageInterface $message    The message to get the body summary
 * @param int              $truncateAt The maximum allowed size of the summary
 *
 * @return string|null
 */
function get_message_body_summary(MessageInterface $message, $truncateAt = 120)
{
    $body = $message->getBody();

    if (!$body->isSeekable() || !$body->isReadable()) {
        return null;
    }

    $size = $body->getSize();

    if ($size === 0) {
        return null;
    }

    $summary = $body->read($truncateAt);
    $body->rewind();

    if ($size > $truncateAt) {
        $summary .= ' (truncated...)';
    }

    // Matches any printable character, including unicode characters:
    // letters, marks, numbers, punctuation, spacing, and separators.
    if (\preg_match('/[^\pL\pM\pN\pP\pS\pZ\n\r\t]/', $summary)) {
        return null;
    }

    return $summary;
}

/** @internal */
function _caseless_remove($keys, array $data)
{
    $result = [];

    foreach ($keys as &$key) {
        $key = \mb_strtolower($key);
    }

    foreach ($data as $k => $v) {
        if (!\in_array(\mb_strtolower($k), $keys, true)) {
            $result[$k] = $v;
        }
    }

    return $result;
}
