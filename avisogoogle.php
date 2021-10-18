<?php

		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);
		
		if(strlen($page)<3){
			
			$page = 'perfil';
			
		}
?>
<div id="custom-content" class="white-popup-block" style="max-width:90%; margin: 20px auto; margin-bottom: 0; padding-bottom: 0;">
    <style>
    #custom-content img {max-width: 100%;margin-bottom: 10px;}
	#custom-content p {
    font-family: "Program", sans-serif;
}
	.scrollable {
    border: 0;
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
.acepto {
	border: none;
	padding: 15px 20px;
	outline: none;
	border-color: #a9a6a1;
	width: 65%;
	font-size: 20px;
	background: #f29100;
	color: #fff;
	cursor: pointer;
	transition: .3s ease all;
	display: inline-block;
	font-family: "Program", sans-serif;
	border-radius: 30px;
	font-weight: 500;
}

.nopointer{pointer-events:none; opacity:.5;}

@media(max-width: 700px){
	.acepto{font-size:.75em;}
}

#custom-content {
	background: #fff !important;
	position: relative;
}

.closepopsocial {
	width: 16px;
	height: 16px;
	position: absolute;
	background-image: url(/img/login/close.png);
	background-size: 100%;
	right: 10px;
	z-index: 9;
	top: 10px;
	cursor: pointer;
}

.mfp-close {
	background-image: url(/img/login/close.png);
	color: transparent !important;
	background-size: 18px;
	background-repeat: no-repeat;
	background-position: 50%;
}
    </style>
	
    <h2 class="text-center" style="color:#fbb03b;">Aviso de privacidad redes sociales </h2>

	<div class="scrollable">

<p>

“Al registrarse iniciando sesión en Google acepta que Vips<sup>®</sup>  y Wow Rewards<sup>®</sup>  reciban datos de su perfil, lista de amigos, dirección de correo electrónico, cumpleaños e información personal. Consulta los términos y condiciones del programa, así como los avisos de privacidad en <a href="https://vips.com.mx/aviso-privacidad" target="_blank" style="color:#f29100;">https://vips.com.mx/aviso-privacidad</a> y <a href="https://www.wowrewards.mx/home/privacidad" target="_blank" style="color:#f29100;"> https://www.wowrewards.mx/home/privacidad"</a>

</p>

<a href="/logingoogle?page=<?php echo $page;?>" class="acepto" onClick="this.disabled=true;">Acepto<a/>
  <script src="/js/jquery-2.2.4.min.js"></script>
  
  <script>
  $(".acepto").click(function(){
	 $(this).addClass("nopointer"); 
  });
  </script>

</div>
</div>
