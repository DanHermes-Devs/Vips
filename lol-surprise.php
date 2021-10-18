<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: lol-surprise-m');
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
	width: 50%;
	text-align: center;
	position: relative;
	float: left;
	margin-top: 0;
	padding-left: 0%;
	/* right: 5%; */
	padding: 5%;
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
.imgmain {
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
	margin: 0;
	float: left;
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


.mute-video {

background: url(/video/mute.png) no-repeat center;

color: #ffffff;

background-size: 20px;

border: 0;

width: 20px;

height: 20px;

text-indent: -999px;

z-index: 10;

position: absolute;

right: 5%;

margin-top: 15px;

}

.unmute-video {

	background:url(/video/sound.png) no-repeat center;

	background-size:20px;

}

#video {
	width: 50%;
	display: inline-block;
	margin: 0;
}

.textos {
	display: inline-block;
	width: 50%;
	float: left;
}

body {
	background-color: background: #f1bfcf;
	background: #eabbcc;
}
</style>


<div class="main">

<img src="img/2019/lol/BannerLanding.png" class="imgmain" style="width:50%; display:inline-block;">

   <div id="video">

           <video id="increibles" preload="preload" muted="muted" controls ="true" loop="loop"  autoplay="false"  poster="/video/posterlol.png" width="100%">

    	   <source src="/video/Spot_LOL.mp4" type="video/mp4"></video>
	</div>

<div class="textos">

<h2 style="
	color: #d44587;
	padding: 5%;
	float: left;
	0: ;
	margin: 0;" googl="true">Descubre todo lo nuevo de las muñecas LOL Surprise que puedes encontrar en Vips</h2>
				<p style="
	padding: 2.5% 5%;">

Con más de 1000 estilos para coleccionar, LOL se ha convertido en el juguete favorito de todas las niñas y ahora, podrás encontrar su más nueva edición en todos los Vips de la República Mexicana. ¡El mejor regalo!</p>

</div>
<div class="btns">
<a href="ubicaciones" class="btnubica grow">Encontrar mi Vips m&aacute;s cercano</a>
<p class="legales">



	</p>

</div>





</div>



</div>



<script src="js/wow.min.js"></script>
</script><script src='slick/slick.min.js'></script>
<script>
$("video").prop('muted', true);



$(".mute-video").click(function () {

    if ($("video").prop('muted')) {

        $("video").prop('muted', false);

        $(this).addClass('unmute-video');



    } else {

        $("video").prop('muted', true);

        $(this).removeClass('unmute-video');

    }

    console.log($("video").prop('muted'))

});


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
