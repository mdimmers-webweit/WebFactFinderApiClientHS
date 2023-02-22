<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * Group Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Group extends BaseModel implements ModelV4Interface
{
    public const ROLES_AFTER_SEARCH_NAVIGATION_MANAGER = 'AfterSearchNavigationManager';
    public const ROLES_BACKUP_MANAGER = 'BackupManager';
    public const ROLES_CACHE_MANAGER = 'CacheManager';
    public const ROLES_CAMPAIGN_MANAGER = 'CampaignManager';
    public const ROLES_CONFIGURATOR_MANAGER = 'ConfiguratorManager';
    public const ROLES_DEPLOYMENT_MANAGER = 'DeploymentManager';
    public const ROLES_IMPORT_MANAGER = 'ImportManager';
    public const ROLES_INSTALL_MANAGER = 'InstallManager';
    public const ROLES_LANGUAGE_MANAGER = 'LanguageManager';
    public const ROLES_LOGFILE_ANALYZER_MANAGER = 'LogfileAnalyzerManager';
    public const ROLES_MAY_CHANGE_PASSWORD = 'MayChangePassword';
    public const ROLES_MESSAGES_MANAGER = 'MessagesManager';
    public const ROLES_NOTIFICATION_MANAGER = 'NotificationManager';
    public const ROLES_PREPROCESSOR_MANAGER = 'PreprocessorManager';
    public const ROLES_RANKING_MANAGER = 'RankingManager';
    public const ROLES_RECOMMENDATION_ENGINE_MANAGER = 'RecommendationEngineManager';
    public const ROLES_SEARCH_INTERFACE_USER = 'SearchInterfaceUser';
    public const ROLES_SEARCH_MANAGER = 'SearchManager';
    public const ROLES_SHOW_HELP_SECTION = 'ShowHelpSection';
    public const ROLES_SUGGEST_MANAGER = 'SuggestManager';
    public const ROLES_THESAURUS_MANAGER = 'ThesaurusManager';
    public const ROLES_USER_MANAGER = 'UserManager';
    public const ROLES_WORD_VALUES_MANAGER = 'WordValuesManager';
    public const ROLES_API_IMPORT = 'ApiImport';
    public const ROLES_API_ANALYTICS = 'ApiAnalytics';
    public const ROLES_API_PUBLIC_QUERIES = 'ApiPublicQueries';
    public const ROLES_API_CONFIG = 'ApiConfig';
    public const ROLES_API_JOBS = 'ApiJobs';
    public const ROLES_API_DEPLOY = 'ApiDeploy';
    public const ROLES_API_INSTORE_ADS = 'ApiInstoreAds';
    public const ROLES_API_DATABASE = 'ApiDatabase';
    public const ROLES_API_MANAGE = 'ApiManage';
    public const ROLES_API_LICENCE = 'ApiLicence';
    public const ROLES_API_USERS = 'ApiUsers';

    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'id' => 'string',
            'name' => 'string',
            'roles' => 'string[]',
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
            'name' => 'name',
            'roles' => 'roles',
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAllowableValues()
    {
        return [
            self::ROLES_AFTER_SEARCH_NAVIGATION_MANAGER,
            self::ROLES_BACKUP_MANAGER,
            self::ROLES_CACHE_MANAGER,
            self::ROLES_CAMPAIGN_MANAGER,
            self::ROLES_CONFIGURATOR_MANAGER,
            self::ROLES_DEPLOYMENT_MANAGER,
            self::ROLES_IMPORT_MANAGER,
            self::ROLES_INSTALL_MANAGER,
            self::ROLES_LANGUAGE_MANAGER,
            self::ROLES_LOGFILE_ANALYZER_MANAGER,
            self::ROLES_MAY_CHANGE_PASSWORD,
            self::ROLES_MESSAGES_MANAGER,
            self::ROLES_NOTIFICATION_MANAGER,
            self::ROLES_PREPROCESSOR_MANAGER,
            self::ROLES_RANKING_MANAGER,
            self::ROLES_RECOMMENDATION_ENGINE_MANAGER,
            self::ROLES_SEARCH_INTERFACE_USER,
            self::ROLES_SEARCH_MANAGER,
            self::ROLES_SHOW_HELP_SECTION,
            self::ROLES_SUGGEST_MANAGER,
            self::ROLES_THESAURUS_MANAGER,
            self::ROLES_USER_MANAGER,
            self::ROLES_WORD_VALUES_MANAGER,
            self::ROLES_API_IMPORT,
            self::ROLES_API_ANALYTICS,
            self::ROLES_API_PUBLIC_QUERIES,
            self::ROLES_API_CONFIG,
            self::ROLES_API_JOBS,
            self::ROLES_API_DEPLOY,
            self::ROLES_API_INSTORE_ADS,
            self::ROLES_API_DATABASE,
            self::ROLES_API_MANAGE,
            self::ROLES_API_LICENCE,
            self::ROLES_API_USERS,
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
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
     * @param string $id id
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
     * @param string $name the name of the group
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * @param string[] $roles the roles that will be assigned to the users who are part of this group
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $allowedValues = $this->getRolesAllowableValues();
        if (array_diff($roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['roles'] = $roles;

        return $this;
    }
}
