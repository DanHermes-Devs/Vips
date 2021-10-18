<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /menu-infantil-disney');

  exit(0);

}

?>
<link rel="stylesheet" href="css/animate.css">
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<div class="main">



	<?php include('lateral.php');?>



	<main role="main">






<style>


.resptext {

    width: 100%;

    float: left;

    padding: 0 5% 5% 5%;

    font-family: "Program", sans-serif;

}
body {
	background-color: black;
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
	top: 0%;
	z-index: 2;
	height: 100%;
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





.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}

.slick-prev::before, .slick-next::before {
    opacity: .75;
    color: #fff!important;
}
.platillo p {
	margin-top: 0;
	font-family: inherit;
	color: #fff;
	margin-top: -18%;
	font-size: 1em;
	padding: 0 5%;
}
.legales {
	font-family: "Program",sans-serif;
	color: #333;
	text-align: center;
	font-size: 1.1em;
	padding: 0em 5%;
	float: left;
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	margin-top: 10px;
	z-index: 9;
	position: relative;
	margin-bottom: 10px;
}
.legales:hover{opacity:1; transition:.35s all ease;}
.btnubica {
	font-size: .7em;
	margin: 1em 0;
	display: inline-block;
	text-align: center;
	margin-bottom: 0;
	position: relative;
	left: 0;
	z-index: 5;
	bottom: auto;
	font-family: "Program";
}
.btnubica:hover {
	transition: all .4s ease;
}

.btnubica img{    width: 70%;}

.white {

	margin-bottom: 0em;

	margin-top: 0;

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

*{outline:0;}


.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}

body {
	background-color: #fad400;
}

main {
	margin-top: 5vh;
}


.titcarousel {
	font-family: "Century gothic",sans-seif;
	text-align: left;
	text-transform: uppercase;
	font-weight: normal;
	margin-bottom: 10px;
	font-size: 180%;
	margin-top: 5%;
	font-size: 1em;
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
	width: 100%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: 0%;
}

.carouselbebidas {
	width: 100%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: 0%;
}

.carouseldesayunos {
	width: 80%;
	float: left;
	padding: 0%;
	margin: 0 10%;
	margin-top: 0%;
}

.carouseldesayunos  img, .carouselcomida img, .carouselbebidas img {
	width: 100%;
	padding: 5%;
	transition: .35s all ease;
	max-height: 350px;
	object-fit: contain;
}



.pla1 {
	position: relative;
	width: 100%;
	margin-top: 220%;
}
.pla5 {
	position: relative;
	margin-top: -5px;
	width: 100%;
	left: 0;
	float: left;
	background: url(img/disney/bgmobile3.jpg);
	background-size: cover;
	background-position: left center;
	color: #fff;
}
.pla6 {
	position: relative;
	margin-top: 0;
	width: 100%;
	left: 0;
	float: left;
	color: #fff;
	background: url(img/viernes-ninos/bg2.png);
	background-size: cover;
	background-position: top center;
}


.legales {
	color: #222;
	text-align: center;
	font-size: .6em;
	color: #fff;
	margin-top: 0;
}

.disneycheck {
	width: 40% !important;
	margin: 0 30% !important;
	padding: 0 !important;
}

.carouseldesayunos img, .carouselcomida img, .carouselbebidas img {
	width: 100%;
	padding: 0 15% 5%;
	transition: .35s all ease;
	max-height: 350px;
	object-fit: contain;
	padding-top: 0;
	margin-top: 0;
}

#btndescarga {
	background: #fea009;
	position: absolute;
	width: 140px;
	margin-top: 284%;
	right: 10%;
	padding: 5px 10px;
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
	margin-top: 20%;
}
#contManteletas a {
	width: 100%;
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
	top: 8%;
	right: 15%;
	cursor: pointer;
}

.carouselmenu {
	width: 100%;
	margin-bottom: 0 !important;
}
.carouselmenu img {
	width: 100%;
}

.main .slick-dots {
	bottom: -25px;
	display: block !important;
	bottom: -7.5px !important;
}


.main .slick-dots li.slick-active button::before {
	color: #fff !important;
}

.pla7 .slick-dotted.slick-slider {
	margin-bottom: 0px;
}

.pla8 .slick-dots{
	bottom: 15% !important;
}

.btns {
	position: absolute;
	margin-top: 940%;
	width: 70%;
	margin-left: 15%;
}
p.titleplato {
	color: #fff !important;
	font-size: 21px;
	font-weight: bold;
	margin-top: -13%;
	font-family: "Museo 700", sans-serif;
	
}
p.caloriasplato {
	color: #fff !important;
	font-size: 15px;
	font-weight: 100;
	margin-top: -5%;
	font-family: 'Museo 500', sans-serif;
}
p.descplato {
	color: #fff !important;
	margin-top: -5%;
	font-size: 15px;
	font-weight: 500;
	padding: 0 5% !important;
	font-family: 'Museo 700', sans-serif;
}

