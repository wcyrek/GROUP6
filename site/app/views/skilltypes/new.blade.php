@extends('layout')

@section('title')
	<title>New Skill Type</title>
@endsection

@section('content')
	<h1>Create a new skill type!</h1>

	{{ Form::open(array('url' => 'skilltypes/new', 'method' => 'POST'))}}
	
	<p>
		{{ Form::label('name', 'Skill Type Name:') }} {{ Form::text('name') }}
	</p>
	{{ Form::submit('Add skill type') }}
	{{ Form::close() }}
	<br>{{ HTML::linkRoute('skilltypes', 'Back to skilltypes') }}
@endsection

