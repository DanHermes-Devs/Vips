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
<style>
#btnnextv .nav-next {
	float: left;
	/* margin-left: 5px; */
	right: 0;
	left: 0;
	margin: 0 auto;
	width: 100%!important;
	text-align: center;
	background: #f29100;
	color: #fff;
	padding: 1em;
	margin-left: 0%!important;
}
.carousel {
	width: 100%;
	height: 200px;
	padding-top: 40px;
	overflow-y: hidden !important;
}
.clase {
	border-radius: 30px;
	box-shadow: 1px 2px 6px #ccc;
	background-color: #fff;
	width: 75%;
	height: 150px;
	text-align: center;
	padding: 25px 2.5% !important;
}
.flipster__item--current2 {
	margin-top: -30px !important;
	transform: translateY(-30px);
}
.flipster--carousel .flipster__item--past-1, .flipster--carousel .flipster__item--future-1 {
	opacity: 1 !important;
	transition-delay: 60ms;
}
.clase .texto {
	width: 100%;
	padding: 0 15%;
	float: left;
	font-size: 11px !important;
}

.flipster--flat .flipster__item--past, .flipster--flat .flipster__item--future {
	opacity: 1 !important;
}

.redtit, .linklogin {
	text-align: center;
}
.flipster__button--prev {
	left: -33px!important;
	top: 50%!important;
}
.flipster__button--next {
	right: -33px!important;
	top: 50%!important;
}
.flipster--flat .flipster__item--future .flipster__item__content {	
}
.imagen {
	padding: 0;
	max-width: 60px !important;
	margin-bottom: 10px;
	max-height: 60px;
	min-height: 60px;
	width: auto;
}
.flipster--flat .flipster__item--past .flipster__item__content {
	transform: scale(1)!important;
}
.flipster--flat .flipster__item--future .flipster__item__content {
	transform: scale(1)!important;
}
button:active, button:focus {
    outline: none;
    border: none;
}
svg:focus{
    outline: none;
    border: none;
}

.redtit {
	color: #fff;
	font-weight: bold;
	background: #ea0029;
	padding: 5%;
	margin-top: 0;
	line-height: 1.3;
}
#pattern1 {
	background: url(/img/2019/tuexperiencia/pattern1.png);
	background-size: 100%;
	width: 33vw;
	height: 33vw;
	background-repeat: no-repeat;
	position: absolute;
	left: 6%;
	z-index: -1;
}
#pattern2 {
	background: url(/img/2019/tuexperiencia/pattern2.png);
	background-size: 100%;
	width: 42vw;
	height: 42vw;
	background-repeat: no-repeat;
	position: absolute;
	right: 5%;
	z-index: -1;
	margin-top: 100px;
}
#pattern3 {
	background: url(/img/2019/tuexperiencia/pattern3.png);
	background-size: 100%;
	width: 28vw;
	height: 28vw;
	background-repeat: no-repeat;
	position: absolute;
	left: 25%;
	z-index: -1;
	margin-top: 130px;
}
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

.btnregistrate {
	margin: 15% 20% 10% 20%;
	display: inline-block;
	background: #f29100;
	color: #fff;
	padding: 10px 15px;
	width: 60%;
	text-align: center;
	border-radius: 30px;
	font-weight: 500;
}
.yellowcont {
	text-align: center;
	background-image: url(/img/2019/tuexperiencia/barra.png);
	background-size: 100% 100%;
	font-size: 15px;
	padding: 5% 15%;
	background-repeat: no-repeat;
	width: 100%;
}

.yellowcont h3 {
	font-size: 15px;
	line-height: 1.4;
}

