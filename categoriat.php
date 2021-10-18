<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$sql = "SELECT * FROM categorias_tienda WHERE code = 'tienda'";
	$result = $mysqli->query($sql) or die("Falló la consulta $sql");
	$row=mysqli_fetch_assoc($result);

	$nombre		= $row['nombre'];
	$id_cat		= $row['id_cat'];

	$sql2 = "SELECT * FROM categorias_tienda WHERE padre = $id_cat";
	$result2 = $mysqli->query($sql2) or die("Falló la consulta $sql2");


?>

<style>



.container {



	width: 100%;



	float: left;



	padding: 0 5%;



	margin: 0;}



	.grid, .griditem{100%;}





	.button {

		padding: 0;

		border: none;

		transition: .35s all ease;

		width: 100%;

		height: auto;

		margin: 0;

	}





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

		padding: 0 5%;

	}





	.cattienda {



		text-align: left;



		background: #00b7a4;



		color: #fff;



		padding: 1% 5% 1% 2.5%;



		width: 40%;



		margin: 1em 0;



		background-image: url(img/greenedge.png);



		background-size: 30%;



		background-repeat: no-repeat;



		background-position: right;



		float: left;







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



			min-height:320px;











		}



		.cupones-cont{width:100%;float:left;}







		.cupon img {



			max-width: 50%;



			max-height: 100%;



			display: inline-block;



			float: left;



			padding: 2.5%;



		}







		.prodbtns {



			width: 50%;



			display: inline-block;



			padding: 5%;



		}







		.prodbtns h3 {

			color: #ed7124;

			width: 100%;

			text-align: left;

			padding: 1em .5em 0em 0;

			float: left;

			font-size: 1.3em;

			min-height: 100px;

			margin-bottom: 0;

		}

		.detailbtn {

			width: 100%;

			background: #979797;

			padding: .8em;

			color: #fff;

			float: left;

			margin-bottom: .5em;

			cursor: pointer;

			text-align: center;

			font-size: 1.1em;

			transition: 0.3s ease all;

			text-transform: uppercase;

			font-family: "Museo 900", sans-serif;

		}

		.detailbtn:hover {



			width: 100%;



			background: #b7b7b7;



			padding: .8em;



			color: #fff;



			float: left;



			margin-bottom: .5em;



			cursor: pointer;



			text-align: center;



			font-size: 1.1em;



			transition: 0.3s ease all;



		}







		.pidebtn {



			width: 100%;



			background: #f29100;



			padding: .8em;



			color: #fff;



			float: left;



			margin-bottom: .5em;



			cursor:pointer;



			text-align: center;



			font-size: 1.1em;

			transition: 0.3s ease all;

			text-transform: uppercase;

			font-family: "Museo 900", sans-serif;

		}





		.pidebtn:hover {



			width: 100%;



			background: #ffac30;



			padding: .8em;



			color: #fff;



			float: left;



			margin-bottom: .5em;



			cursor:pointer;



			text-align: center;



			font-size: 1.1em;

			transition: 0.3s ease all;



		}





		.grid{



			position: relative;



			height: 206.533px;



		}



		.titlecontainer {

			text-align: left;

			color: #fff;

			padding: 1% 20% 1% 2.5%;

			width: 50%;

			margin: 1.5em 0;

			clip-path: polygon(0 0, 70% 0%, 65% 100%, 0% 100%);

			font-family: "Museo 900", sans-serif;

			min-width: 50%;

			/* max-width: 70%; */

		}

		.dotsbg {

			cursor:pointer; padding:5%; background-size: 10%!important; background-position:center; transition: all .75s ease;

		}



		.dottedbg {

			background-size: 100% !important;

			background-position: center !important;

			transition: all .75s ease;

			background-repeat: no-repeat;

		}



		.namefilter {

			font-weight: normal;

			font-size: .9em;

			color: #555;

		}

		.detailbtn {
	width: 100%;
	background: #ef3e42;
	padding: 1em;
	color: #fff;
	float: left;
	margin-bottom: .5em;
	cursor: pointer;
	display:block!important;
	font-family:"Museo 900", sans-serif;
}





	</style>
