<?php

namespace Esupl\PhoneVerification\Contracts;

/**
 * Interface MustVerifyPhone
 *
 * @package Esupl\PhoneVerification\Contracts
 */
interface MustVerifyPhone
{
    /**
     * Determines if the user has verified their phone.
     *
     * @return bool
     */
    public function hasVerifiedPhone(): bool;

    /**
     * Marks the given user's phone as verified.
     *
     * @return bool
     */
    public function markPhoneAsVerified(): bool;

    /**
     * Sends the phone verification notification.
     *
     * @return void
     */
    public function sendPhoneVerificationNotification(): void;

    /**
     * Gets the phone number that should be used for verification.
     *
     * @return string
     */
    public function getPhoneForVerification(): string;
}
