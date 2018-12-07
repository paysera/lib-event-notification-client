
## paysera-event-notification-client

Provides methods to manipulate `EventNotification` API.
It automatically authenticates all requests and maps required data structure for you.

#### Usage

This library provides `ClientFactory` class, which you should use to get the API client itself:

```php
use Paysera\Client\EventNotificationClient\ClientFactory;

$clientFactory = ClientFactory::create([
    'base_url' => 'https://checkout-eu-a.paysera.com/notification/rest/v1/', // optional, in case you need a custom one.
    'basic' => [                                        // use this, it API requires Basic authentication.
        'username' => 'username',
        'password' => 'password',
    ],
    'oauth' => [                                        // use this, it API requires OAuth v2 authentication.
        'token' => [
            'access_token' => 'my-access-token',
            'refresh_token' => 'my-refresh-token',
        ],
    ],
    // other configuration options, if needed
]);

$eventNotificationClient = $clientFactory->getEventNotificationClient();
```

Please use only one authentication mechanism, provided by `Vendor`.

Now, that you have instance of `EventNotificationClient`, you can use following methods
### Methods

    
Mark(read) notification as processed


```php

$result = $eventNotificationClient->readNotification($notificationId);
```
---


Get notification with resolved data


```php

$result = $eventNotificationClient->getNotification($notificationId);
```
---


Get filtered notifications with resolved data


```php
use Paysera\Client\EventNotificationClient\Entity as Entities;

$notificationFilter = new Entities\NotificationFilter();

$notificationFilter->setStatus($status);
    
$result = $eventNotificationClient->getNotifications($notificationFilter);
```
---

