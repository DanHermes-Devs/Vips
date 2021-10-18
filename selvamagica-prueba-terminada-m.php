<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /selvamagica-prueba-terminada');

  exit(0);

}

?>







<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





<style>
main {
    width: 100%;
    padding-top: 6vh;
}
#site-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    overflow-y: auto;
    padding-bottom: 9vh;
}
.banner{width:100%;}

.b2 {
	margin-top: -6px;
}
.imgcont {
	float: left;
	margin: 0;
	margin-top: -7px;
	display: inline-block;
	width: 100%;
	position: relative;
}
.abcont {
	width: 100%;
	position: absolute;
	top: 0;
	padding: 5% 0;
	text-align: center;
}
.logoselva {
	width: 40%;
}
.abcont h3 {
	color: #feea83;
	padding: 10% 0;
}

.abcont h3 span {
	padding: 10px;
	width: 100%;
	display: inline-block;
	font-size: 22px;
}

.btnjugar {
	width: 55%;
}

.legales {
	position: relative;
	width: 100%;
	color: red;
	color: #feea83;
	margin-top: 0;
	margin-left: 0;
	float: left;
}
.legales li {
	width: 30%;
	display: inline-block;
	margin: 0;
	float: left;
	padding: 0;
	font-size: 12px;
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
	/* color: color: #feea83; */
	color: #feea83;
	font-size: 20px;
	float: left;
	width: 100%;
	margin: 5% 0;
	/* float: left; */
	/* width: 100%; */
	margin-top: -12%;
	font-weight: bold;
}

.txtlogin a {
	font-weight:500;
}

.tablero {
	background: url(/img/2019/juego/pleca_madera2.png);
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
	padding-top: 20%;
	margin: 0;
	padding-bottom: 5%;
}

.tablero p {
	text-align: center;
}
.tablero p span {
	font-weight: bold;
	font-size: 14px;
	3: ;
}
.botones {
	width: 100%;
	padding: 2.5% 5%;
	float: left;
	text-align: center;
	padding-top: 0;
}
.btnjugar {
	width: 40%;
	float: none;
	padding: 0;
	margin-bottom: 5%;
}
.imgtablero {
	width: 90%;
}
</style>
<div class="main">
<?php include('headerjuego.php'); ?>
<img class="banner" src="/img/2019/juego/banner6.png">
<div class="imgcont">
	<img class="banner b3" src="/img/2019/juego/Pantallas_fondo.png">
	
	<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
		<div class="tablero" style="display:none;">
			<h4>Tu partida de prueba ha terminado</h4>
			<p>Para empezar a acumular puntos y poder participar en el concurso, regístrate e ingresa tus tickets que incluyan paquetes del menú infantil de Disney® en Vips</p>
		
		</div>
		
		<img class="imgtablero" src="/img/2019/juego/prueba_terminado.png">
		
		<div class="botones">
		<a href="/selvamagica-registro-m"><img class="btnjugar" src="/img/2019/juego/registrate_grande.png"></a>
		
		</div>
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
				<a href="/selvamagica-tyc"><li class="lines">Términos y condiciones</li></a>
				<a href="selvamagica-aviso"><li>Aviso de privacidad</li></a>
			</ul>
		</div>
	</div>
</div>
</div>

<script>
	function openMenu(){
		$(".menujuego").fadeIn();
	}
	
	function closeMenu(){
		$(".menujuego").fadeOut();
	}
</script>

  <!-- Footer =============================-->

  <?php include('footerm.php');?>

