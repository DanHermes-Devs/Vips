<?php

include('../header.php');

include '../Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: /ubicaciones/m');

    exit(0);

}



$q = $_GET['q'];

$decodeq = urldecode($q);

if($q !=""){

$geolocaliza ="false";

}



else{$geolocaliza ="true";}

?>

<script src="https://cdn.klokantech.com/maptilerlayer/v1/index.js"></script>

<style>

[data-div="#ubicacioneshome"] *{  fill: #fff!important; transition: all .4s ease;}

[data-div="#ubicacioneshome"] *{color: #fff!important;}

.scrolled [data-div="#ubicacioneshome"] *{  fill: #ff0025!important; transition: all .4s ease;}

.scrolled [data-div="#ubicacioneshome"] *{color: #ff0025!important;}

.buscadormenu {



	top: 150px;

}

.mainub {

	float: left;

	width: 100%;

	padding-bottom: 5%;

}

#storeLocator {

	padding: 0 5%;

	width: 100%;

	float: left;

}



select.form-text {

    font-size: 15px;

    padding: 15px 25px;

    padding-left: 30px;

    width: 100%;

    color: #ffffff;

    background-color: transparent;

    border-color: #ffffff;

    border-radius: 30px;

    border-width: 2px;

    -webkit-box-shadow: none;

    box-shadow: none;

    -webkit-transition: none;

    -o-transition: none;

    transition: none;

}



option {

    color: #222;

}

.sc_team_item.sc_team_item_style_2 .sc_team_item_description_span_icon_container {



    display: none;

}



.sc_team_item.sc_team_item_style_2 {



    max-height: 230px;

}



span.contact-line.c1 {

    color: #fff;

}



.nav > li {

    position: relative;

    display: inline-block;

}



img.iconhead {

    width: 28px;

    margin: 0 5px;

    margin-top: -5px;

   

}



.nav > li > a:hover, .nav > li > a:focus {

    text-decoration: none;

    background-color: #F9F9F9;

	color:#BC2429;

}



.menu-item-type-custom a {

    color: #053976;

    text-decoration: none;

    font-weight: 400;

}



.sc_parallax_gradient {



    background-image: url(../images/contactbg.jpg);

}

.sc_services img {

    z-index: 99;

    position: relative;

}



.btn.btn-lg {

    font-size: 18px;

    font-weight: 400;

    padding: 20px 40px 22px;

    width: 100%;

}







#map-canvas {

    height: 440px;

    width: 50%;

    float: left;

}



.textmap{width:50%; float:left;}



#storeslist{



    height: 400px;

    background: #fff;

    width: 95%;

    float: left;

    max-height: 400px;

    overflow-y: hidden;





	position: relative;



z-index: 1;



}



.mm-navbars_bottom > .mm-navbar, .mm-navbars_top > .mm-navbar {



	text-align: left;

}



.controls {

	height: 55px;

	width: 85%;

	border: 2px dashed #aaa;

	padding: .5em 6em .5em .5em;

	background-size: 5.5em 4em;

	background-repeat: no-repeat;

	background-position: right center;

	float: left;

	border-right:none;

}

.imgbtnsrh {
	float: left;
	/* margin-left: 0; */
	width: 40px;
	height: 40px;
	background-image: url(magnifying-glass.png);
	background-size: 50%;
	background-repeat: no-repeat;
	background-position: center;
	/* background-color: #979797; */
	cursor: pointer;
	/* display: none; */
	margin-left: -40px;
	margin-top: 5px;
}
.min150{

min-height: 150px;

}



.desktop{visibility:visible!important;}

.mobile{visibility:hidden!important;}



.toTop #toTop {

    filter: alpha(opacity=50);

    opacity: .5;

    bottom: 10px;

}



.toTop #toTop:hover {

    filter: alpha(opacity=100);

    opacity: 1;



}

#toTop {



    left: 10px;



    opacity: 0;

}



@media (max-width:700px){

.responsive_menu header .topWrap .menuTopWrap #mainmenu > li {

    width: 100%;

    margin-left: 0;

    padding: 10px 0;

}

.nav > li > a {

    position: relative;

    display: block;

    padding: 0px 10px;

}





.desktop{visibility:hidden!important;}

.mobile{visibility:visible!important;}







.min150{

min-height: 100px;

}



#map-canvas {

    height: 400px;

	    width: 100%;

		    float: left;

}



}







#map {

    width:70%; height:95%; 

	max-height:95%;

    position:absolute; float:left;

	margin-top:-20px;

  

}

.row{

 

  }



#locations{  float: right;

  overflow-y: auto;

  height: 100%;

  width: 30%;

  right: 0px;

  position: absolute;

      margin-top: -20px;}



