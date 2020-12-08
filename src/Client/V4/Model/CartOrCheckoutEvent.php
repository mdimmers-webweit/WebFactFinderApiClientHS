<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * CartOrCheckoutEvent Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CartOrCheckoutEvent extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'campaign' => 'string',
            'count' => 'int',
            'id' => 'string',
            'master_id' => 'string',
            'price' => 'double',
            'sid' => 'string',
            'title' => 'string',
            'user_id' => 'string',
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
            'campaign' => 'campaign',
            'count' => 'count',
            'id' => 'id',
            'master_id' => 'masterId',
            'price' => 'price',
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

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['sid'] === null) {
            $invalidProperties[] = "'sid' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * @param string $campaign if the product was added to search result by a campaign, this field should contain the campaign ID
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * @param int $count the number of items
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

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
     * @param string $id the ID of the product
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
    public function getMasterId()
    {
        return $this->container['master_id'];
    }

    /**
     * @param string $master_id contains the master ID, if the article is a variant and 'ID' refers to the variant
     *
     * @return $this
     */
    public function setMasterId($master_id)
    {
        $this->container['master_id'] = $master_id;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * @param float $price the single-item price of the product
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string $sid the session ID
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
     * @param string $title the title of the product
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
     * @param string $user_id the ID of the user who issued the request
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }
}
