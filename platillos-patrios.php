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
}
.rosa1 {
	background: #f7eaf1;
	width: 50%;
	float: left;
	min-height: 350px;
	padding: 7.5% 22% 0% 1%;
	text-align: center;
}
.rosa2 {
	background: #c83d62;
	height: 350px;
	float: left;
	width: 50%;
	padding: 2.5%;
	position: relative;
}
.textorosa h1 {
	font-family: "Museo 500";
	font-size: 30px;
	color: #c83d62;
	padding-top: 100px;
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
	height: 400px;
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
	position: relative;
	width: 55%;
	right: 5%;
	float: right;
	overflow: visible;
	text-align: center;
}
.chile {
	position: relative;
	margin-top: 0;
	width: 100%;
	max-width: 700px;
}
.titulopatrios {
	width: 80%;
	margin: 20% 10%;
}
.desayunos {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Fondo-Desayunos-min);
	background-size: cover;
	padding: 2.5% 2.5% 2.5%;
	position: relative;
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
	font-size: 20px;
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
}
.tituloentradas {
	width: 35%;
	margin: 0 auto 2.5%;
}
.tituloentradas img {
	width: 100%;
}
.logonew {
	width: 30% !important;
	margin: 0 35%;
}
.carouselentradas .titleplato {
	color: #C5D02C;
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
	color: #C5D02C;
}
.postres {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Pleca1-Postres-min.png);
	background-size: 100%;
	background-size: cover;
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
    animation-duration: 3.5s;
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
    65%  { transform: translate(0, 12px); }
    to   { transform: translate(0, -0px); }
}
.overflowhidden{overflow:hidden;}
.slick-slide {
	text-align: center;
}
.titleplato {
	font-family: "Museo 900",sans-serif !important;
	font-size: 30px !important;
	margin-top: -2.5% !important;
	margin-bottom: 0;
}
.carouseldesayunos .titleplato {
	color: #5e3e1a;
}
.calsplato {
	font-family: "Museo 500",sans-serif !important;
	font-size: 22.5px !important;
}
.carouseldesayunos .calsplato {
	color:#fff;
}

