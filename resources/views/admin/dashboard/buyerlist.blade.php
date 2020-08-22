@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
	@if(session('rbuyer'))
		<div class="bg-success p-3">
			<h1>{{session('rbuyer')}}</h1>
		</div>
	@endif
<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Buyer ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Phone No</th>
			<th scope="col">Adress</th>
			<th scope="col">Club</th>
			<th scope="col">Sports</th>
			<th scope="col">Joining Date</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@if(!empty($buyers))
			@foreach($buyers as $buyer)
				<tr>
					<th scope="col">{{ $buyer->id }}</th>
					<td scope="col">{{ $buyer->name }}</td>
					<td scope="col">{{ $buyer->email }}</td>
					<td scope="col">{{ $buyer->phone_no }}</td>
					<td scope="col">{{ $buyer->address }}</td>
					<td scope="col">{{ $buyer->club }}</td>
					<td scope="col">{{ $buyer->sports }}</td>
					<td scope="col">{{ $buyer->created_at }}</td>
					<td scope="col">
						<a class="btn btn-danger text-white" data-toggle="modal" data-target="#deletebuyer{{$buyer->id}}">Delete</a>
					</td>
				</tr>


				<!-- Buyer Delete Modal -->
				<div class="modal fade" id="deletebuyer{{$buyer->id}}">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h4 class="modal-title">Delete Buyer</h4>
				                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				            </div>
				            <div class="modal-body">
				                <p class="lead">Are You Sure to Delete This?</p>
				            </div>
				            <div class="modal-footer">
				                <button class="btn btn-success rounded-0" type="button" data-dismiss="modal">No</button>
				                <a href="{{ route('buyer.delete', ['id' => $buyer->id]) }}" class="btn btn-danger rounded-0">Yes</a>
				            </div>
				        </div>
				    </div>
				</div>
			@endforeach	
		@endif
	</tbody>
</table>
 @endsection 