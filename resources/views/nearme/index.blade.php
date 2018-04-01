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


var locations = <?php print_r(json_encode($locMe)) ?>;

var mymap = new GMaps({
  el: '#mymap',
  lat: 21.170240,
  lng: 72.831061,
  zoom:15
});


$.each( locations, function( index, value ){
    mymap.addMarker({
        lat: value.lat,
        lng: value.lng,
        title: value.city,
        click: function(e) {
            alert('This is '+value.city+', gujarat from India.');
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