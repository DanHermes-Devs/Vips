<?php

ob_start();

	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

require_once 'dbconnect.php';

$idcatcurrent="'".$_GET['cat']."'";









$sql = "SELECT * FROM categorias WHERE code = ".$idcatcurrent."";

$result = $mysqli->query($sql) or die("Falló la consulta $sql");

$row = mysqli_fetch_assoc($result);



$nombre		= $row['nombre'];

$id_cat		= $row['id_cat'];







$sql2 = "SELECT * FROM categorias WHERE padre = $id_cat";

$result2 = $mysqli->query($sql2) or die("Falló la consulta $sql2");















?>

<style>



.container {

	width: 100%;

	float: left;



	margin: 0;}

	.grid, .griditem{100%;}



	.productos-list{width:100%; float:left;}



	.titleh3{

		color: #f29100;

		font-size: 1.5em;

		text-align: left;



	}

	.titleh3::before {

		content: "";

		position: absolute;

		left: 0;

		top: 2em;

		height: 11px;

		width: 200px;

		border-bottom: 2px solid #f29100;

	}

	.griditem {

		width: 100%;

		float: left;

		padding-top: 5%;
		padding-bottom: 5vh;



	}



	.cattienda {

		text-align: left;

		background: #00b7a4;

		color: #fff;

		padding: .5em;

		width: 85%;

		margin: 1em 0;

		background-image: url(img/greenedge.png);

		background-size: contain;

		background-repeat: no-repeat;

		background-position: right;

		float: left;

		font-size: 1.5em;

	}



	.prodtienda {

		display: inline-block;

		width: 50%;

		margin:0;

		float:left;

	}



	.prodtienda img {

		width: 50%;

		display: inline-block;

		margin: 0 auto;

		padding: 0;

		float: left;

	}



	.prods{

		width: 100%;

		float: left;}



		.cupon {

			display: inline-block;

			width: 50%;

			padding: .5em;

			margin: 0;

			float: left;

			transition:.35s all ease;

			min-height:300px;





		}

		.cupones-cont{width:100%;float:left;     padding-bottom: 0vh;}



		.cupon img {

			max-width: 50%;

			max-height: 100%;

			display: inline-block;

			float: left;

		}



		.prodbtns {

			width: 50%;

			display: inline-block;

		}



		.prodbtns h3 {

			color: #ed7124;

			width: 100%;

			text-align: left;

			padding: 1em .5em;

			float: left;

		}



		.detailbtn {

			width: 100%;

			background: #ef3e42;

			padding: .75em;

			color: #fff;

			float: left;

			margin-bottom: .5em;

			cursor:pointer;

		}



		.pidebtn {

			width: 100%;

			background: #f29100;

			padding: .75em;

			color: #fff;

			float: left;

			margin-bottom: .5em;

			cursor:pointer;

		}



		.titlecontainer {

			text-align: left;

			color: #fff;

			padding: 2.5%;

			width: auto;

			margin: 1.5em 0 .5em 0;

			clip-path: polygon(0 0, 90% 0%, 85% 100%, 0% 100%);

			font-size: 1.5em;

			margin-top: 0;

		}

		.dotsbg {

			cursor:pointer; padding:7.5%; background-size: 10%!important; background-position:center; transition: all .75s ease;

		}



		.dottedbg {

			background-size: 100% !important;

			background-position: center !important;

			transition: all .75s ease;

			background-repeat: no-repeat;

		}


