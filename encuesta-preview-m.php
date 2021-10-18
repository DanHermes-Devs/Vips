<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /encuesta-preview');

  exit(0);

}

?>







<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





<style>
main {
	width: 100%;
	padding-top: 5vh;
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
.ayuda h2{display:inline; font-size: 0.8em; color: #ED7124;font-family:'Program', sans-serif;}

.ayuda p{  font-size: .8em; color: #333; font-family:'Program', sans-serif;"}

	



</style>

 <iframe src="https://survey3.medallia.com/?alsea-prueba-vips" style="height: 85vh;" width="100%" frameborder="0"></iframe>





  <!-- Footer =============================-->

  <?php include('footerm.php');?>

