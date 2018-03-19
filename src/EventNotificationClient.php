<?php

namespace Paysera\Client\EventNotificationClient;

use Paysera\Client\EventNotificationClient\Entity as Entities;
use Fig\Http\Message\RequestMethodInterface;
use Paysera\Component\RestClientCommon\Client\ApiClient;

class EventNotificationClient
{
    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * Mark(read) notification as processed
     * PUT /notifications/{notificationId}/read
     *
     * @param string $notificationId
     * @return Entities\ResolvedNotification
     */
    public function readNotification($notificationId)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('notifications/%s/read', urlencode($notificationId)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ResolvedNotification($data);
    }

    /**
     * Get notification with resolved data
     * GET /notifications/{notificationId}
     *
     * @param string $notificationId
     * @return Entities\ResolvedNotification
     */
    public function getNotification($notificationId)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('notifications/%s', urlencode($notificationId)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ResolvedNotification($data);
    }

    /**
     * Get filtered notifications with resolved data
     * GET /notifications
     *
     * @param Entities\NotificationFilter $notificationFilter
     * @return Entities\ResolvedNotificationsResult
     */
    public function getNotifications(Entities\NotificationFilter $notificationFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'notifications',
            $notificationFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\ResolvedNotificationsResult($data, 'items');
    }

}