.pla7 {
	width: 100%;
	position: absolute;
	margin-top: 382.5%;
	z-index: 2;
	/* padding-top: 15%; */
}

.pla8 {
	width: 100%;
	position: absolute;
	margin-top: 620%;
	z-index: 2;
}

.main .pla7 .slick-dots {
	bottom: -2.5% !important;
}
.main .pla8 .slick-dots {
	bottom: -2.5% !important;
}
.pla9 {
	width: 100%;
	position: absolute;
	margin-top: 770%;
	z-index: 2;
}
.contimgcard {
	width: 100%;
	position: relative;
}
.absolutecard {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	padding: 15% 5%;
}
.carouselbeb {
	padding: 0;
	left: 0;
}
.carouselbeb img {
	padding: 25% 0% 10% 35%;
}

.main .absolutecard .slick-dots {
	bottom: -17.5px !important;
}

.carouselfruta {
	padding: 20% 10%;
}

.carouselbeb p.titleplato {
	margin-top: -5%;
}

.carouselfruta p.titleplato {
	margin-top: -15%;
}

.main .absolutecard .carouselfruta .slick-dots {
	bottom: 7.5% !important;
}

.carouselsopas {
	padding: 20% 10%;
	width: 100%;
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

.carouselbebidas img {
	width: 85%;
	margin: 0 7.5%;
}
.platillo p {
	transform: scale(.85);
}

</style>


<div class="main">

<div style="width:100%; position:relative; float: left;">
<img src="/img/2019/toy/ToyStory-fondo-min.png" class="imgmain" width="100%;">
	<div class="gif">
	
		<div class="platillo pla1  wow fadeInUp">
	
		<div class="carouselspyros">
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_ALIEN-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_BO PEED-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_BUZZ-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_DUCKANDBUNNY-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_DUKE-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_FORKY-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_HAM-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_JESSY-min.png">
				</div>

				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_REX-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_SLINKY-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_TIRO AL BLANCO-min.png">
				</div>
				<div>
					<img src="/img/2019/toy/spyrolocos/RENDER_SPYROLOCOS_DISNEY_WOODY-min.png">
				</div>


			
		</div>



	</div>
	
	<div id="btndescarga">Descargar</div>

	
	</div>
	
	</div>
	


	<div class="platillo pla7  wow fadeInUp">
	
		<div class="carouselbebidas">
		
				<div>
				
					<a href="">
					<img src="/img/2019/toy/platos/01HotCakesJr-min.png">
					<p class="titleplato">Hot cakes Jr</p> 
					<p class="caloriasplato">(4 pzas / 288 Cal)</p>
					<p class="descplato">Mini hot cakes servidos con fresas y plátanos</p></a>
				</div>

				<div>
				
					<a href="">
					<img src="/img/2019/toy/platos/02Gatito-min.png">
					<p class="titleplato">Gatito</p> 
					<p class="caloriasplato">(304 Cal)</p>
					<p class="descplato">Tortilla de huevo y verduras. Servida con papas a la francesa, pan tostado con mermelada y fresa</p></a>
				</div>

				<div>
				
					<a href="">
					<img src="/img/2019/toy/platos/03SolecitoVips-min.png">
					<p class="titleplato">Solecito Vips</p> 
					<p class="caloriasplato">(386 Cal)</p>
					<p class="descplato">Huevo estrellado acompañado de papa hash Brown, pan y ensalada de verduras</p></a>
				</div>



			
			</div>



	</div>
	
		<div class="platillo pla8  wow fadeInUp">
	
		<div class="carouselcomida">
		
				<div>
				
					<a href="">
					<img src="/img/2019/toy/platos/01Pescadito-min.png">
					<p class="titleplato">Pescadito</p> 
					<p class="caloriasplato">(75 g / 146 Cal)</p>
					<p class="descplato">Pescado asado acompañado de arroz a la mexicana, jitomate y pepino</p></a>
				</div>

				<div>
				
					<a href="">
					<img src="/img/2019/toy/platos/02SabanitaAventuraDeRes-min.png">
					<p class="titleplato">Sabanita aventura de res</p> 
					<p class="caloriasplato">(100g / 207 Cal)</p>
					<p class="descplato">Servida con bastones de verdura y puré de papa</p></a>
				</div>

				<div>
				
					<a href="">
					<img src="/img/2019/toy/platos/03SabanitaAcenturaDePollo-min.png">
					<p class="titleplato">Sabanita aventura de pollo</p> 
					<p class="caloriasplato">(100 g / 141 Cal)</p>
					<p class="descplato">Servida con juliana de verduras al vapor y rebanadas de jitomate</p></a>
				</div>
				
				<div>
				
					<a href="">
					<img src="/img/2019/toy/platos/04Suavitaquitos-min.png">
					<p class="titleplato">Suavitaquitos </p> 
					<p class="caloriasplato">(4 pzas / 274 Cal)</p>
					<p class="descplato">Rellenos de pollo, servidos con verduras y puré de papa</p></a>
				</div>



			
			</div>



	</div>
	
	<div class="platillo pla9  wow fadeInUp">
	
		<div class="carouselcards">
		
				<div>
					<div class="contimgcard">
						<img src="/img/2019/toy/TarjetaBebidas-min.png">
						<div class="absolutecard">
							<div class="carouselbeb">
								<div>
								
									<a href="">
									<img src="/img/2019/toy/platos/06_VasoConLecheLight-min.png">
									<p class="titleplato">Vaso con leche</p> 
									<p class="caloriasplato">(360 mL / 152 Cal)</p>
									<p class="descplato">Entera, light o deslactosada </p></a>
								</div>

								<div>
								
									<a href="">
									<img src="/img/2019/toy/platos/03_Limonadita-min.png">
									<p class="titleplato">Limonadita</p> 
									<p class="caloriasplato">(360 mL / 7 Cal)</p>
									<p class="descplato"></p></a>
								</div>

								<div>
								
									<a href="">
									<img src="/img/2019/toy/platos/02_AguaDeFresa-min.png">
									<p class="titleplato">Agua de fresa</p> 
									<p class="caloriasplato">(360 mL / 32 Cal)</p>
									<p class="descplato"></p></a>
								</div>
								
							
							</div>
						</div>
					</div>
				</div>
				
				<div>
					<div class="contimgcard">
						<img src="/img/2019/toy/Tarjeta-fruta-min.png">
						<div class="absolutecard">
							<div class="carouselfruta">
		
									<div>
									
										<a href="">
										<img src="/img/2019/toy/platos/01DeliciaDeFrutas-min.png">
										<p class="titleplato">Delicia de frutas</p> 
										<p class="caloriasplato">(92 Cal) </p>
										<p class="descplato">Combinación de fresa, plátano y naranja</p></a>
									</div>

									<div>
									
										<a href="">
										<img src="/img/2019/toy/platos/02Palmeritas-min.png">
										<p class="titleplato">Palmeritas</p> 
										<p class="caloriasplato">(86 Cal)</p>
										<p class="descplato">Divertido cocktail de frutas</p></a>
									</div>

									



								
							</div>
						</div>
					</div>
				</div>
				
				<div>
					<div class="contimgcard">
						<img src="/img/2019/toy/Tarjeta-sopas-min.png">
						<div class="absolutecard">
							<div class="carouselsopas">
							
									<div>
									
										<a href="">
										<img src="/img/2019/toy/platos/Fideo-min.png">
										<p class="titleplato">Sopita de fideo con jamón</p> 
										<p class="caloriasplato">(270 mL / 159 Cal)</p>
										<p class="descplato"></p></a>
									</div>

									<div>
									
										<a href="">
										<img src="/img/2019/toy/platos/Arroz-min.png">
										<p class="titleplato">Arroz a la mexicana o blanco</p> 
										<p class="caloriasplato">(150 g / 156 Cal) y (150 g / 169 Cal)</p>
										<p class="descplato"></p></a>
									</div>

								
								</div>
						</div>
					</div>
				</div>

			
			</div>



	</div>
	
	
	
		<div class="btns">
			<a href="ubicaciones" class="btnubica grow"><img src="https://vips.com.mx/img/2019/desayunos79/Boton.png"></a>
			<p class="legales">

			<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

				</p>

		</div>
	

</div>



</div>


<div id="popManteletas">
<div class="closepopm"></div>
	<div id="contManteletas">
	
	<a href="/img/2019/toy/ToyStory4_Manteleta-min.png" download><img class="grow" src="/img/2019/toy/ToyStory4_Manteleta-min.png"></a>
	<a href="/img/2019/toy/ToyStory4_Manteleta2-min.png" download><img class="grow" src="/img/2019/toy/ToyStory4_Manteleta2-min.png"></a>


	</div>

</div>



<script src="js/wow.min.js"></script>
</script><script src='slick/slick.min.js'></script>

<script>
function checkVariable(){
   if ( window.jQuery){
     new WOW().init();
   }
   else{
      window.setTimeout("checkVariable();",100);
   }
}
checkVariable();
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

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: false,
  autoplaySpeed: 3000,

	});


	$('.carouselbebidas').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 3500,


	});


	$('.carouselcomida').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 3500,


	});

	$('.carouselspyros').slick({

		infinite: true,

		slidesToShow: 3,

		slidesToScroll: 3,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 3500,

	});
	

	$('.carouselcards').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 12000,

	});
	
		$('.carouselbeb').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: false,
  autoplaySpeed: 3000,

	});

	$('.carouselfruta').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: false,
  autoplaySpeed: 3000,

	});

	$('.carouselsopas').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

	dots:true,
		autoplay: false,
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

  <?php include('footerm.php');?>

