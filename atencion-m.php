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
}

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

	header('Location: /atencion-invitado');

	exit(0);

}







?>

<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-Image-Carousel-jQuery-SimpleSlider/free-simple-slider.css" type="text/css" media="all" />

 <div class='pushpm panelm'>

<div class="scrollablepanel">

 <div class="header">

 <div class='close'></div>

 <div class="logo">

			<a href="m"><img src="img/Logo_Vips.png"></a>



			</div>

  <div class="titlemenu">

  Atención al invitado</div>

  </div>



  <div class="productdesc">

<h2 style="color:#f29100; text-align: center;">Lo sentimos,<br> esto no debería de pasar</h2>
<h3 class="titleform" style="text-align:center;"></h3>












		<form id="formatn" class="formatn1" onsubmit="return false"  enctype="multipart/form-data" method="post">

		<input type="hidden" id="problema" name="problema" value="">





		<div class="middle" id="topform">

<h3>¿Estás en una tienda Vips?</h3>

  <label>

  <input type="radio" name="radio" checked/>

  <div class="front-end box">

    <span>Sí</span>

  </div>

</label>



  <label>

  <input type="radio" name="radio"/>

  <div class="back-end box">

    <span>No</span>

  </div>

</label>


</div>



<div class="inputs logininputs">

<label for="contraseña">Estado*:</label><br>

          <?php



          $query = "SELECT state FROM stores WHERE desactivar = 0 GROUP BY state";

          $result = $mysqli->query($query) or die("Falló la consulta $query");






          echo "<select  class='selectform inputatnr' id='ciudad' name='ciudad'> 	<option>Seleccionar</option>";

          while($row = mysqli_fetch_assoc($result))

          {

            $state = mb_convert_case(strtolower($row['state']), MB_CASE_TITLE, "UTF-8");;

            echo '

            <option style="text-transform:capitalize; " value="'.$row['state'].'">'.$state.'</option>

            ';



          }



          echo "</select>";

          ?>



		<label for="contraseña">Vips*:</label><br>

		<select class="selectform" id="listvips" name="listvips">



		<select>

</div>



 <div class="inputs logininputs" id="otro_problema" style="display:none;">

          <label for="contraseña">Problema*:</label><br>





          <input class="input inputatnr" type="text" id="otro_problema" name="otro_problema" placeholder="Ingresa el problema" required>



          <i class="material-icons ">



            perm_identity



          </i>



        </div>




					<div class="inputs logininputs">

					<label for="contraseña">Nombre*:</label><br>





						 <input class="input inputatnr" type="text" id="nombreatn" name="nombreatn" placeholder="Ingresa tu nombre" required>



						<i class="material-icons ">



							perm_identity



						</i>



					</div>




					 <div class="inputs logininputs">



          <label for="correo">Correo*:</label><br>



          <input class="input inputatnr" type="email" id="correoalt" name="correoalt" placeholder="Ingresa tu correo" required>



          <i class="material-icons ">



            alternate_email



          </i>



        </div>

        <div class="inputs logininputs">

          <label for="contraseña">Celular:</label><br>



          <input class="input " type="text" id="phone" name="phone" placeholder="Ingresa tu teléfono" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>



          <i class="material-icons ">



            phone



          </i>



        </div>

					<div class="inputs logininputs">
					<label for="contraseña">Comparte tu experiencia*:</label><br>

						 <textarea class="textareamsg txtarea inputatnr" placeholder="Ingresa tu comentario" id="mensaje" name="mensaje"></textarea>



          <div class="adjuntar">

            <div class="image-upload">

              <label for="file-input" style="cursor: pointer;">

                <img src="/img/m/evidencia.png" style="pointer-events: none; width: 100%;"/>

              </label>




              <input type="file" name="uploadedimage" id="file-input" class="file-input" accept="image/x-png,image/jpeg"/>

            </div>

          </div>
		  
		  
          <div class="switchcont">

            <input type="checkbox" id="switchap" name="switchap" value="1"/><label class="labelcb bgswitch" for="switchap" required>Toggle</label>

          </div>



          <p class="pformtoggle avisop">Acepto <a href="/aviso-privacidad" target="_blank">aviso de privacidad.</a></p>

          <p class="phidden" style="text-align: justify;">

            "Aviso de Privacidad Simplificado: El responsable de sus datos es Operadora Vips, S. de R.L. de C.V. (VIPS®) domicilio en <a href="https://www.google.com/maps/place/Piso+21,+Av.+Revoluci%C3%B3n+1267,+Guadalupe+Inn,+01049+Ciudad+de+M%C3%A9xico,+CDMX/@19.3609001,-99.1928004,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff8aa885c40d:0x5eb40e55a33938a0!8m2!3d19.3609001!4d-99.1906117" target="_blank" style="color:#539bbb; text-decoration:underline;"> Av. Revolución 1267, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, C.P. 01040, CDMX;</a> los datos que recabemos de usted, serán utilizados con la siguiente finalidad: Darle seguimiento a su queja; puede consultar el <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de Privacidad Integral</a> y procedimiento de atención de derechos ARCO."
          </p>

          <div id="respuesta"></div>


          <a id="btnsend" class="boton top envia-form-atn">ENVIAR</a>




					</div>








				</form>





	  </div>





