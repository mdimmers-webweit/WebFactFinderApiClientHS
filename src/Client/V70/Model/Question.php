<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */


namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;
use Web\FactFinderApi\Client\V70\Model\ModelV70Interface;

/**
 * Question Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Question extends BaseModel implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'answers' => static::getModelClass('Answer', true),
            'id' => 'string',
            'text' => 'string',
            'visible' => 'bool',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'answers' => 'answers',
            'id' => 'id',
            'text' => 'text',
            'visible' => 'visible',
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
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return Answer[]
     */
    public function getAnswers(): array
    {
        return $this->container['answers'];
    }

    /**
     * @param Answer[] $answers answers
     *
     * @return $this
     */
    public function setAnswers($answers): static
    {
        $this->container['answers'] = $answers;

        return $this;
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
    public function setId($id): static
    {
        $this->container['id'] = $id;

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
    public function setText($text): static
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVisible(): bool
    {
        return $this->container['visible'];
    }

    /**
     * @param bool $visible visible
     *
     * @return $this
     */
    public function setVisible($visible): static
    {
        $this->container['visible'] = $visible;

        return $this;
    }
}
