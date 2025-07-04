<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Api;

use GuzzleHttp6\Promise\PromiseInterface;
use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\ObjectSerializer;
use Web\FactFinderApi\Client\V4\Model\DatabaseState;
use Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult;

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
        $resourcePath = '/rest/v4/cluster/database/sync/full';
        $request = $this->postQuery($resourcePath, [], '');

        return $this->executeEmptyRequest($request);
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
        $resourcePath = '/rest/v4/cluster/database/sync/full';
        $request = $this->postQuery($resourcePath, [], '');

        return $this->executeEmptyAsyncRequest($request);
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
        [$response] = $this->getDatabaseStateUsingGETWithHttpInfo($channel);

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
        $request = $this->getDatabaseStateUsingGETRequest($channel);

        return $this->executeRequest($request, DatabaseState::class);
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
        $request = $this->getDatabaseStateUsingGETRequest($channel);

        return $this->executeAsyncRequest($request, DatabaseState::class);
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
        [$response] = $this->pruneUsingPOSTWithHttpInfo($channel);

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
        $request = $this->pruneUsingPOSTRequest($channel);

        return $this->executeRequest($request, 'string');
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
        $request = $this->pruneUsingPOSTRequest($channel);

        return $this->executeAsyncRequest($request, 'string');
    }

    /**
     * Operation syncDatabaseUsingPOST
     *
     * Synchronize the worldmatch database of this node.
     *
     * @param string $channel channel (required)
     * @param bool   $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return DeltaUpdateResult[]
     */
    public function syncDatabaseUsingPOST(string $channel, bool $verbose = false): array
    {
        [$response] = $this->syncDatabaseUsingPOSTWithHttpInfo($channel, $verbose);

        return $response;
    }

    /**
     * Operation syncDatabaseUsingPOSTWithHttpInfo
     *
     * Synchronize the worldmatch database of this node.
     *
     * @param string $channel channel (required)
     * @param bool   $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function syncDatabaseUsingPOSTWithHttpInfo(string $channel, bool $verbose = false): array
    {
        $request = $this->syncDatabaseUsingPOSTRequest($channel, $verbose);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
    }

    /**
     * Operation syncDatabaseUsingPOSTAsync
     *
     * Synchronize the worldmatch database of this node.
     *
     * @param string $channel channel (required)
     * @param bool   $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     */
    public function syncDatabaseUsingPOSTAsync(string $channel, bool $verbose = false): PromiseInterface
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
     * @param bool   $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     */
    public function syncDatabaseUsingPOSTAsyncWithHttpInfo(string $channel, bool $verbose = false): PromiseInterface
    {
        $request = $this->syncDatabaseUsingPOSTRequest($channel, $verbose);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
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
        $resourcePath = '/rest/v4/cluster/{channel}/database/state';
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
        $resourcePath = '/rest/v4/cluster/{channel}/database/prune';
        $queryParams = [];
        $params = '';
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $params);
    }

    /**
     * Create request for operation 'syncDatabaseUsingPOST'
     *
     * @param string $channel channel (required)
     * @param bool   $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     */
    protected function syncDatabaseUsingPOSTRequest(string $channel, bool $verbose = false): Request
    {
        $resourcePath = '/rest/v4/cluster/{channel}/database/sync';
        $queryParams = [];
        $body = '';
        if ($verbose !== null) {
            $queryParams['verbose'] = ObjectSerializer::toQueryValue($verbose);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $body);
    }
}
