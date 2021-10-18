<?php
		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);
?>
<style>

  .blanco{

    color: #ccc;

    transition: 0.3s ease all;

  }

  .rojo:hover{

    color: #ff0025;

    transition: 0.3s ease all;

  }

.swiper-button-prev {

	background-image: url(/img/svg/leftsw.svg);

}



 .swiper-button-next {

	background-image: url(/img/svg/rightsw.svg);

}



.swiper-wrapper{cursor:grab; padding:0 1.5em;}



.footer {

	padding: 30px 2.5%;



}

.menufooter ul li {

	width: 16.66%;

	float: inherit;

	text-align: center;

	display: inline-block;

	color: #ccc;

	padding: 1em .5em;

	text-transform: uppercase;

	font-weight: bold;

	font-size: .8em;

	margin: 0;

}


.menufooter ul li {
	width: 33%;
	float: inherit;
	text-align: left;
	display: inline-block;
	color: #ccc;
	padding: 1em 2.5%;
	text-transform: uppercase;
	font-weight: bold;
	font-size: .6em;
	margin: 0;
	vertical-align: middle;
	padding-bottom: 0;
}

.iconsfooter li {
	padding: 0% 5px !important;
	width: 30px !important;
	min-width: 25px;
	margin-left: 10px !important;
}

.opacity0{opacity:0;}



.chaticon2 {

	position: fixed;

	background-image: url(img/help.png);

	background-size: 100%;

	height: 213px;

	width: 50px;

	top: 35%;

	/* bottom: 0; */

	right: 0;

	z-index: 10;

	background-repeat: no-repeat;

}



.beneficiosprod h3 {

	min-height: 3em;
}

.teldomicilio {
	width: 100%;
	text-align: center;
	color: #fff;
	padding-bottom: 1em;
	border-left: 1px solid #777;
	padding-left: 2.5%;
}

#recoverpass {
	color: #f29100;
	font-size: .85em;
}

#btnreg {
	margin: 1em 22.5%;
}

.formulario {
	padding-bottom: 1em;
}

#fb {
	padding: 1em;
	text-align:center;


}

#formreg {
	padding-bottom: 1em;
}

.calorias {
	background-image: url(/img/cancelred.png);
	background-repeat: no-repeat;
	background-position: 80%;
	background-size: 5%;
	cursor: pointer;
}

.disclaimer {
	font-size: .7em;

}

.icondel {
	float: left;
	width: 30%;
}

.icondel img{
	width: 70%;
	opacity: .8;
	padding-top: 1em;
}

.textdel {
	float: left;
	width: 70%;
	text-align: left;

color: #fff;

font-size: .8em;
}

.icon-wa {
	display: none !important;
}
</style>

<div class="footer">




	<div class="menufooter" style="width: 45%; float: left; padding-left: 2.5%;">

		<ul>

			<li><a href="/somos-vips" class="rojo blanco quienesfooter" data-effect="mfp-zoom-out">Somos Vips</a></li>

			<li><a href="/terminos-y-condiciones" class="rojo blanco legalesfooter ">Términos y condiciones</a></li>

			<li><a href="/consumo-responsable" class="rojo blanco trabajafooter">Consumo responsable</a></li>

			<li><a href="/aviso-privacidad" class=" rojo blanco avisofooter" href="/aviso.php">Aviso de privacidad</a></li>

			<li><a href="https://www.alsea.net/haz-carrera-en-alsea" target="_blank" class="rojo blanco trabajafooter">Trabaja con Vips</a></li>

			

			<li><a href="/responsabilidad-social" class="rojo blanco responsabilidadfooter">Responsabilidad Social</a></li>



			<li><a href="https://www.alsea.net/franquicias/contacto" target="_blank" class="rojo blanco trabajafooter">Franquicias</a></li>






		</ul>

	</div>



		<div class="teldomicilio"  style="width: 25%; float: left;">

		<div class="icondel"><img src="/img/svg/homedomicilio.svg"></div>
		<div class="textdel"><p>Para ordenar, llama al <br>5900 8477 o al 01 800 900 8477<br> <span style="font-size: .7em;">Servicio de 8 a 22hrs.</span> </p></div>
		</div>

		<div class="menufooter"  style="width: 30%; float: left;">

		<ul>


			<li style="padding-top: 4em; text-align: right; width: 100%; padding-right: 5%;">

				<ul class="iconsfooter">

					<a href="https://www.instagram.com/vipsmx/" target="_blank"><li><img class="icon" src="/img/instagram.png"></li></a>

					<a href="https://twitter.com/VIPS_MX" target="_blank"><li><img class="icon" src="/img/twitter.png"></li></a>

					<a href="https://www.facebook.com/VIPSMX/" target="_blank"><li><img class="icon" src="/img/facebook.png"></li></a>

          <a href="/" target="_blank"><li style="width: 22% !important;"><img class="icon iconvipsfooter" src="/img/Logo_Vips.png"></li></a>



				</ul></li>

		</ul>

	</div>





