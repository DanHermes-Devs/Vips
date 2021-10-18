<?php
	require_once 'dbconnect.php';
	include('header.php');

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];
	}

	else{
		header("Location: /cuenta");
	}

	include 'Mobile_Detect.php';
	$detect = new Mobile_Detect();

	if ($detect->isMobile()) {
		header('Location: perfil-m');
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

	if(strlen($telefono) < 10){
	//echo "llllalo";
		$modaltel = '
		<script>
		$(document).ready(function() {



			$(".modalmail").magnificPopup({
				type: "inline",

				fixedContentPos: false,
				fixedBgPos: true,

				overflowY: "auto",

				closeBtnInside: false,
		modal : true,
				preloader: false,

				midClick: true,
				removalDelay: 300,
				mainClass: "my-mfp-slide-bottom"
			});

		//$(".modalmail").trigger("click");

		});

		</script>


		';
	}


	$cumple = $rowreg['nacimiento'];
	$facebook = $rowreg['facebook_id'];
	$foto = $rowreg['foto'];
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
<style>
.form-wide .labelcb {
	top: -10px!important;
}
.labelcb::after {
	content: '';
	position: absolute;
	top: -.5px;
	left: .1px;
	width: 13px;
	height: 13px;
	background: #fff;
	border-radius: 20px;
	transition: .3s;
	box-shadow: 1px 2px 5px #444;
}

body {
	background: #fafafa;
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
	font-size: 14px;
}

#pedidos .cardbg {
	border-radius: 20px;
	background: #fff;
	display: inline-block;
	box-shadow: 0 2px 4px 0 rgba(207,207,207,.5);
	border: solid 1px #ededed;
	padding: 4% 5% 3.5% 5%;
	margin-bottom: 2.5%;
	width: 95%;
}
</style>

<div class="main">


	<link rel="stylesheet" href="/css/styleperfil.css">


<div class="seccion-perfil">




	<div class="midcont stats" style="padding-top: 1em;">
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


	</div>



	<div class="midcont formcont">

		<h3>Completa tu perfil </h3>

		<div class="progresoperfil">
			<div class="barperfil barperfil1"></div>
			<div class="barperfil barperfil2"></div>
			<div class="barperfil barperfil3"></div>
			<div class="barperfil barperfil4"></div>
		</div>


		</div>



	</div>
	
	
	<style>
	
	.seccion-perfil {

	background: #fafafa;
}
.tab .tab__head {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 100vh;
	width: 20%;
	position: absolute;
	top: 0;
	bottom: 0;
	padding: 15% 0;
	background: #fff;
	text-align: center;
	box-shadow: 0 2px 4px 0 rgba(207,207,207,.5);
	max-width: 154px;
	min-width: 154px;
}
.tab .tab__head li {
	float: left;
	margin: 18px 0;
	cursor: pointer;
	padding: 0 18px;
	height: auto;
	line-height: 1.4;
	color: #333;
	border-bottom: 0px;
	overflow: hidden;
	position: relative;
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
	width: 100%;
}
.tab .tab__head li img {
	width: 22px;
}

.tab .tab__head li p {
	margin: 0;
	width: 100%;
	display: inline-block;
}
.tab .tab__head li.active {
	border: none;
	background-color: #fff;
	color: #333;
	border-left: 4px solid #ea0029;
	display: block;
}
.tab .tab__container {
	border: 0;
	float: left;
	width: 100%;
	min-height: 60vh;
	padding-left: 180px;
}
.tab .tab__content {
  padding: 20px;
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
	width: 50%;
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
	width: 95%;
}
.cardbg p {
margin:0;
}

.labelfile1 {
	filter: drop-shadow(3px 2px 4px #ccc);
}

.recomendacion {
	color: #ea2229;
	font-size: 16px;
	text-decoration: none;
	height: 40px;
	border-radius: 40px;
	background-color: #ed1c2c;
	width: auto;
	display: inline-block;
	color: #fff;
	text-align: center;
	line-height: 30px;
	padding: 5px 7.5%;
	margin-top: 10px;
	font-weight: 500;
}
.nameinfo h1 {
	padding: 0;
	padding-bottom: 5px;
}

.cardbg h2 {
	font-size: 20px;
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
	margin-top: 16.5%;
	width: 60%;
	margin-left: 20%;
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
	margin-right: 1.5%;
	padding: 3.5%;
	float: left;
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
	font-size: 14px;
}

.carddom #btnregdom {
	margin: 1em auto;
	float: none;
	font-family: inherit;
	margin-left: 25%;
	text-transform: none;
	font-size: 20px;
	line-height: 1;
	min-width: 180px;
	cursor: pointer;
	text-align: center;
	line-height: 2.5;
}

