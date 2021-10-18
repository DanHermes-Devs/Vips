<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: encuesta-preview-m');

    exit(0);

}

?>

<div class="main">



<style>

.avisofooter{
	color: #fff !important;
	font-weight: bold;
	font-size: 13px;
}

.resptext {

    width: 100%;

    float: left;

    padding: 2.5% 5% 5% 5%;

    font-family: "Program", sans-serif;

}



.resptext h2{color:#f29100; font-size:2em; margin-top:-5%;}



.resp2img{width:20%; float:left;}

.text-right{width:80%; float:left;}

.resptext p{font-size: .95em;}

</style>
 <iframe src="https://survey3.medallia.com/?alsea-prueba-vips" style="height: 90vh;" width="100%" frameborder="0"></iframe>









<!-- Footer =============================-->

<?php include('footer.php');?>

