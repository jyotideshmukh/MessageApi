<?php

namespace App\MessageHandler;

use App\Message\MailNotification;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Mime\Email;

class MailNotificationHandler implements MessageHandlerInterface
{

    /**
     * sending mail
     * @param MailNotification $mailNotification
     * @return void
     */
    
       public function __invoke(MailNotification $mailNotification , MailerInterface $mailer)
      {

        //sending mail

        $email = ( new Email() )
                  ->from($mailNotification->getFromMailAddress())
                 
                  ->to($mailNotification->getToAddress())
                  
                  ->subject($mailNotification->getSubject())

                  ->html($mailNotification->getBody());

                  $mailer->send($mail);

        echo 'Message '.$mailNotification ->getMsgId.' sending mail now';
          
      }

     


}