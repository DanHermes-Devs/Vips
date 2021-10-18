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





require_once 'dbconnect.php';

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

	header("Location: /resetPassword-m?fp_code=".$_GET['fp_code']);

	exit(0);

}


if(strlen($_GET['fp_code']) < 15){header("Location: index.php");}
	
	$hideform= "";
		// verificar codigo valido
		
			$query = "SELECT * FROM registros WHERE pass_code='".$_GET['fp_code']."'";
			$result = $mysqli->query($query);
			$count =$result->num_rows;
			$row=mysqli_fetch_array($result);
			
			$cur_time = time(); //fetching current time to check with variable's time
			
			if($cur_time - $row['code_expires'] > 5400){
				
				$codeError = "Este enlace para recuperar tu contraseña ha expirado, por favor solicita otro dando click en el siguiente botón.
				";
			    $hideform= "style= 'display:none;'";
				
				
			}
			
			if($count==0){
				$codeError = "Este enlace para recuperar tu contraseña no es válido o ya fue usado anteriormente, por favor solicita otro dando click en el siguiente botón: <br><a class='boton' href='/cuenta'>RECUPERAR CONTRASEÑA</a>
				";
			    $hideform= "style= 'display:none;'";
			}


?>



<div class="main">



	<style>



	[data-div="#cuentahome"]*{  fill: #ff0025!important; transition: all .4s ease;}

	[data-div="#cuentahome"] path{  fill: #ff0025!important; transition: all .4s ease;}

	[data-div="#cuentahome"] *{color: #ff0025!important;}







	@media screen and (max-width: 400px) {



		.tab_div {



			display: none;



		}



	}



	.tab_div {



		width: 100%;



		transform: translateZ(0);



	}



	.tabs_menu {



		padding-top: 1%;



		width: 20%;



		float: left;



	}







	ul.tabs {



		padding: 0;



	}







	#tab1,



	#tab2,



	#tab3,



	#tab4 {



		width: 90%;



	}







	ul.tabs li {



		margin-left: 25%;



		list-style-type: none;



		border-left: 4px solid #ea0029;



		font-size: 18px;



		color: black;



	}







	#tab1_content,



	#tab2_content,



	#tab3_content,



	#tab4_content {



		/*   background-color:red; */



		float: left;



		width: 100%;



		height: auto;



		padding: 5%;



		display: block !important;



	}







	.p{



		font-size: 16px;



	}











	/* hover effect */







	ul.tabs li {



		display: inline-block;



		position: relative;



		padding: 1em;



		cursor: pointer;



		color: black;



		z-index: 0;



		transition: all .35s ease;



	}







	ul.tabs li:before {



		content: "";



		position: absolute;



		z-index: -1;



		top: 0;



		left: 0;



		right: 0;



		bottom: 0;



		background: #ff0025;



		transform: scaleX(0);



		transform-origin: 0 50%;



		transition: transform .5s ease-out;



	}







	ul.tabs li:hover:before {



		transform: scaleX(1);



	}







	ul.tabs li:hover {



		color:#fff!important;



		transition: all .35s ease;



	}



	.imagen{



		width: 9%;



		margin: 0;



		padding: 0;



		float: left;



		vertical-align: middle;



	}



	.texto{



		width: 90%;



		padding: 0 1em;



		float: left;



	}



	.clase{



		position: relative;



		width: 50%;



		float: left;



		margin-bottom: 5%;



	}



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
	border-width: 1px!important;
}


	input[type="submit"]{

		border: none;

		padding: 20px;

		outline: none;

		border-color: #a9a6a1;

		width: 55%;

		font-size: 1em;

		background: #f29100;

		color: white;

		cursor: pointer;

		transition: 0.3s ease all;

		text-transform:uppercase;

		font-weight:bold;

	font-family: "Museo 900", sans-serif;

	}



	input[type="submit"]:hover{

		border: none;

		padding: 20px;

		outline: none;

		border-color: #a9a6a1;

		width: 55%;

		font-size: 1em;

		background: #ffac30;

		color: white;

		cursor: pointer;

		transition: 0.3s ease all;

	}



	.formulario {



		padding: 5%;



		background: #fff;



		margin-right: 0;



		float: left;



		

		padding-bottom: 8em;



	}



	.input::placeholder {



		color: #a9a6a1;



	}



	input[type="checkbox"] {



		width: 25px;



		height: 25px;



		margin-left: 10px;



		position: relative;



		border: 50px;



	}



	.margen{



		margin-right: 2%;



	}



	.fotos{



		max-width: 100%;



		float: left;



		margin-bottom: 5%;



		margin-left: 3%;



	}



	.form{



		max-width: 100%;



	}



	.boton{



		border: none;



		padding: 20px;



		outline: none;



		border-color: #a9a6a1;



		width: 40%;



		font-size: 1em;



		background: #f29100;



		color: white;



		cursor: pointer;

		font-family: "Museo 900", sans-serif;



	}



