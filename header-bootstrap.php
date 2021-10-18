<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
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
		$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
		$resulth =$mysqli->query($sql3h);
		$rowregh=mysqli_fetch_assoc($resulth);
		$uid = $rowregh['id_registro'];
		$_SESSION['uservips'] = $uid;
		$nombre = $rowregh['nombre'];
		$apellido = $rowregh['apellido'];
		$correo = $rowregh['correo'];
		$telefono = $rowregh['telefono'];
		$sexo = $rowregh['sexo'];
		$utime = $rowregh['fecha_registro'];
		$cumple = $rowregh['nacimiento'];
		$imagen = $rowregh['foto'];
		$tdl = $rowregh['tdl'];
		$randomn = rand();
		//$foto = $rowregh['foto']."?".$randomn;
		$foto = $rowregh['foto'];
		$resregh2=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");
		$rowregh2=mysqli_fetch_assoc($resregh2);
		$facebookh = $rowregh2['facebook_id'];
		$sesion = true;

	if (strlen($facebookh)>3 AND strlen($imagen)<3){
			$marginavatar = "margin-top: 0px";
		$avatarimg ="https://graph.facebook.com/".$_SESSION['uservips']."/picture?type=large";

	}

	if (strlen($facebookh)>3 AND strlen($imagen)>3){
		$avatarimg ="".$foto;

	}

	if (strlen($facebookh)<3 AND strlen($imagen)>3){
		$avatarimg ="/".$foto;

	}
	if (strlen($facebookh)<3 AND strlen($imagen)<3){
		$avatarimg="/img/svg/avatar2.svg";

	}


	}
	else{
		$sesion = false;
		$avatarimg="/img/svg/cuenta.svg";
		$marginavatar = "";
		$linkdomicilio ='/domicilio';
	}
//$title= "<title>Vips | Bienvenidos los que disfrutan de comer rico</title>";
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$urlpage = $uriSegments[1];

$sqlmetas = "SELECT * FROM metatags WHERE url LIKE '%$urlpage%'";
$resultmetas = $mysqli->query($sqlmetas)  or die("Error en".$sqlmetas);
$numfilasmetas = $resultmetas->num_rows;


if($numfilasmetas >0){
	$rowmetas=mysqli_fetch_assoc($resultmetas);
	$title = '<title>'.$rowmetas['title'].'</title>';
	$descmeta = $rowmetas['descripcion'];
	$custom_pixels = $rowmetas['custom'];
}
else{
	$title = '<title>Vips | Alimentando el corazón de la comunidad</title>';
	$descmeta = 'Somos un restaurante donde cocinamos comida rica, sin pretensiones, confortable, práctica y elaborada al momento.';
}

?>
<!doctype html>
<html lang="es" data-page="<?php echo $urlpage; ?>">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $descmeta; ?>">
	<?php echo $title; ?>
	<?php echo $meta_blog; ?>
	<?php echo $custom_pixels; ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="/css/fontawesome-free-5.6.3-web/css/all.min.css">
	<!-- FAVICON -->
	<link rel="shortcut icon" href="/img/favicon.png">
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
	<script src="/js/segment.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

<style>
<?php
if($sesion == false){
	echo '
	.iconmenu.animate {
		filter: invert(48%) sepia(79%) saturate(0%) hue-rotate(86deg) brightness(200%) contrast(119%);
	}
	.dropdown-toggle::after {
	display: none;
}';
}
else{
	echo '
	.iconmenu.animate {
	width: 100%;
	border-radius: 50%;
}';
}
?>
a:hover {
	color: none !important;
}
main {
	width: 100%;
	overflow-x: hidden;
	overflow-y: auto;
}
html, body {
	width: 100%;
	max-width: 100%;
	overflow-x: hidden;
}
.splash {
	width: 100%;
	height: 100vh;
	position: fixed;
	top: 0;
	background: url("/img/vipsloader.gif");
	background-repeat: no-repeat;
	background-size: 190px;
	background-position: center center;
	z-index: 99999999;
	background-color: #fff;
}
.bg-light {
	background-color: #e91c2b !important;
	color: #fff;
}
.maincont{padding:0;}
.navbar-brand {
	width: 160px;
	padding: 0;
	transition: all .35s ease;
}
.navbar-brand img {
	width: 100%;
}
@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Book.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Book.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Book.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Medium.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Medium.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
}@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Bold.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Bold.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}
html, body{font-family:'Program'; overflow-x:hidden;}
.iconmenu.svg {
	height: 31px;
	transition: all .35s ease;
	filter: invert(48%) sepia(79%) saturate(0%) hue-rotate(86deg) brightness(200%) contrast(119%);
	margin-bottom: 7.5px;
}
.navbar-light .navbar-nav .nav-link {
	color: #fff;
	font-weight: 500;
	font-size: 12px;
	text-align: center;
	padding: 0 20px;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #f1f1f1;
}
.ml-md-auto, .mx-md-auto {
	margin-left: 0!important;
}
.navbar-nav {
	padding-left: 0;
	margin-bottom: 0;
	padding-top: 25px;

}

