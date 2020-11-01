<?php
namespace App\Message;


class MailNotification{

    private $msg_id;

    private $fromMailAddress;

    private $toAddress;

    private $subject;
    
    private $body;

    /**
     * set msg id in constructor
     */

    public function __construct(int $msg_id, String $fromMailAddress ,  String $toAddress , String $subject, String $body)
    {
        $this->msg_id = $msg_id;

        $this->fromMailAddress = $fromMailAddress;

        $this->toAddress = $toAddress;

        $this->subject = $subject;

        $this->body = $body;
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
     * get fromMailAddress
     *
     * @return String
     */
   
    public function getFromMailAddress(): String
    {
        return $this->fromMailAddress;

    }

    /**
     * get toAddress
     *
     * @return String
     */
   
    public function getToAddress(): String
    {
        return $this->toAddress;

    }

    /**
     * get subject
     *
     * @return String
     */
   
    public function getSubject(): String
    {
        return $this->subject;

    }


    /**
     * get body
     *
     * @return String
     */
   
    public function getBody(): String
    {
        return $this->body;

    }

}