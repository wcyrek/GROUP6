<?php
class ProfileController extends BaseController {
	function getProfile($id){
		$profile = User::find($id);
		$user = Auth::user();
		
		if(is_null($profile)){
			//no such an user (404)
			Redirect::to('/');
		}
		if(!Auth::check()){
			
			return View::make('profile.index')->with('level', 'read')->with('profile', $profile);
		}
		
		if($user->id == $id){
			
			return View::make('profile.index')->with('level', 'my')->with('profile', $profile);
		}
		else
		{
			return View::make('profile.index')->with('level', 'read')->with('profile', $profile);
		} 
	}
	
	function getEdit($profile){
		
		
	}
}