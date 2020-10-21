<?php

namespace Esupl\PhoneVerification\Contracts;

/**
 * Interface SMSGateway
 *
 * @package Esupl\PhoneVerification\Contracts
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
