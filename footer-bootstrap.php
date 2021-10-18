  <div class="container-fluid footer">

	<div class="row">
		<div class="col-md-8">
		<div class="row">
			<div class="col-md-4">
				<ul>
					<li><a href="/somos-vips" class="rojo blanco quienesfooter" data-effect="mfp-zoom-out" onclick="clickLink('/somos-vips', 'Somos Vips');" googl="true">Somos Vips</a></li>
					<li><a href="https://www.alsea.net/franquicias/contacto" target="_blank" class="rojo blanco trabajafooter" onclick="clickLink('https://www.alsea.net/franquicias/contacto', 'Franquicias');">Franquicias</a></li>
					<li><a href="/responsabilidad-social" class="rojo blanco responsabilidadfooter">Responsabilidad Social</a></li>
				</ul>

			</div>
			<div class="col-md-4">
				<ul>
					<li googl="true"><a href="/terminos-y-condiciones" class="rojo blanco legalesfooter" onclick="clickLink('/terminosycondiciones', 'Términos y condiciones');" googl="true">Términos y condiciones</a></li>
					<li><a href="https://www.alsea.net/haz-carrera-en-alsea" target="_blank" class="rojo blanco trabajafooter" onclick="clickLink('https://www.alsea.net/haz-carrera-en-alsea', 'Trabaja con Vips');">Trabaja con Vips</a></li>
					<li><a href="/aviso-privacidad" class=" rojo blanco avisofooter" onclick="clickLink('/aviso-privacidad', 'Aviso de privacidad');">Aviso de privacidad</a></li>
				</ul>

			</div>
			<div class="col-md-4">

			<ul>
				<li><a href="/consumo-responsable" class="rojo blanco trabajafooter" onclick="clickLink('/consumo-responsable', 'Consumo responsable');" googl="true">Consumo responsable</a></li>

				<li class="redesicons">
					<ul class="iconsfooter">
						<a href="https://www.instagram.com/vipsmx/" target="_blank" onclick="clickLink('https://www.instagram.com/vipsmx/', 'Instagram Vips');"><li ><img class="iconsocial grow" src="/img/instagram.png"></li></a>
						<a href="https://twitter.com/VIPS_MX" target="_blank" onclick="clickLink('https://twitter.com/VIPS_MX', 'Twitter Vips');"><li><img class="iconsocial grow" src="/img/twitter.png"></li></a>
						<a href="https://www.facebook.com/VIPSMX/" target="_blank" onclick="clickLink('https://www.facebook.com/VIPSMX/', 'Facebook Vips');"><li><img class="iconsocial grow" src="/img/facebook.png"></li></a>
					</ul>
				</li>
			</ul>

			</div>
      <div class="col-md-12">
        <p class="disclaimerpromos">
        Vips no hace promociones con páginas de internet de terceros, por lo que no se hace responsable por el contenido promocional de dichas publicaciones.
      </p>
      </div>
		</div>

		</div>
		<div class="col-md-1">

		</div>
		<div class="col-md-3">
			<div class="footerlogo">
				<p googl="true">¡Buen provecho!</p>
				<a href="/" target="_blank"><img class="iconvipsfooter" src="/img/svg/LOGO_VIPS.svg" style="width: 42.5%; max-width:120px;"></a>

			</div>
		</div>
	</div>

</div>
<a href="/atencion-invitado" class="chaticon2" title="Contáctanos"></a>

