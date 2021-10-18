<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();


$plato = $_GET['id'];
$url = $_GET['url'];
if(strlen($url)<1){$url ='vips';}
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$url = $uriSegments[2]; //returns foo

$int = intval($url);
if(strlen($plato)>1){$consulta = $mysqli->query("SELECT * FROM platillos WHERE id_platillo = $plato");}
else{
	
	$consulta = $mysqli->query("SELECT * FROM platillos WHERE url = '$url' OR id_platillo = $int");
}



if ($detect->isMobile()) {

	header('Location: /platillo-m/'.$url);

	exit(0);

}





while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC))

{

	$id= $row['id_platillo'];
	
	$plato = $id;

	$nombre= $row['nombre'];

	$descripcion= $row['descripcion'];

	$foto= $row['imagen'];

	$flip= $row['imgflip'];
	$nutri= $row['info_nutrimental'];
	$iconflip= $row['icono'];
	$parent1=  $row['categoria1'];

	$parent=  $row['categoria2'];

	$adicional1 = $row['cupon1'];
	$adicional2 = $row['cupon2'];



	$plato_delivery=  $row['delivery'];

					if($plato_delivery =="1"){

						$showdel='<a class="btncompra2" href="/domicilio" target="_blank" style=""><b>PIDE A DOMICILIO</b></a>';
					}

					else{
						$showdel='<div style="height:100px; width:100%;"></div>';

					}


	$plato_code=  $row['categoria3'];

	$sql2 = "SELECT * FROM  categorias WHERE tipo = 3 AND code ='$plato_code'";

	$query2 = $mysqli->query($sql2);

	while($result2 = mysqli_fetch_array($query2)){

		$idcat= $result2['id_cat'];

		$nombrecat= $result2['nombre'];

		$codecat= $result2['code'];



	}

}



if($foto =="b"){

	$sql33 = "SELECT * FROM categorias WHERE code = '$parent'";


	$query33 = $mysqli->query($sql33);

	while($row33 = mysqli_fetch_array($query33)){
		$imgcat2 = $row33['imagen'];
	}


	$foto ="cats/".$imgcat2;

	$paddingimg= "padding: 5% 17.5% 17.5% 17.5%;";

}






if( strlen($foto)<2){



	$sql33 = "SELECT * FROM categorias WHERE code = '$parent'";


	$query33 = $mysqli->query($sql33);

	while($row33 = mysqli_fetch_array($query33)){
		$imgcat2 = $row33['imagen'];
	}


	$foto ="/cats/".$imgcat2;

	$paddingimg= "padding: 5% 17.5% 17.5% 17.5%;";

}


if( strlen($flip)>2){



	$fotoflip ="/flip/".$flip;

	$classflip= "flip";

}



else{



	$classflip= "noflip";

}

if( strlen($iconflip)>2){

		$iconflip ="/img/iconsplatillos/".$iconflip;
if($iconflip == "/img/iconsplatillos/cuenta.png"){
	

	
		$diviconflip = '
	<div class="pulse iconoflip iconoflip2 showicon" style="background-image:url('.$iconflip.')"></div>
	';
	
	
}

else{
	
		$diviconflip = '
	<div class="iconoflip1 iconoflip showicon" style="animation: none; width: 4em; height: 4em; pointer-events: none; cursor:normal; background-image:url('.$iconflip.')"></div>
	';	
	
}





}






switch ($adicional1) {
    case "1":
        $linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
        break;
    case "2":
        $linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
        break;
    case "3":
        $linkadicional1 = "https://vips.com.mx/promociones/cupones";
        break;
	case "4":
        $linkadicional1 = "https://vips.com.mx/promociones/cupones";
        break;

		case "5":
        $linkadicional1 = "https://vips.com.mx/promociones/cupones";
        break;
    case "6":
        $linkadicional1 = "https://vips.com.mx/cafecito";
        break;
    case "7":
        $linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
        break;
	case "8":
        $linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
        break;

		case "9":
        $linkadicional1 = "https://vips.com.mx/landing-viernes-ninos-no-pagan";
        break;
    case "10":
        $linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
        break;
    case "11":
        $linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
        break;
	case "12":
        $linkadicional1 = "https://vips.com.mx/promociones";
        break;
		case "13":
        $linkadicional1 = "https://vips.com.mx/landing-crece-tu-menu.php";
        break;
		case "14":
		$linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
		break;
		case "15":
		$linkadicional1 = "https://vips.com.mx/promociones/cupones";
		break;
		case "16":
		$linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
		break;
}


