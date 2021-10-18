<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /lol-surprise');

  exit(0);

}

?>







<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





<style>


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


h2 {
	color: #4f4c4d;
	font-size: 20px;
	margin-top: 140px;
	font-weight: bold;
	font-family: "Program",sans-serif;
	color: #eb1c2d;

text-transform: uppercase;
}
.btnmas {
	background: #f5a623;
	padding: .75em 5% .9em;
	color: #fff;
	display: inline-block;
	min-width: 200px;
	margin: 1em 0;
	border-radius: 40px;
	font-weight: 500;
}
main {
	width: 100%;
	padding-top: 5vh;
	text-align: center;
}


#site-wrapper {

    position: relative;

    width: 100%;

    height: 100%;

    overflow-y: auto;

    padding-bottom: 9vh;

}

.aviso{

width:100%;

float:left;



}
.ayuda {
	float: left;
	width: 100%;
	padding: 5 0 2.5% 0;
	padding-bottom: 0;
	margin-bottom: -2.5%;
}

.ayuda h1{display:inline; font-size: 1.5em; color: #ED7124;font-family:'Program', sans-serif; margin-left: 7%}
.ayuda h2{display:inline; font-size: 1.3em; color: #ED7124;font-family:'Program', sans-serif;}

.ayuda p{  font-size: .9em; color: #333; font-family:'Program', sans-serif;"}







.post2 {

padding: 2.%;

width: 40%;

margin: 0 auto;

position: relative;

}

</style>

<img style="width:100%;     float: left;" src="/img/2019/lol/BannerLanding.png">

<div class="ayuda">

	<h2 style="
	color: #d44587;
	padding: 5%;
	float: left;
	0: ;
	margin: 0;" googl="true">Descubre todo lo nuevo de las muñecas LOL Surprise que puedes encontrar en Vips</h2>
				<p style="
	padding: 2.5% 5%;">Con más de 1000 estilos para coleccionar, LOL se ha convertido en el juguete favorito de todas las niñas y ahora, podrás encontrar su más nueva edición en todos los Vips de la República Mexicana. ¡El mejor regalo!</p>

				
		<div class="post2">

<button class="mute-video" style="color: white"></button>





   <div id="video">

           <video id="increibles" preload="preload" muted="muted" controls ="true" loop="loop"  autoplay="false"  poster="/video/posterlol.png" width="100%">

    	   <source src="/video/Spot_LOL.mp4" type="video/mp4"></video>





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

</script>

        </div>

				<a href="/ubicaciones" class="btnmas">Buscar mi Vips</a>


</div>


<img style="loat: left; width:100%;" src="/img/2019/lol/Banner2Landing.png">













  <!-- Footer =============================-->

  <?php include('footerm.php');?>
