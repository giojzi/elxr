@extends('layouts.main')

@section('content')
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




	<h2 class="contact">
		We would love to hear from you!
	</h2>
<div class="container">
	@if(Session::has('success'))
	    <div class="alert alert-success">
	      {{ Session::get('success') }}
	    </div>
	@endif

	{!! Form::open(['route'=>'contactus.store']) !!}

	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{!! Form::label('Name:') !!} <br>
			{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
			<span class="text-danger">{{ $errors->first('name') }}</span>
		</div>

		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{!! Form::label('Email:') !!} <br>
			{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
			<span class="text-danger">{{ $errors->first('email') }}</span>
		</div>

		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
			{!! Form::label('Message:') !!} <br>
			{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
			<span class="text-danger">{{ $errors->first('message') }}</span>
		</div>
		
		<br>
		<div class="form-group">
			<button class="contact">Contact Us!</button>
		</div>

		<br>

	{!! Form::close() !!}
</div>
</body>
</html>
@endsection

