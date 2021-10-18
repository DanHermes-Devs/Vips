<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

  header('Location: atencion-m.php');

  exit(0);

}

$showtext="display:block;";
$showextra="display:none;";
$idform= $_GET['idform'];
$showlocation="si";


if ($idform == "ingredientes"){$titleform="Mi platillo no tenía los ingredientes solicitados";}

if ($idform == "preparacion"){$titleform="Mi platillo estuvo mal preparado";}

if ($idform == "frio"){$titleform="Mi platillo estaba frio";}

if ($idform == "atencion"){$titleform="La atención fue inadecuada";}

if ($idform == "facturar"){$titleform="No pude facturar mi cuenta";}

if ($idform == "cupon"){$titleform="No pude redimir mi cupón";}

if ($idform == "tarjeta"){$titleform="Mi Tarjeta de Lealtad no funcionó";}

if ($idform == "cuenta"){$titleform="Tuve problemas con mi cuenta";}

if ($idform == "pedido1"){$titleform="Mi pedido nunca llegó";}

if ($idform == "pedido2"){$titleform="Mi pedido llegó en malas condiciones";}

if ($idform == "pedido3"){$titleform="Mi pedido tardó demasiado";}

if ($idform == "tiempo-asiento"){$titleform="Tardaron demasiado en sentarnos";}

if ($idform == "tiempo-platos"){$titleform="Mis platillos tardaron demasiado";}

if ($idform == "caja"){$titleform="Mi tiempo en caja fue demasiado";}

if ($idform == "duda"){$titleform="¿Tienes alguna duda o sugerencia?"; $showtext="display:none;";}

if ($idform == "felicitacion"){$titleform="¿Quieres felicitarnos por el servicio?"; $showtext="display:none;";}

if ($idform == "comentario"){$titleform="¿Tienes algún otro comentario?"; $showtext="display:none;";}

if ($idform == "no-aplica"){$titleform="Ninguna de estas situaciones aplica a mi caso"; $showextra="display:block";}

if ($idform == "concurso"){$titleform="Tengo un problema con un concurso en el que participé"; $showlocation="no";}

if ($idform == "web"){$titleform="Tengo una queja o comentario sobre el sitio web o las redes sociales de Vips"; $showlocation="no";}

?>



<div class="main">



  <style>
  
  <?php
  if($showlocation == "no"){
	  echo ".showlocation{display:none!important;}";
  }
  ?>

  .resptext {

    width: 100%;

    float: left;

    padding: 2.5% 5% 5% 5%;

    font-family:"ProgramProNarw", sans-serif;

  }



  .resptext h2 {

    color: #f29100;

    font-size: 2em;

    border-bottom: 3px solid #e1e1e1;

    padding-bottom: 10px;

    text-transform:uppercase;

    margin-bottom:0px;

  }



  .resptext h3 {

    padding: 10px 0;

    margin: 0;

    font-family:"ProgramProNarw", sans-serif;

    font-weight: normal;

    font-size: 2em;

  }

  .promo h3 {

    color: #f29100;

    font-size: 1.1em;

    padding: 0 5% 0 0;

    margin: 0;

  }



  .resp2img{width:20%; float:left;}

  .text-right{width:80%; float:left;}

  .resptext p{font-size: .95em;}

  .promo{width:100%; float:left;     margin: 1em 0;}

  .promo .benefimg{width:30%; float:left; vertical-align:middle;}

  .textpromo {width:70%; float:left; padding:1em;}



  .swiper-pagination-bullet-active {

    opacity: 1;

    background: #f29100!important;

  }

</style>







<!-- Demo styles -->

<style>



.cat-atn {

  width: 50%;

  float: left;

  padding: 2.5% 0;

  margin: 0;

  min-height: 250px;

}





.cat-atnimg {

  width: 25%;

  float: left;

  padding: 5% 10% 5% 0;

}

.textatn {

  float: left;

  width: 50%;

  margin: 0;

  padding: 1em 2.5% 2.5% 1em;

  transition: .35s all ease;

}



.textatn h3 {

  color: #f29100;

  font-size: 1.5em;

  margin: .5em 0;

}



.textatn p {

  margin-top: 0;

  padding-top: 0;

  font-size: .9em;

  font-weight: normal;

  font-family:"ProgramProNarw", sans-serif;

}

.linkatn:hover{color:#f29100; transition: .35s all ease;}





#twitter {

  background-image: url(/img/twitterform.png);

  background-repeat: no-repeat;

  background-position: right 15px;

  background-size: 20px;

}



