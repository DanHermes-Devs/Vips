<?php

error_reporting(E_ERROR | E_PARSE);

include('headerm.php');

include 'Mobile_Detect.php';

error_reporting(0);

$detect = new Mobile_Detect();

if ($detect->isMobile()) {



}

else{

	header('Location: /');

    exit(0);

}



?>




<style>

.curl {
	width: 7vw;
	height: 7vw;
	position: absolute;
	top: 0;
	left: 0;
	background: linear-gradient( 135deg, #fff, #f3f3f3 45%, #ddd 50%, #aaa 50%, #bbb 56%, #ccc 62%, #f3f3f3 80%, #fff 100% );
	box-shadow: 0 0 10px rgba(0, 0, 0, .5);
	transition: all .5s ease;
}
.curl:before,
.curl:after {
	content: '';
	position: absolute;
	z-index: -1;
	left: 12.5%;
	bottom: 5.8%;
	width: 70%;
	max-width: 300px;
	max-height: 100px;
	height: 55%;
	box-shadow: 0 12px 15px rgba(0, 0, 0, .3);
	transform: skew(-10deg) rotate(-6deg);
}
.curl:after {
	left: auto;
	right: 5.8%;
	bottom: auto;
	top: 14.16%;
	transform: skew(-15deg) rotate(-84deg);
}

.curl:hover {
	width: 14vw;
	height: 14vw;
}
.mousecurl {
	width: 14vw;
	height: 14vw;
}
.curl:hover:before,
.curl:hover:after {
	box-shadow: 0 14px 20px rgba(0, 0, 0, .3);
}

.mousecurl:before,.mousecurl:after ,  {
	box-shadow: 0 14px 20px rgba(0, 0, 0, .3);
}

.box {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

.box span {
  position: absolute;
  display: block;
  background: #ff0025;
  transition: all 0.125s linear;
}

.box .top,
.box .bottom {
  width: 100%;
  height: 2.5px;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
}

.box .left,
.box .right {
  width: 2.55px;
  height: 100%;
  -webkit-transform: scaleY(0);
          transform: scaleY(0);
}

.box .top {
  top: 0;
  left: 0;
  transition-delay: 0.375s;
  -webkit-transform-origin: top left;
          transform-origin: top left;
		  margin-top: 0%;
}

.box .right {
  top: 0;
  right: 0;
  transition-delay: 0.25s;
  -webkit-transform-origin: top left;
          transform-origin: top left;
}

.box .bottom {
  bottom: 0;
  right: 0;
  transition-delay: 0.125s;
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.box .left {
  top: 0;
  left: 0;
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
}

.box:hover .top {
  transition-delay: 0s;
}
.box:hover .right {
  transition-delay: 0.125s;
}
.box:hover .bottom {
  transition-delay: 0.25s;
}
.box:hover .left {
  transition-delay: 0.375s;
}
.box:hover .top,
.box:hover .bottom {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}
.box:hover .left,
.box:hover .right {
  -webkit-transform: scaleY(1);
          transform: scaleY(1);
}


.carouselbanners {
	width: 100%;
	float: left;
	margin-top: 5vh;
	padding-bottom: 1vh;
}
.carouselbanners img{
	width: 100%;
}

.carouselbanners .slick-dots {
	position: absolute;
	bottom: 15px;
	display:block!important
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}
.slick-dots li.slick-active button::before {
	/* opacity: .75; */
	/* color: #000; */
	color: #fff !important;
	opacity: 1 !important;
	drop-shadow: 1px 3px #fff;
}
.slick-dotted.slick-slider {
	margin-bottom: 0px;
}

.carouselbanners {
	width: 100%;
	float: left;
	margin-top: 5vh;
	max-height: 35vh;
	overflow: hidden;
}
.carouselbanners img{
	width: 100%;
}

.carouselbanners .slick-dots {
	position: absolute;
	bottom: 15px;
	display: block!important;
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}
.slick-dots li.slick-active button::before {
	/* opacity: .75; */
	/* color: #000; */
	color: #fff !important;
	opacity: 1 !important;
	drop-shadow: 1px 3px #fff;
}
.slick-dotted.slick-slider {
	margin-bottom: 0px!important;
}

.slick-dots li button:before {
    font-family: 'slick';
    font-size: 16px!important;
    line-height: 20px;
    position: absolute;
    /* border: 1px solid #fff; */
    border-radius: 50%;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '•';
    text-align: center;
    opacity: .25;
    color: #fff!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-slide img {
	display: block;
	max-height: 35vh;
	object-fit: cover;
	object-position: center;
}

::-webkit-scrollbar {
    display: none;

}


*{-ms-overflow-style: -ms-autohiding-scrollbar; -ms-overflow-style: none;  // IE 10+
    scrollbar-width: none;  // Firefox}
</style>





<div class="main">







	<?php include('lateral.php');?>







	<main role="main">


		<style>


		.free-simple-slider .slider-box {



			height: 100%;



			list-style: none;



			margin: 0;



			padding: 0;



			position: relative;



			margin-bottom: 25px;



		}




		.sectionicon {
			width: 35%;
			max-height: 70%;
		}


		.sectionhome h2 {
			font-size: 70%;
			margin: 0;
			padding: 0;
		}



		.codigobarra {

	position: relative;

	margin-left: 0;

	margin-top: -5%;

	max-width: 90%;

}

		.arrows{

			display: none;

		}

		.prev-arrow{

			display: none;

		}

		.free-simple-slider .slider-dots li.current{

			border: 1px solid #FFF!important;

			background: #FFF!important;

			box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.34)

		}

		.free-simple-slider .slider-dots li{

			border: 1px solid #FFF!important;

			background: transparent!important;

			box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.34)

		}



		* {

    -webkit-touch-callout: none;

    -webkit-user-select: none;

    -khtml-user-select: none;

    -moz-user-select: none;

    -ms-user-select: none;

    user-select: none;

}



.free-simple-slider li{background-position:center center!important;}





[data-div="#homehome"]*{  fill: #ff0025!important; transition: all .4s ease;}

[data-div="#homehome"] path{  fill: #ff0025!important; transition: all .4s ease;}

[data-div="#homehome"] *{color: #ff0025!important;}

.flipicon {

	width: 7%;

	height: 40px;

	background-image: url(/img/svg/flip.svg);

	position: absolute;

	float: left;

	margin-top: -11%;

	margin-left: 80%;

	background-repeat: no-repeat;

	background-size: 100%;

	animation: pulseblue 1.6s linear infinite;

	cursor: pointer;

}

.flipicon2 {

	width: 7%;

	height: 40px;

	background-image: url(/img/svg/flip.svg);

	position: absolute;

	float: left;

	margin-top: 6%;

	margin-left: 75%;

	background-repeat: no-repeat;

	background-size: 100%;

	animation: pulseblue 1.6s linear infinite;

	cursor: pointer;
	transition:background-image .2s ease;

}


@keyframes pulseblue {

			0% {

				transform: scale(1, 1);
					transition:background-image .2s ease;


			}



			50% {

				transform: scale(1.3, 1.3);
				background-image: url(/img/svg/flipblue.svg);
				transition:background-image .2s ease;

			}



			100% {

				transform: scale(1, 1);

			}

		}

		.material-icons {
	display: none;
}
#correofb {
	background-image: url(/img/svg/smartphone.svg);
	background-size: 10%;
	background-repeat: no-repeat;
	background-position: right;
}

.avisocard {
	color: #f29100;
	width: 100%;
	float: left;
	font-size: .85em;
	font-family: "AmsiProNarw",sans-serif;
	margin-bottom: 0;
}

#small-dialogmail input::placeholder{color:#bbb;}


.masonry {
	float: left;
	width: 100%;
}

.tabs {
	margin: 0;
	padding: 0;
	list-style: none;
	overflow: hidden;
	border-bottom: none;
}
.tabs li {
	float: left;
	border: none;
	border-bottom: none;
	background: #fff;
	width: 50%;
	text-align: center;
}
.tabs li a {
  display: block;
  padding: 1.5vh;
  font-size: 16px;
  color: #000;
  text-decoration: none;
}

.tabs li a:hover {
  background: #f0f0f0;
}

.tabs li.active, .tabs li.active a:hover {
	font-weight: bold;
	background: #fff;
	border-bottom: 2px solid #ea0029;
}

.tab_container {
  border-top: none;
  background: #fff;
}

.tab_content {
	padding: 2vh 0;
	font-size: 16px;
}
.scrolling-wrapper {
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
}
.scrolling-wrapper .card {
  display: inline-block;
}

.scrolling-wrapper-flexbox {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
}
.scrolling-wrapper-flexbox .card {
  flex: 0 0 auto;
  margin-right: 3px;
}

.card {
	width: 36vw;
	height: auto;
	background-color: #fff;
}

.sectionhome {
	height: auto;
	width: 95%;
	float: left;
	overflow: hidden;
	text-align: center;
	padding: 7.5% 2.5%;
	font-family: "Program",sans-serif;
	-webkit-box-shadow: -3px 5px 6px -4px rgba(0,0,0,.62);
	-moz-box-shadow: -3px 5px 6px -4px rgba(0,0,0,.62);
	margin: 0 2.5%;
	border-radius: 20px;
	box-shadow: 0 2px 6px 0 rgba(53,53,53,.3);
	transition:.3s all ease;
}
.sectionhome:hover, .sectionhome:active {
	border-radius: 0px;
	transition:.3s all ease;

}
.scrolling-wrapper, .scrolling-wrapper-flexbox {
	height: auto;
	margin-bottom: 0;
	width: 100%;
	-webkit-overflow-scrolling: touch;
	padding-top: 1vh;
}
.scrolling-wrapper::-webkit-scrollbar, .scrolling-wrapper-flexbox::-webkit-scrollbar {
  display: none;
}

.card h2 {
	float: left;
	font-size: 12px;
	text-align: center;
	width: 100%;
	font-weight: 500;
}

.sectionbox {
	height: 12vh;
	background-size: cover;
	background-repeat: no-repeat;
}


.inauguraciones {
	width: 100%;
	text-align: center;
	float: left;
	padding: 0;
	position: fixed;
	bottom: 9vh;
	z-index: 3;
}
.inauguraciones h2{color: #eb1c2d; font-size:30px;}

@-webkit-keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
@keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
.ticker-wrap {
	position: relative;
	bottom: 0;
	width: 100%;
	overflow: hidden;
	height: 10;
	padding-left: 100%;
	box-sizing: content-box;
	margin-bottom: 0;
	background: #ea0029;
	color: #fff;
	height: 5vh;
}
.ticker-wrap .ticker {
	display: inline-block;
	height: 5vh;
	line-height: 1;
	white-space: nowrap;
	padding-right: 100%;
	box-sizing: content-box;
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
	animation-timing-function: linear;
	-webkit-animation-name: ticker;
	animation-name: ticker;
	-webkit-animation-duration:50s;
	animation-duration: 50s;
}
.ticker-wrap .ticker__item {
	display: inline-block;
	padding: 0 50px;
	font-size: 14px;
	color: #fff;
	font-weight: 500;
	line-height: 2.7;
}
.globos {
	height: 25px;
	position: relative;
	z-index: 2;
	left: -25px;
	margin-top: 0px;
	vertical-align: middle;
	width: auto;
}
.promoslist {
	width: 100%;
	position: relative;
	float: left;
	margin-bottom: 9vh;
}

.promo {
	display: inline-block;
	width: 100%;
	margin-bottom: 1vh;
	padding: 0 5%;
}
.promo img {
	width: 100%;
	-webkit-filter: drop-shadow(2px 2px 3px #2222224a);
	filter: drop-shadow(2px 2px 3px #2222224a);
	border-radius: 10px;
}

main {
	margin: 0;
	padding-top: 0;
	top: 0;
	position: relative;
	width: 100%;
	height: auto;
	overflow: visible;
	display: inline-block;
	float: left;
}
.carouselbanners {
	margin-top: 9vh;
	padding-bottom: 0;

}


main {
	margin: 0;
	padding-top: 0;
	top: 0;
	position: relative;
	width: 100%;
	height: auto;
	overflow: scroll;
	display: inline-block;
	float: left;
	height: auto;
	max-height: 88vh;
	padding-bottom:80px;
}

html, body {
	overflow-x: hidden !important;
	overflow-y: scroll;
}

.tuto {
	display: none;
}

#site-wrapper {
	position: relative;
	width: 100%;
	height: 100vh;
}

	</style>
<?php
date_default_timezone_set("America/Mexico_City");
$h = date('G'); //set variable $h to the hour of the day
$m = date('i'); //set variable $h to the hour of the day
$d = date('d'); //set variable $h to the hour of the day


if ($h < 13){
$banner = '/img/2019/banners/CarruselDesayunosMayo.png';
$bannerm = '/img/2019/banners/BannerDesayunosMayo.png';
}
if ($h > 12) {
$banner = '/img/2019/banners/CarruselComidasMayo.png';
$bannerm = '/img/2019/banners/BannerComidasMayo.png';
}

if($sesion == true ){
	$bannertdl="";


}

else{

	$bannertdl = '
	<div>
					<a href="/cuenta"><img src="/img/2019/bgslide.png" data-lazy="/img/2019/banners/CarruselBanner-tdl.png" onclick="promoViewedHome(&quot;Tarjeta de lealtad Vips&quot;);">	</a>
				</div>
';
}

?>


			<div class="carouselbanners">


				<div>
					<a href="https://vips.com.mx/cupones"><img src="/img/2019/bgslide.png" data-lazy="/img/2019/banners/Carrusel-Mobile-cupon_generico.png" onclick="promoViewedHome('Cupones');">	</a>
				</div>

				<div>
					<a href="/clasicos"><img src="/img/2019/bgslide.png" data-lazy="/img/banners/bannermobileClasicos.png" onclick="promoViewedHome('Clásicos 2x1');">	</a>
				</div>

				<div>
					<a href="/platillos-patrios"><img src="/img/2019/bgslide.png" data-lazy="/img/2019/banners/Carrusel-inserto-patrios-min.png" onclick="promoViewedHome('Platillos Patrios');">	</a>
				</div>

				<div>
					<a href="https://vips.com.mx/cupones#20Descuento"><img src="/img/2019/bgslide.png" data-lazy="/img/2019/cupones/Cupon-20-desktop-min.png" onclick="promoViewedHome('Cupón 20% Descuento');">	</a>
				</div>

				<div>
					<a href="https://vips.com.mx/selvamagica"><img src="/img/2019/bgslide.png" data-lazy="/img/2019/banners/juego-homedesktopmobile.png" onclick="promoViewedHome('Selva Mágica');">	</a>
				</div>

				<div>
					<a href="https://vips.com.mx/garantiadesabor-m"><img src="/img/2019/bgslide.png" data-lazy="/img/2019/banners/Garantia_de_sabor-Carrusel-min.png" onclick="promoViewedHome('Garantía de Sabor');">	</a>
				</div>


				<!--<div>
					<img data-lazy="/img/2019/banners/NBanner_mobile_agregadores.png" onclick="window.open(&quot;/domicilio&quot; , &quot;_self&quot; );">
				</div>-->




			</div>

			<div class="masonry">
    <ul class="tabs">
      <li><a href="#tab1">Inicio</a></li>
      <li><a href="#tab2" id="linkpromos" data-hash="#promociones">Promociones</a></li>
    </ul>
    <div class="tab_container">
      <div id="tab1" class="tab_content">
        <div class="scrolling-wrapper">

		 <div class="card" style="margin-left: 1vh; <?php // echo $hidelogged;?>">			<a class="boxhref" href="/cupones-m">

			<div class="sectionhome sectiontienda box">
			<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



				<img src="/img/2019/Promociones2.svg" class="sectionicon animate" style="width:32%;">







				</div></a>
					<h2>Cupones</h2>
				</div>

			<div class="card" >
				<a href="/cuenta-m">
				<div>
					<div class="sectionhome sectionfavoritos box">
						<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>
						<img src="/img/svg/cardhome.svg" class="sectionicon" style="width:35%;">
					</div>
				</div>
				</a>
					<h2>Tarjeta de Lealtad</h2>
			</div>



		  <div class="card">		<a class="boxhref" href="/domicilio-m">

		<div class="sectionhome sectionexperiencias box">
		<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>

		<img src="/img/svg/domiciliohome.svg" class="sectionicon" style="width:35%;">

			</div></a><h2>A domicilio</h2></div>
		  <div class="card">				<a class="boxhref" href="/ubicaciones/m">

				<div class="sectionhome sectionubicaciones box">
				<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>



					<img src="/img/svg/ubicacioneshome.svg" class="sectionicon">


				</div></a><h2>Restaurantes</h2></div>
		  <div class="card">				<a class="boxhref" href="/atencion-m"><div class="sectionhome sectionatencion box">
				<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>

					<img src="/img/svg/atencionhome.svg" class="sectionicon">


				</div></a><h2>Atención al invitado</h2></div>
		  <div class="card" style="margin-right: 2vh;">				<a class="boxhref" href="https://alsea.interfactura.com/RegistroDocumento.aspx?opc=Vips" target="_blank">

				<div class="sectionhome sectionfactura box">
				<span class="top"></span>
    <span class="right"></span>
    <span class="bottom"></span>
    <span class="left"></span>

					<img src="/img/svg/facturashome.svg" class="sectionicon">


				</div></a><h2>¿Necesitas una factura?</h2></div>


		</div>


        <div class="scrolling-wrapper">

			<div class="card" style="margin-left: 2vh;">
				<a href="/vipstorias-m">
				<div>
					<div class="sectionhome sectionfavoritos box sectionbox" style="background-image:url(/img/2019/blog.png)">
						<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>

					</div>
				</div>
				</a>
					<h2>Vipstorias</h2>
			</div>


		  <div class="card">	<a href="/lol-surprise-m">
				<div>
					<div class="sectionhome sectionfavoritos box sectionbox" style="background-image:url(/img/2019/banners/BannerLOL_movile.png)">
						<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>

					</div>
				</div>
				</a>
					<h2>Tienda</h2>
				</div>
		  <div class="card" style="margin-right:2vh;"><a href="/somos-vips"><div>
					<div class="sectionhome sectionfavoritos box sectionbox" style="background-image:url(/img/2019/somosvips.png)">
						<span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span>

					</div>
				</div>
				</a>
					<h2>Somos Vips</h2></a></div>



		</div>

			<div class="inauguraciones" style="display:none;">
				<div class="ticker-wrap">
					<div class="ticker">
			 <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Ejército Nacional  <span class="dirapertura"> · &nbsp;José Luis Lagrange 103</span> <span class="fechaapertura"> · &nbsp; 05 de juniol</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Aeropuerto Tijuana <span class="dirapertura"> · &nbsp;Sala B del Aeropuerto Internacional de Tijuana</span> <span class="fechaapertura"> · &nbsp; 4 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Parques Plaza <span class="dirapertura"> · &nbsp;Lago Alberto 442, Anáhuac 1ª Secc</span> <span class="fechaapertura"> · &nbsp;8 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Aeropuerto Tijuana <span class="dirapertura"> · &nbsp;Sala B del Aeropuerto Internacional de Tijuana</span> <span class="fechaapertura"> · &nbsp;4 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Ejército Nacional  <span class="dirapertura"> · &nbsp;José Luis Lagrange 103</span> <span class="fechaapertura"> · &nbsp; 05 de juniol</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Parques Plaza <span class="dirapertura"> · &nbsp;Lago Alberto 442, Anáhuac 1ª Secc</span> <span class="fechaapertura"> · &nbsp;8 de junio</span></div>

			</div>
				</div>
	</div>
      </div>
      <div id="tab2" class="tab_content">
       <div class="promoslist">
            <div class="promo"><a href="/platillos-patrios"><img src="/img/2019/banners/Mobile-inserto-patrios-min.png" onclick="promoViewedHome('Platillos Patrios');"></a></div>

			<div class="promo"><a href="/cupones-m"><img src="/img/2019/banners/Cupon-generico-_mobile.png" onclick="promoViewedHome('Cupones');"></a></div>


			<div class="promo"><a href="/clasicos"><img src="/img/2019/banners/Adicional_Abril_2x1Clasicos.png" onclick="promoViewedHome('Clásicos 2x1');"></a></div>

			<div class="promo"><a href="/desayunos-79"><img src="/img/2019/banners/BannerDesayunos79Mobile-min.png" onclick="promoViewedHome('Desayunos $79');"></a></div>
			<div class="promo"><a href="/comida-del-dia"><img src="/img/2019/banners/Banner_mobile_comida_del_dia_Agosto-min.png" onclick="promoViewedHome('Comida del día');"></a></div>
			<div class="promo"><a href="/menu-infantil-disney"><img src="/img/2019/banners/Legal-mobile_toysoty-min.png" onclick="promoViewedHome('Menú infantil Disney');"></a></div>
			<div class="promo" style="<?php echo $hidelogged;?>"><a href="/cuenta-m"><img src="/img/2019/banners/promo.png" onclick="promoViewedHome('Tarjeta de lealtad Vips');"></a></div>

			<div class="promo" style="<?php echo $hidelogged;?>"><a href="/mojarra"><img src="/img/2019/banners/AdicionalMobileMojarra.png" onclick="promoViewedHome('Mojarra');"></a></div>
			<div class="promo"><a href="/mini-menu"><img src="/img/2019/banners/Adicional_Abril_Minimenu.png" onclick="promoViewedHome('Mini menú');"></a></div>

	   </div>
      </div>
    </div>
  </div>




			</div>



<a href="#small-dialogmail" class="modalmail" id="getmail" style="display:none;"></a>
<div id="small-dialogmail" class="zoom-anim-dialog mfp-hide">

	<h3>Para pedidos a domicilio, es necesario actualizar tu número de celular.</h3>
 <form  id="formmailfb" class="formlogin" onsubmit="return false"  enctype="multipart/form-data" method="post">

				<div id="respuesta3">

				</div>


					<div class="inputs logininputs">

						<label for="correo"></label><br>

						<input maxlength="10"  class="input inputfbmail" type="text" id="correofb" name="correofb" placeholder="Ingresa tu celular (10 dígitos)" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
						<p class="avisocard" googl="true">Lo necesitamos para comunicarnos contigo si no encontramos la dirección. Este número será usado en todas las direcciones de envío que registres.</p>

						<i class="material-icons icono">

							alternate_email

						</i>

					</div>




					<div>

						<a class="boton top"  id="btnfbmail">Registrar teléfono</a>

					</div>

				</form>



	</div>



	<div id="light">
  <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
  <video id="VisaChipCardVideo" width="600" controls poster ="video/VIPSclasicos_Dieta.jpg" muted autoplay="" preload="auto" onClick="fullscreenvideo();">

	  <source src="https://digitaltryout.com/vips18/clasicos3.webm" type="video/webm">
	   <source src="https://digitaltryout.com/vips18/clasicos3.mp4" type="video/mp4">
	      <!--Browser does not support <video> tag -->
    </video>
</div>

<div id="fade" onClick="fullscreenvideo();">
<div class="toca">Toca para ampliar</div>
</div>

<div id="fsv" onClick="fullscreenvideo();" style="display:none;"></div>

<style>
#fade {
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 2;
	overflow: hidden;
	position: fixed;
	background-color: #0b0b0b;
	opacity: .8;
	display: none;
	background-image: url(/img/rotate_screen_icon.gif);
	background-size: 30%;
	background-repeat: no-repeat;
	background-position: center 80%;
}
#light {

	position: absolute;
	top: 30vh;
	left: 0;
	max-width: 100%;
	max-height: 100vh;
	margin-left: 0;
	margin-top: 0;
	z-index: 1002;
	overflow: visible;
	width: 100%;
	display:none;
}
#boxclose {
	float: right;
	cursor: pointer;
	color: transparent;
	border: none;
	border-radius: 50%;
	background-color: transparent;
	font-size: 31px;
	font-weight: normal;
	display: inline-block;
	line-height: 0px;
	padding: 11px 3px;
	position: absolute;
	right: 5px;
	top: 5px;
	z-index: 1002;
	opacity: .9;
	width: 30px;
	height: 30px;
	text-align: center;
	font-size: 25px;
	line-height: 8px;
	background-image: url(/img/close.png);
	background-size: 22px;
	background-repeat: no-repeat;
	background-position: center;
}
#VisaChipCardVideo {
	width: 100%;
	/* width: 100px; */
}
.boxclose:before {
  content: "×";
}

#fade:hover ~ #boxclose {
  display:none;
}

.test:hover ~ .test2 {
  display: none;
}
@media(orientation: landscape) {
#light {
	top: 0;
	margin-left: 0;
	margin-top: 0;

}

.containShowXSDevice {
	opacity: 0;
	z-index: -666666;
}

.main {
	z-index: 99999;

}

}

