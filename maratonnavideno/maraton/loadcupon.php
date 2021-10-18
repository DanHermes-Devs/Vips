<?php
$id = $_GET['id'];
$code = $_GET['code'];

if($id < 5){
    $imagencupon ="images/cupones/MIS_LOGROS_ART-00".$id.".png";
    echo '
    <div class="row">
    
    <div class="col-6">
    <p>¿Deseas utilizar esta promoción?<br> Presenta este código en caja.</p>
    <img class="codecuponimg" src="http://192.186.240.43/barcode/bar.php?code='.$code.'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2">
    <p class="codecupon" data-code="'.$code.'">'.$code.'</p>
    <p>También puedes descargar tu código de promoción haciendo click <a onclick="descargaCupon('.$id.')" target="_blank" download href="/cupon-maraton?code='.$code.'&id='.$id.'">aquí</a> </p>
    </div>
    
    <div class="col-6">
    <div > 
        <img src="'.$imagencupon.'" alt="Cupon">
    </div>
    </div>
    
    </div>
    ';

}
if($id >  4 && $id < 9){
    $imagencupon ="images/descuentos/CUPONES_ART-00".$id.".png";
    echo '
    <div class="row">
    
    <div class="col-6">
    <p>¿Deseas utilizar esta promoción?<br> Presenta este código en caja.</p>
    <img class="codecuponimg" src="http://192.186.240.43/barcode/bar.php?code='.$code.'&size=50&orientation=horizontal&codetype=Code25&print=true&sizefactor=2">
    <p class="codecupon" data-code="'.$code.'">'.$code.'</p>
    <p>También puedes descargar tu código de promoción haciendo click <a onclick="descargaCupon('.$id.')" target="_blank" download href="/cupon-maraton?code='.$code.'&id='.$id.'">aquí</a> </p>
    </div>
    
    <div class="col-6">
    <div > 
        <img src="'.$imagencupon.'" alt="Cupon">
    </div>
    </div>
    
    </div>
    ';
}
if($id >  8 ){
    $idpostal = $id - 8;
    $imagencupon ="images/postales/A".$code."/POSTALES_MN_VIPS_FB-0".$idpostal.".png";

    echo '
    <div class="row">
    
    <div class="col-12">
    <p>¿Deseas compartir esta postal en facebook?<br> ¡Ganarás 10 puntos adicionales!.</p>
    
    <p>Puedes compartirla haciendo click <a onclick="sharePostal('.$id.')" target="_new" href="https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/maratonnavideno/maraton/postal?p='.$idpostal.'-'.$code.'">aquí</a> </p>
    
    <div > 
        <img src="'.$imagencupon.'" alt="Cupon">
    </div>
    </div>
    
    </div>
    ';
    
}

?>
