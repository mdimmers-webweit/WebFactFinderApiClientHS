<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SimilarProducts Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SimilarProducts extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'attributes' => static::getModelClass('SimilarAttributeInfo', true),
            'hits' => static::getModelClass('TypedFlatRecord', true),
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
            'attributes' => 'attributes',
            'hits' => 'hits',
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
        if ($this->container['hits'] === null) {
            $invalidProperties[] = "'hits' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SimilarAttributeInfo[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SimilarAttributeInfo[] $attributes The criteria used to find the similar products..
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\TypedFlatRecord[]
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\TypedFlatRecord[] $hits the similar products
     *
     * @return $this
     */
    public function setHits($hits)
    {
        $this->container['hits'] = $hits;

        return $this;
    }
}