.title {

	color: #333;

	cursor: default;

	margin: 0px 0 4px 0;

	text-transform: uppercase;

	text-align: left;

	text-decoration: none;

	cursor: pointer;

	font-size: 16px;

	text-transform: none !important;

}


.linktomap {
	text-decoration: none;
	font-weight: 100;
	border-bottom: 1px solid #f1f1f1;
}

#locations p{padding: 10px;}



.button3:hover {

   color: #d51c59;;

}



.button3:active {

    vertical-align:-1px;

}

.mm-menu.mm-theme-black .mm-header {

    border-color: rgba(0,0,0, 0.2);

    background-color: #fff;

    text-transform: uppercase;

	color:#333;

	    border: none;

}





    #locations p {

        padding: 0px 5px 0px 20px;

    margin: 0 0 5px 0;

    font-weight: 100;

    font-size: 80%;

	line-height:1.6;

}





.textrest{

	

    width: 80%;

    float: left;

    font-size: 70%;

    line-height: 1.2;



}









.mm-listview .mm-next.mm-fullsubopen + a, .mm-listview .mm-next.mm-fullsubopen + span {

    padding-right: 50px;

    margin-right: 0;

        text-align: right;

    padding-top: 0;

    padding-bottom: 0px;

    color: #b92234;

    font-size: 80%;

    font-weight: 100;

    margin-top: -5px;

}



.taxonomy-term {

    float: left;

    display: inline-block;

        width: auto;

    padding: 5px 1.5em 5px 1.5em!important;

    text-transform: uppercase;

	color:#fff;

	font-weight:300!important;

	    cursor: pointer;

}



.taxonomy-tree {

    height: 25px;

    text-align: center;

    margin: 0 auto;

    position: relative;

	margin-bottom:10px;

	    min-height: 8px;

}





#locations {

    border-top: 3px solid #b92234;

	    width: 100%!important;

}



#delivery {

    padding: 100px 0 90px 0;

    background-attachment: inherit!important;

}



.taxonomy-tree {

    height: auto!important;

    margin-left: 0!important;

	padding: 0;

}



.taxonomy-term {

	padding: 10px 1.4em!important;

    color: #111!important;

    background: rgba(255,255,255,.9)!important;

    font-size: 90%;

    border-right: 1px solid #999!important;

}



.tselected {

    box-shadow: none!important;

    color: #fff!important;

    padding-top: 5px!important;

    background: #CA002E!important;

    padding: 10px 1.4em!important;

}

body {

    background-color: transparent!important;

   

}

.titlew {

    border-bottom: 1px solid;

    border-color: inherit;

    text-align: center;

    line-height: 20px;

    height: 40px;

    padding: 0 40px;

  

    color: rgba(0,0,0,.3);

	    text-decoration: none;

    font-weight: 100;

    top: 0;

    left: 0;

    right: 0;

}





.descstore {

	text-align: left;

	color: #777;

	text-transform: none;

	font-family: "Program", sans-serif;

	font-size: .9em;
	min-height: 50px;

}

.horario {
	padding-left: 30px;
	padding-bottom: 50px;
	visibility: hidden;
	
}
.linktomap {

	padding: 1em 5% 1em 5% !important;

}

.mm-listview>li>a, .mm-listview>li>span {

    color: inherit;

    display: block;

    padding: 0 40px;

    margin: 0;

}

.mm-panels>.mm-panel>.mm-listview:first-child, .mm-panels>.mm-panel>.mm-navbar+.mm-listview {

    margin-top: 0px!important;

}

.distance{

    font-size: 10.5px!important;

    color: #aaa!important;

    float: right;

    text-transform: none;

}

#centerlocation2 {
	background-image: url(centerlocation.png) !important;
	background-size: 30px !important;
	width: 40px;
	height: 40px;
	background-repeat: no-repeat !important;
	background-position: center !important;
	/* left: 50%; */
	cursor: pointer;
	-webkit-transition: all .3s;
	-moz-transition: all .3s;
	transition: all .3s;
	list-style: none;
	position: absolute;
	border-right: 0 !important;
	z-index: 3;
	right: 47%;
	top: 140px;
}
#centerlocation:hover{

	 background-image: url(centerlocation.png)!important;

	-webkit-transition: all .3s;

	-moz-transition: all .3s;

	transition: all .3s;

	list-style:none;

    

}



b {



    font-weight: bold;



}



.link1, .link2 {

	border: 0;

	background: #f29100;

	width: 100%;

	float: left;

	border-color: transparent;

	padding: 10px !important;

	/* height: 30px; */

	text-align: center;

	color: #fff !important;

	font-weight: bold !important;

	margin: 0 20px 0 0px;

	transition: 0.3s ease all;

	text-transform: uppercase;

	font-family: "Program", sans-serif;

	font-size:.85em;

}