.icono {

	width: 10%;

	margin: 0;

	padding: 0;

	float: right;

	position: absolute;

	margin-left: -5%;

	margin-top: 1.50%;

	opacity: .5;

	display:none;

}
.inputs {
	float: left;
	width: 100%;
	margin-bottom: 5%;
	padding: 0 7.5%;
}

.switchcont{
	width: 100%;
	float: left;
	padding: 0 5% 0 0% !important;
}


	.caja{margin-left: 5%;}



	.top{



		margin-top: 2%;



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
	top: -9px!important;
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




	.labelcb:active:after {
		width: 20px;
	}






.pformtoggle {
	color: #333;
	font-size: 9px;
	font-family: "AmsiProNarw",sans-serif;
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







	.maintitle{



		font-size: 2em; color: #fbb03b; font-weight: bold; margin-top: -2%; border-bottom: 1px solid #dcdcdc; font-family: "Museo 900", sans-serif;



	}





.loginpanel {
	position: relative;
	float: left;
	width: 40%;
	border-top: 0;
	margin-bottom: 10%;
	padding: 0 2.5%;
	text-align: center;
}







	.logininputs{width:100%;}



	.logininputs .input{width: 65%;float:none;}







	.logininputs .icono {



		width: 10%;



		margin: 0;



		padding: 0;



		float: right;



		position: absolute;



		margin-left: -30px;



		margin-top: 10px;



		opacity: .5;

		display:none;

	}



	label {



		font-family: "AmsiProNarw", sans-serif;



		font-size: .9em;



		text-align: left;



	}





.loginpanel form {

	width: 100%;

	text-align: center;

	padding-left: 0;

}







	.loginpanel  .p {



		text-align: center;



		font-weight: normal;



		font-family: "AmsiProNarw", sans-serif;



	}







.linkpassword {

    color: #fbb03b;

    font-size: .9em;

    padding-left: 0;

    font-family: "AmsiProNarw", sans;

    width: 100%;

    float: left;

}







#fb {

	background-color: #3b5998;

	background-image: url(img/fb.png);

	background-size: 1.5em;

	background-repeat: no-repeat;

	background-position: 7.5% center;

	width: 50%;

	/* padding: 0; */

	margin: 0 auto;

	transition: 0.3s cubic-bezier(.25,.1,.72,1.72) all;

	height: auto;

	border-radius: 0;

	text-align: right;

	margin-top: 0;

	position: relative;

	/* float: left; */

	right: 0;

	left: 0;

	translate: 50% 50%;

	color: #fff;

	padding: 1em 5%;

	font-size: .9em;

	padding-right: 10%;

	display: inline-block;

	margin-bottom: 0;

	min-width: 270px;

}

		#fb:hover {



		background-color: #4562a0;



		transition: 0.3s ease all;



	}









	#tw {

		display: none;



		background-color:#03abee;



		background-image: url(img/tw.png);



		background-size: 1.5em;



		background-repeat: no-repeat;



		background-position: 1em center;



		width: 50%;



		padding: 1em 1.5em 1em 3em;



		margin: 1em auto 0 auto;



		float: left;



		margin-left: 20%;

		transition: 0.3s ease all;



	}



		#tw:hover {



		background-color:#20bcfa;



		background-image: url(img/tw.png);



		background-size: 1.5em;



		background-repeat: no-repeat;



		background-position: 1em center;



		width: 50%;



		padding: 1em 1.5em 1em 3em;



		margin: 1em auto 0 auto;



		float: left;



		margin-left: 20%;

		transition: 0.3s ease all;



	}







.or {

	text-align: center;

	width: 100%;

	margin-bottom: 0;

	font-size: 1em;

	font-family: "AmsiProNarw", sans-serif;

}



#tab2_content {

	/* background-color: red; */

	float: left;

	width: 100%;

	height: auto;

	padding: 0 2.5%;

	display: block !important;

	/* background-size: 100%; */

	background-repeat: no-repeat;

	background-size: cover;

	background-position: 70% 10%;

}



