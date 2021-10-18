<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
	header('Location: /m');
	exit(0);
}
include('header.php');
?>
<link rel="stylesheet" href="/css/animate.css">


<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<style>

.resptext {
    width: 100%;
    float: left;
    padding: 0;
}

.inauguraciones {
	width: 100%;
	text-align: center;
	float: left;
	padding: 0;
}
.inauguraciones h2{color: #eb1c2d; font-size:30px;}

@-webkit-keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
@keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
.ticker-wrap {
	position: relative;
	bottom: 0;
	width: 100%;
	overflow: hidden;
	height: 120px;
	padding-left: 100%;
	box-sizing: content-box;
	margin-bottom: 30px;
}
.ticker-wrap .ticker {
	display: inline-block;
	height: 120px;
	line-height: 120px;
	white-space: nowrap;
	padding-right: 100%;
	box-sizing: content-box;
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
	animation-timing-function: linear;
	-webkit-animation-name: ticker;
	animation-name: ticker;
	-webkit-animation-duration: 50s;
	animation-duration: 50s;
}
.ticker-wrap .ticker__item {
	display: inline-block;
	padding: 0 100px;
	font-size: 27.5px;
	color: #4f4c4d;
	font-weight: 500;
}
.globos {
	width: 80px;
	position: relative;
	z-index: 2;
	left: -25px;
	margin-top: 0px;
	vertical-align: middle;
}
.resptext h2 {
	color: #4f4c4d;
	font-size: 30px;
	margin-top: 140px;
	font-weight: bold;
	font-family: "Program",sans-serif;
}

.resp2img{width:20%; float:left;}

.text-right{width:80%; float:left;}

.resptext p {
	font-size: 20px;
	font-family: "Program", sans-serif;
}

.platilloquienes, .textoquienes {
	float: left;
	width: 50%;
	padding: 2.5% 5% 0 5%;

}
.peoplequienes, .textopeople {
	float: left;
	width: 50%;
	padding: 2.5% 0;
	max-height: 600px;
}

.platilloquienes img,  .peoplequienes img{width:100%;}

.textoquienes {
	padding-top: 15%;
	padding-right: 10%;
	min-height: 85vh;
	padding-left: 0;
	font-size: 1.2em;

}

.textopeople {
	padding-top: 0;
	padding-right: 0;
	padding-left: 7.5%;
	font-size: 1.2em;
}

.box{

  position: relative;

  width: 100px;

  height: 100px;

  text-align:center;

  font-size:50px;

}



#box1 {

	background: #d5db5d;

	background: #31A2DB;

	width: 80%;

	height: 500px;

	margin: 10px 0 0 10%;

}

#box2 {

	width: 80%;

	height: 500px;

	margin: 0px 0 0 5%;

	background-size: cover;

	background-position: center;

	margin-top: 300px;

}
#box3 {
	background: #d7bad9;
	width: 80%;
	height: 500px;
	margin: 0px 0 0 10%;
}

#box4 {
	width: 80%;
	height: 500px;
	margin: 0;
	background-size: cover;
	background-position: top;
	margin-top: -300px;
	margin-left: 20%;
}

/* Default hide the video on all devices */

#video2{display:none}

/* Default display the image to replace the video on all devices */

#videosubstitute{display:block;width:100%;height:auto;max-width:100%}

/* Medium Devices, Desktops */



@media only screen and (min-width : 992px) {

#video2{display:block;}

#videosubstitute{display:none}

}

#video2 {
	width: 100%;
	height: 90vh;
	min-height: 400px;
	object-fit: cover;
	object-position: bottom center;
	float: left;
}
#videoMessage2 {padding:0.4em;}

#videoMessage2 {text-shadow: 2px 2px 2px #000000;color:white;}

#videoMessage2 h1 {
	font-size: 30px;
	color: #fff;
	text-align: center;
	margin: .25em;
	text-align: center;
	padding: 2.5%;
	padding-top: 0;
	font-weight: 500;
	text-shadow: none;
	letter-spacing: .5px;
	margin-bottom: 0;
	padding-bottom: 0;

}

#videoMessage2 .btnmas {
	float: none;
	display: inline-block;
	text-shadow: none;
	font-size: 20px;
	font-weight: 500;
}

#videoMessage2 p {
	font-size: 20px;
	text-shadow: none;
	padding: 0 30%;
}
#videoMessageBox2 {
	position: absolute;
	top: 0;
	left: 0;
	display: flex;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
	width: 100%;
	background: rgba(0,0,0,.5);
	bottom: 0;
	height: 95vh;
	min-height: 400px;
}
#videoMessage2 {
	-webkit-box-flex: 1;
	-webkit-flex: 1;
	-ms-flex: 1;
	flex: 1;
	width: 100%;
	text-align: center;
}
#videoDiv2 {
	width: 100%;
	max-width: 100%;
	margin: auto;
	display: block;
	position: relative;
	height: 90vh;
	min-height: 400px;
	overflow: hidden;
}


.parallaxbg {

	width: 100%;

	float: left;

	background-size: cover;

	background-position: center;

	padding: 1% 10%;

	min-height: 200px;

	height: 25vh;

	background-attachment: fixed;

	margin-bottom: 270px;

}

.parallaxbg h1 {

	width: 100%;

	color: #fff;

	text-align: right;

	text-shadow: 1px 1px 6px #333;

	font-family: "Museo 900", sans-serif;

	position: absolute;

	width: 100%;

	padding: 5%;

	margin: 0;

	left: 0;

}
.btnmas {
	background: #f5a623;
	padding: .75em 5% .9em;
	color: #fff;
	float: left;
	min-width: 200px;
	margin-top: 1em;
	border-radius: 40px;
	text-align: center;
	padding: 12px 20px !important;
	font-weight: 500;
}
.flipster__item--current {
	margin-top: -30px !important;
	transform: translateY(-30px);
}


.flipster--carousel .flipster__item--past-2, .flipster--carousel .flipster__item--future-2 {
	opacity: 0!important;
	transition-delay: 90ms;
}


.clase.flipster__item.flipster__item--future.flipster__item--future-2 {
	opacity: 0 !important;
}
.clase.flipster__item.flipster__item--past.flipster__item--past-2 {
	opacity: 0 !important;
}

.flipster__button--prev {
	left: -33px!important;
	top: 40%!important;
}

.flipster__button--next {
	right: -33px!important;
	top: 40%!important;
}



button:active, button:focus {
    outline: none;
    border: none;
}

.flipster__button svg {

	stroke-width: 1!important;
	font-size: 12px;

}

