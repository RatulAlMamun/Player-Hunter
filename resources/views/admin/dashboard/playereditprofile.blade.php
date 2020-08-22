@extends('admin.dashboard.layouts.playerdashboardlayout')
@section('content')
<form action="{{route('editplayer.submit')}}" enctype="multipart/form-data" method="POST" class="px-5 mb-5" style="background: #eee;">
	@csrf
	<div class="row">
		<div class="col-12 text-center mt-2">
			<h1 class="display-2">Edit Your Profile Here</h1>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="name">Your Name</label>
				<input type="text" name="name" class="form-control" id="name" value="{{$player->name}}">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email" value="{{$player->email}}">
			</div>
			<div class="form-group">
				<label for="date_of_birth">Date of Birth</label>
				<input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{$player->date_of_birth}}">
			</div>
			<div class="form-group">
				<label for="height">Height</label>
				<input type="text" name="height" class="form-control" id="height" value="{{$player->height}}">
			</div>
			<div class="form-group">
				<label for="weight">Weight</label>
				<input type="text" name="weight" class="form-control" id="weight" value="{{$player->weight}}">
			</div>
			<div class="form-group">
				<label for="nationality">Nationality</label>
				<input type="text" name="nationality" class="form-control" id="nationality" value="{{$player->nationality}}">
			</div>
			<div class="form-group">
				<label for="sports">Sports</label>
				<br>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" value="Football" id="football" name="game_type" class="custom-control-input" <?php if($player->game_type == 'Football'){echo "checked";} ?> >
					<label class="custom-control-label" for="football">Football</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" value="Cricket" id="cricket" name="game_type" class="custom-control-input" <?php if($player->game_type == 'Cricket'){echo "checked";} ?> >
				  <label class="custom-control-label" for="cricket">Cricket</label>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label for="position">Position</label>
				<input type="text" name="position" class="form-control" id="position" value="{{$player->position}}">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="password" required="true">
			</div>
			<div class="form-group">
				<label for="phone_no">Phone No</label>
				<input type="text" name="phone_no" class="form-control" id="phone_no" value="{{$player->phone_no}}">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" class="form-control" id="address" value="{{$player->address}}">
			</div>
			<div class="form-group">
				<label for="club">Club</label>
				<input type="text" name="club" class="form-control" id="club" value="{{$player->club}}">
			</div>
			<div class="form-group">
				<label>Profile Image</label>
				<div class="custom-file">
				  <input type="file" name="player_image" class="custom-file-input" id="customFile">
				  <label class="custom-file-label" for="customFile">Choose Your Image</label>
				</div>
			</div>
			<input type="hidden" name="oldimage" value="{{$player->player_image}}">
			<input type="hidden" name="id" value="{{$player->id}}">
			<div class="form-group">
				<input type="submit" value="Save" class="btn btn-primary btn-lg">
			</div>
		</div>
	</div>
</form>	
@endsection   