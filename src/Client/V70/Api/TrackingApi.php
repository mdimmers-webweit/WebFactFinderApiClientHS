<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

class TrackingApi extends ApiClient
{
    /**
     * Track cart event
     * @throws \Exception
     */
    public function trackCartUsingPOST(string $channel, $events): void
    {
        foreach ($events as $event) {
            $params = [
                'channel' => $channel,
                'event' => 'cart',
                'id' => $event->getId(),
                'count' => $event->getCount(),
                'price' => $event->getPrice(),
                'sid' => $event->getSid()
            ];

            if ($event->getUserId()) {
                $params['userId'] = $event->getUserId();
            }

            $this->executeFFRequest('Tracking.ff', $params);
        }
    }

    /**
     * Track click event
     * @throws \Exception
     */
    public function trackClickUsingPOST(string $channel, $events): void
    {
        foreach ($events as $event) {
            $params = [
                'channel' => $channel,
                'event' => 'click',
                'id' => $event->getId(),
                'query' => $event->getQuery(),
                'pos' => $event->getPos(),
                'sid' => $event->getSid()
            ];

            $this->executeFFRequest('Tracking.ff', $params);
        }
    }

    /**
     * Track checkout event
     * @throws \Exception
     */
    public function trackCheckoutUsingPOST(string $channel, $events): void
    {
        foreach ($events as $event) {
            $params = [
                'channel' => $channel,
                'event' => 'checkout',
                'id' => $event->getId(),
                'count' => $event->getCount(),
                'price' => $event->getPrice(),
                'sid' => $event->getSid()
            ];

            if ($event->getUserId()) {
                $params['userId'] = $event->getUserId();
            }

            $this->executeFFRequest('Tracking.ff', $params);
        }
    }
}