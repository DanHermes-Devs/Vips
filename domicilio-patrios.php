  <?php
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
	//header("Location: /perfil");
}
include('header-bootstrap.php');
?>
<link rel="stylesheet" href="/css/animate.css">
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>

<style>
@font-face {
    font-family: 'Museo 900';
    src: url('/css/fonts/museo/Museo900-Regular.woff2') format('woff2'),
        url('/css/fonts/museo/Museo900-Regular.woff') format('woff'),
        url('/css/fonts/museo/Museo900-Regular.ttf') format('truetype'),
        url('/css/fonts/museo/Museo900-Regular.svg#Museo-900') format('svg');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Museo 700';
    src: url('/css/fonts/museo/Museo-700.woff2') format('woff2'),
        url('/css/fonts/museo/Museo-700.woff') format('woff'),
        url('/css/fonts/museo/Museo-700.ttf') format('truetype'),
        url('/css/fonts/museo/Museo-700.svg#Museo-700') format('svg');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Museo 500';
    src: url('/css/fonts/museo/Museo-500.woff2') format('woff2'),
        url('/css/fonts/museo/Museo-500.woff') format('woff'),
        url('/css/fonts/museo/Museo-500.ttf') format('truetype'),
        url('/css/fonts/museo/Museo-500.svg#Museo-500') format('svg');
    font-weight: 500;
    font-style: normal;
}
body {
	background-color: #fff;
}

*{outline:0; box-sizing:border-box;}

.dayp2 {
	width: 100%;
	float: left;
	position: relative;
	height: 450px;
	overflow: visible;
	z-index: 2;
}
.greencircle {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Ovalo-banner-daypart2-min.png);
	position: absolute;
	height: 100%;
	background-size: 150%;
	background-position: 50% 105%;
	background-repeat: no-repeat;
}
.platochile {
	position: absolute;
	width: 30%;
	right: -5%;
	float: right;
	overflow: visible;
	text-align: center;
	bottom: -15%;
}
.carouselpatrios {
	width: 50%;
	float: left;
}

.slick-slide img {
	display: block;
	width: 100%;
	padding: 0% 10% 5%;
}
.logonew {
	width: 30% !important;
	margin: 0 35%;
}
.footer {
	margin-top: 5%;
}
.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }
.floating {
    animation-name: floating;
    animation-duration: 3.5s;
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
    animation-duration:6s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}

@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 8px); }
    to   { transform: translate(0, -0px); }
}
.overflowhidden{overflow:hidden;}
.slick-slide {
	text-align: center;
}
.titleplato {
	font-family: "Museo 700",sans-serif !important;
	font-size: 24px !important;
	margin-top: -2.5% !important;
	margin-bottom: 0;
}
.carouselpatrios .titleplato {
	color: #0b623b;
}
.calsplato {
	font-family: "Museo 500",sans-serif !important;
	font-size: 20px !important;
}
.carouselpatrios .calsplato {
	color:#222;
}

.descplato {
	color: #222;
	padding: 0 15%;
	font-size: 15px;
	line-height: 1.2;
}
.slick-dots {
	bottom: -5%;
}
.scrolled .main {
	margin-top: 70px;
	transition: all .4s ease;
	position: relative;
}
main {
	width: 100%;
	overflow-x: hidden;
	overflow-y: hidden;
}
.desktop{display:block!important;}
.mobile{display:none!important;}
.textopatrios {
	text-align: center;
	padding: 2.5%;
}
.titulopatrios {
	width: 40%;
	max-width: 500px;
}
.textopatrios h1 {
	color: #feea34;
	font-size: 35px;
	text-align: center;
	padding: 2.5% 25%;
	font-weight: 500;
	margin: 0;
	display: inline-block;
	font-family: "Program",sans-serif;
}

