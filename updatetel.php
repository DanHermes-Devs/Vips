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

$resreg=$mysqli->query("SELECT * FROM registros WHERE id_registro = $uid OR facebook_id = $uid OR google_id = $uid");
	$rowreg=mysqli_fetch_array($resreg);


	if ( isset($_POST['correofb']) ) {

		//Datos del usuarios

		$finish_time = time();

		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		$telefono = trim($_POST['correofb']);
		$telefono = strip_tags($telefono);
		$telefono = htmlspecialchars($telefono);
		
		
		$queryn = "SELECT * FROM registros WHERE telefono = '".$telefono."'";

		$resultt = $mysqli->query($queryn) or die("Falló la consulta $queryrr");


		$numfilas = $resultt->num_rows;

		 if( 	$numfilas == 0){
			 
			 
				$queryn = "UPDATE registros SET
												telefono =  '$telefono',

												ultima_actualizacion = '$texto_finish'
						   WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";

				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");

				$queryn1 = "UPDATE domicilio SET tel = '$telefono' WHERE id_usuario = $uid";
								   $result1 = $mysqli->query($queryn1) or die("Falló la consulta $queryn1");

				if($result){echo "<div class='success'>Teléfono actualizado correctamente</div>"; echo "<script>
				
				 analytics.identify(".$rowreg['tdl'].", {
				  name: '".$rowreg['nombre']."',
				  lastName: '".$rowreg['apellido']."',
				  email: '".$rowreg['correo']."',
				  tel: '".$telefono."'
				  

				});
				
				setTimeout(function(){
					location.reload();
				}, 1000)</script>";}
			 
			 
		 }
		 else{
			 
			 
			 echo "<div class='errormsg'>El número ingresado ya fue registrado por otro usuario, por favor ingresa uno diferente.</div>";

		 }










	}

else{
echo "spam";
}
?>
