<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /selvamagica-tyc');

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
 <p><b>BASES DE PARTICIPACI??N</b></p>

<p><b>Organizadora de la Promoci??n: Operadora Vips, S. de R.L. de C.V., </b>con domicilio en Av. Revoluci??n #1267 pisos 20-21, Col. Alpes, Del. ??lvaro obreg??n, Ciudad de M??xico, C.P. 01040(en adelante Vips)</p>

<p><b>Vigencia de la Promoci??n: </b>Del 27 de julio al 31 de agosto de 2019.</p>

<p><b>Cobertura de la promoci??n</b>: Nivel nacional. Consulta restaurantes Vips participantes en www.vips.com.mx</p>

<p><b>Bien a promocionarse: </b>Divertipack del men?? infantil de restaurantes Vips??.</p>

<p><b>Total de incentivos: </b>1 (uno)</p>

<p><b>Vigencia y ??mbito de validez de los incentivos: </b>Los incentivos se entregar??n el d??a y hora que se acuerde con el ganador, deber??n utilizarse a m??s tardar el 31 de diciembre de 2019. No aplicar?? en las siguientes fechas: 01 de Julio al 18 de Agosto de 2019, ni del 26 al 31 de Diciembre 2019. </p>

<p><b>PARTICIPANTES (los Participantes).</b></p>

<p>Podr??n participar todas las personas mayores de 18 a??os de edad, residentes de la Rep??blica Mexicana que visiten cualquier restaurante Vips<sup>??</sup> participante a Nivel Nacional y cumplan con la mec??nica de la promoci??n. </p>

<p><b>EXCLUSIONES.</b></p>

<p>No podr??n participar en esta Promoci??n los empleados o familiares de las empresas del Organizador, as?? como de las empresas afiliadas, subsidiarias o subcontratadas por estas ??ltimas.</p>

<p><b>MEC??NICA (la Mec??nica).</b></p>

<p>1.En cada una de tus visitas a Vips ordena al menos un ???Divertipack???</p>

<p>2.Ingresa a <a href="https://www.vips.com.mx">https://www.vips.com.mx</a>, crea tu perfil de jugador y registra tu t??cket de 18 d??gitos.</p>

<p>??nicamente deber??s crear el perfil la primera vez que entres al sistema, posteriormente s??lo deber??s ingresar y registrar.</p>

<p>3. Cada ticket registrado es una oportunidad para jugar y acumular puntos, independientemente de la cantidad de Divertipacks comprados. </p>

<p>4.Juega hasta terminar los niveles y acumula puntos en el juego. </p>

<p>5. En la fecha de corte, el participante con m??s puntos acumulados en el juego y m??s Divertipacks* registrados en sistema ser?? el ganador del incentivo.</p>

<p>* <b>La cantidad de Divertipacks en un ticket se registra autom??ticamente en sistema al registrar el ticket.</b></p>

<p><b>INSTRUCCIONES DEL JUEGO</b></p>

<p>1.Dispara las pelotas de diferentes colores con un click en la pantalla.</p>

<p>2.Para apuntar la pelota, es necesario hacer click en el lugar donde deseas disparar.</p>

<p>3.Cada pelota se lanzar?? a los bloques de esferas de la parte superior. </p>

<p>4.Deber??s formar bloques de tres o m??s pelotas del mismo color para acumular puntos.</p>

<p>5.Dispara r??pido, ya que el bloque de pelotas bajar?? un nivel cada 3 segundos.</p>

<p>6.Si el bloque llega a tocar la resortera o a salir de la pantalla de juego, la partida terminar?? autom??ticamente.</p>

<p>7. Al finalizar el juego, se contabilizar??n los puntos<b>*</b> que se hayan logrado desbloquear y quedar??n registrados con tu n??mero de ticket en tu perfil.</p>

<p><b>*Al t??rmino de cada partida, tu ticket entra en periodo de validaci??n, por lo que los puntos de tu partida podr??n tardar hasta 24 horas h??biles en verse reflejados en tu cuenta.</b></p>

<p><b>4.-INCENTIVOS (los Incentivos).</b></p>

<p>Existir?? en total un incentivo para esta promoci??n, consistente en un viaje cu??druple a Canc??n que incluye: </p>

<p>?? Boletos de avi??n viaje redondo para 4 personas desde el aeropuerto m??s cercano a su ciudad de origen ??? Canc??n ??? Aeropuerto m??s cercano a su ciudad de origen</p>

<p>?? Transportaci??n terrestre Aeropuerto ??? Hotel ??? Aeropuerto</p>

<p>?? Hospedaje de 4 d??as 3 noches para 4 personas en Hotel Todo Incluido en la Riviera Maya. </p>

<p>?? Transportaci??n y acceso a los parques Xplor y Xavage</p>

<p>Una vez elegido al ganador, personal de la Organizadora se pondr?? en contacto para acordad fecha, lugar y hora para entrega del incentivo, as?? como documentos necesarios para reservar boletos de avi??n y hospedaje.</p>

