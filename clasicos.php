<?php
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: clasicos-m');
    exit(0);
}
?>
<link rel="stylesheet" href="css/animate.css">
<link rel='stylesheet prefetch' href='slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<script src='https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js'></script>
<script src="/js/jquery.waypoints.js"></script>
<div class="main">



<style>


.resptext {

    width: 100%;

    float: left;

    padding: 0 5% 5% 5%;

    font-family: "Program", sans-serif;

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
	position: relative;
	font-family: "Program",sans-serif;
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


.platillo img {
	width: 100%;
	padding: 0%;
	transition: .35s all ease;
}




.yellow {

	margin-top: 0;

	color: #fddc04;

	line-height: 1;

}



.platillo p {
	margin-top: -10%;
	font-family: "Program",sans-serif;
	color: #111;
	padding: 0 15%;
	font-size: 18px;
}	
.legales {
	font-family: "Program",sans-serif;
	color: #f0f0f0;
	text-align: center;
	font-size: 1.3em;
	padding: 0em 5%;
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	margin-top: 1em;
	z-index: 3;
	position: relative;
	margin-top: 15px !important;
}

.legales:hover{opacity:1; transition:.35s all ease;}

.btns {
	width: 100%;
	text-align: center;
	position: relative;
	float: left;
	margin-top: 20px;
	padding-left: 0%;
	margin-bottom: 5%;
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
	font-family:"Program", sans-serif;
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
	position: absolute;
	margin-top: -44%;
	width: 45%;
	left: 5%;
	float: left;
	padding: 10%;
	top: 0;
	z-index: 5;
}
.pla2 {
	position: absolute;
	top: 0;
	z-index: 2;
	right: 5%;
	width: 47.5%;
	margin-bottom: 0;
	margin-top: -41%;
}
.pla3 {
	position: relative;
	margin-top: -15.5%;
	width: 100%;
	left: 0;
	float: left;
	padding: 0;
	z-index: 4;
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
	margin-top: -7.5%;
	width: 100%;
	left: 0;
	float: left;
	background: url(img/clasicos/fondo_maderaplana);
	background-repeat: no-repeat;
	background-size: cover;
	padding: 5%;
	padding-bottom: 0;
	padding-top: 1%;
}
.imgmain {
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
	margin-top: -30%;
}
.footer{margin-top:-5px;}

.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }

.grow2 { transition: all .35s ease; }
.grow2:hover { transform: scale(1.05); }

.slick-dots li button::before {
	font-family: 'slick';
	font-size: 13px;
	line-height: 20px;
	position: absolute;
	top: 0;
	left: 0;
	width: 10px;
	height: 20px;
	content: '•';
	text-align: center;
	opacity: .25;
	color: black;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button::before {
	opacity: .75;
	color: #ef3249;
}
.pla2 .slick-dots {
	position: absolute;
	bottom: 40%;
	display: block;
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
	transform: rotate(90deg);
	right: -50%;
}

.pla3 p {
	margin-top: 0;
	font-family: "Program";
	color: #504042;
	padding: 0 5%;
	font-size: 20px;
}
#scroll img {
	width: 50px;
	padding: 0;
	margin-top: 5%;
}
.carouseldesayunos a{
	width: 33%;
	display: inline-block;
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
    animation-duration:5s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;

}

@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }    
}


.slick-slide img {
	display: block;
	padding: 5% 10% !important;
}

.yellowb {
	background: #fed639;
	color: #ee2b43;
	font-size: 16px;
	padding: 15px;
	width: auto;
	position: relative;
	display: inline-block;
	font-weight: bold;
	font-size: 18px;
	border-radius: 30px;
}
.postal {
	width: 80%;
	background: #fff;
	margin-left: 10%;
	float: left;
	box-shadow: 1px 4px 31px 0 rgba(0, 0, 0, 0.5);
	padding: 0;
	margin-top: 5%;
}

.burger {
	width: 55%;
	margin-left: -10%;
	float: left;
	position:relative;
}

.textcp {
	width: 55%;
	float: left;
	padding: 5% 5% 5% 10%;
}

