<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

abstract class SearchParamsBase extends BaseModel
{
    /**
     * @return \Web\FactFinderApi\Client\V3\Model\AdvisorCampaignStatusHolder
     */
    public function getAdvisorStatus()
    {
        return $this->container['advisor_status'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\AdvisorCampaignStatusHolder $advisor_status describes the advisor campaign that is currently active
     *
     * @return SearchParamsBase
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
     * @return \Web\FactFinderApi\Client\V3\Model\CustomParameter[]
     */
    public function getCustomParameters()
    {
        return $this->container['custom_parameters'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\CustomParameter[] $custom_parameters may be used to provide custom parameters, such as for custom classes
     *
     * @return $this
     */
    public function setCustomParameters($custom_parameters)
    {
        $this->container['custom_parameters'] = $custom_parameters;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\Model\FilterBase[]
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
     * @param \Web\FactFinderApi\Client\Model\FilterBase[] $filters the filters to limit the search result
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
            throw new \InvalidArgumentException('invalid value for $hits_per_page when calling SearchParams., must be bigger than or equal to 0.');
        }

        $this->container['hits_per_page'] = $hits_per_page;

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
     * @param string $query the search term
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
     * @param string $search_field If set, the search term will be looked for only in the given field. Otherwise all searchable fields will be considered (for article number searches, all fields marked as containing article numbers).
     *
     * @return $this
     */
    public function setSearchField($search_field)
    {
        $this->container['search_field'] = $search_field;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\Model\SortItemBase[]
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
     * @param \Web\FactFinderApi\Client\Model\SortItemBase[] $sort_items specifies the sort order for the search result
     *
     * @return $this
     */
    public function setSortItems($sort_items)
    {
        $this->container['sort_items'] = $sort_items;

        return $this;
    }
}