.phidden {

	width: 100%;

	/* height: 0; */

	font-weight: normal;

	font-family: "AmsiProNarw", sans-serif;

	font-size: .7em;

	color: #666;

	padding: 2.5%;

	float: left;

	display:none;

}







#nombred, #apellidod {

	background-image: url(img/svg/perfilusuario.svg);

	background-size: 10%;

}

#tdl{background-image: url(img/svg/cardf.svg); background-size: 10%}



.imgbg1 {

	background-image: url(img/PattersRegistro.svg);

	background-repeat: no-repeat;

	background-size: 25%;

	position: fixed;

	background-position: top left;

	width: 100%;

	height: 100vh;

	top: 35%;

}

.imgbg2 {

	background-image: url(img/PattersRegistro.svg);

	background-repeat: no-repeat;

	background-size: 25%;

	position: absolute;

	background-position: bottom right;

	width: 100%;

	height: 100%;

	top: 0%;

}



.aligncenter{text-align: center;}



.loginpanel .p {

	margin-top: 0;

}



.orfbd {
	margin: 0;
	padding: 0;
	margin-top: 20px;
	font-family: sans-serif;
	font-weight: 100;
	color: #2d2d2d;
	font-size: .80em;
}





.inputmail {

	background-image: url(img/svg/correo.svg);

	background-repeat: no-repeat;

	background-position: right;

	background-size: 10%;

}



.requiredtext {

	float: left;

	width: 100%;

	margin: 0;

	margin-top: 10px;

	color: #666;

	font-size: .8em;

}



#respuestad, #respuesta2d{
	width: 60%!important;
	float: left;
	padding-top: .5em;
	text-align: center;
	margin: 0 20%;
}
.success {

	width: 50%;

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



#btnlogind{display: inline-block;}



.errorinput {

    border: 1px solid #c14549;

    background-image: url(img/error.png)!important;

    background-size: 7%!important;

    background-repeat: no-repeat;

    background-position: 97% center!important;

}



#btnregd {
	display: inline-block;
	width: 55%;
	text-transform: uppercase;
	text-align: center;
	float: none;
	font-family: "Museo 900";
	display: inline-block;
	cursor:pointer;
}



#respuestad .errormsg {
	width: 100%;
	margin-bottom: 0;
	margin-top: -5px;
	padding: .5em;
	font-size: .85em;
}

.bgreds{background:#c14549;}



.nopointer{pointer-events:none;}



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



#small-dialogpass  #formlogind {

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



.mfp-wrap {



	z-index: 9999;

}



#respuesta3 .success, #respuesta3 .errormsg {

	width: 80%;

	margin: .5em auto auto;

}



#correodfb {

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
#formlogind label {
	width: 50%;
	float: left;
	margin-left: 25%;
}
#tel1d {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%!important;
}


.redtit{font-family:"Museo 900", sans-serif; color:#ea0029;}

.linklogin {
	width: 100%;
	float: left;
	font-size: .85em;
	color: #5d5d5d;
	margin-top: .5em;
	margin-bottom: 2em;
}
.linklogin a {
    color: #ea0029;
    cursor: pointer;


}

.titpr {
	margin-top: 0;
	color: #534747;
	text-align: center;
	font-size: 1.5em;
	font-family: "Museo 900";
	padding: 2.5% 20%;
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
	background-size: 12% !important;
	background-repeat: no-repeat !important;
	background-position: right center;
}

#tab2_content .errorinput{background-size: 6% !important;}

.loginpanel{background-image:url(/img/login/pattern5.png);
background-size: 20%;
background-repeat: no-repeat;
background-position: 95% 120px;
}

#formregd{text-align:center;}

#nombred, #apellidod {
background-size: 8.5% !important;
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

.dots-form li {
	width: .7em;
	height: .7em;
	border-radius: 50%;
	background: #ccc;
	display: inline-block;
	margin: 0 .5em;
}

.dots-form .active {
	background: #f29100;
}

.dots-form {
	display: inline-block;
	padding: 1.5em;
}


#nombred, #apellidod {
	background-image: url(/img/login/user.svg);
	background-size: 6.5%;
}
#correod, #correold, #correopass {
	background-image: url(img/svg/correo.svg);
}
#correopass {
	background-repeat: no-repeat;
	background-position: 99%;
	background-size: 12%;
}
#passd, #passld {
	background-image: url(img/svg/password.svg);
}

