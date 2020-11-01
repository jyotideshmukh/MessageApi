<?php

namespace App\Message;

/**
 * This Concrete Product implements the Facebook API.
 */
class FacebookConnector implements PlatformConnector
{
    private $login;

    private $password;

    private $message;


    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    public function createMessage($content): void
    {
        echo "Create HTTP API requests to create a message in Facebook .\n";
    }

    public function sendMessage($content): void
    {
        echo "Send HTTP API requests to send a message to Facebook user .\n";
    }
}