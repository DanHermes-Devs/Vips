<?php
include 'Mobile_Detect.php';



$detect = new Mobile_Detect();



if ($detect->isMobile()) {



	header('Location: domicilio3-l-m');



	exit(0);



}

ob_start();
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}



	if( isset($_SESSION['uservips'])!="" ){}
	else{header('Location: /domicilio');



	exit(0);
}
require_once 'dbconnect.php';

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];


		$sexo = "M";

	$sql3hn = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid";
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






	$sql1n = "SELECT * FROM domicilio WHERE id_usuario = '$uid' AND predeterminada= 1 LIMIT 1";
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

	else{

	$sql1n2 = "SELECT * FROM domicilio WHERE id_usuario = '$uid' LIMIT 1";

	$result1n2 = $mysqli->query($sql1n2)  or die("Error en".$sql1n2);
	$numfilas1n2 = $result1n2->num_rows;


	if($numfilas1n2 ==1){

		while($row1n2= mysqli_fetch_array($result1n2)){

			$calle = $row1n2["calle"];
			$ext = $row1n2["ext"];
			$inte = $row1n2["inte"];
			$colonia = $row1n2["colonia"];
			$cp = $row1n2["cp"];

			$radio = $row1n2["radio"];




			}


	}


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


		//$tel = "+52". $tel;

		$utime2 = $utime;
		$utime2 = strip_tags($utime2);
		$utime2 = htmlspecialchars($utime2);

		$radio = $radio;
		$radio = strip_tags($radio);
		$radio = htmlspecialchars($radio);


		//echo "rrr2".$telep;

		$address = $calle . "+" . $ext . "+" . $colonia. "+" . $cp . "+Mexico"; // replace all the white space with "+" sign to match with google search pattern
		$address = preg_replace('/\s+/', '+', $address);
		$url = "https://maps.google.com/maps/api/geocode/json?sensor=false&key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE&address=$address";

		$responseg = file_get_contents($url);

		$json = json_decode($responseg,TRUE); //generate array object from the response from the web

		$lat = $json['results'][0]['geometry']['location']['lat'];
		$lng = $json['results'][0]['geometry']['location']['lng'];




		//$lati = print_r($lat);

		//$long = print_r($lng);

		//echo $lati . $long;


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

		//echo $cp;





		// Create token header as a JSON string
		$header = json_encode(['alg' => 'HS512', 'typ' => 'JWT']);

		/*
		$lati ="4.683072";
		$long = "-74.046115";
		$brand ="El Corral";
		$email = "alberto.test21@rappi.com";
		$add ="Cra 23 #132a-20";
		$fn ="Alberto";
		$ln ="Caldas";
		$gender ="M";
		$phone ="+57350324120";
		$pass ="1234";*/




// Create token payload as a JSON string
$payload = '{"sub": "token","login": "{\"lat\": '.$lat.',\"lng\":'.$lng.', \"brand\": \"Vips Navideño.\", \"email\": \"'.$email.'\", \"password\": \"'.$pass.'\" , \"address\":\"'.$add.'\", \"first_name\": \"'.$fn.'\", \"last_name\": \"'.$ln.'\", \"gender\":\"'.$gender.'\", \"phone\": \"'.$phone.'\"}"}';

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
	$showpop2 = '

			  <script>






			setTimeout(function(){
  $("#uptel").trigger("click");
}, 500);


			  </script>
			  ';




}
//$linkrappi= $response;
//$linkrappi= "NO RAPPI";


}

else{
	$linkrappi= "NO RAPPI";

}









//echo "rappis". $linkrappi;

//echo strlen($linkrappi);

if(strlen($linkrappi) >50){

	$botonrappi = '

	<a id="rappi-btn" class="btn-domicilio" target="_blank" href="'.urldecode($linkrappi) .'">

					<div class="front-end box rappibg">
						<span></span>
					</div>
				</a>
	';

}

else{

	$botonrappi = '';

}






include('header.php');





  $btnub ="display:inline-block;";
  $showpop = "";



$sql3 = "SELECT * FROM postales WHERE cp = '$cp'";
		$result = $mysqli->query($sql3);
