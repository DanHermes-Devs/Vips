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

else{
	//header("Location: /domicilio");

}


require_once 'dbconnect.php';
include('headerm.php');
//echo $telefono;

if(strlen($telefono) < 10){

$modaltel = '
<script>
$(document).ready(function() {



	$(".modalmail").magnificPopup({
		type: "inline",

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: "auto",

		closeBtnInside: false,
modal : true,
		preloader: false,

		midClick: true,
		removalDelay: 300,
		mainClass: "my-mfp-slide-bottom"
	});

$(".modalmail").trigger("click");

});

</script>


';
}

else{

	$sql1n = "SELECT * FROM domicilio WHERE id_usuario = '$uid' LIMIT 1";
$result1n = $mysqli->query($sql1n)  or die("Error en".$sql1n);
$numfilas1n = $result1n->num_rows;

$nueva = 0;
$nueva = intval($_GET['n']);

if($nueva == 1){
	
}
else{
	if($numfilas1n ==1 ){
	
	header("Location: domicilio-rappi-2-m");

 
}
	
}

}


include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

	header('Location: /domicilio2');

	exit(0);

}






?>

<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-Image-Carousel-jQuery-SimpleSlider/free-simple-slider.css" type="text/css" media="all" />



<link rel="stylesheet" href="css/animate.css">

<div class="main">



	<?php include('lateral.php');?>



	<main role="main">

<style>
	[data-div="#domiciliohome"]*{  fill: #fff!important; transition: all .4s ease;}

	[data-div="#domiciliohome"] path{  fill: #fff!important; transition: all .4s ease;}

	[data-div="#domiciliohome"] *{color: #fff!important;}
	
	
	.scrolled [data-div="#domiciliohome"]*{  fill: #ff0025!important; transition: all .4s ease;}

	.scrolled [data-div="#domiciliohome"] path{  fill: #ff0025!important; transition: all .4s ease;}

	.scrolled [data-div="#domiciliohome"] *{color: #ff0025!important;}



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



		height: 35px;



		width: 100%;



		background: transparent;



		border: none;



		border-style: dashed;



		outline: none;



		border-color: #a9a6a1;



		border-top: none;



		border-left: none;



		border-right: none;



		padding: 10px 0;



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

	font-family: "Program", sans-serif;

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
	margin-right: 0;
	float: left;
	padding-bottom: 2.5%;
	background:#fff;
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

		font-family: "Program", sans-serif;



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



		width: 50%;



		margin-bottom: 5%;



		padding: 0 2.5%;



	}



	.abajo{



		width: 100%;



		float: left;



	}



	.caja{



		margin-left: 5%;



	}



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



		width: 40px;



		height: 20px;



		background: grey;



		display: block;



		border-radius: 100px;



		position: relative;



		top: -10px;







	}



	.labelcb::after {



		content: '';



		position: absolute;



		top: 0px;



		left: 0;



		width: 20px;



		height: 20px;



		background: #fff;



		border-radius: 20px;



		transition: 0.3s;



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



		font-size: .8em;



		font-family: "Program", sans-serif;



	}







	.avisocard {



		color: #f29100;



		width: 100%;



		float: left;



		font-size: .85em;



		font-family: "Program",sans-serif;







	}







.maintitle {
	font-size: 1.5em;
	color: #fbb03b;
	font-weight: bold;
	margin-top: -2%;
	border-bottom: 1px solid #dcdcdc;
	/* font-family: "Program", sans-serif; */
	text-align: center;
	padding-bottom: .5em;
}




.loginpanel {
	position: relative;
	float: left;
	width: 100%;
	border-top: 0;
	margin-bottom: 10%;
	padding: 0 2.5%;
	text-align: center;
	top: 0;
	margin-top: -10%;
}




	.logininputs{width:100%;}



	.logininputs .input{width:50%; float:none;}







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



		font-family: "Program", sans-serif;



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



		font-family: "Program", sans-serif;



	}







.linkpassword {

    color: #fbb03b;

    font-size: .9em;

    padding-left: 0;

    font-family: "Program", sans;

    width: 100%;

    float: left;

}







#fb {

	background-color: #3b5998;

	background-image: url(img/fb.png);

	background-size: 1.5em;

	background-repeat: no-repeat;

	background-position: 7.5% center;

	width: 55%;

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

	font-family: "Program", sans-serif;

}



#tab2_content {
	/* background-color: red; */
	float: left;
	width: 100%;
	height: auto;
	padding: 2.5% 5%;
	display: block !important;
	/* background-size: 100%; */
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 70% 10%;
	/* text-align: center; */
}


.phidden {

	width: 100%;

	/* height: 0; */

	font-weight: normal;

	font-family: "Program", sans-serif;

	font-size: .7em;

	color: #666;

	padding: 2.5%;

	float: left;

	display:none;

}







#calle, #ext, #inte, #colonia {

	background-image: url(img/svg/casa.svg);

	background-size: 6%!important;

}

