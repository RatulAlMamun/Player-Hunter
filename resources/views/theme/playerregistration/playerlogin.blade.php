<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css files -->
<link href="{{ asset('public/nk/theme/playeregistration/css/style.css') }}" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<link href="{{ asset('public/nk/theme/playeregistration/css/wickedpicker.css') }}" rel="stylesheet" type='text/css' media="all" />

<script type="text/javascript" src="{{ asset('public/nk/theme/playeregistration/js/jquery-2.1.4.min.js') }}"></script>
</head>
<body>
	<div class="w3-banner-main">
		<div class="center-container">
			<h1 class="header-w3ls">Player Hunting Login Form</h1>
			<!---728x90--->
			@if ($errors->has('email'))
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $errors->first('email') }}</strong>
			    </span>
			@endif
			@if ($errors->has('password'))
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $errors->first('password') }}</strong>
			    </span>
			@endif
			@if(session('error'))
				<span class="invalid-feedback" role="alert">
				    <strong>{{ session('error') }}</strong>
				</span>
			@endif
			<div class="content-top">
				<div class="content-w3ls">
				<form action="{{ route('login') }}" method="POST">
					@csrf
					<div class="form-w3ls">
							<div class="content-wthree1">
								<div class="grid-agileits1">
									<div class="form-control">	
										<label class="header">Email </label>
										<input type="email" id="email" name="email" placeholder="Please enter a Valid Email Address" title="Please enter a Valid Email Address" required="">
									</div>	
								</div>
							</div>
					</div>
					<div class="form-w3ls-1">				
						<div class="form-control"> 
							<label class="header">Password </label>
							<input type="password" id="name" name="password" placeholder="Please enter your Password" title="Please enter your Password" required="">
						</div>	
						
					</div>
					<div class="form-control text-center"> 	
						<input type="submit" value="Login">
					</div>
					</form>
						
					<p>Don’t you have an account? <a href="{{route ('player.register') }}">Register Now!</a> it’s really simple and you can start enjoing all the benefits! </p>			
					<div class="clear"></div>
				</div>
			</div>	
				<!---728x90--->
				<p class="copyright">© 2018 Softball Registration Form. All Rights Reserved | Design & Developed by <a href="/" target="_blank">NK NAZMUL HAQUE</a></p>
				<!---728x90--->
		</div>
	</div>

<!-- Calendar -->
				<link rel="stylesheet" href="{{ asset('public/nk/theme/playeregistration/css/jquery-ui.css') }}" />
				<script src="{{ asset('public/nk/theme/playeregistration/js/jquery-ui.js') }}"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<script type="text/javascript" src="{{ asset('public/nk/theme/playeregistration/js/wickedpicker.js') }}"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>


</body>
</html>
