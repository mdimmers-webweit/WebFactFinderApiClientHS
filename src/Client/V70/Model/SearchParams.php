<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

class SearchParams extends BaseModel
{
    public static function swaggerTypes(): array
    {
        return [
            'channel' => 'string',
            'query' => 'string',
            'page' => 'int',
            'hits_per_page' => 'int',
            'search_field' => 'string',
            'filters' => static::getModelClass('Filter', true),
            'sort_items' => static::getModelClass('SortItem', true),
            'advisor_status' => static::getModelClass('AdvisorCampaignStatusHolder'),
            'custom_parameters' => static::getModelClass('CustomParameter', true),
            'follow_search' => 'int',
            'no_article_number_search' => 'bool',
            'seo_path' => 'string',
        ];
    }

    public static function attributeMap(): array
    {
        return [
            'channel' => 'channel',
            'query' => 'query',
            'page' => 'page',
            'hits_per_page' => 'productsPerPage',
            'search_field' => 'searchField',
            'filters' => 'filters',
            'sort_items' => 'sortsList',
            'advisor_status' => 'advisorStatus',
            'custom_parameters' => 'customParameters',
            'follow_search' => 'followSearch',
            'no_article_number_search' => 'noArticleNumberSearch',
            'seo_path' => 'seoPath',
        ];
    }

    public function getChannel(): ?string
    {
        return $this->container['channel'];
    }

    public function setChannel(?string $channel): self
    {
        $this->container['channel'] = $channel;
        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->container['query'];
    }

    public function setQuery(?string $query): self
    {
        $this->container['query'] = $query;
        return $this;
    }

    public function getPage(): ?int
    {
        return $this->container['page'];
    }

    public function setPage(?int $page): self
    {
        $this->container['page'] = $page;
        return $this;
    }

    public function getHitsPerPage(): ?int
    {
        return $this->container['hits_per_page'];
    }

    public function setHitsPerPage(?int $hits_per_page): self
    {
        $this->container['hits_per_page'] = $hits_per_page;
        return $this;
    }

    public function getSearchField(): ?string
    {
        return $this->container['search_field'];
    }

    public function setSearchField(?string $search_field): self
    {
        $this->container['search_field'] = $search_field;
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

    public function addFilter(Filter $filter): self
    {
        $this->container['filters'][] = $filter;
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

    public function addSortItem(SortItem $sort_item): self
    {
        $this->container['sort_items'][] = $sort_item;
        return $this;
    }

    public function getAdvisorStatus(): ?AdvisorCampaignStatusHolder
    {
        return $this->container['advisor_status'];
    }

    public function setAdvisorStatus(?AdvisorCampaignStatusHolder $advisor_status): self
    {
        $this->container['advisor_status'] = $advisor_status;
        return $this;
    }

    public function getCustomParameters(): array
    {
        return $this->container['custom_parameters'] ?? [];
    }

    public function setCustomParameters(array $custom_parameters): self
    {
        $this->container['custom_parameters'] = $custom_parameters;
        return $this;
    }

    public function getFollowSearch(): ?int
    {
        return $this->container['follow_search'];
    }

    public function setFollowSearch(?int $follow_search): self
    {
        $this->container['follow_search'] = $follow_search;
        return $this;
    }

    public function getNoArticleNumberSearch(): ?bool
    {
        return $this->container['no_article_number_search'];
    }

    public function setNoArticleNumberSearch(?bool $no_article_number_search): self
    {
        $this->container['no_article_number_search'] = $no_article_number_search;
        return $this;
    }

    public function getSeoPath(): ?string
    {
        return $this->container['seo_path'];
    }

    public function setSeoPath(?string $seo_path): self
    {
        $this->container['seo_path'] = $seo_path;
        return $this;
    }
}