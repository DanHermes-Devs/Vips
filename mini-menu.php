<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: mini-menu-m');
    exit(0);
}
?>
<link rel="stylesheet" href="css/animate.css">
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<div class="main">



<style>

@font-face {
    font-family: 'Borsok';
    src: url('/css/fonts/borsok/Borsok.woff2') format('woff2'),
        url('/css/fonts/borsok/Borsok.woff') format('woff'),
        url('/css/fonts/borsok/Borsok.ttf') format('truetype'),
        url('/css/fonts/borsok/Borsok.svg#Borsok') format('svg');
    font-weight: normal;
    font-style: normal;
}


.resptext {

    width: 100%;

    float: left;

    padding: 0 5% 5% 5%;

    font-family: "Program", sans-serif;

}
body {
	background-color: #fff;
}

.resptext h2{color:#f29100; font-size:2em; margin-top:-5%;}



.resp2img{width:20%; float:left;}

.text-right{width:80%; float:left;}

.resptext p{font-size: .95em;}


.gif {
	width: 100%;
	float: left;
	text-align: center;
	padding-top: 2.5%;
	font-size: 1.2em;
	color: #fff;
	position: absolute;
	font-family: "Program",sans-serif;
	top: -10%;
	z-index: 2;
}
.gif .img1{width:32%;}



.img2 {

	width: 28%;

	margin-top: -1.5%;

}


.platillo {
	width: 35%;
	float: left;
	padding: 2.5%;
	text-align: center;
}


.platillo img{width:100%; padding:5%; transition:.35s all ease;}

.platillo img:hover{width:100%;  padding:0%; transition:.35s all ease;}



.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}



.platillo p {
	margin-top: -15%;
	font-family: "Borsok", sans-serif;
	color: #fff;
	padding: 0 15%;
}
.legales {
	font-family: "Program",sans-serif;
	color: #222;
	text-align: center;
	font-size: 1.3em;
	padding: 0em 5%;
	/* float: left; */
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	margin-top: 1em;
	z-index: 3;
	position: relative;
}


.legales:hover{opacity:1; transition:.35s all ease;}

.btns {
	width: 95%;
	text-align: center;
	position: absolute;
	float: left;
	margin-top: 27.5%;
	padding-left: 0%;
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
	font-size: 1.1em;
	background: #feb41e;
	display: inline-block;
	padding: 10px 20px;
	border-radius: 30px;
	font-weight: 500;
}

.btnubica:hover {
	transition: all .4s ease;
}
.btnubica img {
	width: 70%;
}
.white {

	margin-bottom: 0em;

	margin-top: 0;

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

*{outline:0;}



.pla1 {
	position: absolute;
	width: 45%;
	float: right;
	float: left;
	margin-top: 40%;
	padding: 0 10%;
	right: 0;
}
.pla2 {
	position: absolute;
	margin-top: 91%;
	z-index: 2;
	left: 0%;
	width: 100%;
	margin-bottom: 0;
	padding: 0 5%;
}
.pla3 {
	position: absolute;
	margin-top: 142%;
	width: 100%;
	left: 0;
	float: left;
}
.pla4 {
	position: absolute;
	margin-top: 195%;
	width: 100%;
	left: 0;
	float: left;
}
.pla5 {
	position: absolute;
	margin-top: 240%;
	width: 100%;
	left: 0;
	float: left;
}
.pla6 {
	position: absolute;
	margin-top: 290%;
	width: 100%;
	left: 0;
	float: left;
}
.pla7 {
	position: relative;
	margin-top: -5px;
	width: 100%;
	left: 0;
	float: left;
	color: #fff;
	background: url(img/disney/bgdesktop2.jpg);
	background-size: cover;
	background-position: left center;
}

.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}

.footer{margin-top:-5px;}

.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }
.titcarousel {
	font-family: "Century gothic",sans-seif;
	text-align: left;
	text-transform: uppercase;
	font-weight: normal;
	margin-bottom: 10px;
	font-size: 180%;
	margin-top: 1%;
}
.titcarousel span {
	font-size: 60%;
	color: #333;
}
.bgtit1 {
	width: auto;
	text-align: left;
	padding: .5em 2%;
	background: #bd2b26;
	float: left;
	margin: 0;
	margin-left: -2.65%;
	font-size: 1.25em;
	font-family: "Century gothic",sans-seif;
	font-weight: normal;
	padding-left: 2.5%;
	font-size: 90%;
	max-width: 250px;
	max-height: 35px;
	min-width: 250px;
	overflow: hidden;
	min-height: 35px;
}

