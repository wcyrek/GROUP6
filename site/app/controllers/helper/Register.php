<?php
namespace App\Controller\Helper;

class Register {
	
	static function createUser($ucid){
		$user = new \User;
		$user->ucid = $ucid;
		$user->email = $ucid.'@njit.edu';
		$user->save();
		
	}
}