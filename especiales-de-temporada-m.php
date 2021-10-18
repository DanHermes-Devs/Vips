<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /especiales-de-temporada');

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
	font-size: .8em;
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

.btnubica img{    width: 80%;}

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


.imgmain {
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
	margin-bottom: -5px;
}

body {
	background-color: #fff;
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
	width: 80%;
	float: left;
	padding: 0%;
	margin: 0 10%;
	margin-top: 0%;
}

.carouselbebidas {
	width: 80%;
	float: left;
	padding: 0%;
	margin: 0 10%;
	margin-top: 0%;
}

.carouseldesayunos {
	width: 100%;
	float: left;
	padding: 0%;
	margin: 0;
	margin-top: 0%;
	padding: 0 5%;
}
.carouseldesayunos  img, .carouselcomida img, .carouselbebidas img {
	width: 100%;
	padding: 5%;
	transition: .35s all ease;
	max-height: 350px;
	object-fit: contain;
}

.pla7 p {
	margin-top: -15%;
	font-family: "Program",sans-serif;
	color: #333!important;
	padding: 0 15%;
}

.pla1 {
	position: relative;
	width: 100%;
	margin-top: 33%;
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
.pla7 {
	position: relative;
	margin-top: -5px;
	width: 100%;
	left: 0;
	float: left;
	color: #fff;
	background: url(img/disney/bgmobile2.jpg);
	background-size: cover;
	background-position: left center;
	padding-bottom: 10%;
}
.pla7,  .pla5 {
	padding-top: 20%;
}
.legales {
	color: #222;
	text-align: center;
	font-size: .7em;
	color: #fff;
	margin-top: 5px;
}
.disneycheck {
	width: 40% !important;
	margin: 0 30% !important;
	padding: 0 !important;
}
.carouseldesayunos img, .carouselcomida img, .carouselbebidas img {
	width: 100%;
	padding: 0;
	z-index: 2;
	position: relative;
}
#btndescarga {
	background: #fea009;
	position: absolute;
	width: 140px;
	bottom: 2.5%;
	right: 7.5%;
	padding: 10px;
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
	/* bottom: -25px; */
	display: block !important;
	bottom: -25px !important;
	left: 0;
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
	position: relative;
	/* bottom: -1%; */
	width: 70%;
	margin-left: 15%;
	/* font-size: 20px; */
	float:left;
}
.slick-slide {
	position: relative;
}

.textura {
	z-index: 1 !important;
	top: 0;
	position: absolute !important;
	margin-top: 20%;
}
.textura.tx2 {
	margin-top: 12%;
	width: 85%;
	left: 10%;
}

.textura.tx3 {
	width: 90%;
	left: 5%;
}
.textplato {
	width: 80% !important;
	left: 10%;
	margin-top: 5%;
}

.pla2 {
	width: 100%;
	margin-top: 55%;
}
.pla2 .textura.tx3 {
	width: 90%;
	left: 5%;
	margin-top: 5% !important;
}

.textura.tx1 {
	margin-top: 0;
	width: 90%;
}

