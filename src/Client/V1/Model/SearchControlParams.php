<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

/**
 * FACT-Finder REST-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

namespace Web\FactFinderApi\Client\V1\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SearchControlParams Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SearchControlParams extends BaseModel implements ModelV1Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'disable_cache' => 'bool',
            'generate_advisor_tree' => 'bool',
            'ids_only' => 'bool',
            'use_asn' => 'bool',
            'use_aso' => 'bool',
            'use_campaigns' => 'bool',
            'use_found_words' => 'bool',
            'use_keywords' => 'bool',
            'use_personalization' => 'bool',
            'use_semantic_enhancer' => 'bool',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'disable_cache' => 'disableCache',
            'generate_advisor_tree' => 'generateAdvisorTree',
            'ids_only' => 'idsOnly',
            'use_asn' => 'useAsn',
            'use_aso' => 'useAso',
            'use_campaigns' => 'useCampaigns',
            'use_found_words' => 'useFoundWords',
            'use_keywords' => 'useKeywords',
            'use_personalization' => 'usePersonalization',
            'use_semantic_enhancer' => 'useSemanticEnhancer',
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

        if ($this->container['disable_cache'] === null) {
            $invalidProperties[] = "'disable_cache' can't be null";
        }
        if ($this->container['generate_advisor_tree'] === null) {
            $invalidProperties[] = "'generate_advisor_tree' can't be null";
        }
        if ($this->container['ids_only'] === null) {
            $invalidProperties[] = "'ids_only' can't be null";
        }
        if ($this->container['use_asn'] === null) {
            $invalidProperties[] = "'use_asn' can't be null";
        }
        if ($this->container['use_aso'] === null) {
            $invalidProperties[] = "'use_aso' can't be null";
        }
        if ($this->container['use_campaigns'] === null) {
            $invalidProperties[] = "'use_campaigns' can't be null";
        }
        if ($this->container['use_found_words'] === null) {
            $invalidProperties[] = "'use_found_words' can't be null";
        }
        if ($this->container['use_keywords'] === null) {
            $invalidProperties[] = "'use_keywords' can't be null";
        }
        if ($this->container['use_personalization'] === null) {
            $invalidProperties[] = "'use_personalization' can't be null";
        }
        if ($this->container['use_semantic_enhancer'] === null) {
            $invalidProperties[] = "'use_semantic_enhancer' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return bool
     */
    public function getDisableCache()
    {
        return $this->container['disable_cache'];
    }

    /**
     * @param bool $disable_cache disable_cache
     *
     * @return $this
     */
    public function setDisableCache($disable_cache)
    {
        $this->container['disable_cache'] = $disable_cache;

        return $this;
    }

    /**
     * @return bool
     */
    public function getGenerateAdvisorTree()
    {
        return $this->container['generate_advisor_tree'];
    }

    /**
     * @param bool $generate_advisor_tree generate_advisor_tree
     *
     * @return $this
     */
    public function setGenerateAdvisorTree($generate_advisor_tree)
    {
        $this->container['generate_advisor_tree'] = $generate_advisor_tree;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIdsOnly()
    {
        return $this->container['ids_only'];
    }

    /**
     * @param bool $ids_only ids_only
     *
     * @return $this
     */
    public function setIdsOnly($ids_only)
    {
        $this->container['ids_only'] = $ids_only;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseAsn()
    {
        return $this->container['use_asn'];
    }

    /**
     * @param bool $use_asn use_asn
     *
     * @return $this
     */
    public function setUseAsn($use_asn)
    {
        $this->container['use_asn'] = $use_asn;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseAso()
    {
        return $this->container['use_aso'];
    }

    /**
     * @param bool $use_aso use_aso
     *
     * @return $this
     */
    public function setUseAso($use_aso)
    {
        $this->container['use_aso'] = $use_aso;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseCampaigns()
    {
        return $this->container['use_campaigns'];
    }

    /**
     * @param bool $use_campaigns use_campaigns
     *
     * @return $this
     */
    public function setUseCampaigns($use_campaigns)
    {
        $this->container['use_campaigns'] = $use_campaigns;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseFoundWords()
    {
        return $this->container['use_found_words'];
    }

    /**
     * @param bool $use_found_words use_found_words
     *
     * @return $this
     */
    public function setUseFoundWords($use_found_words)
    {
        $this->container['use_found_words'] = $use_found_words;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseKeywords()
    {
        return $this->container['use_keywords'];
    }

    /**
     * @param bool $use_keywords use_keywords
     *
     * @return $this
     */
    public function setUseKeywords($use_keywords)
    {
        $this->container['use_keywords'] = $use_keywords;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUsePersonalization()
    {
        return $this->container['use_personalization'];
    }

    /**
     * @param bool $use_personalization use_personalization
     *
     * @return $this
     */
    public function setUsePersonalization($use_personalization)
    {
        $this->container['use_personalization'] = $use_personalization;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseSemanticEnhancer()
    {
        return $this->container['use_semantic_enhancer'];
    }

    /**
     * @param bool $use_semantic_enhancer use_semantic_enhancer
     *
     * @return $this
     */
    public function setUseSemanticEnhancer($use_semantic_enhancer)
    {
        $this->container['use_semantic_enhancer'] = $use_semantic_enhancer;

        return $this;
    }
}
