<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * JobTriggerResult Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class JobTriggerResult extends BaseModel implements ModelV4Interface
{
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILURE = 'FAILURE';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'error_message' => 'string',
            'job_group' => 'string',
            'job_name' => 'string',
            'status' => 'string',
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
            'error_message' => 'errorMessage',
            'job_group' => 'jobGroup',
            'job_name' => 'jobName',
            'status' => 'status',
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILURE,
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!\is_null($this->container['status']) && !\in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'status', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * @param string $error_message the error message describing why the job could not be completed
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobGroup()
    {
        return $this->container['job_group'];
    }

    /**
     * @param string $job_group the group of the triggered job
     *
     * @return $this
     */
    public function setJobGroup($job_group)
    {
        $this->container['job_group'] = $job_group;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobName()
    {
        return $this->container['job_name'];
    }

    /**
     * @param string $job_name the name of the triggered job
     *
     * @return $this
     */
    public function setJobName($job_name)
    {
        $this->container['job_name'] = $job_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * @param string $status results of the attempt to trigger the job
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!\in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }
}
