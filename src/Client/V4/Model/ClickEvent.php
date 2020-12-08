<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * ClickEvent Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ClickEvent extends BaseModel implements ModelV4Interface
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
            'id' => 'string',
            'master_id' => 'string',
            'page' => 'int',
            'page_size' => 'int',
            'pos' => 'int',
            'query' => 'string',
            'score' => 'double',
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
            'id' => 'id',
            'master_id' => 'masterId',
            'page' => 'page',
            'page_size' => 'pageSize',
            'pos' => 'pos',
            'query' => 'query',
            'score' => 'score',
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
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['pos'] === null) {
            $invalidProperties[] = "'pos' can't be null";
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
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * @param string $campaign if the product was added to search results by a campaign, this field should contain the campaign ID
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

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
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * @param int $page the page number of the search result that contains the product
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * @param int $page_size the current page size (possibly adjusted by the user) when the product was clicked
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * @return int
     */
    public function getPos()
    {
        return $this->container['pos'];
    }

    /**
     * @param int $pos the overall position of the product inside the search result
     *
     * @return $this
     */
    public function setPos($pos)
    {
        $this->container['pos'] = $pos;

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
     * @param string $query the search term that the user searched for
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

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
     * @param float $score the score of the product
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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
