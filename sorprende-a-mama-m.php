<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /sorprende-a-mama');

  exit(0);

}

?>


<link rel="stylesheet" href="css/animate.css">





<div class="main">



	<?php include('lateral.php');?>



	<main role="main">






<style>


.resptext {

    width: 100%;

    float: left;

    padding: 0 5% 5% 5%;

    font-family: "AmsiProNarw", sans-serif;

}
body {
	background-color: black;
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
	position: relative;
	font-family: "Program",sans-serif;
	top: 5%;
	z-index: 2;
	padding: 12% 5%;
	height: auto;
	padding-bottom: 15vh;
}
.gif h1 {
	font-size: .85em;
	margin-top: 0;
	margin-bottom: 0;
}
.gif .img1{width:32%;}

.subtitle {
	font-size: 12px;
	font-weight: normal;
	margin-top: 5px;
}
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




.legales {
    font-family: "Program",sans-serif;
    color: #333;
    text-align: center;
    font-size: .75em;
    padding: 0em 5%;
    float: left;
    margin: 0 auto;
    width: 85%;
    opacity: .6;
    transition: .35s all ease;
    z-index: 3;
    position: relative;
    /* bottom: 5%; */
    margin-top: -7.5%!important;
}

.legales:hover{opacity:1; transition:.35s all ease;}
.btnubica {
	font-size: .9em;
	padding: .5em 1em;
	margin: 2em;
	display: inline-block;
	text-align: center;
	background: #f29100;
	margin-top: 2em;
	margin-bottom: 1.5%;
	position: relative;
	left: 0;
	z-index: 5;
	bottom: 10%;
	font-family: "Program";
	color:#fff;
}

.btnubica:hover {
	background: #ffac30;
	transition: all .4s ease;
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
	margin-top: 0;
	width: 100%;
	left: 0;
	z-index: 2;
	margin-top: 2.5%;
	padding: 0 5%;
}
.pla2 {
	position: absolute;
	margin-top: 40%;
	z-index: 2;
	left: -2.5%;
	width: 40%;
}
.platillo.pla3 {
	position: absolute;
	margin-top: 40%;
	width: 40%;
	left: 30.5%;
	z-index: 2;
}
.platillo.pla4 {
	position: absolute;
	margin-top: 40%;
	left: 65%;
	width: 40%;
}
.platillo.pla5 {

	position: relative;

	right: 2%;

	top: 40%;

}


.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}

body{background:#fff;}


.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }

.btnubica img {
	width: 75%;
}

.carouselbebidas {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	margin-top: 0%;
}

.carouseldesayunos {
	width: 90%;
	float: left;
	padding: 0%;
	margin: 0 5%;
	margin-top: 0%;
}

.carouseldesayunos  img, .carouselcomida img, .carouselbebidas img {
	width: 100%;
	padding: 5%;

}

.slick-slide img {
	display: inline-block !important;
	width: 70% !important;
}

.chaticon2 {
	display: none;
}

.btnordena {
	background: #f5a623;
	color: #fff;
	font-weight: 500;
	width: 200px;
	padding: 15px;
	border-radius: 30px;
	display: inline-block;
	margin-top: 0px;
}

.copy1 {
	color: #fff;
	font-weight: 500;
	margin-bottom: 5px;
}
.copy2 {
	color: #fedf00;
	font-size: .85em;
	margin: 0;
	padding: 0;
	display: inline-block;
	margin-top: -10px;
	position: relative;
}
.footer {
	padding: 30px 2.5%;
	padding-bottom: 0;
	/* z-index: 3; */
	margin-top: -5px;
	z-index: 2;
}
.postres {
	width: 100%;
	height: 50vh;
	position: fixed;
	bottom: 0;
	z-index: 3;
	right: 0;
	background: url(/img/2019/dia-madres/pleca_mobilemdres.png);
	background-repeat: no-repeat;
	transform: translatey(30vh);
	background-size: contain;
	transition: .35s all ease;
	cursor: pointer;
	opacity:0;
	z-index-1;
}
.openpostres {
	transform: translateY(11vh);
	transition: .35s all ease;
}
	
.verticaltxt {
	/* transform: rotate(-90deg); */
	font-size: 15px;
	font-weight: 500;
	color: #fff;
	position: absolute;
	text-align: center;
	left: 0;
	font-family: "Program",sans-serif;
	width: 100%;
	margin-top: 15%;
	transition: .2s all ease;
}

