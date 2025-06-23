<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */


namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SingleWordSearchResult Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SingleWordSearchResult extends BaseModel implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'preview_records' => static::getModelClass('SearchRecord', true),
            'record_count' => 'int',
            'search_params' => static::getModelClass('SearchParams'),
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
            'record_count' => 'recordCount',
            'search_params' => 'searchParams',
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
        if ($this->container['record_count'] === null) {
            $invalidProperties[] = "'record_count' can't be null";
        }
        if ($this->container['word'] === null) {
            $invalidProperties[] = "'word' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V70\Model\SearchRecord[]
     */
    public function getPreviewRecords()
    {
        return $this->container['preview_records'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V70\Model\SearchRecord[] $preview_records preview_records
     *
     * @return $this
     */
    public function setPreviewRecords($preview_records)
    {
        $this->container['preview_records'] = $preview_records;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecordCount()
    {
        return $this->container['record_count'];
    }

    /**
     * @param int $record_count record_count
     *
     * @return $this
     */
    public function setRecordCount($record_count)
    {
        $this->container['record_count'] = $record_count;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V70\Model\SearchParams
     */
    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V70\Model\SearchParams $search_params search_params
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

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
     * @param string $word word
     *
     * @return $this
     */
    public function setWord($word)
    {
        $this->container['word'] = $word;

        return $this;
    }
}
