@extends('layouts.index')
@section('content')
    <!-- main content -->
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="ot-module">
                        <!-- classic grid posts section -->
                        <h4 class="section-title"><span>Berita Acara / Kegiatan GenBI</span>GenBI Events</h4>
                        <div class="row">
                            <div class="col-md-12">
                            @foreach($news as $new => $value)
                                <!-- end list post item -->
                                    <div class="list-post">
                                        <div class="list-post-container">
                                            <a href="post.html"><img src="{{$value->foto}}" alt=""></a>
                                            {{--<div class="post-cat2">--}}
                                                {{--<span style="background-color: #F0CE49">Transport</span>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="list-post-body">
                                            <h2><a href="news{{$value->id}}">{{ $value->judul }}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span>{{$value->tanggal}}</span>
                                                {{--<span><a href="post.html">23 comments</a></span>--}}
                                                <span>{{$value->waktu}}</span>
                                                <span>{{$value->lokasi}}</span>
                                            </div>
                                            <p><?php echo str_limit($value->deskripsi, 200)?></p>
                                        </div>
                                    </div>
                                    <!-- end list post item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar">

                        <div class="widget-container">
                            <h4 class="section-title">Social</h4>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">6k</div>
                                    <div class="ot-social-type">Likes</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">13k</div>
                                    <div class="ot-social-type">Followers</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">234</div>
                                    <div class="ot-social-type">Followers</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">987</div>
                                    <div class="ot-social-type">Pople</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">34k</div>
                                    <div class="ot-social-type">Subscibers</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-soundcloud"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">4k</div>
                                    <div class="ot-social-type">Subscibers</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- widget advertisement -->
                        <div class="widget-container widget_tag_cloud">
                            <h4 class="section-title">Advertisement</h4>
                            <img src="images/ad340x550.jpg" alt=""/>
                        </div>
                        <!-- end widget advertisement -->
                    </aside>
                </div>
                <!-- col-md-4 -->
            </div>
            <!-- row -->
            <!-- end main content -->
        </div>
        <!-- container -->
    </section>
    <!-- end ot-section-a -->
    <!-- featured articles -->
@stop