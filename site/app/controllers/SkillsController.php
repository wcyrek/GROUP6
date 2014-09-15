<?php

class SkillsController extends BaseController {
	
	public $restful = true;
	
	public function getIndex() {
		return View::make('skills.index')->with('skills', Skill::all());
	}
	
	public function getView($id)  {
		return View::make('skills.view')->with('skill', Skill::find($id));
	}
	
	public function getNew() {
		return View::make('skills.new')->with('skilltypes', Skilltypes::all());
	}
	
	public function postNew() {
		//TODO: add logic to insert new skill
		
		return View::make('skills.index')->with('skills', Skill::all());
	}
}