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
        // $isSubscribed = auth()->user()?->subscribed();

        // $maxTestimonials = null;
        // if(! $isSubscribed) {
        //     $maxTestimonials = 10;
        // }

        // $request->merge(['maxTestimonials' => $maxTestimonials]);

        return $next($request);
    }
}
