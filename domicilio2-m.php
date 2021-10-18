<?php
ob_start();$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}


include('headerm.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
}
else{
	header("Location: /domicilio2");
	exit(0);

}
require_once 'dbconnect.php';
$cp = $_GET['cp'];
$cp = strip_tags($cp);
$cp = htmlspecialchars($cp);
		
if(strlen($cp)<5){
	header('Location: domicilio-m');
	exit(0);
	
}

$locationsegment = $cp . " Mexico";
$address = $cp . "+Mexico"; // replace all the white space with "+" sign to match with google search pattern
$address = preg_replace('/\s+/', '+', $address);
$url = "https://maps.google.com/maps/api/geocode/json?sensor=false&key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE&address=$address";

$responseg = file_get_contents($url);

$json = json_decode($responseg,TRUE); //generate array object from the response from the web

$lat = $json['results'][0]['geometry']['location']['lat'];
$lng = $json['results'][0]['geometry']['location']['lng'];


$lati = $lat;
$long = $lng;

if( isset($_SESSION['uservips'])!="" ){
$linkrappi = 'data-login="1"';
}

else{
	$linkrappi = 'data-login="0" href="/login-rappi"';
}


$showpop = "";
$btnuber="";
$botonsd="";
$botonrappi="";
$displaytext="";

	$sql4 = "SELECT * FROM stores WHERE zip = '$cp' LIMIT 1";
			$result2 = $mysqli->query($sql4);
			$numfilas2 = $result2->num_rows;
			$row2=mysqli_fetch_assoc($result2);

			$filas2 =$numfilas2;

			 if( $filas2 > 0 ){


			 $uber2 = $row2["uber"];
			$rappic2 = $row2["rappi"];
			$sdelantalc2 = $row2["sdelantal"];
			
			if(strlen($uber2) > 10){
				
				$btnuber='
				 <a id="uber-btn" data-store= "'.$row2["name"].'"  class="btn-domicilio" href="https://'.$uber2.'" target="_blank" onclick="deliverySelectedDom(&quot;Uber Eats&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

					<div class="back-end box uberbg">
						<span></span>
					</div>
				</a>
				
				';
			}
			
			else{
				$btnuber='';
				
			}
			
			if($rappic2=='1'){
				
				$botonrappi = '

				<a id="rappi-btn" class="btn-domicilio" '.$linkrappi.' onclick="deliverySelectedDom(&quot;Rappi&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

								<div class="front-end box rappibg">
									<span></span>
								</div>
				</a>
				';
			}
			
			else{
				$botonrappi='';
				
			}
			
			if($sdelantalc2 =='1'){
				
				$botonsd = '

				 <a id="sin-delantal-btn" class="btn-domicilio" href="https://vips.sindelantal.mx/?Origem=SiteParceiro&produto=intermediario" target="_blank" onclick="deliverySelectedDom(&quot;Sin delantal&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

							<div class="back-end box sdbg">
								<span></span>
							</div>
						</a>


				 ';
			}
			
			else{
				$botonsd='';
				
			}


			}
			
			
