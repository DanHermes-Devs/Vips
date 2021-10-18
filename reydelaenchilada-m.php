<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

	header('Location: /reydelaenchilada');

	exit(0);

}

if($avatarimg=="/img/svg/cuenta.svg"){$avatarimg="/img/svg/avatar.svg";}
if(	$sesion == true){$showlink ="hidden";}
else{$showlink ="";}

?>
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>



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
	font-family: "Museo 900",sans-serif;
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


.platillo img{width:100%; padding:5%; transition:.35s all ease;}

.platillo img:hover{width:100%;  padding:0%; transition:.35s all ease;}



.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}


.platillo p {
	color: #191919;
	margin-top: -10%;
	font-family: "AmsiProNarw",sans-serif;
	font-size: .5em;
	text-align: center;
	width: 100%;
	padding-left: 0;
	padding: 0 15% 0 5%;
}
.pla4p{
	padding-left: 10%!important;
	margin-top: -20%!important;
}

.pla5p {
	padding-left: 25%;
	margin-top: -15%;
}
.legales {
	font-family: "Museo 900",sans-serif;
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
	margin-top: 53%;
	width: 30%;
	right: 0;
	z-index: 2;
}
.pla2 {
	position: absolute;
	margin-top: 52%;
	z-index: 2;
	left: 5%;
	width: 33%;
}
.platillo.pla3 {
	position: absolute;
	margin-top: 53%;
	width: 38%;
	left: 33.5%;
	z-index: 2;
}
.platillo.pla4 {
	position: absolute;
	margin-top: 55%;
	left: 63%;
	width: 38%;
}
.platillo.pla5 {
	position: relative;
	/* right: 2%; */
	margin-top: -10%;
	width: 80%;
	margin: 0 10%;
	margin-top: 20.5%;
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
</style>
<style>

.posts{width:50%; float:left;}

.posts img{width:100%;}

.post1{width:100%; float:left;}

.post2 {
	width: 50%;
	float: left;
	position: relative;
	/* clear: both; */
	max-height: 231px;
}

.posts .cap-bot figcaption{width: 100%; font-family:"Museo 900", sans-serif;}

.comments {
	float: left;
	width: 100%;
	padding: 0 10%;
	margin: 0;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	border: 2.35px dashed #ccc;
	border: navajowhite;
}
.shareicons li {
	display: inline-block;
	margin-right: 2em;
	background-size: 100%;
}
.iconsocial{width:1.5em; height:1.5em;}
.icon-fb{background-image: url(img/menu/social/facebook.png);}
.icon-tw{background-image: url(img/menu/social/twitter.png);}
.icon-ig{background-image: url(img/menu/social/instagram.png);}
.icon-wa{background-image: url(img/menu/social/whatsapp.png);}

.productdesc p {
	font-size: 1em;
	line-height: 1.5;

}
.avatarblog {
	width: 24%;
	float: left;
	margin-top: 0;
	margin-left: 3%;
	text-align: right;
	position: relative;
	padding-right: 1%;
	margin-left: 37.5%;
}
.avatarblog img {
	width: 4em;
	padding: 0;
	border-radius: he;
	height: 4em;
	object-fit: cover;
	border-radius: 50%;
	border: 2px solid #f29100;
}
.shareicons {
	width: 100%;
	float: left;
	text-align: right;
	padding-top: .5em;
}

.btnsendcomment {
	width: 100%;
	background: #f29100;
	color: #fff;
	font-weight: bold;
	padding: 1em;
	text-align: center;
	margin: 1em auto;
	right: 0;
	left: 0;
	position: relative;
	float: right;
	margin-right: 0;
	text-transform: uppercase;
	min-width: 200px;
	font-family: "Museo 900",sans-serif;
	cursor: pointer;
	margin-top: 0;
}
.iconsocial {
	width: 2em;
	height: 2em;
}

.comments form {
	margin-top: 0;
	width: 100%;
	float: left;
	border-top: 0;
	padding-top: 2em;
}
.loginlink {
	color: #aaa;
	padding: 0 0% 2em 5%;
	width: 100%;
	float: left;
	text-align: right;
	text-decoration: underline;
}



	.mute-video {
    background:url(/video/mute.png) no-repeat center;
		color: #ffffff;
    background-size:20px;
    border:0;
    width:20px;
    height:20px;
    text-indent:-999px;
	    z-index: 10;
    position: absolute;
    right: 110px;
    margin-top: 15px;
}
.unmute-video {
    background:url(/video/sound.png) no-repeat center;
    background-size:20px;
}

textarea {
	border: 2px solid #ddd;
	width: 70%;
	height: auto;
	/* padding: 1em; */
	color: #777;
	padding: 1em;
	float: left;
	position: relative;
	font-family: inherit;
}

#respuesta, #respuesta2 {
	width: 100%;
	float: right;
	padding: 1% 2.5%;
}

