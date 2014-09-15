@extends('layout')

@section('title')
	<title>New Skill</title>
@endsection

@section('content')
	<h1>Create a new skill!</h1>

	{{ Form::open(array('url' => 'skills/new', 'method' => 'POST'))}}
	
	<p>
		{{ Form::label('name', 'Skill Name:') }} <br>
		{{ Form::select('skillstype', $skilltypes, $selected = null, $attributes = array()) }}
	</p>
	{{ Form::submit('Add skill') }}
	{{ Form::close() }}
@endsection

