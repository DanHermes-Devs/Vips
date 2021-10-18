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
require_once 'dbconnect.php';

if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
	$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$resulth =$mysqli->query($sql3h);
	$rowregh=mysqli_fetch_assoc($resulth);
	$uid = $rowregh['id_registro'];
	$sql1n = "SELECT * FROM domicilio WHERE id_usuario = '$uid' AND predeterminada= 1 LIMIT 1";
	echo $sql1n;
	$result1n = $mysqli->query($sql1n)  or die("Error en".$sql1n);
	$numfilas1n = $result1n->num_rows;

	if($numfilas1n ==1){
		while($row1n= mysqli_fetch_array($result1n)){
			$cp = $row1n["cp"];
			}
		header('Location: domicilio2?cp='.$cp);
		exit(0);
	}

	else{
	$sql1n2 = "SELECT * FROM domicilio WHERE id_usuario = '$uid' LIMIT 1";
		echo $sql1n2;
	$result1n2 = $mysqli->query($sql1n2)  or die("Error en".$sql1n2);
	$numfilas1n2 = $result1n2->num_rows;
		if($numfilas1n2 ==1){
			while($row1n2= mysqli_fetch_array($result1n2)){
				$cp = $row1n2["cp"];
				}
			header('Location: domicilio2?cp='.$cp);
			exit(0);

		}
	}

}
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
	header('Location: domicilio-m');
	exit(0);
}
?>

<div class="main">







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
	background: #fff;
	margin-right: 0;
	float: left;
	padding-bottom: 8em;
	padding-top: 0;
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
	font-family: "Program",sans-serif;
	text-align: right;
}







	.avisocard {



		color: #f29100;



		width: 100%;



		float: left;



		font-size: .85em;



		font-family: "Program",sans-serif;



                margin-left: 5%;



	}







	.maintitle{



		font-size: 2em; color: #fbb03b; font-weight: bold; margin-top: -2%; border-bottom: 1px solid #dcdcdc; font-family: "Program", sans-serif;



	}



.loginpanel {
	position: relative;
	float: left;
	width: 40%;
	border-top: 0;
	margin-bottom: 0;
	padding: 2.5%;
	text-align: center;
	padding-bottom: 1%;
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

	font-family: "Program", sans-serif;

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

	font-family: "Program", sans-serif;

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
	/* font-family: sans-serif; */
	font-weight: 100;
	color: #8e8e8e;
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
	color: #666;
	font-size: 10px;
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
	font-family: "Program";
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

	border-bottom: 2px solid #ccc;

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

	font-family: "Program", sans-serif;

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

	font-family: "Program", sans-serif;

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


.redtit{font-family:"Program", sans-serif; color:#ea0029;}

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
	width: 70%;
	display: inline-block;
	height: auto;
	padding: 0 5%;
	float: left;
	margin: 0 15%;
	margin-top: -4%;
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
	background-position: right 88%;
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

.textagregadores {
	float: left;
	width: 100%;
	margin-bottom: 2.5%;
	position: relative;
	/* top: 350%; */
	margin-top: 45%;
}
.agregador {
	display: inline-block;
	text-align: center;
	width: 19%;
	padding: 2.5%;
	margin: 0;
}

.agregador img{width:100%;}

#formregd {
	text-align: center;
	padding-bottom: 20px;
}

.loginpanel h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 20px;
}

.loginpanel h3 {
	font-weight: 500;
	font-size: 18px;
	padding: 2.5% 15%;
}

#cpdom {
	width: 100%;
	border: 0;
	border-bottom: 1px solid #ccc;
	background: none;
	max-width: 200px;
	display: inline-block;
	background: url(/img/svg/placeholder.svg);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: right;
	height: 40px;
}

#sendbtncp {
	display: inline-block;
	width: 100%;
	background-color: #f5a623;
	color: #fff;
	max-width: 250px;
	padding: 10px;
	font-weight: 500;
	border-radius: 30px;
	margin-top: 30px;
	opacity:.7;
	cursor:not-allowed;
}
</style>

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

?>


<div id="tab2_content" id="panellogin" data-hour = "<?php echo  $h;?>">

	<div style=" position: relative; float: left;width: 60%;" class=" wow fadeInLeft">
	<p class="titpr">¡Con Vips a domicilio vamos de nuestra cocina a tu puerta!</p>
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
	
		<div class="containerparallax" id="parallaxreg">
		<a href="#" id="work" class="parallaxTilt_hover">
            <figure class="tilter_figure">
                
                <img class="ltilter_image3 wow fadeInLeft" src="/img/login/pattern1.png" data-wow-duration="2s" data-wow-delay="1s" />
				<img class="ltilter_image4 wow fadeInUp" src="<?php echo  $imgcircle;?>" data-wow-duration="2s" data-wow-delay="1s" />
                <img class="ltilter_image2 wow fadeInUp" src="/img/login/pattern2.png" data-wow-duration="2s" data-wow-delay="1s"/>
				<a href="platillo?id=<?php echo $link2;?>"><img class="ltilter_image wow fadeInUp" src="<?php echo  $imgplato2;?>" data-wow-duration="2s" data-wow-delay="1s" /></a>
                
            </figure>
        </a>
	</div>
	
					<div class="textagregadores">
		<div class="agregador" style="width: 40%; text-align: left;">
		Trabajamos con los principales servicios de envío
			
		</div>
		
		<div class="agregador rappi" style="width:14%;">
		 <img src="/img/logorappi.png" style="width: 90%; transform: translateY(25%);" />
			
		</div>
		
		<div class="agregador sindelantal" >
		
		<img src="/img/logoUberEats.png" />
			
		</div>
		
		<div class="agregador uber" style="width: 22%; padding: 2.5% 0 2.5% 2%;">
		<img src="/img/logosd.png" />
		
			
		</div>
		
	</div>
	

	</div>
	

	<div class="loginpanel">
	
	<h2>¿A dónde te lo llevamos?</h2>
	<h3>Agrega tu Código Postal para que podamos mostrarte nuestras opciones de envío disponibles </h3>
	
	<input type="text" placeholder="Código Postal (5 dígitos)" id="cpdom" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5"  />
	<br>
	
	<a id="sendbtncp">Aceptar</a>


	</div>
 </div>
<script>
					
$("body").on("click", ".modalpass", function(){
		
	$("body").css("overflow-y", "auto");
	$("#poplogin").fadeOut(500);
		
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
			//$("#sendbtncp").css("pointer-events", "none");
		},1000)
		
		
		
	}
	else{
		
		
	}
	
	
})

</script>

<script src="/js/parallaxTilt.min.js"></script>
<script src="/js/wow.min.js"></script>

<script type="text/javascript">
	function tilter() {

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

		$('.ltilter_image').parallaxTilt({
		  parallaxMultiple: 0.1,
			tiltMultiple: 0.05,
			duration: 800,
			easing:'easeOutExpo'
		});
		$('.ltilter_image2').parallaxTilt({
		  parallaxMultiple: 0.2,
			tiltMultiple: 0.05,
			duration: 500,
			easing:'easeOutExpo'
		});
		$('.ltilter_image3').parallaxTilt({
		  parallaxMultiple: 0.5,
			tiltMultiple: 0.05,
			duration: 500,
			easing:'easeOutExpo'
		});
		$('.ltilter_image4').parallaxTilt({
		  parallaxMultiple: -(0.18),
			tiltMultiple: 0.15,
			duration: 500,
			easing:'easeOutExpo'
		});

	};

	$( window ).on( "load", function() {
		tilter();
		new WOW().init();
	});
</script>
	<!-- Footer =============================-->
	<?php include('footer.php');?>