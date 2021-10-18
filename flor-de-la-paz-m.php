<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /');

  exit(0);

}

?>







<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





<style>

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



.ayuda{float:left; width:100%; padding:5%;}

.ayuda h1{display:inline; font-size: 1.5em; color: #ED7124;font-family:'Program', sans-serif; margin-left: 7%}
.ayuda h2{display:inline; font-size: 1.3em; color: #ED7124;font-family:'Program', sans-serif;}

.ayuda p{  font-size: .9em; color: #333; font-family:'Program', sans-serif;"}



</style>

<img style="width:100%;     float: left;" src="/img/blog/Portada_flor.png">

<div class="ayuda">

	<h2 style="color:#eb1c2d; text-transform:uppercase;" googl="true">¿UN TÉ LLENO DE PAZ?</h2>
				<p>Conoce todas las infusiones que tenemos para que puedas relajarte y tener el mometo de que merece.</p>
				<a href="/ubicaciones" class="btnmas">Encuentra tu Vips</a>


</div>


<img style="width:100%;     float: left;" src="/img/blog/FlorDeLaPaz.png">













  <!-- Footer =============================-->

  <?php include('footerm.php');?>
