<?php

error_reporting(E_ERROR | E_PARSE);

include('headerm.php');

include 'Mobile_Detect.php';

error_reporting(0);

$detect = new Mobile_Detect();

if ($detect->isMobile()) {



}

else{

	header('Location: /');

    exit(0);

}



?>




<style>
.curl {
	width: 7vw;
	height: 7vw;
	position: absolute;
	top: 0;
	left: 0;
	background: linear-gradient( 135deg, #fff, #f3f3f3 45%, #ddd 50%, #aaa 50%, #bbb 56%, #ccc 62%, #f3f3f3 80%, #fff 100% );
	box-shadow: 0 0 10px rgba(0, 0, 0, .5);
	transition: all .5s ease;
}
.curl:before,
.curl:after {
	content: '';
	position: absolute;
	z-index: -1;
	left: 12.5%;
	bottom: 5.8%;
	width: 70%;
	max-width: 300px;
	max-height: 100px;
	height: 55%;
	box-shadow: 0 12px 15px rgba(0, 0, 0, .3);
	transform: skew(-10deg) rotate(-6deg);
}
.curl:after {
	left: auto;
	right: 5.8%;
	bottom: auto;
	top: 14.16%;
	transform: skew(-15deg) rotate(-84deg);
}

.curl:hover {
	width: 14vw;
	height: 14vw;
}
.mousecurl {
	width: 14vw;
	height: 14vw;
}
.curl:hover:before,
.curl:hover:after {
	box-shadow: 0 14px 20px rgba(0, 0, 0, .3);
}

.mousecurl:before,.mousecurl:after ,  {
	box-shadow: 0 14px 20px rgba(0, 0, 0, .3);
}

.box {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

.box span {
  position: absolute;
  display: block;
  background: #ff0025;
  transition: all 0.125s linear;
}

.box .top,
.box .bottom {
  width: 100%;
  height: 2.5px;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
}

.box .left,
.box .right {
  width: 2.55px;
  height: 100%;
  -webkit-transform: scaleY(0);
          transform: scaleY(0);
}

.box .top {
  top: 0;
  left: 0;
  transition-delay: 0.375s;
  -webkit-transform-origin: top left;
          transform-origin: top left;
		  margin-top: 0%;
}

.box .right {
  top: 0;
  right: 0;
  transition-delay: 0.25s;
  -webkit-transform-origin: top left;
          transform-origin: top left;
}

.box .bottom {
  bottom: 0;
  right: 0;
  transition-delay: 0.125s;
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.box .left {
  top: 0;
  left: 0;
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
}

.box:hover .top {
  transition-delay: 0s;
}
.box:hover .right {
  transition-delay: 0.125s;
}
.box:hover .bottom {
  transition-delay: 0.25s;
}
.box:hover .left {
  transition-delay: 0.375s;
}
.box:hover .top,
.box:hover .bottom {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}
.box:hover .left,
.box:hover .right {
  -webkit-transform: scaleY(1);
          transform: scaleY(1);
}


.carouselbanners {
	width: 100%;
	float: left;
}

.carouselbanners img{
	width: 100%;
}

.carouselbanners .slick-dots {
	position: absolute;
	bottom: 15px;
	display:block!important
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}
.slick-dots li.slick-active button::before {
	/* opacity: .75; */
	/* color: #000; */
	color: #fff !important;
	opacity: 1 !important;
	drop-shadow: 1px 3px #fff;
}
.slick-dotted.slick-slider {
	margin-bottom: 0px;
}

.carouselbanners {
	width: 100%;
	float: left;
	    margin-top: 5vh;
}

.carouselbanners img{
	width: 100%;
}

.carouselbanners .slick-dots {
	position: absolute;
	bottom: 15px;
	display: block!important;
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}
.slick-dots li.slick-active button::before {
	/* opacity: .75; */
	/* color: #000; */
	color: #fff !important;
	opacity: 1 !important;
	drop-shadow: 1px 3px #fff;
}
.slick-dotted.slick-slider {
	margin-bottom: 0px!important;
}

.slick-dots li button:before {
    font-family: 'slick';
    font-size: 16px!important;
    line-height: 20px;
    position: absolute;
    /* border: 1px solid #fff; */
    border-radius: 50%;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '•';
    text-align: center;
    opacity: .25;
    color: #fff!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>





<div class="main">







	<?php include('lateral.php');?>







	<main role="main">


		<style>


		.free-simple-slider .slider-box {



			height: 100%;



			list-style: none;



			margin: 0;



			padding: 0;



			position: relative;



			margin-bottom: 25px;



		}







		.sectionhome {
			height: 13vh;
			width: 45%;
			float: left;
			overflow: hidden;
			text-align: center;
			padding: 2.5%;
			font-family: "Museo 700", sans-serif;
			/* box-shadow: 2px 2px 2px #333; */
			-webkit-box-shadow: -3px 5px 6px -4px rgba(0,0,0,0.62);
			-moz-box-shadow: -3px 5px 6px -4px rgba(0,0,0,0.62);
			margin: 1% 2.5%;
			border: 1px solid #e9e9e9;
		}






		.sectionicon {
			width: 35%;
			max-height: 70%;
		}


		.sectionhome h2 {
			font-size: 70%;
			margin: 0;
			padding: 0;
		}



		.codigobarra {

	position: relative;

	margin-left: 0;

	margin-top: -5%;

	max-width: 90%;

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





[data-div="#homehome"]*{  fill: #ff0025!important; transition: all .4s ease;}

[data-div="#homehome"] path{  fill: #ff0025!important; transition: all .4s ease;}

[data-div="#homehome"] *{color: #ff0025!important;}

.flipicon {

	width: 7%;

	height: 40px;

	background-image: url(img/svg/flip.svg);

	position: absolute;

	float: left;

	margin-top: -11%;

	margin-left: 80%;

	background-repeat: no-repeat;

	background-size: 100%;

	animation: pulseblue 1.6s linear infinite;

	cursor: pointer;

}

.flipicon2 {

	width: 7%;

	height: 40px;

	background-image: url(img/svg/flip.svg);

	position: absolute;

	float: left;

	margin-top: 6%;

	margin-left: 75%;

	background-repeat: no-repeat;

	background-size: 100%;

	animation: pulseblue 1.6s linear infinite;

	cursor: pointer;
	transition:background-image .2s ease;

}


@keyframes pulseblue {

			0% {

				transform: scale(1, 1);
					transition:background-image .2s ease;


			}



			50% {

				transform: scale(1.3, 1.3);
				background-image: url(img/svg/flipblue.svg);
				transition:background-image .2s ease;

			}



			100% {

				transform: scale(1, 1);

			}

		}

		.material-icons {
	display: none;
}
#correofb {
	background-image: url(img/svg/smartphone.svg);
	background-size: 10%;
	background-repeat: no-repeat;
	background-position: right;
}

.avisocard {
	color: #f29100;
	width: 100%;
	float: left;
	font-size: .85em;
	font-family: "AmsiProNarw",sans-serif;
	margin-bottom: 0;
}

#small-dialogmail input::placeholder{color:#bbb;}
	</style>







	<?php

	if( isset($_SESSION['uservips'])!="" ){
		$resreg=$mysqli->query("SELECT * FROM registros WHERE id_registro = $uid OR facebook_id = $uid");
		$rowreg=mysqli_fetch_array($resreg);
		$nombre = $rowreg['nombre'];
		$apellido = $rowreg['apellido'];
		$nombrecompleto = $nombre . " " . $apellido;
		$correo = $rowreg['correo'];
		$correo = strtolower($correo);
		$telefono = $rowreg['telefono'];

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

		$(".modalmail").trigger("click");

		});

		</script>


		';
}



		$sexo = $rowreg['sexo'];
		$cumple = $rowreg['nacimiento'];
		$textowow = "Mi Tarjeta de Lealtad";
		$wsdl = 'https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';

		try{

			$clinet=new SoapClient($wsdl, array('trace' => 1));
			$ver =array("programName"=>"WOW Rewards", "contactEmailAddress"=>$correo, "responseType"=>"long");
			$quates=$clinet->GetMember($ver);
			$miembros = json_decode(json_encode( $quates), True);

			foreach ($miembros as $miembro)

			{

				$listado = $miembro['programsList'];
				foreach ($listado as $programa) {
					$programap=  $programa['program'];
					foreach ( $programa as $puntos) {

						$earnedp = $puntos['earnedPointsList'];


					}


				}



			}



      foreach($miembro['programsList'] AS $result) {

         foreach($result['program'] AS $topic) {

         }

        $array = array_values($result['earnedPointsList']);

        $array2 = array_values($array[1]);

        $puntostotales = print_r($array2[0]);

      }

			$parser = simplexml_load_string($quates);


		}







		catch(SoapFault $e)



		{



			echo $e->getMessage();



		}





	$margin = "margin-top:44vh;";

		if(strlen($miembro['memberNumber']) > 5){
		$urlp = "http://192.168.30.203:8110/WSTarjetaLealtad/Servicio?wsdl=";
	}

	else{
		
		$numvisita =  0;
		$numdescuento = 0;
		$urlp = "";

	}

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

		function findVal($element_name, $xml, $content_only = true) {
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



	$content =findVal("detalle",$response);
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
	  echo "cURL Error #:" . $err;
	}



$numvisita =  xml_attribute($xml, 'FINUMEROVISITA');
$numdescuento = xml_attribute($xml, 'FNPORCENTAJEDESC');


		?>









		<style>



		.tarjeta {

	text-align: center;

	padding: 0;

	position: relative;

	margin-top: 2.5vh;

	height: 85vh;

}





		.front {

	padding: 0;

	height: 90vh !important;

	overflow: hidden;

}



.back {

	padding: 0;

	height: 90vh !important;

	overflow: hidden;

	background: #0e0607;

}





.cardback2 {

	height: 35vh;

	background: url(img/card_back.png);

	background-repeat: no-repeat;

	background-size: 85%;

	background-position: center;

	padding: 15vh 2.5vh 0 2.5vh;

}



.titlecard{padding: .5em; margin: 0; font-size: .7em;}

.whitetxt{color:#fff!important;}



.porcentajem {
	margin-bottom: 0;
	float: left;
	width: 100%;
	backface-visibility: hidden;
	z-index: 2;
	position: relative;
	height: auto;
	background-color: #55b6b2;
	padding: 2.5vh 0;
}

.porcentajem img, .puntosw img{

	width: 100%;

}



.puntosw {

	margin-bottom: 0;

	float: left;

	width: 50%;

	backface-visibility: hidden;

	height: 50vh;

	background-color: #253142;

	padding: 5vh 0;

}

.puntosw 	h3 {

	text-align: center;

	font-family: "Museo 700", sans-serif;

	color: #fff;

	font-size: 1em;

}

.puntosw img {

	width: 40%;

}



.puntosw h1 {

	color: #fff;

	font-size: 2em;

}



.porcentajem h3 {
	text-align: center;
	font-family: "Museo 700",sans-serif;
	color: #fff;
	font-size: 1em;
	margin: 0;
	margin-bottom: .5em;
}


.porcentajem p {
	color: #fff;
	font-size: .7em;
	line-height: 1.3;
	margin: .5em;
	width: 100%;
	float: left;
}






.visitas-bar, .puntos-bar {

	width: 80%;

	border-radius: 20px;

	background: #fff;

	margin: 0 auto;

	color: #fff;

	border: 1px solid #ddd;

	height: 30px;

	box-shadow: 2px 1px 4px #ccc;

}



.visitas-progress {

	background: #ed7124;

	overflow-x: visible;

	border-radius: 20px;

	height: 30px;
	text-shadow: 1px 1px 3px #555;

}

.textbar1 {
	padding: 0 5%;
	position: relative;
	color: #fff;
	font-size: 1.5em !important;
	font-weight: bold;
	line-height: -1;
	margin: 0 !important;
	margin-top: 0;
	left: 0;
	text-align: center;
}

.textbar1 span {
	font-size: 10px;
	margin-top: 0;
	position: relative;
	line-height: -2.5px;
	top: -4px;
	margin-left: 0;
}


.porcentajem {
	margin-bottom: 0;
	float: left;
	width: 100%;
	backface-visibility: hidden;
	z-index: 2;
	position: relative;
	height: auto;
	background-color: #55b6b2;
	padding: 1.5vh 0;
}

.descuento {
	font-size: 50%;
	backface-visibility: hidden;
	/* position: absolute; */
	/* left: 36%; */
	/* margin-top: -5px; */
	float: left;
	width: 100%;
}


.descimg {
	width: 5em;
	background-image: url(img/m/percent_30.png);
	background-size: 100%;
	margin: 0 auto;
	height: 4em;
	color: #fff;
	padding: 1em 2.5% 2.5% 2%;
	background-position: center;
	font-size: 1.3em;
	font-weight: bold;
	background-repeat: no-repeat;
	width: 100%;
	float: left;
	background-size: contain;
	margin-top: 0;
	position: relative;
}
.visitas-bar, .puntos-bar {
	width: 80%;
	border-radius: 20px;
	background: #fff;
	margin: 0 auto;
	color: #fff;
	border: 1px solid #ddd;
	height: 30px;
	box-shadow: 2px 1px 4px #ccc;
	display: inline-block;
}


#defaultCountdown {
	color: #fff;
	width: 100%;
	float: left;
	backface-visibility: hidden;
	line-height: 1;
	font-weight: bold;
}
.puntosw {
	margin-bottom: 0;
	float: left;
	width: 100%;
	backface-visibility: hidden;
	height: 50vh;
	background-color: #253142;
	padding: 0 0 15vh 0;
}

.midper {
	float: left;
	width: 50%;
	text-align: center;
	padding: 0 5% 0 0;
}

.puntosw h3 {
	text-align: center;
	font-family: "Museo 700", sans-serif;
	color: #fff;
	font-size: 1em;
	margin-bottom: 0;
}
.puntosw img {
	width: 10%;
	float: left;
	vertical-align: middle;
	margin-left: 37%;
	margin-top: 2%;
}
.puntosw h1 {
	color: #fff;
	font-size: 1.5em;
	float: left;
	width: 20%;
	vertical-align: middle;
	margin: 0;
	margin-top: 2%;
}


#small-dialogmail {
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

#small-dialogmail h3 {
	color: #f29100;
	padding: 2% 2% 5% 2%;
	border-bottom: 2px solid #ccc;
	width: 100%;
	margin: 0 auto;
}
#small-dialogmail  #formlogin {
	float: left;
	width: 100%;
	padding: 2.5% 0;
}

#small-dialogmail .boton {
	border: none;
	padding: 20px;
	outline: none;
	border-color: #a9a6a1;
	width: 80%;
	font-size: 1em;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	display: inline-block;
	text-transform: uppercase;
	font-family: "Moreno",sans-serif;
	margin: 1em;
}

#small-dialogmail  .logininputs .input {
	width: 70%;
	float: none;
}
#formmailfb .inputs {
	float: left;
	width: 100%;
	margin-bottom: 5%;
	padding: 2.5%;
}

