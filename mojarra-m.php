<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /mojarra');

  exit(0);

}

?>
<link rel="stylesheet" href="css/animate.css">
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
 <script type="text/javascript" src="js/raphael.min.js"></script>
 
    <script type="text/javascript" src="js/wheelnav.min.js"></script>
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

.pla1 img:hover{width:100%;  padding:0%; transition:.35s all ease;}



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
	margin-top: -6%;
	width: 100%;
	right: 0;
	float: right;
	padding: 0% 15%;
}
.pla2 {
	position: fixed;
	bottom: -122px;
	z-index: 77;
	left: 0;
	margin-bottom: 0;
	padding: 0;
	width: 100%;
	text-align: center;

	
}
.pla3 {
	position: absolute;
	margin-top: 0;
	width: 310px;
	height: 310px;
	background: #1b87df66;
	z-index: 1;
	border-radius: 50%;
	bottom: -5vh;
	margin-left: -455px;
	display: inline-block;
	top: 150px;
}
.pop {
	position: absolute;
	margin-top: 0;
	width: 100%;
	right: 0;
	float: right;
	height: 100%;
	padding: 0;
	display: none;
	top: 15vh;
	z-index: 88;
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

.logomojarra {
	padding: 0;
	margin-top: 20vh;
	padding-bottom: 0;
	max-width: 300px;
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



#wheelDiv {
	height: 600px;
	width: 600px;
	margin: auto 0;
	margin-left: -302px;
	margin: 0 auto;
	z-index:8;
	position:relative;
	display: inline-block;
}
        #wheelDiv>svg {
            height: 100%;
            width: 100%;
        }
		
path2{

	stroke: #fff;
	stroke-width: 3px;
}
tspan {
	color: #fff !important;
	fill: #fff;
	 cursor: pointer;
	 pointer-events:none;
}

.closebtn2 {
	background: url(img/close.png);
	width: 30px;
	height: 30px;
	position: absolute;
	right: 5%;
	top: 3%;
	background-size: 100%;
	cursor: pointer;
}

.pop img {
	width: 100%;
	padding: 0;
	transition: .35s all ease;
}
#wheelnav-wheelDiv-slice-0, #wheelnav-wheelDiv-slice-1, #wheelnav-wheelDiv-slice-2, #wheelnav-wheelDiv-slice-3, #wheelnav-wheelDiv-slice-4, #wheelnav-wheelDiv-slice-5{cursor:pointer!important;}


        @media (max-width: 600px) {
			.pla1 {
	position: relative;
	margin-top: -6%;
	width: 100%;
	right: 0;
	float: right;
	padding: 0% 5%;
}
            #wheelDiv {
                height: 350px;
                width: 350px;
            }
.pla3 {
	position: absolute;
	margin-top: 0;
	width: 180px;
	height: 180px;
	background: #1b87df66;
	z-index: 1;
	border-radius: 50%;
	margin-left: -270px;
	display: inline-block;
	top: 83px;
}
		
        }

        @media (max-width: 400px) {
            #wheelDiv {
                height: 300px;
                width: 300px;
				margin-left: 0;
            }
.pla3 {
	position: absolute;
	margin-top: 0;
	width: 170px;
	height: 170px;
	background: #1b87df66;
	z-index: 1;
	border-radius: 50%;
	bottom: -5vh;
	margin-left: -226px;
	display: inline-block;
	top: 62px;
}
        }
	


.wow{visibility:hidden;}
.slick-prev {
	left: -5px;
	z-index: 66;
}
.relcont {
	position: relative;
	width: 100%;
	height: auto;
}
.abcont {
	width: 100%;
	position: absolute;
	height: 100%;
	top: 0;
}

.number {
	border-radius: 50%;
	color: #001331;
	background: #fff;
	width: 30px;
	height: 30px;
	line-height: 30px;
	cursor: pointer;
	z-index: 4;
	transition: .35s all ease;
	font-size: 15px;
	font-family: "Moreno", sans-seirf;
}
.number:hover {
	color: transparent;
	background-color: #001331;
	background-size: 50%;
	background-repeat: no-repeat;
	background-position: center;
	transform: scale(1.3);
	transition: .35s all ease;
}

.number.n1 {
	position: absolute;
	left: 20%;
	top: 38%;
}
.number.n1:hover {
	background-image: url(img/mojarra/IconoMojarra1.png);
}

.number.n2 {
	position: absolute;
	left: 41%;
	top: 28%;
}
.number.n2:hover {
	background-image: url(img/mojarra/IconoMojarra2.png);
}

