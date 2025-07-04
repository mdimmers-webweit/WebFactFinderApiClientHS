<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\ObjectSerializer;

/**
 * ManagementApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ManagementApi extends ApiClient
{
    /**
     * Operation changeLogLevelUsingPOST
     *
     * Changes the log level
     *
     * @param string $log_level logLevel (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function changeLogLevelUsingPOST($log_level): void
    {
        $this->changeLogLevelUsingPOSTWithHttpInfo($log_level);
    }

    /**
     * Operation changeLogLevelUsingPOSTWithHttpInfo
     *
     * Changes the log level
     *
     * @param string $log_level logLevel (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeLogLevelUsingPOSTWithHttpInfo($log_level)
    {
        $request = $this->changeLogLevelUsingPOSTRequest($log_level);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation changeLogLevelUsingPOSTAsync
     *
     * Changes the log level
     *
     * @param string $log_level logLevel (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function changeLogLevelUsingPOSTAsync($log_level)
    {
        return $this->changeLogLevelUsingPOSTAsyncWithHttpInfo($log_level)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation changeLogLevelUsingPOSTAsyncWithHttpInfo
     *
     * Changes the log level
     *
     * @param string $log_level logLevel (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function changeLogLevelUsingPOSTAsyncWithHttpInfo($log_level)
    {
        $request = $this->changeLogLevelUsingPOSTRequest($log_level);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception): void {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
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

    /**
     * Operation deployUsingPOST
     *
     * Deploy resources
     *
     * @param string[] $channel channel (required)
     * @param string[] $type    type (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\MessagesWithChannel[]
     */
    public function deployUsingPOST($channel, $type)
    {
        [$response] = $this->deployUsingPOSTWithHttpInfo($channel, $type);

        return $response;
    }

    /**
     * Operation deployUsingPOSTWithHttpInfo
     *
     * Deploy resources
     *
     * @param string[] $channel channel (required)
     * @param string[] $type    type (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\MessagesWithChannel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function deployUsingPOSTWithHttpInfo($channel, $type)
    {
        $request = $this->deployUsingPOSTRequest($channel, $type);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\MessagesWithChannel[]');
    }

    /**
     * Operation deployUsingPOSTAsync
     *
     * Deploy resources
     *
     * @param string[] $channel channel (required)
     * @param string[] $type    type (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deployUsingPOSTAsync($channel, $type)
    {
        return $this->deployUsingPOSTAsyncWithHttpInfo($channel, $type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deployUsingPOSTAsyncWithHttpInfo
     *
     * Deploy resources
     *
     * @param string[] $channel channel (required)
     * @param string[] $type    type (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deployUsingPOSTAsyncWithHttpInfo($channel, $type)
    {
        $request = $this->deployUsingPOSTRequest($channel, $type);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\MessagesWithChannel[]');
    }

    /**
     * Operation flushCacheUsingPOST
     *
     * Flush the cache
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function flushCacheUsingPOST($channel = null): void
    {
        $this->flushCacheUsingPOSTWithHttpInfo($channel);
    }

    /**
     * Operation flushCacheUsingPOSTWithHttpInfo
     *
     * Flush the cache
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function flushCacheUsingPOSTWithHttpInfo($channel = null)
    {
        $request = $this->flushCacheUsingPOSTRequest($channel);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation flushCacheUsingPOSTAsync
     *
     * Flush the cache
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function flushCacheUsingPOSTAsync($channel = null)
    {
        return $this->flushCacheUsingPOSTAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation flushCacheUsingPOSTAsyncWithHttpInfo
     *
     * Flush the cache
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function flushCacheUsingPOSTAsyncWithHttpInfo($channel = null)
    {
        $request = $this->flushCacheUsingPOSTRequest($channel);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception): void {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
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

    /**
     * Operation flushLogsUsingPOST
     *
     * Flush the log files
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function flushLogsUsingPOST(): void
    {
        $this->flushLogsUsingPOSTWithHttpInfo();
    }

    /**
     * Operation flushLogsUsingPOSTWithHttpInfo
     *
     * Flush the log files
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function flushLogsUsingPOSTWithHttpInfo()
    {
        $request = $this->flushLogsUsingPOSTRequest();

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation flushLogsUsingPOSTAsync
     *
     * Flush the log files
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function flushLogsUsingPOSTAsync()
    {
        return $this->flushLogsUsingPOSTAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation flushLogsUsingPOSTAsyncWithHttpInfo
     *
     * Flush the log files
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function flushLogsUsingPOSTAsyncWithHttpInfo()
    {
        $request = $this->flushLogsUsingPOSTRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception): void {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
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

    /**
     * Operation getExpirationMessagesUsingGET
     *
     * Get expiration messages
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\ExpirationMessage[]
     */
    public function getExpirationMessagesUsingGET($channel = null)
    {
        [$response] = $this->getExpirationMessagesUsingGETWithHttpInfo($channel);

        return $response;
    }

    /**
     * Operation getExpirationMessagesUsingGETWithHttpInfo
     *
     * Get expiration messages
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\ExpirationMessage[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getExpirationMessagesUsingGETWithHttpInfo($channel = null)
    {
        $request = $this->getExpirationMessagesUsingGETRequest($channel);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\ExpirationMessage[]');
    }

    /**
     * Operation getExpirationMessagesUsingGETAsync
     *
     * Get expiration messages
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getExpirationMessagesUsingGETAsync($channel = null)
    {
        return $this->getExpirationMessagesUsingGETAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getExpirationMessagesUsingGETAsyncWithHttpInfo
     *
     * Get expiration messages
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getExpirationMessagesUsingGETAsyncWithHttpInfo($channel = null)
    {
        $request = $this->getExpirationMessagesUsingGETRequest($channel);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\ExpirationMessage[]');
    }

    /**
     * Operation resetLogLevelUsingPOST
     *
     * Resets the log level to the original level
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function resetLogLevelUsingPOST(): void
    {
        $this->resetLogLevelUsingPOSTWithHttpInfo();
    }

    /**
     * Operation resetLogLevelUsingPOSTWithHttpInfo
     *
     * Resets the log level to the original level
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function resetLogLevelUsingPOSTWithHttpInfo()
    {
        $request = $this->resetLogLevelUsingPOSTRequest();

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation resetLogLevelUsingPOSTAsync
     *
     * Resets the log level to the original level
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function resetLogLevelUsingPOSTAsync()
    {
        return $this->resetLogLevelUsingPOSTAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation resetLogLevelUsingPOSTAsyncWithHttpInfo
     *
     * Resets the log level to the original level
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function resetLogLevelUsingPOSTAsyncWithHttpInfo()
    {
        $request = $this->resetLogLevelUsingPOSTRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception): void {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
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

    /**
     * Create request for operation 'changeLogLevelUsingPOST'
     *
     * @param string $log_level logLevel (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function changeLogLevelUsingPOSTRequest($log_level)
    {
        // verify the required parameter 'log_level' is set
        if ($log_level === null || (\is_array($log_level) && \count($log_level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $log_level when calling changeLogLevelUsingPOST'
            );
        }

        $resourcePath = '/rest/v4/management/changeLogLevel';
        $queryParams = [];
        // query params
        if ($log_level !== null) {
            $queryParams['logLevel'] = ObjectSerializer::toQueryValue($log_level);
        }

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'deployUsingPOST'
     *
     * @param string[] $channel channel (required)
     * @param string[] $type    type (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function deployUsingPOSTRequest($channel, $type)
    {
        // verify the required parameter 'channel' is set
        if (empty($channel)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling deployUsingPOST'
            );
        }
        // verify the required parameter 'type' is set
        if ($type === null || (\is_array($type) && \count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling deployUsingPOST'
            );
        }

        $resourcePath = '/rest/v4/management/deploy';
        $queryParams = [];
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }
        // query params
        if (\is_array($type)) {
            $queryParams['type'] = $type;
        } elseif ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'flushCacheUsingPOST'
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function flushCacheUsingPOSTRequest($channel = null)
    {
        $resourcePath = '/rest/v4/management/flushCache';
        $queryParams = [];
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'flushLogsUsingPOST'
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function flushLogsUsingPOSTRequest()
    {
        $resourcePath = '/rest/v4/management/flushLogs';

        return $this->postQuery($resourcePath, [], '', true);
    }

    /**
     * Create request for operation 'getExpirationMessagesUsingGET'
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getExpirationMessagesUsingGETRequest($channel = null)
    {
        $resourcePath = '/rest/v4/management/expiration';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'resetLogLevelUsingPOST'
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function resetLogLevelUsingPOSTRequest()
    {
        $resourcePath = '/rest/v4/management/resetLogLevel';

        return $this->postQuery($resourcePath, [], '', true);
    }
}
