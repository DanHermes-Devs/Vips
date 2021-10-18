<?php
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

require_once 'dbconnect.php';
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
	$sql3 = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid OR google_id = $uid";
	$result = $mysqli->query($sql3);
	 $rowregh=mysqli_fetch_assoc($result);
	$uid = $rowregh['id_registro'];
	$_SESSION['uservips'] = $uid;
	$nombre = $rowregh['nombre'];
	$sesion = true;
}

$querypoints = "SELECT * FROM tickets_disney WHERE id_usuario = '$uid'";
$result1 = $mysqli->query($querypoints) or die("Falló la consulta $querypoints");
?>

<style>
table th {
	color: #fdc82e;
	padding: 15px 0;
}
table.bt tbody td::before {
	background: #5c2e54;
	color: #fff;
	margin-right: 10px;
	padding: 2px 10px;
}

body {
	width: 100%;
	
}

.logon.wow.fadeInDown {
	width: 10%;
	padding: 10px;
	padding-bottom: 0;
	min-width: 100px;
}
h1 {
	color: #FFF;
	font-size: 2rem;
	font-weight: 700;
	letter-spacing: -0.01em;
	margin-bottom: 0.75em;
	text-transform: uppercase;
	width: 85%;
	float: left;
	margin: 0;
	padding-top: 20px;
	text-align: center;
}

.recibo {
	width: 1.5em;
	/* text-align: center; */
}

.red {
	color: #e63737;
}

.green {
	color: green;
}

table tr td {
	color: #444;
}



table {
	border-collapse: collapse;
	margin: 0;
	width: 100%;
}

table.bt tbody td::before {
	background: #d1d1d1;
	color: #222;
	margin-right: 10px;
	padding: 2px 10px;
}
.imgbarc {
	width: 25px;
	vertical-align: middle;
	margin-left: 7.5px;
	cursor: pointer;
	opacity: .65;
	transition:all .35s ease;
	
}

.imgbarc:hover {
	opacity: 1;
	transition:all .35s ease;
	transform: scale(1.15);
}

.popUp {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	z-index: 999;
	background: rgba(0,0,0,.65);
	display: none;
	text-align: center;
	overflow:auto;
}
.pocont {
	display: inline-block;
	background: #fff;
	width: 500px;
	height: auto;
	position: relative;
	margin: 1% auto;
	padding: 0px 0;
}
.closepop {
	width: 22px;
	height: 22px;
	background: url(cancel.png);
	background-size: 100%;
	float: right;
	cursor: pointer;
	margin: 10px;
}
.printpop {
	width: 26px;
	height: 26px;
	background: url(printer.png);
	background-size: 100%;
	float: left;
	cursor: pointer;
	margin: 10px;
}
.pocont p {
	margin: 0 !important;
	padding: 5px;
	font-size: 14px;
}
* {
	box-sizing: border-box;
}
#eventodiv p {
	margin: 6px 0;
}
.iconj {
	width: 40px;
	padding: 5px;
}

#table {
	background: transparent;
}
table tr td {
	color: #feec90;
}

#ticketr {
	width: 100%;
	display: inline-block;
	height: 200px;
	overflow: auto;
}

@media(max-width:400px){
	table tr td {
	color: #feec90;
	font-size: 12px;
}
}
</style>

<?php

echo '<table id="table" class="two-axis">';

echo '<thead>

	    <tr>
            <th>Ticket</th>
			<th>Puntos</th>
			<th>Fecha</th>
			<th>Nivel</th>
			
			
		
			
        </tr>
		</thead>
		 <tbody>
		';
		
		
		
			while($row1= mysqli_fetch_array($result1)){
				$puntos = $row1['puntos'];
				if($puntos >0 && $puntos <1000){
				$icon = '<img src="/img/2019/juego/leon1.png" class="iconj">';
				}
				if($puntos >1000 && $puntos <4000){
					$icon = '<img src="/img/2019/juego/leon2.png" class="iconj">';
				}
				if($puntos >4000){
					$icon = '<img src="/img/2019/juego/leon3.png" class="iconj">';
				}
							
								echo '<tr>
								<td>'.$row1['ticket'].'</td>
								<td>'.$row1['puntos'].'</td>
								<td>'.$row1['fecha'].'</td>
								<td>'.$icon.'</td>		
								</tr>';
			$i--;

			}
						
echo '
 </tbody>
</table>';

?>