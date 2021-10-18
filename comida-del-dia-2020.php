<?php
    if(isset($_COOKIE['persistID']))
    {
        $userid =   $_COOKIE['persistID'];
        session_start();
        $_SESSION['uservips'] = $userid;
    }
    if( isset($_SESSION['uservips'])!="" ){
        $uid=$_SESSION['uservips'];
    }
    include('header-bootstrap.php');
?>
<link rel="stylesheet" href="/css/animate.css">
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>

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
.main {
	text-align: center;
	padding-bottom: 5%
}
.col-md-7, .col-md-5, .col-md-6 {
	float: left;
}
.col-md-7 {
	padding: 0;
}
.inforight {
	padding: 2.5%;
}
.banner {
	width: 100%;
	position: relative;
	left: 0;
}
.desktop{display: block;}
.mobile{display: none;}

.inforight h1 {
	font-family: "Museo 700",sans-serif;
	font-size: 30px;
	color: #ea0628;
	margin-bottom: 2.5%;
}
.inforight h3 {
	font-family: "Museo 500",sans-serif;
	font-size: 20px;
}
.inforight h3 {
	font-family: "Museo 500",sans-serif;
	font-size: 25px;
	width: 100%;
	display: inline-block;
}
.numberround {
	background: #e70628;
	color: #fff;
	width: 30px;
	display: inline-block;
	height: 30px;
	border-radius: 50%;
	line-height: 30px;
	margin-right: 12.5px;
	text-align: center;
	font-style: normal;
	font-size: 15px;
	font-weight: bold;
	margin-top: 2.5%;
}
.inforight .col-md-6 {
	text-align: left;
}
.inforight ul {
	text-align: left;
	padding: 2.5% 5%;
  padding-left: 40px;
}
.inforight .col-md-6 li {
	font-size: 17px;
	line-height: 1.4;
	margin-bottom: 1.5%;
}
.inforight .col-md-6 li span {
	font-size: 14px;
}
.carouselplatos h2 {
	font-size: 35px;
	font-family: "Museo 700", sans-serif;
}
.platillo.nuevo {
  background: url(/img/2019/menu/platos/nuevo.png);
	background-repeat: no-repeat;
	background-size: 30px;
	background-position: top left;
}
.slick-slide{opacity: 0;}
.slick-slide.slick-current{opacity: 1;}
.titplato {
	color: #e70628;
	font-weight: normal;
	font-size: 20px;
	margin-bottom: 0;
}
.titplato span {
	color: #212529;
	font-size: 14px;
}
.carouselplatos li {
	list-style: none;
	padding: 0 5% 0 15%;
}
.slick-dots {
	text-align: center !important;
	padding: 0 !important;
}
.slick-dots li {
	padding: 0 !important;
}
.btnubicaciones {
	color: #fff;
	background: #fcd900;
	font-weight: 500;
	padding: 7.5px 20px;
	border-radius: 30px;
	display: inline-block;
	margin-bottom: 10px;
	margin-top: 10px;
}
.slick-dots {
	bottom: -5px;
}
.main h2 {
	font-family: "Museo 700",sans-serif;
	font-size: 25px;
	color: #ea0628;
	margin-bottom: 2.5%;
	margin-top: 2.5%;
	display: inline-block;
	width: 100%;
}
.main ul {
	padding-left: 25%;
	text-align: left;
}
.main li {
	font-size: 17px;
	line-height: 1.4;
	margin-bottom: 1.5%;
}
.main li span {
	font-size: 14px;
}
.tdltext {
	padding: 2.5%;
	width: 100%;
	float: left;
}
.tdltext img {
	display: inline-block;
	width: 150px;
	vertical-align: middle;
	margin-right: 15px;
}
.tdltext p {
	display: inline-block;
	width: auto;
	vertical-align: middle;
	margin-bottom: 0;
}
.col-md-12.guarnicion {
	float: left;
	width: 100%;
}
.slick-prev::before, .slick-next::before {
	color: #222;

}
@media (max-width:1400px){
  .inforight h3 {
  	font-size: 20px;
  }
  .inforight ul {
	padding-left: 30px;
}
  .inforight .col-md-6 li {
	font-size: 14px;
}
.inforight .col-md-6 li span {
	font-size: 12px;
}
.slick-list {
	padding: 0 !important;
}
.titplato {
	font-size: 17px;
}
.titplato span {
	font-size: 14px;
}
.descplato {
	font-size: 14px;
}
.guarnicion li {
	font-size: 15px;
}
.guarnicion li span {
	font-size: 12.5px;
}
.carouselplatos li {
	padding: 0 5% 0 10%;
}
}