.selectform {

  width: 100%;

  margin: 1.8em 0;

  height: 2.5em;

  padding: .5em;

  border: 1px solid #aaa;

}



.scrollablepanel {

  float: left;

  width: 100%;

  height: 90vh;

  position: relative;

  overflow-y: auto;

}

.formatn1 {

  width: 100%;

  float: left;

  padding: 0 6%;

}

.middle {

  width: 100%;

  text-align: left;

}

.formatn1 .inputs {

  float: left;

  width: 100%;

  margin-bottom: 2em;

  padding: 0 5%;

}

.middle {

  width: 100%;

  text-align: left;

}

.middle h1 {

  font-family:"ProgramProNarw", sans-serif;

  color: #fff;

}

.middle input[type="radio"] {

  display: none;

}

.middle input[type="radio"]:checked + .box {

  background-color: #f29100;

  color:#fff;

}

.middle input[type="radio"]:checked + .box span {

  color: white;

  transform: translateY(70px);

}

.middle input[type="radio"]:checked + .box span:before {

  transform: translateY(0px);

  opacity: 1;

}

.middle .box {

  width: 3em;

  height: 3em;

  background-color: #fff;

  transition: all 250ms ease;

  will-change: transition;

  display: inline-block;

  text-align: center;

  cursor: pointer;

  position: relative;

  font-family:"ProgramProNarw", sans-serif;

  font-weight: 100;

  border-radius: 50%;

  border: 1px solid #f29100;

  margin: 1em;

}

.middle .box:active {

  transform: translateY(10px);

}

.middle .box span {

  position: relative;

  transform: translate(0, 60px);

  left: 0;

  right: 0;

  transition: all 300ms ease;

  font-size: 1em;

  user-select: none;

  color: #555;

  line-height: 2.7em;

}

.middle .box span:before {

  font-size: 1.2em;

  font-family: FontAwesome;

  display: block;

  transform: translateY(-80px);

  opacity: 0;

  transition: all 300ms ease-in-out;

  font-weight: normal;

  color: white;

  display: none;

}

.middle .front-end span:before {

  content: '\f121';

}

.middle .back-end span:before {

  content: '\f0f4';

}

.middle p {

  color: #fff;

  font-family:"ProgramProNarw", sans-serif;

  font-weight: 400;

}

.middle p span:after {

  content: '\f0e7';

  font-family: FontAwesome;

  color: yellow;

}



.hedformatn {

  padding: 0% 5%;

}



.imgatn {

  width: 12%;

  float: left;

}



.halfform {
	width: 60%;
	float: left;
	border: 1px solid #ededed;
	padding: 2.5% 5%;
	margin-bottom: 5%;
	box-shadow: 2px 1px 10px #f0f0f0;
}

.formatn1 .logininputs .icono {

  width: 10%;

  margin: 0;

  padding: 0;

  float: right;

  position: absolute;

  margin-left: 0;

  margin-top: 0px;

  opacity: .5;

  right: 10%;

}



.middle h3 {

  border-top: 0;

  padding-top: 1.5em;

  color: #666;

  font-size: 1em;

  font-weight: normal;

  text-align: left;

  padding-top: 0;

  padding-bottom: 0;

  margin: 0;

  font-family:"ProgramProNarw", sans-serif;

}



.subhalfform {

  width: 50%;

  float: left;

}

.logininputs .input{width:100%; float:float; position:relative;}



.subhalfform .input {
	height: 45px;
	width: 100%;
	background-color: transparent;
	border: none;
	border-style: solid;
	outline: none;
	border-color: #a9a6a1;
	border-top: none;
	border-left: none;
	border-right: none;
	padding: 10px 5%;
	border-width: 1px;
}



.subhalfform input[type="submit"] {

  border: none;

  padding: 1em;

  outline: none;

  border-color: #a9a6a1;

  width: 100%;

  font-size: 1em;

  background: #f29100;

  color: white;

  cursor: pointer;

  margin: 1em 0;

  font-weight: bold;

}



.material-icons {

  float: right;

  margin-top: -34px;

  opacity: .3;

}



#mensaje {

  width: 100%;

  font-family:"ProgramProNarw", sans-serif;

  padding: 2.5%;

  float: left;

  height: 20vh;

  border:1px solid #aaa;

}



.halfform.mensajearea {

  padding: 0 2.5%;

}



