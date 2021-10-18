<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: atencion-m');

    exit(0);

}

?>



<div class="main">



<style>

.resptext {

    width: 100%;

    float: left;

    padding: 2.5% 5% 5% 5%;

    font-family: "Program", sans-serif;

}



.resptext h2 {

	color: #f29100;

	font-size: 2em;

	border-bottom: 1px solid #e1e1e1;

	padding-bottom: 10px;

	text-transform:uppercase;

	margin-bottom:0px;

}
.resptext h3 {
	padding: 10px 0;
	margin: 0;
	font-family: "Program",sans-serif;
	font-weight: 500;
	font-size: 2em;
}
.promo h3 {

    color: #f29100;

    font-size: 1.1em;

    padding: 0 5% 0 0;

    margin: 0;

}



.resp2img{width:20%; float:left;}

.text-right{width:80%; float:left;}

.resptext p{font-size: .95em;}

.promo{width:100%; float:left;     margin: 1em 0;}

.promo .benefimg{width:30%; float:left; vertical-align:middle;}

.textpromo {width:70%; float:left; padding:1em;}



.swiper-pagination-bullet-active {

    opacity: 1;

    background: #f29100!important;

}

</style>







  <!-- Demo styles -->

  <style>



.cat-atn {
	width: 50%;
	float: left;
	padding: 0;
	margin: 0;
	min-height: 240px;
}

.cat-atnimg {

	width: 25%;

	float: left;

	padding: 5% 10% 5% 0;

}

.textatn {

	float: left;

	width: 75%;

	margin: 0;

	padding: 0 2.5% 2.5% 0;

	transition: .35s all ease;

}

.linkatn:hover{color:#ff0025; transition: .35s all ease;}

.cat-atn h4{color:#f29100; transition: .35s all ease;}

  </style>



  <!-- Swiper -->









	<div class="resptext">

	<h2 style="font-family: 'Program'; text-transform: none;">Atención al invitado</h2>

	<h3>Nos esforzamos por que tengas la mejor experiencia</h3>
	<p style="margin-top:-2%; font-size: 1.5em; color: #555;"><br>Selecciona la opción que aplique:</span></p>



		<div class="cat-atn">

	<img src="img/svg/question.svg" class="cat-atnimg">

	<div class="textatn">

		<h4>Sugerencia, duda o felicitación</h4>

		<p><a href="formulario-atencion?idform=duda" class="linkatn">¿Tienes alguna duda o sugerencia?</a></p>

		<p><a href="formulario-atencion?idform=felicitacion" class="linkatn">¿Quieres felicitarnos?</a></p>

		<p><a href="formulario-atencion?idform=comentario" class="linkatn">¿Tienes algún otro comentario?</a></p>

	</div>



	</div>
	
	<div class="cat-atn">

	<img src="img/svg/calidadalimentos.svg" class="cat-atnimg">

	<div class="textatn">

		<h4>Calidad en los alimentos</h4>

		<p><a href="formulario-atencion?idform=preparacion" class="linkatn">Mi platillo estuvo mal preparado</a></p>

		<p><a href="formulario-atencion?idform=ingredientes" class="linkatn">Mi platillo no tenía los ingredientes solicitados</a></p>

		<p><a href="formulario-atencion?idform=frio" class="linkatn">Mi platillo estaba frio</a></p>

	</div>



	</div>



	<div class="cat-atn">

	<img src="img/svg/atnenrestaurante.svg" class="cat-atnimg">

	<div class="textatn">

		<h4>Atención en restaurante</h4>

		<p><a href="formulario-atencion?idform=tiempo-asiento" class="linkatn">Tardaron demasiado en sentarnos</a></p>

		<p><a href="formulario-atencion?idform=tiempo-platos" class="linkatn">Mis platillos tardaron demasiado</a></p>

		<p><a href="formulario-atencion?idform=caja" class="linkatn">Mi tiempo en caja fue demasiado</a></p>

		<p><a href="formulario-atencion?idform=atencion" class="linkatn">La atención fue inadecuada</a></p>



	</div>



	</div>



	<div class="cat-atn">

	<img src="img/svg/cuentasypagos.svg" class="cat-atnimg">

	<div class="textatn">

		<h4>Pagos y promociones</h4>

		<p><a href="formulario-atencion?idform=facturar" class="linkatn">No pude facturar mi cuenta</a></p>

		<p><a href="formulario-atencion?idform=cupon" class="linkatn">No pude redimir mi cupón</a></p>

		<p><a href="formulario-atencion?idform=tarjeta" class="linkatn">Mi Tarjeta de Lealtad no funcionó</a></p>

		<p><a href="formulario-atencion?idform=cuenta" class="linkatn">Tuve problemas con mi cuenta</a></p>

	</div>



	</div>



	<div class="cat-atn">

	<img src="img/svg/entregaadomicilio.svg" class="cat-atnimg">

	<div class="textatn">

		<h4>Entrega a domicilio</h4>

		<p><a href="formulario-atencion?idform=pedido1" class="linkatn">Mi pedido nunca llegó</a></p>

		<p><a href="formulario-atencion?idform=pedido2" class="linkatn">Mi pedido llegó en malas condiciones</a></p>

		<p><a href="formulario-atencion?idform=pedido3" class="linkatn">Mi pedido tardó demasiado</a></p>

	</div>



	</div>
	
	
	<div class="cat-atn">

	<img src="img/customer-service.svg" class="cat-atnimg">

	<div class="textatn">

		<h4>Otros</h4>

		<p><a href="formulario-atencion?idform=no-aplica" class="linkatn">Ninguna de estas situaciones aplica a mi caso</a></p>

		<p><a href="formulario-atencion?idform=concurso" class="linkatn">Tengo un problema con un concurso en el que participé</a></p>

		<p><a href="formulario-atencion?idform=web" class="linkatn">Tengo una queja o comentario sobre el sitio web o las redes sociales de Vips</a></p>

	</div>



	</div>



























</div>



  <!-- Swiper JS -->

  <script src="js/swiper.js"></script>

  <!-- Initialize Swiper -->

  <script>

  

    var swiper = new Swiper('.swiper-container', {

      slidesPerView: 5,

      spaceBetween: 30,

      freeMode: true,

      pagination: {

        el: '.swiper-pagination',

        clickable: true,

      },

    });

  </script>





<!-- Footer =============================-->

<?php include('footer.php');?>
