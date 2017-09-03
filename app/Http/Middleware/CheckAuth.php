<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use DB;
use Illuminate\Support\Facades\Facade;

class CheckAuth
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
//        dd(DB::statement('call sp_login(?,?)',["'.$request->username.'","'.$request->password.'"]));
        $flagLogin = \DB::select('call sp_login(?,?)',["'.$request->username.'","'.$request->password.'"]);
        dd($flagLogin);
        if ($flagLogin[0]->message != null) {
            $lock = 1;
        }
        else{
            $lock = 0;
            dd($flagLogin);
            return response()
                ->view('auth.login');
        }
        Session::flash('lock', $lock);
        return $next($request);
    }
}
