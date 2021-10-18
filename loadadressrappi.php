<?php
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

	include_once 'dbconnect.php';
	$uid=$_SESSION['uservips'];
	
	if($uid !=""){
		
		$sql1 = "SELECT * FROM domicilio WHERE id_usuario = '$uid'";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);
$numfilas1 = $result1->num_rows;


if($numfilas1 >0){
	$f1 = 1;
				
		echo '
		<style>
		.barperfil3, .barperfil4{background:#fbd348;}
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
		  left: 50%;
		}

		[data-tooltip]:before,
		.tooltip:before,
		.tooltip-top:before {
		  margin-left: -6px;
		  margin-bottom: -12px;
		  border-top-color: #000;
		  border-top-color: hsla(0, 0%, 20%, 0.9);
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
		  border-bottom-color: hsla(0, 0%, 20%, 0.9);
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
		.sindirecciones {
			border: 1px solid #f0f0f0;
			padding: 60px 20px 30px 20px;
			border-radius: 20px;
			width: 80%;
			margin: 10px 10%;
			background: url(/img/svg/placeholder.svg);
			background-size: 40px;
			background-repeat: no-repeat;
			background-position: center 10px;
			color: #3e3e3e;
			background-color: #fffdfd;
			box-shadow: 1px 1px 6px #f0f0f0;
		}
		</style>
		';

while($row1= mysqli_fetch_array($result1)){
	echo '
	<div class="direccion" onclick="checkRappi('.$row1['id_domicilio'].');">
	<div class="icondir"><img src="/img/2019/'.ucwords($row1['radio']).'.svg"></div>
	<h5 class="predeterminada'.$row1['predeterminada'].'"> '.ucwords($row1['radio']).'</h5>';
	echo '<p>'.$row1['calle']." ". $row1['ext']. " ".$row1['inte']. ", C.P. ".$row1['cp'].'</p></div>';
	

}

}

else{
	
			echo '
		<style>
		.sindirecciones {
			border: 1px solid #f0f0f0;
			padding: 60px 20px 30px 20px;
			border-radius: 20px;
			width: 80%;
			margin: 10px 10%;
			background: url(/img/svg/placeholder.svg);
			background-size: 40px;
			background-repeat: no-repeat;
			background-position: center 10px;
			color: #3e3e3e;
			background-color: #fffdfd;
			box-shadow: 1px 1px 6px #f0f0f0;
		}
		</style>
		';
	
	echo '<div class="sindirecciones">No tienes direcciones registradas.</div>
	
	';
	
}
echo '		
<a href="/domicilio-rappi?n=1" target="_blank"><div class="direccion" style="background: #f19000; color: #fff;">
<h5 class="predeterminada" style="margin: 10px; font-weight:500; font-size: 20px;"> Añadir nueva</h5> </div></a>';
		
	}
	
	else{
		echo '<div class="sindirecciones">Inicia sesión para continuar</div>
		';
		echo '		
<a href="/domicilio-rappi?n=1" target="_blank"><div class="direccion" style="background: #f19000; color: #fff;">
<h5 class="predeterminada" style="margin: 10px; font-weight:500; font-size: 20px;"> Añadir nueva</h5> </div></a>';
	
		
		
	}


	

?>


