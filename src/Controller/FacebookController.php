<?php

namespace App\Controller;

use App\Message\FacebookNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
class FacebookController extends AbstractController
{
    /**
     * @Route("/sendfbmsg", name="sendfbmsg")
     * message pushing in MessageBus for dispatch
     * @param MessageBusInterface $bus
     * @return Response
     */

    public function pushFacebookMessage(MessageBusInterface $bus){

        $msg_id = 1; 

        $bus->dispatch( new FacebookNotification($msg_id));

        return new Response("Facebook message  sending Activity placed");

    }
}