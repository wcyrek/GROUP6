@extends('layout')

@section('title')
	<title>Skills List</title>
@endsection

@section('content')
	<h1>This is the view of all skills:</h1>

	<ul>
	@foreach($skills as $skill)
		<li>{{ HTML::linkRoute('skill', $skill->name, array($skill->id)) }} 
		{{ Form::open(array('url' => 'skills/destroy', 'method' => 'DELETE', 'style' => 'display: inline;')) }}
		{{ Form::hidden('id', $skill->id) }}
		{{ Form::submit('Delete') }}
		{{ Form::close() }}
		</li>
	@endforeach
	</ul>
	<p>{{ HTML::linkRoute('new_skill', 'Add a skill') }}</p>
@endsection

