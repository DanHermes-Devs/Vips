	<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: somos-vips-m');

    exit(0);

}

?>

<div class="main">



<style>

.quienesfooter {
	color: #fff !important;
	font-weight: bold;
	font-size: 14px;
}

.resptext {

    width: 100%;

    float: left;

    padding: 0;

    font-family: "Program", sans-serif;



}



.divdots1{



  background-image: url(img/dotsbg.png);

background-size: 70%;

background-repeat: no-repeat;

background-position: 170% 200%;

}



.divdots2{

  background-image: url(img/dotsbg2.jpg);

  background-size: 80%;

  background-repeat: no-repeat;

  background-position: center bottom;

}

.resptext h2{color:#f29100; font-size:2em; margin-top:-5%;  font-family: "Program", sans-serif;}



.resp2img{width:20%; float:left;}

.text-right{width:80%; float:left;}

.resptext p{font-size: .95em;}

.platilloquienes, .textoquienes {

	float: left;

	width: 50%;

	padding: 2.5% 5% 0 5%;

}



 .peoplequienes, .textopeople {

	float: left;

	width: 50%;


}



.platilloquienes img,  .peoplequienes img{width:100%;}

.textoquienes {

	padding-top: 15%;

	padding-right: 10%;

	min-height: 85vh;



	padding-left: 0;

	font-size: 1.2em;

}

.textopeople {
	padding-top: 10%;
	padding-right: 0;
	min-height: 500px;
	padding-left: 7.5%;
	font-size: 1.2em;
}
.plecagris {
	background: #f8f8f8;
	padding: 3.5em 7.5%;
	color: #333;
	font-size: 1.5em;
	font-family: "Program",sans-serif;
	float: left;
	width: 100%;
	text-align: center;
	line-height: 1.4;
	margin-top: -20px;
	z-index: 2;
	position: relative;
	font-weight: 500;
	margin-bottom: 100px;
}
.floattext{

	float: right width: 50%;

	float: right;

	width: 45%;

	font-size: 1.1em;

	padding: 5%;

	margin-top: -21%;

	font-family: "Program", sa;

}



.box{

  position: relative;

  width: 100px;

  height: 100px;

  text-align:center;

  font-size:50px;

}


#box1 {
	/* background: #d5db5d; */
	background: #fff;
	width: 100%;
	height: 500px;
	margin: 0px 0 0 5%;
	background-image: url(/img/2019/Almuerzos.png);
	background-size: contain;
	background-position: 100%;
	background-repeat: no-repeat;
}
#box2 {
	width: 90%;
	height: 500px;
	margin: 0px 0 0 5%;
	background-size: contain;
	background-position: center;
	margin-top: -440px;
	background-repeat: no-repeat;
}
#box3 {
	background: #fff;
	width: 80%;
	height: 500px;
	margin: 0px 0 0 10%;
	background-image: url(/img/2019/pattern2.png);
	background-repeat: no-repeat;
	background-position: left bottom;
}
#box4 {
	width: 80%;
	height: 500px;
	margin: 0px 0 0 5%;
	background-size: contain;
	background-position: center;
	margin-top: -300px;
	background-repeat: no-repeat;
}

/* Default hide the video on all devices */

#video2{display:none}

/* Default display the image to replace the video on all devices */

#videosubstitute{display:block;width:100%;height:auto;max-width:100%}

/* Medium Devices, Desktops */



@media only screen and (min-width : 992px) {

#video2{display:block;}

#videosubstitute{display:none}

}

#video2 {

	width: 100%;

	height: 70vh;

	min-height: 400px;

	object-fit: cover;

	object-position: center;

	float: left;



}

#videoMessage2 {padding:0.4em;}

#videoMessage2 {text-shadow: 2px 2px 2px #000000;color:white;}

#videoMessage2 h1 {

	font-size: 2em;

	color: #ffffff;

	text-align: center;

	margin: 0.25em;

	text-align: left;

	padding: 2.5%;

	padding-top: 150px;

}



