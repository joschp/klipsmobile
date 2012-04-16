<?php

/**
 * 
 * @author Benjamin Gelhaar
 */

class UserController
{
	public function handleRequest($command)
	{	
		switch($command)
		{
			case 'getName':
				$response = User::getSessionName();
				break;

			case 'validateSession':
				$response = User::validateSession();
				break;
				
			default:
				throw new Exception("Unsupported property!");
				break;	
		}
		
		if(empty($response))
		{
			$response = false;
		}
		
		render('user',array("user" => $response));		
	}
}

?>