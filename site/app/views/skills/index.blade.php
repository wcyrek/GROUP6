@extends('layout')

@section('title')
	<title>Skills List</title>
@endsection

@section('content')
	<h1>This is the view of all skills:</h1>
	<ul>
	@foreach($skills as $skill)
		<li>{{ $skill->name }}</li>
	@endforeach
	</ul>
@endsection

