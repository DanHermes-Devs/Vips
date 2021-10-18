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

if( isset($_SESSION['uservips'])!="" ){
    $uid=$_SESSION['uservips'];


        $sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
$resulth =$mysqli->query($sql3h);
 $rowregh=mysqli_fetch_assoc($resulth);

    $uid = $rowregh['id_registro'];
    $_SESSION['uservips'] = $uid;
    $nombre = $rowregh['nombre'];
    $apellido = $rowregh['apellido'];
    $correo = $rowregh['correo'];
    $telefono = $rowregh['telefono'];
    $sexo = $rowregh['sexo'];
    $utime = $rowregh['fecha_registro'];
    $cumple = $rowregh['nacimiento'];
    $imagen = $rowregh['foto'];
    $tdl = $rowregh['tdl'];
    $randomn = rand();
    //$foto = $rowregh['foto']."?".$randomn;
    $foto = $rowregh['foto'];
    $resregh2=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");
    $rowregh2=mysqli_fetch_assoc($resregh2);
    $facebookh = $rowregh2['facebook_id'];
    $sesion = true;



if (strlen($facebookh)>3 AND strlen($imagen)<3){
        $marginavatar = "margin-top: 0px";
    $avatarimg ="https://graph.facebook.com/".$_SESSION['uservips']."/picture?type=large";

}

if (strlen($facebookh)>3 AND strlen($imagen)>3){
    $avatarimg ="".$foto;

}

if (strlen($facebookh)<3 AND strlen($imagen)>3){
    $avatarimg ="/".$foto;

}
if (strlen($facebookh)<3 AND strlen($imagen)<3){
    $avatarimg="/img/svg/avatar2.svg";

}



}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maratón Navideño Vips</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
    <link rel="stylesheet" href="css/stilos.css">
   <style>
   .main_background {
  background-image: url(images/fondo_juego.jpg);
  background-image: none;
	background-position: 0% center;

}
.main_content {
	width: 100%;
	position: absolute;
	bottom: 7.5%;
}
.avatar-field {
	width: 25%;
	float: left;
	left: 0;
	position: absolute;
	z-index: 2;
	bottom: 10px;
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

body {
	margin: 0;
	padding: 0;
	
	background-position: center center, center center;
	background-repeat: no-repeat, no-repeat;
}

main {
	width: 100%;
	height: 100vh;
	overflow: hidden;
	/* display: none; */
	position: absolute;
	z-index: -1;
}

#scene {
	padding: 0;
	margin: 0;
	width: 115%;
	height: 120vh;
	overflow: hidden;
	top: -5%;
	left: -5%;
}

.layer {
	width: 110%;
	height: 120vh;
	overflow: hidden;
}
.mapa {
    background: url(images/bgmap.png);
    width: 165px;
    height: 100px;
    border-radius: 10px;
    background-size: cover;
    background-repeat: no-repeat;
    margin: 10px auto;
    background-position: 0%;
}
.layer1, .layer2, .layer3, .layer4, .layer5 {
	background-size: cover;
	background-position: 0%;
	position: absolute;
	width: 100%;
	height: 100%;
	left: -1%;
	top: -1%;
  margin-top: -5%;
  transition:all 10s ease;
}
.layer1 {
	background-image: url(images/planos/Plano-01.png);
}

.layer2 {
	background-image: url(images/planos/Plano-02.png);
}

.layer3 {
	background-image: url(images/planos/Plano-03.png);
}

.layer4 {
	background-image: url(images/planos/Plano-04.png);
}
.layer5 {
	background-image: url(images/planos/Plano-05.png);
}
.sprite, .sprite2 {
	width: 102px;
	height: 148px;
	margin-top: 40px;
	background-size: contain;
	background-repeat: no-repeat;
}

.right {
	background-image: url(images/pavo/pavo_walk_01.png);
}
.stand {
	background-image: url(images/pavo/pavo_stand.png);
}