#loadaddress br{display:none;}
.dircont {
	background: #fff;
	width: 30% !important;
	float: left;
	display: inline-block;
	margin-right: 3.3%;
	border-radius: 20px;
	text-align: center;
	color: #fff;
	padding: 2%;
	margin-bottom: 3.3%;
	position: relative !important;
	height: 170px;
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
	float: left;
	width: 100%;
	/* margin-bottom: 1em; */
}

.formfav {
	position: absolute !important;
	right: 0;
	padding: 0 !important;
	filter: brightness(2.5);
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
	/* width: 100%; */
	/* padding: 10% 35% 5%; */
	height: 42px;
	margin: 10px auto;
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

[data-div="#cuentahome"] * {
	color: #fff!important;
}

.scrolled [data-div="#cuentahome"] * {
	color: #ff0025 !important;
}

[data-div="#cuentahome"] img {
	border: none;
}

#respuesta, #respuesta2, #respuesta4, #respuesta5 {
	width: 100%;
	float: left;
	padding-top: .5em;
	text-align: center;
}

#btnreg, #btnreg2 {
	text-transform: none;
	font-family: "Program", sans-serif;
	padding: .75em;
}

.total {
	font-weight: 500;
	color: #ed7124;
	font-size: 1.2em;
	margin-top: 5px;
	display: inline-block;
	padding-left: 11%;
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
	width: 60%
	max-width: 300px;
}
.aboutevento {
	color: #ed7124;
	font-weight: 500;
	font-size: 18px;
}

.fechaevento {
	color: #909090;
	font-weight: 200;
	font-size: 14px;
}
.nocard {
	width: 100%;
	padding: 15% 5%;
}
	</style>

<div class="tab">
  
<ul class="tab__head">
  <li id="perfil" class="active" rel="tab1"><img src="/img/2019/perfil.svg"><p>Perfil</p></li>
  <li id="direcciones" rel="tab2"><img src="/img/2019/direcciones.svg"><p>Dirección</p></li>
  <li id="Mis-pedidos" rel="tab3"><img src="/img/2019/pedidos.svg" style="width: 25px;"><p>Mis Pedidos y eventos</p></li>
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
	
