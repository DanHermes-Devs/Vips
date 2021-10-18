	<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: consumo-responsable-m.php');

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

	padding: 2.5% 2.5% 2.5% 5%;

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
	padding-top: 5%;
	padding-right: 0;
	min-height: 5vh;
	padding-left: 7.5%;
	font-size: 1.2em;
}
.plecagris {

	background: #fff;

	padding: 3.5em 7.5%;

	color: #333;

	font-size: 1.5em;

	font-family: "Program", sans-serif;

	float: left;

	width: 100%;

	text-align: center;

	line-height: 1.4;

	margin-top: -20px;

	z-index: 2;

	position: relative;

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

	background: #D69FB4;

	background: #D69FB4;

	width: 80%;

	height: 350px;

	margin: 10px 0 0 10%;

}

#box2 {

	width: 80%;

	height: 500px;

	margin: 0px 0 0 5%;

	background-size: cover;

	background-position: center;

	margin-top: -300px;

}

#box3 {
	background-image: url(img/consumo/pattern.png);
	width: 80%;
	height: 500px;
	margin: 100px 0 0 10%;
	background-size: 100%;
	margin-left: 30%;
	background-repeat: no-repeat;
}


#box4 {
	width: 80%;
	height: 300px;
	margin: 0px 0 0 5%;
	background-size: cover;
	background-position: center;
	margin-top: -200px;
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

}



.btnmas {

	background: #f29100;

	padding: .75em 15%;

	color: #fff;

	float: right;

	min-width: 200px;

	font-family: "Program", sans-serif;

	margin-top: 1em;

}
.textto1 {
	padding: 100px 5% 0 5%;
}

.plecagris img{
	width: 20%;
	float: left;
	vertical-align: middle;
}

.plecagris p {
	text-align: left;
	float: left;
	width: 80%;
	padding: 5%;
}

.disclaimer2 {
	float: left;
	text-align: center;
	padding: 0 10%;
	padding-bottom: 5%;
	color: #7C7C7C;
	font-size: .8em !important;
	margin-top:-100px;
}
</style>

<link rel="stylesheet" href="css/animate.css">









	<div class="resptext">
<div class="textto1">
<h2>Bienvenidos a los que aman lo saludable</h2>

<p>En Vips estamos comprometidos con un estilo de vida equilibrado, que integra el placer de una comida de calidad, hidratación adecuada, actividad física y una sana convivencia con las personas que son importantes para ti. Cada uno de nuestros platillos son preparados al momento utilizando los mejores y más frescos ingredientes.  </p>

</div>

	<div class="platilloquienes wow fadeInUp" data-wow-offset="100">



	  <div id="box1" class="box" data-speed="1" data-margin="100"></div>

    <div id="box2" class="box" data-speed="7" style="background-image:url(img/consumo/verduras.png);"></div>





	</div>



	<div class="textoquienes">

	<h2 style="font-family: 'Program',sans-serif; font-size: 1.75em; line-height: 1.2;">Diariamente recibimos más de 15 toneladas de verduras y frutas frescas:</h2>



		<p>

	Las cuales lavamos y desinfectamos todos los días; cuidando el sabor que tanto te gusta. Diseñamos platillos con una adecuada variedad de los 3 diferentes grupos de alimentos combinando colores, sabores y texturas diferentes*. </p>



</div>



<div class="plecagris">
<img src="img/consumo/balance_logo.png">
<p>Encontrarás una oferta de platillos <span style="color:#57b6b2">“Balance”</span> cuyo contenido calórico es menor al resto de nuestros platillos. Brindamos estas opciones para que elijas la mejor, según tu estilo de vida.</p> </div>





	<div class="resptext">







	<div class="textopeople">

		<p>

	Además, pensando en nuestros clientes más chiquitos, desarrollamos un nuevo menú infantil con platillos saludables*, sin dejar de ser deliciosos y divertidos. </p>


	</div>



		<div class="peoplequienes wow  fadeInUp" data-wow-offset="200" style="width:35%; margin-top: -200px;">

		  <div id="box3" class="box" data-speed="1" data-margin="100"></div>

    <div id="box4" class="box" data-speed="7" style="background-image:url(img/consumo/EstrellitaVips.png); background-size: 100% auto; background-repeat: no-repeat;"></div>

	</div>





</div>




<p class="disclaimer2">
*Basado en el plato del Bien Comer (NOM-043-SSA2-2012)La energía desplegada en platillos es calculada de la información nutrimental de cada uno de los ingredientes que lo forman. Las descripciones que integran más de una opción de platillo, despliegan el promedio de energía de las variables elegibles. Libre de calorías refiere a alimentos libres de energía de acuerdo al Sistema Mexicano de Alimentos Equivalentes 4ta edición.
</p>


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

