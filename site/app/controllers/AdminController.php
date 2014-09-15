<?php

class AdminController extends BaseController {
	
	public $restful = true;
	
	/**
	 * This action renders the admin main panel
	 */
	public function getIndex() {
		return View::make('admin.index');
	}
}