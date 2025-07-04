<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

/**
 * FACT-Finder REST-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: V70
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\ResultSuggestionBase;
use Web\FactFinderApi\Client\Model\SearchParamsBase;

/**
 * ResultSuggestion Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ResultSuggestion extends ResultSuggestionBase implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'attributes' => 'map[string,string]',
            'hit_count' => 'int',
            'image' => 'string',
            'name' => 'string',
            'priority' => 'int',
            'search_params' => SearchParams::class,
            'type' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'attributes' => 'attributes',
            'hit_count' => 'hitCount',
            'image' => 'image',
            'name' => 'name',
            'priority' => 'priority',
            'search_params' => 'searchParams',
            'type' => 'type',
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['search_params'] === null) {
            $invalidProperties[] = "'search_params' can't be null";
        }

        return $invalidProperties;
    }

    public function getPriority(): int
    {
        return $this->container['priority'];
    }

    /**
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority(int $priority)
    {
        $this->container['priority'] = $priority;

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
     * @param SearchParams $search_params search_params
     *
     * @return $this
     */
    public function setSearchParams(SearchParamsBase $search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }
}