.iconoflip {
	width: 10vw;
	height: 10vw;
	background-repeat: no-repeat;
	background-size: 100%;
	position: absolute;
	top: 2.5%;
	left: 2.5%;
	animation-iteration-count: 10;
}


	</style>




	<div class="wrapper" id="subfiltros">


		<div class="subfiltros">

			<?php

			while ($row = mysqli_fetch_assoc($result2)) {





				$sql3 = "SELECT * FROM categorias WHERE padre = ".$row["id_cat"]."";

				$result3 = $mysqli->query($sql3) or die("Falló la consulta $sql3");





				?>





				<!--FILTRO <?php echo $row["nombre"]; ?>-->	

				<div class="subfiltro"> 

					<div class="button filterbtnm" data-color="<?php echo $row["color"]; ?>" data-filter=".<?php echo $row["code"]; ?>">

						<div class="dotsbg">

							<img style="width:100%; padding:10%;" src="img/cats/<?php echo $row["imagen"]; ?>">

						</div><p class="namefilter"><?php echo $row["nombre"]; ?></p></div>

					</div>



					<?php

					while ($row2 = mysqli_fetch_assoc($result3)) {

						$test .=$row2["id_cat"];



						$sql4 = "SELECT * FROM platillos WHERE categoria3 = '".$row2["code"]."' AND categoria2 = '".$row["code"]."'";

						$result4 = $mysqli->query($sql4) or die("Falló la consulta $sql4");

						$nombrelist2 =$row2["nombre"];



						while ($row3 = mysqli_fetch_assoc($result4)) {



							$rows[] = $row3;



							for($test2;$test2 == $test;) {

				 //do something with $rows[$i]['field_name']



								echo $rows[$i]['nombre'];

								echo $rows[$i]['categoria3'];

							}









						}



						$nombrelist1 .='



						<!-- =========== '.$row["nombre"].'============= -->

						<div class="griditem '.$row["code"].'" data-category="'.$row["code"].'">







						<h1 class="titlecontainer">'.$row["nombre"].'</h1>

						<div class="cupones-cont">







						</div>

						</div>

						';





					}



				}



				?>



			</div>

		</div>






		<div class="grid">





			<?php echo $nombrelist1;

			$sql = "SELECT * FROM  categorias WHERE tipo = 3";

			$query = $mysqli->query($sql);

			while($result = mysqli_fetch_array($query)){

				$idcat= $result['id_cat'];

				$nombrecat= $result['nombre'];

				$codecat= $result['code'];



				$codigo ="'".$result['code']."'";

				$sql1 = "SELECT * FROM platillos WHERE categoria3= ".$codigo;

				$query1 = $mysqli->query($sql1);

				while($row  = mysqli_fetch_array($query1)){

					$plato_nombre =  $row['nombre'];

					$plato_foto =  $row['imagen'];
					$iconflip= $row['icono'];

					$plato_id =  $row['id_platillo'];

					$plato_code=  $row['categoria3'];

					$parent=  $row['categoria2'];

					$plato_desc=  $row['descripcion'];





					$sql2 = "SELECT * FROM platillos WHERE categoria3= ".$codigo;

					$query2 = $mysqli->query($sql2);

					while($row2  = mysqli_fetch_array($query2)){}

						$paddingimg= "";

					$str = $plato_nombre;

					if( strlen($plato_nombre) > 50) {

						$str = explode( "\n", wordwrap( $plato_nombre, 50));

						$str = $str[0] . '...';

					}

					if($foto =="b"){

						$sql33 = "SELECT * FROM categorias WHERE code = '$parent'";


						$query33 = $mysqli->query($sql33);

						while($row33 = mysqli_fetch_array($query33)){
							$imgcat2 = $row33['imagen'];
						}


						$foto ="/cats/".$imgcat2;

						$paddingimg= "padding: 10%;";

					}






					if( strlen($plato_foto)<2){



						$sql33 = "SELECT * FROM categorias WHERE code = '$parent'";


						$query33 = $mysqli->query($sql33);

						while($row33 = mysqli_fetch_array($query33)){
							$imgcat2 = $row33['imagen'];
						}


						$plato_foto ="/cats/".$imgcat2;

						$paddingimg= "padding: 10%;";

					}








					$string.='



					<div onClick="openPanel('.$plato_id.')" id="'.$plato_id.'" class="producto pushm '.$plato_code.'" data-parent="'.$parent.'" data-category="'.$nombrecat.'" data-title="'.$plato_nombre.'" data-desc="'.$plato_desc.'" data-img="img/platillos/'.$plato_foto.'" >



					<h1 class="bigh1" style="display:none;">'.$plato_nombreshort.' </h1>



					<div class="productoimg">
					<div class="pulse iconoflip showicon" style="background-image:url(/img/iconsplatillos/'.$iconflip.')"></div>

					<img style="'.$paddingimg.'" src="img/platillos/'.$plato_foto.'">



					</div>



					<div class="productodesc">



					<h3 >'.$plato_nombre.'</h3>



					<p style="display:none;">'.$plato_desc.'</p>



					<a class="detailbtn" data-parent="'.$parent.'" data-category="'.$nombrecat.'" data-title="'.$plato_name.'" data-desc="'.$plato_desc.'" data-img="img/menu/huevos/1.png"> Ver detalle</a>

					<a class="pidebtn" > Pide a domicilio</a>



					</div>



					</div>

					';



				}

			}



			?>



		</div>



		<?php echo '<div class="platillos hidden" style="display:none;">';

		echo $string;



		echo '</div>';?>







		<script>



			$('.subfiltros2').slick({

				infinite: false,

				slidesToShow: 4,

				slidesToScroll: 4,

				dots:true,

			});