$numfilas = $result->num_rows;
	 $row=mysqli_fetch_assoc($result);

		$filas =$numfilas;

		 if( $filas >0 ){

		 $botonsd = '

		 <a id="sin-delantal-btn" class="btn-domicilio" href="https://vips.sindelantal.mx/?Origem=SiteParceiro&produto=intermediario" target="_blank">

					<div class="back-end box sdbg">
						<span></span>
					</div>
				</a>


		 ';

		 $botontel = '
		 <a id="telefono-domicilio-btn"  class="btn-domicilio popup-with-move-anim" href="#small-dialog-tel">

					<div class="back-end box telbg">
						<span></span>
					</div>
				</a>
		 ';


		}

		else{

			$botonsd = '';
			$botontel = '';
		}


		if(strlen($linkrappi) >50){

			$botonsd = '';

		}



		$sql4 = "SELECT * FROM stores WHERE delivery = 'x' AND zip = '$cp'";
		$result2 = $mysqli->query($sql4);
$numfilas2 = $result2->num_rows;
	 $row2=mysqli_fetch_assoc($result2);

		$filas2 =$numfilas2;

		 if( $filas2 > 0 ){


		 $botontel = '
		 <a  id="telefono-domicilio-btn" class="btn-domicilio popup-with-move-anim" href="#small-dialog-tel">

					<div class="back-end box telbg">
						<span></span>
					</div>
				</a>
		 ';


		}

		if($filas <1 && $filas2 <1 && strlen($linkrappi) <50){

			    $btnub ="display:none;";

			  $showpop = '

			  <script>
			        $(document).ready(function() {

		  $("#nogeo").trigger("click");


		    $("body").click(function(event){


 $("#nogeo").trigger("click");
			})

			   });

			  </script>
			  ';


		}

?>







