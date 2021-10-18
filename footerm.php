<style>
.splash {
	background-size: 170px;
}

.mfp-content {

	background: #fff;
}

.mfp-inline-holder .mfp-content {

	background: transparent;
}
#custom-content {
	width: 100%;
	background: url(../img/bgaviso.jpg);
	background-position: bottom left;
	background-size: 50%;
	background-repeat: no-repeat;
	background-color: #fff;
	padding: 2.5%;
}
		#small-dialoganclar {
			background: white;
			padding: 5%;
			text-align: center;
			max-width: 500px;
			margin: 80px auto;
			position: relative;
			background-image: url(img/fondo.png);
			background-size: 30%;
			background-repeat: no-repeat;
			background-position: bottom right;
		}
		.mfp-close {
			color: transparent;
			text-shadow: none;
			font-size: 2.5em;
			font-weight: normal;
			font-family: "AmsiProNarw", sans-serif;
			background-image: url(img/cerrar1.png)!important;
			background-size: 50%;
			background-repeat: no-repeat;
			background-position: center;
		}

		.mfp-close, .mfp-close-btn-in .mfp-close, #small-dialog .mfp-close, #small-dialog .mfp-close {
	color: transparent!important;
	text-shadow: none;
}





		#small-dialoganclar h3 {
			color: #f29100;
			font-size: 1.5em;
		}

		#small-dialoganclar p{color:#333; font-size:.8em;}

		.anclartuto {
			position: fixed;
			bottom: 45%;
		}
.anclartuto img {
	margin-top: -10%;
	width: 40%;
	/* float: right; */
	right: 10%;
	position: absolute;
}

.btntuto {
	background: #f29100;
	color: #fff;
	padding: 15px;
	font-weight: bold;
	text-transform: uppercase;
	font-family: "AmsiProNarw", sans-serif;
	font-size: 1em;
	margin-top: 10px;
	position: fixed;
	display: inline-block;
	width: 90%;
	text-align: center;
	margin-top: 2.5%;
	transition: all .4s ease;
	margin: 5% auto;
	left: 0;
	right: 0;
	bottom: 10vh;
}



.pushpm {

	z-index: 99;

}

.main.pactive {

	z-index: 99;
}

.prefooter {

	padding-top: 0;
}

.btncompra2, .btnmap, .boton.top, .btnredcupon, .btnub, .btnub2, .link1, .link2, .boton, .nav-next, .pidebtn {

	font-family: "Program", sans-serif;
	font-weight:500;
	border-radius:30px;
}

.instrucciones {
	text-align: left;
	padding: 10%;
	padding-left: 12.5%;
	line-height: 1.5;
}

.instrucciones span {
	background: red;
	padding: .5em .75em;
	border-radius: 50%;
	color: #fff;
	width: 1em;
	height: 1em;
	margin: 2.5%;
	position: absolute;
	left: 5%;
	width: 2em;
	height: 2em;
	line-height: 1em;
	font-size: bold;
	margin-top: 0;
}
#recoverpass {
	color: #f29100;
	font-size: .85em;
}

.prefooter {
	padding-bottom: 12.5vh;
}

.back {
	background-image: url(/img/cancelred.png);
	background-repeat: no-repeat;
	background-position: 85%;
	background-size: 7.5%;
	cursor: pointer;
	min-height: 10vh;
}

.paneldomicilio {
    width: 100%;
    height: 65vh;
    background: #fff;
    box-shadow: 0 8px 20px 0 rgba(0,0,0,.25);
    position: fixed;
    top: 100vh;
    transition: .5s all ease;
    z-index: 10;
    border-radius: 5px;
	visibility:hidden;
}

.paneldomicilioactivo {
	visibility:visible;
    z-index: 4;
    width: 100%;
    height: 75vh;
    background: #fff;
    box-shadow: 0px -3px 5px 0px rgba(0,0,0,.35);
    position: fixed;
	overflow-y:auto;
    top: 25vh;
    transition: .5s all ease;
    border-radius: 5px;
}

