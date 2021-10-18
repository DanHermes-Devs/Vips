<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    header('Location: /selvamagica-m');
    exit(0);
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
	padding: 0 5%;
	overflow: auto;
}
.abcont {
	width: 100%;
	position: relative;
	top: 0;
	padding: 5%;
	text-align: center;
}
.logoselva {
	width: 22.5%;
}
.abcont h3 {
	color: #feea83;
	padding: 5% 10%;
	line-height: 1.25;
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
	margin-top: 7.5%;
	margin-left: 0;
	padding: 0;
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

.footer {
	margin-top: -6px;
}
main {
	background: url(/img/2019/juego/Pantallas_fondo.png);
	height: 100%;
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: right bottom;
	display: inline-block;
}
.leftcont {
	float: left;
	width: 50%;
	
	position: relative;
}
.bannerleft img{width:100%; margin-top:-6px;}
.imgcont {
	float: left;
	margin: 0;
	margin-top: 0;
	display: inline-block;
	width: 100%;
	position: relative;
	padding: 0 5%;
	overflow: auto;
}

.abcont h3 {
	color: #feea83;
	padding: 2.5% 20%;
	line-height: 1.25;
}
.btnjugar {
	width: 15%;
	min-width: 160px;
}
.legales {
	position: relative;
	width: 100%;
	color: #feea83;
	margin-top: 3.5%;
	margin-left: 0;
	padding: 0;
}
#scroll {
	position: absolute;
	top: 90%;
	/* background: red; */
	right: 1.5%;
	z-index: 22;
}
#scroll img {
	width: 50px;
	padding: 0;
	margin-top: 0;
}
.floating {  
    animation-name: floating;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}
@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }    
}
.grow{transition:all .35s ease}.grow:hover{transform:scale(1.1)}
</style>

<?php include('headerjuego.php'); ?>
<img class="banner" src="/img/2019/juego/banner_largo.jpg">
<a href="https://www.xcaret.com/es/xcaret-adventure/" target="_blank"><img class="banner" src="/img/2019/juego/bannerpleca.jpg" style="margin-top:-6px;"></a>
<div class="leftcont" style="display:none;">
			<div class="bannerleft">
				<img src="/img/2019/juego/banner_desktop.jpg">
			</div>
</div>
<a href="#comenzar" id="scroll" class="scrollto"><img class="grow floating" src="/img/2019/juego/down-arrow.png" googl="true"></a>
<div class="imgcont" id="comenzar">
	
	<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
		<h3>
			Juega y acumula puntos registrando un ticket que refleje la compra de un Divertipack de Disney <a href="/selvamagica-tyc">dentro de la vigencia</a>, para ganar un viaje todo pagado para ti y tu familia <br>
			<span>¡A LA RIVIERA MAYA!</span>
		</h3>
		
		<a href="/selvamagica-instrucciones"><img class="btnjugar grow" src="/img/2019/juego/jugar.png"></a>
		
		<div class="legales">
			<ul>
				<a href="selvamagica-premio"><li>Premio</li></a>
				<a href="selvamagica-tyc"><li class="lines">Términos y condiciones</li></a>
				<a href="selvamagica-aviso"><li>Aviso de privacidad</li></a>
			</ul>
		</div>
	</div>
</div>


<script>
function  checkHeight(){
		setTimeout(function(){
			var wh = $(window).height();
			var lch = $(".leftcont").height();
			//$(".imgcont").css("height", lch +"px");
			//$(".imgcont").css("max-height", lch +"px");
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

