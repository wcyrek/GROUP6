<?php

class Skill extends Eloquent {

	public function users()
	{
		$this->belongsToMany('User');	
	}
}