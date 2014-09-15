@extends('layout')

@section('title')
	<title>Skill Types List</title>
@endsection

@section('content')
	<h1>Skill Types:</h1>
	<ul>
	@foreach($skilltypes as $st)
		<li>{{ HTML::linkRoute('skilltypes', $st->name, array($st->id)) }}</li>
	@endforeach
	</ul>
@endsection

