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
    include('../header-bootstrap.php');
?>

<link rel="stylesheet" href="/css/animate.css">
<link rel='stylesheet prefetch' href='slick/slick.css'>
<link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<link href="aos/aos.css" rel="stylesheet">


<style>
@font-face {
    font-family: 'Museo 900';
    src: url('../fonts/Museo900-Regular.eot');
    src:url('../fonts/Museo900-Regular.woff2') format('woff2'),
        url('../fonts/Museo900-Regular.woff') format('woff'),
        url('../fonts/Museo900-Regular.ttf') format('truetype'),
        url('../fonts/Museo900-Regular.svg') format('svg');
    font-weight: bold;
    font-style: normal;
	font-display: fallback; /* Define how the browser behaves during download */
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

@font-face {
    font-family: 'Museo 300';
    src: local('../fonts/Museo300-Regular.woff2') format('woff2'),
        local('../fonts/Museo300-Regular.woff') format('woff'),
        local('../fonts/Museo900-Regular.ttf') format('truetype'),
        local('../fonts/Museo300-Regular.svg#Museo-300') format('svg');
    font-weight: 300;
    font-style: normal;
}

body {
    background-color: #fff;
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
*{outline:0; box-sizing:border-box;}
main, body {
	overflow-x: hidden;
	overflow-y: hidden;
	max-height: none !important;
}
.main {
    padding-bottom: 5%;
    
}
.fa-chevron-left::before {
    content: "\f053";
    display: none;
}
.fa-chevron-right::before {
    content: "\f054";
    display: none;
}
.pl-4 p {
	margin-top: 0;
	margin-bottom: 0;
}
.precio__wrapper.align-items-center {
	line-height: 1;
}
.slick-arrow {
	cursor: pointer;
}
div#hero {
	width: 100%;
	min-height: 100vh;
	background: url(./img/bgred.png);
	background-size: cover;
	background-position: bottom;
	padding: 2.5% 5%;
	padding-right: 40%;
	color: #fff;
	position: relative;
	margin-bottom: 30vh;
}
.burgerbg {
	width: 100%;
	min-height: 140vh;
	/* background-size: contain; */
	position: absolute;
	background: url(img/main-hero.png);
	right: 0;
	top: 0;
	z-index: 1;
	background-position: right center;
	background-size: contain;
	background-repeat: no-repeat;
}

main {
	padding-top: 20px;
}
div#hero h1 {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 3rem;
	letter-spacing: .1rem;
}
#hero h2 {
	font-weight: 200;
	text-transform: uppercase;
	font-size: 1.75rem;
    padding-left: 1.5rem;
    letter-spacing: .05rem;
}
#hero p {
	width: 90%;
	padding-left: 1.5rem;
	font-size: 1.25rem;
}
.llevamos {
	font-weight: 500;
	font-size: 1.25rem;
}
#hero .counter p {
	font-size: 10rem;
	font-weight: 500;
	line-height: 1;
	letter-spacing: .25rem;
	text-align: right;
	width: 17.5rem;
}
#hero .counter {
	position: relative;
}
#hero .counter p::after {
	content: '';
	position: absolute;
	width: 130px;
	height: 100%;
	background: url(img/comidas.png);
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
    top: 0;
    opacity:1;
    transition:1s all ease;
}
#hero .counter p.changed::after {
	transition:1s all ease;
    opacity:1;
}
#cta1 {
	background: #fff;
	color: #ed1c2d;
	padding: 1rem 2rem;
	border-radius: 1rem;
	margin-left: 1.5rem;
	font-weight: 500;
	display: inline-block;
    margin-bottom: 1.5rem;
    transition:.35s all ease;
    text-transform: uppercase;
	letter-spacing: .1rem;
}
#cta1:hover {
    transition:.35s all ease;
    transform:scale(1.15);
}
#twtimeline {
	width: 60%;
	display: block;
	padding-left: 1rem;
	margin-bottom: 1rem;
}
.textleft {
	position: relative;
	z-index: 3;
}
.twit h4 {
	font-size: 1.25rem;
}
.twit h4 a {
	font-weight:300;
}
#hero .twit p {
	font-size: 1rem;
}
.twit a {
	color: #fff;
	font-weight: 500;
}
#comoAyudamos {
	padding: 0 5% 5%;
}
#comoAyudamos h3 {
	font-weight: bold;
	color: #ed1c2d;
	font-size: 2rem;
}
#cta2, #cta3 {
	background: #ed1c2d;
	color: #fff;
	padding: .75rem 2rem;
	border-radius: 1.25rem;
	margin-left: 0;
	font-weight: 500;
	display: inline-block;
	margin-bottom: 1.5rem;
	transition: .35s all ease;
	text-transform: uppercase;
	letter-spacing: .1rem;
}
#cta2:hover {
    transform:scale(1.1);
	transition: .35s all ease;
}
.carouselplatillos {
	text-align: center;
	padding: 0 10%;
	margin-top: -15vh;
}
.carouselplatillos img {
	width: 100%;
	padding: 0 10%;
}
.slick-dots {
	left: 0;
}
.platillo-nombre {
	margin-top: -5%;
}
.slick-dots li button::before {
	width: 10px;
	height: 10px;
	content: '';
	opacity: 1;
	color: transparent;
	border: 1px solid #ed1c2d;
	border-radius: 50%;
}
.slick-dots li.slick-active button::before {
	opacity: 1;
	background:#ed1c2d;
}
#nuestrosHeroes img {
	width: 100%;
}
#nuestrosHeroes .col-6 {
    padding:0;
    position:relative;
}
.imgcomensal{
    position:relative;
}
.imgcomensal::after {
	content: '';
	position: absolute;
	top: calc(50% - 80px);
	width: 80px;
	height: 80px;
	background: url(img/heart.png);
	z-index: 2;
	display: inline-block;
	background-size: 100%;
	margin-left: -40px;
	transition: .4s all ease;
	left: 100%;
}
.imgcomensal::after:hover {
    transform:scale(1.2);
    transition:.4s all ease;
}
.caption {
	position: absolute;
	width: 100%;
	/* bottom: 50%; */
	height: 100%;
	color: #fff;
	text-align: center;
	/* vertical-align: bottom; */
	/* display: inline-block; */
	/* z-index: 2; */
	top: 0;
	padding: 0 15%;
}
.captioncont {
	position: absolute;
	width: 100%;
	bottom: 0;
	height: 100%;
	color: #fff;
	text-align: center;
	vertical-align: bottom;
	display: table;
	z-index: 2;
	top: 0;
	padding: 10% 15%;
}
.caption {
	position: relative;
	width: 100%;
	height: auto;
	text-align: center;
	vertical-align: bottom;
	display: table-cell;
	padding: 0;
}
#social {
	padding: 5%;
	text-align: center;
	background: #edeef0;
}
#social h3 {
	font-weight: bold;
	color: #ed1c2d;
	font-size: 2rem;
	padding-bottom: 2rem;
}
#social img {
	width: 75%;
}
#estetoscopio img {
	width: 35%;
	padding-top: 2.55%;
	min-width: 200px;
}
#comoComparto {
	padding: 5% 7.5%;
	text-align: center;
}
#comoComparto h3 {
	font-weight: bold;
	color: #ed1c2d;
	font-size: 2rem;
	text-transform: uppercase;
}
#comoComparto img {
	width: 100%;
}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
	float: left;
}
#comoComparto #pasos h3 {
	font-size: 1.5rem;
}
#comoComparto #pasos img {
	width: 50%;
	margin-bottom: 1rem;
}
#pasos {
	padding-top: 7.5%;
}
.desktop {
	display: inline-block;
}
.mobile {
	display: none;
}
#comoAyudamos {
	position: relative;
	z-index: 2;
}
#iphone .grow {
	transition: all .35s ease;
	display: inline-block;
}
@media (max-width:1100px){
    div#hero {
	padding-right: 20%;
}
}
@media (max-width:800px){
main, body {
	overflow-x: hidden;
	overflow-y: auto;
	max-height: none !important;
}
.desktop {
	display: none;
}
.mobile {
	display: inline-block;
}
    main {
	padding-top: 0;
}
.burgerbg {
	min-height: 160vh;
	width: 115%;
}
#comoAyudamos .col-6 {
	flex: none;
	max-width: 100%;
	width: 100%;
	text-align: center;
}
div#hero {
	margin-bottom: 27.5vh;
}
#comoComparto {
	padding: 7.5% 2.5%;
}
#iphone {
    width: 50%;
    max-width:50%;
}
#pasos {
	padding-top: 2.5%;
	width: 50%;
}
#paso1, #paso2, #paso3 {
	width: 100%;
	max-width: 100%;
}
#comoComparto #pasos img {
	width: 30%;
	margin-bottom: .5rem;
}
.imgagregadores {
	max-width: 60%;
}
#social img {
	width: 85%;
}

}
@media(max-width:500px){
    div#nuestrosHeroes .col-12 {
    padding: 0;
}
    div#hero {
	padding-right: 5%;
	text-align: center;
}
div#hero h1 {
	font-size: 2rem;
	letter-spacing: .05rem;
}
#hero h2 {
	font-size: 1.25rem;
	padding-left: 0;
	letter-spacing: .05rem;
}
#hero p {
	width: 100%;
	padding-left: 0rem;
	font-size: 1rem;
	line-height: 1.2;
}
#hero .counter p {
	font-size: 7rem;
	letter-spacing: .15rem;
	width: 14.5rem;
}
.burgerbg {
	min-height: 180vh;
	width: 130%;
}
#twtimeline {
	width: 100%;
	padding-left: 0;
}
#hero .twit p {
	font-size: .85rem;
}
.twit h4 {
	font-size: 1rem;
}
#hero .counter p::after {
	width: 100px;
	top: -10%;
}
#cta1 {
	margin-left: 0;
}
#cta2, #cta3 {
	letter-spacing: .05rem;
	font-size: .85rem;
}
div#hero {
	padding: 5%;
}
#nuestrosHeroes .col-6 {
	max-width: 100%;
	width: 100%;
	flex: none;
}
.imgcomensal::after {
	top: calc(100% - 40px);
	background: url(img/heart.png);
	z-index: 2;
	display: inline-block;
	background-size: 100%;
	margin-left: -50%;
	transition: .4s all ease;
	left: 100%;
	transform: translateX(-40px);
	filter: drop-shadow(1px 3px 5px #555);
}
#nuestrosHeroes img {
	min-height: 280px;
	object-fit: cover;
	object-position: 10% -4px;
}
.captioncont h3 {
	font-size: 1.5rem;
}
.captioncont p {
	font-size: .85rem;
	line-height: 1.3;
}
#comoComparto h3 {
	font-size: 1.75rem;
}
#iphone {
	width: 100%;
	max-width: 100%;
}
#pasos {
	padding-top: 2.5%;
	width: 100%;
	max-width: 100%;
}
#comoComparto img {
	width: 100%;
}
#social h3 {
	font-size: 1.5rem;
	padding-bottom: 1rem;
}
#social img {
	width: 95%;
}
#comoAyudamos h3 {
	margin-top: 1rem;
}
.carouselplatillos img {
	padding: 0;
}
.imgagregadores {
	max-width: 100%;
}
div#hero {
	min-height: 900px;
}
.burgerbg {
	min-height: 1600px;
	width: 165%;
}
}