.openpostres .verticaltxt{opacity:0; transition:.2s all ease;}

.textopostres {
	font-weight: 500;
	color: #fff;
	width: 100%;
	margin-top: 10%;
	margin-left: 0%;
	opacity: 0;
	transition: .2s all ease;
	text-align: center;
	padding: 0 20%;
	font-size: 12px;
}

.openpostres .textopostres {
	opacity:1;
	transition:.2s all ease;
}
.flechapostres {
	background-image: url(/img/2019/dia-madres/up-arrow.png);
	width: 25px;
	height: 25px;
	position: absolute;
	left: 45%;
	margin-top: 5%;
	z-index: 5;
	background-size: 100%;
	transform: rotate(180deg);
}
.openpostres .flechapostres {
	background-image: url(/img/2019/dia-madres/down-arrow.png);
}

	.animate-right-to-left {
		animation-name: move-right-to-left;
		animation-duration: 1s;
		animation-delay: 0.6s;
		animation-iteration-count: infinite;
		animation-direction: alternative;
	}


	@keyframes move-left-to-right {
		0% {
			transform: translateY(5%);

			-webkit-filter: 3px 5px 5px rgba(0, 0, 0, 0.2);
			filter:  3px 5px 5px rgba(0, 0, 0, 0.2);
		}
		50% {
			transform: translateY(15%);
			-webkit-filter: 3px 5px 5px rgba(0, 0, 0, 0.2);
			filter:  3px 5px 5px rgba(0, 0, 0, 0.2);
		}
		100% {
			transform: translateY(5%);
			-webkit-filter: 3px 5px 5px rgba(0, 0, 0, 0.2);
			filter:  3px 5px 5px rgba(0, 0, 0, 0.2);
		}
	}

	@keyframes move-right-to-left {
		0% {
			transform: translateY(-5%);
			-webkit-filter: 3px 5px 5px rgba(0, 0, 0, 0.2);
			filter:  3px 5px 5px rgba(0, 0, 0, 0.2);
		}
		50% {
			transform: translateY(-20%);
			-webkit-filter: 3px 5px 5px rgba(0, 0, 0, 0.4);
			filter:  3px 5px 5px rgba(0, 0, 0, 0.2);
		}
		100% {
			transform: translateY(-5%);
			-webkit-filter: 3px 5px 5px rgba(0, 0, 0, 0.2);
			filter:  3px 5px 5px rgba(0, 0, 0, 0.2);
		}
	}
.circleyellow {
	background: #fedf00;
	width: 250px;
	height: 250px;
	border-radius: 50%;
	display: inline-block;
	padding: 30px;
	color: #5a2331;
	font-size: 15px;
	background-image: url(/redescubreelsabor/images/flechasabias.svg);
	background-repeat: no-repeat;
	background-size: 45px;
	background-position: 80% 80%;
	transition:.35s all ease;
	cursor:pointer;
}

.circleyellow:hover {
	background-size: 55px;
	background-position: 80% 80%;
	transition:.35s all ease;
}
.descplato {
	color: #923b54 !important;
	font-size: 15px !important;
}

.platillo .circleyellow p {
	color: #5a2331;
	font-family: "Program",sans-serif;
	font-size: 1.1em;
	margin-top: 15.5%;
	font-weight: 500;
}


.slick-slide img {
	display: inline-block !important;
	width: 250px !important;
	padding: 0 !important;
	cursor:pointer;
}

.slick-slide {
	display: none;
	float: left;
	height: 100%;
	min-height: 370px!important;
	/* padding: 0 10%; */
	position:relative;
}

.gramaje {
	color: #fff;
	font-size: 13px;
}

.slick-list {
	overflow: visible!important;
}
body {
	background: #470b42;
}

.floating {  
    animation-name: floating;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;

}

.floating2 {  
    animation-name: floating;
    animation-duration: 4s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;

}
.floating3 {  
    animation-name: floating;
    animation-duration: 5s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;

}

.floating4 {  
    animation-name: floating2;
    animation-duration: 5s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;

}

@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }    
}


@keyframes floating2 {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(2px, 15px);}
    to   { transform: translate(0, -0px); }    
}

.animate-right-to-left {
	animation-name: move-right-to-left;
	animation-duration: 3s;
	animation-delay: 0.6s;
	animation-iteration-count: infinite;
	animation-direction: alternative;
}
#site-wrapper {
    padding-bottom: 8.5vh;
}

