<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /crece-tu-menu');

  exit(0);

}

?>


<link rel="stylesheet" href="css/animate.css">





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
	position: absolute;
	font-family: "Program",sans-serif;
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
.platillo img {
	width: 100%;
	padding: 5%;
	transition: .35s all ease;
	padding-bottom: 0;
}

.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}
.legales {
	font-family: "Program",sans-serif;
	color: #333;
	text-align: center;
	font-size: .75em;
	padding: 0em 5%;
	float: left;
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	z-index: 3;
	position: relative;
	margin-top: 2.5% !important;
}
.legales:hover{opacity:1; transition:.35s all ease;}
.btnubica {
	font-size: .9em;
	padding: .5em 1em;
	margin: 2em;
	display: inline-block;
	text-align: center;
	background: #f29100;
	margin-top: 2em;
	margin-bottom: 1.5%;
	position: relative;
	left: 0;
	z-index: 5;
	bottom: 10%;
	font-family: "Program";
	color:#fff;
}

.btnubica:hover {
	background: #ffac30;
	transition: all .4s ease;
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
	top: 0;
	width: 120%;
	right: 0;
	float: right;
	margin-top: 60%;
	z-index: 2;
	left: 18%;
}
.pla2 {
	position: relative;
	top: 0%;
	z-index: 1;
	left: 0;
	width: 135%;
	margin-top: 0%;
	left: -30%;
}

.pla3 {
	position: relative;
	top: 0%;
	z-index: 1;
	left: 0;
	width: 125%;
	margin-top: -10%;
	right: -22.5%;
}
.pla4 {
	position: relative;
	top: 0%;
	z-index: 1;
	left: -30%;
	width: 135%;
	margin-top: -5%;
	/* right: 5%; */
}
.platillo.pla5 {

	position: relative;

	right: 2%;

	top: 40%;

}


.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}

body {
	background-color: #fcfbf9;
}
main {
	margin-top: 5vh;
}

.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }

.btnubicaciones {
	display: inline-block;
	left: 0;
	width: 100%;
	margin-top: 0;
	float: left;
	margin-left: 5%;
}
.btnubicaciones img {
	width: 50%;
	left: 0;
	position: relative;
	margin: 0;
	padding: 0;
	display: inline-block;
	float: left;
	margin-left: 20%;
}
#site-wrapper {
    padding-bottom: 8.5vh;
}

.titplato {
	width: 45% !important;
	margin-top: -5% !important;
	padding: 0 !important;
	float: right;
	margin-right: 15%;
}

.pla2 .titplato {
	margin-left: 25%;
	/* left: 45%; */
	float: left;
	margin-top: -7.5% !important;
}
.pla3 .titplato {
	margin-right: 25%;
	float: right;
	margin-left: 0;
	width: 60% !important;
	margin-top: -17.5% !important;
}
.pla4 .titplato {
	width: 48% !important;
	margin-left: 25% !important;
	float: left;
	margin-top: -17% !important;
}
</style>


<div class="main">
	<img src="/img/2019/crece-menu/Landing-mobile_Complementa-tu-menu-Fondo-min.png" class="imgmain" width="100%;">
	<div class="gif">
		<div class="platillo pla1 wow  fadeInLeft ">
			<a href="https://vips.com.mx/menu/comidas-cenas/carne-asada">
				<img src="/img/2019/crece-menu/Arrachera-mobile-min.png">
			
			</a>
		</div>
		<a href="ubicaciones" class="grow btnubicaciones"><img src="/img/2019/desayunos79/Boton.png"></a>
		<p class="legales">
			<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>
		</p>
	</div>	
</div>

</div>



</div>

<script src="js/wow.min.js"></script>
<script>

 new WOW().init();
</script>







  <!-- Footer =============================-->

  <?php include('footerm.php');?>