if(strlen($lat)>5 && strlen($lng)>5){			
$sqluber = "SELECT id, name, addressresume, address, zip, city, state, country, url, delivery, new,  ninos, phone, latitude, longitude, horario, alcohol, remodelado, estacionamiento, salon, terraza, uber, rappi, sdelantal,
			((ACOS(SIN($lat * PI() / 180) * SIN(latitude * PI() / 180) + COS($lat * PI() / 180) * COS(latitude * PI() / 180) * COS(($lng - longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
		FROM stores WHERE  name != 'Vips Copilco'
		HAVING distance <= 2.5
		ORDER BY distance ASC";
		
$resultuber = $mysqli->query($sqluber)  or die("Error en".$sqluber);
$numfilasuber = $resultuber->num_rows;
	
	
while($rowuber= mysqli_fetch_array($resultuber)){

			$uber = $rowuber["uber"];
			$rappic = $rowuber["rappi"];
			$sdelantalc = $rowuber["sdelantal"];
			
			if($btnuber=='' && strlen($uber) > 10){
				
				$btnuber='
				 <a id="uber-btn" data-store= "'.$rowuber["name"].'" class="btn-domicilio" href="https://'.$uber.'" target="_blank" onclick="deliverySelectedDom(&quot;Uber Eats&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

					<div class="back-end box uberbg">
						<span></span>
					</div>
				</a>
				
				';
			}
			
		
			
			if($botonrappi=='' && $rappic=='1'){
				
				$botonrappi = '

				<a id="rappi-btn" class="btn-domicilio" '.$linkrappi.' onclick="deliverySelectedDom(&quot;Rappi&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

								<div class="front-end box rappibg">
									<span></span>
								</div>
				</a>
				';
			}
			
			
			
			if($botonsd=='' &&  $sdelantalc =='1'){
				
				$botonsd = '

				 <a id="sin-delantal-btn" class="btn-domicilio" href="https://vips.sindelantal.mx/?Origem=SiteParceiro&produto=intermediario" target="_blank" onclick="deliverySelectedDom(&quot;Sin delantal&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

							<div class="back-end box sdbg">
								<span></span>
							</div>
						</a>


				 ';
			}
			
			
			
			

}
}


			


		if($btnuber == '' && $botonrappi =='' && $botonsd == ''){
		$displaytext ="display:none;";
			   

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
<div class="main">
<?php include('lateral.php');?>
<main role="main">
	
	<style>

html, body {
	max-width: 100%;
	height: 100%;
}[data-div="#cuentahome"]*{  fill: #ff0025!important; transition: all .4s ease;}[data-div="#cuentahome"] path{  fill: #ff0025!important; transition: all .4s ease;}[data-div="#cuentahome"] *{color: #ff0025!important;}

@media screen and (max-width: 400px) {.tab_div {	display: none;}

}

.tab_div {width: 100%;transform: translateZ(0);

}

.tabs_menu {padding-top: 1%;width: 20%;float: left;

}

ul.tabs {padding: 0;
}#tab1,
#tab2,
#tab3,
#tab4 {width: 90%;
}

ul.tabs li {margin-left: 25%;list-style-type: none;border-left: 4px solid #ea0029;font-size: 18px;color: black;

}#tab1_content,

#tab2_content,

#tab3_content,

#tab4_content {/*   background-color:red; */float: left;width: 100%;height: auto;padding: 5%;display: block !important;

}.p{font-size: 16px;

}
/* hover effect */ul.tabs li {display: inline-block;position: relative;padding: 1em;cursor: pointer;color: black;z-index: 0;transition: all .35s ease;

}ul.tabs li:before {content: "";position: absolute;z-index: -1;top: 0;left: 0;right: 0;bottom: 0;background: #ff0025;transform: scaleX(0);transform-origin: 0 50%;transition: transform .5s ease-out;

}ul.tabs li:hover:before {transform: scaleX(1);

}ul.tabs li:hover {color:#fff!important;transition: all .35s ease;

}

.imagen{width: 9%;margin: 0;padding: 0;float: left;vertical-align: middle;

}

.texto{width: 90%;padding: 0 1em;float: left;

}

.clase{position: relative;width: 50%;float: left;margin-bottom: 5%;

}

.input {
	height: 45px;
	width: 100%;
	background: 0 0;
	border: none;
	border-style: solid;
	outline: none;
	border-color: #a9a6a1;
	border-top: none;
	border-left: none;
	border-right: none;
	padding: 10px 0;
	border-width: 1px!important;
}
input[type="submit"]{	border: none;	padding: 20px;	outline: none;	border-color: #a9a6a1;	width: 55%;	font-size: 1em;	background: #f29100;	color: white;	cursor: pointer;	transition: 0.3s ease all;	text-transform:uppercase;	font-weight:bold;font-family: "Program", sans-serif;}

input[type="submit"]:hover{	border: none;	padding: 20px;	outline: none;	border-color: #a9a6a1;	width: 55%;	font-size: 1em;	background: #ffac30;	color: white;	cursor: pointer;	transition: 0.3s ease all;}

.formulario {
	padding: 5%;
	background: transparent;
	margin-right: 0;
	float: left;
	padding-bottom: 0;
}

.input::placeholder {color: #a9a6a1;

}

input[type="checkbox"] {width: 25px;height: 25px;margin-left: 10px;position: relative;border: 50px;

}

.margen{margin-right: 2%;

}

.fotos{max-width: 100%;float: left;margin-bottom: 5%;margin-left: 3%;

}

.form{max-width: 100%;

}
.boton {
	border: none;
	padding: 20px;
	outline: none;
	border-color: #a9a6a1;
	width: 85%;
	font-size: 1em;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	font-family: "Program",sans-serif;
}.icono {width: 10%;margin: 0;padding: 0;float: right;position: absolute;margin-left: -5%;margin-top: 1.50%;opacity: .5;display:none;

}
.inputs {
	float: left;
	width: 100%;
	margin-bottom: 5%;
	padding: 0;
}

.switchcont{
	width: 100%;
	float: left;
	padding: 0!important;
}
.caja{margin-left: 5%;}

.top{margin-top: 2%;

}input[type=checkbox] {height: 0;width: 0;visibility: hidden;

}

.labelcb {
	cursor: pointer;
	text-indent: -9999px;
	width: 30px;
	height: 12px;
	background: grey;
	display: block;
	border-radius: 100px;
	position: relative;
	top: -9px!important;
}.labelcb::after {
    content: '';
    position: absolute;
    top: -.5px;
    left: 0;
    width: 13px;
    height: 13px;
    background: #fff;
    border-radius: 20px;
    transition: .3s;
    box-shadow: 1px 2px 5px #444;
}
input:checked + .labelcb {background: #f29100;

}
input:checked + .labelcb:after {left: calc(100% - 0px);transform: translateX(-100%);

}
.labelcb:active:after {
		width: 20px;
	}
.pformtoggle {
	color: #333;
	font-size: 9px;
	font-family: "Program",sans-serif;
	text-align: left;
}.avisocard {color: #f29100;width: 100%;float: left;font-size: .85em;font-family: "Program",sans-serif;

            margin-left: 5%;

}
.maintitle{font-size: 2em; color: #fbb03b; font-weight: bold; margin-top: -2%; border-bottom: 1px solid #dcdcdc; font-family: "Program", sans-serif;

}
.loginpanel {
	position: relative;
	float: left;
	width: 100%;
	border-top: 0;
	margin-bottom: 10%;
	padding: 0 2.5%;
	text-align: center;
}
.logininputs{width:100%; padding: 0 5%;}

.logininputs .input{width: 100%;float:none;}.logininputs .icono {width: 10%;margin: 0;padding: 0;float: right;position: absolute;margin-left: -30px;margin-top: 10px;opacity: .5;	display:none;}

label {font-family: "Program", sans-serif;font-size: .9em;text-align: left;

}.loginpanel form {width: 100%;text-align: center;padding-left: 0;

}.loginpanel  .p {text-align: center;font-weight: normal;font-family: "Program", sans-serif;

}

.linkpassword {color: #fbb03b;font-size: .9em;padding-left: 0;font-family: "Program", sans;width: 100%;float: left;

}
#fb {
	background-color: #3b5998;
	background-image: url(/img/login/fb.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: center !important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px !important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	right: 0;
	left: 0;
	translate: 50% 50%;
	color: #fff;
	padding: 0 !important;
	font-size: .8em;
	padding-right: 10%;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px !important;
	padding-left: 5% !important;
	width: 50px !important;
	text-align: center !important;
	border-radius: 50% !important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	max-width: 50px !important;
}
#google {
	background-color: #fff;
	background-image: url(/img/google.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: center !important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px !important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	/* right: 0; */
	/* left: 0; */
	translate: 50% 50%;
	color: #fff;
	padding: 1em 5%;
	font-size: .8em;
	padding-right: 0;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px !important;
	padding-left: 5% !important;
	width: 50px !important;
	text-align: center !important;
	border-radius: 50% !important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	max-width: 50px !important;
	margin-left: 25px;
	/* border: 1px solid red; */
	position: relative;
	align-contentalign-contentalign-content: ;
}	#fb:hover {background-color: #4562a0;transition: 0.3s ease all;

}

#tw {	display: none;background-color:#03abee;background-image: url(img/tw.png);background-size: 1.5em;background-repeat: no-repeat;background-position: 1em center;width: 50%;padding: 1em 1.5em 1em 3em;margin: 1em auto 0 auto;float: left;margin-left: 20%;	transition: 0.3s ease all;

}#tw:hover {background-color:#20bcfa;background-image: url(img/tw.png);background-size: 1.5em;background-repeat: no-repeat;background-position: 1em center;width: 50%;padding: 1em 1.5em 1em 3em;margin: 1em auto 0 auto;float: left;margin-left: 20%;	transition: 0.3s ease all;

}

.or {text-align: center;width: 100%;margin-bottom: 0;font-size: 1em;font-family: "Program", sans-serif;

}
#tab2_content {/* background-color: red; */float: left;width: 100%;height: auto;padding: 0 2.5%;display: block !important;/* background-size: 100%; */background-repeat: no-repeat;background-size: cover;background-position: 70% 10%;

}
.phidden {width: 100%;/* height: 0; */font-weight: normal;font-family: "Program", sans-serif;font-size: .7em;color: #666;padding: 2.5%;float: left;display:none;

}

#nombred, #apellidod {background-image: url(img/svg/perfilusuario.svg);background-size: 10%;

}

#tdl{background-image: url(img/svg/cardf.svg); background-size: 10%}
.imgbg1 {background-image: url(img/PattersRegistro.svg);background-repeat: no-repeat;background-size: 25%;position: fixed;background-position: top left;width: 100%;height: 100vh;top: 35%;

}

.imgbg2 {background-image: url(img/PattersRegistro.svg);background-repeat: no-repeat;background-size: 25%;position: absolute;background-position: bottom right;width: 100%;height: 100%;top: 0%;

}
.aligncenter{text-align: center;}
.loginpanel .p {margin-top: 0;

}
.orfbd {
	margin: 0;
	padding: 0;
	margin-top: 20px;
	font-family: sans-serif;
	font-weight: 100;
	color: #2d2d2d;
	font-size: .80em;
}.inputmail {background-image: url(img/svg/correo.svg);background-repeat: no-repeat;background-position: right;background-size: 10%;

}
.requiredtext {float: left;width: 100%;margin: 0;margin-top: 10px;color: #666;font-size: .8em;

}
#respuestad, #respuesta2d {
	width: 90% !important;
	float: left;
	padding-top: .5em;
	text-align: center;
	margin: 0 5%;
}

#formregd #respuestad, #formregd #respuesta2d {
	width: 100% !important;
	float: left;
	padding-top: .5em;
	text-align: center;
	margin: 0;
}
.success {width: 100%;background: #DCEDC8;padding: 1em;color: #558B2F;border-radius: 5px;

}
.errormsg {width: 100%;background: #FFCDD2;padding: 1em;color: #B71C1C;border-radius: 5px;margin: 1em auto;

}
#btnlogind{display: inline-block;}
.errorinput {border: 1px solid #c14549;background-image: url(img/error.png)!important;background-size: 7%!important;background-repeat: no-repeat;background-position: 97% center!important;

}
#btnregd {
	display: inline-block;
	width: 100%;
	text-transform: uppercase;
	text-align: center;
	float: none;
	font-family: "Program";
	display: inline-block;
	cursor:pointer;
}
#respuestad .errormsg {
	width: 100%;
	margin-bottom: 0;
	margin-top: -5px;
	padding: .5em;
	font-size: .85em;
}

