<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace GuzzleHttp6\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Uses PHP's zlib.inflate filter to inflate deflate or gzipped content.
 *
 * This stream decorator skips the first 10 bytes of the given stream to remove
 * the gzip header, converts the provided stream to a PHP stream resource,
 * then appends the zlib.inflate filter. The stream is then converted back
 * to a Guzzle stream resource to be used as a Guzzle stream.
 *
 * @see http://tools.ietf.org/html/rfc1952
 * @see http://php.net/manual/en/filters.compression.php
 */
class InflateStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function __construct(StreamInterface $stream)
    {
        // read the first 10 bytes, ie. gzip header
        $header = $stream->read(10);
        $filenameHeaderLength = $this->getLengthOfPossibleFilenameHeader($stream, $header);
        // Skip the header, that is 10 + length of filename + 1 (nil) bytes
        $stream = new LimitStream($stream, -1, 10 + $filenameHeaderLength);
        $resource = StreamWrapper::getResource($stream);
        stream_filter_append($resource, 'zlib.inflate', STREAM_FILTER_READ);
        $this->stream = $stream->isSeekable() ? new Stream($resource) : new NoSeekStream(new Stream($resource));
    }

    /**
     * @return int
     */
    private function getLengthOfPossibleFilenameHeader(StreamInterface $stream, $header)
    {
        $filename_header_length = 0;

        if (mb_substr(bin2hex($header), 6, 2) === '08') {
            // we have a filename, read until nil
            $filename_header_length = 1;
            while ($stream->read(1) !== \chr(0)) {
                ++$filename_header_length;
            }
        }

        return $filename_header_length;
    }
}
