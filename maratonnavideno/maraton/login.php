<?php
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;

}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
	header("Location: maraton");
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
  <link rel="stylesheet" href="login2/css/bootstrap.min.css">
  <link rel="stylesheet" href="login2/css/stilos.css">


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
#btnlogin {
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
    cursor:pointer;
}
#formlogin {
	text-align: center;
}
a.menu_btn, .ticket_btn {
	display: none;
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
            <img src="login2/images/logo-maraton.png" alt="Maratón Navideño" class="logo_navidenos">
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
        <div class="row my-2 my-sm-4 my-md-1">
          <div class="col text-center entrada">
            <img src="login2/images/Ropes.png" alt="" class="cuerdas">
            <img src="login2/images/titulo-inicia-sesion.png" alt="Inicia Sesion">
          </div>
        </div>
        <div class="row justify-content-center">
          <form id="formlogin" class="formulario formlogin" onsubmit="return false" enctype="multipart/form-data" method="post">
            <input type="email" name="correol" required class="rotate-left" id="email" placeholder="Correo electrónico">
            <input type="password" name="passl" id="password" class="rotate-right" placeholder="Contraseña">
            <div id="respuesta"></div>
           <a id="btnlogin" class="grow btnsoundred">Empezar maratón</a>



          </form>
        </div>
        <div class="row justify-content-center">
          <p class="registro">
            ¿No estás registrado?
            <span class="link-registro"><a href="registro">Crea tu cuenta</a></span>
          </p>
        </div>
        <div class="row justify-content-center login-wrapper">
          <a href="/fbconfig.php?page=<?php echo $page; ?>" ><img src="login2/images/boton-facebook.png" alt="inicia sesión con facebook" class="pole-login grow"></a>
          <a href="/logingoogle.php?page=<?php echo $page; ?>" ><img src="login2/images/boton-google.png" alt="inicia sesión con google" class="pole-login grow"></a>
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




  <script src="login2/js/jquery-3.4.1.min.js"></script>
  <script src="login2/js/popper.min.js"></script>
  <script src="login2/js/bootstrap.min.js"></script>
  <script src="login2/js/functions.js"></script>

  <script>

    $('#btnlogin').click(function(event){
		var emailval  = $("#email").val();
		var mailvalid = validateEmail(emailval);
	    var passl = $('#password').val();

		if (emailval == '' || passl =='')
		{
			$("#respuesta").html("<div class='errormsg'>Completa los campos</div>");
		}
		else if ( mailvalid == false)
		{
			$("#respuesta").html("<div class='errormsg'>El correo no es válido</div>");
		}

		else{
			event.preventDefault();
			$.ajax({
				url : "https://vips.com.mx/login.php?page=<?php echo $page; ?>",
				type: "POST",
				data : new FormData($('#formlogin')[0]),
				processData: false,
				contentType: false,
				success:function(data){
					$('#respuesta').html(data);
					 setTimeout(function() {
					$('.success').slideUp("slow");
					$('.errormsg').slideUp("slow");
				}, 10000);
				}
			});
			}
	});

    function validateEmail(email22) {
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email22);
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
</body>

</html>
