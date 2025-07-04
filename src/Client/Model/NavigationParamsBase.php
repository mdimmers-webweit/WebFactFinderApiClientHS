<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

/**
 * NavigationParams Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
abstract class NavigationParamsBase extends BaseModel
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'advisor_status' => static::getModelClass('AdvisorCampaignStatusHolder'),
            'channel' => 'string',
            'custom_parameters' => static::getModelClass('CustomParameter', true),
            'filters' => static::getModelClass('Filter', true),
            'hits_per_page' => 'int',
            'page' => 'int',
            'sort_items' => static::getModelClass('SortItem', true),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'advisor_status' => 'advisorStatus',
            'channel' => 'channel',
            'custom_parameters' => 'customParameters',
            'filters' => 'filters',
            'hits_per_page' => 'hitsPerPage',
            'page' => 'page',
            'sort_items' => 'sortItems',
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
     * @return \Web\FactFinderApi\Client\V4\Model\AdvisorCampaignStatusHolder
     */
    public function getAdvisorStatus()
    {
        return $this->container['advisor_status'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\AdvisorCampaignStatusHolder $advisor_status describes the advisor campaign that is currently active
     *
     * @return $this
     */
    public function setAdvisorStatus($advisor_status)
    {
        $this->container['advisor_status'] = $advisor_status;

        return $this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * @param string $channel the channel in which the search should be performed
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\CustomParameter[]
     */
    public function getCustomParameters()
    {
        return $this->container['custom_parameters'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\CustomParameter[] $custom_parameters may be used to provide custom parameters, such as for custom classes
     *
     * @return $this
     */
    public function setCustomParameters($custom_parameters)
    {
        $this->container['custom_parameters'] = $custom_parameters;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Filter[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    public function addFilter(FilterBase $filter): void
    {
        $this->container['filters'][] = $filter;
    }

    /**
     * @param FilterBase[] $filters
     */
    public function addFilters(array $filters): void
    {
        foreach ($filters as $filter) {
            $this->addFilter($filter);
        }
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Filter[] $filters the filters to limit the search result
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
    public function getHitsPerPage()
    {
        return $this->container['hits_per_page'];
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
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * @param int|null $page the page to be requested within the search result
     *
     * @return $this
     */
    abstract public function setPage(?int $page);

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SortItem[]
     */
    public function getSortItems()
    {
        return $this->container['sort_items'];
    }

    public function addSortItem(SortItemBase $sortItem): void
    {
        $this->container['sort_items'][] = $sortItem;
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
