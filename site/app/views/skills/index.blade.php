@extends('layout')

@section('title')
	<title>Skills List</title>
@endsection

@section('content')
	<h2>Available Skills:</h2>

	<ul>
	@foreach($skills as $skill)
		<li>
			@if (Auth::user()->admin)
				[{{ HTML::linkAction('SkillsController@deleteSkill', 'X', array('id' => $skill->id)) }}] 
			@endif
			{{ HTML::linkRoute('skill', $skill->name, array($skill->id)) }} 
		</li>
	@endforeach
	</ul>
	@if (Auth::user()->admin)	
		{{ Form::open(array('url' => 'skills/new', 'method' => 'POST'))}}	
		{{ Form::label('name', 'Skill Name:') }} {{ Form::text('name') }}
		{{ Form::select('type_id', $skilltypes, $selected = null, $attributes = array()) }}
		{{ Form::submit('Add skill') }}
		{{ Form::close() }}
	@endif
@endsection

