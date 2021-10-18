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
.gif {
	width: 100%;
	float: left;
	text-align: center;
	padding-top: 0;
	font-size: 1.2em;
	color: #fff;
	position: absolute;
	font-family: "Program",sans-serif;
	top: 0;
	z-index: 2;
}
.platillo {
	width: 35%;
	float: left;
	padding: 2.5%;
	text-align: center;
}
.platillo img {
	width: 100%;
	padding: 0 12.5%;
	transition: .35s all ease;
}
.platillo p {
	margin-top: 0;
	font-family: "Program",sans-serif;
	color: #222;
	padding: 0 15%;
	font-size: .85em;
	font-weight: 500;
}
.legales {
	font-family: "Program",sans-serif;
	color: #222;
	text-align: center;
	font-size: 15px;
	padding: 0em 5%;
	margin: 0 auto;
	width: 100%;
	opacity: .6;
	transition: .35s all ease;
	margin-top: 1em;
	z-index: 3;
	position: relative;
}
.legales:hover{opacity:1; transition:.35s all ease; color:#222;}
.btns {
	width: 40%;
	text-align: center;
	position: relative;
	float: right;
	margin-top: -95px;
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
	z-index: 5;
	bottom: 0;
	color: #fff;
	font-family: "Program",sans-serif;
	font-size: 1.2em;
	background: #f5a623;
	font-weight: 500;
	padding: 10px 30px;
	border-radius: 30px;
}


.btnubica:hover {
	transition: all .4s ease;
	color:#fff;
}
.btnubica img {
	width: 70%;
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

.pla1 {
	position: relative;
	margin-top: 0;
	width: 43%;
	right: 0;
	float: right;
	z-index: 33;
	height: 100%;
	top: 0;
	bottom: 0;
	padding: 0;
}
.pla5 {
	position: absolute;
	margin-top: 37%;
	width: 40%;
	right: 0;
	float: left;
}
.imgmain{
	width: 100%;
	position: relative;
	z-index: 1;
	height: auto;
}
.footer{margin-top:-7px;}
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
    65%  { transform: translate(0, 12px); }
    to   { transform: translate(0, -0px); }
}
.overflowhidden{overflow:hidden;}
.titleplato {
	font-family: "Museo 700",sans-serif !important;
	font-size: 22px !important;
	margin-top: -5% !important;
}
.calsplato {
	font-family: "Museo 500",sans-serif !important;
	font-size: 15px !important;
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


@media(max-width:1024px){
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

	.pla5 {
	margin-top: 235%;
	width: 100%;
	left: 0;
	float: left;
}
.btns {
	width: 100%;
	text-align: center;
	position: absolute;
	float: right;
	margin-top: 0px;
	padding-left: 0%;
	bottom: 0;
}
.legales {
	font-size: 13px;
	padding: 2.5%;
	margin-top: 0;
}
	.platillo p {
		padding: 1% 5%;
		font-size: 14px !important;
		margin-bottom: .5%;
		margin-top: 0 !important;
	}
	.titleplato {
		font-size: 18px !important;
		margin-bottom: 0;
	}
	.pla5 .slick-dots {
		bottom: -10%;
		display: block !important;
		overflow: hidden;
		max-height: 30px;
		transform: scale(.8);
	}
	.carouseldesayunos {
		width: 92.5%;
	}
	.platillo img {
		padding: 0 10%;
	}
	.btnubica {
	font-size: 15px;
	padding: 2.5%;
	min-width: 140px;
}
}
</style>
<main>
	<div class="row">
		<div class="col-md-12">
			<div class="main">
			<img src="/img/2019/comida-dia/agosto/LandingComidaDelDiaDesktopAgosto-Fondo-Final-min.png" class="imgmain desktop" width="100%;">
			<img src="/img/2019/comida-dia/agosto/ComidasDelDiaMobileAgosto-fondo-final-min.png" class="imgmain mobile" width="100%;">
				<div class="gif">
					<div class="platillo pla1 desktop">

					</div>
					<div class="platillo pla5">
						<div class="carouseldesayunos">
							<div>
								<img src="/img/2019/comida-dia/agosto/Desktop79-ComidaDelDia-min.png">
							</div>

							<div>
								<img src="/img/2019/comida-dia/agosto/desktop119-ComidaDelDia-min.png">
							</div>
							<div>
								<img src="/img/2019/comida-dia/agosto/139-desktop-min.png">
							</div>


						</div>
					</div>
				</div>
				<div class="btns">
					<a href="ubicaciones" class="btnubica grow">Busca tu Vips</a>
					<p class="legales">
						<a href="terminos-y-condiciones">Consulta Términos y Condiciones</a>
					</p>
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
	$('.carouseldesayunos').slick({
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
	setTimeout(function(){
		$(window).trigger('resize');
	}, 1000)

});
</script>
<?php
include('footer-bootstrap.php');
?>