@media (max-width:1150px){
  .inforight h1 {
  	font-size: 22px;
  }
  .inforight h3 {
	font-size: 15px;
}
.carouselplatos h2 {
	font-size: 25px;
}
.carouselplatos {
	transform: scale(.87);
	margin-top: -5%;
}
.inforight ul {
	padding-left: 20px;
}
.inforight .col-md-6 li {
	font-size: 12px;
}
.inforight .col-md-6 li span {
	font-size: 11px;
}
.carouselplatos {
	width: 120%;
	margin-left: -10%;
	transform: scale(.75);
	margin-top: -10%;
}
.inforight {
	padding: 2.5% 10px;
}
.slick-dotted.slick-slider {
	margin-bottom: 0;
}
.btnubicaciones {
	margin-top: -10px;
}
.numberround {
	transform: scale(.8);
}

}

@media (max-width:900px){
  .desktop{display: none;}
  .mobile{display: block;}
  .inforight h1 {
  	font-size: 18.5px;
  }
  .inforight h3 {
	font-size: 14px;
}
.carouselplatos li {
	padding: 0;
	padding-left: 35px;
}
.carouselplatos {
	width: 110%;
	margin-left: -5%;
}
}

@media (max-width:800px){
  .main {
	padding-bottom: 5%;
}
.platillo.nuevo {
	background-size: 20px;
}
.eligeplato h3 {
	max-width: 100%;
	text-align: left;
	padding-left: 20%;
}
}
@media (max-width:768px){
  .inforight {
  	padding: 10% 5%;
  }
.inforight .col-md-6 {
	padding-left: 22.5%;
}
.carouselplatos {
	transform: scale(.9);
	margin-top: -2.5%;
}
.btnubicaciones {
	margin-top: 10px;
}
.guarnicion h2 {
	font-size: 20px;
	padding: 0 5%;
}
.guarnicion ul {
	padding-left: 15%;
}
.inforight h3 {
	font-size: 17px;
}
.inforight .col-md-6 li {
	font-size: 14px;
}
}
</style>
  <main>
    <div class="row">
      <div class="col-md-12">
      <div class="main">
              <div class="col-md-7">
                  <img src="/img/2020/comidadeldia/Hero-pic.jpg" class="banner desktop">
                  <img src="/img/2020/comidadeldia/Hero-pic-mobile.jpg" class="banner mobile">
                  <br>
                  <br>
                  <h2>**PUEDES CAMBIAR TU GUARNICIÓN POR:</h2>
                <div class="col-md-6">
                  <ul>
                    <li>Arroz a la mexicana <span class="cals">(100 g/ 104 Cal)</span></li>
                    <li>Arroz blanco <span class="cals">(100 g/ 113 Cal)</span></li>
                    <li>Ensalada de nopales <span class="cals">(80 g/ 29 Cal)</span></li>
                    <li>Ensalada de lechuga con jitomate<span class="cals">(60 g/ 74 Cal)</span></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li>Frijoles campesinos <span class="cals">(60 g/ 43 Cal)</span></li>
                    <li>Frijoles refritos  <span class="cals">(70 g/ 70 Cal)</span></li>
                    <li>Puré de papa rústico <span class="cals">(90 g/ 143 Cal)</span></li>
                    <li>Papa cambray al ajillo verde<span class="cals">(100 g/ 100 Cal)</span></li>
                  </ul>
                </div>
                <div class="col-md-12 tdltext">
                  <img src="/img/2019/comidadeldia/TDL.png">
                  <p>*Desde un consumo mínimo de $119</p>
                </div>
              </div>
              <div class="col-md-5 inforight">
                <h1>¿Buscas el mejor menú ejecutivo?</h1>
                <div class="col-md-6">
                  <h3><i class="numberround">1</i>Elige tu sopa</h3>
                  <ul>
                    <li>Sopa <span class="cals">(270 mL / 113 Cal)</span> o crema del día <span class="cals">(270 mL / 240 Cal)</span></li>
                    <li>Consomé con arroz y pollo <span class="cals">(270 mL / 145 Cal)</span></li>
                    <li>Sopa de fideo <span class="cals">(270 mL / 159 Cal)</span></li>
                    <li>Ensalada <span class="cals">(130 g / 110 Cal)</span>
                    <br><span class="cals">Mezcla de lechugas, zanahorias y champiñones</span></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <h3><i class="numberround">2</i>Elige tu bebida</h3>
                  <ul>
                    <li>Agua Fresca  <span class="cals">(360 mL / 172 Cal)</span></li>
                    <li>Limonada <span class="cals">(360 mL  / 209 con Jarabe, 13 Cal sin jarabe)</span></li>
                    <li>Naranjada <span class="cals">(360 mL / 187 Cal con jarabe, 57 sin jarabe)</span></li>
                    <li>Refresco <span class="cals">(360 mL / 134 Cal)</span></li>
                    <li>Agua embotellada <span class="cals">(360 mL / Libre de Cal)</span></li>
                  </ul>
                </div>
                <div class="col-md-12 eligeplato">
                  <h3><i class="numberround">3</i>Elige tu platillo</h3>
                  <div class="carouselplatos">
                    <!-- Platillos a 80 -->
                    <div>
                      <h2>80 <span>c/u</span></h2>
                      <ul>
                        <li class="platillo nuevo">
                          <p class="titplato">Tortitas de papa con chorizo <span>(3 pzas / 981 Cal)</span></p>
                          <p class="descplato">Servidas sobre salsa verde. Acompañadas de frijoles refritos.</p>
                        </li>
                        <li class="platillo nuevo">
                          <p class="titplato">Enchiladas de chile ancho dulce <span>(3 pzas / 574 Cal)</span></p>
                          <p class="descplato">Rellenas de carne de cerdo, servidas con crema y queso.</p>
                        </li>

                      </ul>
                    </div>
                    <!-- Platillos a 123 -->
                    <div>
                      <h2>123 <span>c/u</span></h2>
                      <ul>
                        <li class="platillo">
                          <p class="titplato">Pechuga a la plancha <span>(150 g / 215 Cal)</span></p>
                          <p class="descplato">Servida con puré de papa y ensalada de lechuga con jitomate.</p>
                        </li>
                        <li class="platillo nuevo">
                          <p class="titplato">Puntas en salsa pasilla <span>(300 g/ 468 Cal)</span></p>
                          <p class="descplato">De pollo, con salsa pasilla y nopales. Acompañadas de arroz a la mexicana y frijoles campesinos.</p>
                        </li>
                        <li class="platillo nuevo">
                          <p class="titplato">Estofado de cerdo <span>(250 g / 556 Cal)</span></p>
                          <p class="descplato">Preparado con salsa gravy, chicharos y cebolla cambray. Acompañado de arroz a la mexicana y puré de papa.</p>
                        </li>
                        <li class="platillo nuevo">
                          <p class="titplato">Pollo a los tres chiles <span>(593 Cal)</span></p>
                          <p class="descplato">1/8 de pollo bañado en salsa de chile ancho, guajillo y pasilla. Acompañado de frijoles refritos y ensalada de nopales a la mexicana.</p>
                        </li>
                      </ul>
                    </div>
                    <!-- Platillos a 143 -->
                    <div>
                      <h2>143<span>c/u</span></h2>
                      <ul>
                        <li class="platillo">
                          <p class="titplato">Bistec de res a la parrilla <span>(120 g / 200 Cal)</span></p>
                          <p class="descplato">Servido con arroz a la mexicana y ensalada de lechuga con jitomate.</p>
                        </li>
                        <li class="platillo">
                          <p class="titplato">Milanesa de res <span>(120 g / 750 Cal)</span></p>
                          <p class="descplato">Servida con arroz a la mexicana y ensalada de lechuga con jitomate.</p>
                        </li>
                        <li class="platillo">
                          <p class="titplato">Filete de tilapia a la plancha <span>(150 g / 520 Cal)</span></p>
                          <p class="descplato">Servida con arroz a la mexicana y ensalada de lechuga con jitomate.</p>
                        </li>
                        <li class="platillo">
                          <p class="titplato">Filete de tilapia empanizado <span>(150 g / 700 Cal)</span></p>
                          <p class="descplato">Servida con arroz a la mexicana y ensalada de lechuga con jitomate.</p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <a href="/ubicaciones" class="btnubicaciones">Busca tu Vips</a><br>
                  <a href="/terminosycondiciones">Ver términos y condiciones</a>
                </div>
              </div>
              <!-- <div class="col-md-12 guarnicion">
                
              </div> -->

      </div>
      </div>
    </div>
  </main>

  <script src='/slick/slick.min.js'></script>
  <script>
  $( document ).on( "ready" , function() {
  	$('.carouselplatos').slick({
  		infinite: true,
  		slidesToShow: 1,
  		slidesToScroll: 1,
  		lazyLoad: 'ondemand',
  		accessibility: true,
      centerMode: true,
  		arrows: true,
  		dots:true,
  		autoplay: true,
      autoplaySpeed: 4000,
  		responsive: [
  			{
  			breakpoint: 800,
  			settings: {
  				slidesToShow: 1,
          arrows: true,
  				slidesToScroll: 1
  			}
  			} ],
  		autoplaySpeed: 4000,
  	});
  	setTimeout(function(){
  		$(window).trigger('resize');
  	}, 1000)

  });
  </script>
<?php
include('footer-bootstrap.php');
?>
