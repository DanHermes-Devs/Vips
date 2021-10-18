<?php
require_once 'dbconnect.php';
$subcat = $_GET['subcat'];
$cat = $_GET['cat'];
$parent = $_GET['parent'];
$id = $_GET['id'];
if(strlen($subcat)>1){
	$style2="<style>.filtros {opacity: 1;}</style>";
	
//echo $subcat;
	      //$query2 = "SELECT cat3 FROM menu19 WHERE cat2='Huevo' GROUP BY cat3";
      $query2 = "SELECT * FROM menu19 WHERE activo = 1 AND cat2 = '$parent' AND (cat3 = ".$subcat.") ORDER BY id_plato ASC";
      $query3 = "SELECT * FROM menu19 WHERE activo = 1 AND cat2 = '$parent' AND (cat3 = ".$subcat.") ORDER BY id_plato ASC LIMIT 2";
}


if(strlen($cat)>1){
$showfilter='class="show-'.$cat.'"';
      //$query2 = "SELECT cat3 FROM menu19 WHERE cat2='Huevo' GROUP BY cat3";
      $query2 = "SELECT * FROM menu19 WHERE cat2 ='$cat' AND activo = 1 ORDER BY id_plato ASC";
      $query3 = "SELECT * FROM menu19 WHERE cat2 ='$cat' AND activo = 1 ORDER BY id_plato ASC LIMIT 2";
?>
	<div id="loadfiltro" <?php echo $showfilter;?>>
	<div class="hidefiltros" onclick="hideFiltros();"></div>
	<div class="resetfiltros" onclick="resetFiltros('<?php echo $cat;?>');"><p>Restablecer</p></div>
	
			<?php
          //$query2 = "SELECT cat3 FROM menu19 WHERE cat2='Huevo' GROUP BY cat3";
		  $query = "SELECT MAX(cat2) AS cat2, MAX(cat3) AS cat3 FROM menu19 WHERE cat3 != '0' AND cat2 = '$cat' GROUP BY cat3";
          $result = $mysqli->query($query) or die("Falló la consulta $query");
		  $num = $result->num_rows;
		    if ($num < 1) {
				
			$style1="<style>.filtros {display: none;}.carouselcats{width:100%;}</style>";
			}
			else{$style1="<style>.filtros {opacity: 1;}</style>";}
		  
		  
          while($row= mysqli_fetch_assoc($result)){
            $state = mb_convert_case(strtolower($row['cat3']), MB_CASE_TITLE, "UTF-8");
			$string = "'".$row['cat3']."'";
            echo '
            <div onclick="filtra(this);" class="filtro '.$row['cat2'].'" data-cat="'.$row['cat3'].'" data-parent="'.$row['cat2'].'"><p><i class="fas fa-circle"></i><span>'.$row['cat3'].'</span></p></div>
            ';
          }

		?>
	</div>
<?php
}

