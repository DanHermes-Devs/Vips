<?php
ob_start();
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
	header('Location: domicilio2-m');
	exit(0);
}
require_once 'dbconnect.php';
$cp = $_GET['cp'];
$cp = strip_tags($cp);
$cp = htmlspecialchars($cp);
		
if(strlen($cp)<5){
	header('Location: domicilio');
	exit(0);
	
}

$locationsegment = $cp . " Mexico";
$address = $cp . "+Mexico"; // replace all the white space with "+" sign to match with google search pattern
$address = preg_replace('/\s+/', '+', $address);
$url = "https://maps.google.com/maps/api/geocode/json?sensor=false&key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE&address=$address";

$responseg = file_get_contents($url);

$json = json_decode($responseg,TRUE); //generate array object from the response from the web

$lat = $json['results'][0]['geometry']['location']['lat'];
$lng = $json['results'][0]['geometry']['location']['lng'];


$lati = $lat;
$long = $lng;

if( isset($_SESSION['uservips'])!="" ){
$linkrappi = 'data-login="1"';
}

else{
	$linkrappi = 'data-login="0" href="/login-rappi"';
}

include('header.php');
$showpop = "";
$btnuber="";
$botonsd="";
$botonrappi="";
$displaytext="";

	$sql4 = "SELECT * FROM stores WHERE zip = '$cp' LIMIT 1";
			$result2 = $mysqli->query($sql4);
			$numfilas2 = $result2->num_rows;
			$row2=mysqli_fetch_assoc($result2);

			$filas2 =$numfilas2;

			 if( $filas2 > 0 ){


			 $uber2 = $row2["uber"];
			$rappic2 = $row2["rappi"];
			$sdelantalc2 = $row2["sdelantal"];
			
			if(strlen($uber2) > 10){
				
				$btnuber='
				 <a id="uber-btn" data-store= "'.$row2["name"].'"  class="btn-domicilio" href="https://'.$uber2.'" target="_blank" onclick="deliverySelectedDom(&quot;Uber Eats&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

					<div class="back-end box uberbg">
						<span></span>
					</div>
				</a>
				
				';
			}
			
			else{
				$btnuber='';
				
			}
			
			if($rappic2=='1'){
				
				$botonrappi = '

				<a id="rappi-btn" class="btn-domicilio"  '.$linkrappi.' onclick="deliverySelectedDom(&quot;Rappi&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

								<div class="front-end box rappibg">
									<span></span>
								</div>
				</a>
				';
			}
			
			else{
				$botonrappi='';
				
			}
			
			if($sdelantalc2 =='1'){
				
				$botonsd = '

				 <a id="sin-delantal-btn" class="btn-domicilio" href="https://vips.sindelantal.mx/?Origem=SiteParceiro&produto=intermediario" target="_blank" onclick="deliverySelectedDom(&quot;Sin delantal&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

							<div class="back-end box sdbg">
								<span></span>
							</div>
						</a>


				 ';
			}
			
			else{
				$botonsd='';
				
			}


			}
			
			
