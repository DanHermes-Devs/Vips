<?php
header('Location: terminosycondiciones-m');
include('headerm.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
}
else{
	header('Location: /terminos-y-condiciones');
	exit(0);
}
?>
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<link rel="stylesheet" href="/css/magnific-popup.css">
<div class='pushpm panelm'>
	<div class="header">
		<div class='close'></div>
		<div class="logo">
			<a href="m"><img src="img/Logo_Vips.png"></a>

		</div>
		<div class="titlemenu">
		Menú Desayunos</div>
	</div>
	<a href="" id="urls">
		<img class="imgcup" src="" style="width:100%;" alt="" />
	</a>
	<div class="productdesc">




		<h3 style="color:#ed7124; font-size:1em;"></h3>

		<p style="color:#333; font-size:.7em; text-align: justify;"></p>



	</div>


	<!-- Imagen platillo=============================-->



</div>

<div class="main">


	<?php include('lateral.php');?>

	<style>

	.btnredcupon {
		padding: 1em;
		width: 100%;
		color: #fff;
		text-align: center;
		background: #EB7124;
		float: left;
		margin: 1em 0;
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
		font-family: 'Program',sans-serif;
		font-weight: lighter;

	}

	.active h4{ text-decoration: underline; font-weight: bolder;}



	.imgcat{width: 10%; display: inline-block; margin: 0 1%;}

	.imgcat img{width: 80%; float: left;}



	.producto{width:50%; float: left; margin-top:2em;     padding: 5%;}
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
	font-size: .7em;
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
	width: 35%; float: left; padding: 2.5%; text-align: left;
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
	font-family: "Program", sans-serif;
	text-align: left;
	position: relative;
	top: 98%;
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
		margin-bottom: .7em;
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
		margin-bottom: .7em;
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
	padding: 9vh 0 5vh 0;
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
	font-family: 'Program', sans-serif;
}

.imgbenefp{width:100%;}
h2.titlebenef {
	color: #f29100;
	font-size: 1.2em;
	padding: 0 1em;
	margin: .5em 0;
}
.vigenciabenef {
	font-family: 'Program', sans-serif;
	padding: 0 1em;
	margin: 0;
	font-size: 1em;
	font-weight: normal;
}

.legalesbenef {
	font-family: 'Program', sans-serif;
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
			padding-top: 0%;

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
			.cupones-cont{width:100%;float:left;     padding-bottom: 0vh;}

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
				font-size: .7em;
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

					font-size: .7em;

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
					font-size: .7em;
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
					font-size: 1.7em;
					padding: .5em .5em .5em 1em;
				}



				.producto {
					width: 100%;
					float: left;
					margin-top: 0;
					padding: 2.5% 5%;
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
					top: 98%;
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
					height: 90%;
					overflow-y: scroll;
					z-index: 4;
					min-height: 90%;
				}
				
				#site-wrapper {
					position: relative;
					width: 100%;
					height: 92%;
					overflow: auto;
					padding-bottom: 0 !important;
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
					margin-bottom: .7em;
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
					margin-bottom: .7em;
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
							.disclaimernfl {
	width: 100%;
	float: left;
	padding: 5%;
	text-align: center;
	font-size: .75em;
	color: #444;
}

main{margin-bottom:10vh;}
.cupontyc .productoimg {
	width: 100%;
}
.cupontyc img {
	width: 100% !important;
	box-shadow: 1px 1px 4px #ccc;
	border-radius: 20px;
}

.cupontyc .productodesc {
	display: none;
}


