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
	public function getSkill($id) {
		$skill = Skill::find($id);
		return View::make('skills.view')
			->with('skill', $skill)
			->with('skilltype', Skilltype::find($skill->type_id));
	}
	
	/** 
	 * This action deletes a skill from database
	 * @param unknown $id id of skill to be deleted
	 */
	public function deleteSkill() {
		Skill::find(Input::get('id'))->delete();
		return  Redirect::route('skills')->with('message', 'You have successfully deleted a skill!')->with('color', 'red');
	}
	
	/**
	 * This action is called to create a form for new skill
	 */
	public function getNew() {
		
		$skilltypes = array();
		foreach (SkillType::all() as $skill) {
			$skilltypes[$skill->id] = $skill->name;
		}
		return View::make('skills.new')->with('skilltypes', $skilltypes);
	}
	
	/**
	 * This action handles inserting a new skill to DB
	 */
	public function postNew() {

		Skill::create(array(
			'name'=>Input::get('name'),
			'type_id'=>Input::get('type_id')
		));
		return Redirect::route('skills')->with('message', 'You have successfully added a skill!');
	}
	
	public function getBadges() {
	
		return View::make('skills.badge')->with('skills', Skill::all());
	}
}