<!-- Imagen platillo=============================-->





</div>

</div>



<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





		<style>


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

.avatar {
	text-align: center;
	padding-top: 7.5vh;
	color: #fff;
}

.overlayimg {
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,.6);
	background-image: url(img/photo.png);
	background-repeat: no-repeat;
	background-size: 40%;
	background-position: center;
	border-radius: 50%;
	opacity: 0;
	transition: .35s all ease;
	/* padding: 15%; */
	margin: auto;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
	cursor:pointer;
}

#imgv {
	float: left;
	width: 100%;
	text-align: center;
	background: url(img/loaderm4.gif);
	background-repeat: no-repeat;
	background-size: 15%;
	background-position: center;
	margin-bottom: 1em;
}
.labelfile1 {
	position: relative;
	width: 20vw !important;
	text-align: center;
	font-size: 10px;
	border-radius: 50%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	float: none !important;
	display: inline-block;
	height: 20vw;
}
.opacity1{opacity:1; transition:.35s all ease;}
.avatarimg img {

	max-width: 100%;

	width: 100%;

	border-radius: 50%;


}

#uploadedimage {
	visibility: hidden;
	height: 0;
	margin: 0;
	padding: 0;
	display: none;
}
#respuesta, #respuesta2 {
	width: 100%;
	float: left;
	padding-top:.5em;
}

.success {
	width: 100%;
	background: #DCEDC8;
	padding: 1em;
	color: #558B2F;
	border-radius: 5px;
	margin: .5em 0;
}

.errormsg {
	width: 100%;
	background: #FFCDD2;
	padding: 1em;
	color: #B71C1C;
	border-radius: 5px;
	margin: .5em 0;
}
.boton {

	text-align: center;
}

.accordion_body.logoutm {
	padding-bottom: 8vh;
}
	</style> <style>



.middle h3 {

	border-top: 1px solid #ccc;

	padding-top: 1.5em;

	color: #666;

	font-size: 1em;

	font-weight: normal;

}



#twitter {

	background-image: url(/img/twitterform.png);

	background-repeat: no-repeat;

	background-position: right 15px;

	background-size: 20px;

}


.selectform {
	width: 100%;
	margin: 1em 0;
	height: 2.5em;
	padding: .5em;
	border: 1px solid #aaa;
	background: #fff !important;
}


.scrollablepanel {

	float: left;

	width: 100%;

	height: 90vh;

	position: relative;

	overflow-y: auto;

}

.formatn1 {

	padding: 5% 0;

}

.formatn1 label {

	font-size: .8em;

}

.formatn1 .inputs {

	float: left;

	width: 100%;

	margin-bottom: 2em;

	padding: 0 5%;

}

.middle {

  width: 100%;

  text-align: center;

  /* Made by */

}

.middle h1 {

  font-family: "Arial", sans-serif;

  color: #fff;

}

.middle input[type="radio"] {

  display: none;

}

.middle input[type="radio"]:checked + .box {

  background-color: #f29100;

color:#fff;

}

.middle input[type="radio"]:checked + .box span {

  color: white;

  transform: translateY(70px);
  font-weight: bold;

}

.middle input[type="radio"]:checked + .box span:before {

  transform: translateY(0px);

  opacity: 1;

}

.middle .box {

	width: 3em;

	height: 3em;

	background-color: #fff;

	transition: all 250ms ease;

	will-change: transition;

	display: inline-block;

	text-align: center;

	cursor: pointer;

	position: relative;

	font-family: "Arial", sans-serif;

	font-weight: 100;

	border-radius: 50%;

	border: 1px solid #f29100;

	margin: 1em;

}

.middle .box:active {

  transform: translateY(10px);

}

.middle .box span {

	position: relative;

	transform: translate(0, 60px);

	left: 0;

	right: 0;

	transition: all 300ms ease;

	font-size: 1em;

	user-select: none;

	color: #555;

	line-height: 2.7em;
	font-weight: normal;

}

.middle .box span:before {

  font-size: 1.2em;

  font-family: FontAwesome;

  display: block;

  transform: translateY(-80px);

  opacity: 0;

  transition: all 300ms ease-in-out;

  font-weight: normal;

  color: white;

display: none;

}

.middle .front-end span:before {

  content: '\f121';

}

.middle .back-end span:before {

  content: '\f0f4';

}

.middle p {

  color: #fff;

  font-family: "Arial", sans-serif;

  font-weight: 400;

}

.middle p span:after {

  content: '\f0e7';

  font-family: FontAwesome;

  color: yellow;

}





	.btnredcupon {

	padding: 1em;

	width: 100%;

	color: #fff;

	text-align: center;

	background: #e42528;

	float: left;

	margin: 1em 0;

	font-weight: bold;

}



