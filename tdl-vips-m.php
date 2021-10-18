<?php
include('headerm.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
}
else{
	header('Location: promociones');
	exit(0);
}


?>



<div class="main">

	<?php include('lateral.php');?>

	<main role="main">

	<style>








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

.imagen {
	width: 25%;
	margin: 0;
	padding: 0;
	float: none;
	vertical-align: middle;
}



	.texto{



		width: 100%;



		padding: 0 1em;



		float: left;



	}


.clase {
	position: relative;
	width: 100%;
	float: left;
	margin-bottom: 5%;
	text-align: center;
}


	.input {



		height: 45px;



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
	padding: 20px;
	outline: none;
	border-color: #a9a6a1;
	width: 80%;
	font-size: 1em;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	font-family: "Museo 900",sans-serif;
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



	
	.caja {
	margin-left: 0;
	padding: 5%;
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
		font-size: 1.25em;
		color: #fbb03b;
		font-weight: bold;
		margin-top: -2%;
		border-bottom: 1px solid #dcdcdc;
		/* font-family: "Museo 900", sans-serif; */
		text-align: center;
		padding-bottom: .5em;
	}






	.loginpanel {







		position: relative;



		float: left;



		width: 50%;



		border-top: 0;



		margin-bottom: 10%;



		padding: 0 2.5%;



		text-align: center;



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
		padding: 5% 25%;
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

		margin-top: 10px;

		color: #666;

		font-size: .8em;

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

		font-family: "Museo 900";

	}



	#respuesta .errormsg {

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

		font-family: "Museo 900", sans-serif;

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
		background-color: #e0e0e0;
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

	#small-dialog, #small-dialog2 {
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
	font-family: "Museo 900",sans-serif;
	/* margin: 0; */
	border: none;
	margin: 0 auto;
	text-align: center;
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

	.rappibg{
		background-image: url(img/bgrappi.png);
		background-color: #ec614f;
		background-color: #cccccc;
	}
	.sdbg{
		background-image: url(img/bgsd.png);
		background-color: #d6312d;
		background-color: #cccccc;
	}
	.telbg{
		background-image: url(img/bgtel.png);
		background-color: #ea0a2a;
		background-color: #cccccc;
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
	
	main {
	*zoom: 1;
	width: auto;
	max-width: 100%;
	float: none;
	display: block;
	margin-right: auto;
	margin-left: auto;
	margin-bottom: 0px;
	padding-top: 15vh;
	padding: 10vh 0%;
}


.titleh3{font-size: 1.5em;

color: #f29100;

text-align: center;}
</style>

<?php echo $showpop;?>

	<div class="productdesc">
	
	
	
	





	<div style=" position: relative; float: left;width: 100%;">
	
	<img src="/img/2019/banners/CarruselBanner-tdl.png" style="width:100%;">

		<div class="caja">



		<div>



			<h3 class="titleh3">Nueva Tarjeta de <a href="https://www.wowrewards.mx/">Lealtad</a></h3>

			<p style="font-family: 'Program', sans-serif;

font-size: 1em;

margin: 0em 0 1em 0;

text-align: center;

padding: 0 5%;">Tus visitas te dan descuentos y ahora también puntos</p>



		</div>











		<div class="clase">



			<img class="imagen" src="img/svg/wowcel.svg" alt="">



			<p class="p texto">Todos los beneficios al alcance de tu mano.</p>



		</div>







		<div class="clase">



			<img class="imagen" src="img/svg/wowtienda.svg" alt="">



			<p class="p texto">En cada visita obtienes un descuento. Y con cada visita posterior durante el mes en curso, tu descuento crece y crece hasta llegar a 50%</p>



		</div>







		<div class="clase">



			<img class="imagen" src="img/svg/wowpromo.svg" alt="">



			<p class="p texto">Accede a cupones y promociones.</p>



		</div>







		<div class="clase">



			<img class="imagen" src="img/svg/wowinsignia.svg" alt="">



			<p class="p texto">Con Wow acumulas puntos en cada visita, que podrás utilizar para pagar en Vips.</p>



		</div>



		<div class="clase">



			<img class="imagen" src="img/svg/wowjuguetes.svg" alt="">



			<p class="p texto">Puedes usar tus puntos para pagar lo que más te guste.</p>



		</div>



		<div class="clase">



			<img class="imagen" src="img/svg/wowregalo.svg" alt="">



			<p class="p texto">Celebra tu cumpleaños con nosotros y recibe un regalo especial.</p>



		</div>
		
		<?php if($sesion == true){
			
			$boton = '<a href="ubicaciones" class="btnub">IR A MI VIPS MÁS CERCANO</a>';
		}
		
		else{
			$boton = '<a href="cuenta" class="btnub">OBTÉN TU TARJETA DE LEALTAD</a>';
			
		}
		
		echo $boton;
		
		?>
		
		
		



	</div>











	</div>





		

		<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
		<div id="small-dialog" class="zoom-anim-dialog mfp-hide">


			<p style="padding:10%">No pudimos localizarte, <br> por favor ingresa tu código postal.</p>



		</div>


	</div>


<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">

	<h3 style="color: #f29100; font-size: 1.5em;">¡Lo sentimos, <?php echo $nombre;?>!</h3>
	<p>Por el momento no tenemos cobertura donde estás. <br><br> Pero con tu registro, ahora tienes una Tarjeta de Lealtad con la que obtendrás descuentos en cada visita y puntos Wow para pagar tus consumos.</p>

	<a href="beneficiosvips" class="btnub">IR A MI TARJETA DE LEALTAD</a>

	
</div>

<a href="#small-dialog2" class="popup-with-move-anim"  id="nogeo"></a>




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

		var calle= $("#calle").val();	

		var ext = $('#ext').val();	

		var inte  = $("#inte").val();

		var cp = $('#cp').val();	

		var tel = $('#tel').val();

		var error = false;



		if (calle == '' || ext == '' || inte == '' || cp == '' || tel == '' )

		{

			$("html, body").animate({ scrollTop: $("#topreg").offset().top });

			$("#respuesta").append("<div class='errormsg'>Completa los campos</div>");

			$.each($('.inputregr'),function() {

				if ($(this).val().length == 0) {

					$(this).addClass("errorinput");

				}

			});

			error = true;



		}		





		if (error == false){

			event.preventDefault();
			$(location).attr('href', 'domicilio-3')


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

				url : "login.php",

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
		
		
		$('.popup-with-move-anim').magnificPopup({
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


		

		



	});

	$("[name=radio]").change(function () {
		var radioValue = $("input[name='radio']:checked").val();
		var link = $("input[name='radio']:checked").attr("data-url");
    //alert(link);
    $("#comenzarpedido").attr("href", link);
});


</script>









<!-- Footer =============================-->






	<!-- Footer =============================-->
	<?php include('footerm.php');?>
