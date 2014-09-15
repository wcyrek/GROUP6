@extends('layout')

@section('title')
	<title>New Skill</title>
@endsection

@section('content')
	<h1>This is the view of {{ $skill->name }} skills:</h1>
	<p><b>Name:</b> {{ $skill->name }} <b>Type_id:</b> {{ $skill->type_id }}</p>
	<small>Created_at: {{ $skill->created_at }}</small>
	<small>Updated_at: {{ $skill->updated_at }}</small>
	<br>{{ HTML::linkRoute('skills', 'Back to list') }}
@endsection

