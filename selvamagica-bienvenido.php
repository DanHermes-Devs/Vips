<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    header('Location: /selvamagica-bienvenido-m');
    exit(0);
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
}

?>

<div class="main">
<main role="main">
<style>
main {
    width: 100%;
}

.banner{width:100%;}

.b2 {
	margin-top: -6px;
}
.imgcont {
	float: left;
	margin: 0;
	margin-top: 0;
	display: inline-block;
	width: 50%;
	position: relative;
}
.abcont {
	width: 100%;
	position: relative;
	top: 0;
	padding: 5%;
	text-align: center;
}
.logoselva {
	width: 35%;
}
.abcont h3 {
	color: #feea83;
	padding: 5% 10%;
}
.abcont h3 span {
	padding: 10px;
	width: 100%;
	display: inline-block;
	font-size: 22px;
}
.btnjugar {
	width: 25%;
}

.legales {
	position: relative;
	width: 100%;
	/* color: red; */
	color: #feea83;
	margin-top: 12%;
	margin-left: 0;
	padding: 0 7.5%;
}
.legales li {
	width: 30%;
	display: inline-block;
	margin: 0;
	float: left;
	padding: 0;
	font-size: 15px;
	text-align: center;
}
.lines {
	border-left: 1px solid #feea83;
	width: 40% !important;
	border-right: 1px solid #feea83;
}


.menuicon {
	width: 33px;
	height: 33px;
	position: fixed;
	background: url(/img/2019/juego/menu.png);
	background-size: 100%;
	margin-top: 10px;
	right: 10px;
	z-index: 3;
	cursor:pointer;
}
.menujuego {
	position: fixed;
	background: rgba(0,0,0,.85);
	padding: 5%;
	z-index: 4;
	text-align:center;
	width:100%;
	height:100%;
	display:none;
}
.menuiconclose {
	width: 30px;
	height: 30px;
	background: url(/img/close.png);
	background-size: 100%;
	right: 10px;
	position: fixed;
}
.logos {
	width: 100%;
	float: left;
	padding: 30px 0;
}
.logos li {
	width: 33.3%;
	float: left;
	padding: 5% 7%;
	text-align: center;
}

.logos li img {
	width: 100%;
	
}
.navjuego {
	width: 100%;
	float: left;
	color: #fff;
}
.navjuego li {
	padding: 12.5px;
	font-size: 20px;
	font-weight: 500;
}
.logoxcaret {
	padding-top: 20%;
}
.txtlogin {
	color: color: #feea83;
	color: #feea83;
	font-size: 16px;
	float: left;
	width: 100%;
	margin: 2.5% 0;
}
.txtlogin a {
	font-weight:500;
}
.tablero {
	background: url(/img/2019/juego/pleca_madera.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	color: #7f4f1c;
	font-size: 12px;
	padding: 15% 20% 25% 20%;
	margin-top: -15%;
}
.tablero h4 {
	font-size: 18px;
	padding-top: 30%;
	margin: 0;
}

.tablero p {
	text-align:left;
}
.tablero p span {
	font-weight: bold;
	font-size: 14px;
	3: ;
}
.botones {
	width: 100%;
	padding: 5% 10%;
	float: left;
	text-align: center;
}
.btnjugar {
	width: 40%;
	float: none;
	padding: 0;
	margin-bottom: 5%;
	max-width: 150px;
}
.textobienvenida p {
	color: #feea83;
	padding: 0 5%;
	font-size: 15px;
}
h4 {
	color: #feea83;
	font-size: 20px;
	padding: 0;
}
.leftcont {
	float: left;
	width: 50%;
	background: url(/img/2019/juego/rey.png);
	height: 100vh;
	background-position: bottom center;
	background-size: cover;
	position: relative;
}
.footer {
	margin-top: -6px;
}
main {
	background: url(/img/2019/juego/Pantallas_fondo.png);
	height: 100%;
	background-repeat: no-repeat;
	background-size: 50% 100%;
	background-position: right bottom;
	display: inline-block;
}

.bannerleft img {
	position: absolute;
	width: 40%;
	right: 10%;
	bottom: 10%;
}


</style>

<?php include('headerjuego.php'); ?>
<div class="leftcont">
	<div class="bannerleft">
		<img src="/img/2019/juego/reyleonlogo_blanco.png">
		<img src="/img/2019/juego/2019Disney_dorado.png" class="logodisney">
	</div>
</div>
<div class="imgcont">
	
		<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
		<div class="textobienvenida">
			<h4>Bienvenido(a), <?php echo ucwords($nombre);?></h4>
			<p>Empieza a jugar y registra tu ticket para que puedas participar y ganar un viaje </p>
			
			<h3>??A LA RIVIERA MAYA!</h3>
			
			<P>Te recomendamos registrar el ticket cuando hayas sumado una gran catidad de puntos, ya que solamente se registran los puntos de un juego por ticket. </p>
		
		</div>
		
		<div class="botones">
		<a href="/selvamagica-comenzar-m"><img class="btnjugar" src="/img/2019/juego/jugar.png"></a>
		
		</div>
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
				<a href="selvamagica-tyc"><li class="lines">T??rminos y condiciones</li></a>
				<a href="selvamagica-aviso"><li>Aviso de privacidad</li></a>
			</ul>
		</div>
	</div>
</div>


<script>
function  checkHeight(){
		setTimeout(function(){
			var wh = $(window).height();
			var lch = $(".imgcont").height();
			$(".leftcont").css("height", lch +"px");
			$(".leftcont").css("max-height", lch +"px");
		},500)	
	}
	
	$(document).ready(function () {
		checkHeight();
	});
	
	$(window).on('resize', function(){
      checkHeight();
	});
	function openMenu(){
		$(".menujuego").fadeIn();
	}
	
	function closeMenu(){
		$(".menujuego").fadeOut();
	}
</script>

<!-- Footer =============================-->

<?php include('footer.php');?>

