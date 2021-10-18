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



	if ( isset($_POST['calle2']) ) {



		
		// clean user inputs to prevent sql injections
		
		$iddomicilio = trim($_POST['iddomicilio']);
		$iddomicilio = strip_tags($iddomicilio);
		$iddomicilio = htmlspecialchars($iddomicilio);

		

		$calle2 = trim($_POST['calle2']);
		$calle2 = strip_tags($calle2);
		$calle2 = htmlspecialchars($calle2);

		$ext2 = trim($_POST['ext2']);
		$ext2 = strip_tags($ext2);
		$ext2 = htmlspecialchars($ext2);

		$inte2 = trim($_POST['inte2']);
		$inte2 = strip_tags($inte2);
		$inte2 = htmlspecialchars($inte2);

		$colonia2 = trim($_POST['colonia2']);
		$colonia2 = strip_tags($colonia2);
		$colonia2 = htmlspecialchars($colonia2);

		$cp2 = trim($_POST['cp2']);
		$cp2 = strip_tags($cp2);
		$cp2 = htmlspecialchars($cp2);

		$tel2 = trim($_POST['tel2']);
		$tel2 = strip_tags($tel2);
		$tel2 = htmlspecialchars($tel2);
		
		$switch = trim($_POST['switch2']);

		$switch = strip_tags($switch);

		$switch = htmlspecialchars($switch);



		// terminos validation

		if (empty($switch)){



			$predeterminada = 0;

		}

		else{

			$predeterminada = 1;

		}
		
		
		$queryn1 = "UPDATE domicilio SET predeterminada = 0 WHERE id_usuario = $uid";
						   $result1 = $mysqli->query($queryn1) or die("Falló la consulta $queryn1");




				$queryn = "UPDATE domicilio SET calle   = '$calle2',

												ext = '$ext2',

												inte   = '$inte2',

												colonia =  '$colonia2',

												cp     = '$cp2',

												tel = '$tel2',
												
												predeterminada = $predeterminada
												

												

						   WHERE id_domicilio = $iddomicilio";

						   

				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");

				

				if($result){echo "<div class='success'>Datos guardados correctamente</div>";}

				

			





	}



else{

echo "spam";

}

?>