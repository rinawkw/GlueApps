@extends('layouts.index')
@section('content')
    <!-- slaider -->
    <section class="ot-section-b">
        <!-- container -->
        <div class="container">
            <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="content ot-article">
                                    <div class="wp-caption aligncenter">
                                        <a href="images/demo/1200x800-9.jpg" class="hover-img lightbox-photo"
                                           title="Ludus zril eu est, pro an elit ornatus facilisi, vis ex aeque accumsan recteque. Duis repudiare reprehendunt vim ex, nonumes intellegebat quo an.">
                                        </a>
                                    {{--<div class="diff-spacer spacer-1" style="background-color:#E3EFF3;color:#E3EFF3;"><i class="fa fa-sign-in"></i></div>--}}
                                    <!--== Post Reply ==-->
                                        <h3 style="color: #1a1a1a;">Hai <b>{{session('data.user_nama')}}</b>!</h3>
                                        <div class="short-tabs">
                                            <ul>
                                                <li class="active"><a href="javascript:void(0);">Identitas</a></li>
                                                <li><a href="javascript:void(0);">Tahun Keanggotaan</a></li>
                                                <li><a href="javascript:void(0);">Pendidikan</a></li>
                                                <li><a href="javascript:void(0);">Pengalaman Pekerjaan</a></li>
                                            </ul>
                                            <div class="active">
                                                <h4 class="main-heading"><span>Data Identitas Diri</span></h4>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata1' enctype="multipart/form-data">
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="foto">Foto Profil</label>
                                                            </div>
                                                            <div class="col-md-12 text-left">
                                                                @if (session('data.user_foto'))
                                                                    <img src="{{URL::asset(session('data.user_foto'))}}" height="200" width="200" class="rounded float-left">
                                                                @else
                                                                    <img src="http://rehrealestate.com/wp-content/uploads/2015/08/facebook-default-no-profile-pic-300x300.jpg" height="200" width="200" class="rounded float-left">
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="nama">Nama*</label>
                                                                @if(session('data.user_nama'))
                                                                    <input id="noktp" type="text" placeholder="Nama"
                                                                           name="nama"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.user_nama')}}" disabled>
                                                                @else
                                                                    <input id="noktp" type="text" placeholder="Nama"
                                                                           name="nama"
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="email">Email*</label>
                                                                @if(session('data.user_email'))
                                                                    <input id="email" type="text" placeholder="Email"
                                                                           name="email"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.user_email')}}" disabled>
                                                                @else
                                                                    <input id="email" type="text" placeholder="Email"
                                                                           name="email" 
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="nohp">Nomor Handphone*</label>
                                                                @if(session('data.user_no_hp'))
                                                                    <input id="nohp" type="text" placeholder="Nomor handphone"
                                                                           name="nohp" required
                                                                           autofocus
                                                                           value="{{session('data.user_no_hp')}}" disabled>
                                                                @else
                                                                    <input id="nohp" type="text" placeholder="Nomor handphone"
                                                                           name="nohp" required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="alamat">Alamat*</label>
                                                                @if(session('data.user_alamat'))
                                                                    <input id="alamat" type="text" placeholder="Alamat"
                                                                           name="alamat" required
                                                                           autofocus
                                                                           value="{{session('data.user_alamat')}}" disabled>
                                                                @else
                                                                    <input id="alamat" type="text" placeholder="Alamat"
                                                                           name="alamat" required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tmplhr">Tempat Lahir*</label>
                                                                @if(session('data.user_tempat_lahir'))
                                                                    <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                           name="tmplhr" required
                                                                           autofocus
                                                                           value="{{session('data.user_tempat_lahir')}}" disabled>
                                                                @else
                                                                    <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                           name="tmplhr" required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tgllhr">Tanggal Lahir*</label>
                                                                @if(session('data.user_tanggal_lahir'))
                                                                    <input id="tgllhr" type="date" placeholder="tanggal lahir"
                                                                           name="tgllhr"
                                                                           required autofocus
                                                                           value="{{session('data.user_tanggal_lahir')}}" disabled>
                                                                @else
                                                                    <input id="tgllhr" type="date" placeholder="tanggal lahir"
                                                                           name="tgllhr"
                                                                           required autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="jk">Jenis Kelamin*</label>
                                                                <select name="jk" disabled>
                                                                    @if(session('data.user_jk')== 1)
                                                                        <option value=1 selected>Laki - laki</option>
                                                                        <option value=0 >Perempuan</option>
                                                                    @elseif(session('data.user_jk')== 0)
                                                                        <option value=1 >Laki - laki</option>
                                                                        <option value=0 selected>Perempuan</option>
                                                                    @else
                                                                        <option value=1>Laki - laki</option>
                                                                        <option value=0>Perempuan</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="goldar">Golongan Darah*</label>
                                                                <select name="goldar" disabled>
                                                                    @if(session('data.user_goldar')=='A')
                                                                        <option value="A" selected>A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="AB">AB</option>
                                                                        <option value="O">O</option>
                                                                    @elseif(session('data.user_goldar')=='B')
                                                                        <option value="A">A</option>
                                                                        <option value="B" selected>B</option>
                                                                        <option value="AB">AB</option>
                                                                        <option value="O">O</option>
                                                                    @elseif(session('data.user_goldar')=='AB')
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="AB" selected>AB</option>
                                                                        <option value="O">O</option>
                                                                    @else
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="AB">AB</option>
                                                                        <option value="O">O</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="agama">Agama*</label>
                                                                <select name="agama" disabled>
                                                                    @if(session('data.user_agama')=='Islam')
                                                                        <option value="Islam" selected>Islam</option>
                                                                        <option value="Katolik">Katolik</option>
                                                                        <option value="Kristen">Kristen</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Konghucu">Konghucu</option>
                                                                    @elseif(session('data.user_agama')=='Katolik')
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Katolik" selected>Katolik</option>
                                                                        <option value="Kristen">Kristen</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Konghucu">Konghucu</option>
                                                                    @elseif(session('data.user_agama')=='Kristen')
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Katolik">Katolik</option>
                                                                        <option value="Kristen" selected>Kristen</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Konghucu">Konghucu</option>
                                                                    @elseif(session('data.user_agama')=='Hindu')
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Katolik">Katolik</option>
                                                                        <option value="Kristen">Kristen</option>
                                                                        <option value="Hindu" selected>Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Konghucu">Konghucu</option>
                                                                    @elseif(session('data.user_agama')=='Budha')
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Katolik">Katolik</option>
                                                                        <option value="Kristen">Kristen</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha" selected>Budha</option>
                                                                        <option value="Konghucu">Konghucu</option>
                                                                    @elseif(session('data.user_agama')=='Konghucu')
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Katolik">Katolik</option>
                                                                        <option value="Kristen">Kristen</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Konghucu" selected>Konghucu</option>
                                                                    @else
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Katolik">Katolik</option>
                                                                        <option value="Kristen">Kristen</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Konghucu">Konghucu</option>
                                                                    @endif
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="suku">Suku*</label>
                                                                @if(session('data.user_suku'))
                                                                    <input id="suku" type="text" placeholder="suku" name="suku"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.user_suku')}}" disabled>
                                                                @else
                                                                    <input id="suku" type="text" placeholder="suku" name="suku"
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="status">Status*</label>
                                                                @if(session('data.user_status'))
                                                                    <input id="status" type="text" placeholder="status"
                                                                           name="status"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.user_status')}}" disabled>
                                                                @else
                                                                    <input id="status" type="text" placeholder="status"
                                                                           name="status"
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="biodata">Biodata*</label>
                                                                @if(session('data.user_bio'))
                                                                    <textarea name="biodata" id="biodata" placeholder="biodata"
                                                                              cols="35"
                                                                              rows="3" disabled>{{session('data.user_bio')}}</textarea>
                                                                @else
                                                                    <textarea name="biodata" id="biodata" placeholder="biodata"
                                                                              cols="35"
                                                                              rows="3" disabled></textarea>
                                                                @endif
                                                            </div>
                                                            <!-- <div class="col-md-6">
                                                                <label for="idline">Id LINE*</label>
                                                                @if(session('data1.usr_line'))
                                                                    <input id="idline" type="text" placeholder="id line"
                                                                           name="idline"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data1.usr_line')}}">
                                                                @else
                                                                    <input id="idline" type="text" placeholder="id line"
                                                                           name="idline"
                                                                           required
                                                                           autofocus>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idfb">Id Facebok*</label>
                                                                @if(session('data1.usr_fb'))
                                                                    <input id="idfb" type="text" placeholder="id facebook"
                                                                           name="idfb"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data1.usr_fb')}}">
                                                                @else
                                                                    <input id="idfb" type="text" placeholder="id facebook"
                                                                           name="idfb"
                                                                           required
                                                                           autofocus>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idig">Id Instagram*</label>
                                                                @if(session('data1.usr_insta'))
                                                                    <input id="idig" type="text" placeholder="id instagram"
                                                                           name="idig"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data1.usr_insta')}}">
                                                                @else
                                                                    <input id="idig" type="text" placeholder="id instagram"
                                                                           name="idig"
                                                                           required
                                                                           autofocus>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idtwitter">Id Twitter*</label>
                                                                @if(session('data1.usr_twit'))
                                                                    <input id="idtwitter" type="text" placeholder="id twitter"
                                                                           name="idtwitter"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data1.usr_twit')}}">
                                                                @else
                                                                    <input id="idtwitter" type="text" placeholder="id twitter"
                                                                           name="idtwitter"
                                                                           required
                                                                           autofocus>
                                                                @endif
                                                            </div> -->
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                @if ($edit==1)
                                                                    <a href="/filldata" class="submit-button">Edit</a>
                                                                @endif
                                                                <p style="float: left">* Harus Diisi</p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="main-heading"><span>Data Tahun Penerimaan Beasiswa</span></h4>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata2'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-4">
                                                                <label for="tahun1">Tahun Pertama*</label>
                                                                @if(session('data.user_tahun1'))
                                                                    <input id="tahun1" type="text" placeholder="tahun pertama"
                                                                           name="tahun1"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.user_tahun1')}}" disabled>
                                                                @else
                                                                    <input id="tahun1" type="text" placeholder="tahun pertama"
                                                                           name="tahun1"
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="tahun2">Tahun Kedua</label>
                                                                @if(session('data.user_tahun2'))
                                                                    <input id="tahun2" type="text" placeholder="tahun kedua"
                                                                           name="tahun2"
                                                                           value="{{session('data.user_tahun2')}}" disabled>
                                                                @else
                                                                    <input id="tahun2" type="text" placeholder="tahun kedua"
                                                                           name="tahun2" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="tahun3">Tahun Ketiga</label>
                                                                @if(session('data.user_tahun3'))
                                                                    <input id="tahun3" type="text" placeholder="tahun ketiga"
                                                                           name="tahun3"
                                                                           value="{{session('data.user_tahun3')}}" disabled>
                                                                @else
                                                                    <input id="tahun3" type="text" placeholder="tahun ketiga"
                                                                           name="tahun3" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                @if ($edit==1)
                                                                    <a href="/filldata" class="submit-button">Edit</a>
                                                                @endif
                                                            </div>
                                                        </form>
                                                    </div>
                                                    {{--<p class="wp-caption-text">Sudah punya Akun? <a href="{{'login'}}"><b>Login</b></a>--}}
                                                    {{--</p>--}}
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="main-heading"><span>Data Pendidikan</span></h4>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata3'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="universitas">Universitas (S1)*</label>
                                                                @if(session('data.kuliah_univ1'))
                                                                    <input id="universitas" type="text"
                                                                           placeholder="universitas"
                                                                           name="universitas"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.kuliah_univ1')}}" disabled>
                                                                @else
                                                                    <input id="universitas" type="text"
                                                                           placeholder="universitas"
                                                                           name="universitas"
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="fakultas">Fakultas (S1)*</label>
                                                                @if(session('data.kuliah_fakultas1'))
                                                                    <input id="fakultas" type="text" placeholder="fakultas"
                                                                           name="fakultas" required
                                                                           autofocus
                                                                           value="{{session('data.kuliah_fakultas1')}}" disabled>
                                                                @else
                                                                    <input id="fakultas" type="text" placeholder="fakultas"
                                                                           name="fakultas" required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="departemen">Departemen/Jurusan (S1)*</label>
                                                                @if(session('data.kuliah_jurusan1'))
                                                                    <input id="departemen" type="text" placeholder="departemen"
                                                                           name="departemen"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.kuliah_jurusan1')}}" disabled>
                                                                @else
                                                                    <input id="departemen" type="text" placeholder="departemen"
                                                                           name="departemen"
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="periode">Periode (S1)*</label>
                                                                @if(session('data.kuliah_masuk_keluar1'))
                                                                    <input id="periode" type="text" placeholder="periode"
                                                                           name="periode"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data.kuliah_masuk_keluar1')}}" disabled>
                                                                @else
                                                                    <input id="periode" type="text" placeholder="periode"
                                                                           name="periode"
                                                                           required
                                                                           autofocus disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="universitas2">Universitas (S2)</label>
                                                                @if(session('data3.kuliah_univ2'))
                                                                    <input id="universitas2" type="text"
                                                                           placeholder="universitas"
                                                                           name="universitas2"
                                                                           value="{{session('data.kuliah_univ2')}}" disabled>
                                                                @else
                                                                    <input id="universitas2" type="text"
                                                                           placeholder="universitas"
                                                                           name="universitas2" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="fakultas2">Fakultas (S2)</label>
                                                                @if(session('data.kuliah_fakultas2'))
                                                                    <input id="fakultas2" type="text" placeholder="fakultas"
                                                                           name="fakultas2"
                                                                           value="{{session('data.kuliah_fakultas2')}}" disabled>
                                                                @else
                                                                    <input id="fakultas2" type="text" placeholder="fakultas"
                                                                           name="fakultas2" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="departemen2">Departemen/Jurusan (S2)</label>
                                                                @if(session('data.kuliah_jurusan2'))
                                                                    <input id="departemen2" type="text" placeholder="departemen"
                                                                           name="departemen2"
                                                                           value="{{session('data.kuliah_jurusan2')}}" disabled>
                                                                @else
                                                                    <input id="departemen2" type="text" placeholder="departemen"
                                                                           name="departemen2" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="periode2">Periode (S2)</label>
                                                                @if(session('data.kuliah_masuk_keluar2'))
                                                                    <input id="periode2" type="text" placeholder="periode"
                                                                           name="periode2"
                                                                           value="{{session('data.kuliah_masuk_keluar2')}}" disabled>
                                                                @else
                                                                    <input id="periode" type="text" placeholder="periode"
                                                                           name="periode2" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                @if ($edit==1)
                                                                    <a href="/filldata" class="submit-button">Edit</a>
                                                                @endif
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata4'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="perusahaan">Nama Perusahaan</label>
                                                                @if(session('data.kerja_perusahaan'))
                                                                <input id="perusahaan" type="text" placeholder="perusahaan"
                                                                       name="perusahaan" value="{{session('data.kerja_perusahaan')}}" disabled>
                                                                @else
                                                                <input id="perusahaan" type="text" placeholder="perusahaan"
                                                                       name="perusahaan" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="jabatan">Jabatan</label>
                                                                @if(session('data.kerja_jabatan'))
                                                                <input id="jabatan" type="text" placeholder="jabatan"
                                                                       name="jabatan" value="{{session('data.kerja_jabatan')}}" disabled>
                                                                @else
                                                                <input id="jabatan" type="text" placeholder="jabatan"
                                                                       name="jabatan" disabled>
                                                                @endif
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="lokasiperusahaan">Lokasi Perusahaan</label>
                                                                @if(session('data.kerja_lokasi'))
                                                                <input id="lokasiperusahaan" type="text"
                                                                       placeholder="lokasi perusahaan"
                                                                       name="lokasiperusahaan" value="{{session('data.kerja_lokasi')}}" disabled>
                                                                @else
                                                                <input id="lokasiperusahaan" type="text"
                                                                       placeholder="lokasi perusahaan"
                                                                       name="lokasiperusahaan" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="bulanmulai">Bulan Mulai Bekerja</label>
                                                                <select name="bulanmulai" disabled>
                                                                  @if (null==session('data.kerja_bulan'))
                                                                    <option selected value="">Bulan Mulai Bekerja</option>
                                                                  @else 
                                                                    <option value="">Bulan Mulai Bekerja</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="januari")
                                                                    <option selected>januari</option>
                                                                  @else 
                                                                    <option>januari</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="februari")
                                                                    <option selected>februari</option>
                                                                  @else 
                                                                    <option>februari</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="maret")
                                                                    <option selected>maret</option>
                                                                  @else 
                                                                    <option>maret</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="april")
                                                                    <option selected>april</option>
                                                                  @else 
                                                                    <option>april</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="mei")
                                                                    <option selected>mei</option>
                                                                  @else 
                                                                    <option>mei</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="juni")
                                                                    <option selected>juni</option>
                                                                  @else 
                                                                    <option>juni</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="juli")
                                                                    <option selected>juli</option>
                                                                  @else 
                                                                    <option>juli</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="agustus")
                                                                    <option selected>agustus</option>
                                                                  @else 
                                                                    <option>agustus</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="september")
                                                                    <option selected>september</option>
                                                                  @else 
                                                                    <option>september</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="oktober")
                                                                    <option selected>oktober</option>
                                                                  @else 
                                                                    <option>oktober</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="november")
                                                                    <option selected>november</option>
                                                                  @else 
                                                                    <option>november</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_masuk')=="desember")
                                                                    <option selected>desember</option>
                                                                  @else 
                                                                    <option>desember</option>
                                                                  @endif
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="tahunmulai">Tahun Mulai Bekerja</label>
                                                                @if(session('data.kerja_tahun_masuk'))
                                                                <input id="tahunmulai" type="text"
                                                                       placeholder="tahun mulai bekerja"
                                                                       name="tahunmulai" value="{{session('data.kerja_tahun_masuk')}}" disabled>
                                                                @else
                                                                <input id="tahunmulai" type="text"
                                                                       placeholder="tahun mulai bekerja"
                                                                       name="tahunmulai" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="bulanakhir">Bulan Akhir Bekerja</label>
                                                                <select name="bulanakhir" disabled>
                                                                  @if (null==session('data.kerja_bulan_keluar'))
                                                                    <option selected value="">Bulan Akhir Bekerja</option>
                                                                  @else 
                                                                    <option value="">Bulan Akhir Bekerja</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="januari")
                                                                    <option selected>januari</option>
                                                                  @else 
                                                                    <option>januari</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="februari")
                                                                    <option selected>februari</option>
                                                                  @else 
                                                                    <option>februari</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="maret")
                                                                    <option selected>maret</option>
                                                                  @else 
                                                                    <option>maret</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="april")
                                                                    <option selected>april</option>
                                                                  @else 
                                                                    <option>april</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="mei")
                                                                    <option selected>mei</option>
                                                                  @else 
                                                                    <option>mei</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="juni")
                                                                    <option selected>juni</option>
                                                                  @else 
                                                                    <option>juni</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="juli")
                                                                    <option selected>juli</option>
                                                                  @else 
                                                                    <option>juli</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="agustus")
                                                                    <option selected>agustus</option>
                                                                  @else 
                                                                    <option>agustus</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="september")
                                                                    <option selected>september</option>
                                                                  @else 
                                                                    <option>september</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="oktober")
                                                                    <option selected>oktober</option>
                                                                  @else 
                                                                    <option>oktober</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="november")
                                                                    <option selected>november</option>
                                                                  @else 
                                                                    <option>november</option>
                                                                  @endif
                                                                  @if (session('data.kerja_bulan_keluar')=="desember")
                                                                    <option selected>desember</option>
                                                                  @else 
                                                                    <option>desember</option>
                                                                  @endif
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="tahunakhir">Tahun Akhir Bekerja</label>
                                                                @if(session('data.kerja_tahun_keluar'))
                                                                <input id="tahunakhir" type="text"
                                                                       placeholder="tahun akhir bekerja"
                                                                       name="tahunakhir" value="{{session('data.kerja_tahun_keluar')}}" disabled>
                                                                @else
                                                                <input id="tahunakhir" type="text"
                                                                       placeholder="tahun akhir bekerja"
                                                                       name="tahunakhir" disabled>
                                                                @endif
                                                            </div>

                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                                    <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                @if ($edit==1)
                                                                    <a href="/filldata" class="submit-button">Edit</a>
                                                                @endif
                                                            </div>
                                                        </form>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">

                                            </div>
                                            <!--== Post Reply ==-->
                                            <div class="col-md-4">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- end container -->
    </section>
@stop