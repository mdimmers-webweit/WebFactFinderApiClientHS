<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V1;

use GuzzleHttp6\Client;
use Monolog\Logger;
use Web\FactFinderApi\Client\V1\Api\ManagementApi;

class ManagementApiTest extends AbstractTestCase
{
    /**
     * @var ManagementApi
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new ManagementApi(new Client(), $this->getConfiguration(), new Logger('dummy'));
    }

    /** @test */
    public function itShouldPassReloadConfigurationUsingPOSTWithHttpInfo(): void
    {
        $result = $this->sut->reloadConfigurationUsingPOSTWithHttpInfo($this->getChannel());
        static::assertNull($result[0]);
        static::assertEquals(200, $result[1]);
    }
}
