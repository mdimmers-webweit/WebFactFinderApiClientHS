<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V1;

use GuzzleHttp6\Client;
use GuzzleHttp6\Promise\Promise;
use Monolog\Logger;
use Web\FactFinderApi\Client\V1\Api\TrackingApi;
use Web\FactFinderApi\Client\V1\Model\CartOrCheckoutEvent;

class TrackingApiTest extends AbstractTestCase
{
    /**
     * @var TrackingApi
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new TrackingApi(new Client(), $this->getConfiguration(), new Logger('dummy'));
    }

    /** @test */
    public function itShouldPassTrackCartUsingPOSTWithHttpInfo(): void
    {
        $events = [new CartOrCheckoutEvent([
            'campaign' => 'string',
            'count' => 2,
            'id' => 'string',
            'master_id' => 'string',
            'price' => 0,
            'sid' => 'string',
            'title' => 'string',
            'user_id' => 'string',
        ])];

        $result = $this->sut->trackCartUsingPOSTWithHttpInfo('de', $events);
        static::assertNull($result[0]);
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldPassFullSyncUsingPOSTAsync(): void
    {
        $events = [new CartOrCheckoutEvent([
            'campaign' => 'string',
            'count' => 2,
            'id' => 'string',
            'master_id' => 'string',
            'price' => 0,
            'sid' => 'string',
            'title' => 'string',
            'user_id' => 'string',
        ])];

        $promise = $this->sut->trackCartUsingPOSTAsyncWithHttpInfo('de', $events);
        static::assertInstanceOf(Promise::class, $promise);
        static::assertEquals('pending', $promise->getState());
        $result = $promise->wait();
        static::assertEquals('fulfilled', $promise->getState());
        static::assertNull($result[0]);
        static::assertEquals(200, $result[1]);
    }

    /** @test */
    public function itShouldPassTrackCheckoutUsingPOSTWithHttpInfo(): void
    {
        $events = [new CartOrCheckoutEvent([
            'campaign' => 'string',
            'count' => 2,
            'id' => 'string',
            'master_id' => 'string',
            'price' => 0,
            'sid' => 'string',
            'title' => 'string',
            'user_id' => 'string',
        ])];
        $result = $this->sut->trackCheckoutUsingPOSTWithHttpInfo('de', $events);

        static::assertNull($result[0]);
        static::assertEquals(200, $result[1]);
    }
}