</div>

<div class="disclaimer">

		<p>

			Vips no hace promociones con páginas de internet de terceros, por lo que no se hace responsable por el contenido promocional de dichas publicaciones.

		</p>

	</div>



	<a href="/atencion-invitado"  style="display:none" class="chaticon animate" title="Contáctanos" data-animation="grow"></a>



	<a href="/atencion-invitado" class="chaticon2" title="Contáctanos"></a>



	</div>





</div><!-- TERMINA MAIN =============================-->


<style>
#poplogin {
	width: 100%;
	height: 100vh;
	background-color: rgba(0,0,0,.75);
	position: fixed;
	z-index: 99;
	top: 0;
	overflow: auto;
	text-align:center;
}
.panelmain {
	background: #fff;
	width: 55%;
	margin: 0 auto;
	position: relative;
	top: 7.5vh;
	display: inline-block;
	margin-bottom: 0;
	min-width: 840px;
	background-image: url(/img/login/bgdots.png);
	background-size: 125%;

transition: .95s all ease;

background-repeat: no-repeat;

background-position: -60px top;
}

.closepop {
	width: 16px;
	height: 16px;
	position: absolute;
	background-image: url(/img/login/close.png);
	background-size: 100%; 
	right: 10px;
	z-index: 9;
	top: 10px;
	cursor:pointer;
}

@keyframes animatedBackground {
	0% { background-position: 0 0; }
	100% { background-position: -300px 0; }
}
@-moz-keyframes animatedBackground {
	0% { background-position: 0 0; }
	100% { background-position: -300px 0; }
}
@-webkit-keyframes animatedBackground {
	0% { background-position: 0 0; }
	100% { background-position: -300px 0; }
}
@-ms-keyframes animatedBackground {
	0% { background-position: 0 0; }
	100% { background-position: -300px 0; }
}
@-o-keyframes animatedBackground {
	0% { background-position: 0 0; }
	100% { background-position: -300px 0; }
}


.animatebg{
	animation: animatedBackground 10s linear infinite;
	-moz-animation: animatedBackground 10s linear infinite;
	-webkit-animation: animatedBackground 10s linear infinite;
	-ms-animation: animatedBackground 10s linear infinite;
	-o-animation: animatedBackground 10s linear infinite;
}

.panelimgl {
	width: 50%;
	background-repeat: no-repeat;
	background-size: contain;
	/* float: right; */
	background-position: right;
	margin-bottom: 0;
	transition: .95s all ease;
	position: absolute;
	display: inline-block;
	left: 50%;
	z-index: 3;
}

.panelimgl img{width:100%;}
.panelforml {
	width: 50%;
	/* float: left; */
	padding: 5% 0;
	overflow: auto;
	text-align: center;
	transition: .95s all ease;
	display: inline-block;
	position: absolute;
	left: 0;
}
.loginactive .panelforml {
	transition: .95s all ease;
	right: 0;
	position: absolute;
	left: 50%;
}

.loginactive .panelimgl {
	left: 0%;
	transition: .95s all ease;
	position: absolute;
}

#imglog{display:block;}
#imgreg{display:none;}
.loginactive #imglog{display:none;}
.loginactive #imgreg{display:block;}

