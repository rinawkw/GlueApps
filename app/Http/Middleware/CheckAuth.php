<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        dd(DB::statement('call sp_login(?,?)',["'.$request->username.'","'.$request->password.'"]));
        $flagLogin = DB::select('call sp_login(?,?)', [$request->username, $request->password]);
//        dd($flagLogin);
        if ($flagLogin[0]->flag) {
            $lock = 1;
        } else {
//            $lock = $flagLogin[0]->message;
//            dd($flagLogin);
            return redirect()->route('login')->with('error_message', $flagLogin[0]->message);
//            return response()
//                ->view('auth.login');
        }
//        session(['username' => $request->username],
//                ['name' => $flagLogin[0]->message]);
        Session::put('username', $request->username);
        Session::put('name', $flagLogin[0]->message);
//        $request->session()->put('username', $request->username);
//        $request->session()->put('name', $flagLogin[0]->message);
        return $next($request);
    }
}