#formregd  .input {
	width: 65%;
	float: none;
}


#formregd .switchcont {
	width: 70%;
	display: inline-block;
	padding: .25em 0;
	float: none;
}
</style>
<?php
date_default_timezone_set("America/Mexico_City");
$h = date('G'); //set variable $h to the hour of the day
//G is the date key for hours in 24 format (not 12), with no leading 0s, like 02.

if ($h < 13){  $imgcircle = '/img/login/pattern6.png';}
else if ($h > 13) {$imgcircle = '/img/login/pattern4.png';}

//if it's before 7am, use fish image
//if not and it's before 8pm, use frogs
//otherwise, potatoes
?>

<div id="tab2_content" id="panellogin" data-hour = "<?php echo  $h;?>">

	<div style=" position: relative; float: left;width: 60%;" class=" wow fadeInLeft">
	<p class="titpr">¡Con Vips a domicilio vamos de nuestra cocina a tu puerta!</p>
	<div class="containerparallax" id="parallaxlogin">
		<a href="#" id="work" class="parallaxTilt_hover">
            <figure class="tilter_figure">
                
                <img class="tilter_image3 wow fadeInLeft" src="/img/login/pattern1.png"data-wow-duration="2s" data-wow-delay="1s" />
				<img class="tilter_image4 wow fadeInUp" src="<?php echo  $imgcircle;?>"data-wow-duration="2s" data-wow-delay="1s"/>
                <img class="tilter_image2 wow fadeInUp" src="/img/login/pattern2.png"data-wow-duration="2s" data-wow-delay="1s"/>
				<img class="tilter_image wow fadeInUp" src="/img/login/MilanesaHawaiana.png"data-wow-duration="2s" data-wow-delay="1s"/>
                
            </figure>
        </a>
	</div>
	
		<div class="containerparallax" id="parallaxreg">
		<a href="#" id="work" class="parallaxTilt_hover">
            <figure class="tilter_figure">
                
                <img class="tilter_image3 wow fadeInLeft" src="/img/login/pattern1.png"data-wow-duration="2s" data-wow-delay="1s" />
				<img class="tilter_image4 wow fadeInUp" src="<?php echo  $imgcircle;?>"data-wow-duration="2s" data-wow-delay="1s" />
                <img class="tilter_image2 wow fadeInUp" src="/img/login/pattern2.png"data-wow-duration="2s" data-wow-delay="1s"/>
				<img class="tilter_image wow fadeInUp" src="/img/login/molletes.png"data-wow-duration="2s" data-wow-delay="1s" />
                
            </figure>
        </a>
	</div>
	</div>
	

			<div class="loginpanel">
			
			<div id="loginpanel">
			



				<p class="redtit">¿Antojo?<br> Inicia sesión y disfruta el sabor de Vips</p>
				
				<p class="linklogin">¿Aún no tienes cuenta? <a>Regístrate</a></p>



					<div class="aligncenter">


						<br>

						<a  href="/fbconfig.php" id="fb" >Inicia sesión con Facebook</a>



						<p class="orfbd">O<br></p>

					</div>



				<div>



					<form  id="formlogind" class="formlogind" onsubmit="return false"  enctype="multipart/form-data" method="post">



					<div id="respuesta2d"></div>


						<div class="inputs logininputs">

							<input class="input inputloginrd" type="text" id="correold" name="correol" placeholder="Tu correo" required>

						</div>


						<div class="inputs logininputs">

							<input class="input inputloginrd" type="password" id="passld" name="passl" placeholder="Tu contraseña" required>


						</div>







							<a href="#small-dialogpass" class="modalpass" id="recoverpass" >Olvidé mi contraseña</a>


						<br><br>



						<div>



							<a class="boton top"  id="btnlogind">ENTRAR</a>



						</div>



					</form>
					
					<div class="dots-form" style="display:none;">
						<ul >
							<li  class="active"></li>
							<li></li>
							<li></li>
						</ul>
					</div>



					
					


				</div>



			</div>
			
			<div id="regpanel" style="display:none;">

				<div class="aligncenter" >

				<p class="redtit">¡Regístrate y ordena a domicilio!</p>
				
				<p class="linklogin">¿Ya tienes cuenta? <a>Inicia Sesión </a></p>


				<a class="simple-ajax-popup mfp-with-anim  blanco btnfb1" href="/avisofb.php" data-effect="mfp-zoom-out" id="fb" >Regístrate con Facebook</a>



				<p id="orfbd" class="orfbd">O<br></p>

				</div>



					<div class="formulario form" id="topreg">

			<form id="formregd" class="formregd" onsubmit="return false"  enctype="multipart/form-data" method="post">



				<div class="inputs">

					<input class="input inputregrd" type="text" id="nombred" name="nombre" placeholder="Tu nombre" required>


				</div>




				<div class="inputs">

					<input class="input inputregrd" type="text" id="apellidod" name="apellido" placeholder="Ingresa tus apellidos" required>

				</div>



				<div class="inputs">
					<input class="input inputregrd" type="email" id="correod" name="correo" placeholder="Tu correo" required onkeyup="this.value = this.value.toLowerCase();">

				</div>
				
				<div class="inputs">

									<input maxlength="10" class="input inputregrd" type="text" id="tel1d" name="tel1" placeholder="Ingresa tu celular (10 dígitos)" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>


				</div>





				<div class="inputs">

					<input class="input inputregrd" type="password" id="passd" name="pass" placeholder="Tu contraseña" required>

				</div>
				
				

				<div class="inputs">



					<label for="SEXO">SEXO*:</label>



					<input type="radio" class="inputform radiobtn" id="sexof" name="sexo" value="F" <?php if($sexo =="F"){echo "checked";}?> required>

					<label class="labelradio" for="sexof">F</label>



					<input type="radio" class="inputform radiobtn"  id="sexom" name="sexo" value="M" <?php if($sexo =="M"){echo "checked";}?>>

					<label class="labelradio" for="sexom">M</label>





				</div>


				<div class="switchcont" >

					<div style="width:40px; float:left;">



						<input type="checkbox" id="switchd" name="switch" value="1" checked/><label class="labelcb" for="switch"  required>Toggle</label></div>



						<div style="width:80%; float:left;">



							<p class="pformtoggle">Quiero recibir promociones, descuentos especiales Vips y beneficios de mi Tarjeta de Lealtad.</p>



						</div>



					</div>











					<div class="switchcont" >



						<div style="width:40px; float:left;">



							<input type="checkbox" id="switchap" name="switchap" value="1"/><label class="labelcb bgswitchd" for="switchap" required>Toggle</label></div>



							<div style="width:80%; float:left;">



								<p class="pformtoggle">Acepto <a href="/aviso-privacidad" target="_blank">términos y condiciones y aviso de privacidad.</a></p>





							</div>



								<p class="phidden" style="text-align: justify;">"Al registrarse acepta afiliarse al programa de recompensas "WOW Rewards" <a href="https://www.wowrewards.mx/home/condiciones" target="_blank" style="color: #f29100; text-decoration: underline;">Consulte términos y condiciones</a>  y <a href="https://www.wowrewards.mx/home/privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de privacidad </a> del programa. Aviso de Privacidad Simplificado: El responsable de sus datos es Operadora Vips, S. de R.L. de C.V. (VIPS®) domicilio en <a href="https://www.google.com/maps/place/Piso+21,+Av.+Revoluci%C3%B3n+1267,+Guadalupe+Inn,+01049+Ciudad+de+M%C3%A9xico,+CDMX/@19.3609001,-99.1928004,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff8aa885c40d:0x5eb40e55a33938a0!8m2!3d19.3609001!4d-99.1906117" target="_blank" style="color:#539bbb; text-decoration:underline;"> Av. Revolución 1267, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, C.P. 01040, CDMX;</a> los datos que recabemos de usted, serán utilizados con la siguiente finalidad: Darle de Alta en nuestro programa multimarca; puede consultar el <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de Privacidad Integral</a> y procedimiento de atención de derechos ARCO."</a> </p>



						</div>

						<div style="float: none; width: 70%; margin-top: 0px; padding: 0%; overflow: hidden; text-align: center; display: inline-block;;">
						<div class="g-recaptcha" data-sitekey="6LdgS20UAAAAAOYAzOxw83A05x-fKz6OJS3Ojpch"></div>
						
						</div>











						<br><br>

						<div id="respuestad"></div>



						<div>

						<p class="requiredtext">* Campo requerido</p>



							<a class="boton top boton-registro"  id="btnregd">REGISTRARME</a>



						</div>
						
						



					</form>
					
					<div class="dots-form">
						<ul>
							<li class="active"></li>
							<li ></li>
							<li></li>
						</ul>
					</div>







				</div>







			</div>

			</div>





  
 </div>



