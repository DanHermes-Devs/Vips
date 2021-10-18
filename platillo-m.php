<?php

include('headerm.php');

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

}

else{

	header('Location: /platillo/'.$url);

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
	$plato_code=  $row['categoria3'];
		$parent1=  $row['categoria1'];
	$parent=  $row['categoria2'];
	$adicional1 = $row['cupon1'];
	$adicional2 = $row['cupon2'];

		$plato_delivery=  $row['delivery'];

					if($plato_delivery =="1"){

						$showdel='<a class="btncompra2" href="/domicilio">PIDE A DOMICILIO</a>';
					}

					else{
						$showdel='<div style="height:10px; width:100%;"></div>';

					}

		$adicional1 = $row['cupon1'];
	$adicional2 = $row['cupon2'];

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


	$foto ="/cats/".$imgcat2;

	$paddingimg= "padding: 17.5% !important;";

}




if( strlen($foto)<2){



	$sql33 = "SELECT * FROM categorias WHERE code = '$parent'";


	$query33 = $mysqli->query($sql33);

	while($row33 = mysqli_fetch_array($query33)){
		$imgcat2 = $row33['imagen'];
	}


	$foto ="/cats/".$imgcat2;

	$paddingimg= "padding: 17.5% !important;";

}


if( strlen($flip)>2){



	$fotoflip ="/flip/".$flip;

	$classflip= "flip";

}

else{

	$classflip= "";
}

if( strlen($iconflip)>2){



	$iconflip ="/img/iconsplatillos/".$iconflip;

	$diviconflip = '
	<div class="pulse iconoflip showicon" style="background-image:url('.$iconflip.')"></div>
	';

}


switch ($adicional1) {
    case "1":
        $linkadicional1 = "https://vips.com.mx/desayunos-79";
        break;
    case "2":
        $linkadicional1 = "https://vips.com.mx/clasicos";
        break;
    case "3":
        $linkadicional1 = "https://vips.com.mx/promociones/cuponesno";
        break;
	case "4":
        $linkadicional1 = "https://vips.com.mx/cuaresma";
        break;

		case "5":
        $linkadicional1 = "https://vips.com.mx/promociones";
        break;
		case "6":
        $linkadicional1 = "https://vips.com.mx/crece-tu-menu";
        break;
    
}


