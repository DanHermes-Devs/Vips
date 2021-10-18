<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /beneficiosvips#tienda');

  exit(0);

}

?>

<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>



<style>

.wrapper{

  width:100%;

  text-align:center;

}



.subfiltros{

  width:90%;

  margin:0px auto;

}

 .subfiltros2{

  width:90%;

  margin:0px auto;

}



.slick-slide img{

  width:100%;

}



.slick-prev::before, .slick-next::before {

	font-family: 'slick';

	font-size: 20px;

	line-height: 1;

	opacity: .75;

	color: black;

	-webkit-font-smoothing: antialiased;

	-moz-osx-font-smoothing: grayscale;

}

.slick-prev {left: -15px;}

.slick-next {right: -15px;}

.slick-dots {bottom: -25px;}

.seccion img{width: 70%; transition: .35s ease all;}

.seccion img:hover{padding: 5%; transition: .35s ease all;}



.seccion h4 {

    font-size: .6em;

    margin: 0;

	padding: 0;

	font-weight: normal;

}



.active h4{ text-decoration: underline; font-weight: bolder;}

.active img {

    padding: 5%!important;

    transition: .35s ease all;

}



.thumbcat {

	width: 100%;

	height: 150px;

	background-size: 85%;

	background-repeat: no-repeat;

	background-position: center;

	border-radius: 50%;

	position:relative

}





.thumbimg {

	width: 100%;

	height: 150px;

	background-size: 85%;

	background-repeat: no-repeat;

	background-position: center;

	transition:.35s all ease;



}



.activecat .thumbimg {

	width: 100%;

	height: 219px;

	background-size: 100%;

	background-repeat: no-repeat;

	background-position: top left;

	position: absolute;

	margin-left: 5%;

	margin-top: -8%;

	transition:.35s all ease;

}



.categorias {

    margin-top: 5vh;

    background: url(img/Banner_Menu.png);

    border-bottom: 1px solid #ccc;

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    position: fixed;

    z-index: 1;

    padding: 2.5% 5% 0 5%;

}



.slick-track {

    top: .5em;

    padding-bottom: .5em;

}





.button:focus, .button:active, .button:focus * {

    outline: none !important;

-webkit-tap-highlight-color: transparent;

}

.container {

    width: 100%;

    float: left;



margin: 0;}

 .grid, .griditem{100%;}

.outline {



	display: inline-block;



	width: 100%;



	margin: 0;



	text-align: center;



	padding: 10%;



	cursor: pointer;



	border-radius: 50%;



	font-size: .6em;



	line-height: 1.1;



	color: #fff;



	font-family: "Museo 900", sans-serif;



	height: 100%;



	height: 100% !important;



}



.outline {

    display: inline-block;

    width: 85%;

    margin: 0;

    text-align: center;

    padding: 10%;

    cursor: pointer;

    border-radius: 50%;

    font-size: .5em;

    line-height: 1,1;

    color: #fff;

    font-family: "Museo 900", sans-serif;

    height: 85% !important;

    margin-top: 0;

    /* position: absolute; */

    /* left: 0; */

    /* right: 0; */

    /* top: 0; */

    /* bottom: 0; */

    margin: 7.5% 7.5% 7.5% 7.5%;

}

.outline img {

	max-width: 100%;

	transition: .35s all ease;

	padding: 7.5%;

	filter: brightness(0) invert(1);

}



.button {

    padding: 12%;

    border: none;

    border-radius: 50%;

    transition: .35s all ease;

    width: 100%;

    height: auto;

    margin: 0;

}

.button:hover> img{transition:.35s all ease; padding:2.5% 7.5%;}



.button.is-checked {

	border-radius: 50%;

}



.button{  background-size: 10%!important; background-position:center; transition: all .75s ease;}

.dottedbg {

	background-size: 100% !important;

	background-position: center !important;

	transition: all .75s ease;

	background-repeat: no-repeat;

}

.namefilter {
	width: 100%;
	text-align: center;

	font-weight: normal;

	font-size: .6em;

	color: #555;

	float: left;

}

