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


					//Cuerpo del mensaje
				$email_body = '


			<style>
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

		';




	 
	 include "phpmailer1/class.phpmailer.php";
include "phpmailer1/class.smtp.php";

$email_user = "noreply@vips.digitaltryout.com";
$email_password = "Vips2018";
$the_subject = "Vips | Recupera tu contraseña";
//$address_to = "hello@armandojm.com";
$address_to = $to;
$from_name = "Vips";
$phpmailer = new PHPMailer();

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
//$phpmailer->SMTPDebug = 2;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "p3plcpnl012.prod.phx3.secureserver.net"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;

$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email

$phpmailer->Subject = $the_subject;	
$phpmailer->Body =$email_body;
$phpmailer->IsHTML(true);
$phpmailer->CharSet = 'utf-8';


if(!$phpmailer->Send()) {
  echo "Error: " . $phpmailer->ErrorInfo;
} else {
  echo "Consulta tu correo electrónico para recuperar tu contraseña, si no ves el mensaje, revisa tu carpeta de Spam.";
}
					
					
					
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