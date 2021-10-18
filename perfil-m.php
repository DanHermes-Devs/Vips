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
else{
	header("Location: /cuenta-m");

}
include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

	header('Location: /');

	exit(0);

}



$resreg=$mysqli->query("SELECT * FROM registros WHERE id_registro = $uid OR facebook_id = $uid OR google_id = $uid");
$rowreg=mysqli_fetch_array($resreg);
$nombre = $rowreg['nombre'];
$apellido = $rowreg['apellido'];
$nombrecompleto = $nombre . " " . $apellido;
$correo = $rowreg['correo'];
$correo = strtolower($correo);
$telefono = $rowreg['telefono'];
$sus = $rowreg['suscrito'];

if($sus == 1){
	$suscrito = 1;
	$checkedsus = '';
}
else{
	$suscrito = 0;
	$checkedsus = 'checked';
}


$wsdl = 'https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';
	//$wsdl = 'https://soatest.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';


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
				echo "lll". strlen($array2[0]);
				$puntostotales = print_r($array2[0]);

			}

	}
	catch(SoapFault $e){
		echo $e->getMessage();
	}


?>

<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-Image-Carousel-jQuery-SimpleSlider/free-simple-slider.css" type="text/css" media="all" />

	<link rel="stylesheet" href="/css/styleperfil.css">


<div class="main">



	<?php include('lateral.php');?>



	<main role="main">



		<?php

				if(strlen($miembro['memberNumber']) > 5){
					$barcode ='
					<img class="imgcard codigobarra" src="/barcode.php?text='.$miembro['memberNumber'].'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2" alt="">
					';
					$msgcard ='';
					$urlp = "http://192.168.30.203:8110/WSTarjetaLealtad/Servicio?wsdl=";
					
					
					$cardnumber = $miembro['memberNumber'];
					
					$querytdl = "UPDATE registros SET tdl = $cardnumber WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
					$resulttdl = $mysqli->query($querytdl) or die("Falló la consulta $querytdl");
					
					if(strlen($_COOKIE['persistWOW'])< 5){
						
						echo '
						<script>
							  analytics.identify('.$cardnumber.', {
								  name: "'.$nombre.'",
								  lastName: "'.$apellido.'",
								  email: "'.$correo.'"
								  

								});
						</script>
						
						';
						
						function generateRandomString($length = 10) {
					return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
				}

			$string =  generateRandomString();  // OR: generateRandomString(24)
			$_SESSION['wowvips'] = $string;
			setcookie("persistWOW", $string, time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);
						
						
					}
				}

				else{
					$barcode ='<p class="nocard">Tu tarjeta se generará pronto..</p>';
					$msgcard ='<p class="nocard2">Tu tarjeta se generará pronto..</p>';
					
					$numvisita =  0;
					$numdescuento = 0;
					$urlp = "";
					$cardnumber = 0;

				}


	echo $msgcard;

	

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_PORT => "8110",
	  CURLOPT_URL => $urlp,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:tld=\"http://fe.org/tld\">\r\n   <soapenv:Header/>\r\n   <soapenv:Body>\r\n      <tld:datos><![CDATA[\r\n               <CONSULTA  FCIDMARCA=\"OVI\" FIIDTARJETA=\"1\" FINUMEROTARJETA=\"".$miembro["memberNumber"]."\" FIIDCENTROCOSTO=\"81229\" />\r\n         ]]>\r\n</tld:datos>\r\n      <tld:uid>UID00000IN20120416142530</tld:uid>\r\n   </soapenv:Body>\r\n</soapenv:Envelope>",
	  CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache",
		"content-type: text/xml",
	  ),
	));


	$response = curl_exec($curl);
	$airings = array();

	$err = curl_error($curl);

	curl_close($curl);

	$content = value_in("detalle",$response);
	//echo "content ".$content;

    $contentXML = html_entity_decode($content);
    //echo "contentXML ".$contentXML;

	$xml = simplexml_load_string($contentXML);




	//print xml_attribute($xml, 'id');

	//print_r($xml);

	//echo $xml->attributes[0]->FINUMEROVISITA;



	function xml_attribute($object, $attribute)
	{
    if(isset($object[$attribute]))
        return (string) $object[$attribute];
	}


	 //echo "R1".$response1;
	// echo "Respuesta ".$response2;

	 //echo array_search("detalle",$response2);


	//print_r($json);

	if ($err) {
	 // echo "cURL Error #:" . $err;
	}

	function value_in($element_name, $xml, $content_only = true) {
    if ($xml == false) {
        return false;
    }
    $found = preg_match('#<'.$element_name.'(?:\s+[^>]+)?>(.*?)'.
            '</'.$element_name.'>#s', $xml, $matches);
    if ($found != false) {
        if ($content_only) {
            return $matches[1];  //ignore the enclosing tags
        } else {
            return $matches[0];  //return the full pattern match
        }
    }
    // No match found: return false.
    return false;
}

$numvisita =  xml_attribute($xml, 'FINUMEROVISITA');
$numdescuento = xml_attribute($xml, 'FNPORCENTAJEDESC');


?>


		<style>
		
		.input {

	border: 0 !important;
	border-bottom: 1.5px #ddd solid !important;
}


		.codigobarra {
	position: relative;
	margin-left: 0;
	margin-top: 0;
	max-width: 100%;
}
		.arrows{
			display: none;
		}
		.prev-arrow{
			display: none;
		}
		.free-simple-slider .slider-dots li.current{
			border: 1px solid #FFF!important;
			background: #FFF!important;
			box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.34)
		}
		.free-simple-slider .slider-dots li{
			border: 1px solid #FFF!important;
			background: transparent!important;
			box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.34)
		}

		* {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.free-simple-slider li{background-position:center center!important;}



.accordion_container {
	float: left;
	width: 100%;
	padding-bottom: 0;
}

.avatar {
	text-align: center;
	padding-top: 0;
	color: #fff;
}
.overlayimg {
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,.6);
	background-image: url(/img/photo.png);
	background-repeat: no-repeat;
	background-size: 40%;
	background-position: center;
	border-radius: 50%;
	opacity: 0;
	transition: .35s all ease;
	/* padding: 15%; */
	margin: auto;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
	cursor:pointer;
}

#imgv {
	float: left;
	width: auto;
	text-align: center;
	background: url(/img/loaderm4.gif);
	background-repeat: no-repeat;
	background-size: 15%;
	background-position: center;
	margin-bottom: 0;
}
.labelfile1 {
	position: relative;
	width: 25vw !important;
	text-align: center;
	font-size: 10px;
	border-radius: 50%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	float: none !important;
	display: inline-block;
	height: 25vw;
}
.opacity1{opacity:1; transition:.35s all ease;}
.avatarimg img {

	max-width: 100%;

	width: 100%;

	border-radius: 50%;


}