#navbarDropdownMenuLink {
	padding-left: 65px;
	position: relative;
	text-align: left;
	top: 5px;
	line-height: 1;
	color: #fff;
	cursor: pointer;
}
#navbarDropdownMenuLink span {
	padding-top: 10px;
	display: inline-block;
}

.icon {
	width: 45px;
	position: absolute;
	margin-left: -55px;
	margin-top: 0px;
}
.iconmenu.animate {
	width: 100%;
}
.nav-item.searchexpand {
	width: 70px;
	overflow: hidden;
	transition: .35s all ease;
	padding-right: 30px;
	border-right: 1px solid #fff;
	margin-right: 10px;
	text-align: left;
	cursor:pointer;
	color:transparent;
}
.nav-item.searchexpand:hover {
	width: 160px;
	transition: .35s all ease;
	color:#fff;

}

.searchexpand img {
	width: 40px !important;
	height: 43px !important;
	margin-top: 5px;
	padding-bottom: 0;
	margin-bottom: 0 !important;
}
.searchexpand span {
	font-weight: 500;
	padding: 20px 10px;
	display: block;
	display: none;
}
.dropdown-menu {
	border-radius: 0;
	padding: 0;
}
.dropdown-item {
	font-weight: 500;
	border-bottom: 1px solid #ccc;
	padding: 7.5px 15px;
	font-size: 13px;
}
.container-fluid.footer {
	background-color: #ed1c2c !important;
	color: #fff;
	padding: 20px 20px 0;
}
.footerlogo {
	text-align: center;
	font-size: 25px;
	font-weight: bold;
}
.footerlogo p {
	margin-bottom:0;
}
iconvipsfooter {
	max-width: 140px;
}
.footer ul {
	padding: 0 5%;
}
.footer li {
	list-style: none;
	font-size: 12px;
	font-weight: 500;
	text-transform: uppercase;
	padding: 4px 0;
}
.footer li a{
	color:#fff;
}
.iconsfooter {
	width: 100%;
	float: left;
	position: relative;
	text-align: left;
	padding: 15px 0 !important;
}
.iconsfooter li {
	padding: 0;
	width: 30%;
	min-width: 0;
	margin-left: 0;
	display: inline-block;
	max-width: 40px;
}
.iconsfooter img {
	max-width: 22px;
}
.disclaimerpromos {
	text-align: left;
	font-size: 12px;
	margin: 0;
	padding-left: 15px;
}

.buscadormenu {
	width: 100%;
	position: fixed;
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
	top: 135px;
	opacity: 0;
	left: 0;
}
.scrolled .buscadormenu {
	top: 80px;
}
.buscadormenu.closed {
	height: 0;
	transition: all .35s ease;
	overflow: hidden;
}
.searchm {
	float: left;
	width: 85%;
	color: #fff;
	text-align: center;
	padding: 2em 2.5% 2em 5%;
	transition: .35s all ease;
}
.closebtn {
	float: left;
	width: 15%;
	color: #fff;
	padding: 2em 1em;
}
#iconclose {
	width: 2em;
	height: 2em;
	background: url(/img/close.png);
	background-size: 100%;
	background-repeat: no-repeat;
	cursor: pointer;
}
.leftsearch {
	width: 35%;
	float: left;
}
.buscador {
	width: 100%;
}
.search2 {
	background-image: url(/img/svg/buscaw.svg);
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
	font-family: "Program",‘Trebuchet\ MS’,Helvetica,sans-serif;
	font-size: 1em;
	transition: all .4s ease;
	text-align: center;
	background-color: transparent;
}
.buttons {
	float: left;
	width: 100%;
	text-align: right;
	margin-top: 2em;
}
.txtfilters {
	float: left;
	width: 60%;
	color: #fff;
	padding: 2em 1em;
	transition: .35s all ease;
	text-align: right;
}
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
	cursor: pointer;
	transition: .35s all ease;
}
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
.cleanfilters:hover, .send:hover {
	transition: .35s all ease;
	background: #fff;
	color: #ff1528;
}

