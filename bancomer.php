<?php
include('headerbancomer.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: bancomer-m.php');
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
	margin-top: 20px;
    margin-bottom: 5px;
}
.w3-tooltip, .w3-display-container {
    position: relative;
}

h2 {
    color: #fddc04;
    margin-left: 28%;
    font-size: 2.5em;
    padding: 0 5% 0 0;
    font-family: "Museo 900",sans-serif;
	margin-top: 150px;
}
.letra{
    background: #ea1c2e;
    padding: 0.3em;
    color: white;
    font-family: "Museo 900",sans-serif;
    padding-top: 1em;
}
</style>
    <div style="text-align: center;margin-top: 7.22em;margin-bottom: -10%;"><p class="letra">Nuevo menú 27 de Agosto</p></div>
	<h2 class="titlecontainer">Vips en comedor Bancomer</h2>
	<div class="w3-content w3-display-container">
	  <img class="mySlides" src="../img/bancomer/1.jpg" style="width:100%">
	  <img class="mySlides" src="../img/bancomer/2.jpg" style="width:100%">
	  <img class="mySlides" src="../img/bancomer/3.jpg" style="width:100%">
	  <img class="mySlides" src="../img/bancomer/4.jpg" style="width:100%">

	  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
<?php include('footer.php');?>