if(strlen($id)>0){
      $query2 = "SELECT * FROM menu19 WHERE cat2 ='$cat' AND activo = 1 ORDER BY id_plato = $id ASC";
      $query3 = "SELECT * FROM menu19 WHERE cat2 ='$cat' AND activo = 1 ORDER BY id_plato = $id ASC LIMIT 2";
}

          $result2 = $mysqli->query($query2) or die("Falló la consulta $query2");
          $result3 = $mysqli->query($query3) or die("Falló la consulta $query3");
          $script ='';
          $style ='';
          $numero_filas = $result2->num_rows;

          echo '	<div class="carouselplatos" data-platillo="'.$id.'" style="background-image:url(/img/2019/menu/patterns/'.str_replace(' ', '', $cat).'.png)">';
          while($row2 = mysqli_fetch_assoc($result2)){
            //$state2 = mb_convert_case(strtolower($row2['nombre']), MB_CASE_TITLE, "UTF-8");
			$state2 = $row2['nombre'];
			
				  if($row2['adicional1'] == 1){
				  $linkad1 = "/desayunos-79";
			  }
			  if($row2['adicional1'] == 2){
				  $linkad1 = "/menu-infantil-disney";
			  }
			  if($row2['adicional1'] == 3){
				  $linkad1 = "/menu-infantil-disney";
			  }
          
			 if($row2['adicional1'] == 4){
				  $linkad1 = "/comida-del-dia";
			  }
			  
			  if($row2['adicional1'] == 5){
				  $linkad1 = "/crece-tu-menu";
			  }
			  if($row2['adicional1'] == 6){
				  $linkad1 = "/clasicos";
			  }
          
			  if($row2['adicional1'] == 7){
				  $linkad1 = "/promociones";
			  }
			  if($row2['adicional1'] == 8){
				  $linkad1 = "/mojarra";
			  }
			  if($row2['adicional1'] == 9){
				  $linkad1 = "/nuevos-chilaquiles";
			  }
          

			if($row2['adicional2'] == 1){
				  $linkad2 = "/desayunos-79";
			  }
			  if($row2['adicional2'] == 2){
				  $linkad2 = "/menu-infantil-disney";
			  }
			  if($row2['adicional2'] == 3){
				  $linkad2 = "/menu-infantil-disney";
			  }
          
			 if($row2['adicional2'] == 4){
				  $linkad2 = "/comida-del-dia";
			  }
			  
			  if($row2['adicional2'] == 5){
				  $linkad2 = "/crece-tu-menu";
			  }
			  if($row2['adicional2'] == 6){
				  $linkad2 = "/clasicos";
			  }
          
			  if($row2['adicional2'] == 7){
				  $linkad2 = "/promociones";
			  }
			  if($row2['adicional2'] == 8){
				  $linkad2 = "/mojarra";
			  }
			  if($row2['adicional2'] == 9){
				  $linkad2 = "/nuevos-chilaquiles";
			  }
          

            echo '
            <div class="plato cat-'.$row2['cat3'].'" data-parent="'.$row2['cat1'].'" data-code="'.$row2['id_interno'].'" data-nombre="'.$state2.'" data-desc="'.$row2['descripcion'].'"  data-nutri="'.$row2['nutrimental'].'" data-domicilio="'.$row2['domicilio'].'" data-url1= "'.$linkad1.'" data-ad1="/img/adicionales/'.$row2['adicional1'].'.png" data-url2= "'.$linkad2.'" data-ad2="/img/adicionales/'.$row2['adicional2'].'.png" data-cat="'.$row2['cat2'].'" data-subcat="'.$row2['cat3'].'" data-url="'.$row2['url'].'" data-icon="'.$row2['sticker'].'"  data-disclaimer="'.$row2['disclaimer'].'"><img src="/img/2019/load4.gif" data-lazy="/img/2019/menu/platos/'.$row2['foto'].'"></div>
            ';
          }

          if ($numero_filas < 4) {
            $style= '<style>
            .hideprev {
              opacity: 0 !important;
            }
            </style>';
            while($row3 = mysqli_fetch_assoc($result3)){
              //$state3 = mb_convert_case(strtolower($row3['nombre']), MB_CASE_TITLE, "UTF-8");
			  $state3 = $row3['nombre'];
			  
			  if($row3['adicional1'] == 1){
				  $linkad1 = "/desayunos-79";
			  }
			  if($row3['adicional1'] == 2){
				  $linkad1 = "/menu-infantil-disney";
			  }
			  if($row3['adicional1'] == 3){
				  $linkad1 = "/menu-infantil-disney";
			  }
          
			 if($row3['adicional1'] == 4){
				  $linkad1 = "/comida-del-dia";
			  }
			  
			  if($row3['adicional1'] == 5){
				  $linkad1 = "/crece-tu-menu";
			  }
			  if($row3['adicional1'] == 6){
				  $linkad1 = "/clasicos";
			  }
          
			  if($row3['adicional1'] == 7){
				  $linkad1 = "/promociones";
			  }
			  if($row3['adicional1'] == 8){
				  $linkad1 = "/mojarra";
			  }
			  if($row3['adicional1'] == 9){
				  $linkad1 = "/nuevos-chilaquiles";
			  }
          

			if($row3['adicional2'] == 1){
				  $linkad2 = "/desayunos-79";
			  }
			  if($row3['adicional2'] == 2){
				  $linkad2 = "/menu-infantil-disney";
			  }
			  if($row3['adicional2'] == 3){
				  $linkad2 = "/menu-infantil-disney";
			  }
          
			 if($row3['adicional2'] == 4){
				  $linkad2 = "/comida-del-dia";
			  }
			  
			  if($row3['adicional2'] == 5){
				  $linkad2 = "/crece-tu-menu";
			  }
			  if($row3['adicional2'] == 6){
				  $linkad2 = "/clasicos";
			  }
          
			  if($row3['adicional2'] == 7){
				  $linkad2 = "/promociones";
			  }
			  if($row3['adicional2'] == 8){
				  $linkad2 = "/mojarra";
			  }
			  if($row3['adicional2'] == 9){
				  $linkad2 = "/nuevos-chilaquiles";
			  }
          
              echo '
              <div class="plato cat-'.$row3['cat3'].'" data-parent="'.$row3['cat1'].'" data-code="'.$row3['id_interno'].'" data-nombre="'.$state3.'" data-desc="'.$row3['descripcion'].'"  data-nutri="'.$row3['nutrimental'].'" data-domicilio="'.$row3['domicilio'].'" data-url1= "'.$linkad1.'" data-ad1="/img/adicionales/'.$row3['adicional1'].'.png" data-url2= "'.$linkad2.'" data-ad2="/img/adicionales/'.$row3['adicional2'].'.png" data-cat="'.$row3['cat2'].'" data-subcat="'.$row3['cat3'].'" data-url="'.$row3['url'].'"  data-icon="'.$row3['sticker'].'"  data-disclaimer="'.$row3['disclaimer'].'"><img src="/img/2019/load4.gif" data-lazy="/img/2019/menu/platos/'.$row3['foto'].'"></div>
 
              ';
            }
          }

          if ($numero_filas < 3) {
              $script ='
              <script>
              setTimeout(function(){ $(".slick-center").prev().addClass("hideprev");},100);
              $("#loadplatos").on("click", function() {
                $(".slick-slide").removeClass("hideprev"); $(".slick-center").prev().addClass("hideprev"); 	  
              });
              </script>
              ';
            
          }

			echo '	</div>';

          echo  $script;
          echo  $style.$style1.$style2;
?>