if(strlen($lat)>5 && strlen($lng)>5){			
$sqluber = "SELECT id, name, addressresume, address, zip, city, state, country, url, delivery, new,  ninos, phone, latitude, longitude, horario, alcohol, remodelado, estacionamiento, salon, terraza, uber, rappi, sdelantal,
			((ACOS(SIN($lat * PI() / 180) * SIN(latitude * PI() / 180) + COS($lat * PI() / 180) * COS(latitude * PI() / 180) * COS(($lng - longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
		FROM stores WHERE  name != 'Vips Copilco'
		HAVING distance <= 2.5
		ORDER BY distance ASC";
		
$resultuber = $mysqli->query($sqluber)  or die("Error en".$sqluber);
$numfilasuber = $resultuber->num_rows;
	
	
while($rowuber= mysqli_fetch_array($resultuber)){

			$uber = $rowuber["uber"];
			$rappic = $rowuber["rappi"];
			$sdelantalc = $rowuber["sdelantal"];
			
			if($btnuber=='' && strlen($uber) > 10){
				
				$btnuber='
				 <a id="uber-btn" data-store= "'.$rowuber["name"].'" class="btn-domicilio" href="https://'.$uber.'" target="_blank" onclick="deliverySelectedDom(&quot;Uber Eats&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

					<div class="back-end box uberbg">
						<span></span>
					</div>
				</a>
				
				';
			}
			
		
			
			if($botonrappi=='' && $rappic=='1'){
				
				$botonrappi = '

				<a id="rappi-btn" class="btn-domicilio" '.$linkrappi.' onclick="deliverySelectedDom(&quot;Rappi&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

								<div class="front-end box rappibg">
									<span></span>
								</div>
				</a>
				';
			}
			
			
			
			if($botonsd=='' &&  $sdelantalc =='1'){
				
				$botonsd = '

				 <a id="sin-delantal-btn" class="btn-domicilio" href="https://vips.sindelantal.mx/?Origem=SiteParceiro&produto=intermediario" target="_blank" onclick="deliverySelectedDom(&quot;Sin delantal&quot;, &quot;'.$locationsegment.'&quot;, &quot;/domicilio&quot;, &quot; &quot;, &quot; &quot;, &quot; &quot; );">

							<div class="back-end box sdbg">
								<span></span>
							</div>
						</a>


				 ';
			}
			
			
			
			

}

}

			


		if($btnuber == '' && $botonrappi =='' && $botonsd == ''){
			$displaytext ="display:none;";
			   

			  $showpop = '

			  <script>
			        $(document).ready(function() {

		  $("#nogeo").trigger("click");


		    $("body").click(function(event){


 $("#nogeo").trigger("click");
			})

			   });

			  </script>
			  ';


		}

?>






<link rel="stylesheet" href="css/animate.css">

<div class="main" data-lng="<?php echo $lng;?>" data-lat="<?php echo $lat;?>" data-dir="<?php echo $address;?>">







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
	background: transparent;
	border: none;
	border-style: solid;
	outline: none;
	border-color: #a9a6a1;
	border-top: none;
	border-left: none;
	border-right: none;
	padding: 10px 0;
	border-width: 1.25px;
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
		border: 3px dashed #ccc;
		padding-bottom: 2.5%;
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


.boton {
	border: none;
	padding: 15px;
	outline: none;
	border-color: #a9a6a1;
	width: 100%;
	font-size: 1em;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	font-family: "Program",sans-serif;
	float: left;
	text-align: center;
	text-transform: uppercase;
	border-radius: 30px;
	font-weight: 500;
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
		color: #f29100;
		font-weight: bold;
		margin-top: 10px;
		font-family: "Program", sans-serif;
		text-align: center;
		padding-bottom: .5em;
	}





.loginpanel {
	position: relative;
	float: right;
	width: 50%;
	border-top: 0;
	margin-bottom: 10%;
	padding: 0 2.5%;
	text-align: center;
	top: 0;
	margin-top: -5%;
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

		background-size: 8%;

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
		display:none;

		background-image: url(img/fondo.png);

		background-repeat: no-repeat;

		background-size: 25%;

		position: absolute;

		background-position: bottom right;

		width: 100%;

		height: 100%;

		top: 60%;

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
	color: #666;
	font-size: .8em;
	text-align: center;
}





	#respuesta, #respuesta2, #respuesta {

		width: 100%;

		float: left;

		padding-top: .5em;

		text-align: center;

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

		font-family: "Program";

	}



	#respuesta .errormsg {

		width: 100%;

	}



	.bgreds{background:#c14549;}



	.nopointer{pointer-events:none;}


	#small-dialog-tel {

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



	#respuesta3 .success, #respuesta3 .errormsg {

		width: 80%;

		margin: .5em auto auto;

	}



	#correofb {

		background-image: url(img/svg/casa.svg);

	}

	#cp {
		background-image: url(img/svg/placeholder.svg);
		background-size:8%;
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
		padding: 5% 2%;
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
		line-height: 60px;
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

	#small-dialog, #small-dialog2, #small-dialog3 {
		background: white;
		padding: 2.5%;
		text-align: center;
		max-width: 500px;
		margin: 80px auto;
		position: relative;
		background-image: url(img/fondo.png);
		background-size: 30%;
		background-repeat: no-repeat;
		background-position: bottom right;
	}
	#small-dialog .mfp-close {
		color: transparent;
		text-shadow: none;
		font-size: 2.5em;
		font-weight: normal;
		font-family: "Program", sans-serif;
		background-image: url(img/cerrar1.png);
		background-size: 50%;
		background-repeat: no-repeat;
		background-position: center;
	}

	.mfp-close {
		color: transparent;
		text-shadow: none;
		font-size: 2.5em;
		font-weight: normal;
		font-family: "Program", sans-serif;
		background-image: url(img/cerrar1.png)!important;
		background-size: 50%;
		background-repeat: no-repeat;
		background-position: center;
	}
	.btnub {
	background: #f29100;
	color: #fff;
	display: inline-block;
	padding: 1em;
	width: 100%;
	min-width: 200px;
	max-width: 400px;
	font-family: "Program",sans-serif;
	margin: 1em 0;
	border: none;
	border-radius:30px;
	font-weight:500;
	cursor: pointer;
}

	#small-dialog h3 {
		color: #f29100;
		font-size: 1.5em;
	}

	#small-dialog p{color:#333; font-size:.8em;}

	.mfp-close-btn-in .mfp-close {
		color: transparent;
	}

	.middle .box {
		width: 4em;
		height: 4em;
		transition: all 250ms ease;
		will-change: transition;
		display: inline-block;
		text-align: center;
		cursor: pointer;
		position: relative;
		font-family: "Program", sans-serif;
		font-weight: 100;
		border-radius: 50%;
		border: none;
		margin: 1em;
		background-repeat: no-repeat;
		background-size: 90%;
		background-position: center;
	}

	.uberbg{
		background-image: url(img/uberbg.png);
		background-color: #ec614f;
		background-color: #ec614f;
	}

	.rappibg{
		background-image: url(img/bgrappi.png);
		background-color: #ec614f;
		background-color: #ec614f;
	}
	.sdbg{
		background-image: url(img/bgsd.png);
		background-color: #d6312d;
		background-color:  #d6312d;
	}
	.telbg{
		background-image: url(img/bgtel.png);
		background-color: #ea0a2a;
		background-color: #ea0a2a;
	}

	#rappi-btn .box.rappibg:hover {
		background-color:#ec614f !important;
		transform:scale(1.1);
	}
	.back-end.box.rappibg:hover {
		background-color:#ec614f !important;
		transform:scale(1.1);
	}
	.back-end.box.sdbg:hover {
		background-color:#d6312d !important;
	}
	.back-end.box.telbg:hover {
		background-color: #ea0a2a !important;
	}
	
	.back-end.box.uberbg:hover {
		background-color: #7dc240 !important;
	}


	.middle input[type="radio"]:checked + .rappibg {
		background-color: #ec614f;
	}

	.middle input[type="radio"]:checked + .sdbg {
		background-color: #d6312d;
	}

	.middle input[type="radio"]:checked + .telbg {
		background-color: #ea0a2a;
	}

	.middle input[type="radio"]:checked + .uberbg {
		background-color: #7dc240;
	}

	.middle p span::after {
	content: '';
	font-family: FontAwesome;
	color:transparent;
}

