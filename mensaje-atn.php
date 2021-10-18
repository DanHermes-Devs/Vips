<?php

include_once 'dbconnect.php';

$token = $_GET['token'];
 	
	date_default_timezone_set('America/Mexico_City');
$time = time();

$consulta = $mysqli->query("SELECT * FROM form_atencion WHERE token = '$token'");

while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC))

{
	$id= $row['id_mensaje'];
	$token= $row['token'];
	$problema= $row['problema'];
	$nombre= $row['nombre'];
	$celular= $row['celular'];
	$correo= $row['correo'];
	$estado= $row['estado'];
	$vips= $row['vips'];
	$en_tienda= $row['en_tienda'];
	$mensaje= $row['mensaje'];
	$archivo=  $row['archivo'];
	$fecha=  $row['fecha_registro'];
	$visto=  $row['visto'];
	
	if($visto ==""){
		
		$sql2 = "UPDATE form_atencion SET visto = '$time' WHERE token = '$token'";
		$query2 = $mysqli->query($sql2);
		
	}
	
	if(strlen($archivo) > 4){
		
		$archivodiv=' <p>ARCHIVO:</p>
		<img src="/'.$archivo.'" style="max-width:50%;">';
	}
	else{$archivodiv='';}
	
	if($en_tienda =="on"){
		$en_tienda = "Sí";
		
	}
	
	if(strlen($row['otro_problema'])> 2){
		
		$problema = "Otro problema";
		
	}



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="/img/favicon.png">
<link rel="stylesheet" href="/css/vips.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mensaje | Vips</title>


</head>
<body>

<style>
body {
  background: #e2e1e0;
  text-align: center;
}
.logo {
	width: 15%;
	display: inline-block;
	position: relative;
	float: left;
	text-align: center;
	z-index: 2;
	padding-top: 30px;
	padding-top: 18px;
	padding-left: 0;
	text-align: left;
	min-width: 80px;
}
.logo img:hover {
	-webkit-filter: drop-shadow(0px 6px 6px #edb6be);
	filter: drop-shadow(0px 6px 6px #edb6be);
}
.card {
	background: #fff;
	border-radius: 2px;
	display: inline-block;
	height: auto;
	margin: 1rem;
	position: relative;
	width: 90%;
	max-width: 1024px;
	padding: 2.5% 5%;
}
.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.14);
  transition: all 3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.12);
}




p > a {
  position: relative;
  color: #000;
  text-decoration: none;
}

p > a:hover {
  color: #000;
}



p > a::before {
	content: "";
	position: absolute;
	width: 100%;
	height: 2px;
	bottom: -5px;
	left: 0;
	background-color: #f8770099;
	visibility: hidden;
	-webkit-transform: scaleX(0);
	transform: scaleX(0);
	-webkit-transition: all .3s ease-in-out 0s;
	transition: all .3s ease-in-out 0s;
}

p > a:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}


</style>


<div class="card card-1">
	<div class="logo">
	<a href="/">
	<img src="/img/Logo_Vips.png"></a>

	</div>
	
	<div style="width:100%; float:left; margin-top: -50px;">
	<p><span style="color:#e42528">ASUNTO:</span> <?php echo $problema; ?></p>
	<p><span style="color:#e42528">NOMBRE:</span> <?php echo $nombre; ?></p>
	<p><span style="color:#e42528">CELULAR:</span> <a class="" href="tel:<?php echo $celular; ?>"><?php echo $celular; ?></a></p>
	<p><span style="color:#e42528">CORREO:</span> <a href="mailto:<?php echo $correo; ?>"><?php echo $correo; ?></a></p>
	<p><span style="color:#e42528">ESTADO:</span> <?php echo $estado; ?></p>
	<p><span style="color:#e42528">VIPS:</span> <?php echo $vips; ?></p>
	<p><span style="color:#e42528">¿CONTINÚA EN EL RESTAURANTE?:</span> <?php echo $en_tienda; ?></p>
	<p><span style="color:#e42528">MENSAJE:</span> <br> <?php echo $mensaje; ?></p>
	<p><span style="color:#e42528">FECHA DE ENVÍO:</span> <br> <?php echo $fecha; ?></p>

	<?php echo $archivodiv; ?>


	</div>

</div>
</body>
</html>
