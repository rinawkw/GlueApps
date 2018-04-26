<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = DB::table('user')->where('user_akses', '3')->get();
        $detil_univ = DB::table('universitas')->get();

        foreach ($detil_univ as $value) {
         	$univ[$value->iduniversitas]=$value->universitas_nama;
        }
        foreach ($members as $key => $value) {
         	$kode[$key] = explode("-",$value->user_no_kta);
        }
        #dd($kode);
        return view('members.index',compact('members','kode','univ'));
    }
}
