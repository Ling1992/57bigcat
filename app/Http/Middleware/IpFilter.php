<?php

namespace App\Http\Middleware;

use Closure;

class IpFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->userAgent()) {
            return response("block", 503);
        }
        return $next($request);
    }

    public function terminate($request, $response)
    {
        // 试试 用事件 的效率
        app('db')->table("ip_collection")->insert([
            'ip'=>$request->ip(),
            'request_url'=>$request->getRequestUri(),
            'user_agent'=>$request->userAgent()
        ]);
    }

}
