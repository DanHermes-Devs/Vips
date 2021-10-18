<?php
require_once 'dbconnect.php';


$consulta = $mysqli->query("SELECT * FROM  `registros` WHERE	 tdl IS NULL AND LENGTH(nombre) > 3 AND LENGTH(apellido) > 3 AND LENGTH(correo) > 5 LIMIT    1");
//$consulta = $mysqli->query("SELECT * FROM  `registros` WHERE	 correo = 'david.gonzalez0@hotmail.com'");
 $num = $consulta->num_rows;
					 //echo "Filas: ". $num;
					 if($num == 0){echo "Todos los registros procesados.";}


while($rowregh = mysqli_fetch_array($consulta, MYSQLI_ASSOC))
{
$uid = $rowregh['id_registro'];
$nombre = $rowregh['nombre'];
$apellido = $rowregh['apellido'];
$correo = strtolower($rowregh['correo']);
$correo = preg_replace('/[_]+/','_',$correo);
$telefono = $rowregh['telefono'];
$sexo = $rowregh['sexo'];
$utime = $rowregh['fecha_registro'];
$cumple = $rowregh['nacimiento'];
$imagen = $rowregh['foto'];
$randomn = rand();
$foto = $rowregh['foto']."?".$randomn;
$resregh2=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");
$rowregh2=mysqli_fetch_assoc($resregh2);
$facebookh = $rowregh2['facebook_id'];
echo "Recuperando TDL de " .$nombre." ".$correo." <br>ID: ".$uid."</br>";


$wsdl = 'https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl';

			try{
				$clinet=new SoapClient($wsdl, array('trace' => 1));
				$ver =array("programName"=>"WOW Rewards", "contactEmailAddress"=>$correo, "responseType"=>"long");
				$quates=$clinet->GetMember($ver);
				$miembros = json_decode(json_encode( $quates), True);
					 //print_r( $array );
					 //print_r( $quates );
				foreach ($miembros as $miembro){
				}

				foreach($miembro['programsList'] AS $result) {
					foreach($result['program'] AS $topic) {
					}
					$array = array_values($result['earnedPointsList']);
					$array2 = array_values($array[1]);
					$puntostotales = print_r($array2[0]);

				}

			}
			catch(SoapFault $e){
					echo $e->getMessage();
			}

			$consul = $miembro['memberNumber'];

			if(strlen($consul) > 6){

				echo $consul;

				$querytdl = "UPDATE registros SET tdl = '$consul' WHERE id_registro = $uid";
				$resulttdl = $mysqli->query($querytdl) or die("Falló la consulta $querytdl");
				$secondsWait = 10;
				 //sleep(5);
				//header("Location: recuperaWow2");
				echo "<br>TDL Actualizado";
				echo '<title>'.$uid.' TDL Actualizado.</title> <meta http-equiv="refresh" content="2; URL=https://vips.com.mx/recuperaWow2">';

			}

			else{

				echo "NO EN WOW, REGISTRANDO...";
				echo '<title>'.$uid.' NO EN WOW.</title>';

				include_once 'llamada-wow-registro2019.php';

			}



$secondsWait = 10;
header("Refresh:$secondsWait");


}


?>

<style>
body{background:#000; color:#707070;}
</style>
