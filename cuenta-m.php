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
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


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



	header('Location: /cuenta');



	exit(0);



}








$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);
		
		if(strlen($page)<3){
			
			$page = 'm';
			
		}






?>





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



			font-family: "Program", sans-serif;



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

			background-size: 6% !important;

			background-repeat: no-repeat !important;

			background-position: right center !important;

			margin-top: 17px;


		}
		
		.input {
    height: 40px;
    width: 100%;
    background: 0 0;
    border: none;
    border-style: solid;
    outline: none;
    border-color: #a9a6a1;
    border-top: none;
    border-left: none;
    border-right: none;
    padding: 10px 5%;
    margin-top: 0!important;
	    border-width: 1px;
}



		.material-icons{display:none;}

		#nombre, #name, #apellido{background-image: url(/img/svg/perfilusuario.svg);}

		#correo, #mail, #correol{background-image: url(/img/icons/correo.png);}

		#tdl{background-image: url(/img/svg/cardf.svg) !important; background-size: 10%;}

		#pass, #pass1, #pass2, #passl{background-image: url(/img/icons/contrasena.png);}

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
			padding-top:30%;

		}



		.iconinicia{background-image: url(/img/registro/inicia.png);}

		.iconr1{background-image: url(/img/registro/registro1.png);}

		.iconr2{background-image: url(/img/registro/registro2.png);}

		.iconr3{background-image: url(/img/registro/registro3.png);}

		.iconrtel{background-image: url(/img/registro/registrotel.png);}

		.iconr4{background-image: url(/img/registro/registro4.png);}

		.iconr5{background-image: url(/img/registro/registro5.png);}

		.iconr6{background-image: url(/img/registro/registro6.png);}



		.picker__box {

			background: rgba(255, 255, 255, .92.5);

		}



		.radio, .fleft {

			width: 100%;

			float: left;

		}



		.avisocard {

			color: #f29100;

			width: 100%;

			float: left;

			font-size: .80em;

			margin-left: 5%;

		}


#fb {
	background-color: #3b5998;
	background-image: url(/img/login/fb.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: center !important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px !important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	right: 0;
	left: 0;
	translate: 50% 50%;
	color: #fff;
	padding: 0 !important;
	font-size: .8em;
	padding-right: 10%;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px !important;
	padding-left: 5% !important;
	width: 50px !important;
	text-align: center !important;
	border-radius: 50% !important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	max-width: 50px !important;
}
#google {
	background-color: #fff;
	background-image: url(/img/google.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: center !important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px !important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	/* right: 0; */
	/* left: 0; */
	translate: 50% 50%;
	color: #fff;
	padding: 1em 5%;
	font-size: .8em;
	padding-right: 0;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px !important;
	padding-left: 5% !important;
	width: 50px !important;
	text-align: center !important;
	border-radius: 50% !important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	max-width: 50px !important;
	margin-left: 25px;
	/* border: 1px solid red; */
	position: relative;
	align-contentalign-contentalign-content: ;
}
		.aligncenter{text-align: center;}



		.loginpanel .p {

			margin-top: 0;

		}



		.orfb {
	margin-bottom: 0em;
	line-height: 1.5;
}

		.descicon{width:100%; float:left; text-align:center; margin-top:-50px;}

		.sf-container{overflow:hidden;}

.sf-arrows {

	position: absolute;
	margin-top: -40%;
}

.sf-container {
	max-height: none;

}

main {

	max-height: 95vh;
	overflow: scroll;
}

#togglebtn {
	margin: 15vh auto 0 auto;
	background: #d8d8d8;
	border-radius: 20px;
	height: 15px;
	width: 40%;
	position: relative;
}


.iconvipsactive {
	width: 55px;
	height: 55px;
	background: url(/img/m/iconvipsactive.png);
	background-repeat: no-repeat;
	background-size: 100%;
	margin-top: -15px;
	position: absolute;
	left: 70%;
	transition: .35s all ease;
}

.iconvipsinactive {
	width: 55px;
	height: 55px;
	background: url(/img/m/iconvipsinactive.png);
	background-repeat: no-repeat;
	background-size: 100%;
	margin-top: -15px;
	position: absolute;
	left: -10%;
	transition: .35s all ease;
}

