<?php
// FETCH IMAGE & WRITE TEXT
$img = imagecreatefromjpeg('img/2019/cupones/huevos.jpg');
$white = imagecolorallocate($img, 0, 0, 0);
$txt = "Hello World";
$font = "css/fonts/program/ProgramOT-Bold.ttf";
imagettftext($img, 24, 0, 5, 24, $white, $font, $txt);

// OUTPUT IMAGE
header('Content-type: image/jpeg');
imagejpeg($img);
imagedestroy($jpg_image);

// OR SAVE TO A FILE
// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
// imagejpeg($img, "test.jpg", 100);
?>