.link1, .link2:hover {

	border: 0;

	background: #ffac30;

	width: 100%;

	float: left;

	border-color: transparent;

	padding: 10px !important;

	/* height: 30px; */

	text-align: center;

	color: #fff !important;

	font-weight: bold !important;

	margin: 0 20px 0 0px;

	transition: 0.3s ease all;

}



.link1 {
	background: #979797;
	color: #fff;
	transition: .3s ease all;
	border-radius: 30px;
}
.link1:hover{

	background:#b7b7b7;

	color: #fff;

	transition: 0.3s ease all;

}



.number {

	position: absolute;

	left: 0;

	width: 50px;

	height: 40px;

	background: url(number-bg.png);

	background-size: 100%;

	background-repeat: no-repeat;

	background-position: center;

	text-align: center;

	color: #fff;

	font-weight: 600;

	line-height: 2.3;

}



.mm-menu .mm-navbar a, .mm-menu .mm-navbar > * {



    color: rgba(0,0,0,.9)!important;;

    font-weight: bold !important;



}



.mm-navbar {

	padding:5px  0 !important;;

}



.no-store{

    padding: 5px 15px;



}



.buttonsstore {

	width: 100%;

	padding: 0 40px;

	float: left;

	line-height: 1;

}



@media(max-width:1034px){



#map-canvas {

    top: 42px;

    margin-left: -77.5px;	

  

}#storeslist {

    top: 42px;

  

}

}



@media(max-width:800px){



#map-canvas {

    top: 0;

    margin-left: 0;

}#storeslist {

    top: 0px;

	width: 100%!important;

  

}

}



.estadoslist{

    width: 100%;

    max-width: 400px;

    text-align: left;

    float: left;

    margin-bottom: 10px;

    height: 35px;

    border-radius: 5px;

    border: 1px solid #222;

	display: none;

}



@media (max-width:800px){

section#work {

    padding: 0px 0 20px;

}

}



.titlecontainer{	width: 100%;



float: left;



padding: 0 5%;}

.titleub2 {

	color: #F89E27;

	font-size: 2em;

	padding-bottom: 5px;

	border-bottom: 1px solid #e1e1e1;

	margin-bottom: .25em;

	font-family:"Program", sans-serif;

}

.titleub3 {
	margin-top: 0;
	margin-bottom: 0%;
	font-size: 1.8em;
	color: #222;
	font-family: "Program",sans-serif;
	font-weight: 500;
	padding: 0 .5em 1em 0;
}

.new {
	position: absolute;
	width: 6%;
	right: 15%;
	top: 50px;
}

.new img{width:100%;}


.iconsmap {
	width: 100%;
	float: left;
	position: relative;
	margin-top: -100px;
	margin-bottom: 50px;
}

.iconsmap img{
	width: 5%;
	float: left;
	margin: 10px;
}

/* Base styles for the element that has a tooltip */
[data-tooltip],
.tooltip {
  position: relative;
  cursor: pointer;
}

/* Base styles for the entire tooltip */
[data-tooltip]:before,
[data-tooltip]:after,
.tooltip:before,
.tooltip:after {
  position: absolute;
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: 
	  opacity 0.2s ease-in-out,
		visibility 0.2s ease-in-out,
		-webkit-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
	-moz-transition:    
		opacity 0.2s ease-in-out,
		visibility 0.2s ease-in-out,
		-moz-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
	transition:         
		opacity 0.2s ease-in-out,
		visibility 0.2s ease-in-out,
		transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform:    translate3d(0, 0, 0);
  transform:         translate3d(0, 0, 0);
  pointer-events: none;
}

/* Show the entire tooltip on hover and focus */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after,
[data-tooltip]:focus:before,
[data-tooltip]:focus:after,
.tooltip:hover:before,
.tooltip:hover:after,
.tooltip:focus:before,
.tooltip:focus:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}

/* Base styles for the tooltips directional arrow */
.tooltip:before,
[data-tooltip]:before {
  z-index: 1001;
  border: 6px solid transparent;
  background: transparent;
  content: "";
}

/* Base styles for the tooltips content area */
.tooltip:after,
[data-tooltip]:after {
  z-index: 1000;
  padding: 8px;
  width: 160px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 0.9);
  background-color: #ef3e42;
  color: #fff;
  content: attr(data-tooltip);
  font-size: 14px;
  line-height: 1.2;
  text-align: center;
}

/* Directions */

/* Top (default) */
[data-tooltip]:before,
[data-tooltip]:after,
.tooltip:before,
.tooltip:after,
.tooltip-top:before,
.tooltip-top:after {
  bottom: 100%;
  left: auto;
}

[data-tooltip]::before, .tooltip::before, .tooltip-top::before {
	margin-left: -25px;
	margin-bottom: -10px;
	border-top-color: #000;
	border-top-color: hsla(0,0%,20%,.9);
	border-top-color: #ef3e42;
	
}
/* Horizontally align top/bottom tooltips */
[data-tooltip]:after,
.tooltip:after,
.tooltip-top:after {
  margin-left: -80px;
}