.bgreds{background:#c14549;}
.nopointer{pointer-events:none;}
#small-dialogpass {background: white;padding: 5%;text-align: center;max-width: 500px;margin: 80px auto;position: relative;background-image: url(img/fondo.png);background-size: 30%;background-repeat: no-repeat;background-position: bottom right;

}
#small-dialogpass {background: white;padding: 2%;text-align: center;max-width: 500px;margin: 80px auto;position: relative;background-image: url(img/fondo.png);background-size: 25%;background-repeat: no-repeat;background-position: bottom right;display: table;

}
#small-dialogpass  h3 {color: #f29100;padding: 2% 2% 5% 2%;border-bottom: 2px solid #ccc;width: 70%;margin: 0 auto;

}
#small-dialogpass  #formlogind {float: left;width: 100%;padding: 2.5% 0;

}
#small-dialogpass  .boton {border: none;padding: 20px;outline: none;border-color: #a9a6a1;width: 60%;font-size: 1em;background: #f29100;color: white;cursor: pointer;display: inline-block;text-transform: uppercase;font-family: "Program", sans-serif;

}
#small-dialogpass  .logininputs .input {width: 80%;float: none;

}
.mfp-wrap {

z-index: 9999;

}
#respuesta3 .success, #respuesta3 .errormsg {width: 80%;margin: .5em auto auto;

}
#correodfb {background-image: url(img/svg/correo.svg);

}
.inputs5 {float: left;width: 100%;margin-bottom: 5%;padding: 0 10%;text-align: left;margin-top: 1.5em;

}

