<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /cuaresma');

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

    font-family: "AmsiProNarw", sans-serif;

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
	position: relative;
	font-family: "Museo 900",sans-serif;
	top: 0%;
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

.slick-prev::before, .slick-next::before {
    opacity: .75;
    color: #fff!important;
}

.platillo p {
	/* margin-top: 0; */
	/* font-family: inherit; */
	color: #19669b;
	margin-top: -18%;
	font-size: .55em;
	padding: 0 5%;
	font-family: "Moreno";
}
.legales {
	font-family: "Moreno",sans-serif;
	color: #19669b;
	text-align: center;
	font-size: .8em;
	padding: 0em 5%;
	float: left;
	margin: 0 auto;
	width: 100%;
	opacity: .8;
	transition: .35s all ease;
	margin-top: 10px;
	z-index: 9;
	position: relative;
	margin-bottom: 10px;
}
.legales:hover{opacity:1; transition:.35s all ease;}
.btnubica {
	font-size: .7em;
	margin: 0 1em;
	display: inline-block;
	text-align: center;
	margin-bottom: 0;
	position: relative;
	left: 0;
	z-index: 5;
	bottom: 0;
	font-family: "Moreno";
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


.pla1 {
	position: relative;
	top: 0;
	width: 100%;
	right: 0;
	float: left;
	margin-top: -25%;
	margin-left: 0;
	width: 90%;
	margin-left: 5.5%;
}
.pla2 {
	position: relative;
	margin-top: 0;
	z-index: 2;
	right: 0;
	width: 100%;
}
.platillo.pla3 {
	position: relative;
	top: 0;
	width: 80%;
	right: -35%;
	z-index: 1;
	margin-top: 5%;
}
.platillo.pla4 {
	position: relative;
	margin-top: -40%;
	left: -5%;
	width: 70%;
}
.platillo.pla5 {
	position: relative;
	width: 100%;
	padding: 0 9%;
	margin-top: 0;
	color: #19669b;
}
.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}

body {
	background-color: #fff;
	background: url(img/cuaresma/fondo.jpg);
	background-size: coover;
	background-repeat: no-repeat;
}

main {
	margin-top: 5vh;
}
.midimg {
	width: 48% !important;
}
.midimg.caracol1 {
	position: absolute;
	margin-top: -12%;
	right: -10%;
	width: 40% !important;
}

.pla2 img{pointer-events:none;}

.pla5 h2 {
	border-top: 3px solid #eb6640;
	padding-top: 5%;
	font-size: .7em;
	font-family: "Moreno";
	text-align: left;
	margin-left: -15%;
	padding-left: 10%;
}

.slick-prev::before, .slick-next::before {
	font-family: 'slick';
	font-size: 20px;
	line-height: 1;
	opacity: .75;
	color: #19669b;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}


.arena {
	pointer-events: none;
	width: 40% !important;
	left: -5% !important;
	float: left;
	position: absolute;
	margin-top: -15%;
}

.caracol2 {
	pointer-events: none;
	width: 30% !important;
	right: -5% !important;
	float: right;
	position: absolute;
	margin-top: -10%;
}
.carouseldesayunos {
	margin-top: -15%;
}

.carouseldesayunos {
	margin-top: -15%;
	margin-bottom: 15%;
}

.btnubica img {
	width: 60%;
	margin-top: 5%;
}
.slick-prev::before, .slick-next::before {
	opacity: .75;
	color: #19669b !important;
}
</style>


<div class="main">


	<div class="gif">



	<div class="platillo pla2  wow fadeInRight">

	<img src="img/cuaresma/logo_curesma.svg">
	<img src="img/cuaresma/incluye-04.svg" style="margin-top: -12%;">
	<a href="mojarra"><img class="midimg animate" style="pointer-events:all;" src="img/cuaresma/regal-03.svg"></a>
	<img class="midimg"  src="img/cuaresma/hellmanns-02.svg">

	<img class="midimg caracol1"  src="img/cuaresma/caracoles.png">
	




	</div>
	
		<div class="platillo pla1  wow fadeInLeft">

	<div class="carousel1">
		
				<div>
					<a href="platillo?id=197"><img src="img/cuaresma/platos/filetedemojarraalpesto.png">
					<p class="par1">Filete de mojarra <br>al pesto <span>(150g/960 Cal)</span></p></a>
				</div>

				<div>
					<a href="platillo?id=199"><img src="img/cuaresma/platos/Filete-de-mojarra-al-ajillo.png">
					<p class="par2">Filete de mojarra <br>al ajillo <span>(150g/620 Cal)</span></p></a>
				</div>
				
				<div>
					<a href="platillo?id=198"><img src="img/cuaresma/platos/Camarones-empanizados.png">
					<p class="par3">Camarones empanizados<br> <span>(10 pzas/ 872 Cal)</span></p></a>
				</div>

				<div>
					<a href="platillo?id=199"><img src="img/cuaresma/platos/Filete-de-mojarra-en-salsa-de-cilantro.png">
					<p class="par4">Filete de mojarra <br>en salsa de cilantro<span>(150g/990 Cal)</span></p></a>
				</div>
				
	
			
	</div>



	</div>


	
	
	<div class="platillo pla5  wow fadeInUp">
	<h2>Además disfruta de estas entradas</h2>

		<div class="carouseldesayunos">
		
				<div class="wow fadeInUp" data-wow-offset="200" data-wow-delay=".5s">
					<a href="platillo?id=202"><img src="img/cuaresma/platos/caldo_camaron.png">
					<p>Caldo de camarón <br>(370 mL - 143 Cal) </p></a>
				</div>
				
				<div class="wow fadeInUp" data-wow-offset="200" data-wow-delay="1s">
					<a href="platillo?id=200"><img src="img/cuaresma/platos/pescadillas.png">
					<p>Pescadillas <br>(3 pzas cortadas por mitad - 642 Cal)</p></a>
				</div>
				
				<div class="wow fadeInUp" data-wow-offset="200" data-wow-delay="1.5s">
					<a href="platillo?id=201" ><img src="img/cuaresma/platos/tacos_baja.png">
					<p>Tacos estilo baja <br> (2 pzas - 490 Cal)</p></a>
				</div>

			

		</div>

	<img class="arena"  src="img/cuaresma/arena.png">
	<img class="caracol2"  src="img/cuaresma/_con.png">

	</div>
	
	




	</div>


<div class="btns">
<a href="ubicaciones" class="btnubica grow"><img src="img/nochesantojo/CTA.png"></a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

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




	$('.carousel1').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});

	
	
	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});





});


</script>



  <!-- Footer =============================-->

  <?php include('footerm.php');?>

