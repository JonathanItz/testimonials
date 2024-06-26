<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class GetSubscriptionStatus
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
            $isTrialUser = $user->onTrial();
        }

        View::share([
            'isTrialUser' => $isTrialUser,
            'isSubscribed' => $isSubscribed
        ]);

        return $next($request);
    }
}
