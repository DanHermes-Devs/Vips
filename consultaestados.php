<?php
	include_once 'dbconnect.php';


	
$sql3 = "SELECT * FROM stores WHERE desactivar = 0 GROUP BY state";
$result = $mysqli->query($sql3);

			

echo "<select>";
$row=mysqli_fetch_assoc($result);
$state = $row['state'];	
	echo '
<option>'.$state.'</option>
';



echo "</select>";
?>


