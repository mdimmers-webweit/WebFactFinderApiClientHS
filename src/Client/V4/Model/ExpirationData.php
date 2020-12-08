<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * ExpirationData Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ExpirationData extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'database' => 'string',
            'error' => 'string',
            'modified' => '\DateTime',
            'modified_loaded' => '\DateTime',
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
            'database' => 'database',
            'error' => 'error',
            'modified' => 'modified',
            'modified_loaded' => 'modifiedLoaded',
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

        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * @param string $database name of the Database
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * @param string $error error message of the error that occurred while getting the expiration info
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * @param \DateTime $modified date of the last modification time of the database
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedLoaded()
    {
        return $this->container['modified_loaded'];
    }

    /**
     * @param \DateTime $modified_loaded date of the last modification time of the loaded database
     *
     * @return $this
     */
    public function setModifiedLoaded($modified_loaded)
    {
        $this->container['modified_loaded'] = $modified_loaded;

        return $this;
    }
}
