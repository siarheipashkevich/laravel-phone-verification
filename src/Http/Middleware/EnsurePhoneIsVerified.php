<?php

namespace Esupl\PhoneVerification\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Redirect, URL};
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
     * @param string|null $redirectToRoute
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $redirectToRoute = null)
    {
        $user = $request->user();

        if (!$user || ($user instanceof MustVerifyPhone && !$user->hasVerifiedPhone())) {
            return $request->expectsJson()
                ? abort(403, 'Your phone number is not verified.')
                : Redirect::guest(URL::route($redirectToRoute ?: 'phone.verification.notice'));
        }

        return $next($request);
    }
}
