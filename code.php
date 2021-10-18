<?php
include_once '../dbconnect.php';

if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];


	$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$resulth =$mysqli->query($sql3h);
	$rowregh=mysqli_fetch_assoc($resulth);
	$uid = $rowregh['id_registro'];
	$_SESSION['uservips'] = $uid;



	}
	
$sql1n = "SELECT * FROM pedidos_especiales WHERE id_usuario = '$uid' ORDER BY id_pedido DESC LIMIT 1";
$result1n = $mysqli->query($sql1n)  or die("Error en".$sql1n);

		while($row1n= mysqli_fetch_array($result1n)){

			$pedido = $row1n["paquetes"];
			$pedido = "• ". preg_replace("/\r\n|\r|\n/",'<br/><br/>• ',$pedido);
			$total = $row1n["total"];
			$fecha_entrega = $row1n["fecha_entrega"];
			$horario = $row1n["horario"];
			$vips_cercano = $row1n["vips_cercano"];
			$payload = $row1n["payload"];
			$codigo_pedido = $row1n["codigo"];

			}
			
			 $someJSON = '['.$payload.']';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  //print_r($someArray);        // Dump all data of the Array
  //echo $someArray[0]["clave"]; // Access Array data
  



?>

<img data-id="<?php echo $codigo_pedido;?>" src="http://192.186.240.43/barcode/bar.php?code=<?php echo $codigo_pedido;?>&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2" class="code">
<p class="codigop"><?php echo $codigo_pedido;?></p>
<p style="font-weight: 500; background: #faac4f; color: #fff; padding: 20px;">Presenta este código en<b> <?php echo $vips_cercano;?></b>. <br>Tienes hasta el día el día <span style="color:#ef3e42">7 de mayo</span> <br> para pagar el 100% de tu pedido*</p>

<p>Puedes tomar foto del código o utilizar el enviado a tu correo.</p>

<p class="discperfil">* Tu orden se programa al recibir el 100% del pago.</p>