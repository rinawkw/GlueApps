<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
<div class="boxed active">
    @include('layouts.topbar')
    {{--        @include('layouts.header')--}}
    @include('layouts.mainmenu')

    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-module">

                        <!-- classic grid posts section -->
                        <h4 class="section-title"><span>Berita Acara / Kegiatan GenBI</span>Create GenBI Event</h4>
                        <div class="comment-form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="comment-form" method="POST" role="form" id="form" action="{{ route('summernote.post') }}" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div class="col-md-12">
                                            <label for="foto">Foto Event</label>
                                        </div>
                                        <div class="col-md-12 text-left">
                                        @if (session('event_foto'))
                                            <img src="{{URL::asset(session('event_foto'))}}" height="200" width="200" class="rounded float-left">
                                        @endif
                                        </div>
                                        <div class="col-md-12" >
                                            <input name="foto" style="height:50px" type="file" accept="image/*" class="form">
                                            <input name="fotosession" type="hidden" value="{{session('event_foto')}}">
                                        </div> 
                                        <div class="col-md-12">
                                            <label for="title">Judul</label>
                                            <input id="title" type="text" placeholder="judul" name="title">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="location">Lokasi</label>
                                            <input id="location" type="text" placeholder="lokasi" name="location">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="date">Tanggal</label>
                                            <input type="date" placeholder="tanggal"
                                                   name="tanggal">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="date">Waktu</label>
                                            <br><br>
                                            <div id="datetimepicker3" class="input-append">
                                                <input data-format="hh:mm:ss" name="waktu" type="text">
                                                <span class="add-on">
                                                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                                </span>
                                            </input>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <label for="description">Deskripsi</label>
                                            <div class="form-group">
                                                <textarea class="form-control summernote" name="detail"></textarea>
                                            </div>
                                        </div>
                                        {{--<div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
                                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                                        {{--</div>--}}
                                        <div class="col-md-12">
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit"
                                                       class="submit submit-button" value="Post Event"/>
                                                {{--<input type='hidden' name='event_id' value={{$post->event_id}} id='event_id' />--}}
                                                {{--<input type='hidden' name='comment_parent' id='comment_parent' value='0' />--}}
                                            </p>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>
<!-- boxed -->
<!-- Bootstrap core and theme JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            pickDate: false
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 300,
        });
    });
</script>


<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>

<script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
{{--<script type="text/javascript" src="/js/jquery-latest.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="js/demo-settings.js"></script>--}}
{{--<script type="text/javascript" src="/js/owl.carousel.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/theia-sticky-sidebar.js"></script>--}}
{{--<script type="text/javascript" src="/js/themescripts.js"></script>--}}
</body>
</html>