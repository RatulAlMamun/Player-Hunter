@extends('admin.dashboard.layouts.playerdashboardlayout')
@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="row row-offcanvas row-offcanvas-right px-5 bg-secondary content-justify-center">
    	@if(session('playeredit'))
    		<div class="row bg-success">
    			<h1>{{ session('playeredit') }}</h1>
    		</div>
    	@endif
        <div class="jumbotron text-center my-5">
            <h1 class="display-1">Welcome To Your Profile</h1>
            <h1 class="display-2 text-info">Hi! {{ $player->name }}</h1>
            <br><br>
            <p class="lead">Here you can edit your profile, show buyer request, post video and so many things.</p>
        </div>
    </div>
</div>
        
@endsection       