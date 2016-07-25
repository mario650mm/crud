<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;

class IsAdmin extends IsType
{
    private $auth;
    private $session;

    public function __construct(Guard $auth, Store $session){
        $this->auth = $auth;
        $this->session = $session;
    }

    public function getType()
    {
        return 'admin';
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! $this->auth->user()->is($this->getType()) == 'admin'){
            return redirect()->to('home');
        }else{
            return $next($request);
        }

    }
}
