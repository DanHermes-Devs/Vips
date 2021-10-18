<?php
session_start();
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
}
else{
    header("Location: /maratonnavideno/maraton");
}

require_once '../dbconnect.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Maratón Navideño Vips</title>
  <link rel="stylesheet" href="tickets2/css/bootstrap.min.css">
  <link rel="stylesheet" href="tickets2/css/stilos.css">
  <link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>

  <style>
	a.menu_btn {
		display: block;
		width: 33px;
		margin-top: 25px;
	}
aside.menu_lateral {
	width: 30%;
}
#btnregistra {
	font-size: 1.5em;
	font-family: 'Museo 700';
	background-image: url(tickets2/images/boton-login.png);
	padding: 20px 30px;
	text-align: center;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	margin: 10px auto;
	cursor: pointer;
	display: inline-block;
	/* margin: 10px auto; */
	color: #fff;
}
#infoticket {
	position: absolute;
	margin-left: -20px;
	background: #e42330;
	color: #fff;
	padding: 5px 10px;
	border-radius: 50%;
	font-weight: bold;
	cursor: pointer;
	margin-top: -70px;
	width: 35px;
	height: 35px;
	font-family: "Museo 500";
	font-weight: bold;
	font-size: 20px;
	line-height: 1.3;
}
.slick-active {
	opacity: 1;
}
.ticketpop {
	position: fixed;
	background: rgba(0,0,0,.85);
	padding: 5%;
	z-index: 4;
	text-align: center;
	width: 100%;
	height: 100%;
	display: none;
	top: 0px;
	padding-top: 10vh;
	color: #fff;
    overflow-y: auto;
	font-family: "Museo 500";
}
.formulario {
	text-align: center;
}
.ticketiconclose {
	width: 30px;
	height: 30px;
	background: url(/img/close.png);
	background-size: auto;
	background-size: 100%;
	right: 2.5%;
	position: fixed;
	margin-top: 10px;
	cursor:pointer;
}
.ticketpop img {
	width: 70%;
	display: inline-block;
	margin-bottom: 20vh;
	max-width: 300px;
}
#respuestaticket {
	color: #0c5b78;
	background: rgba(255,255,255,.6);
	margin-top: 10px;
	padding: 0;
}
#respuestaticket {
	color: #0c5b78;
	max-width: 380px;
	padding: 7.5px;
	font-family: "Museo 500";
	font-size: 13px;
}
.ticket_btn {
	display: none;
}
a.menu_btn {
    display: none;
}
@media(max-width:600px){
  a.notificaciones_btn {
    margin-top: -7px;
    margin-right: 25%;
    z-index: 9;
    margin-top: -15px!important;
}
.entrada {
    margin-top: 70px;
    transform: scale(.75);
}
form.formulario {
    transform: scale(.85);
}
#infoticket {
    margin-left: 5px!important;
}
}
  </style>
</head>

<body>

<div class="ticketpop">
<div class="ticketiconclose" onclick="closeTicket();"></div>
	<h2>Ejemplo Ticket</h2>

	<img src="/img/2019/juego/ticket.png">
</div>

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
            <img src="tickets2/images/logo-maraton.png" alt="Maratón Navideño" class="logo_navidenos">
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
        <div class="row my-2 my-sm-4 my-md-1">
          <div class="col entrada">
            <img src="tickets2/images/Ropes.png" alt="" class="cuerdas">
            <img src="tickets2/images/titulo-tickets.png" alt="Inicia Sesion">
          </div>
        </div>
        <div class="row justify-content-center">
          <form action="" class="formulario"  onsubmit="return false"  enctype="multipart/form-data" method="post">
            <input type="text" class="rotate-left inputticket" placeholder="No. de ticket" name="ticket" id="ticket"  maxlength="18" onkeypress="return isNumberKey(event)"><span id="infoticket"  onclick="openTicket();">?</span>
            <input type="file" id="file" class="input-file rotate-right file-input" name="uploadedimage" id="file-input" max-size="32154" accept="image/x-png,image/jpeg">
            <label for="file" id="nombrearchivo">Sube una foto de tu ticket</label>
            <div id="respuestaticket"></div>
            <a id="btnregistra">Registrar ticket</a>
          </form>
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




  <script src="tickets2/js/jquery-3.4.1.min.js"></script>
  <script src="tickets2/js/popper.min.js"></script>
  <script src="tickets2/js/bootstrap.min.js"></script>
  <script src="tickets2/js/functions.js"></script>
  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>


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
                      slidesToShow: 1,
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
	function openTicket(){
		$(".ticketpop").fadeIn();
		$("html").css("overflow","hidden");
		$("body").css("overflow","hidden");
	}

	function closeTicket(){
		$(".ticketpop").fadeOut();
		$("html").css("overflow","auto");
		$("body").css("overflow","auto");
	}

	$("#btnregistra").click(function(){
		var uid = '<?php echo $uid;?>';
		var ticket = $("#ticket").val();
		//alert(ticket.length);
		if(ticket.length != 18){
		$("#respuestaticket").html('<p class="errorticket">El No. de ticket debe contar con 18 dígitos</p>');


		}
		else{

			$.ajax({
            url : "/registro-ticket.php",
            type: "POST",

            data : new FormData($('.formulario')[0]),

            processData: false,

            contentType: false,

            success:function(data){
				$('#respuestaticket').html(data);
				 setTimeout(function() {
                $('.success').slideUp();
				$('.errormsg').slideUp();

            }, 15000);

            }

        });

		}
	})

	function isNumberKey(evt)
	{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
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
        $( document ).ready(function() {
          document.getElementById('file').onchange = function () {
 $("#nombrearchivo").text(document.getElementById("file").files[0].name );
};
});
        </script>

</body>

</html>
