<?php 
$postal = $_GET['p'];
$partes = explode("-", $postal);
$id = $partes[0];
$avatar = $partes[1];
$imagenpostal ="https://vips.com.mx/maratonnavideno/maraton/images/postales/A".$avatar."/POSTALES_MN_VIPS_FB-0".$id.".png";
?>
<html>
<head>
<title>Maratón Navideño Vips</title>
<meta name="description" content="Participa y gana cenas navideñas y más premios.">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta property="og:url" content="https://vips.com.mx/maratonnavideno/maraton/postal?p=<?php echo $id;?>-<?php echo $avatar;?>" />
 <meta property="og:title" content="Maratón Navideño Vips" />
 <meta property="og:description" content="Participa y gana cenas navideñas y más premios." />
 <meta property="og:image" content="<?php echo $imagenpostal;?>" />
</head>
<body>
	<script>
		setTimeout(function(){

			window.location = "https://vips.com.mx/maratonnavideno/";

		}, 500);

	</script>
</body>
</html>