.txtreg {
	font-size: .75em;
	position: relative;
	top: 8vh;
	left: 0;
	transition: .35s all ease;
	width: 50%;
	float: left;
	padding-left: 20%;
	margin-top: 0;
}
.txtsesion {
	font-size: .75em;
	position: relative;
	top: 8vh;
	text-align: right;
	transition: .35s all ease;
	float: left;
	width: 50%;
	padding-right: 15%;
	margin-top: 0;
}
.activetxt{transition:.35s all ease; color: #f29100; font-weight:bold;}





#respuesta, #respuesta2, #respuesta {

    width: 100%;

    float: left;

    padding-top: .5em;

    text-align: center;

}

.success {

	width: 55%;

	background: #DCEDC8;

	padding: .5em;

	color: #558B2F;

	border-radius: 0px;
	 font-size: .8em;

}


.errormsg {
    width: 55%;
    background: #ffcdd2;
    padding: .5em;
    color: #b71c1c;
    border-radius: 0;
    margin: 1em auto;
    font-size: .8em;
}


#btnlogin{display: inline-block;}



.errorinput {

    border: 1px solid #c14549;

    background-image: url(/img/error.png)!important;

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

    font-family: "Program", sans-serif;

}



#respuesta .errormsg {

    width: 100%;

}

#respuesta .success {

	width: 100%;


}


.bgreds{background:#c14549!important;}



.nopointer{pointer-events:none;}



#small-dialogpass {

	background: white;

	padding: 5%;

	text-align: center;

	max-width: 500px;

	margin: 80px auto;

	position: relative;

	background-image: url(/img/fondo.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: bottom right;

}



#small-dialogpass {

	background: white;

	padding: 2%;

	text-align: center;

	max-width: 500px;

	margin: 80px auto;

	position: relative;

	background-image: url(/img/fondo.png);

	background-size: 25%;

	background-repeat: no-repeat;

	background-position: bottom right;

	display: table;

}



#small-dialogpass  h3 {

	color: #f29100;

	padding: 2% 2% 5% 2%;

	border-bottom: 2px solid #ccc;

	width: 70%;

	margin: 0 auto;

}



#small-dialogpass  #formlogin {

	float: left;

	width: 100%;

	padding: 2.5% 0;

}



#small-dialogpass  .boton {

	border: none;

	padding: 20px;

	outline: none;

	border-color: #a9a6a1;

	width: 60%;

	font-size: 1em;

	background: #f29100;

	color: white;

	cursor: pointer;

	display: inline-block;

	text-transform: uppercase;

	font-family: "Program", sans-serif;

}



#small-dialogpass  .logininputs .input {

	width: 80%;

	float: none;

}
#tab2_content {
    text-align: center;
    float: left;
    position: relative;
   padding: 7.5vh 0;
   max-width:100%;
}

.formulario {
    background: #fff;
 
}
p.phidden {
    font-size: .7em;
    float: left;
	display:none;
}
#respuesta3 .success, #respuesta3 .errormsg {

	width: 80%;

	margin: .5em auto auto;

}



#correofb {

	background-image: url(/img/svg/correo.svg);

}



.inputs5 {

	float: left;

	width: 100%;

	margin-bottom: 5%;

	padding: 0 10%;

	text-align: left;

	margin-top: 1.5em;

}

.iconon {

    width: 10%;

    margin: 0;

    padding: 0;

    float: right;

    position: relative;

    margin-left: -5%;

    margin-top: -40px;

    opacity: .5;

}



#btnrecover {

	background: #ff1528;

	color: #fff;

	padding: 1em;

	display: inline-block;

	font-family: "Program", sans-serif;

	width: 50%;

	cursor:pointer;

}

#btnlogin {
	float: left;
	margin-left: 5px;
	right: 0;
	left: 0;
	margin: 0 auto;
	width: 80%;
	text-align: center;
	background: #f29100;
	color: #fff;
	padding: 1em;
	margin-left: 10%;
	margin-bottom: 1em;
	font-family: "Program",sans-serif;
	border-radius: 30px;
	font-weight: 500;
}
#respuesta2 .errormsg {
	width: 90%;
	background: #FFCDD2;
	padding: 1em;
	color: #B71C1C;
	border-radius: 5px;
	margin: 1em auto;
}
#btnreg {
	float: left;
	margin-left: 5px;
	right: 0;
	left: 0;
	margin: 0 auto;
	width: 80%;
	text-align: center;
	background: #f29100;
	color: #fff;
	padding: 1em;
	margin-left: 10%;
	margin-bottom: 1em;
	font-family: inherit;
	font-weight: bold;
	cursor: pointer;
	font-family: "Program", sans-serif;
}
.abajo {
	padding-left: .25em;
}

