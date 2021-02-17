<?php

namespace Pashkevich\PhoneVerification\Contracts;

/**
 * Interface SMSGateway
 *
 * @package Pashkevich\PhoneVerification\Contracts
 */
interface SMSGateway
{
    /**
     * Sends the SMS message.
     *
     * @param array $payload
     * @return void
     */
    public function sendMessage(array $payload): void;
}
