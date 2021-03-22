<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * AdvisorCampaignStatusHolder Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class AdvisorCampaignStatusHolder extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'answer_path' => 'string',
            'id' => 'string',
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
            'answer_path' => 'answerPath',
            'id' => 'id',
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

        if ($this->container['answer_path'] === null) {
            $invalidProperties[] = "'answer_path' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getAnswerPath()
    {
        return $this->container['answer_path'];
    }

    /**
     * @param string $answer_path The currently active path within the advisor tree, which should end at an answer: _QuestionID_AnswerID_QuestionID_AnswerID
     *
     * @return $this
     */
    public function setAnswerPath($answer_path)
    {
        $this->container['answer_path'] = $answer_path;

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
     * @param string $id ID of the advisor campaign
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
}
