<?php
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$string =  generateRandomString();  // OR: generateRandomString(24)
$_SESSION['wowvips'] = $string;
setcookie("persistWOW", $string, time() + (20 * 365 * 24 * 60 * 60), "/", null, null, true);
?>