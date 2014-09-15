<?php

class SkillTypesController extends BaseController {
	
	public $restful = true;
	
	public function getIndex() {
		$skilltypes = SkillType::all();
		
		return View::make('skilltypes.index')->with('skilltypes', $skilltypes);
	}
	
	public function getView($id)  {
		return View::make('skilltypes.view')->with('skilltypes', SkillType::find($id));
	}
}