#paneldomicilio h2 {
	color: #ed7124;
	font-size: 1.10em;
	padding: 1em 7.5%;
	text-align: center;
	position: relative;
	height: auto;
	padding-bottom: 0;
	margin-bottom: .25em;
}
.closepaneldom {
	width: 5vh;
	height: 5vh;
	float: right;
	background-image: url(/img/cerrar1.png);
	background-size: 60%;
	background-repeat: no-repeat;
	background-position: bottom left;
	position: relative;
	right: 0;
	z-index:99;
}

.pencil {
	background-image: url(img/pencil-tool.png);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: bottom center;
	width: 30px;
	height: 45px;
	display: inline-block;
	float: left;
	cursor: pointer;
	padding: 1em;
}
.star0 {
	background-image: url(img/star-dis.png);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: top center;
	width: 30px;
	height: 45px;
	display: inline-block;
	float: left;
	cursor: pointer;
	padding: 1em;
}
.star1 {
	background-image: url(img/star-p.png);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: top center;
	width: 30px;
	height: 45px;
	display: inline-block;
	float: left;
	cursor: pointer;
	padding: 1em;
}
.direccion {
	width: 50%;
	float: left;
	margin-bottom: 1em;

}
.direccion h5 {
	padding: 5px 0;
	margin: 0;
}

.direccion p {

    margin: 0;
    font-size: .8em;

}

#domicilios form{
float: left;
margin: 0;
}

.btnagregardir {
	color: #fff;
	text-align: center;
	width: 75%;
	border: 1px solid #ed7124;
	padding: 2.5%;
	float: left;
	position: relative;
	margin: 0% 12.0%;
	background: #ed7124;
	font-size: .8em;
	text-transform: uppercase;
	font-family: "Moreno",sans-serif;
	/* max-height: 10vh; */
	/* bottom: 0; */
	top: 1em;
}

.btnenviaraqui {
	background: #a7a7a7;
	color: #fff;
	font-family: "Moreno",sans-serif;
	padding: 10px;
	text-transform: uppercase;
	font-size: .7em;
	margin-top: .5em;
	float: right;
	margin-right: 2.5%;
}

#domicilios {
	float: left;
	width: 100%;
	padding: 2.5%;
	top: 1em;
	position: relative;
	max-height: 45vh;
	height: 45vh;
	overflow-y: auto;
	padding-bottom: 10vh;
}

@media (max-width:340px){

	#paneldomicilio h2 {
	color: #ed7124;
	font-size: 1em;
}
}


@media (orientation: landscape) {

	.containShowXSDevice{display:block!important;}
}

}

@media (orientation: portrait) {
	
.containShowXSDevice{display:none!important;}

}

</style>

<div id="memberwow" data-id="<?php echo $tdl; ?>" data-cookie="<?php echo $_COOKIE['persistWOW']; ?>" style="display:none;"></div>

</div><!-- TERMINA MAIN =============================-->

 <div id="containerdate"></div>


  <div id="paneldomicilio" class="paneldomicilio">

  <div class="closepaneldom"></div>
  <h2>¿Dónde quieres recibir tu pedido?</h2>
  <a class="btnagregardir" href="/perfil-m#envio">Administrar direcciones</a>

  <div id="domicilios"></div>


  </div>

 	<div class="containShowXSDevice">

  		<div class="image-Message"></div>

        <div class="TexMessageXSDevice">

        	<h2>¡Atención!</h2>

        	<p>Para mejorar tu experiencia te recomendamos navegar en modo vertical</p>

        </div>

    </div>
		<div id="small-dialoganclar" class="zoom-anim-dialog mfp-hide">

			<img style="width:25%;" src="/img/apple-touch-icon.png">

			<?php

			if( $detect->isAndroidOS() ){

				$instrucciones ='
				<p><span>1</span> Toca el ícono de <b>tres puntos</b> en la esquina superior derecha</p>
				<center><img style="width:10%;" src="/img/icon3dots.png"></center>
				<p><span>2</span> Toca la opción <b>Agregar a la pantalla principal</b></p>
				<p><span>3</span> En la siguiente pantalla, toca en <b>Aceptar</b></p>
				<p><span>4</span> <b>¡Listo!</b> Vips aparecerá en tu pantalla de inicio</p>
				';

			}

			if( $detect->isiOS() ){

				$instrucciones ='
				<p><span>1</span> Toca el ícono del cuadrado y la flecha en la <b>barra inferior</b> de tu explorador</p>
				<center><img style="width:14%;" src="/img/anclaje-ios2.png"></center>
				<p><span>2</span> Toca la opción <b>Agregar a la pantalla principal</b></p>
				<center><img style="width:16%;" src="/img/anclaje-ios.png"></center>
				<p><span>3</span> En la siguiente pantalla, toca en <b>Agregar</b></p>
				<p><span>4</span> <b>¡Listo!</b> Vips aparecerá en tu pantalla de inicio</p>

				';

			}

			?>


		<div class="instrucciones">

		<?php echo $instrucciones;?>


		</div>



		</div>

		<a href="#small-dialoganclar" class="popup-with-move-anim1"  id="anclar"></a>


