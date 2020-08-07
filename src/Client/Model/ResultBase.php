<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

abstract class ResultBase extends BaseModel
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'bread_crumb_trail' => static::getModelClass('BreadCrumbTrailItem', true),
            'campaigns' => static::getModelClass('Campaign', true),
            'facets' => static::getModelClass('Facet', true),
            'field_roles' => 'map[string,string]',
            'filters' => static::getModelClass('Filter', true),
            'paging' => static::getModelClass('Paging'),
            'hits' => static::getModelClass('SearchRecord', true),
            'search_control_params' => static::getModelClass('SearchControlParams'),
            'search_params' => static::getModelClass('SearchParams'),
            'single_word_results' => static::getModelClass('SingleWordSearchResult', true),
            'sort_items' => static::getModelClass('ResultSortItem', true),
            'timed_out' => 'bool',
            'took_total' => 'int',
            'total_hits' => 'int',
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
            'bread_crumb_trail' => 'breadCrumbTrail',
            'campaigns' => 'campaigns',
            'field_roles' => 'fieldRoles',
            'filters' => 'filters',
            'paging' => 'paging',
            'search_control_params' => 'searchControlParams',
            'search_params' => 'searchParams',
            'single_word_results' => 'singleWordResults',
            'sort_items' => 'sortItems',
            'timed_out' => 'timedOut',
            'took_worldmatch' => 'tookWorldmatch',
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

        if ($this->container['bread_crumb_trail'] === null) {
            $invalidProperties[] = "'bread_crumb_trail' can't be null";
        }
        if ($this->container['campaigns'] === null) {
            $invalidProperties[] = "'campaigns' can't be null";
        }
        if ($this->container['facets'] === null) {
            $invalidProperties[] = "'facets' can't be null";
        }
        if ($this->container['field_roles'] === null) {
            $invalidProperties[] = "'field_roles' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
        }
        if ($this->container['score_first_hit'] === null) {
            $invalidProperties[] = "'score_first_hit' can't be null";
        }
        if ($this->container['score_last_hit'] === null) {
            $invalidProperties[] = "'score_last_hit' can't be null";
        }
        if ($this->container['search_control_params'] === null) {
            $invalidProperties[] = "'search_control_params' can't be null";
        }
        if ($this->container['single_word_results'] === null) {
            $invalidProperties[] = "'single_word_results' can't be null";
        }
        if ($this->container['sort_items'] === null) {
            $invalidProperties[] = "'sort_items' can't be null";
        }
        if ($this->container['timed_out'] === null) {
            $invalidProperties[] = "'timed_out' can't be null";
        }
        if ($this->container['took_total'] === null) {
            $invalidProperties[] = "'took_total' can't be null";
        }
        if ($this->container['total_hits'] === null) {
            $invalidProperties[] = "'total_hits' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\BreadCrumbTrailItem[]
     */
    public function getBreadCrumbTrail()
    {
        return $this->container['bread_crumb_trail'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\BreadCrumbTrailItem[] $bread_crumb_trail Describes the actions that lead to the current result. This may be used to return to an intermediate search result.
     *
     * @return $this
     */
    public function setBreadCrumbTrail($bread_crumb_trail)
    {
        $this->container['bread_crumb_trail'] = $bread_crumb_trail;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\Campaign[]
     */
    public function getCampaigns()
    {
        return $this->container['campaigns'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\Campaign[] $campaigns contains the active campaigns for this result
     *
     * @return $this
     */
    public function setCampaigns($campaigns)
    {
        $this->container['campaigns'] = $campaigns;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\Facet[]
     */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\Facet[] $facets the ASN filters (for after search navigation)
     *
     * @return $this
     */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFieldRoles()
    {
        return $this->container['field_roles'];
    }

    /**
     * @param string[] $field_roles A field to role mapping. For example, a field role may be 'brand', meaning that the field contains the manufacturer's name. (key = field role, value = field name)
     *
     * @return $this
     */
    public function setFieldRoles($field_roles)
    {
        $this->container['field_roles'] = $field_roles;

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
     * @param \Web\FactFinderApi\Client\V3\Model\Filter[] $filters the filter applied for this result
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\SearchRecord[]
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\SearchRecord[] $hits the relevant products
     *
     * @return $this
     */
    public function setHits($hits)
    {
        $this->container['hits'] = $hits;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\Paging
     */
    public function getPaging()
    {
        return $this->container['paging'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\Paging $paging defines the paging properties
     *
     * @return $this
     */
    public function setPaging($paging)
    {
        $this->container['paging'] = $paging;

        return $this;
    }

    /**
     * @return float
     */
    public function getScoreFirstHit()
    {
        return $this->container['score_first_hit'];
    }

    /**
     * @param float $score_first_hit the score of the best match in the search result
     *
     * @return $this
     */
    public function setScoreFirstHit($score_first_hit)
    {
        $this->container['score_first_hit'] = $score_first_hit;

        return $this;
    }

    /**
     * @return float
     */
    public function getScoreLastHit()
    {
        return $this->container['score_last_hit'];
    }

    /**
     * @param float $score_last_hit the score of the worst match in the search result
     *
     * @return $this
     */
    public function setScoreLastHit($score_last_hit)
    {
        $this->container['score_last_hit'] = $score_last_hit;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\SearchControlParams
     */
    public function getSearchControlParams()
    {
        return $this->container['search_control_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\SearchControlParams $search_control_params the search control parameters used to generate this search result
     *
     * @return $this
     */
    public function setSearchControlParams($search_control_params)
    {
        $this->container['search_control_params'] = $search_control_params;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\SearchParams
     */
    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\SearchParams $search_params the search parameter used to generate this search result
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\SingleWordSearchResult[]
     */
    public function getSingleWordResults()
    {
        return $this->container['single_word_results'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\SingleWordSearchResult[] $single_word_results contains the result from the single word search
     *
     * @return $this
     */
    public function setSingleWordResults($single_word_results)
    {
        $this->container['single_word_results'] = $single_word_results;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V3\Model\ResultSortItem[]
     */
    public function getSortItems()
    {
        return $this->container['sort_items'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\ResultSortItem[] $sort_items Contains the available sortings
     *
     * @return $this
     */
    public function setSortItems($sort_items)
    {
        $this->container['sort_items'] = $sort_items;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTimedOut()
    {
        return $this->container['timed_out'];
    }

    /**
     * @param bool $timed_out If true, this search took longer than the timeout currently defined. Therefore, the results may not contain all relevant products.
     *
     * @return $this
     */
    public function setTimedOut($timed_out)
    {
        $this->container['timed_out'] = $timed_out;

        return $this;
    }

    /**
     * @return int
     */
    public function getTookTotal()
    {
        return $this->container['took_total'];
    }

    /**
     * @param int $took_total the time required to produce the results in the framework (in ms)
     *
     * @return $this
     */
    public function setTookTotal($took_total)
    {
        $this->container['took_total'] = $took_total;

        return $this;
    }

    /**
     * @return int
     */
    public function getTookWorldmatch()
    {
        return $this->container['took_worldmatch'];
    }

    /**
     * @param int $took_worldmatch the time required to produce the results in the core (in ms)
     *
     * @return $this
     */
    public function setTookWorldmatch($took_worldmatch)
    {
        $this->container['took_worldmatch'] = $took_worldmatch;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalHits()
    {
        return $this->container['total_hits'];
    }

    /**
     * @param int $total_hits total number of items in the search result
     *
     * @return $this
     */
    public function setTotalHits($total_hits)
    {
        $this->container['total_hits'] = $total_hits;

        return $this;
    }
}