.iconon {width: 10%;margin: 0;padding: 0;float: right;position: relative;margin-left: -5%;margin-top: -40px;opacity: .5;

}
#btnrecover {background: #ff1528;color: #fff;padding: 1em;display: inline-block;font-family: "Program", sans-serif;width: 50%;cursor:pointer;

}
#formlogind label {
	width: 50%;
	float: left;
	margin-left: 25%;
}
#tel1d {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%!important;
}.redtit {
	font-family: "Program",sans-serif;
	color: #ea0029;
	margin-top: 0;
	font-size: .85em;
}

.linklogin {
	width: 100%;
	float: left;
	font-size: .85em;
	color: #5d5d5d;
	margin-top: .5em;
	margin-bottom: 1em;
}
.linklogin a {
    color: #ea0029;
    cursor: pointer;}

.titpr {
	margin-top: 0;
	color: #534747;
	text-align: center;
	font-size: 1.15em;
	font-family: "Program";
	padding: 2.5% 5%;
	padding-bottom:0;
	font-weight:500;
	margin-bottom: 0;
}

   .parallaxTilt_hover {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
top: 0;
}

.containerparallax {
	position: absolute;
	width: 80%;
	display: inline-block;
	height: auto;
	padding: 0 5%;
	float: left;
	margin: 2.5% 10%;
	min-height: 40vh;
}
#parallaxlogin{left: 0%;}
#parallaxreg{left: 60%;}
.tilter_image, .tilter_image2, .tilter_image3, .tilter_image4, .ltilter_image, .ltilter_image2, .ltilter_image3, .ltilter_image4{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: auto;
	transition: .5s ease-out;
	transform: translate3d(0,0,0);
	
}

