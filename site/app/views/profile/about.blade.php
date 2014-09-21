@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} About
</title>
@endsection


@section('content')

{{ Form::open(array('action' => 'ProfileController@postEditAbout')) }}
{{ Form::label('first_name', 'First name: ' ) }}
{{ Form::label('middle_name', 'Middle name: ' ) }}
{{ Form::label('last_name', 'Last name: ') }}
{{ Form::label('emai', 'Email: ') }}
{{ Form::label('address', 'Address: ') }}
{{ Form::label('phone', 'Phone: ') }}
{{ Form::close() }}		
	 
@endsection


