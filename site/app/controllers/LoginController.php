<?php
use  App\Controller\Helper\Bounce;
use  App\Controller\Helper\Register;

class LoginController extends BaseController{
	
	function postLogin(){
		if(!Input::has('username') ||!Input::has('password') ){
			return Redirect::to('/');
		}
		$ucid = Input::get('username');
		$pass = Input::get('password');
		if(Bounce::isNJIT($ucid, $pass)){
			$user = User::where('ucid',$ucid)->first();
			if(is_null($user)){
				//TODO:redirect to register form flshing ucid
				Register::createUser($ucid);
				$user = User::where('ucid',$ucid)->first();
			}
			
			//TODO:user logins, redirect according to access level
			if($user['admin'] == 2)
			{
				return Redirect::to('admin.index');
			}
			else if($user['admin'] == 0)
			{
				return Redirect::to('user.index');
			}		
		}
		else 
		{
			//TODO: redirect back to login view
			return "bad!";
		}
	}
	
	function getLogin(){
		
		return View::make('login');
	}
	
}

