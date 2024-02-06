<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()?->user();
        $isTrialUser = false;
        $isSubscribed = false;
        if($user) {
            $isSubscribed = $user?->subscribed();
            if(! $isSubscribed) {
                $isTrialUser = $user->trial_ends_at ?true:false;
            }
        }

        $request->merge([
            'isTrialUser' => $isTrialUser,
            'isSubscribed' => $isSubscribed
        ]);

        return $next($request);
    }
}
