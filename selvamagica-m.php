<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /selvamagica');

  exit(0);

}

?>







<div class="main">
<?php include('lateral.php');?>
<main role="main">
<style>
main {
    width: 100%;
    padding-top: 5vh;
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
.abcont{width:100%; position:absolute; top:0; padding:10%; text-align:center;}
.logoselva {
	width: 70%;
}
.abcont h3 {
	color: #feea83;
	padding: 10% 0;
	line-height: 1.4;
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
	position: absolute;
	width: 100%;
	color: red;
	color: #feea83;
	margin-top: 25%;
	margin-left: 0;
	text-align: center;
	left: 0;
}
.legales li {
	width: auto;
	display: inline-block;
	margin: 0;
	float: none;
	padding: 0 10px;
	font-size: 12px;
	text-align: center;
}
.lines {
	border-left: 1px solid #feea83;
	width: auto;
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
</style>
<div class="main">
<?php include('headerjuego.php'); ?>
<img class="banner" src="/img/2019/juego/banner1.png">
<a href="https://www.xcaret.com/es/xcaret-adventure/" target="_blank"><img class="banner" src="/img/2019/juego/bannerpleca.jpg" style="margin-top:-6px;"></a>
<div class="imgcont">
	<img class="banner b3" src="/img/2019/juego/Pantallas_fondo.png">
	
	<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
		<h3>
			Juega y acumula puntos registrando un ticket que refleje la compra de un Divertipack de Disney  <a href="/selvamagica-tyc">dentro de la vigencia</a>
			<span>¡A LA RIVIERA MAYA!</span>
		</h3>
		
		<a href="/selvamagica-instrucciones-m"><img class="btnjugar" src="/img/2019/juego/jugar.png"></a>
		
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
				<a href="selvamagica-tyc"><li class="lines">Términos y condiciones</li></a>
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

