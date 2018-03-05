@extends('layouts.index')
@section('content')
			<!-- main content -->
			<section class="ot-section-a">
				<!-- container -->
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="content ot-article">
								<div class="iframe-rwd embed-container  maps">
									<iframe style="pointer-events: none;" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30168.04676543787!2d-121.99255408324822!3d37.36557829291264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1slv!2slv!4v1436973231006"></iframe><br /><small><a href="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30168.04676543787!2d-121.99255408324822!3d37.36557829291264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1slv!2slv!4v1436973231006" style="color:#0000FF;text-align:left">View Larger Map</a></small>
								</div>
								<h2>Contact</h2>
								<p>
									Praesent vitae leo et sapien fermentum pretium eu sed velit. Phasellus tincidunt eleifend mauris a pellentesque. Duis at porttitor nisl, vitae vestibulum ex. Quisque commodo turpis libero, in consectetur lectus luctus eget. Nam tincidunt elementum massa vel egestas. Sed hendrerit lacus tincidunt, consectetur mauris eget, varius augue. Duis tincidunt bibendum felis at bibendum. Proin lectus elit, molestie eu faucibus in, convallis vel turpis. Pellentesque sit amet accumsan mi, in volutpat urna. Morbi maximus metus et ligula accumsan, id euismod lectus fringilla. Ut a nisl sed risus convallis viverra.
								</p>
								<h3>Advertise With Us!</h3>
								<p>Duis at porttitor nisl, vitae vestibulum ex. Quisque commodo turpis libero, in consectetur lectus luctus eget. Nam tincidunt elementum massa vel egestas. Sed hendrerit lacus tincidunt, consectetur mauris eget, varius augue. </p>
								<h3>The Editors</h3>
								<p>Duis at porttitor nisl, vitae vestibulum ex. Quisque commodo turpis libero, in consectetur lectus luctus eget. Nam tincidunt elementum massa vel egestas. Sed hendrerit lacus tincidunt, consectetur mauris eget, varius augue. </p>
								<h3>Write For Us</h3>
								<p>Duis at porttitor nisl, vitae vestibulum ex. Quisque commodo turpis libero, in consectetur lectus luctus eget. Nam tincidunt elementum massa vel egestas. Sed hendrerit lacus tincidunt, consectetur mauris eget, varius augue. </p>
								<p>
									Via della Canonica, 1<br>
									50122 - Firenze<br>
									Tel: +39 055 23028523<br>
									Fax: +39 055 23028854<br>
									Mail: no@spam.it<br>
									P. Iva: 0053384204804<br>
								</p>
								<div class="coloralert contact-success-block" style="display:block; background: #68a117;">
									<i class="fa fa-check"></i>
									<p>Great Success:<br/>Your meesage went through!</p>
									<a href="#close-alert" class="close-alert"><i class="fa fa-times-circle"></i></a>
								</div>
								<form name="comments" action="#" method="post" class="comment-form">
									<div style="display: none;">
										<input type="hidden" name="_wpcf7" value="79" />
										<input type="hidden" name="_wpcf7_version" value="4.1" />
										<input type="hidden" name="_wpcf7_locale" value="en_US" />
										<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f79-p64-o1" />
										<input type="hidden" name="_wpnonce" value="ebcdc94d2e" />
									</div>
									<div class="row">
										<div class="col-md-6">
											<label for="author">Your name</label>
											<input id="author" type="text" placeholder="Your name" name="author">
										</div>
										<div class="col-md-6">
											<label for="email">Email</label>
											<input id="email" type="text" placeholder="Email" name="email">
											<span class="error-msg comment-error" id="contact-mail-error" style="display:block;"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;The email address contains illegal characters.</span>
										</div>
										<div class="col-md-12">
											<label for="email">Subject</label>
											<input id="subject" type="text" placeholder="Subject" name="subject">
										</div>
										<div class="col-md-12">
											<label for="comment">Comment</label>
											<textarea name="comment" id="comment" cols="35" rows="5"></textarea>
										</div>
										<div class="col-md-12"><input type="submit" value="Send" class="submit-button" /></div>
									</div>
								</form>
							</div>
							<!-- end content -->
						</div>
						<div class="col-md-4">
							<aside class="sidebar">
								<!-- widget articles section -->
								<div class="widget-container">
									<h4 class="section-title"><span>Latest From All Categories</span>Latest News</h4>
									<!-- article post -->
									<article class="widget-post">
										<div class="post-image">
											<a href="post.html"><img src="images/demo/1200x800-10.jpg" alt=""></a>
										</div>
										<div class="post-body">
											<h2><a href="post.html">Make Stories Come Alive with Jodi Harvey-Brown</a></h2>
										</div>
									</article>
									<!-- end article item -->
									<!-- article post -->
									<article class="widget-post">
										<div class="post-image">
											<a href="post.html"><img src="images/demo/1200x800-11.jpg" alt=""></a>
										</div>
										<div class="post-body">
											<h2><span class="hot">Hot <i class="fa fa-bolt"></i></span><a href="post.html">The View From a Peaceful Villa I Visited</a></h2>
										</div>
									</article>
									<!-- end article item -->
									<!-- article post -->
									<article class="widget-post">
										<div class="post-image">
											<a href="post.html"><img src="images/demo/1200x800-9.jpg" alt=""></a>
										</div>
										<div class="post-body">
											<h2><a href="post.html">Is This Outfit a Relationship Deal-Breaker?</a></h2>
										</div>
									</article>
									<!-- end article item -->
									<!-- article post -->
									<article class="widget-post">
										<div class="post-image">
											<a href="post.html"><img src="images/demo/1200x800-12.jpg" alt=""></a>
										</div>
										<div class="post-body">
											<h2><a href="post.html">The View From a Peaceful Villa I Visited</a></h2>
										</div>
									</article>
									<!-- end article item -->
								</div>
								<!-- end widget articles section -->
								<!-- widget articles section -->
								<div class="widget-container">
									<h4 class="section-title"><span>Review Widget #1</span>Latest Reviews</h4>
									<!-- article post -->
									<article class="widget-post">
										<div class="review-bar-score">
											<span class="score">80</span><span class="percent">%</span>
										</div>
										<div class="post-body">
											<h2><a href="post.html">Apple iPhone 4s</a></h2>
											<div class="review-bar-bg">
												<div class="review-bar" style="width: 80%;"><span>80%</span></div>
											</div>
										</div>
									</article>
									<!-- end article item -->
									<!-- article post -->
									<article class="widget-post">
										<div class="review-bar-score">
											<span class="score">70</span><span class="percent">%</span>
										</div>
										<div class="post-body">
											<h2><a href="post.html">Apple iPhone 6s</a></h2>
											<div class="review-bar-bg">
												<div class="review-bar" style="width: 70%;"><span>70%</span></div>
											</div>
										</div>
									</article>
									<!-- end article item -->
									<!-- article post -->
									<article class="widget-post">
										<div class="review-bar-score">
											<span class="score">83</span><span class="percent">%</span>
										</div>
										<div class="post-body">
											<h2><a href="post.html">Samsung Galaxy S6</a></h2>
											<div class="review-bar-bg">
												<div class="review-bar" style="width: 83%;"><span>83%</span></div>
											</div>
										</div>
									</article>
									<!-- end article item -->
									<!-- article post -->
									<article class="widget-post">
										<div class="review-bar-score">
											<span class="score">70</span><span class="percent">%</span>
										</div>
										<div class="post-body">
											<h2><a href="post.html">Apple iPhone 6s</a></h2>
											<div class="review-bar-bg">
												<div class="review-bar" style="width: 70%;"><span>70%</span></div>
											</div>
										</div>
									</article>
									<!-- end article item -->
								</div>
								<!-- end widget articles section -->
								<!-- widget tag cloud -->
								<div class="widget-container widget_tag_cloud">
									<h4 class="section-title">Calendar</h4>
									<div id="calendar_wrap">
										<table id="wp-calendar">
											<caption>April 2015</caption>
											<thead>
												<tr>
													<th scope="col" title="Monday">M</th>
													<th scope="col" title="Tuesday">T</th>
													<th scope="col" title="Wednesday">W</th>
													<th scope="col" title="Thursday">T</th>
													<th scope="col" title="Friday">F</th>
													<th scope="col" title="Saturday">S</th>
													<th scope="col" title="Sunday">S</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<td colspan="3" id="prev"><a href="http://orange-themes.com/testiem/2014/01/">&laquo; Jan</a></td>
													<td class="pad">&nbsp;</td>
													<td colspan="3" id="next" class="pad">&nbsp;</td>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td colspan="2" class="pad">&nbsp;</td>
													<td>1</td>
													<td>2</td>
													<td>3</td>
													<td>4</td>
													<td>5</td>
												</tr>
												<tr>
													<td>6</td>
													<td>7</td>
													<td>8</td>
													<td>9</td>
													<td>10</td>
													<td>11</td>
													<td>12</td>
												</tr>
												<tr>
													<td>13</td>
													<td>14</td>
													<td>15</td>
													<td>16</td>
													<td>17</td>
													<td>18</td>
													<td>19</td>
												</tr>
												<tr>
													<td id="today">20</td>
													<td>21</td>
													<td>22</td>
													<td>23</td>
													<td>24</td>
													<td>25</td>
													<td>26</td>
												</tr>
												<tr>
													<td>27</td>
													<td>28</td>
													<td>29</td>
													<td>30</td>
													<td class="pad" colspan="3">&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- widget tag cloud -->
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
							</aside>
						</div>
						<!-- col-md-4 -->
					</div>
					<!-- row -->
					<!-- end main content -->
				</div>
				<!-- container -->
			</section>
@stop