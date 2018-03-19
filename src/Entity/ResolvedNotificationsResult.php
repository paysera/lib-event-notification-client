<?php

namespace Paysera\Client\EventNotificationClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Result;

class ResolvedNotificationsResult extends Result
{
    protected function createItem(array $data)
    {
        return new ResolvedNotification($data);
    }
}
