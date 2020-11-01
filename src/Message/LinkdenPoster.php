<?php

namespace App\Message;

/**
 * This Concrete Creator supports LinkedIn.
 */
class LinkedInPoster extends MessageSender
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getPlatform(): PlatformConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}