<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * ExpirationMessage Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ExpirationMessage extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'channel' => 'string',
            'expiration_data' => static::getModelClass('ExpirationData', true),
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
            'channel' => 'channel',
            'expiration_data' => 'expirationData',
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

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['expiration_data'] === null) {
            $invalidProperties[] = "'expiration_data' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * @param string $channel name of the channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\ExpirationData[]
     */
    public function getExpirationData()
    {
        return $this->container['expiration_data'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\ExpirationData[] $expiration_data the expiration status of the database
     *
     * @return $this
     */
    public function setExpirationData($expiration_data)
    {
        $this->container['expiration_data'] = $expiration_data;

        return $this;
    }
}
