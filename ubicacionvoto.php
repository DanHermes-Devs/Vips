<?php
require_once 'dbconnect.php';

	
$consulta = $mysqli->query("SELECT * FROM  `votos_clasicos`
	WHERE	 latitud is NULL and vips_cercano != 'undefined'
    LIMIT    1");


while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC))
{
$id = $row['id_voto'];
$name = $row['vips_cercano'];
echo $id.'</br>
';

$consulta2 = $mysqli->query("SELECT * FROM  stores
	WHERE	 name = '$name'");


while($row2 = mysqli_fetch_array($consulta2, MYSQLI_ASSOC))
{
$lat = $row2['latitude'];
$lng = $row2['longitude'];

}




$consulta2 = $mysqli->query("UPDATE `votos_clasicos`
	SET		 latitud = $lat, longitud = $lng
	WHERE	 id_voto = $id");

$secondsWait = 3;
header("Refresh:$secondsWait");



}


?>