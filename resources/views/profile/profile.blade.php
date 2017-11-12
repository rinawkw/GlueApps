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
                                        <h3 style="color: #1a1a1a;">Hai, <b>{{session('name')}}</b>!</h3>
                                        <h4>Mohon lengkapi data berikut terlebih dahulu.{{session('usr_id')}}</h4>
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
                                                                {{$user[0]->usr_no_kta}}
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tmplhr">Tempat Lahir</label>
                                                                @if(session('data1.usr_tmpt_lahir'))
                                                                    <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                           name="tmplhr" required
                                                                           autofocus
                                                                           value={{session('data1.usr_tmpt_lahir')}}>
                                                                @else
                                                                    <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                                           name="tmplhr" required
                                                                           autofocus>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tgllhr">Tanggal Lahir</label>
                                                                @if(session('data1.usr_tgl_lahir'))
                                                                    <input id="tgllhr" type="date" placeholder="tanggal lahir"
                                                                           name="tgllhr"
                                                                           required autofocus
                                                                           value={{session('data1.usr_tgl_lahir')}}>
                                                                @else
                                                                    <input id="tgllhr" type="date" placeholder="tanggal lahir"
                                                                           name="tgllhr"
                                                                           required autofocus>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="jk">Jenis Kelamin</label>
                                                                <select name="jk">
                                                                    @if(session('data1.usr_jk')== 'L')
                                                                        <option>jenis kelamin</option>
                                                                        <option value="L" selected>laki - laki</option>
                                                                        <option value="P">perempuan</option>
                                                                    @elseif(session('data1.usr_jk')== 'P')
                                                                        <option>jenis kelamin</option>
                                                                        <option value="L">laki - laki</option>
                                                                        <option value="P" selected>perempuan</option>
                                                                    @else
                                                                        <option>jenis kelamin</option>
                                                                        <option value="L">laki - laki</option>
                                                                        <option value="P">perempuan</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="goldar">Golongan Darah</label>
                                                                <select name="goldar">
                                                                    @if(session('data1.usr_goldar')=='A')
                                                                        <option>golongan darah</option>
                                                                        <option value="A" selected>A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="AB">AB</option>
                                                                        <option value="O">O</option>
                                                                    @elseif(session('data1.usr_goldar')=='B')
                                                                        <option>golongan darah</option>
                                                                        <option value="A">A</option>
                                                                        <option value="B" selected>B</option>
                                                                        <option value="AB">AB</option>
                                                                        <option value="O">O</option>
                                                                    @elseif(session('data1.usr_goldar')=='AB')
                                                                        <option>golongan darah</option>
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="AB" selected>AB</option>
                                                                        <option value="O">O</option>
                                                                    @else
                                                                        <option>golongan darah</option>
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="AB">AB</option>
                                                                        <option value="O">O</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="agama">Agama</label>
                                                                @if(session('data1.usr_agama'))
                                                                    <input id="agama" type="text" placeholder="agama"
                                                                           name="agama"
                                                                           required
                                                                           autofocus
                                                                           value={{session('data1.usr_agama')}}>
                                                                @else
                                                                    <input id="agama" type="text" placeholder="agama"
                                                                           name="agama"
                                                                           required
                                                                           autofocus>
                                                                @endif
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="suku">Suku</label>
                                                                @if(session('data1.usr_suku'))
                                                                    <input id="suku" type="text" placeholder="suku" name="suku"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data1.usr_suku')}}">
                                                                @else
                                                                    <input id="suku" type="text" placeholder="suku" name="suku"
                                                                           required
                                                                           autofocus>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="status">Status</label>
                                                                @if(session('data1.usr_status'))
                                                                    <input id="status" type="text" placeholder="status"
                                                                           name="status"
                                                                           required
                                                                           autofocus
                                                                           value="{{session('data1.usr_status')}}">
                                                                @else
                                                                    <input id="status" type="text" placeholder="status"
                                                                           name="status"
                                                                           required
                                                                           autofocus>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="biodata">Biodata</label>
                                                                @if(session('data1.usr_bio'))
                                                                    <textarea name="biodata" id="biodata" placeholder="biodata"
                                                                              cols="35"
                                                                              rows="3">{{session('data1.usr_bio')}}</textarea>
                                                                @else
                                                                    <textarea name="biodata" id="biodata" placeholder="biodata"
                                                                              cols="35"
                                                                              rows="3"></textarea>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="idline">Id LINE</label>
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
                                                                <label for="idfb">Id Facebok</label>
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
                                                                <label for="idig">Id Instagram</label>
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
                                                                <label for="idtwitter">Id Twitter</label>
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
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="button-1"
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
                                            <div>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata2'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="tahun1">Tahun Pertama</label>
                                                                <input id="tahun1" type="text" placeholder="tahun pertama"
                                                                       name="tahun1"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahun2">Tahun Kedua</label>
                                                                <input id="tahun2" type="text" placeholder="tahun kedua"
                                                                       name="tahun2"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahun3">Tahun Ketiga</label>
                                                                <input id="tahun3" type="text" placeholder="tahun ketiga"
                                                                       name="tahun3"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="button-2"
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
                                                                       name="universitas"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="fakultas">fakultas</label>
                                                                <input id="fakultas" type="text" placeholder="fakultas"
                                                                       name="fakultas" required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="departemen">departemen</label>
                                                                <input id="departemen" type="text" placeholder="departemen"
                                                                       name="departemen"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="periode">Periode</label>
                                                                <select name="periode">
                                                                    <option>periode</option>
                                                                    <option>2011</option>
                                                                    <option>2012</option>
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="universitas2">Universitas S2</label>
                                                                <input id="universitas2" type="text"
                                                                       placeholder="universitas sarjana master"
                                                                       name="universitas2"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="fakultas2">Fakultas</label>
                                                                <input id="fakultas2" type="text" placeholder="fakultas"
                                                                       name="fakultas2" required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="departemen2">Departemen</label>
                                                                <input id="departemen2" type="text" placeholder="departemen"
                                                                       name="departemen2"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="periode2">Periode</label>
                                                                <select name="periode2">
                                                                    <option>periode</option>
                                                                    <option>2011</option>
                                                                    <option>2012</option>
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="button-3"
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
                                            <div>
                                                <div class="comment-form-body">
                                                    <div class="row" id="continer">
                                                        <form id="form" class="comment-form" role="form" method="POST"
                                                              action='do_filldata4'>
                                                            {!! csrf_field() !!}
                                                            <div class="col-md-12">
                                                                <label for="jabatan">Jabatan</label>
                                                                <input id="jabatan" type="text" placeholder="jabatan"
                                                                       name="jabatan"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="perusahaan">Nama Perusahaan</label>
                                                                <input id="perusahaan" type="text" placeholder="perusahaan"
                                                                       name="perusahaan" required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="lokasiperusahaan">Lokasi perusahaan</label>
                                                                <input id="lokasiperusahaan" type="text"
                                                                       placeholder="lokasi perusahaan"
                                                                       name="lokasiperusahaan"
                                                                       required autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="bulanmulai">Bulan Mulai Bekerja</label>
                                                                <select name="bulanmulai">
                                                                    <option>bulan mulai bekerja</option>
                                                                    <option>januari</option>
                                                                    <option>februari</option>
                                                                    <option>maret</option>
                                                                    <option>april</option>
                                                                    <option>mei</option>
                                                                    <option>juni</option>
                                                                    <option>juli</option>
                                                                    <option>agustus</option>
                                                                    <option>september</option>
                                                                    <option>oktober</option>
                                                                    <option>november</option>
                                                                    <option>desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahunmulai">Tahun Mulai Bekerja</label>
                                                                <input id="tahunmulai" type="text"
                                                                       placeholder="tahun mulai bekerja"
                                                                       name="tahunmulai"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="bulanakhir">Bulan Akhir Bekerja</label>
                                                                <select name="bulanakhir">
                                                                    <option>bulan akhir bekerja</option>
                                                                    <option>januari</option>
                                                                    <option>februari</option>
                                                                    <option>maret</option>
                                                                    <option>april</option>
                                                                    <option>mei</option>
                                                                    <option>juni</option>
                                                                    <option>juli</option>
                                                                    <option>agustus</option>
                                                                    <option>september</option>
                                                                    <option>oktober</option>
                                                                    <option>november</option>
                                                                    <option>desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="tahunakhir">Tahun Akhir Bekerja</label>
                                                                <input id="tahunakhir" type="text"
                                                                       placeholder="tahun akhir bekerja"
                                                                       name="tahunakhir"
                                                                       required
                                                                       autofocus>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if (session('error_message'))
                                                                    <span class="error-msg comment-error"
                                                                          id="contact-mail-error"
                                                                          style="display:block; background-color: #B80000">
                                                        <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                                @endif
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
                    </div>
        </div>
        <!-- end container -->
    </section>
@stop