.textcp  h3 {
	text-align: right;
	font-size: 20px;
}
.grow.shape2 {
    position: absolute;
    left: 35%;
    z-index: 1;
    width: 70%;
    top: 10%;
    /* transform: translateY(-50%); */
}
.btncp {
	background: #f29100;
	color: #fff;
	width: 80%;
	padding: 15px 10px;
	font-family: "Program",sans-serif;
	text-transform: uppercase;
	font-size: 13px;
	display: inline-flex;
	text-align: center;
	margin-left: 20%;
	float: left;
	cursor: pointer;
	border-radius: 30px;
	font-weight: 500;
}
.btncp  p {
	color: #fff;
	margin: 0;
	width: 100%;
	font-family: "Program", sans-serif;
	padding: 0;
}
#cpclasicos {
	background: url(img/marker.png);
	height: 40px;
	width: 80%;
	margin: 5% 20%;
	border: 1px solid #ccc;
	background-repeat: no-repeat;
	background-size: 30px;
	background-position: 99%;
	padding: 15px;
}

.cap-bot {
	width: 32%;
	float: left;
	list-style: none;
	padding: 0;
	padding: 1%;
	margin: .5%;
	padding-bottom: 0;

}

figure { display: block; position: relative; float: left; overflow: hidden; margin: 0 20px 20px 0; } figcaption { position: absolute; background: black; background: rgba(0,0,0,0.5); color: white; padding: 10px 20px; opacity: 0; -webkit-transition: all 0.6s ease; -moz-transition: all 0.6s ease; -o-transition: all 0.6s ease; } 

figure:hover figcaption { opacity: 1; } 

figure::before {
	content: "+";
	position: absolute;
	font-weight: 800;
	background: black;
	background: rgba(255,255,255,0.4);
	text-shadow: 0 0 5px white;
	color: #666;
	width: 24px;
	height: 24px;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	text-align: center;
	font-size: 14px;
	line-height: 24px;
	-moz-transition: all 0.6s ease;
	opacity: 0;

} figure:hover:before { opacity: 0; } .cap-left:before { bottom: 10px; left: 10px; } .cap-left figcaption { bottom: 0; left: -30%; } .cap-left:hover figcaption { left: 0; } .cap-right:before { bottom: 10px; right: 10px; } .cap-right figcaption { bottom: 0; right: -30%; } .cap-right:hover figcaption { right: 0; } .cap-top:before { top: 10px; left: 10px; } .cap-top figcaption { left: 0; top: -30%; } .cap-top:hover figcaption { top: 0; } .cap-bot::before {

	bottom: 7%;

	left: 5.5%;

}

.cap-bot figcaption {
	bottom: 0%;
	width: 94%;
	margin-left: 0;
	top: 3%;
	left: 3%;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor:pointer;
}
 .cap-bot:hover figcaption { bottom: 0; }


.fa.fa-heart {
	font-size: 80px;
	width: 50%;
	margin: 22%;
	margin-bottom: 2.5%;
}

.votos {
	width: 100%;
	float: left;
	padding: 5%;
}

.votos h2 {
	color: #504042;
	font-size: 30px;
}

#selects {
	width: 100%;
	float: left;
}

#selects p {
	font-size: .8em;
	width: 80%;
	margin: 15px 0;
	padding: 0;
	margin-left: 20%;
}

#vipscercano2 {
	width: 80%;
	margin-left: 20%;
	height: 45px;
	padding: 10px;
	font-size: 14px;
	font-family: inherit;
}
#respuestacl {
	color: #c83a3a;
	text-align: center;
	margin-left: 20%;
	width: 80%;
	float: left;
	padding: 10px;
	display: none;
}

#loader1 {
	background-image: url(/img/banners/loadbanner.gif);
	background-size: 100px;
	background-position: center center;
	background-repeat: no-repeat;
	height: 100px;
	display: none;
}

.fa.fa-heart:hover {
	color: #ee2b43cc;
}

#thumbsimg {
	float: left;
	width: 50%;
	padding: 100px 0;
	display: none;
}

