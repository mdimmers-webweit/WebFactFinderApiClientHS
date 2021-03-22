<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * PageLink Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class PageLink extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'current_page' => 'bool',
            'number' => 'int',
            'search_params' => static::getModelClass('SearchParams'),
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
            'current_page' => 'currentPage',
            'number' => 'number',
            'search_params' => 'searchParams',
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['current_page'] === null) {
            $invalidProperties[] = "'current_page' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return bool
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * @param bool $current_page true, when this page is the current page
     *
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * @param int $number number of the page in the search result
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SearchParams
     */
    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $search_params define the search that should be executed to produce this page
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }
}
