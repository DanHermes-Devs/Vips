<?php
include('headerm.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
$meta_blog='
 <meta property="og:url" content="https://vips.com.mx/cupones" />
 <meta property="og:title" content="Cupones Vips" />
 <meta property="og:description" content="Aprovecha nuestros cupones y promociones" />
 <meta property="og:image" content="https://vips.com.mx/img/2019/cupones/Cupones_mayo-junio-07-min.png" />

';
if ($detect->isMobile()) {
}
else{
	header('Location: /cupones');
	exit(0);
}
if($_SESSION['uservips'] !=""){$showlogged =""; $shownologged="hide";}
else{$showlogged ="hide"; $shownologged ="";}
$_SESSION['cuponsession'] = '';
?>
<style>
.hide{
	display: none;
}
.hideshowdelivery{
	display: none;
}

.disclaimernfl {
    width: 100%;
    float: left;
    padding: 0 5%;
    text-align: center;
    font-size: .7em;
    color: #444;
}
</style>
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<link rel="stylesheet" href="/vips18/css/magnific-popup.css">
<div class='pushpm panelm'>
	<div class="header">
		<div class='close'></div>
		<div class="logo">
			<a href="m"><img src="img/Logo_Vips.png"></a>

		</div>
		<div class="titlemenu">
		Menú Desayunos</div>
	</div>
	<img class="imgcup" src="" style="width:100%; padding:0!important;" alt="" />
	<div class="productdesc">




		<h3 style="color:#ed7124; font-size:1em; margin: 5px 0;"></h3>
		<h2 style="font-weight: bold; font-size: 1em;" class="hide" id="hideshowdelivery">Para ordenar, llama al 5900 8477 o al 01 800 900 8477 y menciona el código del cupón. Servicio de 8 a 11hrs.</h2>
		<h4 style="color:#444; font-size:.7em; text-decoration:none; margin: 5px 0;">Vigencia:</h4>
		<p style="color:#333; font-size:.6em; text-align: justify;"></p>
		<p style="display:none;" class="idpromo"></p>



		<?php

		if( isset($_SESSION['uservips'])!="" ){
			$btndescarga='
			<a class="btnredcupon descarga-cupon-m" href="" onclick="showpop();" download>Descargar cupón</a>
			';
		}

		else{
			$btndescarga='
			<h5 class="titlogin">Inicia sesión para descargar este cupón</h5>
				<div class="aligncenter">
						<a href="/fbconfig?page=cupones" class="blanco btnfb1 regfbcupones"  id="fb2" googl="true"></a>
						<a href="/logingoogle?page=cupones" class="blanco btnfb1 reggooglecupones"  id="google2"></a>
						<a  href="/cuenta-m?page=cupones" class="blanco btnfb1 openpoplogin regvipscupones"  id="loginvips"></a>
					</div>
			';
			$btndescarga='
			<a  class="btnredcupon descarga-cupon-m" href="" onclick="showpop();" download>Descargar cupón</a>
			';
		}
		echo $btndescarga;
		?>


	</div>


	<!-- Imagen platillo=============================-->



</div>

<div class="main">


	<?php include('lateral.php');?>

	<style>
	[data-div="#beneficioshome"]*{  fill: #ff0025!important; transition: all .4s ease;}
	[data-div="#beneficioshome"] path{  fill: #ff0025!important; transition: all .4s ease;}
	[data-div="#beneficioshome"] *{color: #ff0025!important;}
	.btnredcupon {
		padding: 1em;
		width: 100%;
		color: #fff;
		text-align: center;
		background: #EB7124;
		float: left;
		margin: 0;
		font-weight: bold;
		margin-bottom: 15vh;
	}
	.btnredcuponn {
		padding: 1em;
		width: 100%;
		color: #fff;
		text-align: center;
		background: #EB7124;
		float: left;
		margin: 1em 0;
		font-weight: bold;
	}



	.secciones {
		width: 100%;
		position: relative;
		padding: 4% 5% 2.5% 5%;

		background: url(img/Banner_Menu.png);
		border-bottom: 1px solid #ccc;
		background-size: cover;

		background-position: center;

		background-repeat: no-repeat;
	}
	.seccion{width: 100%; float: left; text-align: center; cursor: pointer; padding: 0 10%;}
	.seccion img{width: 70%; transition: .35s ease all;}
	.seccion img:hover{padding: 5%; transition: .35s ease all;}

	.seccion h4 {
		font-size: 1.1em;
		margin: 0;
		padding: 0;
		font-family: Program,sans-serif;
		font-weight: lighter;

	}

	.active h4{ text-decoration: underline; font-weight: bolder;}



	.imgcat{width: 10%; display: inline-block; margin: 0 1%;}

	.imgcat img{width: 80%; float: left;}



	.producto{width:50%; float: left; margin-top:2em;     padding: 0 5%;}
	.productoimg, .productodesc {
		width: 50%; float: left; text-align: center;
	}

	.productoimg img{width: 70%;}
	.productodesc h3{
		color: #ed7124;
		font-size: 1.8em;
		font-family: "StawixAmsiProBold", ‘Trebuchet MS’, Helvetica, sans-serif;
		text-align: left;
	}

	.btndetail {
		background: #ff0025;
		width: 70%;
		float: left;
		margin-right: 20%;
		color: #fff;
		padding: .5em 1em;
		cursor: pointer;
	}

	.btncompra {
		background: #ed7124;
		width: 70%;
		float: left;
		margin-right: 20%;
		color: #fff;
		padding: .5em 1em;
		margin: 1em 0;
		cursor: pointer;
	}

	.balance .productodesc h3{color:#00b7a4;}

	.filtertoggle {
		position: fixed;
		width: 2.5em;
		height: 2.5em;
		background-image: url(img/menu/filter.png);
		background-repeat: no-repeat;
		background-size: 100%;
		top: 170px;
		z-index: 9;
		left: 1em;
		cursor: pointer;
		background-position: top center;
		transition: .35s all ease;
	}




	#contenedor{    float: left;
		width: 100%;
	}


</style>

<style>

body, html {
	overflow-x: hidden;
	height: 100%;
	min-height: 100vh;
}



.fixedmenu {
	width: 100%;
	position: fixed;
	top: 9vh;
	z-index: 3;
}

.secciones {
	width: 100%;
	position: relative;
	padding: 2.5%;


	overflow-x: scroll;
	height: 18vh;
}

.seccion{width: 100%; float: left; text-align: center; cursor: pointer;}
.seccion img{width: 70%; transition: .35s ease all;}
.seccion img:hover{padding: 5%; transition: .35s ease all;}

.seccion h4 {
	font-size: .6em;
	margin: 0;
}


.imgcat {
	width: 20vw;
	display: inline-block;
	margin: 0;
}

.imgcat img{width: 75%;}


.especiales{
	position: relative; top:41vh;

}
.especiales, .balance {
	float: left;
	width: 100%;
	text-align: center;
	padding: 2.5%;

}


.producto {
	width: 100%;
	float: left;
	margin-top: 1%;
}
.productodesc {
	width: 65%;
	float: left;
	text-align: center;
	padding: 5%;
	padding-right:12%;
	background-image: url(img/right-arrow.png);
	background-repeat: no-repeat;
	background-position: 95% center;
	background-size: 20px;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
	padding-top: 10%;
	background-position: right 3em;
}

.productoimg{
	width: 35%; float: left; padding: 2.5% 0 1%; text-align: left;
}


.productoimg img {
	width: 100%;
	/* height: 100%; */
	border-radius: 50%;
	object-fit: cover;
	object-position: center;
}
.productodesc h3 {
	color: #ed7124;
	font-size: .9em;
	font-family: "Program", ‘Trebuchet MS’, Helvetica, sans-serif;
	text-align: left;
	position: relative;
	top: 50%;
	margin: 0;
	padding-right: 10%;
}
.productodesc h3::after {
	content: "";
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-image: url(img/right-arrow.png);
	transform: scaleX(0);
	transform-origin: 0 50%;
	transition: transform .5s ease-out;
}
.btndetail {
	background: #ff0025;
	width: 70%;
	float: left;
	margin-right: 20%;
	color: #fff;
	padding: .5em 1em;
	cursor: pointer;
	display: none;
}

.btncompra {
	background: #ed7124;
	width: 70%;
	float: left;
	margin-right: 20%;
	color: #fff;
	padding: .5em 1em;
	margin: 1em 0;
	cursor: pointer;
	display: none;
}

.balance .productodesc h3{color:#00b7a4;}

.main {
	width: 100%;
	z-index: 2;
	position: relative;
	transition: margin-left .2s ease-in;
	-moz-transition: margin-left .2s ease-in;
	-webkit-transition: margin-left .2s ease-in;
}

.panelm {
	background: #fff;
	width: 100%;
	color: #222;
	font-size: 1em;
	min-height: 100%;
}

/* Overlay */

.overlayp {
	z-index: 9999;
	position: absolute;
	left: 0;
	top: 0;
	margin-left: 100%;
	transition: margin-left .2s ease-in;
	-moz-transition: margin-left .2s ease-in;
	-webkit-transition: margin-left .2s ease-in;
}


.overlayp.active {
	margin-left: 0;
	box-shadow: 0 0 20px rgba(0,0,0,0.5);
}

/* Push */

.pushpm {
	position: fixed;

	left: 0;
	top: 0;
	z-index: 9999;
	margin-left: 100%;
	transition: margin-left .35s ease-in;
	-moz-transition: margin-left .35s ease-in;
	-webkit-transition: margin-left .35s ease-in;
}

.pushpm.active { margin-left: 0; position: fixed;
	display:block; }

	.main.pactive { margin-left: -100%; }

	.close {
		width: 10%;
		min-height: 8vh;
		background: url(img/back.png);
		background-repeat: no-repeat;
		background-size: 23px;
		background-position: 15% center;
		float: left;
	}

	.header {
		height: 8vh;
		width: 100%;
		float: left;
		border-bottom: 1px solid #ccc;
		position: fixed;
		z-index: 90;
		top: 0;
		background: #fff;
	}
	.titlemenu {
		width: 70%;
		float: left;
		height: 10vh;
		vertical-align: middle;
		padding: 3vh 2vh;
	}


	.panelm .productdesc {
		width: 100%;
		float: left;
		padding: 0% 0%;
		padding: 5%;
	}
	.panelm  .productimg{
		width:100%;
		float:left;
		margin-top: 5%;
	}

	.imgcup{padding:0!important;     margin-top: 8vh;}
	.panel .productdesc h3 {
		color: #ed7124;
		font-size: 1.2em;
		text-align: left;
	}

	.panelm  .productdesc p {
		font-size: 1em;
	}


	.panelm  .productimg img{width:100%;}
	.shareicons li {
		display: inline-block;
		margin-right: 1em;
		background-size: 100%;
	}
	.iconsocial{width:1.5em; height:1.5em;}
	.icon-fb{background-image: url(img/menu/social/facebook.png);}
	.icon-tw{background-image: url(img/menu/social/twitter.png);}
	.icon-ig{background-image: url(img/menu/social/instagram.png);}
	.icon-wa{background-image: url(img/menu/social/whatsapp.png);}

	.btncompra2 {
		background: #ed7124;
		width: 100%;
		float: left;
		color: #fff;
		padding: .5em 1em;
		margin: 5vh 0;
		cursor: pointer;
		text-align: center;
	}

	.prefooter {
		width: 100%;
		float: left;
		padding: 5%;
	}
	.vipscercano {
		width: 100%;
		float: left;
		padding: 0%;
		border-top: 1px solid #ccc;
	}

	.beneficiosprod {
		width: 100%;
		float: left;
		padding: 0;
		border-top: 1px solid #ccc;
		margin-top: 5vh;
	}

	.vipscercano h3 {
		color: #222;
		font-size: 1em;
		text-align: left;
		padding: 0em .5em .5em 1.5em;
		margin-bottom: .6em;
		background: url(img/marker.png);
		background-repeat: no-repeat;
		background-size: 1em;
		min-height: 2em;
		vertical-align: middle;
	}

	.inputmapf {
		padding: 12px;
		width: 100%;
		float: left;
		position: relative;
		display: inline-block;
		height: 45px;
		margin-right: 2.5%;
		background: #eaeaea;
		border: 3px dashed #bbb;
	}

	.btnmap {
		background: #ff0025;
		color: #fff;
		padding: .5em 1em;
		font-size:1em;
		position: relative;
		width: 100%;
		text-align: center;
		margin-top: 0;
		transition: all .4s ease;
		float: left;
		display: inline-block;
		border: none;
	}
	.vipscercano .btnmap{
		width:100%;
		margin-top:1em;
	}

	.beneficiosprod h3 {
		color: #ed7124;
		font-size: 1em;
		font-weight: 700;
		text-align: left;
		padding: 0em .4em .4em 1.5em;
		margin-bottom: .6em;
		background: url(img/benef-icon2.png);
		background-repeat: no-repeat;
		background-size: 1em;
		min-height: 2em;
		vertical-align: middle;
	}

	.benef {
		width: 50%;
		float: left;
		margin: 0;
		padding: 0 1em;
		transition: all .35s ease;
		min-height: 8em;
	}

	.benef{ padding: 0 2%;}

	.benef img{width: 100%;	padding:0; transition: all .35s ease;}
	.benef img:hover{width: 100%;	padding:0 1em; transition: all .35s ease;}

	#wrapper {
		text-align: center;
		width: 100%;
		float: left;
		background: #fff;
		overflow-x:hidden;

	}

	#swiper-one {
		max-width: 100%;
		margin: 0;
		padding: .5em;
		height: 11vh;
		overflow-x: hidden;
	}

	.swiper-container {
		overflow: visible;
	}

	#imgcal, #imgplatillo{cursor:pointer;}

	@media (max-width:1200px){
		.buscadormenu {
			font-size: 70%;

		}
	}

	.grid {
		width: 100%;
	}
	.detailbtn, .pidebtn{    display: none;}
</style>


<style>
.container {
	width: 100%;
	float: left;
	padding: 10vh 0 5vh 0;
	margin: 0;
}
.grid, .griditem{100%;}

.cupon:hover {
	padding: .5em 7.5%; transition:.35s all ease;

}
.cupon img{max-width:100%;     max-height: 100%;}

.titleh3{
	color: #f29100;
	font-size: 1.5em;

}
.titleh3::before {
	content: "";
	position: absolute;
	left: 0;
	top: 2em;
	height: 11px;
	width: 200px;
	border-bottom: 2px solid #f29100;
}
.griditem {
	width: 100%;
	float: left;
}

#small-dialog {
	background: white;
	padding: 0;
	text-align: left;
	max-width: 500px;
	margin: 80px auto;
	position: relative;
}

#small-dialog .mfp-close {
	color: #fff;
	text-shadow: 1px 1px 1px #333;
	font-size: 2.5em;
	font-weight: normal;
	font-family: Program, sans-serif;
}

.imgbenefp{width:100%;}
h2.titlebenef {
	color: #f29100;
	font-size: 1.2em;
	padding: 0 1em;
	margin: .5em 0;
}
.vigenciabenef {
	font-family: Program, sans-serif;
	padding: 0 1em;
	margin: 0;
	font-size: 1em;
	font-weight: normal;
}

.legalesbenef {
	font-family: Program, sans-serif;
	padding: 0 1em 1.5em 1em;
	margin: .5em 0;
	font-size: .7em;
	font-weight: normal;
	/* width: 50%; */
}

.textcupon {
	width: 100%;
	float: left;
	background: #fff;
}
.txtcpn{width: 60%;
	float: left;}
	.btncpn {
		width: 35%;
		float: left;
		bottom: 0;
		margin-top: 2em;
	}

	.btncupond {
		background: #f29100;
		color: #fff;
		padding: 15px;
		font-weight: bold;
		text-transform: uppercase;
		font-family: 'Program', sans-serif;
		font-size: 1em;
		margin-top: 10px;
		position: relative;
		float: left;
		width: 100%;
		text-align: center;
		margin-top: 10%;
		transition: all .4s ease;
	}


	.container {
		width: 100%;
		float: left;

		margin: 0;}
		.grid, .griditem{100%;}

		.productos-list{width:100%; float:left;}

		.titleh3{
			color: #f29100;
			font-size: 1.5em;
			text-align: left;

		}
		.titleh3::before {
			content: "";
			position: absolute;
			left: 0;
			top: 2em;
			height: 11px;
			width: 200px;
			border-bottom: 2px solid #f29100;
		}
		.griditem {
			width: 100%;
			float: left;
			padding-top: 5%;

		}

		.cattienda {
			text-align: left;
			background: #00b7a4;
			color: #fff;
			padding: .5em;
			width: 85%;
			margin: 1em 0;
			background-image: url(img/greenedge.png);
			background-size: contain;
			background-repeat: no-repeat;
			background-position: right;
			float: left;
			font-size: 1.5em;
		}

		.prodtienda {
			display: inline-block;
			width: 50%;
			margin:0;
			float:left;
		}

		.prodtienda img {
			width: 50%;
			display: inline-block;
			margin: 0 auto;
			padding: 0;
			float: left;
		}

		.prods{
			width: 100%;
			float: left;}

			.cupon {
				display: inline-block;
				width: 50%;
				padding: .5em;
				margin: 0;
				float: left;
				transition:.35s all ease;
				min-height:300px;


			}
			.cupones-cont{width:100%;float:left;     padding-bottom: 10vh;}

			.cupon img {
				max-width: 50%;
				max-height: 100%;
				display: inline-block;
				float: left;
			}

			.prodbtns {
				width: 50%;
				display: inline-block;
			}

			.prodbtns h3 {
				color: #ed7124;
				width: 100%;
				text-align: left;
				padding: 1em .5em;
				float: left;
			}

			.detailbtn {
				width: 100%;
				background: #ef3e42;
				padding: .75em;
				color: #fff;
				float: left;
				margin-bottom: .5em;
				cursor:pointer;
			}

			.pidebtn {
				width: 100%;
				background: #f29100;
				padding: .75em;
				color: #fff;
				float: left;
				margin-bottom: .5em;
				cursor:pointer;
			}

			.titlecontainer {
				text-align: left;
				color: #fff;
				padding: 2.5%;
				width: auto;
				margin: 1.5em 0 .5em 0;
				clip-path: polygon(0 0, 90% 0%, 85% 100%, 0% 100%);
				font-size: 1.5em;
				margin-top: 0;
			}

			.wrapper{
				width:100%;
				text-align:center;
			}

			.subfiltros{
				width:90%;
				margin:0px auto;
			}
			.subfiltros2{
				width:90%;
				margin:0px auto;
			}

			.slick-slide img{
				width:100%;
			}

			.slick-prev::before, .slick-next::before {
				font-family: 'slick';
				font-size: 20px;
				line-height: 1;
				opacity: .75;
				color: black;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			.slick-prev {left: -15px;}
			.slick-next {right: -15px;}
			.slick-dots {bottom: -25px;}
			.seccion img{width: 70%; transition: .35s ease all;}
			.seccion img:hover{padding: 5%; transition: .35s ease all;}

			.seccion h4 {
				font-size: .6em;
				margin: 0;
				padding: 0;
				font-weight: normal;
			}

			.active h4{ text-decoration: underline; font-weight: bolder;}
			.active img {
				padding: 5%!important;
				transition: .35s ease all;
			}

			.thumbcat {
				width: 100%;
				height: 150px;
				background-size: 85%;
				background-repeat: no-repeat;
				background-position: center;
				border-radius: 50%;
				position:relative
			}


			.thumbimg {
				width: 100%;
				height: 150px;
				background-size: 85%;
				background-repeat: no-repeat;
				background-position: center;
				transition:.35s all ease;

			}

			.activecat .thumbimg {
				width: 100%;
				height: 219px;
				background-size: 100%;
				background-repeat: no-repeat;
				background-position: top left;
				position: absolute;
				margin-left: 5%;
				margin-top: -8%;
				transition:.35s all ease;
			}

			.categorias {
				margin-top: 5vh;
				background: url(img/Banner_Menu.png);
				border-bottom: 1px solid #ccc;
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
				position: fixed;
				z-index: 1;
				padding: 2.5% 5% 0 5%;
			}

			.slick-track {
				top: .5em;
				padding-bottom: .5em;
			}


			.button:focus, .button:active, .button:focus * {
				outline: none !important;
				-webkit-tap-highlight-color: transparent;
			}
			.container {
				width: 100%;
				float: left;
				padding-bottom: 28vh;
				padding-bottom: 12vh;

				margin: 0;}
				.grid, .griditem{100%;}
				.outline {

					display: inline-block;

					width: 100%;

					margin: 0;

					text-align: center;

					padding: 10%;

					cursor: pointer;

					border-radius: 50%;

					font-size: .6em;

					line-height: 1.1;

					color: #fff;

					font-family: "Museo 900", sans-serif;

					height: 100%;

					height: 100% !important;

				}

				.outline {
					display: inline-block;
					width: 85%;
					margin: 0;
					text-align: center;
					padding: 10%;
					cursor: pointer;
					border-radius: 50%;
					font-size: .5em;
					line-height: 1,1;
					color: #fff;
					font-family: "Museo 900", sans-serif;
					height: 85% !important;
					margin-top: 0;
					/* position: absolute; */
					/* left: 0; */
					/* right: 0; */
					/* top: 0; */
					/* bottom: 0; */
					margin: 7.5% 7.5% 7.5% 7.5%;
				}
				.outline img {
					max-width: 100%;
					transition: .35s all ease;
					padding: 7.5%;
					filter: brightness(0) invert(1);
				}

				.button {
					padding: 12%;
					border: none;
					border-radius: 50%;
					transition: .35s all ease;
					width: 100%;
					height: auto;
					margin: 0;
				}
				.button:hover> img{transition:.35s all ease; padding:2.5% 7.5%;}

				.button.is-checked {
					border-radius: 50%;
				}

				.button{  background-size: 10%!important; background-position:center; transition: all .75s ease;}
				.dottedbg {
					background-size: 100% !important;
					background-position: center !important;
					transition: all .75s ease;
					background-repeat: no-repeat;
				}
				.namefilter {
					font-weight: normal;
					font-size: .6em;
					color: #555;
					float: left;
					width: 100%;
				}
				.bigh1 {
					text-align: center;
					/* transform: skewX(-0.06turn); */
					background: #ed7124;
					color: #fff;
					/* padding: 1% 5%; */
					/* position: relative; */
					/* float: left; */
					width: 80%;
					margin: .5em auto;
					background-image: url(img/orangeedge.png);
					background-size: 30%;
					background-repeat: no-repeat;
					background-position: right;
					font-size: 1em;
					padding: .5em;
				}

				.bigh2 {
					text-align: left;
					/* transform: skewX(-0.06turn); */
					background: #00b7a4;
					color: #fff;
					padding: 1% 5%;
					/* position: relative; */
					/* float: left; */
					width: 100%;
					margin: .5em auto;
					background-image: url(img/greenedge.png);
					background-size: 30%;
					background-repeat: no-repeat;
					background-position: right;
					font-size: 1.6em;
					padding: .5em .5em .5em 1em;
				}



				.producto {
					width: 100%;
					float: left;
					margin-top: 0;
					padding: 0 5%;
				}
				.productodesc {
					width: 65%;
					float: left;
					text-align: center;
					padding: 5%;
					padding-right:12%;
					background-image: url(img/right-arrow.png);
					background-repeat: no-repeat;
					background-position: 95% center;
					background-size: 20px;
					-webkit-transform-style: preserve-3d;
					-moz-transform-style: preserve-3d;
					transform-style: preserve-3d;
					padding-top: 2em;
					background-position: right 3em;
				}

				.productoimg{
					width: 35%; float: left; padding: 2.5%; text-align: left;
				}


				.productoimg img {
					width: 100%;
				}
				.productodesc h3 {
					color: #ed7124;
					font-size: .9em;
					text-align: left;
					position: relative;
					top: 50%;
					margin: 0;
					padding-right: 10%;
				}
				.productodesc h3::after {
					content: "";
					position: absolute;
					z-index: -1;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background-image: url(img/right-arrow.png);
					transform: scaleX(0);
					transform-origin: 0 50%;
					transition: transform .5s ease-out;
				}
				.btndetail {
					background: #ff0025;
					width: 70%;
					float: left;
					margin-right: 20%;
					color: #fff;
					padding: .5em 1em;
					cursor: pointer;
					display: none;
				}

				.btncompra {
					background: #ed7124;
					width: 70%;
					float: left;
					margin-right: 20%;
					color: #fff;
					padding: .5em 1em;
					margin: 1em 0;
					cursor: pointer;
					display: none;
				}

				.balance .productodesc h3{color:#00b7a4;}

				.main {
					width: 100%;
					z-index: 2;
					position: relative;
					transition: margin-left .2s ease-in;
					-moz-transition: margin-left .2s ease-in;
					-webkit-transition: margin-left .2s ease-in;
				}

				.panelm {
					background: #fff;
					width: 100%;
					color: #222;
					font-size: 1em;
					min-height: 100%;
				}

				/* Overlay */

				.overlayp {
					z-index: 9999;
					position: absolute;
					left: 0;
					top: 0;
					margin-left: 100%;
					transition: margin-left .2s ease-in;
					-moz-transition: margin-left .2s ease-in;
					-webkit-transition: margin-left .2s ease-in;
				}


				.overlayp.active {
					margin-left: 0;
					box-shadow: 0 0 20px rgba(0,0,0,0.5);
				}

				/* Push */

				.pushpm {
					position: fixed;

					left: 0;
					top: 0;
					z-index:0;
					margin-left: 100%;
					transition: margin-left .35s ease-in;
					-moz-transition: margin-left .35s ease-in;
					-webkit-transition: margin-left .35s ease-in;
				}

				.pushpm.active {
					margin-left: 0;
					position: fixed;
					display: block;
					height: 100%;
					overflow-y: scroll;
					z-index: 4;
				}
				.main.pactive { margin-left: -100%; }

				.close {
					width: 10%;
					min-height: 8vh;
					background: url(img/back.png);
					background-repeat: no-repeat;
					background-size: 23px;
					background-position: 15% center;
					float: left;
				}

				.header {
					height: 8vh;
					width: 100%;
					float: left;
					border-bottom: 1px solid #ccc;
					position: fixed;
					z-index: 90;
					top: 0;
					background: #fff;
				}
				.titlemenu {
					width: 70%;
					float: left;
					height: 10vh;
					vertical-align: middle;
					padding: 3vh 2vh;
				}


				.panelm .productdesc{
					width:100%;
					float:left;
					padding: 0% 6%;
					margin-top:0vh;
				}

				.panelm  .productimg{
					width:100%;
					float:left;
					margin-top: 5%;
				}

				.panel .productdesc h3 {
					color: #ed7124;
					font-size: 1.2em;
					text-align: left;
				}

				.panelm  .productdesc p {
					font-size: 1em;
				}


				.panelm  .productimg img{width:100%;}
				.shareicons li {
					display: inline-block;
					margin-right: 1em;
					background-size: 100%;
				}
				.iconsocial{width:1.5em; height:1.5em;}
				.icon-fb{background-image: url(img/menu/social/facebook.png);}
				.icon-tw{background-image: url(img/menu/social/twitter.png);}
				.icon-ig{background-image: url(img/menu/social/instagram.png);}
				.icon-wa{background-image: url(img/menu/social/whatsapp.png);}

				.btncompra2 {
					background: #ed7124;
					width: 100%;
					float: left;
					color: #fff;
					padding: .5em 1em;
					margin: 5vh 0;
					cursor: pointer;
					text-align: center;
				}

				.prefooter {
					width: 100%;
					float: left;
					padding: 5%;
				}
				.vipscercano {
					width: 100%;
					float: left;
					padding: 0%;
					border-top: 1px solid #ccc;
				}

				.beneficiosprod {
					width: 100%;
					float: left;
					padding: 0;
					border-top: 1px solid #ccc;
					margin-top: 5vh;
				}

				.vipscercano h3 {
					color: #222;
					font-size: 1em;
					text-align: left;
					padding: 0em .5em .5em 1.5em;
					margin-bottom: .6em;
					background: url(img/marker.png);
					background-repeat: no-repeat;
					background-size: 1em;
					min-height: 2em;
					vertical-align: middle;
				}

				.inputmapf {
					padding: 12px;
					width: 100%;
					float: left;
					position: relative;
					display: inline-block;
					height: 45px;
					margin-right: 2.5%;
					background: #eaeaea;
					border: 3px dashed #bbb;
				}

				.btnmap {
					background: #ff0025;
					color: #fff;
					padding: .5em 1em;
					font-size:1em;
					position: relative;
					width: 100%;
					text-align: center;
					margin-top: 0;
					transition: all .4s ease;
					float: left;
					display: inline-block;
					border: none;
				}
				.vipscercano .btnmap{
					width:100%;
					margin-top:1em;
				}

				.beneficiosprod h3 {
					color: #ed7124;
					font-size: 1em;
					font-weight: 700;
					text-align: left;
					padding: 0em .4em .4em 1.5em;
					margin-bottom: .6em;
					background: url(img/benef-icon2.png);
					background-repeat: no-repeat;
					background-size: 1em;
					min-height: 2em;
					vertical-align: middle;
				}

				.benef {
					width: 50%;
					float: left;
					margin: 0;
					padding: 0 1em;
					transition: all .35s ease;
					min-height: 8em;
				}

				.benef{ padding: 0 2%;}

				.benef img{width: 100%;	padding:0; transition: all .35s ease;}
				.benef img:hover{width: 100%;	padding:0 1em; transition: all .35s ease;}

				#wrapper {
					text-align: center;
					width: 100%;
					float: left;
					background: #fff;
					overflow-x:hidden;

				}

				#swiper-one {
					max-width: 100%;
					margin: 0;
					padding: .5em;
					height: 11vh;
					overflow-x: hidden;
				}

				.swiper-container {
					overflow: visible;
				}

				#imgcal, #imgplatillo{cursor:pointer;}


				.grid{
					width: 100%;

				}
				.detailbtn, .pidebtn{    display: none;}

				.subfiltros .slick-dots {
					bottom: -15px;
				}

				.subfiltros .slick-slider {
					margin-bottom: 0;
				}
				.subfiltros {
					margin-bottom: 10px!important;
				}

				.titlecontainer {
					margin-top: 0;
				}
				.vigencia {
					font-size: .7em;
					text-align: left;
					color: #666;
				}

				#small-dialog, #small-dialog2, #small-dialogsd {
					background: white;
					padding: 5%;
					text-align: center;
					max-width: 500px;
					margin: 80px auto;
					position: relative;
					background-image: url(img/fondo.png);
					background-size: 30%;
					background-repeat: no-repeat;
					background-position: bottom right;
				}
				#small-dialog .mfp-close, #small-dialog .mfp-close {
					color: #333;
					text-shadow: 1px 1px 1px #333;
					font-size: 2.5em;
					font-weight: normal;
					font-family: "AmsiProNarw", sans-serif;
				}


				.btnub{
					background: #f29100;
					color: #fff;
					display: inline-block;
					padding: 1em;
					width: 30%;
					min-width: 200px;
					max-width: 350px;
					font-family: "Museo 900", sans-serif;
					margin: 1em 0;
					border: none;
					margin-top: 0;
				}

				#small-dialog h3 {
					color: #f29100;
					font-size: 1.5em;
				}

				#small-dialog p{color:#333; font-size:.8em;}

				.productoimg img {

						border-radius: 0%;

					}

					#subfiltros {
	display: none;
}

