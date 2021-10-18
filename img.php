<?php



$cupon = $_GET['cupon'];

$img = "cupons/".$cupon.'.png';

error_reporting(E_ERROR | E_PARSE);

	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

include('dbconnect.php');



$decode = urldecode($cupon);

$string = "'".$decode."'";





$query = "SELECT * FROM codigos_cupones WHERE cupon = '$cupon' AND activo = 0 LIMIT 1";

//$query = "SELECT * FROM codigos_cupones WHERE cupon = '$cupon' ORDER BY RAND()  LIMIT 1";

$result = $mysqli->query($query) or die("Falló la consulta $query");

$numero_filas = $result->num_rows;

$row = mysqli_fetch_assoc($result);

$code	= $row['codigo'];



$newcode = "http://192.186.240.43/barcode/barcode.php?codetype=Code128&size=50&text=".$code."&print=true&sizefactor=1.5";



// Load the image where the logo will be embeded into

$image = imagecreatefrompng($img);

imagealphablending($image, true);

imagesavealpha($image, true);

$filename ="Cupon-".$cupon."-".$code.".png";



// Load the logo image

$logoImage = imagecreatefrompng($newcode);

imagealphablending($logoImage, true);

imagesavealpha($logoImage, true);

$white = imagecolorallocate($image, 255,255, 255);

//imagefill ($image , 0 , 30 , $white );

// Get dimensions

$imageWidth=imagesx($image);

$imageHeight=imagesy($image);



$logoWidth=imagesx($logoImage);

$logoHeight=imagesy($logoImage);



// Paste the logo

imagecopy(

   // destination

   $image,

   // source

   $logoImage,

   // destination x and y

   // destination x and y

   ($imageWidth-$logoWidth)/2, 640,

   // source x and y

   0, 0,

   // width and height of the area of the source to copy

   $logoWidth, $logoHeight);



// Set type of image and send the output

header("Content-type: image/png");

header("Content-Disposition: Attachment; filename=$filename");

imagepng($image);



// Release memory

imageDestroy($image);

imageDestroy($imageLogo);



$query2 = "UPDATE codigos_cupones SET activo = 1 WHERE codigo = '$code'";

$result2 = $mysqli->query($query2) or die("Falló la consulta $query2");





?>