switch ($adicional2) {
    case "1":
        $linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
        break;
    case "2":
        $linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
        break;
    case "3":
        $linkadicional2 = "https://vips.com.mx/promociones/cupones";
        break;
	case "4":
        $linkadicional2 = "https://vips.com.mx/promociones/cupones";
        break;

		case "5":
        $linkadicional2 = "https://vips.com.mx/promociones/cupones";
        break;
    case "6":
        $linkadicional2 = "https://vips.com.mx/cafecito";
        break;
    case "7":
        $linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
        break;
	case "8":
        $linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
        break;

		case "9":
        $linkadicional2 = "https://vips.com.mx/landing-viernes-ninos-no-pagan";
        break;
    case "10":
        $linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
        break;
    case "11":
        $linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
        break;
	case "12":
        $linkadicional2 = "https://vips.com.mx/promociones";
        break;
		case "13":
        $linkadicional2 = "https://vips.com.mx/landing-crece-tu-menu.php";
        break;
		case "14":
		$linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
		break;
		case "15":
		$linkadicional2 = "https://vips.com.mx/promociones/cupones";
		break;
		case "16":
		$linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
		break;
}



switch ($plato) {
    case "162":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>
		• Huevo </br>
		• Gluten de trigo
		
		</p>";
        break;

		case "163":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>
		
		• Huevo </br>
		• Trigo </br>
		• Lácteos</br>
		• Soya  </br>
		• Avena </br>
		
		</p>";
        break;
		
		case "164":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>
		
		• Huevo </br>
		• Lácteos</br>
		• Gluten de trigo </br>
		
		</p>";
        break;

		case "165":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>
		
		• Huevo </br>
		• Lácteos</br>
		• Gluten de trigo </br>
		
		</p>";
        break;

		case "166":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br>
		
		• Trigo</br>
		• Avena</br>
		• Almendras </br>
		• Lácteos </br>
		
		</p>";
        break;

		case "167":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Lácteos </br>
		
		</p>";
        break;
		
		
		case "168":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Lácteos </br>
		• Gluten de trigo </br>
		
		</p>";
        break;

		case "169":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Sin alérgenos en la formulación</br>
		
		</p>";
        break;

		case "170":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Lácteos </br>
		
		</p>";
        break;

		case "171":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Pescado </br>
		• Gluten de trigo </br>
		</p>";
        break;

		
		case "172":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Lácteos </br>
		
		</p>";
        break;


		case "173":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Sin alérgenos </br>en la formulación </br>
		
		</p>";
        break;


		case "174":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Sin alérgenos </br>en la formulación </br>
		
		</p>";
        break;

		case "175":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Leche </br>
		
		</p>";
        break;

		case "176":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Sin alérgenos </br>en la formulación </br>
		
		</p>";
        break;

		case "177":
        $alergenos = "<p class='txtal'>
		
		<b>Éste platillo contiene:</b></br></br>

		• Sin alérgenos </br>en la formulación </br>
		
		</p>";
        break;
   
}

	if( isset($_SESSION['uservips'])!="" && $adicional1=="12"){
		$adicional1 = "12-l";
	}

	if( isset($_SESSION['uservips'])!="" && $adicional2=="12"){
		$adicional2 = "12-l";
	}

	
	
if( $parent1== "InfMen18"){



	$diviconal = '
	<div class="pulse iconoflip3 showicon tooltip-bottom iconoal"  data-tooltip="Alérgenos"  style="background-image:url(/img/svg/alergeno.svg)"></div>
	';
	
	 $linkadicional1 = "https://vips.com.mx/viernes-ninos-no-pagan";
	 
	 $adicional1 = "AdicionalViernesNinosNoPagan";

}



?>

<!-- fb meta -->

