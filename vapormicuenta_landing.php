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
	padding: 3%	 5%;
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
	/*margin-bottom: 2.5%;*/
	min-width: 230px;
}
h1 {
	font-family: "PlutoSansW01-Bold",sans-serif;
	text-transform: uppercase;
	font-size: 40px;
	padding: 0 2rem;
	color: #f89300;
}
.color_orange{
	color: #f89300;
}
.color_black{
	color: #111;
}
.recuadrologo h1{
	font-family: "PlutoSansW01-Bold",sans-serif;
	text-transform: uppercase;
	font-size: 40px;
	padding: 5% 15%;
	color: #f89300;
}
.recuadrologo h1 span, h1 span {
	color: #111;
}
.recuadrologo h2 {
	font-weight: normal;
	font-size: 30px;
	padding: 0 5% 0;
}
.recuadrologo a {
	position: absolute;
	bottom: 8%;
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
.orange_line{
	border-bottom: 2px solid #f89300;
	border-left: 2px solid #f89300;
	border-right: 2px solid #f89300;
	padding: 2rem 4rem 0 4rem;
	margin-bottom: 5rem;
}
.orange_line_2{
	border-left: 2px solid #f89300;
	border-right: 2px solid #f89300;
	padding: 2rem 4rem 0 4rem;
	margin:0;
	height: 60vh;
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
padding: 7.5px 30px;
border-radius: 30px;
font-weight: 500;
display: inline-block;
cursor: pointer;
font-size: 1.4rem;
}
.masprods_black {
	color: #333333 !important;
	border: 2px solid #f89300;
	padding: 7.5px 20px;
	border-radius: 20px;
	font-weight: 500;
	display: inline-block;
  cursor: pointer;
}
.bg_orange {
	background: #f89300;
	padding: 5rem 3rem;
	width: 100%;
}
.bg_orange h2{
	color: #ffffff !important;
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
	        <!--<div class="recuadrologo">
	    	    
	        </div>-->

<div class="container">
	<div class="orange_line_2">
		<div class="row justify-content-center">
			<div class="col-md-4 mb-3">
				<img src="/img/2019/vapormicuenta/logo_pfchang.png" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
		        <h1 class="mb-3">SE UNE <span class="color_black">A</span> <img src="img/2019/vapormicuenta/logo-vxmc.svg" alt="" width="300"><br><span>PARA COMBATIR EL</span><br>HAMBRE <span>INFANTIL</span></h1>
	            <a href="#info" class="scrollto floating grow"><img src="/img/2019/vapormicuenta/arrow-down.png"></a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg_orange">	
	<div class="row">
		<div class="col-md-12">
			<h2>CADA DÍA EL <span class="color_black">MOVIMIENTO VA POR MI CUENTA</span> ALIMENTA A 5,000 NIÑOS Y ADOLESCENTES EN <span class="color_black">SITUACIÓN DE POBREZA ALIMENTARIA</span></h2>
		</div>
	</div>
</div>

<div class="container">
	
	<div class="orange_line">
		<div class="row">
			<div class="col-12 text-center">
				<h1>AYUDA <span>CONSUMIENDO NUESTRO PRODUCTO CON</span> CAUSA</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<div class="row h-100">
					<div class="col-sm-12 my-auto">
						<h3>Por cada <span class="color_orange">P.F. Chang’s Famous Chicken Lettuce Wraps</span> que compras, P.F. Chang’s dona <span class="color_orange">$1 peso</span> al Movimiento Va Por Mi Cuenta.</h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="row h-100">
					<div class="col-sm-12 my-auto">
						<img src="/img/2019/vapormicuenta/platillo-famous-chicken-lettuce-wraps.jpg" alt="P.F. Chang’s Famous Chicken Lettuce Wraps" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="row justify-content-center">
		<div class="col-10 mb-4">
			<h5>Con estos <span class="color_orange">Lettuce wraps</span> anualmente se recaudan más de <span class="color_orange">$175,200,</span> equivalente a <span class="color_orange">4,866 comidas nutritivas servidas</span> por el Movimiento Va por mi Cuenta, el cual busca combatir la pobreza alimentaria infantil, siendo operado por Fundación Alsea, A.C.
</h5>
			<a class="masprods_black grow" href="">Conoce más</a>
		</div>

		<div class="col-10 mb-4">
			<h3>Además puedes <span class="color_orange">donar</span> a <a href="https://vapormicuenta.org/" target="_blank"><span class="color_orange">vapormicuenta.org</span></a></h3>
			<a class="masprods grow" href="">DONA</a>
		</div>
	</div>

</div>


	      

	        






	      </div>
      </div>
    </div>
  </main>


	

<?php
include('footer-bootstrap.php');
?>