.toca {
	color: #fff;
	position: absolute;
	bottom: 15%;
	width: 100%;
	text-align: center;
	font-family: "Program", sans-serif;
	font-size: 12px;
}

@media(max-width:330px){
	.carouselbanners {
	margin-top: 9vh;
	max-height: 33vh!important;

}
.slick-slide img {
	max-height: 33vh;
	object-position: bottom;

}
.tabs li a {
	display: block;
	padding: 1vh;
	font-size: 16px;
	color: #000;
	text-decoration: none;
}
}
</style>


<?php print_r($array2[0]);?>

			<script>
		flagvideo = false;
$( window ).on( "orientationchange", function( event ) {

	if(flagvideo == false){

		if(window.innerHeight > window.innerWidth){
			 $("#fsv").trigger("click");


}
else{



}

setTimeout(function(){
	$("#VisaChipCardVideo").trigger("play");
	applyOrientation();
	toggleMute();





},500)

}

});

var elem = document.getElementsByTagName('video')[0];
var fullscreen = elem.webkitRequestFullscreen || elem.mozRequestFullScreen || elem.msRequestFullscreen;



function applyOrientation() {

			if(window.innerHeight > window.innerWidth){
			$("#VisaChipCardVideo").trigger("play");

fullscreen.call(elem); // bind the 'this' from the video object and instantiate the correct fullscreen method.


}


}

