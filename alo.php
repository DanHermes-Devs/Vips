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
$hora_entrega ="00:00-06:00";
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
		
if($horario == "10:00 am - 12:00 pm"){
	$hora_entrega = "10:00-12:00";
}

if($horario == "12:00 pm - 02:00 pm"){
	$hora_entrega = "12:00-14:00";
}

if($horario == "02:00 pm - 04:00 pm"){
	$hora_entrega = "14:00-16:00";
}

if($horario == "04:00 pm - 06:00 pm"){
	$hora_entrega = "16:00-18:00";
}
if($horario == "06:00 pm - 08:00 pm"){
	$hora_entrega = "18:00-20:00";
}
			
if(strlen($codigo_pedido)<5){
				
				$someJSON = '['.$payload.']';

				// Convert JSON string to Array
				$someArray = json_decode($someJSON, true);
				  //print_r($someArray);        // Dump all data of the Array
				  //echo $someArray[0]["clave"]; // Access Array data
				$items ="";
				foreach ($someArray as $key => $value) {
	
					 $items.='<div style="width:100%; display:inline-block;"><img src="https://vips.com.mx'.$value["foto"].'" style="width: 20%; float: left; vertical-align: middle;"><p style="width: 80%;
					float: left; vertical-align: middle; text-align: left; margin-top: 7.5%; color:#222;">'. $value["cantidad"] . " ". $value["clave"] . "- $" . $value["total"].'</p></div>';
	
	
					if($value["clave"] == "Fetuccini Alfredo"){ $idprod = 18032; }
					if($value["clave"] == "Spaguetti con mini albóndigas"){ $idprod = 18033; }
					if($value["clave"] == "Penne al cilantro"){ $idprod = 18034; }
					if($value["clave"] == "Cheesecake de trufa entero"){ $idprod = 29306; }
					if($value["clave"] == "Cheesecake de guayaba entero"){ $idprod = 29002; }
					if($value["clave"] == "Deliciosas donas rosas "){ $idprod = 2108; }

				   $formattedProducts[] ='{
					"item": {
							"iditem": "'.$idprod.'",
							"name": "'.$value["clave"].'",
							"longName": "'.$value["clave"].'",
							"hasModifier": "0",
							"menuItemId": "'.$idprod.'",
							"quantity": '.$value["cantidad"].'
						}
				   }	'; 

				}
				$listFinal = implode(',', $formattedProducts);



				$sqlst = "SELECT * FROM stores WHERE name = '$vips_cercano'";
				$resultst = $mysqli->query($sqlst)  or die("Error en".$sqlst);
				$numfilasst = $resultst->num_rows;


				if($numfilasst ==1){

					while($rowst= mysqli_fetch_array($resultst)){
						$vips_name = $rowst["name"];
						$vips_zip = $rowst["zip"];
						$vips_city = $rowst["city"];
						$vips_state = $rowst["state"];
						$vips_latitude = $rowst["latitude"];
						$vips_longitude = $rowst["longitude"];
						$vips_mail = $rowst["gerente"];
						$vips_ipv4 = $rowst["ipv4"];
						$vips_number = $rowst["storeNumber"];
						}


				}
  
				$cena1 = '{
					"oloClientData": {
						"idClient": "291036",
						"phoneNum": "5510146608",
						"phoneExt": "",
						"phoneDesc": "",
						"firstName": "Monedero",
						"lastName": "Vips",
						"mothersName": "Vips",
						"email": "",
						"orderNotes": "A recoger en tienda en fecha y hora indicada",
						"addrAlias": "",
						"streetName": "'.$vips_name.'",
						"streetNum": "'.$vips_zip.'",
						"unitNumber": "",
						"customerNotes": "A recoger en tienda en fecha y hora indicada",
						"zipCode": "'.$vips_zip.'",
						"colony": "--",
						"city": "'.$vips_city.'",
						"municipality": "'.$vips_city.'",
						"idGeoState": "9",
						"idGeoCountry": 150,
						"latitude": "'.$vips_latitude.'",
						"longitude": "'.$vips_longitude.'"
					},
					"remoteAddress": "189.204.157.122",
					"HTTPUserAgent": "Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/73.0.3683.103 Safari\/537.36",
					"storeNumber": "'.$vips_number.'",
					"IPv4": "'.$vips_ipv4.'",
					"orderSource": "CallCenter",
					"latitude": "'.$vips_latitude.'",
					"longitude": "'.$vips_longitude.'",
					"idValidUser": "595",
					"userLogin": "adrian",
					"order": {
						"items": [
							'.$listFinal.'
						],
						"customer": {
							"firstName": "'.$nombre.'",
							"lastName": "'.$apellido.'",
							"addressLine1": "Pedido Sitio Vips.com",
							"city": "'.$vips_city.'",
							"state": "'.$vips_state.'",
							"zipCode": "'.$vips_zip.'",
							"phoneNumber": "'.$tel.'",
							"extension": "",
							"email": "'.$correo.'",
							"emailOptIn": 1,
							"notes": "A recoger en tienda en fecha y hora indicada"
						},
						"couponDescription": "",
						"couponAmount": 0,
						"couponPercentage": 0,
						"orderNotes": "A recoger en tienda en fecha y hora indicada",
						"dinerNumber": "1",
						"futureOrder": "'.$fecha_entrega.'T13:'.$hora_entrega.'"
					}
				}';


				$queryn = "UPDATE pedidos_especiales SET olo = '$cena1' WHERE id_pedido = $id_pedido";
				$resn = $mysqli->query($queryn) or die("Falló la consulta $queryn");
							

					$data['m2f']             = 'storeSpecialEvent';//priceEvent
					$data['serverIP']        = '10.16.91.100';
					$data['storeNumber']     = '81064';
					$data['orderData']       = $cena1;
					$data                    = http_build_query($data);

					$ch = curl_init('https://adminvips2.teamolo.info/mxPower/alohaRemoteRequest.php');//endpoint vips

					curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
					curl_setopt($ch, CURLOPT_HEADER, false);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

					$response = curl_exec($ch);
					curl_close($ch);
					echo "<pre>";
					//print_r($response);
					$stringrespuesta = print_r($response, true);
					$array = json_decode($response, true);
					$status = $array['SpecialEventRetoStatusText'];
					$codigo = $array['electronicCard'];
				
						
						if($status == "SUCCESS"){
									
									$finish_time = time();
									$texto_finish= date("d/m/y h:i:s a", $finish_time);
							$query2 = "UPDATE pedidos_especiales SET codigo = '$codigo', olo = '$cena1', response = '$stringrespuesta' WHERE id_pedido = $id_pedido";
							$res2 = $mysqli->query($query2) or die("Falló la consulta $query2");
							if ($res2) {
								
								 $url = 'https://api.sendgrid.com/';
						 $user = 'azure_1bf6f2b6402593ac2447499de59fff2e@azure.com';
						 $pass = 'U6VRPDh8n5LpaVrm';

						 $params = array(
							  'api_user' => $user,
							  'api_key' => $pass,
							  //'to' => 'cenasnavidad@vips.com.mx',
							  'to' => $correo,
							  'bcc'  => 'armando@wearetrafika.com',
							  'subject' => 'Nuevo pedido | Vips',
							  'html' => "<center><div style='width:100%; max-width:550px; background-image:url(https://vips.com.mx/fondo.jpg); background-size:cover; font-family:Century gothic, sans-serif; color:#222; box-shadow: 0 2px 4px 0 rgba(207,207,207,.5); border: solid 1px #ededed;'><img style='width:100%;' src='https://vips.com.mx/pleca.jpg'>
											<h1 style='color:#e1243c; font-size:22px;'>".ucwords($nombre).", ¡Gracias por hacer tu pedido!</h1>
											<p style='width:100%; text-align:left; color:#f5a623; padding-left:2.5%;'><b>Resumen de tu pedido</b></p>
											<div class='items' style='width: 87.5%; margin: 10px 2.5%; border-radius: 30px; box-shadow: 0 2px 4px 0 rgba(207,207,207,.5); border: solid 1px #ededed; background: #fff; padding:15px;'>
											".$items."
											</div>
											
											<div id='entrega' style='width:50%; float:left;'>
											<p class='titb'><b>Fecha de entrega</b></p>
											<p>".$fecha_entrega."</p>

											</div>	
	
											<div id='hora' style='width:50%; float:left;'>
											
												<p class='titb'><b>Horario de entrega</b></p>
												<p style='color:#222;'>".$horario."</p>

											</div>
											
											<div id='total' style='width:100%; float:left;'>
											
												<p class='titb'><b>Total del pedido</b></p>
												<p>$".$total."</p>

											</div>
											
											<p style='color:#222;'><b>Presenta este código en ".$vips_cercano.". <br> Tienes hasta el día <span style='color:#ed1c2c'>7 de Mayo</span><br> para pagar el 100% de tu pedido.</b></p>
											
											
											<p style='font-size:11px; color:#222;'>Además puedes encontrar este código en tu perfil en</p>
											<a href='https://vips.com.mx'><p style='color:#222'>vips.com.mx</p></a>
											
											<img src='http://vips.digitaltryout.com/barcode/bar.php?code=".$codigo."&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2' style='margin-top:15px; width:50%; max-width:290px;'><p><b>".$codigo."</b></p>
											
											<p>Fecha y Hora: ".$texto_finish."</p></div></center>",
							  'text' => 'Nuevo pedido /Vips',
							  'from' => 'pedidos@vips.com.mx',
						   );

						 $request = $url.'api/mail.send.json';

						 // Generate curl request
						 $session = curl_init($request);

						 // Tell curl to use HTTP POST
						 curl_setopt ($session, CURLOPT_POST, true);

						 // Tell curl that this is the body of the POST
						 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

						 // Tell curl not to return headers, but do return the response
						 curl_setopt($session, CURLOPT_HEADER, false);
						 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

						 // obtain response
						 $response = curl_exec($session);
						 curl_close($session);
						 $stringresponse = $response;
						 $exito   = 'success';
						 $pos = strpos($stringresponse, $exito);
						 
						 
						if ($pos !== false) {
							
							$finish_time = time();
									$texto_finish= date("d/m/y h:i:s a", $finish_time);
							
						
								
								 $url = 'https://api.sendgrid.com/';
						 $user = 'azure_1bf6f2b6402593ac2447499de59fff2e@azure.com';
						 $pass = 'U6VRPDh8n5LpaVrm';

						 $params = array(
							  'api_user' => $user,
							  'api_key' => $pass,
							  //'to' => 'cenasnavidad@vips.com.mx',
							  'to' => $vips_mail,
							  'bcc'  => 'armando@wearetrafika.com',
							  'subject' => 'Nuevo pedido | Vips',
							  'html' => "<center><div style='width:100%; max-width:550px; background-image:url(https://vips.com.mx/fondo.jpg); background-size:cover; font-family:Century gothic, sans-serif; color:#222; box-shadow: 0 2px 4px 0 rgba(207,207,207,.5); border: solid 1px #ededed;'><img style='width:100%;' src='https://vips.com.mx/pleca.jpg'>
											<h1 style='color:#e1243c; font-size:22px;'>Has recibido un nuevo pedido</h1>
											<p style='width:100%; text-align:left; color:#f5a623; padding-left:2.5%;'><b>Datos del cliente</b></p>
											<p><b>Nombre: </b> ".ucwords($nombre)." ".ucwords($apellido)."</p>
											<p><b>Correo: </b> ".$correo." </p>
											<p><b>Tel.: </b> ".$tel." </p>
											<p style='width:100%; text-align:left; color:#f5a623; padding-left:2.5%;'><b>Resumen del pedido</b></p>
											<div class='items' style='width: 87.5%; margin: 10px 2.5%; border-radius: 30px; box-shadow: 0 2px 4px 0 rgba(207,207,207,.5); border: solid 1px #ededed; background: #fff; padding:15px;'>
											".$items."
											</div>
											
											<div id='entrega' style='width:50%; float:left;'>
											<p class='titb'><b>Fecha de entrega</b></p>
											<p>".$fecha_entrega."</p>

											</div>	
	
											<div id='hora' style='width:50%; float:left;'>
											
												<p class='titb'><b>Horario de entrega</b></p>
												<p style='color:#222;'>".$horario."</p>

											</div>
											
											<div id='total' style='width:100%; float:left;'>
											
												<p class='titb'><b>Total del pedido</b></p>
												<p>$".$total."</p>

											</div>
											
											
											
											<p>Fecha y Hora: ".$texto_finish."</p></div></center>",
							  'text' => 'Nuevo pedido /Vips',
							  'from' => 'pedidos@vips.com.mx',
						   );

						 $request = $url.'api/mail.send.json';

						 // Generate curl request
						 $session = curl_init($request);

						 // Tell curl to use HTTP POST
						 curl_setopt ($session, CURLOPT_POST, true);

						 // Tell curl that this is the body of the POST
						 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

						 // Tell curl not to return headers, but do return the response
						 curl_setopt($session, CURLOPT_HEADER, false);
						 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

						 // obtain response
						 $response = curl_exec($session);
						 curl_close($session);
						 $stringresponse = $response;
						 $exito   = 'success';
						 $pos = strpos($stringresponse, $exito);
						  
						}
						else {
							 echo "<div class='errormsg'>Ocurrió un error al enviar tu pedido, por favor intenta nuevamente más tarde...</div>";
							}
						}
						
						else{
							echo "<div class='errormsg'>Ocurrió un error al registrar tu pedido, por favor intenta nuevamente más tarde...</div>";
						}
				
			}
			
}
			
			
					
?>
