<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- css files -->
	<link href="{{ asset('public/nk/theme/playeregistration/css/style.css') }}" rel='stylesheet' type='text/css' media="all" />
	<!-- /css files -->
	<link href="{{ asset('public/nk/theme/playeregistration/css/wickedpicker.css') }}" rel="stylesheet" type='text/css' media="all" />

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="{{asset('')}}/css/bootstrap.min.css">

	<script type="text/javascript" src="{{ asset('public/nk/theme/playeregistration/js/jquery-2.1.4.min.js') }}"></script>

</head>
<body>
	<div class="w3-banner-main">
		<div class="center-container">
			<h1 class="header-w3ls">Player Hunting Registration Form</h1>
			<!---728x90--->
			<div class="content-top">
				<div class="content-w3ls">
					<form action="{{route('doplayerregistration.submit')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-w3ls">
							<div class="content-wthree1">
								<div class="grid-agileits1">
									<div class="form-control"> 
										<label class="header">Player Name</label>
										<input type="text" id="name" name="name" placeholder="Please enter your Full Name" required>
									</div>

									<div class="form-control">	
										<label class="header">Email </label>
										<input type="email" id="email" name="email" placeholder="Please enter a Valid Email Address" required>
									</div>

									<div class="form-control"> 
										<label class="header">Date of Birth</label>
										<input type="date" id="name" name="date_of_birth" placeholder="" required>
									</div>
									<div class="form-control"> 
										<label class="header">Height</label>
										<input type="text" id="name" name="height"required>
									</div>

									<div class="form-control"> 
										<label class="header">Weight</label>
										<input type="text" id="name" name="weight" required>
									</div>

									<div class="grid-w3layouts1">
										<div class="w3-agile1">
											<label class="rating">Choose Sports</label>
											<ul>
												<li>
													<input type="radio" value="Cricket" id="a-option" name="game_type">
													<label for="a-option">Cricket</label>
													<div class="check"></div>
												</li>
												<li>
													<input type="radio" value="Football" id="b-option" name="game_type">
													<label for="b-option">Football</label>
													<div class="check"><div class="inside"></div></div>
												</li>
											</ul>
										</div>
									</div>	
								</div>
							</div>
						</div>

						<div class="form-w3ls-1">
							<div class="form-control">	
								<label class="header">Phone Number</label>
								<input type="text" id="name" name="phone_no" placeholder="Please enter your Phone Number" required>
							</div>

							<div class="form-control"> 
								<label class="header">Password </label>
								<input type="password" id="name" name="password" placeholder="Please enter your Password" required>
							</div>

							<div class="form-control"> 
								<label class="header">Address </label>
								<input type="text" id="name" name="address" placeholder="Please enter your Address" required>
							</div>

							<div class="form-control"> 
								<label class="header">Nationality</label>
								<input type="text" id="name" name="nationality" placeholder="" required>
							</div>

							<div class="form-control"> 
								<label class="header">Club</label>
								<input type="text" id="name" name="club" placeholder="Your Club Name" required>
							</div>

							<div class="form-control"> 
								<label class="header">Position</label>
								<select name="position" required>
									<option value="Forward">Forward</option>
									<option value="Midfielder">Midfielder</option>
									<option value="Defender">Defender</option>
									<option value="Goalkeeper">Goalkeeper</option>
									<option value="Batsman">Batsman</option>
									<option value="Bowler">Bowler</option>
									<option value="Allrounder">Allrounder</option>
									<option value="Wicketkeeper">Wicketkeeper</option>
								</select>
							</div>

							<div class="form-control">
								<label class="header">Choose Your Profile Image</label>
								<input type="file" id="name" name="player_image" required>
							</div>

							<input type="submit" value="Registration">
						</div>
					</form>
				</div>

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

	<!-- //Calendar -->
	<script type="text/javascript" src="{{ asset('public/nk/theme/playeregistration/js/wickedpicker.js') }}"></script>
	<!-- BOOTSTRAP -->
	<script src="{{asset('')}}/js/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('')}}/js/popper.min.js"></script>
    <script src="{{asset('')}}/js/bootstrap.min.js"></script>
</body>
</html>
