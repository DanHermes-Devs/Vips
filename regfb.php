<?php
session_start();
$page = $_GET['page'];
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];
	}


include_once 'dbconnect.php';

$resreg=$mysqli->query("SELECT * FROM registros WHERE id_registro = $uid OR facebook_id = $uid OR google_id = $uid");
	$rowreg=mysqli_fetch_array($resreg);
	$correo = $rowreg['correo'];
	$tdl = $rowreg['tdl'];
$timeout = 1000;
echo '
<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
  analytics.load("JIg0Zvz8yCtIW0RloenNJpvUtMTlkeSE");
  analytics.page();
  }}();
</script>

<script>
				  analytics.track("User Signed Up", {
						  method: "Facebook", 
						  email: "'.$correo.'"
					});
				';


				
				echo '
				setTimeout(function(){
					window.location.replace("/'.$page.'");
				},1000)
</script>';

?>
Redireccionando...