<p>Para reservar vuelos y hospedaje, el ganador y sus acompa??antes deber??n enviar los documentos que les sean indicados, de lo contrario no se podr?? tramitar lo necesario para realizar el viaje, quedando liberada la Organizadora por la falta de informaci??n o documentaci??n. </p>

<p>El ganador deber?? programar el viaje antes del 31 de diciembre de 2019, sin contar las fechas indicadas al inicio de las bases, de lo contrario, la Organizadora no tendr?? obligaci??n de compensar, reembolsar ni programar el viaje en fechas distintas.</p>

<p><b>GANADOR (el Ganador)</b></p>

<p>Resultar?? ganador el participante que haya acumulado mayor cantidad de puntos en el juego, en caso de empate, ganar?? la persona que tenga registrados en sistema la mayor cantidad de Divertipacks consumidos dentro de la vigencia de la promoci??n. </p>

<p>El posible ganador ser?? contactado por la Organizadora a m??s tardar el _____, ??l y sus acompa??antes, deber??n enviar los documentos que le sean solicitados dentro del tiempo indicado.</p>

<p>El ganador se dar?? a conocer en ___ a m??s tardar el ____</p>

<p><b>EXCLUSIONES DEL GANADOR.</b></p>

<p>En caso de que el Ganador no corrobore que cumple con los requisitos de participaci??n o haya resultado ganador violentando las presentes bases, no podr?? ser acreedor al Incentivo y se seleccionar?? al siguiente participante que haya cumplido con las presentes Bases.</p>

<p>En caso de no poder contactar al ganador en 24 horas, se seleccionar?? al participante que le siga con mayor puntaje.</p>

<p><b>CONDICIONES GENERALES</b></p>

<p>?? Limitado a un perfil por participante.</p>

<p>?? Los participantes podr??n jugar una vez por cada ticket registrado.</p>

<p>?? Cada ticket podr?? registrarse una sola vez. </p>

<p>?? Para registrar el ticket, el participante deber?? haber consumido al menos un Divertipack. </p>

<p>?? ??nicamente ser??n registrables los tickets de consumo realizado dentro de la vigencia de la promoci??n.</p>

<p>?? El participante que acumule mayor cantidad de puntos, ser?? el acreedor al incentivo.</p>

<p>?? No acumulable con otras promociones, el incentivo no es canjeable por efectivo, negociable ni transferible.</p>

<p>?? En caso de no realizar el viaje en el tiempo indicado, la Organizadora no estar?? obligado a pagar, compensar o sustituirlo de ning??n modo. En el caso que el acreedor del incentivo no cumpla con alguno de los requisitos de la Promoci??n, el mismo ser?? descalificado.</p>

<p>?? </p>

<p>?? El Organizador se reserva el derecho, a su absoluta discreci??n, de descalificar participaciones que consideren que no cumplan con estos t??rminos y condiciones o al participante que razonablemente se crea que ha interferido en el funcionamiento del proceso de nominaci??n.</p>

<p>?? </p>

<p>?? El Organizador se reserva el derecho, para llevar a cabo todas las medidas que consideren razonables para protegerse contra reclamaciones fraudulentas o no v??lidas, incluyendo, sin limitaci??n, para requerir la verificaci??n adicional en cuanto a la identidad, edad y otros datos de inter??s de un participante, si as?? lo considera necesario.</p>

<p>?? Cualquier persona que intente, por cualquier medio, defraudar o manipular la din??mica de Vips, no podr?? participar en futuras promociones y no ser?? elegible para recibir el incentivo correspondiente.</p>

<p>?? </p>

<p>?? En caso de no cumplir con las bases y condiciones mencionadas o si no es posible la localizaci??n del acreedor del incentivo dentro del plazo indicado, se anular?? su participaci??n para hacer v??lido su incentivo.</p>

<p>?? Cada participante es consciente de las obligaciones que implica hacer efectivo el incentivo en caso de resultar acreedor, por lo que desde este momento acepta que cumplir?? cabalmente las instrucciones del Organizador y del establecimiento en donde se haga efectivo el mismo, por lo que el Organizador no ser?? responsable de ninguna contingencia que pudiese surgir con motivo de la Promoci??n, por lo que en caso de resultar acreedor del incentivo.</p>

<p>?? El participante no se reserva derecho alguno que ejercer en contra del Organizador, ni tampoco en contra de sus respectivas compa????as afiliadas, subsidiarias y matrices, funcionarios, directores, empleados y agentes, por los conceptos previamente descritos. En caso de cualquier controversia, el consumidor se somete a la jurisdicci??n de los Tribunales Federales con residencia en la Ciudad de M??xico, renunciando a cualquier otro fuero por raz??n de su domicilio presente o futuro. En caso de que el consumidor no desee asumir el riesgo que el incentivo de esta promoci??n conlleva, deber?? abstenerse de participar.</p>

<p><b>CAUSAS DE ANULACI??N DE LA PARTICIPACI??N:</b></p>

<p>?? Registrar m??s de una vez el mismo ticket en la misma o diferentes perfiles. </p>

<p>?? Contar con m??s de un perfil de jugador, supuesto en que se tomar?? en cuenta ??nicamente el primero y se eliminar??n los dem??s.</p>

