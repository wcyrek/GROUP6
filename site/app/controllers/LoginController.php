<?php
class LoginController extends BaseController{
	
	function login($username, $password){
		
		$code='0xACA021';
		$data= array(
				'user'=> $username,
				'pass'=> $password,
				'uuid'=> $code
		);
		
		$url="https://cp4.njit.edu/cp/home/login";
		$ch = curl_init($url);
		
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		
		$result=curl_exec($ch);
		
		$result=curl_exec($ch);
		$pattern='/document\.location=\"(.*)\"/';
		curl_close($ch);
		
		if(preg_match($pattern,$result,$ma)){
			
			$user = User::where('ucid',$username)->first();
			if(is_null($user)){
				
				return 'must register!!!';
			}
			return 'good!';
		}
		else{
			return "bad!";
		}	
		
	}
	
}

