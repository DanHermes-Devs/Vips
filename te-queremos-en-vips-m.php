<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /te-queremos-en-vips');

  exit(0);

}

?>


<link rel="stylesheet" href="css/animate.css">

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


.platillo img{width:100%; padding:5%; transition:.35s all ease;}





.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}
.legales {
	font-family: "Program",sans-serif;
	color: #333;
	text-align: center;
	font-size: 14px;
	padding: 0em 5%;
	float: left;
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	z-index: 3;
	position: relative;
	margin-top: 3.5% !important;
	margin-bottom: 10%;
}
.legales:hover{opacity:1; transition:.35s all ease;}
.btnubica {
	font-size: .9em;
	padding: 10px 20px;
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
	color: #fff;
	border-radius: 20px;
	font-weight:500;
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
	margin-top: 5%;
	width: 50%;
	left: -12%;
	float: left;
}
.pla2 {
	position: absolute;
	margin-top: 10%;
	z-index: 2;
	right: -10%;
	width: 45%;
	margin-bottom: 0;
}
.pla3 {
	position: relative;
	margin-top: -15%;
	width: 50%;
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
	position: absolute;
	margin-top: 185%;
	width: 100%;
	left: 0;
	float: left;
}

.pla5 p{color:#222;}

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


.titleplato {
	font-family: "Museo 700",sans-serif !important;
	font-size: 20px !important;
	margin-top: -7.5% !important;
}
.calsplato {
	font-family: "Museo 500",sans-serif !important;
	font-size: 14px !important;
	
}
.descplato {
	font-size: 15px;
	padding: 0 5%;
}
.slick-dots {
	bottom: -5%;
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
.btns {
	text-align: center;
	margin-top: 10%;
}

.pla5 .slick-dots {
	bottom: -5%;
	display: block !important;
	overflow: hidden;
	max-height: 30px;
	transform: scale(.8);
}
</style>

<div class="main">

<img src="/img/2019/tequeremos/Landing-mobile-TQV-fondo.png" class="imgmain" width="100%;">
	<div class="gif">

	
	<div class="platillo pla5  wow fadeInUp">

		<div class="carouseldesayunos">
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/molletes-vips"><img src="/img/2019/tequeremos/platos/Molletes-naturales-min.png">
					<p class="titleplato">Molletes Vips</p>
					<p class="calsplato">(4 pzas / 1110 Cal)</p>
					<p class="descplato">Los tradicionales, gratinados con queso gouda y servidos con salsa mexicana</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/los-clasicos-con-mermelada-de-fresa"><img src="/img/2019/tequeremos/platos/Bisquets-clasicos-min.png">
					<p class="titleplato">Bísquets con mermelada de fresa</p>
					<p class="calsplato">(2 pzas cortadas a la mitad / 1084 Cal)</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/desayuno/chilaquiles-yucatecos"><img src="/img/2019/tequeremos/platos/Chilaquiles-yucatecos-min.png">
					<p class="titleplato">Chilaquiles Yucatecos</p>
					<p class="calsplato">(940 Cal fritos / 890 Cal horneado)</p>
					<p class="descplato">Bañados en salsa pibil y servidos sobre frijoles refritos; cubiertos de cochinita pibil, cebolla morada con chile habanero, queso y aguacate</p>
					</a>
				</div>
				
				
				<div>
					<a href="https://vips.com.mx/menu/postre/pay-helado-de-limon"><img src="/img/2019/tequeremos/platos/Pay-limon-min.png">
					<p class="titleplato">Pay helado de limón</p>
					<p class="calsplato">(416 Cal)</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/papa-a-los-tres-quesos"><img src="/img/2019/tequeremos/platos/Papa-tresquesos-min.png">
					<p class="titleplato">Papa a los tres quesos</p>
					<p class="calsplato">(701 Cal)</p>
					<p class="descplato">Papa horneada con queso crema, parmesano y gouda; servida sobre salsa cremosa de chipotle</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/tacos-botaneros"><img src="/img/2019/tequeremos/platos/Tacos-botaneros-min.png">
					<p class="titleplato">Tacos botaneros</p>
					<p class="calsplato">(12 pzas / 775 Cal)</p>
					<p class="descplato">Taquitos dorados de pollo y queso, servidos con guacamole y salsa martajada</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/postre/crepas-de-cajeta"><img src="/img/2019/tequeremos/platos/Crepas-cajeta-min.png">
					<p class="titleplato">Crepas de cajeta</p>
					<p class="calsplato">(3 pzas / 1230 Cal)</p>
					<p class="descplato">Rellenas de queso crema, bañadas de cajeta y trozos de nuez; servidas con plátano y una bola de helado de vainilla</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/tacos-dorados-de-pollo"><img src="/img/2019/tequeremos/platos/Tacos-pollo-min.png">
					<p class="titleplato">Tacos dorados de pollo</p>
					<p class="calsplato">( 4 pzas / 873 Cal)</p>
					<p class="descplato">Bañados en salsa verde y roja, crema y queso; acompañados de guacamole y frijoles refritos</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/tostadas-de-pollo"><img src="/img/2019/tequeremos/platos/Tostadas-pollo-min.png">
					<p class="titleplato">Tostadas de pollo</p>
					<p class="calsplato">(3 pzas / 680 Cal)</p>
					<p class="descplato">Servidas con lechuga, aguacate, jitomate, crema y queso</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/desayuno/chilaquiles"><img src="/img/2019/tequeremos/platos/Chilaquiles-Vips-min.png">
					<p class="titleplato">Chilaquiles Vips</p>
					<p class="calsplato">(580 Cal fritos / 530 Cal horneados)</p>
					<p class="descplato">Bañados en salsa verde o roja, con queso gouda gratinado, crema y cebolla</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/desayuno/de-mole"><img src="/img/2019/tequeremos/platos/Enchiladas-mole-min.png">
					<p class="titleplato">Enchiladas de mole</p>
					<p class="calsplato">(3 pzas / 733 Cal)</p>
					<p class="descplato">Bañadas en nuestro tradicional mole. rellenas de pollo, servidas con crema y queso, cebolla morada y frijoles refritos</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/desayuno/suizas"><img src="/img/2019/tequeremos/platos/Enchiladas-Suizas-min.png">
					<p class="titleplato">Enchiladas suizas</p>
					<p class="calsplato">(3 pzas / 94 Cal)</p>
					<p class="descplato">Con nuestra tradicional salsa suiza, rellenas de pollo, gratinadas con queso gouda, cebolla y acompañadas de frijoles refritos</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/caldo-tlalpeno"><img src="/img/2019/tequeremos/platos/Caldo-tlalpeno-min.png">
					<p class="titleplato">Caldo Tlalpeño</p>
					<p class="calsplato">(500 mL/ 358 Cal)</p>
					<p class="descplato">El favorito con arroz a la mexicana, pollo deshebrado, aguacate, queso Oaxaca y chile chipotle</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/de-tortilla"><img src="/img/2019/tequeremos/platos/Sopa-tortilla-min.png">
					<p class="titleplato">Sopa de tortilla</p>
					<p class="calsplato">(500 mL / 639 Cal)</p>
					<p class="descplato">Con queso Oaxaca, aguacate y chile pasilla; acompañada de chicharrón, crema y queso</p>
					</a>
				</div>
				
				<div>
					<a href="https://vips.com.mx/menu/comidas-cenas/especial-vips"><img src="/img/2019/tequeremos/platos/Sopa-Vips-min.png">
					<p class="titleplato">Sopa Especial Vips</p>
					<p class="calsplato">(500 mL / 256 Cal)</p>
					<p class="descplato">Receta de la casa, con pollo deshebrado, tallarines y caldo de pollo</p>
					</a>
				</div>

			
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
<script src='/slick/slick.min.js'></script>
<script src="js/wow.min.js"></script>
<script>

 new WOW().init();
 
 $( document ).on( "ready" , function() {



	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 3000,

	});






});
</script>







  <!-- Footer =============================-->

  <?php include('footerm.php');?>