[data-tooltip]:hover:before,
[data-tooltip]:hover:after,
[data-tooltip]:focus:before,
[data-tooltip]:focus:after,
.tooltip:hover:before,
.tooltip:hover:after,
.tooltip:focus:before,
.tooltip:focus:after,
.tooltip-top:hover:before,
.tooltip-top:hover:after,
.tooltip-top:focus:before,
.tooltip-top:focus:after {
  -webkit-transform: translateY(-12px);
  -moz-transform:    translateY(-12px);
  transform:         translateY(-12px); 
}

/* Left */
.tooltip-left:before,
.tooltip-left:after {
  right: 100%;
  bottom: 50%;
  left: auto;
}

.tooltip-left:before {
  margin-left: 0;
  margin-right: -12px;
  margin-bottom: 0;
  border-top-color: transparent;
  border-left-color: #000;
  border-left-color: hsla(0, 0%, 20%, 0.9);
}

.tooltip-left:hover:before,
.tooltip-left:hover:after,
.tooltip-left:focus:before,
.tooltip-left:focus:after {
  -webkit-transform: translateX(-12px);
  -moz-transform:    translateX(-12px);
  transform:         translateX(-12px); 
}

/* Bottom */
.tooltip-bottom:before,
.tooltip-bottom:after {
  top: 100%;
  bottom: auto;
  left: 50%;
}

.tooltip-bottom:before {
  margin-top: -12px;
  margin-bottom: 0;
  border-top-color: transparent;
  border-bottom-color: #000;
  border-bottom-color: hsla(0, 0%, 20%, 0.9);
}

.tooltip-bottom:hover:before,
.tooltip-bottom:hover:after,
.tooltip-bottom:focus:before,
.tooltip-bottom:focus:after {
  -webkit-transform: translateY(12px);
  -moz-transform:    translateY(12px);
  transform:         translateY(12px); 
}

/* Right */
.tooltip-right:before,
.tooltip-right:after {
  bottom: 50%;
  left: 100%;
}

.tooltip-right:before {
  margin-bottom: 0;
  margin-left: -12px;
  border-top-color: transparent;
  border-right-color: #000;
  border-right-color: hsla(0, 0%, 20%, 0.9);
}

.tooltip-right:hover:before,
.tooltip-right:hover:after,
.tooltip-right:focus:before,
.tooltip-right:focus:after {
  -webkit-transform: translateX(12px);
  -moz-transform:    translateX(12px);
  transform:         translateX(12px); 
}

/* Move directional arrows down a bit for left/right tooltips */
.tooltip-left:before,
.tooltip-right:before {
  top: 3px;
}

/* Vertically center tooltip content for left/right tooltips */
.tooltip-left:after,
.tooltip-right:after {
  margin-left: 0;
  margin-bottom: -16px;
}

.iconsagregadores{display:inline-block;}

<?php 
$icons = $_GET['icons'];

if(strlen($icons) > 1){
	
	echo '
	.iconsagregadores{display: inline-block;}
	';
	
	
}
?>
.iconsagregadores {
	width: 50%;
	float: left;

	float: right;
	margin-top: -40px;
	margin-bottom: 0;
}
.iconcont{width:auto; display:inline;}
.uber, .rappi, .sdelantal{width:0px; padding: 0 5%; display:inline-block;}
.iconsagregadores img {
	width: 85%;
}

.titlecontainer {
	width: 50%;
	float: left;
	padding: 0 5%;
	position: fixed;
	top: 126px;
	background: #fff;
}
.textmap {
	width: 50%;
	float: left;
	margin-top: 0;
	position: relative;
	z-index: 4;
	background: #fff;
	padding: 0 5%;
}
.titleub2 {
	color: #eb1c2d;
	font-size: 1.7em;
	padding-bottom: 5px;
	border-bottom: none;
	margin-bottom: 0;
	font-family: "Program",sans-serif;
	margin-top: 5px;
}
.titleub3 {
	margin-top: 0;
	margin-bottom: 0%;
	font-size: 22px;
	color: #767676;
	font-family: "Program",sans-serif;
	font-weight: 500;
	padding: 0;
	font-weight: normal;
}

.controls {
	height: 45px;
	width: 95%;
	border: none;
	padding: .5em 6em .5em .5em;
	background-size: 5.5em 4em;
	background-repeat: no-repeat;
	background-position: right center;
	float: left;
	border-right: none;
	border-bottom: 1px solid #ccc;
}
#map-canvas {
	height: 100vh;
	width: 50%;
	float: left;
	position: absolute !important;
	top: 126px;
	z-index: 2;
	right: 0;
}
#searchbox {
	padding: 5px;
	float: left;
	width: 75%;
	margin: 0;
	padding-right: 40px;
}
#storeLocator {
	padding: 0;
	width: 100%;
	float: left;
}

