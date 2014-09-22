@extends('layout')

@section('title')
<title>
	{{ $profile->ucid }} About
</title>
@endsection


@section('content')

{{ Form::open(array('action' => array('ProfileController@postEditSkills', $profile->id ), 'class' => 'skills-form')) }}


<br>
{{ Form::select('type_id', $skills) }}

{{Form::submit('Add skill')}}


{{ Form::close() }}	
	
<h2> Your skills: </h2>
<div id="badges">
	@foreach($profile->skills as $skill)
		<div id="{{ $skill->id }}" class="noselect badge skill_{{ $skill->id%5+1 }}" draggable="true" ondragstart="drag(event)">
			<label class="badge_caption">{{ $skill->name }}</label>
		</div>
	@endforeach
</div>
<ul>
@foreach($profile->skills as $skill)
	<li> 
	{{ Form::open(array('action' => array('ProfileController@deleteSkill', $profile->id ), 'draggable'=> 'true', 'id' => 'form'.$skill->id, 'style' => 'display:none' )) }}
	{{ Form::hidden('skill', $skill->id) }}
	{{ Form::label($skill->name)  }} 
	<i>
			{{ Form::button(null,array('type'=>'submit', 'class'=>'icon-trash')) }}
	</i>
	{{ Form::close() }}
	</li>
@endforeach
</ul>

{{ HTML::linkAction('ProfileController@getProfile', 'back to profile page', array('id' => $profile->id)) }}
<div class="icon-trash" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}
function drag(ev) {
	ev.dataTransfer.setData("text/html", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text/html");
    document.getElementById("form" + data).submit();
    ev.target.appendChild(document.getElementById(data));
}

</script>
@endsection


