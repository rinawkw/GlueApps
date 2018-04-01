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
                            <h4 class="section-title"><span></span>Contact</h4>
                        </div>
						<div class="col-md-12">
							<div class="content ot-article">
								<div style="border: 0.5rem solid rgb(81, 174, 224);position: relative;overflow: hidden;padding-bottom: 300px;" 
								id="mymap" class="iframe-rwd embed-container maps">
                                </div>								
							</div>
						</div>
						<div class="col-md-8">
						<h3>Kesekretariatan GenBI Surabaya</h3>
						<p>
							Alamat: Jalan a<br>
							Email: no@spam.it<br>
							CP: P. Iva (0053384204804)<br>
						</p> 
						<h3>Kesekretariatan GenBI Malang</h3>
						<p>
							Alamat: Jalan a<br>
							Email: no@spam.it<br>
							CP: P. Iva (0053384204804)<br>
						</p>
						<h3>Kesekretariatan GenBI Jember</h3>
						<p>
							Alamat: Jalan a<br>
							Email: no@spam.it<br>
							CP: P. Iva (0053384204804)<br>
						</p>
						<h3>Kesekretariatan GenBI Kediri</h3>
						<p>
							Alamat: Jalan a<br>
							Email: no@spam.it<br>
							CP: P. Iva (0053384204804)<br>
						</p>
						<h3>Kesekretariatan GenBI Tulungagung</h3>
						<p>
							Alamat: Jalan a<br>
							Email: no@spam.it<br>
							CP: P. Iva (0053384204804)<br>
							<br>
							<br>


						</p>
						</div>
						<div class="col-md-4">
							<aside class="sidebar">
								<!-- widget articles section -->
								<div class="widget-container">
									
								<!-- widget tag cloud -->
								<div class="widget-container">
									<h4 class="section-title">Social Media</h4>
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



var mymap = new GMaps({
  el: '#mymap',
  lat: -7.2441903,
  lng: 112.7355586,
  zoom:15
});
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
var markersby = mymap.addMarker({
    lat: -7.2441903,
    lng: 112.7355586,
    title: "Kesekretariatan GenBI Surabaya",
    icon: "images/sekretariat.png",
    click: function(e) {
        
    }    
});
</script>

<script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/js/jquery-latest.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/demo-settings.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="/js/themescripts.js"></script>
</body>
</html>