.success {
	width: 30%;
	background: #DCEDC8;
	padding: 1em;
	color: #558B2F;
	border-radius: 5px;
	float: right;
	min-width: 200px;
}

.errormsg {
	width: 30%;
	background: #ffcdd2;
	padding: 1em;
	color: #b71c1c;
	border-radius: 5px;
	float: right;
	min-width: 200px;
}



.cercacont {
	float: left;
	width: 100%;
	padding: 0;
	margin-top: -.25em;
	background: #fff;
}

.boton {
	border: none;
	padding: 20px;
	outline: none;
	border-color: #a9a6a1;
	width: 40%;
	font-size: 1em;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	font-family: "Museo 900",sans-serif;
	display: inline-block;
	text-align: center;
	margin: 2% 30%;
	text-transform:uppercase;
	float: left;
}
.cercacont h2 {

	color: #f29100;

	font-size: 2em;

	margin-top: 0;

}




.bgtextura {
	background: url(img/reyenchilada/fondoprincipal.png);
	background-size: cover;
	position: relative;
	width: 100%;
	display: inline-block;
	padding: 10% 2.5%;
	text-align: center;
	margin-top: -5px;
}

.bgtextura h3 {
	color: #eac47d;
	font-size: 1.5em;
	padding: 10% 0;
	margin-bottom: 0;
	padding-bottom: 0;
}
.bgtextura h4 {
	color: #daccb2;
	font-size: 1em;
	margin-bottom: 0;
	padding-bottom: 2%;
}

.pasos {
	width: 100%;
	position: relative;
}

.paso {
	width: 50%;
	display: inline-block;
	float: left;
}
.paso p {
	color: #daccb2;
	font-size: .8em;
	width: 70%;
	display: inline-block;
	padding: 5% 0;
	padding: 0;
	text-align: left;
	margin: 0;
}
.numer {
	width: 24%;
	display: inline-block;
	float: left;
	padding: 0;
	ertical-align: center;
	padding-right: 5%;
	padding-left: 5%;
}

.numer.n1 {
	width: 20%;
}
.precio {
	padding: 0 !important;
	margin: 0 !important;

	font-size: 130% !important;
	font-weight: bold;
}

.paso3 {
	margin-left: 25%;
	margin-top: 5%;
}

.bgrey {
	background: url(img/reyenchilada/fondo_rey.png);
	background-size: cover;
	position: relative;
	float: left;
	padding: 2%;
	text-align: center;
	margin-top: -5px;
}
.marco {

	padding: 5%;
	float: left;
}
.bgrey h3 {
	color: #daccb2;
	font-size: 1.5em;
}

.bgrey h4{
	color: #daccb2;
}

.reytext {
	width: 100%;
	float: left;
	padding: 0 2.5%;
}
.reyimg {
	width: 100%;
	float: left;
	padding: 0 5%;
}
.rey {
	width: 70%;
}
.corona2, .escudo1 {
	width: 100%;
	padding: 0 20%;
}

.participantes .pleca1 {
	position: absolute;
	left: 5%;
	width: 30.5%;
}


.participantes .pleca2 {
	position: absolute;
	right: 5%;
	width: 30.5%;
}

.pleca1 {
	position: absolute;
	left: 0%;
	width: 30.5%;
}
.pleca2 {
	position: absolute;
	right: 0;
	width: 30.5%;
	bottom: 0;
}
.corona {
	width: 45%;
}

.textopleca {
	width: 90%;
	margin: 0 5%;
	position: relative;
	padding: 5%;
}

.circles {
	width: 100%;
	padding: 2%;
	position: relative;
}

