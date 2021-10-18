<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: crece-tu-menu-m');

    exit(0);

}

?>

<link rel="stylesheet" href="css/animate.css">



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
	z-index: 2;
	top:5%;
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


.platillo img{width:100%; padding:1%; transition:.35s all ease;}

.platillo img:hover{width:100%;  padding:0%; transition:.35s all ease;}



.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}


.platillo p {
	margin-top: 0;
	font-family: "Program",sans-serif;
	color: #295b83;
	margin-top: -10%;
	font-family: "AmsiProNarw", sans-serif;
	font-size: 1.1em;
	margin-top:-25%;
}
.legales {
	font-family: "Program",sans-serif;
	color: #333;
	text-align: center;
	font-size: 1.3em;
	padding: 0em 5%;
	float: left;
	margin: 0 auto;
	width: 100%;
	transition: .35s all ease;
	margin-top: -10%;
	z-index: 3;
	position: absolute;
}


.legales:hover{opacity:1; transition:.35s all ease;}
.btnubica {
	font-size: .9em;
	padding: .5em 1em;
	margin: 2em;
	display: inline-block;
	text-align: center;
	margin-top: 0;
	margin-bottom: 0;
	position: relative;
	/* left: 30%; */
	z-index: 5;
	margin-top: 0;
	color: #fff;
}
.btnubica:hover {
	transition: all .4s ease;
}

.white {

	margin-bottom: 0em;

	margin-top: 0;

}



.pla2, .pla4 {

	margin-top: -5%;



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
	width: 110%;
	right: -22.5%;
	z-index: 2;
	margin-top: 47%;
}
.pla2 {
	position: absolute;
	margin-top: 50%;
	z-index: 2;
	left: -2.5%;
	width: 40%;
}
.platillo.pla3 {
	position: absolute;
	margin-top: 50%;
	width: 40%;
	left: 30.5%;
	z-index: 2;
}
.platillo.pla4 {
	position: absolute;
	margin-top: 50%;
	left: 65%;
	width: 40%;
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

body{background:#fff;}


.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }

.btnubica img {
	width: 75%;
}

.descimg {
	width: 65% !important;
	margin-top: -20%;
}
</style>


<div class="main">

	<img src="/img/2019/crece-menu/Landing_desktop-Complementa_tu_platilloFondo-min.png" class="imgmain" width="100%;">
	<div class="gif">
		<div class="platillo pla1 wow  fadeInLeft ">
			<a href="https://vips.com.mx/menu/comidas-cenas/carne-asada">
				<img src="/img/2019/crece-menu/Arrachera-Desktop-min.png">
			</a>
		</div>
	</div>

<p class="legales">
<a href="ubicaciones" class="btnubica grow"><img src="/img/2019/desayunos79/Boton.png"></a><br><br>
<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>
</p>
</div>

</div>

<script src="js/wow.min.js"></script>
<script>


$( window ).on( "load", function() {
setTimeout(function(){
	  new WOW().init();
}, 1200)
});

</script>








<!-- Footer =============================-->

<?php include('footer.php');?>
