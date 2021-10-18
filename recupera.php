<?php
include("dbconnect.php");

//Limpiar datos para evitar SQL Injection
$emailpass = trim($_POST['correopass']);
$emailpass= strip_tags($emailpass);
$emailpass = htmlspecialchars($emailpass);

$resultado = $mysqli->query("SELECT * FROM registros WHERE correo = '$emailpass'");
$numero_filas = $resultado->num_rows;

if ($numero_filas == 0) {
	echo "No existe ninguna cuenta registrada con el email ingresado, por favor verifícalo e intenta nuevamente.";
}

else if ($numero_filas == 1) {
	$respass=$mysqli->query("SELECT * FROM registros WHERE correo='$emailpass'");
				$rowpass=mysqli_fetch_array($respass);
				
				if(strlen($rowpass['password']) > 5){
					$time = time();
					$pass = hash('sha256',  $rowpass['password']);
					$uniqidStr = md5(uniqid(mt_rand()));
					$resetPassLink = 'https://vips.com.mx/resetPassword.php?fp_code='.$uniqidStr;
					$consulta = "UPDATE registros SET pass_code = '" .$uniqidStr. "' WHERE correo = '".$emailpass."'";
					$mysqli->query($consulta);
					$consulta2 = "UPDATE registros SET code_expires = '" .$time. "' WHERE correo = '".$emailpass."'";
					$mysqli->query($consulta2);
					

					$finish_time = time();		

					$texto_finish= date("d/m/y h:i:s a", $finish_time);
					
					$to = $rowpass['correo'];

					$email_subject = "Vips | Recupera tu contraseña"; //Asunto


$the_subject = "Vips | Recupera tu contraseña";
//$address_to = "hello@armandojm.com";
$address_to = $to;
$from_name = "Vips";

		 $url = 'https://api.sendgrid.com/';
						 $user = 'azure_1bf6f2b6402593ac2447499de59fff2e@azure.com';
						 $pass = 'U6VRPDh8n5LpaVrm';

						 $params = array(
							  'api_user' => $user,
							  'api_key' => $pass,
							  //'to' => 'cenasnavidad@vips.com.mx',
							  'to' => $address_to,
							  //'bcc'  => 'armando@trafika.mx',
							  'subject' => 'Vips | Recupera tu contraseña',
							  'html' => '<style>
			table{
				    MARGIN: 0 AUTO;
					BORDER-RADIUS: 20PX;

					max-width:700px!important;
			}
			body, td, input, textarea, select {
					margin: 0;
					font-family: CENTURY GOTHIC, arial,sans-serif;
				}
				a{color:#fdda00;}

			.hx {
					color: #64506C!important;

				}

				img {
					 color:#F0F0F0;
					 font-size:30px;
					font-family: century-gothic, sans-serif;
					}

			.im {
					color: #f0f0f0;
				}
				.a:visited {
					color: #f0f0f0;
				}
			</style>
			</head>
			<body style="background-color:#ecf0f1;">
				<table border=0 width="90%"
				style="
				    border: 2px solid #eee;
					font-family: Century gothic, Helvetica, sans-serif;
					color: #f0f0f0;
					font-size: 130%;
					background-color:#fff;
					max-width: 700px;
					padding: 40px 20px;
					border-radius: 2px;
					position: relative;
					margin: 0 auto;
					top: 1em;
				}
				"
				bgcolor="white">
					<tr><td align="center">

					</td></tr>

					<tr><td align="center" height="200">
					<h3 style="color:#f29100; foont-weight:bold;">VIPS | RECUPERA TU CONTRASEÑA</h3>


					<div style="text-align:left; color:#444!important; margin-top:20px; width:80%;background-color: #fff;
					border-radius: 30px;
					padding: 30px;">
					<h2>Hola <b>'.$rowpass['nombre'].'</b></h2> 
					 Accede a este enlace para restablecer tu contraseña:<br><br>
						
						<a style="color:#f29100" href="'.$resetPassLink.'">'.$resetPassLink.' </a><br><br>

						Este enlace funcionará solamente por los próximos 90 minutos. Si excedes el límite de tiempo, simplemente solicita un nuevo enlace.<br><br>

						Enlace solicitado el: '.$texto_finish.'
					</div><br />

					</td></tr>
				</table>
',
							  'text' => 'Vips | Recupera tu contraseña',
							  'from' => 'Vips',
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
						
						  
						    echo "Consulta tu correo electrónico para recuperar tu contraseña, si no ves el mensaje, revisa tu carpeta de Spam.";
							echo "<style>.inputs5, #btnrecover{display:none!important;;}#respuesta3 {padding: 0 20% 5% 20%;}</style>";
							} else {
							 echo "<div class='errormsg'>Ocurrió un error al enviar el correo de recuperación, por favor intenta nuevamente más tarde...</div>";
							}

						 // print everything out
						 //print_r($response);
					
					
					
}
				
				else{
				echo "<p>Tu cuenta fue registrada con Facebook, por favor inicia sesión dando click en el botón.</p></br>
				<div class='form-group' style='text-align: center;'>
					
						<a href='/fbconfig' id='fb'>Inicia sesión con Facebook</a>
					</div>
				
				";
				exit;
				}
				
				

	
	

}


?>