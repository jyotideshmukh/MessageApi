<?php

namespace App\Message;

class MailConnector implements PlatformConnector
{
    private $email;

    private $password;

    private $message;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createMessage($content): void
    {
        echo "Send HTTP API requests to create a Message to send as email.\n";
    }

    public function sendMessage($content): void
    {
        echo "Send HTTP API requests to send a Message to send as email.\n";
    }
}