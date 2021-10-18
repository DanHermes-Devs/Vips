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

    width: 60%;
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
	margin-top: 20%;
	width: 55%;
	left: 2.5%;
	float: left;
}
video {
	padding: 0;
	width: 100%;
	height: auto;
	object-fit: cover;
	object-position: bottom center;
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

@media(max-width:1300px){
	.platillo img {
		padding: 0 17.5%;
	}
	.pla5 {
		margin-top: 17.5%;
	}
}
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
		margin-top: 175%;
		width: 100%;
		left: 0;
		float: left;
	}
	.btns {
		width: 100%;
		margin-top: 0;
	}
	.legales {
		font-size: 13px;
		padding: 5%;
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
		padding: 0 20%;
	}	
}
</style>
<main>
	<div class="row">
		<div class="col-md-12">	 
			<div class="main">
			<img src="/img/2019/tequeremos/fondo2.jpg" class="imgmain desktop" width="100%;">
			<img src="/img/2019/tequeremos/Landing-mobile-TQV-fondo.png" class="imgmain mobile" width="100%;">
				<div class="gif">
					<div class="platillo pla1 desktop">
						 <video autoplay loop muted>
						  <source src="/video/tqv1.mp4" type="video/mp4">
						</video> 
					</div>
					<div class="platillo pla5">
						<div class="carouseldesayunos">
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/molletes-vips"><img src="/img/2019/tequeremos/platos/Molletes-naturales-min.png">
								<p class="titleplato">Molletes Vips</p>
								<p class="calsplato">(4 pzas / 1110 Cal)</p>
								<p class="descplato">Los tradicionales, gratinados con queso gouda y servidos con salsa mexicana</p>
								</a>
							</div>
								
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/los-clasicos-con-mermelada-de-fresa"><img src="/img/2019/tequeremos/platos/Bisquets-clasicos-min.png">
								<p class="titleplato">Bísquets con mermelada de fresa</p>
								<p class="calsplato">(2 pzas cortadas a la mitad / 1084 Cal)</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/desayuno/chilaquiles-yucatecos"><img src="/img/2019/tequeremos/platos/Chilaquiles-yucatecos-min.png">
								<p class="titleplato">Chilaquiles Yucatecos</p>
								<p class="calsplato">(940 Cal fritos / 890 Cal horneado)</p>
								<p class="descplato">Bañados en salsa pibil y servidos sobre frijoles refritos; cubiertos de cochinita pibil, cebolla morada con chile habanero, queso y aguacate</p>
								</a>
							</div>
								
								
							<div>
								<a href="https://vips.com.mx/menu/postre/pay-helado-de-limon"><img src="/img/2019/tequeremos/platos/Pay-limon-min.png">
								<p class="titleplato">Pay helado de limón</p>
								<p class="calsplato">(416 Cal)</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/papa-a-los-tres-quesos"><img src="/img/2019/tequeremos/platos/Papa-tresquesos-min.png">
								<p class="titleplato">Papa a los tres quesos</p>
								<p class="calsplato">(701 Cal)</p>
								<p class="descplato">Papa horneada con queso crema, parmesano y gouda; servida sobre salsa cremosa de chipotle</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/tacos-botaneros"><img src="/img/2019/tequeremos/platos/Tacos-botaneros-min.png">
								<p class="titleplato">Tacos botaneros</p>
								<p class="calsplato">(12 pzas / 775 Cal)</p>
								<p class="descplato">Taquitos dorados de pollo y queso, servidos con guacamole y salsa martajada</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/postre/crepas-de-cajeta"><img src="/img/2019/tequeremos/platos/Crepas-cajeta-min.png">
								<p class="titleplato">Crepas de cajeta</p>
								<p class="calsplato">(3 pzas / 1230 Cal)</p>
								<p class="descplato">Rellenas de queso crema, bañadas de cajeta y trozos de nuez; servidas con plátano y una bola de helado de vainilla</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/tacos-dorados-de-pollo"><img src="/img/2019/tequeremos/platos/Tacos-pollo-min.png">
								<p class="titleplato">Tacos dorados de pollo</p>
								<p class="calsplato">( 4 pzas / 873 Cal)</p>
								<p class="descplato">Bañados en salsa verde y roja, crema y queso; acompañados de guacamole y frijoles refritos</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/tostadas-de-pollo"><img src="/img/2019/tequeremos/platos/Tostadas-pollo-min.png">
								<p class="titleplato">Tostadas de pollo</p>
								<p class="calsplato">(3 pzas / 680 Cal)</p>
								<p class="descplato">Servidas con lechuga, aguacate, jitomate, crema y queso</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/desayuno/chilaquiles"><img src="/img/2019/tequeremos/platos/Chilaquiles-Vips-min.png">
								<p class="titleplato">Chilaquiles Vips</p>
								<p class="calsplato">(580 Cal fritos / 530 Cal horneados)</p>
								<p class="descplato">Bañados en salsa verde o roja, con queso gouda gratinado, crema y cebolla</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/desayuno/de-mole"><img src="/img/2019/tequeremos/platos/Enchiladas-mole-min.png">
								<p class="titleplato">Enchiladas de mole</p>
								<p class="calsplato">(3 pzas / 733 Cal)</p>
								<p class="descplato">Bañadas en nuestro tradicional mole. rellenas de pollo, servidas con crema y queso, cebolla morada y frijoles refritos</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/desayuno/suizas"><img src="/img/2019/tequeremos/platos/Enchiladas-Suizas-min.png">
								<p class="titleplato">Enchiladas suizas</p>
								<p class="calsplato">(3 pzas / 94 Cal)</p>
								<p class="descplato">Con nuestra tradicional salsa suiza, rellenas de pollo, gratinadas con queso gouda, cebolla y acompañadas de frijoles refritos</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/caldo-tlalpeno"><img src="/img/2019/tequeremos/platos/Caldo-tlalpeno-min.png">
								<p class="titleplato">Caldo Tlalpeño</p>
								<p class="calsplato">(500 mL/ 358 Cal)</p>
								<p class="descplato">El favorito con arroz a la mexicana, pollo deshebrado, aguacate, queso Oaxaca y chile chipotle</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/de-tortilla"><img src="/img/2019/tequeremos/platos/Sopa-tortilla-min.png">
								<p class="titleplato">Sopa de tortilla</p>
								<p class="calsplato">(500 mL / 639 Cal)</p>
								<p class="descplato">Con queso Oaxaca, aguacate y chile pasilla; acompañada de chicharrón, crema y queso</p>
								</a>
							</div>
							
							<div>
								<a href="https://vips.com.mx/menu/comidas-cenas/especial-vips"><img src="/img/2019/tequeremos/platos/Sopa-Vips-min.png">
								<p class="titleplato">Sopa Especial Vips</p>
								<p class="calsplato">(500 mL / 256 Cal)</p>
								<p class="descplato">Receta de la casa, con pollo deshebrado, tallarines y caldo de pollo</p>
								</a>
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