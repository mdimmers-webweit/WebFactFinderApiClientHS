<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\Api\SearchApiInterface;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\Model\SearchRequestBase;
use Web\FactFinderApi\Client\ObjectSerializer;
use Web\FactFinderApi\Client\V4\Model\CategoryNavigation;
use Web\FactFinderApi\Client\V4\Model\NavigationRequest;
use Web\FactFinderApi\Client\V4\Model\Result;
use Web\FactFinderApi\Client\V4\Model\SearchParams;
use Web\FactFinderApi\Client\V4\Model\SearchRequest;
use Web\FactFinderApi\Client\V4\Model\SuggestionResult;

/**
 * SearchApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi extends ApiClient implements SearchApiInterface
{
    /**
     * Operation categoryNavigationUsingGET
     *
     * Category ASN for Navigation
     *
     * @param string   $channel          channel (required)
     * @param string   $sid              The session id (optional)
     * @param int      $start_level      Category start level (optional)
     * @param int      $end_level        Category end level (optional)
     * @param string[] $filter           Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param string[] $substring_filter Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param float    $latitude         The latitude coordinate of the location. (optional)
     * @param float    $longitude        The longitude coordinate of the location. (optional)
     * @param string   $market_id        The special marketId filter (optional)
     * @param bool     $use_cache        If true, the search result will be returned from cache memory, if a possible matching result exists. (optional, default to true)
     * @param bool     $use_geo          If true geoSearch features will be active. (optional, default to true)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function categoryNavigationUsingGET(string $channel, $sid = null, $start_level = null, $end_level = null, $filter = null, $substring_filter = null, $latitude = null, $longitude = null, $market_id = null, bool $use_cache = true, bool $use_geo = true): CategoryNavigation
    {
        list($response) = $this->categoryNavigationUsingGETWithHttpInfo($channel, $sid, $start_level, $end_level, $filter, $substring_filter, $latitude, $longitude, $market_id, $use_cache, $use_geo);

        return $response;
    }

    /**
     * Operation categoryNavigationUsingGETWithHttpInfo
     *
     * Category ASN for Navigation
     *
     * @param string   $channel          channel (required)
     * @param string   $sid              The session id (optional)
     * @param int      $start_level      Category start level (optional)
     * @param int      $end_level        Category end level (optional)
     * @param string[] $filter           Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param string[] $substring_filter Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param float    $latitude         The latitude coordinate of the location. (optional)
     * @param float    $longitude        The longitude coordinate of the location. (optional)
     * @param string   $market_id        The special marketId filter (optional)
     * @param bool     $use_cache        If true, the search result will be returned from cache memory, if a possible matching result exists. (optional, default to true)
     * @param bool     $use_geo          If true geoSearch features will be active. (optional, default to true)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\CategoryNavigation, HTTP status code, HTTP response headers (array of strings)
     */
    public function categoryNavigationUsingGETWithHttpInfo(string $channel, $sid = null, $start_level = null, $end_level = null, $filter = null, $substring_filter = null, $latitude = null, $longitude = null, $market_id = null, bool $use_cache = true, bool $use_geo = true)
    {
        $request = $this->categoryNavigationUsingGETRequest($channel, $sid, $start_level, $end_level, $filter, $substring_filter, $latitude, $longitude, $market_id, $use_cache, $use_geo);

        return $this->executeRequest($request, CategoryNavigation::class);
    }

    /**
     * Operation getSuggestionsUsingPOST
     *
     * Get suggestions with POST
     *
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $params params (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getSuggestionsUsingPOST($params): SuggestionResult
    {
        list($response) = $this->getSuggestionsUsingPOSTWithHttpInfo($params);

        return $response;
    }

    /**
     * Operation getSuggestionsUsingPOSTWithHttpInfo
     *
     * Get suggestions with POST
     *
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $params params (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\SuggestionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSuggestionsUsingPOSTWithHttpInfo($params): array
    {
        $request = $this->getSuggestionsUsingPOSTRequest($params);

        return $this->executeRequest($request, SuggestionResult::class);
    }

    /**
     * Operation navigationUsingPOST
     *
     * Navigation with POST
     *
     * @param \Web\FactFinderApi\Client\V4\Model\NavigationRequest $navigation_request navigationRequest (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Result
     */
    public function navigationUsingPOST($navigation_request)
    {
        list($response) = $this->navigationUsingPOSTWithHttpInfo($navigation_request);

        return $response;
    }

    /**
     * Operation navigationUsingPOSTWithHttpInfo
     *
     * Navigation with POST
     *
     * @param \Web\FactFinderApi\Client\V4\Model\NavigationRequest $navigation_request navigationRequest (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Result, HTTP status code, HTTP response headers (array of strings)
     */
    public function navigationUsingPOSTWithHttpInfo($navigation_request)
    {
        $request = $this->navigationUsingPOSTRequest($navigation_request);

        return $this->executeRequest($request, Result::class);
    }

    /**
     * Operation searchUsingPOST
     *
     * Search with POST
     *
     * @param \Web\FactFinderApi\Client\V4\Model\SearchRequest $search_request searchRequest (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Result
     */
    public function searchUsingPOST(SearchRequestBase $search_request)
    {
        list($response) = $this->searchUsingPOSTWithHttpInfo($search_request);

        return $response;
    }

    /**
     * Operation searchUsingPOSTWithHttpInfo
     *
     * Search with POST
     *
     * @param \Web\FactFinderApi\Client\V4\Model\SearchRequest $search_request searchRequest (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Result, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchUsingPOSTWithHttpInfo(SearchRequest $search_request): array
    {
        $request = $this->searchUsingPOSTRequest($search_request);

        return $this->executeRequest($request, Result::class);
    }

    /**
     * Create request for operation 'categoryNavigationUsingGET'
     *
     * @param string   $channel          channel (required)
     * @param string   $sid              The session id (optional)
     * @param int      $start_level      Category start level (optional)
     * @param int      $end_level        Category end level (optional)
     * @param string[] $filter           Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param string[] $substring_filter Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param float    $latitude         The latitude coordinate of the location. (optional)
     * @param float    $longitude        The longitude coordinate of the location. (optional)
     * @param string   $market_id        The special marketId filter (optional)
     * @param bool     $use_cache        If true, the search result will be returned from cache memory, if a possible matching result exists. (optional, default to true)
     * @param bool     $use_geo          If true geoSearch features will be active. (optional, default to true)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function categoryNavigationUsingGETRequest(string $channel, $sid = null, $start_level = null, $end_level = null, $filter = null, $substring_filter = null, $latitude = null, $longitude = null, $market_id = null, bool $use_cache = true, bool $use_geo = true)
    {
        $resourcePath = '/rest/v4/navigation/category/{channel}';
        $queryParams = [];

        // query params
        if ($sid !== null) {
            $queryParams['sid'] = ObjectSerializer::toQueryValue($sid);
        }
        // query params
        if ($start_level !== null) {
            $queryParams['startLevel'] = ObjectSerializer::toQueryValue($start_level);
        }
        // query params
        if ($end_level !== null) {
            $queryParams['endLevel'] = ObjectSerializer::toQueryValue($end_level);
        }
        // query params
        if (\is_array($filter)) {
            $queryParams['filter'] = $filter;
        } elseif ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if (\is_array($substring_filter)) {
            $queryParams['substringFilter'] = $substring_filter;
        } elseif ($substring_filter !== null) {
            $queryParams['substringFilter'] = ObjectSerializer::toQueryValue($substring_filter);
        }
        // query params
        if ($latitude !== null) {
            $queryParams['latitude'] = ObjectSerializer::toQueryValue($latitude);
        }
        // query params
        if ($longitude !== null) {
            $queryParams['longitude'] = ObjectSerializer::toQueryValue($longitude);
        }
        // query params
        if ($market_id !== null) {
            $queryParams['marketId'] = ObjectSerializer::toQueryValue($market_id);
        }
        // query params
        if ($use_cache !== null) {
            $queryParams['useCache'] = ObjectSerializer::toQueryValue($use_cache);
        }
        // query params
        if ($use_geo !== null) {
            $queryParams['useGeo'] = ObjectSerializer::toQueryValue($use_geo);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getSuggestionsUsingGET'
     *
     * @param string   $channel               channel (required)
     * @param string   $query                 The search term (required)
     * @param string[] $filter                Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param string[] $substring_filter      Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param string[] $sort                  Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc (optional)
     * @param string[] $cache_irrelevant      Flag parameters as cache irrelevant (optional)
     * @param float    $latitude              The latitude coordinate of the location. (optional)
     * @param float    $longitude             The longitude coordinate of the location. (optional)
     * @param string   $market_id             The special marketId filter (optional)
     * @param int      $page                  If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1. (optional)
     * @param int      $hits_per_page         In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter. (optional)
     * @param int      $max_count_variants    The maximum number of variants to return for every record (optional)
     * @param string   $advisor_status        For specifying the current campaign id and answer path; format: campaignId-answerPath (optional)
     * @param string   $search_field          Normally FACT-Finder searches all fields defined as searchable. However it is possible to search only one specific field as well. (optional)
     * @param string   $article_number_search Specifies if the query should be interpreted as article number (optional, default to DETECT)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getSuggestionsUsingGETRequest(string $channel, string $query, $filter = null, $substring_filter = null, $sort = null, $cache_irrelevant = null, $latitude = null, $longitude = null, $market_id = null, $page = null, $hits_per_page = null, $max_count_variants = null, $advisor_status = null, $search_field = null, $article_number_search = 'DETECT')
    {
        $resourcePath = '/rest/v4/suggest/{channel}';
        $queryParams = [];

        // query params
        if (\is_array($filter)) {
            $queryParams['filter'] = $filter;
        } elseif ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if (\is_array($substring_filter)) {
            $queryParams['substringFilter'] = $substring_filter;
        } elseif ($substring_filter !== null) {
            $queryParams['substringFilter'] = ObjectSerializer::toQueryValue($substring_filter);
        }
        // query params
        if (\is_array($sort)) {
            $queryParams['sort'] = $sort;
        } elseif ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if (\is_array($cache_irrelevant)) {
            $queryParams['cacheIrrelevant'] = $cache_irrelevant;
        } elseif ($cache_irrelevant !== null) {
            $queryParams['cacheIrrelevant'] = ObjectSerializer::toQueryValue($cache_irrelevant);
        }
        // query params
        if ($latitude !== null) {
            $queryParams['latitude'] = ObjectSerializer::toQueryValue($latitude);
        }
        // query params
        if ($longitude !== null) {
            $queryParams['longitude'] = ObjectSerializer::toQueryValue($longitude);
        }
        // query params
        if ($market_id !== null) {
            $queryParams['marketId'] = ObjectSerializer::toQueryValue($market_id);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($hits_per_page !== null) {
            $queryParams['hitsPerPage'] = ObjectSerializer::toQueryValue($hits_per_page);
        }
        // query params
        if ($max_count_variants !== null) {
            $queryParams['maxCountVariants'] = ObjectSerializer::toQueryValue($max_count_variants);
        }
        // query params
        if ($advisor_status !== null) {
            $queryParams['advisorStatus'] = ObjectSerializer::toQueryValue($advisor_status);
        }
        // query params
        if ($search_field !== null) {
            $queryParams['searchField'] = ObjectSerializer::toQueryValue($search_field);
        }
        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }
        // query params
        if ($article_number_search !== null) {
            $queryParams['articleNumberSearch'] = ObjectSerializer::toQueryValue($article_number_search);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        // body params
        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getSuggestionsUsingPOST'
     *
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $params params (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getSuggestionsUsingPOSTRequest(SearchParams $params)
    {
        $resourcePath = '/rest/v4/suggest';
        $queryParams = [];

        return $this->postQuery($resourcePath, $queryParams, $params);
    }

    /**
     * Create request for operation 'navigationUsingGET'
     *
     * @param string   $channel               channel (required)
     * @param string   $sid                   The session id (optional)
     * @param string[] $filter                Filter for the whole field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param string[] $substring_filter      Filter for a sub string of the field value; a filter can have multiple values, the values can be separated with the following characters (they are configurable in the config.xml) &#39;and&#39; &#x3D; \\_\\_\\_ &#39;or&#39; &#x3D; ~~~ the filter value can be excluded with the prefix ! format: facetid:value; example Red~~~!Green &#x3D; red or not green (optional)
     * @param string[] $sort                  Sort the result; use FieldName Relevancy to sort the relevancy; format: FieldName:order order must be either asc or desc; example Manufacturer:asc (optional)
     * @param string[] $cache_irrelevant      Flag parameters as cache irrelevant (optional)
     * @param float    $latitude              The latitude coordinate of the location. (optional)
     * @param float    $longitude             The longitude coordinate of the location. (optional)
     * @param string   $market_id             The special marketId filter (optional)
     * @param int      $page                  If a search result contains many results these will be divided into pages. This limits the amount of data that has to be sent in one go. You can indicate which page should be returned. Page numbering starts at 1. (optional)
     * @param int      $hits_per_page         In the FACT-Finder Management Interface you can define how many results will be returned on a page by default. If you prefer another number, you can set it with this parameter. (optional)
     * @param int      $max_count_variants    The maximum number of variants to return for every record (optional)
     * @param string   $advisor_status        For specifying the current campaign id and answer path; format: campaignId-answerPath (optional)
     * @param bool     $use_cache             If true, the search result will be returned from cache memory, if a possible matching result exists. (optional, default to true)
     * @param bool     $use_geo               If true geoSearch features will be active. (optional, default to true)
     * @param bool     $use_search            If true, search will be executed for the query. (optional, default to true)
     * @param bool     $use_asn               If true, filters should be generated for the result. (optional, default to true)
     * @param bool     $use_found_words       If true, the words that led to the records in the search results will be determined; this may require a large amount of processing time. (optional, default to false)
     * @param bool     $use_campaigns         If true, campaigns corresponding to this search result will be returned. (optional, default to true)
     * @param bool     $ids_only              If true, the returned records will contain only record IDs. (optional, default to false)
     * @param bool     $use_personalization   If true, the relevant products in the result will be personalized. (optional, default to true)
     * @param bool     $use_semantic_enhancer If true, the semantic enhancer will be used. (optional, default to true)
     * @param bool     $use_aso               If true, automatic search optimization will be used. (optional, default to true)
     * @param bool     $use_deduplication     If true, the configured deduplication of variants will be used. (optional, default to true)
     * @param string   $deduplication_field   Specifies on which field variants should be deduplicated. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function navigationUsingGETRequest(string $channel, $sid = null, $filter = null, $substring_filter = null, $sort = null, $cache_irrelevant = null, $latitude = null, $longitude = null, $market_id = null, $page = null, $hits_per_page = null, $max_count_variants = null, $advisor_status = null, bool $use_cache = true, bool $use_geo = true, bool $use_search = true, bool $use_asn = true, bool $use_found_words = false, bool $use_campaigns = true, bool $ids_only = false, bool $use_personalization = true, bool $use_semantic_enhancer = true, bool $use_aso = true, bool $use_deduplication = true, $deduplication_field = null)
    {
        $resourcePath = '/rest/v4/navigation/{channel}';
        $queryParams = [];

        // query params
        if ($sid !== null) {
            $queryParams['sid'] = ObjectSerializer::toQueryValue($sid);
        }
        // query params
        if (\is_array($filter)) {
            $queryParams['filter'] = $filter;
        } elseif ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if (\is_array($substring_filter)) {
            $queryParams['substringFilter'] = $substring_filter;
        } elseif ($substring_filter !== null) {
            $queryParams['substringFilter'] = ObjectSerializer::toQueryValue($substring_filter);
        }
        // query params
        if (\is_array($sort)) {
            $queryParams['sort'] = $sort;
        } elseif ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if (\is_array($cache_irrelevant)) {
            $queryParams['cacheIrrelevant'] = $cache_irrelevant;
        } elseif ($cache_irrelevant !== null) {
            $queryParams['cacheIrrelevant'] = ObjectSerializer::toQueryValue($cache_irrelevant);
        }
        // query params
        if ($latitude !== null) {
            $queryParams['latitude'] = ObjectSerializer::toQueryValue($latitude);
        }
        // query params
        if ($longitude !== null) {
            $queryParams['longitude'] = ObjectSerializer::toQueryValue($longitude);
        }
        // query params
        if ($market_id !== null) {
            $queryParams['marketId'] = ObjectSerializer::toQueryValue($market_id);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($hits_per_page !== null) {
            $queryParams['hitsPerPage'] = ObjectSerializer::toQueryValue($hits_per_page);
        }
        // query params
        if ($max_count_variants !== null) {
            $queryParams['maxCountVariants'] = ObjectSerializer::toQueryValue($max_count_variants);
        }
        // query params
        if ($advisor_status !== null) {
            $queryParams['advisorStatus'] = ObjectSerializer::toQueryValue($advisor_status);
        }
        // query params
        if ($use_cache !== null) {
            $queryParams['useCache'] = ObjectSerializer::toQueryValue($use_cache);
        }
        // query params
        if ($use_geo !== null) {
            $queryParams['useGeo'] = ObjectSerializer::toQueryValue($use_geo);
        }
        // query params
        if ($use_search !== null) {
            $queryParams['useSearch'] = ObjectSerializer::toQueryValue($use_search);
        }
        // query params
        if ($use_asn !== null) {
            $queryParams['useAsn'] = ObjectSerializer::toQueryValue($use_asn);
        }
        // query params
        if ($use_found_words !== null) {
            $queryParams['useFoundWords'] = ObjectSerializer::toQueryValue($use_found_words);
        }
        // query params
        if ($use_campaigns !== null) {
            $queryParams['useCampaigns'] = ObjectSerializer::toQueryValue($use_campaigns);
        }
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if ($use_personalization !== null) {
            $queryParams['usePersonalization'] = ObjectSerializer::toQueryValue($use_personalization);
        }
        // query params
        if ($use_semantic_enhancer !== null) {
            $queryParams['useSemanticEnhancer'] = ObjectSerializer::toQueryValue($use_semantic_enhancer);
        }
        // query params
        if ($use_aso !== null) {
            $queryParams['useAso'] = ObjectSerializer::toQueryValue($use_aso);
        }
        // query params
        if ($use_deduplication !== null) {
            $queryParams['useDeduplication'] = ObjectSerializer::toQueryValue($use_deduplication);
        }
        // query params
        if ($deduplication_field !== null) {
            $queryParams['deduplicationField'] = ObjectSerializer::toQueryValue($deduplication_field);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        // body params
        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'navigationUsingPOST'
     *
     * @param \Web\FactFinderApi\Client\V4\Model\NavigationRequest $navigation_request navigationRequest (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function navigationUsingPOSTRequest(NavigationRequest $navigation_request)
    {
        $resourcePath = '/rest/v4/navigation';
        $queryParams = [];

        return $this->postQuery($resourcePath, $queryParams, $navigation_request);
    }

    protected function searchUsingPOSTRequest(SearchRequest $search_request)
    {
        // verify the required parameter 'search_request' is set
        if ($search_request === null || (\is_array($search_request) && \count($search_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_request when calling searchUsingPOST'
            );
        }

        $resourcePath = '/rest/v4/search';
        $queryParams = [];

        return $this->postQuery($resourcePath, $queryParams, $search_request);
    }
}
