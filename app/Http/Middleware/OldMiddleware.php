<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
{
    /**
     * 返回请求过滤器
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('age') <= 200) {
            //return redirect('home');
            dd('home');
        }

        return $next($request);
    }

}