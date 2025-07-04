<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * MessagesWithChannel Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class MessagesWithChannel extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'channel' => 'string',
            'error_messages' => 'string[]',
            'status_messages' => 'string[]',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'channel' => 'channel',
            'error_messages' => 'errorMessages',
            'status_messages' => 'statusMessages',
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
        if ($this->container['error_messages'] === null) {
            $invalidProperties[] = "'error_messages' can't be null";
        }
        if ($this->container['status_messages'] === null) {
            $invalidProperties[] = "'status_messages' can't be null";
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
     * @param string $channel the channel to which the messages belong
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getErrorMessages()
    {
        return $this->container['error_messages'];
    }

    /**
     * @param string[] $error_messages contains the error messages
     *
     * @return $this
     */
    public function setErrorMessages($error_messages)
    {
        $this->container['error_messages'] = $error_messages;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusMessages()
    {
        return $this->container['status_messages'];
    }

    /**
     * @param string[] $status_messages contains the status messages
     *
     * @return $this
     */
    public function setStatusMessages($status_messages)
    {
        $this->container['status_messages'] = $status_messages;

        return $this;
    }
}
