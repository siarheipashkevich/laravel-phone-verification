<?php

namespace Esupl\PhoneVerification\Notifications;

use Illuminate\Notifications\Notification;
use Esupl\PhoneVerification\Contracts\MustVerifyPhone;
use Esupl\PhoneVerification\Notifications\Channels\VerifyPhoneChannel;
use Esupl\PhoneVerification\Notifications\Messages\VerifyPhoneMessage;

/**
 * Class VerifyPhone
 *
 * @package Esupl\PhoneVerification\Notifications
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
