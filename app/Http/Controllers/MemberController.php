<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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

    public function admin_view()
    {
        $members = DB::table('user')->where('user_akses', '3')->get();
        $detil_univ = DB::table('universitas')->get();
        foreach ($detil_univ as $value) {
            $univ[$value->iduniversitas]=$value->universitas_nama;
        }
        foreach ($members as $key => $value) {
            $kode[$key] = explode("-",$value->user_no_kta);
        }

        return view('members.admin',compact('members','kode','univ'));
    }
    public function admin_add()
    {
        $nama = Input::get('nama');
        $nrp = Input::get('nrp');
        $tahun = Input::get('tahun');
        $universitas = Input::get('universitas');
        $wilayah = DB::table('universitas')->where('iduniversitas', $universitas)->get();
        $kta = $tahun . '-' . $wilayah[0]->wilayah_idwilayah . '-' . $universitas . '-%';
        $id = DB::table('user')->where('user_no_kta', 'like', $kta)->orderBy('user_no_kta', 'desc')->get();
        $max=0;
        foreach ($id as $key => $value) {
            $increment = explode('-',$value->user_no_kta);
            if($max<=$increment[3]) $max=$increment[3];
        }
        $max+=1;
        $tahun = $tahun . ',,';
        $kta = substr($kta, 0, -1) . $max;
        DB::table('user')->insert([
            'user_nrp' => $nrp, 
            'user_no_kta' => $kta,
            'user_nama' => $nama,
            'user_tahun_beasiswa' => $tahun
        ]);
        return redirect('/members/admin');
    }

    public function admin_delete($nrp)
    {
        DB::table('user')->where('user_nrp', $nrp)->delete();
        return redirect('/members/admin');
    }
}
