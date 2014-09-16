<?php
use  App\Controller\Helper\Bounce;
class LoginController extends BaseController{
	
	function login(){
		if(!Input::has('username') ||!Input::has('password') ){
			return Redirect::to('/');
		}
		$ucid = Input::get('username');
		$pass = Input::get('password');
		if(Bounce::isNJIT($ucid, $pass)){
			$user = User::where('ucid',$ucid)->first();
			if(is_null($user)){
				//TODO:redirect to register form flshing ucid
				return "must register";
			}
			//TODO:user logins, redirect according to access level
			return "good";
		}
		else 
		{
			//TODO: redirect back to login view
			return "bad!";
		}
	}
	
}

