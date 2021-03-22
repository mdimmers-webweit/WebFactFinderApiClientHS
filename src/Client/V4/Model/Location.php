<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Location Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Location extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'latitude' => 'double',
            'longitude' => 'double',
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
            'latitude' => 'latitude',
            'longitude' => 'longitude',
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

        if (!\is_null($this->container['latitude']) && ($this->container['latitude'] > 90.0)) {
            $invalidProperties[] = "invalid value for 'latitude', must be smaller than or equal to 90.0.";
        }

        if (!\is_null($this->container['latitude']) && ($this->container['latitude'] < -90.0)) {
            $invalidProperties[] = "invalid value for 'latitude', must be bigger than or equal to -90.0.";
        }

        if (!\is_null($this->container['longitude']) && ($this->container['longitude'] > 180.0)) {
            $invalidProperties[] = "invalid value for 'longitude', must be smaller than or equal to 180.0.";
        }

        if (!\is_null($this->container['longitude']) && ($this->container['longitude'] < -180.0)) {
            $invalidProperties[] = "invalid value for 'longitude', must be bigger than or equal to -180.0.";
        }

        return $invalidProperties;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * @param float $latitude the latitude coordinate of the location
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        if (!\is_null($latitude) && ($latitude > 90.0)) {
            throw new \InvalidArgumentException('invalid value for $latitude when calling Location., must be smaller than or equal to 90.0.');
        }
        if (!\is_null($latitude) && ($latitude < -90.0)) {
            throw new \InvalidArgumentException('invalid value for $latitude when calling Location., must be bigger than or equal to -90.0.');
        }

        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * @param float $longitude the longitude coordinate of the location
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        if (!\is_null($longitude) && ($longitude > 180.0)) {
            throw new \InvalidArgumentException('invalid value for $longitude when calling Location., must be smaller than or equal to 180.0.');
        }
        if (!\is_null($longitude) && ($longitude < -180.0)) {
            throw new \InvalidArgumentException('invalid value for $longitude when calling Location., must be bigger than or equal to -180.0.');
        }

        $this->container['longitude'] = $longitude;

        return $this;
    }
}
