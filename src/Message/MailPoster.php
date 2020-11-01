<?php

namespace App\Message;

/**
 * This Concrete Creator supports Facebook. Remember that this class also
 * inherits the 'post' method from the parent class. Concrete Creators are the
 * classes that the Client actually uses.
 */
class MailPoster extends MessageSender
{
    private $login, $password,$serviceProvider;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;

    }

    public function getPlatform(): PlatformConnector
    {
        return new MailConnector($this->login, $this->password);
    }
}