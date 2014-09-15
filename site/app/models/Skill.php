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
			return $this->belongsToMany('User');	
		//TODO: add way to return users with value >= $value
	}
}