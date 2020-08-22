@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
	@if(session('rmsg'))
		<div class="bg-danger p-3">
			<h1 class="lead text-white">{{ session('rmsg') }}</h1>
		</div>
	@endif
	@if(session('mail'))
		<div class="bg-success p-3">
			<h1 class="lead text-white">{{ session('mail') }}</h1>
		</div>
	@endif
	@if(!empty($contacts))
		@foreach($contacts as $contact)
			<div class="row mt-3">
				<div class="col-12">
					<div class="card">
					  	<div class="card-header d-flex justify-content-between">
					  		<div>
						    	<h1>{{ $contact->name }}</h1>
						    	<p>{{ $contact->email }}</p>
					  		</div>
					    	<div>
					    		<small class="text-muted">{{ $contact->created_at->format('d F Y') }}</small>
					    		<p class="">Address: {{ $contact->address }}</p>
					    	</div>
					  	</div>
					  	<div class="card-body d-flex justify-content-between">
					    	<p class="card-text">{{ $contact->message }}</p>
					    	<div>
					    		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#mailmodal{{ $contact->id }}">Reply</a>
					    		<a href="{{ route('deletemsg', ['id'=>$contact->id]) }}" class="btn btn-danger">Delete</a>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>

			<!-- SEND MAIL MODAL -->
			<div class="modal fade" id="mailmodal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  	<div class="modal-dialog" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h1 class="modal-title" id="exampleModalLongTitle">Send Your Message</h1>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<form method="POST" action="{{ url('messages/sendmail') }}">
			      			@csrf
			      			<div class="modal-body">
			      				<div class="form-group">
			      				    <label for="message">Your Message</label>
			      				    <textarea id="message" name="message" rows="6" class="form-control" required></textarea>
			      				</div>
			      				<input type="hidden" name="sender_name" value="{{ $contact->name }}">
			      				<input type="hidden" name="sender_mail" value="{{ $contact->email }}">
			      			</div>
			      			<div class="modal-footer">
			        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        			<button type="submit" class="btn btn-primary">Send Mail</button>
			      			</div>
			      		</form>
			    	</div>
			  	</div>
			</div>
		@endforeach
	@endif
@endsection