.back {
	background-image: none!important;

}

.orangetext{color:#f29100; text-decoration:underline;}

#togglebtn {
	margin: 12.5vh 0 0 0;
	background: #fff;
	border-radius: 0;
	height: auto;
	width: 100%;
	position: relative;
	text-align: center;
}

.togglebtn h1 {
	font-size: 1.5em;
}

.loginvips{display:none;}
.registrovips{display:block;}
.registrovips .regvips{display:none;}
.registrovips .loginvips{display:block;}

#formlogin label {
	width: 50%;
	float: left;
	margin-left: 25%;
}
#tel1 {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%;
}


.redtit {
    /* font-family: "Program",sans-serif; */
    color: #fff;
    font-weight: bold;
    background: #ea0029;
    padding: 5%;
	margin-top:0;
}

.linklogin {
    width: 100%;
    float: left;

}
.linklogin a {
    color: #ea0029;
    cursor: pointer;


}

.titpr {
    margin-top: 0;
    color: #534747;
    text-align: center;
    font-size: 1.25em;
    font-family: "Program";
    padding: 2.5% 10%;
}
   .parallaxTilt_hover {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
top: 0;
}

.containerparallax {
	position: absolute;
	width: 80%;
	display: inline-block;
	height: auto;
	padding: 0 5%;
	float: left;
	margin: 2.5% 10%;
	    min-height: 38vh;
}

#parallaxlogin{left: 0%;}
#parallaxreg{left: 60%;}


.tilter_image, .tilter_image2, .tilter_image3, .tilter_image4{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: auto;
	transition: .5s ease-out;
	transform: translate3d(0,0,0);
	
}

@keyframes float {
	0% {
		drop-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
	50% {
		drop-shadow: 0 25px 15px 0px rgba(0,0,0,0.2);
		transform: translatey(-20px);
	}
	100% {
		drop-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
}

.tilter_image {
	margin-top: 10%;
	animation: float 3s ease-in-out infinite;

}
.tilter_image2 {
	margin-top: 0%;
width: 20%;
animation: float 6s ease-in-out infinite;

}
.tilter_image3 {
    width: 40%;
    margin-top: 20% !important;
    left: -10%;
	animation: float 8s ease-in-out infinite;
}


.tilter_image4 {
width: 40%;
right: 0px;
left: 60%;
animation: float 10s ease-in-out infinite;

}

.inputs input {
	background-size: 5.5% !important;
	background-repeat: no-repeat !important;
	background-position: right center;
}

.loginpanel{background-image:url(/img/login/pattern5.png);
    background-size: 25%;
    background-repeat: no-repeat;
    background-position: 115% 70px;
}

#formreg{text-align:center;}

#formreg .inputs {

    padding: 0 2.5%;
}

#nombre, #apellido {
background-size: 6.5% !important;
}

#parallaxreg{display:none; transition:1s all ease; left:0;}
#regpanel2 {
	z-index: -1;
	opacity: 0;
	transition: 1s all ease;
	position: absolute !important;
	left: 0%;
}


.loginactive #parallaxreg{display:inline-block; transition:1s all ease; left:0; transition:1s all ease; left:0;}
.loginactive #parallaxlogin{display:none; transition:1s all ease; left:0; transition:1s all ease; left:0;}

.loginactive #regpanel {
	z-index: 2;
	opacity: 1;
	/* transition: 1s all ease; */
	position: relative !important;
	/* left: 60% !important; */
	transition: 1s all ease;
	left: 0;
	float: none !important;
	display: inline-block;
	height: auto;
	/* z-index: 2; */
}
.loginactive .loginpanel {

    z-index: -1;
    opacity: 0;
    transition: 1s all ease;
    left: 0% !important;
    transition: 1s all ease;
    left: 0;
    position: absolute;

}
p.requiredtext {
    font-size: .85em;
    color: #717171;
    float: left;
    width: 100%;
    text-align: center;
    padding: 2.5%;
}

.pformtoggle {
    text-align: left;
}

.labelcb {
    cursor: pointer;
    text-indent: -9999px;
    width: 30px;
    height: 15px;
    background: grey;
    display: block;
    border-radius: 100px;
    position: relative;
    top: -5px;
}

