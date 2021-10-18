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
    background-color: #fff;
}
*{outline:0; box-sizing:border-box;}
.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }
.floating {
	animation-name: floating;
	/* animation-duration: 3.5s; */
	animation-duration: 1s;
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
.main {
	text-align: center;
	padding-bottom: 5%
}
.headtop {
	width: 100%;
	position: relative;
	float: left;
	background: url(/img/2019/navidad/bg_reserva_y_recoge.png);
	min-height: 300px;
	background-size: cover;
	background-position: top center;
	text-align: center;
	font-family: "Museo 700";
}
.adornotit {
	width: 100px;
	margin: 0 10px;
}
#domicilionavidad {
	width: 100%;
	float: left;
	background: url(/img/2019/navidad/bg_a_domicilio_4.png);
	background-size: cover;
	background-position: bottom;
	padding-top: 5%;
	font-family: "Museo 700";
	min-height: 700px;
}
#domicilionavidad form {
	width: 100%;
	float: left;
	padding: 5px 0 30px 0;
}
.logodlivery {
	width: 5%;
	margin: 20px 0;
	min-width: 100px;
}
.agregadores {
	list-style: none;
	margin-bottom: 5%;
	padding: 0;
}
.agregadores li {
	width: 60px;
	display: inline-block;
	padding: 5px;
}
.agregadores img {
	width: 100%;
}
#domicilionavidad input {
	border: none;
	background-color: transparent;
	border-bottom: 2px solid #959595;
	padding: 5px;
	height: 40px;
	width: 150px;
	margin-right: 10px;
	display: inline-block;
	float: none;
}
.btncp {
	color: #fff !important;
	background: #ffa700;
	padding: 7.5px 30px;
	border-radius: 30px;
	font-family: "Museo 500";
	font-size: 16px;
	letter-spacing: .5px;
	opacity: .5;
	cursor: not-allowed;
}
.headtop h2 {
	color: #fff;
	padding: 1.25% 5%;
	font-size: 25px;
	line-height: 1.5;
}
.headtop .col-md-3 {
	background: #fff;
	float: none;
	padding: 2.5%;
	display: inline-block;
	width: 20%;
	margin: 1%;
	position:relative;
}
.headtop i {
	position: absolute;
	left: 5%;
	top: 5%;
	font-size: 30px;
	font-style: normal;
	color: #F5A623;
}
.headtop img {
	height: 90px;
	width: auto;
	margin: 2.5% 0;
}
.headtop h1 {
	width: 100%;
	float: left;
}

.hacerpedido {
	float: left;
	width: 100%;
	padding: 5%;
	font-family: "Museo 700";
}
.paso {
	text-align: left;
	width: 100%;
	float: left;
	padding: 15px 0;
}
.paso h2 {
	color: #707070;
	font-size: 28px;
	padding: 0 40px;
}

.numbercircle {
	border-radius: 50%;
	background: #707070;
	color: #fff;
	width: 30px;
	height: 30px;
	position: relative;
	display: inline-block;
	text-align: center;
	font-size: 18px;
	line-height: 30px;
	font-style: normal;
	margin-right: 10px;
}

.actual .numbercircle {
	background: #ED1C2C;
}

@media (max-width:1200px){

}

@media (max-width:800px){
  .main {
	padding-bottom: 5%;
}

}

@media (max-width:680px){
.adornotit {
	width: 50px;
	margin: 0 10px;
	/* position: absolute; */
	/* display: none; */
}

#postres h1, #domicilionavidad h1 {
	font-size: 25px;
	margin-bottom: 30px;
}

#domicilionavidad {
	width: 100%;
	float: left;
	background: url(/img/2019/navidad/bg_a_domicilio_4.png);
	background-size: 300%;
	background-position: bottom;
	padding-top: 5%;
	font-family: "Museo 700";
	min-height: 550px;
	background-repeat: no-repeat;
}
.logodlivery {
	width: 5%;
	margin: 20px 0;
	min-width: 60px;
}
#domicilionavidad h1 {
	font-size: 18px;
	width: 120%;
	margin-left: -10%;
}

main {
	padding-bottom: 9vh;
}

}
@media (max-width:360px){
 
#domicilionavidad h1 {
	font-size: 18px;
}
}


