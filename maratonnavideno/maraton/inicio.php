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
$page="maraton-redirect";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maratón Navideño Vips</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/stilos.css">
   <style>
     .menu_btn {
	display: none;
}
a.ticket_btn img {
	width: 100%;
	display: none;
}
#btnempezar {
	font-size: 1.5em;
	font-family: 'Museo 700';
	background-image: url(login2/images/boton-login.png);
	padding: 15px 30px;
	text-align: center;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	margin: 10px auto;
	color: #fff;
	display: inline-block;
	float: none;
	cursor: pointer;
}
#btnempezar:hover {
text-decoration:none;
}
  </style>
  </head>
  <body>


    <div class="main_background let-it-snow">

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



      <!-- CONTAINER -->
      <div class="container">

        <!-- HEADER -->
        <?php include('header.php');?>
        <!-- END HEADER -->
        <!-- MAIN CONTENT -->
        <section class="main_content">
          <div class="row">
            <div class="col text-center">
              <img src="images/logo-maraton.png" alt="Maratón Navideño" class="logo_navidenos floating">
              <p class="description_text">¡Hola, bienvenido al Maratón Navideño! Soy Pavips y te voy a acompañar a lo largo de tu carrera. Si me sigues te puedo enseñar cómo acumular puntos y llegar más rápido a la meta. <br>
Registra tu ticket y participa para GANAR una de las tres cenas, regalos sorpresa e increíbles premios.
</p>
              <img src="images/pavo_stand.png" alt="Pavips" titlE="Pavips" class="pavips">
            </div>
          </div>
          <div class="row">
          <a id="btnempezar" class="grow btnsoundred" href="maraton">Empezar maratón</a>
          </div>
        </section>
        <!-- END MAIN CONTENT  -->

        </div> <!-- END CONTAINER -->

        <!-- TÉRMINOS Y CONDICIONES -->
        <div class="container_btn_tyc">
          <div class="btn_tyc text-center mx-auto" onclick="show_tyc()">
            <p>Términos y condiciones</p>
          </div>
        </div>
        <!-- END TÉRMINOS Y CONDICIONES -->




      </div> <!-- END main_background -->




        <!--<script src="js/jquery-3.4.1.min.js"></script>-->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/functions.js"></script>
        <script src="js/let-it-snow.min.js"></script>
        <link href="css/let-it-snow.css" rel="stylesheet" type="text/css">

        <script>
          $(document).on('ready', function() {
              $(".variable").slick({
                dots: false,
                infinite: true,
                variableWidth: true,
                prevArrow: false,
                nextArrow: false
              });

            });
        </script>
        	<script>
        $.letItSnow('.let-it-snow', {
            stickyFlakes: 'lis-flake--js',
            makeFlakes: true,
            sticky: true
        });
        </script>


      </body>
    </html>
