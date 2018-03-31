@extends('layouts.index')
@section('content')
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
								<div class="iframe-rwd embed-container maps">
                                <iframe 
                                    allowfullscreen
                                    width="300" 
                                    height="170" 
                                    frameborder="0" 
                                    scrolling="no" 
                                    marginheight="0" 
                                    marginwidth="0" 
                                    src="https://maps.google.com/maps?q=-7.2821281,112.7929391&hl=es;z=14&amp;output=embed"
                                    >
                                    </iframe>
                                    <br />
                                    <small>
                                    <a 
                                        href="https://maps.google.com/maps?q='+data.lat+','+data.lon+'&hl=es;z=14&amp;output=embed" 
                                        style="color:#0000FF;text-align:left" 
                                        target="_blank"
                                    >
                                        See map bigger
                                    </a>
                                    </small>   
                                
                                <!-- <iframe allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30168.04676543787!2d-121.99255408324822!3d37.36557829291264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1slv!2slv!4v1436973231006"></iframe>
                                        <br />
                                        <small>
                                            <a href="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30168.04676543787!2d-121.99255408324822!3d37.36557829291264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1slv!2slv!4v1436973231006" style="color:#0000FF;text-align:left">
                                                View Larger Map</a></small> -->
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
@stop