@media(max-width:368px){
    #hero .counter p {
	width: 13rem;
}

#cta2, #cta3 {
	padding: .75rem 3rem;
}
.carouselplatillos {
	margin-top: -10vh;
}
#iphone {
	padding: 0 10%;
}
}
@media(max-width:325px){
    #hero .counter p {
	width: 12rem;
}
#social h3 {
	font-size: 1.25rem;
	padding-bottom: 1.5rem;
	margin-top: 1rem;
}
}
</style>

  <main>
    <div class="row">
      <div class="col-12">
        <div id="hero">
            <div class="burgerbg" data-aos="fade-left"></div>
            <div class="textleft" data-aos="fade-right">
                <h1>#Comparte La Mesa Con Un Héroe.</h1>
                <h2>Desde casa podemos hacerle más bonito el día a un héroe.</h2>
                <p>Es momento de ayudar y de solidarizarnos con aquellos que salen todos los días a salvar la vida de alguien más y también a aquellos que aunque no visten de blanco,  contribuyen desde su labor a hacer la diferencia.</p>
                <p class="llevamos">LLEVAMOS</p>
                <div class="counter" data-aos="fade-up" data-aos-delay="300"><p data-count="300">0</p></div>
                <a id="cta1" class="scrollto" href="#comoComparto" data-aos="zoom-in-up">Haz tu pedido y súmate</a>

                <div id="twtimeline" data-aos="fade-up" data-aos-delay="300">
                    <div class="twit">
                        <h4><i class="fab fa-twitter"></i> SuperMario <a>@SuperMario</a></h4>
                        <p>Woooooo! Con <a href="#"> @Vips </a>  comes rico y ayudas a que un héroe coma rico ¡Gracias Vips, qué chido! <a href="#"> #ComparteLaMesaConUnHéroe</a>.</p>
                    </div>

                    <div class="twit">
                        <h4><i class="fab fa-twitter"></i> SuperMario2 <a>@SuperMario2</a></h4>
                        <p>Woooooo! Con <a href="#"> @Vips </a>  comes rico y ayudas a que un héroe coma rico ¡Gracias Vips, qué chido! <a href="#"> #ComparteLaMesaConUnHéroe</a>.</p>
                    </div>

                    <div class="twit">
                        <h4><i class="fab fa-twitter"></i> SuperMario3 <a>@SuperMario3</a></h4>
                        <p>Woooooo! Con <a href="#"> @Vips </a>  comes rico y ayudas a que un héroe coma rico ¡Gracias Vips, qué chido! <a href="#"> #ComparteLaMesaConUnHéroe</a>.</p>
                    </div>

                    <div class="twit">
                        <h4><i class="fab fa-twitter"></i> SuperMario4 <a>@SuperMario4</a></h4>
                        <p>Woooooo! Con <a href="#"> @Vips </a>  comes rico y ayudas a que un héroe coma rico ¡Gracias Vips, qué chido! <a href="#"> #ComparteLaMesaConUnHéroe</a>.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row" id="comoAyudamos">
            <div class="col-6"  data-aos="fade-right">
                <div class="carouselplatillos">
                    <div class="slide">
                        <img src="https://vips.com.mx/img/2019/tequeremosvips/Platillos/Caldo-tlalpeno.png" alt="Caldo tlalpeño">
                        <p class="platillo-nombre">Caldo tlalpeño</p>
                    </div>
                    <div class="slide">
                        <img src="https://vips.com.mx/img/2019/tequeremosvips/Platillos/chilaquiles-vips.png" alt="Chilaquiles Vips">
                        <p class="platillo-nombre">Chilaquiles Vips</p>
                    </div>
                    <div class="slide">
                        <img src="https://vips.com.mx/img/2019/tequeremosvips/Platillos/chilaquiles_yucatecos.png" alt="Chilaquiles yucatecos">
                        <p class="platillo-nombre">Chilaquiles yucatecos</p>
                    </div>
                    <div class="slide">
                        <img src="https://vips.com.mx/img/2019/tequeremosvips/Platillos/Crepas-de-cajeta.png" alt="Crepas de cajeta">
                        <p class="platillo-nombre">Crepas de cajeta</p>
                    </div>
                    <div class="slide">
                        <img src="https://vips.com.mx/img/2019/tequeremosvips/Platillos/Enchiladas de Mole.png" alt="Enchiladas de mole">
                        <p class="platillo-nombre">Enchiladas de mole</p>
                    </div>
                                
                </div>
            </div>

            <div class="col-6"  data-aos="fade-left">
                <h3>CÓMO AYUDAMOS</h3>
                <p>Al comprar tu platillo, estarás donando un porcentaje para regalar a través de vips, <b>300</b> comidas completas semanales para el personal del <b>INER (Instituto nacional de enfermedades respiratorias).</b> Éstas serán entregadas por nuestros aliados de delivery y como ellos también son héroes, les regalaremos un almuerzo como agradecimiento.</p>
                <a id="cta2" class="scrollto" href="#comoComparto">Haz tu pedido y cámbiale el día a un héroe</a>
            </div>
        </div>
        
        <div class="row" id="nuestrosHeroes">
            <div class="col-6 imgcomensal">
                <img src="img/comensal.jpg" class=""  data-aos="fade-up">
                <div class="captioncont">
                    <div class="caption">
                        <h3>NUESTROS CLIENTES</h3>
                        <p>Quédate en casa, cuídanos a todos, sigue disfrutando de tus platillos favoritos y comparte la mesa con un héroe.</p>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <img src="img/doctor.jpg" data-aos="fade-up">
                <div class="captioncont">
                    <div class="caption">
                        <h3>NUESTROS HÉROES</h3>
                        <p>Hay quienes no pueden quedarse en casa porque salen a salvar vidas o ayudan desde su labor a hacer la diferencia. Súmate y comparte la mesa con ellos.</p>
                    </div> 
                </div>  
            </div>
            <div class="col-12">
                <img src="img/repartidor.jpg" data-aos="fade-up">
                <div class="captioncont"> 
                    <div class="caption" style="vertical-align: center;">
                        <h3>ENTREGAS CON AMOR</h3>
                        <p>A los héroes que hacen llegar la comida al personal del INER, Vips como agradecimiento a su labor, les invitará un almuerzo.</p>
                    </div>
                </div> 
            </div>
        </div>

        <div class="col-12" id="comoComparto">
            <h3>Cómo comparto la mesa</h3>
            <div class="col-4 floating2" id="iphone">
                <a href="https://vips.com.mx/domicilio" class="grow"><img src="img/iphone.jpg" data-aos="fade-right"></a>
            </div>
           
            <div class="col-8" id="pasos" data-aos="fade-left">
                <div class="col-4" id="paso1" data-aos="zoom-in-up" data-aos-delay="300">
                    <img src="img/icon1.png" >
                    <h3>HAZ TU PEDIDO</h3>
                    <p>Por <b>Delivery o call center</b> (800 900 8477) ordena tu platillo favorito.</p>
                </div>
                <div class="col-4" id="paso2" data-aos="zoom-in-up" data-aos-delay="600">
                    <img src="img/icon2.png" >
                    <h3>HAZLE EL DÍA A UN HÉROE</h3>
                    <p>Un porcentaje de la ganancia será destinada a comidas completas para el personal del <b>INER</b>.</p>
                </div>
                <div class="col-4" id="paso3" data-aos="zoom-in-up" data-aos-delay="900">
                    <img src="img/icon3.png" >
                    <h3>COMPARTE LA ACCIÓN</h3>
                    <p>Y ayúdanos a que más <b>mexicanos se sumen a esta linda causa</b>.</p>
                </div>
                <div class="col-12 desktop" data-aos="fade-up">
                    <br>
                    
                    <p>Sumarte a la acción es muy sencillo. Entre más platillos consumamos todos, más cerca estaremos de la meta de entregar <b>300 comidas semanales</b>. </p>
                    <a id="cta3" class="scrollto" href="#comoComparto">Haz tu pedido y comparte la mesa</a>
                    
                </div>
                <div class="col-12 desktop" data-aos="fade-up">
                    <img src="img/agregadores.png" class="imgagregadores">
                </div>
            </div>

            <div class="col-12 mobile" data-aos="fade-up">
                    <br>
                    
                    <p>Sumarte a la acción es muy sencillo. Entre más platillos consumamos todos, más cerca estaremos de la meta de entregar <b>300 comidas semanales</b>. </p>
                    <a id="cta3" class="scrollto" href="#comoComparto">Haz tu pedido y comparte la mesa</a>
                    
                </div>
                <div class="col-12 mobile" data-aos="fade-up">
                    <img src="img/agregadores.png" class="imgagregadores">
                </div>
                
        </div>

        <div class="col-12" id="social">
            <h3>#ComparteLaMesaConUnHéroe</h3>
                <img src="img/grid.png" data-aos="fade-up">
                <div class="col-12" id="estetoscopio">
                    <img src="img/estetoscopio.png" data-aos="fade-up">
                </div>
                
        </div>
       

        
     
      </div>
    </div>
  </main>
