<?php
	ob_start();
		$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];
	}
	

include_once 'dbconnect.php';

	if ( isset($_POST['notif']) ) {

		//Datos del usuarios

		$finish_time = time();		

		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		$switch = trim($_POST['switch']);
		$switch = strip_tags($switch);
		$switch = htmlspecialchars($switch);
		
		// terminos validation
		if (empty($switch)){
			
			$suscrito = 0;
		}
		else{
			$suscrito = 1;
		}
		
	
			
				
				$queryn = "UPDATE registros SET 
												suscrito =  $suscrito,
			
												ultima_actualizacion = '$texto_finish'
						   WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
						   
				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");
				
				if($result){echo "<div class='success'>Datos guardados correctamente</div>";}
				
			


	}

else{
echo "spam";
}
?>