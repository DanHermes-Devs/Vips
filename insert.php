<?php
	function checkuser($facebook_id, $nombre, $apellido, $email, $page)
	{
		require 'dbconnect.php';
		$sql3 = "select * from registros where facebook_id='$facebook_id'";
		$result = $mysqli->query($sql3);
		$numfilas = $result->num_rows;
		if (empty($numfilas)) { // New user Insertion

			$ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');
			$agent = mysqli_real_escape_string($_SERVER['HTTP_USER_AGENT']);
			$finish_time = time();
			$texto_finish= date("d/m/y h:i:s a", $finish_time);

			$wsdl = 'https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';
			if (strlen($email)>3){
			  try{
				$clinet=new SoapClient($wsdl, array('trace' => 1));
				$ver =array("programName"=>"WOW Rewards", "contactEmailAddress"=>$email, "responseType"=>"long");
				$quates=$clinet->GetMember($ver);
				$miembros = json_decode(json_encode( $quates), True);
			   //print_r( $array );
			   //print_r( $quates );
				foreach ($miembros as $miembro){
				}

				foreach($miembro['programsList'] AS $result) {
				  foreach($result['program'] AS $topic) {
				  }
				  $array = array_values($result['earnedPointsList']);
				  $array2 = array_values($array[1]);
				  $puntostotales = print_r($array2[0]);

				}

			  }
			  catch(SoapFault $e)

			  {
				echo $e->getMessage();
			  }

			  $consul = $miembro['memberNumber'];

			}

			else{
				$wow = 1;
				$query = "INSERT INTO registros(facebook_id, nombre, apellido, correo, password,  suscrito, fecha_registro, ip, browser, activo) VALUES('$facebook_id','$nombre', '$apellido','', 'fb',  1,  '$texto_finish', '$ip', '$agent', 1)";
				  $res = $mysqli->query($query) or die("Falló la consulta $query");
				  $row=mysqli_fetch_array($res);
				  if ($res) {
				  }
				  else {
					echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde... [E01]</div>";
				  }
			}

			if(strlen($consul) > 6){
				$wow = 1;
				$query = "INSERT INTO registros(facebook_id, nombre, apellido, correo, password,  suscrito, wow,  tdl, fecha_registro, ip, browser, activo) VALUES('$facebook_id','$nombre', '$apellido','$email', 'fb',  1, $wow, '$consul',  '$texto_finish', '$ip', '$agent', 1)";
				$res = $mysqli->query($query) or die("Falló la consulta $query");
				$row=mysqli_fetch_array($res);
				if ($res) {
				}
				else {
					echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde... [E02]</div>";
				}
			}
			else{

				//Nombre completo
				$nombrecompleto = $nombre ." ". $apellido;
				$correo = $email;
				if (strlen($correo)>5){

					include_once 'llamada-wow-registro2019.php';
					if($pos3 !== false){$code = 'error';}
					else{$code = 'success';}
					$querylog = "INSERT INTO log_wow(nombre, apellido, correo,fecha, ip, browser, respuesta, source, code) VALUES('$nombre', '$apellido','$correo', '$texto_finish', '$ip', '$agent', '$stringresponse', 'Facebook', '$code')";
					$reslog = $mysqli->query($querylog) or die("Falló la consulta $querylog");


						if($pos3 !== false){
							echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde... [E03]</div>";
							exit();
						}
							else{
								$query = "INSERT INTO registros(facebook_id, nombre, apellido, correo, password,  suscrito, wow,  fecha_registro, ip, browser, activo) VALUES('$facebook_id','$nombre', '$apellido','$email', 'fb',  1, $wow,  '$texto_finish', '$ip', '$agent', 1)";
								$mysqli->query($query);
							}

				}

				else{

					$query = "INSERT INTO registros(facebook_id, nombre, apellido, correo, password,  suscrito, wow,  fecha_registro, ip, browser, activo) VALUES('$facebook_id','$nombre', '$apellido','', 'fb',  1, $wow,  '$texto_finish', '$ip', '$agent', 1)";
					$mysqli->query($query);

				}

			}
		$method="loginfb";
		header("Location:regfb?page=".$page);


		}

		else { // Returned user data update
			$query = "UPDATE registros SET nombre='$nombre' where facebook_id='$facebook_id'";
			$mysqli->query($query);

			$method="regfb";
			 header("Location:loginfb?page=".$page);

		}
	}
?>
