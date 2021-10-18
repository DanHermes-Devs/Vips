<?php
session_start();
include('header.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    header('Location: /selvamagica-tyc-m');
    exit(0);
}
?>

<div class="main">
<main role="main">
<style>
main {
    width: 100%;
}

.banner{width:100%;}

.b2 {
	margin-top: -6px;
}
.imgcont {
	float: left;
	margin: 0;
	margin-top: 0;
	display: inline-block;
	width: 50%;
	position: relative;
}
.abcont {
	width: 100%;
	position: relative;
	top: 0;
	padding: 5%;
	text-align: center;
}
.logoselva {
	width: 35%;
}
.abcont h3 {
	color: #feea83;
	padding: 5% 10%;
}
.abcont h3 span {
	padding: 10px;
	width: 100%;
	display: inline-block;
	font-size: 22px;
}
.btnjugar {
	width: 25%;
}
.legales {
	position: relative;
	width: 100%;
	color: #feea83;
	margin-top: 0%;
	margin-left: 0;
	padding: 0 7.5%;
	display: inline-block;
}
.legales li {
	width: 30%;
	display: inline-block;
	margin: 0;
	float: left;
	padding: 0;
	font-size: 15px;
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
	color: #feea83;
	font-size: 23px;
	float: left;
	width: 100%;
	margin: 0;
	font-weight: 500;
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
	padding: 5% 10% 25% 10%;
	margin-top: -5%;
}
.tablero h4 {
	font-size: 18px;
	padding-top: 20%;
	margin: 0;
	padding-bottom: 5%;
}

