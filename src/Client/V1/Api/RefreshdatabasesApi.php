<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

/**
 * FACT-Finder REST-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

namespace Web\FactFinderApi\Client\V1\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\ObjectSerializer;

/**
 * RefreshdatabasesApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class RefreshdatabasesApi extends ApiClient
{
    /**
     * Operation refreshAllDatabasesUsingPOST
     *
     * Refresh all databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function refreshAllDatabasesUsingPOST($channel = null): void
    {
        $this->refreshAllDatabasesUsingPOSTWithHttpInfo($channel);
    }

    /**
     * Operation refreshAllDatabasesUsingPOSTWithHttpInfo
     *
     * Refresh all databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshAllDatabasesUsingPOSTWithHttpInfo($channel = null)
    {
        $request = $this->refreshAllDatabasesUsingPOSTRequest($channel);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation refreshAllDatabasesUsingPOSTAsync
     *
     * Refresh all databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshAllDatabasesUsingPOSTAsync($channel = null)
    {
        return $this->refreshAllDatabasesUsingPOSTAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refreshAllDatabasesUsingPOSTAsyncWithHttpInfo
     *
     * Refresh all databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshAllDatabasesUsingPOSTAsyncWithHttpInfo($channel = null)
    {
        $request = $this->refreshAllDatabasesUsingPOSTRequest($channel);

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
     * Operation refreshRecommendationDatabasesUsingPOST
     *
     * Refresh recommendation databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function refreshRecommendationDatabasesUsingPOST($channel = null): void
    {
        $this->refreshRecommendationDatabasesUsingPOSTWithHttpInfo($channel);
    }

    /**
     * Operation refreshRecommendationDatabasesUsingPOSTWithHttpInfo
     *
     * Refresh recommendation databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshRecommendationDatabasesUsingPOSTWithHttpInfo($channel = null)
    {
        $request = $this->refreshRecommendationDatabasesUsingPOSTRequest($channel);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation refreshRecommendationDatabasesUsingPOSTAsync
     *
     * Refresh recommendation databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshRecommendationDatabasesUsingPOSTAsync($channel = null)
    {
        return $this->refreshRecommendationDatabasesUsingPOSTAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refreshRecommendationDatabasesUsingPOSTAsyncWithHttpInfo
     *
     * Refresh recommendation databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshRecommendationDatabasesUsingPOSTAsyncWithHttpInfo($channel = null)
    {
        $request = $this->refreshRecommendationDatabasesUsingPOSTRequest($channel);

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
     * Operation refreshSearchDatabasesUsingPOST
     *
     * Refresh search databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function refreshSearchDatabasesUsingPOST($channel = null): void
    {
        $this->refreshSearchDatabasesUsingPOSTWithHttpInfo($channel);
    }

    /**
     * Operation refreshSearchDatabasesUsingPOSTWithHttpInfo
     *
     * Refresh search databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshSearchDatabasesUsingPOSTWithHttpInfo($channel = null)
    {
        $request = $this->refreshSearchDatabasesUsingPOSTRequest($channel);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation refreshSearchDatabasesUsingPOSTAsync
     *
     * Refresh search databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshSearchDatabasesUsingPOSTAsync($channel = null)
    {
        return $this->refreshSearchDatabasesUsingPOSTAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refreshSearchDatabasesUsingPOSTAsyncWithHttpInfo
     *
     * Refresh search databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshSearchDatabasesUsingPOSTAsyncWithHttpInfo($channel = null)
    {
        $request = $this->refreshSearchDatabasesUsingPOSTRequest($channel);

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
     * Operation refreshSuggestDatabasesUsingPOST
     *
     * Refresh suggest databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function refreshSuggestDatabasesUsingPOST($channel = null): void
    {
        $this->refreshSuggestDatabasesUsingPOSTWithHttpInfo($channel);
    }

    /**
     * Operation refreshSuggestDatabasesUsingPOSTWithHttpInfo
     *
     * Refresh suggest databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshSuggestDatabasesUsingPOSTWithHttpInfo($channel = null)
    {
        $request = $this->refreshSuggestDatabasesUsingPOSTRequest($channel);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation refreshSuggestDatabasesUsingPOSTAsync
     *
     * Refresh suggest databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshSuggestDatabasesUsingPOSTAsync($channel = null)
    {
        return $this->refreshSuggestDatabasesUsingPOSTAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refreshSuggestDatabasesUsingPOSTAsyncWithHttpInfo
     *
     * Refresh suggest databases
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function refreshSuggestDatabasesUsingPOSTAsyncWithHttpInfo($channel = null)
    {
        $request = $this->refreshSuggestDatabasesUsingPOSTRequest($channel);

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
     * Create request for operation 'refreshAllDatabasesUsingPOST'
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function refreshAllDatabasesUsingPOSTRequest($channel = null)
    {
        $resourcePath = '/v1/refreshdatabases/all';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }

        return $this->postQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'refreshRecommendationDatabasesUsingPOST'
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function refreshRecommendationDatabasesUsingPOSTRequest($channel = null)
    {
        $resourcePath = '/v1/refreshdatabases/recommendation';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }

        return $this->postQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'refreshSearchDatabasesUsingPOST'
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function refreshSearchDatabasesUsingPOSTRequest($channel = null)
    {
        $resourcePath = '/v1/refreshdatabases/search';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }

        return $this->postQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'refreshSuggestDatabasesUsingPOST'
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function refreshSuggestDatabasesUsingPOSTRequest($channel = null)
    {
        $resourcePath = '/v1/refreshdatabases/suggest';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }

        return $this->postQuery($resourcePath, $queryParams);
    }
}
