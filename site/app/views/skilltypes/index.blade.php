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
	<p>{{ HTML::linkRoute('new_skilltype', 'Add a skill type') }}</p>
@endsection