<div class="wrapper" id="subfiltros">
	<div class="subfiltros">
		<!--FILTRO TODOS ?>-->
	  <div class="subfiltro">
		<div class="button filterbtnm" data-filter="*">
			<div class="outline" style="background-color: rgb(231, 122, 127); height: 60px;">
				<img src="img/beneficios/todos_tienda.svg">
			</div><p class="namefilter">Todos</p></div>
		</div>

			<!--FILTRO DESTACADOS ?>-->
	  <div class="subfiltro">
		<div class="button filterbtnm" data-filter=".destacados">
			<div class="outline" style="background-color: rgb(231, 122, 127); height: 60px;">
				<img src="img/beneficios/destacados_tienda.svg">
			</div><p class="namefilter">Destacados</p></div>
		</div>

	<?php
		while ($row = mysqli_fetch_assoc($result2)) {


			$sql3 = "SELECT * FROM categorias_tienda WHERE padre = ".$row["id_cat"]."";
			$result3 = $mysqli->query($sql3) or die("Falló la consulta $sql3");


	?>


	<!--FILTRO <?php echo $row["nombre"]; ?>-->
	  <div class="subfiltro">
		<div class="button filterbtnm" data-filter=".<?php echo $row["code"]; ?>">
			<div class="outline" style="background-color: rgb(231, 122, 127); height: 60px;">
				<img src="img/beneficios/<?php echo $row["imagen"]; ?>">
			</div><p class="namefilter"><?php echo $row["nombre"]; ?></p></div>
		</div>

		<?php
		while ($row2 = mysqli_fetch_assoc($result3)) {
			$test .=$row2["id_cat"];

			$sql4 = "SELECT * FROM productos WHERE categoria3 = '".$row2["code"]."' AND categoria2 = '".$row["code"]."'";
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



			 <h1 class="titlecontainer">'.$nombrelist2.'</h1>
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
	$sql = "SELECT * FROM  categorias_tienda WHERE tipo = 3";
$query = $mysqli->query($sql);
while($result = mysqli_fetch_assoc($query)){
   $idcat= $result['id_cat'];
   $nombrecat= $result['nombre'];
   $codecat= $result['code'];

   $codigo ="'".$result['code']."'";
   $sql1 = "SELECT * FROM productos WHERE categoria3= ".$codigo;
   $query1 = $mysqli->query($sql1);
   while($row  = mysqli_fetch_assoc($query1)){
      $plato_nombre =  $row['nombre'];
	 $plato_foto =  $row['imagen'];
	  $plato_id =  $row['id_producto'];
	  $plato_code=  $row['categoria3'];
	   $parent=  $row['categoria2'];
	  $plato_desc=  $row['descripcion'];


	   $sql2 = "SELECT * FROM productos WHERE categoria3= ".$codigo;
   $query2 = $mysqli->query($sql2);
   while($row2  = mysqli_fetch_assoc($query2)){}
		 $paddingimg= "";
		 $str = $plato_nombre;
		 if( strlen($plato_nombre) > 50) {
		     $str = explode( "\n", wordwrap( $plato_nombre, 50));
		     $str = $str[0] . '...';
		 }

		 if($plato_foto =="b"){
		 	$plato_foto ="genericob.png";
		 	$paddingimg= "padding: 5%;";
		 }


		 if( strlen($plato_foto)<2){
		 	$plato_foto ="defaultproducto.jpg";
		 	$paddingimg= "padding: 5%;";
		 }



			$string.='	<div class="cupon plato '.$plato_code.'" data-parent="'.$parent.'">



					<img style="'.$paddingimg.'" src="img/productos/'.$plato_foto.'">



					<div class="prodbtns">







					<h3>'.$str.'</h3>



					<a href="producto?id='.$plato_id.'" style="display:block"> Ver detalle</a>



					<a class="pidebtn" href="vips-a-domicilio" > Pide a domicilio</a>







					</div>



					</div>';

   }
}

	?>

	</div>

 <?php echo '<div class="platillos hidden" style="display:none;">';
			echo $string;

			echo '</div>';?>







<script>// external js: isotope.pkgd.js

$('.subfiltros2').slick({

	infinite: false,

	slidesToShow: 4,

	slidesToScroll: 4,

	dots:false,

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

// bind filter button click





// change is-checked class on buttons

$('.subfiltros').each( function( i, buttonGroup ) {



	var $buttonGroup = $( buttonGroup );



  $buttonGroup.on( 'click', '.button', function() {

    $buttonGroup.find('.is-checked').removeClass('is-checked');

    $( this ).addClass('is-checked');

		$(this).height($(this).width());

	$(this).children(".outline").height($(this).children(".outline").width());

	$(".button").css('border', 'none');
	$(".button").css('background-image', 'none');
	$( ".button" ).removeClass('dottedbg');

	var bgcolor =  $(this).children(".outline").css("background-color");

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
	$( this ).addClass('dottedbg');

	$( this ).css('background-image', 'url("'+svgbg+'")');

	$(".titlecontainer").css('background-color', bgcolor);

  });



});



</script>