.bgtit2 {
	width: auto;
	text-align: left;
	padding: .5em 2%;
	background: #2f5030;
	float: left;
	margin: 0;
	margin-left: -2.65%;
	font-size: 1.25em;
	font-family: "Century gothic",sans-seif;
	font-weight: normal;
	padding-left: 2.5%;
	font-size: 90%;
}

.bgtit3 {
	width: auto;
	text-align: left;
	padding: .5em 2%;
	background: #d78221;
	float: left;
	margin: 0;
	margin-left: -2.65%;
	font-size: 1.25em;
	font-family: "Century gothic",sans-seif;
	font-weight: normal;
	padding-left: 2.5%;
	font-size: 90%;
		max-width: 250px;
	max-height: 35px;
	min-width: 250px;
	overflow: hidden;
	min-height: 35px;
}

.carouselcomida {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	margin-top: 0%;
	z-index:2;
}

.carouselbebidas {
	width: 100%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: 0%;
	/* overflow: visible; */
	position:relative;
	z-index:2;
}
.texturabebidas {
	width: 95%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: -8%;
	background-image: url(/img/2019/minimenu/Textura_Bebidas.png);
	background-repeat: no-repeat;
	background-position: bottom center;
	position: absolute;
	z-index: 1;
	height: 100%;
}
.texturaentradas {
	width: 95%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: -13%;
	background-image: url(/img/2019/minimenu/Textura_entradas.png);
	background-repeat: no-repeat;
	background-position: bottom center;
	position: absolute;
	z-index: 1;
	height: 100%;
	background-size: 28%;
}
.texturadesayunos {
	width: 95%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: -13%;
	background-image: url(/img/2019/minimenu/Textura_Desayunos.png);
	background-repeat: no-repeat;
	background-position: bottom center;
	position: absolute;
	z-index: 1;
	height: 100%;
	background-size: 35%;
}

.texturacomida {
	width: 95%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: -13%;
	background-image: url(/img/2019/minimenu/Textura_Comidas.png);
	background-repeat: no-repeat;
	background-position: bottom center;
	position: absolute;
	z-index: 1;
	height: 100%;
	background-size: 35%;
}

.texturapostres {
	width: 95%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: -14%;
	background-image: url(/img/2019/minimenu/Textura_Postres.png);
	background-repeat: no-repeat;
	background-position: bottom center;
	position: absolute;
	z-index: 1;
	height: 100%;
	background-size: 35%;
}
.carouseldesayunos {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	margin-top: 0%;
	z-index:2;
}
.carouselpostres {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	margin-top: 0%;
	z-index:2;
}

.carouseldesayunos  img, .carouselcomida img, .carouselbebidas img {
	width: 100%;
	padding: 5%;
	transition: .35s all ease;
	max-height: 350px;
	object-fit: contain;
}

.pla7 p {
	margin-top: -10%;
	font-family: "Program",sans-serif;
	color: #333 !important;
	padding: 0 15%;
}


@media(max-width:1500px){


.carouselcomida {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	z-index:2;
}

.carouselbebidas {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;

}

.texturabebidas {
	background-size: 30%;
	margin-top: -10%;
}

.texturaentradas {
	background-size: 28%;
	margin-top: -16%;
}
.texturadesayunos {
	background-size: 33%;
	margin-top: -16%;
}

.texturacomida {
	background-size: 30%;
	margin-top: -17%;
}

.texturapostres {
	background-size: 30%;
	margin-top: -17%;
}

.platillo p {
	padding: 0 5%;
}

}
@media (max-width:1200px){
	

#btndescarga {
	right: 5%!important;
}
}


.legales {
	font-family: "Program",sans-serif !important;
	color: #222 !important;
	text-align: center;
	font-size: .85em;
	color: #fff;
	margin-top: 1.5% !important;
}
.disneycheck {
	width: 40% !important;
	margin: 0 30% !important;
	padding: 0 !important;
}