#uploadedimage {
	visibility: hidden;
	height: 0;
	margin: 0;
	padding: 0;
	display: none;
}
#respuesta, #respuesta2 {
	width: 100%;
	float: left;
	padding-top:.5em;
}

.success {
	width: 100%;
	background: #DCEDC8;
	padding: 1em;
	color: #558B2F;
	border-radius: 5px;
	margin: .5em 0;
}

.errormsg {
	width: 100%;
	background: #FFCDD2;
	padding: 1em;
	color: #B71C1C;
	border-radius: 5px;
	margin: .5em 0;
}
.boton {

	text-align: center;
}

.accordion_body.logoutm {
	padding-bottom: 8vh;
}


#datosenvio{
	color: #f29100;
	font-family: "Museo 900";
	padding-left: 40px;
	background-image: url(/img/svg/casa.svg);
	background-repeat: no-repeat;
	background-size: 8%;

background-position: 5% center;
}

#respuesta3 .success, #respuesta3 .errormsg {

	width: 80%;

	margin: .5em auto auto;

}


#calle, #ext, #inte, #colonia {

	background-image: url(/img/svg/casa.svg);

	background-size: 8%;

}

	.input {



		height: 45px;



		width: 100%;



		background: transparent;



		border: none;



		border-style: solid;



		outline: none;



		border-color: #a9a6a1;



		border-top: none;



		border-left: none;



		border-right: none;



		padding: 10px 0;



	}


#correofb {

	background-image: url(/img/svg/casa.svg);

}

#cp {
	background-image: url(/img/svg/placeholder.svg);
	background-size:8%;
}

#tel {
	background-image: url(/img/svg/smartphone.svg);
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
	background-color: #999;
	transition: all 250ms ease;
	will-change: transition;
	display: inline-block;
	text-align: center;
	cursor: pointer;
	position: relative;
	font-weight: normal;
	border-radius: 50%;
	border: 0;
	margin: .5em;
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

.middle label{width:auto;}

.errorinput {

    border: 1px solid #c14549;

    background-image: url(/img/error.png)!important;

    background-size: 7%!important;

    background-repeat: no-repeat;

    background-position: 97% center!important;

}

h5 {
	text-transform: uppercase;
	margin: 0;
	padding-left: 0px;
	height: 30px;
	
}
#loadaddress p {
	font-size: 12px;
	color: #fff;
	margin: 0;
	float: none;
	width: auto;
	white-space: normal;
	text-align: center;
}
#small-dialog-form {
	background: #fff;
	padding: 5% 2.5%;
	text-align: center;
	max-width: 600px;
	margin: 130px auto;
	position: relative;
	background-image: url(/img/fondo.png);
	background-size: 30%;
	background-repeat: no-repeat;
	background-position: bottom right;
	display: inline-block;
}
	.mfp-content {

	text-align: center;

}

.small-dialog-form label{text-transform:capitalize;}
.mfp-wrap {
	z-index: 2;

}

#formreg2 label {
	text-align: left;
	width: 100%;
	float: left;
}
.requiredtext {
	float: left;
	padding-left: 5%;
	color: #555;
	margin: 0;
	font-size: .9em;
}

#btnreg2 {
	width: 100%;
	float: left;
	margin: 1em 0;
}
.pencil {
	background-image: url(/img/pencil-tool.png)!important;
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: bottom center;
	width: 40px;
	height: 40px;
	display: inline-block;
	float: left;
	cursor: pointer;
	padding: 0;
}
.star0 {
	background-image: url(/img/2019/star0.svg);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: top center;
	width: 30px;
	height: 45px;
	display: inline-block;
	float: left;
	cursor: pointer;
	padding: 1em;
}
.star1 {
	background-image: url(/img/2019/star1.svg);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: top center;
	width: 30px;
	height: 45px;
	display: inline-block;
	float: left;
	cursor: pointer;
	padding: 1em;
}
.direccion {
	width: 100%;
	float: left;
	margin-bottom: 0;
	padding: 0;
}
.avisocard {
	color: #f29100;
	width: 100%;
	float: left;
	font-size: .85em;
	font-family: "AmsiProNarw",sans-serif;
	margin-bottom: 0;
}

.mfp-wrap {
	z-index: 9999;
}

#respuestad {
	width: 100%;
	float: left;
}
.formulario {
background:transparent;
}
.formulario {
	padding: 0;

}

#btnreg {
	width: 100%;
	float: left;
	margin: 1em 0;
	padding: 1em;
}

.inputs input {
	background-size: 12%;
	background-repeat: no-repeat !important;
	background-position: right center;
}

.material-icons {

	display: none;
}

#formreg h2 {
	color: #f29100;
	font-size: 15px;
	padding: 0;
}

	.predeterminada15 {
	background-image: url(/img/star-p.png);

}

.eliminardir {
	/* display: none; */
	float: left;
	padding: 1em 2.5%;
	background: url(/img/borrar.png);
	background-repeat: no-repeat;
	color: transparent;
	background-size: 22px;
	background-position: center;
	margin-top: .75em;
}

#loadaddress form {
	float: none;
	padding: 1em;
	margin-top: .5em;
	width: auto;
}
.progresoperfil{
	float:left;

	width:100%;
	height: 22.5px;
	margin-bottom: 1em;
}

.barperfil{
	width:25%;
	border:1px solid #ccc;
	float:left;
	height: 22.5px;
}

.barperfil1, .barperfil2{
	width:25%;
	border:1px solid #ccc;
	background:#f29100;
}

.inputform {
	border-bottom: 1.5px #ddd solid!important;

}

.headeruser {
	min-heigh
	t: 250px;
}



.pformtoggle {
	font-size: .8em !important;
	text-align: left !important;
}

.tab .tab__head {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 50px;
	width: 100%;
	position: fixed;
	top: 9vh;
	bottom: 0;
	padding: 0;
	background: #fff;
	text-align: center;
	box-shadow: 0 2px 4px 0 rgba(207,207,207,.5);
	z-index: 4;
	overflow: hidden;
}
.tab .tab__head li {
	float: left;
	margin: 0;
	cursor: pointer;
	padding: 5px;
	height: 50px;
	line-height: 1;
	color: #333;
	border-bottom: 0px;
	overflow: hidden;
	position: relative;
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
	width: 33.3%;
}
.tab .tab__head li img {
	width: 18px;
}
.tab .tab__head li p {
	margin: 0;
	width: 100%;
	display: inline-block;
	font-size: 11px;
}
.tab .tab__head li.active {
	border: none;
	background-color: #fff;
	color: #333;
	border-bottom: 3.54px solid #ea0029;
	display: block;
}
.tab .tab__container {
	border: 0;
	float: left;
	width: 100%;
	min-height: 100vh;
	padding-left: 0;
	margin-top: 10vh;
	padding-top: 3%;
	#fafafa
}
.tab .tab__content {
	padding: 4%;
	display: none;
}
.tab .tab__content > :first-child {
  margin-top: 0;
}

.seccion-perfil {
	background: #fafafa;
	display: none;
}

