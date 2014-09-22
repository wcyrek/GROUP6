@extends('layout')

@section('title')
	<title>Skill Types List</title>
@endsection

@section('content')
	<h1>Skill Types:</h1>
	<ul>
	@foreach($skilltypes as $skilltype)
		<li>{{ HTML::linkRoute('skilltype', $skilltype->name, array($skilltype->id)) }}</li>
	@endforeach
	</ul>
	{{ Form::open(array('url' => 'skilltypes/new', 'method' => 'POST'))}}
	{{ Form::label('name', 'Skill Type Name:') }} {{ Form::text('name') }}
	{{ Form::submit('Add skill type') }}
	{{ Form::close() }}
@endsection

