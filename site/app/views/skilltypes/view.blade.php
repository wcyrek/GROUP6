@extends('layout')

@section('title')
	<title>{{ $skilltype->name }} Skill Type</title>
@endsection
@section('menu')
	@include('menu')
@endsection
@section('content')
	<h2>{{ $skilltype->name }}:</h2>
	<div id="badges">
	@foreach($skills as $skill)
	<a href="../skill/{{ $skill->id }}">
		<div id="{{ $skill->id }}" class="noselect badge skill_{{ $skill->id }}">
			<label class="badge_caption">{{ $skill->name }}</label>
		</div>
	</a>
	@endforeach
	</div>
	{{ Form::open(array('url' => 'skilltypes/destroy', 'method' => 'DELETE', 'style' => 'display: inline;')) }}
	{{ Form::hidden('id', $skilltype->id) }}
	{{ Form::submit('Delete') }}
	{{ Form::close() }}
@endsection