@keyframes float {
	0% {
		drop-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
	50% {
		drop-shadow: 0 25px 15px 0px rgba(0,0,0,0.2);
		transform: translatey(-20px);
	}
	100% {
		drop-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
}

.tilter_image, .ltilter_image {
	margin-top: -10%!important;
	animation: float 3s ease-in-out infinite;

}
.tilter_image2, .ltilter_image2 {
	margin-top: 0%;
width: 20%;
animation: float 6s ease-in-out infinite;

}
.tilter_image3, .ltilter_image3 {
    width: 40%;
    margin-top: 20% !important;
    left: -10%;
	animation: float 8s ease-in-out infinite;
}.tilter_image4, .ltilter_image4 {
width: 40%;
right: 0px;
left: 60%;
animation: float 10s ease-in-out infinite;

}.inputs input {
	background-size: 12% !important;
	background-repeat: no-repeat !important;
	background-position: right center;
}

#tab2_content .errorinput{background-size: 6% !important;}

.loginpanel{background-image:url(/img/login/pattern5.png);
background-size: 20%;
background-repeat: no-repeat;
background-position: 95% 120px;
}

#formregd{text-align:center;}

#nombred, #apellidod {
background-size: 8.5% !important;
}

#parallaxreg{display:none; transition:1s all ease; left:0;}
#regpanel2 {
	z-index: -1;
	opacity: 0;
	transition: 1s all ease;
	position: absolute !important;
	left: 0%;
}.loginactive #parallaxreg{display:inline-block; transition:1s all ease; left:0; transition:1s all ease; left:0;}
.loginactive #parallaxlogin{display:none; transition:1s all ease; left:0; transition:1s all ease; left:0;}

.loginactive #regpanel {
	z-index: 2;
	opacity: 1;
	/* transition: 1s all ease; */
	position: relative !important;
	/* left: 60% !important; */
	transition: 1s all ease;
	left: 0;
	float: none !important;
	display: inline-block;
	height: auto;
	/* z-index: 2; */
}
.loginactive .loginpanel {z-index: -1;
    opacity: 0;
    transition: 1s all ease;
    left: 0% !important;
    transition: 1s all ease;
    left: 0;
    position: absolute;

}

.dots-form li {
	width: .7em;
	height: .7em;
	border-radius: 50%;
	background: #ccc;
	display: inline-block;
	margin: 0 .5em;
}

.dots-form .active {
	background: #f29100;
}

.dots-form {
	display: inline-block;
	padding: 1.5em;
}#nombred, #apellidod {
	background-image: url(/img/login/user.svg);
	background-size: 6.5%;
}
#correod, #correold, #correopass {
	background-image: url(img/svg/correo.svg);
}
#correopass {
	background-repeat: no-repeat;
	background-position: 99%;
	background-size: 12%;
}
#passd, #passld {
	background-image: url(img/svg/password.svg);
}

#formregd  .input {
	width: 100%;
	float: none;
}#formregd .switchcont {
	width: 100%;
	display: inline-block;
	padding: .25em 0;
	float: none;
}

main {margin-top: 7vh;
}

#formregd .labeltit {
	font-family: "Program",sans-serif;
	font-size: .9em;
	text-align: left;
	width: 100%;
	float: left;
	padding-top: 5%;
	font-size: .85em;
}

.radiobtn {
	width: 20px;
	float: left;
}

#small-dialogpass {background: white;padding: 5%;text-align: center;max-width: 500px;margin: 80px auto;position: relative;background-image: url(img/fondo.png);background-size: 30%;background-repeat: no-repeat;background-position: bottom right;

}
#small-dialogpass {background: white;padding: 2%;text-align: center;max-width: 500px;margin: 80px auto;position: relative;background-image: url(img/fondo.png);background-size: 25%;background-repeat: no-repeat;background-position: bottom right;display: table;

}
#small-dialogpass  h3 {color: #f29100;padding: 2% 2% 5% 2%;border-bottom: 2px solid #ccc;width: 70%;margin: 0 auto;

}
#small-dialogpass  #formlogin {float: left;width: 100%;padding: 2.5% 0;

}
#small-dialogpass  .boton {border: none;padding: 20px;outline: none;border-color: #a9a6a1;width: 60%;font-size: 1em;background: #f29100;color: white;cursor: pointer;display: inline-block;text-transform: uppercase;font-family: "Museo 900", sans-serif;

}
#small-dialogpass  .logininputs .input {width: 80%;float: none;

}