#showparticipantes {
	color: #f29100;
	margin: 5px 0;
	float: left;
	width: 100%;
	cursor: pointer;
	font-weight: 500;
}
			</style>
			<div class="container" style="width:100%;">




				<div class="grid">

					<!-- =========== PRODUCTO============= -->
					<div class="griditem  restaurante" data-category="restaurante">

						<div class="cupones-cont">

							
							
							
							
							<div onclick="openPanel('cClasicos')" id="cClasicos" class="producto cupontyc pushm" data-titlebenef="Clásicos 2 x 1" data-urls="clasicos-m" data-imgbenef="img/adicionales/adicionalClasicos.png" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución No. 1267 Piso 20 y 21 , Col. Alpes, Alc. Álvaro Obregón, C.P. 01040, CDMX; te ofrece la promoción: Clásicos Vips 2x1. Válido de lunes a domingo de 7 a.m. al cierre, del 4 de marzo al 26 de mayo del 2019 y/o hasta agotar existencias. Ordena un clásico Vips de los platillos participantes y te damos otro igual o de menor precio sin costo. Platillos participantes:  Sopa de Tortilla, Caldo Tlalpeño, Sopa Especial Vips, Tacos dorados de pollo, Molletes tradicionales, Vips clásica con queso, Vips Club, Pepitos Vips de pollo, Enchiladas Suizas, Enchiladas de Mole, Cheesecake con fresas y crepa de cajeta; No aplica en platillos no mencionados. Se descontará al momento de pagar en caja el o los platillos de menor precio del menú vigente. Los platillos no incluyen bebida. Válido únicamente en consumo dentro del restaurante. Válido en todos los restaurantes Vips de la República Mexicana, excepto aeropuertos y comedores. No acumulable con otras promociones, cupones, descuentos, tarjeta de lealtad, servicio a domicilio ni venta en mostrador. Puede aplicar más de una promoción de Clásicos Vips al 2x1 en los platillos participantes por cliente y/o por ticket. Consulta términos y condiciones en: vips.com.mx. Precios en MXN. Nuestros precios incluyen IVA. CUIDA EL AGUA." >

								<div class="productoimg">
									<img src="/img/2019/banners/Adicional_Abril_2x1Clasicos.png">

								</div>

								<div class="productodesc">
								</div>

							</div>

							
						
							<div onclick="openPanel('cdesayunos79')" id="cdesayunos79" class="producto cupontyc  pushm" data-titlebenef="Desayunos $79" data-urls="desayunos-79-m" data-imgbenef="/img/2019/banners/Desayunos_79 _Carrusel.png" data-legales="Operadora Vips, S de R.L. de C.V., en Av. Revolución No. 1267 Piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, te ofrece la promoción “Desayunos a $79” c/u. Vigencia del 29 de abril al 04 de agosto de 2019 o hasta agotar existencias, de lunes a domingo de 7 a 13 hrs. Platillo a elegir: Huevos placeros (2 pzas) revueltos con chicharrón sobre salsa chipotle, acompañados de frijoles refritos, Huevos arrieros (2 pzas) bañados con salsa verde asada y servidos con papas bravas, Rollo de huevo campesino relleno de queso panela, en salsa de frijol, acompañados de papa hash brown o Huevos con queso y rajas (2 pzas) revueltos con rajas y queso panela sobre salsa verde, acompañados de frijoles refritos. Válido en todos los restaurantes Vips de la República Mexicana, excepto aeropuertos y comedores. Promoción válida únicamente en restaurante, no aplica servicio a domicilio ni para llevar. No acumulable con otras promociones, cupones, descuentos ni tarjeta de lealtad. Consulta términos y condiciones en: vips.com.mx. Todos nuestros precios incluyen IVA. CUIDA EL AGUA" >

								<div class="productoimg">
									<img src="/img/2019/banners/Desayunos_79 _Mobile.png">

								</div>

								<div class="productodesc">

									<h3>Desayunos desde $79</h3>



								</div>

							</div>
							


							
							<div onclick="openPanel('ComidaDia')" id="ComidaDia" class="producto cupontyc pushm" data-titlebenef="Comida del día" data-urls="comida-del-dia" data-imgbenef="/img/2019/banners/BannerComidaDelDia.png" data-legales="
						Incluyen una sopa del día (270 mL) y una bebida (360 mL refresco o naranjada o limonada o agua de sabor) No incluye refrescos en lata. Consulta precios en el menú vigente. Válido 13 hrs al cierre. Del 29 de abril al 04 de agosto de 2019. Nuestros precios incluyen IVA/ Precios en MXN. CUIDA DEL AGUA" >

								<div class="productoimg">
									<img src="/img/2019/banners/ComidaDelDia-Abril_Mobile.png">

								</div>

								<div class="productodesc">
								</div>

							</div>
							
							
							<div onclick="openPanel('PolloVips')" id="PolloVips" class="producto cupontyc pushm" data-titlebenef="Pollo estilo Vips" data-urls="#" data-imgbenef="/img/2019/banners/Adicional_desktop_pollo.png" data-legales="
						Operadora Vips, S. de R.L. de C.V., en Av. Revolución 1267  pisos 20-21, Col. Alpes. Alc. Álvaro Obregón, CDMX, CP 1040. Te ofrece: Pollo Estilo Vips (pollo horneado). Cuarto de pollo que incluye: dos piezas de pollo horneado, dos guarniciones a elegir: una salsa y pan o tortillas por $109 o medio pollo que incluye: cuatro piezas de pollo horneado, dos guarniciones a elegir, una salsa a elegir y pan o tortillas por $199. Vigencia del 20 de mayo al 31 de diciembre de 2019 y/o hasta agotar existencias, de 13 hrs a 18 hrs. Válido únicamente para consumo dentro de restaurante, no aplica en servicio a domicilio ni para llevar. Aplica con descuentos, cupones o TDL siempre y cuando se cumpla con condiciones específicas de los mismos. Válido en restaurantes Vips de CDMX y área metropolitana excepto comedores, consulta tiendas en <a href='https://vips.com.mx/tyc-pollo' style='color:#f29100'>aquí</a>. Todos nuestros precios incluyen IVA. Precios en MXN. CUIDA EL AGUA." >

								<div class="productoimg">
									<img src="/img/2019/banners/Adicional_mobile_pollo.png">

								</div>

								<div class="productodesc">
								</div>

							</div>
							
							
	
							

							
							<div onclick="openPanel('c5')" id="c5" class="producto cupontyc pushm" data-titlebenef="Tarjeta de Lealtad Vips" data-urls="cuenta" data-imgbenef="img/2019/banners/tycadicional.png" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Alc. Álvaro Obregón, CDMX, C.P. 01040, te ofrece descuento del 10% al50% sobre tu cuenta individual según tu número de visita a restaurantes Vips. Vigencia del 1° al 31 de mayo de 2019. Aplica en todos los restaurantes Vips de la República Mexicana excepto comedores. Válido en consumo mínimo individual de $119 en alimentos y bebidas dentro de restaurante. Para hacer válido el descuento deberás escanear el código de tu tarjeta de lealtad en caja. Limitado a un descuento por visita y por persona. El descuento puede variar según el número de visita (10%, 15%, 20%, 40% o 50%). Debe haber por lo menos 3 horas de diferencia entre cada visita para aplicar el descuento. En caso de fallo en sistema se aplicará el 10% a la cuenta individual del portador de la tarjeta. Los descuentos se reinician al completar el ciclo dentro de la vigencia. El descuento aplicable aparece automáticamente en sistema dependiendo del número de visitas registradas. No acumulable con otras promociones, cupones, descuentos. No aplica en consumos para llevar ni servicio a domicilio. Nuestros precios incluyen IVA. CUIDA EL AGUA." >

								<div class="productoimg">
									<img src="/img/2019/banners/promo.png">

								</div>

								<div class="productodesc">
								</div>

							</div>
							

							<div onclick="openPanel('c35')" id="c35" class="producto cupontyc pushm" data-titlebenef="Cumpleaños" data-urls="cumpleanos-m" data-imgbenef="/img/2019/banners/AdicionalCumpleanos.png" data-legales="Recibe una rebanada de cheesecake de fresas con tu consumo. Válido de 8 a 22 hrs. Vigencia del 3 de enero de 2018 hasta diciembre de 2019. Aplica en todos los restaurantes Vips de la República Mexicana, excepto Veracruz Acuario, Veracruz Continental, Tuxtla Gutiérrez, Xalapa Centro, Xalapa Cristal, Aeropuertos y comedores. No incluyen refresco. Nuestros precios incluyen IVA. Precios en MXN. Cuida el agua." >

								<div class="productoimg">
									<img src="/img/2019/banners/AdicionalCumpleanosMobile.png">

								</div>

								<div class="productodesc">
								</div>

							</div>


							<div onclick="openPanel('cDisney')" id="cDisney" class="producto cupontyc pushm" data-titlebenef="Menú niños Disney" data-urls="menu-infantil-disney-m" data-imgbenef="img/adicionales/AdicionalDisney.png" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución No. 1267 Pisos 20-21, Col. Alpes, Álvaro Obregón, C.P. 01040, Ciudad de México, te obsequia uno de los 12 spyrolocos coleccionables de Disney Animation Studios, en la compra de un Divertipack de desayunos, comidas o cenas del menú infantil.  Vigencia del 4 de marzo al 30 de junio de 2019, o hasta agotar existencias.  También puedes adquirir tu spyroloco en la compra de una bebida, orden de fruta o sopa del menú infantil más $35. La entrega de spyroloco será de manera aleatoria, no podrá elegirse y estará sujeto a disponibilidad de producto en restaurante. Limitado a 310,000 spyrolocos a nivel nacional. En caso que la unidad no cuente con spyrolocos disponibles, podrá entregar un objeto de valor percibido similar. Los spyrolocos no se venden de manera individual.  Consulta productos y precios del Divertipack, y menú infantil en restaurante o en vips.com.mx. Válido en todos los Vips de la República Mexicana excepto comedores. Precios en MXN. Todos nuestros precios incluyen IVA. COME BIEN. Las imágenes son ilustrativas, la presentación del producto puede variar." >

								<div class="productoimg">
									<img src="/img/2019/banners/AdicionalSpyroloco.png">

								</div>

								<div class="productodesc">

								</div>

							</div>
							
							<div onclick="openPanel('nuevosChilaquiles')" id="nuevosChilaquiles" class="producto cupontyc pushm" data-titlebenef="Nuevos Chilaquiles" data-urls="nuevos-chilaquiles-m" data-imgbenef="/img/2019/banners/Banner-Chilaquiles.png" data-legales="Chilaquiles Norteños<br>
					Chilaquiles Toluqueños<br>
					Consulta precios en el menú vigente. Válido de 07 a 13 hrs. Del 29 de abril al 02 junio de 2019. Nuestros precios incluyen IVA/ Precios en MXN<br><br>


					Chilaquiles Vips<br>
					Chilaquiles Suizos<br>
					Chilaquiles Yucatecos<br>
					Consulta precios en el menú vigente. Válido de 07 hr al cierre. Del 29 de abril al 02 junio de 2019. Nuestros precios incluyen IVA/ Precios en MXN" >
								<div class="productoimg">	<img src="/img/2019/banners/Adicional Chilaquiles.png">	</div>
								<div class="productodesc"></div>
							</div>
							
							<div onclick="openPanel('nochesAntojo')" id="nochesAntojo" class="producto cupontyc pushm" data-titlebenef="Noches de antojo" data-urls="noches-de-antojo-m" data-imgbenef="/img/adicionales/AdicionalNochesDeAntojo2.png" data-legales="Operadora Vips S de RL de CV en Av. Revolución No. 1267 Piso 20 y 21 , Col. Alpes,  Álvaro Obregón, CP 01040, CDMX; te ofrece la promoción: Noches de Antojo, platillos a $65 cada uno. Válido de lunes a domingo de 18 a 23hrs, del 9 de enero al 2 de junio del 2019 y/o hasta agotar existencias. Platillos participantes: Pozole, Tacos ahogados de pollo, familia de hamburguesas: BBQ Tocino, Champions, Hawaiana, Habanero crunch, Vips clásica con queso, Mexicana; familia de entradas: Alitas (salsa: BBQ picante, hot wings o mixtas), Boneless (salsa: BBQ picante, hot wings o mixtas), Papas a la francesa con chilli, Papas a los tres quesos, Papa chilli, Tacos botaneros, Queso fundido, Plato mixto; familia de sándwiches: Vips Club, Sándwich California y Pepitos Vips de Pollo; y postres: Cheesecake de fresa, Cheesecake de guayaba, Cheesecake de trufa, pay helado de limón y crepas de cajeta, por solo $65 cada uno. No aplica en platillos no mencionados. Los platillos no incluyen bebida. Válido en consumo dentro de restaurante. No acumulable con otras promociones, cupones, descuentos, tarjeta de lealtad, servicio a domicilio ni venta en mostrador. Aplica más de un platillo de antojo en el mismo ticket. Consulta términos y condiciones en: vips.com.mx. Precios en MX. Nuestros precios incluyen IVA. CUIDA EL AGUA." >

								<div class="productoimg">
									<img src="/img/2019/banners/Banner_noches_antojo_mobile.png">

								</div>

								<div class="productodesc">
								
								</div>

							</div>


			
							<!--Cupones-->
							<div onclick="openPanel('cuponHuevos')" id="cuponHuevos" class="producto cupontyc pushm" data-titlebenef="Desayuno Huevos Suizos $99" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/huevos.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un desayuno de Huevos Suizos a $99 MXN. El desayuno incluye no incluye: Un jugo (300 ml) o fruta (150 g) y café americano (Rellenable) o un té (de sobre). Vigencia del 18 de abril al 31 de julio de 2019 de 7 a 14  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >
								<div class="productoimg">	<img src="/img/2019/cupones/huevosmobi1.jpg">	</div>
								<div class="productodesc"></div>
							</div>


							<div onclick="openPanel('cuponBoneless')" id="cuponBoneless" class="producto cupontyc pushm" data-titlebenef="Boneless $89" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/boneless.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platilllo de Boneless Mixtas a $89 MXN. Vigencia del 18 de abril al 31 de julio de 2019 de 13 a 23  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >

								<div class="productoimg">
									<img src="/img/2019/cupones/bonelessmobile1.jpg">

								</div>

								<div class="productodesc">

								</div>

							</div>



							<div onclick="openPanel('cuponBisquets')" id="cuponBisquets" class="producto cupontyc pushm" data-titlebenef="Media orden de Bisquets + capuccino clasico $59" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/bisquets.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece media orden de bisquets con mermelada + un capuccino. Vigencia del 18 de abril al 31 de julio de 2019 de 7 a 23  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >

								<div class="productoimg">
									<img src="/img/2019/cupones/bisquetsmobile1.jpg">

								</div>

								<div class="productodesc">
								</div>

							</div>



							<div onclick="openPanel('cuponHawaiana')" id="cuponHawaiana" class="producto cupontyc pushm" data-titlebenef="Hamburguesa Hawaiana $119" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/hawaiana.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece una hamburguesa hawaiana a $119 MXN. Vigencia del 18 de abril al 31 de julio de 2019 de 13 a 23  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >

								<div class="productoimg">
									<img src="/img/2019/cupones/hawainamobile1.jpg">

								</div>

								<div class="productodesc">

								</div>

							</div>



							
							<div onclick="openPanel('cuponArrachera')" id="cuponArrachera" class="producto cupontyc pushm" data-titlebenef="Arrachera Norteña $159" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/arrachera.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Arrachera Norteña a $159 MXN. Vigencia del 18 de abril al 31 de julio de 2019 de 13 a 23  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >

								<div class="productoimg">
									<img src="/img/2019/cupones/arreacheramobile1.jpg">

								</div>

								<div class="productodesc">

								</div>

							</div>


							<div onclick="openPanel('cuponMarinerito')" id="cuponArrachera" class="producto cupontyc pushm" data-titlebenef="Desayuno Marinerito $49" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/marinerito.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece desayuno Marinerito a $49 (paquete mini menú vips). Vigencia del 18 de abril al 31 de julio de 2019 de 7 a 14  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >

							<div class="productoimg">
								<img src="/img/2019/cupones/marineritomobile1.jpg">

							</div>

							<div class="productodesc">

							</div>

							</div>



							<div onclick="openPanel('cuponHamburguesita')" id="cuponHamburguesita" class="producto cupontyc pushm" data-titlebenef="Hamburguesita con Queso $69" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/hamburguesita.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece comida de hamburguesita con queso a $69 (paquete del mini menú vips). Vigencia del 18 de abril al 31 de julio de 2019 de 13 a 23  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >

							<div class="productoimg">
								<img src="/img/2019/cupones/hamburgesitaquesomobile1.jpg">

							</div>

							<div class="productodesc">

							</div>

							</div>


							
							<div onclick="openPanel('cuponMiniEnchiladas')" id="cuponMiniEnchiladas" class="producto cupontyc pushm" data-titlebenef="Mini enchiladas Suizas $59" data-urls="promociones-m" data-imgbenef="/img/2019/cupones/enchiladas.jpg" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece comida de Mini enchiladas suizas a $59 (paquete del mini menú vips). Vigencia del 18 de abril al 31 de julio de 2019 de 7 a 23  hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." >

							<div class="productoimg">
								<img src="/img/2019/cupones/minienchiladasmobile1.jpg">

							</div>

							<div class="productodesc">

							</div>

							</div>
							
			

						</div>

					</div>

				</div>

			</div>



		</div>

		<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
		<div id="small-dialog" class="zoom-anim-dialog mfp-hide">

			<p style="padding: 10%; padding-bottom: 0;"><span style="color: #F89E27; font-size: 2em;">¡Gracias!</span><br><br> Esperamos que disfrutes mucho tu visita a Vips. <br><br> ¿Quieres obtener promociones <br> y descuentos exclusivos?</p>
			<br>
			<a href="cuenta" class="btnub">REGÍSTRATE</a>
		</div>

		<div id="small-dialogsd" class="zoom-anim-dialog mfp-hide">

			<p style="padding: 10%; padding-bottom: 0;"><span style="color: #F89E27; font-size: 2em;">¡Ya tienes tu cupón!</span><br> <br> Encuéntralo en tu carpeta de fotos. <br><br>Ordena ahora <br><span>Usando el código: NLI007</span></p>
			<br>
			<a href="vips-a-domicilio" class="btnub">#VipsVenAMi</a>
		</div>
	</script><script src='slick/slick.min.js'></script>
	<script src='//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
