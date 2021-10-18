<?php
session_start();
require_once 'dbconnect.php';
if(isset($_SESSION['uservips'])!="" ){
	$user=$_SESSION['uservips'];
}
else{
	$user="";
}

if(strlen($_GET['opcion'])>5){
	
$cp = trim($_GET['cp']);
$cp = strip_tags($cp);
$cp = htmlspecialchars($cp);

$vips = trim($_GET['vips']);
$vips = strip_tags($vips);
$vips = htmlspecialchars($vips);

$opcion = trim($_GET['opcion']);
$opcion = strip_tags($opcion);
$opcion = htmlspecialchars($opcion);

date_default_timezone_set("America/Mexico_City");
$finish_time = time();
$texto_finish= date("d/m/y h:i:s a", $finish_time);

$queryn1 = "INSERT INTO votos_clasicos(codigo_postal, vips_cercano, opcion, id_user, fecha) VALUES('$cp', '$vips','$opcion', '$user', '$texto_finish')";
$result1 = $mysqli->query($queryn1) or die("Falló la consulta $queryn1");
setcookie('persistVoto', $opcion, time()+(1 * 24 * 60 * 60), '/'); // this sets cookie for 30 days.
	
}

else{
	echo "Voto incorrecto";
}




?>
