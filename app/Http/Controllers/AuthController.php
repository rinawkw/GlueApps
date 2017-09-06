<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


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

    public function do_register()
    {
        $namalengkap = Input::get('namalengkap');
        $email = Input::get('email');
        $password = Input::get('password');
        $nomortelepon = Input::get('nomortelepon');
        $nimnrp = Input::get('nimnrp');
        $data['data'] = array(
            'namlengkap' => $namalengkap,
            'email' => $email,
            'password' => $password,
            'nomortelepon' => $nomortelepon,
            'nimnrp' => $nimnrp
        );
        $id = DB::table('pengguna')
            ->insertGetId(
                array(
                    'username' => $email,
                    'password' => $password,
                    'nama_pengguna' => $namalengkap,
                    'nrp' => $nimnrp,
                    'hak_akses' => 2
                ));
        DB::table('master_nrp')
            ->where('nrp', $nimnrp)
            ->update(array('id_pengguna' => $id));
//        DB::select('call sp_createuser(?,?,?)', [$email, $password, $namalengkap]);
        return redirect()->route('login');
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