<div class="main" data-httpcode  = "<?php echo $httpcode; ?>" data-code ="<?php echo $coderappi; ?>" data-rapi ="<?php echo $response;?>" data-tel="<?php echo $phone;?>" data-url="<?php echo urldecode($linkrappi);?>" data-payload="<?php echo $payload?>">







	<style>



	[data-div="#domiciliohome"]*{  fill: #ff0025!important; transition: all .4s ease;}

	[data-div="#domiciliohome"] path{  fill: #ff0025!important; transition: all .4s ease;}

	[data-div="#domiciliohome"] *{color: #ff0025!important;}







	@media screen and (max-width: 400px) {



		.tab_div {



			display: none;



		}



	}



	.tab_div {



		width: 100%;



		transform: translateZ(0);



	}



	.tabs_menu {



		padding-top: 1%;



		width: 20%;



		float: left;



	}







	ul.tabs {



		padding: 0;



	}







	#tab1,



	#tab2,



	#tab3,



	#tab4 {



		width: 90%;



	}







	ul.tabs li {



		margin-left: 25%;



		list-style-type: none;



		border-left: 4px solid #ea0029;



		font-size: 18px;



		color: black;



	}







	#tab1_content,



	#tab2_content,



	#tab3_content,



	#tab4_content {



		/*   background-color:red; */



		float: left;



		width: 100%;



		height: auto;



		padding: 5%;



		display: block !important;



	}







	.p{



		font-size: 16px;



	}











	/* hover effect */







	ul.tabs li {



		display: inline-block;



		position: relative;



		padding: 1em;



		cursor: pointer;



		color: black;



		z-index: 0;



		transition: all .35s ease;



	}







	ul.tabs li:before {



		content: "";



		position: absolute;



		z-index: -1;



		top: 0;



		left: 0;



		right: 0;



		bottom: 0;



		background: #ff0025;



		transform: scaleX(0);



		transform-origin: 0 50%;



		transition: transform .5s ease-out;



	}







	ul.tabs li:hover:before {



		transform: scaleX(1);



	}







	ul.tabs li:hover {



		color:#fff!important;



		transition: all .35s ease;



	}



	.imagen{



		width: 9%;



		margin: 0;



		padding: 0;



		float: left;



		vertical-align: middle;



	}



	.texto{



		width: 90%;



		padding: 0 1em;



		float: left;



	}



	.clase{



		position: relative;



		width: 50%;



		float: left;



		margin-bottom: 5%;



	}



	.input {



		height: 45px;



		width: 100%;



		background: transparent;



		border: none;



		border-style: dashed;



		outline: none;



		border-color: #a9a6a1;



		border-top: none;



		border-left: none;



		border-right: none;



		padding: 10px 0;



	}



	input[type="submit"]{

		border: none;

		padding: 20px;

		outline: none;

		border-color: #a9a6a1;

		width: 55%;

		font-size: 1em;

		background: #f29100;

		color: white;

		cursor: pointer;

		transition: 0.3s ease all;

		text-transform:uppercase;

		font-weight:bold;

		font-family: "Museo 900", sans-serif;

	}



	input[type="submit"]:hover{

		border: none;

		padding: 20px;

		outline: none;

		border-color: #a9a6a1;

		width: 55%;

		font-size: 1em;

		background: #ffac30;

		color: white;

		cursor: pointer;

		transition: 0.3s ease all;

	}



	.formulario {
		padding: 5%;
		background: #fff;
		margin-right: 0;
		float: left;
		border: 3px dashed #ccc;
		padding-bottom: 2.5%;
	}



	.input::placeholder {



		color: #a9a6a1;



	}



	input[type="checkbox"] {



		width: 25px;



		height: 25px;



		margin-left: 10px;



		position: relative;



		border: 50px;



	}



	.margen{



		margin-right: 2%;



	}



	.fotos{



		max-width: 100%;



		float: left;



		margin-bottom: 5%;



		margin-left: 3%;



	}



	.form{



		max-width: 100%;



	}



	.boton{



		border: none;



		padding: 20px;



		outline: none;



		border-color: #a9a6a1;



		width: 40%;



		font-size: 1em;



		background: #f29100;



		color: white;



		cursor: pointer;

		font-family: "Museo 900", sans-serif;



	}



	.icono {

		width: 10%;

		margin: 0;

		padding: 0;

		float: right;

		position: absolute;

		margin-left: -5%;

		margin-top: 1.50%;

		opacity: .5;

		display:none;

	}



	.inputs {



		float: left;



		width: 50%;



		margin-bottom: 5%;



		padding: 0 2.5%;



	}



	.abajo{



		width: 100%;



		float: left;



	}



	.caja{



		margin-left: 5%;



	}



	.top{



		margin-top: 2%;



	}







	input[type=checkbox] {



		height: 0;



		width: 0;



		visibility: hidden;



	}







	.labelcb {



		cursor: pointer;



		text-indent: -9999px;



		width: 40px;



		height: 20px;



		background: grey;



		display: block;



		border-radius: 100px;



		position: relative;



		top: -10px;







	}



	.labelcb::after {



		content: '';



		position: absolute;



		top: 0px;



		left: 0;



		width: 20px;



		height: 20px;



		background: #fff;



		border-radius: 20px;



		transition: 0.3s;



		box-shadow: 1px 2px 5px #444;



	}







	input:checked + .labelcb {



		background: #f29100;



	}







	input:checked + .labelcb:after {



		left: calc(100% - 0px);



		transform: translateX(-100%);



	}







	.labelcb:active:after {



		width: 20px;



	}















	.pformtoggle {



		color: #333;



		font-size: .8em;



		font-family: "AmsiProNarw", sans-serif;



	}







	.avisocard {



		color: #f29100;



		width: 100%;



		float: left;



		font-size: .85em;



		font-family: "AmsiProNarw",sans-serif;







	}







	.maintitle {
		font-size: 1.5em;
		color: #fbb03b;
		font-weight: bold;
		margin-top: -2%;
		border-bottom: 1px solid #dcdcdc;
		/* font-family: "Museo 900", sans-serif; */
		text-align: center;
		padding-bottom: .5em;
	}






	.loginpanel {







		position: relative;



		float: left;



		width: 50%;



		border-top: 0;



		margin-bottom: 10%;



		padding: 0 2.5%;



		text-align: center;



	}







	.logininputs{width:100%;}



	.logininputs .input{width:50%; float:none;}







	.logininputs .icono {



		width: 10%;



		margin: 0;



		padding: 0;



		float: right;



		position: absolute;



		margin-left: -30px;



		margin-top: 10px;



		opacity: .5;

		display:none;

	}



	label {



		font-family: "AmsiProNarw", sans-serif;



		font-size: .9em;



		text-align: left;



	}





	.loginpanel form {

		width: 100%;

		text-align: center;

		padding-left: 0;

	}







	.loginpanel  .p {



		text-align: center;



		font-weight: normal;



		font-family: "AmsiProNarw", sans-serif;



	}







	.linkpassword {

		color: #fbb03b;

		font-size: .9em;

		padding-left: 0;

		font-family: "AmsiProNarw", sans;

		width: 100%;

		float: left;

	}







	#fb {

		background-color: #3b5998;

		background-image: url(img/fb.png);

		background-size: 1.5em;

		background-repeat: no-repeat;

		background-position: 7.5% center;

		width: 55%;

		/* padding: 0; */

		margin: 0 auto;

		transition: 0.3s cubic-bezier(.25,.1,.72,1.72) all;

		height: auto;

		border-radius: 0;

		text-align: right;

		margin-top: 0;

		position: relative;

		/* float: left; */

		right: 0;

		left: 0;

		translate: 50% 50%;

		color: #fff;

		padding: 1em 5%;

		font-size: .9em;

		padding-right: 10%;

		display: inline-block;

		margin-bottom: 0;

		min-width: 270px;

	}

	#fb:hover {



		background-color: #4562a0;



		transition: 0.3s ease all;



	}









	#tw {

		display: none;



		background-color:#03abee;



		background-image: url(img/tw.png);



		background-size: 1.5em;



		background-repeat: no-repeat;



		background-position: 1em center;



		width: 50%;



		padding: 1em 1.5em 1em 3em;



		margin: 1em auto 0 auto;



		float: left;



		margin-left: 20%;

		transition: 0.3s ease all;



	}



	#tw:hover {



		background-color:#20bcfa;



		background-image: url(img/tw.png);



		background-size: 1.5em;



		background-repeat: no-repeat;



		background-position: 1em center;



		width: 50%;



		padding: 1em 1.5em 1em 3em;



		margin: 1em auto 0 auto;



		float: left;



		margin-left: 20%;

		transition: 0.3s ease all;



	}







	.or {

		text-align: center;

		width: 100%;

		margin-bottom: 0;

		font-size: 1em;

		font-family: "AmsiProNarw", sans-serif;

	}



	#tab2_content {
		/* background-color: red; */
		float: left;
		width: 100%;
		height: auto;
		padding: 5% 25%;
		display: block !important;
		/* background-size: 100%; */
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 70% 10%;
		/* text-align: center; */
	}


	.phidden {

		width: 100%;

		/* height: 0; */

		font-weight: normal;

		font-family: "AmsiProNarw", sans-serif;

		font-size: .7em;

		color: #666;

		padding: 2.5%;

		float: left;

		display:none;

	}







	#calle, #ext, #inte, #colonia {

		background-image: url(img/svg/casa.svg);

		background-size: 8%;

	}

	#pass, #passl {

		background-image: url(img/svg/casa.svg);

		background-size: 8%;

	}


	#correo, #correol {
		background-image: url(img/svg/casa.svg);

		background-size: 8%;
	}

	#tdl{background-image: url(img/svg/cardf.svg); background-size: 10%}



	.imgbg1 {


		background-repeat: no-repeat;

		background-size: 25%;

		position: fixed;

		background-position: top left;

		width: 100%;

		height: 100vh;

		top: 35%;

	}

	.imgbg2 {
		display:none;

		background-image: url(img/fondo.png);

		background-repeat: no-repeat;

		background-size: 25%;

		position: absolute;

		background-position: bottom right;

		width: 100%;

		height: 100%;

		top: 60%;

	}



	.aligncenter{text-align: center;}



	.loginpanel .p {

		margin-top: 0;

	}



	.orfb{margin-bottom: 2em;}





	.inputmail {

		background-image: url(img/svg/correo.svg);

		background-repeat: no-repeat;

		background-position: right;

		background-size: 10%;

	}



	.requiredtext {

		float: left;

		width: 100%;

		margin: 0;

		margin-top: 10px;

		color: #666;

		font-size: .8em;

	}





	#respuesta, #respuesta2, #respuesta {

		width: 100%;

		float: left;

		padding-top: .5em;

		text-align: center;

	}

	.success {

		width: 50%;

		background: #DCEDC8;

		padding: 1em;

		color: #558B2F;

		border-radius: 5px;

	}



	.errormsg {

		width: 50%;

		background: #FFCDD2;

		padding: 1em;

		color: #B71C1C;

		border-radius: 5px;

		margin: 1em auto;

	}



	#btnlogin{display: inline-block;}



	.errorinput {

		border: 1px solid #c14549;

		background-image: url(img/error.png)!important;

		background-size: 7%!important;

		background-repeat: no-repeat;

		background-position: 97% center!important;

	}



	#btnreg {

		display: inline-block;

		width: 55%;

		text-transform: uppercase;

		text-align: center;

		float: left;

		font-family: "Museo 900";

	}



	#respuesta .errormsg {

		width: 100%;

	}



	.bgreds{background:#c14549;}



	.nopointer{pointer-events:none;}


	#small-dialog-tel {

		background: white;

		padding: 5%;

		text-align: center;

		max-width: 500px;

		margin: 80px auto;

		position: relative;

		background-image: url(img/fondo.png);

		background-size: 30%;

		background-repeat: no-repeat;

		background-position: bottom right;

	}






	#small-dialogpass {

		background: white;

		padding: 5%;

		text-align: center;

		max-width: 500px;

		margin: 80px auto;

		position: relative;

		background-image: url(img/fondo.png);

		background-size: 30%;

		background-repeat: no-repeat;

		background-position: bottom right;

	}



	#small-dialogpass {

		background: white;

		padding: 2%;

		text-align: center;

		max-width: 500px;

		margin: 80px auto;

		position: relative;

		background-image: url(img/fondo.png);

		background-size: 25%;

		background-repeat: no-repeat;

		background-position: bottom right;

		display: table;

	}



	#small-dialogpass  h3 {

		color: #f29100;

		padding: 2% 2% 5% 2%;

		border-bottom: 2px solid #ccc;

		width: 70%;

		margin: 0 auto;

	}



	#small-dialogpass  #formlogin {

		float: left;

		width: 100%;

		padding: 2.5% 0;

	}



	#small-dialogpass  .boton {

		border: none;

		padding: 20px;

		outline: none;

		border-color: #a9a6a1;

		width: 60%;

		font-size: 1em;

		background: #f29100;

		color: white;

		cursor: pointer;

		display: inline-block;

		text-transform: uppercase;

		font-family: "Museo 900", sans-serif;

	}



	#small-dialogpass  .logininputs .input {

		width: 80%;

		float: none;

	}



	.mfp-wrap {



		z-index: 3;

	}



	#respuesta3 .success, #respuesta3 .errormsg {

		width: 80%;

		margin: .5em auto auto;

	}



	#correofb {

		background-image: url(img/svg/casa.svg);

	}

	#cp {
		background-image: url(img/svg/placeholder.svg);
		background-size:8%;
	}

	#tel {
		background-image: url(img/svg/smartphone.svg);
		background-size:8%;
	}

	.inputs5 {

		float: left;

		width: 100%;

		margin-bottom: 5%;

		padding: 0 10%;

		text-align: left;

		margin-top: 1.5em;

	}

	.iconon {

		width: 10%;

		margin: 0;

		padding: 0;

		float: right;

		position: relative;

		margin-left: -5%;

		margin-top: -40px;

		opacity: .5;

	}



	#btnrecover {

		background: #ff1528;

		color: #fff;

		padding: 1em;

		display: inline-block;

		font-family: "Museo 900", sans-serif;

		width: 50%;

		cursor:pointer;

	}

	.dots-form  {
		width: 100%;
		float: left;
		padding: 2%;
	}

	.dots-form ul {
		text-align: center;
	}
	.dots-form li {
		width: 1em;
		height: 1em;
		border-radius: 50%;
		background: #ccc;
		display: inline-block;
		margin: 0 .5em;
	}

	.dots-form .active{
		background: #f29100;
	}



	input:checked + .labelcb {



		background: #f29100;



	}








	.middle input[type="radio"] {

		display: none;

	}

	.middle input[type="radio"]:checked + .box {

		background-color: #f29100;

		color:#fff;

	}

	.middle input[type="radio"]:checked + .box span {

		color: white;

		transform: translateY(70px);

	}

	.middle input[type="radio"]:checked + .box span:before {

		transform: translateY(0px);

		opacity: 1;

	}

	.middle .box {
		width: 60px;
		height: 60px;

		transition: all 250ms ease;
		will-change: transition;
		display: inline-block;
		text-align: center;
		cursor: pointer;
		position: relative;
		font-family: "AmsiProNarw", sans-serif;
		font-weight: 100;
		border-radius: 50%;
		border: 0;
		margin: 1em;
		line-height: 60px;
		color: #fff;
	}
	.middle .box:active {

		transform: translateY(10px);

	}

	.middle .box span {

		position: relative;

		transform: translate(0, 60px);

		left: 0;

		right: 0;

		transition: all 300ms ease;

		font-size: .8em;

		user-select: none;

		color: #fff;

		line-height: 2.7em;

	}

	.middle .box span:before {

		font-size: 1.2em;

		font-family: FontAwesome;

		display: block;

		transform: translateY(-80px);

		opacity: 0;

		transition: all 300ms ease-in-out;

		font-weight: normal;

		color: white;

		display: none;

	}

	.middle .front-end span:before {

		content: '\f121';

	}

	.middle .back-end span:before {

		content: '\f0f4';

	}

	.middle p {

		color: #fff;

		font-family:"AmsiProNarw", sans-serif;

		font-weight: 400;

	}

	.middle p span:after {

		content: '\f0e7';

		font-family: FontAwesome;

		color: yellow;

	}

	#small-dialog, #small-dialog2, #small-dialog3 {
		background: white;
		padding: 2.5%;
		text-align: center;
		max-width: 500px;
		margin: 80px auto;
		position: relative;
		background-image: url(img/fondo.png);
		background-size: 30%;
		background-repeat: no-repeat;
		background-position: bottom right;
	}
	#small-dialog .mfp-close {
		color: transparent;
		text-shadow: none;
		font-size: 2.5em;
		font-weight: normal;
		font-family: "AmsiProNarw", sans-serif;
		background-image: url(img/cerrar1.png);
		background-size: 50%;
		background-repeat: no-repeat;
		background-position: center;
	}

	.mfp-close {
		color: transparent;
		text-shadow: none;
		font-size: 2.5em;
		font-weight: normal;
		font-family: "AmsiProNarw", sans-serif;
		background-image: url(img/cerrar1.png)!important;
		background-size: 50%;
		background-repeat: no-repeat;
		background-position: center;
	}
	.btnub {
	background: #f29100;
	color: #fff;
	display: inline-block;
	padding: 1em;
	width: 100%;
	min-width: 200px;
	max-width: 400px;
	font-family: "Museo 900",sans-serif;
	margin: 1em 0;
	border: none;
}

	#small-dialog h3 {
		color: #f29100;
		font-size: 1.5em;
	}

	#small-dialog p{color:#333; font-size:.8em;}

	.mfp-close-btn-in .mfp-close {
		color: transparent;
	}

	.middle .box {
		width: 4em;
		height: 4em;
		transition: all 250ms ease;
		will-change: transition;
		display: inline-block;
		text-align: center;
		cursor: pointer;
		position: relative;
		font-family: "AmsiProNarw", sans-serif;
		font-weight: 100;
		border-radius: 50%;
		border: none;
		margin: 1em;
		background-repeat: no-repeat;
		background-size: 90%;
		background-position: center;
	}

	.rappibg{
		background-image: url(img/bgrappi.png);
		background-color: #ec614f;
		background-color: #ec614f;
	}
	.sdbg{
		background-image: url(img/bgsd.png);
		background-color: #d6312d;
		background-color:  #d6312d;
	}
	.telbg{
		background-image: url(img/bgtel.png);
		background-color: #ea0a2a;
		background-color: #ea0a2a;
	}

	.middle input[type="radio"]:checked + .rappibg {
		background-color: #ec614f;
	}

	.middle input[type="radio"]:checked + .sdbg {
		background-color: #d6312d;
	}

	.middle input[type="radio"]:checked + .telbg {
		background-color: #ea0a2a;
	}

	.middle p span::after {
	content: '';
	font-family: FontAwesome;
	color:transparent;
}

