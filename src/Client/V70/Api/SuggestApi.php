<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\V70\Model\ResultSuggestion;
use Web\FactFinderApi\Client\V70\Model\SearchParams;

class SuggestApi extends ApiClient
{
    /**
     * Get suggestions using GET
     * @throws \Exception
     */
    public function getSuggestionsUsingGET(string $channel, $query): array
    {
        $params = [
            'channel' => $channel,
            'query' => $query
        ];

        $response = $this->executeFFRequest('Suggest.ff', $params);

        // Konvertiere Response zu ResultSuggestion Array
        $suggestions = [];
        if (isset($response['suggestions'])) {
            foreach ($response['suggestions'] as $suggestion) {
                $suggestions[] = new ResultSuggestion($suggestion);
            }
        }

        return $suggestions;
    }

    /**
     * Get suggestions using POST - konvertiert zu GET
     */
    public function getSuggestionsUsingPOST(SearchParams $params)
    {
        return $this->getSuggestionsUsingGET(
            $params->getChannel(),
            $params->getQuery()
        );
    }
}