.containerchecks {
	width: 33.33%;
	display: inline-block;
	text-align: left;
	vertical-align: top;
}
.itemfilter {
	width: 100%;
	float: left;
	padding: .1em 0;
	font-family: "Program",sans-serif;
	font-size: .9em;
}
.itemfilter {
	font-family: "Program",sans-serif;
	font-size: .9em;
}
.containerchecks label {
	padding-left: .5em;
}
.vipsmenu, .headertopm, .lateralm {
	display:none;
}
.chaticon2 {
	position: fixed;
	background-image: url(img/help.png);
	background-size: 100%;
	height: 213px;
	width: 50px;
	top: 35%;
	right: 0;
	z-index: 10;
	background-repeat: no-repeat;
}

@media(max-width:1024px){
	.buscadormenu {
		top: 90px;
	}
	.containerchecks {
		width: 45%;
	}
	.send {
		padding: 5px 1%;
		width: 45%;
		margin: 0 0 0 2.5%;
	}
	.cleanfilters {
		padding: 5px 1%;
		width: 49%;
		margin: 0 0%;
	}
	.buttons {
		font-size: 15px;
	}
	.navbar-nav {
		padding-top: 5px;
	}
	.navbar-brand {
		width: 100px;
		padding: 0;
	}
	.iconmenu.svg {
	height: 25px;
	margin-bottom: 5.5px;
	}
	.nav-link .spanm {
		font-size: 11px;
	}
	.nav-item.searchexpand:hover {
		width: 110px;
		transition: .35s all ease
		position:relative;
	}
	.nav-item.searchexpand {
		position: relative;
	}
	.nav-item.searchexpand span {
		display: none;
		position: absolute;
		left: 30px;
		z-index: 333;
		top: 0px;
	}
	.footer li a {
		font-size: 11px;
	}
	.footerlogo {
		font-size: 25px;
	}
	.navbar-light .navbar-nav .nav-link {
		padding: 0 15px;
	}
	.chaticon2 {
		height: 160px;
		width: 38px;
	}

}
.scrolled .navbar {
	background-color: #fff !important;
	color: #222;
	box-shadow: 1px 2px 5px #e1e1e1;
	padding: 10px 1.5%;
}
.scrolled .navbar-light .navbar-nav .nav-link {
	color: #222;
}
.scrolled .iconmenu.svg {
	transition: all .35s ease;
	filter: none;
}
.scrolled #navbarDropdownMenuLink {
	color: #222;
}
.scrolled .navbar-brand {
	width: 80px;
	transition: all .35s ease;
}
.scrolled .navbar-nav {
	padding-top: 5px;
	transition: all .35s ease;
}
.scrolled .nav-item.searchexpand:hover {
	color: #222 !important;
}
#small-dialogpass h3 {
	font-size: 18px;
	line-height:1.3;
}
/*----------------TABLET------------------------*/

@media(max-width:900px){
	.container-fluid.footer, .iconsfooter {
	text-align: center;
}
#navbarDropdownMenuLink span {
	display: none;
}
.nav-item.searchexpand:hover {
		width: 70px;
		transition: .35s all ease
		position:relative;
		color:transparent;
}
.dropdown-toggle::after {
	display: none;
}
.navbar-light .navbar-nav .nav-link {
	color: #fff;
	font-weight: 500;
	font-size: 11px;
	text-align: center;
	padding: 0 13px;
}
.vipsmenu {
	min-height: 70px;
}

}