#formregistro{opacity:1; z-index:1;}
#formlog{opacity:0; z-index:0;}
.loginactive #formregistro{opacity:0; z-index:0;}
.loginactive #formlog{opacity:1; z-index:1;}

.input {
	height: 45px;
	width: 100%;
	background: 0 0;
	border: none;
	border-style: solid;
	outline: none;
	border-color: #a9a6a1;
	border-top: none;
	border-left: none;
	border-right: none;
	padding: 10px 0;
	border-width: 1px;
}

.boton {
	border: none;
	padding: 15px 20px;
	outline: none;
	border-color: #a9a6a1;
	width: auto;
	font-size: 1em;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	font-family: "Museo 900",sans-serif;
	display: inline-block;
	min-width: 200px;
	/* margin: 20px auto !important; */
	text-align: center;
	margin-top: 20px;
}

#btnreg {
	margin: 20px auto;
	/* display: inline-block; */
}
input[type=checkbox] {
		height: 0;
		width: 0;
		visibility: hidden;

	}


	.labelcb {
	cursor: pointer;
	text-indent: -9999px;
	width: 30px;
	height: 12px;
	background: grey;
	display: block;
	border-radius: 100px;
	position: relative;
	top: -15px;
}

.labelcb::after {
	content: '';
	position: absolute;
	top: -.5px;
	left: 0;
	width: 13px;
	height: 13px;
	background: #fff;
	border-radius: 20px;
	transition: .3s;
	box-shadow: 1px 2px 5px #444;
}

	input:checked + .labelcb {
		background: #f29100;

	}

	input:checked + .labelcb:after {
		left: calc(100% - 0px);
		transform: translateX(-100%);
	}

	.labelcb:active:after {width: 20px;}
	
	.pformtoggle {
		color: #333;
		font-size: .8em;
		font-family: "AmsiProNarw", sans-serif;
		text-align: right;
	}

	.avisocard {
	color: #f29100;
	width: 100%;
	float: left;
	font-size: .85em;
	font-family: "AmsiProNarw",sans-serif;
	margin-left: 5%;
	}
	
	.phidden {
	width: 100%;
	font-weight: 400;
	font-family: "AmsiProNarw",sans-serif;
	font-size: .7em;
	color: #666;
	padding: 2.5%;
	float: left;
	display: none;
}
.pformtoggle {
	color: #333;
	font-size: 9px;
	font-family: "AmsiProNarw",sans-serif;
}
.requiredtext {
	float: left;
	width: 100%;
	margin: 0;
	color: #666;
	font-size: .8em;
}
#formreg {
	padding: 0 15%;
	padding-bottom: 0;
}


#fb {
	background-color: #3b5998;
	background-image: url(/img/login/fb.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: 5% center;
	/* width: 55%; */
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: auto;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	right: 0;
	left: 0;
	translate: 50% 50%;
	color: #fff;
	padding: 1em 5%;
	font-size: .8em;
	padding-right: 10%;
	display: inline-block;
	margin-bottom: 0;
	min-width: 200px;
	padding-left: 5% !important;
}
#fb:hover {
	background-color: #4562a0;
	transition: .3s ease all;
}
#fb {
	padding: .75em;
	text-align: center;
	margin: 0 auto;
	display: inline-block;
	text-align: center;
}

.loginactive 	#fb {
	background-position: 4.5% center;
}
.redreg {
	width: 100%;
	padding: 1em;
	text-align: center;
	color: #fff;
	background: #ea0029;
	float: left;
	margin-bottom: 10px;
	font-size: .8em;
}

#orfb {
	margin: 0;
	padding: 0;
	margin-top: 15px;
	font-family: sans-serif;
	font-weight: normal;
	color: #2d2d2d;
	font-size: .80em;
}
.loginlink a {
	color: #ea0029;
	cursor: pointer;
}

.loginlink p {
	margin:0;
	font-size: .85em;
	color: #5d5d5d;
}
.switchcont {
	width: 100%;
	display: inline-block;
	padding: .25em 0;
}
.inputs input {
	background-size: 8%;
	background-repeat: no-repeat !important;
	background-position: right center;
}

#nombre, #apellido {
	background-image: url(/img/login/user.svg);
	background-size: 6.5%;
}

