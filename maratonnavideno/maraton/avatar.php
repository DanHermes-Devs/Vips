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

if( isset($_SESSION['uservips'])!="" ){
    $uid=$_SESSION['uservips'];


$sql3h = "SELECT * FROM usuarios_maraton WHERE id_user= '$uid'";
$resulth =$mysqli->query($sql3h);
 $rowregh=mysqli_fetch_assoc($resulth);

$numfilas1 = $resulth->num_rows;


if($numfilas1 >0){
  header("Location: maraton");
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
  <link rel="stylesheet" href="registro2/css/bootstrap.min.css">
  <link rel="stylesheet" href="registro2/css/stilos.css">
  <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
  <link rel="stylesheet" href="css/app.css">
<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WF88QBJ');</script>

<!-- End Google Tag Manager -->


<!-- Global site tag (gtag.js) - Google Ads: 794291389 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-794291389"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-794291389'); </script>


<!-- Event snippet for Compras conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-794291389/VJD4CIGDl4cBEL3Z3_oC', 'value': 40.0, 'currency': 'MXN', 'transaction_id': '', 'event_callback': callback }); return false; } </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114083909-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114083909-1');
</script>
<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
  analytics.load("JIg0Zvz8yCtIW0RloenNJpvUtMTlkeSE");
  analytics.page();
  }}();
</script>
  <style>
.btnreg {
	font-size: 1.5em;
	font-family: 'Museo 700';
	background-image: url(login2/images/boton-login.png);
	padding: 15px 30px;
	text-align: center;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	margin: 10px auto;
	color: #fff !important;
	display: inline-block;
	float: none;
	cursor: pointer;
}
#formreg {
	text-align: center;
	max-width: 380px;
}
.entrada {
	margin-top: 0px;
}
a.menu_btn {
	display: none;
}
.main_background {
	background-image: url(images/personaje-bg.jpg);
}
.rotateslider-item img {
	max-width: 150px;
	margin: 0 auto;
}
  </style>
</head>

