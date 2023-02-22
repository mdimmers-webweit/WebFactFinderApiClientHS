<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Paging Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Paging extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'current_page' => 'int',
            'default_hits_per_page' => 'int',
            'hits_per_page' => 'int',
            'next_link' => static::getModelClass('PageLink'),
            'page_count' => 'int',
            'previous_link' => static::getModelClass('PageLink'),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'current_page' => 'currentPage',
            'default_hits_per_page' => 'defaultHitsPerPage',
            'hits_per_page' => 'hitsPerPage',
            'next_link' => 'nextLink',
            'page_count' => 'pageCount',
            'previous_link' => 'previousLink',
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
        if ($this->container['hits_per_page'] === null) {
            $invalidProperties[] = "'hits_per_page' can't be null";
        }
        if ($this->container['page_count'] === null) {
            $invalidProperties[] = "'page_count' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * @param int $current_page the number of the currently selected page
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
    public function getDefaultHitsPerPage()
    {
        return $this->container['default_hits_per_page'];
    }

    /**
     * @param int $default_hits_per_page the default number of products shown per page, as defined in the configuration
     *
     * @return $this
     */
    public function setDefaultHitsPerPage($default_hits_per_page)
    {
        $this->container['default_hits_per_page'] = $default_hits_per_page;

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
     * @param int $hits_per_page the number of products shown per page (the last page may contain fewer products)
     *
     * @return $this
     */
    public function setHitsPerPage($hits_per_page)
    {
        $this->container['hits_per_page'] = $hits_per_page;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\PageLink
     */
    public function getNextLink()
    {
        return $this->container['next_link'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\PageLink $next_link defines the page to be requested when the 'next page' link is selected
     *
     * @return $this
     */
    public function setNextLink($next_link)
    {
        $this->container['next_link'] = $next_link;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * @param int $page_count the total number of pages for this search result
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\PageLink
     */
    public function getPreviousLink()
    {
        return $this->container['previous_link'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\PageLink $previous_link defines the page to be requested when the 'previous page' link is selected
     *
     * @return $this
     */
    public function setPreviousLink($previous_link)
    {
        $this->container['previous_link'] = $previous_link;

        return $this;
    }
}