switch ($adicional2) {
    case "1":
        $linkadicional2 = "https://vips.com.mx/desayunos-79";
        break;
    case "2":
        $linkadicional2 = "https://vips.com.mx/clasicos";
        break;
    case "3":
        $linkadicional2 = "https://vips.com.mx/promociones/cuponesno";
        break;
	case "4":
        $linkadicional2 = "https://vips.com.mx/cuaresma";
        break;

		case "5":
        $linkadicional2 = "https://vips.com.mx/promociones";
        break;
		case "6":
        $linkadicional2 = "https://vips.com.mx/crece-tu-menu";
        break;
    
}



	if( isset($_SESSION['uservips'])!="" && $adicional1=="5"){
		$adicional1 = "5-l";
	}

	if( isset($_SESSION['uservips'])!="" && $adicional2=="5"){
		$adicional2 = "5-l";
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

.bigh1 {

	text-align: center;

	/* transform: skewX(-0.06turn); */

	background: #ed7124;

	color: #fff;

	/* padding: 1% 5%; */

	/* position: relative; */

	/* float: left; */

	width: 80%;

	margin: .5em auto;

	background-image: url(/img/orangeedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

	font-size: 1em;

	padding: .5em;

}



.bigh2 {

	text-align: left;

	/* transform: skewX(-0.06turn); */

	background: #00b7a4;

	color: #fff;

	padding: 1% 5%;

	/* position: relative; */

	/* float: left; */

	width: 100%;

	margin: .5em auto;

	background-image: url(/img/greenedge.png);

	background-size: 30%;

	background-repeat: no-repeat;

	background-position: right;

	font-size: 1.6em;

	padding: .5em .5em .5em 1em;

}







.producto {

	width: 100%;

	float: left;

	margin-top: 0;

	padding: 2.5% 5%;

}

.productodesc {

	width: 65%;

	float: left;

	text-align: center;

	padding: 5%;

	padding-right:12%;

	background-image: url(/img/right-arrow.png);

	background-repeat: no-repeat;

	background-position: 95% center;

	background-size: 20px;

	-webkit-transform-style: preserve-3d;

	-moz-transform-style: preserve-3d;

	transform-style: preserve-3d;

	padding-top: 3em;

	background-position: right 3em;

}



.productoimg{

	width: 35%; float: left; padding: 2.5%; text-align: left;

}





.productoimg img {

	width: 100%;

}

.productodesc h3 {

	color: #ed7124;

	font-size: .9em;



	text-align: left;

	position: relative;

	top: 50%;

	margin: 0;

	padding-right: 10%;

}

.productodesc h3::after {

	content: "";

	position: absolute;

	z-index: -1;

	top: 0;

	left: 0;

	right: 0;

	bottom: 0;

	background-image: url(/img/right-arrow.png);

	transform: scaleX(0);

	transform-origin: 0 50%;

	transition: transform .5s ease-out;

}

.btndetail {

	background: #ff0025;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

	cursor: pointer;

	display: none;

}



.btncompra {

	background: #ed7124;

	width: 70%;

	float: left;

	margin-right: 20%;

	color: #fff;

	padding: .5em 1em;

	margin: 1em 0;

	cursor: pointer;

	display: none;

}



.balance .productodesc h3{color:#00b7a4;}



.main {

	width: 100%;

	z-index: 2;

	position: relative;

	transition: margin-left .2s ease-in;

	-moz-transition: margin-left .2s ease-in;

	-webkit-transition: margin-left .2s ease-in;

}



.titlemenu {

	width: auto;

	float: left;

	height: auto;

	vertical-align: middle;

	padding: .35em 1em;

	background: #ee7728;

	color: #fff;

	font-weight: bold;

	/* background-color: white; */

	clip-path: polygon(0 0, 90% 0%, 85% 100%, 0% 100%);

	min-width: 60%;

}

.productdesc{

	width:100%;

	float:left;

	padding: 0% 6%;

	margin-top:8vh;

}


.productimg {
	width: 100%;
	float: left;
	margin-top: 5%;
	/* height: 50vh; */
	height: 100vw;
}
.productdesc h3 {

	color: #ed7124;

	font-size: 1.2em;

	text-align: left;

	padding: 0;

	margin: 1em 0 .25em 0;

}

.productdesc p {

	font-size: 1em;

	width: 100%;

	float: left;

}



ul.shareicons {

	width: 100%;

	float: left;

}



.productimg img{width:100%;}

.shareicons li {

	display: inline-block;

	margin-right: 1em;

	background-size: 100%;

}

.iconsocial{width:1.5em; height:1.5em;}

.icon-fb{background-image: url(/img/menu/social/facebook.png);}

.icon-tw{background-image: url(/img/menu/social/twitter.png);}

.icon-ig{background-image: url(/img/menu/social/instagram.png);}

.icon-wa{background-image: url(/img/menu/social/whatsapp.png);}



.btncompra2 {
	width: 100%;
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
	margin: 2em 0;
	margin-top: 0;
}


.btncompra2:hover {
	background: #ff1528;

}




.prefooter {

	width: 100%;

	float: left;

	padding: 5%;

}

.vipscercano {

	width: 100%;

	float: left;

	padding: 0%;

	border-top: 1px solid #ccc;

}



.beneficiosprod {

	width: 100%;

	float: left;

	padding: 0;

	border-top: 1px solid #ccc;

	margin-top: 5vh;

}



.vipscercano h3 {

	color: #222;

	font-size: 1em;

	text-align: left;

	padding: 0em .5em .5em 1.5em;

	margin-bottom: .6em;

	background: url(/img/marker.png);

	background-repeat: no-repeat;

	background-size: 1em;

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

	background: #eaeaea;

	border: 3px dashed #bbb;

}



.btnmap {

	background: #ff0025;

	color: #fff;

	padding: .5em 1em;

	font-size:1em;

	position: relative;

	width: 100%;

	text-align: center;

	margin-top: 0;

	transition: all .4s ease;

	float: left;

	display: inline-block;

	border: none;

}

.vipscercano .btnmap{

	width:100%;

	margin-top:1em;

}



.beneficiosprod h3 {

	color: #ed7124;

	font-size: 1em;

	font-weight: 700;

	text-align: left;

	padding: 0em .4em .4em 1.5em;

	margin-bottom: .6em;

	background: url(/img/benef-icon2.png);

	background-repeat: no-repeat;

	background-size: 1em;

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



.benef{ padding: 0 2%;}



.benef img{width: 100%;	padding:0; transition: all .35s ease;}

.benef img:hover{width: 100%;	padding:0 1em; transition: all .35s ease;}



#imgcal, #imgplatillo{cursor:pointer;}


.iconoflip {
	display: none;
	width: 17vw;
	height: 17vw;
	background-repeat: no-repeat;
	background-size: 100%;
	position: absolute;
	top: 35%;
	left: 5%;
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
	right: 2.5%;
	cursor: pointer;
	/* animation-iteration-count: 10; */
	animation: pulse 1.6s linear infinite;
}

.front{padding:5%;}
.back{position:absolute!important}

</style>







<div class="productdesc">





	<h3><?php echo $nombre; ?></h3>

	<div class="titlemenu"><?php echo $nombrecat; ?></div>

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
				<p style="color: gray; font-size: 1.3em;"><?php echo randomText(); ?></p>
			</div>




	<ul class="shareicons">

		<a href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/platillo?id=<?php echo $id; ?>"><li class="iconsocial icon-fb"></li></a>

		<a href="https://twitter.com/intent/tweet?text=&amp;url=https://vips.com.mx/platillo?id=<?php echo $id; ?>"><li class="iconsocial icon-tw"></li></a>

		<!--<a href="http://facebook.com"><li class="iconsocial icon-ig"></li></a> =============================-->

		<a href="whatsapp://send?text=Vips | <?php echo $nombre; ?>%20https://vips.com.mx/platillo?id=<?php echo $id; ?>" data-action="share/whatsapp/share"><li class="iconsocial icon-wa"></li></a>

	</ul>







</div>





<!-- Imagen platillo=============================-->

		<div class="productimg">



			<div class="flip">

				<div class="front">


					<?php echo $diviconflip; ?>
					<div class="iconocal" style="background-image:url('img/svg/icono_cal.svg')"></div>

					<img src="/img/platillos/<?php echo $foto; ?>" alt="" style="<?php echo $paddingimg; ?>"/>

				</div>

				<div class="back">

					<img src="/img/platillos/<?php echo $fotoflip; ?>" alt="" class="imgflip" style="display:none;" />

					<div class="calorias"><img src="/img/svg/icono_cal.svg" alt="" /> <br><?php echo $nutri; ?></div>

				</div>

			</div>

		</div>






<div class="prefooter">



	<?php echo $showdel; ?>





	<!-- Vips más cercano=============================-->

	 <div class="vipscercano">

      <h3>Encuentra tu Vips más cercano</h3>





      			<input class="inputmapf" name="cp" id="cp" placeholder="Buscar CP, Delegación o Ciudad" required type="text">

      			<button class="btnmap" >BUSCAR DIRECCIÓN</button>



      </div>



	<!-- Beneficios=============================-->



	<div class="beneficiosprod">

		<h3>Promociones aplicables</h3>

		<a class="benef" href="<?php echo $linkadicional1;?>">
			<img src="/img/adicionales/<?php echo $adicional1;?>.png">
		</a>

			<a class="benef" href="<?php echo $linkadicional2;?>">
				<img src="/img/adicionales/<?php echo $adicional2;?>.png">
			</a>

	</div>



</div>

		<script>
		$(".iconoflip").click(function(){
			$(".calorias").hide();
			$(".imgflip").show();


		});

		$(".iconocal").click(function(){
			$(".calorias").show();
			$(".imgflip").hide();


		});

		//$('a[href="https://vips.com.mx/landing-viernes-ninos-no-pagan"]').hide();
		//$('a[href="https://vips.com.mx/landing-verano-2-x-1"]').hide();
		</script>

<!-- Footer =============================-->

<?php include('footerm.php');?>
