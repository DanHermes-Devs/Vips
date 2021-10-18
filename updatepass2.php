<?php 


include_once 'dbconnect.php';

	if ( isset($_POST['pass1']) ) {

		//Datos del usuarios

		$finish_time = time();		

		$texto_finish= date("d/m/y h:i:s a", $finish_time);
		
		// clean user inputs to prevent sql injections
		
		$pass1 = trim($_POST['pass1']);
		$pass1 = strip_tags($pass1);
		$pass1 = htmlspecialchars($pass1);
		
		$pass2 = trim($_POST['pass2']);
		$pass2 = strip_tags($pass2);
		$pass2 = htmlspecialchars($pass2);
		
		$fp_code = trim($_POST['fp_code']);
		$fp_code = strip_tags($fp_code);
		$fp_code = htmlspecialchars($fp_code);
		

		// password encrypt using SHA256();
		$password1 = hash('sha256', $pass1);
		
		$password2 = hash('sha256', $pass2); // password hashing using SHA256
		//$password2 = $pass2; // password hashing using SHA256
		
		
				$queryn = "UPDATE registros SET 
												password = '$password2',
												
												ultima_actualizacion = '$texto_finish'
						   WHERE pass_code = '$fp_code'";
						   
				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");
				echo "<script>$('#formpass').hide();</script><div class='success'>Tu contraseña se actualizó con éxito</div><a class='boton top' href='/cuenta'>INICIAR SESIÓN</a>";
				
			 


	}

else{
echo "spam";
}
ob_end_flush();
?>