.griditem {
	padding-top: 0;
}

.container {
	padding: 9vh 0 5vh 0;
}
.griditem.domicilio {
	display: none;
}



#fb2 {
	background-color: #3b5998;
	background-image: url(/img/login/fb.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: center!important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px!important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	right: 0;
	left: 0;
	translate: 50% 50%;
	color: transparent;
	padding: 1em 5%;
	font-size: .8em;
	padding-right: 10%;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px!important;
	padding-left: 5% !important;
	width: 50px!important;
	text-align: center!important;
	border-radius: 50%!important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
	padding:0!important;
}
#google2 {
	background-color: #fff;
	background-image: url(/img/google.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: center !important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px !important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	/* right: 0; */
	/* left: 0; */
	translate: 50% 50%;
	color: #fff;
	padding: 1em 5%;
	font-size: .8em;
	padding-right: 0;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px !important;
	padding-left: 5% !important;
	width: 50px !important;
	text-align: center !important;
	border-radius: 50% !important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	max-width: 50px !important;
	margin-left: 25px;
	/* border: 1px solid red; */
	position: relative;
	align-contentalign-contentalign-content: ;
}

#loginvips {
	background-color: #fff;
	background-image: url(/img/svg/cuenta.svg);
	background-size: 65%;
	background-repeat: no-repeat;
	background-position: center !important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px !important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	/* right: 0; */
	/* left: 0; */
	translate: 50% 50%;
	color: #fff;
	padding: 1em 5%;
	font-size: .8em;
	padding-right: 0;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px !important;
	padding-left: 5% !important;
	width: 50px !important;
	text-align: center !important;
	border-radius: 50% !important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	max-width: 50px !important;
	margin-left: 25px;
	/* border: 1px solid red; */
	position: relative;
	align-contentalign-contentalign-content: ;
}