.secciones {

	width: 100%;

	position: relative;

	padding: 4% 5% 2.5% 5%;



	background: url(img/Banner_Menu.png);

	border-bottom: 1px solid #ccc;

	background-size: cover;



background-position: center;



background-repeat: no-repeat;

}

.seccion{width: 100%; float: left; text-align: center; cursor: pointer; padding: 0 10%;}

.seccion img{width: 70%; transition: .35s ease all;}

.seccion img:hover{padding: 5%; transition: .35s ease all;}



.seccion h4 {

	font-size: 1.1em;

	margin: 0;

	padding: 0;

	font-family: arial,sans-serif;




}



.active h4{ text-decoration: underline; font-weight: bolder;}





.categorias{



  width: 100%;

  position: relative;

  padding: 2% 15%;

  float: left;

  background-color: #fff;

    text-align: center;

}



.imgcat{width: 10%; display: inline-block; margin: 0 1%;}



.imgcat img{width: 80%; float: left;}



.especiales, .balance{

	float: left;

	width: 100%;

	text-align: center;

  padding: 2% 10%;

}



.bigh1 {

	text-align: left;

	/* transform: skewX(-0.06turn); */

	background: #ed7124;

	color: #fff;

	padding: 1% 5% 1% 2.5%;

	/* position: relative; */

	/* float: left; */

	width: 40%;

	margin: 1em auto;

	background-image: url(img/orangeedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

}





.bigh2 {

	text-align: left;

	/* transform: skewX(-0.06turn); */

	background: #00b7a4;

	color: #fff;

	padding: 1% 5% 1% 2.5%;

	/* position: relative; */

	/* float: left; */

	width: 40%;

	margin: 1em auto;

	background-image: url(img/greenedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

}



.producto{width:50%; float: left; margin-top:2em;     padding: 5%;}

.productoimg, .productodesc {

	width: 50%; float: left; text-align: center;

}



.productoimg img{width: 70%;}

.productodesc h3 {

	color: #444;

	font-size: .8em;

	font-family: "Arial", ‘Trebuchet MS’, Helvetica, sans-serif;

	text-align: left;

	position: relative;

	top: 50%;

	margin: 0;

	padding-right: 10%;

	font-weight: normal;

}

.btndetail {

	background: #ff0025;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

  cursor: pointer;

}



.btncompra {

	background: #ed7124;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

	margin: 1em 0;

  cursor: pointer;

}



.balance .productodesc h3{color:#00b7a4;}



.filtertoggle {

	position: fixed;

	width: 2.5em;

	height: 2.5em;

	background-image: url(img/menu/filter.png);

	background-repeat: no-repeat;

	background-size: 100%;

	top: 170px;

	z-index: 9;

	left: 1em;

	cursor: pointer;

	background-position: top center;

  transition: .35s all ease;

}





.filtertoggle:hover {

	background-size: 90%;

  transition: .35s all ease;

}





.scrolled .filtertoggle{	top: 110px;}



.thumbcat {

	width: 100%;

	height: 150px;

	background-size: 85%;

	background-repeat: no-repeat;

	background-position: center;

	border-radius: 50%;

	position:relative

}





.thumbimg {

	width: 100%;

	height: 150px;

	background-size: 85%;

	background-repeat: no-repeat;

	background-position: center;

	transition:.35s all ease;



}



.activecat .thumbimg {

	width: 100%;

	height: 219px;

	background-size: 100%;

	background-repeat: no-repeat;

	background-position: top left;

	position: absolute;

	margin-left: 5%;

	margin-top: -8%;

	transition:.35s all ease;

}



#contenedor{    float: left;

    width: 100%;

}





  </style>



  <style>



  body, html {

	overflow-x: hidden;

	height: 100%;

	min-height: 100vh;

}







  .fixedmenu {

	width: 100%;

	position: fixed;

	top: 9vh;

	z-index: 3;

}



  .secciones {

  	width: 100%;

  	position: relative;

  	padding: 2.5%;



  	background-color: #f6f6f6;

    	overflow-x: scroll;

      height: 18vh;

  }



.seccion{width: 100%; float: left; text-align: center; cursor: pointer;}

.seccion img{width: 70%; transition: .35s ease all;}

.seccion img:hover{padding: 5%; transition: .35s ease all;}



.seccion h4 {

	font-size: .6em;

	margin: 0;

}







.categorias {

	width: 100%;

	position: relative;

	padding: 2.5%;

	float: left;

	background-color: #fff;

	text-align: left;

	overflow-x: auto;

	width: 300%;

  height: 12vh;

}



.imgcat {

	width: 20vw;

	display: inline-block;

	margin: 0;

}



.imgcat img{width: 75%;}





.especiales{

	position: relative; top:41vh;



}

.especiales, .balance {

	float: left;

	width: 100%;

	text-align: center;

	padding: 2.5%;



}

.bigh1 {

	text-align: center;

	/* transform: skewX(-0.06turn); */

	background: #ed7124;

	color: #fff;

	/* padding: 1% 5%; */

	/* position: relative; */

	/* float: left; */

	width: 80%;

	margin: .5em auto;

	background-image: url(img/orangeedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

	font-size: 1em;

	padding: .5em;

}



.bigh2 {

	text-align: left;

	/* transform: skewX(-0.06turn); */

	background: #00b7a4;

	color: #fff;

	padding: 1% 5%;

	/* position: relative; */

	/* float: left; */

	width: 100%;

	margin: .5em auto;

	background-image: url(img/greenedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

	font-size: 1.6em;

	padding: .5em .5em .5em 1em;

}







.producto {

	width: 100%;

	float: left;

	margin-top: 0;

	border-top: 1px solid #bbb;

	border-bottom: 0;

}

.productodesc {

	width: 100%;

	float: left;

	text-align: center;

	padding: 2.5% 5%;

	padding-right: 12%;

	background-image: url(img/right-arrow.png);

	background-repeat: no-repeat;

	background-position: 95% center;

	background-size: 20px;

	-webkit-transform-style: preserve-3d;

	-moz-transform-style: preserve-3d;

	transform-style: preserve-3d;

	padding-top: 0;

	background-position: right center;

}

.productoimg{

	width: 35%; float: left; padding: 2.5%; text-align: left;

}





.productoimg img {

	width: 100%;

}

.productodesc h3 {

	color: #444;

	font-size: .8em;

	font-family: "Arial", ‘Trebuchet MS’, Helvetica, sans-serif;

	text-align: left;

	position: relative;

	top: 50%;

	margin: 0;

	padding-right: 10%;

	font-weight: normal;

}

.productodesc h3::after {

	content: "";

	position: absolute;

	z-index: -1;

	top: 0;

	left: 0;

	right: 0;

	bottom: 0;


	transform: scaleX(0);

	transform-origin: 0 50%;

	transition: transform .5s ease-out;

}

.btndetail {

	background: #ff0025;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

  cursor: pointer;

  display: none;

}



.btncompra {

	background: #ed7124;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

	margin: 1em 0;

  cursor: pointer;

    display: none;

}



.balance .productodesc h3{color:#00b7a4;}



.main {

  width: 100%;

  z-index: 2;

  position: relative;

  transition: margin-left .2s ease-in;

  -moz-transition: margin-left .2s ease-in;

  -webkit-transition: margin-left .2s ease-in;

}



.panelm {

	background: #fff;

	width: 100%;

	color: #222;

	font-size: 1em;

	min-height: 100%;

}



/* Overlay */



.overlayp {

	z-index: 9999;

	position: absolute;

	left: 0;

	top: 0;

	margin-left: 100%;

	transition: margin-left .2s ease-in;

	-moz-transition: margin-left .2s ease-in;

	-webkit-transition: margin-left .2s ease-in;

}





.overlayp.active {

  margin-left: 0;

  box-shadow: 0 0 20px rgba(0,0,0,0.5);

}



/* Push */



.pushpm {

  position: fixed;



  left: 0;

  top: 0;

  z-index: 9999;

  margin-left: 100%;

  transition: margin-left .35s ease-in;

  -moz-transition: margin-left .35s ease-in;

  -webkit-transition: margin-left .35s ease-in;

}



.pushpm.active { margin-left: 0; position: fixed;

  display:block; }



.main.pactive { margin-left: -100%; }



.close {

	width: 10%;

	min-height: 8vh;

	background: url(img/back.png);

	background-repeat: no-repeat;

	background-size: 23px;

	background-position: 15% center;

	float: left;

}




.active .header {

	height: 8vh;

	width: 100%;

	float: left;

	border-bottom: 1px solid #ccc;

	position: fixed;

	z-index: 9999;

	top: 0;

	background: #fff;
	left: 0;
	-webkit-overflow-scrolling:touch;

}


.titlemenu {

	width: 70%;

	float: left;

	height: 10vh;

	vertical-align: middle;

	padding: 3vh 2vh;

}





.panelm .productdesc {

    width: 100%;

    float: left;

    padding: 0% 0%;

    padding: 5%;

padding-top: 10vh;

}

.panelm  .productimg{

	width:100%;

	float:left;

	margin-top: 5%;

}



.imgcup{padding:0!important;     margin-top: 8vh;}

.panel .productdesc h3 {

	color: #ed7124;

	font-size: 1.2em;

	text-align: left;

}



.panelm  .productdesc p {

	font-size: 1em;

}





.panelm  .productimg img{width:100%;}

.shareicons li {

	display: inline-block;

	margin-right: 1em;

	background-size: 100%;

}

.iconsocial{width:1.5em; height:1.5em;}

.icon-fb{background-image: url(img/menu/social/facebook.png);}

.icon-tw{background-image: url(img/menu/social/twitter.png);}

.icon-ig{background-image: url(img/menu/social/instagram.png);}

.icon-wa{background-image: url(img/menu/social/whatsapp.png);}



.btncompra2 {

	background: #ed7124;

	width: 100%;

	float: left;

	color: #fff;

	padding: .5em 1em;

	margin: 5vh 0;

	cursor: pointer;

	text-align: center;

}



.prefooter {

	width: 100%;

	float: left;

	padding: 5%;

}

.vipscercano {

	width: 100%;

	float: left;

	padding: 0%;

  border-top: 1px solid #ccc;

}



.beneficiosprod {

	width: 100%;

	float: left;

	padding: 0;

	border-top: 1px solid #ccc;

	margin-top: 5vh;

}



.vipscercano h3 {

	color: #222;

	font-size: 1em;

	text-align: left;

	padding: 0em .5em .5em 1.5em;

	margin-bottom: .6em;

	background: url(img/marker.png);

	background-repeat: no-repeat;

	background-size: 1em;

	min-height: 2em;

	vertical-align: middle;

}



.inputmapf {

	padding: 12px;

	width: 100%;

	float: left;

	position: relative;

	display: inline-block;

	height: 45px;

	margin-right: 2.5%;

	background: #eaeaea;

	border: 3px dashed #bbb;

}



.btnmap {

	background: #ff0025;

	color: #fff;

	padding: .5em 1em;

	font-size:1em;

	position: relative;

	width: 100%;

	text-align: center;

	margin-top: 0;

	transition: all .4s ease;

	float: left;

	display: inline-block;

	border: none;

}

.vipscercano .btnmap{

  width:100%;

  margin-top:1em;

}



.beneficiosprod h3 {

	color: #ed7124;

	font-size: 1em;

	font-weight: 700;

	text-align: left;

	padding: 0em .4em .4em 1.5em;

	margin-bottom: .6em;

	background: url(img/benef-icon2.png);

	background-repeat: no-repeat;

	background-size: 1em;

	min-height: 2em;

	vertical-align: middle;

}



.benef {

	width: 50%;

	float: left;

	margin: 0;

	padding: 0 1em;

  transition: all .35s ease;

  min-height: 8em;

}



.benef{ padding: 0 2%;}



.benef img{width: 100%;	padding:0; transition: all .35s ease;}

.benef img:hover{width: 100%;	padding:0 1em; transition: all .35s ease;}



#wrapper {

  text-align: center;

  width: 100%;

float: left;

background: #fff;

overflow-x:hidden;



}



#swiper-one {

	max-width: 100%;

	margin: 0;

	padding: .5em;

	height: 11vh;

	overflow-x: hidden;

}



.swiper-container {

    overflow: visible;

}



#imgcal, #imgplatillo{cursor:pointer;}





.grid {

	width: 100%;

	margin-top: 0vh;

}

.detailbtn, .pidebtn{    display: none;}

  </style>





  <style>



.titleh3{

	color: #f29100;

	font-size: 1.5em;



}

.titleh3::before {

	content: "";

	position: absolute;

	left: 0;

	top: 2em;

	height: 11px;

	width: 200px;

	border-bottom: 2px solid #f29100;

}

.griditem {

	width: 100%;

    float: left;

}



#small-dialog {

    background: white;

    padding: 0;

    text-align: left;

    max-width: 500px;

    margin: 80px auto;

    position: relative;

}



#small-dialog .mfp-close {

    color: #fff;

    text-shadow: 1px 1px 1px #333;

    font-size: 2.5em;

    font-weight: normal;

    font-family: arial, sans-serif;

}



.imgbenefp{width:100%;}

h2.titlebenef {

    color: #f29100;

    font-size: 1.2em;

    padding: 0 1em;

	margin: .5em 0;

}

.vigenciabenef {

    font-family: arial, sans-serif;

    padding: 0 1em;

    margin: 0;

    font-size: 1em;

    font-weight: normal;

}



.legalesbenef {

    font-family: arial, sans-serif;

    padding: 0 1em 1.5em 1em;

    margin: .5em 0;

    font-size: .7em;

    font-weight: normal;

    /* width: 50%; */

}



.textcupon {

    width: 100%;

    float: left;

    background: #fff;

}

.txtcpn{width: 60%;

    float: left;}

.btncpn {

    width: 35%;

    float: left;

    bottom: 0;

    margin-top: 2em;

}



.btncupond {

    background: #f29100;

    color: #fff;

    padding: 15px;

    font-weight: bold;

    text-transform: uppercase;

    font-family: 'Arial', sans-serif;

    font-size: 1em;

    margin-top: 10px;

    position: relative;

    float: left;

    width: 100%;

    text-align: center;

    margin-top: 10%;

    transition: all .4s ease;

}



.imgatn {

	width: 75%;

}



.formatn1 input::placeholder{

	color:#666;

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

	margin-bottom: 2.5vh;

	margin-top: 7.5vh;

}



.iconatn{background-image: url(img/atencion/atencion.png);}

.iconsorry{background-image: url(img/atencion/losentimos.png);}





#site-wrapper {

	position: relative;

	width: 100%;

	min-height: 100vh;

	float: left;

	overflow: auto;

}
.previewimg {
	float: left;
	width: 100%;
}

