<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\ResultSuggestionBase;
use Web\FactFinderApi\Client\Model\SearchParamsBase;

/**
 * ResultSuggestion Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ResultSuggestion extends ResultSuggestionBase implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'attributes' => 'map[string,object]',
            'hit_count' => 'int',
            'image' => 'string',
            'name' => 'string',
            'score' => 'double',
            'search_params' => SearchParams::class,
            'type' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    public static function attributeMap(): array
    {
        return [
            'attributes' => 'attributes',
            'hit_count' => 'hitCount',
            'image' => 'image',
            'name' => 'name',
            'score' => 'score',
            'search_params' => 'searchParams',
            'type' => 'type',
        ];
    }

    /**
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * @param float $score defines how well the suggestion matches the query
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * @return SearchParams
     */
    public function getSearchParams(): SearchParamsBase
    {
        return $this->container['search_params'];
    }

    /**
     * @param SearchParams $search_params defines the search that should be executed when clicking on Suggest entry
     *
     * @return $this
     */
    public function setSearchParams(SearchParamsBase $search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }
}
