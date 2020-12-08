<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client;

use GuzzleHttp6\ClientInterface;
use GuzzleHttp6\Exception\RequestException;
use GuzzleHttp6\Promise\PromiseInterface;
use GuzzleHttp6\Psr7\Request;
use GuzzleHttp6\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Web\FactFinderApi\Client\Model\ApiError;

abstract class ApiClient implements ApiClientInterface
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(
        ClientInterface $client,
        Configuration $config,
        LoggerInterface $logger
    ) {
        $this->client = $client;
        $this->config = $config;
        $this->logger = $logger;
    }

    public function getConfig(): Configuration
    {
        return $this->config;
    }

    public function executeEmptyAsyncRequest(Request $request): PromiseInterface
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($request) {
                    $this->logRequest($request, $response);

                    return [
                        null,
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) use ($request): void {
                    $this->processException($exception, $request);
                }
            );
    }

    public function executeAsyncRequest(Request $request, string $returnType): PromiseInterface
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType, $request) {
                    $this->logRequest($request, $response);

                    $content = $this->processResponseBody($response, $returnType);

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) use ($request): void {
                    $this->processException($exception, $request);
                }
            );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
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

    protected function getQuery(string $resourcePath, array $queryParams): Request
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

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
            $headers
        );
    }

    /**
     * @throws ApiException
     * @throws \GuzzleHttp6\Exception\GuzzleException
     */
    protected function executeRequest(Request $request, string $returnType): array
    {
        try {
            $response = $this->processRequest($request);

            $content = $this->processResponseBody($response, $returnType);

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
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
    }

    /**
     * @throws ApiException
     * @throws \GuzzleHttp6\Exception\GuzzleException
     */
    protected function executeEmptyRequest(Request $request): array
    {
        try {
            $response = $this->processRequest($request);

            return [
                null,
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
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
    }

    protected function postQuery(string $resourcePath, array $queryParams, $params, bool $oauth = false): Request
    {
        return $this->query('POST', $resourcePath, $queryParams, $params, $oauth);
    }

    protected function putQuery(string $resourcePath, array $queryParams, $params, bool $oauth = false): Request
    {
        return $this->query('PUT', $resourcePath, $queryParams, $params, $oauth);
    }

    protected function deleteQuery(string $resourcePath, array $queryParams, $params, bool $oauth = false): Request
    {
        return $this->query('DELETE', $resourcePath, $queryParams, $params, $oauth);
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

    protected function logRequest(Request $request, ?ResponseInterface $response = null): void
    {
        $this->logger->info('FACT-Finder request', $this->getLogParams($request, $response));
    }

    protected function logError(Request $request, ?ResponseInterface $response = null): void
    {
        $this->logger->error('FACT-Finder error', $this->getLogParams($request, $response));
    }

    protected function getLogParams(Request $request, ?ResponseInterface $response = null): array
    {
        return [
            'uri' => (string) $request->getUri(),
            'body' => (string) $request->getBody()->getContents(),
            'code' => $response ? $response->getStatusCode() : null,
            'responseBody' => $response ? $response->getBody()->getContents() : null,
        ];
    }

    protected function processRequest(Request $request): ResponseInterface
    {
        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            $this->logError($request, $e->getResponse());

            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            $this->logError($request, $response);
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

        $this->logRequest($request, $response);

        return $response;
    }

    protected function processResponseBody(ResponseInterface $response, string $returnType)
    {
        $responseBody = $response->getBody();

        if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
        } else {
            $content = $responseBody->getContents();
            if (!\in_array($returnType, ['string', 'integer', 'bool'], true)) {
                $content = \json_decode($content);
            }
        }

        return $content;
    }

    protected function processException($exception, Request $request): void
    {
        $response = $exception->getResponse();
        $statusCode = $response->getStatusCode();

        $this->logError($request, $response);

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

    private function query(string $action, string $resourcePath, array $queryParams, $params, bool $oauth = false): Request
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        $headers['Authorization'] = 'Basic ' . \base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());

        if ($oauth) {
            // this endpoint requires OAuth (access token)
            if ($this->config->getAccessToken() !== null) {
                $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }
        } else {
            // this endpoint requires API key authentication
            $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
            if ($apiKey !== null) {
                $headers['Authorization'] = $apiKey;
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = \array_merge(
            $defaultHeaders,
            $headers
        );

        $httpBody = null;
        // for model (json/xml)
        if ($params) {
            $httpBody = $params;

            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass) {
                $httpBody = \GuzzleHttp6\json_encode($httpBody);
            }
            // array has no __toString(), so we should encode it manually
            if (\is_array($httpBody)) {
                $httpBody = \GuzzleHttp6\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }
        }

        $query = \GuzzleHttp6\Psr7\build_query($queryParams);

        return new Request(
            $action,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}
