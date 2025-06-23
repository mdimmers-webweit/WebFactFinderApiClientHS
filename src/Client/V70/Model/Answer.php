<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */


namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Answer Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Answer extends BaseModel implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'id' => 'string',
            'params' => static::getModelClass('SearchParams'),
            'questions' => static::getModelClass('Question', true),
            'text' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'id' => 'id',
            'params' => 'params',
            'questions' => 'questions',
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
        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->container['id'];
    }

    /**
     * @param string $id id
     *
     * @return $this
     */
    public function setId(string $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V70\Model\SearchParams
     */
    public function getParams(): \Web\FactFinderApi\Client\V70\Model\SearchParams
    {
        return $this->container['params'];
    }

    /**
     * @param SearchParams $params params
     *
     * @return $this
     */
    public function setParams(SearchParams $params): static
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V70\Model\Question[]
     */
    public function getQuestions(): array
    {
        return $this->container['questions'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V70\Model\Question[] $questions questions
     *
     * @return $this
     */
    public function setQuestions(array $questions): static
    {
        $this->container['questions'] = $questions;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->container['text'];
    }

    /**
     * @param string $text text
     *
     * @return $this
     */
    public function setText(string $text): static
    {
        $this->container['text'] = $text;

        return $this;
    }
}