#respuesta3 {
	width: 100%;
	text-align: center;
	display: inline-block;
}
#respuesta3 .errormsg {
	width: 90%;
	background: #ffcdd2;
	padding: 1em;
	color: #b71c1c;
	border-radius: 5px;
	float: none;
}


#tel1 {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%;
}
.nocard {
    backface-visibility: hidden;
    text-align: center;
    width: 100%;
    margin-top: 0;
    position: relative;
    height: 30%;
}

				
				

		</style>



		<div class="midcont tarjeta" >


		<div class="flip" style="perspective: 828px; position: relative;">


		<div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s;">



		<img src="img/TarjetaWOW.png" alt="" class="cardwowimg imagen2" style="backface-visibility: hidden; width: 88%;">


		<div class="flipicon"> </div>
		<div class="curl" style="display:none;"></div>
		<h3 class="titlecard">Toca la tarjeta y revela el código de barras</h3>











	<div>



		<div class="sectionhome sectionfavoritos box">
		<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



			<img src="img/svg/cardhome.svg" class="sectionicon" style="width:35%;">



			<h2><?php echo $textowow;?></h2>



		</div>





		<a class="boxhref" href="domicilio-m">

		<div class="sectionhome sectionexperiencias box">
		<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>

		<img src="img/svg/domiciliohome.svg" class="sectionicon" style="width:35%;">





				<h2>A domicilio</h2>







			</div></a>





			<a class="boxhref" href="promociones-m">

			<div class="sectionhome sectiontienda box">
			<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



				<img src="img/svg/promoshome.svg" class="sectionicon">



					<h2>Promociones</h2>



				</div></a>





				<a class="boxhref" href="/ubicaciones/m">

				<div class="sectionhome sectionubicaciones box">
				<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



					<img src="img/svg/ubicacioneshome.svg" class="sectionicon">



					<h2>Ubicaciones</h2>







				</div></a>







				<a class="boxhref" href="/atencion-m"><div class="sectionhome sectionatencion box">
				<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



					<img src="img/svg/atencionhome.svg" class="sectionicon">



					<h2>Atención al invitado</h2>







				</div></a>







				<a class="boxhref" href="https://alsea.interfactura.com/RegistroDocumento.aspx?opc=Vips" target="_blank">

				<div class="sectionhome sectionfactura box">
						<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



					<img src="img/svg/facturashome.svg" class="sectionicon">



					<h2>¿Necesitas una factura?</h2>







				</div></a>







			</div>





		</div>



		<div class="back backcards">



			<div class="cardback2">

			<?php

				if(strlen($miembro['memberNumber']) > 5){
					$barcode ='
					<img class="codigobarra" src="barcode.php?text='.$miembro['memberNumber'].'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2" alt="">
					';
					$cardnumber = $miembro['memberNumber'];
					$querytdl = "UPDATE registros SET tdl = $cardnumber WHERE id_registro = $uid OR facebook_id= $uid";
					$resulttdl = $mysqli->query($querytdl) or die("Falló la consulta $queryn1");
				}

				else{
					$barcode ='<p class="nocard">Tu tarjeta se generará pronto..</p>';

				}

				?>

				<?php echo $barcode;?>





				<div class="flipicon2"> </div>


			</div>



			<div class="porcentajem">

				<div class="midper">
				<h3>Recibirás  </h3>

					<div class="descimg"><?php print "".str_replace(".00","",$numdescuento); ?>%<br><span class="descuento"> descuento</span></div>


				</div>

				<div class="midper">
				<h3>Visitas registradas  </h3>



				<div class="visitas-bar">

				<div class="visitas-progress" style="width:100%;">

					<p class="textbar1"><?php 	print "".$numvisita;?><span googl="true"> Visita(s)</span></p>



				</div>




			</div>
			<div style="float:left; width:100%;">
			<p class="porcentajem3" style="width: 90%; float: left;"> Tiempo restante para llegar a las 5 visitas</p>
					<div id="defaultCountdown"></div>
			</div>

				</div>
				<p style="padding: 1.5% 2.5%;">Al registrar tu tarjeta, ¡ya tienes un descuento del 10%! En tu segunda visita, será de 20% y así hasta obtener 50% de descuento en tu quinta visita durante un mes.</p>








			</div>



			<div class="puntosw">

				<h3>Puntos acumulados</h3>

				<img src="/img/puntosbg.png">

				<h1><?php  print_r($array2[0]); ?> pts</h1>

			</div>

		</div>



		</div>

		</div>













