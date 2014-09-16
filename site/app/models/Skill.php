<?php

class Skill extends Eloquent {

	//allows to mass assign
	protected $fillable = array('name', 'type_id');
	
	/**
	 * Returns list of users with this skill; useful for reporting
	 * @return List of users with the skill
	 */
	public function users($value = NULL)
	{
		if ($value == NULL)
			return $this->belongsToMany('User')->withPivot('value');	
		//TODO: add way to return users with value >= $value
	}
	public function type_id()
	{
		return $this->belongsTo('SkillType');
	}
}