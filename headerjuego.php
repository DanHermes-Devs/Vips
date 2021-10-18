<?php
	if(isset($_COOKIE['persistID']))
	{
		$userid =   $_COOKIE['persistID'];
		session_start();
	   $_SESSION['uservips'] = $userid;
	}
	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];
		$linkjuego = '/selvamagica-bienvenido';
		$linkpuntos = '<a href="/selvamagica-puntos"><li>Mis puntos</li></a>';
	}
	else{
		$linkjuego = '/selvamagica';
		$linkregistro = '<a href="/selvamagica-registro" style=""><li>Registro</li></a>';
		$linkpuntos = '';
	}
?>
<style>
.logos li {
	width: 20%;
	float: left;
	padding: 5%;
	text-align: center;
}

@media(min-width:900px){
.logos {
	width: 60%;
	margin: 0 20%;
	padding: 0;
}
.logos li {
	width: 20%;
	float: left;
	padding: 2.5% 5%;
	text-align: center;
}
.navjuego {
	width: 100%;
}
.navjuego li {
	padding: 22px;
	font-size: 20px;
	font-weight: 500;
}
.menuicon {
	top: 126px;
}
.scrolled .menuicon {
	top: 80px;
}
.menujuego {
	padding: 2.5% 5%;
	z-index: 55;
}
}

.legales {
	margin-left: 0;
}

.legales li {
	width: auto;
	display: inline-block;
	margin: 0;
	float: none;
	padding: 0 15px;
	text-align: center;
	font-size: 14px;
}
.lines {
	border-left: 1px solid #feea83;
	width: auto!important;
	border-right: 1px solid #feea83;
}
.menuicon {
	margin-top: 15px;
}
@media(max-width:800px){
	.legales li {
	width: auto;
	display: inline-block;
	margin: 0;
	float: none;
	padding: 0 10px;
	text-align: center;
	font-size: 12.5px;
}
}

.bannerleft img.logodisney {
	width: 16%;
	left: 5%;
	bottom: 8.5%;
	top: auto;
}
.scrolled .menujuego {
	top: 70px;
}
</style>
<div class="menuicon" onclick="openMenu();"></div>
<div class="menujuego">
<div class="menuiconclose" onclick="closeMenu();"></div>
	<ul class="logos">
		<li><img class="logovips" src="/img/svg/LOGO_VIPS.svg"></li>
		<li><img class="logodivertipack" src="/img/2019/juego/logo-divertipack.png"></li>
		<li><img class="logoxcaret" src="/img/2019/juego/logo_xcaret.png"></li>
		<li><img class="logoxcaret" src="/img/2019/juego/explor.png"></li>
		<li><img class="logoxcaret2" src="/img/2019/juego/AD-REVISTA-XC-ADVENTURE-CHICA-fondo-nuevo-5-JUNIO.gif"></li>
		
	</ul>
	
	<ul class="navjuego">
		<a href="<?php echo $linkjuego;?>"><li>Juego</li></a>
		<a href="/selvamagica-instrucciones"><li>Instrucciones</li></a>
		<a href="/selvamagica-tyc"><li>Bases</li></a>
		<a href="/selvamagica-premio"><li>Premio</li></a>
		
		<?php echo $linkpuntos;?>
		<?php echo $linkregistro;?>
	</ul>
</div>

<script>
setInterval(function(){
	$(window).trigger('resize');
}, 2000)
</script>