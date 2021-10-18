<?php
	function checkuser($facebook_id, $nombre, $apellido, $email)
	{
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

		$sql3 = "select * from social where fb_id='$facebook_id'";
		$result = $link->query($sql3);
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
			$avatar ="https://graph.facebook.com/".$facebook_id."/picture?type=large";

				$query = "INSERT INTO social(fb_id, name, lastname, email, avatar, date_signup, ip, browser, active) VALUES('$facebook_id','$nombre', '$apellido','$email', '$avatar', '$texto_finish',  '$ip', '$agent', 1)";
				  $res = $link->query($query) or die("Falló la consulta $query");
				  $row=mysqli_fetch_array($res);
				  if ($res) {
				  }
				  else {
					echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";
				  }
			



		} 
	
		else { // Returned user data update
		$avatar ="https://graph.facebook.com/".$facebook_id."/picture?type=large";
			$query = "UPDATE social SET name='$nombre',  avatar = '$avatar' where fb_id='$facebook_id'";
			$link->query($query);
		}
	}
?>
