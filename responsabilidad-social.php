<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: /responsabilidad-social-m');

    exit(0);

}

?>

<div class="main">



<style>

.responsabilidadfooter{
	color: #fff !important;
	font-weight: bold;
	font-size: 14px;lor: #ff0025!important;

}

.resptext {

    width: 100%;

    float: left;

    padding: 0 5% 5% 5%;

    font-family: "Program", sans-serif;

}



.resptext h2{color:#f29100; font-size:2em; margin-top:-5%;  font-family: "Program", sans-serif;}



.resp2img{width:20%; float:left;}

.text-right{width:80%; float:left;}

.resptext p{font-size: .95em;}

</style>



	

	<img style="width:100%;     float: left;" src="img/respbanner.jpg">

	<div class="resptext">

	<h2>Responsabilidad social</h2>

	<p>

	<h3>1) Energía limpia Libres</h3> <br />

Eólica: Queremos generar conciencia ante cualquier problemática con el medio ambiente, por eso cada día nos innovamos y nos regeneramos para formar parte del cambio. Actualmente tenemos alrededor de 59 Tiendas que reciben energía renovable, dejando de emitir 2,294 toneladas de CO2. Con el paso del tiempo esta cantidad ha acendido en 2018 a un 40%. La cogeneración eficiente se estiman: 179 Tiendas en proceso de conexión en el último cuarto del 2018.<br />

<br />

Al cierre del año 2018 tenderemos conectadas a fuentes de energía limpia en 238 Tiendas, y con mucho empeño al cierre del 2019 se espera tener conectadas 268 Tiendas.<br />

<br />

<h3>2) Alumbrado<br /></h3>

<br />

Porqué la luz no es solo para consumir; sino para gener cambios. El primer paso del cambio, ese primer paso. Al día de hoy contamos en Vips con el 100% de alumbrado con tecnología LED lo cual equivale a disminuir 633, 607 Kwh/mes y dejar de emitir 3,467 Toneladas de CO2 a la atmósfera al año.<br />

<br />

<h3>3) Calentadores de agua<br /></h3>

Cuando pensamos todos en grande, grandes cambios generamos <br />

En Vips contamos con el 100% de Tiendas con calentadores de alta eficiencia de consumo de gas, lo cual equivale a disminuir 260,544 lts/mes y dejar de emitir 8,136 Toneladas de CO2 a la atmósfera.<br />

<br />

<h3>4) Aceite usado<br /></h3>

Creemos que lo que puedes cambiar hoy, puede salvar el día de mañana. En Vips nos preocupamos más allá y pensamos a futuro todo lo que podría convertirse en un peligro para nuestro planeta. Por eso y más motivos recolectamos el 100% del aceite usado (224,625 litros al año) y trampas de grasa, evitando contaminar 224.6 millones de litros de agua equivalente al uso de 90 albercas olímpicas.<br />

Así mismo nos comprometimos al uso de aceite 0% Trans para una mejor calidad de salud.<br />

<br />

<h3>5) Sanitizantes<br /></h3>

Para nosotros es más importante tu bienestar que cualquier cosa, estamos enfocados en el uso de sanitizantes 100% biodegradables; sin dañar otras formas de vida, debe ser barato, y no ser corrosivo<br />

<br />

<h3>6) Flor Paz<br /></h3>

Nuestro trato con el medio ambiente, no solo creemos que es hacia fuera; sino tambien hacia nosotros mismos, somos co-creadores de este ecosistema, y si estamos bien por dentro podremos estar bien por fuera. Por eso promovemos ese bienestar con nuestro Té Orgánico, 100% mexicano y producción autosustentable<br />

<br />

<h3>7) Popotes<br /></h3>

Nos preocupa realmente la problemática que llega día con día. Por eso llegamos hacia la Eliminación total de popotes en tiendas para ahorro en plástico protección a nuestra biodiversidad Sólo recuerda decir: Sin popote está bien<br />



<br /> </p>



<img src="img/resp2.jpg" class="resp2img" style="display:none;">



<div class="text-right" style="display:none;">

<p>

Proin nibh nulla, convallis congue orci ut, condimentum efficitur erat. Nunc maximus sit amet turpis nec viverra. Quisque imperdiet fermentum bibendum. Cras nec posuere diam. Sed ut rutrum purus. Nam ultricies molestie nibh, et mollis augue consequat eget. Vivamus sed ornare nulla. In sagittis ut ipsum non pretium. In vulputate nisl vestibulum tristique varius. Proin at elit et elit pellentesque malesuada finibus eu metus. Etiam non dignissim magna. Pellentesque lacinia velit sit amet pharetra viverra. Nullam auctor leo odio, ut gravida ligula convallis non. Proin vulputate, nisl non dignissim rutrum, libero enim blandit mi, non vestibulum massa neque nec nulla. Phasellus convallis cursus nisi, ut vestibulum ligula tempus nec. Nam tempus est justo, in ullamcorper lorem lobortis sit amet.</p>

<p>

Morbi rutrum, metus sed facilisis mattis, libero eros faucibus nibh, ut cursus nulla neque in libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec mattis ut enim et commodo. Mauris tristique convallis lobortis. Nulla consequat augue urna, vel rhoncus sem maximus id. Pellentesque ullamcorper justo a lobortis tincidunt. Suspendisse dapibus felis vel odio pharetra mollis. Sed et justo fringilla, pulvinar orci non, consequat nulla. Sed ac accumsan tortor. In sed eleifend diam. Cras viverra dictum metus vitae gravida. Integer et ipsum egestas diam tincidunt sodales id ac leo. Sed et finibus lacus. Ut id iaculis sem. Mauris eros augue, varius sed blandit eget, bibendum eu neque. Fusce congue vitae velit vel porttitor.

	</p>

	

	

</div>



</div>









<!-- Footer =============================-->

<?php include('footer.php');?>

