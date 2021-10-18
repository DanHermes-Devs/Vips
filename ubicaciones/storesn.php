<?php

/**
 * This script is an example PHP script that shows you what can
 * be called by the store locator plugin. It is very simple, but
 * should help you understand how you can integrate the plugin
 * in YOUR application.
 *
 * We suppose here that you have a working MySQL server (provide
 * its connection information below), which contains a database
 * (storelocator), which itself contains a table, "stores". See
 * the "create_table.sql" and "example_data.sql" to reproduce this
 * example on your system.
 */

// Insert here the information to connect to your MySQL server.
	$db_host = "127.0.0.1";
	$db_user = "bn_wordpress";
	$db_pass = "5e601fd753";
	$db_name = "vips18";

// Response is always JSON.
header('Content-type: application/json');

// Parameters
$lat = floatval($_REQUEST['lat']);
$lng = floatval($_REQUEST['lng']);
if( !$lat || !$lng )
{
	$protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
	header("$protocol 400 Bad Request");
	die(json_encode(array('error' => "Wrong values for 'lat' and/or 'lng' parameters.")));
}


$edo = $_GET['edo'];

$edotxt = "'".$edo."'";


if($edo == 'ubicacion'){

	$sql = "SELECT id, name, addressresume, address, zip, city, state, country, url, delivery, new,  ninos, phone, latitude, longitude, horario, alcohol, remodelado, estacionamiento, salon, terraza,
			((ACOS(SIN($lat * PI() / 180) * SIN(latitude * PI() / 180) + COS($lat * PI() / 180) * COS(latitude * PI() / 180) * COS(($lng - longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
		FROM stores WHERE name != 'Vips Copilco'
		HAVING distance <= 6.0
		ORDER BY distance ASC LIMIT 6";


}

else{

	// SQL request. The complexe part is here to compute the distance
// between the position passed in the parameters and each store.
$sql = "SELECT id, name, addressresume, address, zip, city, state, country, url, delivery, new, ninos, phone, latitude, longitude, horario, alcohol, remodelado, estacionamiento, salon, terraza,
			((ACOS(SIN($lat * PI() / 180) * SIN(latitude * PI() / 180) + COS($lat * PI() / 180) * COS(latitude * PI() / 180) * COS(($lng - longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
		FROM storesfarmacia WHERE name != 'Vips Copilco'
		WHERE state = $edotxt
		HAVING distance <= 6.0
		ORDER BY distance ASC LIMIT 6";


}


// Connexion to MySQL server.
$mysqli = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if( !$mysqli ) {
	$protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
	header("$protocol 500 Internal Server Error");
	die(json_encode(array('error' => "Database connection error.")));
}

// Setting up the data encoding as UTF-8.
mysqli_set_charset($mysqli, 'utf8');

// We keep the stores in this array.
$nearbyStores = array();

// Execution of the SELECT query.
$res = @mysqli_query($mysqli, $sql);
if( $res ) {

	$in=0;

	// For each stores...
	while( $store = @mysqli_fetch_assoc($res) ) {

		$in++;

		// We construct two strings containing the distance in kilometers and miles.

		$store['distance-miles'] = round($store['distance']) . ' km';
		$store['number'] = $in;
		$store['horario'] = "<b>Abierto: </b> ".$store['horario'];
		$store['url'] = $store['url'];
		$store['name'] = $store['name'];
		if($store['delivery'] == "x"){$store['delivery'] = "Pide a domicilio";}
		if($store['new'] == "x"){$store['new'] = "<img src='new.png'>";} else{$marginninos = "right: 5%;";}
		if($store['ninos'] == "1"){$store['ninos'] = "<img src='ninos.svg'>";}else{$store['ninos'] ='';}

		if($store['alcohol'] == "1"){$store['alcohol'] = "<img src='mapicons/VentaDeCervezaVino.svg'>";}else{$store['alcohol'] ='';}
		if($store['remodelado'] == "1"){$store['remodelado'] = "<img src='mapicons/Remodelados.svg'>";}else{$store['remodelado'] ='';}
		if($store['estacionamiento'] == "1"){$store['estacionamiento'] = "<img src='mapicons/Estacionamiento.svg'>";}else{$store['estacionamiento'] ='';}
		if($store['salon'] == "1"){$store['salon'] = "<img src='mapicons/SalonDeEventos.svg'>";}else{$store['salon'] ='';}
		if($store['terraza'] == "1"){$store['terraza'] = "<img src='mapicons/Terraza.svg'>";}else{$store['terraza'] ='';}

		$store['latitude'] = $store['latitude'];
		$store['longitude'] = $store['longitude'];
		$store['linkmaps'] = "https://www.google.com/maps/dir/?api=1&destination=".$store['latitude'].",".$store['longitude'];
		$store['distance-kilometers'] = round($store['distance']) . ' km';
		// We add the store to the result array.
		$nearbyStores[] = $store;

	}
}

// We return the stores in JSON format.
echo json_encode($nearbyStores);