#pass, #passl {

   background-image: url(img/svg/casa.svg);

	background-size: 8%;

}


#correo, #correol {
   background-image: url(img/svg/casa.svg);

	background-size: 8%;
}

#tdl{background-image: url(img/svg/cardf.svg); background-size: 10%}



.imgbg1 {


	background-repeat: no-repeat;

	background-size: 25%;

	position: fixed;

	background-position: top left;

	width: 100%;

	height: 100vh;

	top: 35%;

}

.imgbg2 {
	background-image: url(img/fondo.png);
	background-repeat: no-repeat;
	background-size: 25%;
	position: absolute;
	background-position: bottom right;
	width: 100%;
	height: 100vh;
	/* top: 60%; */
	z-index: 0;
}


.aligncenter{text-align: center;}



.loginpanel .p {

	margin-top: 0;

}



.orfb{margin-bottom: 2em;}





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




#respuestad2, #respuestad22, #respuestad2 {
	width: 100%;
	float: left;
	padding-top: .5em;
	text-align: center;
	display: inline-block;
	margin: 0%;
}
.success {

	width: 100%;

	background: #DCEDC8;

	padding: 1em;

	color: #558B2F;

	border-radius: 5px;

}



.errormsg {

    width: 100%;

    background: #FFCDD2;

    padding: 1em;

    color: #B71C1C;

    border-radius: 5px;

    margin: 1em auto;

}



#btnlogin{display: inline-block;}



.errorinput {

    border: 1px solid #c14549;

    background-image: url(img/error.png)!important;

    background-size: 7%!important;

    background-repeat: no-repeat;

    background-position: 97% center!important;

}



#btnregd2 {
	display: inline-block;
	width: 100%;
	text-transform: uppercase;
	text-align: center;
	float: none;
	font-family: "Program";
}


#respuestad2 .errormsg {

    width: 100%;

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



.mfp-wrap {



	z-index: 3;

}



#respuestad23 .success, #respuestad23 .errormsg {

	width: 80%;

	margin: .5em auto auto;

}



#correofb {

	background-image: url(img/svg/smartphone.svg);
	background-size: 8% !important;

}

#cp {
	background-image: url(img/svg/placeholder.svg);
	background-size:6%!important;
}

#tel {
	background-image: url(img/svg/smartphone.svg);
	background-size:8%;
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

.dots-form  {
	width: 100%;
	float: left;
	padding: 2%;
}

.dots-form ul {
	text-align: center;
}
.dots-form li {
	width: 1em;
	height: 1em;
	border-radius: 50%;
	background: #ccc;
	display: inline-block;
	margin: 0 .5em;
}

.dots-form .active{
	background: #f29100;
}



	input:checked + .labelcb {



		background: #f29100;



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

}

.middle input[type="radio"]:checked + .box span:before {

  transform: translateY(0px);

  opacity: 1;

}

.middle .box {
	width: 60px;
	height: 60px;
	background-color: #b9b9b9;
	transition: all 250ms ease;
	will-change: transition;
	display: inline-block;
	text-align: center;
	cursor: pointer;
	position: relative;
	font-family: "Program", sans-serif;
	font-weight: 100;
	border-radius: 50%;
	border: 0;
	margin: 1em;
	line-height: 3.5;
	color: #fff;
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

	font-size: .8em;

	user-select: none;

	color: #fff;

	line-height: 2.7em;

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

  font-family:"Program", sans-serif;

  font-weight: 400;

}

