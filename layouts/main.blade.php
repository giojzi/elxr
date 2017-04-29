<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="css/main.css"></script> -->
	<link href="{{ asset('css/main.css') }}" media="all" rel="stylesheet" type="text/css" />
	<!-- <link rel="stylesheet" href="css/main.css"> -->
	{{-- CSS --}}

</head>
<body>
	{{-- JS --}}
	<header>
		<small class="h1">elxr</small><small class="h2">.life</small>
	</header>

	<main>
		@yield('content')
	</main>

	<footer>
		<nav>
		<p class="footer">
		elxr.life
		</p>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact-us">Contact</a></li>
		</ul>
		</nav>
	<div id="footer">
		Copyright: &copy; {{ date('Y') }} elxr.life
</div> 
	</footer>
</body>
</html>

