@extends('layout')

@section('title')
	<title>{{ $skill->name }} Skill</title>
@endsection

@section('content')
	<h1>This is the view of {{ $skill->name }} skills:</h1>
	<p>Name: {{ $skill->name }}</p>
	<p>Type_id: {{ $skill->type_id }}</p>
	<small>Created_at: {{ $skill->created_at }}</small>
	<small>Updated_at: {{ $skill->updated_at }}</small>
	
@endsection

