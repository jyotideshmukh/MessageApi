<?php

namespace App\Controller;

use App\Message\MailNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
class MailController extends AbstractController
{
    /**
     * @Route("/sendmailmsg", name="sendmailmsg")
     * message pushing in MessageBus for dispatch
     * @param MessageBusInterface $bus
     * @return Response
     */

    public function pushMailMessage(MessageBusInterface $bus){

        $msg_id = 1; 

        $bus->dispatch( new MailNotification($msg_id,'sales@srijan.com','jyoti@mailinator.com','Sale for Diwali','<p>Grab the opportunity</p>'));

        return new Response("Mail message  sending Activity placed");

    }
}