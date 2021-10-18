<?php
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

	include_once 'dbconnect.php';
	$uid=$_SESSION['uservips'];


	
$sql1 = "SELECT * FROM comentarios";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);
$numfilas1 = $result1->num_rows;


			while($row1= mysqli_fetch_array($result1)){
				

							 
								echo ' <a onclick="loadform('.$row1['id_comentario'].');" class="openform popup-with-move-anim pencil" data-id="'.$row1['id_comentario'].'" ><div class="direccion"><h5>TIPO: '.$row1['tipo'].'</h5>';
								echo '<p>Usuario: '.$row1['id_usuario'].'</p>';
								echo '<p>Mensaje: '.$row1['comentario'].'</p><p>Fecha: '.$row1['fecha'].'</p></div></a>';
								//echo '<p>'.$row['id_usuario'].'</p><br><br>';

						}
						




?>