.participante {
	width: 25%;
	/* padding: 5%; */
	float: left;
}
.participante img{max-width:100%;}

.circlered {
	background: #b53d3d;
	border-radius: 50%;
	font-size: 350%;
	color: #eac47d;
	position: relative;
	line-height: 1.5;
	width: 80%;
	background-size: cover!important;
background-position: center!important;
}
.escudo {
	position: absolute;
	right: 5%;
	right: -30%;
	width: 100%;
	bottom: 0;
}
.participante p {
	text-align: center;
	color: #daccb2;
	font-size: .7em;
	padding: 0 20%;
}

.amrgin3 {
	margin-left: 12.5%;
}

.brownpleca {
	position: relative;
	width: 100%;
	padding: 2%;
	text-align: center;
	background: #692e2e;
	color: #daccb2;
	font-size: 65%;
	margin-top: -5px;
}

.historiabg h3 {
	color: #4c2812;
	font-size: 1.5em;
}

.historiabg p {
	color: #692e2e;
	font-size: 100%;
}

.historiabg {
	position: relative;
	width: 100%;
	background: url(img/reyenchilada/fondo_historiasenchiladas.png);
	background-size: cover;
	float: left;
}

.circlered {
	background: #b53d3d;
	border-radius: 50%;
	font-size: 350%;
	color: #eac47d;
	position: relative;
	line-height: 2;
	width: 80%;
}
.enchilada img {

	width: 100%;
	-webkit-animation-duration: 5s;
            animation-duration: 5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
			visibility: hidden;

}

.roll{

				 -webkit-animation-name: rollIn;
            animation-name: rollIn;
			visibility:visible!important;
}


 @-webkit-keyframes rollIn {
            0% {
               opacity: 1;
               -webkit-transform: translateX(-90%) rotate(-120deg);
            }
            100% {
               opacity: 1;
               -webkit-transform: translateX(0px) rotate(0deg);
            }
         }

         @keyframes rollIn {
            0% {
               opacity: 1;
               transform: translateX(-100%) rotate(-120deg);
            }
            100% {
               opacity: 1;
               transform: translateX(0px) rotate(0deg);
            }
         }
         .rollIn {
            -webkit-animation-name: rollIn;
            animation-name: rollIn;
         }


.textenchilada {
	float: left;
	width: 100%;
	padding: 5%;
	/* padding-left: 0; */
	/* margin-left: 0; */
	text-align: center;
}

#openpop {
	background: #80371d;
	color: #fff;
	padding: 1em 10%;
	margin-top: 1em;
	cursor:pointer;
}

.instagrambg {
	background: #daccb2;
	float: left;
	width: 100%;
	text-align: center;
	position: relative;
	/* color: #b53d3d; */
	font-size: ;
	padding: 2.5% 10%;
}

.instagrambg h3 {
	color: #b53d3d;
	font-size: 1em;
}
.brownbtn {
	background: #80371d;
	color: #fff;
	padding: 1em 5%;
	display: inline-block;
	margin-top: 1em;
}
#instafeed {
	width: 100%;
	padding: 0 5%;
	float: left;
}

#instafeed  img{width:100%;}



#popupstatus {
	position: fixed;
	width: 100%;
	height: 100vh;
	background: rgba(0,0,0,.7);
	top: 0;
	bottom: 0;
	z-index: 5;
	text-align: center;
	display: table;
}
.closepopup {
	position: absolute;
	background-image: url(/img/cancelblack.png);
	width: 30px;
	height: 30px;
	top: 2.5%;
	right: 2.5%;
	background-repeat: no-repeat;
	background-size: 100%;
	cursor: pointer;
	z-index: 99999;
}

.contstatus {
	position: relative;
	margin: auto;
	display: inline-block;
	background: #fff;
	width: 50%;
	vertical-align: middle;
	height: auto;
	padding: 2.5% 2.5%;
	margin-top: 11vh;
	background-image: url(img/reyenchilada/fondoprincipal.png);
	background: url(img/reyenchilada/fondo_historiasenchiladas.png);
	background-color: #fff;
	min-width: 90%;
}

.mensajearea {
	width: 100%;
	float: left;
}
.hashtag {
	color: #692e2e;
}

