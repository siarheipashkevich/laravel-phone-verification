<?php

namespace Pashkevich\PhoneVerification\Notifications;

use Illuminate\Notifications\Notification;
use Pashkevich\PhoneVerification\Contracts\MustVerifyPhone;
use Pashkevich\PhoneVerification\Notifications\Channels\VerifyPhoneChannel;
use Pashkevich\PhoneVerification\Notifications\Messages\VerifyPhoneMessage;

/**
 * Class VerifyPhone
 *
 * @package Pashkevich\PhoneVerification\Notifications
 */
class VerifyPhone extends Notification
{
    /**
     * Get the notification channels.
     *
     * @return array
     */
    public function via(): array
    {
        return [VerifyPhoneChannel::class];
    }

    /**
     * Get the voice representation of the notification.
     *
     * @param mixed $notifiable
     * @return VerifyPhoneMessage
     */
    public function toPhone(MustVerifyPhone $notifiable): VerifyPhoneMessage
    {
        return (new VerifyPhoneMessage());
    }
}
