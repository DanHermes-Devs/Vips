<?php
// long long time
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
	
require_once 'dbconnect.php';
$keyv = 1;


	if( isset($_SESSION['uservips'])!="" ){

		$uid=$_SESSION['uservips'];

	}


$get1 = $_GET['id'];

$queryem = "DELETE FROM domicilio WHERE id_domicilio=".$get1." ";	 
$resultem = $mysqli->query($queryem) or die("Falló la consulta $queryem");





?>