</div>
		
		<div class="mid">
			<div class="full cardbg cardtdl">
				<h2> <div class="line orange" style="background-color: #ed1c2c;"></div>Tarjeta de Lealtad Digital</h2>
				<p>En tu siguiente visita tendrás 15% de descuento, en la siguiente 20% y así hasta llegar al 50% en tu 5a visita en un mes.</p>
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
			
			<div class="third cardbg" style="width:38%;">
			<h2> <div class="line orange"></div>Visitas registradas</h2>
			<div class="visitas-bar">

				<div class="visitas-progress" style="width:100%;">
					<img src="/img/2019/visitas.png" alt="" class="pinimg"><p class="textbar1"><?php  echo $numvisita;?><span>Visita (s)</span></p>
				</div>

			</div>
			 <p class="porcentajem3" style="width: 100%; float: left; color: #4a4a4a; text-align: center; font-size: 15px;"> Te quedan <span id="defaultCountdown"></span> para tu <span style="color: #ed7124"><br>5ta visita</span></p>
					
			</div>
			<div class="third cardbg" style="width:27%;">
				
			<h2> <div class="line orange" style="margin-bottom: 7.5px; background-color: #ed1c2c;"></div>Recibirás</h2>



			<div class="c100 p30 blue">

				<span><?php  print "". floor($numdescuento);	?> <span style="font-size:20px; margin-left: -4px;">% </span><br><i class="dedesc">descuento</i></span>

				<div class="slice">

					<div class="bar"></div>

					<div class="fill"></div>

				</div>

			</div>
			
			</div>
			<div class="third cardbg" style="width:28%; text-align: center;">
				<h2> <div class="line orange" style="margin-bottom: 7.5px; text-align: left; background-color: #ffdd13;" ></div>Puntos totales</h2>
				<img class="puntosimg" src="/img/2019/puntos.png">

			<p style="color: #404040; font-size: 20px; font-weight: 500;"><?php print_r($array2[0]);?> pts</p>
			</div>
	
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

				<div class="inputs" style="width:45%; margin-right:10%;">
					<input class="input inputregr" type="text" id="ext" name="ext" placeholder="No. ext.*"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"   required>
				</div>

				<div class="inputs" style="width:45%;">
					<input class="input" type="text" id="inte" name="inte" placeholder="No. int." >
				</div>

				<div class="inputs">
					<input class="input inputregr" type="text" id="colonia" name="colonia" placeholder="Colonia*" required>
				</div>

				<div class="inputs" style="width: 45%;">
					<input class="input inputregr cp" type="text" id="cp" name="cp" placeholder="Código postal*" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" required>
				</div>

				<div class="inputs middle" style="width: 100%;">


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
				<h2> <div class="line orange" style="background-color: #ffdd13;" ></div>Mis direcciones</h2>
				
				<div id="loadaddress"></div>
			</div>
			
			<div class="full cardbg cardtdl cardpromos" style="display:none;">
				<p>Promociones Delivery</p>
				
				<div id="loadaddress"></div>
			</div>
			
		
			
			
	
		</div>
	
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
							<p class="pformtoggle">Dejar de recibir promociones, descuentos especiales Vips y beneficios de mi Tarjeta de Lealtad.</p>
						</div>

					</div>

					<div id="respuesta4"></div>

					<a class="btnredform savepass boton" id="btnsend4">Guardar cambios</a>

			</form>
		 </div>
				  
	</div>
		</div>

  </div>
  <!-- #tab3 -->

</div>
</div>
</div>

<script>

function heightMenu(){
	
	var h = $(document).height();
	$(".tab__head").css("height", h+"px");
	
}

heightMenu();



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

<a href="#small-dialogmail" class="modalmail" id="getmail" style="display:none;"></a>
<div id="small-dialogmail" class="zoom-anim-dialog mfp-hide">

	<h3>Para pedidos a domicilio, es necesario actualizar tu número de celular.</h3>
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

						<a class="boton top"  id="btnfbmail">Registrar teléfono</a>

					</div>

				</form>



	</div>
	
	<style>
	#barcodeimg {
	/* visibility: visible; */
	float: left;
}

.mfp-wrap {
	z-index: 999;
}

.labelcb {
	max-width: 35px;
}

.pformtoggle {
	color: #333;
	font-size: .8em;
	font-family: "AmsiProNarw",sans-serif;
	text-align: left;
	font-size: 10px !important;
	margin-top: 5px;
	padding-left: 0!important;
}
	</style>
	
	
	<script src="/js/jquery.plugin.js"></script>
	<script src="/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="/js/tooltipster.bundle.min.js"></script>

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
				$("#btnreg2").css("pointer-events", "inherit");
				$("#btnreg2").css("opacity", "1");
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
			if(ml > 10){
			$("#barcodeimg").load('/card.php');
			
			
			
			}
			
			else{
				
				

				
			}
			
			
		}
		

		
		$(document).ready(function() {
					
					checkCard();
					colorDivs();
					heightMenu();
					$("#pedidos").load("/loadpedidos.php");
				
					
					

		});
		
		 
		 
		 		
		
		
		window.setInterval(function(){
			  checkCard();
			  var memberid = $("#barcodeimg").attr("data-mid"); 
			  console.log("Ya tienes TDL, el número es: "+memberid);
		}, 30000);
		
		
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


	</script>

<script>
			// Fixed Header
		$(window).scroll(function() {
				var value = $(this).scrollTop();
				
				if (value > 50){
				$("body").addClass("scrolled");
				}
				else{
				$("body").removeClass("scrolled");
				}
				
		});
</script>
	<?php echo $modaltel; ?>



	<!-- Footer =============================-->

	<?php include('footer.php');?>
