<?php
include_once 'dbconnect.php';

$cupon = $_GET['cupon'];

	
$sql1 = "SELECT * FROM codigos_cupones WHERE cupon = '$cupon' AND activo = 0";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);
$numfilas1 = $result1->num_rows;

echo $numfilas1;


?>