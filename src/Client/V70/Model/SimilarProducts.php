<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */


namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SimilarProducts Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SimilarProducts extends BaseModel implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'attributes' => static::getModelClass('SimilarAttributeInfo', true),
            'records' => static::getModelClass('RecordWithId', true),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'attributes' => 'attributes',
            'records' => 'records',
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

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V70\Model\SimilarAttributeInfo[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V70\Model\SimilarAttributeInfo[] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V70\Model\RecordWithId[]
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V70\Model\RecordWithId[] $records records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }
}
