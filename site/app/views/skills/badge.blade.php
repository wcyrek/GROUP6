@extends('layout')

@section('title')
	<title>Skills List</title>
@endsection

@section('content')
	<div id="badges">
	@foreach($skills as $skill)
		<div id="{{ $skill->id }}" class="noselect badge skill_{{ $skill->id%5+1 }}">
			<label class="badge_caption">{{ $skill->name }}</label>
		</div>
	@endforeach
	</div>
@endsection

