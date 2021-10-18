<?php
session_start();
session_unset();
 unset($_COOKIE['persistIDgerente']);
setcookie('persistIDgerente', '',time() - 3600);
unset($_SESSION['uservipsgerente']);
$_SESSION['uservipsgerente'] = NULL;

session_destroy();
header("Location: https://vips.com.mx/pedidos-especiales-tienda/?logout=1");


?>
