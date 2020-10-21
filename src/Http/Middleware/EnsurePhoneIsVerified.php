<?php

namespace Esupl\PhoneVerification\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Esupl\PhoneVerification\Contracts\MustVerifyPhone;

/**
 * Class EnsurePhoneIsVerified
 *
 * @package Esupl\PhoneVerification\Http\Middleware
 */
class EnsurePhoneIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!$user || ($user instanceof MustVerifyPhone && !$user->hasVerifiedPhone())) {
            abort(403, 'Your phone number is not verified.');
        }

        return $next($request);
    }
}
