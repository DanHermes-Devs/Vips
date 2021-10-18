<?php
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
session_unset();
setcookie('persistID', '',time() - 3600);
$_SESSION['uservips']     = NULL;
header("Location: /staging");
?>