.nameinfo h1 {
	color: #ed7124;
	padding: .5em 0;
	margin: 0;
	font-size: 24px;
	font-weight: 500;
}

.full {
	width: 100%;
	float: left;
}

.mid {
	width: 100%;
	float: left;
}
.cardbg {
	border-radius: 20px;
	background: #fff;
	display: inline-block;
	box-shadow: 0 2px 4px 0 rgba(207,207,207,.5);
	border: solid 1px #ededed;
	padding: 5%;
	margin-bottom: 5%;
	width: 100%;
}
.cardbg p {
margin:0;
}

.labelfile1 {
	filter: drop-shadow(3px 2px 4px #ccc);
}
.recomendacion {
	color: #ea2229;
	font-size: 14px;
	text-decoration: none;
	height: 30px;
	border-radius: 20px;
	background-color: #ed1c2c;
	width: auto;
	display: inline-block;
	color: #fff;
	text-align: center;
	line-height: 20px;
	padding: 5px 10px;
	margin-top: 10px;
	font-weight: 500;
	min-width: 155px;
}

.nameinfo h1 {
	padding: 0;
	padding-bottom: 5px;
}

.cardbg h2 {
	font-size: 18px;
	font-weight: 500;
	margin: 0;
	margin-bottom: 2.5%;
	padding-top: 0px;
}


.line.orange {
	height: 4px;
	border: none;
	width: 40px;
	margin-bottom: 5px;
	background: #faac4f;
}
.inputform {
	width: 100%;
	margin: 1.5px 0;
}

.cardbg .form-mid {
	width: 100%;
	padding: 10px 0;
	float: left;
}

.cardbg .form-mid input {
	background-size: 23px !important;
}

.boton {
	background: #ef3e42;
	color: #fff;
	font-size: 1em;
	font-weight: bold;
	transition: 0.3s all ease;
	width: 233px;
	height: 50px;
	border-radius: 40px;
	background-color: #f5a623;
	font-weight: 500;
	font-family: 'Program', sans-serif;
	line-height: 1.6;
	display: inline-block;
	float: none;
	/* margin: 0 auto; */
	right: 0;
}

.formperfil {
	text-align: center;
}

.formperfil label {
	text-align: left;
	float: left;
}
.form-wide .labelcb {
	top: -10px !important;
	float: none;
}
.front, .back, .flip {
	text-align: center;
}

.codigobarra {
	position: absolute;
	left: 0;
	margin-top: -39%;
	width: 90%;
	margin-left: 5%;
}
.flipicon {
	width: 6%;
	height: 40px;
	background-image: url(/img/svg/flip.svg);
	position: absolute;
	float: left;
	margin-top: -9%;
	right: 20%;
	background-repeat: no-repeat;
	background-size: 100%;
	animation: pulseblue 1.6s linear infinite;
	cursor: pointer;
}

.visitas-bar, .puntos-bar {
	width: 100%;
	border-radius: 0;
	background: #fff;
	margin: 0 auto;
	color: #fff;
	border: none;
	height: auto;
	box-shadow: none;
	text-align: center;
}
.visitas-progress {
	background: #fff;
	overflow-x: visible;
	border-radius: 0;
	height: auto;
}

.textbar1 {
	padding: 4.5px 4px;
	margin: 0;
	position: relative;
	color: #404040;
	font-size: 40px;
	text-align: center;
	font-weight: bold;
	width: auto;
	display: inline-block;
}

.textbar1 span {
	font-size: 20px;
	margin-left: 7px;
}

.pinimg {
	vertical-align: middle;
	margin-top: -20px;
	width: 30px;
}

.third.cardbg {
	width: 30%;
	margin-right: 0;
	padding: 12px;
	float: left;
	min-height: 165px;
}
.c100 > span {
	position: absolute;
	z-index: 1;
	left: 0;
	top: 10%;
	width: 100%;
	line-height: 1;
	font-size: 30px;
	color: #404040;
	display: block;
	text-align: center;
	white-space: nowrap;
	-moz-transition-property: all;
	-o-transition-property: all;
	-webkit-transition-property: all;
	transition-property: all;
	-moz-transition-duration: .2s;
	-o-transition-duration: .2s;
	-webkit-transition-duration: .2s;
	transition-duration: .2s;
	-moz-transition-timing-function: ease-out;
	-o-transition-timing-function: ease-out;
	-webkit-transition-timing-function: ease-out;
	transition-timing-function: ease-out;
	padding-top: 18px;
	font-weight: bold;
}

.dedesc {
	font-size: 12px;
	line-height: 1px;
	margin-top: 5px;
	position: absolute;
	width: 100%;
	text-align: center;
	left: 0;
	font-weight: 500;
}

.puntos-bar {
	width: auto;
	border-radius: 0;
	background: none;
	margin: 0 auto;
	color: #404040;
	border: none;
	height: auto;
	box-shadow: none;
	text-align: center;
	padding: 0;
	font-size: 20px;
	font-family: inherit;
	font-weight: 500;
	float: left;
	display: inline-block;
	/* display: none; */
	max-width: 100%;
	position: relative;
}
.puntosimg {
	vertical-align: middle;
	max-width: 65px;
	margin: 0 auto;
	margin-bottom: 3px;
	width: 50%;
}
.carddom .inputs {
	float: left;
	width: 100%;
	margin-bottom: 10px;
	padding: 0;
}

.carddom .inputs input {
	background-size: 18px !important;
	background-repeat: no-repeat !important;
	background-position: right 88%;
	width: 100%;
}

.carddom h4 {
	margin: 10px 0;
	font-weight: 500;
}

.carddom .requiredtext {
	font-size: 12px;
	padding: 0;
	margin-top: 5%;
}
.carddom #btnregdom {
	margin: 5% 0;
	float: none;
	font-family: inherit;
	margin-left: 0;
	text-transform: none;
	font-size: 18px;
	line-height: 20px;
	min-width: 180px;
	padding: 10px;
	height: 40px;
}
#loadaddress br{display:none;}
.dircont {
	background: #fff;
	width: 33vw !important;
	float: left;
	display: inline-block;
	margin-right: 3.3%;
	border-radius: 15px;
	text-align: center;
	color: #fff;
	padding: 2%;
	margin-bottom: 0;
	position: relative !important;
	height: 140px;
	float: none !important;
}
.direccion {
	width: 100%;
	float: left;
	margin-bottom: 0;
	color: #fff;
}
#loadaddress p {
	font-size: 12px;
	color: #fff;
	margin: 0;
	float: none;
	width: auto;
}
.formfav {
	position: absolute !important;
	right: 0;
	padding: 0 !important;

}

.direccion h5 {
	text-transform: none;
	margin: 0;
	padding-left: 0px;
	height: auto;
	margin-bottom: 5px;
	font-weight: 500;
}

.pencil {
	position: absolute;
	left: 5%;
	bottom: 10%;
	filter: brightness(2);
}

