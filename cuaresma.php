<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: nuevos-chilaquiles-m');
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
	font-family: "Museo 900",sans-serif;
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


.platillo img{width:100%; padding:2%; transition:.35s all ease;}

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
	font-family: "Museo 900",sans-serif;
	color: #19669b;
	text-align: center;
	font-size: 1.3em;
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

    width: 100%;
    text-align: center;
    position: relative;
    float: left;
    margin-top: -120px;
    padding-left: 0%;

}
.btnubica {
	font-size: .9em;

	margin: 0;
	display: inline-block;
	text-align: center;

	margin-top: 0;
	margin-bottom: 0;
	position: relative;
	/* left: 0; */
	z-index: 5;
	bottom: 0;
	color:#fff;
	font-family:"Museo 900", sans-serif;
	font-size:1.2em;
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
	width: 55%;
	left: 2.5%;
	float: left;
	padding: 0;
}
.pla2 {
	position: absolute;
	margin-top: 10%;
	z-index: 2;
	right: 2.5%;
	width: 40%;
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
	position: relative;
	margin-top: 5%;
	width: 100%;
	left: 0;
	float: left;
}

.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}

.footer{margin-top:-5px;}

.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }


.slick-next {
	right: 0px;
}
.platillo p {
	margin-top: -10%;
	font-family: "Moreno";
	color: #19669b;
	padding: 0 15%;
	font-size: .85em;
}

.pla1  p {
	margin-top: -25%;
	font-family: "Moreno", sans-serif;
	color: #19669b;
	padding: 0%;
	font-size: .9em;
	text-align: right;
}

.pla1 span {
	font-size: .75em;
	margin-left: 5px;
	color: #00658b;
}

.midimg {
	width: 40% !important;
	display: inline-block;
	margin: 0;
}

.pla5 h2 {
	color: #19669b;
	text-align: left;
	padding-top: 20px;
	border-top: 5px solid #eb6640;
	width: auto;
	margin-left: -2.5%;
	padding-left: 5%;
	font-size: 1.25em;
	float: left;
	display: inline-block;
	/* text-align: left; */
	position: absolute;
	left: 0;
	margin-top: 2.5%;
}

.slick-prev::before, .slick-next::before {
	font-family: 'slick';
	font-size: 20px;
	line-height: 1;
	opacity: .75;
	color: #19669b;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.slick-prev {
	left: 0;
}

.arena {
	pointer-events: none;
	width: 20% !important;
	left: -2% !important;
	float: left;
	position: absolute;
}

.caracol2 {
	pointer-events: none;
	width: 20% !important;
	right: -2% !important;
	float: right;
	position: absolute;
}

#scroll img {
	width: 50px;
	padding: 0;
}

#scroll {
	width: 100%;
	float: left;
	margin-top: -5%;
}

.floating {  
    animation-name: floating;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;

}

@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }    
}

.par1 {
	margin-top: -28% !important;
}

.par3 {
	margin-top: -32% !important;
	padding-right: 5% !important;
}

.par4 {
	margin-top: -33% !important;
	padding-right: 5% !important;
}

@media(max-width:1500px){
	

.par1 {
	margin-top: -26% !important;
}
.par2 {
	margin-top: -20% !important;
}
.par3 {
	margin-top: -30% !important;
	padding-right: 5% !important;
}

.par4 {
	margin-top: -30% !important;
	padding-right: 5% !important;
}	
}

</style>


<div class="main">

<img src="img/cuaresma/fondo.jpg" class="imgmain" width="100%;">
	<div class="gif">

	<div class="platillo pla1  wow fadeInLeft " data-wow-offset="200" data-wow-delay=".5s">

	<div class="carousel1">
		
				<div>
					<a href="platillo?id=197"><img src="img/cuaresma/platos/filetedemojarraalpesto.png">
					<p class="par1">Filete de mojarra <br>al pesto <span>(150g/960 Cal)</span></p></a>
				</div>

				<div>
					<a href="platillo?id=199"><img src="img/cuaresma/platos/Filete-de-mojarra-al-ajillo.png">
					<p class="par2">Filete de mojarra <br>al ajillo <span>(150g/620 Cal)</span></p></a>
				</div>
				
				<div>
					<a href="platillo?id=198"><img src="img/cuaresma/platos/Camarones-empanizados.png">
					<p class="par3">Camarones empanizados<br> <span>(10 pzas/ 872 Cal)</span></p></a>
				</div>

				<div>
					<a href="platillo?id=199"><img src="img/cuaresma/platos/Filete-de-mojarra-en-salsa-de-cilantro.png">
					<p class="par4">Filete de mojarra <br>en salsa de cilantro<span>(150g/990 Cal)</span></p></a>
				</div>
				
	
			
	</div>



	</div>

	<div class="platillo pla2  wow fadeInRight">

	<img src="img/cuaresma/logo_curesma.svg" style="pointer-events:none;">
	<img src="img/cuaresma/incluye-04.svg" style="margin-top: -10%; pointer-events:none;">
	<a href="mojarra"><img class="midimg animate"  src="img/cuaresma/regal-03.svg" style="margin-top: -10%;"></a>
	<img class="midimg"  src="img/cuaresma/hellmanns-02.svg" style="margin-top: -10%; pointer-events:none;">
	
	<a href="#platillos" class="scrollto2" id="scroll"><img class="floating grow" src="img/clasicos/down-arrow.png" ></a>

	<img class="midimg caracol1"  src="img/cuaresma/caracoles.png">
	




	</div>


	
	
	<div class="platillo pla5 " id="platillos">
	<h2>Además disfruta de estas entradas</h2>

		<div class="carouseldesayunos">
		
				<div class="wow fadeInUp" data-wow-offset="200" data-wow-delay=".5s">
					<a href="platillo?id=202"><img src="img/cuaresma/platos/caldo_camaron.png">
					<p>Caldo de camarón <br>(370 mL - 143 Cal) </p></a>
				</div>
				
				<div class="wow fadeInUp" data-wow-offset="200" data-wow-delay="1s">
					<a href="platillo?id=200"><img src="img/cuaresma/platos/pescadillas.png">
					<p>Pescadillas <br>(3 pzas cortadas por mitad - 642 Cal)</p></a>
				</div>
				
				<div class="wow fadeInUp" data-wow-offset="200" data-wow-delay="1.5s">
					<a href="platillo?id=201" ><img src="img/cuaresma/platos/tacos_baja.png">
					<p>Tacos estilo baja <br> (2 pzas - 490 Cal)</p></a>
				</div>

			

		</div>

	<img class="arena"  src="img/cuaresma/arena.png">
	<img class="caracol2"  src="img/cuaresma/_con.png">

	</div>
	
	




	</div>


<div class="btns">
<a href="ubicaciones" class="btnubica grow"><img src="img/nochesantojo/CTA.png"></a>
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



	$('.carousel1').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: true,

		dots:false,
		autoplay: true,
  autoplaySpeed: 3000,

	});

	
	
	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 3,

		slidesToScroll: 2,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:false,
		autoplay: false,
  autoplaySpeed: 3000,

	});






});

</script>

<script>
$('.scrollto2').click(function(){
		if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')||location.hostname==this.hostname){
			var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');
			if(target.length){
				$('html,body').animate({scrollTop:target.offset().top-100},1000);return false;
			}
		}
});
</script>


<!-- Footer =============================-->
<?php include('footer.php');?>
