<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
<div class="boxed active">
    @include('layouts.topbar')
    @include('layouts.mainmenu')
    <!-- main content -->
        <section class="ot-section-a">
				<!-- container -->
				<div class="container">
					<div class="row">
                        <div class="col-md-12">
                            <h4 class="section-title"><span>Lokasi Anggota GenBI</span>GenBI Near Me</h4>
                        </div>
						<div class="col-md-8">
							<div class="content ot-article">
                                
                                <div style="border:0.5rem solid #51aee0;" id="mymap" class="iframe-rwd embed-container maps">
                                </div>    							
							</div>
							<!-- end content -->
						</div>
						<div class="col-md-4">
							<aside class="sidebar">
								<!-- widget articles section -->
								<!-- <div class="widget-container"> -->
                                <div class="content ot-article">
                                    <div class="post-image" style="margin:2rem">
										<img id="pic"  src="{{session('data.user_foto')}}" alt="">
                                    </div>
                                    <div class="list-post">
									    <h4 style="text-align:center"class="section-title">
                                            <a id="profile" href="profile"><b id="demo">{{session('data.user_nama')}}</b></a>
                                        </h4>	
                                    </div>
                                </div>
								<!-- end widget articles section -->
							</aside>
						</div>
						<!-- col-md-4 -->
					</div>
					<!-- row -->
					<!-- end main content -->
				</div>
				<!-- container -->
			</section>
      @include('layouts.footer')
</div>


<script type="text/javascript">

var locMe = <?php print_r(json_encode($locMe)) ?>;
var locOthers = <?php print_r(json_encode($locOthers)) ?>;

var mymap = new GMaps({
  el: '#mymap',
  lat: locMe[0].user_lat,
  lng: locMe[0].user_lng,
  zoom:15
});
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
var marker = mymap.addMarker({
    lat: locMe[0].user_lat,
    lng: locMe[0].user_lng,
    title: "YOU",
    icon: "images/me.png",
    click: function(e) {
        $('#demo').text(locMe[0].user_nama);
        $("#pic").attr({ src: locMe[0].user_foto});
    }    
});

marker.addListener('click', function() {
    $("#myModal").modal('show');
});

$.each( locOthers, function( index, value ){
    mymap.addMarker({
        lat: value.user_lat,
        lng: value.user_lng,
        title: value.user_nama,
        icon: "images/other.png",
        click: function(e) {
            $('#demo').text(value.user_nama);
            $("#pic").attr({ src: value.user_foto});
            $("#profile").attr("href", "profile/".value.user_nrp);
        }
    });
});


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