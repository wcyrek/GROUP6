@extends('layout')

@section('title')
	<title> Login </title>
@endsection

@section('content')
	<div class="login_form padding_20">
	<h3>Please Login</h3>
	{{ Form::open(array('action' => 'LoginController@postLogin')) }}
    	<table class="full">
    		<tr><td class="right fifty">UCID:</td><td>{{ Form::text('username') }}</td></tr>
    		@if ($errors->has('username'))
    			</table><div class="full error center"> {{ $errors->first('username')}} </div><table class="full">
    		@endif   		 		
    		<tr><td class="right fifty">Password:</td><td>{{ Form::password('password') }}</td></tr>
    		@if ($errors->has('password'))
    			</table><div class=" full error center">{{ $errors->first('password') }}</div><table class="full">
    		@endif
			<tr><td></td><td class="right">{{ Form::submit('Login') }}</td></tr>
		</table>
	{{ Form::close() }}
	</div>
@endsection


