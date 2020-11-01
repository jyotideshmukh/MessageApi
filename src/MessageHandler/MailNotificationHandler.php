<?php

namespace App\MessageHandler;

use App\Entity\Messages;
use App\Message\MailNotification;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Envelope;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mime\Email;

class MailNotificationHandler implements MessageHandlerInterface
{

  public function __construct(MessageBusInterface $eventBus, EntityManagerInterface $em)
    {
        $this->eventBus = $eventBus;
        $this->em = $em;
          
    }

    /**
     * sending mail
     * @param MailNotification $mailNotification
     * @return void
     */
    
       public function __invoke(MailNotification $mailNotification )
      {

        //sending mail

       // $mailNotification->sendEmail(MailerInterface $mailer);

        $message = $mailNotification->getMessageObj();
        $message->setName($mailNotification->getName());
        $message->setPlatform('Mail');
        $message->setMsgDate(new \DateTime());
        $message->setStatus(1);
        $message->setResponse('Message '.$mailNotification ->getMsgId().' sending mail now');
        $message->setMsgid($mailNotification->getMsgId());
        $this->em->persist($message);
        $this->em->flush();

        //$event = new message($mailNotification->setMsgid());

       /* $this->eventBus->dispatch(
          (new Envelope($mailNotification))
              ->with(new DispatchAfterCurrentBusStamp())
      );*/

        echo 'Message '.$mailNotification ->getMsgId().' sending mail now';
          
      }

     

     


}