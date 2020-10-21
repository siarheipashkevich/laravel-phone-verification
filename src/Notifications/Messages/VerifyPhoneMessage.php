<?php

namespace Esupl\PhoneVerification\Notifications\Messages;

/**
 * Class VerifyPhoneMessage
 *
 * @package Esupl\PhoneVerification\Notifications\Messages
 */
class VerifyPhoneMessage
{
    /**
     * @var string
     */
    private string $to;

    /**
     * @var string
     */
    private string $token;

    /**
     * Sets the to.
     *
     * @param string $to
     * @return $this
     */
    public function to(string $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Sets the token.
     *
     * @param string $token
     * @return $this
     */
    public function token(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Gets the payload of the message.
     *
     * @return array
     */
    public function getPayload(): array
    {
        return [
            'to' => $this->to,
            'token' => $this->token,
        ];
    }
}