@media(max-width:800px){
.buscadorm *::placeholder{
	color:#e91c2b !important;
}
.iconmenu.animate {
	filter: none;
}
.chaticon2{display:none;}
.maincont, .container-fluid.footer{
	display: none!important;
}
main {
	margin-top: 10vh !important;
	padding-bottom: 10vh;
	max-height: 82vh;
	min-height: 82vh !important;
	overflow-y: auto;
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
	margin-top: 0;
	opacity:0;
	top: 10.3vh;
}
#busqueda {
	width: 100%;
	float: left;
	display: inline-block;
}
.leftsearch {
	width: 100%;
	padding: 5%;
	padding-bottom: 0;
}
.searchm {
	width: 100%;
	padding: 0;
	float: left;
	display: inline-block;
	height: auto;
	margin: 0;
	top: 0;
	position: relative;
}
.closebtn {
	top: 5%;
	position: absolute;
	right: 5%;
	padding: 0;
}
#iconclose {
	width: 25px;
	height: 25px;
	float:right;
}
.buscador {
	width: 85%;
}
.search2 {
	border-bottom: 1.5px solid #fff;
	padding: 10px;
	background-size: 30px;
	font-size: 13px;
}
.buttons {
	text-align: center;
	margin-top: 2.5%;
}
.txtfilters {
	width: 100%;
	padding: 0 5%;
	text-align: left;
}
.containerchecks {
	width: 100%;
}
.headertopm {
	background: #fff;
	width: 100%;
	position: fixed;
	top: 0;
	height: 10vh;
	max-height: 90px;
	padding: 0px 2.5%;
	display: table;
	vertical-align: middle;
	box-shadow: -1px 1px 10px #888;
	z-index: 999;
}
.headertopm div {
	display: table-cell;
	vertical-align: middle;
	/* top: 0; */
	float: none;
}
.logovipsm img{
	width: 100%;
	height: auto;
	max-width: 75px;
}
.iconmenu.animate {
	width: 100%;
	max-width: 55px;
}
.avatarm a {
	float: left;
	width: 100%;
}
.buscadorm {
	width: 70%;
	text-align: center;
	padding: 0 5%;
}
.avatarm {
	width: 15%;
	padding: 1.5%;
}
.search {
	border: none;
	border-bottom: 2px solid #e91c2b;
	color: #e91c2b;
	padding: 2vh 2w;
	width: 100%;
	/* max-width: 300px; */
	background-image: url(/img/lupa.png);
	background-size: 35px;
	background-repeat: no-repeat;
	background-position: left center;
	padding: 0;
	font-size: 14px;
	transition: all .4s ease;
	text-align: center;
	height: 45px;
	border-radius: 0;
	-webkit-appearance: none;
	max-height: 9vh;
}
.vipsmenu {
	display: block;
	position: fixed;
	width: 100%;
	float: left;
	background: #e9e9e9;
	text-align: center;
	padding: 2.5%;
	transition: all .4s ease;
	bottom: 0;
	z-index: 99999;
	height: 9vh;
	overflow: hidden;
	min-height: 70px;
}
.vipsmenu ul li {
	width: 20%;
	display: inline-block;
	text-align: center;
	min-height: 9vh;
	float: left;
	overflow: hidden;
}
.vmenuitem .svg {
	width: 40%;
	max-height: 4vh;
	height: 5vh;
	filter: none !important;
}
.vipsmenu ul li span {
	width: 100%;
	display: inline-block;
	font-family: "Program",sans-serif;
	font-size: 11px;
	float: left;
	color: #2d2d2d;
}
.vipsmenu ul {
	width: 100%;
	float: left;
	padding: 0;
}
.lateralm {
	display: block;
	width: 100%;
	position: fixed;
	text-align: left;
	top: 10vh;
	z-index: 9;
	transition: .3s all ease-in;
	right: -100%;
	height: 80vh;
	overflow: auto;
	padding-bottom: 10vh;
	padding-top: 3vh;
	background:#fff;
}
.lateralm.openlateral {
	transition: .35s all ease;
	right: 0;
}
#timeusernl {
	padding-top: 7.5px;
	display: inline-block;
}
.menu ul li {
	position: relative;
	list-style: none;
	width: 100%;
	margin: 0 auto;
	padding: .5em;
	border-top: none;
	box-shadow: none;
	float: left;
}
.menu ul li:first-child {
	margin-top: 0;
	border: 0;
	box-shadow: none;
}
.iconmmenuc {
	width: 20%;
	float: left;
	text-align: center;
}
.textmenu {
	width: 80%;
	float: left;
	padding: 2%;
	color: #2d2d2d;
}
.iconmmenus {
	width: 100%;
	vertical-align: middle;
	height: auto;
	padding: 0 30%;
	max-height: 1.8em;
}
.panelmenu {
	padding: 0;
	float: left;
	width: 100%;
	list-style: none;
}
.panelmenu a {
	width: 100%;
	float: left;
	background: #fff;
}

.cuentali img {
	width: 20vw;
	border-radius: 50%;
	padding: 15%;
	height: 20vw;
	object-fit: cover;
	object-position: center;
}
}

@media(max-width:400px){
	.vipsmenu {
	min-height: 50px;
}
.buttons {
	font-size: 13px;
}
}

