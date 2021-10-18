<?php
if(isset($_COOKIE['persistID']))
	{
		$userid =   $_COOKIE['persistID'];
		session_start();
	   $_SESSION['uservips'] = $userid;
	}
	if( isset($_SESSION['uservips'])!="" ){
		
		header("Location: /selva-magica/user");
	
	}
	else{
		
		header("Location: /selvamagica-instrucciones");
	}


