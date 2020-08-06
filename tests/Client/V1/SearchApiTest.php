<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V1;

use GuzzleHttp6\Client;
use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\V1\Api\SearchApi;
use Web\FactFinderApi\Client\V1\Model\CustomParameter;
use Web\FactFinderApi\Client\V1\Model\Filter;
use Web\FactFinderApi\Client\V1\Model\FilterValue;
use Web\FactFinderApi\Client\V1\Model\Result;
use Web\FactFinderApi\Client\V1\Model\SearchParams;
use Web\FactFinderApi\Client\V1\Model\SearchRequest;

class SearchApiTest extends AbstractTestCase
{
    /**
     * @var SearchApi
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new SearchApi(new Client(), $this->getConfiguration());
    }

    /** @test */
    public function itShouldReturnSearchResult(): void
    {
        $searchRequest = new SearchRequest(['params' => ['channel' => $this->getChannel(), 'query' => 'test', 'page' => 1]]);

        $result = $this->sut->searchUsingPOST($searchRequest);

        static::assertInstanceOf(Result::class, $result);
    }

    /** @test */
    public function itShouldThrowApiException(): void
    {
        $this->expectException(ApiException::class);
        $searchRequest = new SearchRequest(['params' => ['channel' => 'qwerty', 'query' => 'test', 'page' => -1]]);

        $result = $this->sut->searchUsingPOST($searchRequest);
    }

    /** @test */
    public function itShouldReturnNavigationResult(): void
    {
        $params = new SearchParams();
        $params->setChannel($this->getChannel());
        $params->setPage(1);

        $categoryValue = new FilterValue();
        $categoryValue->setValue('Beispiele');
        $categoryValue->setType(FilterValue::TYPE__AND);
        $categoryValue->setExclude(false);

        $categoryFilter = new Filter();
        $categoryFilter->setName('CategoryPathROOT');
        $categoryFilter->setValues([$categoryValue]);

        $params->setFilters([$categoryFilter]);

        $navigation = new CustomParameter();
        $navigation->setName('navigation');
        $navigation->setValues(['true']);

        $params->setCustomParameters([$navigation]);

        $searchRequest = new SearchRequest(['params' => $params]);

        $result = $this->sut->searchUsingPOST($searchRequest);

        static::assertInstanceOf(Result::class, $result);
    }
}
