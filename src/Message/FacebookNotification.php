<?php
namespace App\Message;


use App\Entity\Messages;
use Facebook\Facebook;

class FacebookNotification
{

    private $msg_id;

    private $facebook_user_id;

    private $messageContent;

    private $messageName;

    private $messageObj;

    private $fb;

    /**
     * set msg id in constructor
     * set message Content
     * set facebook_user_id
     * set message Name
     *  set new message entity
     */

    public function __construct(int $msg_id, String $messageContent , String $facebook_user_id, String $messageName ,$fb, Messages $messageObj)
    {
        $this->msg_id = $msg_id;

        $this->messageContent = $messageContent;

        $this->facebook_user_id = $facebook_user_id;

        $this->messageName ='Msg-'.$msg_id.'-'.$facebook_user_id;

        $this->messageObj = $messageObj;

        $this->fb = $fb;






    }


    /**
     * get msg id
     *
     * @return integer
     */

    public function getMsgId(): int
    {
        return $this->msg_id;

    }

    /**
     * get messageContent
     *
     * @return String
     */

    public function getMessageContent(): String
    {
        return $this->messageContent;

    }

    /**
     * get facebook_user_id
     *
     * @return String
     */

    public function getFacebookUserId(): String
    {
        return $this->facebook_user_id;

    }

    /**
     * get facebook_user_id
     *
     * @return String
     */

    public function getMessageName(): String
    {
        return $this->messageName;

    }

    /**
     * get name
     * @return String
     */

    public function getName(): String
    {
        return $this->messageName;

    }

    public function getMessageObj(): Messages
    {
        return $this->messageObj;
        ;

    }

    public function getFacebookObj(): Facebook
    {
        return $this->fb;
        ;

    }

}