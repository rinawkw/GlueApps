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
                <div class="ot-module">
                    <!-- Modal -->
                    <div style="z-index: 1050;" class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            </div>
                        </div>
                    </div>
                    <!-- classic grid posts section -->
                    <h4 class="section-title"><span>Lokasi Anggota GenBI</span>GenBI Near Me</h4>
					<div class="row">
						<div class="col-md-12">
							<div class="content ot-article">
								<div style="border:0.5rem solid #51aee0;" id="mymap" class="iframe-rwd embed-container maps">
                                </div>
							</div>
							<!-- end content -->
						</div>
						
					</div>
					<!-- row -->
                    <!-- end main content -->
                                    </div>
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

var marker = mymap.addMarker({
    lat: locMe[0].user_lat,
    lng: locMe[0].user_lng,
    title: "YOU",
    icon: "images/me.png",
    click: function() {
        $("#myModal").modal('show');
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
            $("#myModal").modal('show');
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