.loginactive #formlogin {
	padding: 10% 15%;
	padding-bottom: 0;
}

.loginactive .redreg {
	margin-bottom: 10%;
}

.loginactive #recoverpass {
	color: #f29100;
	font-size: .85em;
	margin-top: 10%;
	display: inline-block;
}

.loginactive .boton {
	margin-top: 20px;
}

.loginactive .loginlink {
	margin-top: 10%;
}

.mfp-zoom-out.mfp-ready.mfp-bg {
	opacity: 0.8;
	z-index: 888;
}
#rc-imageselect {transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;}

@media screen and (max-height: 575px){
#rc-imageselect, .g-recaptcha {transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;}
}

</style>


<div id="poplogin" class="" style="display:none;">



<div class="panelmain">
<div class="closepop"></div>
	<div class="panellogin">
	
		<div class="panelforml" id="formregistro">
		
		<div class="redreg">Regístrate y empieza a acumular puntos Wow y a recibir un descuento en todas tus visitas a Vips</div>
		
		<a class="simple-ajax-popup mfp-with-anim  blanco btnfb1" href="/avisofb.php?page=<?php echo $page; ?>" data-effect="mfp-zoom-out" id="fb" >Regístrate con Facebook</a>
		
		<p id="orfb" class="orfb" >O</p>
		
		<div class="formulario form" id="topreg" ><form id="formreg" class="formreg" onsubmit="return false" enctype="multipart/form-data" method="post"><div class="inputs"> <input class="input inputregr" type="text" id="nombre" name="nombre" placeholder="Nombre" required=""> <i class=" icono">  </i></div><div class="inputs"> <input class="input inputregr" type="text" id="apellido" name="apellido" placeholder="Apellidos" required=""> <i class=" icono">  </i></div><div class="inputs"><input class="input inputregr" type="email" id="correo" name="correo" placeholder="Correo" required="" onkeyup="this.value = this.value.toLowerCase();"> <i class=" icono"> </i></div><div class="inputs"> <input class="input inputregr" type="password" id="pass" name="pass" placeholder="Conraseña" required=""> <i class=" icono">  </i></div><div class="switchcont" style="margin-top: 20px;"><div style="width:30px; float:left;"> <input type="checkbox" id="switch" name="switch" value="1" checked=""><label class="labelcb" for="switch" required="">Toggle</label></div><div style="width:80%; float:left;"><p class="pformtoggle">Quiero recibir promociones, descuentos especiales Vips y beneficios de mi Tarjeta de Lealtad.</p></div></div><div class="switchcont"><div style="width:30px; float:left;"> <input type="checkbox" id="switchap" name="switchap" value="1"><label class="labelcb bgswitch" for="switchap" required="">Toggle</label></div><div style="width:80%; float:left;"><p class="pformtoggle">Acepto <a href="/aviso-privacidad" target="_blank">términos y condiciones y aviso de privacidad.</a></p></div><p class="phidden" style="text-align: justify;">"Al registrarse acepta afiliarse al programa de recompensas "WOW Rewards" <a href="https://www.wowrewards.mx/home/condiciones" target="_blank" style="color: #f29100; text-decoration: underline;">Consulte términos y condiciones</a> y <a href="https://www.wowrewards.mx/home/privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de privacidad </a> del programa. Aviso de Privacidad Simplificado: El responsable de sus datos es Operadora Vips, S. de R.L. de C.V. (VIPS®) domicilio en <a href="https://www.google.com/maps/place/Piso+21,+Av.+Revoluci%C3%B3n+1267,+Guadalupe+Inn,+01049+Ciudad+de+M%C3%A9xico,+CDMX/@19.3609001,-99.1928004,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff8aa885c40d:0x5eb40e55a33938a0!8m2!3d19.3609001!4d-99.1906117" target="_blank" style="color:#539bbb; text-decoration:underline;"> Av. Revolución 1267, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, C.P. 01040, CDMX;</a> los datos que recabemos de usted, serán utilizados con la siguiente finalidad: Darle de Alta en nuestro programa multimarca; puede consultar el <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de Privacidad Integral</a> y procedimiento de atención de derechos ARCO."</p></div><div id="respuesta"></div><div><p class="requiredtext">* Campo requerido</p> 
		
				<div style="float: left;