<!-- Scripts -->
<script src="aos/aos.js"></script>
<script src='slick/slick.min.js'></script>
<script>
    setTimeout(() => {
        $(window).scroll();
    }, 100);
</script>
<script>$(document).on("ready",function(){
    setTimeout(() => {
        AOS.init({
            easing: 'ease',
            duration: 1000,
            once: true
        });

        $("main").on( 'scroll', function(){
            AOS.init({
                easing: 'ease',
                duration: 1000,
                once: true
            });
        });
        $('.counter p').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            
            $({ countNum: $this.text()}).animate({
                countNum: countTo
            },

            {

                duration: 4000,
                easing:'linear',
                step: function() {
                $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                $this.text(this.countNum);
                //alert('finished');
                }

            });  
            
            

            });
    }, 1800);

    setTimeout(() => {
        $('.counter p').toggleClass('changed');
    }, 5800);
        
        $('.carouselplatillos').slick({
            infinite:true,
            slidesToShow:1,
            slidesToScroll:1,
            lazyLoad:'ondemand',
            accessibility:true,
            arrows:false,
            dots:true,
            autoplay:true,
            responsive:[
                {breakpoint:800,
                settings:{
                    slidesToShow:1,
                    slidesToScroll:1}
                }],
            autoplaySpeed:3000,
        });
        
        $('#twtimeline').slick({
            infinite:true,
            vertical:true,
            slidesToShow:1,
            slidesToScroll:1,
            lazyLoad:'ondemand',
            accessibility:true,
            arrows:false,
            dots:false,
            autoplay:true,
            responsive:[
                {breakpoint:800,
                settings:{
                    slidesToShow:1,
                    slidesToScroll:1}
                }],
            autoplaySpeed:5000,
        });

        });
        jQuery(function() {
        jQuery('.scrollto').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                jQuery('html,body').animate({
                scrollTop: target.offset().top -80
                }, 1000);
                return false;
            }
            }
        });
        });
    </script>

<?php
include('../footer-bootstrap.php');
?>
