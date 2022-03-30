<!DOCTYPE html>
<html>
<head>
	<title>Tours</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
	
	<script type="text/javascript" src="/app.js"></script>
	<script type="text/css" src="/app.css"></script>
	@if(session()->has('success'))
		<script type="text/javascript">
			$(function(){
				alert('{{ session('success') }}');
			});
		</script>
	@endif
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<header>
		<div class="d-flex flex-row-reverse bg-dark">
			<nav class="navbar navbar-expand-sm navbar-dark">
			  <div class="container-fluid">
			    <ul class="navbar-nav" style="margin-right: 10px;">
			      <li class="nav-item">
			        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">View tours</a>
			      </li>
			      <li class="nav-item">
			        <div class="dropdown">
					  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
					    Dashboard
					  </button>
					  <ul class="dropdown-menu">
					    <li><a class="dropdown-item" href="/dashboard/tours">Tour Management</a></li>
					    <li><a class="dropdown-item" href="/dashboard/attractions">Attraction Management</a></li>
					  </ul>
					</div>
			      </li>
			      <li class="nav-item">
			        @guest
			        	<a class="nav-link" href="/login">Log In</a>
			        @else
			        	<a class="nav-link" href="/logout">Log Out</a>
			        	{{-- <form method="POST" action="/logout" >
			        		@csrf
			        		<button type="submit" class="btn btn-link">Link</button>
			        	</form> --}}
			        @endguest
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<div class="container">
		@yield('content')	
	</div>	
	<footer>

	</footer>
</body>
</html>