<p>?? Cualquier incumplimiento a los requisitos o incurrir en cualquiera de las restricciones.</p>

<p>?? Pretender o lograr descargar en la red social o el sitio materiales con palabras altisonantes que agredan la integridad moral de cualquier persona f??sica o moral, as?? como el uso de vocablos que insulten las buenas costumbres sociales. Malintencionado, material pornogr??fico, de actividades ilegales o peligrosas de abusos a animales, consumo de drogas o fabricaci??n de materiales peligrosos, violencia, etc.</p>

<p>?? Utilizar Avisos Comerciales, Marcas Registradas, Obra art??stica con reservas o derechos reservados de terceros, ya sea de forma total o parcial, expresa o en grado de confusi??n o difamatorio.</p>

<p>?? Quienes realicen cualquiera de estas conductas responder??n por da??os o perjuicios de forma incondicional ante quienes reclamen acci??n de cualquier ??ndole por tal situaci??n.</p>

<p>?? En caso de haber resultado acreedor al incentivo violentando las bases y condiciones de participaci??n, el participante deber?? restituir el mismo y responder?? contra da??os y perjuicios.</p>

<p>?? Cualquier ataque o intento de alteraci??n o manipulaci??n al sistema inform??tico o a la p??gina web o al lugar en el cual se encuentre radicada la misma, genera la anulaci??n de la participaci??n inmediata del participante o bien, descart??ndolo como acreedor de alguno de los incentivos ofrecidos, de acuerdo a lo establecido en el inciso del apartado de Mec??nica de la participaci??n de la promoci??n de estas bases y condiciones.</p>

<p>?? No podr??n participar en la promoci??n empleados, becarios, contratistas, socios, directivos, prestadores de servicios, ni personal docente de la Organizadora, as?? como sus familiares ni dependientes econ??micos. </p>

<p>?? La participaci??n en esta promoci??n y la obtenci??n del incentivo, seg??n sea el caso, no tendr?? costo alguno o requisito adicional por cumplir por parte del participante que el indicado en las mismas. </p>

<p>?? El o los participantes que: (a) transmitan en cualquier forma o distribuyan cualquier material que contenga virus, spyware, hardware o cualquier otro elemento da??ino o potencialmente da??ino, (b) recojan o, de cualquier forma, obtengan indebidamente informaci??n sobre terceros, incluyendo direcciones de correo electr??nico, sin el previo consentimiento del interesado, (c) anoten, reproduzcan o transmitan cualquier material que contenga publicidad o solicitudes con respecto a productos o servicios, sin la previa autorizaci??n del Organizador o Promotor, sus subsidiarias, filiales o grupo de empresas al que pertenece, ser??n descalificados, adem??s de quedar obligados al pago de da??os y perjuicios que hayan sido ocasionados al Organizador, Promotor o dem??s participantes o usuarios de Facebook.</p>

<p><b>AUTORIZACI??N USO DE IMAGEN.</b></p>

<p>Los participantes reconocen y aceptan los t??rminos y condiciones de las presentes Bases al participar en la presente promoci??n por lo que ceden en este acto todos los derechos de propiedad industrial o de autor con respecto a su participaci??n en la Promoci??n a favor de EL ORGANIZADOR, otorg??ndole licencia gratuita ilimitada para el uso de su nombre, imagen, publicaci??n, fotograf??a, reproducci??n etc. no reserv??ndose acci??n o derecho alguno que reclamar en su contra, reconociendo adem??s que no podr??n reclamar regal??as, contraprestaci??n o compensaci??n alguna. En caso de que el Organizador requiera alg??n testimonial por parte del ganador, este se compromete a realizarlo y reconoce que el Organizador podr?? hacer uso de los mismos, s??lo con fines promocionales a trav??s de cualquier medio de comunicaci??n.</p>

<p>Los testimoniales a que se hacen referencia en el p??rrafo anterior ser??n propiedad exclusiva del Organizador de la presente actividad, quien podr?? difundir y utilizar de la manera que m??s convenga a sus intereses, sin que esto implique pago alguno a dicho participante por su aparici??n en cualquier medio de comunicaci??n. En caso de controversia o reclamo de por regal??as por cualquiera de los participantes, las mismas se fijar??n en un m??ximo total de un d??a de Salario M??nimo General Vigente para la Ciudad de M??xico, por cada mes de uso de las mismas en cualquier medio.</p>

<p><b>RESPONSABLE DE LA PROMOCI??N</b></p>

<p>La <b>ORGANIZADORA </b>ser?? la responsable en el manejo de los datos personales que sean proporcionados por los participantes en la creaci??n de su perfil de jugador, los mismos ser??n tratados conforme a lo establecido en la Ley Federal para la Protecci??n de los Datos Personales en Posesi??n de los Particulares, conforme a las finalidades descritas en las presentes bases.</p>

<p>Los participantes podr??n consultar en cualquier tiempo el Aviso de Privacidad del Organizador en https://vips.com.mx/aviso-de-privacidad/.</p>


		
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