.labelcb:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 14px;
    height: 14px;
    background: #fff;
    border-radius: 20px;
    transition: .3s;
    box-shadow: 1px 2px 5px #444;
}
</style>

	





	<div id="tab2_content" id="panellogin">



			<div class="loginpanel">
			
			<div id="loginpanel">
			
			
			



				<p class="redtit"> Inicia sesión y disfruta el sabor de Vips</p>
				
				
				<div class="carousel">
 <ul class="flip-items">
 
 

		<li class="clase">



			<img class="imagen" src="/img/svg/wowjuguetes.svg" alt="">



			<p class="p texto">Puedes <span style="color:#f29100;">usar tus puntos para pagar</span> lo que más te guste.</p>



		</li>




		<li class="clase">



			<img class="imagen" src="/img/svg/wowcel.svg" alt="">



			<p class="p texto"><span style="color:#f29100;">Todos los beneficios</span> al alcance de tu mano.</p>



		</li>
		
		
		<li class="clase">



			<img class="imagen" src="/img/svg/wowpromo.svg" alt="">



			<p class="p texto">Accede a <span style="color:#f29100;">cupones y promociones</span>.</p>



		</li>







		<li class="clase" style="padding-top: 2% !important;">



			<img class="imagen" src="/img/svg/wowtienda.svg" alt="">



			<p class="p texto" style="font-size: 8px;">En <span style="color:#f29100;">cada visita obtienes un descuento</span>. Con cada visita posterior durante ese mes, tu descuento crece hasta llegar al 50%</p>



		</li>














		<li class="clase">



			<img class="imagen" src="/img/svg/wowinsignia.svg" alt="">



			<p class="p texto">Con Wow <span style="color:#f29100;">acumulas puntos en cada visita</span>, que podrás utilizar para pagar en Vips.</p>



		</li>




		<li class="clase">



			<img class="imagen" src="/img/svg/wowregalo.svg" alt="">



			<p class="p texto">Celebra tu cumpleaños con nosotros y <span style="color:#f29100;"> recibe un regalo especial</span>.</p>



		</li>
	</ul>



	</div>

				
				<p class="linklogin">¿Aún no tienes cuenta? <a>Regístrate</a></p>

					<div class="aligncenter">

						<p class="orfb"><br></p>

					</div>



				<div>



					<form  id="formlogin" class="formlogin" onsubmit="return false"  enctype="multipart/form-data" method="post">



					<div id="respuesta2"></div>


						<div class="inputs logininputs">

							<input class="input inputloginr" type="text" id="correol" name="correol" placeholder="Tu correo" required>

						</div>


						<div class="inputs logininputs">

							<input class="input inputloginr" type="password" id="passl" name="passl" placeholder="Tu contraseña" required>


						</div>







							<a href="#small-dialogpass" class="modalpass" id="recoverpass" >Olvidé mi contraseña</a>


						<br><br>



						<div>



							<a class="boton top"  id="btnlogin">ENTRAR</a>



						</div>



					</form>
					<div class="aligncenter" style="float: left; width: 100%;">

						<p class="orfbd">O inicia sesión con<br></p>
						<a  class="loginfb" href="/fbconfig?page=<?php echo $page; ?>" id="fb" ></a>
						<a  class="logingoogle" href="/logingoogle.php?page=<?php echo $page; ?>" id="google" ></a>

						

					</div>



					
					


				</div>



			</div>
			
			<div id="regpanel" style="display:none;">

				<div class="aligncenter" >

				<p class="redtit">Regístrate y empieza a acumular puntos Wow y a recibir un descuento en todas tus visitas a Vips</p>
				
				<div class="carousel">
 <ul class="flip-items">
 
 

		<li class="clase">



			<img class="imagen" src="/img/svg/wowjuguetes.svg" alt="">



			<p class="p texto">Puedes <span style="color:#f29100;">usar tus puntos para pagar</span> lo que más te guste.</p>



		</li>




		<li class="clase">



			<img class="imagen" src="/img/svg/wowcel.svg" alt="">



			<p class="p texto"><span style="color:#f29100;">Todos los beneficios</span> al alcance de tu mano.</p>



		</li>
		
		
		<li class="clase">



			<img class="imagen" src="/img/svg/wowpromo.svg" alt="">



			<p class="p texto">Accede a <span style="color:#f29100;">cupones y promociones</span>.</p>



		</li>







		<li class="clase" style="padding-top: 2% !important;">



			<img class="imagen" src="/img/svg/wowtienda.svg" alt="">



			<p class="p texto" style="font-size: 8.5px;">En <span style="color:#f29100;">cada visita obtienes un descuento</span>. Con cada visita posterior durante ese mes, tu descuento crece hasta llegar al 50%</p>



		</li>














		<li class="clase">



			<img class="imagen" src="/img/svg/wowinsignia.svg" alt="">



			<p class="p texto">Con Wow <span style="color:#f29100;">acumulas puntos en cada visita</span>, que podrás utilizar para pagar en Vips.</p>



		</li>




		<li class="clase">



			<img class="imagen" src="/img/svg/wowregalo.svg" alt="">



			<p class="p texto">Celebra tu cumpleaños con nosotros y <span style="color:#f29100;"> recibe un regalo especial</span>.</p>



		</li>
	</ul>



	</div>
				
				<p class="linklogin">¿Ya tienes cuenta? <a>Inicia Sesión </a></p>

				<p id="orfb" class="orfb"></p>

				</div>



					<div class="formulario form" id="topreg">

			<form id="formreg" class="formreg" onsubmit="return false"  enctype="multipart/form-data" method="post">



				<div class="inputs">

					<input class="input inputregr" type="text" id="nombre" name="nombre" placeholder="Tu nombre*" required>


				</div>




				<div class="inputs">

					<input class="input inputregr" type="text" id="apellido" name="apellido" placeholder="Ingresa tus apellidos*" required>

				</div>



				<div class="inputs">
					<input class="input inputregr" type="email" id="correo" name="correo" placeholder="Tu correo*" required onkeyup="this.value = this.value.toLowerCase();">

				</div>





				<div class="inputs">

					<input class="input inputregr" type="password" id="pass" name="pass" placeholder="Tu contraseña*" required>

				</div>

				<div class="switchcont" >

					<div style="width:40px; float:left;">



						<input type="checkbox" id="switch" name="switch" value="1" checked/><label class="labelcb" for="switch"  required>Toggle</label></div>



						<div style="width:80%; float:left;">



							<p class="pformtoggle">Quiero recibir promociones, descuentos especiales Vips y beneficios de mi Tarjeta de Lealtad.</p>



						</div>



					</div>











					<div class="switchcont" >



						<div style="width:40px; float:left;">



							<input type="checkbox" id="switchap" name="switchap" value="1"/><label class="labelcb bgswitch" for="switchap" required>Toggle</label></div>



							<div style="width:80%; float:left;">



								<p class="pformtoggle">Acepto <a href="/aviso-privacidad" target="_blank">términos y condiciones y aviso de privacidad.</a></p>





							</div>



								<p class="phidden" style="text-align: justify;">"Al registrarse acepta afiliarse al programa de recompensas "WOW Rewards" <a href="https://www.wowrewards.mx/home/condiciones" target="_blank" style="color: #f29100; text-decoration: underline;">Consulte términos y condiciones</a>  y <a href="https://www.wowrewards.mx/home/privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de privacidad </a> del programa. Aviso de Privacidad Simplificado: El responsable de sus datos es Operadora Vips, S. de R.L. de C.V. (VIPS®) domicilio en <a href="https://www.google.com/maps/place/Piso+21,+Av.+Revoluci%C3%B3n+1267,+Guadalupe+Inn,+01049+Ciudad+de+M%C3%A9xico,+CDMX/@19.3609001,-99.1928004,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff8aa885c40d:0x5eb40e55a33938a0!8m2!3d19.3609001!4d-99.1906117" target="_blank" style="color:#539bbb; text-decoration:underline;"> Av. Revolución 1267, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, C.P. 01040, CDMX;</a> los datos que recabemos de usted, serán utilizados con la siguiente finalidad: Darle de Alta en nuestro programa multimarca; puede consultar el <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de Privacidad Integral</a> y procedimiento de atención de derechos ARCO."</a> </p>



						</div>

						<div style="float: left; width: 100%; margin-top: 20px; z-index: 1; position: relative; height: 80px; overflow: hidden;">
						<div class="g-recaptcha" data-theme="light" data-sitekey="6LdgS20UAAAAAOYAzOxw83A05x-fKz6OJS3Ojpch" style="z-index: 1;"></div>
						</div>











						<br><br>

						<div id="respuesta"></div>



						<div>

						<p class="requiredtext">* Campo requerido</p>



							<a class="boton top boton-registro"  id="btnreg">REGISTRARME</a>



						</div>
						
						



					</form>
					
					<div class="aligncenter" style="float: left; width: 100%;">
					<p class="orfbd"  style="width: 100%; float: left;">O regístrate con<br></p>
				<a class="simple-ajax-popup mfp-with-anim  blanco btnfb1 regfb" href="/avisofb.php?page=<?php echo $page; ?>" data-effect="mfp-zoom-out" id="fb" ></a>
				<a class="simple-ajax-popup mfp-with-anim  blanco btnfb1 reggoogle" href="/avisogoogle.php?page=<?php echo $page; ?>" data-effect="mfp-zoom-out" id="google" ></a>
				</div>







				</div>







			</div>

			</div>
			
			
			
			<div style=" position: relative; float: left;width: 100%; margin:7% 0;">
	
	<div class="containerparallax" id="parallaxlogin">
		<a href="#" id="work" class="parallaxTilt_hover">
            <figure class="tilter_figure">
                
                <img class="tilter_image3" src="/img/login/pattern1.png" alt="dive" />
				<img class="tilter_image4" src="/img/login/pattern4.png" alt="dive" />
                <img class="tilter_image2" src="/img/login/pattern2.png" alt="dive" />
				<img class="tilter_image" src="/img/login/MilanesaHawaiana.png" alt="dive" />
                
            </figure>
        </a>
	</div>
	
		<div class="containerparallax" id="parallaxreg">
		<a href="#" id="work" class="parallaxTilt_hover">
            <figure class="tilter_figure">
                
                <img class="tilter_image3" src="/img/login/pattern1.png" alt="dive" />
				<img class="tilter_image4" src="/img/login/pattern6.png" alt="dive" />
                <img class="tilter_image2" src="/img/login/pattern2.png" alt="dive" />
				<img class="tilter_image" src="/img/login/molletes.png" alt="dive" />
                
            </figure>
        </a>
	</div>
	</div>



			<div class="modalcard">

				<div class="cancelred"></div>

				<div id="interactive" class="viewport"></div>

				<div class="error"></div>

			</div>

		</div>





		<style>

		.modalcard {

			width: 100%;

			height: 100vh;

			z-index: -1;

			position: fixed;

			background: #fff;

			top: 0;

			display:none;

		}

		.modalshow{display:block; z-index:5;}



		.cancelred {

			background-image: url(img/cancelred.png);

			background-size: 100%;

			background-repeat: no-repeat;

			width: 15%;

			position: absolute;

			top: 10vh;

			right: 1em;

			height: 2em;

			width: 2em;

		}



		#interactive.viewport {position: relative; width: 100%; height: auto; overflow: hidden; text-align: center;     top: 17vh;}

		#interactive.viewport > canvas, #interactive.viewport > video {max-width: 100%;width: 100%;}

		canvas.drawing, canvas.drawingBuffer {position: absolute; left: 0; top: 0;}

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
}
.clase {
	border-radius: 8px;
	box-shadow: 0 2px 6px 0 rgba(0,0,0,.5);
	background-color: #fff;
	width: 110px;
	height: 150px;
	text-align: center;
	padding: 7.5% 2.5% 5% 2.5% !important
}
.flipster__item--current {
	margin-top: -30px !important;
	transform: translateY(-30px);
}

