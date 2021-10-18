<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: especiales-de-temporada-m');
    exit(0);
}
?>
<link rel="stylesheet" href="css/animate.css">
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<div class="main">



<style>


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

.platillo img {
	width: 100%;
	padding: 4.5%;
	transition: .35s all ease;
	z-index: 2;
	position: relative;
}
.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}

.platillo p {
	margin-top: -2.5%;
	font-family: "Program",sans-serif;
	color: #fff;
	padding: 0 15%;
	text-align: left;
	font-weight: normal;
	padding-left: 10%;
	font-size: 15px;
}
.titplato {
	color: #fed802 !important;
	padding-bottom: 5px !important;
	font-family: "Museo 900" !important;
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
	width: 100%;
	text-align: center;
	position: relative;
	float: left;
	margin-top: .5%;
	padding-left: 0%;
	padding-bottom: 0;
}
.btnubica {
	font-size: .9em;

	margin: 0;
	display: inline-block;
	text-align: center;

	margin-top: 0;
	margin-bottom: 0;
	position: relative;
	/* left: 0; */
	z-index: 5;
	bottom: 0;
	color:#fff;
	font-family:"Program", sans-serif;
	font-size:1.2em;
}


.btnubica:hover {
	transition: all .4s ease;
}
.btnubica img {
	width: 90%;
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
	position: relative;
	width: 65%;
	left: 0;
	float: left;
	margin-top: 15%;
	padding: 0;
}
.pla2 {
	position: relative;
	margin-top: 0;
	z-index: 2;
	left: 0%;
	width: 100%;
	margin-bottom: 10%;
}
.pla3 {
	position: relative;
	margin-top: 0;
	width: 100%;
	left: 0;
	float: left;
}
.pla4 {
	position: relative;
	margin-top: -22.5%;
	width: 50%;
	left: 0;
	float: left;
}

.pla5 {
	position: relative;
	margin-top: -5px;
	width: 100%;
	left: 0;
	float: left;
	background: url(img/disney/bgdesktop3.jpg);
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
	background: url(img/disney/bgdesktop2.jpg);
	background-size: cover;
	background-position: top center;
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

.footer{margin-top:-7px;}

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
}

.carouselbebidas {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	margin-top: 0%;
}

