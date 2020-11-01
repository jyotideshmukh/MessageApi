<?php
namespace App\Message;

abstract class MessageSender
{
    /**
     * The actual factory method. Note that it returns the abstract connector.
     * This lets subclasses return any concrete connectors without breaking the
     * superclass' contract.
     */
    abstract public function getPlatform(): PlatformConnector;

    /**
     * When the factory method is used inside the Creator's business logic, the
     * subclasses may alter the logic indirectly by returning different types of
     * the connector from the factory method.
     */
    public function send($message): void
    {
        // Call the factory method to create a Product object...
        $paltform = $this->getPlatform();
        // ...then use it as you will.
        $platform->logIn();
        $platform->createMessge($message);
        $platform->sendMessge($message);
        $platform->logout();
    }
}