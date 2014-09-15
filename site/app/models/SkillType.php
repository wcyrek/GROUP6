<?php

class SkillType extends Eloquent {

	public function skill()
	{
		$this->belongsToMany('Skill');	
	}
}
