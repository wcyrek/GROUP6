@extends('layout')

@section('title')
	<title> Login </title>
@endsection

@section('content')
	
	<h1>Please login:</h1>
	
	{{ Form::open(array('action' => 'LoginController@postLogin')) }}
    	<p>
    	
    		UCID:     {{ Form::text('username') }}
    		@if ($errors->has('username'))
    			<spam class="error"> {{ $errors->first('username')}} </spam>
    		@endif    		
    		<br>    		
    		Password: {{ Form::password('password') }}
    		@if ($errors->has('password'))
    			<spam class="error"> {{ $errors->first('password') }}</spam>
    		@endif
    		
			
		</p>
	{{ Form::submit('Login') }}
	{{ Form::close() }}

@endsection


