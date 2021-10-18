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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="/css/animate.css">


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
@media (max-width:800px){

} 
</style>
  <main>
    <div class="row">
      <div class="col-md-12">

      <div class="bg-wrapper">
        <header class="menu-hero">
            <div class="buzz desktop"><img src="img/buzz-lightyear.png" alt="buzz lightyear"></div>
            <div class="logo"><img src="img/logo-menu-infantil.png" alt="Menú Infantil Pixar"></div>
            <div class="coco desktop"><img src="img/miguel-coco.png" alt="Miguel Como"></div>
            <p class="aviso museo500">*Tu Divertipack incluye un platillo, una bebida y un artículo coleccionable</p>
        </header>

        <section class="menu museo500">
            <div class="tabs">
                <button class="tab__links museo700 tab__links--morado  tab-active"
                    onclick="openDaypart(event,'desayunos')">Desayunos</button>
                <button class="tab__links museo700 tab__links--naranja"
                    onclick="openDaypart(event,'comidasCenas')">Comidas y cenas</button>
            </div>

            <div class="desayunos daypart" id="desayunos">
                <p class="disclaimer">Servidos de 7 hrs al cierre <br>
                    Incluye: 1 platillo, 1 bebida* y un vaso coleccionable</p>
                <div class="platillos-wrapper">
                    <div class="platillo">
                        <img src="img/platillos/Hot-cakes-jr.png" alt="Hot Cakes Jr" class="platillo__img">
                        <h3 class="platillo__nombre">Hot Cakes Jr</h3>
                        <p class="platillo__calorias">(4 pzas/ 288 Cal)</p>
                        <p class="platillo__descripcion">Mini hot cakes servidos con fresas y plátanos</p>
                    </div>
                    <div class="platillo">
                        <img src="img/platillos/Gatito.png" alt="Gatito" class="platillo__img">
                        <h3 class="platillo__nombre">Gatito</h3>
                        <p class="platillo__calorias">(304 Cal)</p>
                        <p class="platillo__descripcion">Tortilla de huevo y verduras. Servida con papas a la francesa,
                            pan
                            tostado con mermelada y fresa</p>
                    </div>
                    <div class="platillo">
                        <img src="img/platillos/Combinadito.png" alt="Combinadito" class="platillo__img">
                        <h3 class="platillo__nombre">Combinadito</h3>
                        <p class="platillo__calorias">(399 Cal)</p>
                        <p class="platillo__descripcion">Mini hot cakes con miel servidos con un huevo revuelto con
                            jamón de
                            pavo y bastones de manzana</p>
                    </div>
                </div>
            </div>

            <div class="comidas none daypart" id="comidasCenas">
                <p class="disclaimer">Servidos de 13 hrs al cierre <br>
                    Incluye: 1 platillo, 1 bebida* y un vaso coleccionable</p>
                <div class="platillos-wrapper">
                    <div class="platillo">
                        <img src="img/platillos/Pescadito.png" alt="Pescadito" class="platillo__img">
                        <h3 class="platillo__nombre">Pescadito</h3>
                        <p class="platillo__calorias">(75g / 146 Cal)</p>
                        <p class="platillo__descripcion">Pescado asado acompañado de arroz a la mexicana, jitomate y
                            pepino
                        </p>
                    </div>
                    <div class="platillo">
                        <img src="img/platillos/Sabanita-italiana-de-pollo.png" alt="Sabanita italiana de pollo"
                            class="platillo__img">
                        <h3 class="platillo__nombre">Sabanita italiana de pollo</h3>
                        <p class="platillo__calorias">(50 g / 109 Cal)</p>
                        <p class="platillo__descripcion">Servida con spaghetti rojo y bastones de pepino</p>
                    </div>
                    <div class="platillo">
                        <img src="img/platillos/Suavitaquitos.png" alt="Suavitaquitos" class="platillo__img">
                        <h3 class="platillo__nombre">Suavitaquitos</h3>
                        <p class="platillo__calorias">(4 pzas/ 274 Cal)</p>
                        <p class="platillo__descripcion">Rellenos de pollo, servidos con verduras y puré de papa</p>
                    </div>
                    <div class="platillo">
                        <img src="img/platillos/Sabanita-aventura-de-res.png" alt="Sabanita aventura de res"
                            class="platillo__img">
                        <h3 class="platillo__nombre">Sabanita aventura de res</h3>
                        <p class="platillo__calorias">(100 g / 207 Cal)</p>
                        <p class="platillo__descripcion">Servida con bastones de verdura y puré de papa</p>
                    </div>
                </div>
            </div>

            <p class="disclaimer">*Bebida: Un vaso con limonada o agua de fresa 360 mL o epurita con jugo 330 mL</p>
        </section>

        <section class="divertipack">
            <div class="divertipack__titulo">
                <img src="img/divertipack.png" alt="Divertipack">
                <div class="divertipack__texto">
                    <p class="tagline">En la compra de tu Divertipack podrás coleccionar uno de los</p>
                    <h2 class="promo-vasos">8 vasos diferentes</h2>
                </div>
                <p class="divertipack__subtitulo museo500">También puedes obtener tu vaso en la compra de una bebida,
                    orden de fruta o sopa
                    del menú infantil Disney por $25 más</p>
            </div>
            <img src="img/vasos.png" alt="vasos de pixar">
        </section>

        <section class="adicional">
            <div class="platillos-wrapper">
                <div class="adicional__card">
                    <h2 class="adicional__categoria adicional__categoria--morado">Bebidas</h2>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Vaso con leche</h3>
                        <p class="platillo__calorias">(360 mL / 152 Cal) bajo en grasa</p>
                        <p class="platillo__descripcion none"></p>
                    </div>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Agua de fresa</h3>
                        <p class="platillo__calorias">(360 mL / 7 Cal)</p>
                        <p class="platillo__descripcion">La tradicional de limón natural</p>
                    </div>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Epurita con jugo</h3>
                        <p class="platillo__calorias">(330 mL / 13 Cal)</p>
                        <p class="platillo__descripcion">Manzana o mango</p>
                    </div>
                </div>
                <div class="adicional__card">
                    <h2 class="adicional__categoria adicional__categoria--naranja">Fruta</h2>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Delicia de frutas</h3>
                        <p class="platillo__calorias">(92 Cal)</p>
                        <p class="platillo__descripcion">Combinación de fresa, manzana y plátano</p>
                    </div>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Palmeritas</h3>
                        <p class="platillo__calorias">(86 Cal)</p>
                        <p class="platillo__descripcion">Combinación de papaya, plátano, fresa y manzana acompañada de
                            zanahoria</p>
                    </div>
                </div>
                <div class="adicional__card">
                    <h2 class="adicional__categoria adicional__categoria--rosa">Sopas</h2>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Sopa de fideo con jamón</h3>
                        <p class="platillo__calorias">(270 mL / 159 Cal)</p>
                        <p class="platillo__descripcion none"></p>
                    </div>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Arroz a la mexicana</h3>
                        <p class="platillo__calorias">(150 mL / 156 Cal)</p>
                        <p class="platillo__descripcion none"></p>
                    </div>
                    <div class="platillo">
                        <h3 class="platillo__nombre">Arroz blanco</h3>
                        <p class="platillo__calorias">(150 mL / 169 Cal)</p>
                        <p class="platillo__descripcion none"></p>
                    </div>
                </div>
            </div>
            <div class="contacto-vips">
                <a href="/ubicaciones" class="boton-vips">Busca tu Vips</a>
                <br>
                <a href="/terminosycondiciones" class="legal">Términos y condiciones</a>
            </div>
        </section>
    </div>

    <script src="js/menu-infantil.js"></script>

     
      </div>
    </div>
  </main>
<!-- Scripts -->

<script>
    setTimeout(() => {
        $(window).scroll();
    }, 100);
</script>

<?php
include('../footer-bootstrap.php');
?>
