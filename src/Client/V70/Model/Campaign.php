<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Campaign Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Campaign extends BaseModel implements ModelV70Interface
{
    public const FLAVOUR_ADVISOR = 'ADVISOR';
    public const FLAVOUR_REDIRECT = 'REDIRECT';
    public const FLAVOUR_FEEDBACK = 'FEEDBACK';
    public const FLAVOUR_PRODUCT = 'PRODUCT';

    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'active_questions' => static::getModelClass('Question', true),
            'advisor_tree' => static::getModelClass('Question', true),
            'category' => 'string',
            'feedback_texts' => static::getModelClass('FeedbackText', true),
            'flavour' => 'string',
            'id' => 'string',
            'name' => 'string',
            'pushed_products_records' => static::getModelClass('RecordWithId', true),
            'target' => static::getModelClass('Target'),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'active_questions' => 'activeQuestions',
            'advisor_tree' => 'advisorTree',
            'category' => 'category',
            'feedback_texts' => 'feedbackTexts',
            'flavour' => 'flavour',
            'id' => 'id',
            'name' => 'name',
            'pushed_products_records' => 'pushedProductsRecords',
            'target' => 'target',
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlavourAllowableValues()
    {
        return [
            self::FLAVOUR_ADVISOR,
            self::FLAVOUR_REDIRECT,
            self::FLAVOUR_FEEDBACK,
            self::FLAVOUR_PRODUCT,
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

        if ($this->container['advisor_tree'] === null) {
            $invalidProperties[] = "'advisor_tree' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['flavour'] === null) {
            $invalidProperties[] = "'flavour' can't be null";
        }
        $allowedValues = $this->getFlavourAllowableValues();
        if (!\is_null($this->container['flavour']) && !\in_array($this->container['flavour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flavour', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * @return Question[]
     */
    public function getActiveQuestions(): array
    {
        return $this->container['active_questions'];
    }

    /**
     * @param Question[] $active_questions active_questions
     *
     * @return $this
     */
    public function setActiveQuestions(array $active_questions): static
    {
        $this->container['active_questions'] = $active_questions;

        return $this;
    }

    /**
     * @return Question[]
     */
    public function getAdvisorTree(): array
    {
        return $this->container['advisor_tree'];
    }

    /**
     * @param Question[] $advisor_tree advisor_tree
     *
     * @return $this
     */
    public function setAdvisorTree(array $advisor_tree): static
    {
        $this->container['advisor_tree'] = $advisor_tree;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->container['category'];
    }

    /**
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory(string $category): static
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * @return FeedbackText[]
     */
    public function getFeedbackTexts(): array
    {
        return $this->container['feedback_texts'];
    }

    /**
     * @param FeedbackText[] $feedback_texts feedback_texts
     *
     * @return $this
     */
    public function setFeedbackTexts(array $feedback_texts): static
    {
        $this->container['feedback_texts'] = $feedback_texts;

        return $this;
    }

    /**
     * @return string
     */
    public function getFlavour(): string
    {
        return $this->container['flavour'];
    }

    /**
     * @param string $flavour flavour
     *
     * @return $this
     */
    public function setFlavour(string $flavour): static
    {
        $allowedValues = $this->getFlavourAllowableValues();
        if (!\in_array($flavour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flavour', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flavour'] = $flavour;

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
    public function setId(string $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * @param string $name name
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return RecordWithId[]
     */
    public function getPushedProductsRecords(): array
    {
        return $this->container['pushed_products_records'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V70\Model\RecordWithId[] $pushed_products_records pushed_products_records
     *
     * @return $this
     */
    public function setPushedProductsRecords($pushed_products_records)
    {
        $this->container['pushed_products_records'] = $pushed_products_records;

        return $this;
    }

    /**
     * @return Target
     */
    public function getTarget(): Target
    {
        return $this->container['target'];
    }

    /**
     * @param Target $target target
     *
     * @return $this
     */
    public function setTarget(Target $target): static
    {
        $this->container['target'] = $target;

        return $this;
    }
}
