<?php
	$sessionTime = 365 * 24 * 60 * 60;
	$sessionName = "uservips";
	session_set_cookie_params($sessionTime);
	session_name($sessionName);
	session_start();

	if (isset($_COOKIE[$sessionName])) {
		setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
	}
	if( isset($_SESSION['uservips'])!="" ){
	header("Location: perfil.php");
	}
	include_once 'dbconnect.php';


		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);

		if(strlen($page)<3){

			$page = 'perfil';

		}

	if($page=="pedidos-screen"){}
	else{

			if(isset($_POST['g-recaptcha-response'])) {
	   // RECAPTCHA SETTINGS
	   $captcha = $_POST['g-recaptcha-response'];
	   $ip = $_SERVER['REMOTE_ADDR'];
	   $key = '6LdgS20UAAAAAAPSIx88WmaEGqxdLU6LbGq8k_AN';
	   $url = 'https://www.google.com/recaptcha/api/siteverify';

	   // RECAPTCH RESPONSE
	   $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
	   $data = json_decode($recaptcha_response);

	   if(isset($data->success) &&  $data->success === true) {
		   //echo "<div class='errormsg'>Captcha correcto.</div>";
	   }
	   else {
		   echo "<div class='errormsg'>Completa el captcha.</div>
			<script>
				analytics.track('Sign Up Failed', {
					  method: 'Custom',
					  email: '".$correo."',
					  error_type: 'Captcha vacío'


				});
			</script>

		   ";
		  die();
	   }
	}

	}


	if ( isset($_POST['correo']) ) {

		//Datos del usuarios
		$ip = getenv('HTTP_CLIENT_IP')?:
		getenv('HTTP_X_FORWARDED_FOR')?:
		getenv('HTTP_X_FORWARDED')?:
		getenv('HTTP_FORWARDED_FOR')?:
		getenv('HTTP_FORWARDED')?:
		getenv('REMOTE_ADDR');
		$agent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
		$finish_time = time();
		$texto_finish= date("d/m/y h:i:s a", $finish_time);

		// clean user inputs to prevent sql injections



		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);

		if(strlen($page)<3){

			$page = 'perfil';

		}

		$nombre = trim($_POST['nombre']);
		$nombre = strip_tags($nombre);
		$nombre = htmlspecialchars($nombre);

		$apellido = trim($_POST['apellido']);
		$apellido = strip_tags($apellido);
		$apellido = htmlspecialchars($apellido);

		$correo = trim($_POST['correo']);
		$correo = strip_tags($correo);
		$correo = htmlspecialchars($correo);
		$correo = strtolower($correo);

		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);

		$tel = trim($_POST['tel1']);
		$tel = strip_tags($tel);
		$tel = htmlspecialchars($tel);

		$sexo = trim($_POST['sexo']);
		$sexo = strip_tags($sexo);
		$sexo = htmlspecialchars($sexo);


		$switch = trim($_POST['switch']);
		$switch = strip_tags($switch);
		$switch = htmlspecialchars($switch);

		//  validation
		if (empty($switch)){
			$suscrito = 0;
		}

		else{
			$suscrito = 1;
		}



		if(strlen($tel)>9){

		$queryntel = "SELECT * FROM registros WHERE telefono = '".$tel."'";
		$resulttel = $mysqli->query($queryntel) or die("Falló la consulta $queryrr");
		$numfilastel = $resulttel->num_rows;

		if($numfilastel >0){
			echo "<div class='errormsg'>Este número telefónico está asociado a otro usuario, por favor ingresa uno diferente.</div>
			<script>
				analytics.track('Sign Up Failed', {
					  method: 'Custom',
					  email: '".$correo."',
					  error_type: 'Teléfono existente'


				});
			</script>
			";
			die();

		}

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



		  echo "<div class='errormsg'>El nombre o apellido contiene una o más palabras no admitidas, por favor verifícalo e intenta nuevamente.</div>
		  <script>
			analytics.track('Sign Up Failed', {
				  method: 'Custom',
				  email: '".$correo."',
				  nombre:'".$string."',
				  error_type: 'Palabra(s) no admitidas'


			});
		</script>
		  ";
			die();
		}

		else{


		}

		// password encrypt using SHA256();
		$password = hash('sha256', $pass);



		$queryn = "SELECT * FROM registros WHERE correo = '".$correo."'";
		$result = $mysqli->query($queryn) or die("Falló la consulta $queryrr");
		$numfilas = $result->num_rows;


		if( $numfilas == 0){

			$wsdl = 'https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';

			if (strlen($correo)<3){
				header("Location: /cuentafb");

			}

			try{
				$clinet=new SoapClient($wsdl, array('trace' => 1));
				$ver =array("programName"=>"WOW Rewards", "contactEmailAddress"=>$correo, "responseType"=>"long");
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
			catch(SoapFault $e){
					echo $e->getMessage();
			}

			$consul = $miembro['memberNumber'];

			if(strlen($consul) > 6){
				$wow = 1;

					$query = "INSERT INTO registros(nombre, apellido, correo, password, tdl, telefono, suscrito, sexo, wow,  fecha_registro, ip, browser, activo) VALUES('$nombre', '$apellido','$correo', '$password', '$consul', '$tel', $suscrito, '$sexo', $wow,  '$texto_finish', '$ip', '$agent', 1)";

					$res = $mysqli->query($query) or die("Falló la consulta $query");
					$row=mysqli_fetch_array($res);

					if ($res) {

					$resreg=$mysqli->query("SELECT * FROM registros WHERE correo='$correo'");

					$rowreg=mysqli_fetch_array($resreg);

					$_SESSION['uservips'] = $rowreg['id_registro'];
					setcookie('persistID', $rowreg['id_registro'], time()+(30 * 24 * 60 * 60), '/'); // this sets cookie for 30 days.

					$msgredireccion = "<div class='success' style='width: 100%; padding-right: 10%; background-image: url(img/loadreg.gif); background-size: 7.5%; background-repeat: no-repeat; background-position: 95% center;'>¡Felicidades! Tu registro se realizó con éxito, espera mientras te redirigimos a tu perfil...</div>";
					echo '<style>#btnreg{display:none!important;}</style>
					<script>
						analytics.track("User Signed Up", {
						  method: "Custom",
						  email: "'.$correo.'",
						  page: ""
						});
						setTimeout(function(){
							window.location.replace("/'.$page.'");
						$("#respuesta").append("'.$msgredireccion.'");
						},1000)
					</script>';



					}


					else {

						echo "<div class='errormsg'>Ocurrió un error al generar tu tarjeta, por favor intenta nuevamente más tarde...</div>

						<script>
							analytics.track('Sign Up Failed', {
							method: 'Custom',
							email: '".$correo."',
							error_type: 'Error DB Vips'


							});
						</script>
						";

					}



			}

			else
			{

			include_once 'llamada-wow-registro2019.php';
				if($pos3 !== false){$code = 'error';}
				else{$code = 'success';}

			$querylog = "INSERT INTO log_wow(nombre, apellido, correo,fecha, ip, browser, respuesta, source, code) VALUES('$nombre', '$apellido','$correo', '$texto_finish', '$ip', '$agent', '$stringresponse', 'Normal', '$code')";
			$reslog = $mysqli->query($querylog) or die("Falló la consulta $querylog");


				if($pos3 !== false){

					echo "<div class='errormsg'>Ocurrió un error al generar tu tarjeta, por favor intenta nuevamente más tarde...</div>
					<script>
					analytics.track('Sign Up Failed', {
						  method: 'Custom',
						  email: '".$correo."',
						  error_type: 'error alta WOW'


					});
					</script>

					";


					exit();


				}

				else{
					$query = "INSERT INTO registros(nombre, apellido, correo, password, tdl, telefono, suscrito, sexo, wow,  fecha_registro, ip, browser, activo) VALUES('$nombre', '$apellido','$correo', '$password', '000', '$tel', $suscrito, '$sexo', $wow,  '$texto_finish', '$ip', '$agent', 1)";
					$res = $mysqli->query($query) or die("Falló la consulta $query");
					$row=mysqli_fetch_array($res);

					if ($res) {
						$resreg=$mysqli->query("SELECT * FROM registros WHERE correo='$correo'");
						$rowreg=mysqli_fetch_array($resreg);
						$_SESSION['uservips'] = $rowreg['id_registro'];
						setcookie('persistID', $rowreg['id_registro'], time()+(30 * 24 * 60 * 60), '/'); // this sets cookie for 30 days.
						$msgredireccion = "<div class='success' style='width: 100%; padding-right: 10%; background-image: url(img/loadreg.gif); background-size: 7.5%; background-repeat: no-repeat; background-position: 95% center;'>¡Felicidades! Tu registro se realizó con éxito, espera mientras te redirigimos a tu perfil...</div>";
					echo '<style>#btnreg{display:none!important;}</style>
					<script>

						analytics.track("User Signed Up", {
						  method: "Custom",
						  email: "'.$correo.'",
						  page: ""
						});
						setTimeout(function(){
							window.location.replace("/'.$page.'");
						$("#respuesta").append("'.$msgredireccion.'");
						},1000)

					</script>

					';

					}

					else {
						echo "<div class='errormsg'>Ocurrió un error, por favor intenta nuevamente más tarde...</div>

						<script>
							analytics.track('Sign Up Failed', {
								  method: 'Custom',
								  email: '".$correo."',
								  error_type: 'error DB Vips'


							});
						</script>

						";


					}


				}

			}

		}

		else{

		echo "<div class='errormsg'>Ya existe un usuario registrado con este correo electrónico, por favor inicia sesión o recupera tu contraseña</div>

		<script>
			analytics.track('Sign Up Failed', {
				  method: 'Custom',
				  email: '".$correo."',
				  error_type: 'Usuario existente'


			});
		</script>

		";

		}

	}

	else{
		echo "spam";
	}

?>
