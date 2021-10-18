<?php
    include('header-bootstrap.php');
?>
<link rel="stylesheet" href="/css/animate.css">
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
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
	background-color: #ebebeb;
}
*{outline:0; box-sizing:border-box;}
main {
	overflow-y: hidden;
}
.main {
	text-align: center;
	padding-bottom: 0px;
	overflow-y: hidden;
}
.fullbg {
	width: 100%;
	position: relative;
}
.abscont {
	width: 100%;
	position: absolute;
	top: 0;
	padding: 2.5%;
}
.titpricecont {
	width: 100%;
	float: left;
}
.titulo {
	width: 50%;
	text-align: center;
	float: left;
}
.precio {
	width: 50%;
	float: left;
	text-align: center;
}
.titpricecont {
	width: 100%;
	float: left;
	left: 0;
	position: relative;
	padding: 1.5% 15%;
}
.titulo img {
	width: 50%;
}
.precio h1 {
	color: #fdb82f;
	font-size: 80px;
	font-weight: bold;
	margin-bottom: 0;
  font-family: "Museo 900", sans-serif;
}
.precio span {
	font-size: 50px;
}
.precio h2 {
	color: #45569c;
	font-family: "Museo 700";
	font-size: 20px;
}
.platoscont {
	width: 100%;
	float: left;
	padding: 0 5%;
}
.cafe, .melon {
	width: 50%;
	float: left;
}
.cafe img, .melon img {
	width: 35%;
}
.cafe {
	text-align: left;
}
.melon {
	text-align: right;
}
.slick-slide img {
	display: block;
	width: 100%;
	padding: 0 15%;
}
.descplato {
	color: #45569c;
	font-family: "Museo 500";
	font-size: 14px;
	line-height: 1.3;
  opacity: 0;
}
.carouselplatos {
	margin-top: -5%;
	width: 140%;
	float: left;
	margin-left: -20%;
}
.slick-center .descplato {
	opacity: 1;
}
.slick-center img {
	padding: 0;
}
.desktop {
	display: block;
}
.mobile {
	display: none;
}
@media (max-width:1200px){
  .titpricecont {
  	padding: 1.5% 10%;
  }
}
@media (max-width:1024px){
  .titpricecont {
  	padding: 1.5% 5%;
  }
  .precio h1 {
  	font-size: 60px;
  }
  .precio h2 {
	   font-size: 15px;
  }
  .titulo img {
  	width: 40%;
  }
  .descplato {
  	font-size: 12px;
  }
}

@media (max-width:800px){
  .desktop {
  	display: none;
  }
  .mobile {
  	display: block;
  }
  .abscont {
  	padding: 5%;
  	left: 0;
  }
  .titulo {
  	width: 100%;
  }
  .titulo img {
  	width: 40%;
  }
  .precio {
  	width: 100%;
  	transform: scale(.8);
  }
  .platoscont {
  	padding: 0;
  }
  .cafe, .melon {
  	text-align: center !important;
  }
  .cafe img, .melon img {
  	width: 90%;
  }
  .cafe {
  	transform: translateX(-10%);
  }
  .melon {
	   transform: translateX(20%);
  }
  .descplato {
  	padding: 2.5% 5%;
  }
  .carouselplatos {
  	margin-top: -2.5%;
  	width: 120%;
  	float: left;
  	margin-left: -7.5%;
  }
  .slick-next {
  	right: 10%;
  	z-index: 2;
  }
  .slick-prev {
  	left: 6.5%;
  	z-index: 2;
  }
  .slick-prev::before, .slick-next::before {
  	font-size: 20px;
  	color: #545454;
  }
  .slick-slide img {
  	padding: 0 2.5%;
  }

}

</style>
  <main>
    <div class="row">
      <div class="col-md-12">
      <div class="main">
        <img src="/img/2019/desayunos79/octubre/bg.jpg" class="fullbg desktop">
        <img src="/img/2019/desayunos79/octubre/bgm.jpg" class="fullbg mobile">
        <div class="abscont">
          <div class="titpricecont">
            <div class="titulo"><img src="/img/2019/desayunos79/octubre/logo-desayunos.png"></div>
            <div class="precio">
              <h1> $80<span> c/u</span></h1>
              <h2>Incluye jugo (300 mL) o una orden de fruta (150 g) y café americano o té de sobre</h2>
            </div>
          </div>
          <div class="platoscont">
            <div class="cafe"> <img src="/img/2019/desayunos79/octubre/cafe-americano.png"></div>
            <div class="melon"> <img src="/img/2019/desayunos79/octubre/melon.png"> </div>
          </div>
          <div class="carouselplatos">
            <div>
              <p class="descplato">Huevos tirados (2 pzas / 700 Cal) </br> Revueltos con frijoles refritos, acompañados de queso panela asado, chiles en vinagre y pan tostado.</p>
              <img src="/img/2020/desayunos80/huevos-tirados.png">
            </div>
            <div>
              <p class="descplato">Rollo de huevo divorciado (2 pzas / 503 Cal)</br> Servido con salsa de frijol, salsa verde asada y queso Oaxaca.</p>
              <img src="/img/2020/desayunos80/rollo-de-huevo-divorciado.png">
            </div>
            <div>
              <p class="descplato">Huevos entomatados (2 pzas / 491 Cal)</br> Estrellados, con la tradicional salsa de entomatado y un toque de chipotle. Acompañados de frijoles refritos.</p>
              <img src="/img/2020/desayunos80/huevos-entomatados.png">
            </div>
            <div>
              <p class="descplato">Huevos tres chiles  (2 pzas / 425 Cal)</br> Revueltos con frijoles campesinos. Servidos sobre salsa de tres chiles.</p>
              <img src="/img/2020/desayunos80/huevos-tres-chiles.png">
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </main>

  <script src='/slick/slick.min.js'></script>
  <script>
  $( document ).on( "ready" , function() {
  	$('.carouselplatos').slick({
  		infinite: true,
  		slidesToShow: 3,
  		slidesToScroll: 1,
  		lazyLoad: 'ondemand',
  		accessibility: true,
      centerMode: true,
  		arrows: false,
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
