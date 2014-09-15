@extends('layout')

@section('title')
	<title>Skills List</title>
@endsection

@section('content')
	<h1>This is the view of all skills:</h1>
	<ul>
	@foreach($skills as $skill)
		<li>{{ HTML::linkRoute('skill', $skill->name, array($skill->id)) }}</li>
	@endforeach
	</ul>
	<p>{{ HTML::linkRoute('new_skill', 'Add a skill') }}</p>
@endsection

