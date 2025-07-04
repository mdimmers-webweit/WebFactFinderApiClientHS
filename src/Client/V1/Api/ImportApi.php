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
use Web\FactFinderApi\Client\Configuration;
use Web\FactFinderApi\Client\ObjectSerializer;

/**
 * ImportApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ImportApi extends ApiClient
{
    /**
     * Operation isImportRunningUsingGET
     *
     * Check if an import is running in any of the supplied channels
     *
     * @param string[] $channel channel (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V1\Model\WrapperBoolean_
     */
    public function isImportRunningUsingGET($channel)
    {
        [$response] = $this->isImportRunningUsingGETWithHttpInfo($channel);

        return $response;
    }

    /**
     * Operation isImportRunningUsingGETWithHttpInfo
     *
     * Check if an import is running in any of the supplied channels
     *
     * @param string[] $channel channel (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V1\Model\WrapperBoolean_, HTTP status code, HTTP response headers (array of strings)
     */
    public function isImportRunningUsingGETWithHttpInfo($channel)
    {
        $request = $this->isImportRunningUsingGETRequest($channel);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V1\Model\WrapperBoolean_::class);
    }

    /**
     * Operation isImportRunningUsingGETAsync
     *
     * Check if an import is running in any of the supplied channels
     *
     * @param string[] $channel channel (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function isImportRunningUsingGETAsync($channel)
    {
        return $this->isImportRunningUsingGETAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation isImportRunningUsingGETAsyncWithHttpInfo
     *
     * Check if an import is running in any of the supplied channels
     *
     * @param string[] $channel channel (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function isImportRunningUsingGETAsyncWithHttpInfo($channel)
    {
        $request = $this->isImportRunningUsingGETRequest($channel);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V1\Model\WrapperBoolean_::class);
    }

    /**
     * Operation startRecommendationImportUsingPOST
     *
     * Start recommendation import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V1\Model\ImportResult
     */
    public function startRecommendationImportUsingPOST($channel = null, bool $quiet = false)
    {
        [$response] = $this->startRecommendationImportUsingPOSTWithHttpInfo($channel, $quiet);

        return $response;
    }

    /**
     * Operation startRecommendationImportUsingPOSTWithHttpInfo
     *
     * Start recommendation import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V1\Model\ImportResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function startRecommendationImportUsingPOSTWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startRecommendationImportUsingPOSTRequest($channel, $quiet);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V1\Model\ImportResult::class);
    }

    /**
     * Operation startRecommendationImportUsingPOSTAsync
     *
     * Start recommendation import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startRecommendationImportUsingPOSTAsync($channel = null, bool $quiet = false)
    {
        return $this->startRecommendationImportUsingPOSTAsyncWithHttpInfo($channel, $quiet)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startRecommendationImportUsingPOSTAsyncWithHttpInfo
     *
     * Start recommendation import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startRecommendationImportUsingPOSTAsyncWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startRecommendationImportUsingPOSTRequest($channel, $quiet);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V1\Model\ImportResult::class);
    }

    /**
     * Operation startSearchImportUsingPOST
     *
     * Start search import
     *
     * @param string[] $channel  channel (optional)
     * @param bool     $download if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet    if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V1\Model\ImportResult
     */
    public function startSearchImportUsingPOST($channel = null, bool $download = false, bool $quiet = false)
    {
        [$response] = $this->startSearchImportUsingPOSTWithHttpInfo($channel, $download, $quiet);

        return $response;
    }

    /**
     * Operation startSearchImportUsingPOSTWithHttpInfo
     *
     * Start search import
     *
     * @param string[] $channel  channel (optional)
     * @param bool     $download if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet    if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V1\Model\ImportResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function startSearchImportUsingPOSTWithHttpInfo($channel = null, bool $download = false, bool $quiet = false)
    {
        $request = $this->startSearchImportUsingPOSTRequest($channel, $download, $quiet);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V1\Model\ImportResult::class);
    }

    /**
     * Operation startSearchImportUsingPOSTAsync
     *
     * Start search import
     *
     * @param string[] $channel  channel (optional)
     * @param bool     $download if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet    if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startSearchImportUsingPOSTAsync($channel = null, bool $download = false, bool $quiet = false)
    {
        return $this->startSearchImportUsingPOSTAsyncWithHttpInfo($channel, $download, $quiet)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startSearchImportUsingPOSTAsyncWithHttpInfo
     *
     * Start search import
     *
     * @param string[] $channel  channel (optional)
     * @param bool     $download if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet    if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startSearchImportUsingPOSTAsyncWithHttpInfo($channel = null, bool $download = false, bool $quiet = false)
    {
        $request = $this->startSearchImportUsingPOSTRequest($channel, $download, $quiet);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V1\Model\ImportResult::class);
    }

    /**
     * Operation startSuggestImportUsingPOST
     *
     * Start suggest import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V1\Model\ImportResult
     */
    public function startSuggestImportUsingPOST($channel = null, bool $quiet = false)
    {
        [$response] = $this->startSuggestImportUsingPOSTWithHttpInfo($channel, $quiet);

        return $response;
    }

    /**
     * Operation startSuggestImportUsingPOSTWithHttpInfo
     *
     * Start suggest import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V1\Model\ImportResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function startSuggestImportUsingPOSTWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startSuggestImportUsingPOSTRequest($channel, $quiet);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V1\Model\ImportResult::class);
    }

    /**
     * Operation startSuggestImportUsingPOSTAsync
     *
     * Start suggest import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startSuggestImportUsingPOSTAsync($channel = null, bool $quiet = false)
    {
        return $this->startSuggestImportUsingPOSTAsyncWithHttpInfo($channel, $quiet)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startSuggestImportUsingPOSTAsyncWithHttpInfo
     *
     * Start suggest import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startSuggestImportUsingPOSTAsyncWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startSuggestImportUsingPOSTRequest($channel, $quiet);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V1\Model\ImportResult::class);
    }

    /**
     * Create request for operation 'isImportRunningUsingGET'
     *
     * @param string[] $channel channel (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function isImportRunningUsingGETRequest($channel)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling isImportRunningUsingGET'
            );
        }

        $resourcePath = '/v1/import/running';
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
     * Create request for operation 'startRecommendationImportUsingPOST'
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function startRecommendationImportUsingPOSTRequest($channel = null, bool $quiet = false)
    {
        $resourcePath = '/v1/import/recommendation';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }
        // query params
        if ($quiet !== null) {
            $queryParams['quiet'] = ObjectSerializer::toQueryValue($quiet);
        }

        return $this->postQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'startSearchImportUsingPOST'
     *
     * @param string[] $channel  channel (optional)
     * @param bool     $download if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet    if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function startSearchImportUsingPOSTRequest($channel = null, bool $download = false, bool $quiet = false)
    {
        $resourcePath = '/v1/import/search';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }
        // query params
        if ($download !== null) {
            $queryParams['download'] = ObjectSerializer::toQueryValue($download);
        }
        // query params
        if ($quiet !== null) {
            $queryParams['quiet'] = ObjectSerializer::toQueryValue($quiet);
        }

        return $this->postQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'startSuggestImportUsingPOST'
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function startSuggestImportUsingPOSTRequest($channel = null, bool $quiet = false)
    {
        $resourcePath = '/v1/import/suggest';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($channel)) {
            $queryParams['channel'] = $channel;
        } elseif ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }
        // query params
        if ($quiet !== null) {
            $queryParams['quiet'] = ObjectSerializer::toQueryValue($quiet);
        }

        return $this->postQuery($resourcePath, $queryParams);
    }
}
