<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

  header('Location: /bancomer.php');

  exit(0);

}

?>



<style>
	
.w3-black, .w3-hover-black:hover {
    color: #fff!important;
    background-color: #f5ad40!important;
}
.w3-black:hover,  {
    color: #fff!important;
    background-color: #f29100!important;
}

.w3-btn, .w3-button {
    border: none;
    display: inline-block;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}
.w3-display-right {
    position: absolute;
    top: 50%;
    right: 0%;
    transform: translate(0%,-50%);
    -ms-transform: translate(0%,-50%);
}
.w3-display-left {
    position: absolute;
    top: 50%;
    left: 0%;
    transform: translate(0%,-50%);
    -ms-transform: translate(-0%,-50%);
}
.w3-content {
    max-width: 980px;
    margin: auto;
    margin-bottom: 5px;
}
.w3-tooltip, .w3-display-container {
    position: inherit;
    top: 70px;
}

.ayuda {
    float: left;
    width: 100%;
	padding-top: 25%;
    padding-right: 5%;
    padding-bottom: 5%;
    padding-left: 5%
	position: inherit;
}
.ayuda h1 {
    font-size: 1.5em;
    color: #ed7124;
    font-family: 'ArialMT',sans-serif;
    text-align: center;
}
</style>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="../img/bancomer/1.jpg" style="width:100%">
  <img class="mySlides" src="../img/bancomer/2.jpg" style="width:100%">
  <img class="mySlides" src="../img/bancomer/3.jpg" style="width:100%">
  <img class="mySlides" src="../img/bancomer/4.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<div class="ayuda">

	<h1>Vips en comedor Bancomer</h1>

</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

  <!-- Footer =============================-->

  <?php include('footerm.php');?>