html, body {
	max-width: 100%;
	height: 100%;
}

.pla1 .slick-dots {
	bottom: -8px !important;
	display: block !important;
}

.imgmain {
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
	height: 150vh;
}

.pla1 .slick-dots li button::before {
	font-family: 'slick';
	font-size: 13px;
	line-height: 20px;
	position: absolute;
	top: 0;
	left: 0;
	width: 20px;
	height: 20px;
	content: '•';
	text-align: center;
	opacity: .8;
	color: #fff;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.front p {
	text-align: center;
	font-size: 1em;
	color: #fedf00;
	font-family: "Program",sans-serif;
	font-weight: 500;
	margin-top: 40px;
}

.arrowdown {
	width: 25px;
	height: 25px;
	background: url(/img/2019/dia-madres/down-arrow.png);
	position: absolute;
	top: 0;
	right: 5%;
	z-index: 3;
	background-size: 100%;
	margin-top: 150%;
	opacity:1;
	transition:.3s all ease;
}

.scrolled .arrowdown{opacity:0; transition:.3s all ease;}

.imgmlogo {
	width: 60%;
	margin-top: 5%;
}
</style>


<div class="main">



	<div class="gif">
	<div class="arrowdown  animate-right-to-left"></div>
	<img src="/img/2019/dia-madres/logo-diamadres.png" class="imgmlogo">
	<h1><span style="color:#fedf00;"></span>¡y olvídate de tener que cocinar!</h1>
	<h3 class="subtitle">Las porciones por orden son recomendadas para<span style="color:#fedf00;"> 4 personas</span></h3>

	<div class="platillo pla1 wow  fadeInLeft ">
		<div class="carouselcomida">
		
				<div>
				<div class="floating" style="background: url(/img/2019/dia-madres/pattern2-pasta.png); background-position: center; background-size: 90%; background-repeat: no-repeat; height: 400px; position: absolute; top: 0; width: 100%;"></div>
				
				<div class="flip" data-tilt style="perspective: 972px; position: relative;">
					<div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(0deg);">
						<img class="grow floating2  platillomama"  id="Fetuccini"   src="/img/2019/dia-madres/fetuccini.png">
						<p>Fettuccini Alfredo <span class="gramaje">1.3 kg</span>  <br><span class="price">$349</span></p>	
					</div>

					<div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out 0s;">

						<div class="circleyellow">
						   <p>Fetuccini Alfredo <span class="peso">1.3kg</span></p>
						   <p class="descplato">Tradicional salsa blanca con vino blanco, queso parmesano y pechuga de pollo horneada </p>
						  
						</div>

					</div>

				</div>
					
				</div>
		
				<div>
				<div class="floating" style="background: url(/img/2019/dia-madres/pattern4-pasta.png);background-position: center; background-size: 90%; background-repeat: no-repeat; height: 400px; position: absolute; top: 0; width: 100%;"></div>	
					
				<div class="flip" data-tilt style="perspective: 972px; position: relative;">
					<div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(0deg);">
						<img class="grow floating2  platillomama" id="Spaguetti" src="/img/2019/dia-madres/spaguetti.png">
						<p>Spaguetti con mini albondigas <span class="gramaje">1.3 kg</span> <br><span class="price">$349</span> </p>	
					</div>

					<div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out 0s;">

						<div class="circleyellow">
						   <p>Spaguetti con mini albondigas
						   <span class="peso">1.3kg</span></p>
						   <p class="descplato">Salsa de jitomate con gravy, queso parmesano y mini albondigas de res</p>
						  
						</div>

					</div>

				</div>
				</div>
				
				<div> 
				<div class="floating" style="background: url(/img/2019/dia-madres/pattern3-pasta.png); background-position: center; background-size: 90%; background-repeat: no-repeat; height: 400px; position: absolute; top: 0; width: 100%;"></div>
					
				<div class="flip" data-tilt style="perspective: 972px; position: relative;">
					<div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(0deg);">
						<img class="grow floating2 platillomama" id="PenneCilantro"  src="/img/2019/dia-madres/penne.png">
					<p>Penne al cilantro <span class="gramaje">1.4 kg</span> <br><span class="price">$399</span>  </p>
					</div>

					<div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out 0s;">

						<div class="circleyellow">
						   <p>Penne al cilantro
						   <span class="peso">1.4kg</span></p>
						   <p class="descplato">Salsa de cilantro, queso parmesano y un toque de nuez; servido con filete de mojarra a la plancha</p>
						  
						</div>

					</div>

				</div>
				</div>
				
				<div> 
				<div class="floating" style="background: url(/img/2019/dia-madres/pattern5.png); background-position: bottom; background-size: 100%; background-repeat: no-repeat; height: 300px; position: absolute; top: 0; width: 100%;"></div>
					
				<div class="flip" data-tilt style="perspective: 972px; position: relative;">
					<div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(0deg);">
						<img class="grow floating2 platillomama" id="CheescakeGuayaba"  src="/img/2019/dia-madres/cheescake_guayaba.png">
					<p>Cheescake de guayaba Entero <span class="gramaje"></span> <br><span class="price">$315</span>  </p>
					</div>

					<div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out 0s;">

						<div class="circleyellow">
						   <p>Cheescake de guayaba Entero
						   <span class="peso"></span></p>
						   <p class="descplato">Un delicioso pay de queso con chocolate</p>
						  
						</div>

					</div>

				</div>
				</div>

				<div> 
				<div class="floating" style="background: url(/img/2019/dia-madres/pattern6.png); background-position: bottom; background-size: 100%; background-repeat: no-repeat; height: 300px; position: absolute; top: 0; width: 100%;"></div>
					
				<div class="flip" data-tilt style="perspective: 972px; position: relative;">
					<div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(0deg);">
						<img class="grow floating2 platillomama" id="CheescakeTrufa"   src="/img/2019/dia-madres/cheescaketrufa.png">
					<p>Cheescake de trufa Entero<span class="gramaje"></span> <br><span class="price">$315</span>  </p>
					</div>

					<div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out 0s;">

						<div class="circleyellow">
						   <p>Cheescake de trufa Entero
						   <span class="peso"></span></p>
						   <p class="descplato">Un delicioso pay de queso con chocolate</p>
						  
						</div>

					</div>

				</div>
				</div>


				<div> 
				<div class="floating" style="background: url(/img/2019/dia-madres/pattern5.png); background-position: bottom; background-size: 100%; background-repeat: no-repeat; height: 300px; position: absolute; top: 0; width: 100%;"></div>
					
				<div class="flip" data-tilt style="perspective: 972px; position: relative;">
					<div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(0deg);">
						<img class="grow floating2 platillomama" id="Donas"  src="/img/2019/dia-madres/donas_rosas.png">
					<p>Donas Rosas<span class="gramaje"> 6 pzas</span> <br><span class="price">$93</span>  </p>
					</div>

					<div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out 0s;">

						<div class="circleyellow">
						   <p>Donas Rosas <span class="peso">6 pzas</span></p>
						   <p class="descplato">Deliciosas donas rosas </p>
						  
						</div>

					</div>

				</div>
				</div>



			
			</div>
			
			
	</div>
	
	<div class="copys">
