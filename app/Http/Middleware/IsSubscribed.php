<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
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
            $isTrialUser = $user->onTrial();
        }

        if(! $isSubscribed && ! $isTrialUser) {
            return redirect()->route('membership');
        }

        return $next($request);
    }
}