.cupontyc img {
	width: 100% !important;
	box-shadow: 1px 1px 4px #ccc;
	border-radius: 20px;
}

.cupontyc .productodesc {
	display: none;
}
.titlogin, .aligncenter{margin: 0; width:100%; text-align:center;}
.productoimg {
	width: 100%;
	float: left;
	padding: 2.5% 0 1%;
	text-align: left;
}
body {
	background: #fafafa;
}
.listicons {
	float: left;
	display: inline-block;
	width: 100%;
	padding: 0 7.5% 2.5% 5%;
}

.listicons img {
	box-shadow: none;
	max-width: 33px;
	opacity: .6;
}

.listicons li {
	width: 33.3%;
	display: inline-block;
	padding: 0 7.5px;
	float: left;
}
li.lidownload {
	width: 60%;
	display: inline-block;
	margin: 0;
	float: left;
	padding: 0;
}
.sharecuponicons {
	width: 40%;
	display: inline-block;
	text-align: right;
}

.btndescargadirecta {
	width: 80%;
	border-radius: 30px;
	background: #f89e27;
	color: #fff;
	font-weight: 500;
	padding: 10px;
	display: inline-block;
	text-align: center;
	max-width: 280px;
}

			</style>
			<div class="container" style="width:100%;">

								<div class="grid">

									<!-- =========== PRODUCTO============= -->
									<div class="griditem  restaurante" data-category="restaurante">

										<div class="cupones-cont">
										
										<div onclick="openPanel('20Descuento')"  data-hash="#20Descuento" id="20Descuento" class="producto cupontyc pushm cupon-select"data-titlebenef="20% de descuento en consumo mínimo de $139" data-imgbenef="/img/2019/cupones/Cupon-20-desktop-min.png" data-download="/cupon?id=XS&promo=20descuento" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 20 y 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un descuento del 20% en tu cuenta de $139 o más. Vigencia del 20 de mayo al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja.  Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  COME BIEN." data-vigencia="31/08/2019" data-id="XS">
													<div class="productoimg"><img src="/img/2019/cupones/Cupon-20-mobile-min.png"></div>
													<div class="productodesc"></div>
										</div>
										<ul class="listicons">
											<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=XS&promo=20descuento" onclick="showpopdownload('20Descuento');" download>Descargar</a></li>
											<div class="sharecuponicons">
											<li><a onclick="couponShared('Facebook', '20Descuento');"  target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/20descuento"><img src="/img/menu/social/facebook.png" ></a></li>
											<li><a  onclick="couponShared('Twitter', '20Descuento');" target="_new" href="https://twitter.com/intent/tweet?text=20 por ciento de descuento en consumo mínimo de $139&amp;url=https://vips.com.mx/cupons/20descuento&amp;via=Vipsmx""><img src="/img/menu/social/twitter.png"></a></li>
											<li><a  onclick="couponShared('Whatsapp', '20Descuento');" target="_new" href="https://api.whatsapp.com/send?phone=&text=20%20por%20ciento%20de%20descuento%20en%20consumo%20m%c3%adnimo%20de%20%24139%20https%3a%2f%2fvips.com.mx%2fcupons%2f20descuento&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
											</div>
										</ul>
											
										
											<div onclick="openPanel('trufa')"  data-hash="#trufa" id="trufa" class="producto cupontyc pushm cupon-select"data-titlebenef="Rebanada de cheesecake de trufa más café americano o descafeinado (no rellenable) por $79 MXN" data-imgbenef="/img/2019/cupones/Cupon-cheesecake_trufa-desktop-min.png" data-download="/cupon?id=DQ&promo=trufa" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece una rebanada de cheesecake de trufa más café americano o descafeinado (no rellenable) por $79 MXN. Vigencia del 13 de junio al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Esta prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." data-vigencia="31/08/2019" data-id="DQ">
													<div class="productoimg"><img src="/img/2019/cupones/Cupon-cheesecake_trufa-mobile-min.png"></div>
													<div class="productodesc"></div>
											</div>
											<ul class="listicons">
												<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=DQ&promo=trufa" onclick="showpopdownload('trufa');" download>Descargar</a></li>
												<div class="sharecuponicons">
												<li><a onclick="couponShared('Facebook', 'trufa');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/trufa"><img src="/img/menu/social/facebook.png" ></a></li>
												<li><a onclick="couponShared('Twitter', 'trufa');"  target="_new" href="https://twitter.com/intent/tweet?text=Rebanada de cheesecake de trufa más café americano o descafeinado (sin refill) por $79 MXN&amp;url=https://vips.com.mx/cupons/trufa&amp;via=Vipsmx""><img src="/img/menu/social/twitter.png"></a></li>
												<li><a onclick="couponShared('Whatsapp', 'trufa');"  target="_new" href="https://api.whatsapp.com/send?phone=&text=Rebanada de cheesecake de trufa más café americano o descafeinado (sin refill) por $79 MXN%20https%3a%2f%2fvips.com.mx%2fcupons%2ftrufa&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
												</div>
											</ul>

											<div onclick="openPanel('Bisquets')"  data-hash="#Bisquets" id="Bisquets" class="producto cupontyc pushm cupon-select" data-titlebenef="Media orden de Bísquets con mermelada + un Cappuccino Clásico a $65" data-imgbenef="/img/2019/cupones/Cupon-bisquets-mobile-min.png" data-download="/cupon?id=8W&promo=bisquets" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 20 y 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece Media orden de Bísquets con mermelada más un Cappuccino Clásico a $65. Vigencia del 20 de mayo al 05 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja.  Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." data-vigencia="05/08/2019" data-id="8W">
													<div class="productoimg"><img src="/img/2019/cupones/Cupon-bisquets-mobile-min.png"></div>
													<div class="productodesc"></div>
											</div>
											<ul class="listicons">
												<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=8W&promo=bisquets" onclick="showpopdownload('Bisquets');" download>Descargar</a></li>
												<div class="sharecuponicons">
												<li><a onclick="couponShared('Facebook', 'Bisquets');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/bisquets"><img src="/img/menu/social/facebook.png" ></a></li>
												<li><a onclick="couponShared('Twitter', 'Bisquets');" target="_new" href="https://twitter.com/intent/tweet?text=Media orden de Bísquets con mermelada + un Cappuccino Clásico a $65&amp;url=https://vips.com.mx/cupons/bisquets&amp;via=Vipsmx"><img src="/img/menu/social/twitter.png"></a></li>
												<li><a onclick="couponShared('Whatsapp', 'Bisquets');" target="_new" href="https://api.whatsapp.com/send?phone=&text=Media%20orden%20de%20B%c3%adsquets%20con%20mermelada%20%20%20un%20Cappuccino%20Cl%c3%a1sico%20a%20%2465%20https%3a%2f%2fvips.com.mx%2fcupons%2fbisquets&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
												</div>
											</ul>
											
											<div onclick="openPanel('HuevosPoblana')"  data-hash="#HuevosPoblana" id="HuevosPoblana" class="producto cupontyc pushm cupon-select" data-titlebenef="Huevos a la poblana a $55" data-imgbenef="/img/2019/cupones/Cupon-huevos-poblana-desktop-min.png" data-download="/cupon?id=W2&promo=poblana" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Huevos a la poblana a $55 MXN. Incluye: Un jugo (300 ml) o una orden de fruta (150 g) y café americano o un té de sobre. Vigencia del 5 al 31 de agosto de 2019 de 7 a 13 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN." data-vigencia="31/08/2019" data-id="W2">
													<div class="productoimg"><img src="/img/2019/cupones/Cupon-huevos-poblana-mobile-min.png"></div>
													<div class="productodesc"></div>
											</div>
											<ul class="listicons">
												<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=W2&promo=poblana" onclick="showpopdownload('HuevosPoblana');" download>Descargar</a></li>
												<div class="sharecuponicons">
												<li><a onclick="couponShared('Facebook', 'HuevosPoblana');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/poblana"><img src="/img/menu/social/facebook.png" ></a></li>
												<li><a onclick="couponShared('Twitter', 'HuevosPoblana');" target="_new" href="https://twitter.com/intent/tweet?text=Huevos a la poblana a $55&amp;url=https://vips.com.mx/cupons/poblana&amp;via=Vipsmx"><img src="/img/menu/social/twitter.png"></a></li>
												<li><a onclick="couponShared('Whatsapp', 'HuevosPoblana');" target="_new" href="https://api.whatsapp.com/send?phone=&text=Huevos%20a%20la%20poblana%20a%20%2455%20https%3A%2F%2Fvips.com.mx%2Fcupons%2Fpoblana&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
												</div>
											</ul>
											
											<div onclick="openPanel('CarneAsada')"  data-hash="#CarneAsada" id="CarneAsada" class="producto cupontyc pushm cupon-select" data-titlebenef="Carne asada a $99" data-imgbenef="/img/2019/cupones/Cupon-carne_asada-desktop-min.png" data-download="/cupon?id=LQ&promo=carne" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Carne asada a $99 MXN. Vigencia del 5 al 31 de agosto de 2019 de 13 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN." data-vigencia="31/08/2019" data-id="LQ">
													<div class="productoimg"><img src="/img/2019/cupones/Cupon-carne_asada-mobile-min.png"></div>
													<div class="productodesc"></div>
											</div>
											<ul class="listicons">
												<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=LQ&promo=carne" onclick="showpopdownload('CarneAsada');" download>Descargar</a></li>
												<div class="sharecuponicons">
												<li><a onclick="couponShared('Facebook', 'CarneAsada');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/carne"><img src="/img/menu/social/facebook.png" ></a></li>
												<li><a onclick="couponShared('Twitter', 'CarneAsada');" target="_new" href="https://twitter.com/intent/tweet?text=Carne asada a $99&amp;url=https://vips.com.mx/cupons/carne&amp;via=Vipsmx"><img src="/img/menu/social/twitter.png"></a></li>
												<li><a onclick="couponShared('Whatsapp', 'CarneAsada');" target="_new" href="https://api.whatsapp.com/send?phone=&text=Carne%20asada%20a%20$99%20https%3A%2F%2Fvips.com.mx%2Fcupons%2Fcarne&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
												</div>
											</ul>
											
											<div onclick="openPanel('HuevosDivorciados')"  data-hash="#HuevosDivorciados" id="HuevosDivorciados" class="producto cupontyc pushm cupon-select"  data-titlebenef="Huevos divorciados con chilaquiles a $65" data-imgbenef="/img/2019/cupones/Cupon-huevos-divorciados-desktop-min.png" data-download="/cupon?id=SP&promo=divorciados" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Huevos divorciados con chilaquiles a $65 MXN. Incluye: Un jugo (300 ml) o una orden de fruta (150 g) y café americano o un té de sobre. Vigencia del 5 al 31 de agosto de 2019 de 7 a 13 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN." data-vigencia="31/08/2019" data-id="SP">
													<div class="productoimg"><img src="/img/2019/cupones/Cupon-huevos-divorciados-mobile-min.png"></div>
													<div class="productodesc"></div>
											</div>
											<ul class="listicons">
												<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=SP&promo=divorciados" onclick="showpopdownload('CarneAsada');" download>Descargar</a></li>
												<div class="sharecuponicons">
												<li><a onclick="couponShared('Facebook', 'HuevosDivorciados');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/divorciados"><img src="/img/menu/social/facebook.png" ></a></li>
												<li><a onclick="couponShared('Twitter', 'HuevosDivorciados');" target="_new" href="https://twitter.com/intent/tweet?text=Huevos divorciados con chilaquiles a $65&amp;url=https://vips.com.mx/cupons/divorciados&amp;via=Vipsmx"><img src="/img/menu/social/twitter.png"></a></li>
												<li><a onclick="couponShared('Whatsapp', 'HuevosDivorciados');" target="_new" href="https://api.whatsapp.com/send?phone=&text=Huevos%20divorciados%20con%20chilaquiles%20a%20$65%20https%3A%2F%2Fvips.com.mx%2Fcupons%2Fdivorciados&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
												</div>
											</ul>
											
										

											


										</div>


									</div>



									<!-- =========== PRODUCTO============= -->
									<div class="griditem  domicilio" data-category="domicilio">

										<div class="cupones-cont">

											<a href="#small-dialog" class="popup-with-move-anim" id="nogeo"></a>
											<a href="#small-dialogsd" class="popup-with-move-anim" id="sd"></a>
										</div>

									</div>