.middle p span:after {

  content: '\f0e7';

  font-family: FontAwesome;

  color: yellow;

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
	color: #fff;
	cursor: pointer;
	display: inline-block;
	text-transform: uppercase;
	font-family: "Program",sans-serif;
	margin: 1em;
}

#small-dialogmail .logininputs .input {
	width: 90%;
	float: none;
	max-width: 280px;
}
#formmailfb .inputs {
	float: left;
	width: 100%;
	margin-bottom: 5%;
	padding: 2.5%;
}

#respuestad23 {
	width: 100%;
	text-align: center;
	display: inline-block;
}
#respuestad23 .errormsg {
	width: 90%;
	background: #ffcdd2;
	padding: 1em;
	color: #b71c1c;
	border-radius: 5px;
	float: none;
}


#tel1 {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%;
}

.mfp-wrap {
	z-index: 999!important;
}

.titpr {
	margin-top: 0;
	color: #534747;
	text-align: center;
	font-size: 1.5em;
	font-family: "Program";
	padding: 2.5% 10%;
	font-weight: 500;
}

   .parallaxTilt_hover {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
top: 0;
}

.containerparallax {
	position: relative;
	width: 80%;
	display: inline-block;
	height: auto;
	padding: 0 5%;
	float: left;
	margin: 2.5% 10%;
}

#parallaxlogin{left: 0%;}
#parallaxreg{left: 60%;}


.tilter_image, .tilter_image2, .tilter_image3, .tilter_image4, .ltilter_image, .ltilter_image2, .ltilter_image3, .ltilter_image4{
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

.tilter_image, .ltilter_image {
	margin-top: -10%!important;
	animation: float 3s ease-in-out infinite;

}
.tilter_image2, .ltilter_image2 {
	margin-top: 0%;
width: 20%;
animation: float 6s ease-in-out infinite;

}
.tilter_image3, .ltilter_image3 {
    width: 40%;
    margin-top: 20% !important;
    left: -10%;
	animation: float 8s ease-in-out infinite;
}


.tilter_image4, .ltilter_image4 {
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

#formregd2d{text-align:center;}

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

#formregd2d  .input {
	width: 65%;
	float: none;
}


#formregd2d .switchcont {
	width: 70%;
	display: inline-block;
	padding: .25em 0;
	float: none;
}

.redtit {
	font-family: "Program", sans-serif;
	color: #ea0029;
}

#formregd2 .inputs {
	float: left;
	width: 100%;
	margin-bottom: 15px;
	padding: 0;
}
#formregd2 label {

	
}

#formregd2.formulario {
	padding: 0 5%;
}

.conticon {
	float: left;
}

.conticon img {
	vertical-align:middle;
}

.conticon p {
	color:#333;
	font-size:.8em;
	margin:0;
	margin-top:-10px;
}

main {
	margin-top: 7vh;
}

.inputs input {
	background-size: 12% !important;
	background-repeat: no-repeat !important;
	background-position: right center;
	border: none;
	border-bottom: 1px solid #888 !important;
}

#parallaxlogin {
	left: 0%;
	min-height: 40vh;
}

.errorinput {
	border: 1px solid #c14549 !important;
	border-bottom: 1px solid #c14549 !important;
}
.mfp-wrap {
	z-index: 9999 !important;
}
</style>

