<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */


namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Target Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Target extends BaseModel implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'destination' => 'string',
            'name' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'destination' => 'destination',
            'name' => 'name',
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

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * @param string $destination destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
}
