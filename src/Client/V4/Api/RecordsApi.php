<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\Configuration;
use Web\FactFinderApi\Client\ObjectSerializer;
use Web\FactFinderApi\Client\V4\Model\CompareResult;

/**
 * RecordsApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class RecordsApi extends ApiClient
{
    /**
     * Operation compareUsingGET
     *
     * Compare products
     *
     * @param string   $channel  channel (required)
     * @param bool     $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string[] $id       Use this parameter to pass product ID(s) which should be compared. (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\CompareResult
     */
    public function compareUsingGET(string $channel, bool $ids_only = false, $id = null)
    {
        list($response) = $this->compareUsingGETWithHttpInfo($channel, $ids_only, $id);

        return $response;
    }

    /**
     * Operation compareUsingGETWithHttpInfo
     *
     * Compare products
     *
     * @param string   $channel  channel (required)
     * @param bool     $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string[] $id       Use this parameter to pass product ID(s) which should be compared. (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\CompareResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function compareUsingGETWithHttpInfo(string $channel, bool $ids_only = false, $id = null)
    {
        $request = $this->compareUsingGETRequest($channel, $ids_only, $id);

        return $this->executeRequest($request, CompareResult::class);
    }

    /**
     * Operation compareUsingGETAsync
     *
     * Compare products
     *
     * @param string   $channel  channel (required)
     * @param bool     $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string[] $id       Use this parameter to pass product ID(s) which should be compared. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function compareUsingGETAsync(string $channel, bool $ids_only = false, $id = null)
    {
        return $this->compareUsingGETAsyncWithHttpInfo($channel, $ids_only, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation compareUsingGETAsyncWithHttpInfo
     *
     * Compare products
     *
     * @param string   $channel  channel (required)
     * @param bool     $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string[] $id       Use this parameter to pass product ID(s) which should be compared. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function compareUsingGETAsyncWithHttpInfo(string $channel, bool $ids_only = false, $id = null)
    {
        $request = $this->compareUsingGETRequest($channel, $ids_only, $id);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\CompareResult::class);
    }

    /**
     * Operation deleteUsingDELETE
     *
     * Delete records
     *
     * @param string                                           $channel        channel (required)
     * @param string[]                                         $record_id      The ids from the records which should be deleted. (optional)
     * @param \Web\FactFinderApi\Client\V4\Model\DeleteRequest $delete_request deleteRequest (optional)
     * @param string                                           $id_type        Specifies the type of id given. (optional, default to productNumber)
     * @param bool                                             $verbose        verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\DeleteResult[]
     */
    public function deleteUsingDELETE(string $channel, $record_id = null, $delete_request = null, $id_type = 'productNumber', bool $verbose = false)
    {
        list($response) = $this->deleteUsingDELETEWithHttpInfo($channel, $record_id, $delete_request, $id_type, $verbose);

        return $response;
    }

    /**
     * Operation deleteUsingDELETEWithHttpInfo
     *
     * Delete records
     *
     * @param string                                           $channel        channel (required)
     * @param string[]                                         $record_id      The ids from the records which should be deleted. (optional)
     * @param \Web\FactFinderApi\Client\V4\Model\DeleteRequest $delete_request deleteRequest (optional)
     * @param string                                           $id_type        Specifies the type of id given. (optional, default to productNumber)
     * @param bool                                             $verbose        verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\DeleteResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUsingDELETEWithHttpInfo(string $channel, $record_id = null, $delete_request = null, $id_type = 'productNumber', bool $verbose = false)
    {
        $request = $this->deleteUsingDELETERequest($channel, $record_id, $delete_request, $id_type, $verbose);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeleteResult[]');
    }

    /**
     * Operation deleteUsingDELETEAsync
     *
     * Delete records
     *
     * @param string                                           $channel        channel (required)
     * @param string[]                                         $record_id      The ids from the records which should be deleted. (optional)
     * @param \Web\FactFinderApi\Client\V4\Model\DeleteRequest $delete_request deleteRequest (optional)
     * @param string                                           $id_type        Specifies the type of id given. (optional, default to productNumber)
     * @param bool                                             $verbose        verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteUsingDELETEAsync(string $channel, $record_id = null, $delete_request = null, $id_type = 'productNumber', bool $verbose = false)
    {
        return $this->deleteUsingDELETEAsyncWithHttpInfo($channel, $record_id, $delete_request, $id_type, $verbose)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteUsingDELETEAsyncWithHttpInfo
     *
     * Delete records
     *
     * @param string                                           $channel        channel (required)
     * @param string[]                                         $record_id      The ids from the records which should be deleted. (optional)
     * @param \Web\FactFinderApi\Client\V4\Model\DeleteRequest $delete_request deleteRequest (optional)
     * @param string                                           $id_type        Specifies the type of id given. (optional, default to productNumber)
     * @param bool                                             $verbose        verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteUsingDELETEAsyncWithHttpInfo(string $channel, $record_id = null, $delete_request = null, $id_type = 'productNumber', bool $verbose = false)
    {
        $request = $this->deleteUsingDELETERequest($channel, $record_id, $delete_request, $id_type, $verbose);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeleteResult[]');
    }

    /**
     * Operation getDetailPageUsingGET
     *
     * Get the detail page
     *
     * @param string $channel                      channel (required)
     * @param string $id                           The id for which the detailpage should be returned. (required)
     * @param string $id_type                      Specifies which type of id is given. (optional, default to id)
     * @param bool   $ids_only                     If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results_recommendations  Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param int    $max_results_similar_products Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     * @param bool   $use_personalization          Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     * @param string $sid                          This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     * @param int    $max_count_variants           The maximum number of variants to return for every record (optional, default to 5)
     * @param bool   $with_campaigns               withCampaigns (optional, default to true)
     * @param bool   $with_recommendations         withRecommendations (optional, default to true)
     * @param bool   $with_similar_products        withSimilarProducts (optional, default to true)
     * @param bool   $with_record                  withRecord (optional, default to true)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\DetailPage
     */
    public function getDetailPageUsingGET(string $channel, $id, $id_type = 'id', bool $ids_only = false, int $max_results_recommendations = 0, int $max_results_similar_products = 10, bool $use_personalization = true, $sid = null, int $max_count_variants = 5, bool $with_campaigns = true, bool $with_recommendations = true, bool $with_similar_products = true, bool $with_record = true)
    {
        list($response) = $this->getDetailPageUsingGETWithHttpInfo($channel, $id, $id_type, $ids_only, $max_results_recommendations, $max_results_similar_products, $use_personalization, $sid, $max_count_variants, $with_campaigns, $with_recommendations, $with_similar_products, $with_record);

        return $response;
    }

    /**
     * Operation getDetailPageUsingGETWithHttpInfo
     *
     * Get the detail page
     *
     * @param string $channel                      channel (required)
     * @param string $id                           The id for which the detailpage should be returned. (required)
     * @param string $id_type                      Specifies which type of id is given. (optional, default to id)
     * @param bool   $ids_only                     If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results_recommendations  Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param int    $max_results_similar_products Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     * @param bool   $use_personalization          Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     * @param string $sid                          This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     * @param int    $max_count_variants           The maximum number of variants to return for every record (optional, default to 5)
     * @param bool   $with_campaigns               withCampaigns (optional, default to true)
     * @param bool   $with_recommendations         withRecommendations (optional, default to true)
     * @param bool   $with_similar_products        withSimilarProducts (optional, default to true)
     * @param bool   $with_record                  withRecord (optional, default to true)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\DetailPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDetailPageUsingGETWithHttpInfo(string $channel, $id, $id_type = 'id', bool $ids_only = false, int $max_results_recommendations = 0, int $max_results_similar_products = 10, bool $use_personalization = true, $sid = null, int $max_count_variants = 5, bool $with_campaigns = true, bool $with_recommendations = true, bool $with_similar_products = true, bool $with_record = true)
    {
        $request = $this->getDetailPageUsingGETRequest($channel, $id, $id_type, $ids_only, $max_results_recommendations, $max_results_similar_products, $use_personalization, $sid, $max_count_variants, $with_campaigns, $with_recommendations, $with_similar_products, $with_record);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V4\Model\DetailPage::class);
    }

    /**
     * Operation getDetailPageUsingGETAsync
     *
     * Get the detail page
     *
     * @param string $channel                      channel (required)
     * @param string $id                           The id for which the detailpage should be returned. (required)
     * @param string $id_type                      Specifies which type of id is given. (optional, default to id)
     * @param bool   $ids_only                     If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results_recommendations  Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param int    $max_results_similar_products Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     * @param bool   $use_personalization          Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     * @param string $sid                          This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     * @param int    $max_count_variants           The maximum number of variants to return for every record (optional, default to 5)
     * @param bool   $with_campaigns               withCampaigns (optional, default to true)
     * @param bool   $with_recommendations         withRecommendations (optional, default to true)
     * @param bool   $with_similar_products        withSimilarProducts (optional, default to true)
     * @param bool   $with_record                  withRecord (optional, default to true)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getDetailPageUsingGETAsync(string $channel, $id, $id_type = 'id', bool $ids_only = false, int $max_results_recommendations = 0, int $max_results_similar_products = 10, bool $use_personalization = true, $sid = null, int $max_count_variants = 5, bool $with_campaigns = true, bool $with_recommendations = true, bool $with_similar_products = true, bool $with_record = true)
    {
        return $this->getDetailPageUsingGETAsyncWithHttpInfo($channel, $id, $id_type, $ids_only, $max_results_recommendations, $max_results_similar_products, $use_personalization, $sid, $max_count_variants, $with_campaigns, $with_recommendations, $with_similar_products, $with_record)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDetailPageUsingGETAsyncWithHttpInfo
     *
     * Get the detail page
     *
     * @param string $channel                      channel (required)
     * @param string $id                           The id for which the detailpage should be returned. (required)
     * @param string $id_type                      Specifies which type of id is given. (optional, default to id)
     * @param bool   $ids_only                     If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results_recommendations  Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param int    $max_results_similar_products Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     * @param bool   $use_personalization          Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     * @param string $sid                          This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     * @param int    $max_count_variants           The maximum number of variants to return for every record (optional, default to 5)
     * @param bool   $with_campaigns               withCampaigns (optional, default to true)
     * @param bool   $with_recommendations         withRecommendations (optional, default to true)
     * @param bool   $with_similar_products        withSimilarProducts (optional, default to true)
     * @param bool   $with_record                  withRecord (optional, default to true)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getDetailPageUsingGETAsyncWithHttpInfo(string $channel, $id, $id_type = 'id', bool $ids_only = false, int $max_results_recommendations = 0, int $max_results_similar_products = 10, bool $use_personalization = true, $sid = null, int $max_count_variants = 5, bool $with_campaigns = true, bool $with_recommendations = true, bool $with_similar_products = true, bool $with_record = true)
    {
        $request = $this->getDetailPageUsingGETRequest($channel, $id, $id_type, $ids_only, $max_results_recommendations, $max_results_similar_products, $use_personalization, $sid, $max_count_variants, $with_campaigns, $with_recommendations, $with_similar_products, $with_record);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\DetailPage::class);
    }

    /**
     * Operation getFullRecordsUsingGET
     *
     * Get full records
     *
     * @param string   $channel            channel (required)
     * @param string[] $record_id          The record ids of the records which should be returned (required)
     * @param string   $id_type            Specifies which type of id is given. (optional, default to id)
     * @param int      $max_count_variants The maximum number of variants to return for every record (optional, default to 5)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\RecordWithId[]
     */
    public function getFullRecordsUsingGET(string $channel, $record_id, $id_type = 'id', int $max_count_variants = 5)
    {
        list($response) = $this->getFullRecordsUsingGETWithHttpInfo($channel, $record_id, $id_type, $max_count_variants);

        return $response;
    }

    /**
     * Operation getFullRecordsUsingGETWithHttpInfo
     *
     * Get full records
     *
     * @param string   $channel            channel (required)
     * @param string[] $record_id          The record ids of the records which should be returned (required)
     * @param string   $id_type            Specifies which type of id is given. (optional, default to id)
     * @param int      $max_count_variants The maximum number of variants to return for every record (optional, default to 5)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\RecordWithId[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getFullRecordsUsingGETWithHttpInfo(string $channel, $record_id, $id_type = 'id', int $max_count_variants = 5)
    {
        $request = $this->getFullRecordsUsingGETRequest($channel, $record_id, $id_type, $max_count_variants);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\RecordWithId[]');
    }

    /**
     * Operation getFullRecordsUsingGETAsync
     *
     * Get full records
     *
     * @param string   $channel            channel (required)
     * @param string[] $record_id          The record ids of the records which should be returned (required)
     * @param string   $id_type            Specifies which type of id is given. (optional, default to id)
     * @param int      $max_count_variants The maximum number of variants to return for every record (optional, default to 5)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getFullRecordsUsingGETAsync(string $channel, $record_id, $id_type = 'id', int $max_count_variants = 5)
    {
        return $this->getFullRecordsUsingGETAsyncWithHttpInfo($channel, $record_id, $id_type, $max_count_variants)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFullRecordsUsingGETAsyncWithHttpInfo
     *
     * Get full records
     *
     * @param string   $channel            channel (required)
     * @param string[] $record_id          The record ids of the records which should be returned (required)
     * @param string   $id_type            Specifies which type of id is given. (optional, default to id)
     * @param int      $max_count_variants The maximum number of variants to return for every record (optional, default to 5)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getFullRecordsUsingGETAsyncWithHttpInfo(string $channel, $record_id, $id_type = 'id', int $max_count_variants = 5)
    {
        $request = $this->getFullRecordsUsingGETRequest($channel, $record_id, $id_type, $max_count_variants);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\RecordWithId[]');
    }

    /**
     * Operation getRecommendationUsingGET
     *
     * @param string   $channel             channel (required)
     * @param string[] $id                  Use this parameter to pass product ID(s) for which you wish to obtain recommendations. (required)
     * @param int      $max_results         Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param string   $sid                 This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to give him personalised recommendations, as well as for FACT-Finder tracking. (optional)
     * @param bool     $ids_only            If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param bool     $use_personalization Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\RecommendationResultWithFieldRoles
     */
    public function getRecommendationUsingGET(string $channel, $id, int $max_results = 0, $sid = null, bool $ids_only = false, bool $use_personalization = true)
    {
        list($response) = $this->getRecommendationUsingGETWithHttpInfo($channel, $id, $max_results, $sid, $ids_only, $use_personalization);

        return $response;
    }

    /**
     * Operation getRecommendationUsingGETWithHttpInfo
     *
     * @param string   $channel             channel (required)
     * @param string[] $id                  Use this parameter to pass product ID(s) for which you wish to obtain recommendations. (required)
     * @param int      $max_results         Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param string   $sid                 This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to give him personalised recommendations, as well as for FACT-Finder tracking. (optional)
     * @param bool     $ids_only            If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param bool     $use_personalization Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\RecommendationResultWithFieldRoles, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecommendationUsingGETWithHttpInfo(string $channel, $id, int $max_results = 0, $sid = null, bool $ids_only = false, bool $use_personalization = true)
    {
        $request = $this->getRecommendationUsingGETRequest($channel, $id, $max_results, $sid, $ids_only, $use_personalization);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V4\Model\RecommendationResultWithFieldRoles::class);
    }

    /**
     * Operation getRecommendationUsingGETAsync
     *
     * @param string   $channel             channel (required)
     * @param string[] $id                  Use this parameter to pass product ID(s) for which you wish to obtain recommendations. (required)
     * @param int      $max_results         Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param string   $sid                 This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to give him personalised recommendations, as well as for FACT-Finder tracking. (optional)
     * @param bool     $ids_only            If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param bool     $use_personalization Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getRecommendationUsingGETAsync(string $channel, $id, int $max_results = 0, $sid = null, bool $ids_only = false, bool $use_personalization = true)
    {
        return $this->getRecommendationUsingGETAsyncWithHttpInfo($channel, $id, $max_results, $sid, $ids_only, $use_personalization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRecommendationUsingGETAsyncWithHttpInfo
     *
     * @param string   $channel             channel (required)
     * @param string[] $id                  Use this parameter to pass product ID(s) for which you wish to obtain recommendations. (required)
     * @param int      $max_results         Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param string   $sid                 This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to give him personalised recommendations, as well as for FACT-Finder tracking. (optional)
     * @param bool     $ids_only            If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param bool     $use_personalization Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getRecommendationUsingGETAsyncWithHttpInfo(string $channel, $id, int $max_results = 0, $sid = null, bool $ids_only = false, bool $use_personalization = true)
    {
        $request = $this->getRecommendationUsingGETRequest($channel, $id, $max_results, $sid, $ids_only, $use_personalization);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\RecommendationResultWithFieldRoles::class);
    }

    /**
     * Operation getRecordsUsingGET
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number The product numbers of the records which should be returned (required)
     * @param bool     $verbose        verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Record[]
     */
    public function getRecordsUsingGET(string $channel, $product_number, bool $verbose = false)
    {
        list($response) = $this->getRecordsUsingGETWithHttpInfo($channel, $product_number, $verbose);

        return $response;
    }

    /**
     * Operation getRecordsUsingGETWithHttpInfo
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number The product numbers of the records which should be returned (required)
     * @param bool     $verbose        verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Record[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecordsUsingGETWithHttpInfo(string $channel, $product_number, bool $verbose = false)
    {
        $request = $this->getRecordsUsingGETRequest($channel, $product_number, $verbose);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\Record[]');
    }

    /**
     * Operation getRecordsUsingGETAsync
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number The product numbers of the records which should be returned (required)
     * @param bool     $verbose        verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getRecordsUsingGETAsync(string $channel, $product_number, bool $verbose = false)
    {
        return $this->getRecordsUsingGETAsyncWithHttpInfo($channel, $product_number, $verbose)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRecordsUsingGETAsyncWithHttpInfo
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number The product numbers of the records which should be returned (required)
     * @param bool     $verbose        verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getRecordsUsingGETAsyncWithHttpInfo(string $channel, $product_number, bool $verbose = false)
    {
        $request = $this->getRecordsUsingGETRequest($channel, $product_number, $verbose);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\Record[]');
    }

    /**
     * Operation getSimilarProductsUsingGET
     *
     * Get similar products
     *
     * @param string $channel     channel (required)
     * @param string $id          Use this parameter to pass the product ID for which you wish to obtain similar products. (required)
     * @param string $id_type     Use this parameter to determine the type of id passed to the method. (required)
     * @param bool   $ids_only    If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\SimilarProductsWithFieldRoles
     */
    public function getSimilarProductsUsingGET(string $channel, $id, $id_type, bool $ids_only = false, int $max_results = 10)
    {
        list($response) = $this->getSimilarProductsUsingGETWithHttpInfo($channel, $id, $id_type, $ids_only, $max_results);

        return $response;
    }

    /**
     * Operation getSimilarProductsUsingGETWithHttpInfo
     *
     * Get similar products
     *
     * @param string $channel     channel (required)
     * @param string $id          Use this parameter to pass the product ID for which you wish to obtain similar products. (required)
     * @param string $id_type     Use this parameter to determine the type of id passed to the method. (required)
     * @param bool   $ids_only    If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\SimilarProductsWithFieldRoles, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSimilarProductsUsingGETWithHttpInfo(string $channel, $id, $id_type, bool $ids_only = false, int $max_results = 10)
    {
        $request = $this->getSimilarProductsUsingGETRequest($channel, $id, $id_type, $ids_only, $max_results);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V4\Model\SimilarProductsWithFieldRoles::class);
    }

    /**
     * Operation getSimilarProductsUsingGETAsync
     *
     * Get similar products
     *
     * @param string $channel     channel (required)
     * @param string $id          Use this parameter to pass the product ID for which you wish to obtain similar products. (required)
     * @param string $id_type     Use this parameter to determine the type of id passed to the method. (required)
     * @param bool   $ids_only    If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getSimilarProductsUsingGETAsync(string $channel, $id, $id_type, bool $ids_only = false, int $max_results = 10)
    {
        return $this->getSimilarProductsUsingGETAsyncWithHttpInfo($channel, $id, $id_type, $ids_only, $max_results)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSimilarProductsUsingGETAsyncWithHttpInfo
     *
     * Get similar products
     *
     * @param string $channel     channel (required)
     * @param string $id          Use this parameter to pass the product ID for which you wish to obtain similar products. (required)
     * @param string $id_type     Use this parameter to determine the type of id passed to the method. (required)
     * @param bool   $ids_only    If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getSimilarProductsUsingGETAsyncWithHttpInfo(string $channel, $id, $id_type, bool $ids_only = false, int $max_results = 10)
    {
        $request = $this->getSimilarProductsUsingGETRequest($channel, $id, $id_type, $ids_only, $max_results);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\SimilarProductsWithFieldRoles::class);
    }

    /**
     * Operation insertRecordsUsingPOST
     *
     * Insert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be inserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]
     */
    public function insertRecordsUsingPOST(string $channel, $records, bool $verbose = false)
    {
        list($response) = $this->insertRecordsUsingPOSTWithHttpInfo($channel, $records, $verbose);

        return $response;
    }

    /**
     * Operation insertRecordsUsingPOSTWithHttpInfo
     *
     * Insert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be inserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function insertRecordsUsingPOSTWithHttpInfo(string $channel, $records, bool $verbose = false)
    {
        $request = $this->insertRecordsUsingPOSTRequest($channel, $records, $verbose);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
    }

    /**
     * Operation insertRecordsUsingPOSTAsync
     *
     * Insert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be inserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function insertRecordsUsingPOSTAsync(string $channel, $records, bool $verbose = false)
    {
        return $this->insertRecordsUsingPOSTAsyncWithHttpInfo($channel, $records, $verbose)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation insertRecordsUsingPOSTAsyncWithHttpInfo
     *
     * Insert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be inserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function insertRecordsUsingPOSTAsyncWithHttpInfo(string $channel, $records, bool $verbose = false)
    {
        $request = $this->insertRecordsUsingPOSTRequest($channel, $records, $verbose);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
    }

    /**
     * Operation updateUsingPUT
     *
     * Update records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be updated (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]
     */
    public function updateUsingPUT(string $channel, $records, bool $verbose = false)
    {
        list($response) = $this->updateUsingPUTWithHttpInfo($channel, $records, $verbose);

        return $response;
    }

    /**
     * Operation updateUsingPUTWithHttpInfo
     *
     * Update records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be updated (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUsingPUTWithHttpInfo(string $channel, $records, bool $verbose = false)
    {
        $request = $this->updateUsingPUTRequest($channel, $records, $verbose);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
    }

    /**
     * Operation updateUsingPUTAsync
     *
     * Update records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be updated (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function updateUsingPUTAsync(string $channel, $records, bool $verbose = false)
    {
        return $this->updateUsingPUTAsyncWithHttpInfo($channel, $records, $verbose)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateUsingPUTAsyncWithHttpInfo
     *
     * Update records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be updated (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function updateUsingPUTAsyncWithHttpInfo(string $channel, $records, bool $verbose = false)
    {
        $request = $this->updateUsingPUTRequest($channel, $records, $verbose);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
    }

    /**
     * Operation upsertRecordsUsingPUT
     *
     * Upsert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be upserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]
     */
    public function upsertRecordsUsingPUT(string $channel, $records, bool $verbose = false)
    {
        list($response) = $this->upsertRecordsUsingPUTWithHttpInfo($channel, $records, $verbose);

        return $response;
    }

    /**
     * Operation upsertRecordsUsingPUTWithHttpInfo
     *
     * Upsert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be upserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function upsertRecordsUsingPUTWithHttpInfo(string $channel, $records, bool $verbose = false)
    {
        $request = $this->upsertRecordsUsingPUTRequest($channel, $records, $verbose);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
    }

    /**
     * Operation upsertRecordsUsingPUTAsync
     *
     * Upsert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be upserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function upsertRecordsUsingPUTAsync(string $channel, $records, bool $verbose = false)
    {
        return $this->upsertRecordsUsingPUTAsyncWithHttpInfo($channel, $records, $verbose)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation upsertRecordsUsingPUTAsyncWithHttpInfo
     *
     * Upsert records
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be upserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function upsertRecordsUsingPUTAsyncWithHttpInfo(string $channel, $records, bool $verbose = false)
    {
        $request = $this->upsertRecordsUsingPUTRequest($channel, $records, $verbose);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\DeltaUpdateResult[]');
    }

    /**
     * Create request for operation 'compareUsingGET'
     *
     * @param string   $channel  channel (required)
     * @param bool     $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string[] $id       Use this parameter to pass product ID(s) which should be compared. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function compareUsingGETRequest(string $channel, bool $ids_only = false, $id = null)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling compareUsingGET'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}/compare';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if (\is_array($id)) {
            $queryParams['id'] = $id;
        } elseif ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'deleteUsingDELETE'
     *
     * @param string                                           $channel        channel (required)
     * @param string[]                                         $record_id      The ids from the records which should be deleted. (optional)
     * @param \Web\FactFinderApi\Client\V4\Model\DeleteRequest $delete_request deleteRequest (optional)
     * @param string                                           $id_type        Specifies the type of id given. (optional, default to productNumber)
     * @param bool                                             $verbose        verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function deleteUsingDELETERequest(string $channel, $record_id = null, $delete_request = null, $id_type = 'productNumber', bool $verbose = false)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling deleteUsingDELETE'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($record_id)) {
            $queryParams['recordId'] = $record_id;
        } elseif ($record_id !== null) {
            $queryParams['recordId'] = ObjectSerializer::toQueryValue($record_id);
        }
        // query params
        if ($id_type !== null) {
            $queryParams['idType'] = ObjectSerializer::toQueryValue($id_type);
        }
        // query params
        if ($verbose !== null) {
            $queryParams['verbose'] = ObjectSerializer::toQueryValue($verbose);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($delete_request)) {
            $_tempBody = $delete_request;
        }

        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp6\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if (\is_array($httpBody)) {
                    $httpBody = \GuzzleHttp6\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . \base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = \array_merge(
            $defaultHeaders,
            $headers
        );

        $query = \GuzzleHttp6\Psr7\build_query($queryParams);

        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create request for operation 'getDetailPageUsingGET'
     *
     * @param string $channel                      channel (required)
     * @param string $id                           The id for which the detailpage should be returned. (required)
     * @param string $id_type                      Specifies which type of id is given. (optional, default to id)
     * @param bool   $ids_only                     If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results_recommendations  Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param int    $max_results_similar_products Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     * @param bool   $use_personalization          Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     * @param string $sid                          This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     * @param int    $max_count_variants           The maximum number of variants to return for every record (optional, default to 5)
     * @param bool   $with_campaigns               withCampaigns (optional, default to true)
     * @param bool   $with_recommendations         withRecommendations (optional, default to true)
     * @param bool   $with_similar_products        withSimilarProducts (optional, default to true)
     * @param bool   $with_record                  withRecord (optional, default to true)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getDetailPageUsingGETRequest(string $channel, $id, $id_type = 'id', bool $ids_only = false, int $max_results_recommendations = 0, int $max_results_similar_products = 10, bool $use_personalization = true, $sid = null, int $max_count_variants = 5, bool $with_campaigns = true, bool $with_recommendations = true, bool $with_similar_products = true, bool $with_record = true)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling getDetailPageUsingGET'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (\is_array($id) && \count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getDetailPageUsingGET'
            );
        }

        $resourcePath = '/rest/v4/detail/{channel}/{id}';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($id_type !== null) {
            $queryParams['idType'] = ObjectSerializer::toQueryValue($id_type);
        }
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if ($max_results_recommendations !== null) {
            $queryParams['maxResultsRecommendations'] = ObjectSerializer::toQueryValue($max_results_recommendations);
        }
        // query params
        if ($max_results_similar_products !== null) {
            $queryParams['maxResultsSimilarProducts'] = ObjectSerializer::toQueryValue($max_results_similar_products);
        }
        // query params
        if ($use_personalization !== null) {
            $queryParams['usePersonalization'] = ObjectSerializer::toQueryValue($use_personalization);
        }
        // query params
        if ($sid !== null) {
            $queryParams['sid'] = ObjectSerializer::toQueryValue($sid);
        }
        // query params
        if ($max_count_variants !== null) {
            $queryParams['maxCountVariants'] = ObjectSerializer::toQueryValue($max_count_variants);
        }
        // query params
        if ($with_campaigns !== null) {
            $queryParams['withCampaigns'] = ObjectSerializer::toQueryValue($with_campaigns);
        }
        // query params
        if ($with_recommendations !== null) {
            $queryParams['withRecommendations'] = ObjectSerializer::toQueryValue($with_recommendations);
        }
        // query params
        if ($with_similar_products !== null) {
            $queryParams['withSimilarProducts'] = ObjectSerializer::toQueryValue($with_similar_products);
        }
        // query params
        if ($with_record !== null) {
            $queryParams['withRecord'] = ObjectSerializer::toQueryValue($with_record);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);
        // path params
        if ($id !== null) {
            $resourcePath = \str_replace(
                '{id}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getFullRecordsUsingGET'
     *
     * @param string   $channel            channel (required)
     * @param string[] $record_id          The record ids of the records which should be returned (required)
     * @param string   $id_type            Specifies which type of id is given. (optional, default to id)
     * @param int      $max_count_variants The maximum number of variants to return for every record (optional, default to 5)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getFullRecordsUsingGETRequest(string $channel, $record_id, $id_type = 'id', int $max_count_variants = 5)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling getFullRecordsUsingGET'
            );
        }
        // verify the required parameter 'record_id' is set
        if ($record_id === null || (\is_array($record_id) && \count($record_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $record_id when calling getFullRecordsUsingGET'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}/full';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($record_id)) {
            $queryParams['recordId'] = $record_id;
        } elseif ($record_id !== null) {
            $queryParams['recordId'] = ObjectSerializer::toQueryValue($record_id);
        }
        // query params
        if ($id_type !== null) {
            $queryParams['idType'] = ObjectSerializer::toQueryValue($id_type);
        }
        // query params
        if ($max_count_variants !== null) {
            $queryParams['maxCountVariants'] = ObjectSerializer::toQueryValue($max_count_variants);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getRecommendationUsingGET'
     *
     * @param string   $channel             channel (required)
     * @param string[] $id                  Use this parameter to pass product ID(s) for which you wish to obtain recommendations. (required)
     * @param int      $max_results         Use this parameter to specify the number of recommendations you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 0)
     * @param string   $sid                 This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to give him personalised recommendations, as well as for FACT-Finder tracking. (optional)
     * @param bool     $ids_only            If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param bool     $use_personalization Allows the activation/deactivation of the personalization of queries. true &#x3D; the search result will be personalized if the personalization module is activated and all other requirements are met; false &#x3D; the search result will not be personalized. (optional, default to true)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getRecommendationUsingGETRequest(string $channel, $id, int $max_results = 0, $sid = null, bool $ids_only = false, bool $use_personalization = true)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (\is_array($id) && \count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getRecommendationUsingGET'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}/recommendation';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($id)) {
            $queryParams['id'] = $id;
        } elseif ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($max_results !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toQueryValue($max_results);
        }
        // query params
        if ($sid !== null) {
            $queryParams['sid'] = ObjectSerializer::toQueryValue($sid);
        }
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if ($use_personalization !== null) {
            $queryParams['usePersonalization'] = ObjectSerializer::toQueryValue($use_personalization);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getRecordsUsingGET'
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number The product numbers of the records which should be returned (required)
     * @param bool     $verbose        verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getRecordsUsingGETRequest(string $channel, $product_number, bool $verbose = false)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling getRecordsUsingGET'
            );
        }
        // verify the required parameter 'product_number' is set
        if ($product_number === null || (\is_array($product_number) && \count($product_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_number when calling getRecordsUsingGET'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}';
        $queryParams = [];
        $httpBody = '';
        // query params
        if (\is_array($product_number)) {
            $queryParams['productNumber'] = $product_number;
        } elseif ($product_number !== null) {
            $queryParams['productNumber'] = ObjectSerializer::toQueryValue($product_number);
        }
        // query params
        if ($verbose !== null) {
            $queryParams['verbose'] = ObjectSerializer::toQueryValue($verbose);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getSimilarProductsUsingGET'
     *
     * @param string $channel     channel (required)
     * @param string $id          Use this parameter to pass the product ID for which you wish to obtain similar products. (required)
     * @param string $id_type     Use this parameter to determine the type of id passed to the method. (required)
     * @param bool   $ids_only    If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param int    $max_results Use this parameter to specify the number of similar articles you would like. The default value from the configuration is used if the parameter is not specified. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getSimilarProductsUsingGETRequest(string $channel, $id, string $id_type, bool $ids_only = false, int $max_results = 10)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (\is_array($id) && \count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getSimilarProductsUsingGET'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}/similar';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($id_type !== null) {
            $queryParams['idType'] = ObjectSerializer::toQueryValue($id_type);
        }
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if ($max_results !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toQueryValue($max_results);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'insertRecordsUsingPOST'
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be inserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function insertRecordsUsingPOSTRequest(string $channel, array $records, bool $verbose = false)
    {
        // verify the required parameter 'records' is set
        if (empty($records)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $records when calling updateUsingPUT'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}';
        $queryParams = [];
        // query params
        if ($verbose !== null) {
            $queryParams['verbose'] = ObjectSerializer::toQueryValue($verbose);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $records, true);
    }

    /**
     * Create request for operation 'updateUsingPUT'
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be updated (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function updateUsingPUTRequest(string $channel, array $records, bool $verbose = false)
    {
        // verify the required parameter 'records' is set
        if (empty($records)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $records when calling updateUsingPUT'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}';
        $queryParams = [];
        // query params
        if ($verbose !== null) {
            $queryParams['verbose'] = ObjectSerializer::toQueryValue($verbose);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->putQuery($resourcePath, $queryParams, $records, true);
    }

    /**
     * Create request for operation 'upsertRecordsUsingPUT'
     *
     * @param string                                      $channel channel (required)
     * @param \Web\FactFinderApi\Client\V4\Model\Record[] $records The records which should be upserted (required)
     * @param bool                                        $verbose verbose (optional, default to false)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function upsertRecordsUsingPUTRequest(string $channel, array $records, bool $verbose = false)
    {
        // verify the required parameter 'records' is set
        if (empty($records)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $records when calling updateUsingPUT'
            );
        }

        $resourcePath = '/rest/v4/records/{channel}/upsert';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($verbose !== null) {
            $queryParams['verbose'] = ObjectSerializer::toQueryValue($verbose);
        }

        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->putQuery($resourcePath, $queryParams, $records, true);
    }
}
