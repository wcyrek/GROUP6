@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} HomePage
</title>
@endsection


@section('content')

	<h1> {{$profile->ucid }} Profile </h1>
	<h2> Skills </h2>
	<ul>
		@foreach($profile->skills as $skill)
			<li> {{ $skill->name }} </li>
		@endforeach
		
	</ul>	
	@if(Session::get('level') == 'my')	
		{{ HTML::linkRoute('profile_edit', $skill->name, array($skill->id)) }} 
	@endif		
	 
@endsection