<style>
#poplogin {
	width: 100%;
	height: 100vh;
	background-color: rgba(0,0,0,.75);
	position: fixed;
	z-index: 9999;
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
#poplogin .input {
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
#poplogin  .boton {
	border: none;
	padding: 15px 20px;
	outline: none;
	border-color: #a9a6a1;
	width: auto;
	font-size: 1em;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	font-family: "Program",sans-serif;
	display: inline-block;
	min-width: 200px;
	/* margin: 20px auto !important; */
	text-align: center;
	margin-top: 20px;
}
#poplogin  #btnreg {
	margin: 20px auto;
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
	font-family: "Program", sans-serif;
	text-align: left;
	padding-left: 10px;
	margin-top: 7.5px;
	margin-bottom: 0;
}
.avisocard {
	color: #f29100;
	width: 100%;
	float: left;
	font-size: .85em;
	font-family: "Program",sans-serif;
	margin-left: 5%;
}
.phidden {
	width: 100%;
	font-weight: 400;
	font-family: "Program",sans-serif;
	font-size: .7em;
	color: #666;
	padding: 2.5%;
	float: left;
	display: none;
}
.pformtoggle {
	color: #333;
	font-size: 10px;
	font-family: "Program",sans-serif;
}
.requiredtext {
	float: left;
	width: 100%;
	margin: 0;
	color: #666;
	font-size: 11px;
	padding: 0 10px;
	padding-bottom: 0;
}
#formreg {
	padding: 0 15%;
	padding-bottom: 0;
}
.agregador {
	font-size: 15px;
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
.loginactive #fb {
	background-position: 3.5% center;
	padding: .75em 15px;
	padding-left: 30px !important;
}
.redreg {
	width: 100%;
	padding: 1em;
	text-align: center;
	color: #fff;
	background: #ea0029;
	float: left;
	margin-bottom: 10px;
	font-size: .9em;
	font-weight: 500;
	line-height: 1.1;
}
#orfb {
	margin: 0;
	padding: 0;
	margin-top: 15px;
	font-weight: normal;
	color: #2d2d2d;
	font-size: .80em;
}
.loginlink a {
	color: #ea0029;
	cursor: pointer;
	font-weight: 500;
	margin-left: 5px;
}

.loginlink p {
	margin:0;
	font-size: .85em;
	color: #5d5d5d;
}
.switchcont {
	width: 100%;
	display: inline-block;
	padding:  0;
	padding-bottom:0;
}
.inputs input {
	background-size: 8%;
	background-repeat: no-repeat !important;
	background-position: right 88%;
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
	margin-bottom: 5%;
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
	margin-top: 0;
	padding-top: 0;
}
.mfp-zoom-out.mfp-ready.mfp-bg {
	opacity: 0.8;
	z-index: 888;
}
#rc-imageselect {transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;}