<meta property="og:title" content="<?php echo $nombre; ?>" />

<meta property="og:type" content="website" />

<meta property="og:url" content="https://vips.com.mx/platillo?id=<?php echo $id; ?>" />

<meta property="og:image" content="https://vips.com.mx/img/platillos/<?php echo $foto; ?>" />

<meta property="og:description" content="<?php echo $descripcion; ?>"/>

<link rel="image_src" href="https://vips.com.mx/img/platillos/<?php echo $foto; ?>" />



<style>

.navegacion {

	padding: 2em 0 0 0;

}



.icon-back {

	width: 1.25em;

	height: 1.25em;

	background-image: url(/img/back.png);

	background-repeat: no-repeat;

	background-size: 100%;

	float: left;

}



.productdesc{

	width:50%;

	float:left;

	padding: 0% 6%;

}



.productimg {
	width: 50%;
	float: left;
	text-align: left;
	padding: 2.5% 9%;
	padding-bottom: 0;
}
.productdesc h3 {

	color: #ed7124;

	font-size: 1.8em;

	text-align: left;
	font-family: 'Program';

}



.productdesc p {

	font-size: 1.5em;

}



.navegacion p {

	padding: .4em 2em;

	margin: 0;

	color: #ff0025;

	font-size: .8em;

}



.productimg img {
	width: 100%;
	padding: 5%;
	max-height: 400px;
	object-fit: contain;
}

.shareicons li {

	display: inline-block;

	margin-right: 2em;

	background-size: 100%;

}

.iconsocial{width:2.5em; height:2.5em;}

.icon-fb{background-image: url(/img/menu/social/facebook.png);}

.icon-tw{background-image: url(/img/menu/social/twitter.png);}

.icon-ig{background-image: url(/img/menu/social/instagram.png);}

.icon-wa{background-image: url(/img/menu/social/whatsapp.png);}



.btncompra2 {
	width: 50%;
	background: #e42528;
	padding: .8em;
	color: #fff;
	float: left;
	margin-bottom: .5em;
	cursor: pointer;
	text-align: center;
	font-size: 1.1em;
	transition: 0.3s ease all;
	text-transform: uppercase;
	font-family: "Program", sans-serif;
	margin: 2em 0;
}


.btncompra2:hover {
	background: #ff1528;

}


.prefooter {
	width: 100%;
	float: left;
	padding: 2% 6%;
	padding-top: 0;
}
.vipscercano {

	width: 50%;

	float: left;

	padding: 2% 5% 2% 0%;

	border-top: 1px solid #ccc;

}



.beneficiosprod {

	width: 50%;

	float: left;

	padding: 2% 0% 2% 5%;

	border-top: 1px solid #ccc;

}



.vipscercano h3 {

	color: #222;

	font-size: 1.6em;

	font-weight: 700;

	text-align: left;

	padding: .5em .5em .5em 2.5em;

	font-family: 'Program', sans-serif;

	margin-bottom: .6em;

	background: url(/img/marker.png);

	background-repeat: no-repeat;

	background-size: 2em;

	min-height: 2em;

	vertical-align: middle;

}



.inputmapf {

	padding: 12px;

	width: 100%;

	float: left;

	position: relative;

	display: inline-block;

	height: 45px;

	margin-right: 2.5%;

	background: #fff;

	border: 3px dashed #bbb;

}
.vipscercano .btnmap {
	width: 50%;
	margin-top: 1em;
	padding: .8em;
	font-size: 1.1em;
	border-radius: 30px;
	font-weight: 500;
}


.beneficiosprod h3 {
	color: #ed7124;
	font-size: 1em;
	font-weight: 700;
	text-align: left;
	padding: 0em .4em .4em 13%;
	margin-bottom: .6em;
	background: url(/img/benef-icon2.png);
	background-repeat: no-repeat;
	background-size: 10%;
	min-height: 2em;
	vertical-align: middle;
}

.benef {

	width: 50%;

	float: left;

	margin: 0;

	padding: 0 1em;

	transition: all .35s ease;

	min-height: 8em;

}



.benef{ padding: 0 2%; transition: all .35s ease;}

.benef:hover{ opacity:.75; transition: all .35s ease;}



