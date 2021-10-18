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

<p style=" font-family: 'Program', sans-serif; font-size:1.2em"><b googl="true">AVISO DE PRIVACIDAD INTEGRAL WEB VIPS<sup>®</sup></b></p>

	<p><b>I. IDENTIDAD Y DOMICILIO DEL RESPONSABLE </b></p>

	<p>El Responsable del tratamiento y protección de sus datos personales es Operadora Vips, S. de R.L. de C.V. (VIPS<sup>®</sup>) con domicilio en Avenida Revolución número 1267, Torre Corporativa, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, Código Postal 01040, en la Ciudad de México.</p>

	<p>En caso de que la tienda sea operada por un franquiciatario, éste es quien será responsable del tratamiento y protección de sus datos personales.</p>

	<p><b>II. DATOS OBTENIDOS</b></p>

	<p>Los datos personales que recabamos en nuestro sitio web son: </p>

	<p>· Nombre Completo,</p>

	<p>· Género (sexo), </p>

	<p>· Fecha de nacimiento, </p>

	<p>· Domicilio (Estado, Delegación/Municipio, Código Postal), </p>

	<p>· Teléfono fijo y/o Celular, </p>

	<p>· Correo electrónico, </p>

	<p>· Registro Federal de Contribuyentes, </p>

	<p>· Razón social y </p>

	<p>· Domicilio Fiscal.</p>

	<p>Nosotros no recabamos datos personales sensibles en nuestro sitio web.</p>

	<p><b>III. FINALIDADES</b></p>

	<p>Los datos personales recabados serán utilizados para las siguientes finalidades:</p>

	<p><b>Finalidades Primarias:</b></p>

	<p>a) Atender sus opiniones, quejas y/o sugerencias.</p>

	<p>b) Evaluar la calidad de nuestros servicios.</p>

	<p>c) Realizar la facturación electrónica correspondiente a su consumo.</p>

	<p>d) Realizar la entrega de pedidos a domicilio, en caso de que la tienda cuente con dicho servicio.</p>

	<p>e) La información personal recopilada a través del Sitio Web será utilizada para verificar la identidad de los usuarios, así como con fines analíticos, estadísticos y de mercadotecnia; lo anterior con la única finalidad de prestarle un mejor servicio.</p>

	<p>f) Realizar el trámite y respuesta de su Solicitud de Ejercicio de Derechos ARCO. </p>

	<p>g) Realizar su Solicitud de Revocación de Consentimiento o Negativa a Finalidades Secundarias.</p>

	<p><b>Finalidades Secundarias:</b></p>

	<p>a) Envío de promociones y descuentos (publicidad y mercadotecnia).</p>

	<p>b) Realizar trivias, concursos y sorteos mediante redes sociales (Facebook, Twitter e Instagram).</p>

	<p>c) Poder identificarle y hacer entrega de premios a los ganadores de nuestros concursos y sorteos.</p>

	<p>d) Envió de felicitaciones y promociones el día de su cumpleaños.</p>

	<p>e) Participar en estudios de la marca.</p>

	<p>f) Darle de alta en nuestro programa multimarca.</p>

	<p><b>IV. NEGATIVA AL TRATAMIENTO PARA FINALIDADES SECUNDARIAS</b></p>

	<p>Si desea que sus datos personales no sean utilizados para todas o alguna(s) de las finalidades secundarias establecidas en el presente Aviso de Privacidad Integral para Sitio Web, deberá enviarnos un correo electrónico a la dirección <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a> indicandonos lo siguiente:</p>

	<p>No consiento que mis datos personales se utilicen para las siguientes Finalidades secundarias:</p>

	<p>a) Envío de promociones y descuentos (publicidad y mercadotecnia).</p>

	<p>b) Realizar trivias, concursos y sorteos mediante redes sociales (Facebook, Twitter e Instagram).</p>

	<p>c) Poder identificarme y hacerme entrega de premios en los que resulte ganador de acuerdo a nuestros concursos y sorteos.</p>

	<p>d) Envió de felicitaciones y promociones el día de tu cumpleaños.</p>

	<p>e) Participar en estudios de la marca.</p>

	<p>f) Darme de alta en su programa multimarca.</p>

	<p>El manifestar su negativa al tratamiento de sus datos personales para finalidades secundarias, no será motivo para dejar de brindarle nuestros servicios.</p>

	<p><b>V. TRANSFERENCIAS</b></p>

	<p>Con fundamento en lo dispuesto en el artículo 37, de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, sus datos personales podrán ser transferidos lícitamente a terceros sin necesidad de su consentimiento únicamente en los siguientes casos: (i) cuando se trate de empresas nacionales o internacionales del mismo grupo, como subsidiarias, filiales, afiliadas, controladas o controladoras bajo el control común del responsable o a una sociedad matriz o a cualquier sociedad del mismo grupo del responsable que opere bajo los mismos procesos y políticas internas, (ii) cuando la transferencia sea necesaria por virtud de un contrato celebrado o por celebrar en interés del titular, por el responsable y un tercero, (iii) cuando la transferencia sea necesaria o legalmente exigida por alguna autoridad para salvaguardar un interés público, o para la procuración o administración de justicia, (iv) cuando la transferencia sea precisa para el reconocimiento, ejercicio o defensa de un derecho en un proceso judicial y (v) cuando la transferencia sea precisa para el mantenimiento o cumplimiento de una relación jurídica entre el responsable y el titular. </p>

	<p>Salvo en los casos antes señalados y los demás referidos en el artículo 37 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su información personal no será transferida a terceros.</p>

	<p><b>VI. DERECHOS ARCO</b></p>

	<p>Como titular de los datos personales recabados, tiene derecho a conocer con que información contamos, así como el uso y tratamiento que se le da a la misma. De igual manera tiene derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que eliminemos su información, de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada conforme a los principios, deberes y obligaciones previstos en la normativa aplicable (Cancelación); así mismo puede oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.</p>

	<p>Usted puede ejercer los derechos anteriormente mencionados a través del formulario “<b>Solicitud para Atención a los Requerimientos ARCO</b>”, para esto deberá enviar un correo electrónico a la dirección <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a> solicitando el formulario correspondiente y seguir el procedimiento que será enviado junto con su solicitud; o bien si lo desea puede acudir directamente con el Departamento de Privacidad de Datos que se encuentra ubicado en Avenida Revolución número 1267, Torre Corporativa, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, Código Postal 01040, en la Ciudad de México, o ponerse en contacto al teléfono (55) 75832000 ext.13021, en donde se atenderá cualquier duda respecto al tratamiento de su información y se dará trámite a las solicitudes para el ejercicio de estos derechos.</p>

	<p><b>VII. REVOCACIÓN DE CONSENTIMIENTO</b></p>

	<p>Usted puede revocar el consentimiento que nos haya otorgado para el tratamiento de sus datos personales.</p>

	<p>Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de sus datos personales de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asi mismo, debe considerar qué para ciertos fines, la revocación de su consentimiento implicará que no podamos seguir brindándole el servicio que nos solicita.</p>

	<p>Para solicitar la revocación de su consentimiento deberá enviar un correo a la dirección <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a> solicitando el <b>“Formato del Revocación del Consentimiento”</b> y seguir el procedimiento que será enviado junto con su solicitud.</p>

	<p>Nosotros analizaremos su caso y le enviaremos respuesta a su solicitud de acuerdo a nuestro procedimiento establecido.</p>

	<p><b>VIII. LIMITAR EL USO O DIVULGACIÓN DE LOS DATOS PERSONALES</b></p>

	<p>Si desea limitar el uso o divulgación de los datos personales que nos ha otorgado con fines de publicidad y/o mercadotecnia, envíenos un correo a la dirección <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a><b>,</b> o puede darse de baja automáticamente desde los correos que le enviaremos, haciendo clic en la parte “Remover suscripción” o “Unsubscribe”</p>

	<p>Nos comprometemos a incluir su información en un Listado de Exclusión para suspender toda actividad relacionada con el ofrecimiento de servicios (publicidad y/o mercadotecnia) que pudiera recaer en actos de molestia respecto del uso de su información.</p>

	<p><b>IX. EL USO DE TECNOLOGÍAS DE RASTREO EN NUESTRO PORTAL DE INTERNET</b></p>

	<p>Le informamos que en nuestra página de Internet utilizamos cookies, web beacons y otras tecnologías a través de las cuales es posible monitorear su comportamiento como usuario de Internet, para brindarle un mejor servicio y experiencia al navegar en nuestra página, así como para ofrecerle nuevos productos y servicios basados en sus preferencias.</p>

	<p>Los datos personales que obtenemos de éstas tecnologías de rastreo son los siguientes: Navegador utilizado, nombre del servidor, dirección IP, fecha horario y tiempo de navegación en internet y en nuestro sitio, secciones consultadas, y páginas de Internet accedidas cuando estas en nuestro sitio web.</p>

	<p>Estas tecnologías podrán deshabilitarse siguiendo los siguientes pasos: 1. Acceder a nuestra página de Internet, 2. Dar clic en la subsección “Cookies” de su navegador; 3. Dar clic en la leyenda de activar el mecanismo de <b>deshabilitación de cookies</b>.</p>

	<p><b>X. DEPARTAMENTO DE PRIVACIDAD DE DATOS PERSONALES</b></p>

	<p>En caso de que usted tenga alguna duda sobre este Aviso de Privacidad Integral para Sitio Web, o en su caso del tratamiento que les estamos dando a sus Datos Personales, póngase en contacto con nuestro<b> Departamento de Privacidad de datos personales</b>, donde con gusto te atenderemos:</p>

	<p><b>Domicilio:</b> Avenida Revolución número 1267, Torre Corporativa, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, Código Postal 01040, en la Ciudad de México.</p>

	<p><b>Correo electrónico:</b> <a onclick="javascript:pageTracker._trackPageview('/mailto/privacidadinfo@alsea.com.mx');" href="mailto:privacidadinfo@alsea.com.mx"><b>privacidadinfo@alsea.com.mx</b></a></p>

	<p><b>Teléfono:</b> (55) 75832000 ext.13021</p>

	<p><b>XI. ACTUALIZACIÓN DEL AVISO DE PRIVACIDAD</b></p>

	<p>El presente Aviso de Privacidad Integral podrá ser modificado o actualizado en cualquier momento; en caso de que se realice alguna modificación que requiera poner a su disposición un nuevo aviso, se le hará saber mediante correo electrónico a la cuenta de correo que se proporcionó inicialmente, en caso de ser sólo una actualización podrá consultarlo en nuestro portal de internet <a href="http://vips.com.mx/">http://vips.com.mx/</a></p>

	<p><b>Fecha de actualización: Junio de 2017. </b></p>

	</div>


		
		</div>
		
		
		
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
				<a href="/selvamagica-tyc"><li class="lines">Términos y condiciones</li></a>
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

