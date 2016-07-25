<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;

abstract class IsType
{
    private $auth;
    private $session;

    public function __construct(Guard $auth, Store $session){
        $this->auth = $auth;
        $this->session = $session;
    }

    abstract public function getType();

    public function handle($request, Closure $next)
    {

        if($this->auth->user()->is($this->getType()))
        {
            return redirect()->to('home');
        }

        return $next($request);
    }
}
