<nav class="menu" role="navigation">

    <ul class="panelmenu">



			<a href="/perfil-m" style="display: inline-block; float:left; max-height:10vh; overflow:hidden; position:relative;">

			  <li class="cuentali">

				  <div class="iconmmenuc">

					<img class="iconmmenu svg" src="<?php echo $avatarimg; ?>">

				  </div>

					<?php

					if($sesion == true ){

					$msglog ='

					<div class="textmenu"><span class="timeuser" id="timeusernl"></span><span id="namespan">, '.ucwords($nombre).'!</san><br>

					<span>Cuenta y configuración</span>

				  </div>



					';

					}



					else{

					$msglog = '

					<div class="textmenu"><span class="timeuser"  id="timeusernl"></span><span style="font-size: 1em; color: #666;">!</span><br>

										<span>Inicia sesión para administrar tu cuenta</span>

									  </div>

					';

					}



					echo $msglog;

					?>



			  </li>

			</a>



		   <a class="link-lateral" href="tel:01 800 900 8477">

			  <li>

				  <div class="iconmmenuc" style="padding-left: 2.5%;">

					<img class="iconmmenus svg" src="/img/svg/phone-call.svg">

				  </div>

				  <div class="textmenu">Pide a domicilio<br>



				  </div>

			  </li>

			</a>

			<a class="link-lateral" href="/ubicaciones/m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/ubicaciones.svg">

				  </div>

				  <div class="textmenu">Restaurantes<br>



				  </div>

			  </li>

			</a>





			<a class="link-lateral" href="/vipstorias-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/experiencias.svg">

				  </div>

				  <div class="textmenu">Vipstorias<br>



				  </div>

			  </li>

			</a>



			<a class="link-lateral" href="/tienda-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/tiendam.svg">

				  </div>

				  <div class="textmenu">Tienda<br>



				  </div>

			  </li>

			</a>



			<a class="link-lateral"  href="https://alsea.interfactura.com/RegistroDocumento.aspx?opc=Vips" target="_blank">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/facturas.svg">

				  </div>

				  <div class="textmenu">Facturas<br>



				  </div>

			  </li>

			</a>



			<a class="link-lateral" href="/atencion-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/AtencionAlInvitado.svg">

				  </div>

				  <div class="textmenu">Atención al invitado<br>



				  </div>

			  </li>

			</a>
			
			
						<a class="link-lateral" href="/promociones-nacionales-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/promos-nacionales.png">

				  </div>

				  <div class="textmenu">Promociones nacionales<br>



				  </div>

			  </li>

			</a>



			<a class="link-lateral" href="tdl-vips-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/cuenta.svg">

				  </div>

				  <div class="textmenu">Tarjeta de Lealtad Vips<br>



				  </div>

			  </li>

			</a>


			<a class="link-lateral" href="aviso-privacidad-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/terminos.svg">

				  </div>

				  <div class="textmenu">Aviso de privacidad<br>



				  </div>

			  </li>

			</a>

			<a class="link-lateral" href="terminos-y-condiciones-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/legal.svg">

				  </div>

				  <div class="textmenu">Términos y condiciones<br>



				  </div>

			  </li>

			</a>



			<a class="link-lateral" href="/somos-vips-m">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/somos.svg">

				  </div>

				  <div class="textmenu">Somos Vips<br>



				  </div>

			  </li>

			</a>



			<a class="link-lateral" href="#" class="acttuto">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/Iconos_finales_tarjeta_cel.svg">

				  </div>

				  <div class="textmenu acttuto">Tutorial de inicio<br>



				  </div>

			  </li>

			</a>





			<a class="link-lateral" href="#" onclick="addToHomescreen2();">

			  <li>

				  <div class="iconmmenuc">

					<img class="iconmmenus svg" src="/img/svg/acceso.svg">

				  </div>

				  <div class="textmenu">Agregar a pantalla de inicio<br>



				  </div>

			  </li>

			</a>

			<a href="logout">

			  <li>

				  <div class="iconmmenuc" style="padding: 2.5%; width: 20%;">

					<img class="iconmmenus svg" src="/img/svg/logout.svg">

				  </div>

				  <div class="textmenu">Cerrar sesión<br>



				  </div>

			  </li>

			</a>





        </ul>

  </nav>
