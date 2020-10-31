<?php
namespace App\Message;


class MailNotification{

    private $msg_id;

    /**
     * set msg id in constructor
     */

    public function __construct(int $msg_id)
    {
        $this->msg_id = $msg_id;
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

}