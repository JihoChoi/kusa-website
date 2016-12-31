<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminAuthenticate
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
        if (Auth::check()) {
          $user = Auth::user();
          if ($user->user_status == "admin")
            return $next($request);
        }

        return redirect()->action('MembersController@directIndex')->with('msg', 'Admin authentication failed.');

    }
}