.formdel {
	position: absolute;
	right: 2.5%;
	padding: 0 !important;
	bottom: 5%;
}

.icondir {
	display: block !important;
	height: 32px;
	margin: 5px auto;
}
.middle .box {
	background-color: #ccc;
	line-height: 4.5;
}
.conticon {
	width: auto;
	display: inline-block;
	color: #333;
}

.conticon p {
	color: #404040;
	font-size: 13px;
	text-align: center;
	margin: 0;
	margin-top: -5px;
	font-family: inherit;
}

.pformtoggle {
	color: #333;
	font-size: 9px;
	font-family: inherit;
	font-size: 14px !important;
}

.cardpromos{
	background: #faac4f;
	width: 82.5%;
	padding: 5%;
	margin-left: 4.5%;
	text-align: center;
	color: #fff;
	font-weight: 500;
	font-size: 20px;
}

.tooltipster-shadow * {
	font-family: 'Program', sans-serif !important;
	color: #333 !important;
}

.flip {
	margin-top: 10px;
}
.btncompra2, .btnmap, .boton.top, .btnredcupon, .btnub, .btnub2, .link1, .link2, .boton, .nav-next, .pidebtn {
	font-family: "Program",sans-serif!important;
	text-transform: none !important;
}
.scrolling-wrapper {
	overflow-x: scroll;
	overflow-y: hidden;
	white-space: nowrap;
}
.scrolling-wrapper .card {
  display: inline-block;
}

.scrolling-wrapper-flexbox {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
}
.scrolling-wrapper-flexbox .card {
  flex: 0 0 auto;
  margin-right: 3px;
}
.card {
	width: 39vw;
	height: auto;
	background-color: #fff;
	/* float: left; */
	margin: 0 2vh 0 0;
	min-width: 110px;
	/* display: inline-block; */
	/* float: none; */
}
.nameinfo {
	float: left;
	width: auto;
	padding: 0 5%;
	color: #333;
	font-size: 13px;
	text-align: left;
}

.avatarimg {
	width: auto;
	float: left;
}
.scrollcont{width:100%; float:left;}

.cardwowimg {
	width: 95%;
	padding: 0;
}

.flipicon {
	width: 10%;
	height: 40px;
	background-image: url(/img/svg/flip.svg);
	position: absolute;
	float: left;
	margin-top: -14%;
	right: 8%;
	background-repeat: no-repeat;
	background-size: 100%;
	animation: pulseblue 1.6s linear infinite;
	cursor: pointer;
}

.third h2 {
	font-size: 16px;
	font-weight: 500;
	margin: 0;
	margin-bottom: 7.5px;
	padding-top: 0px;
}

.cardtdl{
	background: none; border: none; box-shadow: none;
}

.main *::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #555!important;
  opacity: 1; /* Firefox */
  font-family:"Program", sans-serif!important; 
}

.main *:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #555!important;
    font-family:"Program", sans-serif!important; 
}

.main *::-ms-input-placeholder { /* Microsoft Edge */
  color: #555!important;
    font-family:"Program", sans-serif!important; 
}

.cardbg .input {
	height: 33px;
	width: 100%;
	background: transparent;
	border: none;
	border-style: solid;
	outline: none;
	border-color: #a9a6a1;
	border-top: none;
	border-left: none;
	border-right: none;
	padding: 5px 0;
}

.direccion {
	width: 100%!important;
	float: left!important;
	margin-bottom: 0!important;
	padding: 0 5%;
}

#formreg {
	text-align: center;
}
#btnreg, #btnreg2 {
	text-transform: none;
	font-family: "Program", sans-serif;
	padding: .75em;
}

#respuesta4 {
	width: 100%;
	float: left;
	margin-bottom: 5px;
}
#btnsend4 {
	display: inline-block;
	right: auto;
	
}

.form-wide {
	width: 100%;
	float: left;
}

.total {
	font-weight: 500;
	color: #ed7124;
	font-size: 1.2em;
	margin-top: 5px;
	display: inline-block;
	padding-left: 12%;
}
.productos {
	color: #909090;
	font-weight: 500;
	line-height: 1.3;
}
.showmore {
	display: none;

}
.vermas {
	display: inline-block;
	text-align: right;
	width: 100%;
	font-weight: 500;
	padding-right: 5%;
	cursor: pointer;
	margin-top: -18px !important;
	position: relative;
	float: left;
}
.fechacompra {
	width: 100%;
	background: #f3f7ff;
	padding: 10px;
	display: inline-block;
	margin-top: 15px;
}
.fechaentrega, .monto, .sucursal {
	width: 100%;
	background: #fff;
	padding: 10px;
	display: inline-block;
	margin-top: 0px;
}
.horario, .horaentrega, .notas{
	width: 100%;
	background: #f3f7ff;
	padding: 10px;
	display: inline-block;
	margin-top: 0px;
}


.fechacompra p, .fechaentrega p, .horaentrega p, .monto p, .notas p, .sucursal p {
	width: 50%;
	display: inline-block;
}

.righttext {
	text-align: right;
}

.code {
	text-align: center;
	font-weight: 500;
}
.code p {
	padding: 2.5%;
}

.code img {
	width: 80%;
	max-width: 320px;
}
#pedidos {
	font-size: 13px;
}


.infoplatos {
	width: 100%;
	display: inline-block;
}

.infoplatos img {
	width: 9%;
	float: left;
	vertical-align: middle;
}
.infoplatos p {
	width: 85%;
	float: left;
	vertical-align: middle;
	text-align: left;
	margin-top: 1.5% !important;
	padding-left: 10px;
}

#pedidos .cardbg {
	border-radius: 20px;
	background: #fff;
	display: inline-block;
	box-shadow: 0 2px 4px 0 rgba(207,207,207,.5);
	border: solid 1px #ededed;
	padding: 2.5%;
	margin-bottom: 2.5%;
	width: 95%;
}
	</style>
<div class="tab">
  
<ul class="tab__head">
  <li id="perfil" class="active" rel="tab1"><img src="/img/2019/perfil.svg"><p>Perfil</p></li>
  <li id="direcciones" rel="tab2"><img src="/img/2019/direcciones.svg"><p>Dirección</p></li>
  <li id="Mis-pedidos" rel="tab3"><img src="/img/2019/pedidos.svg" style="width: 25px;"><p>Mis Pedidos</p></li>
  <li id="configuracion" rel="tab4"><img src="/img/2019/configuracion.svg"><p>Configuración</p></li>

</ul>
  
