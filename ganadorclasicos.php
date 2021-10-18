<?php
require_once 'dbconnect.php';


 $cp = $_GET['cp'];
 
 if(strlen($cp) > 3){
	 
	 $address = $cp . ' Mexico';
	$coordinates = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=true&key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE');
	$coordinates = json_decode($coordinates);
 
	$lat = $coordinates->results[0]->geometry->location->lat;
	$lng = $coordinates->results[0]->geometry->location->lng;
	 
 }
 
 else{
	$lat = 19.3609295;
$lng = -99.192564; 
	 
 }
	
	
	//echo $lat . " ". $lng;
	
$consulta = $mysqli->query("SELECT opcion, latitud, longitud,
			 ((ACOS(SIN($lat * PI() / 180) * SIN(latitud * PI() / 180) + COS($lat * PI() / 180) * COS(latitud * PI() / 180) * COS(($lng - longitud) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS distance
    FROM     `votos_clasicos` WHERE	 vips_cercano != 'undefined'
	HAVING distance <= 100.0
    ORDER BY distance ASC LIMIT 50");
$numfilas = $consulta->num_rows;


while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC))
{
$name = $row['opcion'];
$str .= $name.',';

    //$str = "PTR, PTR, SDP, LTP";

   
}

 
$string = $str;
 
//$words_list = str_word_count($string, 1); // this returns the array of words 
//$words_list = implode(',', $string);
$words_list = explode (",", $string);
 
$results = array_count_values($words_list);
arsort($results);
$newArray = array_slice($results, 0, 3, true);
//print_r($newArray);
$keys = array_keys($newArray);

$p1 = ($newArray[$keys[0]] * 100) / $numfilas;
$p2 = ($newArray[$keys[1]] * 100) / $numfilas;
$p3 = ($newArray[$keys[2]] * 100) / $numfilas;

	
	$display2 = "";
	$display3 = "";
if($p1 == 100){
	
	$display2 = "display:none;";
	$display3 = "display:none;";
}



//echo "Total: " . $numfilas . "<br>";
//echo "Plato 1: " . $keys[0]." "; print $newArray[$keys[0]] . " " . round($p1) . "%<br>";
//echo "Plato 2: " . $keys[1]." "; print $newArray[$keys[1]] . " " . round($p2) . "%<br>";
//echo "Plato 3: " . $keys[2]." "; print $newArray[$keys[2]] . " " . round($p3) . "%<br>";


switch ($keys[0]) {
    case "Vips Club":
        $imgplato1 = "img/clasicos/platos/vipsclub.png";
        break;
    case "Sopa especial Vips":
         $imgplato1  = "img/clasicos/platos/sopaespecialvips.png";
        break;
    case "Pepitos Vips de pollo":
         $imgplato1  = "img/clasicos/platos/pepitosdepollo.png";
        break;
	case "Caldo Tlalpeño":
         $imgplato1  = "img/clasicos/platos/caldotlalpeno.png";
        break;

		case "Tacos dorados de pollo":
         $imgplato1  = "img/clasicos/platos/tacosdoradosdepollo.png";
        break;
		case "Enchiladas Suizas":
         $imgplato1  = "img/clasicos/platos/enchiladassuizas.png";
        break;

		case "Cheescake con fresas":
         $imgplato1  = "img/clasicos/platos/Cheescakeconfresas.png";
        break;		
		
		case "Vips clásica con queso":
         $imgplato1  = "img/clasicos/platos/Vipsclasicaconqueso.png";
        break;

		case "Crepas de cajeta":
         $imgplato1  = "img/clasicos/platos/crepasdecajeta.png";
        break;
		
		
		case "Enchiladas de mole":
         $imgplato1  = "img/clasicos/platos/enchiladasdemole.png";
        break;
    
}

switch ($keys[1]) {
    case "Vips Club":
        $imgplato2 = "img/clasicos/platos/vipsclub.png";
        break;
    case "Sopa especial Vips":
         $imgplato2  = "img/clasicos/platos/sopaespecialvips.png";
        break;
    case "Pepitos Vips de pollo":
         $imgplato2  = "img/clasicos/platos/pepitosdepollo.png";
        break;
	case "Caldo Tlalpeño":
         $imgplato2  = "img/clasicos/platos/caldotlalpeno.png";
        break;

		case "Tacos dorados de pollo":
         $imgplato2  = "img/clasicos/platos/tacosdoradosdepollo.png";
        break;
		case "Enchiladas Suizas":
         $imgplato2  = "img/clasicos/platos/enchiladassuizas.png";
        break;

		case "Cheescake con fresas":
         $imgplato2  = "img/clasicos/platos/Cheescakeconfresas.png";
        break;		
		
		case "Vips clásica con queso":
         $imgplato2  = "img/clasicos/platos/Vipsclasicaconqueso.png";
        break;

		case "Crepas de cajeta":
         $imgplato2  = "img/clasicos/platos/crepasdecajeta.png";
        break;
		
		
		case "Enchiladas de mole":
         $imgplato2  = "img/clasicos/platos/enchiladasdemole.png";
        break;
    
}


switch ($keys[2]) {
    case "Vips Club":
        $imgplato3 = "img/clasicos/platos/vipsclub.png";
        break;
    case "Sopa especial Vips":
         $imgplato3  = "img/clasicos/platos/sopaespecialvips.png";
        break;
    case "Pepitos Vips de pollo":
         $imgplato3  = "img/clasicos/platos/pepitosdepollo.png";
        break;
	case "Caldo Tlalpeño":
         $imgplato3  = "img/clasicos/platos/caldotlalpeno.png";
        break;

		case "Tacos dorados de pollo":
         $imgplato3  = "img/clasicos/platos/tacosdoradosdepollo.png";
        break;
		case "Enchiladas Suizas":
         $imgplato3  = "img/clasicos/platos/enchiladassuizas.png";
        break;

		case "Cheescake con fresas":
         $imgplato3  = "img/clasicos/platos/Cheescakeconfresas.png";
        break;		
		
		case "Vips clásica con queso":
         $imgplato3  = "img/clasicos/platos/Vipsclasicaconqueso.png";
        break;

		case "Crepas de cajeta":
         $imgplato3  = "img/clasicos/platos/crepasdecajeta.png";
        break;
		
		
		case "Enchiladas de mole":
         $imgplato3  = "img/clasicos/platos/enchiladasdemole.png";
        break;
    
}


?>

<div class="platoganador" style="border-bottom: solid 2px #ff1628;">
			<div class="imgplato">
				<img src="<?php echo $imgplato1;?>">
				
			</div>
			<div class="chartplato">
			<div class="progress" value="<?php echo round($p1); ?>"></div>
				
			</div>
			<p>El más popular es</p>
			<p><span> <?php echo $keys[0];?></span></p>
		</div>

		<div class="platoganador"  style="border-bottom: solid 2px #ff1628;<?php echo $display2;?>">
			
			<div class="chartplato"><div class="progress" value="<?php echo round($p2); ?>"></div></div>
			<div class="imgplato"><img src="<?php echo $imgplato2;?>">
					
			</div>
			<p>En segundo lugar está</p>
			<p><span> <?php echo $keys[1];?></span></p>	
		</div>


		<div class="platoganador" style="<?php echo $display3;?>">
			<div class="imgplato"><img src="<?php echo $imgplato3;?>"></div>
			<div class="chartplato"><div class="progress" value="<?php echo round($p3); ?>">
				
			</div></div>
			<p>El tercer favorito es</p><p><span> <?php echo $keys[2];?></span></p>
		</div>