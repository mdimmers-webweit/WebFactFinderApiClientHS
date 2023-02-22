<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * ErrorDescription Class Doc Comment
 *
 * @description Contains information which will be returned when an error occurs.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ErrorDescription extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
            'stacktrace' => 'string[]',
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
            'description' => 'description',
            'stacktrace' => 'stacktrace',
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
     * @param string $name Name of the error
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
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * @param string $description A description of the error cause
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStacktrace()
    {
        return $this->container['stacktrace'];
    }

    /**
     * @param string[] $stacktrace The stacktrace from the error (will only be transmitted when the query parameter verbose=true was added to the request)
     *
     * @return $this
     */
    public function setStacktrace($stacktrace)
    {
        $this->container['stacktrace'] = $stacktrace;

        return $this;
    }
}
