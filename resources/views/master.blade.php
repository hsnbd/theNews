<!DOCTYPE html>
<html>

<head>
	<title>The News Reporter a Magazine Category Flat Bootstarp Responsive Website Template| Home :: w3layouts</title>
	<link href="/main-themes/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="/main-themes/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<script src="/main-themes/js/jquery.min.js"></script>
	<script type="text/javascript" src="/main-themes/js/jquery.leanModal.min.js"></script>
	<link rel="stylesheet" href="/main-themes/css/font-awesome.min.css" />

	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfont-->

</head>

<body>
	<!-- header-section-starts -->
	<div class="container">
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="index.html">
							<h6>the</h6>
							<h1>News <span>Reporter</span></h1>
						</a>
					</div>
				</div>
				<div class="social-icons">
					<li><a href="#"><i class="twitter"></i></a></li>
					<li><a href="#"><i class="facebook"></i></a></li>
					<li><a href="#"><i class="rss"></i></a></li>
					<li>
						<div class="facebook">
							<div id="fb-root"></div>

							<div id="fb-root"></div>
						</div>
					</li>
					<script>
						(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s);
							js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>

					<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>


				</div>
				<div class="clearfix"></div>
				<div class="header-right">
					<div class="top-menu">
						<ul>
							<li><a href="index.html">Home</a></li> |
							<li><a href="about.html">About Us</a></li> |
							<li><a href="contact.html">Contact Us</a></li> |

					@if(Auth::guest())
							<li><a id="modal_trigger" href="#modal" class="btn1">Login</a>

								<div id="modal" class="popupContainer" style="display:none;">
									<header class="popupHeader">
										<span class="header_title">Login</span>
										<span class="modal_close"><i class="fa fa-times"></i></span>
									</header>

									<section class="popupBody">
										<!-- Social Login -->
										<div class="social_login">
											<div class="">
												<a href="#" class="social_box fb">
													<span class="icon"><i class="fa fa-facebook"></i></span>
													<span class="icon_title">Connect with Facebook</span>
												</a>

												<a href="#" class="social_box google">
													<span class="icon"><i class="fa fa-google-plus"></i></span>
													<span class="icon_title">Connect with Google</span>
												</a>

											</div>

											<div class="centeredText">
												<span>Or use your Email address</span>
											</div>

											<div class="action_btns">
												<div class="one_half"><a href="#" id="login_form" class="btn btn-primary">Login</a></div>
												<div class="one_half last"><a href="#" id="register_form" class="btn btn-success">Sign up</a></div>
											</div>
										</div>

										<!-- Username & Password Login form -->
										<div class="user_login">
											<form method="post" action="/login">
												{{csrf_field()}}
												<label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

												<br />

												<label for="password" class="control-label">Password</label>
												<input id="password" type="password" class="form-control" name="password" required>
												<br />

												<div class="checkbox">
													<input type="checkbox" name="remember" >
													<label for="remember">Remember me on this computer</label>
												</div>

												<div class="action_btns">
													<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
													<div class="one_half last"><input class="btn btn-primary" type="submit" value="Login"></div>
												</div>
											</form>

											<a href="/password/reset" class="forgot_password">Forgot password?</a>
										</div>

										<!-- Register Form -->
										<div class="user_register">
											<form method="post" action="/register">
												{{csrf_field()}}
												<label for="name" class="control-label">Name</label>
												<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
												<br />

												<label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="" required>

												<br />

												<label for="password" class="control-label">Password</label>
												<input id="password" type="password" class="form-control" name="password" required>

												<br />

												<label for="password-confirm" class="control-label">Confirm Password</label>
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

												{{-- <div class="checkbox">
													<input id="send_updates" type="checkbox" />
													<label for="send_updates">Send me occasional email updates</label>
												</div> --}}

												<div class="action_btns">
													<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
													<div class="one_half last"><input class="btn btn-success" type="submit" value="Register"></div>
												</div>
											</form>
										</div>
									</section>
								</div>





								<script type="text/javascript">
									$("#modal_trigger").leanModal({
										top: 200,
										overlay: 0.6,
										closeButton: ".modal_close"
									});

									$(function() {
										// Calling Login Form
										$("#login_form").click(function() {
											$(".social_login").hide();
											$(".user_login").show();
											return false;
										});

										// Calling Register Form
										$("#register_form").click(function() {
											$(".social_login").hide();
											$(".user_register").show();
											$(".header_title").text('Register');
											return false;
										});

										// Going back to Social Forms
										$(".back_btn").click(function() {
											$(".user_login").hide();
											$(".user_register").hide();
											$(".social_login").show();
											$(".header_title").text('Login');
											return false;
										});

									})
								</script>
							</li> |
							<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Subscribe</a></li>

					@else
							<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
											{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<ul class="dropdown-menu" role="menu">
											<li><a href="/admin">Admin Panel</a></li>
											<li>
													<a href="{{ route('logout') }}"
															onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">
															Logout
													</a>



													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
													</form>
											</li>


									</ul>
							</li>

					<script type="text/javascript">
						// Calling Register Form
						$(".dropdown-toggle").click(function() {
							$(".dropdown-menu").toggle();
						});
					</script>
					@endif
						</ul>
					</div>
					<!---pop-up-box---->
					<link href="/main-themes/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="/main-themes/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div id="small-dialog1" class="mfp-hide">
						<div class="signup">
							<h3>Subscribe</h3>
							<h4>Enter Your Valid E-mail</h4>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
							<div class="clearfix"></div>
							<input type="submit" value="Subscribe Now" />
						</div>
					</div>

					<script>
						$(document).ready(function() {
							$('.popup-with-zoom-anim').magnificPopup({
								type: 'inline',
								fixedContentPos: false,
								fixedBgPos: true,
								overflowY: 'auto',
								closeBtnInside: true,
								preloader: false,
								midClick: true,
								removalDelay: 300,
								mainClass: 'my-mfp-zoom-in'
							});

						});
					</script>
					<div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<ul>
					<li><a href="index.html">worldnews</a></li>
					<li><a href="sports.html">sports</a></li>
					<li><a href="tech.html">tech</a></li>
					<li><a href="business.html">business</a></li>
					<li><a href="movies.html">Movies</a></li>
					<li><a href="movies.html">entertainment</a></li>
					<li><a href="books.html">Books</a></li>
					<li><a href="movies.html">culture</a></li>
					<li><a href="classifieds.html">classifieds</a></li>
					<li><a href="blog.html">blogs</a></li>
				</ul>
			</div>
			<!-- script for menu -->
			<script>
				$("span.menu").click(function() {
					$(".menu-strip").slideToggle("slow", function() {
						// Animation complete.
					});
				});
			</script>
			<!-- script for menu -->

			<div class="clearfix"></div>

			<div class="main-content">
				<div class="col-md-9 total-news">






@yield('slider')







@yield('content')

				</div>

				<div class="col-md-3 side-bar">
					<div class="videos">
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<a class="more1" href="single.html">More  +</a>
						<div class="clearfix"></div>
					</div>
					<div class="sign_up text-center">
						<h3>Sign  Up  for    Newsletter</h3>
						<p class="sign">Sign up to receive our free newsletters!</p>
						<form>
							<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
							<input type="submit" value="submit">
						</form>
						<p class="spam">We do not spam. We value your privacy!</p>
					</div>
					<div class="clearfix"></div>
					<div class="popular">
						<div class="main-title-head">
							<h5>popular</h5>
							<h4> Most    read</h4>
							<div class="clearfix"></div>
						</div>
						<div class="popular-news">
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="singlepage.html">Read More</a></p>
							</div>
							<a class="more" href="singlepage.html">More  +</a>
						</div>
					</div>
					<div class="subscribe-now">
						<div class="discount">
							<a href="#">
								<div class="save">
									<p>Save</p>
									<p>upto</p>
								</div>
								<div class="percent">
									<h2>50%</h2>
								</div>
								<div class="clearfix"></div>
						</div>
						<h3 class="sn">subscribe     now</h3>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer text-center">
				<div class="bottom-menu">
					<ul>
						<li><a href="index.html">World  News</a></li> |
						<li><a href="sports.html">Sports</a></li> |
						<li><a href="tech.html">Techology</a></li> |
						<li><a href="business.html">Business</a></li> |
						<li><a href="movies.html">Movies</a></li> |
						<li><a href="movies.html">Entertainment</a></li> |
						<li><a href="books.html">Books</a></li> |
						<li><a href="movies.html">Culture</a></li> |
						<li><a href="classifieds.html">Classifieds</a></li> |
						<li><a href="blog.html">Blogs</a></li>
					</ul>
				</div>
				<div class="copyright text-center">
					<p>The News Reporter &copy; 2015 All rights reserved | Template by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
