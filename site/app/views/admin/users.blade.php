@extends('layout')

@section('title')
	<title>User List</title>
@endsection

@section('content')
	<table class="users">
	@foreach($users as $user)
		<tr><td>{{$user->email}}</td><td>{{$user->firstName}} {{$user->lastName}}</td></tr>
	@endforeach
	</table>
@endsection

