<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V3\Api;

use GuzzleHttp6\Promise\PromiseInterface;
use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\ObjectSerializer;
use Web\FactFinderApi\Client\V3\Model\DatabaseState;
use Web\FactFinderApi\Client\V3\Model\DeltaUpdateResult;

/**
 * ClusterApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ClusterApi extends ApiClient
{
    /**
     * Operation fullSyncUsingPOST
     *
     * Fully synchronize the worldmatch database of this node.
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function fullSyncUsingPOST(): void
    {
        $this->fullSyncUsingPOSTWithHttpInfo();
    }

    /**
     * Operation fullSyncUsingPOSTWithHttpInfo
     *
     * Fully synchronize the worldmatch database of this node.
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function fullSyncUsingPOSTWithHttpInfo(): array
    {
        $resourcePath = '/rest/v3/cluster/database/sync/full';
        $queryParams = [];
        $params = '';
        $returnType = '';
        $request = $this->postQuery($resourcePath, $queryParams, $params);

        return $this->executeRequest($request, $returnType);
    }

    /**
     * Operation fullSyncUsingPOSTAsync
     *
     * Fully synchronize the worldmatch database of this node.
     *
     * @throws \InvalidArgumentException
     */
    public function fullSyncUsingPOSTAsync(): PromiseInterface
    {
        return $this->fullSyncUsingPOSTAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fullSyncUsingPOSTAsyncWithHttpInfo
     *
     * Fully synchronize the worldmatch database of this node.
     *
     * @throws \InvalidArgumentException
     */
    public function fullSyncUsingPOSTAsyncWithHttpInfo(): PromiseInterface
    {
        $resourcePath = '/rest/v3/cluster/database/sync/full';
        $returnType = '';
        $queryParams = [];
        $request = $this->postQuery($resourcePath, $queryParams, '');

        return $this->executeAsyncRequest($request, $returnType);
    }

    /**
     * Operation getDatabaseStateUsingGET
     *
     * Show the current state of the worldmatch database.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     */
    public function getDatabaseStateUsingGET(string $channel): DatabaseState
    {
        list($response) = $this->getDatabaseStateUsingGETWithHttpInfo($channel);

        return $response;
    }

    /**
     * Operation getDatabaseStateUsingGETWithHttpInfo
     *
     * Show the current state of the worldmatch database.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of DatabaseState, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDatabaseStateUsingGETWithHttpInfo(string $channel): array
    {
        $returnType = DatabaseState::class;
        $request = $this->getDatabaseStateUsingGETRequest($channel);

        return $this->executeRequest($request, $returnType);
    }

    /**
     * Operation getDatabaseStateUsingGETAsync
     *
     * Show the current state of the worldmatch database.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     */
    public function getDatabaseStateUsingGETAsync(string $channel): PromiseInterface
    {
        return $this->getDatabaseStateUsingGETAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDatabaseStateUsingGETAsyncWithHttpInfo
     *
     * Show the current state of the worldmatch database.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     */
    public function getDatabaseStateUsingGETAsyncWithHttpInfo(string $channel): PromiseInterface
    {
        $returnType = DatabaseState::class;
        $request = $this->getDatabaseStateUsingGETRequest($channel);

        return $this->executeAsyncRequest($request, $returnType);
    }

    /**
     * Operation pruneUsingPOST
     *
     * Prune delta updates.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     */
    public function pruneUsingPOST(string $channel): string
    {
        list($response) = $this->pruneUsingPOSTWithHttpInfo($channel);

        return $response;
    }

    /**
     * Operation pruneUsingPOSTWithHttpInfo
     *
     * Prune delta updates.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function pruneUsingPOSTWithHttpInfo(string $channel): array
    {
        $returnType = 'string';
        $request = $this->pruneUsingPOSTRequest($channel);

        return $this->executeRequest($request, $returnType);
    }

    /**
     * Operation pruneUsingPOSTAsync
     *
     * Prune delta updates.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     */
    public function pruneUsingPOSTAsync(string $channel): PromiseInterface
    {
        return $this->pruneUsingPOSTAsyncWithHttpInfo($channel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pruneUsingPOSTAsyncWithHttpInfo
     *
     * Prune delta updates.
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     */
    public function pruneUsingPOSTAsyncWithHttpInfo(string $channel): PromiseInterface
    {
        $returnType = 'string';
        $request = $this->pruneUsingPOSTRequest($channel);

        return $this->executeAsyncRequest($request, $returnType);
    }

    /**
     * Operation syncDatabaseUsingPOST
     *
     * Synchronize the worldmatch database of this node.
     *
     * @param string $channel channel (required)
     * @param string $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return DeltaUpdateResult[]
     */
    public function syncDatabaseUsingPOST(string $channel, string $verbose = 'false'): array
    {
        list($response) = $this->syncDatabaseUsingPOSTWithHttpInfo($channel, $verbose);

        return $response;
    }

    /**
     * Operation syncDatabaseUsingPOSTWithHttpInfo
     *
     * Synchronize the worldmatch database of this node.
     *
     * @param string $channel channel (required)
     * @param string $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Web\FactFinderApi\Client\V3\Model\DeltaUpdateResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function syncDatabaseUsingPOSTWithHttpInfo(string $channel, string $verbose = 'false'): array
    {
        $returnType = '\Web\FactFinderApi\Client\V3\Model\DeltaUpdateResult[]';
        $request = $this->syncDatabaseUsingPOSTRequest($channel, $verbose);

        return $this->executeRequest($request, $returnType);
    }

    /**
     * Operation syncDatabaseUsingPOSTAsync
     *
     * Synchronize the worldmatch database of this node.
     *
     * @param string $channel channel (required)
     * @param string $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     */
    public function syncDatabaseUsingPOSTAsync(string $channel, string $verbose = 'false'): PromiseInterface
    {
        return $this->syncDatabaseUsingPOSTAsyncWithHttpInfo($channel, $verbose)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation syncDatabaseUsingPOSTAsyncWithHttpInfo
     *
     * Synchronize the worldmatch database of this node.
     *
     * @param string $channel channel (required)
     * @param string $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     */
    public function syncDatabaseUsingPOSTAsyncWithHttpInfo(string $channel, string $verbose = 'false'): PromiseInterface
    {
        $returnType = '\Web\FactFinderApi\Client\V3\Model\DeltaUpdateResult[]';
        $request = $this->syncDatabaseUsingPOSTRequest($channel, $verbose);

        return $this->executeAsyncRequest($request, $returnType);
    }

    /**
     * Create request for operation 'getDatabaseStateUsingGET'
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function getDatabaseStateUsingGETRequest(string $channel): Request
    {
        $resourcePath = '/rest/v3/cluster/{channel}/database/state';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'pruneUsingPOST'
     *
     * @param string $channel channel (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function pruneUsingPOSTRequest(string $channel): Request
    {
        $resourcePath = '/rest/v3/cluster/{channel}/database/prune';
        $queryParams = [];
        $params = '';
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $params);
    }

    /**
     * Create request for operation 'syncDatabaseUsingPOST'
     *
     * @param string $channel channel (required)
     * @param string $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     */
    protected function syncDatabaseUsingPOSTRequest(string $channel, string $verbose = 'false'): Request
    {
        $resourcePath = '/rest/v3/cluster/{channel}/database/sync';
        $queryParams = [];
        $body = '';
        if ($verbose !== null) {
            $queryParams['verbose'] = ObjectSerializer::toQueryValue($verbose);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $body);
    }
}
