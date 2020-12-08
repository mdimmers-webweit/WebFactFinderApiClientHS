<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Answer Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Answer extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'id' => 'string',
            'questions' => static::getModelClass('Question', true),
            'search_params' => static::getModelClass('SearchParams'),
            'selected' => 'bool',
            'text' => 'string',
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
            'id' => 'id',
            'questions' => 'questions',
            'search_params' => 'searchParams',
            'selected' => 'selected',
            'text' => 'text',
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
        if ($this->container['search_params'] === null) {
            $invalidProperties[] = "'search_params' can't be null";
        }
        if ($this->container['selected'] === null) {
            $invalidProperties[] = "'selected' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * @param string $id ID of this answer
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Question[]
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Question[] $questions the questions to be shown when the answer is selected
     *
     * @return $this
     */
    public function setQuestions($questions)
    {
        $this->container['questions'] = $questions;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SearchParams
     */
    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $search_params parameters to define the search that is to be executed when this answer has been selected by the user
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * @param bool $selected true if the answer has been selected
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * @param string $text text, shown when the answer is active
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
}