<div class="tab__container">

  <div id="tab1" class="tab__content">
    
    <div class="full">
	
		<div class="mid">
			 <div class="full cardbg">
			 
				
	<div class="avatar">
		<div class="avatarimg">

	<?php
	if ($facebook !=""){
		$avatar1 ="https://graph.facebook.com/".$_SESSION['uservips']."/picture?type=large";
	}
	else{
		$avatar1 ="/img/svg/avatar.svg";

	}
	if($foto != ""){$avatar1 = "/".$foto;}

	?>


	<form name="bannerform" id="bannerform" onsubmit="return false"  enctype="multipart/form-data" method="post">
	<input type="file" name="uploadedimage" id="uploadedimage" class="inputfile inputfile-4 hidden" accept="image/x-png,image/jpeg" style="display:none;"/>
		<div data-balloon="Sólo se admiten archivos PNG y JPG" data-balloon-pos="up" >

			<input type="hidden" name="banner" id="banner" class="typebanner" value="" />
			<input type="hidden" name="idtienda" id="idtienda" class="idtienda" value="<?php echo $_SESSION['uservips'] ;?>" />

		</div>
	</form>

	<a href="javascript:document.querySelector('input#uploadedimage').click()"><div id="imgv">
				<label class="labelfile1 tooltipimg" title="Sube tu foto" style="background-image: url(<?php echo $avatar1; ?>);text-align: center;    font-size: 10px;">
				<div class="overlayimg"></div>
				</label>
			</div></a>
	</div>
		<div class="nameinfo">
			<h1>¡Hola <?php echo $nombre; ?>!</h1>
			<p>Hoy es un buen día para</p>
			<a href="/clasicos" class="recomendacion"> Probar los clásicos 2 x 1</a>
		</div>
	</div>
	 </div>
	 
	<div class="full cardbg cardtdl">
		<h2> <div class="line orange" style="background-color: #ed1c2c;"></div>Tarjeta de Lealtad Digital</h2>
		<p style="font-size: 12px;">En tu siguiente visita tendrás 15% de descuento, en la siguiente 20% y así hasta llegar al 50% en tu 5a visita en un mes.</p>
		<div class="flip" style="perspective: 828px; position: relative;" onclick="wowClicked('<?php echo $cardnumber;?>');">
			<p style="font-size: .9em; padding: 0 0%; color: #555; margin: 2.5% 0; display:none; ">Da clic en la tarjeta y revela el código de barras</p>
			<div class="front tooltipimg" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s;" title="Da clic en la tarjeta y revela el código de barras">
				<img src="/img/TarjetaWOW.png" alt="" class="cardwowimg" style="backface-visibility: hidden;">
				<div class="flipicon"> </div>
			</div>

			<div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; height: 100%; width: 100%; transform: rotateY(-180deg); z-index: 0; position: relative; transition: all 0.5s ease-out 0s;">
				<img src="/img/card_back.png" alt="" class="cardwowimg" style="backface-visibility: hidden;">
				<div id="barcodeimg" data-mid="<?php echo $cardnumber;?>" ><?php echo $barcode;?></div>
				<div class="flipicon"> </div>
			</div>

		</div>
	</div>
	
				<div class="scrollcont">
			
			<div class="scrolling-wrapper">
		
			<div class="card">	
				<div class="third cardbg" style="width:100%;">
					<h2> <div class="line orange"></div>Visitas</h2>
					<div class="visitas-bar">
						<div class="visitas-progress" style="width:100%;">
							<img src="/img/2019/visitas.png" alt="" class="pinimg"><p class="textbar1"><?php  echo $numvisita;?><span></span></p>
						</div>
					</div>
					<p class="porcentajem3" style="width: 100%; float: none; color: #4a4a4a; text-align: center; font-size: 12px; padding: 0 5%;"> Te quedan <span id="defaultCountdown"></span><br> para tu <span style="color: #ed7124">5ta visita</span></p>		
				</div>
			</div>
			
			
			<div class="card">
				<div class="third cardbg" style="width:100%;">
					<h2> <div class="line orange" style="margin-bottom: 7.5px; background-color: #ed1c2c;"></div>Recibirás</h2>
					<div class="c100 p30 blue">
						<span><?php  print "". floor($numdescuento);	?> <span style="font-size:20px; margin-left: -4px;">% </span><br><i class="dedesc">descuento</i></span>
						<div class="slice">
							<div class="bar"></div>
							<div class="fill"></div>
						</div>
					</div>
			
				</div>
			</div>

			<div class="card">
				<div class="third cardbg" style="width:100%; text-align: center;">
					<h2> <div class="line orange" style="margin-bottom: 7.5px; text-align: left; background-color: #ffdd13;"></div>Puntos totales</h2>
					<img class="puntosimg" src="/img/2019/puntos.png">

					<p style="color: #404040; font-size: 20px; font-weight: 500;"><?php print_r($array2[0]);?> pts</p>
				</div>
		  
			</div>
		
		 
		</div> 
		
	</div>

	<div class="full">
		<div class="full cardbg">
			<h2> <div class="line orange"></div>Información personal</h2>
				<form id="formperfil" class="formperfil" onsubmit="return false"  enctype="multipart/form-data" method="post">
					<div class="form-mid">
						<label>Nombre</label>
						<input type="text" class="inputform name" id="name" placeholder="Ingresa tu nombre" name="nombre" value="<?php echo $nombre; ?>" required>
					</div>

					<div class="form-mid">
						<label>Apellidos</label>
						<input type="text"  class="inputform apellidos" placeholder="Ingresa tus apellidos" id="apellido" name="apellido" value="<?php echo $apellido; ?>" required>
					</div>
						
					<div class="form-mid">
						<label>Celular</label>
						<input maxlength="10"  type="text" class="inputform cel" placeholder="10 dígitos" id="tel1" name="tel1" value="<?php echo $telefono; ?>" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
					</div>

					<div class="form-mid2" style="display:none;">
						<label>TU CUMPLEAÑOS*</label>
						<input type="text" class="inputform cumple" placeholder="Día/Mes/Año" id="cumple" name="cumple"  value="<?php echo $cumple; ?>" required>
					</div>

					<div id="respuesta"></div>

					<a class="btnredform savepass boton" id="btnsend1">Guardar Cambios</a>

			</form>
		 </div>
				  
	</div>
	
	<img style="width: 100%;" src="/img/2019/promos.png">
	
