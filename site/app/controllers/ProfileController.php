<?php
class ProfileController {
	function getProfile($id){
		$profile = User::find($id);
		$user = Auth::user();
		if($user->id == $id){
			
			return View::make('profile')->with('level', 'my');
		}
		else
		{
			return View::make('profile')->with('level', 'read');
		} 
	}
}