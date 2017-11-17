<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CheckFillData
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
        $flagLogin = DB::select('CALL sp_checkfilldata(?)', [session('usr_id')]);
        if ($flagLogin[0]->flag == 2){
            return redirect()->route('filldata');
        }
        return $next($request);
    }
}
