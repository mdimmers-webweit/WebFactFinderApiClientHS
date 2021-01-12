<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * DeleteResult Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class DeleteResult extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'error' => static::getModelClass('ErrorDescription'),
            'record_id' => 'string',
            'success' => 'bool',
            'warnings' => static::getModelClass('ErrorDescription', true),
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
            'error' => 'error',
            'record_id' => 'recordId',
            'success' => 'success',
            'warnings' => 'warnings',
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

        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\ErrorDescription
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\ErrorDescription $error A description of the error in case of failure. The property is present if and only if success=false.
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * @param string $record_id the id of the record which should be deleted
     *
     * @return $this
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * @param bool $success If true, the operation succeeded. Otherwise an error occurred which will be described in the error field.
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\ErrorDescription[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\ErrorDescription[] $warnings a list of all warnings
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }
}
