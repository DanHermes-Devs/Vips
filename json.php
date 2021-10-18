<?php
date_default_timezone_set('America/Mexico_City');
include_once '../dbconnect.php';

if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];


	$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$resulth =$mysqli->query($sql3h);
	$rowregh=mysqli_fetch_assoc($resulth);
	$uid = $rowregh['id_registro'];
	$_SESSION['uservips'] = $uid;



	}
	
$sql1n = "SELECT * FROM pedidos_especiales WHERE id_usuario = '$uid' ORDER BY id_pedido DESC LIMIT 1";
$result1n = $mysqli->query($sql1n)  or die("Error en".$sql1n);

		while($row1n= mysqli_fetch_array($result1n)){

			$id_pedido = $row1n["id_pedido"];
			$nombre = $row1n["nombre"];
			$apellido = $row1n["apellido"];
			$correo = $row1n["correo"];
			$tel = $row1n["telefono"];
			$pedido = $row1n["paquetes"];
			$pedido = "• ". preg_replace("/\r\n|\r|\n/",'<br/><br/>• ',$pedido);
			$total = $row1n["total"];
			$fecha_entrega = $row1n["fecha_entrega"];
			$horario = $row1n["horario"];
			$vips_cercano = $row1n["vips_cercano"];
			$payload = $row1n["payload"];
			$codigo_pedido = $row1n["codigo"];

			}
			

				
	$someJSON = '['.$payload.']';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  //print_r($someArray);        // Dump all data of the Array
  //echo $someArray[1]["clave"]; // Access Array data
  $items ="";
  $items2 ="";
  $idprod =1;
  $count = count($someArray);
  $i = $count;
  foreach ($someArray as $key => $value) {
	if($value["clave"] == "Fetuccini Alfredo"){ $idprod = 18032; }
	if($value["clave"] == "Spaguetti con mini albóndigas"){ $idprod = 18033; }
	if($value["clave"] == "Penne al cilantro"){ $idprod = 18034; }
	if($value["clave"] == "Cheesecake de trufa entero"){ $idprod = 29306; }
	if($value["clave"] == "Cheesecake de guayaba entero"){ $idprod = 29002; }
	if($value["clave"] == "Deliciosas donas rosas "){ $idprod = 2108; }

	   $formattedProducts[] ='
		"item": {
                "iditem": "'.$idprod.'",
                "name": "'.$value["clave"].'",
                "longName": "'.$value["clave"].'",
                "hasModifier": "0",
                "menuItemId": "'.$idprod.'",
                "quantity": '.$value["cantidad"].'
            }'; 
	
	
	}
	  
	$listFinal = implode(',', $formattedProducts);
	//echo $listFinal; 
	
	//echo $items2;
	
  
$cena1 = '{
    "oloClientData": {
        "idClient": "127300",
        "phoneNum": "5523160517",
        "phoneExt": "",
        "phoneDesc": "",
        "firstName": "Armando",
        "lastName": "Jiménez",
        "mothersName": "Morales",
        "email": "jcastillo.gu@gesfor.com.mx",
        "orderNotes": "PRUEBA OLO",
        "addrAlias": "",
        "streetName": "Av. Revolucion",
        "streetNum": "1267",
        "unitNumber": "Piso 3",
        "customerNotes": "81278 -  - Vips Portal San Angel",
        "zipCode": "01040",
        "colony": "Los Alpes",
        "city": "Ciudad de M\u00e9xico",
        "municipality": "\u00c1lvaro Obreg\u00f3n",
        "idGeoState": "9",
        "idGeoCountry": 150,
        "latitude": "19.3611320",
        "longitude": "-99.1902390"
    },
    "remoteAddress": "189.204.157.122",
    "HTTPUserAgent": "Mozilla\/5.0 (Windows NT 10.0; Win64; x64; rv:64.0) Gecko\/20100101 Firefox\/64.0",
    "storeNumber": "81084",
    "IPv4": "172.17.36.100",
    "orderSource": "CallCenter",
    "latitude": "19.3611320",
    "longitude": "-99.1902390",
    "idValidUser": "595",
    "userLogin": "adrian",
    "order": {
        "items": [{
            "item": {
                "iditem": "18032",
                "name": "Pasta Alfredo",
                "longName": "Pasta Alfredo",
                "hasModifier": "0",
                "menuItemId": "18032",
                "quantity": 1
            },
			 "item": {
                "iditem": "18033",
                "name": "Espaghetti con albondigas",
                "longName": "Espaghetti con albondigas",
                "hasModifier": "0",
                "menuItemId": "18033",
                "quantity": 1
            },
			"item": {
                "iditem": "18034",
                "name": "Penne en salsa de cilantro",
                "longName": "Penne en salsa de cilantro",
                "hasModifier": "0",
                "menuItemId": "18034",
                "quantity": 1
            },
			"item": {
                "iditem": "29002",
                "name": "Cheesecake de guayaba ENTERO",
                "longName": "Cheesecake de guayaba ENTERO",
                "hasModifier": "0",
                "menuItemId": "29002",
                "quantity": 1
            },
			"item": {
                "iditem": "29306",
                "name": "Cheesecake de trufa ENTERO",
                "longName": "Cheesecake de trufa ENTERO",
                "hasModifier": "0",
                "menuItemId": "29306",
                "quantity": 1
            },
			"item": {
                "iditem": "2108",
                "name": "Caja de donas rosas (6 pzas)",
                "longName": "Caja de donas rosas (6 pzas)",
                "hasModifier": "0",
                "menuItemId": "2108",
                "quantity": 1
            }
        }],
        "customer": {
            "firstName": "'.$nombre.'",
            "lastName": "'.$apellido.'",
            "addressLine1": "1267 # Av. Revolucion",
            "city": "Ciudad de M\u00e9xico",
            "state": "Distrito Federal",
            "zipCode": "01040",
            "phoneNumber": "'.$tel.'",
            "extension": "",
            "email": "'.$correo.'",
            "emailOptIn": 1,
            "notes": "81278 -  - Vips Portal San Angel \/ Cliente requiere cambio de $ 100.00"
        },
        "couponDescription": "",
        "couponAmount": 0,
        "couponPercentage": 0,
        "orderNotes": "Tel: 5523160517  Ext:  \/ Calle: Av. Revolucion # 1267 \/ Interior: Piso 3  \/ Colonia: Los Alpes \/ C.P.: 01040  \/ Delegaci\u00c3\u00b3n: \u00c1lvaro Obreg\u00f3n  \/ Ciudad: Ciudad de M\u00e9xico \/ Estado: Distrito Federal \/ Cliente requiere cambio de $ 100.00 \/ Entre Calles: 81278 -  - Vips Portal San Angel \/ (EFECTIVO)",
        "dinerNumber": "1",
        "futureOrder": "2019-10-06T13:00:00-06:00"
    }
}';


