<?php
use  App\Controller\Helper\Bounce;
use  App\Controller\Helper\Register;

class LoginController extends BaseController{
	
	function postLogin(){
	
		
		$rules = array(
				'username' => 'required',
				'password' => 'required'
		);
		$validator = Validator::make(Input::All(), $rules);
		if($validator->fails()){
			
			//$err_msg = $validator->messages();
			return Redirect::to('login')->withErrors($validator);
		}
		
		$ucid = Input::get('username');
		$pass = Input::get('password');
		
		if(Bounce::isNJIT($ucid, $pass)){
			$user = User::where('ucid',$ucid)->first();
			if(is_null($user)){
				//TODO:redirect to register form flashing ucid
				Register::createUser($ucid);
				$user = User::where('ucid',$ucid)->first();
			}
			
			//TODO:user logins, redirect according to access level
			//TODO: add filters
			Auth::login($user);
			return Redirect::to('/');
				
		}
		else 
		{
			//redirects back to login with input
			return Redirect::to('login')->withInput();
			
		}
	}
	
	function getLogin(){
		
		return View::make('login');
	}
	
	function getLogout(){
	
		Auth::logout();
		return Redirect::to('/');
	}
}

