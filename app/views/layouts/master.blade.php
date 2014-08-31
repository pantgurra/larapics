<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Larapics</title>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		{{ HTML::style('css/style.css') }}
	</head>
	<body>
		@include('partials/_topbar')
		<div class="content">
			@include('partials/_messages')
			@yield('content')
		</div>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>