<script>// external js: isotope.pkgd.js
	function verVips(){
		
		$("#participantes").slideToggle(300);
	}
// init Isotope
var $grid = $('.grid').isotope({
	itemSelector: '.griditem',
	layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
  	var number = $(this).find('.number').text();
  	return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
  	var name = $(this).find('.name').text();
  	return name.match( /ium$/ );
  }
};
// bind filter button click
$('body').on( 'click', '.button', function() {
	var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.subfiltros').each( function( i, buttonGroup ) {

	var $buttonGroup = $( buttonGroup );

	$buttonGroup.on( 'click', '.button', function() {

		$buttonGroup.find('.is-checked').removeClass('is-checked');

		$( this ).addClass('is-checked');

		$(this).height($(this).width());

		$(this).children(".outline").height($(this).children(".outline").width());

		$(".button").css('border', 'none');
		$(".button").css('background-image', 'none');
		$( ".button" ).removeClass('dottedbg');

		var bgcolor =  $(this).children(".outline").css("background-color");

		function rgb2hex(rgb) {
			if (  rgb.search("rgb") == -1 ) {
				return rgb;
			} else {
				rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);
				function hex(x) {
					return ("0" + parseInt(x).toString(16)).slice(-2);
				}
				return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
			}
		}

		var hex = rgb2hex(bgcolor);
		var bgcolor2 = hex.replace("#", "");

		var svgbg="data:image/svg+xml;utf8,<svg viewBox='0 0 120 120' version='1.1' xmlns='http://www.w3.org/2000/svg'><circle cx='60' cy='60' r='50' fill='white'/><circle cx='60' cy='60' r='47' stroke='%23"+bgcolor2+"' stroke-width='4' stroke-dasharray='0 9' stroke-linecap='round' fill='transparent'/></svg>";
	//$( this ).css('border', '4px dotted '+bgcolor)
	$( this ).addClass('dottedbg');

	$( this ).css('background-image', 'url("'+svgbg+'")');

	$(".titlecontainer").css('background-color', bgcolor);

});
	$( ".producto:even" ).css( "background-color", "#f6f6f6" );

});

