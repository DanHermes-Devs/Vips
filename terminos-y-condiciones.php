<?php
 header('Location: terminosycondiciones');
include 'header.php';

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();

if ($detect->isMobile()) {

    header('Location: terminos-y-condiciones-m');

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

	.benef4{background-image:url(img/beneficios/Cupones_Cumpleanos.png);}

	.benef6{background-image:url(img/beneficios/CuponesRedondos-TarjetaWow.png);}
	.benef37{background-image:url(img/beneficios/Cupones_Cumpleanos.png);}
	.benef70{background-image:url(img/adicionales/Legal_Redondo_Cafecito.png);}
	.promoenchiladas{background-image:url(img/adicionales/RedondoEnchiladas.png);}
	.promoninos{background-image:url(img/adicionales/RedondoViernesNinosNoPagan.png);}
	.promoDesayunos79{background-image:url(img/adicionales/RedondoDesayunos79.png);}
	.promoCuaresma{background-image:url(img/adicionales/CuaresmaRedondo.png);}
	.promoComidadia{background-image:url(img/adicionales/RedondoComidaDelDia.png);}
	.promoClasicos{background-image:url(img/adicionales/RedondoClasicos.png);}
	.promoDisney{background-image:url(img/adicionales/RedondoDivertipack.png);}
	.promochivas{background-image:url(img/adicionales/RedondoChivas.png);}

	.cuponBisquets{background-image:url(img/adicionales/2019/bisquetsredondo.png);}
	.cuponArrachera{background-image:url(img/adicionales/2019/arracheraredondo.png);}
	.cuponMolletes{background-image:url(img/adicionales/2019/molletesredondo.png);}
	.cuponChilaquiles{background-image:url(img/adicionales/2019/chilaquilesredondo.png);}
	.cuponHuevos{background-image:url(img/adicionales/2019/huevosredondo.png);}
	.cuponSopa{background-image:url(img/adicionales/2019/soparedondo.png);}
	.cuponSandwich{background-image:url(img/adicionales/2019/sandwichredondo.png);}
	.cuponMixto{background-image:url(img/adicionales/2019/mixtoredondo.png);}


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

	<div class="swiper-container">

		<div class="swiper-wrapper">



			<div class="swiper-slide"><a class="scrollto" href="#clasicos2x1">

				<div class="thumbbenef promoClasicos"></div>

				<p class="titlepromo">Cl??sicos 2x1</p></a>

			</div>


			<div class="swiper-slide"><a class="scrollto" href="#promoDesayunos79">

				<div class="thumbbenef promoDesayunos79"></div>

				<p class="titlepromo">Desayunos $79</p></a>

			</div>


			<div class="swiper-slide"><a class="scrollto" href="#Comida-del-dia">

				<div class="thumbbenef promoComidadia"></div>

				<p class="titlepromo">Comida del d??a</p></a>

			</div>



			<div class="swiper-slide"><a class="scrollto" href="#promo6">

				<div class="thumbbenef benef6"></div>

				<p class="titlepromo">Tarjeta de Lealtad</p></a>

			</div>




			<div class="swiper-slide"><a class="scrollto" href="#promo37">

				<div class="thumbbenef benef37"></div>

				<p class="titlepromo">Cumplea??os</p></a>

			</div>


			<div class="swiper-slide"><a class="scrollto" href="#Disney">

				<div class="thumbbenef promoDisney"></div>

				<p class="titlepromo">Men?? infantil Disney</p></a>

			</div>
			<!--Cupones-->

			<!--Fin Cupones-->



		</div>

		<!-- Add Pagination -->

		<div class="swiper-pagination"></div>

		<!-- Add Arrows -->

		<div class="swiper-button-next"></div>

		<div class="swiper-button-prev"></div>

	</div>







	<div class="resptext j">

		<h2>T??rminos y condiciones</h2>




		

		<div class="promo" id="clasicos2x1">
		

			<div class="textpromo">
				<h3>Cl??sicos 2 x 1</h3>
				<p>
					Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n No. 1267 Piso 20 y 21 , Col. Alpes, Alc. ??lvaro Obreg??n, C.P. 01040, CDMX; te ofrece la promoci??n: Cl??sicos Vips 2x1. V??lido de lunes a domingo de 7 a.m. al cierre, del 4 de marzo al 26 de mayo del 2019 y/o hasta agotar existencias. Ordena un cl??sico Vips de los platillos participantes y te damos otro igual o de menor precio sin costo. Platillos participantes:  Sopa de Tortilla, Caldo Tlalpe??o, Sopa Especial Vips, Tacos dorados de pollo, Molletes tradicionales, Vips cl??sica con queso, Vips Club, Pepitos Vips de pollo, Enchiladas Suizas, Enchiladas de Mole, Cheesecake con fresas y crepa de cajeta; No aplica en platillos no mencionados. Se descontar?? al momento de pagar en caja el o los platillos de menor precio del men?? vigente. Los platillos no incluyen bebida. V??lido ??nicamente en consumo dentro del restaurante. V??lido en todos los restaurantes Vips de la Rep??blica Mexicana, excepto aeropuertos y comedores. No acumulable con otras promociones, cupones, descuentos, tarjeta de lealtad, servicio a domicilio ni venta en mostrador. Puede aplicar m??s de una promoci??n de Cl??sicos Vips al 2x1 en los platillos participantes por cliente y/o por ticket. Consulta t??rminos y condiciones en: vips.com.mx. Precios en MXN. Nuestros precios incluyen IVA. CUIDA EL AGUA. 
				</p>
			</div>
			<a href="https://vips.com.mx/clasicos"><img src="img/adicionales/adicionalClasicos.png" class="benefimg"></a>
			
		</div>


		<div class="promo" id="promoDesayunos79" >
		<a href="desayunos-79"><img src="/img/2019/banners/Desayunos_79 _Carrusel.png" class="benefimg"></a>
			<div class="textpromo">

				<h3>Desayunos $79</h3>

				<p>
					Operadora Vips, S de R.L. de C.V., en Av. Revoluci??n No. 1267 Piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P. 01040, Ciudad de M??xico, te ofrece la promoci??n ???Desayunos a $79??? c/u. Vigencia del 29 de abril al 04 de agosto de 2019 o hasta agotar existencias, de lunes a domingo de 7 a 13 hrs. Platillo a elegir: Huevos placeros (2 pzas) revueltos con chicharr??n sobre salsa chipotle, acompa??ados de frijoles refritos, Huevos arrieros (2 pzas) ba??ados con salsa verde asada y servidos con papas bravas, Rollo de huevo campesino relleno de queso panela, en salsa de frijol, acompa??ados de papa hash brown o Huevos con queso y rajas (2 pzas) revueltos con rajas y queso panela sobre salsa verde, acompa??ados de frijoles refritos. V??lido en todos los restaurantes Vips de la Rep??blica Mexicana, excepto aeropuertos y comedores. Promoci??n v??lida ??nicamente en restaurante, no aplica servicio a domicilio ni para llevar. No acumulable con otras promociones, cupones, descuentos ni tarjeta de lealtad. Consulta t??rminos y condiciones en: vips.com.mx. Todos nuestros precios incluyen IVA. CUIDA EL AGUA

				</p>

			</div>
			
			
			
			



		</div>





		<div class="promo" id="Comida-del-dia" >
		
			<div class="textpromo">
				<h3>Comida del d??a</h3>

				<p>
					Incluyen una sopa del d??a (270 mL) y una bebida (360 mL refresco o naranjada o limonada o agua de sabor) No incluye refrescos en lata. Consulta precios en el men?? vigente. V??lido 13 hrs al cierre. Del 29 de abril al 04 de agosto de 2019. Nuestros precios incluyen IVA/ Precios en MXN. CUIDA DEL AGUA

				</p>

			</div>
			<a href="comida-del-dia"><img src="/img/2019/banners/BannerComidaDelDia.png" class="benefimg"></a>

		</div>
		

		
		<div class="promo" id="pollo-estilo-vips" >
			<a href="comida-del-dia"><img src="/img/2019/banners/Adicional_desktop_pollo.png" class="benefimg"></a>
			<div class="textpromo">
				<h3>Pollo estilo Vips</h3>

				<p>
					Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n 1267  pisos 20-21, Col. Alpes. Alc. ??lvaro Obreg??n, CDMX, CP 1040. Te ofrece: Pollo Estilo Vips (pollo horneado). Cuarto de pollo que incluye: dos piezas de pollo horneado, dos guarniciones a elegir: una salsa y pan o tortillas por $109 o medio pollo que incluye: cuatro piezas de pollo horneado, dos guarniciones a elegir, una salsa a elegir y pan o tortillas por $199. Vigencia del 20 de mayo al 31 de diciembre de 2019 y/o hasta agotar existencias, de 13 hrs a 18 hrs. V??lido ??nicamente para consumo dentro de restaurante, no aplica en servicio a domicilio ni para llevar. Aplica con descuentos, cupones o TDL siempre y cuando se cumpla con condiciones espec??ficas de los mismos. V??lido en restaurantes Vips de CDMX y ??rea metropolitana excepto comedores, consulta tiendas en <a href="https://vips.com.mx/tyc-pollo">https://vips.com.mx/tyc-pollo</a>. Todos nuestros precios incluyen IVA. Precios en MXN. CUIDA EL AGUA.
				</p>

			</div>
			

		</div>

		<div class="promo" id="nuevos-chilaquiles" >
			
			<div class="textpromo">
				<h3>Nuevos Chilaquiles</h3>

				<p>
					Chilaquiles Norte??os<br>
					Chilaquiles Toluque??os<br>
					Consulta precios en el men?? vigente. V??lido de 07 a 13 hrs. Del 29 de abril al 02 junio de 2019. Nuestros precios incluyen IVA/ Precios en MXN<br><br>


					Chilaquiles Vips<br>
					Chilaquiles Suizos<br>
					Chilaquiles Yucatecos<br>
					Consulta precios en el men?? vigente. V??lido de 07 hr al cierre. Del 29 de abril al 02 junio de 2019. Nuestros precios incluyen IVA/ Precios en MXN


				</p>

			</div>
			<a href="comida-del-dia"><img src="/img/2019/banners/Banner-Chilaquiles.png" class="benefimg"></a>

		</div>




		<div class="promo" id="promo6">
		<img src="img/2019/banners/tycadicional.png" class="benefimg">


			<div class="textpromo">
			

				<h3>Tarjeta Lealtad Vips</h3>

				<p>

					Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Alc. ??lvaro Obreg??n, CDMX, C.P. 01040, te ofrece descuento del 10% al50% sobre tu cuenta individual seg??n tu n??mero de visita a restaurantes Vips. Vigencia del 1?? al 31 de mayo de 2019. Aplica en todos los restaurantes Vips de la Rep??blica Mexicana excepto comedores. V??lido en consumo m??nimo individual de $119 en alimentos y bebidas dentro de restaurante. Para hacer v??lido el descuento deber??s escanear el c??digo de tu tarjeta de lealtad en caja. Limitado a un descuento por visita y por persona. El descuento puede variar seg??n el n??mero de visita (10%, 15%, 20%, 40% o 50%). Debe haber por lo menos 3 horas de diferencia entre cada visita para aplicar el descuento. En caso de fallo en sistema se aplicar?? el 10% a la cuenta individual del portador de la tarjeta. Los descuentos se reinician al completar el ciclo dentro de la vigencia. El descuento aplicable aparece autom??ticamente en sistema dependiendo del n??mero de visitas registradas. No acumulable con otras promociones, cupones, descuentos. No aplica en consumos para llevar ni servicio a domicilio. Nuestros precios incluyen IVA. CUIDA EL AGUA.

				</p>

			</div>
			



		</div>





		<div class="promo" id="promo37">
		

			<div class="textpromo">

				<h3>Cumplea??os</h3>

				<p>

					Recibe una rebanada de cheesecake de fresas con tu consumo. V??lido de 8 a 22 hrs. Vigencia del 3 de enero de 2018 hasta diciembre de 2019. V??lido en todos los restaurantes Vips de la Rep??blica Mexicana, excepto Veracruz Acuario, Veracruz Continental, Tuxtla Guti??rrez, Xalapa Centro, Xalapa Cristal, Aeropuertos y comedores.  No incluyen refresco. Nuestros precios incluyen IVA. Precios en MXN. Cuida el agua.


				</p>

			</div>
			<a href="cumpleanos"><img src="img/adicionales/Adicionales_-Cumpleanos.png" class="benefimg"></a>

			

		</div>


		<div class="promo" id="Disney">
		<a href="menu-infantil-disney"><img src="img/adicionales/AdicionalDisney.png" class="benefimg"></a>
			<div class="textpromo">
				<h3>Men?? infantil Disney</h3>
				<p>
					Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n No. 1267 Pisos 20-21, Col. Alpes, ??lvaro Obreg??n, C.P. 01040, Ciudad de M??xico, te obsequia uno de los 12 spyrolocos coleccionables de Disney Animation Studios, en la compra de un Divertipack de desayunos, comidas o cenas del men?? infantil. ??Vigencia del 4 de marzo al 30 de junio de 2019, o hasta agotar existencias. ??Tambi??n puedes adquirir tu spyroloco en la compra de una bebida, orden de fruta o sopa del men?? infantil m??s $35. La entrega de spyroloco ser?? de manera aleatoria, no podr?? elegirse y estar?? sujeto a disponibilidad de producto en restaurante. Limitado a??310,000??spyrolocos a nivel nacional. En caso que la unidad no cuente con spyrolocos disponibles, podr?? entregar un objeto de valor percibido similar. Los spyrolocos no se venden de manera individual. ??Consulta productos y precios del Divertipack, y men?? infantil en restaurante o en??vips.com.mx. V??lido en todos los Vips de la Rep??blica Mexicana excepto comedores. Precios en MXN. Todos nuestros precios incluyen IVA. COME BIEN. Las im??genes son ilustrativas, la presentaci??n del producto puede variar.
				</p>
			</div>
			
		</div>
		
		<div class="promo" id="nochesAntojo" >
			
			<div class="textpromo">
				<h3>Noches de antojo</h3>
				<p>
					Operadora Vips S de RL de CV en Av. Revoluci??n No. 1267 Piso 20 y 21 , Col. Alpes,  ??lvaro Obreg??n, CP 01040, CDMX; te ofrece la promoci??n: Noches de Antojo, platillos a $65 cada uno. V??lido de lunes a domingo de 18 a 23hrs, del 9 de enero al 2 de junio del 2019 y/o hasta agotar existencias. Platillos participantes: Pozole, Tacos ahogados de pollo, familia de hamburguesas: BBQ Tocino, Champions, Hawaiana, Habanero crunch, Vips cl??sica con queso, Mexicana; familia de entradas: Alitas (salsa: BBQ picante, hot wings o mixtas), Boneless (salsa: BBQ picante, hot wings o mixtas), Papas a la francesa con chilli, Papas a los tres quesos, Papa chilli, Tacos botaneros, Queso fundido, Plato mixto; familia de s??ndwiches: Vips Club, S??ndwich California y Pepitos Vips de Pollo; y postres: Cheesecake de fresa, Cheesecake de guayaba, Cheesecake de trufa, pay helado de lim??n y crepas de cajeta, por solo $65 cada uno. No aplica en platillos no mencionados. Los platillos no incluyen bebida. V??lido en consumo dentro de restaurante. No acumulable con otras promociones, cupones, descuentos, tarjeta de lealtad, servicio a domicilio ni venta en mostrador. Aplica m??s de un platillo de antojo en el mismo ticket. Consulta t??rminos y condiciones en: vips.com.mx. Precios en MX. Nuestros precios incluyen IVA. CUIDA EL AGUA.
				</p>
			</div>
			<a href="https://vips.com.mx/noches-de-antojo"><img src="/img/adicionales/AdicionalNochesDeAntojo2.png" class="benefimg"></a>
			
			
		</div>





		<div class="promo" id="cuponHuevos">


		<a href="promociones/cupones"><img src="/img/2019/cupones/huevos.jpg" class="benefimg"></a>
			<div class="textpromo">
				<h3>Desayuno Huevos Suizos $99</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico,??ofrece un desayuno de Huevos Suizos a $99 MXN. El desayuno incluye no incluye: Un jugo (300 ml) o fruta (150 g) y caf?? americano (Rellenable) o un t?? (de sobre). Vigencia del 18 de abril al 31 de julio de 2019 de??7 a 14  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>

		</div>


		<div class="promo" id="cuponBoneless">
		

			<div class="textpromo">
				<h3>Boneless $89</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico,??ofrece un platilllo de Boneless Mixtas a $89 MXN. Vigencia del 18 de abril al 31 de julio de 2019 de??13 a 23  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>
			<a href="promociones/cupones"><img src="/img/2019/cupones/boneless.jpg" class="benefimg"></a>
		</div>



		<div class="promo" id="cuponBisquets">

		<a href="promociones/cupones"><img src="/img/2019/cupones/bisquets.jpg" class="benefimg"></a>
			<div class="textpromo">
				<h3>Media orden de Bisquets + capuccino clasico $59</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico,??ofrece media orden de bisquets con mermelada + un capuccino. Vigencia del 18 de abril al 31 de julio de 2019 de??7 a 23  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>

		</div>




		<div class="promo" id="cuponHawaiana">

			<div class="textpromo">
				<h3>Hamburguesa Hawaiana $119</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico,??ofrece una hamburguesa hawaiana a $119 MXN. Vigencia del 18 de abril al 31 de julio de 2019 de??13 a 23  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>
			<a href="promociones/cupones"><img src="/img/2019/cupones/hawaiana.jpg" class="benefimg"></a>




		</div>




		<div class="promo" id="cuponArrachera">

		<a href="promociones/cupones"><img src="/img/2019/cupones/arrachera.jpg" class="benefimg"></a>


			<div class="textpromo">
				<h3>Arrachera Norte??a $159</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico,??ofrece un platillo de Arrachera Norte??a a $159 MXN. Vigencia del 18 de abril al 31 de julio de 2019 de??13 a 23  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>

		</div>

		<div class="promo" id="cuponMarinerito">
			<div class="textpromo">
				<h3>Desayuno Marinerito $49</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico,??ofrece desayuno Marinerito a $49 (paquete mini men?? vips). Vigencia del 18 de abril al 31 de julio de 2019 de??7 a 14  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>
			<a href="promociones/cupones"><img src="/img/2019/cupones/marinerito.jpg" class="benefimg"></a>

		</div>

		<div class="promo" id="cuponHamburguesita">
		<a href="promociones/cupones"><img src="/img/2019/cupones/hamburguesita.jpg" class="benefimg"></a>
			<div class="textpromo">
				<h3>Hamburguesita con Queso $69</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico, ofrece comida de hamburguesita con queso a $69 (paquete del mini men?? vips). Vigencia del 18 de abril al 31 de julio de 2019 de??13 a 23  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>

		</div>

		<div class="promo" id="cuponMiniEnchiladas">
			<div class="textpromo">
				<h3>Mini enchiladas Suizas $59</h3>
				<p>
				Operadora Vips, S. de R.L. de C.V., en Av. Revoluci??n #1267 piso 21, Col. Alpes, Del. ??lvaro Obreg??n, C.P.??01040, Ciudad de M??xico, ofrece comida de Mini enchiladas suizas a $59 (paquete del mini men?? vips). Vigencia del 18 de abril al 31 de julio de 2019 de??7 a 23  hrs, todos los d??as de la semana.??Menciona este cup??n al ordenar y pres??ntalo en caja. V??lido en todos los Vips??de la Rep??blica Mexicana excepto Vips Torres??Bancomer??Vips Aeropuerto AICMX, Vips Aeropuerto Tijuana y Vips Aeropuerto la Paz. No aplica con otras promociones, cupones, descuentos, servicio a domicilio ni Tarjeta de Lealtad. Este cup??n es personal y v??lido por s??lo una visita.??Esto es una??oferta promocional y no??equivale??a dinero en efectivo. Est?? prohibida su venta.??Nuestros precios incluyen IVA. / Precios en MXN. COME BIEN.
				</p>
			</div>
			<a href="promociones/cupones"><img src="/img/2019/cupones/enchiladas.jpg" class="benefimg"></a>

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