*, *:focus, *:active{outline:0;}
.btn-domicilio {
    display: inline-block;
}

.mfp-wrap {
	z-index: 999;
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

.loginpanel {
	background-image: url(/img/login/pattern5.png);
	background-size: 20%;
	background-repeat: no-repeat;
	background-position: 95% 120px;
}

.contdireccion {
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	width: 55%;
	float: none;
	display: inline-block;
	padding: 0px;
	min-width: 330px;
	text-align: center;
	border-radius: 30px;
	float: none;
	margin-bottom: 10px;
}
.venami {
	margin-top: 0;
	margin-bottom: 0;
	font-size: 2.4em;
	font-family: 'Program',sans-serif;
	color: #ea0029;
	font-weight: bold;
}
.titdireccion {
	color: #ea0029;
	text-align: left;
	padding: 0 5% 0 12.5%;
	background-image: url(img/svg/casared.svg);
	background-repeat: no-repeat;
	background-size: 1.25em;
	background-position: 9px;
}

#paneldomicilio {
	position: fixed;
	top: 0;
	width: 400px;
	height: 100vh;
	background: rgba(255, 255, 255, .95);
	z-index: 11;
	right: -400px;
	padding: 10% 2.5%;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
	transition: .35s all ease;
	overflow-y: auto;
}
.bpanelactive {
	overflow-y: hidden;
}

#paneldomicilio.panelactive{right:0; transition: .35s all ease;}

.overlaypanel {
	width: 100%;
	height: 100vh;
	background: rgba(0,0,0,.2);
	z-index: 1;
	position: fixed;
	display:none;
	top: 0;
}