$('.pidebtn').click(function(){
	var url = "https://vips.sindelantal.mx";
	window.open(url, '_blank');


});


$(document).ready(function(){
	$( ".producto:even" ).css( "background-color", "#f6f6f6" );
	$('.subfiltros').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		accessibility: true,
		arrows: false,
		dots:true,
		swipe: false,

	});

	marginSub();
});
function marginSub(){
	var cath= $(".categorias").height();
	$("#contenedor").css("padding-top", (cath -20) +"px");
	var ih = $(".productoimg img").width();
	//$(".productoimg img").height(ih);
	$( ".producto:even" ).css( "background-color", "#f6f6f6" );

}


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
	$(".productdesc p").html(descripcion);
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

	var urls = $(ids).attr('data-urls');
	var imagen = $(ids).attr('data-imgbenef');
	var nombre = $(ids).attr('data-titlebenef');
	var descripcion = $(ids).attr('data-legales');
	var vigencia = $(ids).attr('data-vigencia');
	var categoria = "Promociones Vips";



	$(".titlemenu").text(categoria);
	$(".productdesc h3").text(nombre);
	$(".productdesc p").html(descripcion);
	$(".productdesc h4").text("Válido hasta: "+vigencia);
	$(".imgcup").attr("src", imagen);
	$(".btnredcupon").attr("href", imagen);
	$("#urls").attr("href", urls);

}

function openPanelsd(id){
	$(".btnredcupon").addClass("btnsd");
	var ids = "#"+id;
	var nombre = $(ids).attr('data-titlebenef');


	var imagen = $(ids).attr('data-imgbenef');
	var nombre = $(ids).attr('data-titlebenef');
	var descripcion = $(ids).attr('data-legales');
	var vigencia = $(ids).attr('data-vigencia');
	var categoria = "";


	$(".titlemenu").text(categoria);
	$(".productdesc h3").text(nombre);
	$(".productdesc p").html(descripcion);
	$(".imgcup").attr("src", imagen);
	$(".btnredcupon").attr("href", imagen);

}


$(window).load(function() {
	$(".button").each(function () {
		var bg= $(this).attr("data-color");
		$(this).children('.outline').css("background-color", bg);
		$( ".producto:even" ).css( "background-color", "#f6f6f6" );

	});

});
function showpop(){
	$("#nogeo").trigger("click");
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




	if ( window.location.hash ) {
        var hash = window.location.hash,
            $hash = $(hash);
			
			setTimeout(function(){
				$hash.trigger("click");	
			}, 1000)
     
        
    }
	

</script>



</div>


<!-- Footer =============================-->
<?php include('footerm.php');?>