.thumb {
	width: 32%;
	display: inline-block;
	margin: 0;
	margin-bottom: 10px;
}
.thumb img {
	width: 24%;
	vertical-align: middle;
	float: none;
	display: inline-block;
	border-radius: 50%;
	padding: 0;
}
.thumb p {
	width: 65%;
	vertical-align: middle;
	float: none;
	margin: 0;
	font-size: 10px;
	display: inline-block;
	text-align: left;
	padding: 10px;
}
#chart {
	float: left;
	width: 50%!important;
}

.platosleft {
	float: left;
	width: 50%;
	text-align: left;
	padding: 0 5%;
	margin-bottom: 5%;
}
.mapa {
	float: left;
	width: 50%;
	text-align: left;
}

.platoganador {
	width: 100%;
	float: left;
	margin-bottom: 1em;
}
.imgplato {
	width: 50%;
	float: left;
	text-align:center;
}
.chartplato {
	width: 50%;
	float: left;
	text-align:center;
}

.chartplato p {
	margin: 0;
	margin-top: -2.5%;
	font-size: 18px;
}
.imgplato img {
	max-height: 200px;
	width: auto;
}

.progress {
	width: 100%;
	height: auto;
	padding: 5% 25% 5% 20%;
}

.progress > svg {
    width: 100%;
    display: block;
}
.progressbar-text {
	color: #ff1628 !important;
	font-size: 35px;
}

.imgplato p {
	padding: 0 10%;
	margin: 0;
	margin-top: -5%;
	font-size: 14px;
}
.imgplato span {
	color:#000;
	font-size: 16px;
}
#options {
	margin-bottom: 5%;
	float: left;
}

.h2bg {
	color: #504042;
	font-size: 30px;
	padding: 0 10% 0 75px;
	background-image: url(img/clasicos/ganadores.svg);
	background-repeat: no-repeat;
	background-size: 50px;
	background-position: 10px;
	background-position: left top;
}

.subtitle1 {
	margin: 5% 0 !important;
	padding: 0 !important;
	font-family: "Program",sans-serif !important;
	font-weight: 500;
}
.platoganador p {
	width: 100% !important;
	text-align: center !important;
	margin: 0 !important;
	padding: 0 5% !important;
	float: left;
	color: #504042;
}

.platoganador span {
	font-size: 1.25em;
}

.platoganador {
	padding-bottom: 5%;
}

.faqs {
	float: left;
	width: 100%;
	position: relative;
}

.faqs h3 {
	width: 100%;
	float: left;
	text-align: left;
	font-size: 23px;
	cursor:pointer;
	/* color: #ff1628; */
}