.flipster--carousel .flipster__item--past-1, .flipster--carousel .flipster__item--future-1 {
	opacity: 1 !important;
	transition-delay: 60ms;
}

.flipster--flat .flipster__item--past, .flipster--flat .flipster__item--future {
	opacity: 1 !important;
}

.flipster--carousel .flipster__item--past-1 img, .flipster--carousel .flipster__item--future-1 img {
	opacity: .5 !important;
	transition-delay: 60ms;
}

.flipster--flat .flipster__item--past img, .flipster--flat .flipster__item--future img {
	opacity: .5 !important;
}

.flipster__item__content{background:#fff;}

.carousel {
	width: 100%;
	height: auto;
}

.delivery .textopeople a {
	width: 20%;
	height: auto;
	display: inline-block;
	padding: 2% 2.5% 2% 0;
	margin: 0 5% 0 0;
	max-width: 85px;
}
.delivery .textopeople img{
	width: 100%;
}


.flex-row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.flex-col {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
}

.flex-col.image {
  margin-left: 40px;
  -webkit-align-self: stretch;
  -ms-flex-item-align: stretch;
  align-self: stretch;
  border-radius: 3px;
  background-image: url("https://d3e54v103j8qbb.cloudfront.net/img/example-bg.png");
  background-position: 0px 0px;
  background-size: 125px;
}

.gallery {
	position: relative;
	width: 100%;
	height: 130vw;
	margin-top: 0;
	margin-bottom: 50px;
	background-image: -webkit-linear-gradient(45deg,#662d8c,#ed1e79);
	background-image: none;
}
.center-mini-section {
  display: block;
  max-width: 500px;
  margin-right: auto;
  margin-left: auto;
  text-align: center;
}

.gallery-image {
	height: 70vh;
	margin: 20px;
	-webkit-box-flex: 2;
	-webkit-flex: 2;
	-ms-flex: 2;
	/* flex: none; */
	border-radius: 5px;
	background-size: contain !important;
	background-position: top center !important;
	/* width: 15% !important; */
	display: flex;
	flex: 1;
	filter: drop-shadow(2px 2px 6px #ccc);
}
.gallery-image._1 {
  background-image: url("/img/2019/redescubre1.png");
  background-position: 50% 50%;
  background-size: cover;
  background-repeat: no-repeat;
}

.gallery-image._2 {
  background-image: url("/img/2019/clasicos1.png");
  background-position: 50% 50%;
  background-size: cover;
  background-repeat: no-repeat;
}

.gallery-image._3 {
  background-image: url("/img/2019/desayunos1.png");
  background-position: 50% 50%;
  background-size: cover;
  background-repeat: no-repeat;
}

.gallery-scroll-track {
  position: absolute;
  left: 0px;
  top: 0px;
  right: 0px;
  bottom: 0px;
  z-index: 1;
}

.gallery-container {
  position: relative;
  top: 0px;
  overflow: hidden;
  width: 100%;
  height: 100vh;
}

.gallery-track {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 200vw;
  height: 100%;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

@media (max-width: 991px) {
  .gallery-image {
    height: 50vh;
  }
}

@media (max-width: 767px) {

  .flex-row.mobile {
    padding-right: 20px;
    padding-left: 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }
  .flex-col.image {
    min-height: 250px;
    margin-left: 0px;
  }
  .gallery-image {
    min-width: 22.5%;
    margin-right: 10px;
    margin-left: 10px;
  }
}

@media (max-width: 479px) {
  .gallery-image {
    margin-right: 10px;
    margin-left: 10px;
  }
  .gallery-track {
    padding-right: 10px;
    padding-left: 10px;
  }
}
.gallery-container {
    position: -webkit-sticky!important;
    position: fixed;
    padding-top: 200px;
}
#content2 {
    margin-top: -70vh;

    float: left;
    width: 100%;
    z-index: 2;
    position: relative;
}

#content2 {
	margin-top: 0;
	float: left;
	width: 100%;
	z-index: 2;
	position: fixed;
	top: 70vh;
}

.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }

.grow2 { transition: all .35s ease; }
.grow2:hover { transform: scale(1.05); }


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


.pattern1 {
	width: 30%;
	height: 400px;
	background-repeat: no-repeat;
	position: absolute;
	background-size: contain;
	left: 5%;
	background-position: bottom;
	opacity: 1;
	transition: .35s all ease;
	margin-top:50px;
}
.pattern2 {
    width: 35%;
    height: 500px;
    background-repeat: no-repeat;
    position: absolute;
    background-size: contain;
    right: 5%;
    background-position: 50%;
	opacity: 1;
    transition: .35s all ease;
	margin-top:50px;
}

.scrollgif {
	position: fixed;
	width: 50px;
	height: 50px;
	background-size: 100%;
	background-position: center;
	background-repeat: no-repeat;
	bottom: 10%;
	left: 50%;
	transform: translateX(-40px);
	opacity: 1;
	transition: all ease .35s;
}

.scrolled .scrollgif{
	bottom: 10%;
	transition:all ease .35s;
}

.absolute {
    opacity: 0;
    transition: .35s all ease;
}

.main{overflow:hidden;}
#content2.notfixed {
	position: relative;
	top: 0;
	margin-top: -54vh;
}

.scrolled .main {
	margin-top: 126px;
	transition: all .4s ease;
}

#carouseldelivery{transition:.35s all ease;}
.opacity1{opacity:1!important; transition:.35s all ease;}


.carouselbanners {
	width: 100%;
	float: left;
	margin-top: 0;
	padding-bottom: 0;
	padding:0 1%;
}
.carouselbanners img{
	width: 100%;
	box-shadow: 1px 1px 4px #ccc;
}

.carouselbanners .slick-dots {
	position: absolute;
	bottom: 15px;
	display:block!important
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}
.slick-dots li.slick-active button::before {
	/* opacity: .75; */
	/* color: #000; */
	color: #fff !important;
	opacity: 1 !important;
	drop-shadow: 1px 3px #fff;
}
.slick-dotted.slick-slider {
	margin-bottom: 0px;
}

.carouselbanners {
	width: 100%;
	float: left;
	overflow: hidden;
}
.carouselbanners img{
	width: 100%;
}

.carouselbanners .slick-dots {
	position: absolute;
	bottom: -25px;
	display: block!important;
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	text-align: center;
}
.slick-dots li.slick-active button::before {
	/* opacity: .75; */
	/* color: #000; */
	color: #ed1c2c !important;
	opacity: 0 !important;
	drop-shadow: 1px 3px #fff;
	width:40px!important;
	transition:.35s all ease;
}
.slick-dotted.slick-slider {
	margin-bottom: 30px !important;
	overflow: visible;
	margin-top: 50px;
}
.slick-dots li button:before {
    font-family: 'slick';
    font-size: 16px!important;
    line-height: 20px;
    position: absolute;
    /* border: 1px solid #fff; */
    border-radius: 50%;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '•';
    text-align: center;
    opacity: .25;
    color: transparent !important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	transition:.35s all ease;
}