*, *:focus, *:active{outline:0;}
.btn-domicilio {
    display: inline-block;
}
</style>

<?php echo $showpop;?>
<?php echo $showpop2;?>

<div class="imgbg1"></div>

<div class="imgbg2"></div>





<div id="tab2_content">







	<h2 class="maintitle">¿Quién quieres que te lo lleve?</h2>











	<div style=" position: relative; float: left;width: 100%;">

		<div class="aligncenter">

			<p style="margin-top: 0;">Estás a un paso de disfutar el sabor de Vips</p>
			<p style="margin-top:0; margin-bottom:0;font-size: 3em; font-family: 'AmsiProNarw', sans-serif;  color: hsl(1.2, 80.8%, 51%);">#VipsVenAmí</p>

			<div class="middle" id="botonesagregadores">
				<h3>Elige quién lo llevará*</h3>
				<?php echo $botonrappi . $botonsd . $botontel;



				?>



				<br>


				<p style="color: #666; font-size: 1em;">La dirección de envío es: <span style="text-transform:capitalize"><?php echo $radio;?></span> (<?php echo $calle." ". $ext.", ".$cp;?>) <a style="color:#f29100;" id="cambiadomicilio" href="perfil#envio">Cambiar</a></p>
				<p style="color: #666; font-size: .8em;">*Para pedir a domicilio no necesitas descargar una aplicación</p>


			</div>


		</div>









		<div class="dots-form">
			<ul>
				<li ></li>
				<li ></li>
				<li class="active"></li>
			</ul>
		</div>








	</div>







