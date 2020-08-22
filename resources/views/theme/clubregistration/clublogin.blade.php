
<!DOCTYPE html>
<html>
<head>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Meta tag Keywords -->
<link href="{{ asset('public/nk/theme/clubregistration/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
</head>
<body>



<h1>Sports Club Membership</h1>
<!---728x90--->

<div class="w3ls-main">
<h2>Login Form</h2>
<p>Complete the form below to sign up for our membership service.</p>
<div class="w3ls-form">
<form action="{{ route('login') }}" method="POST">
	@csrf
<ul class="fields">
<div class="Refer_w3l">
	<li>
		<div class="mail">
			<label class="w3ls-opt">e-mail :<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="email" name="email" placeholder="enter your e-mail" required=""/>
			</span>
		</div>
	</li>
	<li>
		<div class="mail">
			<label class="w3ls-opt">password :<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="password" name="password" placeholder="enter your password" required="" style="text-transform: none;" />
			</span>
		</div>
	</li>
	
	</div>
</ul>
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" value="Login">
	</div>
	<p><a href="">Forgot my Password</a></p>
	<p>Don’t you have an account? <a href="{{route ('club.member.register') }}">Register Now!</a> it’s really simple and you can start enjoing all the benefits! </p>
</form>
</div>
</div>
<!---728x90--->
<footer>&copy; 2020 Player hunting. All Rights Reserved | Design & Developed by <a href="/"> NK NAZMUL HAQUE</a></footer>
<!---728x90--->
</body>
</html>