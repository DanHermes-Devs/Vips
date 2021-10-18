<?php
session_start();
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
require_once 'dbconnect.php';
$idaddress = $_GET['a'];
$ids = strlen($idaddress);
$idnum = intval($idaddress);

	if(isset($_SESSION['uservips'])!="" && $ids>0 ){
		$uid=$_SESSION['uservips'];
		$sexo = "M";
		$sql3hn = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
		$resulthn =$mysqli->query($sql3hn);
		$rowreghn=mysqli_fetch_assoc($resulthn);
		
		$nombre = $rowreghn['nombre'];
		$apellido = $rowreghn['apellido'];
		$correo = $rowreghn['correo'];
		$telep = $rowreghn['telefono'];
		$sexo = $rowreghn['sexo'];
		if($sexo ==""){
			$sexo = "M";
		}
		$utime = $rowreghn['fecha_registro'];
		$sesion = true;

		$sql1n = "SELECT * FROM domicilio WHERE id_domicilio = $idnum";
		$result1n = $mysqli->query($sql1n)  or die("Error en".$sql1n);
		$numfilas1n = $result1n->num_rows;

		if($numfilas1n ==1){
			while($row1n= mysqli_fetch_array($result1n)){
				$calle = $row1n["calle"];
				$ext = $row1n["ext"];
				$inte = $row1n["inte"];
				$colonia = $row1n["colonia"];
				$cp = $row1n["cp"];
				$radio = $row1n["radio"];
				}
		}

		// clean user inputs to prevent sql injections

		$iduser =$uid;
		$iduser = strip_tags($iduser);
		$iduser = htmlspecialchars($iduser);

		$nombre = $nombre;
		$nombre = strip_tags($nombre);
		$nombre = htmlspecialchars($nombre);

		$apellido = $apellido;
		$apellido = strip_tags($apellido);
		$apellido = htmlspecialchars($apellido);

		$correo = $correo;
		$correo = strip_tags($correo);
		$correo = htmlspecialchars($correo);

		$genero =  $sexo;
		$genero = strip_tags($genero);
		$genero = htmlspecialchars($genero);


		$calle =  $calle;
		$calle = strip_tags($calle);
		$calle = htmlspecialchars($calle);

		$ext = $ext;
		$ext = strip_tags($ext);
		$ext = htmlspecialchars($ext);

		$inte = $inte;
		$inte = strip_tags($inte);
		$inte = htmlspecialchars($inte);

		$colonia = $colonia;
		$colonia = strip_tags($colonia);
		$colonia = htmlspecialchars($colonia);

		$cp = $cp;
		$cp = strip_tags($cp);
		$cp = htmlspecialchars($cp);

		$utime2 = $utime;
		$utime2 = strip_tags($utime2);
		$utime2 = htmlspecialchars($utime2);

		$radio = $radio;
		$radio = strip_tags($radio);
		$radio = htmlspecialchars($radio);

		$address = $calle . "+" . $ext . "+" . $colonia. "+" . $cp . "+Mexico"; // replace all the white space with "+" sign to match with google search pattern
		$address = preg_replace('/\s+/', '+', $address);
		$url = "https://maps.google.com/maps/api/geocode/json?sensor=false&key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE&address=$address";

		$responseg = file_get_contents($url);

		$json = json_decode($responseg,TRUE); //generate array object from the response from the web

		$lat = $json['results'][0]['geometry']['location']['lat'];
		$lng = $json['results'][0]['geometry']['location']['lng'];


		$lati = $lat;
		$long = $lng;
		$email = $correo;
		$add = $calle ." ". $ext . " ". $inte . " ". $colonia;
		$fn = $nombre;
		$ln = $apellido;
		$gender = $genero;
		$phone = $telep;
		$pass = $utime2;

		$pass = base64_encode($utime2);


		// Create token header as a JSON string
		$header = json_encode(['alg' => 'HS512', 'typ' => 'JWT']);


		// Create token payload as a JSON string
		$payload = '{"sub": "token","login": "{\"lat\": '.$lat.',\"lng\":'.$lng.', \"brand\": \"Vips\", \"email\": \"'.$email.'\", \"password\": \"'.$pass.'\" , \"address\":\"'.$add.'\", \"first_name\": \"'.$fn.'\", \"last_name\": \"'.$ln.'\", \"gender\":\"'.$gender.'\", \"phone\": \"'.$phone.'\"}"}';

		// Encode Header to Base64Url String
		$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

		// Encode Payload to Base64Url String
		$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

		// Create Signature Hash
		$signature = hash_hmac('sha512', $base64UrlHeader . "." . $base64UrlPayload, 'o2r4o2r4qaSUiIwTrSE4ur7IJTVm', true);

		// Encode Signature to Base64Url String
		$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

		// Create JWT
		$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

		if(strlen($lat) > 5 && strlen($lng) > 5  && strlen($email) > 5 && strlen($pass) > 5 && strlen($fn) > 2  && strlen($ln) > 2 && strlen($gender) > 0 && strlen($add) > 5 &&  strlen($phone) > 9 ){
			//echo  $jwt;
			$auth = "Bearer ".$jwt;
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://services.mxgrability.rappi.com/api/restaurants-third-party-middleware/redirect",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 180,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
				"content-type: application/json",
				"x-auth: ".$auth .""
			   //"x-auth: ".$jwt .""
				),
			));

			$response = curl_exec($curl);
			$json = json_decode($response, true);
			$err = curl_error($curl);
			$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			curl_close($curl);

			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  //echo $response;
			}

			if($httpcode == 200){
				$linkrappi= urlencode($json['url']);

			}
			if($httpcode == 404){
				$linkrappi= "NO RAPPI";
			}

			if($httpcode == 401){
				$linkrappi= "NO RAPPI";
			}
			if($httpcode == 500){
				$linkrappi= "NO RAPPI";
			}

			if($httpcode == 400){
				$linkrappi= "NO RAPPI";
				$coderappi= $json['code'];
			}

			if($coderappi == 14){
				$linkrappi= "NO RAPPI";

			}
		
		}

		else{
			$linkrappi= "NO RAPPI";

		}




		if(strlen($linkrappi) >50){
			$botonrappi = '
			<script>
				window.location = "'.urldecode($linkrappi).'";
				//window.open("'.urldecode($linkrappi).'", "_blank");
			</script>
			';

		}

		else{

			$botonrappi = '<div class="respuestarappi" data-code="'.$coderappi.'"><p class="sorry">Lo sentimos.</p> <p>Por el momento Rappi no cuenta con cobertura en tu dirección.</p></div>';
			

		}
		
		echo $botonrappi;

	}
?>