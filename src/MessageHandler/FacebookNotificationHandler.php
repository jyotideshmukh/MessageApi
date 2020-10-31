<?php

namespace App\MessageHandler;

use App\Message\FacebookNotification;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class FacebookNotificationHandler implements MessageHandlerInterface
{

                             
    public function __invoke(FacebookNotification $message)
    {
        // ... do some work - like sending an SMS message!

        echo 'sending facebook post now';
    }
}