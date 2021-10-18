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
	$tdl = $rowreg['tdl'];


	if ( isset($_POST['calle']) ) {
	

		// clean user inputs to prevent sql injections
		
		$iduser = trim($_POST['iduser']);
		$iduser = strip_tags($iduser);
		$iduser = htmlspecialchars($iduser);

		

		$calle = trim($_POST['calle']);
		$calle = strip_tags($calle);
		$calle = htmlspecialchars($calle);

		$ext = trim($_POST['ext']);
		$ext = strip_tags($ext);
		$ext = htmlspecialchars($ext);

		$inte = trim($_POST['inte']);
		$inte = strip_tags($inte);
		$inte = htmlspecialchars($inte);

		$colonia = trim($_POST['colonia']);
		$colonia = strip_tags($colonia);
		$colonia = htmlspecialchars($colonia);

		$cp = trim($_POST['cp']);
		$cp = strip_tags($cp);
		$cp = htmlspecialchars($cp);

		$tel = trim($_POST['tel']);
		$tel = strip_tags($tel);
		$tel = htmlspecialchars($tel);

		$radio = trim($_POST['radio']);
		$radio = strip_tags($radio);
		$radio = htmlspecialchars($radio);

				

				$query = "INSERT INTO domicilio (id_usuario, calle, ext, inte, colonia, cp, tel,  radio) VALUES($iduser, '$calle', '$ext','$inte', '$colonia', '$cp', '$tel', '$radio')";

					$res = $mysqli->query($query) or die("Falló la consulta $query");

					if($res){
						//echo "<div class='success'>Domicilio Actualizado</div>";
						//echo "<script>window.location.href = 'domicilio3?r=".$linkrappi."&cp=".$cp."';</script>";
						echo "<div class='success'>Domicilio agregado...</div>";
						if(strlen($tdl)>5){
							echo "
							<script>
							  analytics.identify(".$rowreg['tdl'].", {
							  name: '".$rowreg['nombre']."',
							  lastName: '".$rowreg['apellido']."',
							  email: '".$rowreg['correo']."',
							  tel: '".$rowreg['telefono']."',
							  address: '(".$radio.") ".$calle." #".$ext." Col. ".$colonia." C.P. ".$cp."'
							  
							});
							</script>
							";
						}
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