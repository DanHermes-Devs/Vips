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



// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
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
		$sql = "select * from social where email='$email'";
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

				$query = "INSERT INTO social(google_id, name, lastname, email, avatar, date_signup, ip, browser, active) VALUES('$id_google','$nombre', '$apellido', '$email', '$avatar', '$texto_finish', '$ip', '$agent', 1)";
				  $res = $link->query($query) or die("Falló la consulta $query");
				  $row=mysqli_fetch_array($res);
				  if ($res) {
				  }
				  else {
					echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";
				  }



		} 
	
		else { // Returned user data update
			$query = "UPDATE social SET nombre='$nombre', avatar = '$avatar' where google_id='$id_google'";
			$link->query($query);
		}

		
		
		//echo $name . " " . $email . " " . $social_id . " " . $picture;
		
		
		//echo $trimmed_data ." ".  $trimmed_data['name'] ;
		

		// Now that the user is logged in you may want to start some session variables
		$_SESSION['social_login'] = $id_google;
		setcookie('persistSocial', $id_google, time() +2592000, '/'); // this sets cookie for 30 days.

		// You may now want to redirect the user to the home page of your website
		header('Location: https://vips.com.mx/vips18/promociones/cupones#restauranteArrachera');
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

?>