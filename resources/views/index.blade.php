@extends('layout')

@section('content')
	<div class="mt-3 text-center">
		<h2 css="margin: auto;">Tours</h2>
	</div>
	<div class="p-5  rounded">
		<table class="table">
			<thead>
				<tr>
					<th>Tour Description</th>
					<th>Date</th>
					<th>Location</th>
					<th>Cost</th>
					<th>Image</th>
				</tr>	
			</thead>
			<tbody>
				@foreach ($tours as $tour)
					<tr>
						<td class="w-50">{{ $tour->description }}</td>
						<td>{{ $tour->date }}</td>
						<td>{{ $tour->attraction->location }}</td>
						<td>{{ $tour->cost }}&euro;</td>
						<td>
							<div class="flex-shrink-0">
					        	@if (!empty($tour->attraction->image))
					        		<img src="{{ asset('storage/' . $tour->attraction->image ) }}" alt="" width="120" height="120" class="rounded-xl">
					        	@endif
					    	</div>
					    </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection