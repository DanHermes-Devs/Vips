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
$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
$resulth =$mysqli->query($sql3h);
 $rowregh=mysqli_fetch_assoc($resulth);

    //$uid = $rowregh['id_registro'];
    //$_SESSION['uservips'] = $uid;
    $nombre = $rowregh['nombre'];
    $apellido = $rowregh['apellido'];
    
 $sqltickets = "SELECT COUNT(ticket) as tickets FROM tickets_disney WHERE id >333 AND id_usuario= '$uid'";
$resulttickets =$mysqli->query($sqltickets);
 $rowtickets=mysqli_fetch_assoc($resulttickets);
 $tickets = $rowtickets['tickets'];


$sqlav = "SELECT * FROM usuarios_maraton WHERE id_user= '$uid'";
$resultav =$mysqli->query($sqlav);
 $rowregav=mysqli_fetch_assoc($resultav);

$numfilasav = $resultav->num_rows;


if($numfilasav >0){
    $uid = $rowregav['id_user'];
    $numavatar= $rowregav['avatar'];
}


$sqlpuntos = "SELECT SUM(puntos) as puntostotal FROM tickets_disney WHERE id >333 AND id_usuario= '$uid'";
$resultpuntos =$mysqli->query($sqlpuntos);
 $rowpuntos=mysqli_fetch_assoc($resultpuntos);

 $sqlpuntos2 = "SELECT SUM(shared) as puntostotal2 FROM logros_maraton WHERE id_user= '$uid'";
$resultpuntos2 =$mysqli->query($sqlpuntos2);
 $rowpuntos2=mysqli_fetch_assoc($resultpuntos2);

$puntospostales = $rowpuntos2['puntostotal2'] * 10;
 $puntos = $rowpuntos['puntostotal'] + $puntospostales ;
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

 $sqltickets = "SELECT COUNT(ticket) as tickets FROM tickets_disney WHERE id >333 AND id_usuario= '$uid'";
$resulttickets =$mysqli->query($sqltickets);
 $rowtickets=mysqli_fetch_assoc($resulttickets);
 $tickets = $rowtickets['tickets'];

 ?>
 <style>
 .logoutmaraton {
	color: #fff;
	font-family: "Museo 500";
	margin-top: 25px;
	display: inline-block;
}
.logoutmaraton:hover {
	color: #fff;
	text-decoration:none;
}
aside.menu_lateral h1, .panel-title>a, .panel-title>a:active {
    font-size: 1rem;
}
#collapseTwo .panel-body {
    color: #fff;
    font-family: "Museo 700";
    padding: 0 0 20px 0;
    font-size: 18px;
}
.panel-body span {
    font-size: 14px;
    line-height: 1;
    font-family: "Museo 500";
}
 </style>
<div class="container">
  <!-- HEADER -->
  <div class="row my-2">
    <div class="col-6">
      <a href="/maratonnavideno/maraton" class="ml-3"><img src="images/logo-vips.svg" alt="Vips" class="logo"></a>
    </div>
    <div class="col-6 text-right">
      <a class="menu_btn_close" onclick="close_menu()">
        <img src="images/close.svg" alt="Cerrar" width="24">
      </a>
    </div>
  </div>
  <!-- END HEADER -->
  <!-- USER INFO -->
  <div class="row my-3">
    <div class="col-4">
      <img src="images/avatar_0<?php echo $numavatar;?>_stand.png" alt="Avatar" class="img-fluid mx-auto">
      <img src="images/avatars/avatar_0<?php echo $numavatar;?>_walk_01.png" alt="Avatar" class="img-fluid mx-auto nodisplay" >
      <img src="images/avatars/avatar_0<?php echo $numavatar;?>_walk_02.png" alt="Avatar" class="img-fluid mx-auto nodisplay" >
      <img src="images/pavo/pavo_stand.png" alt="Avatar" class="img-fluid mx-auto nodisplay" >
      <img src="images/pavo/pavo_walk_02.png" alt="Avatar" class="img-fluid mx-auto nodisplay" >


    </div>
    <div class="col-8">
      <div class="row h-100">
        <div class="col-sm-12 my-auto">
          <p class="user_name museo900 fc_white"><?php echo ucwords( $nombre )." ".ucwords( $apellido );?></p>
          <p class="user_points museo700 fc_white"><?php echo $puntos;?> PTS</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END USER INFO -->
  <!-- MENU OPTIONS -->
  <div class="row">
    <div class="col-12">
      <h1 class="menu_title museo900 txt_uppercase fc_yellow">Mis logros</h1>
    </div>
    <div class="col-12">

      <!-- COLLAPSE PANELS -->
      <div class="wrapper center-block">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default panel_border_bottom">
            <div class="panel-heading" role="tab" id="headingOne" onclick="refreshCupones();">
              <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Cupones
              </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <section class="variable slider slidercupones">
                  <?php
                  $sqlcupons = "SELECT * FROM logros_maraton WHERE id_user= '$uid' AND id_premio < 5";
                  $resultcupons = $mysqli->query($sqlcupons)  or die("Error en".$sqlcupons);
                  $numfilascupons = $resultcupons->num_rows;


                  			while($rowcupons= mysqli_fetch_array($resultcupons)){
                              $imagencupon ="images/cupones/MIS_LOGROS_ART-00".$rowcupons['id_premio'].".png";
                              $codecupon = "'".$rowcupons['codigo']."'";
                  							echo '
                                <div onclick="openCupon('.$rowcupons['id_premio'].','.$codecupon.')">
                                  <img src="'.$imagencupon.'" alt="Cupon">
                                </div>
                                ';
                        }
                        echo '</section>';

                        if($numfilascupons ==0){
                            echo '
                            <p class="textosinlogros">
                              Aún no tienes ningún cupón, sigue participando para avanzar y encontrar más regalos.
                            </p>
                            ';
                        }
                  ?>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel_border_bottom">
            <div class="panel-heading" role="tab" id="headingTwo" >
              <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Puntos
              </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
               Tickets registrados: <span><?php echo $tickets;?></span><br>
               Puntos: <span><?php echo $puntos;?></span><br>
               Tickets con platillos navideños: <span><?php echo $mensajetickets;?></span> <br>
               Postales compartidas: <span>0</span>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel_border_bottom">
            <div class="panel-heading" role="tab" id="headingThree" onclick="refreshDescuentos();">
              <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Descuentos
              </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <section class="variable slider sliderdescuentos">
                  <?php
                  $sqldesc = "SELECT * FROM logros_maraton WHERE id_user= '$uid' AND id_premio > 4  AND id_premio < 9";
                  $resultdesc = $mysqli->query($sqldesc)  or die("Error en".$sqldesc);
                  $numfilasdesc = $resultdesc->num_rows;
                 

                  			while($rowdesc= mysqli_fetch_array($resultdesc)){
                          $codecupon = "'".$rowdesc['codigo']."'";
                              $imagendesc ="images/descuentos/CUPONES_ART-00".$rowdesc['id_premio'].".png";
                  							echo '
                                <div onclick="openCupon('.$rowdesc['id_premio'].','.$codecupon.')">
                                  <img src="'.$imagendesc.'" alt="Descuento">
                                </div>
                                ';

                        }
                        echo '</section>';

                        if($numfilasdesc ==0){
                            echo '
                            <p class="textosinlogros">
                              Aún no tienes ningún descuento, sigue participando para avanzar y encontrar más regalos.
                            </p>
                            ';
                        }
                  ?>
              </div>
            </div>
          </div>


          <div class="panel panel-default panel_border_bottom">
            <div class="panel-heading" role="tab" id="heading4" onclick="refreshPostales();">
              <h4 class="panel-title">
              <a class="collapsed"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapseThree">
               Postales
              </a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <section class="variable slider sliderpostales">
                  <?php
                  $sqlpostal = "SELECT * FROM logros_maraton WHERE id_user= '$uid' AND id_premio > 8";
                  $resultpostal = $mysqli->query($sqlpostal)  or die("Error en".$sqlpostal);
                  $numfilaspostal = $resultpostal->num_rows;

                        while($rowpostal= mysqli_fetch_array($resultpostal)){
                              $idpostal = $rowpostal['id_premio'] - 8;
                              $imagenpostal ="images/postales/A".$numavatar."/POSTALES_MN_VIPS_FB-0".$idpostal.".png";
                              $codecupon = "postal";
                                echo '
                                <div onclick="openCupon('.$rowpostal['id_premio'].','.$numavatar.')">
                                  <img src="'.$imagenpostal.'" alt="Postal">
                                </div>
                                ';

                        }
                        echo '</section>';

                        if($numfilaspostal ==0){
                            echo '
                            <p class="textosinlogros">
                              Aún no tienes ninguna postal, sigue participando para avanzar y encontrar más regalos.
                            </p>
                            ';
                        }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END COLLAPSE PANELS -->
      <a href="/logout-maraton" class="logoutmaraton">Cerrar sesión</a>
    </div>
  </div>
  <!-- END MENU OPTIONS -->
</div>