#loadaddress p {
	font-size: .7em;
	color: #555;
	margin: 0;
	float: left;
	width: 100%;
	/* margin-bottom: 1em; */
}

#loadaddress form {
	float: left;
	padding: 1em 0;
	margin-top: 0;
	padding-top: .5em;
}
#loadaddress {
	float: left;
	width: 100%;
	height: auto;
}

.predeterminada1 {
	margin: 0;
}

.direccion {
	float: left;
	width: auto;
}

#formregd2 h2 {
	color: #f29100;
	font-size: 1.2em;
	padding: 0;
	width: 100%;
	float: left;
}

#paneldomicilio .inputs {
	float: left;
	width: 100%;
	margin-bottom: 0%;
	padding: 0 2.5%;
}

#calle, #ext, #inte, #colonia {
	background-image: url(/img/svg/casa.svg);
	background-size: 8%;
}

#paneldomicilio .formulario {
	padding: 0;
	background: #fff;
	margin-right: 0;
	float: left;
	/* border: 3px dashed #ccc; */
	padding-bottom: 2.5%;
	border: none;
}

.conticon {
	float: none;
	display: inline-block;
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

.inputs.middle {
	text-align: center;
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
	transition: all .35s ease;
}
.back-end.box:hover{
	transform:scale(1.1);
	transition: all .35s ease;
}
.back-end.box.uberbg {
	background-color: #7dc240;
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
	color: #333;
	font-family: "Program",sans-serif;
	font-weight: 400;
	margin-bottom: 15px;
}

.middle p span:after {

  content: '\f0e7';

  font-family: FontAwesome;

  color: yellow;

}

#loadaddress form {
	float: left;
	padding: 1em 0;
	margin-top: 0;
	padding-top: .5em;
	/* display: none; */
}

#paneldomicilio .inputs input {
	background-size: 6.5% !important;
}

#respuestad3 {
	width: 100%;
	float: left;
}

.predeterminada0 {
	margin: 0;
}

.middle p span::after {
	content: '';
	font-family: FontAwesome;
	color: transparent;
	display: none;
}

#cambiadomicilio {
	color: #fff;
	background: #f29100;
	padding: 7px;
	border-radius: 30px;
	width: 100px;
	display: inline-block;
	text-align: center;
	line-height: 1;
	margin-top: 0;
	font-weight: 500;
	cursor: pointer;
	margin-bottom: 20px;
}
.textcontd h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 20px;
	margin-top: 20px;
}
.iconpin {
	width: 20px;
	display: inline-block;
	vertical-align: middle;
}

.contdireccion h3 {
	color: #f19000;
	font-weight: 500 !important;
}

.loginpanel h3 {
	font-size: 16px;
	font-weight: normal;
}

.popupaddress {
	position: fixed;
	width: 100%;
	height: 100%;
	z-index: 333;
	background: rgba(0,0,0,.6);
	top: 0;
	text-align: center;
	display:none;
}

.contpopaddress {
	background: #fff;
	margin: 7.5% 5%;
	width: 90%;
	max-width: 500px;
	display: inline-block;
	padding: 20px;
	text-align: center;
	height: auto;
	min-height: 300px;
}
.closepopaddress {
	float: right;
	width: 22px;
	height: 22px;
	background: url(/img/login/close.png);
	background-size: 100%;
	cursor:pointer;
}

.dircont {
	text-align: center;
	display: inline-block;
}

.direccion {
	float: none;
	margin: 7.5px 0;
	width: 80%;
	border: 0;
	border-radius: 30px;
	display: inline-block;
	padding: 5px;
	box-shadow: 1px 1px 5px #f0f0f0;
	border: 1px solid #f0f0f0;
	transition: .35s all ease;
	position:relative;
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: 20px;
	cursor:pointer;
}
.direccion:hover{
	border:1px solid #f19000;
	transition:.35s all ease;
	box-shadow: 1px 1px 3px #f19000;
}
.direccion p {
	margin: 5px 0;
	padding: 0 60px;
}

.icondir {
	width: 40px;
	background: #f19000;
	height: 40px;
	border-radius: 50%;
	position: absolute;
	margin-left: 15px;
	top: 10%;
}
.icondir img {
	width: 60%;
	margin: 17.5%;
}
#tab2_content {

	min-height: 90vh;
}
</style>

