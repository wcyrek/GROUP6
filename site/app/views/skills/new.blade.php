@extends('layout')

@section('title')
	<title>New Skill</title>
@endsection

@section('content')
	<h1>Create a new skill!</h1>

	{{ Form::open(array('url' => 'skills/new', 'method' => 'POST'))}}
	
	<p>
		{{ Form::label('name', 'Skill Name:') }} {{ Form::text('name') }}<br>
		{{ Form::select('type_id', $skilltypes, $selected = null, $attributes = array()) }}
	</p>
	{{ Form::submit('Add skill') }}
	{{ Form::close() }}
	<p>{{ HTML::linkRoute('skilltypes', 'Back to skilltypes') }}</p>
	<p>{{ HTML::linkRoute('admin', 'Back to Admin menu') }}</p>
@endsection