.textopatrios h1 span {color:#feea34}
.titulodomicilio {
	float: left;
	text-align: center;
	font-size: 30px;
	width: 100%;
	font-family: "Museo 700";
	margin-top: -3.5%;
}
.titulodomicilio h1 {
	color: #e91c2b;
	text-align: center;
	padding: 0 20%;
	margin: 0;
	font-size: 35px;
	margin-bottom: 1.5%;
}
.inputpanel {
	background-image: url(/img/login/pattern5.png);
	background-size: 20%;
	background-repeat: no-repeat;
	background-position: right bottom;
	width: 45%;
	float: left;
	text-align: center;
	padding-top: 5%;
}
.inputpanel h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 20px;
}
.inputpanel h3 {
	font-weight: 500;
	font-size: 18px;
	padding: 2.5% 15%;
}
#cpdom {
	width: 100%;
	border: 0;
	border-bottom: 1px solid #ccc;
	background: none;
	max-width: 200px;
	display: inline-block;
	background: url(/img/svg/placeholder.svg);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: right;
	height: 40px;
}
#sendbtncp {
	display: inline-block;
	width: 100%;
	background-color: #f5a623;
	color: #fff;
	max-width: 250px;
	padding: 10px;
	font-weight: 500;
	border-radius: 30px;
	margin-top: 30px;
	opacity: .7;
	cursor: not-allowed;
}
@media(max-width:1500px){
  .dayp2 {
  	height:315px;
  }
  .titulopatrios {
	max-width: 450px;
  }
  .textopatrios h1 {
	font-size: 25px;
}
}

@media(max-width:1024px){
  .dayp2 {
    height: 330px;
  }
	.slick-dots {
		bottom: 0%;
	}
	.platillo img {
		padding: 0 20%;
	}
	.platillo p {
		padding: 0 5%;
		font-size: 15px;
	}
	.titleplato{margin-top: -2.5% !important;}
	.scrolled .main {
		margin-top: 120px;
	}

}

@media(max-width:800px){
	main {
		overflow-y: auto;
	}
	.mobile{display:block!important;}
	.desktop{display:none!important;}
  .dayp2 {
  	height: 190px;
  }
  .greencircle {
  	width: 100%;
  	float: left;
  	height: 129px;
  	background-size: 110%;
  	background-position: bottom;
  	top: 0;
  	text-align: center;
  }
  .titulodomicilio h1 {
	padding: 0 5%;
	font-size: 18px;
	margin-bottom: 2.5%;
}
.titulodomicilio h2 {
	font-size: 15px;
}
.carouselpatrios {
	width: 100%;
	margin-top: 5%;
}
.titleplato {
	font-size: 15px !important;
}
.titulopatrios {
	width: 60%;
	margin: 2.5% 10%;
	max-width: 200px;
}
.calsplato {
	font-size: 13px !important;
}
.inputpanel {
	background-image: url(/img/login/pattern5.png);
	background-size: 20%;
	width: 100%;
	padding-top: 5%;
	margin-bottom: 15%;
}

}

@media(max-width:767px){
	
  .dayp2 {
  	height: 147px;
  }
  .greencircle {
  	width: 100%;
  	float: left;
  	height: 107px;
  	background-size: 110%;
  	background-position: bottom;
  	top: 0;
  	text-align: center;
  }
 }