$cena2 = '{
    "oloClientData": {
        "idClient": "127300",
        "phoneNum": "5523160517",
        "phoneExt": "",
        "phoneDesc": "",
        "firstName": "Armando",
        "lastName": "Jiménez",
        "mothersName": "Morales",
        "email": "jcastillo.gu@gesfor.com.mx",
        "orderNotes": "PRUEBA OLO",
        "addrAlias": "",
        "streetName": "Av. Revolucion",
        "streetNum": "1267",
        "unitNumber": "Piso 3",
        "customerNotes": "81278 -  - Vips Portal San Angel",
        "zipCode": "01040",
        "colony": "Los Alpes",
        "city": "Ciudad de M\u00e9xico",
        "municipality": "\u00c1lvaro Obreg\u00f3n",
        "idGeoState": "9",
        "idGeoCountry": 150,
        "latitude": "19.3611320",
        "longitude": "-99.1902390"
    },
    "remoteAddress": "189.204.157.122",
    "HTTPUserAgent": "Mozilla\/5.0 (Windows NT 10.0; Win64; x64; rv:64.0) Gecko\/20100101 Firefox\/64.0",
    "storeNumber": "81084",
    "IPv4": "172.17.36.100",
    "orderSource": "CallCenter",
    "latitude": "19.3611320",
    "longitude": "-99.1902390",
    "idValidUser": "595",
    "userLogin": "adrian",
    "order": {
        "items": [{
            '.$listFinal.'
        }],
        "customer": {
            "firstName": "'.$nombre.'",
            "lastName": "'.$apellido.'",
            "addressLine1": "1267 # Av. Revolucion",
            "city": "Ciudad de M\u00e9xico",
            "state": "Distrito Federal",
            "zipCode": "01040",
            "phoneNumber": "'.$tel.'",
            "extension": "",
            "email": "'.$correo.'",
            "emailOptIn": 1,
            "notes": "81278 -  - Vips Portal San Angel \/ Cliente requiere cambio de $ 100.00"
        },
        "couponDescription": "",
        "couponAmount": 0,
        "couponPercentage": 0,
        "orderNotes": "Tel: 5523160517  Ext:  \/ Calle: Av. Revolucion # 1267 \/ Interior: Piso 3  \/ Colonia: Los Alpes \/ C.P.: 01040  \/ Delegaci\u00c3\u00b3n: \u00c1lvaro Obreg\u00f3n  \/ Ciudad: Ciudad de M\u00e9xico \/ Estado: Distrito Federal \/ Cliente requiere cambio de $ 100.00 \/ Entre Calles: 81278 -  - Vips Portal San Angel \/ (EFECTIVO)",
        "dinerNumber": "1",
        "futureOrder": "2019-10-06T13:00:00-06:00"
    }
}';

echo $cena1;
echo "<br>";

echo $cena2;
			
			
					
?>
