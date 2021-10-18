<?php

if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
	require_once 'dbconnect.php';

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];


	$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$resulth =$mysqli->query($sql3h);
	 $rowregh=mysqli_fetch_assoc($resulth);

		$uid = $rowregh['id_registro'];
		$_SESSION['uservips'] = $uid;
		$nombre = $rowregh['nombre'];
		$apellido = $rowregh['apellido'];
		$correo = $rowregh['correo'];
		$telefono = $rowregh['telefono'];
		$sexo = $rowregh['sexo'];
		$utime = $rowregh['fecha_registro'];
		$cumple = $rowregh['nacimiento'];
		$imagen = $rowregh['foto'];
		$tdl = $rowregh['tdl'];
		$randomn = rand();
		//$foto = $rowregh['foto']."?".$randomn;
		$foto = $rowregh['foto'];
		$resregh2=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");
		$rowregh2=mysqli_fetch_assoc($resregh2);
		$facebookh = $rowregh2['facebook_id'];

		$sesion = true;

	}
	
	$wsdl = 'https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';
	//$wsdl = 'https://soatest.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';

	try{
			$clinet=new SoapClient($wsdl, array('trace' => 1));
			$ver =array("programName"=>"WOW Rewards", "contactEmailAddress"=>$correo, "responseType"=>"long");
			$quates=$clinet->GetMember($ver);
			$miembros = json_decode(json_encode( $quates), True);
				 //print_r( $array );
				 //print_r( $quates );
			foreach ($miembros as $miembro){
			}

	}
	catch(SoapFault $e){
		echo $e->getMessage();
	}


				if(strlen($miembro['memberNumber']) > 5){
					echo '<img class="codigobarra" src="barcode.php?text='.$miembro['memberNumber'].'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2" alt="">';
					
					
					$cardnumber = $miembro['memberNumber'];
					
					$querytdl = "UPDATE registros SET tdl = $cardnumber WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
					$resulttdl = $mysqli->query($querytdl) or die("Falló la consulta $querytdl");
				}

				else{
					echo '<p class="nocard">Tu tarjeta se generará pronto..</p>';

				}


?>