</style>
  </head>
  <body>
  <div class="splash"></div>
    <div class="container-fluid maincont">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-expand fixed-top">

			 <a class="navbar-brand" href="/"><img src="/img/svg/LOGO_VIPS.svg"></a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							 <a class="nav-link" href="/menu"><img class="iconmenu svg" src="/img/svg/menu.svg" alt="Menú Vips" title="Menú Vips"><br>
						<span class="spanm">MENÚ VIPS</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="/"><img class="iconmenu svg" src="/img/svg/domicilio.svg" alt="A Domicilio" title="A Domicilio"><br>
					<span class="spanm">A DOMICILIO</span></a>
						</li>

						<li class="nav-item">
							 <a class="nav-link" href="/cupones"><img class="iconmenu svg" src="/img/2019/Promociones.svg" alt="Promociones" title="Promociones"><br>
					<span class="spanm">CUPONES</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="/vipstorias"><img class="iconmenu svg" src="/img/svg/experiencias.svg" alt="Vipstorias" title="Vipstorias"><br>
					<span class="spanm">VIPSTORIAS</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="/cupones"><img class="iconmenu svg" src="/img/svg/ubicaciones.svg" alt="Restaurantes" title="Restaurantes"><br>
					<span class="spanm">RESTAURANTES</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="/vipstorias"><img class="iconmenu svg" src="/img/svg/facturas.svg" alt="Facturas" title="Facturas"><br>
					<span class="spanm">FACTURAS</span></a>
						</li>

						<li class="nav-item searchexpand">
							 <img class="iconmenu svg" src="/img/svg/busca.svg" style="width: 2.5em; height: 3em;">
						<span >¿ANTOJO?</span>
						</li>

						<li class="nav-item dropdown">
							 <a <?php if($sesion == true){ echo 'class="nav-link dropdown-toggle" href="/perfil"';} else{echo 'class="nav-link dropdown-toggle openpoplogin"';}?> id="navbarDropdownMenuLink" data-toggle="dropdown"><div class="icon">
					<img class="iconmenu animate" src="<?php echo $avatarimg;?>" style="<?php echo $marginavatar;?>" >
					</div><span>MI TARJETA <br> DE LEALTAD</span></a>
					<?php if($sesion == true){
					echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="/perfil">MI PERFIL</a> <a class="dropdown-item" href="/logout">CERRAR SESIÓN</a>

							</div>';

						}
					?>

						</li>

					</ul>




				</div>
			</nav>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="buscadormenu closed" style="opacity: 1;">
		<div class="searchm searchm2" googl="true">
			<form method="post" action="/buscar" id="busqueda">
				<div class="leftsearch">
					<div class="buscador">
						<input class="search2 buscainput" name="termino" id="q" placeholder="" type="text" required="">
					</div>
					<div class="buttons">
						<a class="cleanfilters">Limpiar Filtros</a>
						 <button class="send" type="submit">Aceptar</button>
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
						<div class="itemfilter"><input id="sorpresa" name="sorpresa" type="checkbox" class="roundcheck" value="sorpresa"><label for="sorpresa">Sorpréndeme</label></div>
					</div>
				</div>
			</form>
		</div>
	  <div class="closebtn">
		<div id="iconclose"></div>
	  </div>
	</div>
</div>

<!--//////////////////HEADER MOBILE////////////-->
<div class="headertopm">
	<div class="logovipsm">
		<a href="/"><img src="/img/svg/LOGO_VIPS.svg"></a>
	</div>
	<div class="buscadorm searchexpand">
		<form googl="true">
			<input class="search " minlength="3" type="text" name="q1" id="q1" placeholder="¿Se te antoja algo?" style="pointer-events:none;">
		</form>
	</div>
	<div class="avatarm">
		<a <?php if($sesion == true){ echo 'href="/perfil"';} else{ echo 'href="/cuenta"';}?>>
			<div class="iconm">
				<img class="iconmenu animate" src="<?php echo $avatarimg;?>" style="<?php echo $marginavatar;?>" >
			</div>
		</a>
	</div>
</div>

