<?php
session_start();
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    header('Location: /selvamagica-premio-m');
    exit(0);
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-scroll/1.3.2/slimscroll.js"></script>
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
	padding-bottom:0;
}
.logoselva {
	width: 25%;
	display:none;
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
	color: #feea83;
	margin-top: 0%;
	margin-left: 0;
	padding: 0 7.5%;
	display: inline-block;
	margin-bottom:2.5%;
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
	color: #feea83;
	font-size: 23px;
	float: left;
	width: 100%;
	margin: 0;
	font-weight: 500;
	margin-top: 5%;
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
	padding: 5% 10% 25% 10%;
	margin-top: -5%;
}
.tablero h4 {
	font-size: 18px;
	padding-top: 20%;
	margin: 0;
	padding-bottom: 5%;
}

.tablero p {
	text-align: center;
	padding: 0 15%;
	font-size: 15px;
}
.tablero p span {
	font-weight: bold;
	font-size: 17px;
	
}
.botones {
	width: 100%;
	padding: 2.5% 20% 2.5%;
	float: left;
	text-align: center;
}
.btnjugar {
	width: 40%;
	float: none;
	padding: 0;
	margin-bottom: 5%;
	cursor: pointer;
}
.ingresa {
	color: #feec90;
	padding: 0 20%;
	text-align: left;
	font-weight: 500;
	margin-top: -2.5%;
}
#ticket {
	width: 60%;
	height: 35px;
	background: #feec90;
	color: #222;
	border: none;
	border-radius: 10px;
	appeareance: none;
	padding: 5px 10px;
	font-weight: 500;
	font-family: "Program",sans-serif;
	font-size: 19px;
}
#infoticket {
	position: absolute;
	right: 20%;
	background: #feec90;
	color: red;
	padding: 5px 10px;
	border-radius: 13px;
	font-weight: bold;
	cursor: pointer;
}
.ticketpop {
	position: fixed;
	background: rgba(0,0,0,.85);
	padding: 5%;
	z-index: 4;
	text-align: center;
	width: 100%;
	height: 100%;
	display: none;
	top: 0;
	padding-top: 10vh;
	color: #fff;
	overflow-y: auto;
}
.ticketiconclose {
	width: 30px;
	height: 30px;
	background: url(/img/close.png);
	background-size: auto;
	background-size: 100%;
	right: 15px;
	position: fixed;
	margin-top: 10px;
}
.ticketpop img {
	width: 70%;
	display: inline-block;
	margin-bottom: 20vh;
	max-width: 300px;
}
#respuestaticket {
	color: #fff;
}
.leftcont {
	float: left;
	width: 50%;
	background: url(/img/2019/juego/pumba.png);
	height: 100vh;
	background-position: bottom center;
	background-size: cover;
	position: relative;
}
.footer {
	margin-top: 0px;
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
	right: 30%;
	top: 5%;
}
@media(max-width:1200px){
	.tablero {
	background: url(/img/2019/juego/pleca_madera.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	color: #7f4f1c;
	font-size: 12px;
	padding: 20% 10% 25% 10%;
	margin-top: -5%;
}
}

.imgtablero{
	width: 60%;
	float: left;
	margin: 0 20%;
}
</style>

<?php include('headerjuego.php'); ?>
<div class="leftcont">
	<div class="bannerleft">
		<img src="/img/2019/juego/reyleonlogo_blancob.png">
		<img src="/img/2019/juego/2019Disney_blanco.png" class="logodisney">
	</div>
</div>
<div class="imgcont slimScroll">
	
	<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
		<div class="tablero" style="display:none;">
			<h4>Premios</h4>
			<p>Ganarás un viaje <span>cuádruple</span> a la <span>Riviera Maya</span> que incluye lo siguiente: </p>

			<p><span>1.</span> Boletos de avión viaje redondo: Desde el aeropuerto más cercano a su ciudad de origen - Cancún - Aeropuerto más cercano a su ciudad de origen - Transportación terrestre Aeropuerto - Hotel - Aeropuerto</p>

			<p><span>2.</span> Transportación a los parques </p>

			<p><span>3.</span> Hospedaje de 4 días 3 noches para los ganadores en Hotel todo incluido en la Riviera Maya </p>

			<p><span>4. </span> Entradas a los parques participantes. <span>(Xplor y Xavage)</span> </p>
		
		</div>
		
		<img class="imgtablero" src="/img/2019/juego/premios.png">
		
		
		<p class="txtlogin">¿Estás listo?</p>
		<div class="botones">
		<a href="/selvamagica-comenzar-m"><img class="btnjugar" src="/img/2019/juego/jugar.png"></a>
		
		</div>
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
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
			var lch = $(".imgcont").height();
			$(".leftcont").css("height", lch +"px");
			$(".imgcont").css("max-height", lch +"px");
		},500)	
	}
	
	$(document).ready(function () {
		checkHeight();
		setTimeout(function(){
			$(window).trigger('resize');
		},1000)
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