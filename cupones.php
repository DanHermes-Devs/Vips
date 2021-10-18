<?php
$meta_blog='
<meta property="og:url" content="https://vips.com.mx/cupones" />
<meta property="og:title" content="Cupones Vips" />
<meta property="og:description" content="Aprovecha nuestros cupones y promociones" />
<meta property="og:image" content="https://vips.com.mx/img/2019/cupones/Cupones_mayo-junio-07-min.png" />
';
include('header.php');
$page = "cupones";
$_SESSION['cuponsession'] = '';
?>
<script>
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	let hash1 = document.location.hash;
window.location = "/cupones-m"+hash1;
}
</script>
<!-- BOOTSTRAP CSS-->
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="/css/swiper.css">
<link rel="stylesheet" href="/css/magnific-popup.css">
<!-- CUSTOM CSS-->
<link rel="stylesheet" href="/css/stilos.css">
<!-- Swiper JS -->
<script src="/js/swiper.js"></script>
<div class="main">
	<style>
	<?php
	if($sesion == true){
	echo '.hideform{display:none;}';
	}
	?>
	
	[data-div="#tdlhome"]*{  fill: #fff!important; transition: all .4s ease;}
	[data-div="#tdlhome"] path{  fill: #fff!important; transition: all .4s ease;}
	[data-div="#tdlhome"] *{color: #fff!important;}
	.scrolled [data-div="#tdlhome"]*{  fill: #ff0025!important; transition: all .4s ease;}
	.scrolled [data-div="#tdlhome"] path{  fill: #ff0025!important; transition: all .4s ease;}
	.scrolled [data-div="#tdlhome"] *{color: #ff0025!important;}
	.secciones {
	width: 100%;
	position: relative;
	padding: 2% 10%;
	float: left;
	background: url(/img/bgbenef2.png);
	border-bottom: 1px solid #ccc;
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
	}
	.seccion {
	width: 33.3%;
	float: left;
	text-align: center;
	cursor: pointer;
	padding: 0 5%;
	margin-left: 12%;
	}
	.seccion img{width: 70%; padding:7.5%; transition: .35s ease all;}
	.seccion img:hover{padding: 0%; transition: .35s ease all;}
	.seccion h4 {
	font-size: 1.2em;
	margin: 0;
	padding: 0 10px;
	}
	.active img {
	padding: 0%!important;
	transition: .35s ease all;
	}
	.categorias{
	width: 100%;
	position: relative;
	padding: 2% 15%;
	float: left;
	background-color: #fff;
	text-align: center;
	}
	.imgcat{width: 10%; display: inline-block; margin: 0 1%;}
	.imgcat img{width: 80%; float: left;}
	.especiales, .balance{
	float: left;
	width: 100%;
	text-align: center;
	padding: 2% 10%;
	}
	.bigh1 {
	text-align: left;
	/* transform: skewX(-0.06turn); */
	background: #ed7124;
	color: #fff;
	padding: 1% 5% 1% 2.5%;
	/* position: relative; */
	/* float: left; */
	width: 40%;
	margin: 1em auto;
	background-image: url(/img/orangeedge.png);
	background-size: 30%;
	background-repeat: no-repeat;
	background-position: right;
	}
	#hideshowdelivery2 {
	display: none;
	}
	.bigh2 {
	text-align: left;
	/* transform: skewX(-0.06turn); */
	background: #00b7a4;
	color: #fff;
	padding: 1% 5% 1% 2.5%;
	/* position: relative; */
	/* float: left; */
	width: 40%;
	margin: 1em auto;
	background-image: url(/img/greenedge.png);
	background-size: 30%;
	background-repeat: no-repeat;
	background-position: right;
	}
	.imgbg2{
	top: 23%!important;
	}
	.producto{width:50%; float: left; margin-top:2em;}
	.productoimg, .productodesc {
	width: 50%; float: left; text-align: center;
	}
	.productoimg img{width: 70%;}
	.productodesc h3{
	color: #ed7124;
	font-size: 1.8em;
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
	font-family: "Program", sans-serif;
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
	font-family: "Program", sans-serif;
	}
	.balance .productodesc h3{color:#00b7a4;}
	.seccion h4{color: #7f7f7f; font-family:"Program", sans-serif; font-weight:500;}
	.griditem h4{font-family:"Program",sans-serif; font-weight:normal; font-size:1.8em;margin: 0em 0 1em 0;}
	.container{    margin-bottom: 2.5%;}
	@media (max-width:1200px){
	.buscadormenu {
	font-size: 70%;
	}
	}
	#small-dialog, #small-dialog2 {
	background: white;
	padding: 5%;
	text-align: center;
	max-width: 500px;
	margin: 80px auto;
	position: relative;
	background-image: url(/img/fondo.png);
	background-size: 30%;
	background-repeat: no-repeat;
	background-position: bottom right;
	}
	#small-dialog .mfp-close, #small-dialog .mfp-close {
	color: #333;
	text-shadow: 1px 1px 1px #333;
	font-size: 2.5em;
	font-weight: normal;
	font-family: "Program", sans-serif;
	}
	.btnub {
	background: #f29100;
	color: #fff;
	display: inline-block;
	padding: 1em;
	width: 100%;
	min-width: 200px;
	max-width: 350px;
	font-family: "Program",sans-serif;
	margin: 1em 0;
	border: none;
	margin-top: 0;
	text-align: center;
	border-radius: 30px;
	font-weight: 500;
	}
	#small-dialog h3 {
	color: #f29100;
	font-size: 1em;
	font-weight: 500;
	}
	#small-dialog p{color:#333; font-size:.7em;}
	.secciones#tdl{background:none;!important}
	.titular{
	color: #F89E27;
	}
	</style>
	<!-- Secciones =============================-->
	<div class="secciones" style="display:none;">
		<div class="seccion  active" data-seccion="tdl-vips"   data-color="#47b6a3" id="tdl-vips">
			<a href="/promociones/"><img src="/img/tdl-circle.png"></a>
			<h4 style="color:#47b6a3">Tarjeta de Lealtad Digital</h4>
		</div>
		<div class="seccion" data-seccion="cupones" data-color="#dd70a1" id="cupones">
			<a href="/promociones/cupones"><img src="/img/cupon-circle.png"></a>
			<h4 class="active">Cupones</h4>
		</div>
		<div class="seccion" data-seccion="tienda" data-color="#ed7124" id="tienda" style="display:none;" >
			<a href="/promociones/tienda"><img src="/img/tienda-circle.png"></a>
			<h4>Tienda</h4>
		</div>
	</div>
	<div id="small-dialog3" class="zoom-anim-dialog mfp-hide" style="text-align: center;">
		<p style="padding: 10%; padding-bottom: 0;"><span style="color: #F89E27; font-size: 2em;">¡Gracias!</span><br> ¿Quieres obtener promociones y descuentos exclusivos en todas tus visitas?. </p>
		<br>
		<a href="cuenta" class="btnub">REGÍSTRATE</a>
	</div>
	<a href="#small-dialog3" class="popup-with-move-anim" id="nogeo"></a>
	<!-- Contenedor =============================-->
	<div id="contenedor">
		<?php
		session_start();
		if($_SESSION['uservips'] !=""){$showlogged =""; $shownologged="hide";}
		else{$showlogged ="hide"; $shownologged ="";}
		?>
		<style>
		.hide{
			display: none;
		}
		.hideshowdelivery{
			display: block;
		}
		.container {
			width: 100%;
			float: left;
			padding: 0 5%;
			margin: 0;}
			.grid, .griditem{100%;}
			.button{display:inline-block; width:15%; margin:0; text-align: center;
				padding: 0 2.5%;font-family:"Program", sans-serif; cursor:pointer;}
				.button-group.filters-button-group {
					padding: 2em 10%;
					text-align: center;
					border-bottom: 1px solid #ccc;
				}
				.button img{max-width:100%; transition:.35s all ease;}
				.button img:hover{transition:.35s all ease; padding:5%;}
		.cupon {
			display: inline-block;
			width: 50%;
			padding: .5em 5%;
			margin: 0;
			float: left;
			transition: .35s all ease;
			height: auto;
		}
				.cuponww:hover {
					padding: .5em 7.5%; transition:.35s all ease;
				}
				*:focus{
					outline: none;
				}
				*:active{
					outline: none;
				}
				.cupon img {
					max-width: 100%;
					max-height: 100%;
					box-shadow: 1px 1px 12px #ccc;
				}
				.titleh3 {
					color: #F89E27;
					font-size: 2em;
					padding-bottom: 5px;
					border-bottom: 1px solid #ccc;
					margin-bottom: .25em;
					font-family: "Program", sans-serif;
				}
				.titleh3::before {
					content: "";
					position: absolute;
					left: 0;
					top: 2em;
					height: 11px;
					width: 200px;
					border-bottom: 2px solid #f29100;
					display:none;
				}
				.griditem {
					width: 100%;
					float: left;
				}
				#small-dialog, #small-dialogsd1 {
					background: white;
					padding: 0;
					text-align: left;
					max-width: 500px;
					margin: 80px auto;
					position: relative;
				}
				#small-dialog .mfp-close, #small-dialogsd1 .mfp-close {
					color: transparent;
					text-shadow: none;
					font-size: 2.5em;
					font-weight: normal;
					font-family: "Program", sans-serif;
					background-image: url(/img/cerrar1.png);
					background-size: 50%;
					background-repeat: no-repeat;
					background-position: center;
				}
				.imgbenefp {
					width: 100%;
					padding:2.5%;
					margin-top: 30px;
				}
				h2.titlebenef {
					color: #f29100;
					font-size: 1.2em;
					padding: 0 1em;
					margin: .5em 0;
					font-family: "Program", sans-serif;
				}
				.vigenciabenef {
					font-family: "Program", sans-serif;
					padding: 0 1em;
					margin: 0;
					font-size: 1em;
					font-weight: normal;
				}
				.legalesbenef {
					font-family: "Program", sans-serif;
					padding: 0 1em 1.5em 1em;
					margin: .5em 0;
					font-size: .6em;
					font-weight: normal;
					/* width: 50%; */
				}
				.textcupon {
					width: 100%;
					float: left;
					background: #fff;
				}
				.txtcpn{width: 100%;
					float: left;}
				.btncpn {
					width: 100%;
					float: left;
					bottom: 0;
					margin-top: 0;
					padding: 0 10%;
					margin-bottom: 1em;
					text-align: center;
				}
					.btncupondn{
						cursor: pointer;
					}
					.btncupondn {
						background: #f29100;
						color: #fff;
						padding: 15px;
						font-weight: bold;
						text-transform: uppercase;
						font-family: "Program", sans-serif;
						font-size: 1em;
						/* margin-top: 10px; */
						position: relative;
						float: left;
						width: 100%;
						text-align: center;
						/* margin-top: 10%; */
						transition: all .4s ease;
					}
					.btncupondn {
						background: #f29100;
						color: #fff;
						padding: 15px;
						font-weight: bold;
						text-transform: uppercase;
						font-family: "Program", sans-serif;
						font-size: 1em;
						/* margin-top: 10px; */
						position: relative;
						float: left;
						width: 100%;
						text-align: center;
						/* margin-top: 10%; */
						transition: all .4s ease;
					}
					.outline {
						display: inline-block;
						width: 100%;
						margin: 0;
						text-align: center;
						padding: 10%;
						font-family: "Program", sans-serif;
						cursor: pointer;
						border-radius: 50%;
						font-size: .6em;
						line-height: 1.1;
						color: #fff;
						font-family: "Program", sans-serif;
						height: 100%;
						height: 100% !important;
					}
					.outline {
						display: inline-block;
						width: 90%;
						margin: 0;
						text-align: center;
						padding: 10%;
						font-family: "Program", sans-serif;
						cursor: pointer;
						border-radius: 50%;
						font-size: .5em;
						line-height: 1,1;
						color: #fff;
						font-family: "Program", sans-serif;
						height: 100%;
						height: 90% !important;
						margin-top: 5%;
						margin-bottom: 1em;
					}
					.button-group.filters-button-group {
						text-align: center;
						border-bottom: 0;
						/* padding: 0 5%; */
						width: 100%;
						float: left;
						background: #fff;
						position: relative;
						padding: 0.5em 2.5em 2.5em 2.5em;
						max-height: 200px;
					}
					.outline img {
						max-width: 100%;
						transition: .35s all ease;
						padding:0;
						filter: brightness(0) invert(1);
					}
					.button {
						padding: 1em;
						border: none;
						border-radius: 50%;
						transition: .35s all ease;
						width: 120px;
						max-width: 120px;
						height: 120px !important;
						margin: 0;
						font-size: .8em;
					}
					.button:hover> img{transition:.35s all ease; padding:2.5% 7.5%;}
					.button.is-checked {
						border-radius: 50%;
					}
					.grid {
						margin-top: 160px;
					}
					.button{  background-size: 10%!important; background-position:center; transition: all .75s ease;}
					.dottedbg {
						background-size: 100% !important;
						background-position: center !important;
						transition: all .75s ease;
						background-repeat: no-repeat;
					}
					.swiper-slide {
						float:none;
					}
					.disclaimernfl {
			width: 100%;
			float: left;
			padding: 5%;
			text-align: center;
			font-size: .75em;
			color: #444;
		}
		.button-group.filters-button-group {
			display: none;
		}
		.grid {
			margin-top: 0;
		}
		.griditem.destacados {
			display: none;
		}
		.titlogin{margin: 0;}
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
		.listicons {
			float: left;
			display: inline-block;
			width:100%;
		}
		.listicons img {
			box-shadow: none;
			max-width: 35px;
			opacity: .6;
		}
		.listicons li {
			width: 33.3%;
			display: inline-block;
			padding: 7.5px;
			float: left;
		}
		li.lidownload {
			width: 70%;
			display: inline-block;
			margin: 0;
			float: left;
			padding: 5px 0;
		}
		.sharecuponicons {
			width: 30%;
			display: inline-block;
			text-align: right;
		}
		.btndescargadirecta {
			width: 50%;
			border-radius: 30px;
			background: #f89e27;
			color: #fff;
			font-weight: 500;
			padding: 10px;
			display: inline-block;
			text-align: center;
		}
		</style>
		
		<div class="boxesContainer">
			<div class="cardBox">
				<div class="card">
					<div class="front">
						<img src="/img/2019/cupones/Cupon-20-desktop-min.png" alt="Cupon" class="img-fluid">
					</div>
					<div class="back">
						<h1>20% de descuento en consumo mínimo de $139</h1>
						<p>Vence 31/08/2019. <a>Legales</a></p>
						<a href="">Generar cupón</a>		
						<img src="/img/demo_codigo.jpg" alt="Código de Cupón" class="no_shadow">
						<p class="codigo_cupon">MSU77H6FJ2</p>
						<a class="btndescargadirecta">Descargar</a>
						<ul>
							<li>Compartir</li>
							<li><a href="">W</a></li>
							<li><a href="">F</a></li>
							<li><a href="">E</a></li>
						</ul>
					</div>
				</div>
			</div>	
			
		</div>
		<!--.boxesContainer-->
		<div id="filtroscupones" class="container" style="width:100%;">
			<div class="button-group filters-button-group">
				<div id="todos" class="button filterbtnm swiper-slide" data-color="#f29100" data-filter="*"><div class="outline"><img src="/img/beneficios/todos.svg"></div>Todos</div>
				<div id="restaurante"  class="button filterbtnm swiper-slide" data-color="#e42528" data-filter=".cupones"><div class="outline"><img src="/img/beneficios/restaurante.svg"></div>Restaurante</div>
				<div style="display:none;" id="delivery"  class="button filterbtnm swiper-slide" data-color="#b898c7" data-filter=".destacados"><div class="outline"><img src="/img/beneficios/domicilio.svg"></div><br>A domicilio</div>
				<div style="display:none;" class="button filterbtnm swiper-slide" data-color="#d4db5c" data-filter=".experiencias"><div class="outline"><img src="/img/beneficios/cine.svg"></div>De Vips al cine</div>
			</div>
			
			
			<div class="grid">
				<!-- =========== PRODUCTO============= -->
				<div class="griditem  cupones" data-category="cupones">
					<h3 class="titleh3">Aprovecha nuestros cupones y promociones</h3>
					
					<h4> </h4>
					<div class="cupones-cont">
						<div class="cupon">
							<a id="20Descuento" class="popup-with-move-anim cupon-select" href="#small-dialog" data-titlebenef="20% de descuento en consumo mínimo de $139" data-imgbenef="/img/2019/cupones/Cupon-20-desktop-min.png" data-download="/cupon?id=XS&promo=20descuento" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 20 y 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un descuento del 20% en tu cuenta de $139 o más. Vigencia del 20 de mayo al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja.  Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  COME BIEN." data-vigencia="31/08/2019" data-id="XS"><img src="/img/2019/cupones/Cupon-20-desktop-min.png" ></a>
							
							<ul class="listicons">
								<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=XS&promo=20descuento" onclick="showpopdownload('20Descuento');" download>Descargar</a></li>
								<div class="sharecuponicons">
									<li><a onclick="couponShared('Facebook', '20Descuento');"  target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/20descuento"><img src="/img/menu/social/facebook.png" ></a></li>
									<li><a  onclick="couponShared('Twitter', '20Descuento');" target="_new" href="https://twitter.com/intent/tweet?text=20 por ciento de descuento en consumo mínimo de $139&amp;url=https://vips.com.mx/cupons/20descuento&amp;via=Vipsmx""><img src="/img/menu/social/twitter.png"></a></li>
									<li><a  onclick="couponShared('Whatsapp', '20Descuento');" target="_new" href="https://api.whatsapp.com/send?phone=&text=20%20por%20ciento%20de%20descuento%20en%20consumo%20m%c3%adnimo%20de%20%24139%20https%3a%2f%2fvips.com.mx%2fcupons%2f20descuento&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
								</div>
							</ul>
						</div>
						
						
						<div class="cupon" >
							<a id="trufa" class="popup-with-move-anim cupon-select" href="#small-dialog" data-titlebenef="Rebanada de cheesecake de trufa más café americano o descafeinado (no rellenable) por $79 MXN" data-imgbenef="/img/2019/cupones/Cupon-cheesecake_trufa-desktop-min.png" data-download="/cupon?id=DQ&promo=trufa" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece una rebanada de cheesecake de trufa más café americano o descafeinado (no rellenable) por $79 MXN. Vigencia del 13 de junio al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Esta prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." data-vigencia="31/08/2019" data-id="DQ"><img src="/img/2019/cupones/Cupon-cheesecake_trufa-desktop-min.png" ></a>
							
							<ul class="listicons">
								<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=DQ&promo=trufa" onclick="showpopdownload('trufa');" download>Descargar</a></li>
								<div class="sharecuponicons">
									<li><a onclick="couponShared('Facebook', 'trufa');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/trufa"><img src="/img/menu/social/facebook.png" ></a></li>
									<li><a onclick="couponShared('Twitter', 'trufa');"  target="_new" href="https://twitter.com/intent/tweet?text=Rebanada de cheesecake de trufa más café americano o descafeinado (sin refill) por $79 MXN&amp;url=https://vips.com.mx/cupons/trufa&amp;via=Vipsmx""><img src="/img/menu/social/twitter.png"></a></li>
									<li><a onclick="couponShared('Whatsapp', 'trufa');"  target="_new" href="https://api.whatsapp.com/send?phone=&text=Rebanada de cheesecake de trufa más café americano o descafeinado (sin refill) por $79 MXN%20https%3a%2f%2fvips.com.mx%2fcupons%2ftrufa&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
								</div>
							</ul>
						</div>
						
						
						
						<div class="cupon">
							<a id="Bisquets" class="popup-with-move-anim cupon-select" href="#small-dialog" data-titlebenef="Media orden de Bísquets con mermelada + un Cappuccino Clásico a $65" data-imgbenef="/img/2019/cupones/Cupon-bisquets-desktop-min.png" data-download="/cupon?id=8W&promo=bisquets" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 20 y 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece Media orden de Bísquets con mermelada más un Cappuccino Clásico a $65. Vigencia del 20 de mayo al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja.  Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN." data-vigencia="31/08/2019" data-id="8W"><img src="/img/2019/cupones/Cupon-bisquets-desktop-min.png"></a>
							
							<ul class="listicons">
								<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=8W&promo=bisquets" onclick="showpopdownload('Bisquets');" download>Descargar</a></li>
								<div class="sharecuponicons">
									<li><a onclick="couponShared('Facebook', 'Bisquets');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/bisquets"><img src="/img/menu/social/facebook.png" ></a></li>
									<li><a onclick="couponShared('Twitter', 'Bisquets');" target="_new" href="https://twitter.com/intent/tweet?text=Media orden de Bísquets con mermelada + un Cappuccino Clásico a $65&amp;url=https://vips.com.mx/cupons/bisquets&amp;via=Vipsmx"><img src="/img/menu/social/twitter.png"></a></li>
									<li><a onclick="couponShared('Whatsapp', 'Bisquets');" target="_new" href="https://api.whatsapp.com/send?phone=&text=Media%20orden%20de%20B%c3%adsquets%20con%20mermelada%20%20%20un%20Cappuccino%20Cl%c3%a1sico%20a%20%2465%20https%3a%2f%2fvips.com.mx%2fcupons%2fbisquets&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
								</div>
							</ul>
						</div>
						
						<div class="cupon">
							<a id="HuevosPoblana" class="popup-with-move-anim cupon-select" href="#small-dialog" data-titlebenef="Huevos a la poblana a $55" data-imgbenef="/img/2019/cupones/Cupon-huevos-poblana-desktop-min.png" data-download="/cupon?id=W2&promo=poblana" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Huevos a la poblana a $55 MXN. Incluye: Un jugo (300 ml) o una orden de fruta (150 g) y café americano o un té de sobre. Vigencia del 5 al 31 de agosto de 2019 de 7 a 13 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN." data-vigencia="31/08/2019" data-id="W2"><img src="/img/2019/cupones/Cupon-huevos-poblana-desktop-min.png"></a>
							
							<ul class="listicons">
								<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=W2&promo=poblana" onclick="showpopdownload('HuevosPoblana');" download>Descargar</a></li>
								<div class="sharecuponicons">
									<li><a onclick="couponShared('Facebook', 'HuevosPoblana');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/poblana"><img src="/img/menu/social/facebook.png" ></a></li>
									<li><a onclick="couponShared('Twitter', 'HuevosPoblana');" target="_new" href="https://twitter.com/intent/tweet?text=Huevos a la poblana a $55&amp;url=https://vips.com.mx/cupons/poblana&amp;via=Vipsmx"><img src="/img/menu/social/twitter.png"></a></li>
									<li><a onclick="couponShared('Whatsapp', 'HuevosPoblana');" target="_new" href="https://api.whatsapp.com/send?phone=&text=Huevos%20a%20la%20poblana%20a%20%2455%20https%3A%2F%2Fvips.com.mx%2Fcupons%2Fpoblana&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
								</div>
							</ul>
						</div>
						
						<div class="cupon">
							<a id="CarneAsada" class="popup-with-move-anim cupon-select" href="#small-dialog" data-titlebenef="Carne asada a $99" data-imgbenef="/img/2019/cupones/Cupon-carne_asada-desktop-min.png" data-download="/cupon?id=LQ&promo=carne" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Carne asada a $99 MXN. Vigencia del 5 al 31 de agosto de 2019 de 13 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN." data-vigencia="31/08/2019" data-id="LQ"><img src="/img/2019/cupones/Cupon-carne_asada-desktop-min.png"></a>
							
							<ul class="listicons">
								<li class="lidownload"><a class="btndescargadirecta" target="_blank" href="/cupon?id=LQ&promo=carne" onclick="showpopdownload('CarneAsada');" download>Descargar</a></li>
								<div class="sharecuponicons">
									<li><a onclick="couponShared('Facebook', 'CarneAsada');" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/cupons/carne"><img src="/img/menu/social/facebook.png" ></a></li>
									<li><a onclick="couponShared('Twitter', 'CarneAsada');" target="_new" href="https://twitter.com/intent/tweet?text=Carne asada a $99&amp;url=https://vips.com.mx/cupons/carne&amp;via=Vipsmx"><img src="/img/menu/social/twitter.png"></a></li>
									<li><a onclick="couponShared('Whatsapp', 'CarneAsada');" target="_new" href="https://api.whatsapp.com/send?phone=&text=Carne%20asada%20a%20$99%20https%3A%2F%2Fvips.com.mx%2Fcupons%2Fcarne&source=&data="><img src="/img/menu/social/whatsapp.png"></a></li>
								</div>
							</ul>
						</div>
						
						<div class="cupon">
							<a id="HuevosDivorciados" class="popup-with-move-anim cupon-select" href="#small-dialog" data-titlebenef="Huevos divorciados con chilaquiles a $65" data-imgbenef="/img/2019/cupones/Cupon-huevos-divorciados-desktop-min.png" data-download="/cupon?id=SP&promo=divorciados" data-legales="Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Huevos divorciados con chilaquiles a $65 MXN. Incluye: Un jugo (300 ml) o una orden de fruta (150 g) y café americano o un té de sobre. Vigencia del 5 al 31 de agosto de 2019 de 7 a 13 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN." data-vigencia="31/08/2019" data-id="SP"><img src="/img/2019/cupones/Cupon-huevos-divorciados-desktop-min.png"></a>
							
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
				</div>
				<!-- =========== PRODUCTO============= -->
				<div class="griditem  destacados" data-category="destacados">
					<h3 class="titleh3">A domicilio</h3>
					<h4>Aquí encontrarás los mejores cupones exclusivos para ti </h4>
					<div class="cupones-cont">
					</div>
				</div>
			</div>
		</div>
		<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
		<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
			<img class="imgbenefp" src="">
			<div class="textcupon">
				<div class="txtcpn">
					<h2 class="titlebenef hidesd2"></h2>
					<h3 class="vigenciabenef hidesd2"></h3>
					<p class="legalesbenef hidesd2" style="text-align: justify;"></p>
					<p class="idpromo" style="display:none;"></p>
				</div>
				<div class="btncpn">
					<?php
					if( $_SESSION['uservips'] !="" ){
						$btndescarga='
						<a target="_blank" class="btnub btnub2" href="" onclick="showpop();" download>DESCARGAR</a>
						';
					}
					else{
						$btndescarga='
						
						
						<h4 class="titlogin">Inicia sesión para descargar este cupón</h4>
						<div class="aligncenter">
										<a href="/fbconfig?page=cupones" class="blanco btnfb1 regfbcupones"  id="fb2" googl="true"></a>
										<a href="/logingoogle?page=cupones" class="blanco btnfb1 reggooglecupones"  id="google2"></a>
										<a onclick="closethis();"  class="blanco btnfb1 openpoplogin regvipscupones"  id="loginvips"></a>
							</div>
						';
						$btndescarga='
						<a target="_blank" class="btnub btnub2" href="" onclick="showpop();" download>DESCARGAR</a>
						';
					}
					echo $btndescarga;
					?>
				</div>
				<div class="fotos2" style="display: none; text-align: center; ">
					<div class="<?php echo $shownologged; ?>">
						<p style="padding: 10%; padding-bottom: 0; font-size: 1em;"><span style="color: #F89E27; font-size: 2em; margin-bottom: .5em; font-weight: bold;">
						¡Gracias!</span><br><br> Encuentra el cupón en tu carpeta de descargas <br><br>¿Quieres obtener promociones y descuentos exclusivos en todas tus visitas?</p>
						<br>
						<a href="cuenta" class="btnub">REGÍSTRATE</a>
					</div>
					<div class="<?php echo $showlogged; ?>">
						<p style="padding: 10%; padding-bottom: 0; font-size: 1em;"><span style="color: #F89E27; font-size: 2em; margin-bottom: .5em; font-weight: bold;">
						¡Gracias!</span><br><br> Encuentra el cupón en tu carpeta de descargas <br><br></p>
						<br>
						<a href="ubicaciones" class="btnub" onclick="clickLocationsearched();">Busca tu Vips</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="popfb">
		<div class="contfb">
			
			<div id="custom-content" class="white-popup-block" style="max-width:90%; margin: 20px auto;">
				<div class="closefb" onclick="closefb();"></div>
				<style>
				#custom-content img {max-width: 100%;margin-bottom: 10px;}
					#custom-content p{font-family:Arial, sans-serif;}
					.scrollable {
				border: 1px solid #ccc;
				height: 300px;
					padding:1em;
				overflow-y: auto;
				}
				#custom-content {
					max-width: 90%;
					margin: 20px auto;
					max-width: 500px !important;
					text-align: center;
				}
				.linkexternal {
					width: 15px;
					height: 15px;
					background: url(img/link.png);
					background-repeat: no-repeat;
					background-size: 100%;
					position: absolute;
					margin-left: 10px;
					margin-top: 5px;
				}
				.acepto{
					border: none;
					padding: 20px;
					outline: none;
					border-color: #a9a6a1;
					width: 65%;
					font-size: 1em;
					background: #f29100;
					color: white;
					cursor: pointer;
					transition: 0.3s ease all;
				display:inline-block;
				font-family:"Program", sans-serif;
				}
				.nopointer{pointer-events:none; opacity:.5;}
				@media(max-width: 700px){
					.acepto{font-size:.75em;}
				}
				#popfb {
					position: fixed;
					width: 100%;
					height: 100%;
					background: rgba(0,0,0,.5);
					top: 0;
					z-index: 8888;
					display:none;
				}
				.contfb {
					padding-top: 5%;
				}
				.closefb {
					position: relative;
					width: 20px;
					height: 20px;
					background-image: url(/img/cancelblack.png);
					background-size: 100%;
					float: right;
					margin-top: -15px;
					margin-right: -15px;
					cursor:pointer;
				}
				</style>
				<h2 class="text-center" style="color:#fbb03b;">Aviso de privacidad redes sociales </h2>
				<div class="scrollable">
					<p>
						“Al registrarse iniciando sesión en Facebook acepta que Vips<sup>®</sup>  y Wow Rewards<sup>®</sup>  reciban datos de su perfil, lista de amigos, dirección de correo electrónico, cumpleaños, información personal y me gusta. Consulta los términos y condiciones del programa, así como los avisos de privacidad en <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color:#f29100;">https://vips.com.mx/aviso-privacidad</a> y <a href="https://www.wowrewards.mx/home/privacidad" target="_blank" style="color:#f29100;"> https://www.wowrewards.mx/home/privacidad"</a>
					</p>
					<a href="/fbconfig?page=cupones" class="acepto" onClick="this.disabled=true;" id="clickfb">ACEPTO<a/>
						
						<script>
						$(".acepto").click(function(){
							$(this).addClass("nopointer");
						});
						</script>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="popgoogle">
		<div class="contfb">
			<div id="custom-content" class="white-popup-block" style="max-width:90%; margin: 20px auto;">
				<div class="closefb" onclick="closegoogle();"></div>
				<style>
				#popgoogle {
					position: fixed;
					width: 100%;
					height: 100%;
					background: rgba(0,0,0,.5);
					top: 0;
					z-index: 8888;
					display:none;
				}
				.griditem {
					width: 100%;
					float: left;
					position: relative !important;
				}
				</style>
				<h2 class="text-center" style="color:#fbb03b;">Aviso de privacidad redes sociales </h2>
				<div class="scrollable">
					<p>
						“Al registrarse iniciando sesión en Google acepta que Vips<sup>®</sup>  y Wow Rewards<sup>®</sup>  reciban datos de su perfil, lista de amigos, dirección de correo electrónico, cumpleaños e información personal. Consulta los términos y condiciones del programa, así como los avisos de privacidad en <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color:#f29100;">https://vips.com.mx/aviso-privacidad</a> y <a href="https://www.wowrewards.mx/home/privacidad" target="_blank" style="color:#f29100;"> https://www.wowrewards.mx/home/privacidad"</a>
					</p>
					<a href="/logingoogle?page=cupones" class="acepto" onClick="this.disabled=true;" id="clickgoogle">ACEPTO<a/>
						
						<script>
						$(".acepto").click(function(){
							$(this).addClass("nopointer");
						});
						</script>
					</p>
				</div>
			</div>
		</div>
	</div>
	<script src='//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
	<script type="text/javascript">
	if (window.location.hash && window.location.hash == '#_=_') {
	window.location.hash = '';
	}
	</script>
	<script>
		function closethis(){
			
			$(".mfp-close").trigger("click");
		}
		
		function openfb(){
			
			//$("#popfb").fadeIn(350);
			$("#clickfb").trigger("click");
		}
		
		function closefb(){
			
			$("#popfb").fadeOut(350);
		}
		
		
		function opengoogle(){
			
			//$("#popgoogle").fadeIn(350);
			$("#clickgoogle").trigger("click");
		}
		
		function closegoogle(){
			
			$("#popgoogle").fadeOut(350);
		}
		$(window).load(function() {
			$(".button").each(function () {
				var bg= $(this).attr("data-color");
				$(this).children('.outline').css("background-color", bg);
			});
			if(window.location.hash) {
			}
	else{
		setTimeout(function(){
				$(".filterbtnm:first").trigger("click");
			}, 500);
	}
			setTimeout(function(){
				var highestBox = $("#grid").height();
				$("#contenedor").height(highestBox);
			}, 2500);
		});
		function showpop(){
			$("#small-dialog .imgbenefp").hide();
			//$("#small-dialog .textcupon").hide();
			$("#small-dialog .btncpn").hide();
			$("#small-dialog .fotos2").show();
			$("#small-dialog .hidesd2").hide();
			
			var idpromo = $(".txtcpn .idpromo").text();
			var cupon = $(".txtcpn .titlebenef").text();
			var vigencia = $(".txtcpn .vigenciabenef").text();
			var imagen = $(".imgbenefp").attr("src");
			setTimeout(function(){
						$.ajax({type:"GET", url:"/cuponsession.php", success: function(text){
					
					setTimeout(function(){
						if ( self !== top ) {
						// iframe
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
			$.magnificPopup.open({
			items: {
				src: '#small-dialog'
			},
			type: 'inline'
			});
			$("#small-dialog .imgbenefp").hide();
			//$("#small-dialog .textcupon").hide();
			$("#small-dialog .btncpn").hide();
			$("#small-dialog .fotos2").show();
			$("#small-dialog .hidesd2").hide();
			
			var cuponid = "#"+cupon;
			var idpromo = $(cuponid).attr("data-id");
			var cupontitle = $(cuponid).attr("data-titlebenef");
			var vigencia = $(cuponid).attr("data-vigencia");
			var imagen = $(cuponid).attr("data-imgbenef");
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
	</script>
	<script type="text/javascript">
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
			$('.popup-with-move-animsd').magnificPopup({
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
			$('.popup-with-move-anim').click(function(){
				$(".imgbenefp").show();
				$(".textcupon").show();
				$(".btncpn").show();
				$(".fotos2").hide();
				$(".hidesd2").show();
				var img =$(this).attr('data-imgbenef');
				var imgd =$(this).attr('data-download');
				var descarga =$(this).attr('data-imgdesc');
				var title =$(this).attr('data-titlebenef');
				var vigencia =$(this).attr('data-vigencia');
				var legales =$(this).attr('data-legales');
				var idpromo =$(this).attr('data-id');
				$('.imgbenefp').attr("src", img);
				$('.btnub2').attr("href", imgd);
				$('.titlebenef').text(title);
				$('.vigenciabenef').text("Vence " +vigencia);
				$('.legalesbenef').text(legales);
				
				$('.idpromo').text(idpromo);
			});
			$('.popup-with-move-animsd').click(function(){
				$(".imgbenefp").show();
				$(".textcupon").show();
				$(".btncpn").show();
				$(".fotos").hide();
				var img =$(this).attr('data-imgbenef');
				var img2 =$(this).attr('data-download');
				var title =$(this).attr('data-titlebenef');
				var vigencia =$(this).attr('data-vigencia');
				var legales =$(this).attr('data-legales');
				$('.imgbenefp').attr("src", img);
				$('.btnub2').attr("href", img2);
				$('.titlebenef').text(title);
				$('.vigenciabenef').text("Vence " +vigencia);
				$('.legalesbenef').text(legales);
			});
		});
	</script>
	<script>// external js: isotope.pkgd.js
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 4,
		spaceBetween: 10,
		freeMode: false,
		centeredSlides: true,
	});
	$('body').on('click', '.btncupondn', function() {
		alert("Por favor inicia sesión para acceder a este beneficio");
	});
	// init Isotope
	var $grid = $('.grid').isotope({
		itemSelector: '.griditem',
		layoutMode: 'fitRows',
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
	$('.filters-button-group').on( 'click', '.button', function() {
		var filterValue = $( this ).attr('data-filter');
	// use filterFn if matches value
	filterValue = filterFns[ filterValue ] || filterValue;
	$grid.isotope({ filter: filterValue });
	});
	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
		var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', '.button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$( this ).addClass('is-checked');
			$(this).height($(this).width());
			$(this).children(".outline").height($(this).children(".outline").width());
			$(".button").css('border', 'none');
			$(".button").css('background-image', 'none');
			$( ".button" ).removeClass('dottedbg');
			var bgcolor =  $(this).attr("data-color");
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
});
$(".button").each(function () {
	var bg= $(this).attr("data-color");
	$(this).children('.outline').css("background-color", bg);
});
});
$(document).ready(function(){
	
	
// the #-prefixed portion of the URL that serves
// as a fragment identifier for the document, from
// www.example.com/page#fragment
// document.location.hash would return #fragment
let hash = document.location.hash;
var hashcupon = "[data-hash='"+hash+"']";
// because the hash identifies a fragment of
// the document by its id, and the '#' character
// specifies an id-selector in CSS we pass that
// value to jQuery to select the correct element
// and call the click() method - without arguments -
// to trigger a click event:
$(hash).click();
$(hashcupon).click();
});
$(".cupon .cupon-select").click(function(e) {
	var id = $(this).attr("id");
	if(history.pushState) {
	history.pushState(null, null, '#'+id);
	}
	else {
		location.hash =  '#'+id;
	}
});
$(".filterbtnm").click(function(e) {
var id = $(this).attr("id");
	if(history.pushState) {
	history.pushState(null, null, '#'+id);
	}
	else {
		location.hash =  '#'+id;
	}
});

$(".cupon .cupon-select").click(function(){
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
<!-- Footer =============================-->
<?php include('footer.php');?>