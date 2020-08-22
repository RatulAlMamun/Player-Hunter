@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
	@if(session('editcareer'))
		<div class="bg-success p-3">
			<h1>{{session('editcareer')}}</h1>
		</div>
	@endif
<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Player ID</th>
			<th scope="col">Club</th>
			<th scope="col">Date of Tournament</th>
			<th scope="col">Play Off</th>
			<th scope="col">Runs</th>
			<th scope="col">Wickets</th>
			<th scope="col">Catch Misses</th>
			<th scope="col">Rating</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@if(!empty($players))
			@foreach($players as $player)
				<tr>
					<th scope="col">{{$player->player_id}}</th>
					<td scope="col">{{$player->club}}</td>
					<td scope="col">{{$player->date_of_tournament}}</td>
					<td scope="col">{{$player->play_off}}</td>
					<td scope="col">{{$player->runs}}</td>
					<td scope="col">{{$player->wickets}}</td>
					<td scope="col">{{$player->catch_misses}}</td>
					<td scope="col">{{$player->rating}}</td>
					<td scope="col">
						<div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Action
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" data-toggle="modal" data-target="#CricketModal{{$player->id}}">Edit</a>
						    <a class="bg-danger dropdown-item" data-toggle="modal" data-target="#deletecareer{{$player->id}}"  href="#">Delete</a>
						  </div>
						</div>
					</td>
				</tr>



				<!-- Cricket Career Edit Modal -->
				<div class="modal fade" id="CricketModal{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Edit Cricket Career</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="{{route('editcricketcareer.submit')}}" method="POST">
				      	@csrf
					      <div class="modal-body">
					        <div class="form-group">
					          <label for="date_of_tournament">Date of Tournament</label>
					          <input type="text" value="{{$player->date_of_tournament}}" name="date_of_tournament" class="form-control" id="date_of_tournament" placeholder="e.g. 2019/2020">
					        </div>
					        <div class="form-group">
					          <label for="club">Club</label>
					          <input type="text" name="club" value="{{$player->club}}" class="form-control" id="club" placeholder="">
					        </div>
					        <div class="form-group">
					          <label for="play_off">Play Off</label>
					          <input type="text" value="{{$player->play_off}}" name="play_off" class="form-control" id="play_off" placeholder="">
					        </div>
					        <div class="form-group">
					          <label for="runs">Runs</label>
					          <input type="text" value="{{$player->runs}}" name="runs" class="form-control" id="runs" placeholder="">
					        </div>
					        <div class="form-group">
					          <label for="wickets">Wickets</label>
					          <input type="text" value="{{$player->wickets}}" name="wickets" class="form-control" id="wickets" placeholder="">
					        </div>
					        <div class="form-group">
					          <label for="catch_misses">Catch Misses</label>
					          <input type="text" value="{{$player->catch_misses}}" name="catch_misses" class="form-control" id="catch_misses" placeholder="">
					        </div>
					        <div class="form-row">
    						  	<div class="form-group col-md-4">
      								<label for="batting">Batting</label>
      								<input type="text" class="form-control" id="batting" name="rating1" value="{{$player->rating1}}">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="bowling">Bowling</label>
      								<input type="text" class="form-control" id="bowling" name="rating2" value="{{$player->rating2}}">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="fielding">Fielding</label>
      								<input type="text" class="form-control" id="fielding" name="rating3" value="{{$player->rating3}}">
    							</div>
							</div>
					        <input type="hidden" name="id" value="{{$player->id}}">
					        <input type="hidden" name="player_id" value="{{$player->player_id}}">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save Career</button>
					      </div>
				  	  </form>
				    </div>
				  </div>
				</div>


				<!-- Football Career Delete Modal -->
				<div class="modal fade" id="deletecareer{{$player->id}}">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h4 class="modal-title">Delete Career</h4>
				                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				            </div>
				            <div class="modal-body">
				                <p class="lead">Are You Sure to Delete This?</p>
				            </div>
				            <div class="modal-footer">
				                <button class="btn btn-success rounded-0" type="button" data-dismiss="modal">No</button>
				                <a href='{{url("/removcricketcareer/{$player->id}")}}' class="btn btn-danger rounded-0">Yes</a>
				            </div>
				        </div>
				    </div>
				</div>
			@endforeach	
		@endif
	</tbody>
</table>
 @endsection 