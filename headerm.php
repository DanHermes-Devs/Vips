<?php

error_reporting(E_ERROR | E_PARSE);

error_reporting(0);
header('X-Frame-Options: ALLOW-FROM https://sorprendeteporelsabor.com/');
$title ="";
$meta="";
$meta_blog="";
$custom_pixels="";

ob_start();
	// long long time
if(isset($_COOKIE['persistID'])){
$cookieSet = 'The cookie is ' . $_COOKIE['persistID'];
} else {
$cookieSet = 'No cookie has been set';
}

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

if(isset($_COOKIE['persistID']))
{
	ini_set( 'session.cookie_httponly', 1 );
	ini_set( 'session.cookie_secure', 1 );
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}


require_once 'dbconnect.php';

if( isset($_SESSION['uservips'])!="" ){

	$uid=$_SESSION['uservips'];


			$sql3 = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$result = $mysqli->query($sql3);
	 $rowregh=mysqli_fetch_assoc($result);
	$uid = $rowregh['id_registro'];
	$_SESSION['uservips'] = $uid;

	$nombre = $rowregh['nombre'];

	$apellido = $rowregh['apellido'];

	$correo = $rowregh['correo'];

	$telefono = $rowregh['telefono'];

	$sexo = $rowregh['sexo'];

	$cumple = $rowregh['nacimiento'];

	$imagen = $rowregh['foto'];

	$uid=$_SESSION['uservips'];
	$utime = $rowregh['fecha_registro'];

	$randomn = rand();

	$foto = $rowregh['foto']."?".$randomn;

	$sesion = true;



	$resregh=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");

	$rowreghf=mysqli_fetch_array($resregh);

	$facebookh = $rowreghf['facebook_id'];





	$avatarimg="avatar.svg";

	$displaylogged ="display:block;";

	$hidelogged ="display:none;";

	$classlogged = "logged";



	if (strlen($facebookh)>3 AND strlen($imagen)<3){

			$marginavatar = "margin-top: 0px";

		$avatarimg ="https://graph.facebook.com/".$_SESSION['uservips']."/picture?type=large";



	}



	if (strlen($facebookh)>3 AND strlen($imagen)>3){

		$avatarimg ="/".$foto;



	}



	if (strlen($facebookh)<3 AND strlen($imagen)>3){

		$avatarimg ="/".$foto;



	}

	if (strlen($facebookh)<3 AND strlen($imagen)<3){

		$avatarimg="/img/svg/avatar.svg";



	}


		$sql1 = "SELECT * FROM domicilio WHERE id_usuario = '$uid' LIMIT 1";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);
$numfilas1 = $result1->num_rows;


if($numfilas1 ==1){
	$linkdomicilio ='/domicilio3-l-m';



}
else{
	$linkdomicilio ='/domicilio';

}

if(strlen($telefono) < 10){

	$linkdomicilio ='/domicilio';

}




}



else{

	$classlogged = "";

	$sesion = false;



	$avatarimg="/img/svg/cuenta.svg";





	$displaylogged ="display:none;";

	$hidelogged ="display:block;";
	$linkdomicilio ='/domicilio';





}





	$title= "<title>Vips | Bienvenidos los que disfrutan de comer rico</title>";
$meta = '
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
';



?>



<!DOCTYPE html>



<html lang="es">



<head>





	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, width=device-width, height=device-height">

	<?php echo $title; ?>
	<?php echo $meta; ?>
	<?php echo $meta_blog; ?>

	<?php echo $custom_pixels; ?>



	<meta name="mobile-web-app-capable" content="yes">



<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WF88QBJ');</script>

<!-- End Google Tag Manager -->




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114083909-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114083909-1');
</script>

<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
  analytics.load("JIg0Zvz8yCtIW0RloenNJpvUtMTlkeSE");
  analytics.page();
  }}();
