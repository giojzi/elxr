@extends('layouts.sidebar')

@section('content')

@endsection

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		elxr.life
	</title>
	<link rel="stylesheet" href="">
</head>


<body>
	<h2>
		We would love to hear from you!
	</h2>

	<form action="/contact" method="POST" accept-charset="utf-8">
	{!! csrf_field()	!!}

	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	
	<div>
		<label for="">Message</label>
		<textarea name="message" id="" cols="30" rows="10"></textarea>
	</div>

	<div>
		<button type="submit">Contact!</button>
	</div>

	</form>

</body>
</html>