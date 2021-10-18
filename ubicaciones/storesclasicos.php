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

	$sql = "SELECT id_voto, vips_cercano, opcion,  latitud, longitud,
			 ((ACOS(SIN($lat * PI() / 180) * SIN(latitud * PI() / 180) + COS($lat * PI() / 180) * COS(latitud * PI() / 180) * COS(($lng - longitud) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
    FROM     `votos_clasicos` WHERE	 vips_cercano != 'undefined'
	HAVING distance <= 40.0
    ORDER BY distance ASC LIMIT 10";


}

else{

	// SQL request. The complexe part is here to compute the distance
// between the position passed in the parameters and each store.
$sql = "SELECT id_voto, vips_cercano, opcion, latitud, longitud,
			 ((ACOS(SIN($lat * PI() / 180) * SIN(latitud * PI() / 180) + COS($lat * PI() / 180) * COS(latitud * PI() / 180) * COS(($lng - longitud) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
    FROM     votos_clasicos WHERE	 vips_cercano != 'undefined'
	HAVING distance <= 40.0
    ORDER BY distance ASC LIMIT 10";


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
		
		$store['id'] = $store['id_voto'];
		
		$store['name'] = $store['opcion'];
		$store['vips'] = $store['vips_cercano'];
		
		switch ($store['name']) {
    case "Vips Club":
        $store['plato'] = "<img class='imgplato' src='/img/clasicos/platos/vipsclub.png'>";
        break;
    case "Sopa especial Vips":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/sopaespecialvips.png'>";
        break;
    case "Pepitos Vips de pollo":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/pepitosdepollo.png'>";
        break;
	case "Caldo Tlalpeño":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/caldotlalpeno.png'>";
        break;

		case "Tacos dorados de pollo":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/tacosdoradosdepollo.png'>";
        break;
		case "Enchiladas Suizas":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/enchiladassuizas.png'>";
        break;

		case "Cheescake con fresas":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/Cheescakeconfresas.png'>";
        break;		
		
		case "Vips clásica con queso":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/Vipsclasicaconqueso.png'>";
        break;

		case "Crepas de cajeta":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/crepasdecajeta.png'>";
        break;
		
		
		case "Enchiladas de mole":
         $store['plato']  = "<img class='imgplato' src='/img/clasicos/platos/enchiladasdemole.png'>";
        break;
    
}

		

		$store['latitude'] = $store['latitud'];
		$store['longitude'] = $store['longitud'];
		$store['distance-kilometers'] = round($store['distance']) . ' km';
		// We add the store to the result array.
		$nearbyStores[] = $store;

	}
}

// We return the stores in JSON format.
echo json_encode($nearbyStores);