<body>


  <div class="main_background let-it-snow">

    <!-- ASIDE TÉRMINOS Y CONDICIONES -->
    <aside id="aside_tyc" class="tyc_content tyc_hide">
      <div class="container_btn_close_tyc" onclick="close_tyc()">
        <div class="btn_close_tyc mx-auto">
          <p>X</p>
        </div>
      </div>

      <div class="container mt-5">

        <div class="row">
          <div class="col text-center">
            <img src="registro2/images/logo-maraton.png" alt="Maratón Navideño" class="logo_navidenos">
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
      <div class="container">
        <!-- HEADER -->
        <div class="row my-2">
          <div class="col-6">
            <a href="/maratonnavideno/maraton" class="ml-3"><img src="registro2/images/logo-vips.svg" alt="Vips" class="logo"></a>
          </div>
          <div class="col-6 text-right">
            <a class="menu_btn_close" onclick="close_menu()">
              <img src="registro2/images/close.svg" alt="Cerrar" width="24">
            </a>
          </div>
        </div>
        <!-- END HEADER -->
        <!-- USER INFO -->
        <div class="row my-3">
          <div class="col-4">
            <img src="registro2/images/avatar_demo.png" alt="Avatar" class="img-fluid mx-auto">
          </div>
          <div class="col-8">
            <div class="row h-100">
              <div class="col-sm-12 my-auto">
                <p class="user_name museo900 fc_white">Sarahí Martínez</p>
                <p class="user_points museo700 fc_white">1,200 PTS</p>
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
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne">
                        Cupones
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <!--  SCROLLING WRAPPER -->
                      <div class="scrolling-wrapper-flexbox">
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                      </div>
                      <!--  END SCROLLING WRAPPER -->
                    </div>
                  </div>
                </div>
                <div class="panel panel-default panel_border_bottom">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Puntos
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <!--  SCROLLING WRAPPER -->
                      <div class="scrolling-wrapper-flexbox">
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                      </div>
                      <!--  END SCROLLING WRAPPER -->
                    </div>
                  </div>
                </div>
                <div class="panel panel-default panel_border_bottom">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Descuentos
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                    aria-labelledby="headingThree">
                    <div class="panel-body">
                      <!--  SCROLLING WRAPPER -->
                      <div class="scrolling-wrapper-flexbox">
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                        <div class="card_container">
                          <img src="registro2/images/cupon_demo.png" alt="Cupon" class="img-fluid">
                        </div>
                      </div>
                      <!--  END SCROLLING WRAPPER -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END COLLAPSE PANELS -->
          </div>
        </div>
        <!-- END MENU OPTIONS -->
      </div>
    </aside>
    <!-- ASIDE MENU -->

    <!-- CONTAINER -->
    <div class="container">

      <!-- HEADER -->
      <div class="row my-2 my-sm-4 my-md-1">
        <div class="col-6">
          <a href=""><img src="registro2/images/logo-vips.svg" alt="Vips" class="logo"></a>
        </div>
        <div class="col-6 text-right">
          <a class="menu_btn" onclick="show_menu()">
            <div class="menu_ico"></div>
            <div class="menu_ico"></div>
            <div class="menu_ico"></div>
          </a>
        </div>
      </div>
      <!-- END HEADER -->
      <!-- MAIN CONTENT -->
      <section class="main_content">
        <div class="row my-2 my-sm-4 my-md-1">
          <div class="col text-center entrada">
            <img src="images/avatar-title.png" alt="Inicia Sesion">
          </div>
        </div>
        <div class="row justify-content-center">
        <div class="rotateslider-container" id="slider">
    <div class="rotateslider-item"><img src="images/avatar_01_stand.png"><br><a class="btnreg" onclick="selectAvatar(1);">Seleccionar</a></div>
    <div class="rotateslider-item"><img src="images/avatar_02_stand.png"><br><a class="btnreg" onclick="selectAvatar(2);">Seleccionar</a></div>
    <div class="rotateslider-item"><img src="images/avatar_03_stand.png"><br><a class="btnreg" onclick="selectAvatar(3);">Seleccionar</a></div>
    <div class="rotateslider-item"><img src="images/avatar_04_stand.png"><br><a class="btnreg" onclick="selectAvatar(4);">Seleccionar</a></div>
    <div class="rotateslider-item"><img src="images/avatar_05_stand.png"><br><a class="btnreg" onclick="selectAvatar(5);">Seleccionar</a></div>
    <div class="rotateslider-item"><img src="images/avatar_06_stand.png"><br><a class="btnreg" onclick="selectAvatar(6);">Seleccionar</a></div>
    <span class="arrow right js-rotateslider-arrow" data-action="next"><img src="images/flecha-der.png" alt=""></span>
    <span class="arrow left js-rotateslider-arrow" data-action="prev"><img src="images/flecha-izq.png" alt=""></span>
    <div id="respuesta"></div>
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




  <script src="registro2/js/jquery-3.4.1.min.js"></script>
  <script src="registro2/js/popper.min.js"></script>
  <script src="registro2/js/bootstrap.min.js"></script>
  <script src="registro2/js/functions.js"></script>
<script>
        function validateEmail(email22) {
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email22);
	}


    function selectAvatar(avatar){
      var txt;
      var r = confirm("¿Elegir este avatar?");


	if (r == true){
    var uid = '<?php echo $uid;?>';
        $.ajax({
            url : "https://vips.com.mx/setavatar.php",
            type: "POST",
            data : "user="+uid+"&avatar="+avatar,
            success:function(data){
				//$("html, body").animate({ scrollTop: $("#switch").offset().top });
				$('#respuesta').html(data);
            }
        });

	}
}
</script>
 <script src="js/let-it-snow.min.js"></script>
        <link href="css/let-it-snow.css" rel="stylesheet" type="text/css">


        	<script>
        $.letItSnow('.let-it-snow', {
            stickyFlakes: 'lis-flake--js',
            makeFlakes: true,
            sticky: true
        });
        </script>

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="js/jquery.rotateSlider.js"></script>
<script src="js/app.js"></script>
</body>

</html>