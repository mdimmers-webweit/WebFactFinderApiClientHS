<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * CompareAttribute Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CompareAttribute extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'different' => 'bool',
            'name' => 'string',
            'source_field' => 'string',
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
            'different' => 'different',
            'name' => 'name',
            'source_field' => 'sourceField',
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

        if ($this->container['different'] === null) {
            $invalidProperties[] = "'different' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['source_field'] === null) {
            $invalidProperties[] = "'source_field' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return bool
     */
    public function getDifferent()
    {
        return $this->container['different'];
    }

    /**
     * @param bool $different set to true if the compared products have different values for the attribute
     *
     * @return $this
     */
    public function setDifferent($different)
    {
        $this->container['different'] = $different;

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
     * @param string $name the name of the attribute
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceField()
    {
        return $this->container['source_field'];
    }

    /**
     * @param string $source_field the name of the database field that contains the attribute
     *
     * @return $this
     */
    public function setSourceField($source_field)
    {
        $this->container['source_field'] = $source_field;

        return $this;
    }
}
