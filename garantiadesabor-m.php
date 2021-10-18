<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /garantiadesabor');

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

.slick-prev::before, .slick-next::before {
    opacity: .75;
    color: #fff!important;
}

.platillo p {
    margin-top: 0;
    font-family: inherit;
    color: #fff;
    margin-top: -18%;
    font-size: .65em;
    padding: 0 5%;
}
.legales {
	font-family: "Program",sans-serif;
	color: #111;
	text-align: center;
	font-size: .8em;
	padding: 0em 5%;
	float: left;
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	margin-top: 5%;
	z-index: 9;
	position: relative;
	margin-bottom: 0px;
	display: inline-block;
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
	font-family: "Program";
	position: relative;
	font-size: 14px;
	background: #f5a623;
	padding: 10px 15px;
	border-radius: 30px;
	font-weight: 500;
	color: #fff;
	width: 70%;
	margin: 0 15%;
	margin-bottom: 0%;
	display: inline-block;
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
    margin-top: 30%;
    margin-left: -2%;
    width: 70%;
}
.pla2 {
	position: relative;
	margin-top: -35%;
	z-index: 2;
	right: -35%;
	width: 72%;
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
	padding: 0;
	margin-top: 60%;
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
	margin-bottom: -6px;
}

.pla5 .slick-dots {
	bottom: 5px !important;
	display: block !important;
}

.btns {
	width: 100%;
	position: absolute;
	margin-top: 145%;
	float: left;
}
</style>


<div class="main">

<img src="/img/2019/garantia/m/Landing-mobile-GDS-fondo.png" class="imgmain" width="100%;">
	<div class="gif">
	
	
	<div class="platillo pla5 ">

		<div class="carouseldesayunos">
		
				<div>
					<img src="/img/2019/garantia/m/Garantia1-mobile.png">
				</div>
				
				<div>
					<img src="/img/2019/garantia/m/Garantia2-mobile.png">
				</div>
				
				<div>
					<img src="/img/2019/garantia/m/Garantia3-mobile.png">
				</div>
				
				
			
			</div>



	</div>
	
	<div class="btns">
<a href="ubicaciones" class="btnubica grow">Encontrar mi Vips m&aacute;s cercano</a>
<p class="legales">

<a href="terminosycondiciones">Consulta Términos y Condiciones</a>

	</p>

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



	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});






});


</script>



  <!-- Footer =============================-->

  <?php include('footerm.php');?>

