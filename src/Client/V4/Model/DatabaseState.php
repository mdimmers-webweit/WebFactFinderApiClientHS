<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * DatabaseState Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class DatabaseState extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'database_version' => 'int',
            'delta_error_count' => 'int',
            'delta_version' => 'int',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'database_version' => 'databaseVersion',
            'delta_error_count' => 'deltaErrorCount',
            'delta_version' => 'deltaVersion',
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

        return $invalidProperties;
    }

    /**
     * @return int
     */
    public function getDatabaseVersion()
    {
        return $this->container['database_version'];
    }

    /**
     * @param int $database_version The version of the current worldmatch database. If the databaseVersion of a worker is less than the databaseVersion of the director, the worker needs to reload the whole worldmatch database in order to synchronize itself with the director.
     *
     * @return $this
     */
    public function setDatabaseVersion($database_version)
    {
        $this->container['database_version'] = $database_version;

        return $this;
    }

    /**
     * @return int
     */
    public function getDeltaErrorCount()
    {
        return $this->container['delta_error_count'];
    }

    /**
     * @param int $delta_error_count The number of errors (rejected delta updates) which occurred while trying to synchronize worker and director. Reloading the worldmatch database resets this counter to zero.
     *
     * @return $this
     */
    public function setDeltaErrorCount($delta_error_count)
    {
        $this->container['delta_error_count'] = $delta_error_count;

        return $this;
    }

    /**
     * @return int
     */
    public function getDeltaVersion()
    {
        return $this->container['delta_version'];
    }

    /**
     * @param int $delta_version The number of delta updates applied to the current worldmatch database. If the deltaVersion of a worker is less than the deltaVersion of the directory, but the databaseVersions are equal, applying the missing delta updates to the worker is sufficient to  synchronize worker and director.
     *
     * @return $this
     */
    public function setDeltaVersion($delta_version)
    {
        $this->container['delta_version'] = $delta_version;

        return $this;
    }
}
