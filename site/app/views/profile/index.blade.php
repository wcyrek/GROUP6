@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} HomePage
</title>
@endsection


@section('content')
	<h1> {{$profile->ucid }} Profile </h1>
	<h2 style="display:inline;"> About </h2> 
	@if($level == 'my')	
		{{ HTML::linkAction('ProfileController@getEditAbout', 'edit', array('id' => $profile->id)) }}
		
	@endif		
	
	<ul>
	
	@if(!empty($profile->first_name))
		<li> {{ $profile->first_name }} </li>
		@if(!empty($profile->middle_name))
			<li> {{ $profile->middle_name }} </li>
		@endif
		@if(!empty($profile->last_name))
			<li> {{ $profile->last_name }} </li>
		@endif
	@endif
	
	@if(!empty($profile->email))
			<li> {{ $profile->email }} </li>
	@endif
	
	@if(!empty($profile->address))
			<li> {{ $profile->address }} </li>
	@endif
	
	@if(!empty($profile->phone))
			<li> {{ $profile->phone }} </li>
	@endif
	</ul>
	
	<h2 style="display:inline;"> Skills </h2>
	@if($level == 'my')	
		<a>Edit</a>
	@endif
	
	<ul>
		@foreach($profile->skills as $skill)
			<li> {{ $skill->name }} </li>
		@endforeach
		
	</ul>	
			
	 
@endsection


