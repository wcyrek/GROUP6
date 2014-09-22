@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} HomePage
</title>
@endsection


@section('content')
	<h2>Profile for user {{$profile->ucid }}</h2>	
	<table>
	@if(!empty($profile->first_name))
		<tr><td class="right">First name:</td><td>{{ $profile->first_name }}</td></tr>
	@endif
	@if(!empty($profile->middle_name))
		<tr><td class="right">Middle name:</td><td>{{ $profile->middle_name }}</td></tr>
	@endif
	@if(!empty($profile->last_name))
		<tr><td class="right">Last Name:</td><td>{{ $profile->last_name }}</td></tr>
	@endif
	@if(!empty($profile->email))
		<tr><td class="right">Email:</td><td>{{ $profile->email }}</td></tr>
	@endif
	@if(!empty($profile->address))
		<tr><td class="right">Address:</td><td>{{ $profile->address }}</td></tr>
	@endif
	@if(!empty($profile->phone))
		<tr><td class="right">Phone:</td><td>{{ $profile->phone }}</td></tr>
	@endif
	@if($level == 'my')	
		<tr><td>{{ HTML::linkAction('ProfileController@getEditAbout', 'edit', array('id' => $profile->id)) }}</td></tr>	
	@endif	
	</table>
	
	<h3 style="display:inline-block; padding-top: 10px">Skills:</h3>
	@if($level == 'my')	
		{{ HTML::linkAction('ProfileController@getEditSkills', 'edit', array('id' => $profile->id)) }}
		
	@endif	
		
	<div id="badges">
	@foreach($profile->skills as $skill)
		<div id="{{ $skill->id }}" class="noselect badge skill_{{ $skill->id%5+1 }}">
			<label class="badge_caption">{{ $skill->name }}</label>
		</div>
	@endforeach
	</div>
	 
@endsection


