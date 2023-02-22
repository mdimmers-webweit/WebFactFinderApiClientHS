<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SearchRecord Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SearchRecord extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'found_words' => 'string[]',
            'geo_information' => static::getModelClass('GeoInformation'),
            'id' => 'string',
            'master_values' => 'map[string,object]',
            'position' => 'int',
            'score' => 'float',
            'variant_values' => static::getModelClass('VariantValues', true),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'found_words' => 'foundWords',
            'geo_information' => 'geoInformation',
            'id' => 'id',
            'master_values' => 'masterValues',
            'position' => 'position',
            'score' => 'score',
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

        if ($this->container['found_words'] === null) {
            $invalidProperties[] = "'found_words' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['master_values'] === null) {
            $invalidProperties[] = "'master_values' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if ($this->container['variant_values'] === null) {
            $invalidProperties[] = "'variant_values' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string[]
     */
    public function getFoundWords()
    {
        return $this->container['found_words'];
    }

    /**
     * @param string[] $found_words the words that caused this record to be part of the result
     *
     * @return $this
     */
    public function setFoundWords($found_words)
    {
        $this->container['found_words'] = $found_words;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\GeoInformation
     */
    public function getGeoInformation()
    {
        return $this->container['geo_information'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\GeoInformation $geo_information information about the most relevant market
     *
     * @return $this
     */
    public function setGeoInformation($geo_information)
    {
        $this->container['geo_information'] = $geo_information;

        return $this;
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
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * @param int $position the position of the record in the search results (starting with 0)
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * @param float $score defines how well the record matches the search term
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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
