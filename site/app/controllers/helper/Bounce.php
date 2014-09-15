<?php
namespace App\Controller\Helper;
//class containing necessary methods for bouncing to other institutions
//returns TRUE if auth matches or FALSE otherwise. In case of error it returns 0.

class Bounce{
	
	static function isNJIT($usr, $pass){
		$code='0xACA021';
		$data= array(
				'user'=> $usr,
				'pass'=> $pass,
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
		curl_close($ch);
		
		if($result === FALSE){
			return 0;
		}
		
		$pattern='/document\.location=\"(.*)\"/';
		if(preg_match($pattern,$result,$ma))
		{				
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}