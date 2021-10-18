<?php 
	ob_start();
	session_start();
	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];
	}
include_once 'dbconnect.php';

$resreg=$mysqli->query("SELECT * FROM registros WHERE id_registro = $uid OR facebook_id = $uid OR google_id = $uid");
	$rowreg=mysqli_fetch_array($resreg);


	if ( isset($_POST['calle']) ) {
	

		// clean user inputs to prevent sql injections
		
		// clean user inputs to prevent sql injections
		
		$iduser = trim($_POST['iduser']);
		$iduser = strip_tags($iduser);
		$iduser = htmlspecialchars($iduser);

		$nombre = trim($_POST['nombre']);
		$nombre = strip_tags($nombre);
		$nombre = htmlspecialchars($nombre);
		
		$apellido = trim($_POST['apellido']);
		$apellido = strip_tags($apellido);
		$apellido = htmlspecialchars($apellido);
		
		$correo = trim($_POST['correo']);
		$correo = strip_tags($correo);
		$correo = htmlspecialchars($correo);
		
		$genero = trim($_POST['genero']);
		$genero = strip_tags($genero);
		$genero = htmlspecialchars($genero);
		

		$calle = trim($_POST['calle']);
		$calle = strip_tags($calle);
		$calle = htmlspecialchars($calle);

		$ext = trim($_POST['ext']);
		$ext = strip_tags($ext);
		$ext = htmlspecialchars($ext);

		$inte = trim($_POST['inte']);
		$inte = strip_tags($inte);
		$inte = htmlspecialchars($inte);

		$colonia = trim($_POST['colonia']);
		$colonia = strip_tags($colonia);
		$colonia = htmlspecialchars($colonia);

		$cp = trim($_POST['cp']);
		$cp = strip_tags($cp);
		$cp = htmlspecialchars($cp);

		$tel = trim($_POST['tel']);
		$tel = strip_tags($tel);
		$tel = htmlspecialchars($tel);
		
		//$tel = "+52". $tel;
		
		$utime2 = trim($_POST['utime']);
		$utime2 = strip_tags($utime2);
		$utime2 = htmlspecialchars($utime2);

		$radio = trim($_POST['radio']);
		$radio = strip_tags($radio);
		$radio = htmlspecialchars($radio);
		

				$query = "INSERT INTO domicilio (id_usuario, calle, ext, inte, colonia, cp, tel,  radio) VALUES($iduser, '$calle', '$ext','$inte', '$colonia', '$cp', '$tel', '$radio')";

					$res = $mysqli->query($query) or die("Falló la consulta $query");

					if($res){
						
						 $linkrappi = "NORAPPI";
						$_SESSION['rappi'] = $linkrappi;
						echo "<style>.domiciliomain #btnregd2{opacity:.5; pointer-events:none;} .domiciliomain{cursor:wait;}</style><script>";
						
						if(strlen($rowreg['tdl'])>10){
							
							echo "
							 analytics.identify(".$rowreg['tdl'].", {
							  name: '".$rowreg['nombre']."',
							  lastName: '".$rowreg['apellido']."',
							  email: '".$rowreg['correo']."',
							  tel: '".$rowreg['telefono']."',
							  address: '(".$radio.") ".$calle." #".$ext." Col. ".$colonia." C.P. ".$cp."'
							  
							});
							";
							
						}
				
						echo "setTimeout(function(){
							window.location.href = 'domicilio3-l';
						}, 1000)
						</script>";
					}

					else {

						echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>";	

					}




	}



else{

echo "spam";

}

ob_end_flush();

?>