#enviar2 {

  border: none;

  padding: 1em;

  outline: none;

  border-color: #a9a6a1;

  width: 50%;

  font-size: 1em;

  background: #f29100;

  color: white;

  cursor: pointer;

  margin: 0;

  font-weight: bold;

  float: right;

  font-family: inherit;

}



.image-upload {

  float: right;

  width: 130px;

  /* margin-top: -40px; */

  /* right: 0; */

  position: relative;

  /* bottom: 0; */

  cursor:pointer;

}

.image-upload > input {

  visibility:hidden;

  width:0;

  height:0

}



.adjuntar {

  float: left;

  width: 100%;

}





input[type=checkbox] {



  height: 0;



  width: 0;



  visibility: hidden;



}







.labelcb {



  cursor: pointer;



  text-indent: -9999px;



  width: 40px;



  height: 20px;



  background: grey;



  display: block;



  border-radius: 100px;



  position: relative;



  top: -10px;







}



.labelcb::after {



  content: '';



  position: absolute;



  top: 0px;



  left: 0;



  width: 20px;



  height: 20px;



  background: #fff;



  border-radius: 20px;



  transition: 0.3s;



  box-shadow: 1px 2px 5px #444;



}







input:checked + .labelcb {



  background: #f29100;



}







input:checked + .labelcb:after {



  left: calc(100% - 0px);



  transform: translateX(-100%);



}







.labelcb:active:after {



  width: 20px;



}















.pformtoggle {



  color: #333;



  font-size: .8em;



  font-family:"ProgramProNarw", sans-serif;



}



.switchcont {

  float: left;

  width: 10%;

  min-width: 50px;

}



.avisop {

  width: 60%;

  float: left;

}



.previewimg {

  float: left;

  width: 100%;

}



.image-upload label{

  float: left;

  width: 100%;

  background: none;

  margin-top: 1em;

}



#respuesta, #respuesta2, #respuesta {

  width: 100%;

  float: left;

  padding-top: .5em;

  text-align: center;

}

.success {

  width: 100%;

  background: #DCEDC8;

  padding: 1em;

  color: #558B2F;

  border-radius: 5px;

}



.errormsg {

  width: 50%;

  background: #FFCDD2;

  padding: 1em;

  color: #B71C1C;

  border-radius: 5px;

  margin: 1em auto;

}

.inputs input {
  background-size: 12%;
  background-repeat: no-repeat !important;
  background-position: right center;
}
.material-icons{display:none;}



#correoalt, #correol {
  background-image: url(img/svg/correo.svg);
}

#phone {
  background-image: url(img/svg/phone.svg);
  background-size: 7%;
  background-position: 98%;
}

#btnlogin{display: inline-block;}



.errorinput {

  border: 1px solid #c14549;

  background-image: url(img/error.png)!important;

  background-size: 7%!important;

  background-repeat: no-repeat;

  background-position: 97% center!important;

}



#btnreg {

  display: inline-block;

  width: 55%;

  text-transform: uppercase;

  text-align: center;

  float: left;

  font-family: "Program";

}



#respuesta .errormsg {

  width: 100%;

}



.bgreds{background:#c14549;}



.nopointer{pointer-events:none;}


#btnsend {
	background: #f29100;
	color: #fff;
	padding: .8em;
	font-weight: bold;
	text-transform: uppercase;
	font-family: "Program",sans-serif;
	font-size: 1.1em;
	margin-top: 10px;
	position: relative;
	float: left;
	width: 50%;
	text-align: center;
	margin-top: 1em;
	transition: all .4s ease;
	min-width: 200px;
	border-radius: 30px;
	font-weight: 500;
}
#btnsend:hover {
  background: #ffac30;
  transition: all .4s ease;
}
#mensaje {

  background-size: 3% !important;
  background-position: 98% 8px !important;
}

.phidden {
  display: none;
  width: 100%;
  float: left;
  font-size: .8em;
}


</style>



<!-- Swiper -->









