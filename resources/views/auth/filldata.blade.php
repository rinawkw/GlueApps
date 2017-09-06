<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
<div class="boxed">
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="content ot-article">
                        <div class="wp-caption aligncenter">
                            <a href="images/demo/1200x800-9.jpg" class="hover-img lightbox-photo"
                               title="Ludus zril eu est, pro an elit ornatus facilisi, vis ex aeque accumsan recteque. Duis repudiare reprehendunt vim ex, nonumes intellegebat quo an.">
                                <img class="size-full"
                                     alt="Ludus zril eu est, pro an elit ornatus facilisi, vis ex aeque accumsan recteque. Duis repudiare reprehendunt vim ex, nonumes intellegebat quo an."
                                     src="images/gluetela.png"/>
                            </a>
                        {{--<div class="diff-spacer spacer-1" style="background-color:#E3EFF3;color:#E3EFF3;"><i class="fa fa-sign-in"></i></div>--}}
                        <!--== Post Reply ==-->
                            <h3 style="color: #1a1a1a;">Lengkapi data berikut</h3>
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
                                        <div class="row">
                                            <form class="comment-form" role="form" method="POST" action='do_register'>
                                                {!! csrf_field() !!}
                                                <div class="col-md-12">
                                                    <label for="noktp">Nomor KTP</label>
                                                    <input id="noktp" type="text" placeholder="nomor ktp" name="noktp"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="tmplhr">Tempat Lahir</label>
                                                    <input id="tmplhr" type="text" placeholder="tempat lahir"
                                                           name="tmplhr" required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="tgllhr">Tanggal Lahir</label>
                                                    <input id="tgllhr" type="date" placeholder="tanggal lahir"
                                                           name="tgllhr"
                                                           required autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="jk">Jenis Kelamin</label>
                                                    <select name="jk">
                                                        <option>jenis kelamin</option>
                                                        <option>laki - laki</option>
                                                        <option>perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="agama">Agama</label>
                                                    <input id="agama" type="text" placeholder="agama" name="agama"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="goldar">Golongan Darah</label>
                                                    <select name="goldar">
                                                        <option>golongan darah</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>AB</option>
                                                        <option>O</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="suku">Suku</label>
                                                    <input id="suku" type="text" placeholder="suku" name="suku"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="status">Status</label>
                                                    <input id="status" type="text" placeholder="status" name="status"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="biodata">Biodata</label>
                                                    <textarea name="biodata" id="biodata" placeholder="biodata"
                                                              cols="35"
                                                              rows="3"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="idline">Id LINE</label>
                                                    <input id="idline" type="text" placeholder="id line" name="idline"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="idfb">Id Facebok</label>
                                                    <input id="idfb" type="text" placeholder="id facebook" name="idfb"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="idig">Id Instagram</label>
                                                    <input id="idig" type="text" placeholder="id instagram" name="idig"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="idtwitter">Id Twitter</label>
                                                    <input id="idtwitter" type="text" placeholder="id twitter"
                                                           name="idtwitter"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    @if (session('error_message'))
                                                        <span class="error-msg comment-error" id="contact-mail-error"
                                                              style="display:block; background-color: #B80000">
                                                <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                    @endif
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit"
                                                               class="submit submit-button" value="Save"/>
                                                        <input type='hidden' name='comment_post_ID' value='2'
                                                               id='comment_post_ID'/>
                                                        <input type='hidden' name='comment_parent' id='comment_parent'
                                                               value='0'/>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="comment-form-body">
                                        <div class="row">
                                            <form class="comment-form" role="form" method="POST" action='do_register'>
                                                {!! csrf_field() !!}
                                                <div class="col-md-12">
                                                    <label for="tahun1">Tahun Pertama</label>
                                                    <input id="tahun1" type="text" placeholder="tahun pertama" name="tahun1"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="tahun2">Tahun Kedua</label>
                                                    <input id="tahun2" type="text" placeholder="tahun kedua" name="tahun2"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="tahun3">Tahun Ketiga</label>
                                                    <input id="tahun3" type="text" placeholder="tahun ketiga" name="tahun3"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    @if (session('error_message'))
                                                        <span class="error-msg comment-error" id="contact-mail-error"
                                                              style="display:block; background-color: #B80000">
                                                <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                    @endif
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit"
                                                               class="submit submit-button" value="Save"/>
                                                        <input type='hidden' name='comment_post_ID' value='2'
                                                               id='comment_post_ID'/>
                                                        <input type='hidden' name='comment_parent' id='comment_parent'
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
                                        <div class="row">
                                            <form class="comment-form" role="form" method="POST" action='do_register'>
                                                {!! csrf_field() !!}
                                                <div class="col-md-12">
                                                    <label for="universitas">Universitas</label>
                                                    <input id="universitas" type="text" placeholder="universitas" name="universitas"
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
                                                    <input id="departemen" type="text" placeholder="departemen" name="departemen"
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
                                                    <input id="universitas2" type="text" placeholder="universitas sarjana master" name="universitas2"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="fakultas2">Fakultas</label>
                                                    <input id="fakultas2" type="text" placeholder="fakultas"
                                                           name="fakultasa2" required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="departemen2">Departemen</label>
                                                    <input id="departemen2" type="text" placeholder="departemen" name="departemen2"
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
                                                        <span class="error-msg comment-error" id="contact-mail-error"
                                                              style="display:block; background-color: #B80000">
                                                <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                    @endif
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit"
                                                               class="submit submit-button" value="Save"/>
                                                        <input type='hidden' name='comment_post_ID' value='2'
                                                               id='comment_post_ID'/>
                                                        <input type='hidden' name='comment_parent' id='comment_parent'
                                                               value='0'/>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="comment-form-body">
                                        <div class="row">
                                            <form class="comment-form" role="form" method="POST" action='do_register'>
                                                {!! csrf_field() !!}
                                                <div class="col-md-12">
                                                    <label for="jabatan">Jabatan</label>
                                                    <input id="jabatan" type="text" placeholder="jabatan" name="jabatan"
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
                                                    <input id="lokasiperusahaan" type="text" placeholder="lokasi perusahaan"
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
                                                    <input id="tahunmulai" type="text" placeholder="tahun mulai bekerja" name="tahunmulai"
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
                                                    <input id="tahunakhir" type="text" placeholder="tahun akhir bekerja" name="tahunmulai"
                                                           required
                                                           autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    @if (session('error_message'))
                                                        <span class="error-msg comment-error" id="contact-mail-error"
                                                              style="display:block; background-color: #B80000">
                                                <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                                    @endif
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit"
                                                               class="submit submit-button" value="Save"/>
                                                        <input type='hidden' name='comment_post_ID' value='2'
                                                               id='comment_post_ID'/>
                                                        <input type='hidden' name='comment_parent' id='comment_parent'
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
    </section>
</div>
<!-- boxed -->
<!-- Bootstrap core and theme JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
{{--<script type="text/javascript" src="js/demo-settings.js"></script>--}}
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="js/themescripts.js"></script>
</body>
</html>