</div>

	
	</div>
  </div>
  <!-- #tab1 -->

  <div id="tab2" class="tab__content">
		    <div class="full">
	
		<div class="mid">


	<div class="full">
		<div class="full cardbg carddom">
			<h2> <div class="line orange"></div>Dirección a domicilio</h2>
					<div class="formulario form" id="topreg">



			<form id="formreg" class="formreg" onsubmit="return false"  enctype="multipart/form-data" method="post" style="padding: 0;">
			<h2>Añadir nueva dirección</h2>
			<input type="hidden" id="iduservips" name="iduser" value="<?php echo $uid;?>">
			<input type="hidden" id="correo" name="correo" value="<?php echo $correo;?>">
			<input type="hidden" id="nombre" name="nombre" value="<?php echo $nombre;?>">
			<input type="hidden" id="apellido" name="apellido" value="<?php echo $apellido;?>">
			<input type="hidden" id="genero" name="genero" value="<?php echo $sexo;?>">

				<div class="inputs">
					<input class="input inputregr" type="text" id="calle" name="calle" placeholder="Calle*" required>
				</div>

				<div class="inputs" style="width: 45%; margin-right: 10%;">
					<input class="input inputregr" type="text" id="ext" name="ext" placeholder="No. ext.*"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"   required>
				</div>

				<div class="inputs" style="width: 45%;">
					<input class="input" type="text" id="inte" name="inte" placeholder="No. int." >
				</div>

				<div class="inputs">
					<input class="input inputregr" type="text" id="colonia" name="colonia" placeholder="Colonia*" required>
				</div>

				<div class="inputs">
					<input class="input inputregr cp" type="text" id="cp" name="cp" placeholder="Código postal*" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" required>
				</div>

				<div class="inputs middle" style="width: 100%; text-align: center;">


				<h4>¿Dónde estás?</h4>

				 <div class="conticon"> 
					 <label id="chkcasa">

					  <input value="casa" type="radio" name="radio"/>

					  <div class="front-end box">

						<img src="/img/svg/casa2.svg" class="icondomicilio">
					

					  </div>

					</label>
					<p>Casa</p>
				</div>
			



				 <div class="conticon"> 
				  <label id="chkoficina">

				  <input value="oficina"  type="radio" name="radio"/>

				  <div class="back-end box">

						<img src="/img/svg/oficina.svg" class="icondomicilio">

				  </div>

				</label>
				<p>Oficina</p>
				</div>


				 <div class="conticon"> 
				  <label id="chkotro">

				  <input value="otro"  type="radio" name="radio"/>

				  <div class="back-end box">

					<img src="/img/svg/otro.svg" class="icondomicilio">


				  </div>

				</label>
				<p>Otro</p>
				</div>

				</div>

						<br><br>

						<div id="respuestad"></div>

						<div>

						<p class="requiredtext">* Campo requerido</p>



							<a class="boton top agregar-direccion"  id="btnregdom">Agregar dirección</a>



						</div>



					</form>


				</div>
		 </div>
				  
	</div>
	
</div>
		
		<div class="mid">
			<div class="full cardbg cardtdl" style="background: none; box-shadow: none; border: none;">
				<h2> <div class="line orange"  style="background-color: #ffdd13;" ></div>Mis direcciones</h2>
				
				<div class="scrollcont" style="width: 110%;">
					<div class="scrolling-wrapper">
						<div id="loadaddress"></div>
					</div> 
				</div>
				
					
				
				
			</div>
				
	
		</div>
	<img style="width: 100%;" src="/img/2019/promos.png">	
	</div>
  </div>
  <!-- #tab2 -->

  <div id="tab3" class="tab__content">
  
  	    <div class="full" id="pedidos">
		
		
	

  </div>
  <!-- #tab3 -->

</div>

  <div id="tab4" class="tab__content">
  
  	    <div class="full">
		
		<div class="mid">
				<div class="full">
					<div class="full cardbg carddom">
						<h2> <div class="line orange"></div>Correo</h2>
						<form id="formcorreo" class="formpass" onsubmit="return false"  enctype="multipart/form-data" method="post" style="margin-top: 0; float: left; width: 100%; text-align: center;">
							<div class="form-mid">
								<input type="email" class="inputform correo" placeholder="ejemplo@vips.com.mx" id="correo" name="correo" value="<?php echo $correo; ?>" required>
							</div>
							
							<div id="respuesta5"></div>
							<a class="btnredform savepass boton" id="btnsendmail">Guardar cambios</a>
						</form>
						
						</div>
				</div>
				
				<div class="full">
					<div class="full cardbg carddom">
						<h2> <div class="line orange"></div>Contraseña</h2>
						<form id="formpass" class="formpass" onsubmit="return false"  enctype="multipart/form-data" method="post" style="margin-top: 0; float: left; width: 100%; text-align: center;">
							<div class="form-mid">
								<input type="password" class="inputform pass1" placeholder="Contraseña actual" id="pass1" name="pass1" required>
							</div>
							<div class="form-mid">
								<input type="password"  class="inputform pass2" placeholder="Nueva contraseña" id="pass2" name="pass2" required>
							</div>
							<div id="respuesta2"></div>
							<a class="btnredform savepass boton" id="btnsend2">Guardar cambios</a>
						</form>
						
					</div>
				</div>
		</div>
	
		<div class="mid">
					<div class="full">
		<div class="full cardbg">
			<h2> <div class="line orange"></div>Notificaciones</h2>
				<form id="formnotif" class="formperfil" onsubmit="return false"  enctype="multipart/form-data" method="post">


					<div class="form-wide">
						<div style="width:50px; float:left;">
						<input type="hidden" id="notif" name="notif">
							<input type="checkbox" id="switchsus" name="switchsus" value="<?php echo $suscrito; ?>" <?php echo $checkedsus; ?>/>
							<label class="labelcb" for="switchsus">Toggle</label>
						</div>

						<div style="width:80%; float:left;">
							<p class="pformtoggle" style="padding-right: 10px;font-size: 12px !important; width: 110%;">Dejar de recibir promociones, descuentos especiales Vips y beneficios de mi Tarjeta de Lealtad.</p>
						</div>

					</div>

					<div id="respuesta4"></div>

					<a class="btnredform savepass boton" id="btnsend4" style="right:auto;">Guardar cambios</a>
					

			</form>
		 </div>
				  
	</div>
		</div>

  </div>
  <!-- #tab3 -->

</div>
</div>
</div>
	</div>
	<script src="/js/jquery.plugin.js"></script>
	<script src="/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="/js/tooltipster.bundle.min.js"></script>
