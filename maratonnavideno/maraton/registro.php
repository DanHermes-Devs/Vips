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
  <link rel="stylesheet" href="registro2/css/bootstrap.min.css">
  <link rel="stylesheet" href="registro2/css/stilos.css">
  <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
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
#btnreg {
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
#formreg {
	text-align: center;
	max-width: 380px;
}
.entrada {
	margin-top: 0px;
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


    <!-- CONTAINER -->
    <div class="container">

      <!-- HEADER -->
      <?php include('header.php');?>
      <!-- END HEADER -->
      <!-- MAIN CONTENT -->
      <section class="main_content">
        <div class="row my-2 my-sm-4 my-md-1">
          <div class="col text-center entrada">
            <img src="registro2/images/Ropes.png" alt="" class="cuerdas">
            <img src="registro2/images/titulo-registro.png" alt="Inicia Sesion">
          </div>
        </div>
        <div class="row justify-content-center">
          <form id="formreg" class="formulario formreg" onsubmit="return false" enctype="multipart/form-data" method="post">
            <input type="text" class="rotate-left" placeholder="Nombre"  id="nombre" name="nombre" style="padding: 8px 90px !important;">
            <input type="text" class="rotate-left" placeholder="Apellidos" id="apellido" name="apellido" style="padding: 8px 90px !important;">
            <input type="email" class="rotate-right" placeholder="Correo electrónico"  id="correo" name="correo"   onkeyup="this.value = this.value.toLowerCase();" style="padding: 8px 90px !important;">
            <input type="password" class="rotate-left" placeholder="Contraseña"  id="pass" name="pass" style="padding: 8px 90px !important;">
            <div style="float: left; width: 100%; margin-top: 20px; z-index: 1; position: relative; height: 80px; overflow: hidden; transform: scale(0.9);">
						<div class="g-recaptcha" data-theme="light" data-sitekey="6LdgS20UAAAAAOYAzOxw83A05x-fKz6OJS3Ojpch" style="transform:scale(0.94);-webkit-transform:scale(0.94);transform-origin:0 0;-webkit-transform-origin:0 0; z-index: 1;"></div>
						</div>
            <div id="respuesta"></div>
            <a id="btnreg" class="grow btnsoundred">Empezar maratón</a>
          </form>
        </div>
        <div class="row justify-content-center">
          <p class="login">
            ¿Ya tienes cuenta?
            <span class="link-login"><a href="login">Inicia sesión</a></span>
          </p>
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




  <script src="registro2/js/jquery-3.4.1.min.js"></script>
  <script src="registro2/js/popper.min.js"></script>
  <script src="registro2/js/bootstrap.min.js"></script>
  <script src="registro2/js/functions.js"></script>
<script>
        function validateEmail(email22) {
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email22);
	}


    $('#btnreg').click(function(event){
	$("#respuesta").html("");
	$("#respuesta").hide();
	$("#respuesta").show();

	var nombre= $("#nombre").val();
	var apellido = $('#apellido').val();
	var nombrel = nombre.length;
	var apellidol = apellido.length;
	var emailvalr  = $("#correo").val();
	var tel1  = $("#tel1").val();
	var mailvalid = validateEmail(emailvalr);
	var pass = $('#pass').val();
	var error = false;

	if (nombre == '' || apellido == '' || emailvalr == '')
	{
		$("html, body").animate({ scrollTop: $("#nombre").offset().top });
		$("#respuesta").append("<div class='errormsg'>Completa los campos</div>");
		$.each($('.inputregr'),function() {
		   if ($(this).val().length == 0) {
			$(this).addClass("errorinput");
		   }
		});
		error = true;
	}

	if (nombrel <3 || apellidol<3)
	{
		$("html, body").animate({ scrollTop: $("#nombre").offset().top });
		$("#respuesta").append("<div class='errormsg'>Verifica que el nombre y apellido contengan al menos 3 caracteres.</div>");
		error = true;
	}

	if (pass.length <6)
		{
		$("html, body").animate({ scrollTop: $("#nombre").offset().top });
		$("#respuesta").append("<div class='errormsg'>La contraseña debe contar con al menos 6 caracteres</div>");
		$("#pass").addClass("errorinput");
		error = true;
	}

	if ( mailvalid == false)
	{
		$("#respuesta").append("<div class='errormsg'>El correo no es válido</div>");
		$("#correo").addClass("errorinput");
		error = true;
	}
	//var checkBox = document.getElementById("switchap");

	if (error == false){
        event.preventDefault();
		$("#respuesta").append("<div class='success' style='width: 100%; padding-right: 10%; background-image: url(/img/loadreg.gif); background-size: 7.5%; background-repeat: no-repeat; background-position: 95% center;'>Estamos creando tu registro. Esto puede tomar un momento, así que no des clic nuevamente ni refresques la página...</div>");
		$("#btnreg").prop('disabled', true);
		$("#btnreg").addClass('nopointer');
		$("#btnreg").hide();
        $.ajax({
            url : "https://vips.com.mx/registron2019.php?page=<?php echo $page; ?>",
            type: "POST",
            data : new FormData($('#formreg')[0]),
            processData: false,
            contentType: false,
            success:function(data){
				//$("html, body").animate({ scrollTop: $("#switch").offset().top });
				$('#respuesta').html(data);
				grecaptcha.reset();
				$("#btnreg").prop('disabled', false);
				$("#btnreg").removeClass('nopointer');
				$("#btnreg").show();
				setTimeout(function() {
					$('.success').slideUp("slow");
					$('.errormsg').slideUp("slow");
				}, 15000);
            }
        });

	}
});
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
