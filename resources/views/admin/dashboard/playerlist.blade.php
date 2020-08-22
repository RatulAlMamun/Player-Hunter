@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
	@if(session('doaddcareer'))
		<div class="bg-success p-3">
			<h2>{{session('doaddcareer')}}</h2>
		</div>
	@endif

	@if(session('rplayer'))
		<div class="bg-success p-3">
			<h2>{{session('rplayer')}}</h2>
		</div>
	@endif
<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">id</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Picture</th>
			<th scope="col">Nationality</th>
			<th scope="col">Club</th>
			<th scope="col">Position</th>
			<th scope="col">Address</th>
			<th scope="col">Phone</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@if(!empty($players))
			@foreach($players as $player)
				<tr>
					<th scope="col">{{ $player->id }}</th>
					<td scope="col">{{ $player->name }}</td>
					<td scope="col">{{ $player->email }}</td>
					<td scope="col">
						<img src="{{asset('public/uploads/'.$player->player_image)}}" class="img-fluid">
					</td>
					<td scope="col">{{ $player->nationality }}</td>
					<td scope="col">{{ $player->club }}</td>
					<td scope="col">{{ $player->position }}</td>
					<td scope="col">{{ $player->address }}</td>
					<td scope="col">{{ $player->phone_no }}</td>
					<td scope="col">
						<div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Action
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" data-toggle="modal" data-target="#{{$player->game_type}}Modal{{$player->id}}">Career</a>
						    <a class="bg-danger dropdown-item" data-toggle="modal" data-target="#deletecareer{{$player->id}}"  href="#">Delete</a>
						  </div>
						</div>
					</td>
				</tr>


				<!-- Football Modal -->
				<div class="modal fade" id="FootballModal{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Add Career of {{$player->name}}</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="{{route('addfootballcareer.submit')}}" method="POST">
				      	@csrf
					      <div class="modal-body">
					          <div class="form-group">
					            <label for="date_of_tournament">Date of Tournament</label>
					            <input type="text" name="date_of_tournament" class="form-control" id="date_of_tournament" placeholder="e.g. 2019/2020">
					          </div>
					          <div class="form-group">
					            <label for="club">Club</label>
					            <input type="text" name="club" value="{{$player->club}}" class="form-control" id="club" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="appearances">Appearances</label>
					            <input type="text" name="appearances" class="form-control" id="appearances" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="goals">Goals</label>
					            <input type="text" name="goals" class="form-control" id="goals" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="win">Wins</label>
					            <input type="text" name="wins" class="form-control" id="win" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="loss">Losses</label>
					            <input type="text" name="losses" class="form-control" id="loss" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="yellow">Yellow Card</label>
					            <input type="text" name="yellow" class="form-control" id="yellow" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="red">Red Card</label>
					            <input type="text" name="red" class="form-control" id="red" placeholder="">
					          </div>
  							  <div class="form-row">
    						  	<div class="form-group col-md-4">
      								<label for="shooting">Shooting</label>
      								<input type="text" class="form-control" id="shooting" name="rating1">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="passing">Passing</label>
      								<input type="text" class="form-control" id="passing" name="rating2">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="attacking">Attacking</label>
      								<input type="text" class="form-control" id="attacking" name="rating3">
    							</div>
							  </div>
					          <input type="hidden" name="player_id" value="{{$player->id}}">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save Career</button>
					      </div>
					   </form>
				    </div>
				  </div>
				</div>

				<!-- Cricket Modal -->
				<div class="modal fade" id="CricketModal{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Add Career of {{$player->name}}</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="{{route('addcricketcareer.submit')}}" method="POST">
				      	@csrf
					      <div class="modal-body">
					        <div class="form-group">
					          <label for="date_of_tournament">Date of Tournament</label>
					          <input type="text" name="date_of_tournament" class="form-control" id="date_of_tournament" placeholder="e.g. 2019/2020">
					        </div>
					        <div class="form-group">
					          <label for="club">Club</label>
					          <input type="text" name="club" value="{{$player->club}}" class="form-control" id="club" placeholder="">
					        </div>
					        <div class="form-group">
					          <label for="play_off">Play Off</label>
					          <input type="text" name="play_off" class="form-control" id="play_off" placeholder="">
					        </div>
					        <div class="form-group">
					            <label for="appearances">Appearances</label>
					            <input type="text" name="appearances" class="form-control" id="appearances" placeholder="">
					          </div>
					        <div class="form-group">
					          <label for="runs">Runs</label>
					          <input type="text" name="runs" class="form-control" id="runs" placeholder="">
					        </div>
					        <div class="form-group">
					          <label for="wickets">Wickets</label>
					          <input type="text" name="wickets" class="form-control" id="wickets" placeholder="">
					        </div>
					        <div class="form-group">
					          <label for="catch_misses">Catch Misses</label>
					          <input type="text" name="catch_misses" class="form-control" id="catch_misses" placeholder="">
					        </div>
					        <div class="form-row">
    						  	<div class="form-group col-md-4">
      								<label for="batting">Batting</label>
      								<input type="text" class="form-control" id="batting" name="rating1">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="bowling">Bowling</label>
      								<input type="text" class="form-control" id="bowling" name="rating2">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="fielding">Fielding</label>
      								<input type="text" class="form-control" id="fielding" name="rating3">
    							</div>
							</div>
					        <input type="hidden" name="player_id" value="{{$player->id}}">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save Career</button>
					      </div>
				  	  </form>
				    </div>
				  </div>
				</div>


				<!-- Player Delete Modal -->
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
				                <a href='{{url("/removeplayer/{$player->id}/{$player->game_type}")}}' class="btn btn-danger rounded-0">Yes</a>
				            </div>
				        </div>
				    </div>
				</div>
			@endforeach	
		@endif
	</tbody>
</table>
 @endsection 