<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = DB::table('pengguna')
            ->join('members', 'pengguna.fk_usr_id', '=', 'members.usr_id')
            ->join('master_nrp', 'pengguna.id_pengguna', '=', 'master_nrp.id_pengguna')
            ->select('pengguna.nama_pengguna', 'pengguna.fk_usr_id', 'members.usr_univ1', 'master_nrp.nrp')
            ->get();
        return view('members.index',compact('members'));
    }
}
