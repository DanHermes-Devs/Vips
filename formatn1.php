<?php
	ob_start();
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
include_once 'dbconnect.php';

$token = md5(uniqid(mt_rand()));


		function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }



if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename= "photo-".$token.$ext;
	$target_path = "evidencias/".$imagename;


if(move_uploaded_file($temp_name, $target_path)) {


	$ip = getenv('HTTP_CLIENT_IP')?:
	getenv('HTTP_X_FORWARDED_FOR')?:
	getenv('HTTP_X_FORWARDED')?:
	getenv('HTTP_FORWARDED_FOR')?:
	getenv('HTTP_FORWARDED')?:
	getenv('REMOTE_ADDR');

	$agent = mysqli_real_escape_string($_SERVER['HTTP_USER_AGENT']);
	date_default_timezone_set('America/Mexico_City');

	$finish_time = time();

	$texto_finish= date("d/m/y h:i:s a", $finish_time);

	$rutaimg ="'".$target_path."'";


}else{
	echo "<span>No se pudo actualizar, por favor intenta más tarde</span>";
   exit("Error al cargar la imagen");
}

}


	if ( isset($_POST['nombreatn']) ) {

		//Datos del usuarios

		$ip = getenv('HTTP_CLIENT_IP')?:
		getenv('HTTP_X_FORWARDED_FOR')?:
		getenv('HTTP_X_FORWARDED')?:
		getenv('HTTP_FORWARDED_FOR')?:
		getenv('HTTP_FORWARDED')?:
		getenv('REMOTE_ADDR');

		$agent = mysqli_real_escape_string($_SERVER['HTTP_USER_AGENT']);

		$finish_time = time();

		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		// clean user inputs to prevent sql injections
		$problema = trim($_POST['problema']);
		$problema = strip_tags($problema);
		$problema = htmlspecialchars($problema);
		
		$otro_problema = trim($_POST['otro_problema']);
		$otro_problema = strip_tags($otro_problema);
		$otro_problema = htmlspecialchars($otro_problema);

		$nombre = trim($_POST['nombreatn']);
		$nombre = strip_tags($nombre);
		$nombre = htmlspecialchars($nombre);

		$celular = trim($_POST['phone']);
		$celular = strip_tags($celular);
		$celular = htmlspecialchars($celular);

		$correo = trim($_POST['correoalt']);
		$correo = strip_tags($correo);
		$correo = htmlspecialchars($correo);

		$en_tienda = trim($_POST['radio']);
		$en_tienda = strip_tags($en_tienda);
		$en_tienda = htmlspecialchars($en_tienda);

		$estado = trim($_POST['ciudad']);
		$estado = strip_tags($estado);
		$estado = htmlspecialchars($estado);

		$listvips = trim($_POST['listvips']);
		$listvips = strip_tags($listvips);
		$listvips = htmlspecialchars($listvips);


		$mensaje = trim($_POST['mensaje']);
		$mensaje = strip_tags($mensaje);
		$mensaje = htmlspecialchars($mensaje);



		$switch = trim($_POST['switch']);
		$switch = strip_tags($switch);
		$switch = htmlspecialchars($switch);




		if($en_tienda =="Si"){

			$subject = "¡¡¡¡ATENCIÓN INMEDIATA!!!!";

		}


		if($en_tienda =="No"){

			$subject = "Nuevo mensaje de Atención al Invitado";

		}
		
		if($otro_problema ==""){$otro_problema="-";}
		if($celular ==""){$celular="'-'";}
		if($archivo ==""){$archivo="'-'";}
		if($rutaimg ==""){$rutaimg="'-'";}
		
		$activo = 1;
			$query = "INSERT INTO form_atencion(token, problema, otro_problema, nombre, celular, correo, estado, vips, en_tienda, mensaje, archivo,  fecha_registro, enviado, ip, browser, activo) VALUES('$token','$problema', '$otro_problema','$nombre', '$celular', '$correo', '$estado', '$listvips', '$en_tienda', '$mensaje', $rutaimg, '$texto_finish', '$finish_time', '$ip', '$agent', 1)";


					
					$res = $mysqli->query($query)  or die("Falló la consulta $query");
					$row = mysqli_fetch_assoc($res);
					
				

					if ($res) {
						
						$resreg=$mysqli->query("SELECT * FROM stores WHERE name='$listvips'");
					$rowreg=mysqli_fetch_array($resreg);
					$gerente = $rowreg['gerente'];
					$coach = $rowreg['coach'];
					$divisional = $rowreg['divisional'];

					$tonew = $gerente.", ".$coach.", ".$divisional;
					
					if($problema =="Tengo una queja o comentario sobre el sitio web o las redes sociales de Vips"){
							$tonew = "armando@wearetrafika.com";
					}
					if($problema =="Tengo un problema con un concurso en el que participé"){
							$tonew = "armando@wearetrafika.com";
					}	
						
							include "phpmailer1/class.phpmailer.php";
							include "phpmailer1/class.smtp.php";

							$email_user = "vipsteatiende@vips.com.mx";
							$email_password = "#V.4ti3nd308#";
							$the_subject = $subject;
							//$address_to = "hello@armandojm.com";
							
							
							
							//$address_to = "hello@armandojm.com, odnam93@gmail.com, armando@wearetrafika.com";
							
							$address_to = $tonew;
							//$address_to = "hello@armandojm.com";
							
							$addresses = explode(',',$address_to);
								
							$from_name = "Vips";
							$phpmailer = new PHPMailer();

							// ---------- datos de la cuenta de Gmail -------------------------------
							$phpmailer->Username = $email_user;
							$phpmailer->Password = $email_password; 
							//-----------------------------------------------------------------------
							//$phpmailer->SMTPDebug = 2;
							$phpmailer->SMTPSecure = 'tls';
							$phpmailer->Host = "smtp.office365.com"; // GMail
							$phpmailer->Port = 587;
							$phpmailer->IsSMTP(); // use SMTP
							$phpmailer->SMTPAuth = true;

							$phpmailer->setFrom($phpmailer->Username,$from_name);
							//$phpmailer->AddAddress($address_to); // recipients email
							foreach ( $addresses as $address ){
									$phpmailer->AddAddress($address);
								}
						
							
							$email_body = "


			<h1 style='color:#3498db;'>Acceda al siguiente enlace para ver el mensaje</h1>
			<a href='https://vips.com.mx/mensaje-atn?token=".$token."'>https://vips.com.mx/mensaje-atn?token=".$token."</a>
			<p>Fecha y Hora: ".$texto_finish."</p>
			

		";

							$phpmailer->Subject = $the_subject;	
							$phpmailer->Body =$email_body;
					
							$phpmailer->IsHTML(true);
							$phpmailer->CharSet = 'utf-8';
							
							
							
							if(!$phpmailer->Send()) {
							  echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";
							} else {
							  echo "<div class='success'>Gracias, tu mensaje fue enviado con éxito y será atendido a la brevedad.</div>";
							  
							 $email_user2 = "vipsteatiende@vips.com.mx";
							$email_password2 = "#V.4ti3nd308#";
							$the_subject2 = "Gracias por escribirnos";
							//$address_to = "hello@armandojm.com";
							
							
							
							//$address_to = "hello@armandojm.com, odnam93@gmail.com, armando@wearetrafika.com";
							
							$address_to2 = $correo;
							
							$addresses2 = explode(',',$address_to2);
								
							$from_name2 = "Vips";
							$phpmailer2 = new PHPMailer();

							// ---------- datos de la cuenta de Gmail -------------------------------
							$phpmailer2->Username = $email_user2;
							$phpmailer2->Password = $email_password2; 
							//-----------------------------------------------------------------------
							//$phpmailer->SMTPDebug = 2;
							$phpmailer2->SMTPSecure = 'tls';
							$phpmailer2->Host = "smtp.office365.com"; // GMail
							$phpmailer2->Port = 587;
							$phpmailer2->IsSMTP(); // use SMTP
							$phpmailer2->SMTPAuth = true;

							$phpmailer2->setFrom($phpmailer2->Username,$from_name2);
							//$phpmailer->AddAddress($address_to); // recipients email
							foreach ( $addresses2 as $address2 ){
									$phpmailer2->AddAddress($address2);
								}
						
							
							$email_body2 = "


						<center><img src='https://vips.com.mx/img/letrero.jpg'></center>
			

		";

							$phpmailer2->Subject = $the_subject2;	
							$phpmailer2->Body =$email_body2;
					
							$phpmailer2->IsHTML(true);
							$phpmailer2->CharSet = 'utf-8';
							
														if(!$phpmailer2->Send()) {
								echo "Error: " . $phpmailer2->ErrorInfo;
								} else {
								
								}
	
							}
							
	
						
					
					
				

					}

					else {
						echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";
					}


	}

else{
echo "spam4";
}
ob_end_flush();
?>
