<?php
session_start();
require_once('settings.php');
	require '../dbconnect.php';
	
if(isset($_SESSION['social_login'])){
	$usuario = $_SESSION['social_login'];
	//echo $usuario;

	$sql = "select * from social where google_id='$usuario' OR fb_id='$usuario'";
	$resulth =$mysqli->query($sql) or die("Falló la consulta $sql");
	$rowregh=mysqli_fetch_assoc($resulth);

		$nombre = $rowregh['name'];
		$apellido = $rowregh['lastname'];
		$correo = $rowregh['email'];
		$telefono = $rowregh['phone'];
		$sexo = $rowregh['gender'];
		$cumple = $rowregh['birthday'];
		$avatar = $rowregh['avatar'];
		$sesion = true;
}
else{
	$sesion = false;
}


?>
<html>
<head>
<style>
* {
	box-sizing: border-box;
}
body {
	background: #fafafa;
	text-align: center;
	position: relative;
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
}

.wrap {
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;
	width: 100%;
}
.card-1 {
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.14);
	transition: all 3s cubic-bezier(.25,.8,.25,1);
}
.card {
	background: #fff;
	border-radius: 2px;
	display: inline-block;
	height: auto;
	margin: 1rem;
	position: relative;
	width: 90%;
	max-width: 500px;
	padding: 5%;
}
button, .btn, .modal .btn, input[type="submit"] {
	-webkit-appearance: none;
	-moz-appearance: none;
	-ms-appearance: none;
	-o-appearance: none;
	appearance: none;
	border: none;
	cursor: pointer;
	user-select: none;
	vertical-align: middle;
	white-space: nowrap;
}
button {
	display: block;
	float: left;
	margin: 0;
	border-radius: 4px;
	position: relative;
	color: #fff;
	padding: .8em;
	text-align: center;
}

button {
	width: 48%;
	margin-right: 2%;
}

.google{
	color: #222;
	background-color: #fff !important;
	box-shadow: 0 0 0 1px #CFD9E0 !important;
}

button::before {
	width: 16px;
	height: 16px;
	vertical-align: middle;
}

.flaticon-google::before {
	content: '';
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBhdGggc3R5bGU9ImZpbGw6I0ZCQkIwMDsiIGQ9Ik0xMTMuNDcsMzA5LjQwOEw5NS42NDgsMzc1Ljk0bC02NS4xMzksMS4zNzhDMTEuMDQyLDM0MS4yMTEsMCwyOTkuOSwwLDI1NmMwLTQyLjQ1MSwxMC4zMjQtODIuNDgzLDI4LjYyNC0xMTcuNzMyaDAuMDE0bDU3Ljk5MiwxMC42MzJsMjUuNDA0LDU3LjY0NGMtNS4zMTcsMTUuNTAxLTguMjE1LDMyLjE0MS04LjIxNSw0OS40NTZDMTAzLjgyMSwyNzQuNzkyLDEwNy4yMjUsMjkyLjc5NywxMTMuNDcsMzA5LjQwOHoiLz48cGF0aCBzdHlsZT0iZmlsbDojNTE4RUY4OyIgZD0iTTUwNy41MjcsMjA4LjE3NkM1MTAuNDY3LDIyMy42NjIsNTEyLDIzOS42NTUsNTEyLDI1NmMwLDE4LjMyOC0xLjkyNywzNi4yMDYtNS41OTgsNTMuNDUxYy0xMi40NjIsNTguNjgzLTQ1LjAyNSwxMDkuOTI1LTkwLjEzNCwxNDYuMTg3bC0wLjAxNC0wLjAxNGwtNzMuMDQ0LTMuNzI3bC0xMC4zMzgtNjQuNTM1YzI5LjkzMi0xNy41NTQsNTMuMzI0LTQ1LjAyNSw2NS42NDYtNzcuOTExaC0xMzYuODlWMjA4LjE3NmgxMzguODg3TDUwNy41MjcsMjA4LjE3Nkw1MDcuNTI3LDIwOC4xNzZ6Ii8+PHBhdGggc3R5bGU9ImZpbGw6IzI4QjQ0NjsiIGQ9Ik00MTYuMjUzLDQ1NS42MjRsMC4wMTQsMC4wMTRDMzcyLjM5Niw0OTAuOTAxLDMxNi42NjYsNTEyLDI1Niw1MTJjLTk3LjQ5MSwwLTE4Mi4yNTItNTQuNDkxLTIyNS40OTEtMTM0LjY4MWw4Mi45NjEtNjcuOTFjMjEuNjE5LDU3LjY5OCw3Ny4yNzgsOTguNzcxLDE0Mi41Myw5OC43NzFjMjguMDQ3LDAsNTQuMzIzLTcuNTgyLDc2Ljg3LTIwLjgxOEw0MTYuMjUzLDQ1NS42MjR6Ii8+PHBhdGggc3R5bGU9ImZpbGw6I0YxNDMzNjsiIGQ9Ik00MTkuNDA0LDU4LjkzNmwtODIuOTMzLDY3Ljg5NmMtMjMuMzM1LTE0LjU4Ni01MC45MTktMjMuMDEyLTgwLjQ3MS0yMy4wMTJjLTY2LjcyOSwwLTEyMy40MjksNDIuOTU3LTE0My45NjUsMTAyLjcyNGwtODMuMzk3LTY4LjI3NmgtMC4wMTRDNzEuMjMsNTYuMTIzLDE1Ny4wNiwwLDI1NiwwQzMxOC4xMTUsMCwzNzUuMDY4LDIyLjEyNiw0MTkuNDA0LDU4LjkzNnoiLz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48L3N2Zz4=);
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100%;
	display: inline-block;
}

button span {
	font-weight: bold;
	margin-left: 12px;
	font-size: .9em;
}
#login-google {
	color: #222;
	text-align: center;
}
.google:hover {
	background-color: #F8FAFB !important;
}

.facebook {
	background-color: #3b5998 !important;
}
.facebook:hover {
	background-color: #2d4373 !important;
}

.flaticon-facebook::before {
	content: "";
	display: inline-block;
	background-image: url(facebook-logo.svg);
	background-size: 100%;
}
#login-facebook{
	color: #fff;
	text-align: center;
}
</style>

</head>

<body>
<div class="wrap">
<?php 
if($sesion == true){
?>
	<div class="card card-1" data-user="<?php echo $usuario;?>">
		<img src="<?php echo $avatar; ?>" style="width:60px; height:60px; object-fit:cover; border-radius:50%; margin:30px; 0;">
		<p>Bienvenido <b><?php echo $nombre; ?></b>, gracias por iniciar sesión.</p>
		<p><a href="logout">Cerrar sesión</a></p>
	</div>

<?php	
}

else{
?>

	<div class="card card-1">
		
		<p>Inicia sesión: </p>
		<a href="<?= 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>"><button id="login-google" class="google flaticon-google"> <span>Google</span></button></a>
		
		<a href="fbconfig.php?page=restauranteArrachera"><button id="login-facebook" class="facebook flaticon-facebook"> <span>Facebook</span></button></a>
	</div>
<?php
}

?>
</div>
</body>
</html>