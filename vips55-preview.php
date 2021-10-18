<?php
    if(isset($_COOKIE['persistID']))
    {
        $userid =   $_COOKIE['persistID'];
        session_start();
        $_SESSION['uservips'] = $userid;
    }
    if( isset($_SESSION['uservips'])!="" ){
        $uid=$_SESSION['uservips'];
        //header("Location: /perfil");
    }
    include('header-bootstrap.php');
?>
<link rel="stylesheet" href="/css/animate.css">

<style>
@font-face {
    font-family: 'Museo 700';
src: url('/css/fonts/museo/Museo-700.woff2') format('woff2'),
    url('/css/fonts/museo/Museo-700.woff') format('woff'),
    url('/css/fonts/museo/Museo-700.ttf') format('truetype'),
    url('/css/fonts/museo/Museo-700.svg#Museo-700') format('svg');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Museo 500';
src: url('/css/fonts/museo/Museo-500.woff2') format('woff2'),
    url('/css/fonts/museo/Museo-500.woff') format('woff'),
    url('/css/fonts/museo/Museo-500.ttf') format('truetype'),
    url('/css/fonts/museo/Museo-500.svg#Museo-500') format('svg');
    font-weight: 500;
    font-style: normal;
}
body {
    background-color: #fff;
}
*{outline:0; box-sizing:border-box;}
.main {
	text-align: center;
	background: #d9d9da;
	padding-bottom: 150px;
}
.infografia {
	width: 100%;
	max-width: 720px;
	margin: 0 auto;
}
.btns {
	position: absolute;
	width: 100%;
	bottom: 1.5%;
	text-align: center;
	float: left;
	left: 0;
}
.btnubica {
	background: #f5a623;
	color: #fff;
	font-weight: 500;
	font-size: 17px;
	padding: 7.5px 20px;
	border-radius: 30px;
	transition: all .35s ease;
	display: inline-block;
}
.btnubica:hover {
  transition:all .35s ease;
  transform:scale(1.1);
  color:#fff;
}
.legales {
	display: none;
}
@media (max-width:700px){
  .main {
	padding-bottom: 90px;
}
}
</style>
  <main>
    <div class="row">
      <div class="col-md-12">
      <div class="main">

      <img class="infografia" src="/img/2019/vips55/infografia_cambios_Vips_2.jpg">

      <div class="btns">
      <a href="ubicaciones" class="btnubica grow">Encontrar mi Vips más cercano</a>
      <p class="legales">
      <a href="terminos-y-condiciones" style="display:none;">Consulta Términos y Condiciones</a>
      </p>
      </div>
      </div>
      </div>
    </div>
  </main>


<?php
include('footer-bootstrap.php');
?>
