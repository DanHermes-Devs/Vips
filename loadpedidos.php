<?php
ob_start();
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

if( isset($_SESSION['uservips'])!="" ){

	$uid=$_SESSION['uservips'];

}

else{
	header("Location: /");
}
include_once 'dbconnect.php';

$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$resulth =$mysqli->query($sql3h);
	 $rowregh=mysqli_fetch_assoc($resulth);

		$uid = $rowregh['id_registro'];
		$_SESSION['uservips'] = $uid;
		$nombre = $rowregh['nombre'];
		$apellido = $rowregh['apellido'];
		$correo = $rowregh['correo'];


$sql1n = "SELECT * FROM pedidos_especiales WHERE correo = '$correo' ORDER BY id_pedido DESC";
$result1n = $mysqli->query($sql1n)  or die("Error en".$sql1n);

$numfilas = $result1n->num_rows;

$sqleventos = "SELECT * FROM eventos_especiales WHERE correo = '$correo' AND LENGTH(hora_inicio) > 3 AND codigo IS NOT NULL ORDER BY id_evento DESC";
$resulteventos = $mysqli->query($sqleventos)  or die("Error en".$sqleventos);

$numfilaseventos = $resulteventos->num_rows;

		if($numfilas >0 ){
		echo '<div class="mid" style="display:none;">
		<h2> <div class="line orange"></div>Pedidos especiales</h2>
				<div class="full" >

				';
					while($row1n= mysqli_fetch_array($result1n)){
			$id_pedido = $row1n["id_pedido"];
			$pedido = $row1n["paquetes"];
			$pedido = "• ". preg_replace("/\r\n|\r|\n/",'<br/>• ',$pedido);
			$total = $row1n["total"];
			$fecha_entrega = $row1n["fecha_entrega"];
			$fecha_pedido = $row1n["fecha_pedido"];
			$horario = $row1n["horario"];
			$vips_cercano = $row1n["vips_cercano"];
			$payload = $row1n["payload"];
			$someJSON = '['.$payload.']';
			$codigo_pedido = $row1n["codigo"];

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);


			echo '

				<div class="full cardbg carddom">
				<div class="productos">';

					foreach ($someArray as $key => $value) {

			echo '<div class="infoplatos">';
			echo '<img src="'.$value["foto"].'"><p>'. $value["cantidad"] . " ". $value["clave"] . "- $" . $value["total"].'</p>';
			echo '</div>';
		  }


			echo '</div>
				<div class="total">Total $'.$total.'</div>
				<p class="vermas mas'.$id_pedido.'" onclick="showPedido('.$id_pedido.')">Ver más</p>
				<div class="showmore show'.$id_pedido.'">
					<div class="fechacompra"><p>Fecha de compra</p><p class="righttext">'.$fecha_pedido.'</p></div>
					<div class="fechaentrega"><p>Fecha de entrega</p><p class="righttext">'.$fecha_entrega.'</p></div>
					<div class="horaentrega"><p>Hora de entrega</p><p class="righttext">'.$horario.'</p></div>
					<div class="monto"><p>Monto Total</p><p class="righttext">$'.$total.'</p></div>
					<div class="notas"><p>Notas</p><p class="righttext">Tienes hasta el 07/05 para liquidar tu pedido.</p></div>
					<div class="sucursal"><p>Sucursal de entrega</p><p class="righttext">'.$vips_cercano.'</p></div>
					<div class="code">
						<p>Código</p>
						<img src="http://192.186.240.43/barcode/bar.php?code='.$codigo_pedido.'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2">
						<p>'.$codigo_pedido.'</p>
					</div>
				</div>
				</div>
			';

			}

			echo '</div>


		</div>';

		}
		else{

			echo '<p class="sinpedidos">Aún no tienes ningún pedido, reliza uno <a style="color: #faac4f; font-weight: 500;" href="/pedidos-especiales">aquí</a> y consúltalo en tu perfil mas adelante. </p>';
		}

		if($numfilaseventos >0 ){
		echo '<div class="mid">
		<h2> <div class="line orange"></div>Eventos especiales</h2>
				<div class="full" >

				';
			while($roweventos= mysqli_fetch_array($resulteventos)){
			$id_evento = $roweventos["id_evento"];
			$nombre = $roweventos["nombre"];
			$apellido = $roweventos["apellido"];
			$correo = $roweventos["correo"];
			$tel = $roweventos["telefono"];
			$fecha_evento = $roweventos["fecha_evento"];
			$hora1 = $roweventos["hora_inicio"];
			$hora2 = $roweventos["hora_termino"];
			$costo = $roweventos["costo_menu"];
			$personas = $roweventos["personas"];
			$observaciones = $roweventos["observaciones"];
			$monedero = $roweventos["monedero"];
			$sucursal = $roweventos["sucursal"];
			$codigo_evento = $roweventos["codigo"];
			$total = $roweventos["total"];
			$m1000 = $roweventos["m1000"];
			$m5000 = $roweventos["m5000"];
			$m10000 = $roweventos["m10000"];
			$m50000 = $roweventos["m50000"];
			$totalm = $roweventos["totalmonedero"];
			$fecha_registro2 = $roweventos["fecha_envio"];
			$monedero = $roweventos["monedero"];
			$sucursal = $roweventos["sucursal"];



			echo '

				<div class="full cardbg carddom">
				<div class="productos">';


			echo '</div>
				<div class="aboutevento">'.$sucursal.'<br><span class="fechaevento">('.$fecha_evento.' de '.$hora1.' a '.$hora2.')</span></div>
				<p class="vermas mas'.$id_evento.'" onclick="showPedido('.$id_evento.')">Ver más</p>
				<div class="showmore show'.$id_evento.'">
					<div class="sucursal"><p>Sucursal</p><p class="righttext">'.$sucursal.'</p></div>
					<div class="fechacompra"><p>Fecha del evento</p><p class="righttext">'.$fecha_evento.'</p></div>
					<div class="horaentrega"><p>Horario</p><p class="righttext"> '.$hora1.' a '.$hora2.'</p></div>
					<div class="fechacompra"><p>Costo del menú</p><p class="righttext">'.$costo.'</p></div>
					<div class="fechacompra"><p>No. de personas</p><p class="righttext">'.$personas.'</p></div>
					<div class="monto"><p>Monto del evento</p><p class="righttext">$'.$total.'</p></div>

					<div class="monto"><p>Observaciones</p><p class="righttext">'.$observaciones.'</p></div>
					<div class="notas"><p>Notas</p><p class="righttext">Tienes hasta 7 días antes del evento para liquidarlo.</p></div>

					<div class="code">
						<center>
							<img src="http://vips.digitaltryout.com/barcode/bar.php?code='.$codigo_evento.'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2" style="margin-top:15px; width:50%; max-width:290px;"><p><b>'.$codigo_evento.'</b></p><p style="font-size:12px;">*Monto del código: $'.$totalm.'</p></center>

							<p>Fecha y Hora de reserva: '.$fecha_registro2.'</p>

							<p style="font-size:11px; font-weight:100;">*La cantidad indicada en el código únicamente es de referencia, este código electrónico obliga al CLIENTE únicamente al pago de $'.$total.'. <span id="morelegales" style="color: #ed7124; cursor:pointer;">Ver términos y condiciones.</span></p>


					</div>
				</div>
				</div>
			';

			}

			echo '</div>


		</div>';

		}
		else{

			echo '<p class="sinpedidos">Aún no tienes ningún pedido, reliza uno <a style="color: #faac4f; font-weight: 500;" href="/pedidos-especiales">aquí</a> y consúltalo en tu perfil mas adelante. </p>';
		}


		if($numfilas <1 && $numfilaseventos <1 ){
				echo '<style>#Mis-pedidos{display:none;}</style><p class="sinpedidos">Aún no tienes ningún pedido, reliza uno <a style="color: #faac4f; font-weight: 500;" href="/pedidos-especiales">aquí</a> y consúltalo en tu perfil mas adelante. </p>';

		}





?>
