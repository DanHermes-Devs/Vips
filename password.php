
<div id="custom-content" class="white-popup-block" style="max-width:90%; margin: 20px auto;">
    <style>
    #custom-content img {max-width: 100%;margin-bottom: 10px;}
	#custom-content p{font-family:Arial, sans-serif;}
	.scrollable {
    border: 1px solid #ccc;
    height: 300px;
	padding:1em;
    overflow-y: auto;
}

#custom-content {
	max-width: 90%;
	margin: 20px auto;
	max-width: 500px !important;
	text-align: center;
}
.linkexternal {
	width: 15px;
	height: 15px;
	background: url(img/link.png);
	background-repeat: no-repeat;
	background-size: 100%;
	position: absolute;
	margin-left: 10px;
	margin-top: 5px;
}
.acepto{
	border: none;
	padding: 20px;
	outline: none;
	border-color: #a9a6a1;
	width: 65%;
	font-size: 1em;
	background: #f29100;
	color: white;
	cursor: pointer;
	transition: 0.3s ease all;
display:inline-block;
}

.inputs5 {
    float: left;
    width: 100%;
    margin-bottom: 5%;
    padding: 0 5%;
    text-align: left;
}

.iconon {
    width: 10%;
    margin: 0;
    padding: 0;
    float: right;
    position: relative;
    margin-left: -5%;
    margin-top: -40px;
    opacity: .5;
}
    </style>
    <h2 class="text-center" style="color:#fbb03b;">Ingresa tu email para recuperar tu contraseña </h2>
	
	<div class="scrollable">

<form action="recupera.php" method="post">





				<div class="inputs5">

					<label for="correo">CORREO:</label><br>

					<input class="input inputmail" type="email" id="correo" name="correo" placeholder="Correo@email.com" required>

				

				</div>

						<br><br>
						<p>Consulta tu correo electrónico para recuperar tu contraseña, si no ves el mensaje, revisa tu carpeta de Spam.</a></p>
						<div>

							<input class="boton top" type="submit" id="enviarpass" style="background:#ff1528;" value="Recuperar">

						</div>

					</form>

</p>
</div>
</div>