<?php echo $showpop;?>
<?php echo $showpop2;?>

<div class="imgbg1"></div>

<div class="imgbg2"></div>

<?php
date_default_timezone_set("America/Mexico_City");
$h = date('G'); //set variable $h to the hour of the day
//G is the date key for hours in 24 format (not 12), with no leading 0s, like 02.
  $min=1;
  $max=3;
  $random1 = rand($min,$max);
  $random2 = rand($min,$max);

if ($h < 13){  
$imgcircle = '/img/login/pattern6.png';
$imgplato1 = '/img/login/platodesayuno'.$random1.'.png';
$imgplato2 = '/img/login/platodesayuno'.$random2.'.png';

}
else if ($h > 12) {
$imgcircle = '/img/login/pattern4.png';
$imgplato1 = '/img/login/platocomida'.$random1.'.png';
$imgplato2 = '/img/login/platocomida'.$random2.'.png';

}

?>



<div id="tab2_content" id="panellogin">
		<div style=" position: relative; float: left;width: 60%;" class=" wow fadeInLeft">
			<p class="titpr">¡Con Vips a domicilio vamos de nuestra cocina a tu puerta!</p>
			<div class="containerparallax" id="parallaxlogin">
				<a href="#" id="work" class="parallaxTilt_hover">
					<figure class="tilter_figure">
						
						<img class="tilter_image3 wow fadeInLeft" src="/img/login/pattern1.png" data-wow-duration="2s" data-wow-delay="1s" />
						<img class="tilter_image4 wow fadeInUp" src="<?php echo  $imgcircle;?>" data-wow-duration="2s" data-wow-delay="1s"/>
						<img class="tilter_image2 wow fadeInUp" src="/img/login/pattern2.png" data-wow-duration="2s" data-wow-delay="1s"/>
						<img class="tilter_image wow fadeInUp" src="<?php echo  $imgplato1;?>" data-wow-duration="2s" data-wow-delay="1s"/>
						
					</figure>
				</a>
			</div>
		</div>
		
		<div class="loginpanel">
			<div id="loginpanel">
				<div class="aligncenter">
					<div style=" position: relative; float: left;width: 100%;">
						<div class="aligncenter textcontd">
							<h2>¿A dónde te lo llevamos?</h2>
							<div class="contdireccion">
										<h3>Tu Código Postal es</h3>
										<p style="color: #666; font-size: 20px;"> <img src="/img/svg/placeholder.svg" class="iconpin"> <?php echo $cp;?></p> <a id="cambiadomicilio">Cambiar</a><br>
										<p style="color: #666; font-size: .8em; display:none;">*Para pedir a domicilio no necesitas descargar una aplicación</p>
							</div>
							<br>
							<div class="contagregadores" style="<?php echo $displaytext;?>">
							<h2 class="maintitle" style="color: #f19000">Tu Código Postal tiene cobertura con los siguientes servicios</h2>
							<p class="venami" style="display:none;">#VipsVenAmí</p>
							<div class="middle" id="botonesagregadores">
								<h3>Elige tu servicio a domicilio favorito</h3>
								<?php echo $btnuber. $botonrappi . $botonsd;?>
							</div>
						
						<div class="dots-form">
							<ul>
								<li ></li>
								<li class="active"></li>
								<li></li>
							</ul>
						</div>
						</div>
						</div>
						</div>


					</div>
				</div>

			</div>
		
		</div>





  
 </div>


<div class="popupaddress">
	<div class="contpopaddress">
		<div class="closepopaddress" onclick="closePopDirecciones();"></div>
		<h3 style="color: #f19000;">Selecciona la dirección de envío</h3>
		<div class="mensajerappi"></div>
		<div id="loadadir"></div>
		
	</div>
</div>

<style>
#tel1 {
	background-image: url(img/svg/smartphone.svg);
	background-size: 8%;
}

#correofb {

	background-image: url(img/svg/smartphone.svg)!important;

}

#small-dialogmail h3 {
	border-bottom: none!important;

}

.back-end.box.telbg {
	display: none;
}

#paneldomicilio{
	text-align:center;
}
#paneldomicilio h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 20px;
}

#paneldomicilio h3 {
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

.waitrappi {
	width: 100%;
	display: inline-block;
	padding: 90px 40px 10px 40px;
	background: url(/img/vipsloader.gif);
	background-size: 120px;
	background-repeat: no-repeat;
	background-position: top center;
	font-size: 15px;
}

