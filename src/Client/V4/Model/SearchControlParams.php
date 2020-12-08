<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * SearchControlParams Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SearchControlParams extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'deduplication_field' => 'string',
            'ids_only' => 'bool',
            'use_asn' => 'bool',
            'use_aso' => 'bool',
            'use_cache' => 'bool',
            'use_campaigns' => 'bool',
            'use_deduplication' => 'bool',
            'use_found_words' => 'bool',
            'use_geo' => 'bool',
            'use_personalization' => 'bool',
            'use_search' => 'bool',
            'use_semantic_enhancer' => 'bool',
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
            'deduplication_field' => 'deduplicationField',
            'ids_only' => 'idsOnly',
            'use_asn' => 'useAsn',
            'use_aso' => 'useAso',
            'use_cache' => 'useCache',
            'use_campaigns' => 'useCampaigns',
            'use_deduplication' => 'useDeduplication',
            'use_found_words' => 'useFoundWords',
            'use_geo' => 'useGeo',
            'use_personalization' => 'usePersonalization',
            'use_search' => 'useSearch',
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

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getDeduplicationField()
    {
        return $this->container['deduplication_field'];
    }

    /**
     * @param string $deduplication_field specifies on which field variants should be deduplicated
     *
     * @return $this
     */
    public function setDeduplicationField($deduplication_field)
    {
        $this->container['deduplication_field'] = $deduplication_field;

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
     * @param bool $ids_only if true, the returned records will contain only record IDs
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
     * @param bool $use_asn if true, filters should be generated for the result
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
     * @param bool $use_aso if true, automatic search optimization will be used
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
    public function getUseCache()
    {
        return $this->container['use_cache'];
    }

    /**
     * @param bool $use_cache if true, the search result will be returned from cache memory, if a possible matching result exists
     *
     * @return $this
     */
    public function setUseCache($use_cache)
    {
        $this->container['use_cache'] = $use_cache;

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
     * @param bool $use_campaigns if true, campaigns corresponding to this search result will be returned
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
    public function getUseDeduplication()
    {
        return $this->container['use_deduplication'];
    }

    /**
     * @param bool $use_deduplication if true, the configured deduplication of variants will be used
     *
     * @return $this
     */
    public function setUseDeduplication($use_deduplication)
    {
        $this->container['use_deduplication'] = $use_deduplication;

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
     * @param bool $use_found_words if true, the words that led to the records in the search results will be determined; this may require a large amount of processing time
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
    public function getUseGeo()
    {
        return $this->container['use_geo'];
    }

    /**
     * @param bool $use_geo use_geo
     *
     * @return $this
     */
    public function setUseGeo($use_geo)
    {
        $this->container['use_geo'] = $use_geo;

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
     * @param bool $use_personalization if true, the relevant products in the result will be personalized
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
    public function getUseSearch()
    {
        return $this->container['use_search'];
    }

    /**
     * @param bool $use_search if true, search will be executed for the query
     *
     * @return $this
     */
    public function setUseSearch($use_search)
    {
        $this->container['use_search'] = $use_search;

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
     * @param bool $use_semantic_enhancer if true, the semantic enhancer will be used
     *
     * @return $this
     */
    public function setUseSemanticEnhancer($use_semantic_enhancer)
    {
        $this->container['use_semantic_enhancer'] = $use_semantic_enhancer;

        return $this;
    }
}
