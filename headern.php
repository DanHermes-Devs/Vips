<?php

error_reporting(0);
ini_set('display_errors', 0);

$title ="";
$meta="";
$meta_blog="";
$custom_pixels="";

	ob_start();



	// long long time
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
ini_set( 'session.cookie_httponly', 1 );
ini_set( 'session.cookie_secure', 1 );
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
	require_once 'dbconnect.php';

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];


			$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid";
	$resulth =$mysqli->query($sql3h);
	 $rowregh=mysqli_fetch_assoc($resulth);

		$nombre = $rowregh['nombre'];
		$apellido = $rowregh['apellido'];
		$correo = $rowregh['correo'];
		$telefono = $rowregh['telefono'];
		$sexo = $rowregh['sexo'];
		$utime = $rowregh['fecha_registro'];
		$cumple = $rowregh['nacimiento'];
		$imagen = $rowregh['foto'];
		$randomn = rand();
		$foto = $rowregh['foto']."?".$randomn;
		$resregh2=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");
		$rowregh2=mysqli_fetch_assoc($resregh2);
		$facebookh = $rowregh2['facebook_id'];

		$sesion = true;



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
		$avatarimg="/img/svg/avatar2.svg";

	}

	$sql1 = "SELECT * FROM domicilio WHERE id_usuario = '$uid' LIMIT 1";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);
$numfilas1 = $result1->num_rows;


if($numfilas1 ==1){

	$linkdomicilio ='/domicilio3-l';



}

else{
	$linkdomicilio ='/domicilio';

}

if(strlen($telefono) < 10){

	$linkdomicilio ='/domicilio';

}

	}
	else{
		$sesion = false;
		$avatarimg="/img/svg/cuenta.svg";
		$marginavatar = "";
		$linkdomicilio ='/domicilio';
	}

	$title= "<title>Vips | Bienvenidos los que disfrutan de comer rico</title>";
$meta = '
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
';


?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<?php echo $title; ?>
	<?php echo $meta; ?>
	<?php echo $meta_blog; ?>

	<?php echo $custom_pixels; ?>


<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WF88QBJ');</script>

<!-- End Google Tag Manager -->


<!-- Global site tag (gtag.js) - Google Ads: 794291389 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-794291389"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-794291389'); </script>


<!-- Event snippet for Compras conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-794291389/VJD4CIGDl4cBEL3Z3_oC', 'value': 40.0, 'currency': 'MXN', 'transaction_id': '', 'event_callback': callback }); return false; } </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114083909-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114083909-1');
</script>


	<!-- FAVICON -->
	<link rel="shortcut icon" href="/img/favicon.png">
	<link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/12437/idangerous.swiper.css'>
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="/css/magnific-popup.css">
	 <link rel="stylesheet" type="text/css" href="/css/tooltipster.bundle.min.css" />
	<link rel="stylesheet" href="/css/vips.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	 <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="/css/imagehover.css"> -->
	  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper.css">
	  <script src="/js/jquery-2.2.4.min.js"></script>

  <!-- Swiper JS -->
  <script src="js/swiper.js"></script>
  <!-- Initialize Swiper -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>

.searchexpand {
	overflow: hidden;
	max-width: 51px;
	max-height: 50px;
	transition: .6s all ease;
}
.searchexpand:hover {
	overflow: hidden;
	max-width: 200px;
	max-height: 50px;
transition: .6s all ease;
}

.searchexpand svg{ float:left;}


.searchexpand span {
	float: left;
	padding: 20px 20px 15px 10px !important;
	margin-top: 0 !important;
	height: 3em;
}



.searchmain svg#svg {
	width: 2.25em !important;
	height: 2.5em !important;
	transition: all .4s ease;
	margin-top: .5em;
}

.vipsmenu ul li .searchmain span {
	width: auto;
	display: inline-block;
	font-family: "AmsiProNarw", sans-serif;
	font-size: 1em;
	color: #ff0025;
	vertical-align: middle;
	margin-top: -20px;
	padding: 5px;
}