.walk-right {
	background-image: url(images/pavo/pavo_walk_02.png);
	-webkit-animation: walk 0.5s steps(2) infinite;
	-moz-animation: walk 0.5s steps(2) infinite;
	-ms-animation: walk 0.5s steps(2) infinite;
	-o-animation: walk 0.5s steps(2) infinite;
	animation: walk 0.5s steps(2) infinite;
}
.right2 {
	background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_01.png');
}
.stand2 {
	background-image: url('images/avatar_0<?php echo $numavatar;?>_stand.png');
}

.walk-right2 {
	background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_02.png');
	-webkit-animation: walk2 0.5s steps(2) infinite;
	-moz-animation: walk2 0.5s steps(2) infinite;
	-ms-animation: walk2 0.5s steps(2) infinite;
	-o-animation: walk2 0.5s steps(2) infinite;
	animation: walk2 0.5s steps(2) infinite;
}


@-webkit-keyframes walk {
	from {background-image: url(images/pavo/pavo_walk_01.png); }
	to { background-image: url(images/pavo/pavo_walk_02.png); }
}
@-moz-keyframes walk {
	from {background-image: url(images/pavo/pavo_walk_01.png); }
	to { background-image: url(images/pavo/pavo_walk_02.png); }
}
@-ms-keyframes walk {
	from {background-image: url(images/pavo/pavo_walk_01.png); }
	to { background-image: url(images/pavo/pavo_walk_02.png); }
}
@-o-keyframes walk {
	from {background-image: url(images/pavo/pavo_walk_01.png); }
	to { background-image: url(images/pavo/pavo_walk_02.png); }
}
@-keyframes walk {
	from {background-image: url(images/pavo/pavo_walk_01.png); }
	to { background-image: url(images/pavo/pavo_walk_02.png); }
}