.image-upload label{
	float: left;
	width: 100%;
	background: none;
	margin-top: 1em;
}

.textareamsg {
	width: 100%;
	height: 100px;
	border: 1px solid #aaa;
	margin: 1em 0;
}

.image-upload {
	float: right;
	width: 50%;
	margin-top: -1em;
}
.image-upload > input {
  visibility:hidden;
  width:0;
  height:0
}

.opcionp {
	text-align: center;
	width: 100%;
	display: inline-block;
	margin: 0;
	padding-bottom: 1em;
}

.accordion_body {
	padding: 0%;
}
.material-icons{display:none;}
#nombreatn, #apellido {
	background-image: url(img/svg/perfilusuario.svg);
	background-size: 10%;
}
#phone {
	background-image: url(img/svg/phone.svg);
	background-size: 8%;
	background-position: 98%;
}
#correoalt, #correol {
	background-image: url(img/svg/correo.svg);
}

.logininputs .input {
	width: 100%;
	float: float;
	position: relative;
	background-size: 10%;
	background-repeat: no-repeat;
	background-position: 98%;
}

.textareamsg {
	font-family: "Arial",‘Trebuchet MS’,Helvetica,sans-serif;
	padding: 2.5%;
	font-size: .9em;
}
.textareamsg::placeholder{color:#666;}
.phidden {
	display: none;
	width: 100%;
	float: left;
	font-size: .8em !important;
}
.adjuntar {
	width: 100%;
	float: left;
}
.switchcont {
	width: auto;
	float: left;
	margin-right: 4%;
}



.avisop {

  width: 60%;

  float: left;

}



.previewimg {

  float: left;

  width: 100%;

}



.image-upload label{

  float: left;

  width: 100%;

  background: none;

  margin-top: 1em;

}



#respuesta, #respuesta2, #respuesta {

  width: 100%;

  float: left;

  padding-top: .5em;

  text-align: center;

}

