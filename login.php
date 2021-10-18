<?php 
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
ini_set( 'session.cookie_httponly', 1 );
ini_set( 'session.cookie_secure', 1 );
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

	if( isset($_SESSION['uservips'])!="" ){

		header("Location: perfil");

	}

include_once 'dbconnect.php';



	if ( isset($_POST['correol']) ) {



		//Datos del usuarios

		

		// clean user inputs to prevent sql injections
		
		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);
		
		if(strlen($page)<3){
			
			$page = 'perfil';
			
		}
		

		

		$correo = trim($_POST['correol']);

		$correo = strip_tags($correo);

		$correo = htmlspecialchars($correo);

		

		$pass = trim($_POST['passl']);

		$pass = strip_tags($pass);

		$pass = htmlspecialchars($pass);



		

		// password encrypt using SHA256();

		$password = hash('sha256', $pass);

		
	$sql3 = "SELECT * FROM registros WHERE correo = '".$correo."'";
	$result = $mysqli->query($sql3);
	$numfilas = $result->num_rows;
	 $row=mysqli_fetch_assoc($result);

		$filas =$numfilas;

		 if( $filas == 1 && $row['password']==$password ||  $row['password']==$pass){

			 

		$_SESSION['uservips'] = $row['id_registro'];
		setcookie("persistID", $row['id_registro'], time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);
		

				//header("Location: /vips18/perfil");

				echo '<script>
				  analytics.track("User Logged In", {
						  method: "Custom", 
						  email: "'.$correo.'",
						  page: page
					});
				';

				if(strlen($row['tdl'])>5){
				echo '
				setTimeout(function(){				
					analytics.identify('.$row['tdl'].', {
					  name: "'.$row['nombre'].'",
					  lastName:  "'.$row['apellido'].'",
					  email:  "'.$row['correo'].'",
					  tel: "'.$row['telefono'].'"

					});
				},500)
				';
				}
				
				echo '
				setTimeout(function(){
					window.location.replace("/'.$page.'");
				},1000)</script>';
				
				function generateRandomString($length = 10) {
					return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
				}

			$string =  generateRandomString();  // OR: generateRandomString(24)
			$_SESSION['wowvips'] = $string;
			setcookie("persistWOW", $string, time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);



	

		}

		else{

		echo "<div class='errormsg'>Usuario o contraseña incorrectos</div>";

		}





	}



else{

echo "spam";

}

ob_end_flush();

?>