</div>

</div>


</div>

<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide">

	<div class="<?php echo $shownologged; ?>">
	<p style="padding: 10%; padding-bottom: 0;"><span style="color: #F89E27; font-size: 2em; font-weight: bold;">¡Gracias!</span><br><br> Encuéntralo en tu carpeta de fotos. <br>Si tu descarga no inicia automáticamente haz click <a style="color:#F89E27;" class="clickhere">Aquí</a><br><br>¿Quieres obtener promociones y descuentos exclusivos en todas tus visitas?</p>
	<br>
	
	<a href="cuenta" class="btnub">REGÍSTRATE</a>
	</div>

	<div class="<?php echo $showlogged; ?>">
	<p style="padding: 10%; padding-bottom: 0;"><span style="color: #F89E27; font-size: 2em; font-weight: bold;">¡Gracias!</span><br><br> Encuéntralo en tu carpeta de fotos. <br>Si tu descarga no inicia automáticamente haz click <a  style="color:#F89E27;" class="clickhere">Aquí</a><br></p>
		
	<br>
	<a href="ubicaciones" class="btnub" onclick="clickLocationsearched();">BUSCA TU VIPS</a>
	</div>
</div>

<div id="small-dialogsd" class="zoom-anim-dialog mfp-hide">

		<div class="<?php echo $shownologged; ?>">
	<p style="padding: 10%; padding-bottom: 0;"><span style="color: #F89E27; font-size: 2em; font-weight: bold;">¡Gracias!</span><br><br> Encuéntralo en tu carpeta de fotos. <br><br></p>
	<br>
	<a href="tel:018009008477" class="btnub boton-tel">LLAMA AHORA</a>
	</div>

	<div class="<?php echo $showlogged; ?>">
	<p style="padding: 10%; padding-bottom: 0;"><span style="color: #F89E27; font-size: 2em;">¡Gracias!</span><br><br> Encuéntralo en tu carpeta de fotos. <br><br></p>
	<br>
	<a href="tel:018009008477" class="btnub boton-tel">LLAMA AHORA</a>
	</div>
