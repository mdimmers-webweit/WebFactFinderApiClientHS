<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

/**
 * FACT-Finder REST-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

namespace Web\FactFinderApi\Client\V1\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * RecommendationClickEvent Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class RecommendationClickEvent extends BaseModel implements ModelV1Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'cookie_id' => 'string',
            'extra_params' => 'map[string,string]',
            'id' => 'string',
            'main_id' => 'string',
            'master_id' => 'string',
            'sid' => 'string',
            'title' => 'string',
            'user_id' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'cookie_id' => 'cookieId',
            'extra_params' => 'extraParams',
            'id' => 'id',
            'main_id' => 'mainId',
            'master_id' => 'masterId',
            'sid' => 'sid',
            'title' => 'title',
            'user_id' => 'userId',
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
        if ($this->container['main_id'] === null) {
            $invalidProperties[] = "'main_id' can't be null";
        }
        if ($this->container['sid'] === null) {
            $invalidProperties[] = "'sid' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getCookieId()
    {
        return $this->container['cookie_id'];
    }

    /**
     * @param string $cookie_id cookie_id
     *
     * @return $this
     */
    public function setCookieId($cookie_id)
    {
        $this->container['cookie_id'] = $cookie_id;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getExtraParams()
    {
        return $this->container['extra_params'];
    }

    /**
     * @param string[] $extra_params extra_params
     *
     * @return $this
     */
    public function setExtraParams($extra_params)
    {
        $this->container['extra_params'] = $extra_params;

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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getMainId()
    {
        return $this->container['main_id'];
    }

    /**
     * @param string $main_id main_id
     *
     * @return $this
     */
    public function setMainId($main_id)
    {
        $this->container['main_id'] = $main_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getMasterId()
    {
        return $this->container['master_id'];
    }

    /**
     * @param string $master_id master_id
     *
     * @return $this
     */
    public function setMasterId($master_id)
    {
        $this->container['master_id'] = $master_id;

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

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }
}
