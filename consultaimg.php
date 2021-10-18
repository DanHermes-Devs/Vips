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
	if( isset($_SESSION['uservips'])){
		$owner = true;
	}
	include_once 'dbconnect.php';
	$user = $_SESSION['uservips'];
$consulta = $mysqli->query("SELECT * FROM registros WHERE id_registro = $user OR facebook_id= $user OR google_id = $user");
while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC))
{
	$randomn = rand();
	
	$foto = $row['foto']."?".$randomn;
	
	echo '
<label class="labelfile1 tooltipimg" title="Sube tu foto" style="background-image: url('.$foto.');text-align: center;    font-size: 10px;" for="uploadedimage"><div class="overlayimg"></div></label>
';

}
?>