.mm-menu {
	background: #f3f3f3;
	border-color: #fff!important;
	color: rgba(0,0,0,.75);
}

.Line-5 {
	width: 127.5%;
	height: 3px;
	box-shadow: 0 2px 4px 0 rgba(159,159,159,.5);
	border-bottom: solid 1px #f8f8f8;
	float: left;
	margin: 30px 0 10px 0;
	margin-left: -15%;
}

#menu {
	min-width: none;
	max-width: none;
	width: 105%;
	height: 100%;
	position: relative;
	z-index: 23;
}
.link1 {
	background: #f5a623;
	color: #fff;
	transition: .3s ease all;
	border-radius: 30px;
	text-transform: none;
	font-size: 15px;
	font-weight: 500 !important;
}
.distance {
	font-size: 10.5px !important;
	color: #767676 !important;
	float: right;
	text-transform: none;
	font-size: 15px !important;
	font-weight: bold;
}

#storeslist {
	height: 400px;
	background: #fff;
	width: 112.5%;
	float: left;
	max-height: 400px;
	overflow-y: auto;
	position: relative;
	z-index: 1;
}

.title {
	color: #767676;
}

.mm-menu_navbar_top-1 .mm-panels {
	top: 0!important;
}
.mm-navbar {
	display: none !important;
}

.map {
	background: none;
}

.titlemap {
	font-weight: bold;
	position: relative;
	font-size: 15px;
	color: #ed1c2c;
	margin-top: 5px;
	max-width: 100%;
	margin-top: 0;
	width: 100%;
	display: inline-block;
	padding: 5px 0;
}
.addressmap {
	max-width: 400px;
	width: 100%;
	font-family: "Program", sans-serif;
	font-size: 15px;
	padding: 10px 0;
	margin-top: 0;
	position: relative;
	display: inline-block;
}

.gm-style .gm-style-iw-c {
	position: absolute;
	box-sizing: border-box;
	overflow: hidden;
	top: 0;
	left: 0;
	transform: translate(-50%,-100%);
	background-color: white;
	border-radius: 8px;
	padding: 20px;
	box-shadow: 0 2px 7px 1px rgba(0,0,0,0.3);
}
*{outline:0!important;}

.verenmapa {
	position: absolute!important;
	right: 0!important;
	top: 40px!important;
	font-size: 12px!important;
	padding: 0 5%!important;
	cursor: pointer!important;
	color: #ed1c2c!important;
}
</style>



	<div class="main mainub">






		<div class="contselect" style="width:100%; float:left;">

		  <select id="tinynav2" class="estadoslist selectpicker desktop">

					<option value="ubicacion" id="centerlocationm" selected>Mi ubicaci??n</option>

					<option value="Ciudad de M??xico" id="cdmxm">CDMX</option>

					<option value="Estado de M??xico" id="edomexm">Estado de M??xico</option>

					<option value="Quer??taro" id="queretarom">Quer??taro</option>

					<option value="Baja California Norte" id="bcnm">Baja California N.</option>

				</select>



		</div>

		<center>

		<ul class="taxonomy-tree" id="nav" style="display:none;">

		<li class="

