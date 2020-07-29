<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V1;

use GuzzleHttp6\Client;
use Web\FactFinderApi\Client\V1\Api\SuggestApi;
use Web\FactFinderApi\Client\V1\Model\Params;

class SuggestApiTest extends AbstractTestCase
{
    /**
     * @var SuggestApi
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new SuggestApi(new Client(), $this->getConfiguration());
    }

    /** @test */
    public function itShouldReturnSuggestionResult(): void
    {
        $searchRequest = new Params(['channel' => $this->getChannel(), 'query' => 'bei', 'page' => 1]);

        $result = $this->sut->getSuggestionsUsingPOST($searchRequest);

        static::assertIsArray($result);
    }
}