.bigh1 {

	text-align: center;

	/* transform: skewX(-0.06turn); */

	background: #ed7124;

	color: #fff;

	/* padding: 1% 5%; */

	/* position: relative; */

	/* float: left; */

	width: 80%;

	margin: .5em auto;

	background-image: url(img/orangeedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

	font-size: 1em;

	padding: .5em;

}



.bigh2 {

	text-align: left;

	/* transform: skewX(-0.06turn); */

	background: #00b7a4;

	color: #fff;

	padding: 1% 5%;

	/* position: relative; */

	/* float: left; */

	width: 100%;

	margin: .5em auto;

	background-image: url(img/greenedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

	font-size: 1.6em;

	padding: .5em .5em .5em 1em;

}







.producto {

	width: 100%;

	float: left;

	margin-top: 0;

	padding: 2.5% 5%;
	    border-bottom: 1px solid #cecece;

}

.productodesc {

	width: 65%;

	float: left;

	text-align: center;

	padding: 5%;

  padding-right:12%;

	background-image: url(img/right-arrow.png);

	background-repeat: no-repeat;

	background-position: 95% center;

	background-size: 20px;

  -webkit-transform-style: preserve-3d;

  -moz-transform-style: preserve-3d;

  transform-style: preserve-3d;

      padding-top: 3em;

	      background-position: right 3em;

}



.productoimg{

	width: 35%; float: left; padding: 2.5%; text-align: left;

}





.productoimg img {



    width: 100%;

    max-height: 80px;

    object-fit: contain;



}

.productodesc h3 {

    color: #ed7124;

    font-size: .9em;

  

    text-align: left;

    position: relative;

    top: 50%;

    margin: 0;

    padding-right: 10%;

}

.productodesc h3::after {

	content: "";

	position: absolute;

	z-index: -1;

	top: 0;

	left: 0;

	right: 0;

	bottom: 0;

	background-image: url(img/right-arrow.png);

	transform: scaleX(0);

	transform-origin: 0 50%;

	transition: transform .5s ease-out;

}

.btndetail {

	background: #ff0025;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

  cursor: pointer;

  display: none;

}



.btncompra {

	background: #ed7124;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

	margin: 1em 0;

  cursor: pointer;

    display: none;

}



.balance .productodesc h3{color:#00b7a4;}



.main {

  width: 100%;

  z-index: 2;

  position: relative;

  transition: margin-left .2s ease-in;

  -moz-transition: margin-left .2s ease-in;

  -webkit-transition: margin-left .2s ease-in;

}



.panelm {

	background: #fff;

	width: 100%;

	color: #222;

	font-size: 1em;

	min-height: 100%;

}



/* Overlay */



.overlayp {

	z-index: 9999;

	position: absolute;

	left: 0;

	top: 0;

	margin-left: 100%;

	transition: margin-left .2s ease-in;

	-moz-transition: margin-left .2s ease-in;

	-webkit-transition: margin-left .2s ease-in;

}





.overlayp.active {

  margin-left: 0;

  box-shadow: 0 0 20px rgba(0,0,0,0.5);

}



/* Push */



.pushpm {

  position: fixed;



  left: 0;

  top: 0;

  z-index:0;

  margin-left: 100%;

  transition: margin-left .35s ease-in;

  -moz-transition: margin-left .35s ease-in;

  -webkit-transition: margin-left .35s ease-in;

}



.pushpm.active {

	margin-left: 0;

	position: fixed;

	display: block;

	height: 100%;

	overflow-y: scroll;

	z-index: 4;

}

.main.pactive { margin-left: -100%; }



.close {

	width: 10%;

	min-height: 8vh;

	background: url(img/back.png);

	background-repeat: no-repeat;

	background-size: 23px;

	background-position: 15% center;

	float: left;

}



.header {

	height: 8vh;

	width: 100%;

	float: left;

	border-bottom: 1px solid #ccc;

	position: fixed;

	z-index: 90;

	top: 0;

	background: #fff;

}

.titlemenu {

	width: 70%;

	float: left;

	height: 10vh;

	vertical-align: middle;

	padding: 3vh 2vh;

}





.panelm .productdesc{

	width:100%;

	float:left;

	padding: 0% 6%;

	margin-top:8vh;

}



.panelm  .productimg{

	width:100%;

	float:left;

	margin-top: 5%;

}



.panel .productdesc h3 {

	color: #ed7124;

	font-size: 1.2em;

	text-align: left;

}



.panelm  .productdesc p {

	font-size: 1em;

}





.panelm  .productimg img{width:100%;}

.shareicons li {

	display: inline-block;

	margin-right: 1em;

	background-size: 100%;

}

.iconsocial{width:1.5em; height:1.5em;}

.icon-fb{background-image: url(img/menu/social/facebook.png);}

.icon-tw{background-image: url(img/menu/social/twitter.png);}

.icon-ig{background-image: url(img/menu/social/instagram.png);}

.icon-wa{background-image: url(img/menu/social/whatsapp.png);}


.btncompra2 {
	width: 100%;
	background: #e42528;
	padding: .8em;
	color: #fff;
	float: left;
	margin-bottom: .5em;
	cursor: pointer;
	text-align: center;
	font-size: 1.1em;
	transition: 0.3s ease all;
	text-transform: uppercase;
	margin: 2em 0;
	margin-top: 0;
}


.btncompra2:hover {
	background: #ff1528;

}



.prefooter {

	width: 100%;

	float: left;

	padding: 5%;

}

.vipscercano {

	width: 100%;

	float: left;

	padding: 0%;

  border-top: 1px solid #ccc;

}



.beneficiosprod {

	width: 100%;

	float: left;

	padding: 0;

	border-top: 1px solid #ccc;

	margin-top: 5vh;

}



.vipscercano h3 {

	color: #222;

	font-size: 1em;

	text-align: left;

	padding: 0em .5em .5em 1.5em;

	margin-bottom: .6em;

	background: url(img/marker.png);

	background-repeat: no-repeat;

	background-size: 1em;

	min-height: 2em;

	vertical-align: middle;

}



.inputmapf {

	padding: 12px;

	width: 100%;

	float: left;

	position: relative;

	display: inline-block;

	height: 45px;

	margin-right: 2.5%;

	background: #eaeaea;

	border: 3px dashed #bbb;

}



.btnmap {

	background: #979797;

	color: #fff;

	padding: .5em 1em;

	font-size:1em;

	position: relative;

	width: 100%;

	text-align: center;

	margin-top: 0;

	transition: all .4s ease;

	float: left;

	display: inline-block;

	border: none;

}

.vipscercano .btnmap{

  width:100%;

  margin-top:1em;

}



.beneficiosprod h3 {

	color: #ed7124;

	font-size: 1em;

	font-weight: 700;

	text-align: left;

	padding: 0em .4em .4em 1.5em;

	margin-bottom: .6em;

	background: url(img/benef-icon2.png);

	background-repeat: no-repeat;

	background-size: 1em;

	min-height: 2em;

	vertical-align: middle;

}



.benef {

	width: 50%;

	float: left;

	margin: 0;

	padding: 0 1em;

  transition: all .35s ease;

  min-height: 8em;

}



.benef{ padding: 0 2%;}



.benef img {
	width: 100%;
	padding: 0;
	transition: all .35s ease;
	box-shadow: 1px 1px 10px #ccc;
}

.benef img:hover{width: 100%;	padding:0 1em; transition: all .35s ease;}



#wrapper {

  text-align: center;

  width: 100%;

float: left;

background: #fff;

overflow-x:hidden;



}



#swiper-one {

	max-width: 100%;

	margin: 0;

	padding: .5em;

	height: 11vh;

	overflow-x: hidden;

}



.swiper-container {

    overflow: visible;

}



#imgcal, #imgplatillo{cursor:pointer;}





.grid{

    width: 100%;
	margin-bottom: 170px;



}

.detailbtn, .pidebtn{    display: none;}



.subfiltros .slick-dots {

    bottom: -15px;

}



.subfiltros .slick-slider {

    margin-bottom: 0;

}

.subfiltros {

    margin-bottom: 10px!important;

}



.titlecontainer {

    margin-top: 0;

}



.panelm .productimg img {

    width: 100%;

    max-height: 300px;

    object-fit: contain;

}



.griditem.TemVam18 {
	display: none;
}

.disclaimernfl {
	float: left;
	width: 100%;
	padding: 0 5%;
	font-size: .85em;
	text-align: center;
	padding-bottom: 4%;
}

.cupones-cont {
    text-align: center;
}

.nfltitle {
    width: 100%;
    text-align: center;
    color: #0b1f53;
    font-size: 1.25em;
    padding: 0 5%;
}
.orangebutton {
	display: inline-block;
	padding: .5em 10%;
	background: #ed7124;
	margin: 0 auto;
	color: #fff;
	font-family: "Moreno", sans-serif;
	font-size: 1.25em;
    width: 90%;
    margin-bottom: 1em;
}

.avisonfl {
	width: 100%;
	display: inline-block;
	margin-top: -2%;
	margin-bottom: 2%;
}

.NflVam18 .productodesc{background-image:none;}

.MerchNFL{pointer-events:none;}

</style>



 <div class='pushpm panelm'>

	<div id="platillodetalle"></div>

 </div>



<div class="main">



	<?php include('lateral.php');?>



	<main role="main">



<!-- Platillos =============================-->

<div id="contenedor"> </div>


</script><script src='slick/slick.min.js'></script>

<script>



function marginSub(){

	var cath= $(".categorias").height();

	$("#contenedor").css("padding-top", (cath -20) +"px");

}



</script>





<script src='//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>





<script type="text/javascript">



function equalheight(){

	var divHeight1 = $('.productoimg').height();



	$('.productodesc').css('height', divHeight1 +'px');



}

	$(document).ready(function() {



		setTimeout(function(){

      equalheight();}, 1000);





	});



	$(window).on('resize', function(){

		equalheight();

	});





</script>



  	<script>



	function Cargar(){

		$("#contenedor").load( 'categoriamt?cat=tienda', function() {

		  orderPlates();

		});

	}

	

	$(window).load(function() { 

	Cargar();

	equalheight();

	bgColor();

	orderPlates();
	

	

	});





	function equalheight(){	

		var cw = $('.thumbcat').width();	

		$('.thumbcat').css('height', +cw+'px');

		$('.thumbcat .thumbimg').css('height', +cw+'px');

	

	}



	function bgColor(){

	  $('.seccion .thumbcat').css('background-color', "transparent");

		var color = $('.activecat .thumbcat').attr("data-color");

		$('.activecat .thumbcat').css('background-color', color);

	}

	

	function orderPlates(){

			  $('.subfiltros').slick({

			 infinite: false,

			  slidesToShow: 4,

			  slidesToScroll: 4,

			  dots:true,

			});

			 $('.platillos').find('.producto').each(function() {

				var parent = $(this).attr("data-parent");

				$(this).detach().appendTo("."+parent+" .cupones-cont");			

				colorsFilters();	

			});

			$('.button:nth-child(2)').click();
			$('[data-filter = ".JugVam18"]').click();

			//$( ".producto:even" ).css( "background-color", "#f6f6f6" );
			
			//$(".NflVam18 .cupones-cont").prepend('<div class="avisonfl"><h1 class="nfltitle">Exclusivos a través de la dinámica "Vive la NFL en Vips" <br></h1><a href="https://vips.com.mx/viajaconnflyvisa" class="orangebutton">PARTICIPA</a></div>');

			



	}





	$('.seccion').click(function(){

		var id =$(this).attr('data-seccion');  

		$('.seccion').removeClass("activecat");

		$(this).toggleClass("activecat");

		bgColor();

		$("#contenedor").load( 'categoriamt?cat='+ id, function() {

		  orderPlates();

		});

		



	});

  

  

    function colorsFilters(){

	  	var colors = ["#b898c7","#e77a7f","#d4db5c","#6bc0e3", "#ed7124"];

		var randomColor = Math.floor(Math.random()*colors.length);



		$(".outline").each(function () {

			$(this).css("background-color", colors[randomColor]);

			randomColor = (randomColor + 1) % colors.length;

		});

	}



	function openPanel(id){

			var plato = $('#'+id);

			$("#platillodetalle").load( 'panelproducto?id='+ id, function() {

				var o=$('.overlayp'),r=$('.revealp'),p=$('.pushpm'),ob=$('.overlay'),rb=$('.reveal'),pb=$('.pushm'),m=$('.main'),panel=$('.panelm');

				m.toggleClass('pactive');

				p.toggleClass('active');


			});

			

	}

	

	$('body').on( 'click', '.close', function() {

		$(".panelm").removeClass('active');

		$(".main").removeClass('pactive');

	 });





</script>

  <!-- Footer =============================-->

  <?php include('footerm.php');?>

