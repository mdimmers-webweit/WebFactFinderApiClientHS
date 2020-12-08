<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\Api\CampaignApiInterface;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\ObjectSerializer;

/**
 * CampaignApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CampaignApi extends ApiClient implements CampaignApiInterface
{
    /**
     * Operation getPageCampaignsUsingGET
     *
     * Get page campaigns
     *
     * @param string $channel  channel (required)
     * @param string $page_id  Use this parameter to pass a page ID for which you wish to obtain campaigns. (required)
     * @param bool   $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid      This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Campaign[]
     */
    public function getPageCampaignsUsingGET(string $channel, $page_id, bool $ids_only = false, $sid = null)
    {
        list($response) = $this->getPageCampaignsUsingGETWithHttpInfo($channel, $page_id, $ids_only, $sid);

        return $response;
    }

    /**
     * Operation getPageCampaignsUsingGETWithHttpInfo
     *
     * Get page campaigns
     *
     * @param string $channel  channel (required)
     * @param string $page_id  Use this parameter to pass a page ID for which you wish to obtain campaigns. (required)
     * @param bool   $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid      This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Campaign[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPageCampaignsUsingGETWithHttpInfo(string $channel, $page_id, bool $ids_only = false, $sid = null)
    {
        $request = $this->getPageCampaignsUsingGETRequest($channel, $page_id, $ids_only, $sid);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\Campaign[]');
    }

    /**
     * Operation getProductCampaignsUsingGET
     *
     * Get product campaigns
     *
     * @param string $channel        channel (required)
     * @param string $product_number Use this parameter to pass a product ID for which you wish to obtain campaigns. (required)
     * @param bool   $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     * @param string $advisor_status Unused
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Campaign[]
     */
    public function getProductCampaignsUsingGET(string $channel, $product_number, string $id_type = 'productNumber', bool $ids_only = false, ?string $sid = null, ?string $advisor_status = null): array
    {
        list($response) = $this->getProductCampaignsUsingGETWithHttpInfo($channel, $product_number, $id_type, $ids_only, $sid);

        return $response;
    }

    /**
     * Operation getProductCampaignsUsingGETWithHttpInfo
     *
     * Get product campaigns
     *
     * @param string $channel        channel (required)
     * @param string $product_number Use this parameter to pass a product ID for which you wish to obtain campaigns. (required)
     * @param bool   $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Campaign[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductCampaignsUsingGETWithHttpInfo(string $channel, $product_number, string $id_type = 'productNumber', bool $ids_only = false, $sid = null)
    {
        $request = $this->getProductCampaignsUsingGETRequest($channel, $product_number, $id_type, $ids_only, $sid);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\Campaign[]');
    }

    /**
     * Operation getProductCampaignsUsingGETAsync
     *
     * Get product campaigns
     *
     * @param string $channel        channel (required)
     * @param string $product_number Use this parameter to pass a product ID for which you wish to obtain campaigns. (required)
     * @param bool   $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getProductCampaignsUsingGETAsync(string $channel, $product_number, bool $ids_only = false, $sid = null)
    {
        return $this->getProductCampaignsUsingGETAsyncWithHttpInfo($channel, $product_number, $ids_only, $sid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductCampaignsUsingGETAsyncWithHttpInfo
     *
     * Get product campaigns
     *
     * @param string $channel        channel (required)
     * @param string $product_number Use this parameter to pass a product ID for which you wish to obtain campaigns. (required)
     * @param bool   $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getProductCampaignsUsingGETAsyncWithHttpInfo(string $channel, $product_number, string $id_type = 'productNumber', bool $ids_only = false, $sid = null)
    {
        $request = $this->getProductCampaignsUsingGETRequest($channel, $product_number, $id_type, $ids_only, $sid);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\Campaign[]');
    }

    /**
     * Operation getShoppingCartCampaignsUsingGET
     *
     * Get shopping cart campaigns
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number Use this parameter to pass product ID(s) for which you wish to obtain campaigns. (required)
     * @param bool     $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string   $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     * @param string   $advisor_status Unused
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Campaign[]
     */
    public function getShoppingCartCampaignsUsingGET(string $channel, $product_number, bool $ids_only = false, ?string $sid = null, ?string $advisor_status = null): array
    {
        list($response) = $this->getShoppingCartCampaignsUsingGETWithHttpInfo($channel, $product_number, $ids_only, $sid);

        return $response;
    }

    /**
     * Operation getShoppingCartCampaignsUsingGETWithHttpInfo
     *
     * Get shopping cart campaigns
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number Use this parameter to pass product ID(s) for which you wish to obtain campaigns. (required)
     * @param bool     $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string   $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Campaign[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getShoppingCartCampaignsUsingGETWithHttpInfo(string $channel, $product_number, bool $ids_only = false, $sid = null)
    {
        $request = $this->getShoppingCartCampaignsUsingGETRequest($channel, $product_number, $ids_only, $sid);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\Campaign[]');
    }

    /**
     * Operation getShoppingCartCampaignsUsingGETAsync
     *
     * Get shopping cart campaigns
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number Use this parameter to pass product ID(s) for which you wish to obtain campaigns. (required)
     * @param bool     $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string   $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getShoppingCartCampaignsUsingGETAsync(string $channel, $product_number, bool $ids_only = false, $sid = null)
    {
        return $this->getShoppingCartCampaignsUsingGETAsyncWithHttpInfo($channel, $product_number, $ids_only, $sid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShoppingCartCampaignsUsingGETAsyncWithHttpInfo
     *
     * Get shopping cart campaigns
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number Use this parameter to pass product ID(s) for which you wish to obtain campaigns. (required)
     * @param bool     $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string   $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getShoppingCartCampaignsUsingGETAsyncWithHttpInfo(string $channel, $product_number, bool $ids_only = false, $sid = null)
    {
        $request = $this->getShoppingCartCampaignsUsingGETRequest($channel, $product_number, $ids_only, $sid);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\Campaign[]');
    }

    /**
     * Create request for operation 'getPageCampaignsUsingGET'
     *
     * @param string $channel  channel (required)
     * @param string $page_id  Use this parameter to pass a page ID for which you wish to obtain campaigns. (required)
     * @param bool   $ids_only If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid      This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getPageCampaignsUsingGETRequest(string $channel, $page_id, bool $ids_only = false, $sid = null)
    {
        $resourcePath = '/rest/v4/campaign/{channel}/page';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if ($page_id !== null) {
            $queryParams['pageId'] = ObjectSerializer::toQueryValue($page_id);
        }
        // query params
        if ($sid !== null) {
            $queryParams['sid'] = ObjectSerializer::toQueryValue($sid);
        }

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getProductCampaignsUsingGET'
     *
     * @param string $channel        channel (required)
     * @param string $id             Use this parameter to pass a ID (master or product) for which you wish to obtain campaigns.(required)
     * @param string $id_type        Specifies which type of id is given.
     * @param bool   $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getProductCampaignsUsingGETRequest(string $channel, $id, string $id_type = 'productNumber', bool $ids_only = false, $sid = null, $purchaserId = null)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling getProductCampaignsUsingGET'
            );
        }
        // verify the required parameter 'product_number' is set
        if ($id === null || (\is_array($id) && \count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_number when calling getProductCampaignsUsingGET'
            );
        }

        $resourcePath = '/rest/v4/campaign/{channel}/product';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }

        // query params
        if ($id_type !== null) {
            $queryParams['idType'] = ObjectSerializer::toQueryValue($id_type);
        }
        // query params
        if ($sid !== null) {
            $queryParams['sid'] = ObjectSerializer::toQueryValue($sid);
        }
        if ($purchaserId !== null) {
            $queryParams['purchaserId'] = ObjectSerializer::toQueryValue($purchaserId);
        }
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getShoppingCartCampaignsUsingGET'
     *
     * @param string   $channel        channel (required)
     * @param string[] $product_number Use this parameter to pass product ID(s) for which you wish to obtain campaigns. (required)
     * @param bool     $ids_only       If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param string   $sid            This parameter is used to pass an id for the user session. This is important for recognising the user, if you want to trigger personalised campaigns, as well as for FACT-Finder tracking. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getShoppingCartCampaignsUsingGETRequest(string $channel, $product_number, bool $ids_only = false, $sid = null)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling getShoppingCartCampaignsUsingGET'
            );
        }
        // verify the required parameter 'product_number' is set
        if ($product_number === null || (\is_array($product_number) && \count($product_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_number when calling getShoppingCartCampaignsUsingGET'
            );
        }

        $resourcePath = '/rest/v4/campaign/{channel}/shoppingcart';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if (\is_array($product_number)) {
            $queryParams['productNumber'] = $product_number;
        } elseif ($product_number !== null) {
            $queryParams['productNumber'] = ObjectSerializer::toQueryValue($product_number);
        }
        // query params
        if ($sid !== null) {
            $queryParams['sid'] = ObjectSerializer::toQueryValue($sid);
        }
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }
}
