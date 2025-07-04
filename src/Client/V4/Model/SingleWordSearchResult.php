<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SingleWordSearchResult Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SingleWordSearchResult extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'preview_records' => static::getModelClass('SearchRecord', true),
            'search_params' => static::getModelClass('SearchParams'),
            'total_hits' => 'int',
            'word' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'preview_records' => 'previewRecords',
            'search_params' => 'searchParams',
            'total_hits' => 'totalHits',
            'word' => 'word',
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

        if ($this->container['preview_records'] === null) {
            $invalidProperties[] = "'preview_records' can't be null";
        }
        if ($this->container['total_hits'] === null) {
            $invalidProperties[] = "'total_hits' can't be null";
        }
        if ($this->container['word'] === null) {
            $invalidProperties[] = "'word' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SearchRecord[]
     */
    public function getPreviewRecords()
    {
        return $this->container['preview_records'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SearchRecord[] $preview_records the first few products of the search result, to be used as a preview
     *
     * @return $this
     */
    public function setPreviewRecords($preview_records)
    {
        $this->container['preview_records'] = $preview_records;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SearchParams
     */
    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $search_params describes the search to be executed to obtain the complete search result
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

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
     * @param int $total_hits the total number of items to be expected in this search result
     *
     * @return $this
     */
    public function setTotalHits($total_hits)
    {
        $this->container['total_hits'] = $total_hits;

        return $this;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->container['word'];
    }

    /**
     * @param string $word the term that was searched for
     *
     * @return $this
     */
    public function setWord($word)
    {
        $this->container['word'] = $word;

        return $this;
    }
}
