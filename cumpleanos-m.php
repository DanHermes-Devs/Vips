﻿<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /cumpleanos');

  exit(0);

}

?>







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



.platillo p {

	margin-top: 0;

	font-family: "Museo 900", sans-serif;

	color: #fddc04;

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
	z-index: 3;
	position: absolute;
	width: 100%;
	top: 0;
	margin-top: 145%;
}
.legales:hover{opacity:1; transition:.35s all ease;}

.btnubica {
	padding: 10px 20px;
	margin: 0;
	display: inline-block;
	text-align: center;
	background: #f29100;
	margin-top: 0;
	margin-bottom: 0;
	position: absolute;
	z-index: 5;
	bottom: 0;
	color: #fff;
	font-family: "Program",sans-serif;
	font-size: 18px;
	font-weight: 500;
	border-radius: 30px;
	margin-top: 130%;
	height: 40px;
	z-index: 2;
	left: 0;
	top: 0;
	width: 50%;
	min-width:140px;
	margin-left: 25%;
}

.btnubica:hover {
	background: #ffac30;
	transition: all .4s ease;
}

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
	position: absolute;
	margin-top: 45%;
	width: 100%;
	left: 0%;
	float: left;
	z-index: 2;
}
.pla2 {
	position: absolute;
	margin-top: 60%;
	z-index: 1;
	left: -8%;
	width: 100%;
}
.platillo.pla3 {
	position: absolute;
	margin-top: 90%;
	width: 65%;
	left: -15%;
	z-index: 3;
}
.platillo.pla4 {
	position: absolute;
	top: 25%;
	right: 0%;
	width: 39%;
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
	background-color: #fff;
}

main {
	margin-top: 5vh;
}

</style>


<div class="main">

<img src="/img/2019/cumpleanos/LandingCumpleañosMobileFondo.png" class="imgmain" width="100%;">
	<div class="gif">
	<div class="platillo pla1">
	<a ><img src="/img/2019/cumpleanos/Cheescakeconfresas.png"></a>
	</div>

	<div class="platillo pla2">
	<a ><img src="/img/2019/cumpleanos/Textura.png"></a>
	</div>
	
	<div class="platillo pla3">
	<a ><img src="/img/2019/cumpleanos/Fresas.png"></a>
	</div>





	<a href="ubicaciones" class="btnubica">Buscar mi Vips</a>

	</div>



<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>





</div>



</div>







  <!-- Footer =============================-->

  <?php include('footerm.php');?>

