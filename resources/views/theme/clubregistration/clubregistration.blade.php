<!DOCTYPE html>
<html>
<head>
	<!-- metatags-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Meta tag Keywords -->
	<link href="{{ asset('public/nk/theme/clubregistration/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
	<!--style_sheet-->
</head>
<body>
	<h1>Sports Club Membership</h1>
	<!---728x90--->
	<div class="w3ls-main">
		<h2>Registration Form</h2>
		<p>Complete the form below to sign up for our membership service.</p>
		<div class="w3ls-form">
			<form action="{{ route('memberregsitration.submit') }}" method="post">
				@csrf
				<ul class="fields">
					<div class="Refer_w3l">
						<h3>Your details</h3>
						<li>	
							<label class="w3ls-opt">name :
								<span class="w3ls-star"> * </span>
							</label>
							<div class="w3ls-name">	
								<input type="text" name="name" placeholder="Full name" required/>
							</div>
						</li>
						<li>
							<div class="mail">
								<label class="w3ls-opt">e-mail :
									<span class="w3ls-star"> * </span>
								</label>
								<span class="w3ls-text w3ls-name">
									<input type="email" name="email" placeholder="enter your e-mail" required=""/>
								</span>
							</div>
						</li>
						<li>
							<div class="mail">
								<label class="w3ls-opt">password :
									<span class="w3ls-star"> * </span>
								</label>
								<span class="w3ls-text w3ls-name">
									<input type="password" name="password" placeholder="enter your password" required=""/>
								</span>
							</div>
						</li>
						<li>
							<label class="w3ls-opt">phone number :
								<span class="w3ls-star"> * </span>
							</label>	
							<span class="w3ls-text w3ls-name">
								<input type="text" name="phone_no" placeholder="phone number" required=""/>
							</span>
						</li>
						<li>
							<label class="w3ls-opt">address :
								<span class="w3ls-star"> * </span>
							</label>	
							<span class="w3ls-text w3ls-name">
								<textarea rows="4" cols="50" name="address"></textarea>
							</span>
						</li>
						<li>
							<label class="w3ls-opt">your club :
								<span class="w3ls-star"> * </span>
							</label>	
							<span class="w3ls-text w3ls-name">
								<input type="text" name="club" placeholder="Your Club Name" required=""/>
							</span>
						</li>
						<div class="wthree-text">
							<h4>Choose Your Sports</h4>
							<ul class="radio-w3ls">
								<li>
									<input type="radio" id="a-option" name="sports" value="Football">
									<label for="a-option">Football</label>
									<div class="check"></div>
								</li>
								<li>
									<input type="radio" id="b-option" name="sports" value="Cricket">
									<label for="b-option">Cricket</label>
									<div class="check">
										<div class="inside"></div>
									</div>
								</li>				
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="Refer_w3l">
						<h3>Membership Rules</h3>
						<p>1. Praesent urna odio, rutrum sed malesuada nec, pulvinar sed metus</p>
						<p>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non dolor et nulla tristique commodo nec eget nibh. </p>
					</div>
					<p>Praesent urna odio, rutrum sed malesuada nec, pulvinar sed metus.</p>
				</ul>
				<div class="clear"></div>
				<div class="w3ls-btn">
					<input type="submit" value="Register">
				</div>
			</form>
		</div>
	</div>
	<!---728x90--->
	<footer>&copy; 2020 Player hunting. All Rights Reserved | Design & Developed by 
		<a href="/"> NK NAZMUL HAQUE</a>
	</footer>
	<!---728x90--->
</body>
</html>