// init Isotope

var $grid = $('.grid').isotope({

	itemSelector: '.griditem',

	layoutMode: 'fitRows'

});

// filter functions

var filterFns = {

  // show if number is greater than 50

  numberGreaterThan50: function() {

  	var number = $(this).find('.number').text();

  	return parseInt( number, 10 ) > 50;

  },

  // show if name ends with -ium

  ium: function() {

  	var name = $(this).find('.name').text();

  	return name.match( /ium$/ );

  }

};

// bind filter button click

$('body').on( 'click', '.button', function() {

	var filterValue = $( this ).attr('data-filter');

  // use filterFn if matches value

  filterValue = filterFns[ filterValue ] || filterValue;

  $grid.isotope({ filter: filterValue });

});

// change is-checked class on buttons

$('.subfiltros').each( function( i, buttonGroup ) {



	var $buttonGroup = $( buttonGroup );



	$buttonGroup.on( 'click', '.button', function() {



		$buttonGroup.find('.is-checked').removeClass('is-checked');



		$( this ).addClass('is-checked');





		$(".dotsbg").css('border', 'none');

		$(".dotsbg").css('background-image', 'none');

		$( ".dotsbg" ).removeClass('dottedbg');



		var bgcolor =  $(this).attr("data-color");





		function rgb2hex(rgb) {

			if (  rgb.search("rgb") == -1 ) {

				return rgb;

			} else {

				rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);

				function hex(x) {

					return ("0" + parseInt(x).toString(16)).slice(-2);

				}

				return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);

			}

		}



		var hex = rgb2hex(bgcolor);

		var bgcolor2 = hex.replace("#", "");



		var svgbg="data:image/svg+xml;utf8,<svg viewBox='0 0 120 120' version='1.1' xmlns='http://www.w3.org/2000/svg'><circle cx='60' cy='60' r='50' fill='white'/><circle cx='60' cy='60' r='47' stroke='%23"+bgcolor2+"' stroke-width='4' stroke-dasharray='0 9' stroke-linecap='round' fill='transparent'/></svg>";

	//$( this ).css('border', '4px dotted '+bgcolor)

	$( this ).children(".dotsbg").addClass('dottedbg');



	$( this ).children(".dotsbg").css('background-image', 'url("'+svgbg+'")');



	$(".titlecontainer").css('background-color', bgcolor);



});



});



$('.pidebtn').click(function(){

	var url = "https://vips.sindelantal.mx";

	window.open(url, '_blank');





});















</script>