<script>
		function colorDivs(){
			
			setTimeout(function(){
				
				var colors = ["ed7124", "ea0029", "ffda00"];

					$('.dircont').each(function(i) {
					   $(this).css('background-color', '#'+colors[i % colors.length]);
					});
				
			},500)
			
			
		}

    $(".tab__content").hide();
    $(".tab__content:first").show();

    $(".tab__head li").click(function() {
	colorDivs();	
	
      $(".tab__content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
      $(".tab__head li").removeClass("active");
      $(this).addClass("active");

	  
    });

	

</script>
	


<div id="small-dialog-form" class="zoom-anim-dialog mfp-hide">

	<div class="formulario form" id="topreg2"></div>


</div>
<a id="openform" class="popup-with-move-anim" href="#small-dialog-form" style="display:none;"></a>

<script>
	function loadform(id){

		$("#topreg2").load("/form-direccion2?id="+id);


	}

	function delDir(id){
		var form = '#formbtndel'+ id;

		var r = confirm('La dirección se eliminará, ¿deseas continuar?');
		if (r == true) {
			$.ajax({
				url : $(form).attr('action'),
				type: 'POST',
				data : new FormData($(form)[0]),
				processData: false,
				contentType: false,
				success:function(data){
					$("#loadaddress").load("/consultadireccionesperfil.php");
					colorDivs();

				}
				});
				} else {

				}
	}

	function updatefav(id){
		var form = '#formfav'+ id;

		var r = true;
		if (r == true) {
			$.ajax({
				url : $(form).attr('action'),
				type: 'POST',
				data : new FormData($(form)[0]),
				processData: false,
				contentType: false,
				success:function(data){
					$("#loadaddress").load("/consultadireccionesperfil.php");
					colorDivs();

				}
				});
				} else {

				}
	}

	$("body").on('click', '.openform', function(){

		$("#openform").trigger("click");
	});

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
		$('#btnregdom').click(function(event){
			$(this).css("pointer-events", "none");
			$(this).css("opacity", ".5");


		  $("#respuestad").html("");
		  $("#respuestad").hide();
			$("#respuestad").show();

			$('.inputregr').removeClass('errorinput');

			$(".bgswitch").removeClass("bgreds");

			var calle= $("#calle").val();
			var ext = $('#ext').val();
			var inte  = $("#inte").val();
			var cp = $('#cp').val();
			var tel = $('#tel').val();
			var error = false;



		if (calle == '' || ext == ''  || cp == '' )

		{

				$("html, body").animate({ scrollTop: $("#topreg").offset().top });

				$("#respuestad").append("<div class='errormsg'>Completa los campos</div>");
				$.each($('.inputregr'),function() {
				   if ($(this).val().length == 0) {
					$(this).addClass("errorinput");
				   }
				});
				setTimeout(function() {
				$("#btnregdom").css("pointer-events", "inherit");
				$("#btnregdom").css("opacity", "1");
				}, 1000);
				error = true;

		}


		if (error == false){
				   event.preventDefault();
				   $("#respuestad").html("<div class='success'>Guardando..</div>");

			$.ajax({

				url : "/addressperfil.php",
				type: "POST",
				data : new FormData($('#formreg')[0]),
				processData: false,
				contentType: false,

				success:function(data){
					
					$("#calle").val("");
					$("#colonia").val("");
					$('#ext').val("");
					$("#inte").val("");
					$('#cp').val("");

					$('#respuestad').html(data);
					setTimeout(function() {
					$("#loadaddress").load("/consultadireccionesperfil.php");
					colorDivs();
				}, 2000);
				
				setTimeout(function() {
				$("#btnregdom").css("pointer-events", "inherit");
				$("#btnregdom").css("opacity", "1");
				}, 2000);

					 setTimeout(function() {
					$('.success').slideUp("slow");
					$('.errormsg').slideUp("slow");
				}, 10000);

				}

			});

			}


		});


		$('body').on("click", "#btnreg2", function(event){

		  $("#respuestad2").html("");
		  $("#respuestad2").hide();
			$("#respuestad2").show();

			$('.inputregr2').removeClass('errorinput');

			var calle2= $("#calle2").val();
			var ext2 = $('#ext2').val();
			var inte2  = $("#inte2").val();
			var cp2 = $('#cp2').val();
			var tel2 = $('#tel2').val();
			var error2 = false;



			if (calle2 == '' || ext2 == ''  || cp2 == '' || tel2 == '' )

			{

				$("html, body").animate({ scrollTop: $("#topreg2").offset().top });

			$("#respuestad2").append("<div class='errormsg'>Completa los campos</div>");

			$.each($('.inputregr2'),function() {

			   if ($(this).val().length == 0) {

				$(this).addClass("errorinput");

			   }

			});

			error2 = true;


		}



		if (error2 == false){

				   event.preventDefault();
				   $("#respuestad").html("<div class='success'>Guardando..</div>");

			$.ajax({
				url : "/updateaddressperfil2.php",
				type: "POST",
				data : new FormData($('#formreg2')[0]),
				processData: false,
				contentType: false,
				success:function(data){



				$('#respuestad2').html(data);

				$("#loadaddress").load("/consultadireccionesperfil.php");
				colorDivs();
					 setTimeout(function() {
					$('.success').slideUp("slow");
					$('.errormsg').slideUp("slow");

				}, 1000);

				setTimeout(function() {
					$('.mfp-close').trigger("click");

				}, 1500);

				}

			});

			}


		});


	$(document).ready(function(){
		
		
$('.tooltip').tooltipster({

    theme: 'tooltipster-shadow',

	animation:"swing",

	timer: 9000

});

$('.tooltipl').tooltipster({

    theme: 'tooltipster-shadow',

	animation:"swing",

	timer: 9000,

	side: "left"

});

$('.tooltipimg').tooltipster({

    theme: 'tooltipster-shadow',

	animation:"grow",

	side: "bottom"

});


	$("#loadaddress").load("/consultadireccionesperfil.php");
	colorDivs();

		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		})

	})

	$("body").on("mouseenter", ".avatarimg", function(){

		$(".overlayimg").addClass("opacity1");

	});

	$("body").on("mouseleave", ".avatarimg", function(){

		$(".overlayimg").removeClass("opacity1");
	});



	function cambiaImg() {

				$('body', window.parent.document).find("#uploadedimage").addClass("subirimgs");
				var selectorimg = $('body', window.parent.document).find("#uploadedimage");
				var uploadedimage	= selectorimg.val();
				console.log(uploadedimage);

			if (uploadedimage == "")

		{

			$("#respuestaimg").html("<span style='color:#FA004B'>Por favor completa todos los campos</span>");

		}

		else{

			$.ajax({

				url : '/updateimg.php',
				type: "POST",
				data : new FormData($("#bannerform")[0]),
				processData: false,
				contentType: false,
				success:function(data){
					$('#respuestaimg').html(data);
					Limpiarimg();
					Cargarimg();

				}

			});



			}

	}



	$("#uploadedimage").change(function (objEvent) {
	$(".labelfile1").css("background", "none");
	cambiaImg();

	});



	function Cargarimg()

	{
		$('#imgv').load('/consultaimg.php');
		$("#imgv").load( '/consultaimg.php', function() {
			   $(".labelfile1").height($(".labelfile1").width());
			   var avatar =  $(".labelfile1").css("background-image");
			   avatar = avatar.replace('url(','').replace(')','').replace(/\"/gi, "");
				$(".accountitem .icon").html('<img class="iconmenu svg" src="'+avatar+'" style="border-radius: 50%;">');
			});



	}

	function Limpiarimg()
	{
		$("#uploadedimage").val("");

	}



	$(window).resize(function(){
			$(".labelfile1").height($(".labelfile1").width());

	}).resize();


		$('#btnsend1').click(function(event){
			$(this).css("pointer-events", "none");
			$(this).css("opacity", ".5");

			var emailval  = $("#correo").val();
			var mailvalid = validateEmail(emailval);
			var name= $("#name").val();
			var apellido = $('#appellido').val();
			var correo = $("#correo").val();
			var tel1 = $("#tel1").val();
			//var sexo = $("input:radio[name='sexo']").val();

			if (name == "" || apellido == "" ||  tel1 == "")
		{
			$("#respuesta").html("<div class='errormsg'>Verifica que los datos ingresados sean correctos</div>");
			setTimeout(function() {
				$("#btnsend1").css("pointer-events", "inherit");
				$("#btnsend1").css("opacity", "1");
				}, 1000);
		}

		else{
			event.preventDefault();
		
			//alert($('#switchsus').val());
			$.ajax({
				url : "/updateaccountperfil.php",
				type: "POST",
				data : new FormData($('#formperfil')[0]),
				processData: false,
				contentType: false,
				success:function(data){

					$('#respuesta').html(data);

					 setTimeout(function() {
					$('.success').slideUp("slow");
					$('.errormsg').slideUp("slow");
				}, 5000);

				setTimeout(function() {
				$("#btnsend1").css("pointer-events", "inherit");
				$("#btnsend1").css("opacity", "1");
				}, 2000);



				}
			});

			}
		});


		$('#btnsend2').click(function(event){
			$(this).css("pointer-events", "none");
			$(this).css("opacity", ".5");

			var pass1= $("#pass1").val();
			var pass2 = $('#pass2').val();
			if (pass1 == '' || pass2 =='')
		{
			$("#respuesta2").html("<div class='errormsg'>Completa los campos</div>");
			setTimeout(function() {
				$("#btnsend2").css("pointer-events", "inherit");
				$("#btnsend2").css("opacity", "1");
				}, 1000);
		}

		else if ( pass2.length <6)
		{
			$("#respuesta2").html("<div class='errormsg'>Ingresa al menos 6 caracteres</div>");
			setTimeout(function() {
				$("#btnsend2").css("pointer-events", "inherit");
				$("#btnsend2").css("opacity", "1");
				}, 1000);
		}

		else{
			event.preventDefault();
			$.ajax({
				url : "https://vips.com.mx/updatepass.php",
				type: "POST",
				data : new FormData($("#formpass")[0]),
				processData: false,
				contentType: false,
				success:function(data){

					$('#respuesta2').html(data);
					Limpiar();
					 setTimeout(function() {
					$('.success').slideUp("slow");
					$('.errormsg').slideUp("slow");
				}, 5000);
				
				setTimeout(function() {
				$("#btnsend2").css("pointer-events", "inherit");
				$("#btnsend2").css("opacity", "1");
				}, 2000);



				}
			});

			}
		});
		
		    $('#btnsend4').click(function(event){

        event.preventDefault();
		var suscrito;
			ledata2 = new FormData($('#formnotif')[0]);
			if($( "#switchsus" ).is( ":checked" )){suscrito = 0;} 
			else{suscrito = 1;}
			ledata2.append('switch', suscrito);
			//alert(suscrito);
        $.ajax({
            url : "/updatenotif.php",
            type: "POST",
            data : ledata2,
            processData: false,
            contentType: false,
            success:function(data){

				$('#respuesta4').html(data);

				 setTimeout(function() {
                $('.success').slideUp("slow");
				$('.errormsg').slideUp("slow");
            }, 5000);



            }
        });


    });

	$('#btnsendmail').click(function(event){
		$(this).css("pointer-events", "none");
		$(this).css("opacity", ".5");
        event.preventDefault();
		
		var emailval  = $("#correo").val();
		var mailvalid = validateEmail(emailval);
		var correo = $("#correo").val();
			//alert(suscrito);
			
				if (mailvalid == false || correo =="")
	{
		$("#respuesta5").html("<div class='errormsg'>El correo es inválido</div>");
			setTimeout(function() {
               $("#btnsendmail").css("pointer-events", "inherit");
				$("#btnsendmail").css("opacity", "1");
            }, 2000);
	}
	
	else{
		
		$.ajax({
            url : "/updatecorreo.php",
            type: "POST",
            data : new FormData($('#formcorreo')[0]),
            processData: false,
            contentType: false,
            success:function(data){

				$('#respuesta5').html(data);

				 setTimeout(function() {
                $('.success').slideUp("slow");
				$('.errormsg').slideUp("slow");
            }, 5000);

			setTimeout(function() {
               $("#btnsendmail").css("pointer-events", "inherit");
				$("#btnsendmail").css("opacity", "1");
            }, 2000);



            }
        });
	}



    });

		function Limpiar()
	{
		$("#pass1").val("");
		$("#pass2").val("");

	}

	function validateEmail(email22) {
			var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return reg.test(email22);
		}

		(function($) {
		'use strict';
		$.countdown.regionalOptions.es = {
			labels: ['AÃ±os','Meses','Semanas','Días','Horas','Minutos','Segundos'],
			labels1: ['AÃ±o','Mes','Semana','Día','Hora','Minuto','Segundo'],
			compactLabels: ['a','m','s','d'],
			whichLabels: null,
			digits: ['0','1','2','3','4','5','6','7','8','9'],
			timeSeparator: ':',
			isRTL: false
		};
		$.countdown.setDefaults($.countdown.regionalOptions.es);
	})(jQuery);

	  $(function () {
					var date = new Date();
					date = new Date(date.getFullYear(), date.getMonth() + 1, 1);
					//$('#defaultCountdown').countdown({until: date,  layout: '{sn} {sl}, {mn} {ml}, {hn} {hl}, and {dn} {dl}'});
					$('#defaultCountdown').countdown({until: date,  layout: '{dn} {dl}'});
				});


		$(document).ready(function(){
		let hash = document.location.hash;

		if(hash.length > 4){
			$(hash).click();

		}

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
				url : "/updatetel.php",
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
		
		
		function checkCard(){
			
			var memberid = $("#barcodeimg").attr("data-mid"); 
			//var memberid = 45435435345345344343; 
			var ml =  memberid.length;
			if(ml < 10){
				
				
				$.ajax({type:"GET", url:"/wow.php", success: function(text){
					$("#barcodeimg").load('/card.php');
				  },error: function(XMLHttpRequest, textStatus, errorThrown){
					// There's been an error, do something here
				  }
				});
			
			
			
			}
			
			else{
				//console.log("Ya tienes TDL, el número es: "+memberid);
				
			}
			
			
		}
		

		
		$(document).ready(function() {
					
					//checkCard();
					colorDivs();
					$("#pedidos").load("/loadpedidos.php");
				
					
					

					});
		
		 function showPedido(id){
			var idpedido= id;
			if($(".mas"+id).text() == "Ver más"){
				$(".mas"+id).text("Ver menos");
			}
			else{
				$(".mas"+id).text("Ver más");
			}
			$("showmore").slideUp();
			$(".show"+id).slideToggle();
			
		}

		 
		 		
		
		
		window.setInterval(function(){
			  checkCard();
			  console.log("Ya tienes TDL, el número es: "+memberid);
			}, 30000);
		



	</script>


			<!-- Footer =============================-->

			<?php include('footerm.php');?>

