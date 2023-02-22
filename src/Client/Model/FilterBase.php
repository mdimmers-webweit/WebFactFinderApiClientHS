<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

use Web\FactFinderApi\Client\V4\Model\Filter;

/**
 * Filter Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
abstract class FilterBase extends BaseModel
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'name' => 'string',
            'substring' => 'bool',
            'values' => static::getModelClass('FilterValue', true),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'name' => 'name',
            'substring' => 'substring',
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['substring'] === null) {
            $invalidProperties[] = "'substring' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * @param string $name the name of the filter
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSubstring()
    {
        return $this->container['substring'];
    }

    /**
     * @param bool $substring if true, filter values will be applied as 'contains' instead of 'equals'
     *
     * @return $this
     */
    public function setSubstring($substring)
    {
        $this->container['substring'] = $substring;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\Model\FilterValueBase[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * @param \Web\FactFinderApi\Client\Model\FilterValueBase[] $values filter values
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }
}