</div>





<div id="small-dialogpass" class="zoom-anim-dialog mfp-hide">



	<h3>Ingresa tu email para recuperar tu contraseña </h3>

	<form id="formrecover" class="formrecover" onsubmit="return false"  enctype="multipart/form-data" method="post">










		<div class="inputs5">



			<label for="correo">CORREO:</label><br>



			<input class="input inputrecoverr" type="email" id="correopass" name="correopass" placeholder="correo@email.com" required>







		</div>





		<div>







			<a id="btnrecover"  style="background:#ff1528;">RECUPERAR</a>



		</div>



	</form>





</div>

<style>
#tel1 {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%;
}

#correofb {

	background-image: url(img/svg/smartphone.svg);

}
</style>
<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">

	<h3 style="color: #f29100; font-size: 1.5em;">¡Lo sentimos, <?php echo $nombre;?>!</h3>
	<p>Por el momento no tenemos cobertura donde estás. <br><br> Pero con tu registro, ahora tienes una Tarjeta de Lealtad con la que obtendrás descuentos en cada visita y puntos Wow para pagar tus consumos.</p>

	<a href="promociones" class="btnub">IR A MI TARJETA DE LEALTAD</a>



</div>

<div id="small-dialog3" class="zoom-anim-dialog mfp-hide">

	<h3>Hay un problema con tu número celular, por favor ingresa uno diferente.</h3>
 <form  id="formmailfb" class="formlogin" onsubmit="return false"  enctype="multipart/form-data" method="post">

				<div id="respuesta3">

				</div>


					<div class="inputs logininputs">

						<label for="correo"></label><br>

						<input maxlength="10"  class="input inputfbmail" type="text" id="correofb" name="correofb" placeholder="Ingresa tu celular (10 dígitos)" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
						<p class="avisocard" googl="true">Lo necesitamos para comunicarnos contigo si no encontramos la dirección. Este número será usado en todas las direcciones de envío que registres.</p>

						<i class="material-icons icono">

							alternate_email

						</i>

					</div>




					<div>

						<a class="boton top"  id="btnfbmail">REGISTRAR TELÉFONO</a>

					</div>

				</form>



	</div>

