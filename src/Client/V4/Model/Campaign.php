<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Campaign Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Campaign extends BaseModel implements ModelV4Interface
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
            'hits' => static::getModelClass('TypedFlatRecord', true),
            'id' => 'string',
            'name' => 'string',
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
            'hits' => 'hits',
            'id' => 'id',
            'name' => 'name',
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
     * @return \Web\FactFinderApi\Client\V4\Model\Question[]
     */
    public function getActiveQuestions()
    {
        return $this->container['active_questions'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Question[] $active_questions The currently active questions to be shown to the user. These questions do not need to be the root questions, in case the user has already answered a question.
     *
     * @return $this
     */
    public function setActiveQuestions($active_questions)
    {
        $this->container['active_questions'] = $active_questions;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Question[]
     */
    public function getAdvisorTree()
    {
        return $this->container['advisor_tree'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Question[] $advisor_tree the advisor root questions associated with this campaign
     *
     * @return $this
     */
    public function setAdvisorTree($advisor_tree)
    {
        $this->container['advisor_tree'] = $advisor_tree;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * @param string $category The category of the campaign. May be empty.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\FeedbackText[]
     */
    public function getFeedbackTexts()
    {
        return $this->container['feedback_texts'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\FeedbackText[] $feedback_texts the feedback text lines that will be displayed to the user
     *
     * @return $this
     */
    public function setFeedbackTexts($feedback_texts)
    {
        $this->container['feedback_texts'] = $feedback_texts;

        return $this;
    }

    /**
     * @return string
     */
    public function getFlavour()
    {
        return $this->container['flavour'];
    }

    /**
     * @param string $flavour the kind of the campaign
     *
     * @return $this
     */
    public function setFlavour($flavour)
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
     * @return \Web\FactFinderApi\Client\V4\Model\TypedFlatRecord[]
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\TypedFlatRecord[] $hits the records associated with the campaign, if it should push products
     *
     * @return $this
     */
    public function setHits($hits)
    {
        $this->container['hits'] = $hits;

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
     * @param string $id the ID of the campaign
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
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * @param string $name the name of the campaign
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Target
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Target $target the redirect target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }
}
