<?php

namespace App\Http\Middleware;

use Closure;

class CargoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }



    public function handle($request, Closure $next)
    {
        dd('hola');
        dd($$this->auth->user());
        return $next($request);
    }
}