<?php	}







	else{



		$textowow = "Tarjeta de Lealtad";







		echo '
		
		
				
			<div class="carouselbanners" style="<?php echo $hidelogged;?>">
	
				<div>
					<img data-lazy="img/banners/mainstream-mobile.png" onclick="window.open(&quot;redescubreelsabor&quot; , &quot;_self&quot; );">
					
				</div>
				
			
				
				<div>
					<img data-lazy="img/banners/bannermobileClasicos.png" onclick="window.open(&quot;clasicos&quot; , &quot;_self&quot; );">
					
				</div>
				

				<div>
					<img data-lazy="img/banners/BannerCuaresmaMobile.png" onclick="window.open(&quot;cuaresma&quot; , &quot;_self&quot; );">
					
				</div>
				
				<div>
					<img data-lazy="img/banners/BannerCarruselMobileEnchiladas.jpg" onclick="window.open(&quot;reydelaenchilada&quot; , &quot;_self&quot; );">
					
				</div>
				
				<div>
					<img data-lazy="img/banners/BannerCarruselMobileNochesDeAntojoII.png" onclick="window.open(&quot;noches-de-antojo&quot; , &quot;_self&quot; );">
					
				</div>

				<div>
					<img data-lazy="img/banners/BannerMobileDesayunos.png" onclick="window.open(&quot;desayunos-79&quot; , &quot;_self&quot; );">
					
				</div>
				
				
				
				
				<div>
					<img data-lazy="img/banners/BannerCarruselMobileComidaDelDia.png" onclick="window.open(&quot;comida-del-dia &quot; , &quot;_self&quot; );">
					
				</div>
				

				

				<div>
					<img data-lazy="img/banners/BannerHOMEDeliveryMobile.png" onclick="window.open(&quot;domicilio&quot; , &quot;_self&quot; );">
					
				</div>

				<div>
					<img data-lazy="img/banners/CarruselBannerTDL-min.jpg" onclick="window.open(&quot;cuenta&quot; , &quot;_self&quot; );">
					
				</div>
				
				

				

				

			</div>
		


	<a href="cuenta-m"><div style="<?php echo $margin;?>">



		<div class="sectionhome sectionfavoritos box">
		<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



			<img src="img/svg/cardhome.svg" class="sectionicon" style="width:35%;">



			<h2>'.$textowow.'</h2>



		</div></a>





		<a class="boxhref" href="domicilio-m">

		<div class="sectionhome sectionexperiencias box">
		<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>

		<img src="img/svg/domiciliohome.svg" class="sectionicon" style="width:35%;">





				<h2>A domicilio</h2>







			</div></a>





			<a class="boxhref" href="promociones-m">

			<div class="sectionhome sectiontienda box">
			<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



				<img src="img/svg/promoshome.svg" class="sectionicon">



					<h2>Promociones</h2>



				</div></a>





				<a class="boxhref" href="/ubicaciones/m">

				<div class="sectionhome sectionubicaciones box">
				<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



					<img src="img/svg/ubicacioneshome.svg" class="sectionicon">



					<h2>Ubicaciones</h2>







				</div></a>







				<a class="boxhref" href="/atencion-m"><div class="sectionhome sectionatencion box">
				<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



					<img src="img/svg/atencionhome.svg" class="sectionicon">



					<h2>Atención al invitado</h2>







				</div></a>







				<a class="boxhref" href="https://alsea.interfactura.com/RegistroDocumento.aspx?opc=Vips" target="_blank">

				<div class="sectionhome sectionfactura box">
				<span class="top"></span>
    <span class="right"></span>
    <span class="bottom"></span>
    <span class="left"></span>



					<img src="img/svg/facturashome.svg" class="sectionicon">



					<h2>¿Necesitas una factura?</h2>







				</div></a>







			</div>





		';











	}







	?>


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
	