</style>
<main>
	<div class="row">
		<div class="col-md-12">
			<div class="main">

            <style>


            @media (max-width:800px){
            .relativecont.dayp1 {
            	margin-bottom: 10%;
            }
            .textopatrios h1 {
            	font-size: 14px;
            	padding: 2.5% 30%;
            }


            }

            @media (max-width:400px){
            .textopatrios h1 {
              padding: 2.5% 15%;
            }
            .inputpanel h3 {
            	font-size: 14px;
            	padding: 2.5% 10%;
            }

            }

            </style>
            <div class="relativecont dayp2">
              <div class="greencircle">
                <div class="textopatrios">
                	<img src="/img/2019/patrios/Titular-Comidas-min.png" class="titulopatrios">
                  
                </div>
              </div>

            </div>


					<div class="titulodomicilio">
            <h1>¡Disfruta de los deliciosos platillos de temporada hasta la puerta de tu casa, individuales o para compartir!</h1>
            
          </div>


					<div class="carouselpatrios">
            <div>
							<a><img src="/img/2019/patrios/platos/Chile-Nogada-min.png" pagespeed_url_hash="2023739024" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">

							<p class="titleplato">Chile en nogada </p>
							<p class="calsplato">(1070 Cal)</p>
							<p class="descplato">Nuestra tradicional receta de chile poblano relleno de carne y frutas, bañado en salsa nogada</p>
							</a>
						</div>

						<div>
							<a><img src="/img/2019/patrios/platos/Pechuga-oaxaca-min.png" pagespeed_url_hash="4258230293" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">

							<p class="titleplato">Pechuga Oaxaca </p>
							<p class="calsplato">(150g / 1175 Cal)</p>
							<p class="descplato">Rellena con queso Oaxaca, bañada con nuestro mole especial, arroz a la mexicana, frijoles campesinos y plátanos fritos</p>
							</a>
						</div>

            <div>
							<a><img src="/img/2019/patrios/platos/Vipzasos-de-Chorizo-min.png" pagespeed_url_hash="342512244" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<p class="titleplato">Vipsazos de papa con chorizo</p>
							<p class="calsplato">(3 pzas / 641 Cal)</p>
							<p class="descplato">Los clásicos pambazos hechos con el pan especial de Vips, acompañados de salsa verde</p>
							</a>
						</div>

					</div>

          <div class="inputpanel">

          	<h2 googl="true">¿A dónde te lo llevamos?</h2>
          	<h3>Agrega tu Código Postal para que podamos mostrarte nuestras opciones de envío disponibles </h3>

          	<input type="text" placeholder="Código Postal (5 dígitos)" id="cpdom" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5">
          	<br>

          	<a id="sendbtncp">Aceptar</a>


	      </div>


			</div>
		</div>
	</div>
</main>
<script src="/js/wow.min.js"></script>
</script><script src='/slick/slick.min.js'></script>
<script>
$( window ).on( "load", function() {
  new WOW().init();
});
$( document ).on( "ready" , function() {
	$('.carouselpatrios').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		lazyLoad: 'ondemand',
		accessibility: true,
		arrows: false,
		dots:true,
		autoplay: true,
		responsive: [
			{
			breakpoint: 800,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			} ],
		autoplaySpeed: 3000,
	});

	setTimeout(function(){
		$(window).trigger('resize');
	}, 1000)

});

$("#cpdom").keyup(function(event) {
	var cp = $('#cpdom').val().length;
	var cpval = $('#cpdom').val();
	if(cp  > 4){
		$("#sendbtncp").attr("href", "https://vips.com.mx/domicilio2?cp="+cpval);
		$("#sendbtncp").css("opacity", "1");
		$("#sendbtncp").css("cursor", "pointer");
		$("#sendbtncp").css("pointer-events", "all");
	}
	else{

		$("#sendbtncp").css("opacity", ".7");
		$("#sendbtncp").css("cursor", "not-allowed");

	}
	    if (event.keyCode === 13) {


		setTimeout(function(){
			var url = $("#sendbtncp").attr("href");
			$("#sendbtncp").click();
			window.location.href = url;
			$("body").css("cursor", "wait");
		},500)
    }
});


$("#sendbtncp").click(function(){

	var cp = $('#cpdom').val().length;

	if(cp  > 4){
		$("#sendbtncp").css("opacity", ".5");
		$("#sendbtncp").css("cursor", "not-allowed");
		$("body").css("cursor", "wait");
		setTimeout(function(){
			//$("#sendbtncp").css("pointer-events", "none");
		},1000)



	}
	else{


	}


})

</script>
<?php
include('footer-bootstrap.php');
?>
