<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * GeoInformation Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class GeoInformation extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'distance' => 'double',
            'location' => static::getModelClass('Location'),
            'master_values' => 'object',
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
            'distance' => 'distance',
            'location' => 'location',
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

        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['variant_values'] === null) {
            $invalidProperties[] = "'variant_values' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * @param float $distance The distance between market and search location in km. If the market is the online store, this is set to -1.
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Location $location The market's location. Is missing if the market is the online store.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * @return object
     */
    public function getMasterValues()
    {
        return $this->container['master_values'];
    }

    /**
     * @param object $master_values the field values, which are specific to this market
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