.flipster--carousel .flipster__item--past-1, .flipster--carousel .flipster__item--future-1 {
	opacity: 1 !important;
	transition-delay: 60ms;
}

.clase .texto {
	width: 100%;
	padding: 0;
	float: left;
	font-size: 9px;
}

.flipster--carousel .flipster__item--past-2, .flipster--carousel .flipster__item--future-2 {
	opacity: 0!important;
	transition-delay: 90ms;
}

.flipster--flat .flipster__item--past, .flipster--flat .flipster__item--future {
	opacity: 1 !important;
}

.clase.flipster__item.flipster__item--future.flipster__item--future-2 {
	opacity: 0 !important;
}
.clase.flipster__item.flipster__item--past.flipster__item--past-2 {
	opacity: 0 !important;
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
	padding: 2.5% 20%;
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

	</style>


  <div id="small-dialogpass" class="zoom-anim-dialog mfp-hide">



	  <h3>Ingresa tu email para recuperar tu contraseña </h3>

	 <form id="formrecover" class="formrecover" onsubmit="return false"  enctype="multipart/form-data" method="post">



			<div id="respuesta3"></div>







				<div class="inputs5">



					<label for="correo">CORREO:</label><br>



					<input class="input inputrecoverr" type="email" id="correopass" name="correopass" placeholder="correo@email.com" required>







				</div>





						<div>







							<a id="btnrecover"  style="background:#ff1528;">RECUPERAR</a>



						</div>



					</form>





	  </div>



	<script>


		$(window).load(function() {

			 $(window).scrollTop(0);



		});



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

	<script>

		$("#switchap").click(function() {

			if($(this).is(":checked")) {

				$(".phidden").slideDown();

			}

			else {

				$(".phidden").slideUp();

			}

		});



	</script>


<script>




    $('#btnreg').click(function(event){



	  $("#respuesta").html("");
	  $("#respuesta").hide();
	    $("#respuesta").show();




		$('.inputregr').removeClass('errorinput');

		$(".bgswitch").removeClass("bgreds");

		var nombre= $("#nombre").val();

	    var apellido = $('#apellido').val();
		var nombrel = nombre.length;
		var apellidol = apellido.length;

		var emailvalr  = $("#correo").val();

			var tel1  = $("#tel1").val();

		var mailvalid = validateEmail(emailvalr);

	    var pass = $('#pass').val();



		var error = false;



		if (nombre == '' || apellido == '' || emailvalr == '')

		{

			$("html, body").animate({ scrollTop: $("#orfb").offset().top });

		$("#respuesta").append("<div class='errormsg'>Completa los campos</div>");

		$.each($('.inputregr'),function() {

		   if ($(this).val().length == 0) {

			$(this).addClass("errorinput");

		   }

		});

		error = true;



	}

		if (nombrel <3 || apellidol<3)

		{

			$("html, body").animate({ scrollTop: $("#orfb").offset().top });

		$("#respuesta").append("<div class='errormsg'>Verifica que el nombre y apellido contengan al menos 3 caracteres.</div>");


		error = true;



	}



	if (pass.length <6)

		{

		$("html, body").animate({ scrollTop: $("#orfb").offset().top });

		$("#respuesta").append("<div class='errormsg'>La contraseña debe contar con al menos 6 caracteres</div>");

		$("#pass").addClass("errorinput");

		error = true;



	}



	if ( mailvalid == false)

	{

		$("#respuesta").append("<div class='errormsg'>El correo no es válido</div>");

		 $("#correo").addClass("errorinput");

		 error = true;

	}



  var checkBox = document.getElementById("switchap");

    if (checkBox.checked == false){

$("#respuesta").append("<div class='errormsg'>Debes aceptar los términos y condiciones</div>");

$(".bgswitch").addClass("bgreds");

 error = true;

  }





	if (error == false){

        event.preventDefault();

		$("#respuesta").append("<div class='success' style='width: 100%; padding-right: 10%; background-image: url(img/loadreg.gif); background-size: 7.5%; background-repeat: no-repeat; background-position: 95% center;'>Estamos creando tu registro. Esto puede tomar un momento, así que no des clic nuevamente ni refresques la página...</div>");

		$("#btnreg").prop('disabled', true);

		$("#btnreg").addClass('nopointer');
		$("#btnreg").hide();



        $.ajax({

            url : "registron2019.php?page=<?php echo $page; ?>",

            type: "POST",

            data : new FormData($('#formreg')[0]),

            processData: false,

            contentType: false,

            success:function(data){



				$("html, body").animate({ scrollTop: $("#switch").offset().top });

				$('#respuesta').html(data);
				grecaptcha.reset();

				$("#btnreg").prop('disabled', false);

				$("#btnreg").removeClass('nopointer');
				$("#btnreg").show();



				 setTimeout(function() {

                $('.success').slideUp("slow");

				$('.errormsg').slideUp("slow");
				

            }, 15000);







            }

        });



		}



    });





    $('#btnlogin').click(function(event){

		$('.inputloginr').removeClass('errorinput');



		var emailval  = $("#correol").val();

		var mailvalid = validateEmail(emailval);

	    var passl = $('#passl').val();



		if (emailval == '' || passl =='')

	{

		$("#respuesta2").html("<div class='errormsg'>Completa los campos</div>");

		$.each($('.inputloginr'),function() {

		   if ($(this).val().length == 0) {

			$(this).addClass("errorinput");

		   }

		});



	}



	else if ( mailvalid == false)

	{

		$("#respuesta2").html("<div class='errormsg'>El correo no es válido</div>");

		 $("#correol").addClass("errorinput");

	}



	else{

        event.preventDefault();

        $.ajax({

            url : "login.php?page=<?php echo $page; ?>",

            type: "POST",

            data : new FormData($('#formlogin')[0]),

            processData: false,

            contentType: false,

            success:function(data){



				$('#respuesta2').html(data);



				 setTimeout(function() {

                $('.success').slideUp("slow");

				$('.errormsg').slideUp("slow");

            }, 10000);







            }

        });



		}

    });





    $('#btnrecover').click(function(event){

		$('.inputrecoverr').removeClass('errorinput');



		var emailvalp  = $("#correopass").val();

		var mailvalidp = validateEmail(emailvalp);





		if (emailvalp == '')

	{

		$("#respuesta3").html("<div class='errormsg'>Completa los campos</div>");

			$("#correopass").addClass("errorinput");



	}



	else if ( mailvalidp == false)

	{

		$("#respuesta3").html("<div class='errormsg'>El correo no es válido</div>");

		 $("#correopass").addClass("errorinput");

	}



	else{

        event.preventDefault();

        $.ajax({

            url : "recupera.php",

            type: "POST",

            data : new FormData($('#formrecover')[0]),

            processData: false,

            contentType: false,

            success:function(data){
				
				var urlactual = window.location;
				
				analytics.track("Password Requested", {
				  email: emailvalp,
				  page: urlactual
				});



				$('#respuesta3').html(data);



				 setTimeout(function() {

                $('.success').slideUp("slow");

				$('.errormsg').slideUp("slow");

            }, 10000);







            }

        });



		}

    });







function validateEmail(email22) {

		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		return reg.test(email22);

	}



      $(document).ready(function() {







        $('.modalpass').magnificPopup({

          type: 'inline',



          fixedContentPos: false,

          fixedBgPos: true,



          overflowY: 'auto',



          closeBtnInside: true,



          preloader: false,



          midClick: true,

          removalDelay: 300,

          mainClass: 'my-mfp-slide-bottom'

        });







      });




$(".inputloginr").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#btnlogin").click();
    }
});
</script>

    <script src="/js/parallaxTilt.min.js"></script>
    <script type="text/javascript">
        (function() {

//	default opts:
//	parallaxMultiple: 0.1,
//	tiltMultiple: 0.05,
//      duration: 500,
//      easing:'easeOutExpo'

            $('.tilter_image').parallaxTilt({
              parallaxMultiple: 0.1,
				tiltMultiple: 0.05,
				duration: 800,
				easing:'easeOutExpo'
            });
            $('.tilter_image2').parallaxTilt({
              parallaxMultiple: 0.2,
				tiltMultiple: 0.05,
				duration: 500,
				easing:'easeOutExpo'
            });
            $('.tilter_image3').parallaxTilt({
              parallaxMultiple: 0.5,
				tiltMultiple: 0.05,
				duration: 500,
				easing:'easeOutExpo'
            });
			$('.tilter_image4').parallaxTilt({
              parallaxMultiple: -(0.18),
				tiltMultiple: 0.15,
				duration: 500,
				easing:'easeOutExpo'
            });

        })();
		
		
		
		$(".linklogin").click(function(){
			var flag = 0;
			//$(".panelmain").addClass("animatebg");
			$("body").toggleClass("loginactive2");



			
		});

		
		$(".linklogin").click(function(){
			var flag = 0;

				if ($("body").hasClass("loginactive2")) {
					$("#regpanel").slideDown();
					$("#loginpanel").slideUp();
				
					$("html, body").animate({ scrollTop: 0 }, "slow");
					
								 setTimeout(function() {

              	$("#parallaxreg").fadeOut(100);
					$("#parallaxlogin").fadeIn(100);

            }, 500);


				}
				else{

					$("#regpanel").slideUp();
					$("#loginpanel").slideDown();
					$("html, body").animate({ scrollTop: 0 }, "slow");
					
					
					
				 setTimeout(function() {

              $("#parallaxlogin").fadeOut(100);
					$("#parallaxreg").fadeIn(100);

            }, 500);

				}


			
		});
    </script>
	

	 <link rel="stylesheet" href="/css/jquery.flipster.min.css">
    <script src="/js/jquery.flipster.min.js"></script>
<script>


$( document ).on( "ready" , function() {


$(".carousel").flipster({
    style: 'flat',
    spacing: -0.2,
    nav: false,
    buttons: false,
	start: 1,
	loop: 2,
	autoplay: 5000
});





});

</script>






	<!-- Footer =============================-->



	<?php include('footerm.php');?>