.faqs span{ color: #ff1628; font-size:29px;}

.faqs p {
	margin: 0;
	padding: 0;
	text-align: left;
	color: #4a4a4a;
	display: none;
	float: left;
}
</style>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE&amp;libraries=places"></script>
<script type="text/javascript">


	var done = false;
    function sayHello() {
		if(done == false){
		
      // Try HTML5 geolocation.
           if(navigator.geolocation) {
        var fallback = setTimeout(function() { console.log('10 seconds expired'); }, 10000);
        navigator.geolocation.getCurrentPosition(
            function (pos) {
                clearTimeout(fallback);
                console.log('pos', pos);
                var point = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
                new google.maps.Geocoder().geocode({'latLng': point}, function (res, status) {
                    if(status == google.maps.GeocoderStatus.OK && typeof res[0] !== 'undefined') {
						
						function extractFromAdress(components, type){
							for (var i=0; i<components.length; i++)
								for (var j=0; j<components[i].types.length; j++)
									if (components[i].types[j]==type) return components[i].long_name;
							return "";
						}
						
						
											   
						 //alert("The user's zipcode is "+ extractFromAdress(res[0].address_components, "postal_code"));
						 $("#cpclasicos").val( extractFromAdress(res[0].address_components, "postal_code"));
						  var cpuser = extractFromAdress(res[0].address_components, "postal_code");
						   window.cpuser = extractFromAdress(res[0].address_components, "postal_code");
						   console.log(window.cpuser);
						    $("#zona").show();
						   	 $("#platosganadores").load( "ganadorclasicos.php?cp="+ window.cpuser, function() {

							  runCircles();

							});
						 	
						 setTimeout(function(){
							 
							 $(".btncp").trigger("click");
							  $('#mapa').html('<iframe src="/ubicaciones/mapaclasicos.php?latq='+pos.coords.latitude+'&lngq='+pos.coords.longitude+'" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="width:100%; height:90vh; min-height:950px;"></iframe>');
							  
							 
						 },1500);
                   
                    } else {
                       
						 	
						 
                    }
                });
            }, function(err) {
                console.log(err.message);
            }
        );
    }  else {
          // Browser doesn't support Geolocation
      
        }
      

	}
	
	
    }
	
	sayHello();


</script>
<div class="main">

<img src="img/clasicos/fondo-perspectiva.png" class="imgmain" width="100%;">
	<div class="gif">

	<div class="platillo pla1  wow fadeInLeft">

	<img class="grow" src="img/clasicos/logo.png">
	<p class="subtitle1">Clásico que quieres conocer todos los platillos participantes</p>
	<a href="#platillos"><div class="yellowb">COMBÍNALOS COMO QUIERAS</div></a>



	</div>
	
		<div class="platillo pla2  wow bounceInDown" data-wow-offset="200" data-wow-duration="2s" data-wow-delay=".5s">

			<div class="carouselclasicos">
				
						<div>
							<a href="platillo?id=24"><img class="grow2" src="img/clasicos/caldo.png">
							</a>
						</div>
						
						<div>
							<a href="platillo?id=58"><img class="grow2" src="img/clasicos/clasicaqueso.png">
							</a>
						</div>
						
						<div>
							<a href="platillo?id=48"><img class="grow2" src="img/clasicos/enchildassuizas.png">
							</a>
						</div>

						
					
			</div>
			
	



		</div>


	<div class="platillo pla3  wow fadeInUp" data-wow-offset="0" data-wow-delay="1s">

	<div style="display: inline-block; width: 60%; margin:0;"></div>
	<div style="display: inline-block; width: 25%; margin:0; margin-right:14%">		</div>

<a href="#platillos" id="scroll"><img class="grow floating" src="img/clasicos/down-arrow.png"></a>



	</div>



	




	</div>
	
	

	
		
	
	<div class="platillo pla5" id="platillos">

		<div class="carouseldesayunos wow fadeInUp">
		
				<div>
					<a href="https://vips.com.mx/menu/postre/cheesecake-con-fresas" class="floating"><img class="grow" src="img/clasicos/platos/pepitosdepollo.png">
					<p>Pepitos Vips de pollo</p></a>
					
					<a href="https://vips.com.mx/menu/postre/cheesecake-con-fresas"  class="floating2"><img class="grow" src="img/clasicos/platos/Cheescakeconfresas.png">
					<p>Cheesecake con fresas</p></a>
					
					<a href="https://vips.com.mx/menu/comidas-cenas/enchiladas-suizas"  class="floating3"><img class="grow" src="img/clasicos/platos/enchiladassuizas.png">
					<p>Enchiladas suizas</p></a>
					
					<a href="https://vips.com.mx/menu/comidas-cenas/tacos-dorados-de-pollo"  class="floating"><img class="grow" src="img/clasicos/platos/tacosdoradosdepollo.png">
					<p>Tacos dorados de pollo</p></a>
					
					<a href="https://vips.com.mx/menu/comidas-cenas/de-tortilla"  class="floating2"><img class="grow" src="img/clasicos/platos/sopadetortilla.png">
					<p>Sopa de tortilla</p></a>
					
					<a href="https://vips.com.mx/menu/comidas-cenas/especial-vips"  class="floating3"><img class="grow" src="img/clasicos/platos/sopaespecialvips.png">
					<p>Sopa especial Vips</p></a>
					

					
					
					
				</div>
				
				<div>
				
					<a href="https://vips.com.mx/menu/comidas-cenas/caldo-tlalpeno"  class="floating"><img class="grow" src="img/clasicos/platos/caldotlalpeno.png">
					<p>Caldo tlalpeño</p></a>
					
					<a href="https://vips.com.mx/menu/postre/crepas-de-cajeta"  class="floating2"><img class="grow" src="img/clasicos/platos/crepasdecajeta.png">
					<p>Crepas de cajeta</p></a>
					
					<a href="https://vips.com.mx/menu/desayuno/de-mole"  class="floating3"><img class="grow" src="img/clasicos/platos/enchiladasdemole.png">
					<p>Enchiladas de mole</p></a>
					
					<a href="https://vips.com.mx/menu/comidas-cenas/vips-clasica-con-queso"  class="floating"><img class="grow" src="img/clasicos/platos/Vipsclasicaconqueso.png">
					<p>Vips clásica con queso</p></a>
					
					<a href="https://vips.com.mx/menu/comidas-cenas/vips-club"  class="floating2"><img class="grow" src="img/clasicos/platos/vipsclub.png">
					<p>Vips club</p></a>

					<a href="https://vips.com.mx/menu/comidas-cenas/molletes-vips"  class="floating2"><img class="grow" src="img/clasicos/platos/05_MolletesTradicionales.png">
					<p>Molletes Tradicionales</p></a>
					


			</div>



	</div>
	
	<div class="postal wow fadeInUp">
		<div class="burger">
			<img class="grow floating" src="img/clasicos/burger3.png" style="z-index: 3; position: relative; padding: 5%;">
			<img class="grow shape2 floating2" src="img/clasicos/shape2.svg">
		</div>
		
		<div class="textcp">
		<h3>Escribe tu código postal aquí para que puedas votar y conocer cuáles son los clásicos más queridos cerca de ti</h3>
		<input placeholder="Ingresa tu C.P." name="cpclasicos" id="cpclasicos"></input>
		<div class="btncp"><p>Ver Vips cercanos</p></div>
		<div id="respuestacl">Ingresa tu código postal</div>
		<div id="selects"></div>
		

		</div>
	
	</div>
	
	<div class="votos wow fadeInUp">
	
		<h2>¿Cuál de todos los deliciosos <span style="color:#ff1628;">clásicos</span> es tu favorito?</h2>
	<div id="loader1"></div>
	<div id="thumbsimg">

		<div class="thumb">
		<img src="img/clasicos/votos/vipsclub.jpg" alt="" style="border: 6px solid #763295;">
		<p>Vips Club</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/sopaespecial.jpg" alt="" style="border: 6px solid #297A6A;">
		<p>Sopa especial Vips</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/pepitos.jpg" alt="" style="border: 6px solid #24246B;">
		<p>Pepitos Vips de pollo</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/caldo.jpg" alt="" style="border: 6px solid #A46537;">
		<p>Caldo Tlalpeño</p>	
		</div>

		
		<div class="thumb">
		<img src="img/clasicos/votos/tacos.jpg" alt="" style="border: 6px solid #C8DF9F;">
		<p>Tacos dorados de pollo</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/suizas.jpg" alt="" style="border: 6px solid #C44F8E;">
		<p>Enchiladas Suizas</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/cheesecake.jpg" alt="" style="border: 6px solid #0A87A4;">
		<p>Cheescake con fresas</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/burger.jpg" alt="" style="border: 6px solid #B6B83D;">
		<p>Vips clásica con queso</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/crepas.jpg" alt="" style="border: 6px solid #E6B3C9;">
		<p>Crepas de cajeta</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/mole.jpg" alt="" style="border: 6px solid #79BED2;">
		<p>Enchiladas de mole</p>	
		</div>

		<div class="thumb">
		<img src="img/clasicos/votos/Molletes.png" alt="" style="border: 6px solid #00b7a4;">
		<p>Molletes tradicionales</p>	
		</div>


	
	</div>

	
	<div id="chart" style="float:left; width:100%;"></div>
	
	<div id="options">
	
	<figure class="cap-bot wow fadeInUp" data-plato="Vips Club"><img src="img/clasicos/votos/vipsclub.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Vips Club</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp" data-plato="Sopa especial Vips"><img src="img/clasicos/votos/sopaespecial.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Sopa especial Vips</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp" data-plato="Pepitos Vips de pollo"><img src="img/clasicos/votos/pepitos.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Pepitos Vips de pollo</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp" data-plato="Caldo Tlalpeño"><img src="img/clasicos/votos/caldo.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Caldo Tlalpeño</span>
		</figcaption>
	</figure>


	<figure class="cap-bot wow fadeInUp" data-plato="Tacos dorados de pollo"><img src="img/clasicos/votos/tacos.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Tacos dorados de pollo</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp" data-plato="Enchiladas Suizas"><img src="img/clasicos/votos/suizas.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Enchiladas Suizas</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp" data-plato="Cheescake con fresas"><img src="img/clasicos/votos/cheesecake.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Cheescake con fresas</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp" data-plato="Vips clásica con queso"><img src="img/clasicos/votos/burger.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Vips clásica con queso</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp" data-plato="Crepas de cajeta"><img src="img/clasicos/votos/crepas.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Crepas de cajeta</span>
		</figcaption>
	</figure>

	<figure class="cap-bot wow fadeInUp"  style="margin-left: 33.5%;" data-plato="Enchiladas de mole" ><img src="img/clasicos/votos/mole.jpg" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Enchiladas de mole</span>
		</figcaption>
	</figure>
	
		<figure class="cap-bot fadeInUp" data-plato="Molletes tradicionales"><img src="img/clasicos/votos/Molletes.png" alt="">
		<figcaption><br>
		<span><i class="fa fa-heart"></i></span><span>Vota por <br>Molletes tradicionales</span>
		</figcaption>
	</figure>
	
	
	</div>
	<div id="platoscroll" style="width:100%; float:left; height:1px;"></div>
	

	</div>


	<div class="votos wow fadeInUp" style="padding:0; width: 110%; margin-left: -5%; display:none;" id="zona">
		<div class="platosleft">
	
	<h2 class="h2bg">Estos son<span style="color:#ff1628;"> los clásicos</span> más votados en tu zona</h2>
		<div id="platosganadores"></div>


	</div>
	<div class="mapa" id="mapa">
	
	</div>


	</div>
	
	<h2 class="h2bg" googl="true" style="float: left; text-align: left; font-size: 35px; padding-right: 0;">Y por si tenías curiosidad, estos son los clásicos favoritos alrededor de todo México</h2>
	
	<iframe src="/mapclasicos.php" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="width: 115%; height: 90vh; min-height: 550px; margin-left: -6%;"></iframe>
	
	
		<h2 class="redfaqs" googl="true" style="float: left; text-align: left; font-size: 35px; padding-right: 0; color: #ff1628;">Preguntas frecuentes sobre Clásicos 2x1 <img src="img/clasicos/question.svg" style="width:28px;"></h2>
		
		<div class="faqs">
		
		<h3 data-text="faq1">1. ¿ Las sopas medianas y grandes entran en esta promoción? <span>+</span></h3>
		<p id="faq1">Si aplica en caldo tlalpeño, sopa especial Vips y sopa de tortilla en medianas y grandes, por ejemplo: el invitado pidió un caldo tlalpeño mediano y unas enchiladas de mole. ¿Puede aplicar el 2x1? Sí</p>

		<h3 data-text="faq2">2. ¿ Puede el invitado aplicar más de una promoción por cuenta y ticket? <span>+</span></h3>
		<p id="faq2">Sí, por ejemplo: si en una mesa tiene más de 3 invitados y sólo piden la promoción Clásicos 2x1 y el tercer invitado quiere usar su TDL; sí aplica.</p>
		
		
		<h3 data-text="faq3">3. Si un invitado viene solo ¿aplica la promoción? <span>+</span></h3>
		<p id="faq3">Sí, por ejemplo: el invitado que viene solo puede solicitar con caldo tlalpeño y unos tacos dorados (en este caso se cobra el platillo de mayor precio).</p>
		
		</div>
	




<div class="btns wow fadeInUp">
<a href="ubicaciones" class="btnubica grow"><img src="https://vips.com.mx/img/2019/desayunos79/Boton.png"></a>
<p class="legales">

<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>

	</p>

</div>





</div>



</div>



<script src="js/wow.min.js"></script>
<script src='slick/slick.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.js'></script>

<script>


$( window ).on( "load", function() {

  new WOW().init();
});


$( document ).on( "ready" , function() {
	
var animada = false;	
	
var waypoint = new Waypoint({
  element: document.getElementById('platoscroll'),
  handler: function(direction) {
	  if(animada == false){
	 $("#platosganadores").load( "ganadorclasicos.php?cp="+ window.cpuser, function() {

							  runCircles();

							});
	  }
						 
	done = true;
	animada = true;
  }

})



	$('.carouselclasicos').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 5500,

	});

	$('.carouseldesayunos').slick({

		infinite: true,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 10000,

	});






});

