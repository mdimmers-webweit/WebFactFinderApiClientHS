<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

class RefreshdatabasesApi extends ApiClient
{
    public function refreshAllDatabasesUsingPOST($channel = null): void
    {
        $params = [
            'do' => 'refreshAll'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $this->executeFFRequest('RefreshDatabases.ff', $params);
    }

    /**
     * @throws \Exception
     */
    public function refreshSearchDatabasesUsingPOST($channel = null): void
    {
        $params = [
            'do' => 'refreshSearch'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $this->executeFFRequest('RefreshDatabases.ff', $params);
    }

    /**
     * @throws \Exception
     */
    public function refreshSuggestDatabasesUsingPOST($channel = null): void
    {
        $params = [
            'do' => 'refreshSuggest'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $this->executeFFRequest('RefreshDatabases.ff', $params);
    }

    /**
     * @throws \Exception
     */
    public function refreshRecommendationDatabasesUsingPOST($channel = null): void
    {
        $params = [
            'do' => 'refreshRecommendation'
        ];

        if ($channel) {
            $params['channel'] ? implode(',', $channel) : $channel;
        }

        $this->executeFFRequest('RefreshDatabases.ff', $params);
    }
}