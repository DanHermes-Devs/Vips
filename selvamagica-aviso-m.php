<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /selvamagica-aviso');

  exit(0);

}

?>







<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





<style>
main {
    width: 100%;
    padding-top: 5vh;
}
#site-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    overflow-y: auto;
    padding-bottom: 9vh;
}
.banner{width:100%;}

.b2 {
	margin-top: -6px;
}
.imgcont {
	float: left;
	margin: 0;
	margin-top: -7px;
	display: inline-block;
	width: 100%;
	position: relative;
}
.abcont {
	width: 100%;
	position: absolute;
	top: 0;
	padding: 5% 0;
	text-align: center;
}
.logoselva {
	width: 40%;
}
.abcont h3 {
	color: #feea83;
	padding: 10% 0;
}

.abcont h3 span {
	padding: 10px;
	width: 100%;
	display: inline-block;
	font-size: 22px;
}

.btnjugar {
	width: 55%;
}

.legales {
	position: relative;
	width: 100%;
	color: red;
	color: #feea83;
	margin-top: 0;
	margin-left: 0;
	float: left;
}
.legales li {
	width: 30%;
	display: inline-block;
	margin: 0;
	float: left;
	padding: 0;
	font-size: 12px;
	text-align: center;
}
.lines {
	border-left: 1px solid #feea83;
	width: 40% !important;
	border-right: 1px solid #feea83;
}


.menuicon {
	width: 33px;
	height: 33px;
	position: fixed;
	background: url(/img/2019/juego/menu.png);
	background-size: 100%;
	margin-top: 10px;
	right: 10px;
	z-index: 3;
	cursor:pointer;
}
.menujuego {
	position: fixed;
	background: rgba(0,0,0,.85);
	padding: 5%;
	z-index: 4;
	text-align:center;
	width:100%;
	height:100%;
	display:none;
}
.menuiconclose {
	width: 30px;
	height: 30px;
	background: url(/img/close.png);
	background-size: 100%;
	right: 10px;
	position: fixed;
}
.logos {
	width: 100%;
	float: left;
	padding: 30px 0;
}
.logos li {
	width: 33.3%;
	float: left;
	padding: 5% 7%;
	text-align: center;
}

.logos li img {
	width: 100%;
	
}
.navjuego {
	width: 100%;
	float: left;
	color: #fff;
}
.navjuego li {
	padding: 12.5px;
	font-size: 20px;
	font-weight: 500;
}
.logoxcaret {
	padding-top: 20%;
}

.txtlogin {
	/* color: color: #feea83; */
	color: #feea83;
	font-size: 20px;
	float: left;
	width: 100%;
	margin: 5% 0;
	/* float: left; */
	/* width: 100%; */
	margin-top: -5%;
	font-weight: bold;
}

.txtlogin a {
	font-weight:500;
}

