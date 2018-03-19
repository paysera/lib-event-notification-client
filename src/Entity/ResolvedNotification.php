<?php

namespace Paysera\Client\EventNotificationClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class ResolvedNotification extends Entity
{
    /**
     * @return string
     */
    public function getId()
    {
        return $this->get('id');
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->set('id', $id);
        return $this;
    }
    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->get('event');
    }
    /**
     * @param string $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->set('event', $event);
        return $this;
    }
    /**
     * @return object
     */
    public function getData()
    {
        return $this->getByReference('data');
    }
    /**
     * @param object $data
     * @return $this
     */
    public function setData($data)
    {
        $this->set('data', $data);
        return $this;
    }
}