<a href="#small-dialog2" class="popup-with-move-anim"  id="nogeo"></a>



<div id="small-dialog-tel" class="zoom-anim-dialog mfp-hide">

	<h3 style="color: #f29100; font-size: 1.5em;">¡Hola, <?php echo $nombre;?>!</h3>
	<p>Para ordenar, llama al <br>5900 8477 o al <br>01 800 900 8477<br> Servicio de 8:00 am a 23:00 pm </p>

	<a href="/ubicaciones?q=<?php echo $cp;?>" class="btnub">BUSCAR MI VIPS MÁS CERCANO</a>


</div>

<a href="#small-dialog2" class="popup-with-move-anim2"  id="nogeo"></a>
<a href="#small-dialog3" class="popup-with-move-anim2"  id="uptel"></a>




<script>

	$("#switchap").click(function() {

		if($(this).is(":checked")) {

			$(".phidden").slideDown();

		}

		else {

			$(".phidden").slideUp();

		}

	});



</script>



<script>



	$('#btnreg').click(function(event){



		$("#respuesta").html("");
		$("#respuesta").hide();
		$("#respuesta").show();




		$('.inputregr').removeClass('errorinput');

		$(".bgswitch").removeClass("bgreds");

		var calle= $("#calle").val();

		var ext = $('#ext').val();

		var inte  = $("#inte").val();

		var cp = $('#cp').val();

		var tel = $('#tel').val();

		var error = false;



		if (calle == '' || ext == '' || inte == '' || cp == '' || tel == '' )

		{

			$("html, body").animate({ scrollTop: $("#topreg").offset().top });

			$("#respuesta").append("<div class='errormsg'>Completa los campos</div>");

			$.each($('.inputregr'),function() {

				if ($(this).val().length == 0) {

					$(this).addClass("errorinput");

				}

			});

			error = true;



		}





		if (error == false){

			event.preventDefault();
			$(location).attr('href', 'domicilio-3')


		}



	});





	$('#btnlogin').click(function(event){

		$('.inputloginr').removeClass('errorinput');



		var emailval  = $("#correol").val();

		var mailvalid = validateEmail(emailval);

		var passl = $('#passl').val();



		if (emailval == '' || passl =='')

		{

			$("#respuesta2").html("<div class='errormsg'>Completa los campos</div>");

			$.each($('.inputloginr'),function() {

				if ($(this).val().length == 0) {

					$(this).addClass("errorinput");

				}

			});



		}



		else if ( mailvalid == false)

		{

			$("#respuesta2").html("<div class='errormsg'>El correo no es válido</div>");

			$("#correol").addClass("errorinput");

		}



		else{

			event.preventDefault();

			$.ajax({

				url : "login.php",

				type: "POST",

				data : new FormData($('#formlogin')[0]),

				processData: false,

				contentType: false,

				success:function(data){



					$('#respuesta2').html(data);



					setTimeout(function() {

						$('.success').slideUp("slow");

						$('.errormsg').slideUp("slow");

					}, 10000);







				}

			});



		}

	});





	$('#btnrecover').click(function(event){

		$('.inputrecoverr').removeClass('errorinput');



		var emailvalp  = $("#correopass").val();

		var mailvalidp = validateEmail(emailvalp);





		if (emailvalp == '')

		{

			$("#respuesta3").html("<div class='errormsg'>Completa los campos</div>");

			$("#correopass").addClass("errorinput");



		}



		else if ( mailvalidp == false)

		{

			$("#respuesta3").html("<div class='errormsg'>El correo no es válido</div>");

			$("#correopass").addClass("errorinput");

		}



		else{

			event.preventDefault();

			$.ajax({

				url : "recupera.php",

				type: "POST",

				data : new FormData($('#formrecover')[0]),

				processData: false,

				contentType: false,

				success:function(data){



					$('#respuesta3').html(data);



					setTimeout(function() {

						$('.success').slideUp("slow");

						$('.errormsg').slideUp("slow");

					}, 10000);







				}

			});



		}

	});







	function validateEmail(email22) {

		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		return reg.test(email22);

	}



	$(document).ready(function() {









		$('.popup-with-move-anim').magnificPopup({

			type: 'inline',



			fixedContentPos: false,

			fixedBgPos: true,



			overflowY: 'auto',



			closeBtnInside: true,



			preloader: false,



			midClick: true,

			removalDelay: 300,

			mainClass: 'my-mfp-slide-bottom'

		});


		$('.popup-with-move-anim2').magnificPopup({
			 type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: false,
		  modal : false,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-slide-bottom'
		});








	});

	$("[name=radio]").change(function () {
		var radioValue = $("input[name='radio']:checked").val();
		var link = $("input[name='radio']:checked").attr("data-url");
    //alert(link);
    $("#comenzarpedido").attr("href", link);

});


function removeModal(){
	  $("#comenzarpedido").removeClass("popup-with-move-anim");
	   $("#comenzarpedido").removeClass("nopointer");
}
function addModal(){
	  $("#comenzarpedido").addClass("popup-with-move-anim");
	  $("#comenzarpedido").removeClass("nopointer");
}

$("#comenzarpedido").click(function(){
	var link2 = $(this).attr("href");
window.location = link2;
});



    $('#btnfbmail').click(function(event){
		$('.inputfbmail').removeClass('errorinput');

		var emailvalfb  = $("#correofb").val();


		if (emailvalfb.length < 10 )
	{
		$("#respuesta3").html("<div class='errormsg'>Ingresa un número válido (10 dígitos)</div>");
		$("#correofb").addClass("errorinput");

	}

	else{
        event.preventDefault();
        $.ajax({
            url : "updatetel.php",
            type: "POST",
            data : new FormData($('#formmailfb')[0]),
            processData: false,
            contentType: false,
            success:function(data){

				$('#respuesta3').html(data);

				 setTimeout(function() {
                $('.success').slideUp("slow");
				$('.errormsg').slideUp("slow");
            }, 10000);



            }
        });

		}
    });
</script>


<!-- Footer =============================-->



<?php include('footer.php');?>