.yellowcont h3 span {
	color: #ea0029;
}
.btncalifica:hover {
	color: #fff;
}
.btncalifica {
	margin: 0;
	display: inline-block;
	background: #534747;
	color: #fff;
	padding: 10px 15px;
	width: 70%;
	text-align: center;
	border-radius: 30px;
	font-weight: 500;
	width:100%;
	
}
main{position:relative; padding-bottom:8.5vh;}
.btnregistrate:hover{color:#fff;}

@media(min-width:800px){
.redtit {
	color: #fff;
	font-weight: bold;
	background: #ea0029;
	padding: 20px 10%;
	/* margin-top: 0; */
	line-height: 1.3;
	margin-top: 30px;
}
.carousel {
	width: 100%;
	height: 300px;
	padding-top: 30px;
	padding: 3px 10%;
	overflow-x: hidden !important;
}
.clase .texto {
	width: 100%;
	padding: 5% 15%;
	float: left;
	font-size: 17px !important;
}

#pattern1, #pattern2, #pattern3 {
	width: 15vw;
	height: 15vw;
	
}
#pattern3 {
	left: 36%;
}
.clase {
	width: 40%;
	height: 250px;
	padding:2.5%!important;
}
.imagen {
	padding: 0;
	max-width: 160px !important;
	margin-bottom: 10px;
	max-height: 80px;
	min-height: 80px;
	width: auto;
}
.col-md-12.contbtn {
	max-width: 50%;
	float: left;
}
.btnregistrate {
	margin: 5% 25%;
	display: inline-block;
	background: #f29100;
	color: #fff;
	padding: 15px 15px;
	width: 50%;
	text-align: center;
	border-radius: 30px;
	font-weight: 500;
	font-size: 18px;
}
.col-md-12.abcont {
	max-width: 50%;
	float: left;
	margin-top: 0;
}
main {
	position: relative;
	padding-bottom: 0;
}
.yellowcont {
	background-size: 100%;

}
.yellowcont h3 {
	font-size: 18px;
}
.btncalifica {
	max-width: 230px;
	font-size: 18px;
}
}
@media(max-width:1100px){
	.clase .texto {
		width: 100%;
		padding: 5% 10%;
		float: left;
		font-size: 15px !important;
		line-height: 1.2;
	}
}
.desktop{
	display:block;
}
.mobile{
	display:none;
}

@media(max-width:800px){
	.clase .texto {
	width: 100%;
	padding: 0 15%;
	float: left;
	font-size: 11px !important;
}
.desktop{
	display:none;
}
.mobile{
	display:block;
}
}
</style>
<main>
	<div class="row">
		<div class="col-md-12 contcarousel">
			<p class="redtit">Regístrate y empieza a acumular puntos Wow y a recibir un descuento en todas tus visitas a Vips</p>
			<div id="pattern1" class="floating"></div><div id="pattern2" class="floating2"></div><div id="pattern3" class="floating3"></div>
			<div class="carousel">
				<ul class="flip-items">
					<li class="clase">
						<img class="imagen" src="/img/2019/tuexperiencia/iconos/juguetes.svg" alt="">
						<p class="p texto">Puedes <span style="color:#ea0029;">usar tus puntos para pagar</span> lo que más te guste.</p>
					</li>
					<li class="clase">
						<img class="imagen" src="/img/2019/tuexperiencia/iconos/telefono.svg" alt="">
						<p class="p texto"><span style="color:#ea0029;">Todos los beneficios</span> <br>al alcance de tu mano.</p>
					</li>
					<li class="clase">
						<img class="imagen" src="/img/2019/tuexperiencia/iconos/descuento.png" alt="">
						<p class="p texto">Accede a <span style="color:#ea0029;">cupones y promociones</span>.</p>
					</li>
					<li class="clase" style="padding-top: 2% !important;">
						<img class="imagen" src="/img/2019/tuexperiencia/iconos/tienda.svg" alt="">
						<p class="p texto" style="font-size: 8.5px;">En <span style="color:#ea0029;">cada visita obtienes un descuento</span>. Con cada visita posterior durante ese mes, tu descuento crece hasta llegar al 50%</p>
					</li>
					<li class="clase">
						<img class="imagen" src="/img/2019/tuexperiencia/iconos/insignia.svg" alt="">
						<p class="p texto">Con Wow <span style="color:#ea0029;">acumulas puntos en cada visita</span>, que podrás utilizar para pagar en Vips.</p>
					</li>
					<li class="clase">
							<img class="imagen" src="/img/2019/tuexperiencia/iconos/regalo.svg" alt="">
							<p class="p texto">Celebra tu cumpleaños con nosotros y <span style="color:#ea0029;"> recibe un regalo especial</span>.</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-12 contbtn">
			<?php
				if($sesion == true){
					echo '<a href="/perfil" class="btnregistrate desktop">Ir a mi perfil</a>';
				}
				else{
					echo '<a href="#" class="btnregistrate desktop openpoplogin">Regístrate</a>';
				}
			?>	
			<a href="/tu-experiencia-registro" class="btnregistrate mobile">Regístrate</a>	
		</div>
		<div class="col-md-12 abcont">
			<div class="yellowcont">
				<h3>¿Cómo te trataron en el restaurante?<br> Queremos mejorar para ti <br> <span>¡Ayúdanos a lograrlo!</span></h3>
				<a href="/tu-experiencia-encuesta" class="btncalifica">Califica tu experiencia</a>	
			</div>	
		</div>
	</div>
</main>

<link rel="stylesheet" href="/css/jquery.flipster.min.css">
<script src="/js/jquery.flipster.min.js"></script>
<script>
jQuery( document ).on( "ready" , function() {
jQuery(".carousel").flipster({
    style: 'flat',
    spacing: .1,
    nav: false,
    buttons: false,
	start: 0,
	loop: 2,
	autoplay: 5000
});

});

</script>
<?php
include('footer-bootstrap.php');
?>