@media screen and (max-height: 575px){
#rc-imageselect, .g-recaptcha {transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;}
}
body{overflow-x:hidden;}
#correopass {
	width: 100%;
	height: 40px;
	border: none;
	border-bottom: 1.5px solid #a9a6a1;
}
#poplogin .boton {
	width: 100%;
}
#fb {
	background-color: #3b5998;
	background-image: url(/img/login/fb.png);
	background-size: 1.5em;
	background-repeat: no-repeat;
	background-position: center!important;
	margin: 0 auto;
	transition: .3s cubic-bezier(.25,.1,.72,1.72) all;
	height: 50px!important;
	border-radius: 0;
	text-align: right;
	margin-top: 0;
	position: relative;
	right: 0;
	left: 0;
	translate: 50% 50%;
	color: transparent;
	padding: 1em 5%;
	font-size: .8em;
	padding-right: 10%;
	display: inline-block;
	margin-bottom: 0;
	min-width: 50px!important;
	padding-left: 5% !important;
	width: 50px!important;
	text-align: center!important;
	border-radius: 50%!important;
	margin-top: 1em !important;
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
	padding:0!important;
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
.orfbd {
	margin-top: 0;
	margin-bottom: 0;
}
#poplogin .boton {
	width: 100%;
	border-radius: 30px;
	font-weight: 500;
}
.boton{
	border-radius: 30px;
	font-weight: 500;
}
#respuesta {
	margin-top: -10px;
}
</style>
<div id="poplogin" class="" style="display:none;">
<div class="panelmain">
<div class="closepop"></div>
	<div class="panellogin">
		<div class="panelforml" id="formregistro">
		<div class="redreg">Obtén descuentos en todas tus visitas,<br> acumula puntos Wow y olvídate de cargar tarjetas. <br>¡Regístrate ahora!</div>
		<div class="loginlink"><p>¿Ya tienes tu cuenta? <a>Inicia sesión</a></p></div>
		<p id="orfb" class="orfb" ></p>
		<div class="formulario form" id="topreg" ><form id="formreg" class="formreg" onsubmit="return false" enctype="multipart/form-data" method="post"><div class="inputs"> <input class="input inputregr" type="text" id="nombre" name="nombre" placeholder="Nombre" required=""> <i class=" icono">  </i></div><div class="inputs"> <input class="input inputregr" type="text" id="apellido" name="apellido" placeholder="Apellidos" required=""> <i class=" icono">  </i></div><div class="inputs"><input class="input inputregr" type="email" id="correo" name="correo" placeholder="Correo" required="" onkeyup="this.value = this.value.toLowerCase();"> <i class=" icono"> </i></div><div class="inputs"> <input class="input inputregr" type="password" id="pass" name="pass" placeholder="Contraseña" required=""> <i class=" icono">  </i></div><div class="switchcont" style="margin-top: 20px;"><div style="width:30px; float:left;"> <input type="checkbox" id="switch" name="switch" value="1" checked=""><label class="labelcb" for="switch" required="">Toggle</label></div><div style="width:80%; float:left;"><p class="pformtoggle">Quiero recibir promociones, descuentos especiales Vips y beneficios de mi Tarjeta de Lealtad.</p></div></div><div class="switchcont"><div style="width:30px; float:left;"> <input type="checkbox" id="switchap" name="switchap" value="1"><label class="labelcb bgswitch" for="switchap" required="">Toggle</label></div><div style="width:80%; float:left;"><p class="pformtoggle">Acepto <a href="/aviso-privacidad" target="_blank">términos y condiciones y aviso de privacidad.</a></p></div><p class="phidden" style="text-align: justify;">"Al registrarse acepta afiliarse al programa de recompensas "WOW Rewards" <a href="https://www.wowrewards.mx/home/condiciones" target="_blank" style="color: #f29100; text-decoration: underline;">Consulte términos y condiciones</a> y <a href="https://www.wowrewards.mx/home/privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de privacidad </a> del programa. Aviso de Privacidad Simplificado: El responsable de sus datos es Operadora Vips, S. de R.L. de C.V. (VIPS®) domicilio en <a href="https://www.google.com/maps/place/Piso+21,+Av.+Revoluci%C3%B3n+1267,+Guadalupe+Inn,+01049+Ciudad+de+M%C3%A9xico,+CDMX/@19.3609001,-99.1928004,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff8aa885c40d:0x5eb40e55a33938a0!8m2!3d19.3609001!4d-99.1906117" target="_blank" style="color:#539bbb; text-decoration:underline;"> Av. Revolución 1267, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, C.P. 01040, CDMX;</a> los datos que recabemos de usted, serán utilizados con la siguiente finalidad: Darle de Alta en nuestro programa multimarca; puede consultar el <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de Privacidad Integral</a> y procedimiento de atención de derechos ARCO."</p></div><div id="respuesta"></div><div><p class="requiredtext">* Campo requerido</p>

				<div style="float: left; width: 100%; margin-top: 20px; z-index: 1; position: relative; height: 80px; overflow: hidden; transform: scale(0.9);">
						<div class="g-recaptcha" data-theme="light" data-sitekey="6LdgS20UAAAAAOYAzOxw83A05x-fKz6OJS3Ojpch" style="transform:scale(0.94);-webkit-transform:scale(0.94);transform-origin:0 0;-webkit-transform-origin:0 0; z-index: 1;"></div>
						</div>
		<a class="boton top boton-registro" id="btnreg">REGÍSTRATE</a></div></form>

		<div class="aligncenter" style="float: left; width: 100%;">
			<p class="orfbd">O regístrate con<br></p>
			<a class="simple-ajax-popup mfp-with-anim  blanco btnfb1" href="/avisofb.php?page=<?php echo $page; ?>" data-effect="mfp-zoom-out" id="fb" onclcik="signUpFacebook();"></a>
			<a class="simple-ajax-popup mfp-with-anim  blanco btnfb1" href="/avisogoogle.php?page=<?php echo $page; ?>" data-effect="mfp-zoom-out" id="google" onclcik="signUpGoogle();"></a>
		</div>
		</div>

		</div>

		<div class="panelforml" id="formlog">

		<div class="redreg">Inicia sesión y disfruta el sabor de Vips</div>

		<div class="loginlink"><p>¿Aún no tienes tu cuenta? <a>Regístrate</a></p></div>
		<p id="orfb" class="orfb" ></p>

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
					</form>

					<div class="aligncenter">
						<br>
						<p class="orfbd">O Inicia sesión con<br></p>
						<a  href="/fbconfig.php?page=<?php echo $page; ?>" id="fb" onclcik="loginFacebook();" ></a>
						<a  href="/logingoogle.php?page=<?php echo $page; ?>" id="google" onclcik="loginGoogle();"></a>
					</div>
					</div>
		</div>
		<div class="panelimgl" id="panelimgl">
		<img id="imglog" src="/img/login/popuo.png">
		<a href="/clasicos"><img id="imgreg" src="/img/2019/bannerhome.png"></a>
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
		border-bottom: 2px solid #fff;
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
		font-family: "Program",sans-serif;
		width: 50%;
		cursor: pointer;
		border-radius: 30px;
		font-weight: 500;
	}
	.linklogin a {
		color: #ea0029;
		cursor: pointer;
		font-weight: 500;
		margin-left: 5px;
	}
	.redtit {
		font-family: "Program",sans-serif;
		font-weight: 500;
	}
	.mfp-bg {
		z-index: 888;
	}

	#respuesta, #respuesta2, #respuesta {
		width: 100%;
		float: left;
		padding-top: 0;
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
		padding: 2.5% 5% 1% 5%;
		text-align:center;
	}
	.loginlink a {
		color: #ea0029!important;
		cursor: pointer;
		font-weight: 500;
		margin-left: 5px;
	}

	#poplogin #btnreg {
		margin: 0px auto 5px;
	}
	a {
		color: inherit;
	}
	a:hover {
		color: none;
		text-decoration: none;
	}
	.acepto:hover{
		color:#fff;
	}
	#custom-content {
		padding: 2.5%;

	}
	#custom-content h2{
		color: #fbb03b;
		font-size: 25px;
		font-weight: bold;
	}
	#custom-content p {
		font-family: "Program",sans-serif;
		line-height: 1.3;
		font-size: 15px;
	}
	.scrollable {
		height: auto;
		min-height: 250px;
	}