textarea {
	border: 2px solid #ddd;
	width: 100%;
	height: auto;
	color: #333;
	padding: 1em;
	float: left;
	position: relative;
	font-family: inherit;
	background: rgba(255,255,255,.6);
}


.slick-dots {
	bottom: -15px;
}
.slick-dots li button::before {
	font-family: 'slick';
	font-size: 16px;
	line-height: 20px;
	position: absolute;
	top: 0;
	left: 0;
	width: 20px;
	height: 20px;
	content: '•';
	text-align: center;
	opacity: .65;
	color: white;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.carouselcircles {
	width: 80%;
	margin: 0 10%;
	margin-bottom: 10%;
}
.participantes .corona{
	margin-top: 15%;
	width: 50%;
}

.circlered {
	width: 80%;
	margin: 0 10%;
}

main{margin-top:5vh;}

.slick-prev::before, .slick-next::before {
	opacity: .75;
	color: #fff !important;
}

.bgtextura h5 {
	color: #daccb2;
	font-size: .85em;
	margin: 2% 0;
}

.bgtextura h5 span {
	color: #eac47d;
	font-size: 1.2em;
}

h4.promowow {
	color: #eac47d;
	padding-top: 0;
	display: ;
	display: inline-block;
	padding: 5%;
}

.tycnfl {
	color: #f29100;
	width: 100%;
	text-align: center;
	float: left;
	padding: 2% 5%;
}

.menbg{background-image:url(/img/reyenchilada/men.png); background-size: 100%;}
.womanbg{background-image:url(/img/reyenchilada/woman.png); background-size: 100%;}

#Reinados {
	width: 100%;
	height: 1px;
	position: relative;
	float: left;
	padding-top: 7%;
}

@media(min-width:650px){
	
	.platillo.pla5 {
	margin-top: 5%;
}
	
	
}
</style>





<div class="main">



	<?php include('lateral.php');?>



	<main role="main">



