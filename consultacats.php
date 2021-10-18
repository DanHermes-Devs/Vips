<?php
	include_once 'dbconnect.php';


	
$sql3 = "SELECT * FROM categorias_tienda";
$result = $mysqli->query($sql3);



			while($row= mysqli_fetch_array($result)){
							 
			$state = $row['id_cat']." ". $row['nombre']." ". $row['code'];	
				echo '
			<p>'.$state.'</p>
			';

			}
			
?>

