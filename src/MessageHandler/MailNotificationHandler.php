<?php

namespace App\MessageHandler;

use App\Message\MailNotification;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MailNotificationHandler implements MessageHandlerInterface
{

    /**
     * sending mail
     * @param MailNotification $mailNotification
     * @return void
     */
    
       public function __invoke(MailNotification $mailNotification )
      {

        //sending mail

        echo 'sending mail now';
          
      }

     


}