@media (max-width:320px){

}
</style>
  <main>
    <div class="row">
      <div class="col-md-12">
      <div class="main">
        <div class="headtop">
             <h2> Reserva antes de XX de XXXXXXXX y obtén 10% de descuento </h2>
             <h1>¿Cómo lo hago? </h1>
              <div class="col-md-3"><i>1</i> <img src="/img/2019/navidad/food.svg"><h3>Aparta</h3><p>Aparta en línea  </br> o en tu Vips favorito</p></div>
              <div class="col-md-3"><i>2</i> <img src="/img/2019/navidad/card.svg"><h3>Paga</h3><p>Paga en tu Vips </br>  más cercano</p></div>
              <div class="col-md-3"><i>3</i> <img src="/img/2019/navidad/bag.svg"><h3>Recoge</h3><p>Acude por </br>  tu pedido</p></div>
              <div class="col-md-3"><i>4</i> <img src="/img/2019/navidad/tray.svg"><h3>Disfruta</h3><p>Deliciosos platillos </br>  para compartir</p></div>

        </div>
        
        <div class="hacerpedido">
             </h3><a href="cenas-navidad">Inicio</a> / Apartar</h3>
         <h1>
            <img src="/img/2019/navidad/adorno_titulo_principal_izquierda.svg" class="adornotit"/>
              <span>Aparta tu pedido</span>
            <img src="/img/2019/navidad/adorno_titulo_principal_derecha.svg" class="adornotit"/>
          </h1>
          
        <div class="paso paso1 actual"> 
           <h2>  <i class="numbercircle">1</i>Platillo</h2>
            <div class="pasocont" id="platillo"> 
            </div>
         </div>

         
         <div class="paso paso2"> 
           <h2>  <i class="numbercircle">1</i> Guarnición</h2>
            <div class="pasocont" id="guarnicion"> 
            </div>
         </div>
         
         <div class="paso paso3"> 
            <h2><i class="numbercircle">3</i> Postre</h2>
            <div class="pasocont" id="postre"> 
            </div>
         </div>
         
         <div class="paso paso4"> 
           <h2> <i class="numbercircle">4</i> ¿Dónde y cuándo quieres que esté lista tu cena?</h2>
            <div class="pasocont" id="dondecuando"> 
            </div>
         </div>
         
         <div class="paso paso5"> 
           <h2> <i class="numbercircle">5</i> Mi orden</h2>
            <div class="pasocont" id="orden"> 
            </div>
         </div>
           
           
           
         </div>


        <div id="domicilionavidad">
          <img src="/img/2019/navidad/logo_delivery.svg" class="logodlivery">
          <h1>
            <img src="/img/2019/navidad/adorno_titulo_principal_izquierda.svg" class="adornotit"/>
              <span>¿A dónde te lo llevamos?</span>
            <img src="/img/2019/navidad/adorno_titulo_principal_derecha.svg" class="adornotit"/>
          </h1>
          <p>Ingresa tu código postal</p>
          <form>
            <input type ="text" id="cpdom" placeholder="C.P. (5 dígitos)" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5"/>
            <a class="btncp" id="sendbtncp">Enviar</a>
          </form>

          <p>Y selecciona tu app de envío favorita:</p>
          <ul class="agregadores">
            <li><img src="/img/2019/navidad/rappi.png"></li>
            <li><img src="/img/2019/navidad/sin_delantal.png"></li>
            <li><img src="/img/2019/navidad/uber_eats.png"></li>
          </ul>
        </div>


      </div>
      </div>
    </div>
  </main>

<script>
$(document).ready(function() {
  // Show the first tab and hide the rest
  $('.tab-content').hide();
  $('.tab-content:first').show();

  // Click function
  $('#tabs-nav li').click(function(){
    $('#tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide();

    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });

});

$("#cpdom").keyup(function(event) {
	var cp = $('#cpdom').val().length;
	var cpval = $('#cpdom').val();
	if(cp  > 4){
		$("#sendbtncp").attr("href", "https://vips.com.mx/domicilio2?cp="+cpval);
		$("#sendbtncp").css("opacity", "1");
		$("#sendbtncp").css("cursor", "pointer");
		$("#sendbtncp").css("pointer-events", "all");
	}
	else{

		$("#sendbtncp").css("opacity", ".7");
		$("#sendbtncp").css("cursor", "not-allowed");

	}
	  if (event.keyCode === 13) {
  		setTimeout(function(){
  			var url = $("#sendbtncp").attr("href");
  			$("#sendbtncp").click();
  			window.location.href = url;
  			$("body").css("cursor", "wait");
  		},500)
    }
});

$("#sendbtncp").click(function(){
	var cp = $('#cpdom').val().length;
	if(cp  > 4){
		$("#sendbtncp").css("opacity", ".5");
		$("#sendbtncp").css("cursor", "not-allowed");
		$("body").css("cursor", "wait");
		setTimeout(function(){
		},1000)
	}

})
</script>
<?php
include('footer-bootstrap.php');
?>
