<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;

class CountVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $visitor = new Visitor();
        $ip =$request->ip();;
        $location = GeoIP::getLocation($ip);
        $visitor->ip_address =$request->ip();
        $visitor->city =$location->city;
        $visitor->country =$location->country;
        $visitor->user_agent = $request->userAgent();
        $visitor->save();
        return $next($request);
    }
}
