@extends('layout')

@section('title')
	<title>{{ $skilltype->name }} Skill Type</title>
@endsection

@section('content')
	<h1>This is the view of {{ $skilltype->name }} skilltypes:</h1>
	<p><b>Name:</b> {{ $skilltype->name }} </p><br>
		{{ Form::open(array('url' => 'skilltypes/destroy', 'method' => 'DELETE', 'style' => 'display: inline;')) }}
		{{ Form::hidden('id', $skilltype->id) }}
		{{ Form::submit('Delete') }}
		{{ Form::close() }}
	<h2>Skills belonging to this type:</h2>
	<div id="badges">
	@foreach($skills as $skill)
	<div id="{{ $skill->id }}" class="noselect badge skill_{{ $skill->id }}">
		<label class="badge_caption">{{ $skill->name }}</label>
	</div>
	@endforeach
	</div>
	<br>{{ HTML::linkRoute('skilltypes', 'Back to skilltypes') }}
@endsection