#videoMessageBox2 {

	position: absolute;

	top: 0;

	left: 0;

	/* display: -webkit-box; */

	/* display: -webkit-flex; */

	/* display: -ms-flexbox; */

	display: flex;

	-webkit-box-align: center;

	-webkit-align-items: center;

	-ms-flex-align: center;

	align-items: center;

	-webkit-box-pack: center;

	-webkit-justify-content: center;

	-ms-flex-pack: center;

	justify-content: center;

	width: 100%;

	/* height: 100%; */

	background: rgba(0,0,0,.5);

	bottom: 0;

	height: 70vh;

	min-height: 400px;

}



#videoMessage2 {

     -webkit-box-flex: 1;

    -webkit-flex: 1;

    -ms-flex: 1;

    flex: 1;

    width: 100%;

}



#videoDiv2 {

	width: 100%;

	max-width: 100%;

	margin: auto;

	display: block;

	position: relative;

	height: 70vh;

	max-height: 400px;

  overflow: hidden;

}





.parallaxbg {

	width: 100%;

	float: left;

	background-size: cover;

	background-position: center;

	padding: 1% 10%;

	min-height: 200px;

	height: 25vh;

	background-attachment: fixed;

	margin-bottom: 270px;

}

.parallaxbg h1 {

	width: 100%;

	color: #fff;

	text-align: right;

	text-shadow: 1px 1px 6px #333;

	font-family: "Program", sans-serif;

	position: absolute;

	width: 100%;

	padding: 5%;

	margin: 0;

	left: 0;

}

.headblog {

	position: absolute;

	margin: 0 auto;

	left: 10%;

	/* right: 0; */

	width: 40%;

	margin-top: 80px;

}



.bgbdots1 {

	height: 50vh;

	background-size: 80%;

	background-repeat: no-repeat;

	position: absolute;

	right: -5%;

	margin-top: 10px;

	width: 50%;

	background-position: top right;
	display:none;

}


.bgbdots2 {
	height: 40vh;
	background-size: 70%;
	background-repeat: no-repeat;
	position: absolute;
	left: -5%;
	margin-top: 10px;
	width: 50%;
	background-position: bottom;
	display: none;
}
.btnmas {
	background: #f29100;
	padding: .75em 15%;
	color: #fff;
	float: right;
	min-width: 200px;
	font-family: "Program",sans-serif;
	margin-top: 1em;
	border-radius: 30px;
	font-weight: 500;
}

