<?php
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;

}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
}
require_once '../dbconnect.php';
$sqlav = "SELECT * FROM usuarios_maraton WHERE id_user= '$uid'";
$resultav =$mysqli->query($sqlav);
 $rowregav=mysqli_fetch_assoc($resultav);

$numfilasav = $resultav->num_rows;


if($numfilasav >0){
    $uid = $rowregav['id_user'];
    $numavatar= $rowregav['avatar'];
}

$id = $_GET["id"];
$sql3h = "SELECT * FROM regalos_maraton WHERE id= $id";
$resulth =$mysqli->query($sql3h);
 $rowregh=mysqli_fetch_assoc($resulth);
 $tipo = $rowregh["tipo"];

 if($tipo == "cupon"){
     $rutaimg ="images/cupones/MIS_LOGROS_ART-";
     $mensaje = "¡Ganaste un cupón! <br> Guárdalo para usarlo más adelante";
     $funcion = 'saveRegalo('.$id.')';
     $linkfb = '';
 }

 if($tipo == "descuento"){
    $rutaimg ="images/descuentos/DESCUENTOS_ART-";
    $mensaje = "¡Ganaste un descuento en Vips! <br> Guárdalo para usarlo más adelante";
    $funcion = 'saveRegalo('.$id.')';
    $linkfb = '';
}

if($tipo == "postal" && $id == 9){
    $id = 1;
}

if($tipo == "postal" && $id == 10){
    $id = 2;
}
if($tipo == "postal" && $id == 11){
    $id = 3;
}


if($tipo == "postal"){
    $rutaimg ="images/postales/A".$numavatar."/POSTALES_MN_VIPS_LP-0";
    $mensaje = "¡Ganaste una postal! <br> Compártela en Facebook y gana 10 puntos adicionales";
    $funcion = 'sharePostal('.$_GET["id"].'); saveRegalo('.$_GET["id"].');';
    $linkfb = 'target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/maratonnavideno/maraton/postal?p='.$id.'-'.$numavatar.'"';
}

echo '<img class="grow" onclick="'.$funcion.'" src="'.$rutaimg.$id.'.png" alt="" '.$linkfb.'>';
echo '<p class="mensajeregalo">'.$mensaje.'</p>';
echo '<br><span class="guardarbtn" onclick="saveRegalo('.$_GET["id"].')">Guardar regalo</span>';
echo '<br><span class="descartarbtn" onclick="descartar();">Descartar regalo</span>';
?>
