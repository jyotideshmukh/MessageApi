<?php

namespace App\Controller;


use App\Entity\Messages;
use App\Message\MailNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Messenger\Stamp\DispatchAfterCurrentBusStamp;


class MailController extends AbstractController
{
    /**
     * @Route("/sendmailmsg", name="sendmailmsg")
     * message pushing in MessageBus for dispatch
     * @param MessageBusInterface $bus
     * @return Response
     */

    public function pushMailMessage(MessageBusInterface $bus){

        $entityManager = $this->getDoctrine()->getManager();

       $email_sent_msg = "";
       
          for($msg_id=1; $msg_id <= 10; $msg_id++){

              $toaddress ='jyoti'.$msg_id.'@mailinator.com';
            
            $bus->dispatch( new MailNotification($msg_id,'sales@srijan.com',$toaddress,'Sale for Diwali','<p>Grab the opportunity</p>',new Messages()));

            $email_sent_msg .='Message '.$msg_id.' sent \n';

        }

        return new Response($email_sent_msg);

    }

    /**
     * @Route("/email")
     */
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('admin@local.com')
            ->to('jyoti456@mmailinator.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        // ...
    }
}