<img src="img/reyenchilada/EnchiladasFondo.gif" class="imgmain" width="100%;" style="display:none;">
	<div class="gif" style="display:none;">

		<div class="platillo pla5  wow fadeInUp">


		<div class="carouselcomida">

				<div>
					<a href="https://vips.com.mx/platillo?id=151">
					<img src="img/reyenchilada/DeMole2.png">
					<p>De mole</p></a>
				</div>

				<div>
					<a href="https://vips.com.mx/platillo?id=150">
					<img src="img/reyenchilada/Suizas.png">
					<p>Suizas</p></a>
				</div>

				<div>
					<a href="https://vips.com.mx/platillo?id=50">
					<img src="img/reyenchilada/RancherasGratinadas.png">
					<p>Rancheras gratinadas</p></a>
				</div>


				<div>
					<a href="https://vips.com.mx/platillo?id=199">
					<img src="img/reyenchilada/PipianVerde.png">
					<p>Pipián verde</p></a>
				</div>

				<div>
					<a href="https://vips.com.mx/platillo?id=198">
					<img src="img/reyenchilada/Cipotle.png">
					<p>Chipotle</p></a>
				</div>


				<div>
					<a href="https://vips.com.mx/platillo?id=196">
					<img src="img/reyenchilada/TresChiles.png">
					<p>Tres chiles</p></a>
				</div>

				<div>
					<a href="https://vips.com.mx/platillo?id=197">
					<img src="img/reyenchilada/ChicharronEnSalsaDeFrijol.png">
					<p>Chicharrón en salsa de frijol</p></a>
				</div>


				<div>
					<a href="https://vips.com.mx/platillo?id=152">
					<img src="img/reyenchilada/Enfrijoladas.png">
					<p>Enfrijoladas</p></a>
				</div>







			</div>



	</div>





	</div>

	<div id="contentpop" style="display:none;">



 </div>





		<div class="bgtextura" style="display:none;">

		<img src="img/reyenchilada/_FR_Enchiladas_logo.png" class="corona wow  fadeInUp">

		<div class="textopleca wow  fadeInUp">
		<img src="img/reyenchilada/pleca1.svg" class="pleca1">
		<img src="img/reyenchilada/pleca2.svg" class="pleca2">

		<h3 class="wow  fadeInUp">Conviértete en un miembro de la realeza</h3>

			<h4 class="wow  fadeInUp">El reino del sabor necesita líderes, ¿tienes lo que se necesita para conquistarlo?</h4>
			<h5 class="wow  fadeInUp">Hemos decidido emprender una batalla para descubrir quién es el verdadero elegido por los Dioses de la enchilada.<br><br> <span tyle="color: #eac47d">La lucha empieza este 19 de enero.</span><br> <br> <br> <br>

		</div>

		<div class="pasos ">

			<h3 class="wow  fadeInUp">Es súper sencillo:</h3><br> <br>

			<div class="paso paso1 wow  fadeInUp">

				<img src="img/reyenchilada/1.svg" class="numer n1">
				<p><br>Visita tu Vips favorito</p>


			</div>

			<div class="paso paso2 wow  fadeInUp">

				<img src="img/reyenchilada/2.svg" class="numer n2">
				<p style="margin-bottom: 0; padding-bottom: 0;">Prueba las 8 increíbles enchiladas que tenemos a </p><p class="precio">$69</p>


			</div>


			<div class="paso paso3 wow  fadeInUp">

				<img src="img/reyenchilada/3.svg" class="numer n3">
				<p>Pasa tu Tarjeta de Lealtad digital Vips</p>


			</div>



		</div>
		<h4 class="promowow">La promo Enchiladas no aplica con el descuento, pero sí para obtener puntos Wow</h4>




		</div>



		<div class="bgrey">

		<div class="marco">

		<div class="reytext wow  fadeInUp">

			<img src="img/reyenchilada/plecarey.png" class="corona2">

			<img src="img/reyenchilada/EscudoREINA.png" class="escudo1">

		
			<h3 class="wow  fadeInUp">Su Alteza Real la Reina de la Enchilada</h3>
			<h4 class="wow  fadeInUp">Blanca Lilia Rocha Escobedo es la invitada que más disfrutó de nuestras deliciosas enchiladas y ahora, es la reina de todas ellas.</h4>

		</div>

		<div class="reyimg wow  fadeInUp">

				<img src="img/reyenchilada/ReinadelaEnchilada.png" class="rey">
		</div>

		</div>


		</div>

		<div class="bgtextura participantes" id="FamiliaReal">
		<img src="img/reyenchilada/pleca1.png" class="pleca1">
		<img src="img/reyenchilada/_FR_Enchiladas_logo.png" class="corona wow  fadeInUp">

		<h4 class="wow  fadeInUp" style="font-size: .85em; padding: 5%;">Esta es la última Familia Real de la Enchilada, el grupo de nuestros invitados que más disfrutó de las enchiladas de Vips
