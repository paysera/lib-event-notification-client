<?php

namespace Paysera\Client\EventNotificationClient;

use Paysera\Component\RestClientCommon\Client\ApiClient;
use Paysera\Component\RestClientCommon\Util\ClientFactoryAbstract;

class ClientFactory extends ClientFactoryAbstract
{
    const DEFAULT_BASE_URL = '/';

    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getEventNotificationClient()
    {
        return new EventNotificationClient($this->apiClient);
    }
}
