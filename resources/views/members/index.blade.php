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
                        <h4 class="section-title"><span>DAFTAR ANGGOTA GENBI</span>ANGGOTA GENBI</h4>
                        <div class="row">
                            <div class="col-md-12">
                            <?php 
                                $i=1;
                            ?>
                            @foreach($members as $key => $member)
                                <!-- end list post item -->
                                    <div class="list-post">
                                        <?php 
                                            //echo "<p>".$i."</p><br>";
                                            //$i=$i+1;
                                        ?>
                                        <div>   
                                            {{-- <div class="list-post-container"> --}}
                                                <a href="/profile/{{$member->user_nrp}}">
                                                @if ($member->user_foto!=NULL)
                                                    <img src="{{$member->user_foto}}" class="image-member-list">
                                                @else
                                                    <img src="http://rehrealestate.com/wp-content/uploads/2015/08/facebook-default-no-profile-pic-300x300.jpg" class="image-member-list">
                                                @endif
                                                </a><br>
                                            {{-- </div> --}}
                                            <div class="list-post-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <a href="/profile/{{$member->user_nrp}}"><h2>{{$member->user_nama}}</h2></a>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-8">
                                                        {{$univ[$kode[$key][2]]}}
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-8">
                                                        {{$member->user_nrp}}
                                                    </div>
                                                </div>
                                            </div>
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