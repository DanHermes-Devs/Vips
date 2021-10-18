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

	}
include_once 'dbconnect.php';






	if ( isset($_POST['comment']) ) {

		//Datos del usuarios

		$finish_time = time();

		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		// clean user inputs to prevent sql injections
		$user = trim($_POST['user']);
		$user = strip_tags($user);
		$user = htmlspecialchars($user);

		$comment = trim($_POST['comment']);
		$comment = strip_tags($comment);
		$comment = htmlspecialchars($comment);

		$tipo = trim($_POST['tipo']);
		$tipo = strip_tags($tipo);
		$tipo = htmlspecialchars($tipo);


		if($tipo == "vipstoria"){
			$mensaje = '¡Gracias por tu Vipstoria! <br>Nuestro equipo la está revisando, regresa pronto y tal vez ya la encuentres publicada';
		}

	else{
			$mensaje = '¡Gracias por tu comentario! <br>Nuestro equipo lo está revisando, regresa pronto y tal vez ya lo encuentres publicado';
		}



		$activo = 1;
			$query = "INSERT INTO comentarios(id_usuario, comentario, tipo, fecha, activo) VALUES('$user','$comment', '$tipo','$texto_finish',  1)";



					$res = $mysqli->query($query)  or die("Falló la consulta $query");
					$row = mysqli_fetch_assoc($res);



					if ($res) {

						echo "<div class='success'>".$mensaje."
					</div>";



					}

					else {
						echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";
					}


	}

else{
echo "spam";
}
ob_end_flush();
?>
