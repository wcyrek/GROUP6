@extends('layout')

@section('title')
	<title>{{ $skilltypes->name }} Skill Type</title>
@endsection

@section('content')
	<h1>This is the view of {{ $skilltypes->name }} skilltypes:</h1>
	<p><b>Name:</b> {{ $skilltypes->name }} </p>
	<br>{{ HTML::linkRoute('skilltypes', 'Back to skilltypes') }}
@endsection

