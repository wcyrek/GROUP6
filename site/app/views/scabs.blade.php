@extends('layout')

@section('content')
	@foreach($scabs as $scab)
		<p>{{ $scab->name }}</p>
	@endforeach
@stop
