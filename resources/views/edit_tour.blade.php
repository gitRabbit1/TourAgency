@extends('layout')

@section('content')
	<div class="mt-3 text-center">
		<h2 css="margin: auto;">Edit Tour </h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form action="/dashboard/tour/{{ $tour->id }}" method="POST">
					@csrf
					@method('patch')
					  <div class="mb-3 mt-3">
					    <label for="description" class="form-label">Description:</label>
					    <textarea name="description" id="description" class="form-control">{{ old('description', $tour->description) }}</textarea>
					    @error('description')
		    				<div class="alert alert-danger" style="padding: 3px;">{{ $message }}</div>
		    			@enderror
					  </div>
					  <div class="mb-3">
					    <label for="cost" class="form-label">Cost:</label>
					    <input type="text" class="form-control" id="cost" placeholder="Enter cost" name="cost" value="{{ old('cost', $tour->cost)  }}">
					    @error('cost')
		    				<div class="alert alert-danger" style="padding: 3px;">{{ $message }}</div>
		    			@enderror
					  </div>
					  <div class="mb-3">
					  	<label for="datepicker" class="col-1 col-form-label">Date:</label>
						<input data-provide="datepicker" name="date" value="{{ old('date', date("Y-m-d", strtotime($tour->date)))  }}" data-date-format="yyyy-mm-dd">
						@error('date')
		    				<div class="alert alert-danger" style="padding: 3px;">{{ $message }}</div>
		    			@enderror
					  </div>
					  <div class="mb-3">
					  	<label for="attraction_id" class="form-label">Location:</label>
					  	<select class="form-select" name="attraction_id" id="attraction_id">
					  		@foreach ($attractions as $attraction)
					  			<option value="{{ $attraction->id }}" {{ old('attraction_id', $tour->attraction_id) == $attraction->id ? 'selected' : '' }}>{{ $attraction->location }}</option>
					  		@endforeach
						</select>
						@error('name')
		    				<div class="alert alert-danger" style="padding: 3px;">{{ $message }}</div>
		    			@enderror
					  </div>
					  <div>
					  	<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
@endsection