</script>
	<!-- FAVICON -->
	<link rel="shortcut icon" href="/img/favicon.png">
	<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
	<link rel="stylesheet" href="/css/mobile.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->



	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->



	<!--[if lt IE 9]>



		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>



		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



	<![endif]-->



	<style>

	  input, input:before, input:after {

      -webkit-user-select: initial;

      -khtml-user-select: initial;

      -moz-user-select: initial;

      -ms-user-select: initial;

      user-select: initial;

     }





	*:focus {

		outline: none !important;

	}

	.accordion_container{float: left;

		width: 100%;}

		.accordion_head {

	background-color: #fff;

	color: #444;

	cursor: pointer;

	font-size: 1em;

	margin: 0;

	padding: .5em 5%;

	font-weight: normal;

	border-bottom: 1px solid #ccc;

	line-height: 3;

}



		.plusminus {

			float:right;

			color: #ed7124;

		}







		html, body{overflow-x:hidden!important;}



.vmenuitem .svg {
	width: 40%;
	max-height: 4vh;
	height: 5vh;
}


		.vmenuitem .svg:hover path {



			fill: #ff0025;



		}







		.panelmenu .svg:hover path {



			fill: #ff0025;



		}







		.cuentali {



			border-top: 1px solid #ccc !important;



			border-bottom: 1px solid #ccc !important;



			min-height: 5em;







		}











		.iconmmenu {



			width: 100%;



			vertical-align: middle;



			height: auto;



			padding: 0 20%;



		}



		.logged .iconmmenu {

			width: 100%;

			vertical-align: middle;

			height: auto;

			padding: 0 15%;

			border-radius: 50%;

		}

		.iconmmenus {



			width: 100%;



			vertical-align: middle;



			height: auto;



			padding: 0 30%;



			max-height: 1.8em;



		}







		.iconmmenuc{width:20%; float:left; text-align:center;}



		.textmenu{width:80%; float:left; padding: 2%;}











		.cuentali span {



			color: #bbb;



			font-size: .8em;



			width: 100%;

		}





.tuto {

	width: 100%;

	height: 100%;

	position: fixed;

	background-color: rgba(0,0,0,.85);

	z-index: 0;

	background-image: url(img/m/tuto.png);

	background-size: 55%;

	background-repeat: no-repeat;

	background-position: 97% 5px;

	visibility: hidden!important;

	 transition: opacity 0.3s 0s, visibility 0s 0s;



}



.is-visible{

 visibility: visible;

 z-index: 999;

 transition: opacity 0.3s 0s, visibility 0s 0s;

}


.tuto h3 {
	color: #fff;
	text-align: center;
	padding: 15vh 10% 0vh 10%;
}


		.tuto p {



			color: #fff;



			text-align: center;



			padding: 2% 10%;



		}


.btntuto {
	background: #f29100;
	color: #fff;
	padding: 15px;
	font-weight: bold;
	text-transform: uppercase;
	font-size: 1em;
	margin-top: 10px;
	position: fixed;
	display: inline-block;
	width: 90%;
	text-align: center;
	margin-top: 2.5%;
	transition: all .4s ease;
	margin: 5% auto;
	left: 0;
	right: 0;
	bottom: 10vh;
	font-family: 'Moreno', sans-serif!important;
}



.slick-prev::before, .slick-next::before {

	opacity: .75;

	color: #f29100!important;

}

.slick-dots li.slick-active button::before {

	color: #ed7124!important;

}

.slick-dots {

	bottom: -25px;

	display: none !important;

}





@media screen only and (orientation:landscape)

{

     .showmsg{display:block;}

}

@media screen only and (orientation:portrait)

{

   .showmsg{display:none;}

}


.anclartuto img {
	margin-top: -20%;
	width: 50%;
	/* float: right; */
	right: 10%;
	position: absolute;
}


@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Book.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Book.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Book.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}



@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Medium.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Medium.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
}

@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Bold.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Bold.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}

body{font-family: 'Program';}
.iconmenu.svg * {
	fill: #2d2d2d;
}

	</style>


<!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window,document,'script',

