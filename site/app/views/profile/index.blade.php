@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} HomePage
</title>
@endsection

@if(Session::get('level') == 'my')
	@section('content')
		var_dump($profile);
	@endsection
@else
	@section('content')
		{{ 
			var_dump($profile);
			
		
		 }}
	@endsection
@endif