<!--//////////////////MENÚ INFERIOR MOBILE////////////-->
<div class="vipsmenu">
	<ul>
		<a href="/m" class="linkmenu-m">
			<li class="vmenuitem" data-div="#homehome">
				<img class="iconmenu svg" src="/img/svg/home.svg">
				<span class="spanm">Inicio</span>
			</li>
		</a>
		<a href="/cupones-m" class="linkmenu-m linkpromos">
			<li class="vmenuitem" data-div="#beneficioshome">
				<img class="iconmenu svg animate" src="/img/2019/Promociones.svg">
				<span class="spanm">Cupones</span>
			</li>
		</a>
		<a href="/menu" class="linkmenu-m">
			<li class="vmenuitem itemmenuvips" data-div="#menuhome">
				<img class="iconmenu svg" src="/img/svg/menu.svg">
				<span class="spanm">Menú Vips</span>
			</li>
		</a>
		<a href="/domicilio" class="linkmenu-m">
			<li class="vmenuitem" data-div="#domiciliohome">
				<img class="iconmenu svg" src="/img/svg/domicilio.svg">
				<span class="spanm">A Domicilio</span>
			</li>
		</a>
		<a href="#" class="nav-toggle">
			<li class="vmenuitem" data-div="#mashome">
				<img class="iconmenu svg" src="/img/svg/mas.svg">
				<span class="spanm">Más</span>
			</li>
		</a>

	</ul>
</div>

<!--//////////////MENU LATERAL MOBILE/////////////////-->
<div class="lateralm">
	<ul class="panelmenu">
		<a href="/perfil" style="display: inline-block; float:left;position:relative;">
			<li class="cuentali">
				<div class="iconmmenuc">
					<img class="iconmmenu svg" src="<?php echo $avatarimg; ?>">
				</div>
				<?php
					if($sesion == true ){
						$msglog ='
						<div class="textmenu"><span class="timeuser" id="timeusernl"></span><span id="namespan">, '.ucwords($nombre).'!</san><br>
							<span>Cuenta y configuración</span>
						</div>
						';
					}
					else{
						$msglog = '
						<div class="textmenu"><span class="timeuser"  id="timeusernl"></span><span style="font-size: 1em; color: #666;">!</span><br>
							<span>Inicia sesión para administrar tu cuenta</span>
						</div>
						';
					}

					echo $msglog;
				?>
			</li>
		</a>

		<a class="link-lateral" href="/ubicaciones">
		<li>
			<div class="iconmmenuc">
				<img class="iconmmenus svg" src="/img/svg/ubicaciones.svg">
			</div>
			  <div class="textmenu">Restaurantes<br></div>
		</li>
		</a>

		<a class="link-lateral" href="/vipstorias">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/experiencias.svg">
				</div>
				<div class="textmenu">Vipstorias<br></div>
			</li>
		</a>

		<a class="link-lateral"  href="https://alsea.interfactura.com/RegistroDocumento.aspx?opc=Vips" target="_blank">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/facturas.svg">
				</div>
				<div class="textmenu">Facturas<br>
				</div>
			</li>
		</a>

		<a class="link-lateral" href="/atencion-m">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/AtencionAlInvitado.svg">
				</div>
				<div class="textmenu">Atención al invitado<br></div>
			</li>
		</a>

		<a class="link-lateral" href="/cupones">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/2019/Promociones.svg">
				</div>
				<div class="textmenu">Cupones<br></div>
			</li>
		</a>

		<a class="link-lateral" href="/tdl-vips-m">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/cuenta.svg">
				</div>
				<div class="textmenu">Tarjeta de Lealtad Vips<br></div>
			</li>
		</a>

		<a class="link-lateral" href="/aviso-privacidad-m">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/terminos.svg">
				</div>
				<div class="textmenu">Aviso de privacidad<br></div>
			</li>
		</a>

		<a class="link-lateral" href="terminos-y-condiciones-m">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/legal.svg">
				</div>
				<div class="textmenu">Términos y condiciones<br></div>
			</li>
		</a>

		<a class="link-lateral" href="/somos-vips-m">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/somos.svg">
				</div>
				<div class="textmenu">Somos Vips<br></div>
			</li>
		</a>

		<a class="link-lateral" href="#" onclick="addToHomescreen2();">
			<li>
				<div class="iconmmenuc">
					<img class="iconmmenus svg" src="/img/svg/acceso.svg">
				</div>
				<div class="textmenu">Agregar a pantalla de inicio<br></div>
			</li>
		</a>

		<?php
		if($sesion == true ){ ?>
			<a href="logout">
				<li>
					<div class="iconmmenuc" style="padding: 2.5%; width: 20%;">
						<img class="iconmmenus svg" src="/img/svg/logout.svg">
					</div>
					<div class="textmenu">Cerrar sesión<br></div>
				</li>
			</a>
		<?php
		} ?>
	</ul>
</div>
