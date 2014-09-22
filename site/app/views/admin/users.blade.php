@extends('layout')

@section('title')
	<title>User List</title>
@endsection

@section('content')
	<table class="users">
	@foreach($users as $user)
		<tr>
			<td><a href="./profile/{{$user->id}}">{{$user->email}}</a></td>
			<td>{{$user->firstName}} {{$user->lastName}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->address}}</td>
		</tr></a>
	@endforeach
	</table>
@endsection

