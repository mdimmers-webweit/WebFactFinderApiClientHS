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
     * @return bool
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
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function isImportRunningUsingGETWithHttpInfo($channel)
    {
        $request = $this->isImportRunningUsingGETRequest($channel);

        return $this->executeRequest($request, 'bool');
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

        return $this->executeAsyncRequest($request, 'bool');
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
     * Operation startRankingImportUsingPOST
     *
     * Start ranking import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]
     */
    public function startRankingImportUsingPOST($channel = null, bool $quiet = false)
    {
        [$response] = $this->startRankingImportUsingPOSTWithHttpInfo($channel, $quiet);

        return $response;
    }

    /**
     * Operation startRankingImportUsingPOSTWithHttpInfo
     *
     * Start ranking import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function startRankingImportUsingPOSTWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startRankingImportUsingPOSTRequest($channel, $quiet);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
    }

    /**
     * Operation startRankingImportUsingPOSTAsync
     *
     * Start ranking import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startRankingImportUsingPOSTAsync($channel = null, bool $quiet = false)
    {
        return $this->startRankingImportUsingPOSTAsyncWithHttpInfo($channel, $quiet)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startRankingImportUsingPOSTAsyncWithHttpInfo
     *
     * Start ranking import
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startRankingImportUsingPOSTAsyncWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startRankingImportUsingPOSTRequest($channel, $quiet);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
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
     * @return \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]
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
     * @return array of \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function startRecommendationImportUsingPOSTWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startRecommendationImportUsingPOSTRequest($channel, $quiet);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
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

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
    }

    /**
     * Operation startSearchImportUsingPOST
     *
     * Start search import
     *
     * @param string[] $channel      channel (optional)
     * @param bool     $download     if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet        if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     * @param string   $import_stage IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages (optional, default to FULL)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]
     */
    public function startSearchImportUsingPOST($channel = null, bool $download = false, bool $quiet = false, $import_stage = 'FULL')
    {
        [$response] = $this->startSearchImportUsingPOSTWithHttpInfo($channel, $download, $quiet, $import_stage);

        return $response;
    }

    /**
     * Operation startSearchImportUsingPOSTWithHttpInfo
     *
     * Start search import
     *
     * @param string[] $channel      channel (optional)
     * @param bool     $download     if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet        if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     * @param string   $import_stage IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages (optional, default to FULL)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function startSearchImportUsingPOSTWithHttpInfo($channel = null, bool $download = false, bool $quiet = false, $import_stage = 'FULL')
    {
        $request = $this->startSearchImportUsingPOSTRequest($channel, $download, $quiet, $import_stage);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
    }

    /**
     * Operation startSearchImportUsingPOSTAsync
     *
     * Start search import
     *
     * @param string[] $channel      channel (optional)
     * @param bool     $download     if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet        if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     * @param string   $import_stage IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages (optional, default to FULL)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startSearchImportUsingPOSTAsync($channel = null, bool $download = false, bool $quiet = false, $import_stage = 'FULL')
    {
        return $this->startSearchImportUsingPOSTAsyncWithHttpInfo($channel, $download, $quiet, $import_stage)
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
     * @param string[] $channel      channel (optional)
     * @param bool     $download     if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet        if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     * @param string   $import_stage IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages (optional, default to FULL)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startSearchImportUsingPOSTAsyncWithHttpInfo($channel = null, bool $download = false, bool $quiet = false, $import_stage = 'FULL')
    {
        $request = $this->startSearchImportUsingPOSTRequest($channel, $download, $quiet, $import_stage);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
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
     * @return \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]
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
     * @return array of \Web\FactFinderApi\Client\V4\Model\ImportChannelResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function startSuggestImportUsingPOSTWithHttpInfo($channel = null, bool $quiet = false)
    {
        $request = $this->startSuggestImportUsingPOSTRequest($channel, $quiet);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
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

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\ImportChannelResult[]');
    }

    /**
     * Create request for operation 'isImportRunningUsingGET'
     *
     * @param string[] $channel channel (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function isImportRunningUsingGETRequest($channel)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling isImportRunningUsingGET'
            );
        }

        $resourcePath = '/rest/v4/import/running';
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
     * Create request for operation 'refreshRecommendationDatabasesUsingPOST'
     *
     * @param string[] $channel channel (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function refreshRecommendationDatabasesUsingPOSTRequest($channel = null)
    {
        $resourcePath = '/rest/v4/import/refreshRecommendations';
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
     * Create request for operation 'startRankingImportUsingPOST'
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function startRankingImportUsingPOSTRequest($channel = null, bool $quiet = false)
    {
        $resourcePath = '/rest/v4/import/ranking';
        $queryParams = [];
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

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'startRecommendationImportUsingPOST'
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function startRecommendationImportUsingPOSTRequest($channel = null, bool $quiet = false)
    {
        $resourcePath = '/rest/v4/import/recommendation';
        $queryParams = [];
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

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'startSearchImportUsingPOST'
     *
     * @param string[] $channel      channel (optional)
     * @param bool     $download     if true: causes the import file to be updated first. If no URL is stored in the FACT-Finder configuration, this parameter has no effect. (optional, default to false)
     * @param bool     $quiet        if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     * @param string   $import_stage IMPORT_ONLY only fills the intermediate DB, LOAD_ONLY imports that database into memory, and FULL combines both stages (optional, default to FULL)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function startSearchImportUsingPOSTRequest($channel = null, bool $download = false, bool $quiet = false, $import_stage = 'FULL')
    {
        $resourcePath = '/rest/v4/import/search';
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
        // query params
        if ($import_stage !== null) {
            $queryParams['importStage'] = ObjectSerializer::toQueryValue($import_stage);
        }

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'startSuggestImportUsingPOST'
     *
     * @param string[] $channel channel (optional)
     * @param bool     $quiet   if true: only receive a filled response if an error occurs during the import otherwise the response is just empty (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function startSuggestImportUsingPOSTRequest($channel = null, bool $quiet = false)
    {
        $resourcePath = '/rest/v4/import/suggest';
        $queryParams = [];
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

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }
}
