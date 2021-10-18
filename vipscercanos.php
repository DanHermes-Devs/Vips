<?php
include 'dbconnect.php';
 $cp = $_GET['cp'];
	$address = $cp . ' Mexico';
	$coordinates = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=true&key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE');
	$coordinates = json_decode($coordinates);
 
	$lat = $coordinates->results[0]->geometry->location->lat;
	$lng = $coordinates->results[0]->geometry->location->lng;
 
?>

	<p style="font-size: .8em;">Selecciona tu Vips más cercano</p>
		<select id="vipscercano2" class="fieldn">
			<?php 
				$sqldir = "SELECT id, name, addressresume, address, zip, city, state, country, url, delivery, new,  ninos, phone, latitude, longitude, horario, alcohol, remodelado, estacionamiento, salon, terraza,
			((ACOS(SIN($lat * PI() / 180) * SIN(latitude * PI() / 180) + COS($lat * PI() / 180) * COS(latitude * PI() / 180) * COS(($lng - longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
		FROM stores WHERE  name != 'Vips Copilco'
		HAVING distance <= 30.0
		ORDER BY distance ASC LIMIT 3";
		
	$resulttienda = $mysqli->query($sqldir)  or die("Error en".$sqldir);
	$numfilastienda = $resulttienda->num_rows;
	
	
		while($rowtienda= mysqli_fetch_array($resulttienda)){

			$nombretienda = $rowtienda["name"];
			
				echo '
				<option value="'.$nombretienda.'">'.$nombretienda.'</option>
				';

			}
			?>
		</select>