<div id="tab2_content" id="panellogin">

	<p class="titpr">¡Con Vips a domicilio vamos de nuestra cocina a tu puerta!</p>

	<div style=" position: relative; float: left;width: 100%;" class=" wow fadeInLeft">

	

			<div class="loginpanel">
			
			<div id="loginpanel">




					<div class="aligncenter">

				<p class="redtit" googl="true">¿A dónde te lo llevamos?</p>
				<p>Para llevar los platillos necesitamos los siguientes datos</p>



				</div>



				<div >
				
				
				<div class="formulario form" id="topreg">



			<form id="formregd2" class="formregd2" onsubmit="return false"  enctype="multipart/form-data" method="post">
			
			
			<input type="hidden" id="iduservips" name="iduser" value="<?php echo $uid;?>">
			<input type="hidden" id="correo" name="correo" value="<?php echo $correo;?>">
			<input type="hidden" id="nombre" name="nombre" value="<?php echo $nombre;?>">
			<input type="hidden" id="tel1" name="tel" value="<?php echo $telefono;?>">
			<input type="hidden" id="apellido" name="apellido" value="<?php echo $apellido;?>">
			<input type="hidden" id="genero" name="genero" value="<?php echo $sexo;?>">
			<input type="hidden" id="utime" name="utime" value="<?php echo base64_encode($utime);?>">



				<div class="inputs">
					<input class="input inputregr" type="text" id="calle" name="calle" placeholder="Ingresa tu calle*" required>

				</div>




				<div class="inputs">
					<input class="input inputregr" type="text" id="ext" name="ext" placeholder="Ingresa tu no. ext.*"   required>
				</div>



				<div class="inputs">
					<input class="input" type="text" id="inte" name="inte" placeholder="Ingresa tu no. int.">
				</div>



				<div class="inputs">
					<input class="input inputregr" type="text" id="colonia" name="colonia" placeholder="Ingresa tu colonia*" required>

				</div>



				<div class="inputs">
					<input class="input inputregr cp" type="text" id="cp" name="cp" placeholder="Ingresa tu código postal*" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" required>

				</div>









				<div class="inputs middle" style="width: 100%;">


					<h3>¿DÓNDE ESTÁS?</h3>

					 <div class="conticon"> 
					 
						 <label>

						  <input value="casa" type="radio" name="radio"/>

						  <div class="front-end box">

							<img src="img/svg/casa2.svg" class="icondomicilio">

						  </div>

						</label>
						
						<p>Casa</p>
					</div>
					
					



					 <div class="conticon"> 
					  <label>

					  <input value="oficina"  type="radio" name="radio"/>

					  <div class="back-end box">

						<img src="img/svg/oficina.svg" class="icondomicilio">

					  </div>

					</label>
					
						<p>Oficina</p>
					</div>


					 <div class="conticon"> 
					  <label>

					  <input value="otro"  type="radio" name="radio"/>

					  <div class="back-end box">

						<img src="img/svg/otro.svg" class="icondomicilio">

					  </div>

					</label>
					
						<p>Otro</p>
					</div>





				</div>





						<br><br>

						<div id="respuestad2"></div>



						<div>

						<p class="requiredtext">* Campo requerido</p>



							<a class="boton top"  id="btnregd2">Continuar</a>



						</div>



					</form>








				</div>



					
					
					<div class="dots-form">
						<ul >
							<li></li>
							<li class="active"></li>
							<li></li>
						</ul>
					</div>



					
					


				</div>



			</div>
			
			

			</div>
	</div>	
	

	<?php
date_default_timezone_set("America/Mexico_City");
$h = date('G'); //set variable $h to the hour of the day
//G is the date key for hours in 24 format (not 12), with no leading 0s, like 02.
  $link1 =0;
  $link2 = 0;
  $min=1;
  $max=2;
  $random1 = rand($min,$max);
  $random2 = rand($min,$max);

if ($h < 13){  
if($random1 == 1 || $random2 == 1){ $link1=152;}
if($random1 == 2 || $random2 == 2){ $link2=157;}
$imgcircle = '/img/login/pattern6.png';
$imgplato1 = '/img/login/platodesayuno'.$random1.'.png';
$imgplato2 = '/img/login/platodesayuno'.$random2.'.png';


}
if ($h > 12) {
if($random1 == 1 || $random2 == 1){ $link1=38;}
if($random1 == 2 || $random2 == 2){ $link2=38;}
$imgcircle = '/img/login/pattern4.png';
$imgplato1 = '/img/login/platocomida'.$random1.'.png';
$imgplato2 = '/img/login/platocomida'.$random2.'.png';

}

if ($h > 18) {
if($random1 == 1 || $random2 == 1){ $link1=48;}
if($random1 == 2 || $random2 == 2){ $link2=48;}
$imgcircle = '/img/login/pattern4.png';
$imgplato1 = '/img/login/platocenas'.$random1.'.png';
$imgplato2 = '/img/login/platocenas'.$random2.'.png';


}