</div>
<script src='slick/slick.min.js'></script>
<script src='//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
<script>// external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
	itemSelector: '.griditem',
	layoutMode: 'fitRows'
});

$(document).ready(function(){
	$('.subfiltros').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		accessibility: true,
		arrows: false,
		dots:true,
		swipe: false,
	});
});


$('body').on('click', '.btnredcupon', function() {

	$("#nogeo").trigger("click");

//alert("Por favor inicia sesión para acceder a este beneficio");

});

$('body').on('click', '.btnsd', function() {
	$("#sd").trigger("click");
//alert("Por favor inicia sesión para acceder a este beneficio");
});


function openPanel2(id){

	$(this).hide();

	var imagen = $(this).attr('data-imgbenef');
	var nombre = $(this).attr('data-titlebenef');
	var descripcion = $(this).attr('data-legales');
	var vigencia = $(this).attr('data-vigencia');
	var categoria = "Cupones";

	$(".titlemenu").text(categoria);
	$(".productdesc h3").text(nombre);
	$(".productdesc p").text(descripcion);
	$(".front img").attr("src", imagen);
	$(".back img").attr("src", imagen);
	$(".btnredcupon").attr("href", imagen);


	var o=$('.overlayp'),r=$('.revealp'),p=$('.pushpm'),ob=$('.overlay'),rb=$('.reveal'),pb=$('.pushm'),m=$('.main'),panel=$('.panelm');

	m.toggleClass('pactive');
	p.toggleClass('active');


}