#respuesta3 .success, #respuesta3 .errormsg {width: 80%;margin: .5em auto auto;

}

.textagregadores {
	float: left;
	width: 100%;
	margin-bottom: 2.5%;
}
.agregador {
	display: inline-block;
	text-align: center;
	width: 31%;
	padding: 2.5% 5%;
	margin: 0;
}
.agregador img{width:100%;}

.loginpanel h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 20px;
}

.loginpanel h3 {
	font-size: 16px;
	font-weight: normal;
	margin: 0;
}
.contdireccion p {
	margin: 10px 0;
}

#cpdom {
	width: 100%;
	border: 0;
	border-bottom: 1px solid #ccc;
	background: none;
	max-width: 200px;
	display: inline-block;
	background: url(/img/svg/placeholder.svg);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: right;
	height: 40px;
}

#sendbtncp {
	display: inline-block;
	width: 100%;
	background-color: #f5a623;
	color: #fff;
	max-width: 250px;
	padding: 10px;
	font-weight: 500;
	border-radius: 30px;
	margin-top: 30px;
	opacity:.7;
	cursor:not-allowed;
}

#tab2_content *::placeholder{color:#555;}


#cambiadomicilio {
	color: #fff;
	background: #f29100;
	padding: 7px;
	border-radius: 30px;
	width: 100px;
	display: inline-block;
	text-align: center;
	line-height: 1;
	margin-top: 0;
	font-weight: 500;
	cursor: pointer;
	margin-bottom: 20px;
}
.textcontd h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 14px;
	margin-top: 10px;
	border: 0;
}
.iconpin {
	width: 20px;
	display: inline-block;
	vertical-align: middle;
}

.contdireccion h3 {
	color: #f19000;
	font-weight: 500 !important;
}

.loginpanel h3 {
	font-size: 16px;
	font-weight: normal;
}

.popupaddress {
	position: fixed;
	width: 100%;
	height: 100%;
	z-index: 333;
	background: rgba(0,0,0,.6);
	top: 0;
	text-align: center;
	display:none;
}

.contpopaddress {
	background: #fff;
	margin: 7.5% 5%;
	width: 90%;
	max-width: 500px;
	display: inline-block;
	padding: 20px;
	text-align: center;
	height: auto;
	min-height: 300px;
}
.closepopaddress {
	float: right;
	width: 22px;
	height: 22px;
	background: url(/img/login/close.png);
	background-size: 100%;
	cursor:pointer;
}

.dircont {
	text-align: center;
	display: inline-block;
}

.direccion {
	float: none;
	margin: 0;
	width: 100% !important;
	border-radius: 30px;
	display: inline-block;
	padding: 5px;
	box-shadow: 1px 1px 5px #f0f0f0;
	border: 1px solid #f0f0f0;
	transition: .35s all ease;
	position: relative;
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: 20px;
	cursor: pointer;
	min-height: 50px;
}
.direccion:hover{
	border:1px solid #f19000;
	transition:.35s all ease;
	box-shadow: 1px 1px 3px #f19000;
}
.direccion h5 {
	padding: 0 5%!important;
	margin: 0;
}
.direccion p {
	margin: 5px 0;
	padding: 0 60px;
}

.icondir {
	width: 40px;
	background: #f19000;
	height: 40px;
	border-radius: 50%;
	position: absolute;
	margin-left: 15px;
	top: 10%;
}
.icondir img {
	width: 60%;
	margin: 17.5%;
}
.back-end.box.uberbg {
	background-color: #7dc240;
}
.contdireccion {
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	width: 55%;
	float: none;
	display: inline-block;
	padding: 0px;
	min-width: 330px;
	text-align: center;
	border-radius: 30px;
	float: none;
	margin-bottom: 10px;
	paddin-top:12px;
}
#small-dialog, #small-dialog2, #small-dialog3 {
	background: #fff;
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
.btnub {
	background: #f29100;
	color: #fff;
	display: inline-block;
	padding: 1em;
	width: 100%;
	min-width: 200px;
	max-width: 400px;
	font-family: "Program",sans-serif;
	margin: 1em 0;
	border: none;
	border-radius: 30px;
	font-weight: 500;
	cursor: pointer;
}

