@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} About
</title>
@endsection


@section('content')

{{ Form::open(array('action' => array('ProfileController@postEditSkills', $profile->id ), 'class' => 'skills-form')) }}


<br>
{{ Form::select('type_id', $skills) }}

{{Form::submit('Add skill')}}


{{ Form::close() }}	
	
<h2> Your skills: </h2>
<ul>
@foreach($profile->skills as $skill)
	<li> 
	{{ Form::open(array('action' => array('ProfileController@deleteSkill', $profile->id ))) }}
	{{ Form::label($skill->name)  }} 
	<i>
		{{ Form::button(null,array('type'=>'submit', 'class'=>'icon-trash')) }}
	</i>
	{{ Form::close() }}
	</li>
@endforeach
</ul>

{{ HTML::linkAction('ProfileController@getProfile', 'back to profile page', array('id' => $profile->id)) }}

@endsection