.benef img {
	width: 100%;
	padding: 0;
	transition: all .35s ease;
	box-shadow: 1px 1px 10px #ccc;
}




#infocal {

	text-align: center;

	visibility: hidden;

	width: 100%;

	height: 100%;

	position: fixed;

	background-color: rgba(0,0,0,.6);

	z-index: 9999999999;

	transition: .35s all ease;

	opacity: 0;

	padding-top: 0;

	float: left;

	top: 0;

	padding: 5%;

}

.opencal {

	visibility: visible!important;

	transition: .35s all ease !important;

	opacity: 1 !important;

}



#imgcal, #imgplatillo{cursor:pointer;}



.redbtn {

	background: #979797;

	color: #fff;

	height: auto;

	border: none;

	font-size: 1em;

	font-family:"Program", sans-serif;

}

.redbtn:hover {

	background: #b7b7b7;

	color:#fff;

}



.opencal #imgcal {

	max-width: 100%!important;

	max-height: 100%!important;

	cursor: url(/img/cancel.png), auto!important;

}



.opencal  {



	cursor: url(/img/cancel.png), auto!important;

}

.iconoflip {
	display: none;
	width: 5em;
	height: 5em;
	background-repeat: no-repeat;
	background-size: 100%;
	position: absolute;
	top: 2.5%;
	left: 2.5%;
	cursor: pointer;
	animation-iteration-count: 10;
	animation: pulse 1.6s linear infinite;
}
.showicon{display:block;}

.calorias {
	width: 100%;
	text-align: center;
	padding-top: 30%;
	position: absolute;
}

.calorias img {
	width: 100%;
	max-width: 64px;
	backface-visibility: hidden;
	padding: 10px;
}

.iconocal {
	/* display: none; */
	width: 3em;
	height: 3em;
	background-repeat: no-repeat;
	background-size: 100%;
	position: absolute;
	margin-top: 0;
	right: 5%;
	cursor: pointer;
	/* animation-iteration-count: 10; */
	animation: pulse 1.6s linear infinite;
}

.front{padding:5%;}
.back{position:absolute!important}



/* Base styles for the element that has a tooltip */
[data-tooltip],
.tooltip {
  position: relative;
  cursor: pointer;
}

/* Base styles for the entire tooltip */
[data-tooltip]:before,
[data-tooltip]:after,
.tooltip:before,
.tooltip:after {
  position: absolute;
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: 
	  opacity 0.2s ease-in-out,
		visibility 0.2s ease-in-out,
		-webkit-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
	-moz-transition:    
		opacity 0.2s ease-in-out,
		visibility 0.2s ease-in-out,
		-moz-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
	transition:         
		opacity 0.2s ease-in-out,
		visibility 0.2s ease-in-out,
		transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform:    translate3d(0, 0, 0);
  transform:         translate3d(0, 0, 0);
  pointer-events: none;
}

/* Show the entire tooltip on hover and focus */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after,
[data-tooltip]:focus:before,
[data-tooltip]:focus:after,
.tooltip:hover:before,
.tooltip:hover:after,
.tooltip:focus:before,
.tooltip:focus:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}

/* Base styles for the tooltips directional arrow */
.tooltip:before,
[data-tooltip]:before {
  z-index: 1001;
  border: 6px solid transparent;
  background: transparent;
  content: "";
}

/* Base styles for the tooltips content area */
.tooltip:after,
[data-tooltip]:after {
  z-index: 1000;
  padding: 8px;
  width: 160px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 0.9);
  background-color: #FAAC4F;
  color: #fff;
  content: attr(data-tooltip);
  font-size: 14px;
  line-height: 1.2;
  text-align: center;
}

/* Directions */

/* Top (default) */
[data-tooltip]:before,
[data-tooltip]:after,
.tooltip:before,
.tooltip:after,
.tooltip-top:before,
.tooltip-top:after {
  bottom: 100%;
  left: auto;
}

[data-tooltip]::before, .tooltip::before, .tooltip-top::before {
	margin-left: 0;
	margin-bottom: -10px;
	border-top-color: #000;
	border-top-color: hsla(0,0%,20%,.9);
	border-top-color: #FAAC4F;
	
	
}
/* Horizontally align top/bottom tooltips */
[data-tooltip]:after,
.tooltip:after,
.tooltip-top:after {
  margin-left: -80px;
}

