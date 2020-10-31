<?php

namespace App\Controller;

use App\Message\SmsNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
class SmsController extends AbstractController
{
    /**
     * @Route("/sendMessage", name="sendMessage")
     * message pushing in MessageBus for dispatch
     * @param MessageBusInterface $bus
     * @return Response
     */

    public function pushSmsMessage(MessageBusInterface $bus){

        $msg_id =2; 

        $bus->dispatch( new SmsNotification($msg_id));

        return new Response("SMS message sending Activity placed");

    }
}