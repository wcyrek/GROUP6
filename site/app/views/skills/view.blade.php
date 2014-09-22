@extends('layout')

@section('title')
	<title>{{ $skill->name }} Skill</title>
@endsection

@section('content')

	<h2>
	@if (Auth::user()->admin)
	[{{ HTML::linkAction('SkillsController@deleteSkill', 'X', array('id' => $skill->id)) }}] 
	@endif
	{{ $skill->name }} ({{ HTML::linkRoute('skilltype', $skilltype->name, array($skilltype->id)) }}):</h2>
	<div id="badges">
		<div id="{{ $skill->id }}" class="noselect badge skill_{{ $skill->id%5+1 }}">
			<label class="badge_caption">{{ $skill->name }}</label>
		</div>
	</div>
	<br>
	<p><b>Users with this skill:<br /></b>
	@foreach($users as $user)
		{{ HTML::linkRoute('profile', $user->first_name.' '.$user->last_name, array($user->id)) }}<br>
	@endforeach
@endsection