svg#svg {
    width: 2.5em;
    height: 2em;
		transition: all .3s ease;
}
.scrolled svg#svg {

    height: 1.5em;
}





.redsvg svg path {  fill: #ff0025; transition: all .3s ease;}

.free-simple-slider li {

	background-size: 100%;
	background-position: top center;
}

.free-simple-slider .slider-box {
	height: 430px;

}


.buscadormenu {
	width: 100%;
	position: absolute;
	float: left;
	background: url(/img/pleca_search.png);
	background-color: transparent;
	background-size: 100% 100%;
	height: 250px;
	border: none;
	background-repeat: no-repeat;
	transition: all .35s ease;
	z-index: 10;
	overflow: hidden;
	top: 120px;
}

.buscadormenu.closed {
	height: 0;
  transition: all .35s ease;
  overflow: hidden;


}

.scrolled .buscadormenu {
	position: fixed;
	top: 96px;
	width: 100%;
	z-index: 9;
}
.scrolled .buscadormenu {
	position: fixed;
	top: 56px;
	width: 100%;
	z-index: 9;
}
.searchm {
	float: left;
	width: 85%;
	color: #fff;
	text-align: center;
	padding: 2em 2.5% 2em 5%;
	transition: .35s all ease;
}
.leftsearch {
	width: 35%;
	float: left;
}

.itemfilter {
	width: 100%;
	float: left;
	padding: .1em 0;
	font-family: "AmsiProNarw", sans-serif;
	font-size: .9em;
}

.containerchecks {
	width: 33.33%;
	display: inline-block;
	text-align: left;
vertical-align: top;
}

.containerchecks label {
	padding-left: .5em;
}
.search2 {
	border: none;
	border-bottom: 2px solid #fff;
	color: #fff;
	padding: 10px 55px;
	width: 100%;
	max-width: 300px;
	background-image: url(/img/lupaw.png);
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: left center;
	font-weight: light;
	font-family: "AmsiProNarw", ???Trebuchet MS???, Helvetica, sans-serif;
	font-size: 1em;
	transition: all .4s ease;
	text-align: center;
  background-color: transparent;
	outline:0;
}
  .txtfilters{float:left; width:40%; color:#fff; padding: 2em 1em; transition: .35s all ease;}
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
  }
  .buscadormenu :-ms-input-placeholder { /* IE 10+ */
    color: #fff;
    opacity: 1;
  }
  .buscadormenu :-moz-placeholder { /* Firefox 18- */
    color: #fff;
    opacity: 1;
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
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: left center;
	font-weight: light;
	font-family: "AmsiProNarw", ???Trebuchet MS???, Helvetica, sans-serif;
	font-size: 1em;
	transition: all .4s ease;
	text-align: center;
  background-color: transparent;
}
  .txtfilters {
	float: left;
	width: 60%;
	color: #fff;
	padding: 2em 1em;
	transition: .35s all ease;
	text-align: right;
}
  .txtfilters li{width: 50%; float: left; padding: 5px;}
  .closebtn{float:left; width:15%; color:#fff; padding: 2em 1em;}

.closed .txtfilters, .closed .searchm{padding-top: 250px;}
  .buscadormenu ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #fff;
    opacity: 1;
  }

  #iconclose{width:2em; height: 2em; background: url(/img/close.png); background-size: 100%; background-repeat: no-repeat; cursor: pointer;}
.buscador{width:100%;}
.cleanfilters {
  	padding: 1% 5%;
  	border: 1px solid #fff;
  	width: 40%;
    margin: 5% 2.5%;
    display: inline-block;
    text-align: center;

  }

  .send {
    	padding: 1% 5%;
    	border: 1px solid #fff;
    	width: 40%;
      margin: 5% 2.5%;
      display: inline-block;
      text-align: center;
    }

  .buttons {
	float: left;
	width: 100%;
	text-align: right;
margin-top: 2em;
  }

.filtertoggle {
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
	display: none;
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

	/*.itemmenuvips .svg {
	width: 3em !important;
	height: 2.5em !important;
	margin-bottom: 0;
	border-bottom: 0;
	margin-bottom: -.5vh;
	}

	.scrolled .itemmenuvips .svg {
	width: 2em !important;
	height: 2em !important;
	margin-bottom: 0;
	border-bottom: 0;
	margin-bottom: -.5vh;
	}*/

	.activemas *{  fill: #ff0025!important; transition: all .3s ease;}
	.activemas path{  fill: #ff0025!important; transition: all .3s ease;}
	.activemas *{color: #ff0025!important;}



.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 10px 0;
    z-index: 1;
	top:60px;
	font-family: "AmsiProNarw", sans-serif;
font-size: .8em;
color: #666;
padding-bottom:0;
}
.dropdown-content  ul {
	list-style: none;
	text-align: left!important;
}
.dropdown-content ul li{
text-align: left;
border-bottom: 1px solid #ccc; width:100%;
color: #666!important;
padding:10px;
}

.dropdown-content ul li:hover{
color: red!important;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.animate{animation: pulse 1s linear 6;}


.accountitem .textaccount {
	width: 50%;
	float: left;
	text-align: left;
	padding-top: .50em;
	line-height: 1.15;
}

.tooltipster-swing.tooltipster-show {
	margin-left: -5px;
}

.iconmenu.svg.replaced-svg {
	width: 2.8em;
	height: 2em;
	transition: all .35s ease;
}

.scrolled .iconmenu.svg.replaced-svg {
	width: 2em;
    height: 2em;
}

#lupa {
	margin-top: .5em;
	width: 2.5em;
	height: 2.5em;
	fill: red;
}

#lupa path {  fill: #ff0025; transition: all .3s ease;}

.search2 {
	background-image: url(/img/svg/buscaw.svg);

}
.inputs input {

	background-size: 12%;
	background-repeat: no-repeat !important;
	background-position: right center;
}
#correo, #correol{background-image: url(img/svg/correo.svg)}
#pass, #passl{background-image: url(img/svg/password.svg)}

.accountitem .iconmenu.svg.replaced-svg {
	width: 2.8em;
	height: 2.8em;
	transition: all .35s ease;
}
.scrolled .accountitem .iconmenu.svg.replaced-svg {
	width: 2.5em;
	height: 2.5em;
	transition: all .35s ease;
}

.vipsmenu ul li img {
	width: 3em;
	height: 3em;
	object-fit: cover;
	object-position: center;
}

.scrolled .vipsmenu ul li img {
	height: 2em;
}

.scrolled .accountitem .textaccount {
	line-height: 1.1;
	margin-top: -.25em;
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

<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

</head>
<body id="page-top">


<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF88QBJ"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->



<div class="splash"></div>

<div class="body">

	<!-- HEADER -->
	<header>
		<nav class="navbar-fixed-top">

		<div class="topnav">

			<div class="logo">
			<a href="/"><img src="/img/Logo_Vips.png"></a>

			</div>

			<div class="searchcontainer">
			<form >
				<input class="search" type="text"  id="q" placeholder=""/>
			</form>

			</div>


			</div>

			<div class="vipsmenu" id="vipsmenu">
				<ul>
					<a href="/menu" class="linkhome" data-div="#menuhome">
						<li class="vmenuitem itemmenuvips">
						<img class="iconmenu svg" src="/img/svg/menu.svg" alt="Men?? Vips" title="Men?? Vips">
						<span class="spanm">MEN?? VIPS</span>

						</li>
					</a>

					<a href="<?php echo $linkdomicilio; ?>"  data-url="<?php echo $linkdomicilio; ?>" class="linkhome" data-div="#domiciliohome">
					<li class="vmenuitem" id="linkdomicilio">

					<img class="iconmenu svg" src="/img/svg/domicilio.svg" alt="A Domicilio" title="A Domicilio">
					<span class="spanm">A DOMICILIO</span>
					</li>
					</a>


					<a href="/promociones/" class="linkhome" data-div="#tdlhome">
					<li class="vmenuitem" id="linkbeneficios">
					<img class="iconmenu svg" src="/img/svg/promociones.svg" alt="Promociones" title="Promociones">
					<span class="spanm">PROMOCIONES</span>
					</li>
					</a>

					<li class="vmenuitem" id="linkexperiencias">
					<a href="/vipstorias" class="linkhome" data-div="#experienciashome">
					<img class="iconmenu svg" src="/img/svg/experiencias.svg" alt="Vipstorias" title="Vipstorias">
					<span class="spanm">VIPSTORIAS</span>
					</a>
					</li>



					<a href="/ubicaciones" class="linkhome" data-div="#ubicacioneshome">
					<li class="vmenuitem" id="linkubicaciones">
					<img class="iconmenu svg" src="/img/svg/ubicaciones.svg" alt="Restaurantes" title="Restaurantes">
					<span class="spanm">RESTAURANTES</span>
					</li>
					</a>


					<li class="vmenuitem" id="linkfacturas">
					<a href="https://alsea.interfactura.com/RegistroDocumento.aspx?opc=Vips" target="_blank" class="linkhome" data-div="#facturashome">
					<img class="iconmenu svg" src="/img/svg/facturas.svg" alt="Facturas" title="Facturas">
					<span class="spanm">FACTURAS</span>
					</a>
					</li>

					<li class="vmenuitem searchexpand">
					<a style="cursor:pointer;" class="linkhome searchmain">
					<img class="iconmenu svg" src="/img/svg/busca.svg" style="width: 2.5em; height: 3em;">
						<span >??ANTOJO?</span>
					</a>
					</li>

					<a class="openpoplogin">
					<li class="vmenuitem accountitem dropdown" data-div="#cuentahome">
					<div class="icon">
					<img class="iconmenu svg animate" src="<?php echo $avatarimg;?>" style="border-radius: 50%; <?php echo $marginavatar;?>">
					</div>
					<div class="textaccount"> <span class="spanm">Mi Tarjeta <br> de Lealtad</span></div>
					<?php if($sesion == true){
					echo '<div class="dropdown-content">
						<ul><a href="/perfil"><li>MI PERFIL</li></a><a href="/logout"><li>CERRAR SESI??N</li></a></ul>

					  </div>';

						}
					?>

					</li>
					</a>


				</ul>



			</div>

		</nav>
	</header>

	  <!-- Buscador=============================-->
<div class="buscadormenu">
	<div class="searchm searchm2">

    <form method="post" action="/buscar" id="busqueda">

		<div class="leftsearch">
			  <div class="buscador">
						<input class="search2 buscainput" name="termino" id="q" placeholder=""  type="text" required>
			  </div>

			  <div class="buttons">
				<a class ="cleanfilters">Limpiar Filtros</a>
				  <button class ="send" type="submit">Aceptar</button>

					</div>
		</div>

		<div class="txtfilters">
			<div class="containerchecks" >

			<div class="itemfilter"><input id="sano" name="sano" type="checkbox" class="roundcheck" value="sano"><label for="sano">Estoy comiendo sano</label></div>
			<div style="display: none;" class="itemfilter"><input id="vegetariano" name="vegetariano" type="checkbox" class="roundcheck" value="vegetariano"><label for="vegetariano">Soy vegetariano</label></div>
			<div class="itemfilter"><input id="dulce" name="dulce" type="checkbox" class="roundcheck" value="dulce"><label for="dulce">Algo dulce</label></div>
			<div class="itemfilter"><input id="picoso" name="picoso" type="checkbox" class="roundcheck" value="picoso"><label for="picoso">Algo picoso</label></div>
			</div>


			<div class="containerchecks" >

			<div class="itemfilter"><input id="serie" name="serie" type="checkbox" class="roundcheck" value="serie"><label for="serie">Mientras veo la serie</label></div>
			<div class="itemfilter"><input id="sorpresa" name="sorpresa" type="checkbox" class="roundcheck" value="sorpresa"><label for="sorpresa">Sorpr??ndeme</label></div>
			</div>



		</div>
	</form>

	</div>


  <div class="closebtn">
    <div id="iconclose"></div>

  </div>
</div>

<div class="togglefilter filtertoggle" id="filtertoggle">
</div>
