<?php
namespace App\Message;

use App\Entity\Messages;

class MailNotification{

    private $msg_id;

    private $fromMailAddress;

    private $toAddress;

    private $subject;
    
    private $body;

    private $messageName;

    private $messageObj;
    
    

    

    /**
     * set msg id in constructor
     * set from email address
     * set to address
     * set subject
     * set subject
     * set new message entity
     */

    public function __construct(int $msg_id, String $fromMailAddress ,  String $toAddress , String $subject, String $body, Messages $messageObj)
    {
        $this->msg_id = $msg_id;

        $this->fromMailAddress = $fromMailAddress;

        $this->toAddress = $toAddress;

        $this->subject = $subject;

        $this->body = $body;

        $this->messageName ='Msg-'.$msg_id.'-'.$toAddress;

        $this->messageObj = $messageObj;

        

       
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


    /**
     * get fromMailAddress
     *
     * @return String
     */
   
    public function getMessageName(): String
    {
        return $this->messageName;
        ;

    }

    /**
     * get Name as messagename
     *
     * @return String
     */

    public function getName(): String
    {
        return $this->messageName;
        ;

    }

    /**
     * get messageObj
     *
     * @return Messages
     */
    public function getMessageObj(): Messages
    {
        return $this->messageObj;
        ;

    }


   /* public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from($this->fromMailAddress)
            ->to($this->toAddress)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject($this->subject)
            //->text('Sending emails is fun again!')
            ->html($this->body);

        $mailer->send($email);

        // ...
    }*/


    
    

}