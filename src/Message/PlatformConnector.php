<?php

namespace App\Message;

/**
 * The Product interface declares behaviors of various types of products.
 */
interface PlatformConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createMessage($content): void;

    public function sendMessage($content): void;
}