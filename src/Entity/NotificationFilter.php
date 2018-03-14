<?php

namespace Paysera\Client\EventNotificationClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Filter;

class NotificationFilter extends Filter
{
    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get('status');
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->set('status', $status);
        return $this;
    }

}
