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

		$uid=$_SESSION['uservips'];
		
		

	}





include_once 'dbconnect.php';

$resreg=$mysqli->query("SELECT * FROM registros WHERE id_registro = $uid OR facebook_id = $uid OR google_id = $uid");
	$rowreg=mysqli_fetch_array($resreg);
	$telefono = $rowreg['telefono'];
	$mail = $rowreg['correo'];

	if ( isset($_POST['nombre']) ) {



		//Datos del usuarios



		$finish_time = time();



		$texto_finish= date("d/m/y h:i:s a", $finish_time);



		// clean user inputs to prevent sql injections

		$nombre = trim($_POST['nombre']);

		$nombre = strip_tags($nombre);

		$nombre = htmlspecialchars($nombre);



		$apellido = trim($_POST['apellido']);

		$apellido = strip_tags($apellido);

		$apellido = htmlspecialchars($apellido);



		$tel = trim($_POST['tel1']);

		$tel = strip_tags($tel);

		$tel = htmlspecialchars($tel);





		$switch = trim($_POST['switchsus']);

		$switch = strip_tags($switch);

		$switch = htmlspecialchars($switch);



		// terminos validation

		if (empty($switch)){



			$suscrito = 0;

		}

		else{

			$suscrito = 1;

		}
		//Nombre completo
		$nombrecompleto = $nombre ." ". $apellido;
		
		$badWords = array("INVALIDA", "NA", "CLIENTE", "CP", "SN", "AV", "KM", "OF", "MZ", "NO", "TV", "CEL", "IZQ", "TEL", "EXT", "CTE", "SEC", "DPTO", "DEP", "EDIF", "NTE", "SECC", "MERC", "PISO", "NUM", "FAM", "AUTO", "ENTREGAR", "MERCANCIA", "OPERADORA", "PENDIENTE", "PROMOTORA", "PROPIEDAD", "TRASPASO", "FAMILIA", "ENVIAR", "HIJO", "DEPTO", "DEPARTAMENTO", "CANCELADO", "CANCEL", "ENTREGA", "OFICINA", "CELULAR", "TELEFONO", "DEVOL", "DEVOLUCION", "SECCION", "PROMOTOR", "PROPOR", "PROPORCIONO", "REGALO", "COMENTA", "DETALLE", "INVENTARIO", "RECOJE", "RECOGE", "DATO", "DAT", "DEPOSITO", "DEPOCITO", "COMPLETAR", "POSTERIORMENTE", "LUEGO", "NOMBRE", "DATOS", "DIRECCION", "ORDEN", "ESPERA", "GENERAL", "CONFIRMA", "PENDIENTES", "ESPOSOS", "PERSONA", "DESTINATARIO", "POR", "CONFIRMAR", "PROYECTO", "OFICINAS", "FALTA", "CORRESPONDA", "RECIBA", "AQUIEN", "QUIEN", "PRODUCTO", "REMITENTE", "REGALOS", "INVITADO", "FORANEOS", "FORANEO", "OBSEQUIO", "ADMINISTRACION", "ATENCION", "ADMON", "ATN", "SM", "REG", "PEND", "CONF", "FAVOR", "DELOS", "DELAS", "PROPORCIONA", "DESCONOCIDO", "SINDATOS", "KACO", "KACX", "KAGA", "KAGO", "KAGX", "KAKA", "KAKX", "KOGE", "KOGX", "KOJO", "KOJX", "KULO", "KULX", "LAMECULO", "LAMEPITO", "LAMEVERGA", "MALDITA", "OBSERVACIONES", "OVSERVACIONES", "OBSERBACIONES", "INVITADA", "LEER", "TENGO", "HAY", "RECOGER", "RECOGEN", "RECOJEN", "OBSERV", "LLEVAN", "PRESENTE", "VENDEDOR", "CANCELAR", "CHECAR", "YO", "MISMO", "MISMA", "EVENTO", "QUE", "CERRAR", "PORFAVOR", "LLEVARSE", "PUDRIRSE", "PUTA", "PUTITO", "PUTO", "PUTX", "QULO", "QULX", "RAMERA", "RASTRERO", "RATA", "RATX", "RUIN", "RUIX", "SABANDIJA", "SHIT", "SINVERGUENZA", "SUCK", "TARADO", "TARADA", "TARUGA", "TARUGO", "TONTO", "TONTA", "TORPE", "VAGINA", "VERGA", "VERGOTA", "WEY", "ZONZO", "ZONZA", "ZOQUETE", "ZORRA", "COLA", "LAMECOLA", "RETENIDOS", "RETENIDAS", "LLEVA", "FAMILIAR", "CLIENTA", "CANCELADA", "PASA", "POSTERIOR", "PROPORCIONAN", "MANDAR", "MALDITASEA", "MALDITO", "MAMADA", "MAMADO", "MAME", "MAMERTO", "MAMES", "MAMON", "MAMX", "MANDILON", "MANTENIDO", "MARICON", "MARICONA", "MASTUERZO", "MEAR", "MEAS", "MEAX", "MENDIGO", "MENDIGA", "MENTECATO", "MEON", "MEOX", "MEQUETREFE", "MIERDA", "MION", "MIOX", "MOCO", "MOCX", "MULA", "MULX", "PANOCHA", "PAPANATAS", "PARASITO", "PATAN", "PEDA", "PEDO", "PEDOFILO", "PEDORRA", "PEDORRO", "PEDX", "PENDEJA", "PENDEJO", "PENE", "PENX", "PERFIDO", "PERRA", "PERVERTIDO", "PINCHE", "PITO", "PROSTI", "PROSTITUTA", "PUCHA", "PUDRETE", "ALCORNOQUE", "ASL", "ASS", "BABOSA", "BABOSO", "BASTARDO", "BOBALICON", "BOBO", "BUEI", "BUEX", "BUEY", "CABRON", "CABRONA", "CACA", "CACO", "CACX", "CAGA", "CAGO", "CAGX", "CAKA", "CAKO", "CAKX", "CHINGADA", "CHINGADO", "CHINGAR", "CHINGON", "COBARDE", "COGE", "COGX", "COJA", "COJE", "COJIDA", "COJIDO", "COJO", "COJX", "COLX", "CULERA", "CULERO", "CULEY", "CULO", "DEFORME", "ESTUPIDO", "ESTUPIDA", "FETO", "FETX", "FUCK", "GUEX", "GUEY", "HUEVON", "HUEVONA", "HUEVOS", "IDIOTA", "IMBECIL", "INBERBE", "INFELIZ", "JOTO", "JOTX", "KACA", "BODAS", "BODA", "SUSPENDIO", "SUSPENDIDO", "SUSPENDIDA", "FECHA", "CAMBIO", "PRUEBA", "PRUEBAS", "PRUEVA", "PRUEVAS", "C P");

		$string = $nombrecompleto;

		$matches = array();
		$matchFound = preg_match_all(
						"/\b(" . implode($badWords,"|") . ")\b/i", 
						$string, 
						$matches
					  );

		if ($matchFound) {


		  
		  echo "<div class='errormsg'>El nombre o apellido contiene una o más palabras no admitidas, por favor verifícalo e intenta nuevamente.</div>";
			die();
		}

		else{
			
			
		}
		

		
		if($tel == $telefono){
			
				 $queryn = "UPDATE registros SET nombre   = '$nombre',

												apellido = '$apellido',

											
												telefono  = '$tel',


												ultima_actualizacion = '$texto_finish'

						   WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";



				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");

				$queryn1 = "UPDATE domicilio SET tel = '$tel' WHERE id_usuario = $uid";
									 $result1 = $mysqli->query($queryn1) or die("Falló la consulta $queryn1");

				if($result){echo "<div class='success'>Datos guardados correctamente.</div>
				<script>
				 analytics.identify(".$rowreg['tdl'].", {
				  name: '".$nombre."',
				  lastName: '".$apellido."',
				  email: '".$rowreg['correo']."',
				  tel: '".$tel."'
				  

				});
				</script>
				
				";}
			
		}
		
		else{
			
		$queryn = "SELECT * FROM registros WHERE telefono = '".$tel."'";

		$resultt = $mysqli->query($queryn) or die("Falló la consulta $queryrr");


		$numfilas = $resultt->num_rows;

		 if( 	$numfilas == 0){
			 
			 $queryn = "UPDATE registros SET nombre   = '$nombre',

												apellido = '$apellido',

												telefono  = '$tel',

												suscrito =  $suscrito,

												ultima_actualizacion = '$texto_finish'

						   WHERE id_registro = $uid OR facebook_id= $uid  OR google_id = $uid";



				$result = $mysqli->query($queryn) or die("Falló la consulta $queryn");

				$queryn1 = "UPDATE domicilio SET tel = '$tel' WHERE id_usuario = $uid";
									 $result1 = $mysqli->query($queryn1) or die("Falló la consulta $queryn1");



				if($result){echo "<div class='success'>Datos guardados correctamente.</div>
				<script>
				 analytics.identify(".$rowreg['tdl'].", {
				  name: '".$nombre."',
				  lastName: '".$apellido."',
				  email: '".$rowreg['correo']."',
				  tel: '".$tel."'
				  

				});
				</script>
				";}

		 }
		 
		 else{
			  echo "<div class='errormsg'>El celular ".$tel."  ya fue registrado por otro usuario, por favor ingresa uno diferente.</div>";
			 
		 }

			
			
		}



	}



else{

echo "spam";

}

?>
