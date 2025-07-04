<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * RecommendationResultWithFieldRoles Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class RecommendationResultWithFieldRoles extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'field_roles' => 'map[string,string]',
            'hits' => static::getModelClass('TypedFlatRecord', true),
            'timed_out' => 'bool',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'field_roles' => 'fieldRoles',
            'hits' => 'hits',
            'timed_out' => 'timedOut',
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

        if ($this->container['field_roles'] === null) {
            $invalidProperties[] = "'field_roles' can't be null";
        }
        if ($this->container['hits'] === null) {
            $invalidProperties[] = "'hits' can't be null";
        }
        if ($this->container['timed_out'] === null) {
            $invalidProperties[] = "'timed_out' can't be null";
        }

        return $invalidProperties;
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
     * @return \Web\FactFinderApi\Client\V4\Model\TypedFlatRecord[]
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\TypedFlatRecord[] $hits records of the recommended products
     *
     * @return $this
     */
    public function setHits($hits)
    {
        $this->container['hits'] = $hits;

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
     * @param bool $timed_out set to true when a timeout occurs
     *
     * @return $this
     */
    public function setTimedOut($timed_out)
    {
        $this->container['timed_out'] = $timed_out;

        return $this;
    }
}
