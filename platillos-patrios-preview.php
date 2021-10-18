<?php
if(isset($_COOKIE['persistID']))
{
$userid =   $_COOKIE['persistID'];
session_start();
$_SESSION['uservips'] = $userid;
}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
	//header("Location: /perfil");
}
include('header-bootstrap.php');
?>
<link rel="stylesheet" href="/css/animate.css">
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<style>
@font-face {
font-family: 'Museo 900';
src: url('/css/fonts/museo/Museo900-Regular.woff2') format('woff2'),
url('/css/fonts/museo/Museo900-Regular.woff') format('woff'),
url('/css/fonts/museo/Museo900-Regular.ttf') format('truetype'),
url('/css/fonts/museo/Museo900-Regular.svg#Museo-900') format('svg');
font-weight: bold;
font-style: normal;
}
@font-face {
font-family: 'Museo 700';
src: url('/css/fonts/museo/Museo-700.woff2') format('woff2'),
url('/css/fonts/museo/Museo-700.woff') format('woff'),
url('/css/fonts/museo/Museo-700.ttf') format('truetype'),
url('/css/fonts/museo/Museo-700.svg#Museo-700') format('svg');
font-weight: bold;
font-style: normal;
}
@font-face {
font-family: 'Museo 500';
src: url('/css/fonts/museo/Museo-500.woff2') format('woff2'),
url('/css/fonts/museo/Museo-500.woff') format('woff'),
url('/css/fonts/museo/Museo-500.ttf') format('truetype'),
url('/css/fonts/museo/Museo-500.svg#Museo-500') format('svg');
font-weight: 500;
font-style: normal;
}
body {
	background-color: #fff;
}
*{outline:0; box-sizing:border-box;}
.gif {
	width: 100%;
	float: left;
	text-align: center;
	padding-top: 0;
	font-size: 1.2em;
	color: #fff;
	position: absolute;
	font-family: "Program",sans-serif;
	top: 0;
	z-index: 2;
}
.platillo {
	width: 35%;
	float: left;
	padding: 2.5%;
	text-align: center;
}
.platillo img {
	width: 100%;
	padding: 0 12.5%;
	transition: .35s all ease;
}
.platillo p {
	margin-top: 0;
	font-family: "Program",sans-serif;
	color: #222;
	padding: 0 15%;
	font-size: .85em;
	font-weight: 500;
}
.legales {
	font-family: "Program",sans-serif;
	color: #222;
	text-align: center;
	font-size: 15px;
	padding: 0em 5%;
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	margin-top: 1em;
	z-index: 3;
	position: relative;
}
.legales:hover{opacity:1; transition:.35s all ease; color:#222;}
.btns {
	width: 100%;
	text-align: center;
	position: relative;
	float: left;
	margin-top: 0;
	padding-left: 0%;
	margin-bottom: 0%;
	background: url(/img/2019/patrios/Fondo-Boton-min.png);
	padding: 3.5%;
	background-size: cover;
	background: #ffffff;
}
.btns ul {
	margin: 0;
	padding: 0;
}
.btns ul li{
	margin: 0;
	padding: 0 32px 0 0;
	list-style: none;
	display: inline-block;
}
.btns ul li a{
	width: 200px;
}
.btnubica {
	font-size: .9em;
	margin: 0;
	display: inline-block;
	text-align: center;
	margin-top: 0;
	margin-bottom: 0;
	position: relative;
	z-index: 5;
	bottom: 0;
	color: #fff;
	font-family: "Program",sans-serif;
	font-size: 1.2em;
	background: #f5a623;
	font-weight: 500;
	padding: 10px 30px;
	border-radius: 30px;
}
.btnubica:hover {
	transition: all .4s ease;
	color:#fff;
}
.btnubica img {
	width: 70%;
}
.pla2, .pla4 {
	margin-top: -5%;
}
.pla2 p, .pla4 p {
	margin-top: -20%;
}
@keyframes flickerAnimation {
0%   { opacity:1; }
50%  { opacity:.5; }
100% { opacity:1; }
}
@-o-keyframes flickerAnimation{
0%   { opacity:1; }
50%  { opacity:0; }
100% { opacity:1; }
}
@-moz-keyframes flickerAnimation{
0%   { opacity:1; }
50%  { opacity:.3; }
100% { opacity:1; }
}
@-webkit-keyframes flickerAnimation{
0%   { opacity:1; }
50%  { opacity:.3; }
100% { opacity:1; }
}
.animate-flicker {
-webkit-animation: flickerAnimation 4s infinite;
-moz-animation: flickerAnimation 4s infinite;
-o-animation: flickerAnimation 4s infinite;
animation: flickerAnimation 4s infinite;
}
.relativecont.dayp1 {
	width: 100%;
	float: left;
	background: #c83d62;
	border-radius: 50px;
	margin-top: 2.5%;
}
.rosa1 {
	background: #f7eaf1;
	width: 50%;
	float: left;
	min-height: 350px;
	padding: 7.5% 22% 0% 1%;
	text-align: center;
	border-radius: 50px 0px 0px 50px;
}
.rosa2 {
	background: #c83d62;
	height: 350px;
	float: left;
	width: 50%;
	padding: 2.5%;
	position: relative;
border-radius: 50px;
}
.textorosa h1 {
	font-family: "Museo 500";
	font-size: 30px;
	color: #c83d62;
	padding-top: 5%;
	line-height: 1.1;
}
.textorosa h1 span{
	font-family: "Museo 700";
}
.hotcake {
	width: 100%;
	margin-left: -50%;
	z-index: 2;
	position: relative;
	max-width: 600px;
}
.pattern1 {
	position: absolute;
	left: -25%;
	width: 80%;
	z-index: 1;
	margin-top: 2.5%;
	max-width: 500px;
}
.precio {
	position: absolute;
	width: 40%;
	bottom: 15%;
}
.dayp2 {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Fondo-DayPart2-min.png);
	background-size: cover;
	position: relative;
	height: 500px;
	overflow: visible;
	z-index: 2;
}
.greencircle {
	width: 40%;
	float: left;
	background: url(/img/2019/patrios/Ovalo-banner-daypart2-min.png);
	position: absolute;
	height: 100%;
	background-size: 135%;
	background-position: 100% 50%;
	background-repeat: no-repeat;
}
.platochile {
	position: absolute;
	width: 30%;
	right: -5%;
	float: right;
	overflow: visible;
	text-align: center;
	bottom: -15%;
}
.chile {
	position: relative;
	margin-top: 0;
	width: 100%;
	max-width: 700px;
}
.platopechuga {
	position: absolute;
	width: 25%;
	right: 40%;
	float: right;
	overflow: visible;
	text-align: center;
	bottom: 12.5%;
}
.pechuga {
	position: relative;
	margin-top: 0;
	width: 100%;
	max-width: 700px;
}
.platovipsazos {
	position: absolute;
	width: 25%;
	right: 15%;
	float: right;
	overflow: visible;
	text-align: center;
	top: 5%;
}
.vipsazos {
	position: relative;
	margin-top: 0;
	width: 100%;
	max-width: 700px;
}
.titulopatrios {
	width: 65%;
	margin: 10% 15%;
	margin-bottom: 5%;
}
.desayunos {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Fondo-Desayunos-min.png);
	background-size: cover;
	padding: 2.5% 2.5% 2.5%;
	position: relative;
	background: rgba(255,209,71,1);