</h4>






		<div class="circles">

		<div class="carouselcircles">

			<div class="participante wow  fadeInUp">

				<div class="circlered menbg" style="background-image:url(img/reyenchilada/men/treschiles.png);"><img src="img/reyenchilada/Escudos_3chiles.png" class="escudo"></div>
				<p>Martín Carrizal Romero</p>
				<p>Conde de la Tres Chiles</p>


			</div>

			<div class="participante wow  fadeInUp">

				<div class="circlered menbg" style="background-image:url(img/reyenchilada/men/Suizas.png);" ><img src="img/reyenchilada/Escudos_suizas.png" class="escudo"></div>
				<p>Victor M García</p>
				<p>Duque de las Suizas</p>


			</div>

			<div class="participante wow  fadeInUp">

				<div class="circlered menbg" style="background-image:url(img/reyenchilada/women/Rancheras.png);"><img src="img/reyenchilada/Escudos_rancheras.png" class="escudo"></div>
				<p>Analely Castillo</p>
				<p>Barón de las Rancheras</p>


			</div>


			<div class="participante wow  fadeInUp">

				<div class="circlered womanbg" style="background-image:url(img/reyenchilada/men/Pipian.png);"><img src="img/reyenchilada/Escudos_pipian.png" class="escudo"></div>
				<p>Nathanael Smith</p>
				<p>Archiduque de las de Pipián</p>


			</div>



			<div class="participante wow  fadeInUp">

				<div class="circlered womanbg" style="background-image:url(img/reyenchilada/men/Mole.png);"><img src="img/reyenchilada/Escudos_mole.png" class="escudo"></div>
				<p>Mario de Jesús Contreras Mendoza</p>
				<p>Príncipe de las de Mole</p>


			</div>


			<div class="participante wow  fadeInUp">

				<div class="circlered menbg" style="background-image:url(img/reyenchilada/men/Chipotle.png);"><img src="img/reyenchilada/Escudos_chipotle.png" class="escudo"></div>
				<p>Carlos Adrián Barragán Orozco</p>
				<p>Marqués de las de Chipotle</p>


			</div>

			<div class="participante wow  fadeInUp">

				<div class="circlered womanbg" style="background-image:url(img/reyenchilada/women/Chicharron.png);"><img src="img/reyenchilada/Escudos_chicharron.png" class="escudo"></div>
				<p>Patricia Mendoza Ramírez </p>
				<p>Caballero de las de Chicharrón</p>


			</div>

			<div class="participante wow  fadeInUp">

				<div class="circlered menbg" style="background-image:url(img/reyenchilada/men/Enfrijoladas.png);"><img src="img/reyenchilada/Escudos_enfrijoladas.png" class="escudo"></div>
				<p>Ramón Coll Laliga</p>
				<p>Virrey de las Enfrijoladas</p>


			</div>

	</div>














		</div>

		<img src="img/reyenchilada/pleca2.png" class="pleca2" style="bottom: 10%;">
		
	<div id="Reinados"></div>
			<h3 class="wow  fadeInUp" style="width: 100%; float: left; margin-top: 5%; margin-bottom: 0;">Conoce los reinados por ciudad</h3>

	</div>
	
			  <iframe src="mapa2" style="height:80vh; min-height:400px;" width="100%" frameborder="0" scrolling="no"></iframe>
	
	

		<div class="brownpleca wow  fadeInUp" style="display:none;">
			<h2>La batalla comienza de nuevo cada dos semanas, tendrás la oportunidad de proteger tu título… o serás desterrado.</h2>
		</div>




		<div class="historiabg" id="Vipstoria">

		<div class="img enchilada" style="display:none;"><img id="enchilada2" src="img/reyenchilada/_Enchiladas-de-Mole.png"></div>
			<div class="textenchilada" style="display:none;"><h3>Cuéntanos una historia con nuestras enchiladas y ¡recibe un regalo!</h3>
			<p>En Vips hemos acompañado a la familia mexicana por más de 50 años, y queremos conocer tu experiencia con nosotros y nuestras tradicionales enchiladas. Mándanos la tuya y si es seleccionada podrás verla en nuestro sitio, en redes sociales y recibirás un monedero electrónico de $150 para disfrutar en Vips

			</p>

							<?php if($sesion==true){ ?>

<a class="brownbtn wow  fadeInUp" id="openpop" style="display:none;">Tengo una historia</a>


<?php }    else{ ?>


	<a  href="/cuenta-m?page=reydelaenchilada" class="brownbtn wow  fadeInUp">Inicia sesión para dejar tu historia.</a>
<?php }?>
			</div>
			
			
			<h3 style="float: left; width: 100%; text-align: center; color:#c35224;">Conoce algunas de las historias con nuestras enchiladas que la gente nos ha compartido

</h3>
<style>
.bubble {
	position: relative;
	background: #fff;
	color: ##4c2812;
	/* font-family: Arial; */
	/* font-size: 20px; */
	line-height: 120px;
	box-shadow: -3px -1px 9px -4px #373737;
	text-align: center;
	width: 80%;
	height: auto;
	border-radius: 10px;
	padding: 5%;
	line-height: 1;
	margin: 0 10%;
}
.bubble::after {
	content: '';
	position: absolute;
	display: block;
	width: 0;
	z-index: 1;
	border-style: solid;
	border-color: transparent #fff;
	border-width: 20px 20px 20px 0;
	top: 50%;
	left: -20.2px;
	margin-top: -20px;
	filter: drop-shadow(-4px 1px 2px #b1b1b1);
	/* z-index: -1; */
}
.bubblecont {
	float: left;
	width: 100%;
	text-align: center;
	padding: 2%;
}
#carouselquotes {
	width: 100%;
	float: left;
}
#carouselquotes .slick-dots{display:block!important}