.tablero {
	background: url(/img/2019/juego/pleca_madera.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	color: #7f4f1c;
	font-size: 12px;
	padding: 15% 20% 25% 20%;
	margin-top: -15%;
}
.tablero h4 {
	font-size: 18px;
	padding-top: 30%;
	margin: 0;
}

.tablero p {
	text-align:left;
}
.tablero p span {
	font-weight: bold;
	font-size: 14px;
	3: ;
}
.botones {
	width: 100%;
	padding: 0 10%;
	/* margin-top: -10%; */
	float: left;
	text-align: center;
}
.btnjugar {
	width: 40%;
	float: none;
	padding: 0;
	margin-bottom: 5%;
}

.textotyc {
	max-height: 50vh;
	display: inline-block;
	overflow: auto;
	margin: 5% 0;
	color: #feea83;
	font-size: 13px;
	text-align: justify;
	padding: 0 10%;
}
</style>
<div class="main">
<?php include('headerjuego.php'); ?>
<img class="banner" src="/img/2019/juego/banner1.png">
<div class="imgcont">
	<img class="banner b3" src="/img/2019/juego/Pantallas_fondo.png">
	
	<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
				<div class="textotyc">
<div class="resptext">

<p style=" font-family: 'Program', sans-serif; font-size:1.2em"><b googl="true">AVISO DE PRIVACIDAD INTEGRAL WEB VIPS<sup>??</sup></b></p>

	<p><b>I. IDENTIDAD Y DOMICILIO DEL RESPONSABLE </b></p>

	<p>El Responsable del tratamiento y protecci??n de sus datos personales es Operadora Vips, S. de R.L. de C.V. (VIPS<sup>??</sup>) con domicilio en Avenida Revoluci??n n??mero 1267, Torre Corporativa, Piso 21, Colonia Los Alpes, Delegaci??n ??lvaro Obreg??n, C??digo Postal 01040, en la Ciudad de M??xico.</p>

	<p>En caso de que la tienda sea operada por un franquiciatario, ??ste es quien ser?? responsable del tratamiento y protecci??n de sus datos personales.</p>

	<p><b>II. DATOS OBTENIDOS</b></p>

	<p>Los datos personales que recabamos en nuestro sitio web son: </p>

	<p>?? Nombre Completo,</p>

	<p>?? G??nero (sexo), </p>

	<p>?? Fecha de nacimiento, </p>

	<p>?? Domicilio (Estado, Delegaci??n/Municipio, C??digo Postal), </p>

	<p>?? Tel??fono fijo y/o Celular, </p>

	<p>?? Correo electr??nico, </p>

	<p>?? Registro Federal de Contribuyentes, </p>

	<p>?? Raz??n social y </p>

	<p>?? Domicilio Fiscal.</p>

	<p>Nosotros no recabamos datos personales sensibles en nuestro sitio web.</p>

	<p><b>III. FINALIDADES</b></p>

	<p>Los datos personales recabados ser??n utilizados para las siguientes finalidades:</p>

	<p><b>Finalidades Primarias:</b></p>

	<p>a) Atender sus opiniones, quejas y/o sugerencias.</p>

	<p>b) Evaluar la calidad de nuestros servicios.</p>

	<p>c) Realizar la facturaci??n electr??nica correspondiente a su consumo.</p>

	<p>d) Realizar la entrega de pedidos a domicilio, en caso de que la tienda cuente con dicho servicio.</p>

	<p>e) La informaci??n personal recopilada a trav??s del Sitio Web ser?? utilizada para verificar la identidad de los usuarios, as?? como con fines anal??ticos, estad??sticos y de mercadotecnia; lo anterior con la ??nica finalidad de prestarle un mejor servicio.</p>

	<p>f) Realizar el tr??mite y respuesta de su Solicitud de Ejercicio de Derechos ARCO. </p>

	<p>g) Realizar su Solicitud de Revocaci??n de Consentimiento o Negativa a Finalidades Secundarias.</p>

	<p><b>Finalidades Secundarias:</b></p>

	<p>a) Env??o de promociones y descuentos (publicidad y mercadotecnia).</p>

	<p>b) Realizar trivias, concursos y sorteos mediante redes sociales (Facebook, Twitter e Instagram).</p>

	<p>c) Poder identificarle y hacer entrega de premios a los ganadores de nuestros concursos y sorteos.</p>

	<p>d) Envi?? de felicitaciones y promociones el d??a de su cumplea??os.</p>

	<p>e) Participar en estudios de la marca.</p>

	<p>f) Darle de alta en nuestro programa multimarca.</p>

	<p><b>IV. NEGATIVA AL TRATAMIENTO PARA FINALIDADES SECUNDARIAS</b></p>

	<p>Si desea que sus datos personales no sean utilizados para todas o alguna(s) de las finalidades secundarias establecidas en el presente Aviso de Privacidad Integral para Sitio Web, deber?? enviarnos un correo electr??nico a la direcci??n <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a> indicandonos lo siguiente:</p>

	<p>No consiento que mis datos personales se utilicen para las siguientes Finalidades secundarias:</p>

	<p>a) Env??o de promociones y descuentos (publicidad y mercadotecnia).</p>

	<p>b) Realizar trivias, concursos y sorteos mediante redes sociales (Facebook, Twitter e Instagram).</p>

	<p>c) Poder identificarme y hacerme entrega de premios en los que resulte ganador de acuerdo a nuestros concursos y sorteos.</p>

	<p>d) Envi?? de felicitaciones y promociones el d??a de tu cumplea??os.</p>

	<p>e) Participar en estudios de la marca.</p>

	<p>f) Darme de alta en su programa multimarca.</p>

	<p>El manifestar su negativa al tratamiento de sus datos personales para finalidades secundarias, no ser?? motivo para dejar de brindarle nuestros servicios.</p>

	<p><b>V. TRANSFERENCIAS</b></p>

	<p>Con fundamento en lo dispuesto en el art??culo 37, de la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares, sus datos personales podr??n ser transferidos l??citamente a terceros sin necesidad de su consentimiento ??nicamente en los siguientes casos: (i) cuando se trate de empresas nacionales o internacionales del mismo grupo, como subsidiarias, filiales, afiliadas, controladas o controladoras bajo el control com??n del responsable o a una sociedad matriz o a cualquier sociedad del mismo grupo del responsable que opere bajo los mismos procesos y pol??ticas internas, (ii) cuando la transferencia sea necesaria por virtud de un contrato celebrado o por celebrar en inter??s del titular, por el responsable y un tercero, (iii) cuando la transferencia sea necesaria o legalmente exigida por alguna autoridad para salvaguardar un inter??s p??blico, o para la procuraci??n o administraci??n de justicia, (iv) cuando la transferencia sea precisa para el reconocimiento, ejercicio o defensa de un derecho en un proceso judicial y (v) cuando la transferencia sea precisa para el mantenimiento o cumplimiento de una relaci??n jur??dica entre el responsable y el titular. </p>

	<p>Salvo en los casos antes se??alados y los dem??s referidos en el art??culo 37 de la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares, su informaci??n personal no ser?? transferida a terceros.</p>

	<p><b>VI. DERECHOS ARCO</b></p>

	<p>Como titular de los datos personales recabados, tiene derecho a conocer con que informaci??n contamos, as?? como el uso y tratamiento que se le da a la misma. De igual manera tiene derecho solicitar la correcci??n de su informaci??n personal en caso de que est?? desactualizada, sea inexacta o incompleta (Rectificaci??n); que eliminemos su informaci??n, de nuestros registros o bases de datos cuando considere que la misma no est?? siendo utilizada conforme a los principios, deberes y obligaciones previstos en la normativa aplicable (Cancelaci??n); as?? mismo puede oponerse al uso de sus datos personales para fines espec??ficos (Oposici??n). Estos derechos se conocen como derechos ARCO.</p>

	<p>Usted puede ejercer los derechos anteriormente mencionados a trav??s del formulario ???<b>Solicitud para Atenci??n a los Requerimientos ARCO</b>???, para esto deber?? enviar un correo electr??nico a la direcci??n <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a> solicitando el formulario correspondiente y seguir el procedimiento que ser?? enviado junto con su solicitud; o bien si lo desea puede acudir directamente con el Departamento de Privacidad de Datos que se encuentra ubicado en Avenida Revoluci??n n??mero 1267, Torre Corporativa, Piso 21, Colonia Los Alpes, Delegaci??n ??lvaro Obreg??n, C??digo Postal 01040, en la Ciudad de M??xico, o ponerse en contacto al tel??fono (55) 75832000 ext.13021, en donde se atender?? cualquier duda respecto al tratamiento de su informaci??n y se dar?? tr??mite a las solicitudes para el ejercicio de estos derechos.</p>

	<p><b>VII. REVOCACI??N DE CONSENTIMIENTO</b></p>

	<p>Usted puede revocar el consentimiento que nos haya otorgado para el tratamiento de sus datos personales.</p>

	<p>Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de sus datos personales de forma inmediata, ya que es posible que por alguna obligaci??n legal requiramos seguir tratando sus datos personales. Asi mismo, debe considerar qu?? para ciertos fines, la revocaci??n de su consentimiento implicar?? que no podamos seguir brind??ndole el servicio que nos solicita.</p>

	<p>Para solicitar la revocaci??n de su consentimiento deber?? enviar un correo a la direcci??n <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a> solicitando el <b>???Formato del Revocaci??n del Consentimiento???</b> y seguir el procedimiento que ser?? enviado junto con su solicitud.</p>

	<p>Nosotros analizaremos su caso y le enviaremos respuesta a su solicitud de acuerdo a nuestro procedimiento establecido.</p>

	<p><b>VIII. LIMITAR EL USO O DIVULGACI??N DE LOS DATOS PERSONALES</b></p>

	<p>Si desea limitar el uso o divulgaci??n de los datos personales que nos ha otorgado con fines de publicidad y/o mercadotecnia, env??enos un correo a la direcci??n <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a><b>,</b> o puede darse de baja autom??ticamente desde los correos que le enviaremos, haciendo clic en la parte ???Remover suscripci??n??? o ???Unsubscribe???</p>

	<p>Nos comprometemos a incluir su informaci??n en un Listado de Exclusi??n para suspender toda actividad relacionada con el ofrecimiento de servicios (publicidad y/o mercadotecnia) que pudiera recaer en actos de molestia respecto del uso de su informaci??n.</p>

	<p><b>IX. EL USO DE TECNOLOG??AS DE RASTREO EN NUESTRO PORTAL DE INTERNET</b></p>

	<p>Le informamos que en nuestra p??gina de Internet utilizamos cookies, web beacons y otras tecnolog??as a trav??s de las cuales es posible monitorear su comportamiento como usuario de Internet, para brindarle un mejor servicio y experiencia al navegar en nuestra p??gina, as?? como para ofrecerle nuevos productos y servicios basados en sus preferencias.</p>

	<p>Los datos personales que obtenemos de ??stas tecnolog??as de rastreo son los siguientes: Navegador utilizado, nombre del servidor, direcci??n IP, fecha horario y tiempo de navegaci??n en internet y en nuestro sitio, secciones consultadas, y p??ginas de Internet accedidas cuando estas en nuestro sitio web.</p>

	<p>Estas tecnolog??as podr??n deshabilitarse siguiendo los siguientes pasos: 1. Acceder a nuestra p??gina de Internet, 2. Dar clic en la subsecci??n ???Cookies??? de su navegador; 3. Dar clic en la leyenda de activar el mecanismo de <b>deshabilitaci??n de cookies</b>.</p>

	<p><b>X. DEPARTAMENTO DE PRIVACIDAD DE DATOS PERSONALES</b></p>

	<p>En caso de que usted tenga alguna duda sobre este Aviso de Privacidad Integral para Sitio Web, o en su caso del tratamiento que les estamos dando a sus Datos Personales, p??ngase en contacto con nuestro<b> Departamento de Privacidad de datos personales</b>, donde con gusto te atenderemos:</p>

	<p><b>Domicilio:</b> Avenida Revoluci??n n??mero 1267, Torre Corporativa, Piso 21, Colonia Los Alpes, Delegaci??n ??lvaro Obreg??n, C??digo Postal 01040, en la Ciudad de M??xico.</p>

	<p><b>Correo electr??nico:</b> <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a></p>

	<p><b>Tel??fono:</b> (55) 75832000 ext.13021</p>

	<p><b>XI. ACTUALIZACI??N DEL AVISO DE PRIVACIDAD</b></p>

	<p>El presente Aviso de Privacidad Integral podr?? ser modificado o actualizado en cualquier momento; en caso de que se realice alguna modificaci??n que requiera poner a su disposici??n un nuevo aviso, se le har?? saber mediante correo electr??nico a la cuenta de correo que se proporcion?? inicialmente, en caso de ser s??lo una actualizaci??n podr?? consultarlo en nuestro portal de internet <a href="http://vips.com.mx/">http://vips.com.mx/</a></p>

	<p><b>Fecha de actualizaci??n: Junio de 2017. </b></p>

	</div>


		
		</div>
		
		
		
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
				<a href="/selvamagica-tyc"><li class="lines">T??rminos y condiciones</li></a>
				<a href="selvamagica-aviso"><li>Aviso de privacidad</li></a>
			</ul>
		</div>
	</div>
</div>
</div>

<script>
	function openMenu(){
		$(".menujuego").fadeIn();
	}
	
	function closeMenu(){
		$(".menujuego").fadeOut();
	}
</script>

  <!-- Footer =============================-->

  <?php include('footerm.php');?>

