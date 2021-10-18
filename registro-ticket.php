<?php
	session_start();
	if( isset($_SESSION['uservips'])!="" ){
	
	}
	else{
		
		header("Location: /selvamagica-registro/");
	}
	include_once 'dbconnect.php';
	$points = $_SESSION['points'];
	
	


	if (!empty($_POST["ticket"]) && strlen($points)>0){
		
		//Datos del usuarios
		$ip = getenv('HTTP_CLIENT_IP')?:
		getenv('HTTP_X_FORWARDED_FOR')?:
		getenv('HTTP_X_FORWARDED')?:
		getenv('HTTP_FORWARDED_FOR')?:
		getenv('HTTP_FORWARDED')?:
		getenv('REMOTE_ADDR');
		$agent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
		date_default_timezone_set('America/Mexico_City');
		$finish_time = time();
		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		// clean user inputs to prevent sql injections

		$user = trim($_POST['user']);
		$user = strip_tags($user);
		$user = htmlspecialchars($user);

		$ticket = trim($_POST['ticket']);
		$ticket = strip_tags($ticket);
		$ticket = htmlspecialchars($ticket);
		
		$queryt = "SELECT * FROM tickets_disney WHERE ticket = '$ticket'";
		$resultt = $mysqli->query($queryt) or die("Falló la consulta $queryt");
		$numfilast = $resultt->num_rows;
		
		if($numfilast > 0){
			echo '<p class="errorticket">El ticket ya fue registrado anteriormente.</p>';
		}
		
		else{
		
			$rest = substr($ticket, 0, -13);
			$queryvalid = "SELECT * FROM stores WHERE storeNumber = $rest";
			$resultvalid = $mysqli->query($queryvalid) or die("Falló la consulta $queryvalid");
			$numfilas = $resultvalid->num_rows;

			 if($numfilas == 1){

			
				$query = "INSERT INTO tickets_disney(id_usuario, ticket, puntos, fecha, ip, browser, activo) VALUES('$user', '$ticket', '$points','$texto_finish', '$ip', '$agent', 1)";

				$res = $mysqli->query($query) or die("Falló la consulta $query");
							$row=mysqli_fetch_array($res);

							if ($res) {
							unset($_SESSION['points']);
							
							echo '<style>#btnregistra{display:none!important;}</style><script>window.location.replace("/selvamagica-gracias");</script>';

							}

							else {
								echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";
							}
			}
			else{
				
				echo '<p class="errorticket">El ticket que ingresaste no es válido, ingresa uno nuevo</p>';
				
			}
		}
	}

	else{
		echo "Error";
	}

?>