</div>



<link rel="stylesheet" href="/css/fontawesome-free-5.6.3-web/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="/css/magnific-popup.css">

<!-- JAVASCRIPT =============================-->


<!-- Magnific Popup core JS file 



    <script src="/js/lib/picker.js"></script>

    <script src="/js/lib/picker.date.js"></script>
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>

<script src="/js/jquery.toggle-checkbox.js"></script>




<script>

$(function(){

  console.log(window.location.pathname);
       $("a").each(function(){
               if ($(this).attr("href") == window.location.pathname){
                       $(this).attr("href", "#");
               }
       });
});

$('.roundcheck').toggleCheckbox([

    '<i class="far fa-circle"></i>',

    '<i class="far fa-check-circle"></i>'

]);







</script>



<script>

   $(".linkdomicilio").click(function(){

 $("#paneldomicilio").toggleClass("paneldomicilioactivo");

		$("#domicilios").load("consultadireccionesdom.php");




});


   $(".closepaneldom").click(function(){
		$("#paneldomicilio").toggleClass("paneldomicilioactivo");

});

$(function(){

    $(".flip").flip({

        trigger: 'click'

    });

});



$(function(){

    $(".forms").flip({

        trigger: 'manual'

    });

});


</script>



<script>



$(function(){

var o=$('.overlayp'),r=$('.revealp'),p=$('.pushp'),ob=$('.overlay'),rb=$('.reveal'),pb=$('.push'),m=$('.main'),panel=$('.panel');


ob.click(function(){

  o.toggleClass('active');

});

rb.click(function(){

  m.toggleClass('ractive');

});

  pb.click(function(){

  m.toggleClass('pactive');

  p.toggleClass('active');

});

  $('.close').click(function(){

    o.removeClass('active');

    p.removeClass('active'); m.removeClass('pactive').removeClass('ractive');

  });

  $('.active .header').click(function(){

    o.removeClass('active');

    p.removeClass('active'); m.removeClass('pactive').removeClass('ractive');

  });

});



$(function(){

var o=$('.overlayp'),r=$('.revealp'),p=$('.pushpm'),ob=$('.overlay'),rb=$('.reveal'),pb=$('.pushm'),m=$('.main'),panel=$('.panelm');





ob.click(function(){

  o.toggleClass('active');

});

rb.click(function(){

  m.toggleClass('ractive');

});

  pb.click(function(){

  m.toggleClass('pactive');

  p.toggleClass('active');

});

  $('.active .header').click(function(){

    o.removeClass('active');

    p.removeClass('active'); m.removeClass('pactive').removeClass('ractive');

  });


  $('.close').click(function(){

    o.removeClass('active');

    p.removeClass('active'); m.removeClass('pactive').removeClass('ractive');

  });

});



</script>

<script>

$('.navbar-nav a').click(function() {

				 $('.navbar-toggle').trigger('click');



				});



				  // Fixed Header

    $(window).scroll(function() {

        var value = $(this).scrollTop();

        if (value > 80){

		    $("body").addClass("scrolled");

	}



	else{

		    $("body").removeClass("scrolled");

	}

    });









</script>



<script>

// Vars



var wrapper    = $("#site-wrapper"),

    menu       = $(".menu"),

    menuLinks  = $(".menu ul li a"),

    toggle     = $(".nav-toggle"),

    toggleIcon = $(".nav-toggle span");



