@extends('admin.dashboard.layouts.playerdashboardlayout')
@section('content')
	<div class="row mt-3">
		<div class="col-9">
			<h1 class="display-2">My Videos</h1>
		</div>
		<div class="col-3">
			<button class="btn btn-dark text-white btn-lg" data-toggle="modal" data-target="#addvideo" style="font-size: 22px;">
				<i class="mdi mdi-plus-circle"></i> Add Video
			</button>
		</div>
	</div>

	@if(session('videouploaded'))
		<div class="row bg-success px-5 py-1">
			<div class="col-12">
				<h1>{{ session('videouploaded') }}</h1>
			</div>
		</div>
	@endif

	@if(session('removevideo'))
		<div class="row bg-danger px-5 py-1 text-white">
			<div class="col-12">
				<h1>{{ session('removevideo') }}</h1>
			</div>
		</div>
	@endif

	
	@if(!empty($videos))
		@foreach($videos as $video)
			<hr>
			<div class="row">
				<div class="col-6">
					<h2>{{ $video->title }}</h2>
				</div>
				<div class="col-4 justify-content-center">
					<button class="btn btn-warning" data-toggle="modal" data-target="#playvideo{{$video->id}}">
						<i class="display-4 mdi mdi-play-circle-outline"></i>
					</button>
				</div>
				<div class="col-2">
					<a href="{{ route('rplayervideo', ['id' => $video->id, 'player_id' => $video->player_id]) }}" class="btn btn-danger"><i class="mdi mdi-delete"></i>  Delete</a>
				</div>
			</div>


			<!-- Video modal -->
			<div class="modal" id="playvideo{{$video->id}}" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{{ $video->title }}</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<video class="img-fluid" controls>
								<source src="{{ asset('public/videos/'.$video->video) }}" type="video/mp4">
							  Your browser does not support the video tag.
							</video> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	@endif




	<!-- Add Video Modal -->
	<div class="modal" id="addvideo" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Your Video</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="{{ route('addvideo.submit') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="modal-body">
						<div class="form-group">
						    <label for="title">Video Title</label>
						    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Video Title">
						</div>
						<div class="form-group">
							<label>Your Video</label>
							<div class="custom-file">
								<input type="file" name="video" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Upload a Video</label>
							</div>
						</div>
						<div class="form-group">
							<label>Video Poster</label>
							<div class="custom-file">
								<input type="file" name="poster" class="custom-file-input" id="customFile2">
								<label class="custom-file-label" for="customFile2">Upload a Poster for Video</label>
							</div>
						</div>
					</div>
					<input type="hidden" name="id" value="{{ $player->id }}">
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	
@endsection  