width: 100%;

margin-top: 20px;

z-index: 1;

position: relative;

height: 80px;

overflow: hidden;

transform: scale(0.9);">
						<div class="g-recaptcha" data-theme="light" data-sitekey="6LdgS20UAAAAAOYAzOxw83A05x-fKz6OJS3Ojpch" style="transform:scale(0.94);-webkit-transform:scale(0.94);transform-origin:0 0;-webkit-transform-origin:0 0; z-index: 1;"></div>
						</div>
						
						
						
		
		
		<a class="boton top boton-registro" id="btnreg">REGÍSTRATE</a></div></form></div>
		

		<div class="loginlink"><p>¿Ya tienes tu cuenta? <a>Inicia sesión</a></p></div>
		</div>
		
		<div class="panelforml" id="formlog">
		
		<div class="redreg">¿Antojo?<br> Inicia sesión y disfruta el sabor de Vips</div>
		
		<a class=" blanco btnfb1" href="/fbconfig.php?page=<?php echo $page; ?>" data-effect="mfp-zoom-out" id="fb" >Iniciar sesión con Facebook</a>
		
		<p id="orfb" class="orfb" >O</p>
		
		<div class="formulario form" id="topreg" ><form id="formlogin" class="formlogin" onsubmit="return false" enctype="multipart/form-data" method="post">



					<div id="respuesta2"></div>











						<div class="inputs logininputs">
							<input class="input inputloginr" type="text" id="correol" name="correol" placeholder="Tu correo" required="" >
						</div>

						<div class="inputs logininputs">

							<input class="input inputloginr" type="password" id="passl" name="passl" placeholder="Tu contraseña" required="">


						</div>

							<a href="#small-dialogpass" class="modalpass" id="recoverpass">Olvidé mi contraseña</a>

						<br><br>



						<div>



							<a class="boton top" id="btnlogin">ENTRAR</a>



						</div>



					</form></div>
		
		<div class="loginlink"><p>¿Aún no tienes tu cuenta? <a>Regístrate</a></p></div>
		</div>
		
		<div class="panelimgl" id="panelimgl">
		<img id="imglog" src="/img/login/promo-wow2.png">
		<img id="imgreg" src="/img/login/promo-enchilas2.png">
		
		</div>
		
		
	
	</div>
	
	<div class="panelreg">
	
		<div class="panelregl">
		
		</div>
		
		<div class="panelformr">
		
		</div>
	
	</div>


</div>

</div>



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
	  
	  
	  <style>
	  

#small-dialogpass {

	background: white;

	padding: 5%;

	text-align: center;

	max-width: 500px;

	margin: 80px auto;

	position: relative;

	background-image: url(img/fondo.png);

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

	background-image: url(img/fondo.png);

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

	font-family: "Museo 900", sans-serif;

}



#small-dialogpass  .logininputs .input {

	width: 80%;

	float: none;

}
#respuesta3 .success, #respuesta3 .errormsg {

	width: 80%;

	margin: .5em auto auto;

}



#correofb {

	background-image: url(img/svg/correo.svg);

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

	font-family: "Museo 900", sans-serif;

	width: 50%;

	cursor:pointer;

}


.mfp-bg {
	z-index: 888;
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

	padding: 10px;

	color: #558B2F;
	margin: 10px 0;
	border-radius: 0px;
	font-size: .8em;

}



.errormsg {
	width: 100%;
	background: #ffcdd2;
	padding: 10px;
	color: #b71c1c;
	border-radius: 0px;
	margin: 10px 0;
	font-size: .8em;
}


.errorinput {

    border: 1px solid #c14549;

    background-image: url(img/error.png)!important;

    background-size: 7%!important;

    background-repeat: no-repeat;

    background-position: 97% center!important;

}






#respuesta .errormsg {
	width: 100%;
	margin-bottom: 0;
	margin-top: -5px;
	padding: .5em;
	font-size: .85em;
}

