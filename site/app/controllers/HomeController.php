<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home() {
		
		if (!Auth::check()) {
			return Redirect::to('/login');
		}
		$user = Auth::user();
		if($user->admin) {
			return Redirect::to('/admin');
		}
		return Redirect::to('/profile/'.$user->id);
	}
	
	public function about() {
	
		if (!Auth::check()) {
			return Redirect::to('/login');
		}
		$user = Auth::user();
		if($user->admin) {
			return Redirect::to('/admin');
		}
		return Redirect::to('/profile/'.$user->id);
	}

}
