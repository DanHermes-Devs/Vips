<?php
session_start();
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    header('Location: /selvamagica-terminado-m');
    exit(0);
}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];	
}

else{
	header("Location: /selvamagica-registro");
}


	if ( !isset( $_SESSION['points'] ) ) {
		//header('Location: ./');
	}

	$points = $_SESSION['points'];

	//unset($_SESSION['points']);
?>

<div class="main">
<main role="main">
<style>
main {
    width: 100%;
}

.banner{width:100%;}

.b2 {
	margin-top: -6px;
}
.imgcont {
	float: left;
	margin: 0;
	margin-top: 0;
	display: inline-block;
	width: 50%;
	position: relative;
}
.abcont {
	width: 100%;
	position: relative;
	top: 0;
	padding: 5%;
	text-align: center;
}
.logoselva {
	width: 25%;
}
.abcont h3 {
	color: #feea83;
	padding: 5% 10%;
}
.abcont h3 span {
	padding: 10px;
	width: 100%;
	display: inline-block;
	font-size: 22px;
}
.btnjugar {
	width: 25%;
}
.legales {
	position: relative;
	width: 100%;
	color: #feea83;
	margin-top: 0%;
	margin-left: 0;
	padding: 0 7.5%;
	display: inline-block;
}
.legales li {
	width: 30%;
	display: inline-block;
	margin: 0;
	float: left;
	padding: 0;
	font-size: 15px;
	text-align: center;
}
.lines {
	border-left: 1px solid #feea83;
	width: 40% !important;
	border-right: 1px solid #feea83;
}


.menuicon {
	width: 33px;
	height: 33px;
	position: fixed;
	background: url(/img/2019/juego/menu.png);
	background-size: 100%;
	margin-top: 10px;
	right: 10px;
	z-index: 3;
	cursor:pointer;
}
.menujuego {
	position: fixed;
	background: rgba(0,0,0,.85);
	padding: 5%;
	z-index: 4;
	text-align:center;
	width:100%;
	height:100%;
	display:none;
}
.menuiconclose {
	width: 30px;
	height: 30px;
	background: url(/img/close.png);
	background-size: 100%;
	right: 10px;
	position: fixed;
}
.logos {
	width: 100%;
	float: left;
	padding: 30px 0;
}
.logos li {
	width: 33.3%;
	float: left;
	padding: 5% 7%;
	text-align: center;
}

.logos li img {
	width: 100%;
	
}
.navjuego {
	width: 100%;
	float: left;
	color: #fff;
}
.navjuego li {
	padding: 12.5px;
	font-size: 20px;
	font-weight: 500;
}
.logoxcaret {
	padding-top: 20%;
}
.txtlogin {
	color: color: #feea83;
	color: #feea83;
	font-size: 16px;
	float: left;
	width: 100%;
	margin: 2.5% 0;
}
.txtlogin a {
	font-weight:500;
}
.tablero {
	background: url(/img/2019/juego/pleca_madera2.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	color: #7f4f1c;
	font-size: 12px;
	padding: 5% 10% 20% 10%;
	margin-top: -5%;
}
.tablero h4 {
	font-size: 18px;
	padding-top: 10%;
	margin: 0;
	padding-bottom: 5%;
}
.tablero p {
	text-align: center;
	padding: 0 25%;
	font-size: 15px;
}
.tablero p span {
	font-weight: bold;
	font-size: 17px;
	
}
.botones {
	width: 100%;
	padding: 5% 20% 2.5%;
	float: left;
	text-align: center;
	padding-bottom: 0;
}
.btnjugar {
	width: 40%;
	float: none;
	padding: 0;
	margin-bottom: 5%;
	cursor: pointer;
}
.ingresa {
	color: #feec90;
	padding: 0 20%;
	text-align: left;
	font-weight: 500;
	margin-top: -2.5%;
}
#ticket {
	width: 60%;
	height: 35px;
	background: #feec90;
	color: #222;
	border: none;
	border-radius: 10px;
	appeareance: none;
	padding: 5px 10px;
	font-weight: 500;
	font-family: "Program",sans-serif;
	font-size: 19px;
}
#infoticket {
	position: absolute;
	right: 20%;
	background: #feec90;
	color: red;
	padding: 5px 10px;
	border-radius: 13px;
	font-weight: bold;
	cursor: pointer;
}
.ticketpop {
	position: fixed;
	background: rgba(0,0,0,.85);
	padding: 5%;
	z-index: 4;
	text-align: center;
	width: 100%;
	height: 100%;
	display: none;
	top: 60px;
	padding-top: 10vh;
	color: #fff;
	overflow-y: auto;
}
.ticketiconclose {
	width: 30px;
	height: 30px;
	background: url(/img/close.png);
	background-size: auto;
	background-size: 100%;
	right: 2.5%;
	position: fixed;
	margin-top: 10px;
	cursor:pointer;
}
.ticketpop img {
	width: 70%;
	display: inline-block;
	margin-bottom: 20vh;
	max-width: 300px;
}
#respuestaticket {
	color: #fff;
}
.leftcont {
	float: left;
	width: 50%;
	background: url(/img/2019/juego/rey.png);
	height: 100vh;
	background-position: bottom center;
	background-size: cover;
	position: relative;
}
.footer {
	margin-top: -6px;
}
main {
	background: url(/img/2019/juego/Pantallas_fondo.png);
	height: 100%;
	background-repeat: no-repeat;
	background-size: 50% 100%;
	background-position: right bottom;
	display: inline-block;
}
.bannerleft img {
	position: absolute;
	width: 40%;
	right: 10%;
	bottom: 10%;
}

