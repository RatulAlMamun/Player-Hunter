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
			<th scope="col">Appearances</th>
			<th scope="col">Goals</th>
			<th scope="col">Wins</th>
			<th scope="col">Losses</th>
			<th scope="col">Yellow Card</th>
			<th scope="col">Red Card</th>
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
					<td scope="col">{{$player->appearances}}</td>
					<td scope="col">{{$player->goals}}</td>
					<td scope="col">{{$player->wins}}</td>
					<td scope="col">{{$player->losses}}</td>
					<td scope="col">{{$player->yellow}}</td>
					<td scope="col">{{$player->red}}</td>
					<td scope="col">{{$player->rating}}</td>
					<td scope="col">
						<div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Action
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" data-toggle="modal" data-target="#FootballModal{{$player->id}}">Edit</a>
						    <a class="bg-danger dropdown-item" data-toggle="modal" data-target="#deletecareer{{$player->id}}"  href="#">Delete</a>
						  </div>
						</div>
					</td>
				</tr>



				<!-- Football Career Edit Modal -->
				<div class="modal fade" id="FootballModal{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Football Career</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="{{route('editfootballcareer.submit')}}" method="POST">
				      	@csrf
					      <div class="modal-body">
					          <div class="form-group">
					            <label for="date_of_tournament">Date of Tournament</label>
					            <input type="text" name="date_of_tournament" class="form-control" value="{{$player->date_of_tournament}}" id="date_of_tournament" placeholder="e.g. 2019/2020">
					          </div>
					          <div class="form-group">
					            <label for="club">Club</label>
					            <input type="text" name="club" value="{{$player->club}}" class="form-control" id="club" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="appearances">Appearances</label>
					            <input type="text" value="{{$player->appearances}}" name="appearances" class="form-control" id="appearances" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="goals">Goals</label>
					            <input type="text" value="{{$player->goals}}" name="goals" class="form-control" id="goals" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="win">Wins</label>
					            <input type="text" value="{{$player->wins}}" name="wins" class="form-control" id="win" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="loss">Losses</label>
					            <input type="text" value="{{$player->losses}}" name="losses" class="form-control" id="loss" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="yellow">Yellow Card</label>
					            <input type="text" value="{{$player->yellow}}" name="yellow" class="form-control" id="yellow" placeholder="">
					          </div>
					          <div class="form-group">
					            <label for="red">Red Card</label>
					            <input type="text" value="{{$player->red}}" name="red" class="form-control" id="red" placeholder="">
					          </div>
					          <div class="form-row">
    						  	<div class="form-group col-md-4">
      								<label for="shooting">Shooting</label>
      								<input type="text" class="form-control" id="shooting" name="rating1" value="{{ $player->rating1 }}">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="passing">Passing</label>
      								<input type="text" class="form-control" id="passing" name="rating2" value="{{ $player->rating2 }}">
    							</div>
    							<div class="form-group col-md-4">
      								<label for="attacking">Attacking</label>
      								<input type="text" class="form-control" id="attacking" name="rating3" value="{{ $player->rating3 }}">
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
				                <a href='{{url("/removfootballcareer/{$player->id}")}}' class="btn btn-danger rounded-0">Yes</a>
				            </div>
				        </div>
				    </div>
				</div>
			@endforeach	
		@endif
	</tbody>
</table>
 @endsection 