<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\Api\SearchApiInterface;
use Web\FactFinderApi\Client\Model\NavigationRequestBase;
use Web\FactFinderApi\Client\Model\SearchRequestBase;
use Web\FactFinderApi\Client\V70\Model\Result;

class SearchApi extends ApiClient implements SearchApiInterface
{
    /**
     * Search using GET - FactFinder 7.0 Style
     * @throws \Exception
     */
    public function searchUsingGET(
        string $channel,
               $sid = null,
               $user_input = null,
               $page = null,
               $products_per_page = null,
               $no_article_number_search = null,
               $search_field = null,
               $follow_search = null,
               $seo_path = null,
               $query = null,
        bool $use_asn = true,
        bool $use_found_words = false,
        bool $use_campaigns = true,
        bool $ids_only = false,
        bool $use_keywords = false,
        bool $generate_advisor_tree = true,
        bool $disable_cache = false,
        bool $use_personalization = true,
        bool $use_semantic_enhancer = true,
        bool $use_aso = true,
               $filter_facet_id = null,
        bool $navigation = false,
               $sort_fieldname = null,
               $query_from_suggest = null,
               $advisor_status = null
    ) {
        $params = [
            'channel' => $channel,
            'query' => $query ?? '',
            'productsPerPage' => $products_per_page ?? 20,
            'page' => $page ?? 1,
            'sid' => $sid ?? uniqid(),
            'useAsn' => $use_asn ? 'true' : 'false',
            'useFoundWords' => $use_found_words ? 'true' : 'false',
            'useCampaigns' => $use_campaigns ? 'true' : 'false',
            'idsOnly' => $ids_only ? 'true' : 'false',
            'useKeywords' => $use_keywords ? 'true' : 'false',
            'generateAdvisorTree' => $generate_advisor_tree ? 'true' : 'false',
            'disableCache' => $disable_cache ? 'true' : 'false',
            'usePersonalization' => $use_personalization ? 'true' : 'false',
            'useSemanticEnhancer' => $use_semantic_enhancer ? 'true' : 'false',
            'useAso' => $use_aso ? 'true' : 'false'
        ];

        if ($navigation) {
            $params['navigation'] = 'true';
        }

        if ($user_input !== null) {
            $params['userInput'] = $user_input;
        }

        if ($no_article_number_search !== null) {
            $params['noArticleNumberSearch'] = $no_article_number_search ? 'true' : 'false';
        }

        if ($search_field !== null) {
            $params['searchField'] = $search_field;
        }

        if ($follow_search !== null) {
            $params['followSearch'] = $follow_search;
        }

        if ($seo_path !== null) {
            $params['seoPath'] = $seo_path;
        }

        if ($advisor_status !== null) {
            $params['advisorStatus'] = $advisor_status;
        }

        if ($query_from_suggest !== null) {
            $params['queryFromSuggest'] = $query_from_suggest ? 'true' : 'false';
        }

        // Filter und Sortierung müssen im FactFinder 7.0 Format sein
        if ($filter_facet_id !== null) {
            // Hier müsste die Filter-Logik implementiert werden
            // z.B. $params['filterFieldName'] = 'value';
        }

        if ($sort_fieldname !== null) {
            // Hier müsste die Sortier-Logik implementiert werden
            // z.B. $params['sortFieldName'] = 'asc';
        }

        $response = $this->executeFFRequest('Search.ff', $params);
        return new Result($response);
    }

    /**
     * Search using POST - nicht unterstützt in FactFinder 7.0
     */
    public function searchUsingPOST(SearchRequestBase $search_request): Result
    {
        // Konvertiere POST-Request zu GET-Parametern
        $params = $search_request->getParams();

        return $this->searchUsingGET(
            $params->getChannel(),
            $search_request->getSid(),
            $search_request->getUserInput(),
            $params->getPage(),
            $params->getHitsPerPage(),
            false,
            $params->getSearchField(),
            null,
            null,
            $params->getQuery()
        );
    }

    /**
     * Navigation using POST - konvertiert zu GET
     * @throws \Exception
     */
    public function navigationUsingPOST(NavigationRequestBase $navigation_request): Result
    {
        $params = $navigation_request->getParams();

        $ffParams = [
            'channel' => $params->getChannel(),
            'navigation' => 'true',
            'productsPerPage' => $params->getHitsPerPage() ?? 20,
            'page' => $params->getPage() ?? 1,
            'sid' => $navigation_request->getSid() ?? uniqid()
        ];

        // Filter konvertieren
        foreach ($params->getFilters() as $filter) {
            $ffParams['filter' . $filter->getName()] = implode(',', array_map(function($v) {
                return $v->getValue();
            }, $filter->getValues()));
        }

        $response = $this->executeFFRequest('Search.ff', $ffParams);
        return new Result($response);
    }
}