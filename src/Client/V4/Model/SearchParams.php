<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\SearchParamsBase;

/**
 * SearchParams Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SearchParams extends SearchParamsBase implements ModelV4Interface
{
    const ARTICLE_NUMBER_SEARCH_DETECT = 'DETECT';
    const ARTICLE_NUMBER_SEARCH_ALWAYS = 'ALWAYS';
    const ARTICLE_NUMBER_SEARCH_NEVER = 'NEVER';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        $result = parent::swaggerTypes();

        $result += [
            'article_number_search' => 'string',
            'location' => static::getModelClass('Location'),
            'market_id' => static::getModelClass('Filter'),
            'max_count_variants' => 'int',
        ];

        return $result;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    public static function attributeMap(): array
    {
        $result = parent::attributeMap();

        $result += [
            'article_number_search' => 'articleNumberSearch',
            'hits_per_page' => 'hitsPerPage',
            'location' => 'location',
            'market_id' => 'marketId',
            'max_count_variants' => 'maxCountVariants',
            'sort_items' => 'sortItems',
        ];

        return $result;
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getArticleNumberSearchAllowableValues()
    {
        return [
            self::ARTICLE_NUMBER_SEARCH_DETECT,
            self::ARTICLE_NUMBER_SEARCH_ALWAYS,
            self::ARTICLE_NUMBER_SEARCH_NEVER,
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

        $allowedValues = $this->getArticleNumberSearchAllowableValues();
        if (!\is_null($this->container['article_number_search']) && !\in_array($this->container['article_number_search'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'article_number_search', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if (!\is_null($this->container['hits_per_page']) && ($this->container['hits_per_page'] < 0)) {
            $invalidProperties[] = "invalid value for 'hits_per_page', must be bigger than or equal to 0.";
        }

        if (!\is_null($this->container['page']) && ($this->container['page'] < 1)) {
            $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
        }

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getArticleNumberSearch()
    {
        return $this->container['article_number_search'];
    }

    /**
     * @param string|null $article_number_search specifies if the search term should be interpreted as article number
     *
     * @return $this
     */
    public function setArticleNumberSearch(?string $article_number_search)
    {
        $allowedValues = $this->getArticleNumberSearchAllowableValues();
        if (!\is_null($article_number_search) && !\in_array($article_number_search, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'article_number_search', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['article_number_search'] = $article_number_search;

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
     * @param int|null $page the page to be requested within the search result
     *
     * @return $this
     */
    public function setPage(?int $page)
    {
        if (!\is_null($page) && ($page < 1)) {
            throw new \InvalidArgumentException('invalid value for $page when calling SearchParams., must be bigger than or equal to 1.');
        }

        $this->container['page'] = $page;

        return $this;
    }
}
