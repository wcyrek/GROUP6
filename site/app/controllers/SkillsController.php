<?php

class SkillsController extends BaseController {
	
	public $restful = true;
	
	/**
	 * Default action display list of all skills
	 */
	public function getIndex() {
		return View::make('skills.index')->with('skills', Skill::all());
	}
	
	/**
	 * This action shows details of a skill with given id
	 * @param unknown $id id of the skill to be displayed
	 */
	public function getView($id)  {
		return View::make('skills.view')->with('skill', Skill::find($id));
	}
	
	/**
	 * This action is called to create a form for new skill
	 */
	public function getNew() {
		return View::make('skills.new')->with('skilltypes', Skilltypes::all());
	}
	
	/**
	 * This action handles inserting a new skill to DB
	 */
	public function postNew() {
		//TODO: add logic to insert new skill
		
		return View::make('skills.index')->with('skills', Skill::all());
	}
}