/* the slides */
.slick-slide {
    margin: 0 10px;
}
/* the parent */
.slick-list {
    margin: 0 -10px;
	overflow:visible!important;
}



.slick-dots li {
	width: 15px!important;
	height: 15px!important;
	cursor: pointer;
	background: #ed1c2c73!important;
	border-radius: 10px;
	transition:.35s all ease;
}

.slick-dots .slick-active {
	background: #ed1c2c!important;
	border-radius: 30px;
	height: 15px !important;
	/* transform: translateY(0px); */
	width: 30px !important;
	transition:.35s all ease;
}

.cupon {
	width: 50%;
	float: left;
	padding: 2.5%;
}

.cupon img {
	width: 100%;
	box-shadow: 0 2px 6px 0 rgba(53,53,53,.3);
	border-radius: 5px;
}

.dirapertura, .fechaapertura {
	font-size: 22px;
	opacity: .9;
	padding-left: 5px;
}

.fechaapertura {
	padding-left: 5px;
	opacity: 1;
}
.carouselbannersdelivery {
	width: 100%;
	float: left;
}
.flipster--loop {
  /*  .flipster__item--past { transform: translateX(-100%); }
  .flipster__item--future { transform: translateX(100%); }*/
}
.flipster--loop .flipster__item {
  position: absolute;
}
.flipster--loop .flipster__item--past-2 {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.flipster--loop .flipster__item--future-2 {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.flipster--loop .flipster__item--past-1 {
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
.flipster--loop .flipster__item--future-1 {
  -webkit-transform: translateX(50%);
          transform: translateX(50%);
}
.flipster--infinite-carousel .flipster__container,
.flipster--infinite-carousel .flipster__item {
  transition: all 350ms ease-in-out;
  transition-timing-function: cubic-bezier(0.56, 0.12, 0.12, 0.98);
}
.flipster--infinite-carousel .flipster__item__content {
  transition: inherit;
}
.flipster--infinite-carousel .flipster__item {
  position: absolute;
  opacity: 0;
  -webkit-perspective: 800px;
          perspective: 800px;
}
.flipster--infinite-carousel .flipster__item--past-2,
.flipster--infinite-carousel .flipster__item--future-2 {
  opacity: 0.6;
  transition-delay: 90ms;
}
.flipster--infinite-carousel .flipster__item--past-1,
.flipster--infinite-carousel .flipster__item--future-1 {
  opacity: 0.8;
  transition-delay: 60ms;
}
.flipster--infinite-carousel .flipster__item--current {
  opacity: 1;
  transition-delay: 0;
}
.flipster--infinite-carousel .flipster__item--past .flipster__item__content,
.flipster--infinite-carousel .flipster__item--future .flipster__item__content {
  -webkit-transform: scale(0.4);
          transform: scale(0.4);
}
.flipster--infinite-carousel .flipster__item--past-2 .flipster__item__content {
  -webkit-transform: translateX(-75%) rotateY(45deg) scale(0.6);
          transform: translateX(-75%) rotateY(45deg) scale(0.6);
}
.flipster--infinite-carousel .flipster__item--future-2 .flipster__item__content {
  -webkit-transform: translateX(75%) rotateY(-45deg) scale(0.6);
          transform: translateX(75%) rotateY(-45deg) scale(0.6);
}
.flipster--infinite-carousel .flipster__item--past-1 .flipster__item__content {
  -webkit-transform: translateX(-50%) rotateY(45deg) scale(0.8);
          transform: translateX(-50%) rotateY(45deg) scale(0.8);
}
.flipster--infinite-carousel .flipster__item--future-1 .flipster__item__content {
  -webkit-transform: translateX(50%) rotateY(-45deg) scale(0.8);
          transform: translateX(50%) rotateY(-45deg) scale(0.8);
}
.flipster--infinite-carousel .flipster__item--current .flipster__item__content {
  -webkit-transform: translateX(0) rotateY(0deg) scale(1);
          transform: translateX(0) rotateY(0deg) scale(1);
}

.flipster {
	overflow-x: inherit!important;

}

.carouselbannersdelivery {
	width: 100%;
	float: left;
	margin-top: 100px;
}

.flipster--click .flipster__item--past, .flipster--click .flipster__item--future {
	cursor: pointer;
	opacity: 1!important;
	background:#fff;
}

.flipster--click .flipster__item--past img, .flipster--click .flipster__item--future img {
	cursor: pointer;
	opacity: .7!important;
}
.flipster--infinite-carousel .flipster__item--current {
	margin-top: 50px !important;
}

@media(max-width:1400px){

	.carouselbannersdelivery {
	width: 100%;
	float: left;
	margin-top: 30px;
	transform: scale(.7);
}

#carouseldelivery {
	transition: .35s all ease;
	padding: 0px 5% 40% !important;
}

.peoplequienes, .textopeople {
	float: left;
	width: 50%;
	padding: 2.5% 0;
	max-height: 420px;
}

.textopeople {
	padding-top: 0;
	padding-right: 0;
	padding-left: 7.5%;
	font-size: 1.2em;
	padding: 0 5% !important;
}
#box4 {
	width: 80%;
	height: 320px;
	margin: 0;
	background-size: cover;
	background-position: top;
	margin-top: -300px;
	margin-left: 20%;
}
}

.slick-dots li:last-child{display:none;}

</style>

<?php
date_default_timezone_set("America/Mexico_City");
$h = date('G'); //set variable $h to the hour of the day
$m = date('i'); //set variable $h to the hour of the day
$d = date('d'); //set variable $h to the hour of the day

if ($h < 13){
$banner = '/img/2019/banners/CarruselDesayunosMayo.png';
}
if ($h > 12) {
$banner = '/img/2019/banners/CarruselComidasMayo.png';
}

?>
<div class="main">
<div class="pattern1 floating" style="background-image:url(/img/2019/TXtentradas3.png)"></div>
	<div class="pattern2 floating2" style="background-image:url(/img/2019/TXtensaladas2_02.png)"></div>


			<div class="carouselbanners">


				<div>
					<a href="https://vips.com.mx/cupones" class="promoBanner" data-promo="Cupones" onclick="promoViewedHome('Cupones');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/Carrusel-Mobile-cupon_generico.png">	</a>
				</div>

				<div>
					<a href="/clasicos" class="promoBanner" data-promo="Clásicos 2x1" onclick="promoViewedHome('Clásicos 2x1');"><img class="grow2" src="/img/2019/bgslide.png" data-lazy="/img/banners/bannermobileClasicos.png"></a>
				</div>

				<div>
					<a href="https://vips.com.mx/platillos-patrios" class="promoBanner" data-promo="Platillos Patrios" onclick="promoViewedHome('Platillos Patrios');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/Carrusel-inserto-patrios-min.png">    </a>
				</div>

				<div>
					<a href="https://vips.com.mx/cupones#20Descuento" class="promoBanner" data-promo="Cupón 20% Descuento" onclick="promoViewedHome('Cupón 20% Descuento');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/carousel-cupon-20.jpg">	</a>
				</div>

				<div>
					<a href="https://vips.com.mx/selvamagica" class="promoBanner" data-promo="Selva Mágica" onclick="promoViewedHome('Selva Mágica');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/juego-homedesktopmobile.png">	</a>
				</div>

				<!--<div>
					<a href="https://vips.com.mx/cupones" class="promoBanner" data-promo="Cupón Trufa" onclick="promoViewedHome('Cupón Trufa');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/carousel-cupon-trufa.jpg">	</a>
				</div>-->

				<div>
					<a href="https://vips.com.mx/garantiadesabor" class="promoBanner" data-promo="Garantia de Sabor" onclick="promoViewedHome('Garantía de Sabor');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/Garantia_de_sabor-Carrusel-min.png">	</a>
				</div>




				<!--<div>
					<a href="/pollo-vips" class="promoBanner" data-promo="Pollo Vips" onclick="promoViewedHome('Pollo Vips');"><img class="grow2" src="/img/2019/bgslide.png" data-lazy="/img/2019/banners/banner_pollo_vips.jpg"></a>
				</div>-->



				<div>
					<a href="/desayunos-79" class="promoBanner" data-promo="Desayunos $79" onclick="promoViewedHome('Desayunos $79');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/BannerCarruselDesayunos79-min.png"></a>
				</div>

				<div>
					<a href="/comida-del-dia" class="promoBanner" data-promo="Comida del día" onclick="promoViewedHome('Comida del día');"><img class="grow2" src="/img/2019/bgslide.png" data-lazy="/img/2019/banners/BannerCarrusel_Comida-del-dia_Agosto-min.png"></a>
				</div>



				<div>
					<a href="/menu-infantil-disney" class="promoBanner" data-promo="Menú infantil Disney" onclick="promoViewedHome('Menú infantil Disney');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/Carrusel Mobile-Toy_Story-min.png"></a>
				</div>

				<div>
					<a href="/mini-menu" class="promoBanner" data-promo="Mini menú" onclick="promoViewedHome('Mini menú');"><img src="/img/2019/bgslide.png" class="grow2" data-lazy="/img/2019/banners/banner_mini_menu.jpg"></a>
				</div>




				<div>
					<a href="/promociones" class="promoBanner" data-promo="Tarjeta de lealtad Vips" onclick="promoViewedHome('Tarjeta de lealtad Vips');"><img  src="/img/2019/bgslide.png"class="grow2" data-lazy="/img/2019/banners/CarruselBanner-tdl.png"></a>
				</div>


			</div>
	<div>
	<div class="resptext delivery w-container">
		<div id="carouseldelivery" class="peoplequienes wow  fadeInUp" data-wow-offset="200" style="background: url(/img/2019/TXTCappuccino.png);
		background-repeat: no-repeat; padding-left: 5%; background-position: bottom right; padding-right: 5%; width: 60%; background-size: 50%; padding-bottom: 5%; padding-top: 0; float: left; padding-bottom: 45%;">
						<div class="carouselbannersdelivery">


    <div class="flipster">
        <ul class="flip-items">

            <li id="1">
                <img src="/img/2019/banners/1.png">
             </li>
            <li id="2">
                <img src="/img/2019/banners/2.png">
            </li>

			<li id="3">
                <img src="/img/2019/banners/3.png">
            </li>

            <li id="4">
                <img src="/img/2019/banners/1.png">
            </li>

			<li id="5">
                <img src="/img/2019/banners/2.png">
            </li>

			<li id="6">
                <img src="/img/2019/banners/3.png">
            </li>





        </ul>
    </div>

			</div>
		</div>

		<div class="textopeople" style="width:40%; padding-left: 5%; display:none;">
			<h2 style="color:#eb1c2d;">DISFRUTA DE VIPS EN<br>DONDE QUIERAS</h2>
				<p>Contamos con servicio a domicilio a través de tu app favorita</p>
				<a href="/domicilio"><img  class="btndelivery" src="/img/2019/uber.svg" alt=""></a>
				<a href="/domicilio"><img  class="btndelivery" src="/img/2019/rappi.svg" alt=""></a>
				<a href="/domicilio"><img  class="btndelivery" src="/img/2019/sindelantal.svg" alt=""></a>
		</div>

		<div class="textopeople" style="width:40%; padding-left: 5%;">
			<h2 style="color:#eb1c2d;">DISFRUTA DE VIPS EN<br>DONDE QUIERAS</h2>

				<a href="/domicilio" class="btnmas">Pide a domicilio</a>

		</div>

	</div>


	<div class="resptext">


		<div class="textopeople">
			<h2 style="margin-top: 100px;">¡Los mejores cupones de descuento!</h2>
				<p>Disfruta más de Vips con nuestras promociones digitales exclusivas. Descarga tus favoritos en un clic.</p>
				<a href="/promociones/cupones" class="btnmas">Conócelos todos</a>
		</div>

		<div class="peoplequienes wow  fadeInUp lazy" data-wow-offset="200" data-src="/img/2019/TXTbebidas_01.png" style="
		background-repeat: repeat;
		background-repeat: no-repeat;
		background-position: 0% 90%; background-size: 70%; padding-top:0;">

			  <div id="box3" class="box" data-speed="1" data-margin="100" style="background:transparent; height: 150px"></div>

		<div class="floating3 grow" style="margin-top:0px;"><div id="box4" class="box" data-speed="7" style="margin-top: 0px; margin-left: 0px; background-size: contain; background-repeat: no-repeat; background-position: center center; width: 90%;">
		<div class="cupon grow"><a href="https://vips.com.mx/promociones/cupones#Bisquets"><img src="/img/2019/cupones/Cupon-bisquets-desktop-min.png" class="lazy"></a></div>
		<div class="cupon grow"><a href="https://vips.com.mx/cupones#CarneAsada"><img data-src="/img/2019/cupones/Cupon-carne_asada-desktop-min.png" class="lazy"></a></div>
		<div class="cupon grow"><a href="https://vips.com.mx/promociones/cupones#20Descuento"><img data-src="/img/2019/cupones/Cupon-20-desktop-min.png" class="lazy"></a></div>
		<div class="cupon grow"><a href="https://vips.com.mx/cupones#HuevosPoblana"><img data-src="/img/2019/cupones/Cupon-huevos-poblana-desktop-min.png" class="lazy"></a></div>

		</div></div>

		</div>

	</div>

	<div id="videoDiv2">
		<div id="videoBlock2">
			<img src="img/bgvideo.jpg" id="videosubstitute" alt="">
			<video preload="preload" id="video2" autoplay="autoplay" loop="loop" muted="muted" poster="/redescubreelsabor/images/postersabor.jpg">

				<source src="/video/videoLoop.mp4" type="video/mp4">
			</video>

			<div id="videoMessageBox2">
				<div id="videoMessage2">
					<h1 class="spacer">Una historia que contar</h1>

					<p>Hemos sido parte de la vida de los mexicanos por más de 50 años <br>y tenemos muchísimas historias que queremos compartir contigo.
</p>
					<a href="/vipstorias" class="btnmas">Conócelas</a>
				</div>
			</div>
		</div>
	</div>


	<div class="resptext">

		<div class="peoplequienes wow  fadeInUp lazy" data-wow-offset="200" data-src="/img/2019/TXTTePaz.png" style="
		background-position-x: 0%;
		background-position-y: 0%;
		background-repeat: repeat;
		background-repeat: no-repeat;
		background-position: 80% 100%;">

			  <div id="box3" class="box" data-speed="1" data-margin="100" style="background:transparent; margin-left:0;  height:0;"></div>

		<div class="floating2"><div id="box4" class="box lazy" data-speed="7" data-src="/img/2019/lol.png" style="margin-top: 350px; background-size: contain; background-repeat: no-repeat; width: 100%; margin-left: 0px;
height: 500px; background-position: right top; filter: drop-shadow(0px 2px 4px #ccc);
		"></div></div>

		</div>

		<div class="textopeople" style="padding-right: 7.5%;">
			<h2 style="color:#eb1c2d; 	color: #d44587;text-transform:uppercase;">¡Llegó la nueva colección de muñecas LOL a Vips!</h2>
				<p>Conoce todos los nuevos modelos que podrás encontrar en tu Vips más cercano, el juguete de moda que a las niñas les encanta.</p>
				<a href="/lol-surprise" class="btnmas">Ver más</a>
		</div>

	</div>

	<div class="resptext">

		<div class="textopeople">
			<h2> VIPS POR TI</h2>
				<p>Conoce todas las formas en que Vips trabaja para mejorar las comunidades donde nos encontramos.

</p>
				<a href="somos-vips" class="btnmas">Nuestra Historia</a>
		</div>

		<div class="peoplequienes wow  fadeInUp" data-wow-offset="200" style="background: url(/img/2019/TXTaves2.png);
		background-position-x: 0%;
		background-position-y: 0%;
		background-repeat: repeat;
		background-repeat: no-repeat;
		background-position: 0% 90%;">

			  <div id="box3" class="box" data-speed="1" data-margin="100" style="background:transparent; height:0;"></div>

		<div class="floating"><div id="box4" class="box lazy" data-speed="7" data-src="/img/2019/fotovipsporti.png" style="margin-top: 350px; background-size: contain;
background-repeat: no-repeat;
background-position: center; margin-left: 10%;"></div></div>

		</div>

	</div>




	<div class="inauguraciones" style="display:none;">
		<h2>CONOCE NUESTRAS INAUGURACIONES</h2>
		<div class="ticker-wrap">
			<div class="ticker">
			 <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Ejército Nacional  <span class="dirapertura"> · &nbsp;José Luis Lagrange 103</span> <span class="fechaapertura"> · &nbsp; 05 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Aeropuerto Tijuana <span class="dirapertura"> · &nbsp;Sala B del Aeropuerto Internacional de Tijuana</span> <span class="fechaapertura"> · &nbsp; 4 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Parques Plaza <span class="dirapertura"> · &nbsp;Lago Alberto 442, Anáhuac 1ª Secc</span> <span class="fechaapertura"> · &nbsp;8 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Aeropuerto Tijuana <span class="dirapertura"> · &nbsp;Sala B del Aeropuerto Internacional de Tijuana</span> <span class="fechaapertura"> · &nbsp;4 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Ejército Nacional  <span class="dirapertura"> · &nbsp;José Luis Lagrange 103</span> <span class="fechaapertura"> · &nbsp; 05 de junio</span></div>
			  <div class="ticker__item"><img src="/img/2019/globosw.svg" class="globos">Espera la próxima inauguración de Vips Parques Plaza <span class="dirapertura"> · &nbsp;Lago Alberto 442, Anáhuac 1ª Secc</span> <span class="fechaapertura"> · &nbsp;8 de junio</span></div>

			</div>
		</div>
	</div>

</div>


<script src="/js/jquery-inertiaScroll.js"></script>
<script src="/js/wow.min.js"></script>
<script src="https://brokensquare.com/Code/jquery-flipster/dist/jquery.flipster.min.js"></script>
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
<link rel='stylesheet prefetch' href='https://brokensquare.com/Code/jquery-flipster/dist/jquery.flipster.min.css'>
 <script src='/slick/slick.min.js'></script>
<script>

	function heightPatterns(){
	setTimeout(function(){
		var h1 = $(".carouselbanners").height();
		h1 = h1 + h1/3;
		$(".pattern1").css("height", h1+"px");
		$(".pattern2").css("height", h1+"px");
	},1000);


	}
    new WOW().init();

	$(function(){
		$(".box").inertiaScroll({
			parent: $("#content")
		});
	});



	$( document ).on( "ready" , function() {



	$('.carouselbanners').slick({

		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 2,
		lazyLoad: 'progressive',

		accessibility: true,


		arrows: false,

		dots:true,
		autoplay: true,
  autoplaySpeed: 4000,
  draggable: true,

	});

	heightPatterns();



});

					// Fixed Header


/* jshint browser: true, jquery: true, devel: true */
/* global window, jQuery */

(function($, window, undefined) {
    'use strict';

    function throttle(func, delay) {
        var timer = null;

        return function() {
            var context = this,
                args = arguments;

            if ( timer === null ) {
                timer = setTimeout(function() {
                    func.apply(context, args);
                    timer = null;
                }, delay);
            }
        };
    }

    // Check for browser CSS support and cache the result for subsequent calls.
    var checkStyleSupport = (function() {
        var support = {};
        return function(prop) {
            if ( support[prop] !== undefined ) { return support[prop]; }

            var div = document.createElement('div'),
                style = div.style,
                ucProp = prop.charAt(0).toUpperCase() + prop.slice(1),
                prefixes = ["webkit", "moz", "ms", "o"],
                props = (prop + ' ' + (prefixes).join(ucProp + ' ') + ucProp).split(' ');

            for (var i in props) {
                if ( props[i] in style ) { return support[prop] = props[i]; }
            }

            return support[prop] = false;
        };
    }());

    var svgNS = 'https://www.w3.org/2000/svg',
        svgSupport = (function() {
            var support;
            return function() {
                if ( support !== undefined ) { return support; }
                var div = document.createElement('div');
                div.innerHTML = '<svg/>';
                support = ( div.firstChild && div.firstChild.namespaceURI === svgNS );
                return support;
            };
        }());

    var $window = $(window),

        transformSupport = checkStyleSupport('transform'),

        defaults = {
            itemContainer: 'ul',
            // [string|object]
            // Selector for the container of the flippin' items.

            itemSelector: 'li',
            // [string|object]
            // Selector for children of `itemContainer` to flip

            start: 'center',
            // ['center'|number]
            // Zero based index of the starting item, or use 'center' to start in the middle

            fadeIn: 400,
            // [milliseconds]
            // Speed of the fade in animation after items have been setup

            loop: false,
            // [true|false|number]
            // Loop around when the start or end is reached
            // If number, this is the number of items that will be shown when the beginning or end is reached

            autoplay: false,
            // [false|milliseconds]
            // If a positive number, Flipster will automatically advance to next item after that number of milliseconds

            pauseOnHover: true,
            // [true|false]
            // If true, autoplay advancement will pause when Flipster is hovered

            style: 'coverflow',
            // [coverflow|carousel|flat|...]
            // Adds a class (e.g. flipster--coverflow) to the flipster element to switch between display styles
            // Create your own theme in CSS and use this setting to have Flipster add the custom class

            spacing: -0.6,
            // [number]
            // Space between items relative to each item's width. 0 for no spacing, negative values to overlap

            click: true,
            // [true|false]
            // Clicking an item switches to that item

            keyboard: true,
            // [true|false]
            // Enable left/right arrow navigation

            scrollwheel: true,
            // [true|false]
            // Enable mousewheel/trackpad navigation; up/left = previous, down/right = next

            touch: true,
            // [true|false]
            // Enable swipe navigation for touch devices

            nav: false,
            // [true|false|'before'|'after']
            // If not false, Flipster will build an unordered list of the items
            // Values true or 'before' will insert the navigation before the items, 'after' will append the navigation after the items

            buttons: false,
            // [true|false|'custom']
            // If true, Flipster will insert Previous / Next buttons with SVG arrows
            // If 'custom', Flipster will not insert the arrows and will instead use the values of `buttonPrev` and `buttonNext`

            buttonPrev: 'Previous',
            // [text|html]
            // Changes the text for the Previous button

            buttonNext: 'Next',
            // [text|html]
            // Changes the text for the Next button

            onItemSwitch: false
            // [function]
            // Callback function when items are switched
            // Arguments received: [currentItem, previousItem]
        },

        classes = {
            main: 'flipster',
            active: 'flipster--active',
            container: 'flipster__container',

            nav: 'flipster__nav',
            navChild: 'flipster__nav__child',
            navItem: 'flipster__nav__item',
            navLink: 'flipster__nav__link',
            navCurrent: 'flipster__nav__item--current',
            navCategory: 'flipster__nav__item--category',
            navCategoryLink: 'flipster__nav__link--category',

            button: 'flipster__button',
            buttonPrev: 'flipster__button--prev',
            buttonNext: 'flipster__button--next',

            item: 'flipster__item',
            itemCurrent: 'flipster__item--current',
            itemPast: 'flipster__item--past',
            itemFuture: 'flipster__item--future',
            itemContent: 'flipster__item__content'
        },

        classRemover = new RegExp('\\b(' + classes.itemCurrent + '|' + classes.itemPast + '|' + classes.itemFuture + ')(.*?)(\\s|$)', 'g'),
        whiteSpaceRemover = new RegExp('\\s\\s+', 'g');

    $.fn.flipster = function(options) {
        var isMethodCall = (typeof options === 'string' ? true : false);

        if ( isMethodCall ) {
            var args = Array.prototype.slice.call(arguments, 1);
            return this.each(function() {
                var methods = $(this).data('methods');
                if ( methods[options] ) {
                    return methods[options].apply(this, args);
                } else {
                    return this;
                }
            });
        }

        var settings = $.extend({}, defaults, options);

        return this.each(function() {

            var self = $(this),
                methods,

                _container,
                _containerWidth,

                _items,
                _itemOffsets = [],
                _currentItem,
                _currentIndex = 0,

                _nav,
                _navItems,
                _navLinks,

                _playing = false,
                _startDrag = false;

            function buildButtonContent(dir) {
                var text = ( dir === 'next' ? settings.buttonNext : settings.buttonPrev );

                if ( settings.buttons === 'custom' || !svgSupport ) { return text; }

                return '<svg viewBox="0 0 13 20" xmlns="' + svgNS + '" aria-labelledby="title"><title>' + text + '</title><polyline points="10,3 3,10 10,17"' + (dir === 'next' ? ' transform="rotate(180 6.5,10)"' : '') + '/></svg>';
            }

            function buildButton(dir) {
                dir = dir || 'next';

                return $('<button class="' + classes.button + ' ' + ( dir === 'next' ? classes.buttonNext : classes.buttonPrev ) + '" role="button" />')
                    .html(buildButtonContent(dir))
                    .on('click', function(e) {
                        jump(dir);
                        e.preventDefault();
                    });

            }

            function buildButtons() {
                if ( settings.buttons && _items.length > 1 ) {
                    self.find('.' + classes.button).remove();
                    self.append(buildButton('prev'), buildButton('next'));
                }
            }

            function buildNav() {
                var navCategories = {};

                if ( !settings.nav || _items.length <= 1 ) { return; }

                if ( _nav ) { _nav.remove(); }

                _nav = $('<ul class="' + classes.nav + '" role="navigation" />');
                _navLinks = $('');

                _items.each(function(i) {
                    var item = $(this),
                        category = item.data('flip-category'),
                        itemTitle = item.data('flip-title') || item.attr('title') || i,
                        navLink = $('<a href="#" class="' + classes.navLink + '">' + itemTitle + '</a>')
                        .data('index', i);

                    _navLinks = _navLinks.add(navLink);

                    if ( category ) {

                        if ( !navCategories[category] ) {

                            var categoryItem = $('<li class="' + classes.navItem + ' ' + classes.navCategory + '">');
                            var categoryLink = $('<a href="#" class="' + classes.navLink + ' ' + classes.navCategoryLink + '" data-flip-category="' + category + '">' + category + '</a>')
                                    .data('category', category)
                                    .data('index', i);

                            navCategories[category] = $('<ul class="' + classes.navChild + '" />');

                            _navLinks = _navLinks.add(categoryLink);

                            categoryItem
                                .append(categoryLink, navCategories[category])
                                .appendTo(_nav);
                        }

                        navCategories[category].append(navLink);
                    } else {
                        _nav.append(navLink);
                    }

                    navLink.wrap('<li class="' + classes.navItem + '">');

                });

                _nav.on('click', 'a', function(e) {
                    var index = $(this).data('index');
                    if ( index >= 0 ) {
                        jump(index);
                        e.preventDefault();
                    }
                });

                if ( settings.nav === 'after' ) { self.append(_nav); }
                else { self.prepend(_nav); }

                _navItems = _nav.find('.' + classes.navItem);
            }

            function updateNav() {
                if ( settings.nav ) {

                    var category = _currentItem.data('flip-category');

                    _navItems.removeClass(classes.navCurrent);

                    _navLinks
                        .filter(function() {
                            return ($(this).data('index') === _currentIndex || (category && $(this).data('category') === category));
                        })
                        .parent()
                        .addClass(classes.navCurrent);

                }
            }

            function noTransition() {
                self.css('transition', 'none');
                _container.css('transition', 'none');
                _items.css('transition', 'none');
            }

            function resetTransition() {
                self.css('transition', '');
                _container.css('transition', '');
                _items.css('transition', '');
            }

            function calculateBiggestItemHeight() {
                var biggestHeight = 0,
                    itemHeight;

                _items.each(function() {
                    itemHeight = $(this).height();
                    if ( itemHeight > biggestHeight ) { biggestHeight = itemHeight; }
                });
                return biggestHeight;
            }

            function resize(skipTransition) {
                if ( skipTransition ) { noTransition(); }

                _containerWidth = _container.width();
                _container.height(calculateBiggestItemHeight());

                _items.each(function(i) {
                    var item = $(this),
                        width,
                        left;

                    item.attr('class', function(i, c) {
                        return c && c.replace(classRemover, '').replace(whiteSpaceRemover, ' ');
                    });

                    width = item.outerWidth();

                    if ( settings.spacing !== 0 ) {
                        item.css('margin-right', ( width * settings.spacing ) + 'px');
                    }

                    left = item.position().left;
                    _itemOffsets[i] = -1 * ((left + (width / 2)) - (_containerWidth / 2));

                    if ( i === _items.length - 1 ) {
                        center();
                        if ( skipTransition ) { setTimeout(resetTransition, 1); }
                    }
                });
            }

            function center() {
                var total = _items.length,
                    loopCount = ( settings.loop !== true && settings.loop > 0 ? settings.loop : false ),
                    item, newClass, zIndex, past, offset;

                if ( _currentIndex >= 0 ) {

                    _items.each(function(i) {
                        item = $(this);
                        newClass = ' ';

                        if ( i === _currentIndex ) {
                            newClass += classes.itemCurrent;
                            zIndex = (total + 2);
                        } else {
                            past = ( i < _currentIndex ? true : false );
                            offset = ( past ? _currentIndex - i : i - _currentIndex );

                            if ( loopCount ) {
                                if ( _currentIndex <= loopCount && i > _currentIndex + loopCount ) {
                                    past = true;
                                    offset = (total + _currentIndex) - i;
                                } else if ( _currentIndex >= total - loopCount && i < _currentIndex - loopCount ) {
                                    past = false;
                                    offset = (total - _currentIndex) + i;
                                }
                            }

                            newClass += (past ?
                                classes.itemPast + ' ' + classes.itemPast + '-' + offset :
                                classes.itemFuture + ' ' + classes.itemFuture + '-' + offset
                            );

                            zIndex = total - offset;
                        }

                        item
                            .css('z-index', zIndex * 2)
                            .attr('class', function(i, c) {
                                return c && c.replace(classRemover, '').replace(whiteSpaceRemover, ' ') + newClass;
                            });
                    });

                    if ( !_containerWidth || _itemOffsets[_currentIndex] === undefined ) { resize(true); }

                    if ( transformSupport ) {
                        _container.css('transform', 'translateX(' + _itemOffsets[_currentIndex] + 'px)');
                    } else {
                        _container.css('left', _itemOffsets[_currentIndex] + 'px' );
                    }
                }

                updateNav();
            }

            function jump(to) {
                var _previous = _currentIndex;

                if ( _items.length <= 1 ) { return; }

                if ( to === 'prev' ) {
                    if ( _currentIndex > 0 ) { _currentIndex--; }
                    else if ( settings.loop ) { _currentIndex = _items.length - 1; }
                } else if ( to === 'next' ) {
                    if ( _currentIndex < _items.length - 1 ) { _currentIndex++; }
                    else if ( settings.loop ) { _currentIndex = 0; }
                } else if ( typeof to === 'number' ) { _currentIndex = to;
                } else if ( to !== undefined ) {
                    // if object is sent, get its index
                    _currentIndex = _items.index(to);
                }

                _currentItem = _items.eq(_currentIndex);

                if ( _currentIndex !== _previous && settings.onItemSwitch ) {
                    settings.onItemSwitch.call(self, _items[_currentIndex], _items[_previous]);
                }

                center();

                return self;
            }

            function play(interval) {
                settings.autoplay = interval || settings.autoplay;

                clearInterval(_playing);

                _playing = setInterval(function() {
                    var prev = _currentIndex;
                    jump('next');
                    if ( prev === _currentIndex && !settings.loop ) { clearInterval(_playing); }
                }, settings.autoplay);

                return self;
            }

            function pause() {
                clearInterval(_playing);
                if ( settings.autoplay ) { _playing = -1; }

                return self;
            }

            function show() {
                resize(true);
                self.hide()
                    .css('visibility', '')
                    .addClass(classes.active)
                    .fadeIn(settings.fadeIn);
            }

            function index() {

                _container = self.find(settings.itemContainer).addClass(classes.container);

                _items = _container.find(settings.itemSelector);

                if ( _items.length <= 1 ) { return; }

                _items
                    .addClass(classes.item)
                    // Wrap inner content
                    .each(function() {
                        var item = $(this);
                        if ( !item.children('.' + classes.itemContent ).length) {
                            item.wrapInner('<div class="' + classes.itemContent + '" />');
                        }
                    });

                // Navigate directly to an item by clicking
                if ( settings.click ) {
                    _items.on('click.flipster touchend.flipster', function(e) {
                        if ( !_startDrag ) {
                            if ( !$(this).hasClass(classes.itemCurrent) ) { e.preventDefault(); }
                            jump(this);
                        }
                    });
                }

                // Insert navigation if enabled.
                buildButtons();
                buildNav();

                if ( _currentIndex >= 0 ) { jump(_currentIndex); }

                return self;
            }

            function keyboardEvents(elem) {
                if ( settings.keyboard ) {
                    elem[0].tabIndex = 0;
                    elem.on('keydown.flipster', throttle(function(e) {
                        var code = e.which;
                        if ( code === 37 || code === 39 ) {
                            jump( code === 37 ? 'prev' : 'next' );
                            e.preventDefault();
                        }
                    }, 250, true));
                }
            }

            function wheelEvents(elem) {
                if ( settings.scrollwheel ) {
                    var _wheelInside = false,
                        _actionThrottle = 0,
                        _throttleTimeout = 0,
                        _delta = 0,
                        _dir, _lastDir;

                    elem
                        .on('mousewheel.flipster wheel.flipster', function() { _wheelInside = true; })
                        .on('mousewheel.flipster wheel.flipster', throttle(function(e) {

                            // Reset after a period without scrolling.
                            clearTimeout(_throttleTimeout);
                            _throttleTimeout = setTimeout(function() {
                                _actionThrottle = 0;
                                _delta = 0;
                            }, 300);

                            e = e.originalEvent;

                            // Add to delta (+=) so that continuous small events can still get past the speed limit, and quick direction reversals get cancelled out
                            _delta += (e.wheelDelta || (e.deltaY + e.deltaX) * -1); // Invert numbers for Firefox

                            // Don't trigger unless the scroll is decent speed.
                            if ( Math.abs(_delta) < 25 ) { return; }

                            _actionThrottle++;

                            _dir = (_delta > 0 ? 'prev' : 'next');

                            // Reset throttle if direction changed.
                            if ( _lastDir !== _dir ) { _actionThrottle = 0; }
                            _lastDir = _dir;

                            // Regular scroll wheels trigger less events, so they don't need to be throttled. Trackpads trigger many events (inertia), so only trigger jump every three times to slow things down.
                            if ( _actionThrottle < 6 || _actionThrottle % 3 === 0 ) { jump(_dir); }

                            _delta = 0;

                        }, 50));

                    // Disable mousewheel on window if event began in elem.
                    $window.on('mousewheel.flipster wheel.flipster', function(e) {
                        if ( _wheelInside ) {
                            e.preventDefault();
                            _wheelInside = false;
                        }
                    });
                }
            }

            function touchEvents(elem) {
                if ( settings.touch ) {
                    var _startDragY = false,
                        _touchJump = throttle(jump, 300),
                        x, y, offsetY, offsetX;

                    elem.on({
                        'touchstart.flipster': function(e) {
                            e = e.originalEvent;
                            _startDrag = (e.touches ? e.touches[0].clientX : e.clientX);
                            _startDragY = (e.touches ? e.touches[0].clientY : e.clientY);
                            //e.preventDefault();
                        },

                        'touchmove.flipster': throttle(function(e) {
                            if ( _startDrag !== false ) {
                                e = e.originalEvent;

                                x = (e.touches ? e.touches[0].clientX : e.clientX);
                                y = (e.touches ? e.touches[0].clientY : e.clientY);
                                offsetY = y - _startDragY;
                                offsetX = x - _startDrag;

                                if ( Math.abs(offsetY) < 100 && Math.abs(offsetX) >= 30 ) {
                                    _touchJump((offsetX < 0 ? 'next' : 'prev'));
                                    _startDrag = x;
                                    e.preventDefault();
                                }

                            }
                        }, 100),

                        'touchend.flipster touchcancel.flipster ': function() { _startDrag = false; }
                    });
                }
            }

            function init() {

                var style;

                self.css('visibility', 'hidden');

                index();

                if ( _items.length <= 1 ) {
                    self.css('visibility', '');
                    return;
                }

                style = (settings.style ? 'flipster--' + settings.style.split(' ').join(' flipster--') : false);

                self.addClass([
                    classes.main,
                    (transformSupport ? 'flipster--transform' : ' flipster--no-transform'),
                    style, // 'flipster--'+settings.style : '' ),
                    (settings.click ? 'flipster--click' : '')
                ].join(' '));

                // Set the starting item
                if ( settings.start ) {
                    // Find the middle item if start = center
                    _currentIndex = ( settings.start === 'center' ? Math.floor(_items.length / 2) : settings.start );
                }

                jump(_currentIndex);

                var images = self.find('img');

                if ( images.length ) {
                    var imagesLoaded = 0;

                    // Resize after all images have loaded.
                    images.on('load', function() {
                        imagesLoaded++;
                        if ( imagesLoaded >= images.length ) { show(); }
                    });

                    // Fallback to show Flipster while images load in case it takes a while.
                    setTimeout(show, 750);
                } else {
                    show();
                }

                // Attach event bindings.
                $window.on('resize.flipster', throttle(resize, 400));

                if ( settings.autoplay ) { play(); }

                if ( settings.pauseOnHover ) {
                    _container
                        .on('mouseenter.flipster', pause)
                        .on('mouseleave.flipster', function() {
                            if ( _playing === -1 ) { play(); }
                        });
                }

                keyboardEvents(self);
                wheelEvents(_container);
                touchEvents(_container);
            }

            // public methods
            methods = {
                jump: jump,
                next: function() { return jump('next'); },
                prev: function() { return jump('prev'); },
                play: play,
                pause: pause,
                index: index
            };
            self.data('methods', methods);

            // Initialize if flipster is not already active.
            if ( !self.hasClass(classes.active) ) { init(); }
        });
    };
})(jQuery, window);



var flipContainer = $('.flipster'),
    flipItemContainer = flipContainer.find('.flip-items'),
    flipItem = flipContainer.find('li');

flipContainer.flipster({
  itemContainer: flipItemContainer,
  itemSelector: flipItem,
  loop: 2,
  start: 2,
  style: 'infinite-carousel',
  spacing: 0,
  scrollwheel: false,
  //nav: 'after',
  buttons: false
});


</script>

<!-- Footer =============================-->

<?php include('footer.php');?>
