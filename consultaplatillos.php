<?php

include_once 'dbconnect.php';

				$queryn = "SELECT * FROM platillos WHERE id_platillo = 91";

				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");


				while($row1= mysqli_fetch_array($result)){

									echo '<p>ID '.$row1['id_platillo'].'</p>';
									echo '<p>Nombre: '.$row1['nombre'].'</p>';
									echo '<p>Imgflip: '.$row1['imgflip'].'</p>';
									echo '<p>Imagen: '.$row1['imagen'].'</p>';


							}



?>
