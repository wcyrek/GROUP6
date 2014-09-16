<?php

class SkillType extends Eloquent {

	//allows to mass assign
	protected $fillable = array('name');
	
	public function skill()
	{
		$this->belongsToMany('Skill');	
	}
}
