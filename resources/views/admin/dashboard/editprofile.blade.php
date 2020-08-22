@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
	<div class="row">
		<div class="col-12 text-center mt-2">
			<h1 class="display-2">Edit Your Profile Here</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<form action="{{ route('editadmin') }}" method="POST" class="border border-secondary p-5 mt-4">
				@csrf
				<div class="form-group">
					<label for="name">Your Name</label>
					<input type="text" name="name" class="form-control" id="name" value="{{ $admin->name }}">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" value="{{ $admin->email }}">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" required>
				</div>
				<input type="hidden" name="id" value="{{ $admin->id }}">
				<input type="submit" class="btn btn-info" value="Save">
			</form>
		</div>
		<div class="col-3"></div>
	</div>
@endsection