[data-tooltip]:hover:before,
[data-tooltip]:hover:after,
[data-tooltip]:focus:before,
[data-tooltip]:focus:after,
.tooltip:hover:before,
.tooltip:hover:after,
.tooltip:focus:before,
.tooltip:focus:after,
.tooltip-top:hover:before,
.tooltip-top:hover:after,
.tooltip-top:focus:before,
.tooltip-top:focus:after {
  -webkit-transform: translateY(-12px);
  -moz-transform:    translateY(-12px);
  transform:         translateY(-12px); 
}

/* Left */
.tooltip-left:before,
.tooltip-left:after {
  right: 100%;
  bottom: 50%;
  left: auto;
}

.tooltip-left:before {
  margin-left: 0;
  margin-right: -12px;
  margin-bottom: 0;
  border-top-color: transparent;
  border-left-color: #000;
  border-left-color: hsla(0, 0%, 20%, 0.9);
}

.tooltip-left:hover:before,
.tooltip-left:hover:after,
.tooltip-left:focus:before,
.tooltip-left:focus:after {
  -webkit-transform: translateX(-12px);
  -moz-transform:    translateX(-12px);
  transform:         translateX(-12px); 
}

/* Bottom */
.tooltip-bottom:before,
.tooltip-bottom:after {
  top: 100%;
  bottom: auto;
  left: 50%;
}

.tooltip-bottom:before {
  margin-top: -12px;
  margin-bottom: 0;
  border-top-color: transparent;
  border-bottom-color: #000;
  border-bottom-color: #faac4f;
}

.tooltip-bottom:hover:before,
.tooltip-bottom:hover:after,
.tooltip-bottom:focus:before,
.tooltip-bottom:focus:after {
  -webkit-transform: translateY(12px);
  -moz-transform:    translateY(12px);
  transform:         translateY(12px); 
}

/* Right */
.tooltip-right:before,
.tooltip-right:after {
  bottom: 50%;
  left: 100%;
}

.tooltip-right:before {
  margin-bottom: 0;
  margin-left: -12px;
  border-top-color: transparent;
  border-right-color: #000;
  border-right-color: hsla(0, 0%, 20%, 0.9);
}

.tooltip-right:hover:before,
.tooltip-right:hover:after,
.tooltip-right:focus:before,
.tooltip-right:focus:after {
  -webkit-transform: translateX(12px);
  -moz-transform:    translateX(12px);
  transform:         translateX(12px); 
}

/* Move directional arrows down a bit for left/right tooltips */
.tooltip-left:before,
.tooltip-right:before {
  top: 3px;
}

/* Vertically center tooltip content for left/right tooltips */
.tooltip-left:after,
.tooltip-right:after {
  margin-left: 0;
  margin-bottom: -16px;
}

.iconoflip3 {
	
	width: 2.8em;
	height: 2.8em;
	background-repeat: no-repeat;
	background-size: 100%;
	position: absolute !important;
	margin-top: 18%;
	right: 0%;
	cursor:pointer;
	animation-iteration-count: 10;
	animation: pulse 1.6s linear infinite;
}

.alergenos {
	width: 100%;
	height: 400px;
	background: url(/img/svg/Oval.svg);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
}
.txtal {
	padding: 12% 30%;
	min-height: 200px;
	text-align: center;
	padding-bottom: 0px;
	background-image: url(/img/cancel_orange.png);
	background-repeat: no-repeat;
	background-position: 80% 10px;
	background-size: 5%;
	cursor: pointer;
	font-size: .9em;
}
p.alertext {
	font-size: .66em;
	padding: 0 28%;
	text-align: center;
}
</style>

