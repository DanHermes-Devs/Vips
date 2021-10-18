<?php 
	ob_start();
		$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

		$pass1 = trim($_POST['pass1']);
		//echo "T. ".$pass1;
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

	if ( isset($_POST['pass1']) ) {

		//Datos del usuarios

		$finish_time = time();		

		$texto_finish= date("d/m/y h:i:s a", $finish_time);
		
		// clean user inputs to prevent sql injections
		
		$pass1 = trim($_POST['pass1']);
		$pass1 = strip_tags($pass1);
		$pass1 = htmlspecialchars($pass1);
		
		$pass2 = trim($_POST['pass2']);
		$pass2 = strip_tags($pass2);
		$pass2 = htmlspecialchars($pass2);
		

		// password encrypt using SHA256();
		$password1 = hash('sha256', $pass1);
		
		$password2 = hash('sha256', $pass2); // password hashing using SHA256
		//$password2 = $pass2; // password hashing using SHA256
		
			$res=$mysqli->query("SELECT id_registro, nombre, password FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid");
			$row=mysqli_fetch_array($res);
			
			$count = $result->num_rows;
			
			if($row['password']==$password1 ) {
				
				$queryn = "UPDATE registros SET 
												password = '$password2',
												
												ultima_actualizacion = '$texto_finish'
						   WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
						   
				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");
				echo "<div class='success'>Tu contraseña se actualizó con éxito</div>";
				
			} else {
				echo "<div class='errormsg'>Tu password actual es incorrecto</div>";
			}


	}

else{
echo "spam";
}
ob_end_flush();
?>