.slick-dots li button::before {
	color: #898989!important;

}
</style>
<div id="carouselquotes">
<div>
<a href="entrada?id=21"><div class="bubblecont">
	<div class="bubble bubble1">“…me encantan las gratinadas y por supuesto las Suizas, que no tienen comparación. Vips las adoptó y le quitó a competencia a cualquier otro lugar…”</div>
</div>
</a>

<a href="entrada?id=21"><div class="bubblecont">
<div class="bubble bubble2">“…he tratado de pedirlo así de nuevo y no lo he vuelto a conseguir, siempre recordaré a ese Capitán de meseros y espero encontrarlo algún día…”</div>
</div>
</a>

<a href="entrada?id=21"><div class="bubblecont" style="margin-bottom: 5%;">
<div class="bubble bubble3">“Mi esposa tenía una sonrisa enorme y no paraba de decir que sabían deliciosas. Lo mejor es que sólo gaste un poco más de 200 pesos…”</div>
</div>
</a>
</div>


<div>
<a href="entrada?id=22"><div class="bubblecont">
	<div class="bubble bubble1">“…me hacen psss, psss, psss y volteo nuevamente pero veo hacia arriba y no era nadie, eran mis Enchiladas suizas…”</div>
</div>
</a>

<a href="entrada?id=22"><div class="bubblecont">
<div class="bubble bubble2">“…entonces se me ocurrió pedir Enchiladas de Vips, pero para que pensaran que yo cociné, pedí todas iguales...”</div>
</div>
</a>

<a href="entrada?id=22"><div class="bubblecont" style="margin-bottom: 5%;">
<div class="bubble bubble3">“…tendría unos 8 o 9 años y nunca antes había estado en un Vips, todo me parecía increíble, que hubiera manteles con fotos y que yo pudiera iluminar en los dibujos…”</div>
</div>
</a>
</div>

<div>
<a><div class="bubblecont">
	<div class="bubble bubble1">“...de ahí no nos hemos vuelto a separar, el 20 de febrero de 2019 cumplimos 5 años juntos y seguimos celebrando con ricas enchiladas suizas en Vips…”</div>
</div>
</a>

<a><div class="bubblecont">
<div class="bubble bubble2">“…fuimos a la casa de mi abuela y nos castigó por faltar a la escuela, pero esas enchiladas fueron inolvidables…”</div>
</div>
</a>

<a><div class="bubblecont" style="margin-bottom: 5%;">
<div class="bubble bubble3">“... Nos encantaron a ambos, ¡tanto que su sabor nos ayudó en la reconciliación! Estamos súper contentos, gracias por ponerle sabor y sazón a nuestra relación…”</div>
</div>
</a>
</div>

<div>
<a><div class="bubblecont">
	<div class="bubble bubble1">“... Ahora, cada que vamos a Vips siempre pide sus enchiladas, claro, sólo en Vips; en ningún otro lugar las come con tanto gusto como ahí…”</div>
</div>
</a>

<a><div class="bubblecont">
<div class="bubble bubble2">“…“¿Como se llama este guiso?” preguntó, “no lo sé señor, pongámosle un nombre”. “¡Enchiladas se llamarán! ¡redoblen los tambores! que resuenen las fanfarrias que ¡un nuevo platillo ha nacido!”…”</div>
</div>
</a>


</div>

</div>

<div class="img enchilada" ><img id="enchilada" src="img/reyenchilada/_Enchiladas-de-Mole.png"></div>
		</div>


		<div class="instagrambg" style="display:none;">

		<h3 class="wow  fadeInUp">Usa el hashtag <span class="hashtag">#ReyDeLaEnchilada</span> en Instagram y compártenos tus fotos dignas de la Familia Real de la Enchilada</h3>

		<div class="postinsta" id="instafeed">

		</div>
			<a href="/ubicaciones" class="brownbtn wow  fadeInUp" >Nos vemos en Vips</a>







		</div>

    <a href="tyc-enchiladas69" class="tycnfl" googl="true" style="display:none;">Términos y condiciones</a>

	<div id="popupstatus" style="display:none;">