function fullscreenvideo(){

	var elem2 = document.getElementsByTagName('video')[0];
var fullscreen2 = elem2.webkitRequestFullscreen || elem2.mozRequestFullScreen || elem2.msRequestFullscreen;
fullscreen2.call(elem2); // bind the 'this' from the video object and instantiate the correct fullscreen method.
toggleMute();

}

function toggleMute() {

  var video=document.getElementById("VisaChipCardVideo");

  if(video.muted){
    video.muted = false;
  } else {
    video.muted = false;
  }

}


		// A $( document ).ready() block.
		$( document ).ready(function() {
		$("body").trigger("click");



			setTimeout(function(){

			//lightbox_open();
			//$("#VisaChipCardVideo").trigger("play");
			},500)


document.addEventListener('DOMContentLoaded', init, false)
var videoId = document.getElementById('VisaChipCardVideo')
//var videoTitle = videoId.getAttribute('data-description')
var videoTitle = 'Video Clásicos'

function init () {
	videoId.addEventListener('ended', videoEnd, false)
	videoId.addEventListener('timeupdate', videoTimeUpdate, false)
	videoId.addEventListener('play', videoPlay, false)
	videoId.addEventListener('pause', videoPause, false)
}

function setKeyFrames (duration) {
	var quarter = (duration / 4).toFixed(1)
	sessionStorage.setItem('one', quarter)
	sessionStorage.setItem('two', (quarter * 2).toFixed(1))
	sessionStorage.setItem('three', (quarter * 3).toFixed(1))
}

function videoTimeUpdate () {
		var curTime = videoId.currentTime.toFixed(1)
		switch (curTime) {
			case sessionStorage.getItem('one'):
				gtag('send', 'event', 'video', '25% video played', videoTitle)
				console.log("25% video played")
				sessionStorage.setItem('one', null)
			case sessionStorage.getItem('two'):
				gtag('send', 'event', 'video', '50% video played', videoTitle)
				console.log("50% video played")
				sessionStorage.setItem('two', null)
			case sessionStorage.getItem('three'):
				gtag('send', 'event', 'video', '75% video played', videoTitle)
				console.log("75% video played")
				sessionStorage.setItem('three', null)
		}
}

function videoEnd () {
	gtag('send', 'event', 'video', '100% video played', videoTitle)
	console.log("100% video played")
}

function videoPlay () {
	gtag('send', 'event', 'video', 'video played', videoTitle)
	setKeyFrames(this.duration)
console.log("Video started")
}

function videoPause () {
	gtag('send', 'event', 'video', 'video paused', videoTitle)
	console.log("Video Paused")
}

		});





			//  Set the Cookie

			function setCookie(cname, cvalue, exdays) {

				var d = new Date();

				d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));

				var expires = "expires=" + d.toUTCString();

				document.cookie = cname + "=" + cvalue + "; " + expires;

			}



			// Get the Cookie

			function getCookie(cname) {

				var name = cname + "=";

				var ca   = document.cookie.split(';');

				for (var i = 0; i < ca.length; i++) {

					var  c = ca[i];

					while (c.charAt(0) == ' ') {

						c = c.substring(1);

					}

					if ( c.indexOf(name) == 0) {

						return c.substring(name.length, c.length);

					}

				}

				return "";

			}



			// Check if Cookie exists

			function checkCookie() {



				// Get the cookie called "visited"

				var visited = getCookie("visited");



				// If it exists, print the Cookie to the Console

				if (visited == "true") {

					console.log(document.cookie);

				}

				else {

					// If not, add the class 'is-visible' to my modal called '.mhc-intro-modal'

					// and create a the cookie "visited=true" expiring in 15 days.

					$('.tuto').addClass('is-visible');

					setCookie("visited", "true", 15);

				}

			}



			// When document is ready check for the cookie

			$(document).ready(function() {

				checkCookie();

				hoverCurl();



			});

			function hoverCurl(){

				setTimeout(function(){
					$('.curl').addClass('mousecurl');




				}, 1500);

				setTimeout(function(){
					$('.curl').removeClass('mousecurl');



				}, 2000);

				setTimeout(function(){

					$('.curl').addClass('mousecurl');


				}, 2500);


				setTimeout(function(){

					$('.curl').removeClass('mousecurl');


				}, 3000);


			}















				$('.tarjeta').click(function(){



					$('.titlecard').toggleClass("hidden");



				});







			</script>
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
 <script src="/js/jquery.plugin.js"></script>
 <script src="/js/jquery.countdown.js"></script>
 <script src='/slick/slick.min.js'></script>
        <script>

		/* http://keith-wood.name/countdown.html
 * Spanish initialisation for the jQuery countdown extension
 * Written by Sergio Carracedo Martinez webmaster@neodisenoweb.com (2008) */
