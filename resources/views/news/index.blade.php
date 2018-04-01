@extends('layouts.index')
@section('content')
    <!-- main content -->
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-module">
                        <!-- classic grid posts section -->
                        <h4 class="section-title"><span>Berita Acara / Kegiatan GenBI</span>GenBI Events</h4>
                        <div class="row">
                            <div class="col-md-12">
                            @foreach($news as $new => $value)
                                <!-- end list post item -->
                                    <div class="list-post">
                                        <div class="list-post-container">
                                            <a href="post.html"><img src="{{$value->event_foto}}" alt=""></a>
                                            {{--<div class="post-cat2">--}}
                                                {{--<span style="background-color: #F0CE49">Transport</span>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="list-post-body">
                                            <h2><a href="news/{{$value->idevent}}"><b>{{ $value->event_judul }}</b></a>
                                            </h2>
                                            <div class="post-meta">
                                                <span>{{$value->event_tanggal}}</span>
                                                {{--<span><a href="post.html">23 comments</a></span>--}}
                                                <span>{{$value->event_waktu}}</span>
                                                <span>{{$value->event_lokasi}}</span>
                                            </div>
                                            <p><?php echo str_limit($value->event_deskripsi, 200)?></p>
                                        </div>
                                    </div>
                                    <!-- end list post item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <!-- end main content -->
        </div>
        <!-- container -->
    </section>
    <!-- end ot-section-a -->
    <!-- featured articles -->
@stop