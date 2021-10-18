<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    header('Location: /selvamagica-instrucciones-m');
    exit(0);
}
	if(isset($_COOKIE['persistID']))
	{
		$userid =   $_COOKIE['persistID'];
		session_start();
	   $_SESSION['uservips'] = $userid;
	}
	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];
		$linkjuego2 = '/selvamagica-bienvenido';
		$imagenbtn = 'jugar.png';
		$txtlogin = '';
	}
	else{
		$linkjuego2 = '/selvamagica-registro';
		$imagenbtn = 'registrate_grande.png';
		$txtlogin = '<p class="txtlogin">¿Ya tienes cuenta? <a href="/selvamagica-registro">Inicia sesión</a></p>';
	
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
	width: 25%;
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
	margin-top: 2.5%;
	margin-left: 0;
	padding: 0 7.5%;
	z-index: 4;
	display: inline-block;
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
	background: url(/img/2019/juego/pleca_madera2.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	color: #7f4f1c;
	font-size: 15px;
	padding: 15% 23% 25% 23%;
	margin-top: -5%;
}
.tablero h4 {
	font-size: 18px;
	padding-top: 10%;
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
	padding: 0 10%;
	margin-top: 5%;
	float: left;
	margin-bottom: 2.5%;
}

.btnjugar {
	width: 50%;
	float: left;
	padding: 0 10%;
}
.leftcont {
	float: left;
	width: 50%;
	background: url(/img/2019/juego/rey.png);
	height: 100vh;
	background-position: bottom left;
	background-size: cover;
	position:relative;
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
	right: 5%;
	bottom: 10%;
}
.imginstrucciones {
	width: 60%;
	float: left;
	margin: 0 20%;
}

@media(max-width:1300px){
	.tablero {
	background: url(/img/2019/juego/pleca_madera.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	color: #7f4f1c;
	font-size: 15px;
	padding: 15% 23% 25% 23%;
	margin-top: -5%;
}
.tablero h4 {
	font-size: 18px;
	padding-top: 30%;
	margin: 0;
}
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
		
		<div class="tablero" style="display:none;">
			<h4>Instrucciones</h4>
			<p><span>1.</span> Regístrate o ingresa a tu cuenta  </p>

			<p><span>2.</span> Para jugar apunta y dirige las pelotas al tocar la pantalla, para generar puntos junta pelotas del mismo color   </p>

			<p><span>3.</span> Si las pelotas de arriba tocan tu resortera, terminará el juego </p>

			<p><span>4.</span> Al terminar registra un ticket de Vips para acumular los puntos* en tu perfil y poder ganar el viaje a la Riviera Maya </p>

			<p>Te recomendamos registrar el ticket cuando hayas sumado una gran catidad de puntos, ya que solamente se registran los puntos de un juego por ticket.   </p>
		
		</div>
		
		<img class="imginstrucciones" src="/img/2019/juego/instrucciones.png">
		
		<div class="botones">
		<a href="/selva-magica/normal"><img class="btnjugar" src="/img/2019/juego/Probarjuego.png" onclick="startgame('Prueba');"></a>
		<a href="<?php echo $linkjuego2;?>"><img class="btnjugar" src="/img/2019/juego/<?php echo $imagenbtn;?>" onclick="startgame('Prueba');"></a>
		</div>
		
		<?php echo $txtlogin;?>
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
			$(".leftcont").css("max-height", lch +"px");
		},500)	
	}
	
	$(document).ready(function () {
		checkHeight();
		setTimeout(function(){
			$(window).trigger('resize');
		},100)
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
	function startgame(tipo){
		gtag('event', 'Juego Iniciado', {
		 'event_category': 'Juego Disney',
		 'event_label': tipo
		});

	};
</script>

<!-- Footer =============================-->

<?php include('footer.php');?>

