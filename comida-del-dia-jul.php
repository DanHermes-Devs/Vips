<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: comida-del-dia-m');
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


.platillo img{width:100%; padding:5%; transition:.35s all ease;}

.platillo img:hover{width:100%;  padding:0%; transition:.35s all ease;}



.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}



.platillo p {
	margin-top: -15%;
	font-family: "AmsiProNarw",sans-serif;
	color: #fff;
	padding: 0 15%;
	font-size: .75em;
}	
.legales {
	font-family: "Program",sans-serif;
	color: #222;
	text-align: center;
	font-size: 1em;
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
	width: 30%;
	text-align: center;
	position: relative;
	float: right;
	margin-top: -150px;
	padding-left: 0%;
	right: 5%;
}
.btnubica {
	font-size: .9em;
	margin: 0;
	display: inline-block;
	text-align: center;
	margin-top: 0;
	margin-bottom: 0;
	position: relative;
	z-index: 5;
	bottom: 0;
	color: #fff;
	font-family: "Program",sans-serif;
	font-size: 1.1em;
	background: #f5a623;
	padding: 10px 15px;
	border-radius: 30px;
	font-weight: 500;
}

.btnubica:hover {
	transition: all .4s ease;
}
.btnubica img {
	width: 70%;
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
	margin-top: 48.5%;
	width: 30%;
	right: 5%;
	float: left;
}

.scrolled .pla5{margin-top:52%;}
.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}

.footer{margin-top:-5px;}

.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }

.slick-prev::before, .slick-next::before {
	font-family: 'slick';
	font-size: 26px;
	line-height: 1;
	opacity: .75;
	color: #222;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.carouseldesayunos img{pointer-events:none;}
</style>


<div class="main">

<img src="/img/2019/comida-dia/julio/LandingComidaDelDiaDesktopJulio-FONDO-min.png" class="imgmain" width="100%;">
	<div class="gif">
	
	
	<div class="platillo pla5  wow fadeInUp">

		<div class="carouseldesayunos">
		
				<div>
					<img src="/img/2019/comida-dia/julio/Platillos79-min.png">
				</div>
				
				<div>
					<img src="/img/2019/comida-dia/julio/Platillos119-min.png">
				</div>
				
				<div>
					<img src="/img/2019/comida-dia/julio/Platillos139-min.png">
				</div>
			
			</div>



	</div>
	
	




	</div>


<div class="btns">
<a href="ubicaciones" class="btnubica grow">Encontrar mi Vips m&aacute;s cercano</a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

</div>





</div>



</div>



<script src="js/wow.min.js"></script>
</script><script src='slick/slick.min.js'></script>
<script>


$( window ).on( "load", function() {

  new WOW().init();
});


$( document ).on( "ready" , function() {



	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 6000,

	});






});

</script>



<!-- Footer =============================-->
<?php include('footer.php');?>
