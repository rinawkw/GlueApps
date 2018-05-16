@extends('layouts.index')
@section('content')
    
    
    <!-- main content -->
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="theiaStickySidebar">
                        <div class="ot-module">
                            <!-- classic grid posts section -->
                            <!-- <h4 class="section-title"><span>The grid style module</span>Traveling</h4> -->
                            
                            <!-- Grid posts 2. row -->
                            @for ($i = 0; $i < $value->count() ; $i++)
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <!-- <div class="post-cat2"><span>Artwork</span></div> -->
                                                <h2><a href="post.html">{{ $value[$i]->event_judul }}</a>
                                                </h2>
                                            </div>
                                            <a  href="post.html">
                                                <img style="width: 400px; height: 300px; overflow: hidden;" src="{{$value[$i]->event_foto}}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>{{$value[$i]->event_tanggal}}</span> <span><a href="post.html">{{$value[$i]->event_waktu}}</a></span>
                                                <span>{{$value[$i]->event_lokasi}}</span>
                                            </div>
                                            <p><?php echo str_limit($value[$i]->event_deskripsi, 200) ?></p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                                <?php $i++ ?>
                                <div class="col-md-6 col-sm-6">
                                    <div class="grid-post grid-gutter">
                                        <div class="post-image">
                                            <div class="post-title">
                                                <!-- <div class="post-cat2"><span>Artwork</span></div> -->
                                                <h2><a href="post.html">{{ $value[$i]->event_judul }}</a>
                                                </h2>
                                            </div>
                                            <a href="post.html">
                                                <img style="width: 400px; height: 300px; overflow: hidden;" src="{{$value[$i]->event_foto}}" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <span>{{$value[$i]->event_tanggal}}</span> <span><a href="post.html">{{$value[$i]->event_waktu}}</a></span>
                                                <span>{{$value[$i]->event_lokasi}}</span>
                                            </div>
                                            <p><?php echo str_limit($value[$i]->event_deskripsi, 200) ?></p>
                                        </div>
                                        <div class="read-more"><a href="post.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            <!-- end 2. row -->
                        </div>
                        <!-- end ot-module -->
                    </div>
                    <!-- stickysidebar -->
                </div>
                <!-- end main content .col-md-8 -->
                <div class="col-md-4">
                    <div class="theiaStickySidebar">
                        <aside class="sidebar">
                            <!-- widget socials -->
                            <div class="widget-container">
                                <h4 class="section-title"><span>Infra Magazine on</span>Socials</h4>
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
                            <!-- end widget socials -->
                            <!-- widget advertisement -->
                            <div class="widget-container">
                                <h4 class="section-title">Advertisement</h4>
                                <a href="https://play.google.com/store/apps/details?id=com.azkaakh.alphaglue"><img src="images/gluealpha.jpg" alt="Aplikasi Glue Berbasis Android"/></a>
                            </div>
                            <!-- end widget advertisement -->
                        </aside>
                    </div>
                    <!-- theiaStickysidebar -->
                </div>
                <!-- col-md-4 -->
            </div>
            <!-- row -->
            <!-- end main content -->
        </div>
        <!-- container -->
    </section>
    <!-- end ot-section-a -->
    

    <section class="ot-section-b ot-wide">
        <div class="container">
            <!-- Instagram Widget Section -->
            <h4 class="section-title"><span>Latest photos from</span>Instagram</h4>
            <div class="row">
                <div class="col-md-12">
                    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/8c336cd4770e51cb8bef428dac0b6c18.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- end Instagram Widget Section -->
@stop