<div class="productdesc">

  <div class="hedformatn">



    <img class="imgatn" style="display:none;" src="/img/sorry-desk.png">



    <div class="textatn" id="topatn">

      <h2 style="color:#f29100; margin-bottom: 0;"><?php echo $titleform;?></h2>

      <h3 style="margin-top: 0; <?php echo $showtext;?>">Lo sentimos, esto no debería pasar</h3>

      <p style="<?php echo $showtext;?>">Nos esforzamos cada día por mejorar todas y cada de una de tus experiencias en Vips. Por eso te solicitamos algunos datos para contactarte y encontrar la solución más eficaz a este inconveniente. </p>

    </div>

  </div>












  <form id="formatn" class="formatn1" onsubmit="return false"  enctype="multipart/form-data" method="post">



    <input type="hidden" id="problema" name="problema" value="<?php echo $titleform; ?>">



    <div class="halfform">



      <div class="subhalfform">



        <div class="inputs logininputs  showlocation" style="<?php echo $showextra;?>">

          <label for="contraseña">PROBLEMA*:</label><br>





          <input class="input inputatnr" type="text" id="otro_problema" name="otro_problema" placeholder="Ingresa el problema" required>



          <i class="material-icons ">



            perm_identity



          </i>



        </div>


        <div class="inputs logininputs">

          <label for="contraseña">NOMBRE Y APELLIDO*:</label><br>





          <input class="input inputatnr" type="text" id="nombreatn" name="nombreatn" placeholder="Ingresa tu nombre" required>



          <i class="material-icons ">



            perm_identity



          </i>



        </div>

        <div class="inputs logininputs">



          <label for="correo">CORREO*:</label><br>



          <input class="input inputatnr" type="email" id="correoalt" name="correoalt" placeholder="Ingresa tu correo" required>



          <i class="material-icons ">



            alternate_email



          </i>



        </div>

        <div class="inputs logininputs">

          <label for="contraseña">CELULAR:</label><br>



          <input class="input " type="text" id="phone" name="phone" placeholder="Ingresa tu teléfono" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>



          <i class="material-icons ">



            phone



          </i>



        </div>





      </div>



      <div class="subhalfform showlocation">





        <div class="inputs logininputs">

          <label for="contraseña">ESTADO*:</label><br>





          <?php



          $query = "SELECT state FROM stores WHERE desactivar = 0 GROUP BY state";

          $result = $mysqli->query($query) or die("Falló la consulta $query");






          echo "<select  class='selectform inputatnr' id='ciudad' name='ciudad'> 	<option>Seleccionar</option>";

          while($row = mysqli_fetch_assoc($result))

          {

            $state = mb_convert_case(strtolower($row['state']), MB_CASE_TITLE, "UTF-8");;

            echo '

            <option style="text-transform:capitalize; " value="'.$row['state'].'">'.$state.'</option>

            ';



          }



          echo "</select>";

          ?>









          <label for="contraseña">VIPS*:</label><br>

          <select class="selectform" id="listvips" name="listvips">



            <select>
			
			<div class="middle">

          <h3>¿Estás en una tienda Vips?</h3>

          <label>

            <input value="Si" type="radio" name="radio"/>

            <div class="front-end box">

              <span>Sí</span>

            </div>

          </label>



          <label>

            <input value="No"  type="radio" name="radio"/>

            <div class="back-end box">

              <span>No</span>

            </div>

          </label>



        </div>

            </div>





          </div>



          <label for="contraseña" style="width: 100%; float: left;">COMPARTE TU EXPERIENCIA*:</label><br>



          <textarea class="txtarea inputatnr" placeholder="Ingresa tu comentario" id="mensaje" name="mensaje"></textarea>



          <div class="adjuntar">

            <div class="image-upload">

              <label for="file-input" style="cursor: pointer;">

                <img src="/img/adjuntar.png" style="pointer-events: none; width: 100%;"/>

              </label>




              <input type="file" name="uploadedimage" id="file-input" class="file-input" accept="image/x-png,image/jpeg"/>

            </div>

          </div>



          <div class="switchcont">

            <input type="checkbox" id="switchap" name="switchap" value="1"/><label class="labelcb bgswitch" for="switchap" required>Toggle</label>

          </div>



          <p class="pformtoggle avisop">Acepto <a href="/aviso-privacidad" target="_blank">aviso de privacidad.</a></p>

          <p class="phidden" style="text-align: justify;">

            "Aviso de Privacidad Simplificado: El responsable de sus datos es Operadora Vips, S. de R.L. de C.V. (VIPS®) domicilio en <a href="https://www.google.com/maps/place/Piso+21,+Av.+Revoluci%C3%B3n+1267,+Guadalupe+Inn,+01049+Ciudad+de+M%C3%A9xico,+CDMX/@19.3609001,-99.1928004,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff8aa885c40d:0x5eb40e55a33938a0!8m2!3d19.3609001!4d-99.1906117" target="_blank" style="color:#539bbb; text-decoration:underline;"> Av. Revolución 1267, Piso 21, Colonia Los Alpes, Delegación Álvaro Obregón, C.P. 01040, CDMX;</a> los datos que recabemos de usted, serán utilizados con la siguiente finalidad: Darle seguimiento a su queja; puede consultar el <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color: #f29100; text-decoration: underline;">Aviso de Privacidad Integral</a> y procedimiento de atención de derechos ARCO."
          </p>

          <div id="respuesta"></div>


          <a id="btnsend" class="boton top envia-form-atn">ENVIAR</a>











        </form>







      </div>





      <!-- Initialize Swiper -->

      <script>



      $('#listvips').prop('disabled','disabled');



      function filePreview(input) {

        if (input.files && input.files[0]) {

          var reader = new FileReader();

          reader.onload = function (e) {

            $('.file-input + img').remove();

            $('.file-input').after('<img src="'+e.target.result+'" width="50%" class="previewimg" height="auto"/>');

          }

          reader.readAsDataURL(input.files[0]);

        }

      }



      $("#file-input").change(function () {

        filePreview(this);

      });





      $('#ciudad').on('change', function() {





        var  state =this.value;

        encoded = encodeURIComponent(state);

        //alert("SELECT * FROM stores WHERE state = '"+encoded+"' AND desactivar = 0");

        $("#listvips").load("consultavips.php?state="+encoded);

        $('#listvips').prop('disabled', false);

      });


      $('#btnsend').click(function(event){



        $("#respuesta").html("");
        $("#respuesta").hide();
        $("#respuesta").show();




        $('.inputatnr').removeClass('errorinput');

        $(".bgswitch").removeClass("bgreds");

        var nombre= $("#nombreatn").val();

        var correo = $('#correoalt').val();

        var celular = $('#phone').val();

        var estado = $('#ciudad').val();

        var vips = $('#listvips').val();

        var mensaje = $('#mensaje').val();

        var error = false;

		<?php
			if($_GET['idform'] == "web" OR $_GET['idform'] == "concurso"  ){
				
				echo "if (nombre == '' || correo == ''|| celular == '' || mensaje == '')";
			}
			else{
				echo "if (nombre == '' || correo == ''|| celular == '' || estado == '' || vips == '' || mensaje == '')";
			}
		?>	

        {

          $("html, body").animate({ scrollTop: $("#topatn").offset().top });

          $("#respuesta").append("<div class='errormsg'>Completa los campos</div>");

          $.each($('.inputatnr'),function() {

            if ($(this).val().length == 0 || $(this).val() == '') {

              $(this).addClass("errorinput");

            }

          });

          error = true;



        }





        var checkBox = document.getElementById("switchap");

        if (checkBox.checked == false){

          $("#respuesta").append("<div class='errormsg'>Acepta el aviso de privacidad</div>");

          $(".bgswitch").addClass("bgreds");

          error = true;

        }





        if (error == false){

          event.preventDefault();

          $("#respuesta").append("<div class='success'>Por favor espera...</div>");

          $("#btnreg").prop('disabled', true);

          $("#btnreg").addClass('nopointer');



          $.ajax({

            url : "formatn1.php",

            type: "POST",

            data : new FormData($('#formatn')[0]),

            processData: false,

            contentType: false,

            success:function(data){
			var inlocation= document.getElementsByName("radio")[0].value;
			var locationid = $('#listvips :selected').attr("data-id");
			var locationcc = $('#listvips :selected').attr("data-cc");
			
				
			analytics.track("Customer feedback Sent", {
				  titulo: "<?php echo $titleform; ?> ", 
				  nombre: nombre,
				  email: correo,
				  location_id: locationid, 
				  location_cc: locationcc,
				  location_name: vips,
				  in_location: inlocation,
				  cellphone: celular
				  
			});



              $("html, body").animate({ scrollTop: $("#mensaje").offset().top });

              $('#respuesta').html(data);

              $("#btnreg").prop('disabled', false);

              $("#btnreg").removeClass('nopointer');
			  clearForms();



              setTimeout(function() {

                $('.success').slideUp("slow");

                $('.errormsg').slideUp("slow");

              }, 15000);







            }

          });



        }



      });


      </script>


      <script>

      $("#switchap").click(function() {

        if($(this).is(":checked")) {

          $(".phidden").slideDown();

        }

        else {

          $(".phidden").slideUp();

        }

      });

function clearForms()
{
    $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
    $(':checkbox, :radio').prop('checked', false);
}

    </script>





<!-- Footer =============================-->



<?php include('footer.php'); ?>
