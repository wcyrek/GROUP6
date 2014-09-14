<?php

class SkillsController extends BaseController {
	
	public $restful = true;
	
	public function getIndex() {
		$skills = Skill::all();
		
		return View::make('skills.index')->with('skills', $skills);
	}
	
	public function getView($id)  {
		return View::make('skills.view')->with('skill', Skill::find($id));
	}
}