.sorry {
	font-weight: 500;
	margin: 0;
	font-size: 20px;
}

.respuestarappi {
	padding: 25px;
	color: #dd3535;
}
</style>
<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
	<h3 style="color: #f29100; font-size: 1.5em;">¡Lo sentimos!</h3>
	<p>Por el momento no tenemos cobertura en este C.P. <br></p>
	<a href="/ubicaciones" class="btnub">Buscar mi Vips más cercano</a>
</div>

<div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
	<h3>Hay un problema con tu número celular, por favor ingresa uno diferente.</h3>
	<form  id="formmailfb" class="formlogin" onsubmit="return false"  enctype="multipart/form-data" method="post">
		<div id="respuesta3"></div>
		<div class="inputs logininputs">
			<label for="correo"></label><br>
			<input maxlength="10"  class="input inputfbmail" type="text" id="correofb" name="correofb" placeholder="Ingresa tu celular (10 dígitos)" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
			<p class="avisocard" googl="true">Lo necesitamos para comunicarnos contigo si no encontramos la dirección. Este número será usado en todas las direcciones de envío que registres.</p>
			<i class="material-icons icono">
				alternate_email
			</i>

		</div>

		<div>
			<a class="boton top"  id="btnfbmail">REGISTRAR TELÉFONO</a>
		</div>

	</form>
</div>

	<a href="#small-dialog2" class="popup-with-move-anim"  id="nogeo"></a>
	<a href="#small-dialog2" class="popup-with-move-anim2"  id="nogeo"></a>
	<a href="#small-dialog3" class="popup-with-move-anim2"  id="uptel"></a>
	<div id="paneldomicilio">
	<div class="formulario form" id="topreg">
	<h2>¿A dónde te lo llevamos?</h2>
	<h3>Agrega tu Código Postal para que podamos mostrarte nuestras opciones de envío disponibles </h3>
			
	<input type="text" placeholder="Código Postal (5 dígitos)" id="cpdom" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5"  />
	<br>		
	<a id="sendbtncp">Aceptar</a>
	</div>
	</div>
	
	<div class="overlaypanel"></div>

<script>
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
				$("body *").css("cursor", "wait");
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
	function checkRappi(id){
		$("body").css("cursor", "wait");
		$(".overlaydireccion").show();
		$(".mensajerappi").html('<p class="waitrappi">Espera unos segundos mientras comprobamos la cobertura en tu dirección. No cierres ni recargues la página.</p>');
		$.ajax({type:"GET", url:"/consultarappi.php?a="+id, success: function(text){
			$(".mensajerappi").html(text);
			$(".overlaydireccion").hide();
			$("body").css("cursor", "inherit");
			
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			$("body").css("cursor", "inherit");
			$(".overlaydireccion").hide();
			$(".mensajerappi").html('<p class="errorrappi">Ocurrió un error al comprobar la cobertura. Por favor intenta nuevamente más tarde.</p>');
		}
		});
	}

	$("#cambiadomicilio").click(function() {
		$(".overlaypanel").fadeIn(300);
		
		$("#paneldomicilio").toggleClass("panelactive");
		$("body").toggleClass("bpanelactive");

	});

	$(".overlaypanel").click(function() {
		
		$("#paneldomicilio").removeClass("panelactive");
		$("body").removeClass("bpanelactive");
		$(this).fadeOut(300);

	});

	$(document).ready(function() {
		$('.popup-with-move-anim').magnificPopup({
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

		$('.popup-with-move-anim2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: false,
			modal : false,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});

	});

	function removeModal(){
		  $("#comenzarpedido").removeClass("popup-with-move-anim");
		   $("#comenzarpedido").removeClass("nopointer");
	}
	function addModal(){
		  $("#comenzarpedido").addClass("popup-with-move-anim");
		  $("#comenzarpedido").removeClass("nopointer");
	}

	$("#rappi-btn").click(function(){
	var login = $(this).attr("data-login");	
		if(login == "1"){
			openPopDirecciones();
		}

	})
	function openPopDirecciones(){
		$("#loadadir").load("https://vips.com.mx/loadadressrappi.php", function(){
			$(".popupaddress").fadeIn();
		})
	}

	function closePopDirecciones(){
		$(".popupaddress").fadeOut();
	}
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