.carouseldesayunos img, .carouselcomida img, .carouselbebidas img {
	width: 100%;
	padding: 5%;
	transition: .35s all ease;
	max-height: 350px;
	object-fit: contain;
	padding-top: 0;
	margin-top: -2.5%;
}
#btndescarga {
	background: #fea009;
	position: absolute;
	width: 200px;
	bottom: -10%;
	right: 10%;
	padding: 15px;
	cursor: pointer;
	border-radius: 30px;
	font-weight: 500;
}
.slick-dots {
	position: absolute;
	bottom: 5px;
	display: block;
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}


.slick-dots li button::before {
	font-family: 'slick';
	font-size: 11px;
	line-height: 21px;
	position: absolute;
	top: 0;
	left: 0;
	width: 20px;
	height: 20px;
	content: '•';
	text-align: center;
	opacity: .25;
	color: #fff;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.slick-dots li.slick-active button::before {
	opacity: .75;
	color: #fff;
	font-size: 12px;
}

#popManteletas {
	position: fixed;
	z-index: 99999;
	background: rgba(0,0,0,.6);
	top: 0;
	width: 100%;
	height: 100%;
	text-align: center;
	display:none;
}

#contManteletas {
	width: 80%;
	margin-left: 10%;
	padding: 5%;
	margin-top:10%;
}

#contManteletas a {
	width: 50%;
	float: left;
	padding: 2.5%;
}

#contManteletas img {
	width: 100%;
}
.closepopm {
	position: absolute;
	width: 22px;
	height: 22px;
	background: url(img/close.png);
	background-size: 100%;
	top: 27%;
	right: 15%;
	cursor:pointer;
}

.pla2 p {
	margin-top: 2.5%;
	color: #445aa9;
	font-weight: normal;
}

.pla2 .slick-prev::before, .pla2 .slick-next::before {
	font-family: 'slick';
	font-size: 20px;
	line-height: 1;
	opacity: .75;
	color: #445aa9;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.carouselentradas {
	width: 90%;
	margin: 0 5%;
	z-index: 2;
}
.pla4 p {
	margin-top: -5%;
	color: #fec61e;
	font-weight: normal;
}

.pla5 .slick-prev::before, .pla5 .slick-next::before {
	font-family: 'slick';
	font-size: 20px;
	line-height: 1;
	opacity: .75;
	color: #f37720;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.pla5 p {
	color: #f37720;
	font-weight: normal;
	margin-top: -5%;
}

.pla6 p {
	margin-top: 0%;
	color: #f37720;
	font-weight: normal;
}

.carouselcomida {
	z-index: 2;
}

.pla3 p {
	color: #fcdf1d;
	font-weight: normal;
}
.caloriasp {
	color: #222 !important;
	font-family: "Program",sans-serif !important;
	margin-top: -2.5% !important;
	font-size: .9em !important;
}

.descplato {
	font-family: "Program", sans-serif !important;
	color: #222 !important;
	margin-top: -2.5% !important;
	font-size: .8em;
}

