<?php

include 'header.php';

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();

if ($detect->isMobile()) {

    header('Location: terminosycondiciones-m');

    exit(0);

}

?>


	  <!-- Link Swiper's CSS -->
 <link rel="stylesheet" href="css/swiper.css">

  <!-- Swiper JS -->
  <script src="js/swiper.js"></script>
  <!-- Initialize Swiper -->


<div class="main">



	<style>

	.legalesfooter{

			color: #fff !important;
	font-weight: bold;
	font-size: 14px;

	}

	.resptext {

		width: 100%;

		float: left;

		padding: 2.5% 5% 5% 5%;

		font-family: "Program", sans-serif;

	}


p.titlepromo {
	font-family: "Program",sans-serif;
	padding: 7%;
	font-weight: 500;
}


	.resptext h2{color:#f29100; font-size:2em; margin-top: 0;  font-family: "Program", sans-serif;}

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

	.textpromo {width:70%; float:left; padding:1em; padding-top: 0;}



	.swiper-pagination-bullet-active {

		opacity: 1;

		background: #f29100!important;

	}

</style>







<!-- Demo styles -->

<style>

.swiper-container {
	width: 100%;
	height: 250px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: 100%;
	display: none;
}
.swiper-slide {

	text-align: center;

	padding-top: 10px;



}

.j{
	text-align: justify;
}


.thumbbenef{width: 100px;

	height: 100px;

	border-radius: 50%;

	background-repeat: no-repeat;

	background-position: left;

	background-size: cover;

	margin: 2em auto 1em auto;}


.disclaimernfl {
	width: 100%;
	float: left;
	padding: 0 5%;
	text-align: center;
	font-size: .75em !important;
	color: #444;
}
#showparticipantes {
	color: #f29100;
	margin: 5px 0;
	float: left;
	width: 100%;
	cursor: pointer;
	font-weight: 500;
}

</style>

</head>