.success {

  width: 100%;

  background: #DCEDC8;

  padding: 1em;

  color: #558B2F;

  border-radius: 5px;

}



.errormsg {

  width: 50%;

  background: #FFCDD2;

  padding: 1em;

  color: #B71C1C;

  border-radius: 5px;

  margin: 1em auto;

}

.inputs input {
  background-size: 12%;
  background-repeat: no-repeat !important;
  background-position: right center;
}
.material-icons{display:none;}

#nombreatn, #apellido {
  background-image: url(img/svg/perfilusuario.svg);
  background-size: 10%;
}

#correoalt, #correol {
  background-image: url(img/svg/correo.svg);
}

#phone {
  background-image: url(img/svg/phone.svg);
  background-size: 8%;
  background-position: 98%;
}

#btnlogin{display: inline-block;}



.errorinput {

  border: 1px solid #c14549;

  background-image: url(img/error.png)!important;

  background-size: 7%!important;

  background-repeat: no-repeat;

  background-position: 97% center!important;

}



#btnreg {

  display: inline-block;

  width: 55%;

  text-transform: uppercase;

  text-align: center;

  float: left;

  font-family: "Museo 900";

}



#respuesta .errormsg {

  width: 100%;

}



.bgreds{background:#c14549;}



.nopointer{pointer-events:none;}


#btnsend {
	background: #f29100;
	color: #fff;
	padding: .8em;
	font-weight: bold;
	text-transform: uppercase;
	font-family: "Moreno",sans-serif;
	font-size: 1.1em;
	margin-top: 10px;
	position: relative;
	float: left;
	width: 100%;
	text-align: center;
	margin-top: 1em;
	transition: all .4s ease;
	min-width: 200px;
}
#btnsend:hover {
  background: #ffac30;
  transition: all .4s ease;
}
#mensaje {

  background-size: 3% !important;
  background-position: 98% 8px !important;
}


