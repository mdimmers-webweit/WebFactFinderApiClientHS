<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * RecordWithId Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class RecordWithId extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'id' => 'string',
            'master_values' => 'map[string,object]',
            'variant_values' => static::getModelClass('VariantValues', true),
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
            'id' => 'id',
            'master_values' => 'masterValues',
            'variant_values' => 'variantValues',
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['master_values'] === null) {
            $invalidProperties[] = "'master_values' can't be null";
        }
        if ($this->container['variant_values'] === null) {
            $invalidProperties[] = "'variant_values' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * @param string $id the ID of the record
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return object[]
     */
    public function getMasterValues()
    {
        return $this->container['master_values'];
    }

    /**
     * @param object[] $master_values Contains all fields in the record, with a string representation of the respective values
     *
     * @return $this
     */
    public function setMasterValues($master_values)
    {
        $this->container['master_values'] = $master_values;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\VariantValues[]
     */
    public function getVariantValues()
    {
        return $this->container['variant_values'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\VariantValues[] $variant_values Contains variants. The values are mapped from field names to the field value.
     *
     * @return $this
     */
    public function setVariantValues($variant_values)
    {
        $this->container['variant_values'] = $variant_values;

        return $this;
    }
}
