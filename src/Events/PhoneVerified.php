<?php

namespace Esupl\PhoneVerification\Events;

use Illuminate\Queue\SerializesModels;
use Esupl\PhoneVerification\Contracts\MustVerifyPhone;

/**
 * Class PhoneVerified
 *
 * @package Esupl\PhoneVerification\Events
 */
class PhoneVerified
{
    use SerializesModels;

    /**
     * The verified user.
     *
     * @var MustVerifyPhone
     */
    public MustVerifyPhone $user;

    /**
     * PhoneVerified constructor.
     *
     * @param MustVerifyPhone $user
     */
    public function __construct(MustVerifyPhone $user)
    {
        $this->user = $user;
    }
}
