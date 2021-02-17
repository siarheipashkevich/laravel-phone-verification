<?php

namespace Pashkevich\PhoneVerification\Concerns;

/**
 * Trait MustVerifyPhone
 *
 * @package Pashkevich\PhoneVerification\Concerns
 */
trait MustVerifyPhone
{
    /**
     * Gets the name of the phone column.
     *
     * @return string
     */
    private function getPhoneColumn(): string
    {
        return config('phone_verifier.phone_column', 'phone');
    }
}
