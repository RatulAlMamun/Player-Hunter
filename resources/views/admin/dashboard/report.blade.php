@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
	<table class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Buyer Name</th>
				<th scope="col">Buyer Email</th>
				<th scope="col">Buyer Club</th>
				<th scope="col">Player Name</th>
				<th scope="col">Player Email</th>
				<th scope="col">Player Club</th>
				<th scope="col">Message</th>
			</tr>
		</thead>
		<tbody>
			@if(!empty($reports))
				@foreach($reports as $report)
					<tr>
						<th scope="col">{{ $report->buyer->name }}</th>
						<td scope="col">{{ $report->buyer->email }}</td>
						<td scope="col">{{ $report->buyer->club }}</td>
						<td scope="col">{{ $report->player->name }}</td>
						<td scope="col">{{ $report->player->email }}</td>
						<td scope="col">{{ $report->player->club }}</td>
						<td scope="col">{{ $report->message }}</td>
					</tr>
				@endforeach	
			@endif
		</tbody>
	</table>
@endsection