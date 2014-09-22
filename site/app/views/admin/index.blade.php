@extends('layout')

@section('title')
	<title>Admin view</title>
@endsection

@section('content')

	<ul>
		<li>{{ HTML::linkRoute('skills', "Update Skills") }} </li>
		<li>{{ HTML::linkRoute('skilltypes', "Update Skill Types") }} </li>

	</ul>
	<p>{{ HTML::linkRoute('skills', 'Log out') }}</p>
@endsection