.bgreds{background:#c14549;}



.nopointer{pointer-events:none;}

.loginlink {
	float: left;
	width: 100%;
	padding-top: 5px;
}


	  </style>

<!-- JAVASCRIPT =============================-->

<script src="/js/vips.js"></script>

<script src="https://www.jqueryscript.net/demo/Responsive-Image-Carousel-jQuery-SimpleSlider/free-simple-slider.js"></script>

<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/12437/idangerous.swiper.min.js'></script>

<script src="/js/jquery.flip.js"></script>

<script type="text/javascript" src="/js/tooltipster.bundle.min.js"></script>





<!-- Magnific Popup core JS file -->

<script src="/js/jquery.magnific-popup.js"></script>





<script src="/js/jquery.toggle-checkbox.js"></script>

<script src="/js/jquery.waypoints.js"></script>

<script>
$(function(){

  console.log(window.location.pathname);
       $("a").each(function(){
               if ($(this).attr("href") == window.location.pathname){
                       $(this).attr("href", "#");
               }
       });
});


$('.roundcheck').toggleCheckbox([

    '<i class="fa fa-circle-o "></i>',

    '<i class="fa fa-check-circle-o"></i>'

]);



</script>



<script>

$(window).load(function() {

 $("#iconclose").trigger("click");

      $(".splash").fadeOut("slow");

	  $("body").fadeIn("fast");



});



$('.search').each(function(){

    var text_value=$(this).val();

    if(text_value!='')

      {

       console.log('Value exist');

       }



  });



	$(".vmenuitem").mouseover(function(){

    var img=$(this);

    $(".vmenuitem").removeClass("activemas");

    img.addClass("activemas");

  	});



	$(".vmenuitem").mouseout(function(){

    var img=$(this);

    $(".vmenuitem").removeClass("activemas");

    img.removeClass("activemas");

 	});





$(function(){

    $(".flip").flip({

        trigger: 'click'

    });

});



$(document).ready(function () {

setTimeout(function(){

	$(".chaticon").trigger("mouseenter");

}, 1000/*5000 ms=5 seconds*/);

setInterval(function(){

	$(".accountitem .iconmenu").toggleClass("animate");

}, 10000/*5000 ms=5 seconds*/);



setInterval(function(){

	$(".chaticon").toggleClass("animate");

}, 15000/*5000 ms=5 seconds*/);



$('.tooltip').tooltipster({

    theme: 'tooltipster-shadow',

	animation:"swing",

	timer: 9000

});

$('.tooltipl').tooltipster({

    theme: 'tooltipster-shadow',

	animation:"swing",

	timer: 9000,

	side: "left"

});

$('.tooltipimg').tooltipster({

    theme: 'tooltipster-shadow',

	animation:"grow",

	side: "bottom"

});

		// Inline popups

$(".simple-ajax-popup").magnificPopup({

	 type: 'ajax',

  callbacks: {

    beforeOpen: function() {

      this.st.mainClass = this.st.el.attr("data-effect");

    }

  },

  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.

});





});







$('.scrollto').click(function() {

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')

        || location.hostname == this.hostname) {



        var target = $(this.hash);

        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

           if (target.length) {

             $('html,body').animate({

                 scrollTop: target.offset().top-100

            }, 1000);

            return false;

        }

    }

});



  $('.btnmap').click(function(){

	  var q = $('#cp').val();

	var url = "/ubicaciones/?q="+q;

	window.open(url, '_self');





  });



$('.cleanfilters').click(function(){



$(".search2").val('');



 $(":checkbox:checked").each(function () {



 this.click();

});



	});


$(".itemfilter").click(function(){


if ($('input[type=checkbox]').is(":checked")) {
  $(".buscainput").prop('required', '');
}
else {
$(".buscainput").prop('required', 'required');
}


});


$('#formlogin input').bind("enterKey",function(e){
  $("#btnlogin").trigger("click");
});

	$('body').on("focus", "textarea, input", function() {

	   $('body').addClass("keyboard-on");

	}).on("blur", "textarea, input", function() {

	   $('body').removeClass("keyboard-on");

	});


