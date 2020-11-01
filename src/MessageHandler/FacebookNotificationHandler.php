<?php

namespace App\MessageHandler;

use App\Message\FacebookNotification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class FacebookNotificationHandler implements MessageHandlerInterface
{

    public function __construct(MessageBusInterface $eventBus, EntityManagerInterface $em)
    {
        $this->eventBus = $eventBus;
        $this->em = $em;

    }
                             
    public function __invoke(FacebookNotification $facebookNotification)
    {
        // sending an Facebook message!

        $message = $facebookNotification->getMessageObj();
        $message->setName($facebookNotification->getName());
        $message->setPlatform('Facebook');
        $message->setMsgDate(new \DateTime());
        $message->setStatus(1);
        $message->setResponse('Message '.$facebookNotification ->getMsgId().' sending message now');
        $message->setMsgid($facebookNotification->getMsgId());
        $this->em->persist($message);
        $this->em->flush();

        $fb = $facebookNotification->getFacebookObj();
        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $msg_params =[
                "messaging_type"=> "UPDATE",
                "recipient"=>[
                                "id"=>$facebookNotification->getFacebookUserId()
                ],
                "message"=>[
                                "text"=>"Hi Guys, I have started my new Artist page!"
                ]
            ];
            $response = $fb->get('/me', $fb->getDefaultAccessToken());
            //$sentmessage =$fb->post('/messages',['params'=>$msg_params],$fb->getDefaultAccessToken());

        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $me = $response->getGraphUser();

        echo 'Logged in as ' . $me->getName();

        echo 'sending facebook post now';
    }
}