<a href="#small-dialogmail" class="modalmail" id="getmail" style="display:none;"></a>

<style>

#correofb {
	background-image: url(img/svg/correo.svg);
}

#pass1, #pass2{
	background-image: url(img/svg/password.svg);
}
#small-dialogmail {
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

#small-dialogmail h3 {
	color: #f29100;
	padding: 2% 2% 5% 2%;
	border-bottom: 2px solid #fff;
	width: 100%;
	margin: 0 auto;
}

#small-dialogmail  #formlogin {
	float: left;
	width: 100%;
	padding: 2.5% 0;
}

#small-dialogmail .boton {
	border: none;
	padding: 20px;
	outline: none;
	border-color: #a9a6a1;
	width: 80%;
	font-size: 1em;
	background: #f29100;
	color: white;
	cursor: pointer;
	display: inline-block;
	text-transform: uppercase;
	font-family: "Museo 900", sans-serif;
	margin: 1em;
}
#small-dialogmail  .logininputs .input {
	width: 80%;
	float: none;
}

.mfp-wrap {
	z-index: 999;
}
#respuesta3 .success, #respuesta3 .errormsg {
	width: 80%;
	margin: .5em auto auto;
}

</style>



  <div id="small-dialogmail" class="zoom-anim-dialog mfp-hide">
	  
	  <h3>Restablecer contraseña</h3>
	  
	  <?php echo $codeError;?>
	  
	  <div id="respuesta3">
					
					
					
					</div>
	 <form  id="formpass" class="formpass" onsubmit="return false"  enctype="multipart/form-data" method="post" <?php echo  $hideform;?>>
					
					


						<div class="inputs logininputs">

							<label for="passn1">NUEVA CONTRASEÑA</label><br>

							<input class="input inputpass" type="password" placeholder="Mínimo 6 caracteres" id="pass1" name="pass1" required>

							<i class="material-icons icono">

								alternate_email

							</i>

						</div>
						
						<div class="inputs logininputs">

							<label for="passn1">CONFIRMAR CONTRASEÑA</label><br>

							<input class="input inputpass" type="password"  placeholder="Mínimo 6 caracteres" id="pass2" name="pass2" required>

							<i class="material-icons icono">

								alternate_email

							</i>
							
							<input type="hidden" name="fp_code" value="<?php echo $_GET['fp_code']; ?>"/>

						</div>




						<div>

							<a class="boton top"  id="btnpass">RESTABLECER</a>

						</div>

					</form>
	  

	
	  </div>
		<script>
				
