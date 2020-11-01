<?php

namespace App\Message;

/**
 * This Concrete Product implements the SMS .
 */
class SmsConnector implements PlatformConnector
{
    private $extention;

    private $phoneNumber;

    public function __construct(string $extention, string $phoneNumber)
    {
        $this->extention = $extention;
        $this->password = $phoneNumber;
    }

    public function logIn(): void
    {
        
    }

    public function logOut(): void
    {
        
    }

    public function createMessage($content): void
    {
        echo "Create HTTP API requests to create a message to Mobile .\n";
    }

    public function sendMessage($content): void
    {
        echo "Send HTTP API requests to create a message to Mobile .\n";
    }
}