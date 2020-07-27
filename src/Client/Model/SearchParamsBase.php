<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

abstract class SearchParamsBase extends BaseModel
{
    /**
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->container['advisor_status'] = $data['advisor_status'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['custom_parameters'] = $data['custom_parameters'] ?? null;
        $this->container['filters'] = $data['filters'] ?? null;
        $this->container['page'] = $data['page'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['search_field'] = $data['search_field'] ?? null;
    }

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
     * @return \Web\FactFinderApi\Client\V3\Model\SearchParams
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
     * @return \Web\FactFinderApi\Client\V3\Model\Filter[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\Filter[] $filters the filters to limit the search result
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
     * @param int $page the page to be requested within the search result
     *
     * @return $this
     */
    abstract public function setPage($page);

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
}
