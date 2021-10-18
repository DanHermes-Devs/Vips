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
else{
    header("Location: /maratonnavideno/maraton");
}

require_once '../dbconnect.php';
$sqlpuntos = "SELECT SUM(puntos) as puntostotal FROM tickets_disney WHERE id >333 AND id_usuario= '$uid'";
$resultpuntos =$mysqli->query($sqlpuntos);
 $rowpuntos=mysqli_fetch_assoc($resultpuntos);
 $puntos = $rowpuntos['puntostotal'];
 $porcentaje = 0;
 if($puntos < 1 ){$porcentaje = 0; $puntos = 0; $mensajetickets="0";}
 if($puntos > 0 ){$porcentaje = 10; $mensajetickets=" Tus tickets están en valoración y tus puntos extras serán sumados al validar su contenido.";}
 if($puntos > 199 ){$porcentaje = 20;}
 if($puntos > 299 ){$porcentaje = 30;}
 if($puntos > 399 ){$porcentaje = 40;}
 if($puntos > 499 ){$porcentaje = 50;}
 if($puntos > 599 ){$porcentaje = 60;}
 if($puntos > 699 ){$porcentaje = 70;}
 if($puntos > 799 ){$porcentaje = 80;}
 if($puntos > 899 ){$porcentaje = 90;}
 if($puntos > 999 ){$porcentaje = 100;}


$sqlcupons = "SELECT * FROM logros_maraton WHERE id_user= '$uid'";
$resultcupons = $mysqli->query($sqlcupons)  or die("Error en".$sqlcupons);
$numfilascupons = $resultcupons->num_rows;

$sql3h = "SELECT * FROM regalos_maraton WHERE activo = 1 ORDER BY RAND() LIMIT 1;";
$resulth =$mysqli->query($sql3h);
$rowregh=mysqli_fetch_assoc($resulth);
$promo = '"'.$rowregh["tipo"].'"';
$idregalo = $rowregh["id"];

if($numfilascupons ==0){
  ?> 
  <div class="contregalo">
  <div class="regalo pulse grow" onclick='openRegalo(<?php  echo $promo." , ".$idregalo;?>)'></div>
<p class="textregalo">DESCUBRE <br>UNA SORPRESA</p>
</div>
<?php
}
else{
$random = rand(1, 100);

if($random < 21){
?> 


<div data-rand="<?php echo $random; ?>" class="contregalo">
  <div class="regalo pulse grow" onclick='openRegalo(<?php  echo $promo." , ".$idregalo;?>)'></div>
<p class="textregalo">DESCUBRE <br>UNA SORPRESA</p>
</div>

<?php 
}
else{
?>
<div data-rand="<?php echo $random; ?>" class="contregalo2" onclick='openMap(<?php  echo $porcentaje;?>)'>
<p class="textsigue">Continúa registrando tickets para avanzar y perseguir a Pavips</p>
  <div class="mapa pulse grow"  style="background-position:<?php echo $porcentaje;?>%"></div>
<p class="textregalo" >ESTÁS AQUÍ</p>
</div>

<?php 
}
} ?>