</style>
<?php echo $showpop;?>
<?php echo $showpop2;?>
<div id="tab2_content" id="panellogin">
	<p class="titpr">¡Con Vips a domicilio vamos de nuestra cocina a tu puerta!</p>
			<div class="loginpanel">
			<div id="loginpanel">
				<div class="aligncenter">
					<div style=" position: relative; float: left;width: 100%;">
						<div class="aligncenter textcontd">
							<h2 style="font-size: 18px; margin: 20px 0;">¿A dónde te lo llevamos?</h2>
							<div class="contdireccion">
										<h3>Tu Código Postal es</h3>
										<p style="color: #666; font-size: 20px;"> <img src="/img/svg/placeholder.svg" class="iconpin"> <?php echo $cp;?></p> <a id="cambiadomicilio">Cambiar</a><br>
										<p style="color: #666; font-size: .8em; display:none;">*Para pedir a domicilio no necesitas descargar una aplicación</p>
							</div>
							<br>
							<div class="contagregadores" style="<?php echo $displaytext;?>">
							<h2 class="maintitle" style="color: #f19000">Tu Código Postal tiene cobertura con los siguientes servicios</h2>
							<p class="venami" style="display:none;">#VipsVenAmí</p>
							<div class="middle" id="botonesagregadores">
								<h3>Elige tu servicio a domicilio favorito</h3>
								<?php echo $btnuber. $botonrappi . $botonsd;?>
							</div>
						

						<div class="dots-form">
							<ul>
								<li ></li>
								<li class="active"></li>
								<li></li>
							</ul>
						</div>
						</div>
						</div>
						</div>
						</div>

					</div>
				</div>

			</div>
		
		</div>

 </div>
</div>

<div class="popupaddress">
	<div class="contpopaddress">
		<div class="closepopaddress" onclick="closePopDirecciones();"></div>
		<h3 style="color: #f19000;">Selecciona la dirección de envío</h3>
		<div class="mensajerappi"></div>
		<div id="loadadir"></div>
		
	</div>
</div>

<style>
#tel1 {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%;
}

#correofb {

	background-image: url(img/svg/smartphone.svg)!important;

}

#small-dialogmail h3 {
	border-bottom: none!important;

}

.back-end.box.telbg {
	display: none;
}

#paneldomicilio{
	text-align:center;
}
#paneldomicilio h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 20px;
}

#paneldomicilio h3 {
	font-weight: 500;
	font-size: 18px;
	padding: 2.5% 15%;
}

#cpdom {
	width: 100%;
	border: 0;
	border-bottom: 1px solid #ccc;
	background: none;
	max-width: 200px;
	display: inline-block;
	background: url(/img/svg/placeholder.svg);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: right;
	height: 40px;
}

#sendbtncp {
	display: inline-block;
	width: 100%;
	background-color: #f5a623;
	color: #fff;
	max-width: 250px;
	padding: 10px;
	font-weight: 500;
	border-radius: 30px;
	margin-top: 30px;
	opacity:.7;
	cursor:not-allowed;
}

.waitrappi {
	width: 100%;
	display: inline-block;
	padding: 90px 10px 10px 10px;
	background: url(/img/vipsloader.gif);
	background-size: 120px;
	background-repeat: no-repeat;
	background-position: top center;
	font-size: 15px;
}

.sorry {
	font-weight: 500;
	margin: 0;
	font-size: 20px;
}

.respuestarappi {
	padding: 5px;
	color: #dd3535;
}

#paneldomicilio {
	position: fixed;
	top: 9vh;
	width: 90%;
	height: 100vh;
	background: rgba(255,255,255,.95);
	z-index: 11;
	right: -400px;
	padding: 10% 2.5%;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	transition: .35s all ease;
	overflow-y: auto;
}
.bpanelactive {
	overflow-y: hidden;
}

#paneldomicilio.panelactive{right:0; transition: .35s all ease;}

.overlaypanel {
	width: 10%;
	height: 100vh;
	background: rgba(0,0,0,.2);
	z-index: 2;
	position: fixed;
	display: none;
	top: 0;
}
.contdireccion h3 {
	margin-top: 12px;
}