.descplato {
	color: #fff;
	padding: 0 15%;
	font-size: 18px;
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
@media(max-width:1500px){
  .dayp2 {
  	height: 350px;
  }
}

@media(max-width:1024px){
  .dayp2 {
    height: 300px;
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
  	height: 400px;
  }
  .greencircle {
  	width: 100%;
  	float: left;
  	height: 40%;
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
  	width: 70%;
  	margin: 5% 10%;
  	max-width: 300px;
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
</style>
<main>
	<div class="row">
		<div class="col-md-12">
			<div class="main">
        <?php
          date_default_timezone_set("America/Mexico_City");
          $h = date('G');

          if ($h < 13){
            echo '
            <div class="relativecont dayp1">
    					<div class="rosa1">
              <div class="greencircle">
                <div class="textopatrios">
                	<img src="/img/2019/patrios/Titular-Comidas-min.png" class="titulopatrios">
                </div>
              </div>
    						<div class="textorosa">
    							<h1>¿Ya probaste nuestros nuevos hot cakes <span>Patrios con salsa en nogada?</span></h1>
    						</div>
    					</div>
    					<div class="rosa2">
    						<img src="/img/2019/patrios/Hot-cake-min.png" class="hotcake">
    						<img src="/img/2019/patrios/Textura-Hot-Cake-min.png" class="pattern1">
    						<img src="/img/2019/patrios/Precio-Hot-Cakes-min.png" class="precio">
    					</div>
    				</div>';



          }

          if ($h > 12) {
            echo '
            <style>
            .desayunos {
            	padding: 5% 2.5% 2.5%;
            }
            @media (max-width:800px){
              .desayunos {
              padding: 15% 2.5% 2.5%;
            }
            }

            </style>
            <div class="relativecont dayp2">
              <div class="greencircle">
                <div class="textopatrios">
                	<img src="/img/2019/patrios/Titular-Comidas-min.png" class="titulopatrios">
                </div>
              </div>
              <div class="platochile">
                <img src="/img/2019/patrios/platos/Chile-Nogada-min.png" class="chile">

              </div>
            </div>';

          } ?>





				<div class="desayunos">
					<div class="titulodesayunos"><img src="/img/2019/patrios/Titulo-Desayunos-min.png"></div>
					<div class="linea"><img src="/img/2019/patrios/Line-min.png"></div>
					<div class="textodesayunos"><p>Encuentra cualquier de estos desayunos patrios de 7 a 13 hrs.<br> Incluyen: Un jugo <span>(300mL)</span> o una orden de fruta <span>(150g)</span> y café americano <span>(rellenable)</span> o un té de sobre</p></div>


					<div class="carouseldesayunos">
						<div>
							<a><img src="/img/2019/navidad/romeritos-tortitas-de-camaron-paquete.png">
							<p class="titleplato">Romeritos con tortitas de camarón </p>
							<p class="calsplato">(12pzas / 1.2 kg)</p>
							<a aria-label-tooltip="Los tradicionales con nuestro mole especial." data-balloon-pos="right" data-balloon-length="medium" googl="true">+ información</a>
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

				</div>

				<div class="entradas">
				<div class="tituloentradas"><img src="/img/2019/patrios/Titular-Comidas-min.png"></div>
        <p class="subtitleentradas">Entradas patrias que no te puedes perder.</p>

				<div class="carouselentradas">
						<div>
							<a><img src="/img/2019/patrios/platos/Tacos-de-cochinita-min.png">
							<img class="logonew" src="/img/2019/patrios/Logo-NUEVO-min.png">
							<p class="titleplato">Tacos de cochinita </p>
							<p class="calsplato">(3 pzas / 670 Cal)</p>
							<p class="descplato">Servidos con ensalada de chile habanero</p>
							</a>
						</div>
						<div>
							<a><img src="/img/2019/patrios/platos/Vipzasos-de-Chorizo-min.png">
							<p class="titleplato">Vipsazos de papa con chorizo</p>
							<p class="calsplato">(3 pzas / 641 Cal)</p>
							<p class="descplato">Los clásicos pambazos hechos con el pan especial de Vips, acompañados de salsa verde</p>
							</a>
						</div>

						<div>
							<a><img src="/img/2019/patrios/platos/Costras-yucatecas-min.png">
							<img class="logonew" src="/img/2019/patrios/Logo-NUEVO-min.png">
							<p class="titleplato">Costras yucatecas</p>
							<p class="calsplato">(2 pzas / 650 Cal)</p>
							<p class="descplato">De queso gouda con cochinita pibil, sobre tortilla de harina con ensalada de chile habanero. Acompañadas de salsa verde cruda.</p>
							</a>
						</div>

					</div>

				</div>

				<div class="comidas">

				<div class="titulocomidas"><h2>Prueba los mejores platillos fuertes de temporada<br style="margin-bottom: 7.5px;"> Incluyen una sopa del día <span>(270mL)</span> y una bebida <span>(360 mL / refresco o naranjada o limonada o agua de sabor) </span> No incluye refrescos en lata.</h2></div>

				<div class="carouselcomidas">
						<div>
							<a><img src="/img/2019/patrios/platos/Chile-Nogada-min.png">

							<p class="titleplato">Chile en nogada </p>
							<p class="calsplato">(1070 Cal)</p>
							<p class="descplato">Nuestra tradicional receta de chile poblano relleno de carne y frutas, bañado en salsa nogada</p>
							</a>
						</div>
						<div>
							<a><img src="/img/2019/patrios/platos/Tampiquena-Gratinada-min.png">
							<p class="titleplato">Tampiqueña gratinada</p>
							<p class="calsplato">(140 g / 530 Cal)</p>
							<p class="descplato">Con queso Oaxaca; servida con salsa martajada, nopales con chorizo y guacamole</p>
							</a>
						</div>

						<div>
							<a><img src="/img/2019/patrios/platos/Filete-de-mojarra-enchilado-min.png">
							<img class="logonew" src="/img/2019/patrios/Logo-NUEVO-min.png">
							<p class="titleplato">Filete de mojarra enchilado</p>
							<p class="calsplato">(150g / 680 Cal)</p>
							<p class="descplato">Elaborado con salsa guajiro acompañado de guacamole, tres dobladas con frijoles refritos y ensalada de chile habanero</p>
							</a>
						</div>

						<div>
							<a><img src="/img/2019/patrios/platos/Pechuga-oaxaca-min.png">

							<p class="titleplato">Pechuga Oaxaca </p>
							<p class="calsplato">(150g / 1175 Cal)</p>
							<p class="descplato">Rellena con queso Oaxaca, bañada con nuestro mole especial, arroz a la mexicana, frijoles campesinos y plátanos fritos</p>
							</a>
						</div>

					</div>

				</div>

				<div class="postres">
					<div class="pleca1">
						<div class="imgplato1">
							<img src="/img/2019/patrios/platos/Crepas-min.png">
							<img src="/img/2019/patrios/pattern-min.png" class="patternpostre">
						</div>
						<div class="texto1">
							<img class="logonew" src="/img/2019/patrios/Logo-NUEVO-min.png">
							<p class="titleplato">Crepas patrias</p>
							<p class="calsplato">(2 pzas / 400 Cal)</p>
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
					<a href="ubicaciones" class="btnubica grow">Busca tu Vips</a>
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