<div id="fade" onClick="lightbox_close();"></div>

<style>
#fade {
  
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 2;
	overflow: hidden;
	position: fixed;
	background: #0b0b0b;
	opacity: 0.8;
	display:none;
}
#light {

	position: absolute;
	top: 30%;
	left: 0;
	max-width: 100%;
	max-height: 100vh;
	margin-left: 0;
	margin-top: 0;
	z-index: 1002;
	overflow: visible;
	width: 100%;
	display:none;
}
#boxclose {
	float: right;
	cursor: pointer;
	color: #fff;
	border: 1px solid #aeaeae;
	border-radius: 50%;
	background: #222;
	font-size: 31px;
	font-weight: normal;
	display: inline-block;
	line-height: 0px;
	padding: 11px 3px;
	position: absolute;
	right: 0px;
	top: -30px;
	z-index: 1002;
	opacity: .9;
	width: 30px;
	height: 30px;
	text-align: center;
	font-size: 25px;
	line-height: 8px;
	display:none;
}
#VisaChipCardVideo {
	width: 100%;
	display:none;
	/* width: 100px; */
}
.boxclose:before {
  content: "×";
}

#fade:hover ~ #boxclose {
  display:none;
}

.test:hover ~ .test2 {
  display: none;
}

</style>


<?php print_r($array2[0]);?>

			<script>
			
					
		// A $( document ).ready() block.
		$( document ).ready(function() {
					//lightbox_open();
					
					document.addEventListener('DOMContentLoaded', init, false)
var videoId = document.getElementById('VisaChipCardVideo')
//var videoTitle = videoId.getAttribute('data-description')
var videoTitle = 'Video NFL'

function init () {
	videoId.addEventListener('ended', videoEnd, false)
	videoId.addEventListener('timeupdate', videoTimeUpdate, false)
	videoId.addEventListener('play', videoPlay, false)
	videoId.addEventListener('pause', videoPause, false)
}

function setKeyFrames (duration) {
	var quarter = (duration / 4).toFixed(1)
	sessionStorage.setItem('one', quarter)
	sessionStorage.setItem('two', (quarter * 2).toFixed(1))
	sessionStorage.setItem('three', (quarter * 3).toFixed(1))
}

function videoTimeUpdate () {
		var curTime = videoId.currentTime.toFixed(1)
		switch (curTime) {
			case sessionStorage.getItem('one'):
				gtag('send', 'event', 'video', '25% video played', videoTitle)
				sessionStorage.setItem('one', null)
			case sessionStorage.getItem('two'):
				gtag('send', 'event', 'video', '50% video played', videoTitle)
				sessionStorage.setItem('two', null)
			case sessionStorage.getItem('three'):
				gtag('send', 'event', 'video', '75% video played', videoTitle)
				sessionStorage.setItem('three', null)
		}
}

function videoEnd () {
	gtag('send', 'event', 'video', '100% video played', videoTitle)
}

function videoPlay () {
	gtag('send', 'event', 'video', 'video played', videoTitle)
	setKeyFrames(this.duration)
}

function videoPause () {
	gtag('send', 'event', 'video', 'video paused', videoTitle)
}

		});





			//  Set the Cookie

			function setCookie(cname, cvalue, exdays) {

				var d = new Date();

				d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));

				var expires = "expires=" + d.toUTCString();

				document.cookie = cname + "=" + cvalue + "; " + expires;

			}



			// Get the Cookie

			function getCookie(cname) {

				var name = cname + "=";

				var ca   = document.cookie.split(';');

				for (var i = 0; i < ca.length; i++) {

					var  c = ca[i];

					while (c.charAt(0) == ' ') {

						c = c.substring(1);

					}

					if ( c.indexOf(name) == 0) {

						return c.substring(name.length, c.length);

					}

				}

				return "";

			}



			// Check if Cookie exists

			function checkCookie() {



				// Get the cookie called "visited"

				var visited = getCookie("visited");



				// If it exists, print the Cookie to the Console

				if (visited == "true") {

					console.log(document.cookie);

				}

				else {

					// If not, add the class 'is-visible' to my modal called '.mhc-intro-modal'

					// and create a the cookie "visited=true" expiring in 15 days.

					$('.tuto').addClass('is-visible');

					setCookie("visited", "true", 15);

				}

			}



			// When document is ready check for the cookie

			$(document).ready(function() {

				checkCookie();

				hoverCurl();



			});

			function hoverCurl(){

				setTimeout(function(){
					$('.curl').addClass('mousecurl');




				}, 1500);

				setTimeout(function(){
					$('.curl').removeClass('mousecurl');



				}, 2000);

				setTimeout(function(){

					$('.curl').addClass('mousecurl');


				}, 2500);


				setTimeout(function(){

					$('.curl').removeClass('mousecurl');


				}, 3000);


			}















				$('.tarjeta').click(function(){



					$('.titlecard').toggleClass("hidden");



				});







			</script>
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
 <script src="js/jquery.plugin.js"></script>
 <script src="js/jquery.countdown.js"></script>
 <script src='slick/slick.min.js'></script>
        <script>

		/* http://keith-wood.name/countdown.html
 * Spanish initialisation for the jQuery countdown extension
 * Written by Sergio Carracedo Martinez webmaster@neodisenoweb.com (2008) */
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



        </script>

		<script>
$('.boxhref').click(function(e) {
  e.preventDefault();
  setTimeout(function(url) { window.location = url }, 500, this.href);
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
	
	$( document ).on( "ready" , function() {


	$('.carouselbanners').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,
		

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 3000,

	});



});


window.document.onkeydown = function(e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'inline-block';
  document.getElementById('fade').style.display = 'inline-block';
   $("#VisaChipCardVideo").trigger("play");
}

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  $("#VisaChipCardVideo").trigger("pause");
 var time = document.getElementById("VisaChipCardVideo").currentTime;
 time = ~~time;
 gtag('send', 'event', 'Videos', 'Video cerrado ' + time + 's', 'Video NFL');
 gtag('event', 'Video cerrado ' + time + 's', {
 'event_category': 'Videos Desktop',
 'event_label': 'Video NFL'
});
	console.log(time);
}

$("#VisaChipCardVideo").bind("ended", function() {
 gtag('event', 'Video terminado', {
 'event_category': 'Videos Mobile',
 'event_label': 'Video NFL'
});
});




</script>

<?php //echo $modaltel; ?>

			<!-- Footer =============================-->



			<?php include('footerm.php');?>