.pformtoggle.avisop {
	width: 80%;
	float: left;
	font-size: .9em !important;
}

.panelm *{-webkit-overflow-scrolling: touch; transform: translate3d(0,0,0);}
.panelm textarea{  z-index:9999;  -webkit-transform: translateZ(0);}

body input, body textarea {
    -webkit-touch-callout: text;
    -webkit-user-select: text;
    user-select: text;
}

</style>

	
<div class="bgicon iconatn">

					Nos esforzamos para que <br> tengas la mejor experiencia<br>


				</div>



	<div class="accordion_container">
	
			<div class="accordion_head">Sugerencia, duda o felicitación<span class="plusminus">+</span>

		</div>
		<div class="accordion_body logoutm" style="display: none;">
		
		<div onclick="openPanel3('c15')" id="c15" class="producto pushm" data-title="¿Tienes alguna duda o sugerencia?">

				<div class="productodesc">

					<h3>¿Tienes alguna duda o sugerencia? </h3>

				</div>

			</div>





			<div onclick="openPanel3('c16')" id="c16" class="producto pushm" data-title="¿Quieres felicitarnos?">

				<div class="productodesc">

					<h3>¿Quieres felicitarnos? </h3>

				</div>

			</div>
			
			<div onclick="openPanel3('c17')" id="c17" class="producto pushm" data-title="¿Tienes algún otro comentario?">

				<div class="productodesc">

					<h3>¿Tienes algún otro comentario? </h3>

				</div>

			</div>
			
		</div>
		
		
		<div class="accordion_head">Calidad en los alimentos<span class="plusminus">+</span>

		</div>
		<div class="accordion_body" style="display: none;">
		<div onclick="openPanel('c1')" id="c1" class="producto pushm" data-title="Mi platillo estuvo mal preparado">

				<div class="productodesc">

					<h3>Mi platillo estuvo mal preparado</h3>

				</div>

			</div>



			<div onclick="openPanel('c2')" id="c2" class="producto pushm" data-title="Mi platillo no tenía los ingredientes solicitados">

				<div class="productodesc">

					<h3>Mi platillo no tenía los ingredientes solicitados</h3>

				</div>

			</div>





			<div onclick="openPanel('c3')" id="c3" class="producto pushm" data-title="Mi platillo estaba frio">

				<div class="productodesc">

					<h3>Mi platillo estaba frio</h3>

				</div>

			</div>
			
		</div>
		<div class="accordion_head">Atención en restaurante<span class="plusminus">+</span>

		</div>
		<div class="accordion_body" style="display: none;">
		<div onclick="openPanel('c4')" id="c4" class="producto pushm" data-title="Tardaron demasiado en sentarnos">

				<div class="productodesc">

					<h3>Tardaron demasiado en sentarnos</h3>

				</div>

			</div>



			<div onclick="openPanel('c5')" id="c5" class="producto pushm" data-title="Mis platillos tardaron demasiado">

				<div class="productodesc">

					<h3>Mis platillos tardaron demasiado</h3>

				</div>

			</div>





			<div onclick="openPanel('c6')" id="c6" class="producto pushm" data-title="Mi tiempo en caja fue demasiado">

				<div class="productodesc">

					<h3>Mi tiempo en caja fue demasiado</h3>

				</div>

			</div>
			
			<div onclick="openPanel('c7')" id="c7" class="producto pushm" data-title="La atención fue inadecuada">

				<div class="productodesc">

					<h3>La atención fue inadecuada</h3>

				</div>

			</div>
			
		</div>
	</div>


		<div class="accordion_head">Pagos y promociones<span class="plusminus">+</span>

		</div>
		<div class="accordion_body" style="display: none;">
		<div onclick="openPanel('c8')" id="c8" class="producto pushm" data-title="No pude facturar mi cuenta">

				<div class="productodesc">

					<h3>No pude facturar mi cuenta</h3>

				</div>

			</div>



			<div onclick="openPanel('c9')" id="c9" class="producto pushm" data-title="No pude redimir mi cupón">

				<div class="productodesc">

					<h3>No pude redimir mi cupón</h3>

				</div>

			</div>





			<div onclick="openPanel('c10')" id="c10" class="producto pushm" data-title="Mi Tarjeta de Lealtad no funcionó">

				<div class="productodesc">

					<h3>Mi Tarjeta de Lealtad no funcionó</h3>

				</div>

			</div>
			
			<div onclick="openPanel('c11')" id="c11" class="producto pushm" data-title="Tuve problemas con mi cuenta">

				<div class="productodesc">

					<h3>Tuve problemas con mi cuenta</h3>

				</div>

			</div>
			
		</div>
	</div>

		<div class="accordion_head">Entrega a domicilio<span class="plusminus">+</span>

		</div>
		<div class="accordion_body logoutm" style="display: none;">
		
		<div onclick="openPanel('c12')" id="c12" class="producto pushm" data-title="Mi pedido nunca llegó">

				<div class="productodesc">

					<h3>Mi pedido nunca llegó</h3>

				</div>

			</div>





			<div onclick="openPanel('c13')" id="c13" class="producto pushm" data-title="Mi pedido llegó en malas condiciones">

				<div class="productodesc">

					<h3>Mi pedido llegó en malas condiciones</h3>

				</div>

			</div>
			
			<div onclick="openPanel('c14')" id="c14" class="producto pushm" data-title="Mi pedido tardó demasiado">

				<div class="productodesc">

					<h3>Mi pedido tardó demasiado</h3>

				</div>

			</div>
			
		</div>
		
		

		
		<div class="accordion_head pushm" onclick="openPanel2('cninguna')" id="cninguna" style="color: #f29100; text-align: left; font-size: 13px;" data-title="Ninguna de estas situaciones aplica a mi caso">Ninguna de estas situaciones aplica a mi caso<span class="plusminus"></span>

		</div>

	
		
			
	</div>
	



