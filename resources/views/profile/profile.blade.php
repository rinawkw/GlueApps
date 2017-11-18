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
                                        <h3 style="color: #1a1a1a;"><b>{{$nama}}</b></h3>
                                        <div class="short-tabs">
                                            <ul>
                                                <li class="active"><a href="javascript:void(0);">Personal</a></li>
                                                <li><a href="javascript:void(0);">Keanggotaan</a></li>
                                                <li><a href="javascript:void(0);">Pendidikan</a></li>
                                                <li><a href="javascript:void(0);">Pengalaman Pekerjaan</a></li>
                                            </ul>
                                            <div class="active">
                                                {{--<h4 class="main-heading"><span>Data Identitas</span></h4>--}}
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata1'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="noktp">Nomor KTP</label>
                                                                <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                        name="tmplhr" 
                                                                        value={{$user[0]->usr_no_kta}}
                                                                        disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="email">Email</label>
                                                                <input id="email" type="text" placeholder="Email" 
                                                                        name="email"
                                                                        value={{$user[0]->usr_email}}
                                                                        disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="nohp">Nomor handphone</label>
                                                                <input id="nohp" type="text" placeholder="Nomor handphone"
                                                                           name="nohp"
                                                                           value={{$user[0]->usr_no_hp}}
                                                                            disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="alamat">Alamat</label>
                                                                <input id="alamat" type="text" placeholder="Alamat"
                                                                           name="alamat"
                                                                           value={{$user[0]->usr_alamat}}
                                                                          disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tmplhr">Tempat Lahir</label>
                                                                <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                        name="tmplhr" 
                                                                        value={{$user[0]->usr_tmpt_lahir}}
                                                                        disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tgllhr">Tanggal Lahir</label>
                                                                <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                        name="tmplhr" 
                                                                        value={{$user[0]->usr_tgl_lahir}}
                                                                        disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="jk">Jenis Kelamin</label>
                                                                    @if($user[0]->usr_jk== 'L')
                                                                      <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                          name="tmplhr" 
                                                                          value="Laki-laki"
                                                                          disabled>
                                                                    @elseif($user[0]->usr_jk== 'P')
                                                                      <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                          name="tmplhr" 
                                                                          value="Perempuan"
                                                                          disabled>
                                                                    @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="goldar">Golongan Darah</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_goldar}}" disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="agama">Agama</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_agama}}" disabled>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="suku">Suku</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_suku}}" disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="status">Status</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_status}}" disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="biodata">Biodata</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_bio}}" disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idline">Id LINE</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_line}}" disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idfb">Id Facebok</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_fb}}" disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idig">Id Instagram</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_insta}}" disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idtwitter">Id Twitter</label>
                                                                <input  id="tmplhr" type="text" placeholder="tempat lahir" 
                                                                        name="tmplhr" value="{{$user[0]->usr_twit}}" disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                <p class="form-submit"><br>
                                                                    <a href="/filldata"><button type="button" class="btn btn-secondary">Edit</button></a>
                                                                    <input type='hidden' name='usr_id'
                                                                           value={{session('usr_id')}}
                                                                                   id='usr_id'/>
                                                                    <input type='hidden' name='comment_parent'
                                                                           id='comment_parent'
                                                                           value='0'/>
                                                                </p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata2'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="tahun1">Tahun Pertama</label>
                                                                <input id="tahun1" type="text" placeholder="tahun pertama"
                                                                       name="tahun1" value={{$user[0]->usr_tahun1}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahun2">Tahun Kedua</label>
                                                                <input id="tahun2" type="text" placeholder="tahun kedua"
                                                                       name="tahun2" value= {{$user[0]->usr_tahun2}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahun3">Tahun Ketiga</label>
                                                                <input id="tahun3" type="text" placeholder="tahun ketiga"
                                                                       name="tahun3" value= {{$user[0]->usr_tahun3}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                <p class="form-submit"><br>
                                                                    <a href="/filldata"><button type="button" class="btn btn-secondary">Edit</button></a>
                                                                    <input type='hidden' name='usr_id'
                                                                           value={{session('usr_id')}}
                                                                                   id='usr_id'/>
                                                                    <input type='hidden' name='comment_parent'
                                                                           id='comment_parent'
                                                                           value='0'/>
                                                                </p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    {{--<p class="wp-caption-text">Sudah punya Akun? <a href="{{'login'}}"><b>Login</b></a>--}}
                                                    {{--</p>--}}
                                                </div>
                                            </div>
                                            <div>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata3'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="universitas">Universitas</label>
                                                                <input id="universitas" type="text" placeholder="universitas"
                                                                       name="universitas" value={{$user[0]->usr_univ1}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="fakultas">fakultas</label>
                                                                <input id="fakultas" type="text" placeholder="fakultas"
                                                                       name="fakultas" value={{$user[0]->usr_fakultas1}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="departemen">departemen</label>
                                                                <input id="departemen" type="text" placeholder="departemen"
                                                                       name="departemen" value={{$user[0]->usr_jurusan1}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="periode">Periode</label>
                                                                <input id="departemen" type="text" placeholder="departemen"
                                                                       name="departemen" value={{$user[0]->usr_period1}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="universitas2">Universitas S2</label>
                                                                <input id="universitas2" type="text"
                                                                       placeholder="universitas sarjana master"
                                                                       name="universitas2" value={{$user[0]->usr_univ2}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="fakultas2">Fakultas</label>
                                                                <input id="fakultas2" type="text" placeholder="fakultas"
                                                                       name="fakultas2" value={{$user[0]->usr_fakultas2}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="departemen2">Departemen</label>
                                                                <input id="departemen2" type="text" placeholder="departemen"
                                                                       name="departemen2" value={{$user[0]->usr_jurusan2}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="periode2">Periode</label>
                                                                <input id="departemen" type="text" placeholder="departemen"
                                                                       name="departemen" value={{$user[0]->usr_period2}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                <p class="form-submit"><br>
                                                                    <a href="/filldata"><button type="button" class="btn btn-secondary">Edit</button></a>
                                                                    <input type='hidden' name='usr_id'
                                                                           value={{session('usr_id')}}
                                                                                   id='usr_id'/>
                                                                    <input type='hidden' name='comment_parent'
                                                                           id='comment_parent'
                                                                           value='0'/>
                                                                </p>
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
                                                                <label for="jabatan">Jabatan</label>
                                                                <input id="jabatan" type="text" placeholder="jabatan"
                                                                       name="jabatan" value={{$userwork[0]->work_jabatan}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="perusahaan">Nama Perusahaan</label>
                                                                <input id="perusahaan" type="text" placeholder="perusahaan"
                                                                       name="perusahaan" value={{$userwork[0]->work_company}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="lokasiperusahaan">Lokasi perusahaan</label>
                                                                <input id="lokasiperusahaan" type="text"
                                                                       placeholder="lokasi perusahaan"
                                                                       name="lokasiperusahaan" value={{$userwork[0]->work_location}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="bulanmulai">Bulan Mulai Bekerja</label>
                                                                <input id="tahunakhir" type="text"
                                                                       placeholder="tahun akhir bekerja"
                                                                       name="tahunakhir" value={{$userwork[0]->work_bulan1}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahunmulai">Tahun Mulai Bekerja</label>
                                                                <input id="tahunmulai" type="text"
                                                                       placeholder="tahun mulai bekerja"
                                                                       name="tahunmulai" value={{$userwork[0]->work_tahun1}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="bulanakhir">Bulan Akhir Bekerja</label>
                                                                <input id="tahunakhir" type="text"
                                                                       placeholder="tahun akhir bekerja"
                                                                       name="tahunakhir" value={{$userwork[0]->work_bulan2}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahunakhir">Tahun Akhir Bekerja</label>
                                                                <input id="tahunakhir" type="text"
                                                                       placeholder="tahun akhir bekerja"
                                                                       name="tahunakhir" value={{$userwork[0]->work_tahun2}}
                                                                       disabled>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                <p class="form-submit"><br>
                                                                    <a href="/filldata"><button type="button" class="btn btn-secondary">Edit</button></a>
                                                                    <input type='hidden' name='usr_id'
                                                                           value={{session('usr_id')}}
                                                                                   id='usr_id'/>
                                                                    <input type='hidden' name='comment_parent'
                                                                           id='comment_parent'
                                                                           value='0'/>
                                                                </p>
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