$(".cap-bot").click(function(){
	$(".cap-bot").css("pointer-events", "none");
	var codigo = $("#cpclasicos").val();
	var vips = $("#vipscercano2").val();
	var opcion = $(this).attr("data-plato");
	$("#options").slideUp(500);
	$.ajax({	
		type: "GET",
		dataType: 'html',
		url: "votoclasicos.php",
		data: "cp="+codigo+"&vips="+vips+"&opcion="+opcion,
            success:function(data){
				setTimeout(function() {
                $("#chart").load("chart.php");
				$("#thumbsimg").slideDown(500);
				$(".votos h2").html('Estos son los <span style="color:#ff1628;" googl="true">clásicos</span> favoritos de la gente en tu área');
				$("#chart").slideDown(700);
				myChart.update();
				myChart.defaults.global.legend.display = false;
				}, 600);
            }

    });	
});




	

$(".btncp").click(function(){
	$("#respuesta").hide();
	var cp = $("#cpclasicos").val();
	if(cp ==''){
		$("#respuestacl").slideDown(400);
	}
	else{
	$("#respuestacl").hide();	
	$("#selects").load("vipscercanos.php?cp="+cp);
	$("#selects").slideDown(700);
	}

})

<?php 
if(isset($_COOKIE['persistVoto']))
{?>
$(".postal").hide();
$("#options").hide();

setTimeout(function() {
$("#chart").load("chart.php");
$("#thumbsimg").slideDown(500);
$(".votos h2").html('Estos son los <span style="color:#ff1628;" googl="true">clásicos</span> favoritos de la gente en tu área');
$("#chart").slideDown(700);
myChart.update();
myChart.defaults.global.legend.display = false;
}, 600);


   

<?php
}
?>

function runCircles(){

var startColor = '#ccc';
var endColor = '#ff1628';

$('.progress').each(function(i) {
    var circle = new ProgressBar.Circle(this, {
	    color: startColor,
	    easing: 'linear',
	    strokeWidth: 12,
		trailWidth: 1,
		trailColor:'#ccc',
	    duration: 1900,
	    text: {
	        value: '0'
	    }
	});
    
    var value = ($(this).attr('value') / 100);

	circle.animate(value, {
	    from: {
	        color: endColor,
			width: 1,
			trailWidth: 1
	    },
	    to: {
	        color: endColor, 
			width: 13,
			trailWidth: 1
	    },
	    step: function(state, circle, bar) {
	        circle.path.setAttribute('stroke', state.color);
	        console.log(circle);
	        circle.setText((circle.value() * 100).toFixed(0) + '%');
	    }
	});
});

}


$(".faqs h3").click(function(){
	var text = "#" + $(this).attr("data-text");
	$(".faqs p").hide();
	$(".faqs h3 span").text("+");
	$(this).find("span").text("-");
	$(text).slideDown(500);
	
	
});
</script>




<!-- Footer =============================-->
<?php include('footer.php');?>
