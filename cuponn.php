<?php
session_start();
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Connection: close");

$promoid = $_GET['id'];
$promo = $_GET['promo'];
include_once 'dbconnect.php';
if( isset($_SESSION['uservips'])!="" ){
    $uid=$_SESSION['uservips'];
}
if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
  $_SESSION['uservips'] = $userid;


}
$userid = "AB";
if(strlen($promoid)<2 || strlen($promo)<2 || strlen($userid)<1){
  header("Location: /promociones/cupones");
}
else{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    //CURLOPT_URL => "http://stage.cupones.alsea.com.mx/uaa/oauth/token?grant_type=client_credentials",
    CURLOPT_URL => "http://cupones.alsea.com.mx/uaa/oauth/token?grant_type=client_credentials",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
      //"authorization: Basic Vmlwc0FwcEN0ZTpWMXA1NHBwQ2wxM243Mw==",
      "authorization: Basic Vmlwc0FwcEN0ZTpWMXA1NHBwQ2wxM243Mw==",
      "cache-control: no-cache",
    "Content-Length: 0",
      "content-type: application/json",
      "postman-token: 4bc14b08-dbaf-d2b2-4287-9e46e6680587"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    
    
  $json = json_decode($response);

  $token = $json->access_token; 


  date_default_timezone_set("America/Mexico_City");
  $fecha = date("Y").date("m").date("d").date("H").date("i").date("s"); 
  //echo "UID00000CMX".$fecha;

  $curl2 = curl_init();
  $uidcupon = "UID00000CMX".$fecha;
  curl_setopt_array($curl2, array(
    //CURLOPT_URL => "http://stage.cupones.alsea.com.mx/ext/WSCupones/cupones-api/v1/cupones?fcUID=".$uid."",
    CURLOPT_URL => "http://cupones.alsea.com.mx/ext/WSCupones/cupones-api/v1/cupones?fcUID=".$uidcupon."",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r\n    \"fcCampanaID\":\"1CC\",\r\n    \"fcPromocionID\":\"".$promoid."\",\r\n    \"fiPaisID\":1\r\n}",
    CURLOPT_HTTPHEADER => array(
      "authorization: bearer ".$token."",
      "cache-control: no-cache",
      "content-type: application/json",
      "postman-token: 13d6b185-c5c8-c990-2690-36d8aaa53428"
    ),
  ));

  $response2 = curl_exec($curl2);
  $err2 = curl_error($curl2);

  curl_close($curl2);

  if ($err2) {
    echo "cURL Error #:" . $err2;
  } else {
    //echo $response2;
    
    $json2 = json_decode($response2);

  $code = $json2->fcFolioCuponID; 

  //echo $code;
  }
  }

  $image = imagecreatefrompng('cupons/'.$promo.'.png');
  $imageSize = getimagesize('cupons/'.$promo.'.png');

  $watermark = imagecreatefrompng('http://192.186.240.43/barcode/bar.php?code='.$code.'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2');

    $white = imagecolorallocate($image, 0, 0, 0);
    $font = "css/fonts/program/ProgramOT-Bold.ttf";
    $text = $code;
    $linkimg =$path.$text.$ext;
    imagettftext($image, 20, 0, 230, 650, $white, $font, $text);


  $watermark_o_width = imagesx($watermark);
  $watermark_o_height = imagesy($watermark);

  $newWatermarkWidth = $imageSize[0]-350;
  $newWatermarkHeight = $watermark_o_height * $newWatermarkWidth / $watermark_o_width;

  imagecopyresized($image, $watermark, $imageSize[0]/2 - $newWatermarkWidth/2, 660, 0, 0, $newWatermarkWidth, $newWatermarkHeight, imagesx($watermark), imagesy($watermark));



  $filename ="Cupon-".$promo."-".$code.".png";


  $ip = getenv('HTTP_CLIENT_IP')?:
      getenv('HTTP_X_FORWARDED_FOR')?:
      getenv('HTTP_X_FORWARDED')?:
      getenv('HTTP_FORWARDED_FOR')?:
      getenv('HTTP_FORWARDED')?:
      getenv('REMOTE_ADDR');
  $agent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
  $finish_time = time();
  $texto_finish= date("d/m/y h:i:s a", $finish_time);
  $nombrecupon = trim($promo);
  $nombrecupon = strip_tags($nombrecupon);
  $nombrecupon = htmlspecialchars($nombrecupon);
          
  $query = "INSERT INTO log_descargas_cupones(id_usuario, codigo_cupon, nombre_cupon, fecha, ip, browser) VALUES('$userid', '$code','$nombrecupon', '$texto_finish', '$ip', '$agent')";

            $res = $mysqli->query($query) or die("Ocurrió un error al enerar tu cupón, por favor intenta nuevamente.");

  header("Content-type: image/png");

  header("Content-Disposition: Attachment; filename=$filename");
  imagepng($image);

  imagedestroy($image);
  imagedestroy($watermark);
}