.pla3 .caloriasp, .pla3 .descplato{color:#fff!important;}
</style>


<div class="main">
<div style="width:100%; position:relative; float: left;">
<img src="img/2019/minimenu/Mini_menu_Landing_Desktop_Fondo.png" class="imgmain" width="100%;">
	<div class="gif">
	
		<div class="platillo pla1  wow fadeInUp">
			<img src="/img/2019/minimenu/Monstruo_Banner_Landing_Mini_menu-Desktop.png" class="monster1">
		</div>
		
			<div class="platillo pla2  wow fadeInUp">
				<div class="texturabebidas"></div>
	
				<div class="carouselbebidas">
				
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/malteada-de-vainilla">
							<img src="img/2019/minimenu/platos/01_MalteadaVainilla.png">
							<p>Malteada de vainilla</p>
							<p class="caloriasp">(360 mL) 567 Cal</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/malteada-de-chocolate">
							<img src="img/2019/minimenu/platos/02_MalteadaChocolate.png">
							<p>Malteada de chocolate</p>
							<p class="caloriasp">(360 mL) 567 Cal</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/malteada-de-fresa">
							<img src="img/2019/minimenu/platos/03MalteadaFresa.png">
							<p>Malteada de fresa</p>
							<p class="caloriasp">(360 mL) 567 Cal</p></a>
						</div>
						
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/malteada-cookies-cream">
							<img src="img/2019/minimenu/platos/04MalteadaC&C.png">
							<p>Malteada de Cookies & cream</p>
							<p class="caloriasp">(360 mL) 668 Ca</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/jugo-de-naranja">
							<img src="img/2019/minimenu/platos/05JugoDeNaranja.png">
							<p>Jugo de naranja</p>
							<p class="caloriasp">Vaso (360 mL) 207 Cal</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/agua-fresca">
							<img src="img/2019/minimenu/platos/08AguaDelDia.png">
							<p>Agua del día</p>
							<p class="caloriasp">(360 mL) 172 Cal</p></a>
						</div>
						
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/naranjada">
							<img src="img/2019/minimenu/platos/09Naranjada.png">
							<p>Naranjada</p>
							<p class="caloriasp">Vaso (360 mL) 199 Cal</p></a>
						</div>
						
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/limonada">
							<img src="img/2019/minimenu/platos/10Limonada.png">
							<p>Limonada</p>
							<p class="caloriasp">(360 mL) 567 Cal</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/refresco">
							<img src="img/2019/minimenu/platos/11Refresco.png">
							<p>Refresco</p>
							<p class="caloriasp">rellenable / 99 Cal<br>
							Garrafa (500 mL) 88 Cal</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/leche">
							<img src="img/2019/minimenu/platos/06VasoLeche.png">
							<p>Vaso de leche</p>
							<p class="caloriasp">Vaso (360 mL) 199 Cal</p></a>
						</div>
						
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/chocolate-helado">
							<img src="img/2019/minimenu/platos/07ChocolateHelado.png">
							<p>Chocolate helado</p>
							<p class="caloriasp">(360 mL) 365 Cal</p></a>
						</div>

					</div>
			</div>
			
			
			<div class="platillo pla3  wow fadeInUp">
				<div class="texturaentradas"></div>
	
				<div class="carouselentradas">
				
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/sopita-de-verduras-con-pollo">
							<img src="img/2019/minimenu/platos/01SopitaDeVerduras.png">
							<p>Sopita de verduras</p>
							<p class="caloriasp">(270 mL) 90 Cal</p>
							<p class="descplato">Verduras mixtas cortadas en cubos, en caldo con especias, hierbas de olor, pollo y sal</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/mini-spaghetti">
							<img src="img/2019/minimenu/platos/02MiniSpaghetti.png">
							<p>Mini spaghetti</p>
							<p class="caloriasp">(270 mL) 550 Cal</p>
							<p class="descplato">Con salsa de jitomate, crema y queso panela</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/sopita-vips">
							<img src="img/2019/minimenu/platos/03SopitaVips.png">
							<p>Sopita Vips</p>
							<p class="caloriasp">(270 mL) 151 Cal</p>
							<p class="descplato">Con pollo deshebrado, tallarines y zanahoria</p></a>
						</div>
						
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/papitas-vips">
							<img src="img/2019/minimenu/platos/04Papitas.png">
							<p>Papitas Vips</p>
							<p class="caloriasp">6 pzas / 407 Cal</p>
							<p class="descplato">Acompañadas de queso suave y salsa catsup</p></a>
						</div>

						
					
					</div>
			</div>
			
			<div class="platillo pla4  wow fadeInUp">
				<div class="texturadesayunos"></div>
	
				<div class="carouseldesayunos">
				
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/mini-molletes">
							<img src="img/2019/minimenu/platos/01MiniMolletes.png">
							<p>Mini molletes</p>
							<p class="caloriasp">4 pzas / 622 Cal</p>
							<p class="descplato">Gratinados con queso gouda y servidos con catsup</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/combinadito">
							<img src="img/2019/minimenu/platos/02Combinadito.png">
							<p>Combinadito</p>
							<p class="caloriasp">340 Cal</p>
							<p class="descplato">Dos hot cakes servidos con un huevo revuelto y jamón</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/marinerito">
							<img src="img/2019/minimenu/platos/03Marinerito.png">
							<p>Marinerito</p>
							<p class="caloriasp">330 Cal</p>
							<p class="descplato">Huevo revuelto con jamón, servido con pan tostado y queso tipo americano</p></a>
						</div>
						
						
					
					</div>
			</div>


			<div class="platillo pla5  wow fadeInUp">
				<div class="texturacomida"></div>
	
				<div class="carouselcomida">
				
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/hamburguesita-con-queso">
							<img src="https://vips.com.mx/img/2019/menu/platos/HamburguesitaConQueso.png">
							<p>Hamburguesita con queso</p>
							<p class="caloriasp">Carne de res (100 g) 940 Cal</p>
							<p class="descplato">Carne de res y queso gouda servida con papitas Vips</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/milanesita-de-pollo">
							<img src="https://vips.com.mx/img/2019/menu/platos/MilanesitaDePollo.png">
							<p>Milanesita de pollo</p>
							<p class="caloriasp">Pollo (75 g) 450 Cal</p>
							<p class="descplato">Pechuga de pollo empanizada, servida con papitas Vips</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/mini-enchiladas-suizas">
							<img src="https://vips.com.mx/img/2019/menu/platos/MiniEnchiladasSuizas.png">
							<p>Mini enchiladas suizas</p>
							<p class="caloriasp">3 pzas / 485 Cal</p>
							<p class="descplato">Con nuestra tradicional salsa suiza, rellenas con pollo y gratinadas con queso gouda</p></a>
						</div>
						
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/filetito-empanizado">
							<img src="https://vips.com.mx/img/2019/menu/platos/FiletitoEmpanizado.png">
							<p>Filetito empanizado</p>
							<p class="caloriasp">Mojarra (75 g) 540 Cal</p>
							<p class="descplato">Filete de mojarra empanizado, servido con arroz a la mexicana y ensalada</p></a>
						</div>
						
						
					
					</div>
			</div>

			<div class="platillo pla6  wow fadeInUp">
				<div class="texturapostres"></div>
	
				<div class="carouselpostres">
				
						<div>
						
							<a href="https://vips.com.mx/menu/infantil/bola-de-helado">
							<img src="/img/2019/minimenu/platos/BolaDeHelado.png">
							<p>Bola de helado</p>
							<p class="caloriasp">Fresa 110 Cal, Vainilla 120 Cal, Chocolate 140 Cal</p>
							<p class="descplato">Fresa, vainilla o chocolate</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/crepita-de-cajeta">
							<img src="/img/2019/minimenu/platos/Crepita.png">
							<p>Crepita de cajeta</p>
							<p class="caloriasp">280 Cal</p>
							<p class="descplato">Servida con nuez</p></a>
						</div>

						<div>
						
							<a href="https://vips.com.mx/menu/infantil/gelatina-arcoiris">
							<img src="/img/2019/minimenu/platos/GelatinaDeArcoiris.png">
							<p>Gelatina de arcoiris</p>
							<p class="caloriasp">80 Cal</p>
							<p class="descplato">Combinación de gelatina de vainilla, limón y fresa</p></a>
						</div>
					
					
					</div>
					
			<div class="btns">
<a href="ubicaciones" class="btnubica grow">Buscar mi Vips</a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

</div>
			</div>
			
				
	
	

	
	</div>
	
	</div>
	


	</div>








</div>



</div>




<script src="js/wow.min.js"></script>
</script><script src='slick/slick.min.js'></script>
<script>


$( window ).on( "load", function() {

  new WOW().init();
});


$( document ).on( "ready" , function() {
	
	$("#btndescarga").click(function(){
	$("#popManteletas").fadeIn(350);
	$("body").css("overflow", "hidden");
});


$(".closepopm").click(function(){
	$("#popManteletas").fadeOut(350);
	$("body").css("overflow", "auto");
});




	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 3,

		slidesToScroll: 3,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: false,
  autoplaySpeed: 3000,

	});


	$('.carouselbebidas').slick({

		infinite: true,

		slidesToShow: 3,

		slidesToScroll: 3,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});

	$('.carouselentradas').slick({

		infinite: true,

		slidesToShow: 3,

		slidesToScroll: 3,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});


	$('.carouselcomida').slick({

		infinite: true,

		slidesToShow: 3,

		slidesToScroll: 3,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});

	$('.carouselpostres').slick({

		infinite: true,

		slidesToShow: 3,

		slidesToScroll: 3,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});

	
	
	$(".pla5 .slick-arrow").click(function(){
	$(".bgtit1t1").slideToggle();
	$(".bgtit1t2").slideToggle();
});



$(".pla7 .slick-arrow").click(function(){
	
	$(".bgtit3t1").slideToggle();
	$(".bgtit3t2").slideToggle();
	
});







});







</script>



<!-- Footer =============================-->
<?php include('footer.php');?>
