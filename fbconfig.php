<?php
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
	ini_set( 'session.cookie_httponly', 1 );
	ini_set( 'session.cookie_secure', 1 );
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}

		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);
		
		if(strlen($page)<3){
			
			$page = 'perfil';
			
		}
		
// added in v4.0.0
require_once 'insert.php';
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication('244404743008963', '05c3b983ccfcb8fc02505715e41975d9');
// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper('https://vips.com.mx/fbconfig.php?page='.$page);
try {
    $session = $helper->getSessionFromRedirect();
}
catch (FacebookRequestException $ex) {
    // When Facebook returns an error
}
catch (Exception $ex) {
// When validation fails or other local issues
}
// see if we have a session
if (isset($session)) {
    // graph api request for user data
    $request               = new FacebookRequest($session, 'GET', '/me?fields=id,name,first_name,last_name,email');
    $response              = $request->execute();
    // get response
    $graphObject           = $response->getGraphObject();
    $fb_id                 = $graphObject->getProperty('id'); // To Get Facebook ID
    $fbuser_first_name           = $graphObject->getProperty('first_name'); // To Get Facebook name
	$fbuser_last_name      = $graphObject->getProperty('last_name'); // To Get Facebook last name
	$fbuser_email          = $graphObject->getProperty('email'); // To Get Facebook full name
    /* ---- Session Variables -----*/
    $_SESSION['uservips']      = $fb_id;
	setcookie("persistID", $fb_id, time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);
    $_SESSION['user_first_name']  = $fbuser_first_name;
	$_SESSION['user_last_name']  = $fbuser_last_name;
	$_SESSION['user_email'] = $fbuser_email;

    checkuser($_SESSION['uservips'], $_SESSION['user_first_name'],  $_SESSION['user_last_name'], $_SESSION['user_email'], $page);
    /* ---- Redirection location after session ----*/
   
} else {
    $loginUrl = $helper->getLoginUrl(array('scope' => 'email'));
  header("Location: ".$loginUrl);
}
?>
