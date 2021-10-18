<?php
session_start();
session_unset();
setcookie('persistSocial', '',time() - 3600);
$_SESSION['social_login']     = NULL;
header("Location: /loginsocial");
?>