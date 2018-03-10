<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Closure;

class CheckAnggotaGenbi
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
        $flagRegister = DB::select('call sp_isgenbi(?)', [$request->nimnrp]);
        if($flagRegister[0]->flag == 1) {
            Session::flash('message',$flagRegister[0]->message);
        }
        else {
            Session::flash('error_message',$flagRegister[0]->message);
            return redirect()->route('register');
        }
        return $next($request);
    }
}