.carouseldesayunos {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	margin-top: 0%;
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



.pla7,  .pla5 {
	padding-top: 10%;
}
.legales {
	font-family: "Program",sans-serif;
	color: #222;
	text-align: center;
	font-size: 1em;
	color: #fff;
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
	margin-top: 0%;
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

.textura {
	position: absolute !important;
	left: 0;
	z-index: 1 !important;
	margin-top: 7.5%;
	top:0;
}

.third {
	width: 33.3%;
	display: inline-block;
	margin: 0;
	float: left;
	position: relative;
}

.third .textura {
	position: absolute !important;
	left: 0;
	z-index: 1 !important;
	margin-top: 6.5%;
	width: 95% !important;
}

.firstp .textura{
	width: 80% !important;
	left: 10%;
}

.pleca1 {
	width: 95%;
	margin-top: -2.5%;
}
.pleca2 {
	width: 95%;
	margin-top: 0%;
}

.tit1 {
	color: #fed802 !important;
	position: absolute;
	right: 8.5%;
	margin-top: 20%;
	width: 30%;
	font-size: 26px;
	font-family: "Museo 900";
}
.tit2 {
	position: absolute;
	right: 8.5%;
	margin-top: 31%;
	font-size: 20px;
	font-weight: 500;
	width: 30%;
}
.tit3 {
	color: #fed802 !important;
	right: 8.5%;
	margin-top: 2.5%;
	width: 100%;
	font-size: 26px;
	font-family: "Museo 900";
}

.tit4 {
	position: relative;
	right: 0;
	margin-top: 0;
	font-size: 20px;
	font-weight: 500;
	width: 100%;
}

.pl1 {
	width: 95%;
	margin-top: -2.5%;
}
@media(min-width:1300px){
.pleca1 {
	width: 95%;
	margin-top: -12%;
}

.platillo p {
	margin-top: -2.5%;
	font-family: "Program",sans-serif;
	color: #fff;
	padding: 0 15%;
	text-align: left;
	font-weight: normal;
	padding-left: 10%;
	font-size: 18px;
	padding-right: 5%;
}

}

.main {
    margin-top: 124px;
}
.t3d{margin-top:7.5%;}
@media(max-width:1700px){
.tit3 {
	margin-top: 5.5%;
}
}
@media(max-width:1500px){
.platillo img {
	padding: 3% 5%;
}
.tit3 {
	margin-top: 3.5%;
}
}

@media(max-width:1300px){
.platillo img {
	padding: 0 5%;
}
.pl1 {
	width: 95%;
	margin-top: 0%;
}
}

@media(max-width:1200px){
.pla2 {
	margin-bottom: 5%;
}
}
</style>
<?php
date_default_timezone_set("America/Mexico_City");
$h = date('G'); //set variable $h to the hour of the day
//G is the date key for hours in 24 format (not 12), with no leading 0s, like 02.


if ($h < 13){  
$showdesayunos = 'display:block;';
$showcomidas = 'display:none;';

}
if ($h > 12) {
$showdesayunos = 'display:none;';
$showcomidas = 'display:block;';

}



//if it's before 7am, use fish image
//if not and it's before 8pm, use frogs
//otherwise, potatoes
?>

<div class="main" style="<?php echo $showcomidas;?>" data-hour="<?php echo $h;?>">
<div style="width:100%; position:relative; float: left;">
<img src="/img/2019/comidas/FondoComidasMayo2.png" class="imgmain" width="100%;">
	<div class="gif">
	
	<h1 class="tit1">Platillos deliciosos para consentirte</h1>
	<h2 class="tit2">Incluyen: Una sopa del día (270mL), y una bebida (350mL de refresco o naranjada o limonada o agua de sabor)</h2>
	
		<div class="platillo pla1  wow fadeInUp">
		<img src="/img/2019/comidas/FettucciniAlfredo.png">
		<img class="textura" src="/img/2019/comidas/TexturaFetuccinni.png">
		<p class="titplato">Fettuccini Alfredo</p>
		<p>Tradicional salsa con vino blanco, queso parmesano y pechuga de pollo horneada (160g)</p>

		</div>
		
		
		<div class="platillo pla2  wow fadeInUp">
		
			
			<div class="carouselcomida">
				<div class="third firstp">
			<img src="/img/2019/comidas/PenneCilantro.png">
				<img class="textura" src="/img/2019/comidas/TexturaPenneCilantro.png">
				<p class="titplato">Penne al cilantro</p>
				<p>Salsa de cilantro, queso parmesano y un toque de nuez, servido con filete de mojarra a la plancha (75g)</p>
			</div>
			
			<div class="third ">
				<img src="/img/2019/comidas/Spaghetti.png">
				<img class="textura" src="/img/2019/comidas/TexturaSpaghetti.png">
				<p class="titplato">Spaghetti con mini albóndigas</p>
				<p>Salsa de jitomate con gravy, queso parmesano y mini albóndigas de res</p>
			</div>
			
			<div class="third">
				<img src="/img/2019/comidas/MilanesaTampico.png">
				<img class="textura" src="/img/2019/comidas/TexturaMilanesaTampico.png">
				<p class="titplato">Milanesa Tampico (120g)</p>
				<p>Milanesa de res acompañada con enchiladas verdes, frijoles campesinos y guacamole</p>
			</div>
			
			<div class="third">
				<img src="/img/2019/comidas/PechugaUxmal.png">
				<img class="textura" src="/img/2019/comidas/TexturaSpaghetti.png">
				<p class="titplato">Pechuga Uxmal (150g)</p>
				<p>Rellena con queso crema y plátano macho; servida con salsa cassé, spaghetti con champiñones y verduras a la parrilla</p>
			</div>
		</div>
		

		</div>
		
		<img class="pleca1 pl1" src="/img/2019/comidas/Pleca_rosa_1.png">
		<h1 class="tit3 t3d">Déjate consentir en las mañanas con el rico sabor de Vips</h1>
	<h2 class="tit4">Incluyen: Un jugo (300 mL) o una orden de fruta (150 g) y café americano rellenable o un té de sobre </h2>
		
		
		<div class="platillo pla3  wow fadeInUp">
			<div class="third firstp">
			<img src="/img/2019/comidas/RolloDeHuevoAlCilantro.png">
				<img class="textura" src="/img/2019/comidas/TexturaPenneCilantro.png">
				<p class="titplato">Rollo de huevo al cilantro (2 pzas)</p>
				<p>Relleno de queso crema con tocino, sobre salsa cilantro; acompañado de papas cambray al ajillo verde</p>
			</div>
			
			<div class="third ">
				<img src="/img/2019/comidas/HuevosPoblanos.png">
				<img class="textura" src="/img/2019/comidas/TexturaSpaghetti.png">
				<p class="titplato">Huevos poblanos (2 pzas)</p>
				<p>Estrellados servidos sobre sincronizada de jamón y queso, bañados con salsa roja poblana y gratinados con queso gouda</p>
			</div>
			
			<div class="third">
				<img src="/img/2019/comidas/HuevosTirados.png">
				<img class="textura" src="/img/2019/comidas/TexturaMilanesaTampico.png">
				<p class="titplato">Huevos tirados especiales</p>
				<p>Huevos revueltos con frijoles, servidos con queso Oaxaca; acompañados de plátano macho frito, chorizo, salsa verde  y crema</p>
			</div>
		

		</div>
		
		<img class="pleca2" src="/img/2019/comidas/Pleca_rosa_2.png">
		
			<div class="btns">
<a href="ubicaciones" class="btnubica grow"><img src="/img/2019/comidas/Boton.png"></a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

</div>	
	
	</div>
	
	

</div>
</div>


<div class="main" style="<?php echo $showdesayunos;?>">
<div style="width:100%; position:relative; float: left;">
<img src="/img/2019/comidas/FondoComdiasMayo2.png" class="imgmain" width="100%;">
	<div class="gif">
	
	<h1 class="tit1">Déjate consentir en las mañanas con el rico sabor de Vips</h1>
	<h2 class="tit2">Incluyen: Un jugo (300 mL) o una orden de fruta (150 g) y café americano rellenable o un té de sobre</h2>
	
		<div class="platillo pla1  wow fadeInUp" style="width: 60%;">
		<img src="/img/2019/comidas/Mixto_Americano.png">
		<img class="textura" src="/img/2019/comidas/TexturaMixtoAmericano.png">
		<p class="titplato">Mixto americano (2 pzas)</p>
		<p>Huevos revueltos sobre salsa verde asada, acompañados de salchicha, papa hash brown y pan tostado</p>

		</div>
		
		<div class="platillo pla2  wow fadeInUp">
			<div class="third firstp">
			<img src="/img/2019/comidas/RolloDeHuevoAlCilantro.png">
				<img class="textura" src="/img/2019/comidas/TexturaPenneCilantro.png">
				<p class="titplato">Rollo de huevo al cilantro (2 pzas)</p>
				<p>Relleno de queso crema con tocino, sobre salsa cilantro; acompañado de papas cambray al ajillo verde</p>
			</div>
			
			<div class="third ">
				<img src="/img/2019/comidas/HuevosPoblanos.png">
				<img class="textura" src="/img/2019/comidas/TexturaSpaghetti.png">
				<p class="titplato">Huevos poblanos (2 pzas)</p>
				<p>Estrellados servidos sobre sincronizada de jamón y queso, bañados con salsa roja poblana y gratinados con queso gouda</p>
			</div>
			
			<div class="third">
				<img src="/img/2019/comidas/HuevosTirados.png">
				<img class="textura" src="/img/2019/comidas/TexturaMilanesaTampico.png">
				<p class="titplato">Huevos tirados especiales</p>
				<p>Huevos revueltos con frijoles, servidos con queso Oaxaca; acompañados de plátano macho frito, chorizo, salsa verde  y crema</p>
			</div>
		

		</div>
		
		<img class="pleca1" src="/img/2019/comidas/Pleca_rosa_2.png">
		<h1 class="tit3">Platillos deliciosos para consentirte</h1>
	<h2 class="tit4">Incluyen: Una sopa del día (270mL), y una bebida (350mL de refresco o naranjada o limonada o agua de sabor) </h2>
		
		<div class="platillo pla3  wow fadeInUp">
				<div class="carouselcomida">
				<div class="third firstp">
			<img src="/img/2019/comidas/PenneCilantro.png">
				<img class="textura" src="/img/2019/comidas/TexturaPenneCilantro.png">
				<p class="titplato">Penne al cilantro</p>
				<p>Salsa de cilantro, queso parmesano y un toque de nuez, servido con filete de mojarra a la plancha (75g)</p>
			</div>
			
			<div class="third ">
				<img src="/img/2019/comidas/Spaghetti.png">
				<img class="textura" src="/img/2019/comidas/TexturaSpaghetti.png">
				<p class="titplato">Spaghetti con mini albóndigas</p>
				<p>Salsa de jitomate con gravy, queso parmesano y mini albóndigas de res</p>
			</div>
			
			<div class="third">
				<img src="/img/2019/comidas/MilanesaTampico.png">
				<img class="textura" src="/img/2019/comidas/TexturaMilanesaTampico.png">
				<p class="titplato">Milanesa Tampico (120g)</p>
				<p>Milanesa de res acompañada con enchiladas verdes, frijoles campesinos y guacamole</p>
			</div>
			
			<div class="third">
				<img src="/img/2019/comidas/PechugaUxmal.png">
				<img class="textura" src="/img/2019/comidas/TexturaSpaghetti.png">
				<p class="titplato">Pechuga Uxmal (150g)</p>
				<p>Rellena con queso crema y plátano macho; servida con salsa cassé, spaghetti con champiñones y verduras a la parrilla</p>
			</div>
		</div>
		

		</div>
		
		<img class="pleca2" src="/img/2019/comidas/Pleca_rosa_1.png">
		
		
		
		
			<div class="btns">
<a href="ubicaciones" class="btnubica grow"><img src="/img/2019/comidas/Boton.png"></a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

</div>	
	
	</div>
	
	

</div>

	</div>


</div>



</div>

<div id="popManteletas">
<div class="closepopm"></div>
	<div id="contManteletas">
	
	<a href="img/disney/ManteletaDisney01.jpg" download><img class="grow" src="img/disney/ManteletaDisney01.jpg"></a>
	<a href="img/disney/ManteletaDiseney02.jpg" download><img class="grow" src="img/disney/ManteletaDiseney02.jpg"></a>


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
		autoplay: false,
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

	$('.carouselspyros').slick({

		infinite: true,

		slidesToShow: 6,

		slidesToScroll: 6,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
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
