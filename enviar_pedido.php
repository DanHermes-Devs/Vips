<?php
	$sessionTime = 365 * 24 * 60 * 60;
	$sessionName = "uservips";
	session_set_cookie_params($sessionTime);
	session_name($sessionName);
	session_start();

	if (isset($_COOKIE[$sessionName])) {
		setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
	}
	if( isset($_SESSION['uservips'])!="" ){
	
	}
	else{
		
		header("Location: /pedidos-especiales/");
	}
	include_once '../dbconnect.php';


	if (!empty($_POST["horario"])){ 
		$token = md5(uniqid(mt_rand()));

		//Datos del usuarios
		$ip = getenv('HTTP_CLIENT_IP')?:
		getenv('HTTP_X_FORWARDED_FOR')?:
		getenv('HTTP_X_FORWARDED')?:
		getenv('HTTP_FORWARDED_FOR')?:
		getenv('HTTP_FORWARDED')?:
		getenv('REMOTE_ADDR');
		$agent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
		date_default_timezone_set('America/Mexico_City');
		$finish_time = time();
		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		// clean user inputs to prevent sql injections

		$user = trim($_POST['user']);
		$user = strip_tags($user);
		$user = htmlspecialchars($user);

		$nombre = trim($_POST['nombre']);
		$nombre = strip_tags($nombre);
		$nombre = htmlspecialchars($nombre);

		$apellido = trim($_POST['apellido']);
		$apellido = strip_tags($apellido);
		$apellido = htmlspecialchars($apellido);

		$correo = trim($_POST['correo']);
		$correo = strip_tags($correo);
		$correo = htmlspecialchars($correo);
		$correo = strtolower($correo);

		
		$tel = trim($_POST['tel']);
		$tel = strip_tags($tel);
		$tel = htmlspecialchars($tel);


		$direccion = trim($_POST['direccion']);
		$tel = strip_tags($tel);
		$tel = htmlspecialchars($tel);

		$paquetes = trim($_POST['paquetes']);
		$paquetes = strip_tags($paquetes);
		$paquetes = htmlspecialchars($paquetes);
		
		
		$extras = trim($_POST['extras']);
		$extras = strip_tags($extras);
		$extras = htmlspecialchars($extras);
		
		$subtotal = trim($_POST['subtotal']);
		$subtotal = strip_tags($subtotal);
		$subtotal = htmlspecialchars($subtotal);

		$porcentaje = trim($_POST['porcentaje']);
		$porcentaje = strip_tags($porcentaje);
		$porcentaje = htmlspecialchars($porcentaje);
		
		$descuento = trim($_POST['descuento']);
		$descuento = strip_tags($descuento);
		$descuento = htmlspecialchars($descuento);
		
		$total = trim($_POST['total']);
		$total = strip_tags($total);
		$total = htmlspecialchars($total);
		
		$payload = trim($_POST['payload']);



		$entrega = trim($_POST['entrega']);
		$entrega = strip_tags($entrega);
		$entrega = htmlspecialchars($entrega);
		
		$horario = trim($_POST['horario']);
		$horario = strip_tags($horario);
		$horario = htmlspecialchars($horario);
		
		$vips = trim($_POST['vips']);
		$vips = strip_tags($vips);
		$vips = htmlspecialchars($vips);

		$referencias = trim($_POST['referencias']);
		$referencias = strip_tags($referencias);
		$referencias = htmlspecialchars($referencias);

		//Nombre completo
		$nombrecompleto = $nombre ." ". $apellido;
		
		$query = "INSERT INTO pedidos_especiales(id_usuario, nombre, apellido, correo, direccion, telefono, paquetes, extras, subtotal, porcentaje, descuento, total, fecha_entrega, horario, vips_cercano,  fecha_pedido, token, ip, browser, activo, referencias, payload) VALUES('$user', '$nombre', '$apellido','$correo', '$direccion', '$tel', '$paquetes', '$extras', $subtotal, $porcentaje, $descuento, $total, '$entrega', '$horario', '$vips', '$texto_finish', '$token', '$ip', '$agent', 1, '$referencias', '$payload')";

		$res = $mysqli->query($query) or die("Falló la consulta $query");
					$row=mysqli_fetch_array($res);

					if ($res) {

						 $url = 'https://api.sendgrid.com/';
						 $user = 'azure_1bf6f2b6402593ac2447499de59fff2e@azure.com';
						 $pass = 'U6VRPDh8n5LpaVrm';

						 $params = array(
							  'api_user' => $user,
							  'api_key' => $pass,
							  //'to' => 'cenasnavidad@vips.com.mx',
							  'to' => 'armando@wearetrafika.com',
							  'bcc'  => 'armando@trafika.mx',
							  'subject' => 'Nuevo pedido',
							  'html' => "<center><div style='width:100%; max-width:550px;'><img style='width:100%;' src='https://vips.com.mx/img/pleca-mail-navidad.jpg'>
											<h1 style='color:#e1243c;'>Se ha registrado un nuevo pedido</h1>
											<p>Por favor acceda al siguiente enlace para ver los detalles</p>
											<a href='https://vips.com.mx/pedido-navidad?token=".$token."'>https://vips.com.mx/pedido-navidad?token=".$token."</a>
											<p>Fecha y Hora: ".$texto_finish."</p></div></center>",
							  'text' => 'Nuevo pedido',
							  'from' => 'azure_1bf6f2b6402593ac2447499de59fff2e@azure.com',
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
						  //$_SESSION['vipscercano'] = NULL;
						  
						  echo '<style>#sendnfl{display:none!important;}</style><script>window.location.replace("/pedidos-especiales/pedido-enviado");</script>';
							} else {
							 echo "<div class='errormsg'>Ocurrió un error al enviar tu pedido, por favor intenta nuevamente más tarde...</div>";
							}

						 // print everything out
						 //print_r($response);
	

					}

					else {
						echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";
					}



	}

	else{
		echo "spam";
	}

?>
