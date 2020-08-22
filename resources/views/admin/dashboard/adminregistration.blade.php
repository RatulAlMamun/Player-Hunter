@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
	<div class="row">
		<div class="col-12 text-center mt-2">
			<h1 class="display-2">Create New Admin</h1>
		</div>
	</div>
	@if(session('adminreg'))
		<div class="row bg-success p-3">
			<div class="col-12">
				<h2 class="text-center">{{ session('adminreg') }}</h2>
			</div>
		</div>
	@endif
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<form action="{{ route('admin.registration.submit') }}" method="POST" class="border border-secondary p-5 mt-4">
				@csrf
				<div class="form-group">
					<label for="name">Your Name</label>
					<input type="text" name="name" class="form-control" id="name" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" required>
				</div>
				<input type="submit" class="btn btn-info" value="Create">
			</form>
		</div>
		<div class="col-3"></div>
	</div>
@endsection