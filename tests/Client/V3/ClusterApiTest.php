<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V3;

use GuzzleHttp6\Client;
use GuzzleHttp6\Promise\Promise;
use Monolog\Logger;
use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\V3\Api\ClusterApi;
use Web\FactFinderApi\Client\V3\Model\DatabaseState;

class ClusterApiTest extends AbstractTestCase
{
    /**
     * @var ClusterApi
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new ClusterApi(new Client(), $this->getConfiguration(), new Logger('dummy'));
    }

    /** @test */
    public function itShouldPassFullSyncUsingPOSTWithHttpInfo(): void
    {
        $result = $this->sut->fullSyncUsingPOSTWithHttpInfo();
        static::assertNull($result[0]);
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldPassFullSyncUsingPOSTAsync(): void
    {
        $promise = $this->sut->fullSyncUsingPOSTAsync();
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());
        static::assertNull($result);
    }

    /** @test */
    public function itShouldPassFullSyncUsingPOSTAsyncWithHttpInfo(): void
    {
        $promise = $this->sut->fullSyncUsingPOSTAsyncWithHttpInfo();
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());
        static::assertNull($result[0]);
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldGetDatabaseStateUsingGETWithHttpInfo(): void
    {
        $state = $this->sut->getDatabaseStateUsingGETWithHttpInfo('de');

        static::assertIsArray($state);
        static::assertInstanceOf(DatabaseState::class, $state[0]);
        static::assertEquals(0, $state[0]->getDeltaErrorCount());
        static::assertEquals(0, $state[0]->getDeltaVersion());
        static::assertEquals(200, $state[1]);
    }

    /** @test */
    public function itShouldThrowExceptionWhenGetDatabaseStateUsingGETWithHttpInfo(): void
    {
        $this->expectException(ApiException::class);
        $this->sut->getDatabaseStateUsingGETWithHttpInfo('ded');
    }

    /** @test */
    public function itShouldThrowExceptionWhenGetDatabaseStateUsingGETWithHttpInfoInner(): void
    {
        try {
            $this->sut->getDatabaseStateUsingGETWithHttpInfo('fake');
        } catch (ApiException $e) {
            static::assertEquals('{"error":"Bad Request","errorDescription":"Channel \'fake\' does not exist."}', $e->getResponseBody());
        }
    }

    /** @test */
    public function itShouldGetDatabaseStateUsingGETAsync(): void
    {
        $promise = $this->sut->getDatabaseStateUsingGETAsync('de');
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());

        static::assertEquals(0, $result->getDeltaErrorCount());
        static::assertEquals(0, $result->getDeltaVersion());
        static::assertInstanceOf(DatabaseState::class, $result);
    }

    /** @test */
    public function itShouldGetDatabaseStateUsingGETAsyncWithHttpInfo(): void
    {
        $promise = $this->sut->getDatabaseStateUsingGETAsyncWithHttpInfo('de');
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());

        static::assertIsArray($result);
        static::assertInstanceOf(DatabaseState::class, $result[0]);
        static::assertEquals(0, $result[0]->getDeltaErrorCount());
        static::assertEquals(0, $result[0]->getDeltaVersion());
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldPruneUsingPOST(): void
    {
        $result = $this->sut->pruneUsingPOST('de');
        static::assertEquals('"delta updates pruned."', $result);
    }

    /** @test */
    public function itShouldPruneUsingPOSTWithHttpInfo(): void
    {
        $result = $this->sut->pruneUsingPOSTWithHttpInfo('de');
        static::assertIsArray($result);
        static::assertEquals('"delta updates pruned."', $result[0]);
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldPruneUsingPOSTAsync(): void
    {
        $promise = $this->sut->pruneUsingPOSTAsync('de');
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());
        static::assertEquals('"delta updates pruned."', $result);
    }

    /** @test */
    public function itShouldPruneUsingPOSTAsyncWithHttpInfo(): void
    {
        $promise = $this->sut->pruneUsingPOSTAsyncWithHttpInfo('de');
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());
        static::assertIsArray($result);
        static::assertEquals('"delta updates pruned."', $result[0]);
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldThrowExceptionWhenPruneUsingPOSTAsyncWithHttpInfo(): void
    {
        $this->expectException(ApiException::class);
        $promise = $this->sut->pruneUsingPOSTAsyncWithHttpInfo('fake');
        $promise->wait();
    }

    /** @test */
    public function itShouldSyncDatabaseUsingPOST(): void
    {
        $result = $this->sut->syncDatabaseUsingPOST('de', false);
        static::assertIsArray($result);
    }

    /** @test */
    public function itShouldSyncDatabaseUsingPOSTWithHttpInfo(): void
    {
        $result = $this->sut->syncDatabaseUsingPOSTWithHttpInfo('de', false);
        static::assertIsArray($result);
        static::assertEquals([], $result[0]);
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldSyncDatabaseUsingPOSTAsync(): void
    {
        $promise = $this->sut->syncDatabaseUsingPOSTAsync('de', true);
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());
        static::assertIsArray($result);
    }
}
