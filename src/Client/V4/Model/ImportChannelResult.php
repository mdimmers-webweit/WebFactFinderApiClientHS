<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * ImportChannelResult Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ImportChannelResult extends BaseModel implements ModelV4Interface
{
    const IMPORT_TYPE_DATA = 'DATA';
    const IMPORT_TYPE_ATTRIBUTES_AND_DATA = 'ATTRIBUTES_AND_DATA';
    const IMPORT_TYPE_SUGGEST = 'SUGGEST';
    const IMPORT_TYPE_RECOMMENDATION = 'RECOMMENDATION';
    const IMPORT_TYPE_RANKING = 'RANKING';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'channel' => 'string',
            'duration_in_seconds' => 'int',
            'error_messages' => 'string[]',
            'import_type' => 'string',
            'imported_fields' => 'int',
            'imported_records' => 'int',
            'start_date' => '\DateTime',
            'status_messages' => 'string[]',
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
            'channel' => 'channel',
            'duration_in_seconds' => 'durationInSeconds',
            'error_messages' => 'errorMessages',
            'import_type' => 'importType',
            'imported_fields' => 'importedFields',
            'imported_records' => 'importedRecords',
            'start_date' => 'startDate',
            'status_messages' => 'statusMessages',
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImportTypeAllowableValues()
    {
        return [
            self::IMPORT_TYPE_DATA,
            self::IMPORT_TYPE_ATTRIBUTES_AND_DATA,
            self::IMPORT_TYPE_SUGGEST,
            self::IMPORT_TYPE_RECOMMENDATION,
            self::IMPORT_TYPE_RANKING,
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

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['duration_in_seconds'] === null) {
            $invalidProperties[] = "'duration_in_seconds' can't be null";
        }
        if ($this->container['error_messages'] === null) {
            $invalidProperties[] = "'error_messages' can't be null";
        }
        if ($this->container['import_type'] === null) {
            $invalidProperties[] = "'import_type' can't be null";
        }
        $allowedValues = $this->getImportTypeAllowableValues();
        if (!\is_null($this->container['import_type']) && !\in_array($this->container['import_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'import_type', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['imported_fields'] === null) {
            $invalidProperties[] = "'imported_fields' can't be null";
        }
        if ($this->container['imported_records'] === null) {
            $invalidProperties[] = "'imported_records' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['status_messages'] === null) {
            $invalidProperties[] = "'status_messages' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * @param string $channel the channel for which the import was performed
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * @return int
     */
    public function getDurationInSeconds()
    {
        return $this->container['duration_in_seconds'];
    }

    /**
     * @param int $duration_in_seconds the duration of the import process (seconds)
     *
     * @return $this
     */
    public function setDurationInSeconds($duration_in_seconds)
    {
        $this->container['duration_in_seconds'] = $duration_in_seconds;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getErrorMessages()
    {
        return $this->container['error_messages'];
    }

    /**
     * @param string[] $error_messages import error messages
     *
     * @return $this
     */
    public function setErrorMessages($error_messages)
    {
        $this->container['error_messages'] = $error_messages;

        return $this;
    }

    /**
     * @return string
     */
    public function getImportType()
    {
        return $this->container['import_type'];
    }

    /**
     * @param string $import_type the type of data imported
     *
     * @return $this
     */
    public function setImportType($import_type)
    {
        $allowedValues = $this->getImportTypeAllowableValues();
        if (!\in_array($import_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'import_type', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['import_type'] = $import_type;

        return $this;
    }

    /**
     * @return int
     */
    public function getImportedFields()
    {
        return $this->container['imported_fields'];
    }

    /**
     * @param int $imported_fields the number of fields imported
     *
     * @return $this
     */
    public function setImportedFields($imported_fields)
    {
        $this->container['imported_fields'] = $imported_fields;

        return $this;
    }

    /**
     * @return int
     */
    public function getImportedRecords()
    {
        return $this->container['imported_records'];
    }

    /**
     * @param int $imported_records the number of records imported
     *
     * @return $this
     */
    public function setImportedRecords($imported_records)
    {
        $this->container['imported_records'] = $imported_records;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * @param \DateTime $start_date the time and date that the import was started
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusMessages()
    {
        return $this->container['status_messages'];
    }

    /**
     * @param string[] $status_messages import status messages
     *
     * @return $this
     */
    public function setStatusMessages($status_messages)
    {
        $this->container['status_messages'] = $status_messages;

        return $this;
    }
}
