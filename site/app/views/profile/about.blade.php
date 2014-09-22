@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} About
</title>
@endsection


@section('content')

{{ Form::open(array('action' => array('ProfileController@postEditAbout', $profile->id ), 'class' => 'about-form')) }}


{{ Form::label('first_name', 'First name: ' ) }}
{{ Form::text('first_name', $profile->first_name) }} <br>
{{ Form::label('middle_name', 'Middle name: ' ) }}
{{ Form::text('middle_name', $profile->middle_name) }}<br>
{{ Form::label('last_name', 'Last name: ') }}
{{ Form::text('last_name', $profile->last_name) }}<br>
{{ Form::label('email', 'Email: ') }}
{{ Form::text('email', $profile->email) }}<br>
{{ Form::label('address', 'Address: ') }}
{{ Form::text('address', $profile->address) }}<br>
{{ Form::label('phone', 'Phone: ') }}
{{ Form::text('phone', $profile->phone) }}<br>
{{ Form::submit('Save changes') }}

{{ Form::close() }}		
	 
@endsection