(function($) {
	'use strict';
	$.countdown.regionalOptions.es = {
		labels: ['AÃ±os','Meses','Semanas','Días','Horas','Minutos','Segundos'],
		labels1: ['AÃ±o','Mes','Semana','Día','Hora','Minuto','Segundo'],
		compactLabels: ['a','m','s','d'],
		whichLabels: null,
		digits: ['0','1','2','3','4','5','6','7','8','9'],
		timeSeparator: ':',
		isRTL: false
	};
	$.countdown.setDefaults($.countdown.regionalOptions.es);
})(jQuery);


            $(function () {
                var date = new Date();
                date = new Date(date.getFullYear(), date.getMonth() + 1, 1);
                //$('#defaultCountdown').countdown({until: date,  layout: '{sn} {sl}, {mn} {ml}, {hn} {hl}, and {dn} {dl}'});
				$('#defaultCountdown').countdown({until: date,  layout: '{dn} {dl}'});
            });



        </script>

		<script>
$('.boxhref').click(function(e) {
  e.preventDefault();
  setTimeout(function(url) { window.location = url }, 500, this.href);
});

    $('#btnfbmail').click(function(event){
		$('.inputfbmail').removeClass('errorinput');

		var emailvalfb  = $("#correofb").val();


		if (emailvalfb.length < 10 )
	{
		$("#respuesta3").html("<div class='errormsg'>Ingresa un número válido (10 dígitos)</div>");
		$("#correofb").addClass("errorinput");

	}

	else{
        event.preventDefault();
        $.ajax({
            url : "updatetel.php",
            type: "POST",
            data : new FormData($('#formmailfb')[0]),
            processData: false,
            contentType: false,
            success:function(data){

				$('#respuesta3').html(data);

				 setTimeout(function() {
                $('.success').slideUp("slow");
				$('.errormsg').slideUp("slow");
            }, 10000);



            }
        });

		}
    });

	$( document ).on( "ready" , function() {



	$('.carouselbanners').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,


		arrows: false,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});



});