centerlocation tooltip-down estado tselected centerlocation" edo="ubicacion" data-tooltip="Ir a mi ubicaci??n" id="centerlocation" alt="Mi ubicaci??n"></li>	

		<li class="taxonomy-term estado" id="cdmx" edo="Ciudad de M??xico">CDMX</li>

		

			<script>	

				$(document).ready(function() {

					$("#cdmx").click(function(){

						$(".estado").removeClass("tselected");

						$("#cdmx").addClass("tselected");

					

					});





				});

			</script>

			

		<li class="taxonomy-term estado" id="edomex" edo="Estado de M??xico">Estado de M??xico</li>

			<script>	

				$(document).ready(function() {

					$("#edomex").click(function(){

						$(".estado").removeClass("tselected");

						$("#edomex").addClass("tselected");

						

						

					});



				});

			</script>

			

			

			<li class="taxonomy-term estado" id="queretaro" edo="Quer??taro">Quer??taro</li>

			<script>	

				$(document).ready(function() {

					$("#queretaro").click(function(){

						$(".estado").removeClass("tselected");

						$("#queretaro").addClass("tselected");

						

						

					});



				});

			</script>

			

			

			<li class="taxonomy-term estado" id="bcn" edo="Baja California Norte">Baja California N.</li>

			<script>	

				$(document).ready(function() {

					$("#bcn").click(function(){

						$(".estado").removeClass("tselected");

						$("#bcn").addClass("tselected");

						

					



						

						

					});



				});

			</script>

			

			

			

			</ul>

			

			</br>

			

			<select id="tinynav1" class="tinynav tinynav1 selectpicker">

				<option value="ubicacion" id="centerlocationm" selected>Mi ubicaci??n</option>

				<option value="Ciudad de M??xico" id="cdmxm">CDMX</option>

				<option value="Estado de M??xico" id="edomexm">Estado de M??xico</option>

				<option value="Quer??taro" id="queretarom">Quer??taro</option>

				<option value="Baja California Norte" id="bcnm">Baja California N.</option>

			</select>

			</center>



			<div id="storeLocator" class="storeLocator">



			<!--

				This is the autocomplete address search field.

				It must have the "input" class.

			-->

			

			<div class="textmap">
			
			<h2 class="titleub2">ENCUENTRA TU VIPS M??S CERCANO</h2>

	<h3 class="titleub3">Visita tu Vips favorito y obt??n los nuevos modelos del juguete m??s popular del momento.</h3>

			<div class="mapsearch">

			<input id="searchbox" type="text" class="input controls" value="<?php echo $decodeq; ?>" placeholder="Ingresa una direcci??n, ciudad, C.P....">

			<a class="imgbtnsrh"></a>

			</div>
			
			<div class="Line-5"></div>

			<div id="storeslist" class="storeslist">

			

		

			

			<nav id="menu"  >



			<ul id="stores"data-list-stores >



				<!--

					This element will be displayed while the stores are

					loading. It must have the "loading" class.

				-->

				<p class="loading">Cargando...</p>



				<!--

					This element will be displayed if no store is found

					at this place. It must have the "no-store" class.

				-->

				<p class="no-store" style="display: none">No se encontraron Sucursales cercanas</p>

				<p class="no-store" style="display: none; font-size:70%">Intente con otro t??rmino de b??squeda m??s espec??fico.</p>

				<a class="no-store" style="display: none" href="#"></a>



				<!--

					This element is actually the template which will be

					cloned for each store to show. It is hidden (display: none)

					and must have the "data-store-template" attribute.

				-->

				

				

				<!-- INICIA RESTAURANTE Masaryk-->

				<li class="store" data-store-template  style="display: none">

					<a class="linktomap">	

					

				
				  
				 
				   <div class="new" data-store-attr="new"></div>

				  <div class="number" data-store-attr="number" style="display:none;"></div>

			<strong><span class="distance" data-store-attr="distance-miles"></span><h2 class="title"  style="text-transform:uppercase;" data-store-attr='{"content":"name"}'></h2></strong>

			

				<p class="descstore" data-store-attr="direccion"><br></p>

				

				<p  class="horario " data-store-attr='{"content":"horario"}'>

				</p>
				<div class="iconsmap">
				  <div class="ninos tooltip-top"  data-tooltip='??rea de ni??os' data-store-attr="ninos"></div>
					<div class="estacionamiento tooltip-top"  data-tooltip='Estacionamiento propio' data-store-attr="estacionamiento"></div>
				  
				  <div class="remodelados tooltip-top"  data-tooltip='Remodelado' data-store-attr="remodelados"></div>
				  
				 
				  <div class="salon tooltip-top"  data-tooltip='Sal??n de eventos' data-store-attr="salon"></div>
				  <div class="alcohol tooltip-top"  data-tooltip='Venta de Alcohol' data-store-attr="alcohol"></div>
				  <div class="terraza tooltip-top"  data-tooltip='Terraza' data-store-attr="terraza"></div>
				</div>

				<div class="iconsagregadores">
				  <div class="iconcont" data-store-attr="uber"></div>
				   <div class="iconcont"  data-store-attr="rappi"></div>
				  <div class="iconcont" data-store-attr="sdelantal"> </div>
				</div>

				

				<div data-store-attr="botonmaps"> </div>
				<a data-store-link-to-map class="verenmapa">Ver en mapa ></a>

				<a class="btndeliver link2" style="position: absolute; left: 45%; margin-top: -70px; width: 30%; padding: 0; display:none; visibility:hidden;"  target="_blank"  href="/domicilio" data-store-attr='{"content":"delivery"}'>

				<p></p></a>

				

		

				

				

				

				

				





	</a>				

					<!-- INICIA DETALLES RESTAURANTE Masaryk-->

					

					<!-- TERMINA DETALLES RESTAURANTE Masaryk-->

				</li>

			

				<!-- TERMINA RESTAURANTE Masaryk-->

			



			</ul>

			

			</nav>

			



			<!--

				This div defines what will be shown in the balloon window which will

				appear when the user clicks on a store on the map. It works exactly as

				the previous template div.

			-->

			<div style="display: none" data-store-infowindow-template>


				<span data-store-link-to-map data-store-attr="name" class="titlemap"></span><br><br>

				<span data-store-attr="address" class="addressmap"></span><br>
				<span data-store-attr="horario" class="addressmap"></span><br>

				 <center>

				

					

						 <div data-store-attr="linkmapsinfo"></div>

						 </center>

				

			</div>

			

			



		</div>

		

		</div>

		

		<!--

				This is the map div which will contain the map generated

				by Google Maps. It must have the "map" class.

			-->

			<div id="map-canvas" class="map"></div>

			<a class=" centerlocation tooltip-right" data-tooltip="Ir a mi ubicaci??n" edo="ubicacion" id="centerlocation2" alt="Mi ubicaci??n"></a>



			<!--

				This is the store list. It must contain the "data-list-stores"

				attribute.

			-->

		

		</div>



		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css?v=6.1.0">

		<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

		<style type="text/css">

		

			.Header,

			.Prev,

			.Next

			{

				display: none;

			}



			#menu

			{

				background: #fff;

			}

			#menu a{text-decoration:none;     font-weight: 100;}

			h4

			{

				margin: 0 0 10px 0;

			}

			.thumb

			{

				display: block;

				width: 30%;

				margin: 0 2% 2% 0;

				float: left;

			}

			.thumb img

			{

				float: left;

				width: 100%;

				height: auto;

			}

			.thumb-xs

			{

				vertical-align: middle;

				display: inline-block;

				margin: -5px 10px -5px 0;

			}

			.clear

			{

				clear: both;

				display: block;

				padding: 5px 0;

				margin-bottom: 20px;

			}

			.large

			{

				width: 100%;

				height: auto;

			}

			.mm-panel[id^="panel-"]:not(#panel-categories):not(#app)

			{

				padding-right: 0;

			}

			

			.mm-menu.mm-theme-black .mm-header {

				border-color: rgba(0,0,0, 0.2);

				background-color: #fff;

				/* color: #b92234!important; */

			}



			.mm-menu.mm-theme-black .mm-header > a {

				color: #b92234;

				font-weight: bold;

			}



			.mm-menu > .mm-panel:before, .mm-menu > .mm-panel:after {

				content: '';

				display: block;

				height: 0px;

			}

			.mm-menu.mm-hasheader .mm-panel, .mm-menu.mm-hasheader .mm-fixeddivider {

				top: 60px;

			}



			.triangle {

				position: absolute;

				z-index: 99999;

				top: 35%;

				right: 30%;

				opacity: .97;

				width:3em;

			}



			.mm-listview .mm-next.mm-fullsubopen + a, .mm-listview .mm-next.mm-fullsubopen + span {

				padding-right: 50px;

				margin-right: 0;

				padding-bottom: 5px;

				margin-bottom: 8px;

			}



			.pwaze{

				

				padding: 0!important;

				color: #111!important;

				font-size: 73%!important;

				margin-top: -8px!important;

				

			}



			.mm-listview .mm-next {

				background: rgba(3,2,1,0);

				width: 30px;

				padding: 0;

				float: right;

				position: absolute;

				right: -13px;

				top: 0;

				bottom: 0;

				z-index: 2;

			}



			.mm-listview .mm-next+a, .mm-listview .mm-next+span {

				margin-right: 10px;



			}



			.tselected {

				box-shadow: inset 0 2px 0 #f05451;

				color:#B92234;

				padding-top: 5px;

			}



			.mm-panel[id^="panel-"]:not(#panel-categories):not(#app) {

				padding-right: 30px;

			}



			.mm-menu > .mm-panel {



				padding-bottom: 35px!important;

			}







			/* styles for desktop */

			.tinynav { display: none }

			.mm-resultspanel li{

				display:block!important;

			}



			.mm-title{     padding: 10px 0;

				

				font-weight: 400!important;}



			.detailsli{

				padding: 25px!important;

			}



			/* styles for mobile */

			@media screen and (max-width: 800px) {

				

				#map {

				width:100%; height:45%; 

				max-height:95%;

				position:absolute; float:left;

				margin-top:-20px;

			  

			}









			#locations{  float: right;

			  overflow-y: auto;

			  height: 100%;

			  width: 100%;

			  right: 0px;

				  position: absolute;

				margin-top: 70%;

				height: 350px;}

				.tinynav { display: block }

				#nav { display: none }

				

				.tinynav {

			   display: block;

				width: 100%;

				margin: 0px 0px 10px 0;

				padding: 0 5px;

				height: 45px;

				height: 40px;

				font-weight: 400;

				background: rgba(255, 255, 255, .35);

				color: #222;

				font-size: 19px;

			}



			#tinynav1 option {

				color: #333;

			   ;

			}



			.restau{

				

			float:left; width:100%;

			}



			.nopaddings{

					padding: 0!important;

			}



			.triangle {



				display: none;

			}





			}



		

		#menu {

		min-width: none;

		max-width: none;

		width: 100%;

		height: 100%;

		position: relative;

		z-index: 99999;

		}

			

			

		.mm-listitem::after {

			left: 20px;

			opacity: 0!important;

		}



		.mm-listitem::after {

			content: '';

			border-bottom-width: 1px;

			border-bottom-style: solid;

			display: none!important;

			position: relative;

			left: 0;

			right: 0;

			bottom: 0;

		}

		

		</style>

		

	</div>



	

		<script type="text/javascript" src="js/jquery.mmenu.all.js?v=6.1.0"></script>

		<script type="text/javascript">

			jQuery(document).ready(function( $ ) {

			  $("#menu").mmenu({

				  offCanvas: false,

				 "searchfield": {

					 "add":false,

					 

					"resultsPanel": true,

					"showTextItems": true,

					"showSubPanels": true,

					"placeholder": "Buscar...",

					"noResults": "No hay resultados..."

					

				 },



				 "resultsPanel": {

					"add": true,

					"title": "Resultados de la b??squeda"

				   

				

					

				 },

				 "navbar": {

							"title": "Resultados para tu ubicaci??n"

						},

				 "navbars": [

					{

					   "position":[ "none"

					   

					   ],

					   

					   

					}

				 ]

			  }, {

				 "searchfield": {

					"clear": true

				 }

			  });



		   });
		   
		   $("#centerlocation2").click(function(){
			   $("#centerlocation").click();
		   })

		</script>

	



		



		<!--

			Remember that the plugins requires jQuery library, and the

			Google Maps API.

		-->

		

		<script src="https://maps.google.com/maps/api/js?key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE&amp;libraries=places"></script>



		<!--

			Include the jQuery plugin.

		-->

		<script src="jquery.storelctr.js"></script>

		<script src="geolocation-marker.js"></script>

		<script>



			// When the document is fully loaded...

			$(document).ready(function() {



				// Here we say that we want to use the plugin

				// on the "storeLocator" div. The storeLocator

				// methods accepts as parameter the options that

				// you want to pass to the plugin.

			    $('#storeLocator').storeLocator({



			    	// The fetchStoresFunction is a quite required

			    	// option. It is a function which take three parameters:

			    	// the latitude and the longitude of the address that

			    	// the user wants to find the store nearby, and the

			    	// function that will be called when the stores are fetched.

			    	// See below for an example of such a function.

			    	fetchStoresFunction: fetchStores,



			    	// This options defines wether the user should be located

			    	// to center the map on his position (it uses HTML5 API).

			    	enableGeolocation: <?php echo $geolocaliza;?>,





			    });



			});



			// This example function simply makes an AJAX call to the stores.php

			// script, which returns the stores in JSON format. The script takes

			// two parameters: the latitude and the longitude. When the AJAX call

			// is finished, we call the callback function. The stores will be passed

			// as parameter to this function.

			function fetchStores(lat, lng, callback) {

			if ($(window).width() < 1018) {

			 var edo = $('.selectpicker').find('option:selected').val();

			}

			else {

			 var edo =  $('.tselected').attr('edo');

			}



			var filter="<?php echo $decodeq; ?>";

				var file = 'stores.php?filter='+filter+'&edo='+edo;

				

			    $.get(file, { lat: lat, lng: lng }, 'json').success(callback);

			

			}

			

			

		</script>

		

		<script src="js/tinynav.min.js"></script>

		

		

		<script>

		

			$(document).ready(function() {



				$('select').val('ubicacion');

				chkBtns();



			

			});





			function chkBtns(){

				$('a:contains("Pide a domicilio")').css('display', 'block');



				setTimeout(chkBtns, 3000);

			}



			







			

			 $('select').change(function () {

			 var optionSelected = $(this).find("option:selected");

			 var valueSelected  = optionSelected.val();

			 var textSelected   = optionSelected.text();

			 if(textSelected == "Mi ubicaci??n"){

					$("#centerlocation").trigger("click"); 

				

			}

			if(textSelected == "CDMX"){

					$("#cdmx").trigger("click"); 

				

			}

			if(textSelected == "Estado de M??xico"){

					$("#edomex").trigger("click"); 

				

			}

			

			if(textSelected == "Quer??taro"){

					$("#queretaro").trigger("click"); 

				

			}

			

			if(textSelected == "Baja California N."){

					$("#bcn").trigger("click"); 

				

			}

	

		 });

		 



 <?php if( isset($geolocaliza) & $geolocaliza !=""){

echo "





			$(document).ready(function() {



				

		setTimeout(function(){

		



		$('#searchbox').focus();







	}, 1000);





		setTimeout(function(){

		



		$('.imgbtnsrh').trigger('click');

		$('#searchbox').blur();
		$('.textmap').trigger('click');





	}, 3000);



			});

	

$('#searchbox').trigger('click');

";

}

?>

		 

				

		</script>

		













<!-- Footer =============================-->

<?php include('../footer.php');?>

