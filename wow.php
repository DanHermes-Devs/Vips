<?php
	// long long time
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
ini_set( 'session.cookie_httponly', 1 );
ini_set( 'session.cookie_secure', 1 );
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
	require_once 'dbconnect.php';

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];


			$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$resulth =$mysqli->query($sql3h);
	 $rowregh=mysqli_fetch_assoc($resulth);

		$nombre = $rowregh['nombre'];
		$apellido = $rowregh['apellido'];
    $correo = strtolower($rowregh['correo']);
    $correo = preg_replace('/[_]+/','_',$correo);
		$telefono = $rowregh['telefono'];
		$sexo = $rowregh['sexo'];
		$utime = $rowregh['fecha_registro'];
		$cumple = $rowregh['nacimiento'];
		$imagen = $rowregh['foto'];
		$randomn = rand();
		$foto = $rowregh['foto']."?".$randomn;
		$resregh2=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");
		$rowregh2=mysqli_fetch_assoc($resregh2);
		$facebookh = $rowregh2['facebook_id'];

		$sesion = true;



		include_once 'llamada-wow-registro2019.php';
	}


	else{


		header('Location: /');


	}

?>