function openPanel(id){
	$(".btnredcupon").removeClass("btnsd");
	var ids = "#"+id;
	var nombre = $(ids).attr('data-titlebenef');


	var idpromo = $(ids).attr('data-id');
	var imagen = $(ids).attr('data-imgbenef');
	var imagen2 = $(ids).attr('data-download');
	var nombre = $(ids).attr('data-titlebenef');
	var descripcion = $(ids).attr('data-legales');
	var vigencia = $(ids).attr('data-vigencia');
	var categoria = "Cupones restaurante";


	$(".titlemenu").text(categoria);
	$(".productdesc h3").text(nombre);
	$(".productdesc p").text(descripcion);
	$(".productdesc h4").text("Válido hasta: "+vigencia);
	$(".productdesc .idpromo").text(idpromo);
	$(".imgcup").attr("src", imagen);
	$(".btnredcupon").attr("href", imagen2);
	$("#hideshowdelivery").addClass("hide");



}

function showpop(){
	$("#nogeo").trigger("click");
	var idpromo = $(".productdesc .idpromo").text();
		var cupon = $(".productdesc h3").text();
		var vigencia = $(".productdesc h4").text();
		var imagen = $(".imgcup").attr("src");
		var linkcoupon = $(".descarga-cupon-m").attr("href");
		$(".clickhere").attr("href", linkcoupon);
		setTimeout(function(){
					$.ajax({type:"GET", url:"/cuponsession.php", success: function(text){
				
				setTimeout(function(){
					
				
					if ( self !== top ) {
						//iframe
						analytics.track("Coupon Downloaded", {
								  id_promo: idpromo,
								  id_coupon: text,
								  coupon: cupon, 
								  vigencia: vigencia,
								  url_imagen: imagen,
								  source: 'sorprendeteporelsabor.com',
								  button: 'PopUp'
								  
						});
					}
					
					else{
						analytics.track("Coupon Downloaded", {
							  id_promo: idpromo,
							  id_coupon: text,
							  coupon: cupon, 
							  vigencia: vigencia,
							  url_imagen: imagen,
							  source: 'vips.com.mx',
							  button: 'PopUp'
							  
					});
					}
					
					
				}, 4000)
		
							
					
				  },error: function(XMLHttpRequest, textStatus, errorThrown){
					// There's been an error, do something here
				  }
	});
	}, 2500)
}

	function showpopdownload(cupon){
		$("#nogeo").trigger("click");
		var cuponid = "#"+cupon;
		var idpromo = $(cuponid).attr("data-id");
		var download = $(cuponid).attr("data-download");
		var cupontitle = $(cuponid).attr("data-titlebenef");
		var vigencia = $(cuponid).attr("data-vigencia");
		var imagen = $(cuponid).attr("data-imgbenef");
		var linkcoupon = $(".descarga-cupon-m").attr("href");
		$(".clickhere").attr("href", download);
		setTimeout(function(){
					$.ajax({type:"GET", url:"/cuponsession.php", success: function(text){
				
				setTimeout(function(){
					
					
					if ( self !== top ) {
						//iframe
						analytics.track("Coupon Downloaded", {
								  id_promo: idpromo,
								  id_coupon: text,
								  coupon: cupontitle, 
								  vigencia: vigencia,
								  url_imagen: imagen,
								  source: 'sorprendeteporelsabor.com',
								  button: 'Externo'
								  
						});
					}
					
					else{
						analytics.track("Coupon Downloaded", {
							  id_promo: idpromo,
							  id_coupon: text,
							  coupon: cupontitle, 
							  vigencia: vigencia,
							  url_imagen: imagen,
							  source: 'vips.com.mx',
							  button: 'Externo'
							  
					});
					}
					
					
					
					
				}, 4000)
		
							
					
				  },error: function(XMLHttpRequest, textStatus, errorThrown){
					// There's been an error, do something here
				  }
	});
	
	}, 2500)

	}
	
		function couponShared(red, cupon){
		var cuponid = "#"+cupon;
		var idpromo = $(cuponid).attr("data-id");
		var cupontitle = $(cuponid).attr("data-titlebenef");
		var vigencia = $(cuponid).attr("data-vigencia");
		var imagen = $(cuponid).attr("data-imgbenef");
		
		if ( self !== top ) {
						//iframe
						analytics.track("Coupon Shared", {
								  id_promo: idpromo,
								  coupon: cupontitle, 
								  vigencia: vigencia,
								  url_imagen: imagen,
								  source: 'sorprendeteporelsabor.com',
								  destination: red
								  
			});
		}
		
		else{
			analytics.track("Coupon Shared", {
				  id_promo: idpromo,
				  coupon: cupontitle, 
				  vigencia: vigencia,
				  url_imagen: imagen,
				  source: 'vips.com.mx',
				  destination: red
				  
		});
		}


	}


