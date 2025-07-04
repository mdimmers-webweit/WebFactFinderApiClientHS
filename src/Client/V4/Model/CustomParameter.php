<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * CustomParameter Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CustomParameter extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'cache_irrelevant' => 'bool',
            'name' => 'string',
            'values' => 'string[]',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'cache_irrelevant' => 'cacheIrrelevant',
            'name' => 'name',
            'values' => 'values',
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

        if ($this->container['cache_irrelevant'] === null) {
            $invalidProperties[] = "'cache_irrelevant' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return bool
     */
    public function getCacheIrrelevant()
    {
        return $this->container['cache_irrelevant'];
    }

    /**
     * @param bool $cache_irrelevant when set to true, the custom parameter will not influence caching
     *
     * @return $this
     */
    public function setCacheIrrelevant($cache_irrelevant)
    {
        $this->container['cache_irrelevant'] = $cache_irrelevant;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * @param string $name the parameter name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * @param string[] $values the parameter values
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }
}
