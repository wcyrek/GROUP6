@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} About
</title>
@endsection


@section('content')

{{ Form::open(array('action' => array('ProfileController@postEditSkills', $profile->id ), 'class' => 'skills-form')) }}
<h2> Your skills: </h2>
@foreach($profile->skills as $skill)
	{{ Form::label('skill', $skill->name ) }}
@endforeach
<br>
{{ Form::select('type_id', $skills) }}

{{Form::submit('Add skill')}}


{{ Form::close() }}		
	 
@endsection