function toggleThatNav() {

  if (menu.hasClass("show-nav")) {

    if (!Modernizr.csstransforms) {

      menu.removeClass("show-nav");

      toggle.removeClass("show-nav");

      menu.animate({

        right: "-=300"

      }, 500);

      toggle.animate({

        right: "-=300"

      }, 500);

    } else {

      menu.removeClass("show-nav");

      toggle.removeClass("show-nav");

    }



  } else {

    if (!Modernizr.csstransforms) {

      menu.addClass("show-nav");

      toggle.addClass("show-nav");

      menu.css("right", "0px");

      toggle.css("right", "330px");

    } else {

      menu.addClass("show-nav");

      toggle.addClass("show-nav");

    }

  }

}



function changeToggleClass() {

  $("[data-div='#mashome']").toggleClass("activemas");

}



$(function() {
	 $("#iconclose").trigger("click");
	
     $(".splash").fadeOut("slow");
	 

 

	  $("body").fadeIn("fast");

  toggle.on("click", function(e) {

    e.stopPropagation();

    e.preventDefault();

    toggleThatNav();

    // Keyboard Esc event support

    changeToggleClass();

  });

  $(document).keyup(function(e) {

    if (e.keyCode == 27) {

      if (menu.hasClass("show-nav")) {

        if (!Modernizr.csstransforms) {

          menu.removeClass("show-nav");

          toggle.removeClass("show-nav");

          menu.css("right", "-100%");

          toggle.css("right", "30px");

          changeToggleClass();

        } else {

          menu.removeClass("show-nav");

          toggle.removeClass("show-nav");

          changeToggleClass();

        }

      }

    }

  });

});

</script>



<!-- Android Viewport height fix-->

<script type="text/javascript">

var isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1; //&& ua.indexOf("mobile");

if(isAndroid) {

    document.write('<meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1.0">');

}





	    /*

     * Replace all SVG images with inline SVG

     */

        jQuery('img.svg').each(function(){

            var $img = jQuery(this);

            var imgID = $img.attr('id');

            var imgClass = $img.attr('class');

            var imgURL = $img.attr('src');



            jQuery.get(imgURL, function(data) {

                // Get the SVG tag, ignore the rest

                var $svg = jQuery(data).find('svg');



                // Add replaced image's ID to the new SVG

                if(typeof imgID !== 'undefined') {

                    $svg = $svg.attr('id', imgID);

                }

                // Add replaced image's classes to the new SVG

                if(typeof imgClass !== 'undefined') {

                    $svg = $svg.attr('class', imgClass+' replaced-svg');

                }



                // Remove any invalid XML tags as per http://validator.w3.org

                $svg = $svg.removeAttr('xmlns:a');



                // Replace image with new SVG

                $img.replaceWith($svg);



            }, 'xml');



        });



		$(window).load(function() {



	  applyOrientation()



	  setInterval(function(){

	$(".avatarhead").toggleClass("animate");

}, 10000/*5000 ms=5 seconds*/);

});

</script>



    <script>

      $('#iconclose').click(function() {

         $('.buscadormenu').addClass('closed');

          $(".searchcontainer .search").attr("placeholder", "¿Se te antoja algo?");

		  $(".searchcontainer").css("opacity", "1");



});



$('.togglefilter').click(function() {

         $('.buscadormenu').toggleClass('closed');

        $(".search2").focus();

		 $(".searchcontainer").css("opacity", "0");





});



$('.searchcontainer').click(function() {

         $('.buscadormenu').removeClass('closed');

        $(".search2").focus();

        $(".searchcontainer .search").attr("placeholder", "");

		 $(".searchcontainer").css("opacity", "0");



});



	$('body').on("focus", "#searchbox", function() {

	   $('body').addClass("keyboard-on");

	}).on("blur", "#searchbox", function() {

	   $('body').removeClass("keyboard-on");

	});



	$('body').on("focus", ".search2", function() {

	   $('body').addClass("keyboard-on");

	}).on("blur", ".search2", function() {

	   $('body').removeClass("keyboard-on");

	});



	$('body').on("focus", ".flipform input", function() {

	   $('body').addClass("keyboard-on");

	}).on("blur", ".flipform input", function() {

	   $('body').removeClass("keyboard-on");

	});



	$('.btntuto').click(function(){



		$('.tuto').fadeOut("slow");



	});

	$('.acttuto').click(function(){



$('.tuto').addClass('is-visible');



	});



$('.push').click(function(){



$('.menu').removeClass('show-nav');



	});