window.document.onkeydown = function(e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
   $("#VisaChipCardVideo").trigger("play");
}

function lightbox_close() {
	$(".containShowXSDevice").css("z-index","99999999999");
		$(".containShowXSDevice").css("opacity","1");
		$(".main").css("z-index","2");
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  $("#VisaChipCardVideo").trigger("pause");
  var time = document.getElementById("VisaChipCardVideo").currentTime;
  time = ~~time;
 gtag('send', 'event', 'Videos', 'Video cerrado ' + time + 's', 'Video Clásicos');
 gtag('event', 'Video cerrado ' + time + 's', {
 'event_category': 'Videos Desktop',
 'event_label': 'Video Clásicos'
});
	console.log(time);
	flagvideo = true;
}


$("#VisaChipCardVideo").bind("ended", function() {

	setTimeout(function(){

		$(".containShowXSDevice").css("z-index","99999999999");
		$(".containShowXSDevice").css("opacity","1");
		$(".main").css("z-index","2");

	}, 2200)


 gtag('event', 'Video terminado', {
 'event_category': 'Videos Desktop',
 'event_label': 'Video Clásicos'
});
});

$(document).ready(function($) {
  $('.tab_content').hide();
  $('.tab_content:first').show();
  $('.tabs li:first').addClass('active');
  $('.tabs li').click(function(event) {
    $('.tabs li').removeClass('active');
    $(this).addClass('active');
    $('.tab_content').hide();

    var selectTab = $(this).find('a').attr("href");

    $(selectTab).fadeIn();
  });
  $('.tabs li a').click(function(event) {
    event.preventDefault();
    //$(this).next('div').slideToggle(200);
});
});


$(document).ready(function(){
    let hash = document.location.hash;
	var id1 = "*[data-hash ='"+ hash +"']";
	//alert(id1);
	setTimeout(function(){
			$(id1).click();
			//$(id1).hide();
		}, 500);

});

$(".linkpromos").click(function(){
	$("#linkpromos").trigger("click");
});
</script>

<?php //echo $modaltel; ?>

			<!-- Footer =============================-->



			<?php include('footerm.php');?>
