<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Message\FacebookNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Message\FacebookAppObjCreator;


class FacebookController extends AbstractController
{


    /**
     * @Route("/sendfbmsg", name="sendfbmsg")
     * message pushing in MessageBus for dispatch
     * @param MessageBusInterface $bus
     * @return Response
     */

    public function pushFacebookMessage(MessageBusInterface $bus){

        $fbObjCreator = new FacebookAppObjCreator();
        $fbObj = $fbObjCreator->getFbInstance();

        for($msg_id=1; $msg_id <= 10; $msg_id++) {

            $messageName = 'fb-msg-' . $msg_id . '';
            $facebook_user_id = 'sagarika.patil.5832';
            $messageContent = 'Facebook message';

            $bus->dispatch(new FacebookNotification($msg_id, $messageContent, $facebook_user_id, $messageName,$fbObj, new Messages()));
        }

        return new Response("Facebook message  sending Activity placed");

    }


}