.tablero p {
	text-align: center;
	padding: 0 15%;
	font-size: 15px;
}
.tablero p span {
	font-weight: bold;
	font-size: 17px;
	
}
.botones {
	width: 100%;
	padding: 5% 20% 2.5%;
	float: left;
	text-align: center;
}
.btnjugar {
	width: 40%;
	float: none;
	padding: 0;
	margin-bottom: 5%;
	cursor: pointer;
}
.ingresa {
	color: #feec90;
	padding: 0 20%;
	text-align: left;
	font-weight: 500;
	margin-top: -2.5%;
}
#ticket {
	width: 60%;
	height: 35px;
	background: #feec90;
	color: #222;
	border: none;
	border-radius: 10px;
	appeareance: none;
	padding: 5px 10px;
	font-weight: 500;
	font-family: "Program",sans-serif;
	font-size: 19px;
}
#infoticket {
	position: absolute;
	right: 20%;
	background: #feec90;
	color: red;
	padding: 5px 10px;
	border-radius: 13px;
	font-weight: bold;
	cursor: pointer;
}
.ticketpop {
	position: fixed;
	background: rgba(0,0,0,.85);
	padding: 5%;
	z-index: 4;
	text-align: center;
	width: 100%;
	height: 100%;
	display: none;
	top: 0;
	padding-top: 10vh;
	color: #fff;
	overflow-y: auto;
}
.ticketiconclose {
	width: 30px;
	height: 30px;
	background: url(/img/close.png);
	background-size: auto;
	background-size: 100%;
	right: 15px;
	position: fixed;
	margin-top: 10px;
}
.ticketpop img {
	width: 70%;
	display: inline-block;
	margin-bottom: 20vh;
	max-width: 300px;
}
#respuestaticket {
	color: #fff;
}
.leftcont {
	float: left;
	width: 50%;
	background: url(/img/2019/juego/rey.png);
	height: 100vh;
	background-position: bottom center;
	background-size: cover;
	position: relative;
}
.footer {
	margin-top: -6px;
}
main {
	background: url(/img/2019/juego/Pantallas_fondo.png);
	height: 100%;
	background-repeat: no-repeat;
	background-size: 50% 100%;
	background-position: right bottom;
	display: inline-block;
}
.bannerleft img {
	position: absolute;
	width: 40%;
	right: 10%;
	bottom: 10%;
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
@media(max-width:1200px){
	.tablero {
	background: url(/img/2019/juego/pleca_madera.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	color: #7f4f1c;
	font-size: 12px;
	padding: 20% 10% 25% 10%;
	margin-top: -5%;
}
}

</style>

<?php include('headerjuego.php'); ?>
<div class="leftcont">
	<div class="bannerleft">
		<img src="/img/2019/juego/reyleonlogo_blanco.png">
		<img src="/img/2019/juego/2019Disney_dorado.png" class="logodisney">
	</div>
</div>
<div class="imgcont">
	
	<div class="abcont">
		<img class="logoselva" src="/img/2019/juego/logo.png">
		
		<div class="textotyc">
 <p><b>BASES DE PARTICIPACIÓN</b></p>

<p><b>Organizadora de la Promoción: Operadora Vips, S. de R.L. de C.V., </b>con domicilio en Av. Revolución #1267 pisos 20-21, Col. Alpes, Del. Álvaro obregón, Ciudad de México, C.P. 01040(en adelante Vips)</p>

<p><b>Vigencia de la Promoción: </b>Del 27 de julio al 31 de agosto de 2019.</p>

<p><b>Cobertura de la promoción</b>: Nivel nacional. Consulta restaurantes Vips participantes en www.vips.com.mx</p>

<p><b>Bien a promocionarse: </b>Divertipack del menú infantil de restaurantes Vips®.</p>

<p><b>Total de incentivos: </b>1 (uno)</p>

<p><b>Vigencia y ámbito de validez de los incentivos: </b>Los incentivos se entregarán el día y hora que se acuerde con el ganador, deberán utilizarse a más tardar el 31 de diciembre de 2019. No aplicará en las siguientes fechas: 01 de Julio al 18 de Agosto de 2019, ni del 26 al 31 de Diciembre 2019. </p>

<p><b>PARTICIPANTES (los Participantes).</b></p>

<p>Podrán participar todas las personas mayores de 18 años de edad, residentes de la República Mexicana que visiten cualquier restaurante Vips<sup>®</sup> participante a Nivel Nacional y cumplan con la mecánica de la promoción. </p>

<p><b>EXCLUSIONES.</b></p>

<p>No podrán participar en esta Promoción los empleados o familiares de las empresas del Organizador, así como de las empresas afiliadas, subsidiarias o subcontratadas por estas últimas.</p>

<p><b>MECÁNICA (la Mecánica).</b></p>

<p>1.En cada una de tus visitas a Vips ordena al menos un “Divertipack”</p>

<p>2.Ingresa a <a href="https://www.vips.com.mx">https://www.vips.com.mx</a>, crea tu perfil de jugador y registra tu tícket de 18 dígitos.</p>

<p>Únicamente deberás crear el perfil la primera vez que entres al sistema, posteriormente sólo deberás ingresar y registrar.</p>

<p>3. Cada ticket registrado es una oportunidad para jugar y acumular puntos, independientemente de la cantidad de Divertipacks comprados. </p>

<p>4.Juega hasta terminar los niveles y acumula puntos en el juego. </p>

<p>5. En la fecha de corte, el participante con más puntos acumulados en el juego y más Divertipacks* registrados en sistema será el ganador del incentivo.</p>

<p>* <b>La cantidad de Divertipacks en un ticket se registra automáticamente en sistema al registrar el ticket.</b></p>

<p><b>INSTRUCCIONES DEL JUEGO</b></p>

<p>1.Dispara las pelotas de diferentes colores con un click en la pantalla.</p>

<p>2.Para apuntar la pelota, es necesario hacer click en el lugar donde deseas disparar.</p>

<p>3.Cada pelota se lanzará a los bloques de esferas de la parte superior. </p>

<p>4.Deberás formar bloques de tres o más pelotas del mismo color para acumular puntos.</p>

<p>5.Dispara rápido, ya que el bloque de pelotas bajará un nivel cada 3 segundos.</p>

<p>6.Si el bloque llega a tocar la resortera o a salir de la pantalla de juego, la partida terminará automáticamente.</p>

<p>7. Al finalizar el juego, se contabilizarán los puntos<b>*</b> que se hayan logrado desbloquear y quedarán registrados con tu número de ticket en tu perfil.</p>

<p><b>*Al término de cada partida, tu ticket entra en periodo de validación, por lo que los puntos de tu partida podrán tardar hasta 24 horas hábiles en verse reflejados en tu cuenta.</b></p>

<p><b>4.-INCENTIVOS (los Incentivos).</b></p>

<p>Existirá en total un incentivo para esta promoción, consistente en un viaje cuádruple a Cancún que incluye: </p>

<p>· Boletos de avión viaje redondo para 4 personas desde el aeropuerto más cercano a su ciudad de origen – Cancún – Aeropuerto más cercano a su ciudad de origen</p>

<p>· Transportación terrestre Aeropuerto – Hotel – Aeropuerto</p>

<p>· Hospedaje de 4 días 3 noches para 4 personas en Hotel Todo Incluido en la Riviera Maya. </p>

<p>· Transportación y acceso a los parques Xplor y Xavage</p>

<p>Una vez elegido al ganador, personal de la Organizadora se pondrá en contacto para acordad fecha, lugar y hora para entrega del incentivo, así como documentos necesarios para reservar boletos de avión y hospedaje.</p>

<p>Para reservar vuelos y hospedaje, el ganador y sus acompañantes deberán enviar los documentos que les sean indicados, de lo contrario no se podrá tramitar lo necesario para realizar el viaje, quedando liberada la Organizadora por la falta de información o documentación. </p>

<p>El ganador deberá programar el viaje antes del 31 de diciembre de 2019, sin contar las fechas indicadas al inicio de las bases, de lo contrario, la Organizadora no tendrá obligación de compensar, reembolsar ni programar el viaje en fechas distintas.</p>

<p><b>GANADOR (el Ganador)</b></p>

<p>Resultará ganador el participante que haya acumulado mayor cantidad de puntos en el juego, en caso de empate, ganará la persona que tenga registrados en sistema la mayor cantidad de Divertipacks consumidos dentro de la vigencia de la promoción. </p>

<p>El posible ganador será contactado por la Organizadora a más tardar el _____, él y sus acompañantes, deberán enviar los documentos que le sean solicitados dentro del tiempo indicado.</p>

<p>El ganador se dará a conocer en ___ a más tardar el ____</p>

<p><b>EXCLUSIONES DEL GANADOR.</b></p>

<p>En caso de que el Ganador no corrobore que cumple con los requisitos de participación o haya resultado ganador violentando las presentes bases, no podrá ser acreedor al Incentivo y se seleccionará al siguiente participante que haya cumplido con las presentes Bases.</p>

<p>En caso de no poder contactar al ganador en 24 horas, se seleccionará al participante que le siga con mayor puntaje.</p>

<p><b>CONDICIONES GENERALES</b></p>

<p>° Limitado a un perfil por participante.</p>

<p>° Los participantes podrán jugar una vez por cada ticket registrado.</p>

<p>° Cada ticket podrá registrarse una sola vez. </p>

<p>° Para registrar el ticket, el participante deberá haber consumido al menos un Divertipack. </p>

<p>° Únicamente serán registrables los tickets de consumo realizado dentro de la vigencia de la promoción.</p>

<p>° El participante que acumule mayor cantidad de puntos, será el acreedor al incentivo.</p>

<p>° No acumulable con otras promociones, el incentivo no es canjeable por efectivo, negociable ni transferible.</p>

<p>° En caso de no realizar el viaje en el tiempo indicado, la Organizadora no estará obligado a pagar, compensar o sustituirlo de ningún modo. En el caso que el acreedor del incentivo no cumpla con alguno de los requisitos de la Promoción, el mismo será descalificado.</p>

<p>° </p>

<p>° El Organizador se reserva el derecho, a su absoluta discreción, de descalificar participaciones que consideren que no cumplan con estos términos y condiciones o al participante que razonablemente se crea que ha interferido en el funcionamiento del proceso de nominación.</p>

<p>° </p>

<p>° El Organizador se reserva el derecho, para llevar a cabo todas las medidas que consideren razonables para protegerse contra reclamaciones fraudulentas o no válidas, incluyendo, sin limitación, para requerir la verificación adicional en cuanto a la identidad, edad y otros datos de interés de un participante, si así lo considera necesario.</p>

<p>° Cualquier persona que intente, por cualquier medio, defraudar o manipular la dinámica de Vips, no podrá participar en futuras promociones y no será elegible para recibir el incentivo correspondiente.</p>

<p>° </p>

<p>° En caso de no cumplir con las bases y condiciones mencionadas o si no es posible la localización del acreedor del incentivo dentro del plazo indicado, se anulará su participación para hacer válido su incentivo.</p>

<p>° Cada participante es consciente de las obligaciones que implica hacer efectivo el incentivo en caso de resultar acreedor, por lo que desde este momento acepta que cumplirá cabalmente las instrucciones del Organizador y del establecimiento en donde se haga efectivo el mismo, por lo que el Organizador no será responsable de ninguna contingencia que pudiese surgir con motivo de la Promoción, por lo que en caso de resultar acreedor del incentivo.</p>

<p>° El participante no se reserva derecho alguno que ejercer en contra del Organizador, ni tampoco en contra de sus respectivas compañías afiliadas, subsidiarias y matrices, funcionarios, directores, empleados y agentes, por los conceptos previamente descritos. En caso de cualquier controversia, el consumidor se somete a la jurisdicción de los Tribunales Federales con residencia en la Ciudad de México, renunciando a cualquier otro fuero por razón de su domicilio presente o futuro. En caso de que el consumidor no desee asumir el riesgo que el incentivo de esta promoción conlleva, deberá abstenerse de participar.</p>

<p><b>CAUSAS DE ANULACIÓN DE LA PARTICIPACIÓN:</b></p>

<p>° Registrar más de una vez el mismo ticket en la misma o diferentes perfiles. </p>

<p>° Contar con más de un perfil de jugador, supuesto en que se tomará en cuenta únicamente el primero y se eliminarán los demás.</p>

<p>° Cualquier incumplimiento a los requisitos o incurrir en cualquiera de las restricciones.</p>

<p>° Pretender o lograr descargar en la red social o el sitio materiales con palabras altisonantes que agredan la integridad moral de cualquier persona física o moral, así como el uso de vocablos que insulten las buenas costumbres sociales. Malintencionado, material pornográfico, de actividades ilegales o peligrosas de abusos a animales, consumo de drogas o fabricación de materiales peligrosos, violencia, etc.</p>

<p>° Utilizar Avisos Comerciales, Marcas Registradas, Obra artística con reservas o derechos reservados de terceros, ya sea de forma total o parcial, expresa o en grado de confusión o difamatorio.</p>

<p>° Quienes realicen cualquiera de estas conductas responderán por daños o perjuicios de forma incondicional ante quienes reclamen acción de cualquier índole por tal situación.</p>

<p>° En caso de haber resultado acreedor al incentivo violentando las bases y condiciones de participación, el participante deberá restituir el mismo y responderá contra daños y perjuicios.</p>

<p>° Cualquier ataque o intento de alteración o manipulación al sistema informático o a la página web o al lugar en el cual se encuentre radicada la misma, genera la anulación de la participación inmediata del participante o bien, descartándolo como acreedor de alguno de los incentivos ofrecidos, de acuerdo a lo establecido en el inciso del apartado de Mecánica de la participación de la promoción de estas bases y condiciones.</p>

<p>° No podrán participar en la promoción empleados, becarios, contratistas, socios, directivos, prestadores de servicios, ni personal docente de la Organizadora, así como sus familiares ni dependientes económicos. </p>

<p>° La participación en esta promoción y la obtención del incentivo, según sea el caso, no tendrá costo alguno o requisito adicional por cumplir por parte del participante que el indicado en las mismas. </p>

<p>° El o los participantes que: (a) transmitan en cualquier forma o distribuyan cualquier material que contenga virus, spyware, hardware o cualquier otro elemento dañino o potencialmente dañino, (b) recojan o, de cualquier forma, obtengan indebidamente información sobre terceros, incluyendo direcciones de correo electrónico, sin el previo consentimiento del interesado, (c) anoten, reproduzcan o transmitan cualquier material que contenga publicidad o solicitudes con respecto a productos o servicios, sin la previa autorización del Organizador o Promotor, sus subsidiarias, filiales o grupo de empresas al que pertenece, serán descalificados, además de quedar obligados al pago de daños y perjuicios que hayan sido ocasionados al Organizador, Promotor o demás participantes o usuarios de Facebook.</p>

<p><b>AUTORIZACIÓN USO DE IMAGEN.</b></p>

<p>Los participantes reconocen y aceptan los términos y condiciones de las presentes Bases al participar en la presente promoción por lo que ceden en este acto todos los derechos de propiedad industrial o de autor con respecto a su participación en la Promoción a favor de EL ORGANIZADOR, otorgándole licencia gratuita ilimitada para el uso de su nombre, imagen, publicación, fotografía, reproducción etc. no reservándose acción o derecho alguno que reclamar en su contra, reconociendo además que no podrán reclamar regalías, contraprestación o compensación alguna. En caso de que el Organizador requiera algún testimonial por parte del ganador, este se compromete a realizarlo y reconoce que el Organizador podrá hacer uso de los mismos, sólo con fines promocionales a través de cualquier medio de comunicación.</p>

<p>Los testimoniales a que se hacen referencia en el párrafo anterior serán propiedad exclusiva del Organizador de la presente actividad, quien podrá difundir y utilizar de la manera que más convenga a sus intereses, sin que esto implique pago alguno a dicho participante por su aparición en cualquier medio de comunicación. En caso de controversia o reclamo de por regalías por cualquiera de los participantes, las mismas se fijarán en un máximo total de un día de Salario Mínimo General Vigente para la Ciudad de México, por cada mes de uso de las mismas en cualquier medio.</p>

<p><b>RESPONSABLE DE LA PROMOCIÓN</b></p>

<p>La <b>ORGANIZADORA </b>será la responsable en el manejo de los datos personales que sean proporcionados por los participantes en la creación de su perfil de jugador, los mismos serán tratados conforme a lo establecido en la Ley Federal para la Protección de los Datos Personales en Posesión de los Particulares, conforme a las finalidades descritas en las presentes bases.</p>

<p>Los participantes podrán consultar en cualquier tiempo el Aviso de Privacidad del Organizador en https://vips.com.mx/aviso-de-privacidad/.</p>




		
		</div>
		
		
		
		<div class="legales">
			<ul>
				<a href="selvamagica-premio-m"><li>Premio</li></a>
				<a href="selvamagica-tyc"><li class="lines">Términos y condiciones</li></a>
				<a href="selvamagica-aviso"><li>Aviso de privacidad</li></a>
			</ul>
		</div>
	</div>
</div>



<script>
function  checkHeight(){
		setTimeout(function(){
			var wh = $(window).height();
			var lch = $(".imgcont").height();
			$(".leftcont").css("height", lch +"px");
			$(".leftcont").css("max-height", lch +"px");
		},500)	
	}
	
	$(document).ready(function () {
		checkHeight();
	});
	
	$(window).on('resize', function(){
      checkHeight();
	});
	function openMenu(){
		$(".menujuego").fadeIn();
	}
	
	function closeMenu(){
		$(".menujuego").fadeOut();
	}
	
	

</script>

<!-- Footer =============================-->

<?php include('footer.php');?>