$('.cleanfilters').click(function(){



$(".search2").val('');



 $(":checkbox:checked").each(function () {



 this.click();

});



	});







    </script>





<script>

    var myDate = new Date();

    var hrs = myDate.getHours();



    var greet;



    if (hrs < 12)

        greet = '¡Buenos días';

    else if (hrs >= 12 && hrs <= 19)

        greet = '¡Buenas tardes';

    else if (hrs >= 19 && hrs <= 24)

        greet = '¡Buenas noches';





	$('.timeuser').text(greet);



</script>

<!--<script type="text/javascript" src="/js/quagga.min.js"></script>-->

<script type="text/javascript">



window.onresize = function (event) {

  applyOrientation();

}



function applyOrientation() {



	if ($(window).width() < 812) {



  if (window.innerHeight > window.innerWidth ) {

	$(".containShowXSDevice").addClass("showmsg");

  } else {

    $(".containShowXSDevice").removeClass("showmsg");

  }

}

else {



}





}


		$(document).ready(function() {
			setTimeout(function(){

$(".buscadormenu").css("opacity", "1");

}, 1000/*5000 ms=5 seconds*/);

			$('.popup-with-move-anim1').magnificPopup({
				type: 'inline',

				fixedContentPos: false,
				fixedBgPos: true,

				overflowY: 'auto',

				closeBtnInside: true,
				preloader: false,

				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-slide-bottom'
			});

		});


		function addToHomescreen2(){
			//alert("test");

	$("#anclar").trigger("click");
}



$(".itemfilter").click(function(){


if ($('input[type=checkbox]').is(":checked")) {
  $(".buscainput").prop('required', '');
}
else {
$(".buscainput").prop('required', 'required');
}


});

$(".simple-ajax-popup").magnificPopup({

	 type: 'ajax',

  callbacks: {

    beforeOpen: function() {

      this.st.mainClass = this.st.el.attr("data-effect");

    }

  },

  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.

});


  $("body").on("click",'.btnmap', function(){

	  var q = $('#cp').val();

	var url = "/ubicaciones/m?q="+q;

	window.open(url, '_self');

  });
  
  
  var flagwow = false;
function checkWow(){
	var wowid = $("#memberwow").attr("data-id"); 
	var wowsession = $("#memberwow").attr("data-cookie"); 
	
	var lenghtid=  wowid.length;
	var lenghtses=  wowsession.length;
	if(lenghtid >10 && lenghtses < 5){
				
				
	if(flagwow == false){	
	//console.log("Ya tienes TDL, el número es: "+memberid);
	  analytics.identify(wowid, {
	  name: "<?php echo $nombre;?>",
	  lastName: "<?php echo $apellido;?>",
	  email: "<?php echo $email;?>",
	  tel: "<?php echo $telefono;?>"

	});
	$.ajax({type:"GET", url:"/wowsession.php", success: function(text){
		
					console.log("Sesión iniciada");
					
				  },error: function(XMLHttpRequest, textStatus, errorThrown){
					// There's been an error, do something here
				  }
	});
	flagwow = true;				
	}
	}
	
	else{}
}

function checkCardwow(){
			
			var memberid = $("#memberwow").attr("data-id"); 
			//var memberid = 45435435345345344343; 
			var ml =  memberid.length;
			if(ml < 10){
				
				
				$.ajax({type:"GET", url:"/wow.php", success: function(text){
					//$("#barcodeimg").load('/card.php');
				  },error: function(XMLHttpRequest, textStatus, errorThrown){
					// There's been an error, do something here
				  }
				});
			
			
			
			}
			
			else{

				
			}
			
			
}

  
  $(document).ready(function() {

<?php 
if(isset($_COOKIE['persistWOW']))
{
	
}
else{
	echo 'checkWow();';
	
}

if(isset($_COOKIE['persistID']))
{
echo 'checkCardwow();';	
}
?>			
	

});


<?php 

if(strlen($_COOKIE['persistWOW'])< 5){
	
		echo 'window.setInterval(function(){
			  checkWow();
			 
			}, 5000);';
}


if(strlen($_COOKIE['persistID'])> 0){
	
		echo 'window.setInterval(function(){
			  checkCardwow();
		}, 15000);	';
}

?>
	



</script>



</body>

</html>
