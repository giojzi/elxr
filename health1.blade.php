@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<!-- <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css"/>
 
		<link href="{!! 'http://fonts.googleapis.com/css?family=avenir next' !!}" media="all" rel="stylesheet" type="text/css" /> -->

	</head>
	<body>
<script src="https://unpkg.com/vue"></script>

<div v-cloak id="quizz" class="question">
    <h2>
      @{{ currentQuestion.question }}
    </h2>
    <component :key="currentQuestion" :is="currentQuestion.type" :question="currentQuestion" v-model="currentQuestion.answer"></component>
    
    <br>
<button class='prev' id='prev'><a href='#' @click="previous">BACK</a></button>
<button class='next' id='next'><a href='#' @click="next">NEXT</a></button>
</div>
		<br>
<script type="text/javascript" src="{{ asset('js/quizz.js') }}"></script>
</body>
</html>
<br>

@endsection