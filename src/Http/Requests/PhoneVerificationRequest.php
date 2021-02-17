<?php

namespace Pashkevich\PhoneVerification\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Pashkevich\PhoneVerification\Events\PhoneVerified;

/**
 * Class PhoneVerificationRequest
 *
 * @package Pashkevich\PhoneVerification\Http\Requests
 */
class PhoneVerificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!hash_equals((string)$this->route('id'), (string)$this->user()->getKey())) {
            return false;
        }

        if (!hash_equals((string)$this->route('hash'), sha1($this->user()->getPhoneForVerification()))) {
            return false;
        }

        return true;
    }

    /**
     * Gets the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Fulfills the phone verification request.
     *
     * @return void
     */
    public function fulfill(): void
    {
        $this->user()->markPhoneAsVerified();

        event(new PhoneVerified($this->user()));
    }
}