<div class="contstatus">
<div class="closepopup"></div>

	<?php if($sesion==true){ ?>



<div class="comments redescont">
	<form  id="formcomment" onsubmit="return false"  enctype="multipart/form-data" method="post">

		<h2 style="color:#4c2812; padding: 2% 0; padding-bottom: 0; margin-bottom: 0em; font-size: 120%;">Cuéntanos una historia con nuestras enchiladas</h2>
		<p style=" font-size: .75em; margin-top: .5em; color:#692e2e">En Vips hemos acompañado a la familia mexicana por más de 50 años, y queremos conocer tu experiencia con nosotros y nuestras tradicionales enchiladas. Mándanos la tuya y si es seleccionada podrás verla en nuestro sitio, en redes sociales y recibirás un monedero electrónico de $150 para disfrutar en Vips.</p>


	<div class="avatarblog"><img src="<?php echo $avatarimg;?>"></div>
	<input type="hidden" id="tipo" name="tipo" value ="enchiladas">
	<input type="hidden" id="user" name="user" value ="<?php echo $uid;?>">
	<div class="mensajearea">
	<textarea rows="3" id="comment" name="comment" required></textarea>

	<div id="respuesta"></div>
	<a class="btnsendcomment envia-vipstoria" id="btnsendcomment">Enviar</a>
	</form>
</div>



	  </div>


<?php }    else{ ?>

	<a href="/cuenta?page=reydelaenchilada" class="boton">Inicia sesión para dejar tu historia</a>
<?php }?>
</div>

</div>


</div>


			</div>



			<script src="js/instafeed.min.js"></script>

<script src="js/wow.min.js"></script>
</script><script src='slick/slick.min.js'></script>
<script>
  if(window.location.hash) {
	  
	  setTimeout(function(){
$("#enchilada").addClass("roll");
}, 1000);


  //alert("Hash")
}


$( window ).on( "load", function() {
  new WOW().init();

  var h1 = $(".circlered").width();
  $(".circlered").height(h1 + "px");
  


});


window.addEventListener('resize', function(event){
  // do stuff here
   var h1 = $(".circlered").width();
  $(".circlered").height(h1 + "px");
});

</script>


<script>



    $('#btnsendcomment').click(function(event){

			var comment  = $("#comment").val();
			var tipo  = $("#tipo").val();
			var user= $("#user").val();


		if (comment == "" || user == "" || tipo == "")
	{
		$("#respuesta").html("<div class='errormsg'>Escribe tu mensaje.</div>");

	}

	else{
        event.preventDefault();
        $.ajax({
            url : "comentar",
            type: "POST",
            data : new FormData($('#formcomment')[0]),
            processData: false,
            contentType: false,
            success:function(data){

				$('#respuesta').html(data);

				 setTimeout(function() {
                $('.success').slideUp("slow");
				$('.errormsg').slideUp("slow");
            }, 5000);



            }
        });

		}
    });


	$("#popupstatus").click(function () {
   	$("#popupstatus").fadeOut(500);
});

	$(".closepopup").click(function () {
   	$("#popupstatus").fadeOut(500);
});
$(".contstatus").click(function (event) {
    event.stopPropagation();
});

$("#openpop").click(function (event) {

	$("#popupstatus").fadeIn(500);
});

$( ".brownpleca" ).mouseenter(function() {

  $( "#enchilada" ).addClass( "roll" );
});


$( ".historiabg" ).mouseenter(function() {

  $( "#enchilada" ).addClass( "roll" );
});


$(window).scroll(function(){
    // This is then function used to detect if the element is scrolled into view
    function elementScrolled(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
    }

    // This is where we use the function to detect if ".box2" is scrolled into view, and when it is add the class ".animated" to the <p> child element
    if(elementScrolled('.brownpleca')) {
        var els = $('#enchilada'),
            i = 0,
            f = function () {
                $(els[i++]).addClass('roll');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }
});

$( document ).on( "ready" , function() {



	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 2,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});



	$('.carouselcomida').slick({

		infinite: true,

		slidesToShow: 2,

		slidesToScroll: 2,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:true,
		autoplay: true,
  autoplaySpeed: 3000,

	});

	$('.carouselcircles').slick({

		infinite: true,

		slidesToShow: 2,

		slidesToScroll: 2,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});
	
		$('#carouselquotes').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:true,
		autoplay: true,
  autoplaySpeed: 10000,

	});








});



    </script>





<!-- Footer =============================-->

<?php include('footerm.php');?>