background: -moz-linear-gradient(-45deg, rgba(255,209,71,1) 0%, rgba(255,172,71,1) 100%);
background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(255,209,71,1)), color-stop(100%, rgba 255,172,71,1)));
background: -webkit-linear-gradient(-45deg, rgba(255,209,71,1) 0%, rgba(255,172,71,1) 100%);
background: -o-linear-gradient(-45deg, rgba(255,209,71,1) 0%, rgba(255,172,71,1) 100%);
background: -ms-linear-gradient(-45deg, rgba(255,209,71,1) 0%, rgba(255,172,71,1) 100%);
background: linear-gradient(135deg, rgba(255,209,71,1) 0%, rgba(255,172,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffd147', endColorstr='#ffac47', GradientType=1 );
}
.titulodesayunos {
	width: 30%;
	float: left;
	margin-right: 10%;
}
.titulodesayunos img{
	width: 100%;
}
.linea {
	position: absolute;
	top: 2.5%;
	left: 40%;
}
.linea img{
	width: 75%;
}
.textodesayunos {
	float: left;
	width: 50%;
	margin-left: 5%;
	padding: 2.5%;
	font-size: 19px;
	font-family: "Museo 700";
	color: #5E3E1A;
}
.textodesayunos span {
	font-size: 13px;
	font-family: "Museo 500";
}
.carouseldesayunos {
	width: 100%;
	float: left;
}
.slick-slide img {
	display: block;
	width: 100%;
	padding: 5% 5%;
}
.entradas {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Fondo-Entradas-min.png);
	background-size: cover;
	text-align: center;
	padding: 2.5%;
	background: rgba(194,13,25,1);
background: -moz-linear-gradient(-45deg, rgba(194,13,25,1) 0%, rgba(255,71,71,1) 100%);
background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(194,13,25,1)), color-stop(100%, rgba(255,71,71,1)));
background: -webkit-linear-gradient(-45deg, rgba(194,13,25,1) 0%, rgba(255,71,71,1) 100%);
background: -o-linear-gradient(-45deg, rgba(194,13,25,1) 0%, rgba(255,71,71,1) 100%);
background: -ms-linear-gradient(-45deg, rgba(194,13,25,1) 0%, rgba(255,71,71,1) 100%);
background: linear-gradient(135deg, rgba(194,13,25,1) 0%, rgba(255,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c20d19', endColorstr='#ff4747', GradientType=1 );
}
.tituloentradas {
	width: 35%;
	margin: 0 auto 2.5%;
	text-align: center;
}
.tituloentradas_2 {
	width: 100%;
	margin: 0 auto 2.5%;
	text-align: center;
}
.tituloentradas h1 {
	color: #ffffff;
}
.tituloentradas img {
	width: 100%;
}
.logonew {
	width: 30% !important;
	margin: 0 35%;
}
.carouselentradas .titleplato {
	color: #ffffff;
	line-height: 1.26;
}
.carouselentradas  .calsplato {
	color:#fff;
}
.comidas {
	width: 100%;
	float: left;
	padding: 2.5%;
	background: url(/img/2019/patrios/Fondo-Comidas-min.png);
	background-size: cover;
}
.titulocomidas {
	font-family: "Museo 700";
	color: #5e3e1a;
	padding: 0 5% 2.5%;
}
.titulocomidas h1 {
	text-align: center;
}
.titulocomidas h2 {
	font-size: 18px;
	text-align: center;
}
.titulocomidas span {
	font-size: 14px;
	font-family: "Museo 500";
}
.carouselcomidas .titleplato {
	color: #C30C23;
}
.carouselcomidas .descplato {
	color: #0b623b;
}
.postres {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Pleca1-Postres-min.png);
	background-size: 100%;
	background-size: cover;
	background: #ffffff;
}
.postres h1, .postres p{
	text-align: center;
}
.pleca1 {
	width: 50%;
	float: left;
	background-size: 100%;
	padding: 2.5%;
}
.pleca2 {
	width: 50%;
	float: left;
	background-size: 100%;
	padding: 2.5%;
}
.imgplato1, .imgplato2 {
	width: 50%;
	float: left;
}
.imgplato1 img, .imgplato2 img {
	width: 100%;
	padding: 5%;
	position: relative;
	z-index: 2;
}
.patternpostre {
	z-index: 1 !important;
	margin-top: -50%;
	position: relative;
}
.texto1, .texto2 {
	width: 50%;
	float: left;
	padding: 5% 2.5%;
	text-align: center;
}
.postres .titleplato {
	color: #C5D02C;
	margin-top: 1.5% !important;
	line-height: 1.2;
}
.postres .calsplato {
	color: #fff;
}
.footer{margin-top:-7px;}
.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }
.floating {
animation-name: floating;
/*animation-duration: 3.5s;*/
animation-duration: 1s;
animation-iteration-count: infinite;
animation-timing-function: ease-in-out;
}
.floating2 {
animation-name: floating;
animation-duration: 4s;
animation-iteration-count: infinite;
animation-timing-function: ease-in-out;
}
.floating3 {
animation-name: floating;
animation-duration:6s;
animation-iteration-count: infinite;
animation-timing-function: ease-in-out;
}
@keyframes floating {
from { transform: translate(0,  0px); }
65%  { transform: translate(0, 8px); }
to   { transform: translate(0, -0px); }
}
.overflowhidden{overflow:hidden;}
.slick-slide {
	text-align: center;
}
.titleplato {
	font-family: "Museo 900",sans-serif !important;
	font-size: 26px !important;
	margin-top: -2.5% !important;
	margin-bottom: 0;
}
.carouseldesayunos .titleplato {
	color: #5e3e1a;
}
.calsplato {
	font-family: "Museo 500",sans-serif !important;
	font-size: 16px !important;
}
.carouseldesayunos .calsplato {
	color:#5e3e1a;
}
.descplato {
	color: #5e3e1a;
	padding: 0 15%;
	font-size: 16px;
	line-height: 1.2;
}
.slick-dots {
	bottom: -5%;
}
.scrolled .main {
	margin-top: 70px;
	transition: all .4s ease;
	position: relative;
}
main {
	width: 100%;
	overflow-x: hidden;
	overflow-y: hidden;
}
.desktop{display:block!important;}
.mobile{display:none!important;}
.subtitleentradas {
	color: #fff;
	font-size: 19px;
	font-weight: 500;
	margin-top: 0;
}
.rosa1 .greencircle {
	width: 30%;
	float: left;
	background: url(/img/2019/patrios/Ovalo-banner-daypart2-min.png);
	position: absolute;
	height: 180px;
	background-size: 105%;
	background-position: 100% 100%;
	background-repeat: no-repeat;
	top: 0;
	left: 0;
	z-index: 99;
}
.rosa1 .titulopatrios {
	width: 50%;
	margin: 10% 10%;
}
.vertodos {
	position: absolute;
	width: 100%;
	/*bottom: 5%;*/
	bottom: 12%;
	text-align: center;
	padding-left: 10%;
	color: #fff;
	font-size: 14px;
	letter-spacing: .25px;
}
.vertodos a:hover{
	color:#fff;
}
.anim {
	width: 33px;
	height: 33px;
	background: url(/img/2019/patrios/down.png);
	background-size: 100%;
	position: absolute;
	margin-left: -45px;
	margin-top: -10px;
}
.desayunos {
padding: 5% 2.5% 2.5%;
}
.textopatrios h1 {
color: #fff;
font-size: 25px;
text-align: center;
padding: 0 22%;
font-weight: 500;
margin: 0;
display: inline-block;
font-family: "Museo 500", sans-serif;
}
.botones {
display: inline-block;
text-align: center;
float: left;
width: 100%;
padding: 2.5% 20%;
}
.btndomicilio, .btnaparta {
	font-size: 15px;
	background: #f5a623;
	font-weight: 500;
	padding: 12px 20px;
	border-radius: 30px;
	color: #fff;
	width: 100%;
	display: inline-block;
	max-width: 200px;
	margin-bottom: 10px;
	margin-top: 10px;
}
.btndomicilio:hover, .btnaparta:hover {
color: #ffffff;
}
.textopatrios h1 span {color:#feea34}
@media(max-width:1500px){
.dayp2 {
	height: 420px;
}
.textopatrios h1 {
	font-size: 20px;
}
}
@media(max-width:1024px){
.dayp2 {
height: 330px;
}
	.slick-dots {
		bottom: 0%;
	}
	.platillo img {
		padding: 0 20%;
	}
	.platillo p {
		padding: 0 5%;
		font-size: 15px;
	}
	.titleplato{margin-top: -2.5% !important;}
	.scrolled .main {
		margin-top: 120px;
	}
.rosa1 .greencircle {
	height: 150px;
}
.textorosa h1 {
	font-size: 25px;
}
}
@media(max-width:800px){
	main {
		overflow-y: auto;
	}
	.mobile{display:block!important;}
	.desktop{display:none!important;}
.dayp2 {
	height: 600px;
}
.greencircle {
	width: 100%;
	float: left;
	height: 25%;
	background-size: 110%;
	background-position: bottom;
	top: 0;
	text-align: center;
}
.rosa1 .greencircle {
	width: 100%;
	height: 120px;
}
.rosa1 .titulopatrios {
	width: 50%;
	margin: 5% 10%;
max-width: 200px;
}
.titulopatrios {
	width: 60%;
	margin: 2.5% 10%;
	max-width: 200px;
}
.platochile {
	width: 135%;
	right: 0;
	float: left;
	left: -20%;
	margin-top: 20%;
	padding: 0 20%;
	height: 60%;
	position: absolute;
}
.chile {
	position: relative;
	margin-top: 0;
	width: 100%;
	max-width: 600px;
}
.textorosa h1 {
	font-size: 16px;
	padding-bottom: 50px;
}
.rosa1 {
	width: 100%;
	min-height: 140px;
	padding: 10%;
}
.rosa2 {
	height: auto;
	width: 100%;
	padding: 20% 10% 25%;
}
.hotcake {
	width: 100%;
	margin-left: 0;
	margin-top: -40%;
}
.pattern1 {
left: 7.5%;
top: -15%;
margin-top:0;
}
.precio {
	position: absolute;
	width: 50%;
	bottom: 5%;
	right: 10%;
}
.titulodesayunos {
	width: 100%;
	float: left;
	margin-right: 0;
	padding: 2.5% 15%;
}
.linea {
	display: none;
}
.textodesayunos {
	float: left;
	width: 100%;
	margin-left: 0;
	padding: 2.5% 10%;
	font-size: 15px;
	text-align: center;
}
.tituloentradas {
	width: 75%;
	margin: 5% auto;
}
.titulocomidas {
	padding: 5% 10%;
}
.titulocomidas h2 {
	font-size: 14px;
}
.pleca1, .pleca2 {
	width: 100%;
}
.imgplato1, .imgplato2 {
	width: 100%;
	float: left;
}
.texto1, .texto2 {
	width: 100%;
	float: left;
	padding: 5% 2.5%;
	text-align: center;
}
}
@media(max-width:600px){
.platochile {
margin-top: 30%;
}
}
@media(max-width:380px){
.platochile {
margin-top: 40%;
padding: 0 5%;
height: 60%;
position: absolute;
}
}
.color_white{
	color: #ffffff;
}
.color_gray_1{
	color: #333333 !important;
}
p.legales a:hover{
	color: #333333;
}
.imagen_contenedor{
	position: relative;
}
.imagen_img{
	position: absolute; top: 0; right: 0; width: 30%
}
</style>
<main>
	<div class="row">
		<div class="col-md-12">
			<div class="main">
				<style>
				@media (max-width:800px){
				.desayunos {
				padding: 15% 2.5% 2.5%;
				}
				.rosa1 {
					border-radius: 40px 40px 0px 0px;
				}
				.relativecont.dayp1 {
					margin-bottom: 10%;
				}
				.textopatrios h1 {
					font-size: 14px;
				}
				.platovipsazos {
					width: 35%;
					right: -7.5%;
					top: 22%;
				}
				.platopechuga {
					width: 55%;
					right: 50%;
					top: 25%;
				}
				.platochile {
					margin-top: 0%;
					padding: 0 5%;
					height: auto;
					top: 40%;
					width: 100%;
					right: -15%;
					left: 15%;
				}
				.vertodos {
					font-size: 11px;
					letter-spacing: .2px;
					bottom: 6%;
					padding-left: 17%;
				}
				.botones.mobile {
					top: 70%;
					position: absolute;
				}
				.chile {
					max-width: 300px;
				}
				.pechuga {
					max-width: 250px;
				}
				}
				</style>
				<div class="relativecont dayp2">
					<div class="greencircle">
						<div class="textopatrios">
							<img src="/img/2019/patrios/Titular-Comidas-min.png" class="titulopatrios">
							<h1>Vive las fiestas patrias con el <span>sabor de Vips</span></h1>
							<div class="botones desktop">
								<a href="/domicilio-patrios" class="btndomicilio grow">Pide a domicilio</a><br>
								<a href="/pedido-patrios" class="btnaparta grow">Reserva y recoge</a>
							</div>
						</div>
					</div>
					<div class="platochile">
						<img src="/img/2019/patrios/platos/Chile-Nogada-min.png" class="chile">
					</div>
					<div class="platopechuga">
						<img src="/img/2019/patrios/platos/Pechuga-oaxaca-min.png" class="pechuga">
					</div>
					<div class="platovipsazos">
						<img src="/img/2019/patrios/platos/Vipzasos-de-Chorizo-min.png" class="vipsazos">
					</div>
					<div class="botones mobile">
						<a href="/domicilio-patrios" class="btndomicilio grow">Pide a domicilio</a><br>
						<a href="/pedidos-especiales" class="btnaparta grow">Reserva y recoge</a>
					</div>
					<div class="vertodos"><a href="#desayunos" class="scrollto"><i class="anim floating"></i><!--Ver todos los platillos en restaurante--></a></div>
				</div>
				<div class="desayunos" id="desayunos">
					<div class="titulodesayunos"><img src="/img/2019/patrios/Titulo-Desayunos-min.png"></div>
					<div class="linea"><img src="/img/2019/patrios/Line-min.png"></div>
					<div class="textodesayunos">
						<h1>Desayunos patrios para chuparte los dedos</h1>
						<p>Incluyen: Un jugo <span>(300mL)</span> o una orden de fruta <span>(150g)</span> y café americano <span>(rellenable)</span> o un té de sobre<br>Horario: 7 a 13 hrs.</p></div>
						<div class="carouseldesayunos">
							<div>
								<a><img src="/img/2019/patrios/platos/Almuerzo-patrio-min.png">
									<p class="titleplato">Almuerzo patrio</p>
									<p class="calsplato">(610 Cal)</p>
									<p class="descplato">Tortilla de huevo con chile cuaresmeño y aguacate, servido con un pambazo de papa con chorizo</p>
								</a>
							</div>
							<div>
								<a><img src="/img/2019/patrios/platos/huevos-cholula--min.png">
									<p class="titleplato">Huevos Cholula</p>
									<p class="calsplato">(2 pzas / 800 Cal)</p>
									<p class="descplato">Estrellados, sobre sincronizada de frijol, bañados con salsa poblana cremosa y gratinados con queso gouda. Acompañados de tocino.</p>
								</a>
							</div>
							<div>
								<a><img src="/img/2019/patrios/platos/huevos-colima-min.png">
									<p class="titleplato">Huevos Colima</p>
									<p class="calsplato">(2 pzas / 480 Cal)</p>
									<p class="descplato">Revueltos, servidos sobre frijoles campesinos, salsa verde y puntas de res (60 g)</p>
								</a>
							</div>
							<div>
								<a><img src="/img/2019/patrios/platos/huevos-azteca-min.png">
									<p class="titleplato">Huevos Aztecas</p>
									<p class="calsplato">(2 pzas / 780 Cal)</p>
									<p class="descplato">Estrellados, bañados con salsa norteña, acompañados de pastel azteca y chorizo</p>
								</a>
							</div>
						</div>
						<div class="relativecont dayp1">
							<div class="rosa1">
								<div class="textorosa">
									<h1>Hot cakes con salsa en nogada <b>deliciosamente mexicano</b></h1>
								</div>
							</div>
							<div class="rosa2">
								<img src="/img/2019/patrios/Hot-cake-min.png" class="hotcake">
								<img src="/img/2019/patrios/Textura-Hot-Cake-min.png" class="pattern1">
								<img src="/img/2019/patrios/Precio-Hot-Cakes-min.png" class="precio">
							</div>
						</div>
					</div>
					<div class="entradas">
						<div class="tituloentradas">
							<h1>Para comenzar</h1>
							<p class="subtitleentradas">Entradas patrias para compartir</p>
						</div>
						
						<div class="carouselentradas">
							<div>
								<a>
									<div class="imagen_contenedor">
										<img src="/img/2019/patrios/platos/Tacos-de-cochinita-min.png">
										<div class="imagen_img">
											<img src="/img/2019/patrios/Logo-NUEVO-min.png">
										</div>
									</div>
									
									<p class="titleplato">Tacos de cochinita </p>
									<p class="calsplato">(3 pzas / 670 Cal)</p>
									<p class="descplato color_white">Servidos con ensalada de chile habanero</p>
								</a>
							</div>
							<div>
								<a>
									<div class="imagen_contenedor">
										<img src="/img/2019/patrios/platos/Vipzasos-de-Chorizo-min.png">
										
									</div>
									<p class="titleplato">Vipsazos de papa con chorizo</p>
									<p class="calsplato">(3 pzas / 641 Cal)</p>
									<p class="descplato color_white">Los clásicos pambazos hechos con el pan especial de Vips, acompañados de salsa verde</p>
								</a>
							</div>
							<div>
								<a>
									<div class="imagen_contenedor">
										<img src="/img/2019/patrios/platos/Costras-yucatecas-min.png">
										<div class="imagen_img">
											<img src="/img/2019/patrios/Logo-NUEVO-min.png">
										</div>
									</div>
									<p class="titleplato">Costras yucatecas</p>
									<p class="calsplato">(2 pzas / 650 Cal)</p>
									<p class="descplato color_white">De queso gouda con cochinita pibil, sobre tortilla de harina con ensalada de chile habanero. Acompañadas de salsa verde cruda.</p>
								</a>
							</div>
						</div>
					</div>
					<div class="comidas">
						<div class="titulocomidas">
							<h1>Comidas con sabor a México</h1>
							<h2>Incluyen una sopa del día <span>(270mL)</span> y una bebida <span>(360mL / refresco o naranjada o limonada o agua de sabor) </span> No incluye refrescos en lata.</h2>
						</div>
						<div class="carouselcomidas">
							<div>
								<a><img src="/img/2019/patrios/platos/Chile-Nogada-min.png">
									<p class="titleplato">Chile en nogada </p>
									<p class="calsplato color_gray_1">(1070 Cal)</p>
									<p class="descplato">Nuestra tradicional receta de chile poblano relleno de carne y frutas, bañado en salsa nogada</p>
								</a>
							</div>
							<div>
								<a><img src="/img/2019/patrios/platos/Tampiquena-Gratinada-min.png">
									<p class="titleplato">Tampiqueña gratinada</p>
									<p class="calsplato color_gray_1">(140 g / 530 Cal)</p>
									<p class="descplato">Con queso Oaxaca; servida con salsa martajada, nopales con chorizo y guacamole</p>
								</a>
							</div>
							<div>
								<a>
									<div class="imagen_contenedor">
										<img src="/img/2019/patrios/platos/Filete-de-mojarra-enchilado-min.png">
										<div class="imagen_img">
											<img src="/img/2019/patrios/Logo-NUEVO-min.png">
										</div>
									</div>
									<p class="titleplato">Filete de mojarra enchilado</p>
									<p class="calsplato color_gray_1">(150g / 680 Cal)</p>
									<p class="descplato">Elaborado con salsa guajiro acompañado de guacamole, tres dobladas con frijoles refritos y ensalada de chile habanero</p>
								</a>
							</div>
							<div>
								<a><img src="/img/2019/patrios/platos/Pechuga-oaxaca-min.png">
									<p class="titleplato">Pechuga Oaxaca </p>
									<p class="calsplato color_gray_1">(150g / 1175 Cal)</p>
									<p class="descplato">Rellena con queso Oaxaca, bañada con nuestro mole especial, arroz a la mexicana, frijoles campesinos y plátanos fritos</p>
								</a>
							</div>
						</div>
					</div>
					<div class="postres">
						<div class="tituloentradas_2">
							<h1 class="color_gray_1">Para cerrar con broche de oro</h1>
							<p class="subtitleentradas color_gray_1">Disfruta de estos deliciosos postres</p>
						</div>
						<div class="pleca1">
							<div class="imgplato1">
								<img src="/img/2019/patrios/platos/Crepas-min.png">
								<img src="/img/2019/patrios/pattern-min.png" class="patternpostre">
							</div>
							<div class="texto1">
								<img class="logonew" src="/img/2019/patrios/Logo-NUEVO-min.png">
								<p class="titleplato">Crepas patrias</p>
								<p class="calsplato color_gray_1">(2 pzas / 400 Cal)</p>
								<p class="descplato">Servidas en salsa nogada</p>
							</div>
						</div>
						<div class="pleca2">
							<div class="imgplato2">
								<img src="/img/2019/patrios/platos/Pastel-min.png">
								<img src="/img/2019/patrios/pattern-min.png" class="patternpostre">
							</div>
							<div class="texto2">
								<img class="logonew" src="/img/2019/patrios/Logo-NUEVO-min.png">
								<p class="titleplato pastel">Pastel tres leches con cacao</p>
								<p class="calsplato"></p>
								<p class="descplato"></p>
							</div>
						</div>
					</div>
					<div class="btns">
						<ul>
							<li><a href="/domicilio-patrios" class="btndomicilio grow">Pide a domicilio</a></li>
							<li>ó</li>
							<li><a href="/pedidos-especiales" class="btnaparta grow">Reserva y recoge</a></li>
						</ul>
						<p class="legales">
							<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="/js/wow.min.js"></script>
	</script><script src='/slick/slick.min.js'></script>
	<script>
	$( window ).on( "load", function() {
	new WOW().init();
	});
	$( document ).on( "ready" , function() {
		$('.carouseldesayunos').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			lazyLoad: 'ondemand',
			accessibility: true,
			arrows: false,
			dots:true,
			autoplay: true,
			responsive: [
				{
				breakpoint: 800,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				} ],
			autoplaySpeed: 3000,
		});
		$('.carouselentradas').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			lazyLoad: 'ondemand',
			accessibility: true,
			arrows: false,
			dots:true,
			autoplay: true,
			responsive: [
				{
				breakpoint: 800,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				} ],
			autoplaySpeed: 3000,
		});
		$('.carouselcomidas').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			lazyLoad: 'ondemand',
			accessibility: true,
			arrows: false,
			dots:true,
			autoplay: true,
			responsive: [
				{
				breakpoint: 800,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				} ],
			autoplaySpeed: 3000,
		});
		setTimeout(function(){
			$(window).trigger('resize');
		}, 1000)
	});
	</script>
	<?php
	include('footer-bootstrap.php');
	?>