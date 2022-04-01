@extends('layout')

@section('content')
	<div class="mt-3 text-center">
		<h2 css="margin: auto;">Log In Form</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form action="/login" method="POST">
					@csrf
					  <div class="mb-3 mt-3">
					    <label for="email" class="form-label">Email:</label>
					    <input name="email" id="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
					    @error('email')
		    				<div class="alert alert-danger" style="padding: 3px;">{{ $message }}</div>
		    			@enderror
					  </div>
					  <div class="mb-3">
					    <label for="password" class="form-label">Password:</label>
					    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{ old('password')  }}">
					    @error('password')
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