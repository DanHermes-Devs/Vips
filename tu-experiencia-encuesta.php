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
<style>
.bg-light {
	display: none;
}
main {
	margin-top: 0 !important;
}
</style>
<main>
	<div class="row">
		<div class="col-md-12">
			 <iframe src="https://survey3.medallia.com/?alsea-prueba-vips" style="height: 80vh" width="100%" frameborder="0"></iframe>
		</div>
	</div>
</main>
<?php
include('footer-bootstrap.php');
?>
