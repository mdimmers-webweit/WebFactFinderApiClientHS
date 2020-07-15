<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client;

use GuzzleHttp6\Client;
use GuzzleHttp6\ClientInterface;
use GuzzleHttp6\Exception\RequestException;
use GuzzleHttp6\Psr7\Request;
use GuzzleHttp6\RequestOptions;
use Web\FactFinderApi\Client\Model\ApiError;

abstract class ApiClient
{
    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public function getConfig(): Configuration
    {
        return $this->config;
    }

    public function executeAsyncRequest(Request $request, string $returnType)
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if (!\in_array($returnType, ['string', 'integer', 'bool'], true)) {
                            $content = \json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception): void {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        \sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    protected function handleException(ApiException $e): void
    {
        if (\in_array($e->getCode(), [400, 401, 403, 500], true)) {
            $data = ObjectSerializer::deserialize(
                $e->getResponseBody(),
                ApiError::class,
                $e->getResponseHeaders()
            );
            $e->setResponseObject($data);
        }
        throw $e;
    }

    protected function getQuery(string $resourcePath, array $queryParams): Request
    {
        // body params
        $_tempBody = null;
        $httpBody = null;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp6\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if (\is_array($httpBody)) {
                    $httpBody = \GuzzleHttp6\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !empty($this->config->getPassword())) {
            $headers['Authorization'] = 'Basic ' . \base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = \array_merge(
            $defaultHeaders,
            $headers
        );

        $query = \GuzzleHttp6\Psr7\build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * @throws ApiException
     * @throws \GuzzleHttp6\Exception\GuzzleException
     */
    protected function executeRequest(Request $request, string $returnType): array
    {
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    \sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!\in_array($returnType, ['string', 'integer', 'bool'], true)) {
                    $content = \json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            $this->handleException($e);
        }
    }

    protected function postQuery(string $resourcePath, array $queryParams, $params): Request
    {
        // body params
        $_tempBody = null;
        if (isset($params)) {
            $_tempBody = $params;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp6\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if (\is_array($httpBody)) {
                    $httpBody = \GuzzleHttp6\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . \base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = \array_merge(
            $defaultHeaders,
            $headers
        );

        $query = \GuzzleHttp6\Psr7\build_query($queryParams);

        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     *@throws \RuntimeException on file opening failure
     *
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = \fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    protected function addChannelToResourcePath($channel, string $resourcePath): string
    {
        if ($channel !== null) {
            $resourcePath = \str_replace(
                '{channel}',
                ObjectSerializer::toPathValue($channel),
                $resourcePath
            );
        }

        return $resourcePath;
    }
}
