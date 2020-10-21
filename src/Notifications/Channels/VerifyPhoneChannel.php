<?php

namespace Esupl\PhoneVerification\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Esupl\PhoneVerification\Contracts\SMSGateway;

/**
 * Class VerifyPhoneChannel
 *
 * @package Esupl\PhoneVerification\Notifications\Channels
 */
class VerifyPhoneChannel
{
    /**
     * @var SMSGateway
     */
    private SMSGateway $SMSGateway;

    /**
     * VerifyPhoneChannel constructor.
     *
     * @param SMSGateway $SMSGateway
     */
    public function __construct(SMSGateway $SMSGateway)
    {
        $this->SMSGateway = $SMSGateway;
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param Notification $notification
     * @return void
     */
    public function send($notifiable, Notification $notification): void
    {
        $message = $notification->toPhone($notifiable);

        $this->SMSGateway->sendMessage($message);
    }
}
