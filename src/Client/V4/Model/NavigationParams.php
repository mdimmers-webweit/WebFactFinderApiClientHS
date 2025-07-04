<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\NavigationParamsBase;

/**
 * NavigationParams Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class NavigationParams extends NavigationParamsBase implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        $result = parent::swaggerTypes();

        $result += [
            'location' => static::getModelClass('Location'),
            'market_id' => static::getModelClass('Filter'),
            'max_count_variants' => 'int',
        ];

        return $result;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        $result = parent::attributeMap();

        $result += [
            'location' => 'location',
            'market_id' => 'marketId',
            'max_count_variants' => 'maxCountVariants',
        ];

        return $result;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if (!\is_null($this->container['hits_per_page']) && ($this->container['hits_per_page'] < 0)) {
            $invalidProperties[] = "invalid value for 'hits_per_page', must be bigger than or equal to 0.";
        }

        if (!\is_null($this->container['page']) && ($this->container['page'] < 1)) {
            $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * @param int|null $hits_per_page number of products on a single page
     *
     * @return $this
     */
    public function setHitsPerPage(?int $hits_per_page = null)
    {
        if (!\is_null($hits_per_page) && ($hits_per_page < 0)) {
            throw new \InvalidArgumentException('invalid value for $hits_per_page when calling NavigationParams., must be bigger than or equal to 0.');
        }

        $this->container['hits_per_page'] = $hits_per_page;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Location $location the location of the search user
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Filter
     */
    public function getMarketId()
    {
        return $this->container['market_id'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Filter $market_id The special filter on market Id. Filters products based on the id of the markets the product is related to.
     *
     * @return $this
     */
    public function setMarketId($market_id)
    {
        $this->container['market_id'] = $market_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCountVariants()
    {
        return $this->container['max_count_variants'];
    }

    /**
     * @param int $max_count_variants defines the maximum number of variants to be returned in the result
     *
     * @return $this
     */
    public function setMaxCountVariants($max_count_variants)
    {
        $this->container['max_count_variants'] = $max_count_variants;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * @param int $page the page to be requested within the search result
     *
     * @return $this
     */
    public function setPage($page)
    {
        if (!\is_null($page) && ($page < 1)) {
            throw new \InvalidArgumentException('invalid value for $page when calling NavigationParams., must be bigger than or equal to 1.');
        }

        $this->container['page'] = $page;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SortItem[]
     */
    public function getSortItems()
    {
        return $this->container['sort_items'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SortItem[] $sort_items specifies the sort order for the search result
     *
     * @return $this
     */
    public function setSortItems($sort_items)
    {
        $this->container['sort_items'] = $sort_items;

        return $this;
    }
}
