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
	
	else{
		header("Location: cuenta.php");
	}
include_once 'dbconnect.php';

	if ( isset($_POST['correofb']) ) {

		//Datos del usuarios

		$finish_time = time();		

		$texto_finish= date("d/m/y h:i:s a", $finish_time);
		
		// clean user inputs to prevent sql injections
		
		$correo = trim($_POST['correofb']);
		$correo = strip_tags($correo);
		$correo = htmlspecialchars($correo);
		
		$queryn = "SELECT * FROM registros WHERE correo = '".$correo."'";
		$result = $mysqli->query($queryn) or die("Falló la consulta $queryrr");
		$filas = $result->num_rows;
		
		 if( $filas == 0){
				
		$queryn = "UPDATE registros SET 
							correo = '$correo',
												
							ultima_actualizacion = '$texto_finish'
						   WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
						   
				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");
				echo "<style>#btnfbmail{display:none;}</style><div class='success'>Tu correo se actualizó con éxito, espera un momento...</div>";
				echo '<script>window.location.replace("/perfil");</script>';
				
				
		 }
		 else{
			 
			 echo "<div class='errormsg'>Este correo ya se encuentra asociado con otra cuenta, por favor ingresa uno  diferente.</div>";
		 }
		


	}

else{
echo "spam";
}
ob_end_flush();
?>