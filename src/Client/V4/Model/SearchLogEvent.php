<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SearchLogEvent Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SearchLogEvent extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'additional_info' => 'string',
            'custom_sorting' => 'bool',
            'filters' => static::getModelClass('Filter', true),
            'hit_count' => 'int',
            'id' => 'string',
            'master_id' => 'string',
            'max_score' => 'int',
            'min_score' => 'int',
            'page' => 'int',
            'page_size' => 'int',
            'query' => 'string',
            'search_field' => 'string',
            'search_time' => 'int',
            'sid' => 'string',
            'title' => 'string',
            'user_id' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'additional_info' => 'additionalInfo',
            'custom_sorting' => 'customSorting',
            'filters' => 'filters',
            'hit_count' => 'hitCount',
            'id' => 'id',
            'master_id' => 'masterId',
            'max_score' => 'maxScore',
            'min_score' => 'minScore',
            'page' => 'page',
            'page_size' => 'pageSize',
            'query' => 'query',
            'search_field' => 'searchField',
            'search_time' => 'searchTime',
            'sid' => 'sid',
            'title' => 'title',
            'user_id' => 'userId',
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

        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['hit_count'] === null) {
            $invalidProperties[] = "'hit_count' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['max_score'] === null) {
            $invalidProperties[] = "'max_score' can't be null";
        }
        if ($this->container['min_score'] === null) {
            $invalidProperties[] = "'min_score' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
        }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if ($this->container['search_time'] === null) {
            $invalidProperties[] = "'search_time' can't be null";
        }
        if ($this->container['sid'] === null) {
            $invalidProperties[] = "'sid' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * @param string $additional_info additional information that should be logged
     *
     * @return $this
     */
    public function setAdditionalInfo($additional_info)
    {
        $this->container['additional_info'] = $additional_info;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCustomSorting()
    {
        return $this->container['custom_sorting'];
    }

    /**
     * @param bool $custom_sorting set to true, if the search result was sorted using a custom sorting order, otherwise false
     *
     * @return $this
     */
    public function setCustomSorting($custom_sorting)
    {
        $this->container['custom_sorting'] = $custom_sorting;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Filter[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Filter[] $filters the filters active in the search result
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * @return int
     */
    public function getHitCount()
    {
        return $this->container['hit_count'];
    }

    /**
     * @param int $hit_count the total number of products in the search result
     *
     * @return $this
     */
    public function setHitCount($hit_count)
    {
        $this->container['hit_count'] = $hit_count;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * @param string $id the ID of the product
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getMasterId()
    {
        return $this->container['master_id'];
    }

    /**
     * @param string $master_id contains the master ID, if the article is a variant and 'ID' refers to the variant
     *
     * @return $this
     */
    public function setMasterId($master_id)
    {
        $this->container['master_id'] = $master_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxScore()
    {
        return $this->container['max_score'];
    }

    /**
     * @param int $max_score the score of the first product in the result
     *
     * @return $this
     */
    public function setMaxScore($max_score)
    {
        $this->container['max_score'] = $max_score;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinScore()
    {
        return $this->container['min_score'];
    }

    /**
     * @param int $min_score the score of the last product in the result
     *
     * @return $this
     */
    public function setMinScore($min_score)
    {
        $this->container['min_score'] = $min_score;

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
     * @param int $page the page number delivered by the search result
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * @param int $page_size the maximum number of products on a page
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * @param string $query the search term that produced the search result
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchField()
    {
        return $this->container['search_field'];
    }

    /**
     * @param string $search_field contains the name of the search field, if the search was performed on a specific field
     *
     * @return $this
     */
    public function setSearchField($search_field)
    {
        $this->container['search_field'] = $search_field;

        return $this;
    }

    /**
     * @return int
     */
    public function getSearchTime()
    {
        return $this->container['search_time'];
    }

    /**
     * @param int $search_time the time required to produce the results (in ms)
     *
     * @return $this
     */
    public function setSearchTime($search_time)
    {
        $this->container['search_time'] = $search_time;

        return $this;
    }

    /**
     * @return string
     */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
     * @param string $sid the session ID
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->container['sid'] = $sid;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * @param string $title the title of the product
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * @param string $user_id the ID of the user who issued the request
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }
}