$(".inputloginr").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#btnlogin").click();
    }
});


	var waypoint = new Waypoint({

  element: document.getElementById('domiciliohome'),

  handler: function(direction) {

	  $("*").removeClass("activemas");

   $('#linkdomicilio').addClass("activemas");

  }

})

	var waypoint2 = new Waypoint({

  element: document.getElementById('beneficioshome'),

  handler: function(direction) {

	  $("*").removeClass("activemas");

   $('#linkbeneficios').addClass("activemas");

   $("#videoDiv2").addClass("opacity0");

  }

})

	var waypoint3 = new Waypoint({

  element: document.getElementById('experienciashome'),

  handler: function(direction) {

	  $("*").removeClass("activemas");

   $('#linkexperiencias').addClass("activemas");

  }

})

	var waypoint3 = new Waypoint({

  element: document.getElementById('ubicacioneshome'),

  handler: function(direction) {

	  $("*").removeClass("activemas");

   $('#linkubicaciones').addClass("activemas");

   $("#videoDiv2").addClass("opacity0");

  },  offset: 50

})

	var waypoint4 = new Waypoint({

  element: document.getElementById('tdlhome'),

  handler: function(direction) {

	  $("*").removeClass("activemas");

	  $(".accountitem ").addClass("activemas");

	  $("#videoDiv2").removeClass("opacity0");

  }

})

	var waypoint5 = new Waypoint({

  element: document.getElementById('redbar'),

  handler: function(direction) {

	  $("*").removeClass("activemas");

  }

})

	var waypoint6 = new Waypoint({

  element: document.getElementById('tiendahome'),

  handler: function(direction) {

	  $("*").removeClass("activemas");



  }

})



	var waypoint6 = new Waypoint({

  element: document.getElementById('nuevovips'),

  handler: function(direction) {

	  $("*").removeClass("activemas");

	    $("#videoDiv2").removeClass("opacity0");



  }

})


$("#poplogin").click(function () {
	
   	$("#poplogin").fadeOut(500);
	$("body").css("overflow", "auto");
});
$(".panelforml").click(function (event) {
    event.stopPropagation();
});

$(".openpoplogin").click(function(){	
	setTimeout(function(){
		var h1 = $("#panelimgl").height();
		var w1 = $("#panelimgl").width();
		var w2 = w1 * 2;
		$(".panelmain").css("height", h1+"px");
		$(".panelforml").css("height", h1+"px");
		//$(".panelmain").css("width", w2+"px");
	//alert(h1);

}, 500/*5000 ms=5 seconds*/);
	$("body").css("overflow", "hidden");
	$("#poplogin").fadeIn(700);
});


$(".closepop").click(function(){
	$("body").css("overflow", "auto");
	$("#poplogin").fadeOut(500);
});


$(".loginlink").click(function(){
	var flag = 0;
	//$(".panelmain").addClass("animatebg");
	$(".panelmain").toggleClass("loginactive");
	$(".panelmain").css("background-position", "-300px 0");

		if ($(".panelmain").hasClass("loginactive")) {
			$(".panelmain").css("background-position", "350px top");
		}
		else{
			$(".panelmain").css("background-position", "-61px top");
		}


	
});



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
		
		
		
				
		$("body").on("click", ".acepto", function(){
		
		$(".acepto").css("pointer-events", "none");
		$(".acepto").append("<div class='success' style='width: 100%; padding-right: 10%; background-image: url(img/loadreg.gif); background-size: 7.5%; background-repeat: no-repeat; background-position: 95% center;'>Estamos creando tu registro. Esto puede tomar un momento, así que no des clic nuevamente ni refresques la página...</div>");
		
		
	});


    $('#btnreg').click(function(event){



	  $("#respuesta").html("");
	  $("#respuesta").hide();
	    $("#respuesta").show();




		$('.inputregr').removeClass('errorinput');

		$(".bgswitch").removeClass("bgreds");

		var nombre= $("#nombre").val();

	    var apellido = $('#apellido').val();

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

            url : "registron.php?page=<?php echo $page; ?>",

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



	if ( mailvalidp == true){

        event.preventDefault();

        $.ajax({

            url : "recupera.php",

            type: "POST",

            data : new FormData($('#formrecover')[0]),

            processData: false,

            contentType: false,

            success:function(data){



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











    </script>

</body>

</html>