</style>

    <!-- Optional JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<script>
	setTimeout(function(){
		 $(".splash").fadeOut("slow");
		$("body").fadeIn("fast");
	},1000);
	// Scroll Header
	$(window).scroll(function() {
		var value = $(this).scrollTop();
		if (value > 80){
			$("body").addClass("scrolled");
		}
		else{
			$("body").removeClass("scrolled");
			checkHeight();
		}
	});
	$(window).on("resize", function(){
		checkHeight();
	})
	function checkHeight(){
		setTimeout(function(){
			var wh 		= $(window).height();
			var hfh 	= $(".navbar").height() + $(".footer").height();
			var conth 	= wh - hfh;
			$("main").css("min-height", conth + "px");
			$("main").css("margin-top", $(".navbar").height() + "px");
		},500);
	}

   $(document).ready(function(e) {
	   checkHeight();
	   setInterval(function(){
			$(".accountitem .iconmenu").toggleClass("animate");
		}, 10000/*5000 ms=5 seconds*/);

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

		$(".searchexpand").mouseenter(function(){
			setTimeout(function(){
				$(".searchexpand span").fadeIn();
			},300);
		});
		$(".searchexpand").mouseleave(function(){
				$(".searchexpand span").hide();
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
		$('#iconclose').click(function() {
			$('.buscadormenu').addClass('closed');
			$(".searchcontainer .search").attr("placeholder", "¿SE TE ANTOJA ALGO?");

		});
		$('.togglefilter').click(function() {
			$('.buscadormenu').toggleClass('closed');
			$(".search2").focus();

		});
		$('.searchcontainer').click(function() {
			$('.buscadormenu').removeClass('closed');
			$(".search2").focus();
			$(".searchcontainer .search").attr("placeholder", "");

		});
		$('.searchexpand').click(function() {
			$('.buscadormenu').removeClass('closed');
			$(".search2").focus();
			$(".searchcontainer .search").attr("placeholder", "");
		});

		$('.nav-toggle').click(function() {
			$('.lateralm').toggleClass('openlateral');
		});


    });
			;(function($) {

    $.fn.toggleCheckbox = function(toggleContents, callback) {

        var TC = {

            isChecked: function(element){

                return $(element).is(':checked');

            },
            getContentIndex: function(element){

                return (TC.isChecked(element)) ? 1 : 0;

            },
            getContent: function(index){

                var container = $('<span class="toggle-checkbox-container"></span>');

                return container.on('click', function(e){

                    var checkbox = $(this).prev();
                    var nextChecked = !TC.getContentIndex(checkbox);
                    var contentIndex = (nextChecked) ? 1 : 0;
                    var toggleContent = TC.getContent(contentIndex);

                    checkbox.after(toggleContent).prop('checked', nextChecked);
                    $(this).remove();
                    TC.fireCallback(e, checkbox);

                })
                .css('cursor', 'pointer')
                .html(toggleContents[index]);

            },
            fireCallback: function(e, checkbox){

                if(typeof(callback) == 'function') {

                    callback(e, checkbox);

                }

            }

        };

        $.each(this, function(key, element){

            var contentIndex = TC.getContentIndex(element);
            var toggleContent = TC.getContent(contentIndex);
            $(element).after(toggleContent)
                .css('display', 'none')
                .on('change', function(e){

                    var className = $(this).next().attr('class');

                    if(className == 'toggle-checkbox-container') {

                        $(this).next().remove();
                        var contentIndex = TC.getContentIndex(this);
                        var toggleContent = TC.getContent(contentIndex);
                        $(this).after(toggleContent);
                        TC.fireCallback(e, $(this));

                    }

            });

        });

    }

	})(jQuery);
	$('.roundcheck').toggleCheckbox([
		'<i class="far fa-circle"></i>',
		'<i class="far fa-check-circle"></i>'
	]);
	</script>
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

	$('.timeuser').text(greet);

		$(".inputloginr").keyup(function(event) {
			if (event.keyCode === 13) {
				$("#btnlogin").click();
			}
		});
		$("#poplogin").click(function () {

			$("#poplogin").fadeOut(500);
			$("body").css("overflow-y", "auto");
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
			$("body").css("overflow-y", "hidden");
			$("#poplogin").fadeIn(700);
		});
		$(".closepop").click(function(){
			$("body").css("overflow-y", "auto");
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
		$("#switchap").click(function(){
			if($(this).is(":checked")){
				$(".phidden").slideDown();
				}
			else{
				$(".phidden").slideUp();
				}
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
            url : "https://vips.com.mx/registron.php?page=<?php echo $page; ?>",
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
				url : "https://vips.com.mx/login.php?page=<?php echo $page; ?>",
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
		$(this).css("pointer-events", "none");
		$(this).css("opacity", ".5");
		$('.inputrecoverr').removeClass('errorinput');
		var emailvalp  = $("#correopass").val();
		var mailvalidp = validateEmail(emailvalp);
		if (emailvalp == '')
		{
			$("#respuesta3").html("<div class='errormsg'>Completa los campos</div>");
			$("#correopass").addClass("errorinput");
			setTimeout(function() {
				$("#btnrecover").css("pointer-events", "inherit");
				$("#btnrecover").css("opacity", "1");
			}, 1000);
		}
		else if ( mailvalidp == false)
		{
			$("#respuesta3").html("<div class='errormsg'>El correo no es válido</div>");
			 $("#correopass").addClass("errorinput");
				setTimeout(function() {
					$("#btnrecover").css("pointer-events", "inherit");
					$("#btnrecover").css("opacity", "1");
				}, 1000);
		}
		if ( mailvalidp == true){
			event.preventDefault();
			$.ajax({
				url : "https://vips.com.mx/recupera.php",
				type: "POST",
				data : new FormData($('#formrecover')[0]),
				processData: false,
				contentType: false,
				success:function(data){
					analytics.track("Password Requested", {
						  email: emailvalp,
						  page: urlactual
					});
					$('#respuesta3').html(data);
					setTimeout(function() {
						$('.success').slideUp("slow");
						$('.errormsg').slideUp("slow");
					}, 10000);
					setTimeout(function() {
						$("#btnrecover").css("pointer-events", "inherit");
						$("#btnrecover").css("opacity", "1");

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
