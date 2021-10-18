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



	if ( isset($_POST['correo']) ) {



		//Datos del usuarios



		$finish_time = time();		



		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		

		// clean user inputs to prevent sql injections

		$nombre = trim($_POST['nombre']);

		$nombre = strip_tags($nombre);

		$nombre = htmlspecialchars($nombre);

		

		$apellido = trim($_POST['apellido']);

		$apellido = strip_tags($apellido);

		$apellido = htmlspecialchars($apellido);

		

		$correo = trim($_POST['correo']);

		$correo = strip_tags($correo);

		$correo = htmlspecialchars($correo);

		



		

		$sexo = trim($_POST['sexo']);

		$sexo = strip_tags($sexo);

		$sexo = htmlspecialchars($sexo);

		

		$cumple = trim($_POST['cumple']);

		$cumple = strip_tags($cumple);

		$cumple = htmlspecialchars($cumple);



		

		$switch = trim($_POST['switch']);

		$switch = strip_tags($switch);

		$switch = htmlspecialchars($switch);

		

		// terminos validation

		if (empty($switch)){

			

			$suscrito = 1;

		}

		else{

			$suscrito = 0;

		}

		

	

			

				

				$queryn = "UPDATE registros SET nombre   = '$nombre',

												apellido = '$apellido',

												correo   = '$correo',

												suscrito =  $suscrito,

												sexo     = '$sexo',

												nacimiento = '$cumple',

												ultima_actualizacion = '$texto_finish'

						   WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";

						   

				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");

				

				if($result){echo "<div class='success'>Datos guardados correctamente</div>";}

				

			





	}



else{

echo "spam";

}

?>