<?php
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

	include_once 'dbconnect.php';
	$uid=$_SESSION['uservips'];


	
$sql1 = "SELECT * FROM domicilio WHERE radio = 'casa' AND id_usuario = '$uid' LIMIT 1";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);
$numfilas1 = $result1->num_rows;


if($numfilas1 ==1){
	
	
				$f1 = 1;
				
				echo '
		<style>
		
		#chkcasa{display:none;}
		.barperfil3, .barperfil4{background:#fbd348;}
		</style>
		';
}




			while($row1= mysqli_fetch_array($result1)){
							 
				echo '<a onclick="loadform('.$row1['id_domicilio'].');" class="openform popup-with-move-anim pencil" data-user="'.$uid.'" data-id="'.$row1['id_domicilio'].'" ><div class="direccion"><h5 class="predeterminada'.$row1['predeterminada'].'">DIRECCIÓN '.$row1['radio'].'</h5>';
				echo '<p>'.$row1['calle']." ". $row1['ext']. " ".$row1['inte']. ", C.P. ".$row1['cp'].'</p>';
				echo '<p style="display:none;"> Cel. '.$row1['tel'].'</p></div></a><form name="formbtndel'.$row1["id_domicilio"].'" id="formbtndel'.$row1["id_domicilio"].'" onsubmit="return false" action="deldir?id='.$row1["id_domicilio"].'" enctype="multipart/form-data" method="post">
			 <input id="deletedireccion" onclick="delDir('.$row1['id_domicilio'].')"; type="image" src="/img/borrar.png" WIDTH="22px"  BORDER="0" ALT="Eliminar" style="width:22px; margin: 0 10px; cursor: pointer">
			</form>';
								//echo '<p>'.$row['id_usuario'].'</p><br><br>';

			}
						
$sql2 = "SELECT * FROM domicilio WHERE radio = 'oficina' AND id_usuario = '$uid' LIMIT 1";
$result2 = $mysqli->query($sql2)  or die("Error en".$sql2);
$numfilas2 = $result2->num_rows;

if($numfilas2 ==1){
	
	
				$f2 = 1;
						echo '
		<style>
		
		#chkoficina{display:none;}
		.barperfil3, .barperfil4{background:#fbd348;}
		</style>
		';
}
			while($row2= mysqli_fetch_array($result2)){
				
		

							 
								echo '<a onclick="loadform('.$row2['id_domicilio'].');" class="openform popup-with-move-anim pencil" data-id="'.$row2['id_domicilio'].'" ><div class="direccion"><h5 class="predeterminada'.$row2['predeterminada'].'">DIRECCIÓN '.$row2['radio'].'</h5>';
								echo '<p>'.$row2['calle']." ". $row2['ext']. " ".$row2['inte']. ", C.P. ".$row2['cp'].'</p>';
								echo '<p style="display:none;"> Cel. '.$row2['tel'].'</p></div></a> 
								<form name="formbtndel'.$row2["id_domicilio"].'" id="formbtndel'.$row2["id_domicilio"].'" onsubmit="return false" action="deldir?id='.$row2["id_domicilio"].'" enctype="multipart/form-data" method="post">
			 <input onclick="delDir('.$row2['id_domicilio'].')"; type="image" src="/img/borrar.png" WIDTH="22px"  BORDER="0" ALT="Eliminar" style="width:22px; margin: 0 10px; cursor: pointer">
			</form>
								';
								//echo '<p>'.$row['id_usuario'].'</p><br><br>';

						}

						
$sql3 = "SELECT * FROM domicilio WHERE radio = 'otro' AND id_usuario = '$uid' LIMIT 1";
$result3 = $mysqli->query($sql3)  or die("Error en".$sql3);
$numfilas3 = $result3->num_rows;

if($numfilas3 ==1){
	
			echo '
		<style>
		
		#chkotro{display:none;}
		.barperfil3, .barperfil4{background:#fbd348;}
		</style>
		';
	
	
				$f3 = 1;
}

			while($row3= mysqli_fetch_array($result3)){
				

							 
								echo '<a onclick="loadform('.$row3['id_domicilio'].');" class="openform popup-with-move-anim pencil" data-id="'.$row3['id_domicilio'].'"><div class="direccion"><h5 class="predeterminada'.$row3['predeterminada'].'">OTRA DIRECCIÓN </h5>';
								echo '<p>'.$row3['calle']." ". $row3['ext']. " ".$row3['inte']. ", C.P. ".$row3['cp'].'</p>';
								echo '<p style="display:none;"> Cel. '.$row3['tel'].'</p></div></a><form name="formbtndel'.$row3["id_domicilio"].'" id="formbtndel'.$row3["id_domicilio"].'" onsubmit="return false" action="deldir?id='.$row3["id_domicilio"].'" enctype="multipart/form-data" method="post">
			 <input onclick="delDir('.$row3['id_domicilio'].')"; type="image" src="/img/borrar.png" WIDTH="22px"  BORDER="0" ALT="Eliminar" style="width:22px; margin: 0 10px; cursor: pointer">
			</form>';
								//echo '<p>'.$row['id_usuario'].'</p><br><br>';

						}
	

	$sum = $f1 + $f2 + $f3;
	
	if($sum == 3){
		
		echo '
		<style>
		
		#formreg{display:none;}
		</style>
		';
	}





?>


