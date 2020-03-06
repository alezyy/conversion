<?php

namespace App\Http\Middleware;

use Closure,
    Session;

class Locale
{
    private $lang = 'en';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            app()->setLocale(Session::get('locale'));
        }
		else
		{
		    app()->setLocale($this->lang);
		}
        return $next($request);
    }

}