function validateEmail(email22) {

		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		return reg.test(email22);

	}

		
$("body").on("click", ".modalpass", function(){
		
	$("body").css("overflow-y", "auto");
	$("#poplogin").fadeOut(500);
		
});


		
$("#poplogin").on("click", ".modalpass", function(){
		
console.log("LALOBA3");
		
});







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
	$("body").on("click", ".acepto", function(){
		
		$(".acepto").css("pointer-events", "none");
		$(".acepto").append("<div class='success' style='width: 70%; padding-right: 10%; background-image: url(img/loadreg.gif); background-size: 7.5%; background-repeat: no-repeat; background-position: 95% center;'>Estamos creando tu registro. Esto puede tomar un momento, así que no des clic nuevamente ni refresques la página...</div>");
		
		
	});


    $('#btnregd').click(function(event){



	  $("#respuestad").html("");
	  $("#respuestad").hide();
	    $("#respuestad").show();




		$('.inputregrd').removeClass('errorinput');

		$(".bgswitchd").removeClass("bgreds");

		var nombre= $("#nombred").val();

	    var apellido = $('#apellidod').val();

		var emailvalr  = $("#correod").val();

			var tel1  = $("#tel1d").val();

		var mailvalid = validateEmail(emailvalr);

	    var pass = $('#passd').val();



		var error = false;



		if (nombre == '' || apellido == '' || emailvalr == '' || tel1 == '')

		{

			$("html, body").animate({ scrollTop: $("#orfbd").offset().top });

		$("#respuestad").append("<div class='errormsg'>Completa los campos</div>");

		$.each($('.inputregrd'),function() {

		   if ($(this).val().length == 0) {

			$(this).addClass("errorinput");

		   }

		});

		error = true;



	}



	if (pass.length <6)

		{

		$("html, body").animate({ scrollTop: $("#orfbd").offset().top });

		$("#respuestad").append("<div class='errormsg'>La contraseña debe contar con al menos 6 caracteres</div>");

		$("#passd").addClass("errorinput");

		error = true;



	}

	if (tel1.length <10)

		{

		$("html, body").animate({ scrollTop: $("#orfbd").offset().top });

		$("#respuestad").append("<div class='errormsg'>El teléfono debe contar con 10 dígitos</div>");

		$("#tel1d").addClass("errorinput");

		error = true;



	}



	if ( mailvalid == false)

	{

		$("#respuestad").append("<div class='errormsg'>El correo no es válido</div>");

		 $("#correod").addClass("errorinput");

		 error = true;

	}



  var checkBox = document.getElementById("switchap");

    if (checkBox.checked == false){

$("#respuestad").append("<div class='errormsg'>Debes aceptar los términos y condiciones</div>");

$(".bgswitchd").addClass("bgreds");

 error = true;

  }





	if (error == false){

        event.preventDefault();

		$("#respuestad").append("<div class='success' style='width: 70%; padding-right: 10%; background-image: url(img/loadreg.gif); background-size: 7.5%; background-repeat: no-repeat; background-position: 95% center;'>Estamos creando tu registro. Esto puede tomar un momento, así que no des clic nuevamente ni refresques la página...</div>");

		$("#btnregd").prop('disabled', true);

		$("#btnregd").addClass('nopointer');
		$("#btnregd").hide();



        $.ajax({

            url : "registron.php",

            type: "POST",

            data : new FormData($('#formregd')[0]),

            processData: false,

            contentType: false,

            success:function(data){



				$("html, body").animate({ scrollTop: $("#switchd").offset().top });

				$('#respuestad').html(data);
				grecaptcha.reset();

				$("#btnregd").prop('disabled', false);

				$("#btnregd").removeClass('nopointer');
				$("#btnregd").show();



				 setTimeout(function() {

                $('.success').slideUp();

				$('.errormsg').slideUp();
				

            }, 15000);







            }

        });



		}



    });





    $('#btnlogind').click(function(event){

		$('.inputloginrd').removeClass('errorinput');



		var emailval  = $("#correold").val();

		var mailvalid = validateEmail(emailval);

	    var passld = $('#passld').val();



		if (emailval == '' || passld =='')

	{

		$("#respuesta2d").html("<div class='errormsg'>Completa los campos</div>");

		$.each($('.inputloginrd'),function() {

		   if ($(this).val().length == 0) {

			$(this).addClass("errorinput");

		   }

		});



	}



	else if ( mailvalid == false)

	{

		$("#respuesta2d").html("<div class='errormsg'>El correo no es válido</div>");

		 $("#correold").addClass("errorinput");

	}



	else{

        event.preventDefault();

        $.ajax({

            url : "login.php",

            type: "POST",

            data : new FormData($('#formlogind')[0]),

            processData: false,

            contentType: false,

            success:function(data){



				$('#respuesta2d').html(data);



				 setTimeout(function() {

                $('.success').slideUp();

				$('.errormsg').slideUp();

            }, 10000);







            }

        });



		}

    });




$(".inputloginrd").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#btnlogind").click();
    }
});




    $('#btnpass').click(function(event){
		$('.inputpass').removeClass('errorinput');

		var pass1 = $("#pass1").val();
		var pass2 = $("#pass2").val();	
	 
	
		if (pass1 == '' || pass2 == '')
	{
		$("#respuesta3").html("<div class='errormsg'>Completa los campos</div>");
		$.each($('.inputpass'),function() {
		   if ($(this).val().length == 0) {
			$(this).addClass("errorinput");
		   }
		});
		
		
	}

	else if ( pass1 != pass2)
	{
		$("#respuesta3").html("<div class='errormsg'>Las contraseñas no coinciden</div>");
		 $(".inputpass").addClass("errorinput");
	}	
	
	else{
        event.preventDefault();
        $.ajax({
            url : "updatepass2.php",
            type: "POST",
            data : new FormData($('#formpass')[0]),
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
	




      $(document).ready(function() {
		  
		  

        $('.modalmail').magnificPopup({
          type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: false,
		  modal : true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-slide-bottom'
        });
		
		$(".modalmail").trigger("click");

      });
		
</script>




		<!-- Footer =============================-->

		<?php include('footer.php');?>