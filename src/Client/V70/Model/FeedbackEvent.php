<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */


namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * FeedbackEvent Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FeedbackEvent extends BaseModel implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [1];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'message' => 'message',
            'positive' => 'positive',
            'query' => 'query',
            'sid' => 'sid',
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

        if ($this->container['positive'] === null) {
            $invalidProperties[] = "'positive' can't be null";
        }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if ($this->container['sid'] === null) {
            $invalidProperties[] = "'sid' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPositive()
    {
        return $this->container['positive'];
    }

    /**
     * @param bool $positive positive
     *
     * @return $this
     */
    public function setPositive($positive)
    {
        $this->container['positive'] = $positive;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * @param string $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * @return string
     */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
     * @param string $sid sid
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->container['sid'] = $sid;

        return $this;
    }
}
