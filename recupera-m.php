<?php
ob_start();
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
	header("Location: /perfil-m");
}
else{
	

}
include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

	header('Location: /');

	exit(0);

}







?>

<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-Image-Carousel-jQuery-SimpleSlider/free-simple-slider.css" type="text/css" media="all" />




<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





		<style>


		.free-simple-slider .slider-box {

			height: 100%;

			list-style: none;

			margin: 0;

			padding: 0;

			position: relative;

			margin-bottom: 25px;

		}



		.sectionhome {

			height: 15.67vh;

			width: 50%;

			float: left;

			overflow: hidden;

			text-align: center;

			padding: 2.5%;

			font-family: "Museo 700", sans-serif;

		}

		.sectionexperiencias{background: #ff7a00; color: #fff}

		.sectiontienda{background: #ea0029;}

		.sectionfactura{background: #796a6a; color:#fff;}



		.sectionicon {

			width: 40%;

			max-height: 70%;

		}

		.sectionhome h2 {

			font-size: .8em;

			margin: 0;

			padding: 2.5%;

		}

		.codigobarra {
	position: relative;
	margin-left: 0;
	margin-top: 0;
	max-width: 100%;
}
		.arrows{
			display: none;
		}
		.prev-arrow{
			display: none;
		}
		.free-simple-slider .slider-dots li.current{
			border: 1px solid #FFF!important;
			background: #FFF!important;
			box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.34)
		}
		.free-simple-slider .slider-dots li{
			border: 1px solid #FFF!important;
			background: transparent!important;
			box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.34)
		}

		* {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.free-simple-slider li{background-position:center center!important;}



.accordion_container {
	float: left;
	width: 100%;
	padding-bottom: 0;
}

 .input::placeholder {

		color: #979797!important;

	}

#togglebtn {
	margin: 10vh auto 0 auto;

}

.input {
	
	background-size: 8% !important;
	background-repeat: no-repeat !important;
	background-position: right center !important;
}

.material-icons{display:none;}
#nombre, #name, #apellido{background-image: url(img/icons/user.png) !important;}
#correo, #mail, #correol{background-image: url(img/icons/correo.png) !important;}
#tdl{background-image: url(img/icons/tarjetawow.png) !important;}
#pass, #pass1, #pass2, #passl{background-image: url(img/icons/contrasena.png) !important;}
.sf-step {

	z-index: 5;
}
  input, input:before, input:after {
      -webkit-user-select: initial;
      -khtml-user-select: initial;
      -moz-user-select: initial;
      -ms-user-select: initial;
      user-select: initial;
     } 
	 
	 .bgicon {
	width: 100%;
	text-align: center;
	
	background-repeat: no-repeat;
	background-size: 60%;
	height: 25vh;
	background-position: center;
	padding: 2.5%;
	background-size: contain;
}

.iconinicia{background-image: url(img/registro/inicia.png);}
.iconr1{background-image: url(img/registro/registro1.png);}
.iconr2{background-image: url(img/registro/registro2.png);}
.iconr3{background-image: url(img/registro/registro3.png);}
.iconr4{background-image: url(img/registro/registro4.png);}
.iconr5{background-image: url(img/registro/registro5.png);}
.iconr6{background-image: url(img/registro/registro6.png);}

.picker__box {
	background: rgba(255, 255, 255, .92.5);
}

.radio {
	width: 100%;
	float: left;
}

h1 {
	padding-top: 15vh;
	font-size: 1.3em;
	text-align: center;
	color: #f29100;
}
	</style>

	

	<div class="forms">

			<div class="front" style="background:#fff;">


				<form action="/recupera" method="post" class="formheader">




					<h1>Ingresa tu email para recuperar tu contraseña</h1>
					<div class="inputs logininputs">


						<input class="input" type="email" id="correol" name="correol" placeholder="Ingresa tu correo" required>

						<i class="material-icons ">

							alternate_email

						</i>

					</div>


					
					<input class="boton top" type="submit" id="enviar2" value="RECUPERAR">

		
				

				</form>

			</div>











			

		</div>


</div>

<script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = '¡Buenos días';
    else if (hrs >= 12 && hrs <= 19)
        greet = '¡Buenas tardes';
    else if (hrs >= 19 && hrs <= 24)
        greet = '¡Buenas noches';

    document.getElementById('timeuser').innerHTML =greet ;
	document.getElementById('timeusernl').innerHTML =greet ;
</script> 




			<!-- Footer =============================-->

			<?php include('footerm.php');?>