@-webkit-keyframes walk2 {
	from {background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_01.png'); }
	to { background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_02.png'); }
}
@-moz-keyframes walk2 {
	from {background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_01.png'); }
	to { background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_02.png'); }
}
@-ms-keyframes walk2 {
	from {background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_01.png'); }
	to { background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_02.png'); }
}
@-o-keyframes walk2 {
	from {background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_01.png'); }
	to { background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_02.png'); }
}
@-keyframes walk2 {
	from {background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_01.png'); }
	to { background-image: url('images/avatars/avatar_0<?php echo $numavatar;?>_walk_02.png'); }
}

.nodisplay {
	opacity: 0;
	width: .5px;
	height: .5px !important;
	pointer-events: none;
}

.main_content .col-4 {
	padding: 0;
}

div.regalo {
	width: 77px;
	height: 75px;
	background-image: url(images/regalo.png);
	background-size: 55%;
	background-repeat: no-repeat;
	background-position: center;
	border: 5.5px solid #ffd42c;
	border-radius: 50%;
	position: relative;
	bottom: 0;
	filter: drop-shadow(2px 3px 5px #f2b82f);
	margin: 0 auto;
	margin-bottom: 5px;
}

.contregalo, .contregalo2{
	display: none;
	position: relative;
	text-align: center;
	position: absolute;
	bottom: 0;
}
.pulse {
  display: block;
  cursor: pointer;
  box-shadow: 0 0 0 rgba(204,169,44, 0.4);
  animation: pulse 2s infinite;
}
.textregalo {
	color: #f03a06;
	font-size: 13px;
	font-family: "Museo 900";
	text-align: center;
	line-height: 1.1;
}

@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
  }
  70% {
      -webkit-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
  }
  100% {
      -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
  }
}
@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
    box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
  }
  70% {
      -moz-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
      box-shadow: 0 0 0 10px rgba(204,169,44, 0);
  }
  100% {
      -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
      box-shadow: 0 0 0 0 rgba(204,169,44, 0);
  }
}


.sprite {
	max-width: 65px;
	bottom: 0;
	background-position: bottom;
}
.popUp, .popMap, .popCupon, .popShared{
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	z-index: 999;
	background: rgba(0,0,0,.8);
	display: none;
	text-align: center;
	overflow:auto;
}
.pocont {
	display: inline-block;
	background: transparent;
	width: 100%;
	max-width: 600px;
	height: auto;
	position: relative;
	margin: 10% auto;
	padding: 10px;
	color: #fff;
	font-family: "Museo 500";
}
.closepop {
	width: 100px;
	height: 100px;
	background: url(https://vips.com.mx/maratonnavideno/maraton/images/close.svg);
	background-size: 50%;
	float: right;
	cursor: pointer;
	margin: 0;
	margin-top: 0;
	position: absolute;
	right: 0;
	background-color: #fad702;
	border-radius: 50%;
	text-align: center;
	background-repeat: no-repeat;
	background-position: center;
	opacity: 0;
	z-index: 2;
}
#loadpop img {
	width: 100%;
	cursor: pointer;
}
.descartarbtn{
	background: #e63536;
	padding: 5px 15px;
	display: inline-block;
	margin: 10px auto;
	border-radius: 20px;
	opacity: 1;
	font-size: 14px;
	cursor: pointer;
  min-width: 150px;
}
.guardarbtn {
	background: #539644;
	padding: 5px 15px;
	display: inline-block;
	margin: 10px auto;
	border-radius: 20px;
	opacity: 1;
	font-size: 14px;
	cursor: pointer;
	min-width: 150px;
}
aside.menu_lateral {
	-ms-overflow-style: none;
	overflow: auto;
}
.textosinlogros {
	color: #fff;
	text-align: center;
	font-family: "Museo 500";
}
.slick-active {
	opacity: 1;
}
p.textsigue {
    color: white;
    text-shadow: 1px 3px 4px #000;
    font-family: "Museo 500";
}
.popMap .pocont {
    max-width: 98%;
}
img.mapfull {
    width: 100%;
}
div#mapcompleto {
    position: relative;
}
div#avatarmap {
    height: 50%;
    width: 50%;
    background-size: contain;
    position: absolute;
    background-position: left;
    z-index: 2;
    background-repeat: no-repeat;
    left: 0%;
    bottom: 15px;
    filter: drop-shadow(1px 2px 7px green);
    transition: all 4s ease;
}
p.disclaimertickets {
    color: #ccc;
    margin-top: 15px;
    font-size: 12px;
}
.popMap .closepop {
    width: 50px;
    height: 50px;
    background-image: url(https://vips.com.mx/maratonnavideno/maraton/images/close.svg);
    background-size: 100%;
    float: right;
    cursor: pointer;
    margin: 0;
    margin-top: 15px;
    position: absolute;
    right: 15px;
    background-color: transparent;
    border-radius: 50%;
    text-align: center;
    background-repeat: no-repeat;
    background-position: center;
    opacity: 1;
    z-index: 99;
}
@media (max-width:460px){
  div#avatarmap {
    height: 80%;
    width: 50%;
    background-size: contain;
    position: absolute;
    background-position: left;
    z-index: 2;
    background-repeat: no-repeat;
    left: 0%;
    bottom: 10px;
    filter: drop-shadow(1px 2px 7px green);
    transition: all 3s ease;
}
}

@media(max-width:800px){
  .main_content {
    padding-bottom: 0px!important;
    overflow-y: auto;
    margin-top: 0%;
}
.sprite, .sprite2 {
    width: 82px;
    height: 82px;
    background-position: center;
}
.contregalo, .contregalo2 {
    transform: scale(.5);
    top: 10%;
    left: 55%;
}
.contregalo2 {
    transform: scale(.6);
    top: 10;
    width: 190%;
    left: 0;
}
.mapa.pulse.grow {
    display: none;
}
a.notificaciones_btn.swing img {
    transform: scale(.95)!important;
    margin-top: -20%;
    margin-right: 0;
}
a.ticket_btn {
    display:block;
}
a.ticket_btn img {
    width: 100%;
    margin-top: -7.5%;
}
a.notificaciones_btn {
    margin-top: -17px!important;
    margin-right: 5px;
    z-index: 1;
    top: 0;
    position: absolute;
    right: 10%;
}
a.ticket_btn img {
    width: 100%;
    margin-top: -5%;
    margin-left: -50%;
}
a.notificaciones_btn {
    margin-top: -7px;
    margin-right: 5px;
    z-index: 9;
    top: 0;
    position: absolute;
    margin-left: -40%;
}
a.menu_btn {
    float: left;
    margin-top: 30%!important;
    margin-right: 10px;
    cursor: pointer;
    left: 0;
    margin-left: -85%;
    position: absolute;
}

.layer1, .layer2, .layer3, .layer4, .layer5 {
    margin-top: -120px!important;

}
body {
    background: #cde7f8;

}
.pocont {
    margin: 25% auto;
}
.popCupon .closepop, .popShared .closepop {
    transform: scale(.75);
}
.sprite2 {
    height: 120px;
    margin-top: 0px;
    width: 120px;
}
}
</style>
  </head>
  <body class="">


    <div class="main_background let-it-snow">

  <main class="">
	<ul id="scene">
		<li class="layer" data-depth="0.4">
			<div class="layer1"></div>
		</li>
		<li class="layer" data-depth="0.5">
			<div class="layer2"></div>
		</li>
		<li class="layer" data-depth="0.3">
			<div class="layer3"></div>
		</li>
		<li class="layer" data-depth="0.2">
			<div class="layer4"></div>
        </li>
        <li class="layer" data-depth="0.1">
			<div class="layer5"></div>
		</li>
	</ul>
</main>

       <!-- ASIDE TÉRMINOS Y CONDICIONES -->
        <aside id="aside_tyc" class="tyc_content">
          <div class="container_btn_close_tyc" onclick="close_tyc()">
            <div class="btn_close_tyc mx-auto">
              <p>X</p>
            </div>
          </div>

          <div class="container mt-5">

            <div class="row">
              <div class="col text-center">
                <img src="images/logo-maraton.png" alt="Maratón Navideño" class="logo_navidenos">
                <h1 class="tyc_title museo900 fc_red">Términos y condiciones</h1>
                <section class="tyc_text">
                  <div class="scroll_box custom_scrollbar">
                    <?php include('tyc.php');?>

                  </div>
                </section>
              </div>
            </div>

          </div>
        </aside>
        <!-- END ASIDE TÉRMINOS Y CONDICIONES -->

      <!-- ASIDE MENU -->
      <aside id="aside_menu" class="menu_lateral">
        <?php include('side-menu.php');?>
      </aside>
      <!-- ASIDE MENU -->

      <!-- CONTAINER -->
      <div class="container">

        <!-- HEADER -->
          <?php include('header.php');?>
        <!-- END HEADER -->
        <!-- MAIN CONTENT -->

        <section class="main_content">

        <div class="row">

        <div class="col-4">

              <div class="sprite2 right2"></div>
            </div>

          <div class="col-2">
          <div class="sprite right"></div>
          </div>

          <div class="col-3 floating">
          <?php include('regalo.php');?>
          <div id="loadregalo"></div>
          </div>


        </div>

      </section>

        <!-- END MAIN CONTENT  -->

        </div> <!-- END CONTAINER -->

        <!-- TÉRMINOS Y CONDICIONES -->
        <div class="container_btn_tyc" onclick="show_tyc()">
          <div class="btn_tyc text-center mx-auto">
            <p>Términos y condiciones</p>
          </div>
        </div>
        <!-- END TÉRMINOS Y CONDICIONES -->




      </div> <!-- END main_background -->

      <div class="popUp">
	<div class="pocont">
		<div class="closepop" onclick="closePop();"></div>
		<div id="loadpop"></div>
	</div>
</div>


<div class="popMap">
<div class="closepop" onclick="closePopMap();"></div>
	<div class="pocont">
    <p>Continúa registrando tus tickets para avanzar y tener mayor oportunidad de ser uno de los ganadores semanales. </p>
    <p>Recuerda que si tus tickets contienen platillos navideños obtendrás el doble de puntos al ser validados*. </p>
		<div id="mapcompleto">
      <img src="images/bgmap.png" class="mapfull">
    <div id="avatarmap" class="floating pulse" style="background-image: url('images/avatar_0<?php echo $numavatar;?>_stand.png');">
    </div>
    </div>
    <p class="disclaimertickets">*El proceso de validación de tickets se hace de 1 a 2 días hábiles después de su registro. </p>
	</div>
</div>

<div class="popCupon">
<div class="closepop" onclick="closePopCupon();"></div>
	<div class="pocont">
    
    
		<div id="loadcupon">
    </div>
	</div>
</div>


<div class="popShared">
<div class="closepop" onclick="closePopShared();"></div>
	<div class="pocont">
  <img src="images/NOTIFICACION_PUNTOS.png">
	</div>
</div>




        <!--<script src="js/jquery-3.4.1.min.js"></script>-->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/functions.js"></script>
        <script src="js/let-it-snow.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/parallax.min.js"></script>
        <link href="css/let-it-snow.css" rel="stylesheet" type="text/css">

        <script>
function openPop(id){
	$("#loadpop").load("loadregalo.php?id="+id, function() {
			$(".popUp").fadeIn();
		});
}

function closePop(){
  $(".popUp").fadeOut();
  $(".contregalo").fadeOut(1000);
    $(".descartarbtn").fadeOut(100);
    $(".guardarbtn").fadeOut(100);
    $("#loadregalo").html('<div class="contregalo2" onclick="openMap(<?php  echo $porcentaje;?>)"> <p class="textsigue">Continúa registrando tickets para avanzar y perseguir a Pavips</p> <div class="mapa pulse grow" onclick="openMap()" style="background-position:<?php echo $porcentaje;?>%"></div><p class="textregalo">ESTÁS AQUÍ</p></div>');
    $(".contregalo2").fadeIn(1000);


}

function openCupon(id, code){
	$("#loadcupon").load("loadcupon.php?code="+code+"&id="+id, function() {
			$(".popCupon").fadeIn();
		});
}

function closePopCupon(){
	$(".popCupon").fadeOut();

}

function openShared(){
  $(".popShared").fadeIn();
}

function closePopShared(){
	$(".popShared").fadeOut();

}


function openMap(id){
  $(".popMap").fadeIn();
  setTimeout(() => {
    $("#avatarmap").css("left", "<?php echo $porcentaje;?>%"); 
  }, 1000);
  
}

function closePopMap(){
  $(".popMap").fadeOut();
  setTimeout(() => {
    $("#avatarmap").css("left", "0%"); 
  }, 1000);

}

function openRegalo(tipo, promo){
  openPop(promo);

}

</script>


        	<script>
        $.letItSnow('.let-it-snow', {
            stickyFlakes: 'lis-flake--js',
            makeFlakes: true,
            sticky: true
        });
        </script>

        <script>

            function refreshCupones(){
              setTimeout(function(){
                $('.slidercupones').slick({
                  infinite: true,
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  lazyLoad: 'ondemand',
                  accessibility: true,
                  arrows: false,
                  dots:true,
                  autoplay: true,
                  responsive: [
                    {
                    breakpoint: 800,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                    } ],
                  autoplaySpeed: 3000,
                });
                $('.slidercupones').on('init', function(event, slick){
                    triggerResize();
                });
                triggerResize();

              },500)

            }
            function refreshDescuentos(){
              setTimeout(function(){
                $('.sliderdescuentos').slick({
                  infinite: true,
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  lazyLoad: 'ondemand',
                  accessibility: true,
                  arrows: false,
                  dots:true,
                  autoplay: true,
                  responsive: [
                    {
                    breakpoint: 800,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                    }
                    } ],
                  autoplaySpeed: 3000,
                });
                $('.sliderdescuentos').on('init', function(event, slick){
                    triggerResize();
                });
                triggerResize();

              },500)
            }
            function refreshPostales(){
              setTimeout(function(){
                $('.sliderpostales').slick({
                  infinite: true,
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  lazyLoad: 'ondemand',
                  accessibility: true,
                  arrows: false,
                  dots:true,
                  autoplay: true,
                  responsive: [
                    {
                    breakpoint: 800,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                    } ],
                  autoplaySpeed: 3000,
                });
                $('.sliderpostales').on('init', function(event, slick){
                    triggerResize();
                });
                triggerResize();

              },500)

            }
            function triggerResize(){
              $(window).trigger('resize');
            }


$(document).ready(function() {
  var sprite = document.querySelector('.sprite');
  var sprite2 = document.querySelector('.sprite2');
  property = getTransformProperty(sprite);
  property2 = getTransformProperty(sprite2);

function getTransformProperty(element) {
    var properties = [
        'transform',
        'WebkitTransform',
        'msTransform',
        'MozTransform',
        'OTransform'
    ];
    var p;
    while (p = properties.shift()) {
        if (typeof element.style[p] != 'undefined') {
            return p;
        }
    }
    return false;
}



function walk(e) {

    sprite.classList.remove('left');
    sprite.classList.add('right');
    sprite.classList.add('walk-right');

    sprite2.classList.remove('left2');
    sprite2.classList.add('right2');
    sprite2.classList.add('walk-right2');

}

function stop(e) {
    sprite.classList.remove('walk-right');
    sprite.classList.remove('walk-left');
    sprite.classList.add('stand');

    sprite2.classList.remove('walk-right2');
    sprite2.classList.remove('walk-left2');
    sprite2.classList.add('stand2');

}

	var scene = document.getElementById('scene');
  var parallax = new Parallax(scene);
  stop();

<?php if($puntos >0){?>

  setTimeout(() => {
    walk();
  }, 1900);

  setTimeout(() => {
    $(".layer div").css("background-position", "<?php echo $porcentaje; ?>%");
  }, 2000);

  setTimeout(() => {
    stop();
  }, 9000);

  setTimeout(() => {
    $(".contregalo").fadeIn(1000);
    $(".contregalo2").fadeIn(1000);
  }, 10000);
  <?php }  
  
  if($puntos == 0){?>

setTimeout(() => {
    $(".contregalo").fadeIn(1000);
  }, 3000);

    <?php
    }
  ?>
});


function saveRegalo(regalo){
  var uid = '<?php echo $uid;?>';
  $.ajax({
            url : "https://vips.com.mx/guardaregalo.php",
            type: "POST",
            data : "user="+uid+"&regalo="+regalo,
            success:function(data){

				$('.mensajeregalo').html(data);
        close_menu();
            }
        });
        setTimeout(function(){
          $("#aside_menu").load("side-menu.php", function() {
          });
        },100)
        setTimeout(function(){
            show_menu();
            $("#loadregalo").html('<div class="contregalo2" onclick="openMap(<?php  echo $porcentaje;?>)"> <p class="textsigue">Continúa registrando tickets para avanzar y perseguir a Pavips</p> <div class="mapa pulse grow" onclick="openMap()" style="background-position:<?php echo $porcentaje;?>%"></div><p class="textregalo">ESTÁS AQUÍ</p></div>');
            $(".contregalo2").fadeIn(1000);
        },3000)
}

function descartar(){
  var r = confirm("¿Deseas descartar tu regalo?");

  if(r == true){
    closePop();
    $(".contregalo").fadeOut(1000);
    $(".descartarbtn").fadeOut(100);
    $(".guardarbtn").fadeOut(100);
    $("#loadregalo").html('<div class="contregalo2" onclick="openMap(<?php  echo $porcentaje;?>)"> <p class="textsigue">Continúa registrando tickets para avanzar y perseguir a Pavips</p> <div class="mapa pulse grow" onclick="openMap()" style="background-position:<?php echo $porcentaje;?>%"></div><p class="textregalo">ESTÁS AQUÍ</p></div>');
    $(".contregalo2").fadeIn(1000);
  }
}


function sharePostal(id){
  var uid = '<?php echo $uid;?>';
  $.ajax({
            url : "https://vips.com.mx/postal-shared.php",
            type: "POST",
            data : "user="+uid+"&id="+id,
            success:function(data){
              closePop();
              closePopCupon();
              close_menu();
              setTimeout(() => {
                openShared();
                saveRegalo(id);
              }, 1000);

              setTimeout(function(){
                $("#aside_menu").load("side-menu.php", function() {
                });
              },100)
              setTimeout(function(){
                  show_menu();
                  $("#loadregalo").html('<div class="contregalo2"> <p class="textsigue">Continúa registrando tickets para avanzar y perseguir a Pavips</p> <div class="mapa pulse grow" onclick="openMap()" style="background-position:<?php echo $porcentaje;?>%"></div><p class="textregalo">ESTÁS AQUÍ</p></div>');
                  $(".contregalo2").fadeIn(1000);
              },3000)
            }
            });
}


        </script>


      </body>
    </html>
