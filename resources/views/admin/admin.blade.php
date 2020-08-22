<!DOCTYPE html>
<html lang="en">
<head>

	<title>player hunter</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="{{('public/nk/js/libs/webfontloader.min.js')}}"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/nk/Bootstrap/dist/css/bootstrap-reboot.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/nk/Bootstrap/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/nk/Bootstrap/dist/css/bootstrap-grid.css')}}">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/nk/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/nk/css/fonts.min.css')}}">



</head>

<body class="landing-page">


<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->
<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="{{route ('home.page') }}" class="logo">
				<div class="img-wrap">
					<img src="{{asset('public/nk/img/logo.png')}}" alt="Player Hunter">
					<img src="{{asset('public/nk/img/logo-colored-small.png')}}" alt="Player Hunter" class="logo-colored">
				</div>
				<div class="title-block">
					<h6 class="logo-title">Player Hunter</h6>
					<div class="sub-title">SPORTS NETWORK</div>
				</div>
			</a>

			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>

			<div class="nav nav-pills nav1 header-menu">
				<div class="mCustomScrollbar">
					<ul>
						<li class="nav-item">
							<a href="{{route ('home.page') }}" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="{{route ('about.page') }}" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="{{route ('news.page') }}" class="nav-link">News</a>
						</li>
						<li class="nav-item">
							<a href="{{route ('blog.page') }}" class="nav-link">Blog</a>
						</li>
						
						<li class="nav-item">
							<a href="#" class="nav-link">Privacy Policy</a>
						</li>
						<li class="nav-item js-expanded-menu">
							<a href="#" class="nav-link">
								<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon">
									<svg id="olymp-menu-icon" viewBox="0 0 41 32">
										<title>menu-icon</title>
										<path d="M4.571 0h-4.571v4.571h4.571v-4.571zM9.143 0v4.571h32v-4.571h-32zM13.714 13.714h-13.714v4.571h13.714v-4.571zM18.286 13.714v4.571h4.571v-4.571h-4.571zM27.429 18.286h13.714v-4.571h-13.714v4.571zM0 32h32v-4.569h-32v4.569zM36.571 32h4.571v-4.569h-4.571v4.569z"></path>
									</svg>
								</use></svg>
								<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon">
									<svg id="olymp-close-icon" viewBox="0 0 32 32">
										<title>close-icon</title>
										<path d="M14.222 17.778h3.556v-3.556h-3.556v3.556zM31.084 3.429l-2.514-2.514-10.057 10.057 2.514 2.514 10.057-10.057zM0.916 28.571l2.514 2.514 10.057-10.055-2.516-2.514-10.055 10.055zM18.514 21.029l10.057 10.055 2.514-2.514-10.057-10.055-2.514 2.514zM0.916 3.431l10.057 10.055 2.516-2.514-10.059-10.057-2.514 2.516z"></path>
									</svg>
								</use></svg>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Welcome to the Biggest Sports Network in the World</h1>
				<p>We are the best and biggest Sports network with 5 billion active users all around the world. Share you
					thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
				</p>
				<a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">Register
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab"> Login
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Player Hunter</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password">
									</div>
			
									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input name="datetimepicker" value="10/24/1984" />
										<span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
													</span>
									</div>
			
									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control">
											<option value="MA">Male</option>
											<option value="FE">Female</option>
										</select>
									</div>
			
									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div>
			
									<a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
								</div>
							</div>
						</form>
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password">
									</div>
			
									<div class="remember">
			
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
									</div>
			
									<a href="{{route ('admin.dashboard') }}" class="btn btn-lg btn-primary full-width">Login</a>
			
									<div class="or"></div>
			
									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>
			
									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>
			
			
									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>





<!-- JS Scripts -->
<script src="{{asset('public/nk/js/jQuery/jquery-3.4.1.js')}}"></script>
<script src="{{asset('public/nk/js/libs/jquery.appear.js')}}"></script>
<script src="{{asset('public/nk/js/libs/jquery.mousewheel.js')}}"></script>
<script src="{{asset('public/nk/js/libs/perfect-scrollbar.js')}}"></script>
<script src="{{asset('public/nk/js/libs/jquery.matchHeight.js')}}"></script>
<script src="{{asset('public/nk/js/libs/svgxuse.js')}}"></script>
<script src="{{asset('public/nk/js/libs/imagesloaded.pkgd.js')}}"></script>
<script src="{{asset('public/nk/js/libs/Headroom.js')}}"></script>
<script src="{{asset('public/nk/js/libs/velocity.js')}}"></script>
<script src="{{asset('public/nk/js/libs/ScrollMagic.js')}}"></script>
<script src="{{asset('public/nk/js/libs/jquery.waypoints.js')}}"></script>
<script src="{{asset('public/nk/js/libs/jquery.countTo.js')}}"></script>
<script src="{{asset('public/nk/js/libs/popper.min.js')}}"></script>
<script src="{{asset('public/nk/js/libs/material.min.js')}}"></script>
<script src="{{asset('public/nk/js/libs/bootstrap-select.js')}}"></script>
<script src="{{asset('public/nk/js/libs/smooth-scroll.js')}}"></script>
<script src="{{asset('public/nk/js/libs/selectize.js')}}"></script>
<script src="{{asset('public/nk/js/libs/swiper.jquery.js')}}"></script>
<script src="{{asset('public/nk/js/libs/moment.js')}}"></script>
<script src="{{asset('public/nk/js/libs/daterangepicker.js')}}"></script>
<script src="{{asset('public/nk/js/libs/fullcalendar.js')}}"></script>
<script src="{{asset('public/nk/js/libs/isotope.pkgd.js')}}"></script>
<script src="{{asset('public/nk/js/libs/ajax-pagination.js')}}"></script>
<script src="{{asset('public/nk/js/libs/Chart.js')}}"></script>
<script src="{{asset('public/nk/js/libs/chartjs-plugin-deferred.js')}}"></script>
<script src="{{asset('public/nk/js/libs/circle-progress.js')}}"></script>
<script src="{{asset('public/nk/js/libs/loader.js')}}"></script>
<script src="{{asset('public/nk/js/libs/run-chart.js')}}"></script>
<script src="{{asset('public/nk/js/libs/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('public/nk/js/libs/jquery.gifplayer.js')}}"></script>
<script src="{{asset('public/nk/js/libs/mediaelement-and-player.js')}}"></script>
<script src="{{asset('public/nk/js/libs/mediaelement-playlist-plugin.min.js')}}"></script>
<script src="{{asset('public/nk/js/libs/ion.rangeSlider.js')}}"></script>
<script src="{{asset('public/nk/js/libs/leaflet.js')}}"></script>
<script src="{{asset('public/nk/js/libs/MarkerClusterGroup.js')}}"></script>

<script src="{{asset('public/nk/js/main.js')}}"></script>
<script src="{{asset('public/nk/js/libs-init/libs-init.js')}}"></script>
<script defer src="{{asset('public/nk/fonts/fontawesome-all.js')}}"></script>

<script src="{{asset('public/nk/Bootstrap/dist/js/bootstrap.bundle.js')}}"></script>

</body>
</html>