.textura.tx11{
	width: 80%;
	left: 5%;
	margin-top: 15%;
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

<div class="main" style="<?php echo $showdesayunos;?>" data-hour="<?php echo $h;?>">

<div style="width:100%; position:relative; float: left;">
<img src="/img/2019/comidas/mobile/LandingComidasMayoFondo.png" class="imgmain" width="100%;">
	<div class="gif">
	
		<div class="platillo pla1  wow fadeInUp">
	
		<div class="carouseldesayunos">
			<div>
				<img src="/img/2019/comidas/mobile/MixtoAmericano.png">
				<img class="textura" src="/img/2019/comidas/mobile/TexturaMixtoAmericano.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoMixtoAmericano.png">
			</div>
			<div>
				<img src="/img/2019/comidas/mobile/RolloDeHuevoAlCilantro.png">
				<img class="textura tx2" src="/img/2019/comidas/mobile/TexturaRolloDeHuevoAlCilantro.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoRolloDeHuevoAlCilantro.png">
			</div>
			<div>
				<img src="/img/2019/comidas/HuevosPoblanos.png">
				<img class="textura tx3" src="/img/2019/comidas/mobile/TexturaHuevosPoblanos.png">
				<img class="textplato" src="/img/2019/comidas/mobile/Texto_HuevosPoblanos.png">
			</div>
		</div>

	<img class="pleca1" src="/img/2019/comidas/mobile/Pleca_Rosa1.png">

	</div>
	
			<div class="platillo pla2  wow fadeInUp">
	
		<div class="carouselcomida">
				<div>
				<img src="/img/2019/comidas/mobile/Fettuccini.png">
				<img class="textura tx11" src="/img/2019/comidas/mobile/TexturaFetuccino.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoFetuccino.png">
			</div>
			<div>
				<img src="/img/2019/comidas/mobile/PenneCilantro.png">
				<img class="textura tx1" src="/img/2019/comidas/mobile/TexturaPenneCilantro.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoPenneCilantro.png">
			</div>
			<div>
				<img src="/img/2019/comidas/mobile/MilanesaTampico.png">
				<img class="textura tx2" src="/img/2019/comidas/mobile/TexturaMilanesaTampico.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoMilanesaTampico.png">
			</div>
			<div>
				<img src="/img/2019/comidas/PechugaUxmal.png">
				<img class="textura tx3" src="/img/2019/comidas/mobile/TexturaPechuga.png">
				<img class="textplato" src="/img/2019/comidas/mobile/Texto_PechugaUxmal.png">
			</div>
		</div>

	<img class="pleca2" src="/img/2019/comidas/mobile/Pleca_Rosa_2.png">

	</div>
	
		<div class="btns">
<a href="ubicaciones" class="btnubica grow"><img src="/img/2019/comidas/mobile/Boton.png"></a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

</div>

	</div>
	
	</div>
	



</div>

<div class="main" style="<?php echo $showcomidas;?>" data-hour="<?php echo $h;?>">

<div style="width:100%; position:relative; float: left;">
<img src="/img/2019/comidas/mobile/LandingComidasMayoFondoC.png" class="imgmain" width="100%;">
	<div class="gif">
	
		<div class="platillo pla1  wow fadeInUp" style="margin-top:40%;">
	
		<div class="carouseldesayunos">
				<div>
				<img src="/img/2019/comidas/mobile/Fettuccini.png">
				<img class="textura tx11" src="/img/2019/comidas/mobile/TexturaFetuccino.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoFetuccino.png">
			</div>
			<div>
				<img src="/img/2019/comidas/mobile/PenneCilantro.png">
				<img class="textura tx1" src="/img/2019/comidas/mobile/TexturaPenneCilantro.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoPenneCilantro.png">
			</div>
			<div>
				<img src="/img/2019/comidas/mobile/MilanesaTampico.png">
				<img class="textura tx2" src="/img/2019/comidas/mobile/TexturaMilanesaTampico.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoMilanesaTampico.png">
			</div>
			<div>
				<img src="/img/2019/comidas/PechugaUxmal.png">
				<img class="textura tx3" src="/img/2019/comidas/mobile/TexturaPechuga.png">
				<img class="textplato" src="/img/2019/comidas/mobile/Texto_PechugaUxmal.png">
			</div>
		</div>

	<img class="pleca1" src="/img/2019/comidas/mobile/Pleca_Rosa_2.png">

	</div>
	
			<div class="platillo pla2  wow fadeInUp" style="margin-top:35%;">
	
		<div class="carouselcomida">
			<div>
				<img src="/img/2019/comidas/mobile/MixtoAmericano.png">
				<img class="textura" src="/img/2019/comidas/mobile/TexturaMixtoAmericano.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoMixtoAmericano.png">
			</div>
			<div>
				<img src="/img/2019/comidas/mobile/RolloDeHuevoAlCilantro.png">
				<img class="textura tx2" src="/img/2019/comidas/mobile/TexturaRolloDeHuevoAlCilantro.png">
				<img class="textplato" src="/img/2019/comidas/mobile/TextoRolloDeHuevoAlCilantro.png">
			</div>
			<div>
				<img src="/img/2019/comidas/HuevosPoblanos.png">
				<img class="textura tx3" src="/img/2019/comidas/mobile/TexturaHuevosPoblanos.png">
				<img class="textplato" src="/img/2019/comidas/mobile/Texto_HuevosPoblanos.png">
			</div>
		</div>

	<img class="pleca2" src="/img/2019/comidas/mobile/Pleca_Rosa1.png">

	</div>
	
		<div class="btns">
<a href="ubicaciones" class="btnubica grow"><img src="/img/2019/comidas/mobile/Boton.png"></a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

</div>

	</div>
	
	</div>
	



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



	$('.carouselmenu').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 4000,

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