'https://connect.facebook.net/en_US/fbevents.js');


fbq('init', '2142550566017118');

fbq('track', 'PageView');

</script>

<noscript>

<img height="1" width="1"

src="https://www.facebook.com/tr?id=2142550566017118&ev=PageView

&noscript=1"/>

</noscript>

<!-- End Facebook Pixel Code -->


<!-- Global site tag (gtag.js) - Google Ads: 794291389 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-794291389"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-794291389'); </script>


<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
</head>



<body id="page-top" class="<?php echo $classlogged; ?>">



<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF88QBJ"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->




	<div class="splash"></div>



<div class="tuto">







	<h3><br>¡Bienvenido a tu sitio Vips!</h3>



	<p>Aquí podrás acceder a tu nueva tarjeta de lealtad o registrarla</p>

	<div class="anclartuto">
	<p> Crea un ícono en tu pantalla de inicio para que nos encuentres fácilmente</p>
	<img class="anclarimg" src="/img/anclarbg.png" onclick="addToHomescreen2();">
	</div>







	<a class="btntuto">Continuar</a>



</div>



	<!-- Buscador=============================-->

	<div class="buscadormenu">

		<div class="searchm searchm2">

			<div class="closebtn">

				<div id=iconclose></div>



			</div>

			<form method="post" action="/buscar-m"  id="busqueda">





				<div class="leftsearch">

					<div class="buscador">

						<input minlenght=3 class="search2 buscainput" name="q" id="q"   type="text" required>

					</div>





				</div>



				<div class="txtfilters">

					<div class="containerchecks" >



						<div class="itemfilter"><input id="sano" name="sano" type="checkbox" class="roundcheck" value="1"><label for="sano">Estoy comiendo sano</label></div>

						<div style="display: none;" class="itemfilter"><input id="vegetariano" name="vegetariano" type="checkbox" class="roundcheck" value="vegetariano"><label for="vegetariano">Soy vegetariano</label></div>

						<div class="itemfilter"><input id="dulce" name="dulce" type="checkbox" class="roundcheck" value="dulce"><label for="dulce">Algo dulce</label></div>

						<div class="itemfilter"><input id="picoso" name="picoso" type="checkbox" class="roundcheck" value="picoso"><label for="picoso">Algo picoso</label></div>

					</div>





					<div class="containerchecks" >




						<div class="itemfilter"><input id="serie" name="serie" type="checkbox" class="roundcheck" value="serie"><label for="serie">Mientras veo la serie</label></div>

						<div class="itemfilter"><input id="sorpresa" name="sorpresa" type="checkbox" class="roundcheck" value="sorpresa"><label for="sorpresa">Sorpréndeme</label></div>

					</div>



					<div class="buttons">

						<a class ="cleanfilters">Limpiar Filtros</a>

						<button class ="send" type="submit">Aceptar</button>



					</div>





				</div>

			</form>



		</div>







	</div>



	<div class="togglefilter filtertoggle" id="filtertoggle">

	</div>







	<style>



	*{-webkit-tap-highlight-color: transparent;}



	html, body{max-width:100%;}







	.main {



		width: 100%;



		z-index: 2;



		position: relative;



		transition: margin-left .2s ease-in;



		-moz-transition: margin-left .2s ease-in;



		-webkit-transition: margin-left .2s ease-in;





	}







	.panel {



		background: #fff;



		width: 100%;



		color: #222;



		font-size: 1em;



		min-height: 100%;



	}







	/* Overlay */







	.overlayp {



		z-index: 9999;



		position: absolute;



		left: 0;



		top: 0;



		margin-left: 100%;



		transition: margin-left .2s ease-in;



		-moz-transition: margin-left .2s ease-in;



		-webkit-transition: margin-left .2s ease-in;



	}











	.overlayp.active {



		margin-left: 0;



		box-shadow: 0 0 20px rgba(0,0,0,0.5);



	}







	/* Push */







	.pushp {



		position: fixed;



		left: 0;



		top: 0;



		z-index: 9999;



		margin-left: 100%;



		transition: margin-left .35s ease-in;



		-moz-transition: margin-left .35s ease-in;



		-webkit-transition: margin-left .35s ease-in;







	}







	.pushp.active {margin-left: 0;



position: fixed;

z-index: 3;



display: block;



height: 100%;



overflow-y: scroll;}







	.main.pactive { margin-left: -100%; }







	.close {



		width: 10%;



		min-height: 8vh;



		background:url(/img/back.png);



		background-repeat: no-repeat;



		background-size: 70%;



		background-position: 15% center;



		float: left;



	}







	.header {



		height: 8vh;



		width: 100%;

		width: 100vw;



		float: left;



		border-bottom: 1px solid #ccc;



		position: fixed;



		z-index: 90;



		top: 0;



		background: #fff;



	}



	.titlemenu {



		width: 70%;



		float: left;



		height: 10vh;



		vertical-align: middle;



		padding: 3vh 2vh;



	}







	.logininputs{width:100%;}



	.logininputs .input{width:100%; float:float; position:relative;}







	.logininputs .icono {

		width: 10%;

		margin: 0;

		padding: 0;

		float: right;

		position: absolute;

		margin-left: 0;

		margin-top: -40px;

		opacity: .5;

		right: 10%;

	}





	.formheader .logininputs .icono {

		width: 10%;

		margin: 0;

		padding: 0;

		float: right;

		position: absolute;

		margin-left: 0;

		margin-top: 0px;

		opacity: .5;

		right: 10%;

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



		padding: 10px 5%;



	}



	input[type="submit"] {

		border: none;

		padding: 1em;

		outline: none;

		border-color: #a9a6a1;

		width: 100%;

		font-size: 1em;

		background: #f29100;

		color: white;

		cursor: pointer;

		margin: 1em 0;

		font-weight: bold;

	}



	.formulario {



		padding: 5%;



		background: #ffefd6;



		margin-right: 0;



		float: left;



	}



	.accordion_body input::placeholder {



		color: #a9a6a1!important;
		font-family:"Program"; sans-serif;



	}

	.panel  input::placeholder {



		color: #a9a6a1!important;
		font-family:"Program"; sans-serif;



	}



	.accordion_body p {

		text-align: center;

		font-size: .9em;

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



	}



	.icono{



		width: 10%;



		margin: 0;



		padding: 0;



		float: right;



		position: absolute;



		margin-left: -2.5%;



		margin-top: 0.10%;



		opacity: .5;



	}



	.inputs {



		float: left;



		width: 100%;



		margin-bottom: 5%;



		padding: 0 5%;



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



		z-index: 2;







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



		font-family: "Program", sans-serif;



	}







	.flipform{



		position: relative;



		width: 100%;



		height: 100%;



		float: left;



		margin-top: 5%;



		padding-bottom: 9vh;



		background: #fff;





	}







	.formheader{padding: 5%;}







	#togglebtn {



		margin: 12vh auto 0 auto;



		background: #d8d8d8;



		border-radius: 20px;



		height: 40px;



		width: 40%;



		4: ;



	}



	.iconvipsactive {



		width: 70px;



		height: 70px;



		background:url(/img/m/iconvipsactive.png);



		background-repeat: no-repeat;



		background-size: 100%;



		margin-top: -10px;



		position: absolute;



		left: 54%;



		transition:.35s all ease;



	}







	.iconvipsinactive {



		width: 70px;



		height: 70px;



		background:url(/img/m/iconvipsinactive.png);



		background-repeat: no-repeat;



		background-size: 100%;



		margin-top: -10px;



		position: absolute;



		left: 24%;



		transition:.35s all ease;



	}







	.formregistro{padding: 5%;}







	.loginwelcome {



		width: 60%;



	}



	.material-icons {

		float: right;

		margin-top: -34px;

		opacity: .3;

	}



	#btnnextv .nav-next {

		float: left;

		margin-left: 5px;

		/* position: absolute; */

		right: 0;

		left: 0;

		margin: 0 auto;

		width: 80%;

		text-align: center;

		background: #f29100;

		color: #fff;

		padding: 1em;

		margin-left: 10%;

	}



	.sf-navigation {

		line-height: 1em;

		overflow: hidden;

		text-align: center;

		padding: .25em 5%;

		width: 100%;

		max-width: 100vw;

		/* float: left; */

		position: relative;

	}



	.nav-prev img{width:3em;}





	.sf-error-message {

		text-align: center;

		float: left;

		width: 100%;

		padding: .5em;

		position: absolute;

		right: 0;

		left: 0;

		margin-top: -17px;

		font-size: .8em;

	}

	.sf-error-message {
	text-align: center;
	float: left;
	width: 100%;
	padding: 1.5em;
	position: relative;
	right: 0;
	left: 0;
	margin-top: 0;
	font-size: .8em;
}



	.nav-prev img {

		width: 2.5em;

		opacity: 1;

		position: relative;

		left: 0;

	}



	.nav-next img {

		width: 2.5em;

		opacity: 1;

		/* position: relative; */

		/* left: 30vw; */

	}

	#containerdate {

		position: absolute;

		z-index: 999999999;

	}



	.sf-navigation .nav-next {

		float: right;

		\31 0: 108 px;

		/* position: absolute; */

		right: 10%;

	}



	.formheader {

		padding: 5%;

		background: #fff;

		margin-top:-10px;

	}



	#containerdate {

		position: absolute;

		z-index: 999999999;

		float: left;

		width: 100%;

	}



