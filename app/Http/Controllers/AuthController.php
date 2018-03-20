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
        return view('auth.login2');
    }

    public function do_login()
    {
        $username = Input::get('username');
        $password = Input::get('password');
        $dat['data'] = array(
            'username' => $username,
            'password' => $password
        );
        $this->get_data_user();
        return redirect()->route('home');
    }

    public function get_data_user()
    {
        $user = DB::select('call sp_getdatauser(?)', [Session::get('user_id')]);
        $nrp = explode("-", $user[0]->user_no_kta);
        //dd($nrp);
        $univ = DB::table('universitas')->where('iduniversitas', $nrp[2])->get();
        //Session::put('data.kuliah_univ1', $univ[0]->universitas_nama);
        //dd($univ);
        $data['data'] = array(
            'user_nama' => $user[0]->user_nama,
            'user_email' => $user[0]->user_email,
            'user_no_hp' => $user[0]->user_no_hp,
            'user_alamat' => $user[0]->user_alamat,
            'user_tempat_lahir' => $user[0]->user_tempat_lahir,
            'user_tanggal_lahir' => $user[0]->user_tanggal_lahir,
            'user_jk' => $user[0]->user_jk,
            'user_agama' => $user[0]->user_agama,
            'user_goldar' => $user[0]->user_goldar,
            'user_suku' => $user[0]->user_suku,
            'user_status' => $user[0]->user_status,
            'user_bio' => $user[0]->user_bio,
            'user_foto' => $user[0]->user_foto,
            'user_tahun_beasiswa' => $user[0]->user_tahun_beasiswa,
            'kuliah_fakultas1' => $user[0]->kuliah_fakultas1,
            'kuliah_jurusan1' => $user[0]->kuliah_jurusan1,
            'kuliah_masuk_keluar1' => $user[0]->kuliah_masuk_keluar1,
            'kuliah_univ2' => $user[0]->kuliah_univ2,
            'kuliah_fakultas2' => $user[0]->kuliah_fakultas2,
            'kuliah_jurusan2' => $user[0]->kuliah_jurusan2,
            'kuliah_masuk_keluar2' => $user[0]->kuliah_masuk_keluar2,
        );
        $kerja = DB::table('user_kerja')->where('user_nrp', session('user_id'))->get();
        //dd($kerja);
        Session::put('data', $data['data']);
        Session::put('data.kuliah_univ1', $univ[0]->universitas_nama);
        if(isset($kerja[0])) {
            Session::put('data.kerja_jabatan', $kerja[0]->kerja_jabatan);
            Session::put('data.kerja_perusahaan', $kerja[0]->kerja_perusahaan);
            Session::put('data.kerja_lokasi', $kerja[0]->kerja_lokasi);

            $kerja_waktu = explode(",",$kerja[0]->kerja_masuk_keluar);
            $kerja_masuk = explode("/",$kerja_waktu[0]);
            $kerja_keluar = explode("/",$kerja_waktu[1]);
            Session::put('data.kerja_bulan_masuk', $kerja_masuk[0]);
            Session::put('data.kerja_tahun_masuk', $kerja_masuk[1]);
            Session::put('data.kerja_bulan_keluar', $kerja_keluar[0]);
            Session::put('data.kerja_tahun_keluar', $kerja_keluar[1]);
        }
        $tahun = explode(",", $user[0]->user_tahun_beasiswa);
        Session::put('data.user_tahun1', $tahun[0]);
        if(isset($tahun[1])){
            Session::put('data.user_tahun2', $tahun[1]);
        }
        if(isset($tahun[2])){
            Session::put('data.user_tahun3', $tahun[2]);
        }
        // dd($tahun[0]);
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('external');
    }

    public function register()
    {
        return view('auth.register2');
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
        // $nomortelepon = Input::get('nomortelepon');
        $nimnrp = Input::get('nimnrp');
        $data['data'] = array(
            'user_nama' => $namalengkap,
            'user_email' => $email,
            'user_password' => $password,
        );
        DB::table('user')
            ->where('user_nrp', $nimnrp)
            ->update($data['data']);
        return redirect()->route('login');
    }

    public function do_filldata1(Request $request)
    {
        //$usr_id = Input::get('usr_id');
        $user_nama = Input::get('nama');
        $user_email = Input::get('email');
        $user_no_hp = Input::get('nohp');
        $user_alamat = Input::get('alamat');
        $user_tempat_lahir = Input::get('tmplhr');
        $user_tanggal_lahir = Input::get('tgllhr');
        $user_jk = Input::get('jk');
        $user_agama = Input::get('agama');
        $user_goldar = Input::get('goldar');
        $user_suku = Input::get('suku');
        $user_status = Input::get('status');
        $user_bio = Input::get('biodata');
        //$idline = Input::get('idline');
        //$idfb = Input::get('idfb');
        //$idig = Input::get('idig');
        //$idtwitter = Input::get('idtwitter');
        // if(Input::file('foto'))
        // {
        //     $image = Input::file('foto');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $path = public_path('images/foto' . $filename);
        //     Image::make($image->getRealPath())->resize(200, 200)->save($path);
        //     $photopath = "/public/images/foto" + $filename;
        // }
        if ($request->file('foto')){
            $img = time() . "." . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(base_path() . '/public/images/foto/', $img);
            $photopath = "images/foto/" . $img;
        }
        else {
            $photopath = Input::get('fotosession');
        }
        $data['data'] = array(
            'user_nama' => $user_nama,
            'user_email' => $user_email,
            'user_no_hp' => $user_no_hp,
            'user_alamat' => $user_alamat,
            'user_tempat_lahir' => $user_tempat_lahir,
            'user_tanggal_lahir' => $user_tanggal_lahir,
            'user_jk' => $user_jk,
            'user_agama' => $user_agama,
            'user_goldar' => $user_goldar,
            'user_suku' => $user_suku,
            'user_status' => $user_status,
            'user_bio' => $user_bio,
            // 'user_line' => $idline,
            // 'user_fb' => $idfb,
            // 'user_insta' => $idig,
            // 'user_twit' => $idtwitter,
            'user_foto' => $photopath,
            'user_thumbnail' => $photopath,
        );
        DB::table('user')
            ->where('user_nrp', session('user_id'))
            ->update($data['data']);
        //  dd($data);
        $this->get_data_user();        
        //  Session::put('data', $data['data']);
        //  dd(session('data1.usr_no_kta'));
        return redirect()->route('filldata');
    }

    public function do_filldata2()
    {
        //$usr_id = Input::get('usr_id');
        $tahun1 = Input::get('tahun1');
        $tahun2 = Input::get('tahun2');
        $tahun3 = Input::get('tahun3');

        $user_tahun_beasiswa = $tahun1.",".$tahun2.",".$tahun3;

        $data['data'] = array(
            'user_tahun_beasiswa' => $user_tahun_beasiswa
        );
        DB::table('user')
            ->where('user_nrp', session('user_id'))
            ->update($data['data']);
        $this->get_data_user();        
        //dd($data);
        return redirect()->route('filldata');
    }
    public function do_filldata3()
    {
        // $user_id = Input::get('usr_id');
        $universitas = Input::get('universitas');
        $fakultas = Input::get('fakultas');
        $departemen = Input::get('departemen');
        $periode = Input::get('periode');
        $universitas2 = Input::get('universitas2');
        $fakultas2 = Input::get('fakultas2');
        $departemen2 = Input::get('departemen2');
        $periode2 = Input::get('periode2');

        $data['data'] = array(
            'kuliah_fakultas1' => $fakultas,
            'kuliah_jurusan1' => $departemen,
            'kuliah_masuk_keluar1' => $periode,
            // 'kuliah_univ2' => $universitas2,
            // 'kuliah_fakultas2' => $fakultas2,
            // 'kuliah_jurusan2' => $departemen2,
            // 'kuliah_masuk_keluar2' => $periode2,
        );
        DB::table('user')
            ->where('user_nrp', session('user_id'))
            ->update($data['data']);
        $this->get_data_user();        
        // Session::put('data', $data['data']);
        // Session::put('data.univ1', $universitas);
        // dd($data);
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
        $masukkeluar = $bulanmulai."/".$tahunmulai.","."$bulanakhir"."/".$tahunakhir;

        $data['data'] = array(
            'user_nrp' => session('user_id'),
            'kerja_jabatan' => $jabatan,
            'kerja_perusahaan' => $perusahaan,
            'kerja_lokasi' => $lokasiperusahaan,
            'kerja_masuk_keluar' => $masukkeluar,
            "kerja_created" =>  \Carbon\Carbon::now(), # \Datetime()
            "kerja_updated" => \Carbon\Carbon::now(),  # \Datetime()
        );
        DB::table('user_kerja')
            ->insert($data['data']);
        Session::put('data.kerja_jabatan', $jabatan);
        Session::put('data.kerja_perusahaan', $perusahaan);
        Session::put('data.kerja_lokasi', $lokasiperusahaan);

        Session::put('data.kerja_bulan_masuk', $bulanmulai);
        Session::put('data.kerja_tahun_masuk', $tahunmulai);
        Session::put('data.kerja_bulan_keluar', $bulanakhir);
        Session::put('data.kerja_tahun_keluar', $tahunakhir);
        //dd($data);
        return redirect()->route('filldata');
    }
    public function show_myprofile()
    {
        $edit = 1;
        $nama = session('data.user_nama');
        $user = DB::table('user')->where('user_nrp', session('user_id'))->get();
        $userwork = DB::table('user_kerja')->where('user_nrp', session('user_id'))->get();

        // $user1 = (array) $user[0];
        // $userwork1 = (array) $userwork[0];
        // Session::put('data1', $user1);
        // Session::put('data2', $user1);
        // Session::put('data3', $user1);
        // Session::put('data4', $userwork1);
        return view('profile.profile', compact('edit'));
    }
    public function show_profile($usr_id)
    {
        $edit = 0;
        $user = DB::table('user')->where('user_nrp', $usr_id)->get();
        $userwork = DB::table('user_kerja')->where('user_nrp', $usr_id)->get();
        $usertahun = explode(",",$user[0]->user_tahun_beasiswa);

        $kode = explode("-",$user[0]->user_no_kta);
        $detil_univ = DB::table('universitas')->where('iduniversitas', $kode[2])->get();

        if($userwork->count()){
            $kerja_waktu = explode(",",$userwork[0]->kerja_masuk_keluar);
            $kerja_masuk = explode("/",$kerja_waktu[0]);
            $kerja_keluar = explode("/",$kerja_waktu[1]);
            return view('members.profile', compact('user','userwork','edit', 'usertahun', 'detil_univ','kerja_masuk','kerja_keluar'));
        }
        else {
            return view('members.profile', compact('user','userwork','edit', 'usertahun', 'detil_univ'));
        }
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
