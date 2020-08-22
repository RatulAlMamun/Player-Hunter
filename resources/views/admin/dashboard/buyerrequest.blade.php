@extends('admin.dashboard.layouts.playerdashboardlayout')
@section('content')
	<div class="row my-4">
		<div class="col-12">
			<h1 class="display-2">Buyer Request List</h1>
		</div>
	</div>
	@if(session('deleter'))
	<div class="row bg-danger p-3">
		<div class="col-12">
			<h1 class="lead">{{ session('deleter') }}</h1>
		</div>
	</div>
	@endif

	@if(session('mail'))
	<div class="row bg-success p-3 text-white font-weight-bold">
		<div class="col-12">
			<h1 class="lead">{{ session('mail') }}</h1>
		</div>
	</div>
	@endif
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Buyer Name</th>
	      <th scope="col">Buyer Club</th>
	      <th scope="col">Message</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@if(!empty($buyerrequest))
	  	@foreach($buyerrequest as $br)
	    <tr>
	      <th scope="row">{{ $br->id }}</th>
	      <td>{{ $br->buyer->name }}</td>
	      <td>{{ $br->buyer->club }}</td>
	      <td>{{ $br->request_message }}</td>
	      <td>
	      	<a href="#" class="btn btn-success" data-toggle="modal" data-target="#mailmodal{{ $br->id }}">Accept</a>
	      	<a href="{{ route('delete.request', ['id' => $br->id]) }}" class="btn btn-danger">Delete</a>
	      	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#reportmodal{{ $br->id }}">Report</a>
	      </td>
	    </tr>

	    <!-- SEND MAIL MODAL -->
	    <div class="modal fade" id="mailmodal{{ $br->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	      	<div class="modal-dialog" role="document">
	        	<div class="modal-content">
	          		<div class="modal-header">
	            		<h1 class="modal-title" id="exampleModalLongTitle">Send Your Message</h1>
	            		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              			<span aria-hidden="true">&times;</span>
	            		</button>
	          		</div>
	          		<form method="POST" action="{{ url('/sendmail') }}">
	          			@csrf
	          			<div class="modal-body">
	          				<div class="form-group">
	          				    <label for="message">Your Message</label>
	          				    <textarea id="message" name="message" rows="6" class="form-control" required></textarea>
	          				</div>
	          				<input type="hidden" name="player_name" value="{{ $player->name }}">
	          				<input type="hidden" name="buyer_mail" value="{{ $br->buyer->email }}">
	          				<input type="hidden" name="buyer_name" value="{{ $br->buyer->name }}">
	          			</div>
	          			<div class="modal-footer">
	            			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            			<button type="submit" class="btn btn-primary">Send Mail</button>
	          			</div>
	          		</form>
	        	</div>
	      	</div>
	    </div>



	    <!-- SEND REPORT MODAL -->
	    <div class="modal fade" id="reportmodal{{ $br->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	      	<div class="modal-dialog" role="document">
	        	<div class="modal-content">
	          		<div class="modal-header">
	            		<h1 class="modal-title" id="exampleModalLongTitle">Send Report To Admin</h1>
	            		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              			<span aria-hidden="true">&times;</span>
	            		</button>
	          		</div>
	          		<form method="POST" action="{{ url('/sendreport') }}">
	          			@csrf
	          			<div class="modal-body">
	          				<div class="form-group">
	          				    <label for="message">Your Message</label>
	          				    <textarea id="message" name="message" rows="6" class="form-control" required></textarea>
	          				</div>
	          				<input type="hidden" name="player_id" value="{{ $player->id }}">
	          				<input type="hidden" name="buyer_id" value="{{ $br->buyer->id }}">
	          			</div>
	          			<div class="modal-footer">
	            			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            			<button type="submit" class="btn btn-primary">Send Report</button>
	          			</div>
	          		</form>
	        	</div>
	      	</div>
	    </div>
	    @endforeach
	    @endif
	  </tbody>
	</table>
@endsection