//if it's before 7am, use fish image
//if not and it's before 8pm, use frogs
//otherwise, potatoes
?>
	<div class="containerparallax" id="parallaxlogin">
		<a href="#" id="work" class="parallaxTilt_hover">
            <figure class="tilter_figure">
                
                <img class="tilter_image3 wow fadeInLeft" src="/img/login/pattern1.png" data-wow-duration="2s" data-wow-delay="1s" />
				<img class="tilter_image4 wow fadeInUp" src="<?php echo  $imgcircle;?>" data-wow-duration="2s" data-wow-delay="1s"/>
                <img class="tilter_image2 wow fadeInUp" src="/img/login/pattern2.png" data-wow-duration="2s" data-wow-delay="1s"/>
				<a href="platillo?id=<?php echo $link1;?>"><img class="tilter_image wow fadeInUp" src="<?php echo  $imgplato1;?>" data-wow-duration="2s" data-wow-delay="1s"/></a>
                
            </figure>
        </a>
	</div>
	



		
	</div>





  
 </div>


		


  
<a href="#small-dialogmail" class="modalmail" id="getmail" style="display:none;"></a>
<div id="small-dialogmail" class="zoom-anim-dialog mfp-hide">

	<h3>Para pedidos a domicilio, es necesario actualizar tu número de celular.</h3>
 <form  id="formmailfb" class="formlogin" onsubmit="return false"  enctype="multipart/form-data" method="post">

				<div id="respuesta3">

				</div>


					<div class="inputs logininputs">

						<label for="correo"></label><br>

						<input maxlength="10"  class="input inputfbmail" type="text" id="correofb" name="correofb" placeholder="Ingresa tu celular (10 dígitos)" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
						<p class="avisocard" googl="true">Lo necesitamos para comunicarnos contigo si no encontramos la dirección. Este número será usado en todas las direcciones de envío que registres.</p>
					</div>




					<div>

						<a class="boton top"  id="btnfbmail">REGISTRAR TELÉFONO</a>

					</div>

				</form>



	</div>
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



    $('#btnregd2').click(function(event){



	  $("#respuestad2").html("");
	  $("#respuestad2").hide();
	    $("#respuestad2").show();




		$('.inputregr').removeClass('errorinput');

		$(".bgswitch").removeClass("bgreds");

		var calle= $("#calle").val();

	    var ext = $('#ext').val();

		var inte  = $("#inte").val();

	    var cp = $('#cp').val();

		var tel = $('#tel').val();

		var error = false;



		if (calle == '' || ext == ''  || cp == '')

		{

			$("html, body").animate({ scrollTop: $("#topreg").offset().top });

		$("#respuestad2").append("<div class='errormsg'>Completa los campos</div>");

		$.each($('.inputregr'),function() {

		   if ($(this).val().length == 0) {

			$(this).addClass("errorinput");

		   }

		});

		error = true;



	}
	
	
	var donde = document.getElementsByName('radio');
        var dondeValue = false;

        for(var i=0; i<donde.length;i++){
            if(donde[i].checked == true){
                dondeValue = true;    
            }
        }
        if(!dondeValue){
           $("#respuestad2").append("<div class='errormsg'>Selecciona el tipo de domicilio</div>");
            error = true;
        }





	if (error == false){

               event.preventDefault();
			   $("#respuestad2").html("<div class='success'>Espera un momento mientras verificamos la cobertura en tu área...</div>");

        $.ajax({

            url : "addressdomicilio-rappi.php",

            type: "POST",

            data : new FormData($('#formregd2')[0]),

            processData: false,

            contentType: false,

            success:function(data){



				$('#respuestad2').html(data);



				 setTimeout(function() {

                $('.success').slideUp("slow");

				$('.errormsg').slideUp("slow");

            }, 10000);







            }

        });


		}



    });






    $('#btnfbmail').click(function(event){
		$('.inputfbmail').removeClass('errorinput');

		var emailvalfb  = $("#correofb").val();


		if (emailvalfb.length < 10 )
	{
		$("#respuestad23").html("<div class='errormsg'>Ingresa un número válido (10 dígitos)</div>");
		$("#correofb").addClass("errorinput");

	}

	else{
        event.preventDefault();
        $.ajax({
            url : "updatetel.php",
            type: "POST",
            data : new FormData($('#formmailfb')[0]),
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
</script>






   
    <script src="/js/parallaxTilt.min.js"></script>
    <script src="/js/wow.min.js"></script>
	
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
		
		$( window ).on( "load", function() {

  new WOW().init();
});

    </script>



<?php echo $modaltel; ?>







			<!-- Footer =============================-->

			<?php include('footerm.php');?>
