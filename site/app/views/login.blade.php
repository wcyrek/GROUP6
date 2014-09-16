@extends('layout')

@section('title')
	<title> Login </title>
@endsection

@section('content')
	<h1>Please login:</h1>
	
	{{ Form::open(array('url' => 'LoginController@postLogin')) }}
    	<p>
    		UCID: {{ Form::text('username') }}<br>
    		Password: {{ Form::password('password') }}
			
		</p>
	{{ Form::submit('Login') }}
	{{ Form::close() }}

@endsection