</div>


      <script>



      $('#listvips').prop('disabled','disabled');



      function filePreview(input) {

        if (input.files && input.files[0]) {

          var reader = new FileReader();

          reader.onload = function (e) {

            $('.file-input + img').remove();

            $('.file-input').after('<img src="'+e.target.result+'" width="50%" class="previewimg" height="auto"/>');

          }

          reader.readAsDataURL(input.files[0]);

        }

      }



      $("#file-input").change(function () {

        filePreview(this);

      });





      $('#ciudad').on('change', function() {





        var  state =this.value;

        encoded = encodeURIComponent(state);

        //alert("SELECT * FROM stores WHERE state = '"+encoded+"' AND desactivar = 0");

        $("#listvips").load("consultavips.php?state="+encoded);

        $('#listvips').prop('disabled', false);

      });


      $('#btnsend').click(function(event){



        $("#respuesta").html("");
        $("#respuesta").hide();
        $("#respuesta").show();




        $('.inputatnr').removeClass('errorinput');

        $(".bgswitch").removeClass("bgreds");

        var nombre= $("#nombreatn").val();

        var correo = $('#correoalt').val();

        var celular = $('#phone').val();

        var estado = $('#ciudad').val();

        var vips = $('#listvips').val();

        var mensaje = $('#mensaje').val();

        var error = false;



        if (nombre == '' || correo == ''|| celular == '' || estado == '' || vips == '' || mensaje == '')

        {

          $("html, body").animate({ scrollTop: $("#topform").offset().top });

          $("#respuesta").append("<div class='errormsg'>Completa los campos</div>");

          $.each($('.inputatnr'),function() {

            if ($(this).val().length == 0 || $(this).val() == '') {

              $(this).addClass("errorinput");

            }

          });

          error = true;



        }





        var checkBox = document.getElementById("switchap");

        if (checkBox.checked == false){

          $("#respuesta").append("<div class='errormsg'>Debes aceptar el aviso de privacidad</div>");

          $(".bgswitch").addClass("bgreds");

          error = true;

        }





        if (error == false){

          event.preventDefault();

          $("#respuesta").append("<div class='success'>Por favor espera...</div>");

          $("#btnreg").prop('disabled', true);

          $("#btnreg").addClass('nopointer');



          $.ajax({

            url : "formatn1.php",

            type: "POST",

            data : new FormData($('#formatn')[0]),

            processData: false,

            contentType: false,

            success:function(data){
				
			var inlocation= document.getElementsByName("radio")[0].value;
			var locationid = $('#listvips :selected').attr("data-id");
			var locationcc = $('#listvips :selected').attr("data-cc");
			var problema = $('#problema').val();
				
				analytics.track("Customer feedback Sent", {
				  titulo: problema, 
				  nombre: nombre,
				  email: correo,
				  location_id: locationid, 
				  location_cc: locationcc,
				  location_name: vips,
				  in_location: inlocation,
				  cellphone: celular
				  
			});



              $("html, body").animate({ scrollTop: $("#mensaje").offset().top });

              $('#respuesta').html(data);

              $("#btnreg").prop('disabled', false);

              $("#btnreg").removeClass('nopointer');
			  
			  clearForms();



              setTimeout(function() {

                $('.success').slideUp("slow");

                $('.errormsg').slideUp("slow");

              }, 15000);







            }

          });



        }



      });


      </script>


      <script>

      $("#switchap").click(function() {

        if($(this).is(":checked")) {

          $(".phidden").slideDown();

        }

        else {

          $(".phidden").slideUp();

        }

      });


function openPanel(id){
	
	$("#otro_problema").hide();
	var ids = "#"+id;
	var nombre = $(ids).attr('data-title');
		$(".productdesc h2").show();
		$(".productdesc h2").html("Lo sentimos, <br> esto no debería pasar");

	$(".titleform").text(nombre);
	$("#problema").attr("value", nombre);
}



function openPanel3(id){
	
	$("#otro_problema").hide();
	var ids = "#"+id;
	var nombre = $(ids).attr('data-title');
		$(".productdesc h2").show();
		$(".productdesc h2").html("Agradecemos tus comentarios");

	$(".titleform").text(nombre);
	$("#problema").attr("value", nombre);
}

function openPanel2(id2){
	$(".productdesc h2").hide();
	
	$("#otro_problema").show();
	var ids2 = "#"+id2;
	var nombre2 = $(ids2).attr('data-title');

	$(".titleform").text(nombre2);
	$("#problema").attr("value", nombre2);
}

function clearForms()
{
    $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
    $(':checkbox, :radio').prop('checked', false);
}

// JavaScript Document
$(document).ready(function () {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function () {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});

    </script>





			<!-- Footer =============================-->

			<?php include('footerm.php');?>