#fb {

	border: none;

	padding: 1em;

	outline: none;

	width: 4em;

	font-size: 1em;

	background-color: #3b5998;

	background-image: url(img/fb.png);

	background-size: 1.5em;

	background-repeat: no-repeat;

	background-position: center;

	color: white;

	cursor: pointer;

	margin: 0;

	font-weight: normal;

	padding-left: 2.5em;

	/* float: left; */

	text-align: center;

	margin-bottom: 1em;

	height: 4em;

	border-radius: 50%;

	margin: 0 auto;

	/* margin-left: 0; */

	/* position: absolute; */

	display: block;

	margin: .5em auto;

}



.or {

	text-align: center;

	width: 90%;

	margin-bottom: 0;

	font-size: 1.2em;

}



#timeusernl, #namespan{

	font-size: 1em;

	color: #666;

}



.fbcenter {

	float: left;

	width: 100%;

	text-align: center;

}



.free-simple-slider {

	margin-top: 5vh;

	height: 37.5vh;

	overflow: hidden;

}

</style>







		<style>

		.avatar {

			text-align: center;

			padding-top: 10vh;

			color: #fff;

		}







		.buscadormenu {

			width: 100%;

			position: fixed;

			float: left;

			background: url(/img/m/filtrosbgm.png);

			background-size: 100% 100%;

			height: 80vh;

			border: none;

			background-repeat: no-repeat;

			transition: all .35s ease;

			z-index: 10;

			overflow: hidden;

			background-position: right;

			margin-top: 8vh;
			opacity:0;



		}

		.buscadormenu.closed {

			height: 0;

			transition: all .35s ease;

			overflow: hidden;





		}





		.searchm {

			float: left;

			width: 100%;

			color: #fff;

			text-align: center;

			padding: 5% 2.5%;

			margin-bottom: 5vh;

			transition: .35s all ease;

		}

		.leftsearch {

			width: 85%;

			float: left;

			margin-top: 0;

			padding: .5em 1em;

		}

		.itemfilter {

			width: 100%;

			float: left;

			padding: 1.5% 0;

			font-family: "Program", sans-serif;

			font-size: .9em;

		}



		.containerchecks {

			width: 100%;

			display: inline-block;

			text-align: left;

			vertical-align: top;

		}



		.containerchecks label {

			padding-left: .5em;

		}



		.txtfilters{float:left; width:100%; color:#fff; padding: .5em 1em; transition: .35s all ease;}

		.txtfilters li{width: 50%; float: left; padding: 5px;}

		.closebtn{float:left; width:20%; color:#fff; padding: 2em 1em;}



		.closed .txtfilters, .closed .searchm{padding-top: 250px;}

		.buscadormenu ::-webkit-input-placeholder { /* Chrome/Opera/Safari */

			color: #fff;

			opacity: 1;

		}

		.buscadormenu ::-moz-placeholder { /* Firefox 19+ */

			color: #fff;

			opacity: 1;
			font-family:"Program"; sans-serif;

		}

		.buscadormenu :-ms-input-placeholder { /* IE 10+ */

			color: #fff;

			opacity: 1;
			font-family:"Program"; sans-serif;

		}

		.buscadormenu :-moz-placeholder { /* Firefox 18- */

			color: #fff;

			opacity: 1;
			font-family:"Program"; sans-serif;

		}



		#iconclose{width:2em; height: 2em; background: url(/img/close.png); background-size: 100%; background-repeat: no-repeat; cursor: pointer;}

		.buscador{width:100%;}

		.cleanfilters, .send {

			padding: .5em;

			border: 2px solid #fff;

			width: 40%;

			margin: 5% 2.5%;

			display: inline-block;

			text-align: center;

			background: transparent;

			color: #fff;

			font-size: .9em;

			font-weight: bold;

			cursor:pointer;

			transition:.35s all ease;

		}



		.cleanfilters:hover, .send:hover { transition:.35s all ease; background:#fff; color:#ff1528;}

		.search{pointer-events-none;}

		.search2 {

			border: none;

			border-bottom: 2px solid #fff;

			color: #fff;

			padding: 10px 55px;

			width: 100%;

			max-width: 300px;

			background-image: url(/img/lupaw.png);

			background-size: 10%;

			background-repeat: no-repeat;

			background-position: left center;

			font-weight: light;

			font-family: "StawixAmsiProRegular", ‘Trebuchet MS’, Helvetica, sans-serif;

			font-size: 1em;

			transition: all .4s ease;

			text-align: center;

			background-color: transparent;

		}

		.txtfilters {

			float: left;

			width: 100%;

			color: #fff;

			padding: .5em 1em;

			transition: .35s all ease;

			text-align: right;

		}

		.txtfilters li{width: 50%; float: left; padding: 5px;}

		.closebtn {

			float: right;

			position: absolute;

			right: 0;

			top: 0;

		}



		.itemfilter .fa{font-size:1.4em!important}



		.closed .txtfilters, .closed .searchm{padding-top: 250px;}

		.buscadormenu ::-webkit-input-placeholder { /* Chrome/Opera/Safari */

			color: #fff;
			font-family:"Program"; sans-serif!important;

			opacity: 1;

		}



		#iconclose{width:2em; height: 2em; background: url(/img/close.png); background-size: 100%; background-repeat: no-repeat; cursor: pointer;}

		.buscador{width:100%;}

		.cleanfilters {

		padding: 1em .5em;

		border: 1px solid #fff;

		width: 45%;

		margin: 3% 0;

		display: inline-block;

		text-align: center;

		margin-right: 5%;

	}



		.send {

			padding: 1em .5em;

			border: 1px solid #fff;

			width: 45%;

			margin: 3% 0;

			display: inline-block;

			text-align: center;

		}

		.buttons {

			float: left;

			width: 100%;

			text-align: left;

			margin-top: 0em;

		}

		.filtertoggle {

			display: none;

			position: fixed;

			width: 2.5em;

			height: 2.5em;

			background-image: url(/img/menu/filter.png);

			background-repeat: no-repeat;

			background-size: 100%;

			top: 170px;

			z-index: 9;

			left: 1em;

			cursor: pointer;

			background-position: top center;

			transition: .35s all ease;

		}





		.filtertoggle:hover {

			background-size: 90%;

			transition: .35s all ease;

		}





		.scrolled .filtertoggle{	top: 110px;}



		@keyframes pulse {

			0% {

				transform: scale(1, 1);

			}



			50% {

				transform: scale(1.1, 1.1);

			}



			100% {

				transform: scale(1, 1);

			}

		}



		.filtertoggle {

			animation: pulse 2s linear infinite;

		}



		.itemmenuvips span {

			margin-top:-.5vh;

		}



		.itemmenuvips .svg{

			width: 45%;

			max-height: 4.5vh;

			/* margin-top: -.5vh; */

			margin-bottom: 0;

		}





	[data-div="#mashome"]*{  fill: #404040!important; transition: all .4s ease;}

	[data-div="#mashome"] path{  fill: #404040!important; transition: all .4s ease;}

	[data-div="#mashome"] *{color: #404040!important;}



	.activemas *{  fill: #ff0025!important; transition: all .4s ease;}

	.activemas path{  fill: #ff0025!important; transition: all .4s ease;}

	.activemas *{color: #ff0025!important;}



.keyboard-on .vipsmenu {

	position: absolute;

}



.avatarhead {

	width: 2.5em;

	height: 2.5em;

	object-fit: cover;

	object-position: center;

}

.logged .avatarhead{ border-radius: 50%;}





	.seccion-perfil {

		float: left;

		width: 100%;

		padding: 2em 5%;

	}

	.midcont{width:100%; float:left; min-height: 200px;}



	.stat {

		width: 33.33%;

		float: left;

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





	.seccion-perfil h3{color: #f29100; font-family:"Museo 700", sans-serif; font-size:1.5em;}



	.stat h3 {

		color: #979797;

		font-family: "Museo 700", sans-serif;

		font-size: 1em;

		text-align:center;

	}



	.dedesc {

		font-size: 10px;

		line-height: 1px;

		margin-top: 5px;

		position: absolute;

		width: 100%;

		text-align: left;

		left: 25%;

	}







	.visitas-bar, .puntos-bar {

		width: 60%;

		border-radius: 10px;

		background: #fff;

		margin: 0 auto;

		color: #fff;

		border: 1px solid #ddd;

		height: 40px;

		box-shadow: 2px 1px 4px #ccc;

	}





	.puntos-bar {

		width: 60%;

		max-width:110px;

		color: #222;

		background-image: url(img/puntosbg.png);

		background-repeat: no-repeat;

		background-size: 25px;

		background-position: 5px center;

		padding: 10px 10px 10px 40px;

		font-family: "Program", sans-serif;

		color: #666;

	}



	.visitas-progress{background: #f29100;

		overflow-x: visible;

		border-radius: 10px;

		height: 40px;

	}



	.textbar1 {

		padding: 7.5px 10px;

		margin: 0;

		position: absolute;

		color: #fff;

		font-size: 20px;

	}



	.textbar1 span{font-size: 10px;}





	.seccion-perfil label {

		width: 100%;

		float: left;

		font-family: "Program", sans-serif;

		color: #666;

		font-size: .8em;

	}



	.formperfil{



		width: 100%;



		float: left;

	}



.form-mid {

	width: 100%;

	padding: .25em 5%;

	float: left;

}

	.form-mid2 {

	width: 50%;

	padding: 5% .25%;

	float: left;

}



.labelsx{

	float: left;

	width: 100%;

}



	.inputform {

	width: 100%;

	height: 35px;

	margin: 1.5em 0;

	border: 0;

	border-bottom: 3px #ddd dashed;

	background: transparent;

}



	.radiobtn {

		width: 10px;

		float: left;

	}



	.labelradio {

		float: left;

		width: 30px;

		vertical-align: middle;

		text-align: center;

		padding-top: 30px;

	}



.btnredform {

	width: 100%;

	max-width: 100%;

	background: #ef3e42;

	padding: .75em;

	color: #fff;

	float: right;

	margin-bottom: .5em;

	cursor: pointer;

	border: 0;

	height: 45px;

	margin-bottom: 2em;

}

	.pformtoggle {

		color: #333;

		font-size: .8em;

		font-family: "Program", sans-serif;

	}



	.logouta {

		width: 100%;

		float: left;

		padding: .5em 0;

		color: #666;

		font-size: .8em;

	}

	.codigobarra{

		position: absolute;

		margin-left: -62%;

		margin-top: 15%;

	}

	.boton{

		background: #ef3e42;

		color: #fff;

		font-size: 1em;

		font-weight: bold;

		transition: 0.3s all ease;

	}

	.boton:hover{

		background: #ff5a5e;

		color: #fff;

		transition: 0.3s all ease;

	}



.accordion_body {

	padding: 2.5% 5%;

	background-color: #fafafa;

	float: left;

	height: auto;

	width:100%;

	float:left;

}



.accordion_container {

	float: left;

	width: 100%;

	padding-bottom: 10vh;

}



.headeruser {

	width: 100%;

	float: left;

	height: 40vh;

	background-size: cover;

	background-position: center;

}

.overlayheaduser {

	background: rgba(16, 44, 67,.95);

	float: left;

	width: 100%;

	padding: 5%;

	height: 100%;

}



.free-simple-slider li {

	background-position: center center !important;

	background-size: cover!important;

	background-repeat: no-repeat!important;

}



.animate{animation: pulse 1s linear 6;}



.tooltipster-grow.tooltipster-show {

	margin-left: -5px !important;

}



#site-wrapper{padding-bottom:9vh;}

button{-webkit-appearance: none;}
.vipsmenu ul li span {
	width: 100%;
	display: inline-block;
	font-family: "Program", sans-serif;
	font-size: 1.5vh;
	float: left;
}
</style>




<div id="site-wrapper">



		<!-- HEADER -->



		<header>



			<nav class="navbar-fixed-top">







				<div class="topnav">







					<div class="logo">



						<a href="/m"><img src="/img/svg/LOGO_VIPS.svg"></a>







					</div>







					<div class="searchcontainer togglefilter">



						<form >



							<input class="search " minlength=3 type="text" name="q1" id="q1" placeholder="¿Se te antoja algo?" style="pointer-events:none;"/>



						</form>







					</div>











					<div class="socialmenu">



						<ul>



							<a href="/cuenta-m"><li><img class="icon avatarhead animate" src="<?php echo $avatarimg;?>"></li></a>







						</ul>







					</div>







				</div>











			</nav>



		</header>











		<div class="vipsmenu">



			<ul>







				<a href="/m" class="linkmenu-m"><li class="vmenuitem" data-div="#homehome">



					<img class="iconmenu svg" src="/img/svg/home.svg">



					<span class="spanm">Inicio</span>



				</li></a>
				
				<a href="/cupones-m" class="linkmenu-m linkpromos"><li class="vmenuitem" data-div="#beneficioshome">



					<img class="iconmenu svg animate" src="/img/2019/Promociones.svg">



					<span class="spanm">Cupones</span>



				</li></a>







				<a href="/menu" class="linkmenu-m"><li class="vmenuitem itemmenuvips" data-div="#menuhome">



					<img class="iconmenu svg" src="/img/svg/menu.svg">



					<span class="spanm">Menú Vips</span>



				</li></a>







				<a href="/domicilio" class="linkmenu-m"><li class="vmenuitem" data-div="#domiciliohome">



					<img class="iconmenu svg" src="/img/svg/domicilio.svg">



					<span class="spanm">A Domicilio</span>



				</li></a>






				<a href="#" class="nav-toggle"><li class="vmenuitem" data-div="#mashome">



					<img class="iconmenu svg" src="/img/svg/mas.svg">



					<span class="spanm">Más</span>



				</li></a>



			</ul>







		</div>

			<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
			<script src="/js/segment.js"></script>