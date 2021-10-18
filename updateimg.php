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
	if( isset($_SESSION['uservips'])){
		$owner = true;
	}
	include_once 'dbconnect.php';

	$banner = $_POST['banner'];
	$user = $_SESSION['uservips'];
		function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }



if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename= "photo-".$_SESSION['uservips'].$ext;
	$target_path = "uploads/".$imagename;


if(move_uploaded_file($temp_name, $target_path)) {


	$ip = getenv('HTTP_CLIENT_IP')?:
	getenv('HTTP_X_FORWARDED_FOR')?:
	getenv('HTTP_X_FORWARDED')?:
	getenv('HTTP_FORWARDED_FOR')?:
	getenv('HTTP_FORWARDED')?:
	getenv('REMOTE_ADDR');

	$agent = mysqli_real_escape_string($_SERVER['HTTP_USER_AGENT']);

	$finish_time = time();

	$texto_finish= date("d/m/y h:i:s a", $finish_time);

	$rutaimg ="'".$target_path."'";



	//$query_upload="INSERT into 'images_tbl' ('images_path','submission_date') VALUES ('".$target_path."','".date("Y-m-d")."')";
	$query_update="UPDATE registros SET foto = $rutaimg WHERE id_registro = $user or facebook_id= $user OR google_id = $user";
	$result = $mysqli->query($query_update) or die("error");

	echo "<span style='color: #71D16B;
font-weight: 600;'>Tu foto se actualizó correctamente</span>";

}else{
	echo "<span>No se pudo actualizar, por favor intenta más tarde</span>";
   exit("Error al cargar la imagen");
}

}




?>
