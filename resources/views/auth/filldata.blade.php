@extends('layouts.index')
@section('content')
    <!-- slaider -->
    <section class="ot-section-b">
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
                                <h4>Mohon lengkapi data berikut terlebih dahulu.</h4>
                                <br>
                                @if (session('success_message1'))
                                    <div class="col-md-12">
                                    <span class="alert alert-success" role="alert">{{ session('success_message1') }}</span>
                                    </div>
                                    <br><br><br>
                                @elseif (session('success_message2'))
                                    <div class="col-md-12">
                                        <span class="alert alert-success" role="alert">{{ session('success_message2') }}</span>
                                    </div>
                                    <br><br><br>
                                @elseif (session('success_message3'))
                                    <div class="col-md-12">
                                        <span class="alert alert-success" role="alert">{{ session('success_message3') }}</span>
                                    </div>
                                    <br><br><br>
                                @elseif (session('success_message4'))
                                    <div class="col-md-12">
                                        <span class="alert alert-success" role="alert">{{ session('success_message4') }}</span>
                                    </div>
                                    <br><br><br>
                                @endif
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
                                                    @if (session('data.user_foto'))
                                                    <div class="col-md-12 text-left">
                                                            <img src="{{URL::asset(session('data.user_foto'))}}" height="200" width="200" class="rounded float-left">
                                                     
                                                    </div>
                                                    @endif
                                                    <div class="col-md-12">
                                                        <input name="foto" type="file" accept="image/*" class="form" style="padding: 10px;">
                                                        <input name="fotosession" type="hidden" value="{{session('data.user_foto')}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="nama">Nama*</label>
                                                        @if(session('data.user_nama'))
                                                            <input id="noktp" type="text" placeholder="Nama"
                                                                   name="nama"
                                                                   required
                                                                   autofocus
                                                                   value="{{session('data.user_nama')}}">
                                                        @else
                                                            <input id="noktp" type="text" placeholder="Nama"
                                                                   name="nama"
                                                                   required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="email">Email*</label>
                                                        @if(session('data.user_email'))
                                                            <input id="email" type="text" placeholder="Email"
                                                                   name="email"
                                                                   required
                                                                   autofocus
                                                                   value="{{session('data.user_email')}}">
                                                        @else
                                                            <input id="email" type="text" placeholder="Email"
                                                                   name="email" 
                                                                   required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="nohp">Nomor Handphone*</label>
                                                        @if(session('data.user_no_hp'))
                                                            <input id="nohp" type="text" placeholder="Nomor handphone"
                                                                   name="nohp" required
                                                                   autofocus
                                                                   value="{{session('data.user_no_hp')}}">
                                                        @else
                                                            <input id="nohp" type="text" placeholder="Nomor handphone"
                                                                   name="nohp" required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="alamat">Alamat*</label>
                                                        @if(session('data.user_alamat'))
                                                            <input id="alamat" type="text" placeholder="Alamat"
                                                                   name="alamat" required
                                                                   autofocus
                                                                   value="{{session('data.user_alamat')}}">
                                                        @else
                                                            <input id="alamat" type="text" placeholder="Alamat"
                                                                   name="alamat" required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="tmplhr">Tempat Lahir*</label>
                                                        @if(session('data.user_tempat_lahir'))
                                                            <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                   name="tmplhr" required
                                                                   autofocus
                                                                   value="{{session('data.user_tempat_lahir')}}">
                                                        @else
                                                            <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                   name="tmplhr" required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="tgllhr">Tanggal Lahir*</label>
                                                        @if(session('data.user_tanggal_lahir'))
                                                            <input id="tgllhr" type="date" placeholder="tanggal lahir"
                                                                   name="tgllhr"
                                                                   required autofocus
                                                                   value="{{session('data.user_tanggal_lahir')}}">
                                                        @else
                                                            <input id="tgllhr" type="date" placeholder="tanggal lahir"
                                                                   name="tgllhr"
                                                                   required autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="jk">Jenis Kelamin*</label>
                                                        <select name="jk" >
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
                                                        <select name="goldar">
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
                                                        <select name="agama">
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
                                                                   value="{{session('data.user_suku')}}">
                                                        @else
                                                            <input id="suku" type="text" placeholder="suku" name="suku"
                                                                   required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="status">Status*</label>
                                                        @if(session('data.user_status'))
                                                            <input id="status" type="text" placeholder="status"
                                                                   name="status"
                                                                   required
                                                                   autofocus
                                                                   value="{{session('data.user_status')}}">
                                                        @else
                                                            <input id="status" type="text" placeholder="status"
                                                                   name="status"
                                                                   required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="biodata">Biodata*</label>
                                                        @if(session('data.user_bio'))
                                                            <textarea name="biodata" id="biodata" placeholder="biodata"
                                                                      cols="35"
                                                                      rows="3">{{session('data.user_bio')}}</textarea>
                                                        @else
                                                            <textarea name="biodata" id="biodata" placeholder="biodata"
                                                                      cols="35"
                                                                      rows="3"></textarea>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="button-1"
                                                                   class="submit submit-button" value="Save"/>
                                                            <input type='hidden' name='user_id'
                                                                   value={{session('user_id')}}
                                                                           id='user_id'/>
                                                            <input type='hidden' name='comment_parent'
                                                                   id='comment_parent'
                                                                   value='0'/>
                                                        </p>
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
                                                                   value="{{session('data.user_tahun1')}}">
                                                        @else
                                                            <input id="tahun1" type="text" placeholder="tahun pertama"
                                                                   name="tahun1"
                                                                   required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="tahun2">Tahun Kedua</label>
                                                        @if(session('data.user_tahun2'))
                                                            <input id="tahun2" type="text" placeholder="tahun kedua"
                                                                   name="tahun2"
                                                                   value="{{session('data.user_tahun2')}}">
                                                        @else
                                                            <input id="tahun2" type="text" placeholder="tahun kedua"
                                                                   name="tahun2">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="tahun3">Tahun Ketiga</label>
                                                        @if(session('data.user_tahun3'))
                                                            <input id="tahun3" type="text" placeholder="tahun ketiga"
                                                                   name="tahun3"
                                                                   value="{{session('data.user_tahun3')}}">
                                                        @else
                                                            <input id="tahun3" type="text" placeholder="tahun ketiga"
                                                                   name="tahun3">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="button-2"
                                                                   class="submit submit-button" value="Save"/>
                                                            <input type='hidden' name='user_id'
                                                                   value={{session('user_id')}}
                                                                           id='user_id'/>
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
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="fakultas">Fakultas (S1)*</label>
                                                        @if(session('data.kuliah_fakultas1'))
                                                            <input id="fakultas" type="text" placeholder="fakultas"
                                                                   name="fakultas" required
                                                                   autofocus
                                                                   value="{{session('data.kuliah_fakultas1')}}">
                                                        @else
                                                            <input id="fakultas" type="text" placeholder="fakultas"
                                                                   name="fakultas" required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="departemen">Departemen/Jurusan (S1)*</label>
                                                        @if(session('data.kuliah_jurusan1'))
                                                            <input id="departemen" type="text" placeholder="departemen"
                                                                   name="departemen"
                                                                   required
                                                                   autofocus
                                                                   value="{{session('data.kuliah_jurusan1')}}">
                                                        @else
                                                            <input id="departemen" type="text" placeholder="departemen"
                                                                   name="departemen"
                                                                   required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="periode">Periode (S1)*</label>
                                                        @if(session('data.kuliah_masuk_keluar1'))
                                                            <input id="periode" type="text" placeholder="periode"
                                                                   name="periode"
                                                                   required
                                                                   autofocus
                                                                   value="{{session('data.kuliah_masuk_keluar1')}}">
                                                        @else
                                                            <input id="periode" type="text" placeholder="periode"
                                                                   name="periode"
                                                                   required
                                                                   autofocus>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="universitas2">Universitas (S2)</label>
                                                        @if(session('data3.kuliah_univ2'))
                                                            <input id="universitas2" type="text"
                                                                   placeholder="universitas"
                                                                   name="universitas2"
                                                                   value="{{session('data.kuliah_univ2')}}">
                                                        @else
                                                            <input id="universitas2" type="text"
                                                                   placeholder="universitas"
                                                                   name="universitas2">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="fakultas2">Fakultas (S2)</label>
                                                        @if(session('data.kuliah_fakultas2'))
                                                            <input id="fakultas2" type="text" placeholder="fakultas"
                                                                   name="fakultas2"
                                                                   value="{{session('data.kuliah_fakultas2')}}">
                                                        @else
                                                            <input id="fakultas2" type="text" placeholder="fakultas"
                                                                   name="fakultas2">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="departemen2">Departemen/Jurusan (S2)</label>
                                                        @if(session('data.kuliah_jurusan2'))
                                                            <input id="departemen2" type="text" placeholder="departemen"
                                                                   name="departemen2"
                                                                   value="{{session('data.kuliah_jurusan2')}}">
                                                        @else
                                                            <input id="departemen2" type="text" placeholder="departemen"
                                                                   name="departemen2">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="periode2">Periode (S2)</label>
                                                        @if(session('data.kuliah_masuk_keluar2'))
                                                            <input id="periode2" type="text" placeholder="periode"
                                                                   name="periode2"
                                                                   value="{{session('data.kuliah_masuk_keluar2')}}">
                                                        @else
                                                            <input id="periode" type="text" placeholder="periode"
                                                                   name="periode2">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="button-3"
                                                                   class="submit submit-button" value="Save"/>
                                                            <input type='hidden' name='usr_id'
                                                                   value={{session('user_id')}}
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
                                                        <label for="perusahaan">Nama Perusahaan</label>
                                                        @if(session('data.kerja_perusahaan'))
                                                        <input id="perusahaan" type="text" placeholder="perusahaan"
                                                               name="perusahaan" value="{{session('data.kerja_perusahaan')}}">
                                                        @else
                                                        <input id="perusahaan" type="text" placeholder="perusahaan"
                                                               name="perusahaan">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="jabatan">Jabatan</label>
                                                        @if(session('data.kerja_jabatan'))
                                                        <input id="jabatan" type="text" placeholder="jabatan"
                                                               name="jabatan" value="{{session('data.kerja_jabatan')}}">
                                                        @else
                                                        <input id="jabatan" type="text" placeholder="jabatan"
                                                               name="jabatan">
                                                        @endif
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="lokasiperusahaan">Lokasi Perusahaan</label>
                                                        @if(session('data.kerja_lokasi'))
                                                        <input id="lokasiperusahaan" type="text"
                                                               placeholder="lokasi perusahaan"
                                                               name="lokasiperusahaan" value="{{session('data.kerja_lokasi')}}">
                                                        @else
                                                        <input id="lokasiperusahaan" type="text"
                                                               placeholder="lokasi perusahaan"
                                                               name="lokasiperusahaan">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="bulanmulai">Bulan Mulai Bekerja</label>
                                                        <select name="bulanmulai">
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
                                                               name="tahunmulai" value="{{session('data.kerja_tahun_masuk')}}">
                                                        @else
                                                        <input id="tahunmulai" type="text"
                                                               placeholder="tahun mulai bekerja"
                                                               name="tahunmulai">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="bulanakhir">Bulan Akhir Bekerja</label>
                                                        <select name="bulanakhir">
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
                                                               name="tahunakhir" value="{{session('data.kerja_tahun_keluar')}}">
                                                        @else
                                                        <input id="tahunakhir" type="text"
                                                               placeholder="tahun akhir bekerja"
                                                               name="tahunakhir">
                                                        @endif
                                                    </div>

                                                    <div class="col-md-12">
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="button-4"
                                                                   class="submit submit-button" value="Save"/>
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
    <!-- boxed -->
  </section>
@stop
<!-- Bootstrap core and theme JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
{{--<script type="text/javascript" src="js/demo-settings.js"></script>--}}
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="js/themescripts.js"></script>

<script>
    $('#container').on("click", '#button-1', function (e) {
        alert('CLICKED 1');
    });
    $('#container').on("click", '#button-2', function (e) {
        alert('CLICKED 2');
    });
    $('#container').on("click", '#button-3', function (e) {
        alert('CLICKED 3');
    });
    $('#container').on("click", '#button-4', function (e) {
        $('#button-1').trigger(click);
        $('#button-2').trigger(click);
        $('#button-3').trigger(click);
        alert('CLICKED 4');
    });
</script>
</body>
</html>