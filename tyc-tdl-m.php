<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /tyc-tdl');

  exit(0);

}

?>







<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





<style>

main {

    width: 100%;

    padding-top: 9vh;

}



#site-wrapper {

    position: relative;

    width: 100%;

    height: 100%;

    overflow-y: auto;

    padding-bottom: 9vh;

}

.aviso{

width:100%;

float:left;



}



.ayuda{float:left; width:100%; padding:5%;}

.ayuda h1{display:inline; font-size: 1.5em; color: #ED7124;font-family:'ArialMT', sans-serif; margin-left: 7%}
.ayuda h2{display:inline; font-size: 0.8em; color: #ED7124;font-family:'ArialMT', sans-serif;}

.ayuda p{  font-size: .8em; color: #333; font-family:'Arial', sans-serif;"}



table {
	text-align: center;
}
td {
	padding: 5px;
}
</style>


<div class="ayuda">




    <p style=" font-family: 'Moreno', sans-serif; font-size:1.2em"><b></b> <b>TARJETA DE LEALTAD</b></p>

<p>Operadora Vips, S. de R.L. de C.V., en Av. Revolución #1267 piso 21, Col. Alpes, Del. Álvaro Obregón, Ciudad de México, C.P. 01040, te ofrece del 10% al 50% de descuento sobre tu cuenta individual según el número de visita. Recibe el 10% en tu primera visita, 15% en la segunda, 20% en la tercera, 40% en la cuarta y 50% en la quinta. Vigencia del 01 al 31 de marzo de 2019. Para hacer válido el descuento deberás mostrar tu tarjeta con el código legible y tener un consumo mínimo individual de $115. No aplica con otras promociones, cupones, descuentos, ni para llevar o servicios a domicilio. Únicamente un descuento por visita y por persona, debe haber por lo menos 3 horas de diferencia entre cada visita. En caso de fallo en sistema se aplicará el 10% al portador de la tarjeta. El descuento aplicable aparece automáticamente en sistema dependiendo del número de visitas registradas. Aplica en tiendas participantes consúltalas consúltalas a continuación. No aplica en comedores. Nuestros precios incluyen IVA. CUIDA EL AGUA. </p>

<p>
Vips Lerma Toluca<br> Vips Zinacantepec<br> Vips Alfredo Del Mazo<br> Vips Toluca Universidad<br> Vips Toluca Grand Plaza<br> Vips Metepec Toluca<br> Vips Toluca Tolloacan<br> VIPS Gran Patio Toluca<br> Vips Toluca Centro<br> Vips Centro Sur Colon<br> Vips Tepic<br> Vips Pitillal Pto Vallarta<br> Vips Mariano Otero<br> Vips Guadalajara Arboledas<br> Vips Guadalajara Revolucion<br> Vips Palomar<br> VIPS Isla Puerto Vallarta<br> VIPS Parques Guadalajara<br> Vips Patria<br> Vips Guadalajara Vallarta<br> Vips Guadalajara Plaza Mexico<br> Vips Manzanillo<br> Vips Colima<br> Vips Morelia Centro<br> Vips Morelia La Huerta<br> Vips Morelia Camelinas<br> Vips Guadalajara Plaza Del Sol<br> Vips Sentura  Zamora<br> Vips Leon Express<br> Vips Clouthier<br> Vips Torres Landa<br> Vips Salamanca<br> Vips Irapuato<br> Vips Aguascalientes Plaza Galerias<br> Vips Nicolas Zapata<br> Vips San Luis Potosi<br> Vips Gonzalez Ortega<br> Vips Zacatecas<br> Vips Carretera 57 Sur<br> Vips Plaza De Toros<br> Vips Tulancingo<br> Vips San Juan Del Rio<br> Vips Pachuca Plaza Galerias<br> Vips Queretaro Centro<br> Vips Pachuca<br> Vips Queretaro Ii Del Parque<br> Vips Queretaro Constituyentes<br> Vips El Sauz Celaya<br> Vips Celaya<br> VIPS Carretera Queretaro <br> VIPS Citadina Constituyentes<br> Vips Paseo Querétaro<br> Vips Lincoln<br> Vips Monterrey Centro<br> Vips Gonzalitos<br> Vips Monterrey Del Valle<br> Vips Chihuahua<br> Vips Gomez Morin<br> VIPS MONTERREY PASEO LA FE<br> Vips Ciudad Juarez<br> Vips Cumbres Elite<br> Vips Paseo de los Leones <br> Vips La Silla<br> Vips San Nicolas De Los Garza<br> Vips Monterrey Las Torres<br> Vips Los Parques Saltillo<br> Vips Saltillo<br> Vips Cuatro Caminos<br> Vips Reynosa<br> Vips Las Adelitas<br> Vips Hidalgo Tampico<br> Vips Gomez Morin Montrrey<br> Vips Monterrey Constitucion<br> Vips Miguel Aleman<br> Vips Padre Mier<br> Vips Monterrey República Mexicana<br> Vips Ensenada<br> Vips Hermosillo Ii<br> Vips Mexicali<br> Vips Macroplaza Tijuana<br> Vips Tijuana<br> Vips Ciudad Obregon<br> Vips Tres Rios<br> Vips Cd Durango<br> Aeropuerto Tijuana Alfa<br> Vips Cola De Ballena<br> Vips Cabo San Lucas<br> Vips Cumbres<br> Vips Macroplaza Merida<br> Vips Playa Del Carmen<br> Vips Chetumal<br> Vips Cd Del Carmen<br> Vips Campeche<br> Vips Merida Las Americas<br> Vips Montejo<br> Vips Cancun Ii Tulum<br> Vips Cancun<br> VIPS Up Town Merida<br> Vips Cardenas<br> Vips Coatzacoalcos Centro<br> Vips Periferico Guayabal<br> Vips Vhsa La Venta<br> Vips Minatitlan<br> Vips Coatzacoalcos Univ<br> Vips Villahermosa C.D.<br> Vips Villahermosa Ruiz Cortinez<br> Vips Villahermosa Centro<br> Vips Villahermosa 2000<br> Vips el Dorado Coatzacoalcos<br> Vips Rio Mayo<br> Vips Chilpancingo Gro<br> Vips Acapulco Diamante<br> Vips Jiutepec<br> Vips Acapulco Diana<br> Vips Cuernavaca La Joya<br> Vips Acapulco Costa Azul<br> Vips Acapulco Gran Plaza<br> Vips Cuernavaca Centro<br> Vips Acapulco Condesa<br> Vips Tapachula<br> Veracruz Acuario<br> Veracruz Continental<br> Vips Tuxtepec<br> Vips Poza Rica<br> Vips Cordoba<br> Vips Puebla Centro<br> Vips Puebla Mercado Victoria<br> Vips Puebla Las Animas<br> Vips Outlet Puebla<br> Vips Tlaxcala<br> Vips Forjadores<br> Galerias Tlaxcala<br> Tuxtla Gutiérrez<br> Xalapa Centro <br> Xalapa Cristal<br> Vips Angelopolis<br> Vips Tehuacan<br> Vips Puebla Plaza Dorada 2<br> Vips Puebla La Noria<br> Vips Puebla Capu<br> Vips Puebla Juarez<br> Vips Puebla Plaza Dorada 1<br> Vips Oaxaca Centro<br> Vips Cuautla Reforma<br> VIPS Parque Puebla <br> Vips Oriente Tuxtla<br> 

</p>











	</div>













  <!-- Footer =============================-->

  <?php include('footerm.php');?>