<div class="main">









	<!-- Descripción =============================-->

	<div class="productdesc">

		<!-- Navegación=============================-->



		<div class="navegacion">



			<div class="icon-back"></div>

			<p><a href="/menu">Menú</a> /

				<a href="/menu"><b><?php echo $nombrecat; ?></b></a></p>



			</div>



			<h3><?php echo $nombre; ?></h3>

			<p><?php echo $descripcion; ?></p>

			<?php

				function randomText(){
					$phrases = array(
						"¿A quién se lo compartirás?",
						"¡Mándaselo a alguien!",
						"Antójaselo a todos",
						"Dale share, ándale",
						"¿Te gusta? ¡Compártelo!",
						"Compártelo con el mundo"
						);

					return $phrases[mt_rand(0, count($phrases)-1)]; //subtract 1 from total count of phrases as first elements key is 0
				}



			?>

			<div class="antojos">
				<p style="color: gray; font-size: 1.3em; margin-top: 3em;"><?php echo randomText(); ?></p>
			</div>

			<ul class="shareicons">

				<a class="sharefb" href="https://www.facebook.com/sharer/sharer?u=<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"><li class="iconsocial icon-fb"></li></a>

				<a class="sharetw" href="https://twitter.com/intent/tweet?text=&amp;url=<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"><li class="iconsocial icon-tw"></li></a>

				<!--<a href="http://facebook.com"><li class="iconsocial icon-ig"></li></a> =============================-->

				<a href="whatsapp://send?text=Vips | <?php echo $nombre; ?>%20<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" data-action="share/whatsapp/share"><li class="iconsocial icon-wa"></li></a>

			</ul>


			<?php echo $showdel;?>








		</div>





		<!-- Imagen platillo=============================-->

		<div class="productimg">



			<div class="flip">

				<div class="front">


					<?php echo $diviconflip; ?>
					<?php echo $diviconal; ?>
					<div class="iconocal" style="background-image:url('/img/svg/icono_cal.svg')"></div>

					<img src="/img/platillos/<?php echo $foto; ?>" alt="" style="<?php echo $paddingimg; ?>"/>

				</div>

				<div class="back">

					<img src="/img/platillos/<?php echo $fotoflip; ?>" alt="" class="imgflip" style="display:none;" />

					<div class="calorias"><img src="/img/svg/icono_cal.svg" alt="" /> <br><?php echo $nutri; ?></div>
					<div class="alergenos" style="display:none;"><?php echo $alergenos; ?> 
					
					<p class="alertext">
					*Tenga en cuenta que nuestras cocinas operan diversos productos, por lo que existe la posibilidad de contacto con utensilios que contengan: huevo, pescado, nueces de árbol, cacahuates, mariscos, soya, cereales con gluten, leche y derivados de estos
					</p>
					</div>

				</div>

			</div>

		</div>









		<div class="prefooter">



			<!-- Vips más cercano=============================-->

			<div class="vipscercano">

				<h3>Encuentra tu Vips más cercano</h3>





				<input class="inputmapf" name="cp" id="cp" placeholder="Buscar CP, Delegación o Ciudad" required="" type="text">

				<button class="btnmap redbtn buscardireccion">BUSCAR DIRECCIÓN</button>



			</div>



			<!-- Beneficios=============================-->



			<div class="beneficiosprod">

				<h3>Promociones aplicables</h3>

				<a class="benef" href="<?php echo $linkadicional1;?>"><img src="/img/adicionales/<?php echo $adicional1;?>.png"></a>
				<a class="benef" href="<?php echo $linkadicional2;?>"><img src="/img/adicionales/<?php echo $adicional2;?>.png"></a>

			</div>



		</div>


		<script>
		$(".iconoflip2").click(function(){
			$(".calorias").hide();
			$(".imgflip").show();
			$(".alergenos").hide();



		});

		$(".iconocal").click(function(){
			$(".calorias").show();
			$(".imgflip").hide();
			$(".alergenos").hide();
		


		});

		$(".iconoal").click(function(){
			$(".calorias").hide();
			$(".imgflip").hide();
			$(".alergenos").show();


		});
		



		//$('a[href="https://vips.com.mx/landing-viernes-ninos-no-pagan"]').hide();
		//$('a[href="https://vips.com.mx/landing-verano-2-x-1"]').hide();
		$('a[href="https://vips.com.mx/promociones/cuponesno"]').hide();
		</script>


		<!-- Footer =============================-->

		<?php include('footer.php');?>
