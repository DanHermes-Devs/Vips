<?php
session_start();
require_once('settings.php');
require_once('google-login-api.php');
$servername = "127.0.0.1";
$username = "bn_wordpress";
$password = "5e601fd753";
$dbname = "vips18";
	
	
$link = mysqli_connect($servername, $username, $password, $dbname);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);
		
		if(strlen($page)<3){
			
			$page = '/perfil';
			
		}
		

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, 'https://vips.com.mx/loginsocial/gauthlogin.php?page='.$page, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);

		//echo '<pre>';print_r($user_info); echo '</pre>';
		
		$id_google = $user_info['id'];
		$id_google = mysqli_real_escape_string($link, $id_google);
		$email = $user_info['emails'][0]['value'];
		$email = mysqli_real_escape_string($link, $email);
		$nombre = $user_info ['name']['givenName'];
		$nombre = mysqli_real_escape_string($link, $nombre);
		$apellido = $user_info ['name']['familyName'];
		$apellido = mysqli_real_escape_string($link, $apellido);
		$nombre_mostrar = $user_info ['displayName'];
		$avatar = $user_info ['image']['url'];
		$avatar = mysqli_real_escape_string($link, $avatar);

		
		//echo "Email = " . $email. "<br>Nombre = " . $nombre .  "<br>Apellido = " . $apellido .  "<br>Completo = " . $nombre_mostrar .  "<br>Imagen = " . $avatar;
		$sql = "select * from registros where correo='$email'";
		$result = $link->query($sql);
		$numfilas = $result->num_rows;
		if (empty($numfilas)) { // New user Insertion
		
			$ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');
			$agent = mysqli_real_escape_string($link, $_SERVER['HTTP_USER_AGENT']);
			$finish_time = time();
			$texto_finish= date("d/m/y h:i:s a", $finish_time);

			//INICIA INSERCIÓN GOOGLE
			$ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');
			$agent = mysqli_real_escape_string($link, $_SERVER['HTTP_USER_AGENT']);
			$finish_time = time();
			$texto_finish= date("d/m/y h:i:s a", $finish_time);

			$wsdl = 'https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';
			if (strlen($email)>3){
			  try{
				$clinet=new SoapClient($wsdl, array('trace' => 1));
				$ver =array("programName"=>"WOW Rewards", "contactEmailAddress"=>$email, "responseType"=>"long");
				$quates=$clinet->GetMember($ver);
				$miembros = json_decode(json_encode( $quates), True);
			   //print_r( $array );
			   //print_r( $quates );
				foreach ($miembros as $miembro){
				}

				foreach($miembro['programsList'] AS $result) {
				  foreach($result['program'] AS $topic) {
				  }
				  $array = array_values($result['earnedPointsList']);
				  $array2 = array_values($array[1]);
				  $puntostotales = print_r($array2[0]);

				}

			  }
			  catch(SoapFault $e)

			  {
				echo $e->getMessage();
			  }

			  $consul = $miembro['memberNumber'];

			}

			else{
				$wow = 1;
				$query = "INSERT INTO registros(google_id, nombre, apellido, correo, password,  suscrito, fecha_registro, ip, browser, foto, activo) VALUES('$id_google','$nombre', '$apellido','', 'gl',  1,  '$texto_finish', '$ip', '$agent', '$avatar', 1)";
				  $res = $link->query($query) or die("Falló la consulta $query");
				  $row=mysqli_fetch_array($res);
				  if ($res) {
					   $_SESSION['uservips']      = $id_google;
						setcookie("persistID", $id_google, time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);
						header("Location: /reggoogle?page=".$page);
				  }
				  else {
					echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde... [VE01]</div>";
				  }
			}

			if(strlen($consul) > 6){
				$wow = 1;
				$query = "INSERT INTO registros(google_id, nombre, apellido, correo, password,  suscrito, wow,  tdl, fecha_registro, ip, browser, foto, activo) VALUES('$id_google','$nombre', '$apellido','$email', 'gl',  1, $wow, '$consul',  '$texto_finish', '$ip', '$agent', '$avatar', 1)";
				$res = $link->query($query) or die("Falló la consulta $query");
				$row=mysqli_fetch_array($res);
				if ($res) {
					
					 $_SESSION['uservips']      = $id_google;
						setcookie("persistID", $id_google, time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);
						header("Location: /reggoogle?page=".$page);
				}
				else {
					echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde... [VE02]</div>";
				}
			}
			else{
				//Nombre completo
				$nombrecompleto = $nombre ." ". $apellido;
				$correo = $email;
				include_once '../llamada-wow-registro.php';
				
				
					if($pos3 !== false){
						echo $pos3 ."<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde... [WE03]</div>";
						exit();
					}
						else{
							$query = "INSERT INTO registros(google_id, nombre, apellido, correo, password,  suscrito, wow,  fecha_registro, ip, browser, foto, activo) VALUES('$id_google','$nombre', '$apellido','$email', 'gl',  1, $wow,  '$texto_finish', '$ip', '$agent', '$avatar', 1)";
							 $res = $link->query($query);
							 
							 if ($res) {
					
									 $_SESSION['uservips']      = $id_google;
										setcookie("persistID", $id_google, time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);
										header("Location: /reggoogle?page=".$page);
								}
							else {
									echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde... [VE04]</div>";
							}
						}
			}

		} 
	
		else { // Returned user data update
			$resreg=$link->query("SELECT * FROM registros WHERE correo='$email'");
			$rowreg=mysqli_fetch_array($resreg);
			$_SESSION['uservips'] = $rowreg['id_registro'];
			setcookie('persistID', $rowreg['id_registro'], time()+(30 * 24 * 60 * 60), '/'); // this sets cookie for 30 days.
			header("Location: /loging?page=".$page);
		}
		

		
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

?>