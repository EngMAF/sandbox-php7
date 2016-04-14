<?php 

class Checker
{
	
	public function check($str)
	{
		$chars = str_split($str);
		$userd_chars = [];
		foreach($chars as $char){
		    if(array_key_exists(ord($char), $userd_chars))
		    	return false;

	    	$userd_chars[ord($char)] = true;
		}
		return true;
	}
}


?>