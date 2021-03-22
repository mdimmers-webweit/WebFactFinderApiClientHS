<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * UserNoPassword Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class UserNoPassword extends BaseModel implements ModelV4Interface
{
    const ROLES_AFTER_SEARCH_NAVIGATION_MANAGER = 'AfterSearchNavigationManager';
    const ROLES_BACKUP_MANAGER = 'BackupManager';
    const ROLES_CACHE_MANAGER = 'CacheManager';
    const ROLES_CAMPAIGN_MANAGER = 'CampaignManager';
    const ROLES_CONFIGURATOR_MANAGER = 'ConfiguratorManager';
    const ROLES_DEPLOYMENT_MANAGER = 'DeploymentManager';
    const ROLES_IMPORT_MANAGER = 'ImportManager';
    const ROLES_INSTALL_MANAGER = 'InstallManager';
    const ROLES_LANGUAGE_MANAGER = 'LanguageManager';
    const ROLES_LOGFILE_ANALYZER_MANAGER = 'LogfileAnalyzerManager';
    const ROLES_MAY_CHANGE_PASSWORD = 'MayChangePassword';
    const ROLES_MESSAGES_MANAGER = 'MessagesManager';
    const ROLES_NOTIFICATION_MANAGER = 'NotificationManager';
    const ROLES_PREPROCESSOR_MANAGER = 'PreprocessorManager';
    const ROLES_RANKING_MANAGER = 'RankingManager';
    const ROLES_RECOMMENDATION_ENGINE_MANAGER = 'RecommendationEngineManager';
    const ROLES_SEARCH_INTERFACE_USER = 'SearchInterfaceUser';
    const ROLES_SEARCH_MANAGER = 'SearchManager';
    const ROLES_SHOW_HELP_SECTION = 'ShowHelpSection';
    const ROLES_SUGGEST_MANAGER = 'SuggestManager';
    const ROLES_THESAURUS_MANAGER = 'ThesaurusManager';
    const ROLES_USER_MANAGER = 'UserManager';
    const ROLES_WORD_VALUES_MANAGER = 'WordValuesManager';
    const ROLES_API_IMPORT = 'ApiImport';
    const ROLES_API_ANALYTICS = 'ApiAnalytics';
    const ROLES_API_PUBLIC_QUERIES = 'ApiPublicQueries';
    const ROLES_API_CONFIG = 'ApiConfig';
    const ROLES_API_JOBS = 'ApiJobs';
    const ROLES_API_DEPLOY = 'ApiDeploy';
    const ROLES_API_INSTORE_ADS = 'ApiInstoreAds';
    const ROLES_API_DATABASE = 'ApiDatabase';
    const ROLES_API_MANAGE = 'ApiManage';
    const ROLES_API_LICENCE = 'ApiLicence';
    const ROLES_API_USERS = 'ApiUsers';
    const ORIGIN_LOCAL = 'LOCAL';
    const ORIGIN_REMOTE = 'REMOTE';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'id' => 'string',
            'name' => 'string',
            'roles' => 'string[]',
            'channels' => 'string[]',
            'groups' => 'string[]',
            'hide_inactive_modules' => 'bool',
            'hide_error_notifications' => 'bool',
            'enable_advanced_mode' => 'bool',
            'allow_all_current_and_future_channels' => 'bool',
            'last_active' => '\DateTime',
            'origin' => 'string',
            'locale' => 'string',
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
            'id' => 'id',
            'name' => 'name',
            'roles' => 'roles',
            'channels' => 'channels',
            'groups' => 'groups',
            'hide_inactive_modules' => 'hideInactiveModules',
            'hide_error_notifications' => 'hideErrorNotifications',
            'enable_advanced_mode' => 'enableAdvancedMode',
            'allow_all_current_and_future_channels' => 'allowAllCurrentAndFutureChannels',
            'last_active' => 'lastActive',
            'origin' => 'origin',
            'locale' => 'locale',
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_LOCAL,
            self::ORIGIN_REMOTE,
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
        if ($this->container['channels'] === null) {
            $invalidProperties[] = "'channels' can't be null";
        }
        if ($this->container['groups'] === null) {
            $invalidProperties[] = "'groups' can't be null";
        }
        if ($this->container['hide_inactive_modules'] === null) {
            $invalidProperties[] = "'hide_inactive_modules' can't be null";
        }
        if ($this->container['hide_error_notifications'] === null) {
            $invalidProperties[] = "'hide_error_notifications' can't be null";
        }
        if ($this->container['enable_advanced_mode'] === null) {
            $invalidProperties[] = "'enable_advanced_mode' can't be null";
        }
        if ($this->container['allow_all_current_and_future_channels'] === null) {
            $invalidProperties[] = "'allow_all_current_and_future_channels' can't be null";
        }
        if ($this->container['last_active'] === null) {
            $invalidProperties[] = "'last_active' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!\is_null($this->container['origin']) && !\in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'origin', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
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
     * @param string $name the name of the user
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
     * @param string[] $roles the roles assigned to the user
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $allowedValues = $this->getRolesAllowableValues();
        if (\array_diff($roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'roles', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * @param string[] $channels the channels assigned to the user
     *
     * @return $this
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * @param string[] $groups the groups assigned to the user
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHideInactiveModules()
    {
        return $this->container['hide_inactive_modules'];
    }

    /**
     * @param bool $hide_inactive_modules whether inactive modules should be hidden by default
     *
     * @return $this
     */
    public function setHideInactiveModules($hide_inactive_modules)
    {
        $this->container['hide_inactive_modules'] = $hide_inactive_modules;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHideErrorNotifications()
    {
        return $this->container['hide_error_notifications'];
    }

    /**
     * @param bool $hide_error_notifications whether error notifications should be hidden by default
     *
     * @return $this
     */
    public function setHideErrorNotifications($hide_error_notifications)
    {
        $this->container['hide_error_notifications'] = $hide_error_notifications;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableAdvancedMode()
    {
        return $this->container['enable_advanced_mode'];
    }

    /**
     * @param bool $enable_advanced_mode in advanced mode the user sees all pages, in normal mode some settings pages are hidden
     *
     * @return $this
     */
    public function setEnableAdvancedMode($enable_advanced_mode)
    {
        $this->container['enable_advanced_mode'] = $enable_advanced_mode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowAllCurrentAndFutureChannels()
    {
        return $this->container['allow_all_current_and_future_channels'];
    }

    /**
     * @param bool $allow_all_current_and_future_channels If set to true the user has access to all channels. In that case any explicitly specified channels are ignored.
     *
     * @return $this
     */
    public function setAllowAllCurrentAndFutureChannels($allow_all_current_and_future_channels)
    {
        $this->container['allow_all_current_and_future_channels'] = $allow_all_current_and_future_channels;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastActive()
    {
        return $this->container['last_active'];
    }

    /**
     * @param \DateTime $last_active time when the user was last active
     *
     * @return $this
     */
    public function setLastActive($last_active)
    {
        $this->container['last_active'] = $last_active;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * @param string $origin the origin of the user
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!\in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'origin', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * @param string $locale the locale of the user
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }
}
