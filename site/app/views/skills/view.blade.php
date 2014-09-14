@extends('layout')

@section('title')
	<title>{{ $skill->name }} Skill</title>
@endsection

@section('content')
	<h1>This is the view of {{ $skill->name }} skills:</h1>
	@foreach($skill as $key=>$val)
		<p>{{ $key }}: {{ $val }}</p>
	@endforeach
@endsection

