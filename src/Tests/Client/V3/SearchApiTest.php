<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V3;

use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\V3\Api\SearchApi;
use Web\FactFinderApi\Client\V3\Api\TrackingApi;
use Web\FactFinderApi\Client\V3\Model\CategoryNavigation;
use Web\FactFinderApi\Client\V3\Model\FeedbackEvent;
use Web\FactFinderApi\Client\V3\Model\NavigationRequest;
use Web\FactFinderApi\Client\V3\Model\Result;
use Web\FactFinderApi\Client\V3\Model\ResultSuggestion;
use Web\FactFinderApi\Client\V3\Model\SearchParams;
use Web\FactFinderApi\Client\V3\Model\SearchRequest;

class SearchApiTest extends AbstractTestCase
{
    /**
     * @var SearchApi
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new SearchApi(null, $this->getConfiguration());
    }

    /** @test */
    public function itShouldReturnSearchResult(): void
    {
        $searchRequest = new SearchRequest(['params' => ['channel' => $this->getChannel(), 'query' => '*', 'page' => 1]]);

        $result = $this->sut->searchUsingPOST($searchRequest);

        static::assertInstanceOf(Result::class, $result);
    }

    /** @test */
    public function itShouldThrowApiException(): void
    {
        $this->expectException(ApiException::class);
        $searchRequest = new SearchRequest(['params' => ['channel' => 'qwerty', 'query' => '*', 'page' => -1]]);

        $result = $this->sut->searchUsingPOST($searchRequest);
    }

    /** @test */
    public function itShouldReturnSuggestionResult(): void
    {
        $searchRequest = new SearchParams(['channel' => $this->getChannel(), 'query' => '*', 'page' => 1]);

        $result = $this->sut->getSuggestionsUsingPOST($searchRequest);

        static::assertInstanceOf(ResultSuggestion::class, $result);
    }

    /** @test */
    public function itShouldReturnNavigationResult(): void
    {
        $searchRequest = new NavigationRequest(['params' => ['channel' => $this->getChannel(), 'page' => 1]]);

        $result = $this->sut->navigationUsingPOST($searchRequest);

        static::assertInstanceOf(Result::class, $result);
    }

    /** @test */
    public function itShouldReturnCategoryNavigationResult(): void
    {
        $result = $this->sut->categoryNavigationUsingGET($this->getChannel());

        static::assertInstanceOf(CategoryNavigation::class, $result);
    }
}