.number.n3 {
	position: absolute;
	left: 45%;
	top: 45%;
}

.number.n3:hover {
	background-image: url(img/mojarra/IconoMojarra3.png);
}


.number.n4 {
	left: 77%;
	top: 40%;
	position: absolute;
}

.number.n4:hover {
	background-image: url(img/mojarra/IconoMojarra4.png);
}


.innertext {
	display:none;
	background: #fff;
	color: #001331;
	font-size: 12px;
	padding: 10px;
	border-radius: 10px;
	font-family: "AmsiProNarw", sans-serif;
	text-align: right;
	padding-right: 40px;
	position: absolute;
	z-index: 3;
}

.innertext.it1 {
	width: 170px;
	top: 45.2%;
	left: 32%;
	padding-right: 20px;
}

.innertext.it2 {
	width: 170px;
	top: 33%;
	left: 42%;
}


.innertext.it3 {
	width: 170px;
	top: 62.2%;
	left: 46%;
}

.innertext.it4 {
	width: 140px;
	top: 50.2%;
	left: 75%;
	padding-right: 20px;
}

.pla6 .number:hover{background-color:#19669b}

.pla6 .number.n1 {
	position: absolute;
	left: 19%;
	top: 34%;
}
.pla6 .number.n1:hover {
	background-image: url(img/mojarra/IconoCalidad1.png);
}
.pla6 .number.n2 {
	position: absolute;
	left: 40%;
	top: 30%;
}
.pla6 .number.n2:hover {
	background-image: url(img/mojarra/IconoCalidad2.png);
}
.pla6 .number.n3 {
	position: absolute;
	left: 38%;
	top: 43%;
}

.pla6 .number.n3:hover {
	background-image: url(img/mojarra/IconoCalidad3.png);
}

.pla6 .number.n4 {
	left: 50%;
	top: 39%;
	position: absolute;
}
.pla6 .number.n4:hover {
	background-image: url(img/mojarra/IconoCalidad4.png);
}

.pla6 .number.n5 {
	position: absolute;
	top: 38%;
	left: 67%;
}

.pla6 .number.n5:hover {
	background-image: url(img/mojarra/IconoCalidad5.png);
}

.pla6 .innertext.it1 {
	width: 120px;
	top: 54.2%;
	left: 40%;
	padding-right: 20px;
}

.pla6 .innertext.it2 {
	width: 160px;
	top: 38.2%;
	left: 50%;
	padding-right: 20px;
}

.pla6 .innertext.it3 {
	width: 180px;
	top: 51%;
	left: 68%;
	text-align: left;
	padding-right: 10px;
	padding-left: 20px;
}

.pla6 .innertext.it4 {
	width: 140px;
	top: 45.2%;
	left: 31%;
	padding-right: 20px;
}

.pla6 .innertext.it5 {
	top: 75.5%;
	left: 45%;
	padding-right: 20px;
	padding-left: 30px;
}

.pla7 .number:hover{background-color:#0050a2}
.pla7 .number.n1 {
	position: absolute;
	left: 39%;
	top: 37%;
}
.pla7 .number.n1:hover {
	background-image: url(img/mojarra/IconoMedioAmbiente1.png);
}
.pla7 .number.n2 {
	position: absolute;
	left: 50%;
	top: 50%;
}
.pla7 .number.n2:hover {
	background-image: url(img/mojarra/IconoMedioAmbiente2.png);
}

.pla7 .innertext.it1 {
	width: 200px;
	top: 45.2%;
	left: 44%;
	padding-right: 20px;
	padding-left: 20px;
}

.pla7 .innertext.it2 {
	width: 180px;
	top: 66.2%;
	left: 54%;
	padding-right: 20px;
	padding-left: 20px;
}

.pla8 .number:hover{background-color:#24adf7}
.pla8 .number.n1 {
	position: absolute;
	left: 33%;
	top: 28%;
}
.pla8 .number.n1:hover {
	background-image: url(img/mojarra/IconoBalance1.png);
}
.pla8 .number.n2 {
	position: absolute;
	left: 57%;
	top: 30%;
}
.pla8 .number.n2:hover {
	background-image: url(img/mojarra/IconoBalance2.png);
}

.pla8 .number.n3 {
	position: absolute;
	left: 27%;
	top: 54%;
}
.pla8 .number.n3:hover {
	background-image: url(img/mojarra/IconoBalnace3.png);
}
.pla8 .number.n4 {
	position: absolute;
	left: 62%;
	top: 53%;
}
.pla8 .number.n4:hover {
	background-image: url(img/mojarra/IconoBalance4.png);
}

.pla8 .innertext.it1 {
	width: 200px;
	top: 33.2%;
	left: 37%;
	padding-right: 20px;
	padding-left: 10px;
}
.pla8 .innertext.it2 {
	width: 180px;
	top: 42.1%;
	left: 56%;
	padding-right: 20px;
	padding-left: 20px;
}

.pla8 .innertext.it3 {
	width: 220px;
	top: 75%;
	left: 31.5%;
	padding-right: 20px;
	padding-left: 20px;
}

.pla8 .innertext.it4 {
	width: 180px;
	top: 58.2%;
	left: 66%;
	padding-right: 20px;
	padding-left: 20px;
}



.pla9 .number:hover{background-color:#66c3e5}
.pla9 .number.n1 {
	position: absolute;
	left: 47%;
	top: 30%;
}
.pla9 .number.n1:hover {
	background-image: url(img/mojarra/IconoMexico1.png);
}
.pla9 .number.n2 {
	position: absolute;
	left: 40%;
	top: 49%;
}
.pla9 .number.n2:hover {
	background-image: url(img/mojarra/IconoMexico2.png);
}

.pla9 .innertext.it1 {
	width: 200px;
	top: 46%;
	left: 50%;
	padding-right: 20px;
	padding-left: 20px;
}

.pla9 .innertext.it2 {
	width: 180px;
	top: 69%;
	left: 44%;
	padding-right: 20px;
	padding-left: 20px;
}

.imgtext {
	position: absolute;
	left: 5%;
	width: 90% !important;
	bottom: 10%;
	display:none;
}
</style>
 <script type="text/javascript">
$( document ).on( "ready" , function() {
	$("body").on("touchstart", "#wheelnav-wheelDiv-slice-0", function(){
			click0();
	})	
	$("body").on("touchstart", "#wheelnav-wheelDiv-slice-1", function(){
			click1();
	})	
	$("body").on("touchstart", "#wheelnav-wheelDiv-slice-2", function(){
			click2();
	})	
	$("body").on("touchstart", "#wheelnav-wheelDiv-slice-3", function(){
			click3();
	})	
	$("body").on("touchstart", "#wheelnav-wheelDiv-slice-4", function(){
			click4();
	})	
	
	$("body").on("touchstart", "#wheelnav-wheelDiv-slice-5", function(){
			click5();
	})	
	
	
function click0(){	
	$(".pop").fadeOut(200);
	$(".pla4").fadeIn(600);
	$("path").css("fill", "#001331");
	$(".pla2").css("pointer-events", "none");
	setTimeout(function(){
		$(".pla2").css("pointer-events", "inherit");
	},1000);
	$("#wheelnav-wheelDiv-slice-0").css("fill", "#2783af");


}

function click1(){	
	$(".pop").fadeOut(200);
	$(".pla5").fadeIn(600);
	$("path").css("fill", "#001331");
	$(".pla2").css("pointer-events", "none");
	setTimeout(function(){
		$(".pla2").css("pointer-events", "inherit");
	},1000);
	$("#wheelnav-wheelDiv-slice-1").css("fill", "#2783af");


}
function click2(){	
	$(".pop").fadeOut(200);
	$(".pla6").fadeIn(600);
	$("path").css("fill", "#001331");
	$(".pla2").css("pointer-events", "none");
	setTimeout(function(){
		$(".pla2").css("pointer-events", "inherit");
	},1000);
	$("#wheelnav-wheelDiv-slice-2").css("fill", "#2783af");


}

function click3(){	
	$(".pop").fadeOut(200);
	$(".pla7").fadeIn(600);
	$("path").css("fill", "#001331");
	$(".pla2").css("pointer-events", "none");
	setTimeout(function(){
		$(".pla2").css("pointer-events", "inherit");
	},1000);
	$("#wheelnav-wheelDiv-slice-3").css("fill", "#2783af");


}
function click4(){	
	$(".pop").fadeOut(200);
	$(".pla8").fadeIn(600);
	$("path").css("fill", "#001331");
	$(".pla2").css("pointer-events", "none");
	setTimeout(function(){
		$(".pla2").css("pointer-events", "inherit");
	},1000);
	$("#wheelnav-wheelDiv-slice-4").css("fill", "#2783af");


}

function click5(){	
	$(".pop").fadeOut(200);
	$(".pla9").fadeIn(600);
	$("path").css("fill", "#001331");
	$(".pla2").css("pointer-events", "none");
	setTimeout(function(){
		$(".pla2").css("pointer-events", "inherit");
	},1000);
	$("#wheelnav-wheelDiv-slice-5").css("fill", "#2783af");


}






});
        window.onload = function () {
		
		var wheel = new wheelnav('wheelDiv');
				
				wheel.slicePathFunction = slicePath().DonutSlice;


wheel.colors = ['#001331'];
//wheel.markerEnable = true;


				//wheel.sliceSelectedTransformFunction = sliceTransform().MoveMiddleTransform;
				wheel.titleRotateAngle = 90;

				wheel.titleFont = '400 10px "AmsiProNarw", sans-serif';
				wheel.titleColor = ['#001331'];
				wheel.sliceAngle = 59.2;
				wheel.sliceInitPathFunction = wheel.slicePathFunction;
				wheel.initPercent = 0.1;
				

wheel.slicePathCustom = slicePath().DonutSliceCustomization();
wheel.slicePathCustom.minRadiusPercent = 0.5;
wheel.slicePathCustom.maxRadiusPercent =0.9;
wheel.sliceSelectedPathCustom = wheel.slicePathCustom;
wheel.sliceInitPathCustom = wheel.slicePathCustom;


				//wheel.wheelRadius = wheel.wheelRadius * 0.83;
				//wheel.wheelRadius = 620; // Positioning second title
				
				wheel.createWheel(["Certificaciones", "Mojarra", "Calidad", "Medio Ambiente", "Balance", "México"]);
				
				wheel.navigateWheel(0);
				

            //var wheel = new wheelnav("wheelDiv");

            //This is the place for code snippets from the documentation -> http://wheelnavjs.softwaretailoring.net/documentation.html

            //wheel.createWheel(["La", "Loba", "Thank you", "for", "download", icon.fave]);
            //wheel.navigateWheel(2);

            //Insert generated JavaScript code from here -> http://pmg.softwaretailoring.net

        };

    </script>


<div class="main">

<img src="img/mojarra/Fondom.png" class="imgmain" width="100%;" style="min-height:100vh;">
	<div class="gif">
	
<img src="img/mojarra/LogoMojarra.png" class="imgmain logomojarra  wow fadeInDown" width="100%;">

	<div class="platillo pla1  wow fadeInDown " data-wow-offset="200" data-wow-delay="0s">
	
	

	<div class="carousel1">
		
				<div>
					<a ><img src="img/mojarra/platos/FileteDeMojarraAlPesto.png">
					</a>
				</div>
				
				<div>
					<a ><img src="img/mojarra/platos/FiletedeMojarraALaPlancha.png">
					</a>
				</div>

				<div>
					<a ><img src="img/mojarra/platos/FiletedeMojarraAlAjillo.png">
					</a>
				</div>
				
				
				<div>
					<a ><img src="img/mojarra/platos/FiletedeMojarraenSalsadeCilantro.png">
					</a>
				</div>

				
	
			
			</div>



	</div>

	<div class="platillo pla2  wow fadeInUp">

	 <div id="wheelDiv"  data-wheelnav data-wheelnav-slicepath='DonutSlice'  data-wheelnav-navangle='180' data-wheelnav-marker data-wheelnav-markerpath='PieLineMarker'></div>


		<div class="platillo pla3">

	</div>

	</div>




	<div class="platillo pla4 pop">
	
	
		<div class="relcont">
		<img src="img/mojarra/m/PopCertificaciones1.png" style="" googl="true">
	<div class="abcont">
			
			<img src="img/mojarra/m/PopCertificacionesTexto.png" class="imgtext" style="display:block;">
	</div>
	

	</div>
	<div class="closebtn2"></div>

	</div>

	
	<div class="platillo pla5 pop">
	<div class="relcont">
		<img src="img/mojarra/m/PopMojarra.png" style="" googl="true">
	<div class="abcont">
		
			<div class="number n1" data-img="PlecaMojarra1.png">1</div>
			<div class="innertext it1">	&#8226; Libre de antibióticos</div>
			
			<div class="number n2"  data-img="PlecaMojarra2.png">2</div>
			<div class="innertext it2">&#8226; 100% Natural	</div>

			<div class="number n3"  data-img="PlecaMojarra3.png">3</div>
			<div class="innertext it3">	&#8226; Sin mercurio</div>


			<div class="number n4"  data-img="PlecaMojarra4.png">4</div>
			<div class="innertext it4">	&#8226; Sustentable</div>
			
			<img src="" class="imgtext imgdinamica">
	</div>
	

	</div>


	
	<div class="closebtn2"></div>

	</div>

	<div class="platillo pla6 pop">
	
		<div class="relcont">
		<img src="img/mojarra/m/PopCalidad.png" style="" googl="true">
	<div class="abcont">
		
			<div class="number n1"  data-img="PlecaCalidad1.png">1</div>
			<div class="innertext it1">	&#8226; Frescura</div>
			
			<div class="number n2"  data-img="PlecaCalidad2.png">2</div>
			<div class="innertext it2">&#8226; Libre de aditivos</div>

			<div class="number n3"  data-img="PlecaCalidad3.png">3</div>
			<div class="innertext it3">	&#8226; Con cubiera de glaze para reducir la oxidación</div>


			<div class="number n4"  data-img="PlecaCalidad4.png">4</div>
			<div class="innertext it4">	&#8226; Sin químicos</div>

			<div class="number n5"  data-img="PlecaCalidad5.png">5</div>
			<div class="innertext it5">	&#8226; Sin conservadores</div>
			
			<img src="" class="imgtext imgdinamica">

		</div>
	</div>
	<div class="closebtn2"></div>

	</div>

	<div class="platillo pla7 pop">

			<div class="relcont">
			<img src="img/mojarra/m/PopMedioAmbiente.png" style="" googl="true">
	<div class="abcont">
		
			<div class="number n1"  data-img="PlecaMedioAmbiente1.png">1</div>
			<div class="innertext it1">	&#8226; Política de cero desperdicio, aprovechando la mojarra al 100%</div>
			
			<div class="number n2" data-img="PlecaMedioAmbiente2.png">2</div>
			<div class="innertext it2">&#8226; Programa de cría responsable certificado.<br>El primer programa de sustentabilidad en cultivo de pescado blanco del mundo.</div>
			
			<img src="" class="imgtext imgdinamica">

			
		</div>
	</div>
	<div class="closebtn2"></div>

	</div>

	<div class="platillo pla8 pop">

			<div class="relcont">
			<img src="img/mojarra/m/PopBalance.png" style="" googl="true">
	<div class="abcont">
		
			<div class="number n1" data-img="PlecaBalance1.png">1</div>
			<div class="innertext it1">	&#8226; Segunda opción más popular de pescado en México</div>
			
			<div class="number n2" data-img="PlecaBalance2.png">2</div>
			<div class="innertext it2">&#8226; Fuente de proteína y baja en grasas</div>

			<div class="number n3" data-img="PlecaBalance3.png">3</div>
			<div class="innertext it3">	&#8226; Accesible durante todo el año</div>


			<div class="number n4" data-img="PlecaBalance4.png">4</div>
			<div class="innertext it4">	&#8226; Por su sabor permite incluirla como proteína en cualquier platillo.</div>
			
			<img src="" class="imgtext imgdinamica">

	
		</div>
	</div>
	<div class="closebtn2"></div>

	</div>

	<div class="platillo pla9 pop">

	<div class="relcont">
				<img src="img/mojarra/m/PopMexico.png" style="" googl="true">
	<div class="abcont">
		
			<div class="number n1" data-img="PlecaMexico1.png">1</div>
			<div class="innertext it1">	&#8226; Real Springs desde hace 11 años en México</div>
			
			<div class="number n2" data-img="PlecaMexico2.png">2</div>
			<div class="innertext it2">&#8226; La mojarra vive en la Reserva "El Ocote"</div>
			
			<img src="" class="imgtext imgdinamica">

			
		</div>
	</div>
	<div class="closebtn2"></div>

	</div>




	</div>






</div>



</div>



<script src="js/wow.min.js"></script>
</script><script src='slick/slick.min.js'></script>

<script>
function checkVariable(){
   if ( window.jQuery){
     new WOW().init();
	 $("#wheelDiv").css("transform", "rotate(90deg)");
   }
   else{
      window.setTimeout("checkVariable();",100);
   }
}
checkVariable();

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


$("body").on("click", ".number", function(){
	$(".imgdinamica").fadeIn(300);
	var img = $(this).attr("data-img");
	$(".imgdinamica").attr("src", "img/mojarra/m/"+img);
	setTimeout(function(){
		$(".imgdinamica").fadeIn(600);
	},600);
	
});


$(".closebtn2").click(function(){
	
	$(".pop").fadeOut(600);
	$(".imgdinamica").fadeOut(600);
})

</script>



  <!-- Footer =============================-->

  <?php include('footerm.php');?>