<a href="/pedidos-especiales/" class="btnordena btnmadres">Ordena aquí</a><br><br>

<p class="copy1">Platillos para compartir en casa del  <br><span style="color:#fedf00;"><b>26 de abril al 7 de mayo</b></span></p>
<p class="copy2">Paga y recoge tu pedido en tu Vips favorito

</p>

</div>

	</div>
<div class="postres">
<div class="verticaltxt">Conoce nuestros postres</div>
<div class="flechapostres animate-right-to-left"></div>
<div class="textopostres">
<p>Elige tu postre favorito: </p>
<p><span style="color:#fedf00;">Cheescake de trufa, guayaba o
Charola de donas</span>  para disfruta en familia.

 </p>
</div>

</div>
	</div>







</div>



</div>

<script src="/js/wow.min.js"></script>
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
</script><script src='/slick/slick.min.js'></script>
<script>
$( window ).on( "load", function() {
new WOW().init();
});

$( document ).on( "ready" , function() {
	
	$('.carouselcomida').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 3000,

	});
	
	$(".postres").click(function(){
		
		$(this).toggleClass("openpostres");
	})

});
					// Fixed Header
		$("body").scroll(function() {
			//alet(w2);
				var value = $(this).scrollTop();
				
				if (value > 10){
				$("body").addClass("scrolled");
				}
				else{
					$("body").removeClass("scrolled");
				}
				
	
		});
		
		$(".arrowdown").click(function(){
			$("body").scrollTop(1000);
		})

</script>









  <!-- Footer =============================-->

  <?php include('footerm.php');?>

