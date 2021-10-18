<?php
require_once ("tcpdf_min/tcpdf_barcodes_2d.php");
$code = $_GET['code'];
$type = "PDF417";

$barcodeobj = new TCPDF2DBarcode($code, $type);

$barcodeobj->getBarcodePNG($w= 5, $h = 2.5 );

?>