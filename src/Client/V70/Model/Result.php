<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

class Result extends BaseModel
{
    /**
     * Array of property to type mappings. Used for (de)serialization
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
            'result_status' => 'string',
            'result_article_number_status' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'bread_crumb_trail' => 'breadCrumbTrail',
            'campaigns' => 'campaigns',
            'facets' => 'groups', // FactFinder 7.0 uses 'groups'
            'field_roles' => 'fieldRoles',
            'filters' => 'filters',
            'paging' => 'paging',
            'hits' => 'records',
            'search_control_params' => 'searchControlParams',
            'search_params' => 'searchParams',
            'single_word_results' => 'singleWordResults',
            'sort_items' => 'sortsList',
            'timed_out' => 'timedOut',
            'took_total' => 'searchTime',
            'total_hits' => 'resultCount',
            'result_status' => 'resultStatus',
            'result_article_number_status' => 'resultArticleNumberStatus',
        ];
    }

    // Getter und Setter für alle Properties
    public function getBreadCrumbTrail(): array
    {
        return $this->container['bread_crumb_trail'] ?? [];
    }

    public function setBreadCrumbTrail(array $bread_crumb_trail): self
    {
        $this->container['bread_crumb_trail'] = $bread_crumb_trail;
        return $this;
    }

    public function getCampaigns(): array
    {
        return $this->container['campaigns'] ?? [];
    }

    public function setCampaigns(array $campaigns): self
    {
        $this->container['campaigns'] = $campaigns;
        return $this;
    }

    public function getFacets(): array
    {
        return $this->container['facets'] ?? [];
    }

    public function setFacets(array $facets): self
    {
        $this->container['facets'] = $facets;
        return $this;
    }

    public function getFieldRoles(): array
    {
        return $this->container['field_roles'] ?? [];
    }

    public function setFieldRoles(array $field_roles): self
    {
        $this->container['field_roles'] = $field_roles;
        return $this;
    }

    public function getFilters(): array
    {
        return $this->container['filters'] ?? [];
    }

    public function setFilters(array $filters): self
    {
        $this->container['filters'] = $filters;
        return $this;
    }

    public function getPaging(): ?Paging
    {
        return $this->container['paging'];
    }

    public function setPaging(?Paging $paging): self
    {
        $this->container['paging'] = $paging;
        return $this;
    }

    public function getHits(): array
    {
        return $this->container['hits'] ?? [];
    }

    public function setHits(array $hits): self
    {
        $this->container['hits'] = $hits;
        return $this;
    }

    public function getSearchControlParams(): ?SearchControlParams
    {
        return $this->container['search_control_params'];
    }

    public function setSearchControlParams(?SearchControlParams $search_control_params): self
    {
        $this->container['search_control_params'] = $search_control_params;
        return $this;
    }

    public function getSearchParams(): ?SearchParams
    {
        return $this->container['search_params'];
    }

    public function setSearchParams(?SearchParams $search_params): self
    {
        $this->container['search_params'] = $search_params;
        return $this;
    }

    public function getSingleWordResults(): array
    {
        return $this->container['single_word_results'] ?? [];
    }

    public function setSingleWordResults(array $single_word_results): self
    {
        $this->container['single_word_results'] = $single_word_results;
        return $this;
    }

    public function getSortItems(): array
    {
        return $this->container['sort_items'] ?? [];
    }

    public function setSortItems(array $sort_items): self
    {
        $this->container['sort_items'] = $sort_items;
        return $this;
    }

    public function getTimedOut(): bool
    {
        return $this->container['timed_out'] ?? false;
    }

    public function setTimedOut(bool $timed_out): self
    {
        $this->container['timed_out'] = $timed_out;
        return $this;
    }

    public function getTookTotal(): int
    {
        return $this->container['took_total'] ?? 0;
    }

    public function setTookTotal(int $took_total): self
    {
        $this->container['took_total'] = $took_total;
        return $this;
    }

    public function getTotalHits(): int
    {
        return $this->container['total_hits'] ?? 0;
    }

    public function setTotalHits(int $total_hits): self
    {
        $this->container['total_hits'] = $total_hits;
        return $this;
    }

    public function getResultStatus(): string
    {
        return $this->container['result_status'] ?? '';
    }

    public function setResultStatus(string $result_status): self
    {
        $this->container['result_status'] = $result_status;
        return $this;
    }

    public function getResultArticleNumberStatus(): string
    {
        return $this->container['result_article_number_status'] ?? '';
    }

    public function setResultArticleNumberStatus(string $result_article_number_status): self
    {
        $this->container['result_article_number_status'] = $result_article_number_status;
        return $this;
    }
}