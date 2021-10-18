<?php
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

$id = $_GET['id'];
//echo $id;
include_once 'dbconnect.php';
	$uid=$_SESSION['uservips'];


	
$sql1 = "SELECT * FROM domicilio WHERE id_domicilio = $id";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);

$row=mysqli_fetch_assoc($result1);
	
?>

<style>




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
	




	</style>

<form id="formreg2" class="formreg2" onsubmit="return false"  enctype="multipart/form-data" method="post">
			

			<input type="hidden" id="iddomicilio" name="iddomicilio"  value="<?php echo $row['id_domicilio']; ?>" >




				<div class="inputs">



					<label for="nombre">Calle*:</label><br>



					<input value="<?php echo $row['calle']; ?>" class="input inputregr2" type="text" id="calle2" name="calle2" placeholder="Ingresa tu calle" required>



					<i class="material-icons icono">



						perm_identity



					</i>



				</div>











				<div class="inputs">



					<label for="apellido">No. exterior*:</label><br>



					<input value="<?php echo $row['ext']; ?>" class="input inputregr2" type="text" id="ext2" name="ext2" placeholder="Ingresa tu no. ext."  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"   required>



					<i class="material-icons icono">



						perm_identity



					</i>



				</div>







				<div class="inputs">



					<label for="correo">No. interior:</label><br>



					<input value="<?php echo $row['int']; ?>" class="input" type="text" id="inte2" name="inte2" placeholder="Ingresa tu no. int." >



					<i class="material-icons icono">



						alternate_email



					</i>



				</div>







				<div class="inputs">



					<label for="contraseña">Colonia*:</label><br>



					<input value="<?php echo $row['colonia']; ?>" class="input inputregr2" type="text" id="colonia2" name="colonia2" placeholder="Ingresa tu colonia" required>



					<i class="material-icons icono">



						lock



					</i>



				</div>



				<div class="inputs">



					<label for="apellido">Código postal*:</label><br>



					<input value="<?php echo $row['cp']; ?>" class="input inputregr2 cp" type="text" id="cp2" name="cp2" placeholder="Ingresa tu código postal" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" required>



					<i class="material-icons icono">



						perm_identity



					</i>



				</div>







				
				<div class="inputs" style="width: 100%;">


					<div style="width:50px; float:left;">



						<input type="checkbox" id="switch2" name="switch2" value="1" <?php if( $row['predeterminada'] == 1){echo "checked";} ?>><label class="labelcb" for="switch2"  required>Toggle</label></div>



						<div style="width:80%; float:left;">



							<p class="pformtoggle" style="text-align: left; padding-left: 1em;">Hacer predeterminada</p>



						</div>



				</div>
				
				




						<div id="respuestad2"></div>



						<div>

						<p class="requiredtext" style="text-align: left;">* Campo requerido</p>



							<a class="boton top"  id="btnreg2">Actualizar dirección</a>



						</div>



					</form>