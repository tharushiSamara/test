<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;

class LanguageSwitcher
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
        if (Session::has('locale')) {       //presisting the language otherwise local atomaticaly fallback to en
            App::setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}
