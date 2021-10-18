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
			position:relative;



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
	transition: .3s ease all;
	text-transform: uppercase;
	font-family: "Program",sans-serif;
	border-radius: 30px;
	font-weight: bold;
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
}





		.pidebtn:hover {



			width: 100%;



			background: #ff1528;



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

			font-family: "Program", sans-serif;

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
		
		.hidefrase{display:none;
		text-align: center;
		position: relative;}
		.oddplat .hidefrase{display:block;}
		
		
		
		.hidefrase.BebJrMen18{display:none;}
		.hidefrase.BebJrMen18:nth-of-type(2){display:block!important;}
		
		
		.hidefrase.BebJrMen18 ~.hidefrase.BebJrMen18{display:block!important;}
		

		
		.hidefrase .prodbtns{
			position: relative;
			width: 100%;
			height: 100%;
			
			text-align: center;
			
			display: table;
			
			height: 100%;
			vertical-align: middle;
			width: 250px;
			border-radius: 50%;
			background: rgb(253, 217, 0);
			
			text-align: center;

			margin: 0 auto;
			height: 250px;
			color: #222;
			font-size: 1em;
			margin: 35px auto;
		}
		
		.hidefrase .prodbtns h3 {
		text-align: center;
		top: 0;
		bottom: 0;
		right: 0;
		left: 0;
		margin: auto auto;
		color: #222;
		font-size: 1em;
		display: table-cell;
		vertical-align: middle;
		padding: 10%;
		float: none;
	}


.iconoflip {
	width: 3em;
	height: 3em;
	background-repeat: no-repeat;
	background-size: 100%;
	position: absolute;
	top: 2.5%;
	left: 2.5%;
	animation-iteration-count: 10;
}


#platillo-183{display:none;}
.MollDesMen18.frase{display:none!important;} 

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



						<div class="dotsbg"><img style="width:100%; padding:10%;" src="/img/cats/<?php echo $row["imagen"]; ?>"></div>

						<p class="namefilter"><?php echo $row["nombre"]; ?></p></div>

					</div>



					<?php

					while ($row2 = mysqli_fetch_assoc($result3)) {

						$test .=$row2["id_cat"];



						$sql4 = "SELECT * FROM platillos WHERE activo = 1 AND categoria3 = '".$row2["code"]."' AND categoria2 = '".$row["code"]."'";

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
				
				$frasecat= $result['frase'];

				$imgcat = $result['imagen'];

				$padrecat = $result['padre'];
				


				$codigo ="'".$result['code']."'";
				
				
					$sqlm = "SELECT * FROM  categorias WHERE id_cat = $padrecat";



			$querym = $mysqli->query($sqlm);



			while($resultm = mysqli_fetch_array($querym)){
				
				$parentm = $resultm['code'];
				
			}
				
				
					echo ' <div class="cupon plato frase hidefrase '.$parentm.'" data-parent="'.$parentm.'">

							<div class="prodbtns">
								<h3>'.$frasecat.'</h3>
							</div>



								</div>';
					



				$sql1 = "SELECT * FROM platillos WHERE activo = 1 AND categoria3= ".$codigo;



				$query1 = $mysqli->query($sql1);



				while($row  = mysqli_fetch_array($query1)){



					$plato_id =  $row['id_platillo'];
					$plato_url = $row['url'];

					$plato_nombre =  $row['nombre'];

					$plato_foto =  $row['imagen'];
					
					$iconflip= $row['icono'];



					$plato_code=  $row['categoria3'];


					$parent=  $row['categoria2'];


					$plato_desc=  $row['descripcion'];
					$plato_delivery=  $row['delivery'];
					
					if($plato_delivery =="1"){
						
						$showdel='display:block;';
					}
					
					else{
						$showdel='display:none;';
						
					}



					







					$sql2 = "SELECT * FROM platillos WHERE activo = 1 AND categoria3= ".$codigo;



					$query2 = $mysqli->query($sql2);



					while($row2  = mysqli_fetch_array($query2)){}



						$paddingimg= "";

					$str = $plato_nombre;

					if( strlen($plato_nombre) > 50) {

						$str = explode( "\n", wordwrap( $plato_nombre, 50));

						$str = $str[0] . '...';

					}



					if($plato_foto =="b"){

						$sql33 = "SELECT * FROM categorias WHERE code = '$parent'";


						$query33 = $mysqli->query($sql33);

						while($row33 = mysqli_fetch_array($query33)){
							$imgcat2 = $row33['imagen'];
						}


						$plato_foto ="/cats/".$imgcat2;

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
					



					$string.='	<div id="platillo-'.$plato_id.'" class="plati cupon plato '.$plato_code.'" data-parent="'.$parent.'">

					<div class="pulse iconoflip showicon" style="background-image:url(/img/iconsplatillos/'.$iconflip.')"></div>

					<img style="'.$paddingimg.'" src="/img/platillos/'.$plato_foto.'">



					<div class="prodbtns">







					<h3>'.$str.'</h3>



					<a href="platillo/'.$plato_url.'" class="detailbtn" data-parent="'.$parent.'" data-category="'.$nombrecat.'" data-title="'.$plato_nombre.'" data-desc="'.$plato_desc.'" data-img="img/platillos/'.$plato_foto.'"> Ver detalle</a>
					<a class="pidebtn" href="domicilio?plato='.$plato_id.'" style="'.$showdel.'"> Pide a domicilio</a>



					</div>



					</div>';
					
					
				
					







				}



			}







			?>







		</div>







	</div>



	<?php echo '<div class="platillos hidden" style="display:none;">';



	echo $string;



	echo '</div>';
	
	
	echo '<div class="frases hidden" style="display:none;">';


	echo $frases;


	echo '</div>';
	
	
	
	
	
	
	
	?>







</div>







<script src='//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>



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

 $(".griditem").removeClass("oddplat");

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
	
	showFrase();



});



});


function showFrase(){
	
	setTimeout(function(){
		var lengthd = $('.griditem:visible .plati').length;
			
			//alert(lengthd);
				 if (lengthd %2 == 0){
		  $(".griditem").removeClass("oddplat");
		 
		 
		 
		 
	 }
       
    else{
		
		$(".griditem").addClass("oddplat");
		
		
		 
		 
	}
      
		
	}, 1000);
	
 
	
				
}

</script>