.porti {
	width: 60%;
	float: left;
	padding: 0 7.5%;
	font-size: 20px;
	margin-top: -200px;
	text-align: center;
	padding-bottom: 5%;
}
.porti h1 {color:#fbab1a; 	text-align: left;}
.porti p {text-align: left;}
.oval {
	display: inline-block;
	margin: 30px;
	float: none;
}
</style>

<link rel="stylesheet" href="css/animate.css">



<div id="videoDiv2">

<div id="videoBlock2">

<img src="img/bgvideo.jpg" id="videosubstitute" alt="">

<video preload="preload" id="video2" autoplay="autoplay" loop="loop" muted="muted" poster="img/bgvideo.jpg">

<source src="video/videobg.webm" type="video/webm">

<source src="video/videobg.mp4" type="video/mp4">

</video>

<div id="videoMessageBox2">

    <div id="videoMessage2">

        <h1 class="spacer">"Bienvenidos los que disfrutan comer rico"</h1>



    </div>

</div>

</div>

</div>







	<div class="resptext">



	<div class="platilloquienes wow fadeInUp" data-wow-offset="100">



	  <div id="box1" class="box" data-speed="1" data-margin="100"></div>

    <div id="box2" class="box" data-speed="7" style="background-image:url(/img/2019/fotovipsporti.png);"></div>





	</div>



	<div class="textoquienes">

	<h2>Así comenzó...</h2>



		<p>
		1964 nos marcó para siempre. Fue el año en que apareció la primera de muchas estrellas naranjas que iluminaría a México: Vips, el restaurante tipo cafetería creado por el grupo Cifra en la zona del Toreo de la Ciudad de México.</p>

	

	<div class="box bgbdots1" style="background-image:url(img/dotsbg.png);">

	</div>





</div>



<div class="plecagris">Un restaurante pensado para que los clientes de las otras cadenas del grupo comieran antes o después de hacer sus compras.</div>





	<div class="resptext">







	<div class="textopeople">

	<h2> En el 2014 Alsea adquiere Vips</h2>



		<p>
		En esta nueva etapa, el símbolo de la estrella naranja ha desaparecido para dar paso a un nuevo Vips. Pero su brillo, su calidez y toda la tradición de la cadena de restaurantes más importante del país, sigue intacta hasta hoy gracias a los años de pasión y trabajo duro de todos sus colaboradores y la preferencia de miles de familias mexicanas.</p>

	

		<div class="box bgbdots2" style="background-image:url(img/dotsbg2.jpg);">

	</div>

	</div>



		<div class="peoplequienes wow  fadeInUp" data-wow-offset="200">

		  <div id="box3" class="box" data-speed="1" data-margin="100"></div>

    <div id="box4" class="box" data-speed="7" style="background-image:url(/img/2019/ChefMiguelAngel_0044E1D1.png);"></div>

	</div>





</div>

<div class="porti">
<h1>Vips por ti</h1>
<p>En Vips; tú eres lo más importante.
Como parte de tu comunidad, nos preocupamos todos los días por ser agentes de cambio y hemos desarrollado diversas iniciativas para lograrlo</p>

<img src="/img/2019/oval.svg" class="oval">
<p>Trabajamos bajo los más estrictos estándares de calidad e higiene, con ricos platillos preparados al momento e ingredientes frescos para deleitar los paladares de nuestros invitados todos los días</p>
<img src="/img/2019/oval.svg" class="oval">

<p>En Vips todos son bienvenidos y un ejemplo de esto es que contamos con menús en inglés y brayle para comunidades que lo requieran</p>
<img src="/img/2019/oval.svg" class="oval">

<p>Creemos en el consumo responsable y por eso nuestro menú ofrece diferentes opciones, dentro de las cuales podrás encontrar platillos “Balance”. Así mismo contamos con un menú infantil con opciones saludables para nuestros invitados</p>
más pequeños</p>
<img src="/img/2019/oval.svg" class="oval">

<p>Cada día adoptamos más prácticas sustentables con el objetivo de convertirnos en una fuerza positiva para el planeta. Desde nuestros insumos hasta la energía que consumimos, en Vips somos partícipes de este cambio</p>

<img src="/img/2019/oval.svg" class="oval">
<p>Nos preocupamos por la calidad de vida de nuestros colaboradores e invitados; por ello trabajamos arduamente en materia de bienestar, diversidad, inclusión y educación</p>

</div>

<div class="parallaxbg" style="background-image:url(/img/rsbg.jpg)"><h1>Responsabilidad social</h1><div class="imgnota"><img class="headblog" src="/img/resp-banner.jpg" alt="" /></div></div>



<div class="floattext">



<p >



1) Energía limpia Libres<br></br>





Eólica: Queremos generar conciencia ante cualquier problemática con el medio ambiente, por eso cada día nos innovamos y nos regeneramos para formar parte del …

</p>



<a href="responsabilidad-social" class="btnmas">VER MÁS</a>

</div>

</div>





<script src="js/jquery-inertiaScroll.js"></script>



<script>

$(function(){



  $(".box").inertiaScroll({

    parent: $("#content")

  });



});

</script>



<script src="js/wow.min.js"></script>

              <script>

              new WOW().init();

              </script>

<!-- Footer =============================-->

<?php include('footer.php');?>