#paneldomicilio *::placeholder{
	color:#555!important;
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
		font-family: "Program", sans-serif;
		font-weight: 100;
		border-radius: 50%;
		border: none;
		margin: 1em;
		background-repeat: no-repeat;
		background-size: 90%;
		background-position: center;
	}

	.uberbg{
		background-image: url(img/uberbg.png);
		background-color: #ec614f;
		background-color: #ec614f;
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

	#rappi-btn .box.rappibg:hover {
		background-color:#ec614f !important;
		transform:scale(1.1);
	}
	.back-end.box.rappibg:hover {
		background-color:#ec614f !important;
		transform:scale(1.1);
	}
	.back-end.box.sdbg:hover {
		background-color:#d6312d !important;
	}
	.back-end.box.telbg:hover {
		background-color: #ea0a2a !important;
	}
	
	.back-end.box.uberbg:hover {
		background-color: #7dc240 !important;
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

	.middle input[type="radio"]:checked + .uberbg {
		background-color: #7dc240;
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
<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
	<h3 style="color: #f29100; font-size: 1.5em;">¡Lo sentimos!</h3>
	<p>Por el momento no tenemos cobertura en este C.P. <br></p>
	<a href="/ubicaciones" class="btnub">Buscar mi Vips más cercano</a>
</div>

<div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
	<h3>Hay un problema con tu número celular, por favor ingresa uno diferente.</h3>
	<form  id="formmailfb" class="formlogin" onsubmit="return false"  enctype="multipart/form-data" method="post">
		<div id="respuesta3"></div>
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
	<a href="#small-dialog2" class="popup-with-move-anim2"  id="nogeo"></a>
	<a href="#small-dialog3" class="popup-with-move-anim2"  id="uptel"></a>
	<div id="paneldomicilio">
	<div class="formulario form" id="topreg">
	<h2>¿A dónde te lo llevamos?</h2>
	<h3>Agrega tu Código Postal para que podamos mostrarte nuestras opciones de envío disponibles </h3>
			
	<input type="text" placeholder="Código Postal (5 dígitos)" id="cpdom" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5"  />
	<br>		
	<a id="sendbtncp">Aceptar</a>
	</div>
	</div>
	
	<div class="overlaypanel"></div>

<script>
	$("#cpdom").keyup(function(event) {
		var cp = $('#cpdom').val().length;
		var cpval = $('#cpdom').val();
		if(cp  > 4){
			$("#sendbtncp").attr("href", "https://vips.com.mx/domicilio2-m?cp="+cpval);
			$("#sendbtncp").css("opacity", "1");
			$("#sendbtncp").css("cursor", "pointer");
			$("#sendbtncp").css("pointer-events", "all");
		}
		else{
			$("#sendbtncp").css("opacity", ".7");
			$("#sendbtncp").css("cursor", "not-allowed");
		}
			if (event.keyCode === 13) {
			setTimeout(function(){
				var url = $("#sendbtncp").attr("href");
				$("#sendbtncp").click();
				window.location.href = url;
				$("body *").css("cursor", "wait");
			},1000)
		}
	});

	$("#sendbtncp").click(function(){
		var cp = $('#cpdom').val().length;
		if(cp  > 4){
			$("#sendbtncp").css("opacity", ".5");
			$("#sendbtncp").css("cursor", "not-allowed");
			$("body").css("cursor", "wait");
			setTimeout(function(){
				//$("#sendbtncp").css("pointer-events", "none");
			},1000)
			
		}
		else{	
		}
	})
	function checkRappi(id){
		$("body").css("cursor", "wait");
		$(".overlaydireccion").show();
		$(".mensajerappi").html('<p class="waitrappi">Espera unos segundos mientras comprobamos la cobertura en tu dirección. No cierres ni recargues la página.</p>');
		$.ajax({type:"GET", url:"/consultarappi.php?a="+id, success: function(text){
			$(".mensajerappi").html(text);
			$(".overlaydireccion").hide();
			$("body").css("cursor", "inherit");
			
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			$("body").css("cursor", "inherit");
			$(".overlaydireccion").hide();
			$(".mensajerappi").html('<p class="errorrappi">Ocurrió un error al comprobar la cobertura. Por favor intenta nuevamente más tarde.</p>');
		}
		});
	}

	$("#cambiadomicilio").click(function() {
		$(".overlaypanel").fadeIn(300);
		
		$("#paneldomicilio").toggleClass("panelactive");
		$("body").toggleClass("bpanelactive");

	});

	$(".overlaypanel").click(function() {
		$("#paneldomicilio").removeClass("panelactive");
		$("body").removeClass("bpanelactive");
		$(this).fadeOut(300);

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

	function removeModal(){
		  $("#comenzarpedido").removeClass("popup-with-move-anim");
		   $("#comenzarpedido").removeClass("nopointer");
	}
	function addModal(){
		  $("#comenzarpedido").addClass("popup-with-move-anim");
		  $("#comenzarpedido").removeClass("nopointer");
	}

	$("#rappi-btn").click(function(){
	var login = $(this).attr("data-login");	
		if(login == "1"){
			openPopDirecciones();
		}

	})
	function openPopDirecciones(){
		$("#loadadir").load("https://vips.com.mx/loadadressrappi.php", function(){
			$(".popupaddress").fadeIn();
		})
	}

	function closePopDirecciones(){
		$(".popupaddress").fadeOut();
	}
</script>
<script src="/js/parallaxTilt.min.js"></script>
<script src="/js/wow.min.js"></script>
<script type="text/javascript">	
		$( window ).on( "load", function() {
		  new WOW().init();
		});
		
	
    </script>
	<!-- Footer =============================-->

<?php include('footerm.php');?>