<body>

	<!-- Swiper -->


	<div class="resptext j">

		<h2>Términos y condiciones</h2>






		<div class="promo" id="Garantia">
		<a href="https://vips.com.mx/garantiadesabor"><img src="/img/2019/banners/Garantia_de_sabor-Carrusel-min.png" class="benefimg"></a>

			<div class="textpromo">
				<h3>Garantía de Sabor Vips</h3>
				 <p>Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, ofrece la Garantía de sabor a todos sus invitados.<br>El programa garantía de sabor cubre los siguientes puntos:<br>1. Si el platillo no se ve como en la foto, ¡te lo cambiamos!<br>2. Si el platillo no es de tu agrado ¡te lo cambiamos!<br>Estas garantías están enfocadas en garantizar nuestro “sabor” que engloba:<br>- Términos de cocción,<br>- Temperatura del platillo, <br>- Protocolos de inocuidad <br>El encargado de asegurar que las garantías se cumplan utiliza un distintivo de “ líder de servicio” quien resolverá cualquier situación insatisfactoria de servicio que pudiera presentarse durante tu visita. Sujeto a cambio sin previo aviso.  CUIDA EL AGUA.</p>


			</div>



		</div>

		<div class="promo" id="clasicos2x1">


			<div class="textpromo">
				<h3>Clásicos 2 x 1</h3>
				<p>
					Operadora Vips, S. de R.L. de C.V., en Av. Revolución No. 1267 Piso 20 y 21 , Col. Alpes, Alc. Álvaro Obregón, C.P. 01040, CDMX; te ofrece la promoción: Clásicos Vips 2x1. Válido de lunes a domingo de 7 a.m. al cierre*, del 4 de marzo al 31 de diciembre de 2019 y/o hasta agotar existencias. Ordena un clásico Vips de los platillos participantes, en el horario indicado, y te damos otro igual o de menor precio sin costo. Platillos participantes servidos de 7hrs al cierre: Tacos dorados de pollo, Molletes tradicionales, Vips clásica con queso, Vips Club, Pepitos Vips de pollo, Enchiladas Suizas, Enchiladas de Mole, Cheesecake con fresas y crepa de cajeta; servidos de 13hrs al cierre: Sopa de Tortilla, Caldo Tlalpeño y Sopa Especial Vips. No aplica en platillos no mencionados. Se descontará el/ los platillo/s de menor precio al momento de pagar en caja. No incluyen bebida. Válido únicamente en consumo dentro del restaurante. Válido en todos los restaurantes Vips de la República Mexicana, excepto Querétaro, aeropuertos y comedores. No acumulable con otras promociones, cupones, descuentos, tarjeta de lealtad, servicio a domicilio ni venta en mostrador. Puede aplicar más de una promoción de Clásicos Vips al 2x1 en los platillos participantes por cliente y/o por ticket. Precios en MXN. Nuestros precios incluyen IVA. CUIDA EL AGUA.
				</p>
			</div>
			<a href="https://vips.com.mx/clasicos"><img src="img/adicionales/adicionalClasicos.png" class="benefimg"></a>


		</div>


		<div class="promo" id="promoDesayunos79" >
			<a href="desayunos-79"><img src="/img/2019/banners/Adicional-desayunos79-agosto-min.png" class="benefimg"></a>
			<div class="textpromo">

				<h3>Desayunos $79</h3>

				<p>
				Operadora Vips, S de R.L. de C.V., en Av. Revolución No. 1267 Piso 21, Col. Alpes, Álvaro Obregón, C.P. 01040, Ciudad de México, te ofrece: “Desayunos a $79 c/u”. Vigencia del 05 de agosto al 13 de octubre de 2019, o hasta agotar existencias, de lunes a domingo de 7:00 a 13:00 hrs. Todos los desayunos incluyen: un vaso de jugo (300 mL) o una orden de fruta (150 g), un platillo a elegir* y café americano (rellenable) o un té de sobre. *Platillo a elegir: Huevos albañil (2 pzas / 430 Cal) Revueltos con cuaresmeño y cebolla, servidos sobre salsa verde y acompañados de frijoles campesinos, Huevos revueltos con salsa pasilla (2 pzas / 460 Cal) Acompañados de frijoles refritos, Huevos estrellados con salsa norteña (2 pzas / 270 Cal) Acompañados de ensalada de nopales a la mexicana o Huevos revueltos en salsa pibil (2 pzas / 550 Cal) Servidos con plátano macho frito y frijoles negros. Válido en todos los restaurantes Vips de la República Mexicana, excepto Aeropuertos y comedores. No acumulable con otras promociones, cupones, descuentos ni tarjeta de lealtad. Válido sólo para consumo dentro de restaurante, no aplica en servicio a domicilio ni para llevar. Consulta vips.com.mx. Todos nuestros precios incluyen IVA. CUIDA EL AGUA.

				</p>

			</div>







		</div>





		<div class="promo" id="Comida-del-dia" >

			<div class="textpromo">
				<h3>Comida del día</h3>

				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revolución No. 1267 Pisos 20-21, Col. Alpes, Alc. Álvaro Obregón, C.P. 01040, Ciudad de México, te ofrece: Comida del día desde $79 c/u. Válido de 13 a 18 hrs, del 05 de agosto al 01 de septiembre de 2019 y/o hasta agotar existencias. La Comida del día incluye: una sopa (270 mL), una bebida (360 mL) y un platillo. Platillos participantes de Comida del día de $79 c/u: Crepas vegetarianas (2 pzas), Tortitas de papa con chorizo (3 pzas). Platillos de Comida del día de $119 c/u: Pechuga a la plancha (150 g), Puntas de pollo en salsa chipotle (120 g), Steak de carne molida de res (140 g), Estofado de cerdo (250 g). Platillos de comida del día de $139 c/u: Bistec de res a la parrilla (120 g), Milanesa de res (120 g), Filete de mojarra a la plancha (150 g), Filete de mojarra empanizado (150 g) **En caso de que tu platillo tenga guarnición podrás cambiarla sin costo adicional por: Arroz a la mexicana (100 g) o Arroz blanco (100 g) o Ensalada de nopales (80 g) o Ensalada de lechuga con jitomate (60 g) o Frijoles campesinos (60 g) o Frijoles refritos (70 g) o Puré de papa rústico (90 g). Consulta opciones participantes del menú ejecutivo en restaurante o en vips.com.mx/terminosycondiciones. El precio de la Comida del día varía dependiendo del platillo elegido. Agrega café y/o postre a tu Comida del día por $17 más c/u, consulta opciones en restaurante. Todos los precios incluyen IVA. CUIDA EL AGUA.
				</p>

			</div>
			<a href="comida-del-dia"><img src="/img/2019/banners/BannerAdicional_Comida-del-dia_Agosto-min.png" class="benefimg"></a>


		</div>



		<div class="promo" id="pollo-estilo-vips" >
			<a href="/pollo-vips"><img src="/img/2019/banners/Adicional_desktop_pollo.png" class="benefimg"></a>
			<div class="textpromo">
				<h3>Pollo estilo Vips</h3>

				<p>
					Operadora Vips, S. de R.L. de C.V., en Av. Revolución 1267  pisos 20-21, Col. Alpes. Alc. Álvaro Obregón, CDMX, CP 1040. Te ofrece: Pollo Estilo Vips (pollo horneado). Cuarto de pollo que incluye: dos piezas de pollo horneado, dos guarniciones a elegir: una salsa y pan o tortillas por $109 o medio pollo que incluye: cuatro piezas de pollo horneado, dos guarniciones a elegir, una salsa a elegir y pan o tortillas por $199. Vigencia del 20 de mayo al 31 de diciembre de 2019 y/o hasta agotar existencias, de 13 hrs a 18 hrs. Válido únicamente para consumo dentro de restaurante, no aplica en servicio a domicilio ni para llevar. Aplica con descuentos, cupones o TDL siempre y cuando se cumpla con condiciones específicas de los mismos. Válido en restaurantes Vips de CDMX y área metropolitana excepto comedores, consulta tiendas participantes <a href="https://vips.com.mx/tyc-pollo" style="color:#f29100">aquí</a>. Todos nuestros precios incluyen IVA. Precios en MXN. CUIDA EL AGUA.
				</p>

			</div>



		</div>

		<div class="promo" id="te-queremos-en-vips" >

			<div class="textpromo">
				<h3>Te queremos en Vips</h3>

				<p>
					Operadora Vips, S. de R.L. de C.V., en Av. Revolución No. 1267 Pisos 20 y 21, Col. Alpes, Álvaro Obregón, C.P. 01040, CDMX; te ofrece la promoción: Te queremos en Vips, 15 platillos* a $59 cada uno. Válido de lunes a domingo de 7 a.m. al cierre, del 22 de julio al 29 de septiembre del 2019 y/o hasta agotar existencias. *Platillos participantes: SERVIDOS DE 7:00 AL CIERRE: Molletes Vips (naturales), Bísquets con mermelada de fresa (orden completa), Chilaquiles Yucatecos, Pay helado de limón, Papa a los tres quesos, Tacos botaneros (12 piezas), Crepas de cajeta (orden completa), Tacos dorados de pollo (4 piezas), Tostadas de pollo (3 piezas), Chilaquiles Vips, Enchiladas de mole (3 piezas) y Enchiladas Suizas (3 piezas), SERVIDOS DE 13:00 AL CIERRE: Caldo tlalpeño Grande (500 Ml), Sopa de tortilla grande (500mL), Sopa especial Vips grande (500mL). No aplica en platillos no mencionados. Los platillos no incluyen bebida. Válido únicamente en consumo dentro del restaurante. Válido solo en tiendas ubicadas en Querétaro (Vips Citadina Constituyentes, Vips Carretera Querétaro, Vips Querétaro Constituyentes, Vips Querétaro II Del Parque, Vips Querétaro Centro, Vips Paseo Querétaro, Vips San Juan del Río y Vips Plaza de Toros Querétaro).<br>

					No acumulable con otras promociones, cupones, descuentos, tarjeta de lealtad, servicio a domicilio ni para llevar. Puede aplicar más de una promoción de Platillos a $59 cada uno por cliente y/o por ticket y/o por mesa. Precios en MXN. Nuestros precios incluyen IVA. CUIDA EL AGUA.
				</p>

			</div>
			<a href="/te-queremos-en-vips"><img src="/img/2019/banners/Banner-TQV-adicional-queretaro-min.png" class="benefimg"></a>


		</div>





		<div class="promo" id="promo6">
		<img src="img/2019/banners/tycadicional.png" class="benefimg openpoplogin" style="cursor:pointer;">


			<div class="textpromo">


				<h3>Tarjeta Lealtad Vips</h3>

				<p>

					Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Alc. Álvaro Obregón, CDMX, C.P. 01040, te ofrece descuento del 10% al50% sobre tu cuenta individual según tu número de visita a restaurantes Vips. Vigencia del 1° al 31 de mayo de 2019. Aplica en todos los restaurantes Vips de la República Mexicana excepto comedores. Válido en consumo mínimo individual de $119 en alimentos y bebidas dentro de restaurante. Para hacer válido el descuento deberás escanear el código de tu tarjeta de lealtad en caja. Limitado a un descuento por visita y por persona. El descuento puede variar según el número de visita (10%, 15%, 20%, 40% o 50%). Debe haber por lo menos 3 horas de diferencia entre cada visita para aplicar el descuento. En caso de fallo en sistema se aplicará el 10% a la cuenta individual del portador de la tarjeta. Los descuentos se reinician al completar el ciclo dentro de la vigencia. El descuento aplicable aparece automáticamente en sistema dependiendo del número de visitas registradas. No acumulable con otras promociones, cupones, descuentos. No aplica en consumos para llevar ni servicio a domicilio. Nuestros precios incluyen IVA. CUIDA EL AGUA.

				</p>

			</div>




		</div>





		<div class="promo" id="promo37">


			<div class="textpromo">

				<h3>Cumpleaños</h3>

				<p>

					Recibe una rebanada de cheesecake de fresas con tu consumo. Válido de 8 a 22 hrs. Vigencia del 3 de enero de 2018 hasta diciembre de 2019. Válido en todos los restaurantes Vips de la República Mexicana, excepto Veracruz Acuario, Veracruz Continental, Tuxtla Gutiérrez, Xalapa Centro, Xalapa Cristal, Aeropuertos y comedores.  No incluyen refresco. Nuestros precios incluyen IVA. Precios en MXN. Cuida el agua.


				</p>

			</div>
			<a href="cumpleanos"><img src="img/adicionales/AdicionalCumpleanos.png" class="benefimg"></a>



		</div>


		<div class="promo" id="Disney">
		<a href="menu-infantil-disney"><img src="/img/2019/banners/Adicional Toy-Story-min.png" class="benefimg"></a>
			<div class="textpromo">
				<h3>Menú infantil Disney</h3>
				<p>
					Operadora Vips, S. de R.L. de C.V., en Av. Revolución No. 1267 Pisos 20-21, Col. Alpes, Álvaro Obregón, C.P. 01040, Ciudad de México, te obsequia uno de los 12 spyrolocos coleccionables de Toy Story, en la compra de un Divertipack de desayunos, comidas o cenas del menú infantil.  Vigencia del 1 de julio al 30 de septiembre de 2019, o hasta agotar existencias.  También puedes adquirir tu spyroloco en la compra de una bebida, orden de fruta o sopa del menú infantil más $35. La entrega de spyroloco será de manera aleatoria, no podrá elegirse y estará sujeto a disponibilidad de producto en restaurante. Limitado a 150,000 spyrolocos a nivel nacional. En caso que la unidad no cuente con spyrolocos disponibles, podrá entregar un objeto de valor percibido similar. Los spyrolocos no se venden de manera individual.  Consulta productos y precios del Divertipack, y menú infantil en restaurante o en vips.com.mx. Válido en todos los Vips de la República Mexicana excepto comedores. Precios en MXN. Todos nuestros precios incluyen IVA. COME BIEN. Las imágenes son ilustrativas, la presentación del producto puede variar.
				</p>
			</div>

		</div>


		<div class="promo" id="cupon20Descuento">

			<div class="textpromo">
				<h3>20% de descuento en consumo mínimo de $139</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 20 y 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un descuento del 20% en tu cuenta de $139 o más. Vigencia del 20 de mayo al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja.  Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN.  COME BIEN.
				</p>
			</div>
			<a href="promociones/cupones"><img src="/img/2019/cupones/Cupon-20-desktop-min.png" class="benefimg"></a>

		</div>


		<div class="promo" id="cuponTrufa">
		<a href="promociones/cupones"><img src="/img/2019/cupones/Cupon-cheesecake_trufa-desktop-min.png" class="benefimg"></a>
			<div class="textpromo">
				<h3>Rebanada de cheesecake de trufa más café americano o descafeinado (no rellenable) por $79 MXN</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece una rebanada de cheesecake de trufa más café americano o descafeinado (no rellenable) por $79 MXN. Vigencia del 13 de junio al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Esta prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>

		</div>


		<div class="promo" id="cuponBisquets">
			<div class="textpromo">
				<h3>Media orden de Bísquets con mermelada + un Cappuccino Clásico a $65</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 20 y 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece Media orden de Bísquets con mermelada más un Cappuccino Clásico a $65. Vigencia del 20 de mayo al 31 de agosto de 2019 de 7 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja.  Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>
			<a href="promociones/cupones"><img src="/img/2019/cupones/Cupon-bisquets-desktop-min.png" class="benefimg"></a>
		</div>

		<div class="promo" id="cuponPoblana">
		<a href="promociones/cupones"><img src="/img/2019/cupones/Cupon-huevos-poblana-desktop-min.png" class="benefimg"></a>
			<div class="textpromo">
				<h3>Huevos a la poblana a $55</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Huevos a la poblana a $55 MXN. Incluye: Un jugo (300 ml) o una orden de fruta (150 g) y café americano o un té de sobre. Vigencia del 5 al 31 de agosto de 2019 de 7 a 13 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN.
				</p>
			</div>

		</div>

		<div class="promo" id="cuponCarne">
			<div class="textpromo">
				<h3>Carne asada a $99</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Carne asada a $99 MXN. Vigencia del 5 al 31 de agosto de 2019 de 13 a 23 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN.
				</p>
			</div>
			<a href="promociones/cupones"><img src="/img/2019/cupones/Cupon-carne_asada-desktop-min.png" class="benefimg"></a>
		</div>

		<div class="promo" id="cuponDivorciados">
		<a href="promociones/cupones"><img src="/img/2019/cupones/Cupon-huevos-divorciados-desktop-min.png" class="benefimg"></a>
			<div class="textpromo">
				<h3>Huevos divorciados con chilaquiles a $65</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, C.P. 01040, Ciudad de México, ofrece un platillo de Huevos divorciados con chilaquiles a $65 MXN. Incluye: Un jugo (300 ml) o una orden de fruta (150 g) y café americano o un té de sobre. Vigencia del 5 al 31 de agosto de 2019 de 7 a 13 hrs, todos los días de la semana. Menciona este cupón al ordenar y preséntalo en caja. Válido en todos los Vips de la República Mexicana excepto Vips Torres Bancomer y Aeropuertos. No aplica con otras promociones, cupones, descuentos, servicio a domicilio, venta mostrador ni Tarjeta de Lealtad. Este cupón es personal y válido por sólo una visita. Esto es una oferta promocional y no equivale a dinero en efectivo. Está prohibida su venta. Nuestros precios incluyen IVA. / Precios en MXN. No será válido en caso de presentar enmendaduras o tachaduras. COME BIEN.
				</p>
			</div>

		</div>







	</div>

	<script>

		var swiper = new Swiper('.swiper-container', {

			slidesPerView: 5,
			slidesPerGroup: 4,

			spaceBetween: 30,

			freeMode: true,

			pagination: {

				el: '.swiper-pagination',

				clickable: true,

			},



			navigation: {

				nextEl: '.swiper-button-next',

				prevEl: '.swiper-button-prev',

			},

		});

		function magic(...nums){
			let sum = 0;

			nums.filter(n => n%2 ==0).map(el => sum+= el);
			return sum;

		}

		console.log(magic(1,2,3,4,5,6));

		    if ( window.location.hash ) {
        var hash = window.location.hash,
            $hash = $(hash);

        $hash.removeAttr('id');
        $hash.before('<div id="'+hash.slice(1)+'" class="hashlink" style="width:100%; float:left; height:10px;"></div>');
        window.location.hash = hash;
    }


	$("#showparticipantes").on("click", function(){

		$("#participantes").slideToggle(300);
	});


	</script>






	<!-- Footer =============================-->

	<?php include 'footer.php';?>
