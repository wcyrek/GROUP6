<?php

class SkillTypesController extends BaseController {
	
	public $restful = true;
	
	public function getIndex() {
		$skilltypes = SkillType::all();
		
		return View::make('skilltypes.index')->with('skilltypes', $skilltypes);
	}
	/**
	 * This action shows the details of a skilltype
	 * @param unknown $id
	 */
	public function getSkilltype($id)  {
		$skills = Skill::where('type_id', $id)->get();
		return View::make('skilltypes.view')->with('skilltype', SkillType::find($id))->with('skills', $skills);
	}
	
	/**
	 * This action deletes a skill type from database
	 * @param unknown $id id of skill type to be deleted
	 */
	public function deleteSkill() {
		SkillType::find(Input::get('id'))->delete();
		return  Redirect::route('skilltypes')->with('message', 'You have successfully deleted a skill type!')->with('color', 'red');
	}
	
	/**
	 * This action is called to create a form for new skill type
	 */
	public function getNew() {
	
		return View::make('skilltypes.new');
	}
	
	/**
	 * This action handles inserting a new skill type to DB
	 */
	public function postNew() {
	
		SkillTypes::create(array(
			'name'=>Input::get('name')
		));
		return Redirect::route('skilltypes')->with('message', 'You have successfully added a skill type!');
	}
}
