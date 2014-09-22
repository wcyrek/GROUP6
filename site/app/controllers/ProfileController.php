<?php
class ProfileController extends BaseController {
	function getProfile($id){
		$profile = User::find($id);
		$user = Auth::user();
		
		if(is_null($profile)){
			//no such an user (404)
			//App::abort(404);
			return Redirect::to('/');
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
	
	function getEditAbout($id){
		$profile = User::find($id);
		$user = Auth::user();
		
		if(is_null($profile)){
			//no such an user (404)
			//App::abort(404);
			return Redirect::to('/');
		}
		if($user->id === $id)
		{				
			return View::make('profile.about')->with('level', 'my')->with('profile', $profile);
		}
		else{
			return View::make('profile.about')->with('level', 'readonly')->with('profile', $profile);
				
		}
	
	}
	function getEditSkills($id){
		$profile = User::find($id);
		$user = Auth::user();
		
		if(is_null($profile)){
			//no such an user (404)
			//App::abort(404);
			return Redirect::to('/');
		}
		
		return View::make('profile.about')->with('level', 'my')->with('profile', $profile);
	
	}
	
	
	function postEditAbout($id){
		
		$user = User::find($id);
		$user->first_name = Input::get('first_name');
		$user->middle_name = Input::get('middle_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->address = Input::get('address');
		$user->phone = Input::get('phone');
		
		$user->save();
		
		return Redirect::route('profile', array('id' => $id));
	}
	function postEditSkills(){
		
		
	}
}