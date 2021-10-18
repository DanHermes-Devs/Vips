<?php
session_start();
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;

}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
}
else{
    header("Location: /maratonnavideno/maraton");
}
	include_once '../dbconnect.php';

	if (!empty($_POST["id"])){
		

		// clean user inputs to prevent sql injections

		$user = trim($_POST['user']);
		$user = strip_tags($user);
		$user = htmlspecialchars($user);

		$postal = trim($_POST['id']);
		$postal = strip_tags($postal);
		$postal = htmlspecialchars($postal);
		
		$queryt = "UPDATE logros_maraton SET shared = 1 WHERE id_user = '$user' AND id_premio = $postal";
		$resultt = $mysqli->query($queryt) or die("Falló la consulta $queryt");
		$numfilast = $resultt->num_rows;

	}

	else{
		echo "Error";
	}

?>
