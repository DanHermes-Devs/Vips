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
<style>
@font-face {font-family: "PlutoSansW01-Bold"; src: url("//db.onlinewebfonts.com/t/7aada3646a5f7476590dea82af1a4deb.eot"); src: url("//db.onlinewebfonts.com/t/7aada3646a5f7476590dea82af1a4deb.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/7aada3646a5f7476590dea82af1a4deb.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/7aada3646a5f7476590dea82af1a4deb.woff") format("woff"), url("//db.onlinewebfonts.com/t/7aada3646a5f7476590dea82af1a4deb.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/7aada3646a5f7476590dea82af1a4deb.svg#PlutoSansW01-Bold") format("svg"); }
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
.main {
	text-align: center;
	padding-bottom: 150px;
}
.recuadrologo {
	padding: 0 5%;
	height: 70vh;
	border: 2px solid #f89300;
	width: 90%;
	margin: 2.5% 5%;
	min-height: 400px;
	text-align: center;
	position: relative;
}
.recuadrologo img {
	max-width: 300px;
	width: 30%;
	margin-bottom: 2.5%;
	min-width: 230px;
}
.recuadrologo h1 {
	font-family: "PlutoSansW01-Bold",sans-serif;
	text-transform: uppercase;
	font-size: 40px;
	padding: 5% 15%;
	color: #f89300;
}
.recuadrologo h1 span {
	color: #111;
}
.recuadrologo h2 {
	font-weight: normal;
	font-size: 30px;
	padding: 0 5% 0;
}
.recuadrologo a {
	position: absolute;
	bottom: 5%;
	width: 100%;
	left: 0;
}
.recuadrologo a img {
	width: 40px;
	min-width: 10px;
	margin: 0;
}
#info {
	width: 100%;
	float: left;
	padding: 5%;
  padding-bottom: 2.5%;
}
#info h2, #info h3 {
	font-family: "PlutoSansW01-Bold",sans-serif;
	text-transform: uppercase;
	font-size: 30px;
	padding: 0 15%;
	color: #f89300;
	margin-bottom: 0;
}
#info h3 {
	color: #111;
}
#info .col-md-3, .recuadrologrado .col-md-6 {
	float: left;
	padding: 2.5% 5%;
}
#info h4, .recuadrologrado h4{
	color: #f89300;
	font-size: 50px;
	font-weight: bold;
	letter-spacing: 1px;
	margin: 0;
}
.numberimg {
	height: 50px;
	transform: translateY(5px);
	margin-bottom: 10px;
}
.recuadrologrado {
	padding: 2.5% 5%;
	border: 2px solid #f89300;
	width: 90%;
	margin: 2.5% 5%;
	text-align: center;
	position: relative;
	float: left;
}
.recuadrologrado h2 {
	font-family: "PlutoSansW01-Bold",sans-serif;
	text-transform: uppercase;
	font-size: 30px;
	padding: 0 15%;
	color: #f89300;
	margin-bottom: 2.5%;
}
.donanaranja {
	width: 100%;
	float: left;
	padding: 5%;
}
.col-md-5, .col-md-7 {
	float: left;
}
.donanaranja .col-md-7  {
  text-align: left;
}
.dona1 {
	width: 100%;
}
#productos {
	float: left;
	width: 100%;
}
.donanaranja h2, #productos h2 {
	font-family: "PlutoSansW01-Bold",sans-serif;
	text-transform: uppercase;
	font-size: 30px;
	padding: 0;
	color: #111;
	margin-bottom: 2.5%;
}
.donanaranja h2 span, #productos h2 span {
	color: #f89300;
}
.donanaranja p {
	padding: 0 5% 0 0;
}
.donanaranja span {
	color: #f89300;
}
.masprods {
	color: #fff !important;
	background: #f89300;
	padding: 7.5px 20px;
	border-radius: 20px;
	font-weight: 500;
	display: inline-block;
  cursor: pointer;
}
.plecanaranja {
	float: left;
	padding: 2.5% 10%;
	width: 100%;
	background: #f89300;
	color: #fff;
	margin-bottom: 5%;
}
.plecanaranja h2 {
	font-family: "PlutoSansW01-Bold",sans-serif;
	text-transform: uppercase;
	font-size: 30px;
	padding: 0;
	color: #fff;
	margin-bottom: 15px;
}
.plecanaranja p {
	font-size: 18px;
	text-transform: uppercase;
}
.plecanaranja p span {
  color:#111;
}
.btndonar {
	background: #fff;
	padding: 7.5px 35px;
	border-radius: 20px;
	color: #f89300;
	margin-bottom: 5px;
	display: inline-block;
	font-weight: 500;
}
#productos h3 {
	font-size: 17.5px;
	font-weight: normal;
	padding: 0;
	margin-top: -1.5%;
}
#productos .col-md-4 {
	float: left;
}
.prodimg {
	width: 100%;
	padding: 10% 0;
}
#productos p {
	color: #f89300;
	font-weight: 500;
	font-size: 15px;
}
.textocausa {
	width: 100%;
	float: left;
	color: #222;
	padding: 5%;
}
.textocausa p {
	color: #111 !important;
	vertical-align: middle;
	display: inline-block;
	margin-right: 15px;
}
.textocausa img {
	width: 50px;
	vertical-align: middle;
	display: inline-block;
	margin-top: -20px;
}
@media (max-width:700px){
  .main {
	padding-bottom: 5%;
}
.recuadrologo h1 {
	font-size: 30px;
	padding: 5%;
}
.recuadrologo h2 {
	font-size: 20px;
	padding: 5%;
}
#info h2, #info h3 {
	font-size: 20px;
	padding: 0 5%;
}
.recuadrologrado h2 {
	font-size: 20px;
	padding: 0 5%;
}
#info h4, .recuadrologrado h4 {
	font-size: 40px;
}
.numberimg {
	height: 40px;
}
.donanaranja h2, #productos h2 {
	font-size: 20px;
}
.donanaranja .col-md-7 {
	text-align: center;
}
.plecanaranja {
	padding: 2.5% 5%;
	margin-bottom: 10%;
	margin-top: 10%;
}
.plecanaranja h2 {
	font-size: 20px;
	padding: 5% 0;
	margin-bottom: 0;
}
.plecanaranja p {
	font-size: 15px;
}
#productos {
	padding: 0 5%;
}
#productos p {
	margin-top: -10%;
	width: 100%;
}
.textocausa {
	padding: 15% 5% 7.5%;
}
.textocausa img {
	width: 60px;
	margin-top: 0;
}
}
</style>
  <main>
    <div class="row">
      <div class="col-md-12">
      <div class="main">
        <div class="recuadrologo">
          <img src="/img/2019/vapormicuenta/logo-va-po-mi-cuenta.png">
          <h1>Acabemos juntos con el <span>h</span>ambre infantil</h1>
          <h2>En México, casi 20 millones de niños y adolescentes no tienen la certeza si podrán comer o no</h2>
            <a href="#info" class="scrollto floating grow"><img src="/img/2019/vapormicuenta/arrow-down.png"></a>
        </div>

        <div id="info">
          <h2>Combatimos el hambre infantil</h2>
          <h3>garantizando acceso a comida nutritiva diariamente</h3>
            <div class="col-md-3">
                <h4>+2.5</h4>
                <p>Millones de comidas nutritivas servidas</p>
            </div>

            <div class="col-md-3">
                <img class="numberimg" src="/img/2019/vapormicuenta/5-mil-ninos.png">
                <p>Niños y niñas alimentados diariamente</p>
            </div>

            <div class="col-md-3">
                <h4>13</h4>
                <p>Comedores operando</p>
            </div>

            <div class="col-md-3">
                <img class="numberimg" src="/img/2019/vapormicuenta/2-mil-familias.png">
                <p>Familias beneficiadas</p>
            </div>
        </div>

        <div class="recuadrologrado">
          <h2>Sólo en vips hemos logrado anualmente</h2>
          <div class="col-md-6">
              <h4>+4, 748, 589</h4>
              <p>Pesos recaudados con estos productos</p>
          </div>

          <div class="col-md-6">
              <img class="numberimg" src="/img/2019/vapormicuenta/131-mil-comidas.png">
              <p>Comidas nutritivas servidas</p>
          </div>
        </div>

        <div class="donanaranja">
            <div class="col-md-5">
                <img class="dona1" src="/img/2019/vapormicuenta/donas-naranjas-promo.png">
            </div>

            <div class="col-md-7">
                <h2>Al comprar una dona naranja en Vips <span><br>donas a va por mi cuenta</span></h2>
                <p>Comparte una foto de tu producto con causa usando el hashtag <span>#DonaVips</span> y sé parte del movimiento.</p>
                <a class="masprods grow scrollto" href="#productos">Ver más productos</a>
            </div>
        </div>

        <div class="plecanaranja">
            <div class="col-md-12">
                <h2>Invita a comer a un niño y cambia su vida</h2>
                <p>También puedes apoyar a <span>Va por mi cuenta</span> en el sitio</p>
                <a class="btndonar grow" href="https://vapormicuenta.org/" target="_blank">Donar</a>
            </div>
        </div>

        <div id="productos">
          <h2>Conoce nuestros <span>productos con causa</span></h2>
          <h3>Un porcentaje de la compra será destinado a los comedores infantiles</h3>
            <div class="col-md-4">
                <a href="https://vips.com.mx/menu/platillo/pan-dulce-horneado-dona-glaseada-paquete-solo-para-llevar"><img class="prodimg grow" src="/img/2019/vapormicuenta/paquete-6-donas.png"></a>
                <p>Paquete de 6 donas glaseadas</p>
            </div>

            <div class="col-md-4">
                <img class="prodimg grow" src="/img/2019/vapormicuenta/donas-naranjas-promo.png">
                <p>Dona naranja</p>
            </div>

            <div class="col-md-4">
              <a href="https://vips.com.mx/menu/platillo/pan-dulce-horneado-pan-dulce-o-dona-de-azucar"><img class="prodimg grow" src="/img/2019/vapormicuenta/canasta-de-pan.png"></a>
              <p>Canasta de pan</p>
            </div>

            <div class="textocausa"><p>Encuéntralos en nuestro menú con el símbolo</p> <img class="grow" src="/img/2019/vapormicuenta/logovpmc.png"></div>
        </div>




      </div>
      </div>
    </div>
  </main>
<?php
include('footer-bootstrap.php');
?>
