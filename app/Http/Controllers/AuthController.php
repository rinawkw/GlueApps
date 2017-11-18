<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\In;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    public function do_login()
    {
        $username = Input::get('username');
        $password = Input::get('password');
        $dat['data'] = array(
            'username' => $username,
            'password' => $password
        );
        return redirect()->route('home');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function filldata()
    {
        return view('auth.filldata');
    }


    public function do_register()
    {
        $namalengkap = Input::get('namalengkap');
        $email = Input::get('email');
        $password = Input::get('password');
        $nomortelepon = Input::get('nomortelepon');
        $nimnrp = Input::get('nimnrp');
        $data['data'] = array(
            'namalengkap' => $namalengkap,
            'email' => $email,
            'password' => $password,
            'nomortelepon' => $nomortelepon,
            'nimnrp' => $nimnrp
        );
        $usr_id = DB::table('members')
            ->insertGetId(
                array('usr_fullname' => $namalengkap)
            );
        $id = DB::table('pengguna')
            ->insertGetId(
                array(
                    'username' => $email,
                    'password' => $password,
                    'nama_pengguna' => $namalengkap,
                    'nrp' => $nimnrp,
                    'hak_akses' => 2,
                    'fk_usr_id' => $usr_id
                ));
        DB::table('master_nrp')
            ->where('nrp', $nimnrp)
            ->update(array('id_pengguna' => $id));
        
        Session::put('usr_id',$usr_id);
//        DB::select('call sp_createuser(?,?,?)', [$email, $password, $namalengkap]);
        return redirect()->route('login');
    }

    public function do_filldata()
    {
        $noktp = Input::get('noktp');
        $tmplhr = Input::get('tmplhr');
        $tgllhr = Input::get('tgllhr');
        $jk = Input::get('jk');
        $agama = Input::get('agama');
        $goldar = Input::get('goldar');
        $suku = Input::get('suku');
        $status = Input::get('status');
        $biodata = Input::get('biodata');
        $idline = Input::get('idline');
        $idfb = Input::get('idfb');
        $idig = Input::get('idfb');
        $idtwitter = Input::get('idtwitter');
        $tahun1 = Input::get('tahun1');
        $tahun2 = Input::get('tahun2');
        $tahun3 = Input::get('tahun3');
        $universitas = Input::get('universitas');
        $fakultas = Input::get('fakultas');
        $departemen = Input::get('departemen');
        $periode = Input::get('periode');
        $universitas2 = Input::get('universitas2');
        $fakultas2 = Input::get('fakultas2');
        $departemen2 = Input::get('departemen2');
        $periode2 = Input::get('periode2');
        $jabatan = Input::get('jabatan');
        $perusahaan = Input::get('perusahaan');
        $lokasiperusahaan = Input::get('lokasiperusahaan');
        $bulanmulai = Input::get('bulanmulai');
        $tahunmulai = Input::get('tahunmulai');
        $bulanakhir = Input::get('bulanakhir');
        $tahunakhir = Input::get('tahunakhir');

        $data['data'] = array(
            'noktp' => $noktp,
            'tmplhr' => $tmplhr,
            'tgllhr' => $tgllhr,
            'jk' => $jk,
            'agama' => $agama,
            'goldar' => $goldar,
            'suku' => $suku,
            'status' => $status,
            'biodata' => $biodata,
            'idline' => $idline,
            'idfb' => $idfb,
            'idig' => $idig,
            'idtwitter' => $idtwitter,
            'tahun1' => $tahun1,
            'tahun2' => $tahun2,
            'tahun3' => $tahun3,
            'universitas' => $universitas,
            'fakultas' => $fakultas,
            'departemen' => $departemen,
            'periode' => $periode,
            'universitas2' => $universitas2,
            'fakultas2' => $fakultas2,
            'departemen2' => $departemen2,
            'periode2' => $periode2,
            'jabatan' => $jabatan,
            'perusahaan' => $perusahaan,
            'lokasiperusahaan' => $lokasiperusahaan,
            'bulanmulai' => $bulanmulai,
            'tahunmulai' => $tahunmulai,
            'bulanakhir' => $bulanakhir,
            'tahunakhir' => $tahunakhir
        );
        dd($data);
    }

    public function do_filldata1()
    {
        //$usr_id = Input::get('usr_id');
        $noktp = Input::get('noktp');
        $usr_email = Input::get('email');
        $usr_no_hp = Input::get('nohp');
        $usr_alamat = Input::get('alamat');
        $tmplhr = Input::get('tmplhr');
        $tgllhr = Input::get('tgllhr');
        $jk = Input::get('jk');
        $agama = Input::get('agama');
        $goldar = Input::get('goldar');
        $suku = Input::get('suku');
        $status = Input::get('status');
        $biodata = Input::get('biodata');
        $idline = Input::get('idline');
        $idfb = Input::get('idfb');
        $idig = Input::get('idig');
        $idtwitter = Input::get('idtwitter');
        $data['data'] = array(
            'usr_no_kta' => $noktp,
            'usr_email' => $usr_email,
            'usr_no_hp' => $usr_no_hp,
            'usr_alamat' => $usr_alamat,
            'usr_tmpt_lahir' => $tmplhr,
            'usr_tgl_lahir' => $tgllhr,
            'usr_jk' => $jk,
            'usr_agama' => $agama,
            'usr_goldar' => $goldar,
            'usr_suku' => $suku,
            'usr_status' => $status,
            'usr_bio' => $biodata,
            'usr_line' => $idline,
            'usr_fb' => $idfb,
            'usr_insta' => $idig,
            'usr_twit' => $idtwitter,
        );
        DB::table('members')
            ->where('usr_id', session('usr_id'))
            ->update($data['data']);
//        dd($data);
        Session::put('data1', $data['data']);
//        dd(session('data1.usr_no_kta'));
        return redirect()->route('filldata');
    }


    public function do_filldata2()
    {
        //$usr_id = Input::get('usr_id');
        $tahun1 = Input::get('tahun1');
        $tahun2 = Input::get('tahun2');
        $tahun3 = Input::get('tahun3');

        $data['data'] = array(
            'usr_tahun1' => $tahun1,
            'usr_tahun2' => $tahun2,
            'usr_tahun3' => $tahun3,
        );
        DB::table('members')
            ->where('usr_id', session('usr_id'))
            ->update($data['data']);
        Session::put('data2', $data['data']);
        //dd($data);
        return redirect()->route('filldata');
    }
    public function do_filldata3()
    {
        $usr_id = Input::get('usr_id');
        $universitas = Input::get('universitas');
        $fakultas = Input::get('fakultas');
        $departemen = Input::get('departemen');
        $periode = Input::get('periode');
        $universitas2 = Input::get('universitas2');
        $fakultas2 = Input::get('fakultas2');
        $departemen2 = Input::get('departemen2');
        $periode2 = Input::get('periode2');

        $data['data'] = array(
            'usr_univ1' => $universitas,
            'usr_fakultas1' => $fakultas,
            'usr_jurusan1' => $departemen,
            'usr_period1' => $periode,
            'usr_univ2' => $universitas2,
            'usr_fakultas2' => $fakultas2,
            'usr_jurusan2' => $departemen2,
            'usr_period2' => $periode2,
        );
        DB::table('members')
            ->where('usr_id', session('usr_id'))
            ->update($data['data']);
        Session::put('data3', $data['data']);
        //dd($data);
        return redirect()->route('filldata');
    }
    public function do_filldata4()
    {
        //$usr_id = Input::get('usr_id');
        $jabatan = Input::get('jabatan');
        $perusahaan = Input::get('perusahaan');
        $lokasiperusahaan = Input::get('lokasiperusahaan');
        $bulanmulai = Input::get('bulanmulai');
        $tahunmulai = Input::get('tahunmulai');
        $bulanakhir = Input::get('bulanakhir');
        $tahunakhir = Input::get('tahunakhir');

        $data['data'] = array(
            'work_usr_id' => session('usr_id'),
            'work_jabatan' => $jabatan,
            'work_company' => $perusahaan,
            'work_location' => $lokasiperusahaan,
            'work_bulan1' => $bulanmulai,
            'work_tahun1' => $tahunmulai,
            'work_bulan2' => $bulanakhir,
            'work_tahun2' => $tahunakhir
        );
        DB::table('work')
            ->insert($data['data']);
        Session::put('data4', $data['data']);
        //dd($data);
        return redirect()->route('filldata');
    }
    public function show_myprofile()
    {
        $nama = session('name');
        $user = DB::table('members')->where('usr_id', session('usr_id'))->get();
        $userwork = DB::table('work')->where('work_usr_id', session('usr_id'))->get();
        $user1 = (array) $user[0];
        $userwork1 = (array) $userwork[0];
        Session::put('data1', $user1);
        Session::put('data2', $user1);
        Session::put('data3', $user1);
        Session::put('data4', $userwork1);
        return view('profile.profile', compact('nama','user','userwork'));
    }
    public function show_profile($usr_id)
    {
        $nama = DB::table('pengguna')->where('fk_usr_id', $usr_id)->value('nama_pengguna');
        $user = DB::table('members')->where('usr_id', $usr_id)->get();
        $userwork = DB::table('work')->where('work_usr_id', session('usr_id'))->get();
        return view('profile.profile', compact('nama','user','userwork'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
