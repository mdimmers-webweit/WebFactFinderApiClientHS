<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V3;

use GuzzleHttp6\Client;
use Monolog\Logger;
use Web\FactFinderApi\Client\V3\Api\CampaignApi;
use Web\FactFinderApi\Client\V3\Model\Campaign;

class CampaignApiTest extends AbstractTestCase
{
    /**
     * @var CampaignApi
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new CampaignApi(new Client(), $this->getConfiguration(), new Logger('dummy'));
    }

    /** @test */
    public function itShouldReturnCampaignForProduct(): void
    {
        $result = $this->sut->getProductCampaignsUsingGET($this->getChannel(), '9f8c9fbe5ca5471d86b9db98c8e21e15');
        static::assertIsArray($result);
        if (!empty($result)) {
            static::assertInstanceOf(Campaign::class, $result[0]);
        }
    }

    /** @test */
    public function itShouldReturnCampaignForBasket(): void
    {
        $result = $this->sut->getShoppingCartCampaignsUsingGET($this->getChannel(), ['9f8c9fbe5ca5471d86b9db98c8e21e15']);
        static::assertIsArray($result);
        if (!empty($result)) {
            static::assertInstanceOf(Campaign::class, $result[0]);
        }
    }
}