</style>

<?php include('headerjuego.php'); ?>
<div class="leftcont">
	<div class="bannerleft">
		<img src="/img/2019/juego/reyleonlogo_blanco.png">
		<img src="/img/2019/juego/2019Disney_blanco.png" class="logodisney">
	</div>
</div>
<div class="imgcont">
	
	<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
		<div class="tablero">
			<h4>¡Felicidades!<br>Has obtenido <?php echo $points;?> puntos</h4>
			<p>Si quieres acumularlos registra tu ticket para ganar el viaje a la <span>Riviera Maya</span></p>
		
		</div>
		
		<p class="ingresa">Ingresa tu número de ticket <span id="infoticket"  onclick="openTicket();">?</span></p>
		<input class="inputticket" name="ticket" id="ticket" type="text" maxlength="18" onkeypress="return isNumberKey(event)"></input>
		<div id="respuestaticket"></div>
		
		
		<div class="botones">
		<img id="btnregistra" class="btnjugar" src="/img/2019/juego/Registrarticket.png">
		
		</div>
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
				<a href="selvamagica-tyc"><li class="lines">Términos y condiciones</li></a>
				<a href="selvamagica-aviso"><li>Aviso de privacidad</li></a>
			</ul>
		</div>
	</div>
</div>


<div class="ticketpop">
<div class="ticketiconclose" onclick="closeTicket();"></div>
	<h2>Ejemplo Ticket</h2>
	
	<img src="/img/2019/juego/ticket.png">
</div>

<script>
function  checkHeight(){
		setTimeout(function(){
			var wh = $(window).height();
			var lch = $(".imgcont").height();
			$(".leftcont").css("height", lch +"px");
			$(".leftcont").css("max-height", lch +"px");
		},500)	
	}
	
	$(document).ready(function () {
		checkHeight();
	});
	
	$(window).on('resize', function(){
      checkHeight();
	});
	function openMenu(){
		$(".menujuego").fadeIn();
	}
	
	function closeMenu(){
		$(".menujuego").fadeOut();
	}
	function openTicket(){
		$(".ticketpop").fadeIn();
		$("html").css("overflow","hidden");
		$("body").css("overflow","hidden");
	}
	
	function closeTicket(){
		$(".ticketpop").fadeOut();
		$("html").css("overflow","auto");
		$("body").css("overflow","auto");
	}
	
	$("#btnregistra").click(function(){
		var uid = '<?php echo $uid;?>';
		var ticket = $("#ticket").val();
		//alert(ticket.length);
		if(ticket.length != 18){	
		$("#respuestaticket").html('<p class="errorticket">El No. de ticket debe contar con 18 dígitos</p>');
		checkHeight();
			
		}
		else{
			
			$.ajax({
            url : "/registro-ticket.php",
            type: "POST",
            data : "user="+uid+"&ticket="+ticket,
            
            success:function(data){
				$('#respuestaticket').html(data);
				checkHeight();
				 setTimeout(function() {
                $('.success').slideUp();
				$('.errormsg').slideUp();
				
            }, 15000);

            }

        });
			
		}
	})
	
	function isNumberKey(evt)
	{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	}
</script>

<!-- Footer =============================-->

<?php include('footer.php');?>