$(document).ready(function() {

	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,

		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});

});




$(document).ready(function(){

    // the #-prefixed portion of the URL that serves
    // as a fragment identifier for the document, from
    // www.example.com/page#fragment
    // document.location.hash would return #fragment
    let hash = document.location.hash;

	var id1 = "*[data-hash ='"+ hash +"']";
	//alert(id1);

    // because the hash identifies a fragment of
    // the document by its id, and the '#' character
    // specifies an id-selector in CSS we pass that
    // value to jQuery to select the correct element
    // and call the click() method - without arguments -
    // to trigger a click event:

	setTimeout(function(){

			$(id1).click();
			//$(id1).hide();

		}, 500);

});



    $(".producto").click(function(e) {
		var id = $(this).attr("data-hash");

		if(history.pushState) {
		history.pushState(null, null, id);
		}
		else {
			location.hash =  id;
		}

    });
	
		$(".cupontyc").click(function(){
		var cupon = $(this).attr("data-titlebenef");
		var vigencia = $(this).attr("data-vigencia");
		var imagen = $(this).attr("data-imgbenef");
	
					
		analytics.track("Coupon Clicked", {
						  cupon: cupon, 
						  vigencia: vigencia,
						  url_imagen: imagen,
						  
						  
				});
					


	})

</script>



</div>


<!-- Footer =============================-->
<?php include('footerm.php');?>
