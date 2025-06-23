<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

class ManagementApi extends ApiClient
{
    /**
     * @throws \Exception
     */
    public function reloadConfigurationUsingPOST($channel = null): void
    {
        $params = [
            'do' => 'reloadConfiguration'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $this->executeFFRequest('Management.ff', $params);
    }

    /**
     * @throws \Exception
     */
    public function importWhatsHotUsingPOST($channel = null, bool $send_notifications = false): void
    {
        $params = [
            'do' => 'importWhatsHot',
            'sendNotifications' => $send_notifications ? 'true' : 'false'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $this->executeFFRequest('Management.ff', $params);
    }
}