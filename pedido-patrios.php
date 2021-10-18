  <?php
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
  $sesion = 1;
	//header("Location: /perfil");
}
include('header-bootstrap.php');
$page = "pedido-patrios";
?>
<link rel="stylesheet" href="/css/animate.css">
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='slick/slick-theme.css'>
<script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>

<style>
@font-face {
    font-family: 'Museo 900';
    src: url('/css/fonts/museo/Museo900-Regular.woff2') format('woff2'),
        url('/css/fonts/museo/Museo900-Regular.woff') format('woff'),
        url('/css/fonts/museo/Museo900-Regular.ttf') format('truetype'),
        url('/css/fonts/museo/Museo900-Regular.svg#Museo-900') format('svg');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Museo 700';
    src: url('/css/fonts/museo/Museo-700.woff2') format('woff2'),
        url('/css/fonts/museo/Museo-700.woff') format('woff'),
        url('/css/fonts/museo/Museo-700.ttf') format('truetype'),
        url('/css/fonts/museo/Museo-700.svg#Museo-700') format('svg');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Museo 500';
    src: url('/css/fonts/museo/Museo-500.woff2') format('woff2'),
        url('/css/fonts/museo/Museo-500.woff') format('woff'),
        url('/css/fonts/museo/Museo-500.ttf') format('truetype'),
        url('/css/fonts/museo/Museo-500.svg#Museo-500') format('svg');
    font-weight: 500;
    font-style: normal;
}
body {
	background-color: #fff;
}

*{outline:0; box-sizing:border-box;}

.dayp2 {
	width: 100%;
	float: left;
	position: relative;
	height: 450px;
	overflow: visible;
	z-index: 2;
}
.greencircle {
	width: 100%;
	float: left;
	background: url(/img/2019/patrios/Ovalo-banner-daypart2-min.png);
	position: absolute;
	height: 100%;
	background-size: 150%;
	background-position: 50% 105%;
	background-repeat: no-repeat;
}
.platochile {
	position: absolute;
	width: 30%;
	right: -5%;
	float: right;
	overflow: visible;
	text-align: center;
	bottom: -15%;
}
.carouselpatrios {
	width: 50%;
	float: left;
}

.slick-slide img {
	display: block;
	width: 100%;
	padding: 0% 10% 5%;
}
.logonew {
	width: 30% !important;
	margin: 0 35%;
}
.footer {
	margin-top: 5%;
}
.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }
.floating {
    animation-name: floating;
    animation-duration: 3.5s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}
.floating2 {
    animation-name: floating;
    animation-duration: 4s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}
.floating3 {
    animation-name: floating;
    animation-duration:6s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}

@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 8px); }
    to   { transform: translate(0, -0px); }
}
.overflowhidden{overflow:hidden;}
.slick-slide {
	text-align: center;
}
.titleplato {
	font-family: "Museo 700",sans-serif !important;
	font-size: 24px !important;
	margin-top: -2.5% !important;
	margin-bottom: 0;
}
.carouselpatrios .titleplato {
	color: #0b623b;
}
.calsplato {
	font-family: "Museo 500",sans-serif !important;
	font-size: 20px !important;
}
.carouselpatrios .calsplato {
	color:#222;
}

.descplato {
	color: #222;
	padding: 0 15%;
	font-size: 15px;
	line-height: 1.2;
}
.slick-dots {
	bottom: -5%;
}
.scrolled .main {
	margin-top: 70px;
	transition: all .4s ease;
	position: relative;
}
main {
	width: 100%;
	overflow-x: hidden;
	overflow-y: hidden;
}
.desktop{display:block!important;}
.mobile{display:none!important;}
.textopatrios {
	text-align: center;
	padding: 2.5%;
}
.titulopatrios {
	width: 40%;
	max-width: 500px;
}
.textopatrios h1 {
	color: #feea34;
	font-size: 35px;
	text-align: center;
	padding: 1% 25%;
	font-weight: 500;
	margin: 0;
	display: inline-block;
	font-family: "Museo 700",sans-serif;
	width: 100%;
	padding-bottom: .5%;
}
.textopatrios h2 {
	color: #fff;
	width: 100%;
	display: inline-block;
	padding: 0 35%;
	font-size: 20px;
}

.textopatrios h1 span {color:#feea34}
.titulodomicilio {
	float: left;
	text-align: center;
	font-size: 30px;
	width: 100%;
	font-family: "Museo 700";
	margin-top: -3.5%;
}
.titulodomicilio h1 {
	color: #e91c2b;
	text-align: center;
	padding: 0 20%;
	margin: 0;
	font-size: 35px;
	margin-bottom: 1.5%;
}
.titulodomicilio h2 {
	font-family: "Program", sans-serif;
	font-size: 20px;
}
.inputpanel {
	background-size: 20%;
	background-repeat: no-repeat;
	background-position: right bottom;
	width: 45%;
	float: left;
	text-align: center;
  padding:2.5%;
	padding-top: 0;
	padding-bottom: 2.5%;
}
.inputpanel h2 {
	color: #ea0029;
	font-weight: 500;
	font-size: 20px;
}
.inputpanel h3 {
	font-weight: 500;
	font-size: 18px;
	padding: 2.5% 15%;
}
#cpdom {
	width: 100%;
	border: 0;
	border-bottom: 1px solid #ccc;
	background: none;
	max-width: 200px;
	display: inline-block;
	background: url(/img/svg/placeholder.svg);
	background-size: 20px;
	background-repeat: no-repeat;
	background-position: right;
	height: 40px;
}
#sendbtncp {
	display: inline-block;
	width: 100%;
	background-color: #f5a623;
	color: #fff;
	max-width: 250px;
	padding: 10px;
	font-weight: 500;
	border-radius: 30px;
	margin-top: 30px;
	opacity: 1;
  cursor:pointer;
}
@media(max-width:1500px){
  .dayp2 {
  	height:380px;
  }
  .titulopatrios {
	max-width: 450px;
  }
  .textopatrios h1 {
	font-size: 25px;
}
}

@media(max-width:1024px){
  .dayp2 {
    height: 330px;
  }
	.slick-dots {
		bottom: 0%;
	}
	.platillo img {
		padding: 0 20%;
	}
	.platillo p {
		padding: 0 5%;
		font-size: 15px;
	}
	.titleplato{margin-top: -2.5% !important;}
	.scrolled .main {
		margin-top: 120px;
	}

}

@media(max-width:800px){
	main {
		overflow-y: auto;
	}
	.mobile{display:block!important;}
	.desktop{display:none!important;}
  .dayp2 {
  	height: 250px;
  }
  .greencircle {
  	width: 100%;
  	float: left;
  	height: 180px;
  	background-size: 110%;
  	background-position: bottom;
  	top: 0;
  	text-align: center;
  }
  .titulodomicilio h1 {
	padding: 0 5%;
	font-size: 18px;
	margin-bottom: 2.5%;
}
.titulodomicilio h2 {
	font-size: 15px;
}
.carouselpatrios {
	width: 100%;
	margin-top: 5%;
}
.titleplato {
	font-size: 15px !important;
}
.titulopatrios {
	width: 60%;
	margin: 1  .5% 10%;
	max-width: 200px;
}
.calsplato {
	font-size: 13px !important;
}
.inputpanel {
	background-size: 20%;
	width: 100%;
	padding-top: 5%;
	margin-bottom: 15%;
}

}
</style>
<main>
	<div class="row">
		<div class="col-md-12">
			<div class="main">

            <style>

            .pasos{
              width: 100%;
              float: left;
            }
            .div7 {
            	width: 14.28%;
            	float: left;
            	text-align: center;
            	padding: 2.5%;
            }
            .div7.yellowarrow {
            	background: url(/img/2019/patrios/yellowarrow.png);
            	background-size: 80%;
            	min-height: 400px;
            	background-repeat: no-repeat;
            	background-position: center;
            }
            .paso h3 {
            	font-family: "Museo 500", sans-serif;
            	font-size: 20px;
            }
            .paso h2 {
            	font-size: 40px;
            	font-family: "Museo 700", sans-serif;
            	margin: 15px 0;
            }
            .paso img {
            	width: 70%;
            	padding: 10%;
            }
            .titlepaso {
            	color: #0b623b;
            	font-size: 18px;
            	font-family: "Museo 500", sans-serif;
            }
            .tiendascont {
            	float: left;
            	width: 100%;
            	padding: 2.5%;
            	text-align: center;
              padding-bottom:0;
            }
            .tiendas {
            	width: 33.3%;
            	float: left;
            	line-height: 2;
            	font-size: 18px;
            	font-family: "Museo 500";
            }
            .tiendas.line1 {
            	border-right: 2px solid #222;
            }


            label {
            	color: #9f9f9f;
            	width: 100%;
            	float: left;
            	padding-bottom: 0;
            	padding-top: .5em;
            }


            input {
            	/* border: none; */
            	border-bottom: 1px solid #002643;
            	width: 100%;
            	padding: 1em 0;
            	border: solid 1px #ccc;
            	padding: .85em 5px;
            	font-family: inherit;
            	color: #000;
            	font-size: 80%;
            }

            #sendpedido {
            	color: #fff;
            	background: #012c5a;
            	width: 50%;
            	padding: 10px;
            	min-width: 200px;
            	margin: 5% auto;
            	margin-top: 2em;
            }

            select {
            	width: 100%;
            	padding: 1em 0em;
            	margin-top: 0;
            	-webkit-appearance: none;
            	-moz-appearance: none;
            	appearance: none;
            	background: url(/img/navidad/down-arrow.png) 94% / 5% no-repeat #fff;
            	color: #797979;
            	border: solid 1px #ccc;
            	padding: 1em 5px;
            	font-family: inherit;
            	color: #000;
            	font-size: 70%;
            }
            select::-ms-expand {
                display: none; /* remove default arrow in IE 10 and 11 */
            }


            .logon {
            	width: 65%;
            	padding-top: 0%;
            	margin-top: -5%;
            }

            .maincarousel {
            	padding: 0%;
            }

            .maincarousel img {
            	width:100%;
            	padding: 0 10%;
            }
            #textintro h2 {
            	font-size: 100%;
            	/* padding: 0; */
            	margin: 0;
            	text-align: left;
            	padding: 0 12.5% 2.5% 0;
            	font-family: inherit;
            }

            .slick-dots li button::before {
            	color: #fff;
            }
            .slick-dots li.slick-active button::before {
            	color: #c00e12 !important;
            }
            .slick-next {
            	background-image: url(/img/navidad/rightarrow.png);
            	background-size: cover;
            	width: 40px;
            	height: 40px;
            	right: -5%;
            	filter: invert(1);
            	opacity: .8;
            }
            .slick-prev {
            		left: -5%;
            	background-image: url(/img/navidad/leftarrow.png);
            	background-size: cover;
            	width: 40px;
            	height: 40px;
            	filter: invert(1);
            	opacity: .8;
            }

            .slick-prev::before, .slick-next::before {
            	display: none;
            }

            .slick-prev:hover, .slick-prev:focus {
            background-image: url(/img/navidad/leftarrow.png);
            background-size: cover;
            }

            .slick-next:hover, .slick-next:focus {
            	background-image: url(/img/navidad/rightarrow.png);
            	background-size: cover;
            }

            .maincarousel p {
            	/* padding: 0 20%; */
            	position: relative;
            	text-align: right;
            	margin-left: 0;
            	padding-right: 5%;
            	margin-top: -5%;
            	float: none;
            	width: 100%;
            	font-family: "Program";
            	font-size: .9em;
            	padding: 0 !important;
            	text-align: right;
            }

            .slick-prev, .slick-next {
            	z-index: 2;
            }


            #textintro.formcont {
            	padding: 0% 0;
            }

            .hojasup{background-image:url(/img/navidad/hojas-up.png); width:100%; height:100px; background-repeat:repeat-x;}
            .hojasdown {
            	background-image: url(/img/navidad/hojas_down.png);
            	width: 100%;
            	height: 100px;
            	background-repeat: repeat-x;
            	float: left;
            	padding: 0;
            	margin: 0;
            	background-position: bottom;
            	margin-top: -100px;
            	z-index: 1;
            	position: relative;
            }

            .esferadorada {
            	position: absolute;
            	width: 20%;
            	right: -5%;
            	margin-top: -10%;
            }
            #textintro h2.llevartit {
            	text-align: center;
            	margin: 0;
            	padding: 0 15%;
            	font-family: "Program",sans-serif;
            	margin-top: -5%;
            	font-size: 1.5em;
            	margin-bottom: 15px;
            	color: #ed1c2c;
            }
            .form-grupo {
            	width: 40%;
            	float: left;
            	padding: 2%;

            	padding-top: 0;
            	padding-left: 0;
            }
            .halfinput {
            	width: 46%;
            	float: left;
            	margin: 0 2%;
            }
            .radios label {
            	width: 20%;
            	float: left;
            	margin: 0;
            	font-size:80%;
            	padding: 0;
            }
            .radios input {
            	width: 20%;
            	float: left;
            	margin-top: .5em;
            }
            #sendpedido {
            	color: #fff;
            	background: #f22528;
            	width: auto;
            	padding: 10px;
            	min-width: none;
            	margin: 0;
            	margin-top: .5em;
            	border: 0;
            	font-family: "Program";
            	text-transform: none;
            	float: none;
            	font-weight: 500;
            	border-radius: 30px;
            	font-size: 20px;
            
            }
            #textintro.leftc{padding: 5%;}

            .cerezas {
            	position: absolute;
            	bottom: -5%;
            	left: -5%;
            	width: 33%;
            }

            .space50 {
            	float: left;
            	width: 100%;
            }

            .form-grupo.reduced {
            	width: 40%;
            	height: auto;
            	display: inline-block;
            }
            .form-grupo.reducedbtn {
            	width: 10%;
            }

            .addbtn {
            	font-size: .65em;
            	color: #fff;
            	background: #f22528;
            	padding: 5px 10px;
            	float: left;
            	margin-top: 15px;
            	position: absolute;
            	cursor: pointer;
            }

            .form-grupo p {
            	margin: 1% 0;
            	padding: 0 !important;
            }

            #datepicker {
            	background-image: url(/img/navidad/calendario.svg);
            	background-size: 20px;
            	background-repeat: no-repeat;
            	background-position: 95% 50%;
            }

            #horario {
            	background-image: url(/img/navidad/reloj.svg);
            	background-size: 20px;
            	background-repeat: no-repeat;
            	background-position: 95% 50%;
            }
            #tabla1, #tabla2 {
            	width: 100%;
            	float: left;
            	padding: 2px 0;
            	max-height: 100px;
            	overflow-y: auto;
            	margin-bottom: 10px;
              list-style: none;
            }
            .plato, .guarnicions {
            	width: 35%;
            	width: 37%;
            	float: left;
            	background: transparent;
            	padding: 1%;
            	min-height: 44px;
            	text-align: center;
            }

            .precio {
            	width: 10%;
            	float: left;
            	background: transparent;
            	padding: 1%;
            	min-height: 44px;
            	text-align: center;
            	margin-left: 1.5%;
            	font-size: .8em;
            	padding-top: 15px;
            	min-width: 50px;
            }
            .plato img, .guarnicions img{
            	width: 15%;
            	float: left;
            }
            .plato p {
            	float: left;
            	width: 75%;
            	padding: 5px !important;
            	font-size: .8em;
            	margin: 5px 0;
            }
            .guarnicions p {
            	float: left;
            	width: 90%;
            	padding: 5px !important;
            	font-size: .8em;
            	margin: 0;
            	padding-top: 10px !important;
            	padding-left: 5% !important;
            }
            .deleterow {
            	width: 20px;
            	height: 20px;
            	background: url(/img/cancelred.png);
            	float: left;
            	background-size: 50%;
            	background-repeat: no-repeat;
            	background-position: center;
            	border-radius: 50%;
            	border: 1px solid #f22528;
            	margin: 10px 0;
            	cursor: pointer;
            }

            #respuesta, #respuesta2, #respuesta {

                width: 100%;

                float: left;

                padding-top: .5em;

                text-align: center;

            }

            .success {

            	width: 100%;

            	background: #DCEDC8;

            	padding: 1em;

            	color: #558B2F;

            	border-radius: 5px;

            }



            .errormsg {

                width: 50%;

                background: #FFCDD2;

                padding: 1em;

                color: #B71C1C;

                border-radius: 5px;

                margin: 1em auto;

            }

            a {
            	text-decoration: none;
            	cursor: pointer;
            }


            #respuesta .errormsg {
            	width: 100%;
            	margin-bottom: 0;
            	margin-top: -5px;
            	padding: .5em;
            	font-size: .85em;
            }

            .bgreds{background:#c14549;}



            .nopointer{pointer-events:none;}

            .personascont {
            	width: 20%;
            	width: 33%;
            }

            .smalltext {
            	font-size: .7em !important;
            	font-family: inherit !important;
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
              font-size: .7em;
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
              bottom: 50%;
              left: auto;
            }

            [data-tooltip]::before, .tooltip::before, .tooltip-top::before {
            	margin-left: 25px;
            	margin-bottom: -10px;
            	border-top-color: #000;
            	border-top-color: hsla(0,0%,20%,.9);
            	border-top-color: #ef3e42;

            }
            /* Horizontally align top/bottom tooltips */
            [data-tooltip]:after,
            .tooltip:after,
            .tooltip-top:after {
              margin-left: -55px
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


            .form-grupo.reducedbtn {
            	width: 14%;
            	display: inline-block;
            	display:none;
            }

            p.redtext {
            	color: #f22528;
            	width: 100%;
            	display: inline-block;
            	text-align: left;
            	margin: 0 !important;
            	padding: 15px 0 !important;
            	font-size: .95em;
            	padding: 10px;
            	padding-top: 0 !important;
            }

            .dd-select {
            	border-radius: 0;
            }
            .selectcontainer {
            	padding-left: 5px !important;
            }

            .number {
            	border: 1px solid #f22528;
            	/* width: 1em; */
            	padding: 0 .4em;
            	border-radius: 50%;
            	font-size: .9em;
            	line-height: 1.3;
            	padding: 0 5px;
            	position: relative;
            	/* top: 0; */
            	display: inline-block;
            	height: 20px;
            	padding: 0 6px;
            	margin-right: 5px;
            }


            #horario .dd-select {
            	background-image: url(/img/navidad/reloj.svg) !important;
            	background-size: 20px !important;
            	background-repeat: no-repeat !important;
            	background-position: 95% 50% !important;
            }

            #horario .dd-pointer-down{display:none;}

            .repite {
            	margin: 0;
            	padding: 5px 5% !important;
            	font-size: .8em;
            	width: 100%;
            	text-align: center;
            	color: #4b672b;
            	border: 1px solid #91ad42;
            	margin-bottom: 10px;
            	background: #e9eed0;
            	display: none;
            	background-image: url(/img/cerrar1.png);
            	background-size: 10px;
            	background-repeat: no-repeat;
            	background-position: 98% center;
            	cursor: pointer;
            	float: left;
            }
            .blink {
            	font-size: 120%;
            	animation: pulse 1s linear 6;
            }
            /* Flash class and keyframe animation */
            .flashit{
              color:#f22528;
            	-webkit-animation: flash linear 1s infinite;
            	animation: flash linear 1.5s infinite;
            	font-size:120%;
            }
            @-webkit-keyframes flash {
            	0% { opacity: 1; }
            	50% { opacity: .5; }
            	100% { opacity: 1; }
            }
            @keyframes flash {
            	0% { opacity: 1; }
            	50% { opacity: .5; }
            	100% { opacity: 1; }
            }

            .numberimg {
            	vertical-align: middle;
            	width: 1.35em;
            	margin-right: .5em;
            }

            #info {
            	float: left;
            	width: 5%;
            	position: relative;
            	padding-top: 7%;
            	margin-right: 2.5%;
            }
            #info img {
            	width: 100%;
            	padding: 15%;
            }
            .cart1, .cart2 {
            	width: 100%;
            	float: left;
            	display:none;
            }

            #contforms {
            	box-shadow: 0 2px 4px 0 rgba(207,207,207,.5);
            	border: solid 1px #ededed;
            	margin-top: 2.5%;
            	border-radius: 20px;
            	background: #fff;
            	text-align: center;
            	width: 100%;
            	float: left;
            	padding: 5%;
            }

            .dd-select {
            	border-radius: 2px;

            	position: relative;
            	cursor: pointer;
            	border: none;
            	border-bottom: solid 1px #ccc;
            }

            #tabla2 .rowp,
            #tabla1 .rowp {
            	width: 70%;
            }
            #tabla2 .plato, #tabla1 .plato, #tabla1 .guarnicion {
            	width: 70%;

            }

            #vipscercano {
            	width: 100%;
            	float: left;
            }
            .btncp {
            	background: #ef3e42;
            	color: #fff;
            	font-size: 1em;
            	font-weight: bold;
            	transition: .3s all ease;
            	width: auto;
            	height: auto;
            	border-radius: 30px;
            	background-color: #f5a623;
            	font-weight: 500;
            	font-family: 'Program',sans-serif;
            	line-height: 1;
            	display: inline-block;
            	float: none;
            	float: left;
            	margin-left: 10px;
            	cursor: pointer;
            	padding: 10px 15px;
            	margin-top: 10px;
            }

            .btncp p{margin:0!important; padding:0!important;}

            #cpclasicos {
            	width: 39%;
            	float: left;
            	height: 45px;
            	border: none;
            	border-bottom: solid 1px #ccc;
            }
            #selects p{display:none;}
            #vipscercano2 {
            	width: 39% !important;
            	float: left;
            	margin-top: 15px;
            	height: 45px;
            	border: none;
            	border-bottom: 0;
            	border-bottom: 1px solid #fff !important;
            	font-size: .9em;
            }
            #tabla2 .plato, #tabla1 .plato, #tabla1 .guarnicion {
            	width: 50%;
            }
            .plato, .guarnicions {
            	width: 35%;
            	width: 17%;
            	float: left;
            	background: transparent;
            	padding: 1%;
            	min-height: 44px;
            	text-align: center;
            }

            .guarnicions p {
            	float: left;
            	width: 90%;
            	padding: 5px !important;
            	font-size: .8em;
            	margin: 0;
            	padding-top: 12px !important;
            	padding-left: 5% !important;
            	font-weight: 500;
            }

            #vipscercano2 {
            	width: 39% !important;
            	float: left;
            	margin-top: 15px;
            	height: 45px;
            	border: none;
            	border-bottom: 0;
            	border-bottom: 1px solid #fff !important;
            }

            #datepicker {
            	background-image: url(/img/navidad/calendario.svg);
            	background-size: 20px;
            	background-repeat: no-repeat;
            	background-position: 95% 50%;
            	border: 0;
            	border-bottom: 1px solid #ccc;
            }

            .maincarousel {
            	padding: 0%;
            	background-image: url(/img/2019/pedidos/Pattern.png);
            	background-size: 90% 80%;
            	background-repeat: no-repeat;
            	background-position: center;
            }

            .dd-selected img {
            	height: 30px;
            	object-fit: contain;
            	margin-top: -7.5px;
            }
            .titimg {
            	width: 100%;
            	margin-top: 0% !important;
            	font-weight: 500;
            	color: #3a3a3a;
            }
            .pesoplato {
            	color: #ed1c2c;
            	padding-left: 5px;
            	font-size: 1.1em;
            }


            @media (max-width:800px){
            .relativecont.dayp1 {
            	margin-bottom: 10%;
            }
            .textopatrios h1 {
            	font-size: 14px;
            	padding: 0 30% 0;
            }
            .textopatrios h2 {
            	font-size: 12px;
            }
            .paso h3 {
            	font-size: 15px;
            }
            .paso h2 {
            	font-size: 25px;
            	margin: 10px 0;
            }
            .titlepaso {
            	font-size: 14px;
            }
            .div7.yellowarrow {
            	min-height: 225px;
            }
            .paso p {
            	font-size: 12px;
            	line-height: 1.2;
            }
            .div7{
            	width: 17.5%;
            }
            .div7.yellowarrow {
              width: 10%;
              background-size: 100%;
            }

            }

            @media (max-width:400px){
            .textopatrios h1 {
              padding: 2.5% 15%;
            }
            .inputpanel h3 {
            	font-size: 14px;
            	padding: 2.5% 10%;
            }
            .textopatrios h2 {
            	padding: 0 18%;
            }
            .div7 {
            	width: 21%;
            }
            .div7.yellowarrow {
            	width: 5%;
            	background-size: 100%;
            	padding: 0;
            	background-size: 110px;
            	background-position: right center;
            }
            .paso h2 {
            	font-size: 20px;
            }
            .paso p {
            	font-size: 10px;
            	margin-bottom: 7.5px;
            }
            .form-grupo {
            	width: 100%;
            	padding: 5% 0;
            }
            .form-grupo.reduced {
            	width: 100%;
            }
            .disabledselect {
            	background: #fff;
            }
            .dd-select {
            	width: 100% !important;
            }
            #vipscercano2 {
            	width: 100% !important;
            	margin-bottom: 20px;
            }
            #info {
            	display: none;
            }
            .tiendas {
            	width: 100%;
            	font-size: 15px;
            }
            .tiendas.line1 {
            	border-right: 0;
            }
            .tiendascont {
            	margin-bottom: 10%;
            }

            }

            </style>
            <div class="relativecont dayp2">
              <div class="greencircle">
                <div class="textopatrios">
                	<img src="/img/2019/patrios/Titular-Comidas-min.png" class="titulopatrios">
                  <h1>Vips en tu casa, pídelos en línea y recógelos en tienda</h1>
                </div>
              </div>

            </div>


					<div class="titulodomicilio">
            <h1>¡Da el grito con los platillos patrios de Vips&reg;!</h1>
          </div>

          <div class="pasos">
            <div class="div7 paso">
              <h3>Paso</h3>
              <h2>1</h2>
              <img src="/img/2019/patrios/lunch.svg">
              <p class="titlepaso">Aparta</p>
              <p>Aparta en línea o en tu Vips favorito</p>
            </div>
            <div class="div7 yellowarrow"></div>
            <div class="div7 paso">
              <h3>Paso</h3>
              <h2>2</h2>
              <img src="/img/2019/patrios/pay.svg">
              <p class="titlepaso">Paga</p>
              <p>Paga en tu Vips más cercano</p>
            </div>
            <div class="div7 yellowarrow"></div>
            <div class="div7 paso">
              <h3>Paso</h3>
              <h2>3</h2>
              <img src="/img/2019/patrios/order.svg">
              <p class="titlepaso">Recoge</p>
              <p>Recoge tu pedido</p>
            </div>
            <div class="div7 yellowarrow"></div>
            <div class="div7 paso">
              <h3>Paso</h3>
              <h2>4</h2>
              <img src="/img/2019/patrios/confetti.svg">
              <p class="titlepaso">Celebra</p>
              <p>¡Disfruta de los deliciosos platillos en una gran fiesta!</p>
            </div>
          </div>


					<div class="carouselpatrios">
            <div>
							<a><img src="/img/2019/patrios/platos/Chile-Nogada-min.png" pagespeed_url_hash="2023739024" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">

							<p class="titleplato">Chile en nogada </p>
							<p class="calsplato">(1070 Cal)</p>
							<p class="descplato">Nuestra tradicional receta de chile poblano relleno de carne y frutas, bañado en salsa nogada</p>
							</a>
						</div>

						<div>
							<a><img src="/img/2019/patrios/platos/Pechuga-oaxaca-min.png" pagespeed_url_hash="4258230293" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">

							<p class="titleplato">Pechuga Oaxaca </p>
							<p class="calsplato">(150g / 1175 Cal)</p>
							<p class="descplato">Rellena con queso Oaxaca, bañada con nuestro mole especial, arroz a la mexicana, frijoles campesinos y plátanos fritos</p>
							</a>
						</div>

            <div>
							<a><img src="/img/2019/patrios/platos/Vipzasos-de-Chorizo-min.png" pagespeed_url_hash="342512244" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<p class="titleplato">Vipsazos de papa con chorizo</p>
							<p class="calsplato">(3 pzas / 641 Cal)</p>
							<p class="descplato">Los clásicos pambazos hechos con el pan especial de Vips, acompañados de salsa verde</p>
							</a>
						</div>

					</div>

          <div class="inputpanel">
            <?php
              if($sesion == 1){
            ?>


            <div id="contforms">

            	<form id="registronfl" onSubmit="return false">

            	<div class="redline"></div>
            	<h2 style="text-align: left; margin-bottom: 15px; color:#222;">Cada platillo contiene <span class="flashit">3 porciones</span></h2>
            		<p class="repite" googl="true">¿Quieres pedir otro producto? Vuelve a repetir el proceso y tus platillos se irán agregando a tu orden</p>

            	<div class="selectcontainer">

            	<div class="form-grupo reduced">
            	<p class="redtext"><img src="/img/1.png" class="numberimg">Elige tu platillo</p>
                  <select id="select1" required>
              			<option selected="selected" data-name=""
              				>Elige tu platillo</option>
              			<option value="1" data-imagesrc="/img/2019/patrios/platos/Chile-Nogada-min.png"
              				data-description="$399" data-price="399" data-name="Chile en nogada" data-guarnicion ="0">Chile en nogada </option>
              			<option value="2"  data-imagesrc="/img/2019/patrios/platos/Pechuga-oaxaca-min.png"
              				data-description="$389" data-price="389" data-name="Pechuga Oaxaca" data-guarnicion ="0">Pechuga Oaxaca</option>

              				<option value="3"  data-imagesrc="/img/2019/patrios/platos/Vipzasos-de-Chorizo-min.png"
              				data-description="$149" data-price="149" data-name="Vipsazos de papa con chorizo" data-guarnicion ="0">Vipsazos de papa con chorizo</option>

              		</select>


            	</div>

            	<div id="info" class="tooltip-top" data-tooltip="Todos nuestros paquetes están pensados para 3 personas"><img src="/img/infoicon.png"></div>

            	<div class="form-grupo  reduced">
            	<p class="redtext"><img src="/img/2.png" class="numberimg">Elige cantidad</p>
                <select id="select2" disabled>
                  <option selected="selected" data-name="">Elige cantidad</option>
                  <option value="1" data-description=""  data-imagesrc="" data-price="1" data-name="1">1</option>
                  <option value="2" data-description=""  data-imagesrc="" data-price="2" data-name="2">2</option>
                  <option value="3" data-description=""  data-imagesrc="" data-price="3" data-name="3">3</option>
                  <option value="4" data-description=""  data-imagesrc="" data-price="4" data-name="4">4</option>
                  <option value="5" data-description=""  data-imagesrc="" data-price="5" data-name="5">5</option>

                </select>
            	</div>


            	<input type="hidden" id="guarnicionval" value="" data-img="" data-price="" data-name="">
            	<input type="hidden" id="platilloval" value="" data-img="" data-price="" data-name="">
            	<input type="hidden" id="extraval" value="" data-img="" data-price="" data-name="">
            	<input type="hidden" id="personasval" value="" data-cantidad="">
            	<input type="hidden" id="personasval" value="" data-cantidad="">


            	<input type="hidden" id="subtotal" value="000.00">
            	<input type="hidden" id="descuento" value="0">
            	<input type="hidden" id="total" value="000.00">


            	<input type="hidden" id="userval" value="<?php echo $uid; ?>">
            	<input type="hidden" id="nombreval" value="<?php echo $nombre; ?>">
            	<input type="hidden" id="apellidoval" value="<?php echo $apellido; ?>">
            	<input type="hidden" id="direccionval" value="<?php echo $direccioncompleta; ?>">
            	<input type="hidden" id="telval" value="<?php echo $telefono; ?>">
            	<input type="hidden" id="correoval" value="<?php echo $correo; ?>">
            	<input type="hidden" id="vipscercano" value="<?php echo $_SESSION['vipscercano']; ?>">
            	<input type="hidden" id="referencias" value="<?php echo $_SESSION['referencias']; ?>">

            	<div class="form-grupo personascont" style=" display:none;">
            	<p class="redtext"><span class="number">3</span>Elige las personas</p>
            		<select  id="personas" class="fieldn">
            			<option value=""># personas</option>
            			<option value="4" data-cantidad="1">4</option>
            			<option value="8" data-cantidad="2">8</option>
            			<option value="12" data-cantidad="3">12</option>
            			<option value="16" data-cantidad="4">16</option>
            			<option value="20" data-cantidad="5">20</option>
            			<option value="24" data-cantidad="6">24</option>
            			<option value="28" data-cantidad="7">28</option>
            			<option value="32" data-cantidad="8">32</option>
            		</select>

            	</div>

            	<div class="form-grupo  reducedbtn tooltip-top" data-tooltip="Da click para agregar a tu orden">
            		<a class="addbtn" id="add1"> + Agregar</a>
            	</div>


            	<h2 class="cart1">Tu carrito</h2>
            		<ul id="tabla1">


            	</ul>


            	<div class="form-grupo  reduced tooltip-top" data-tooltip="Agrega otras guarniciones (4 personas) o un delicioso cheesecake (8 rebanadas)" style="display: none;">
            		<a class="addbtn" id="add2">+ Agregar</a>
            	</div>

            	<h2 class="cart2">Tu carrito</h2>
            	<ul id="tabla2">


            	</ul>

            	</div>

            		<p class="redtext" style="padding-left: 5px !important;">¿Cuándo quieres que esté lista tu cena? </p>

            	<div class="form-grupo" style="padding-left: 5px !important;">
            		<input type="text" placeholder="Fecha de entrega" id="datepicker" class="fieldn">

            	</div>

            	<div class="form-grupo">

                <select  id="horario" class="fieldn">
            			<option value="">Horario de entrega</option>
            			<option value="10:00 am - 11:00 am">10:00 am - 11:00 am</option>
            			<option value="11:00 am - 12:00 pm">11:00 am - 12:00 pm</option>
                  <option value="12:00 pm - 01:00 pm">12:00 pm - 01:00 pm</option>
            			<option value="01:00 pm - 02:00 pm">01:00 pm - 02:00 pm</option>
                  <option value="02:00 pm - 03:00 pm">02:00 pm - 03:00 pm</option>
            			<option value="03:00 pm - 04:00 pm">03:00 pm - 04:00 pm</option>
            			<option value="04:00 pm - 05:00 pm">04:00 pm - 05:00 pm</option>
                  <option value="05:00 pm - 06:00 pm">05:00 pm - 06:00 pm</option>
                  <option value="06:00 pm - 07:00 pm">06:00 pm - 07:00 pm</option>
                  <option value="07:00 pm - 08:00 pm">07:00 pm - 08:00 pm</option>
                  <option value="08:00 pm - 09:00 pm">08:00 pm - 09:00 pm</option>
            		</select>


            	</div>

            	<div class="textcp" id="vipscercano" class="fieldn">
            		<p class="redtext">Vips donde recogerás tu pedido</p>
            		<div id="selects">
                  <select id="vipscercano2" class="fieldn">
                      <option value="Vips Miramontes">Vips Miramontes</option>
                      <option value="Vips Miramontes">Vips Cipreses</option>
                      <option value="Vips División del Norte">Vips División del Norte</option>
                      <option value="Vips Loma Estrella">Vips Loma Estrella</option>
                      <option value="Vips Tláhuac">Vips Tláhuac</option>
                      <option value="Vips Huipulco">Vips Huipulco</option>
                      <option value="Vips Cuemanco">Vips Cuemanco</option>
                      <option value="Vips Villa Coapa">Vips Villa Coapa</option>
                      <option value="Vips Vaqueritos">Vips Vaqueritos</option>

                  </select>

                </div>


            		</div>



            	<div class="form-grupo" style="text-align: right; width:100%; line-height: 1.1;">
            		<p style="display: none;">Subtotal: $<span id="subtotalv">000.00</span></p>
            		<p class="descuentop">Descuento: -<span id="descuentov">0</span>%</p>
            		<p>Total: $<span id="totalv">000.00</span></p>

            	</div>

            	<div class="form-grupo" style="text-align: center; width:100%;">
            	<div id="respuesta"></div>
            		<button id="sendpedido" value= "Enviar" class="NavidadEnviarPedido enviapedido">Realizar pedido</button>

            	</div>

            	</form>

            	</div>

            <?php
              }

              else{

                  echo '
                  <h2 googl="true">¡Ordena con Vips!</h2>
                  <h3>Para comenzar con tu pedido, <br>es necesario crear tu cuenta en Vips </h3><br>
                  <a id="sendbtncp" class="openpoplogin">Inicia sesión o Regístrate</a>
                  ';

              }

            ?>
          </div>

        <div class="titulodomicilio" style="margin-top: 2.5%;">
          <h1>Consulta tiendas participantes</h1>
        </div>

        <div class="tiendascont">
          <div class="tiendas line1">
            <p>Vips Miramontes</p>
            <p>Vips Cipreses</p>
            <p>Vips División del Norte</p>
          </div>
          <div class="tiendas line1">
            <p>Vips Loma Estrella</p>
            <p>Vips Tláhuac</p>
            <p>Vips Huipulco</p>
          </div>
          <div class="tiendas">
            <p>Vips Cuemanco</p>
            <p>Vips Villa Coapa</p>
            <p>Vips Vaqueritos</p>
          </div>
        </div>


			</div>
		</div>
	</div>
</main>
<script src="/js/wow.min.js"></script>
</script><script src='/slick/slick.min.js'></script>
<script>
$( window ).on( "load", function() {
  new WOW().init();
});
$( document ).on( "ready" , function() {
	$('.carouselpatrios').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		lazyLoad: 'ondemand',
		accessibility: true,
		arrows: false,
		dots:true,
		autoplay: true,
		responsive: [
			{
			breakpoint: 800,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			} ],
		autoplaySpeed: 3000,
	});

	setTimeout(function(){
		$(window).trigger('resize');
	}, 1000)

});


</script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<style>
	.errorinput {
		box-shadow: #d95c5c 1px 1px 6px;
		padding-left: 5px;
		border:none!important;
	}
	div.errorinput {
		box-shadow: #d95c5c 1px 1px 6px;
		float: left;
		margin-bottom: 10px;
		padding: 0;
	}
	.ui-datepicker .ui-datepicker-header {
		position: relative;
		padding: .2em 0;
		background: #f22528;
		color: #fff;
	}
	.dd-desc {
		color: #aaa;
		display: block;
		overflow: hidden;
		font-weight: normal;
		line-height: 1.4em;
		font-size: .8em !important;
		width: 90%;
		float: left;
		position: absolute;
		text-align: right;
	}
	.dd-container {
		width: 100% !important;
	}
	.dd-select {
		max-width: 100%;
		background: #fff !important;
}

.dd-container label {
	color: #3e3e3e;
	width: 80%;
	float: left;
	padding-bottom: 0;
	padding-top: 0;
	font-size: .9em;
	text-align: left;
	padding-right: 10%;
	margin-top: 0;
	position: relative;
	line-height: 1.25 !important;
	max-width: 100%;
	left: 0;
	font-weight: 100;
}
.dd-option-image, .dd-selected-image {
	vertical-align: middle;
	float: left;
	margin-right: 5px;
	max-width: 64px;
	width: 15%;
}

.dd-select .dd-desc {
	color: transparent;
}

.dd-options .dd-desc {
		color: #000;
}


.dd-selected img {
	height: 30px;
	object-fit: contain;
}

.plus {
	width: 20px;
	float: left;
	padding: 5px !important;
	margin: 10px;
	color: #222;
	font-size: .9em;
}
.rowp {
	width: 100%;
	float: left;
	margin-bottom: 5px;
	background: #fff;
	border-radius: 10px;
	border: 1px solid #ededed;
	box-shadow: 0 2px 4px 0 rgba(207,207,207,.5);
}


.disabledbtn {
	background: #bcbcbc;
	opacity:.8;
	pointer-events:none;
	cursor: not-allowed;
}
.disabledselect {
	background: #bcbcbc;
	opacity:.5;
	pointer-events:none;
	cursor: not-allowed;
}

.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
	border: none;
	background: #fff;
}

.persons {
	width: 20%;
	float: left;
	background: #f5f5f5;
	padding: 1%;
	min-height: 44px;
	font-size: .6em;
	text-align: center;
}


.ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl {
	border-top-left-radius: 0;
}
.ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr {
	border-top-right-radius: 0;
}
.ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl {
	border-bottom-left-radius: 0;
}
.ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
	border-bottom-right-radius: 0;
}

.ui-datepicker .ui-datepicker-header {
	position: relative;
	padding: .2em 0;
	background: #fff;
	color: #f22528;
	border: none;
}

#ui-datepicker-div{
	font-size: 100%;
	font-family: inherit;
	opacity:.98;
}


::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: black;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: black;
}

.descuentop{
	color: #4c993c;
	font-size: 118%;
	display: none;
}

.notice {
	width: 44%;
	float: left;
	font-size: .6em;
	/* border: 1px solid #3e8435; */
	padding-left: 5%;
	background-image: url(/img/iconnotice.png);
	background-repeat: no-repeat;
	background-size: 5%;
	background-position: 2% center;
	opacity: .7;
	min-height: 44px;
	padding: 1% 5%;
}
.notice p {
	padding: 0 !important;
	width: 100%;
	float: left;
	margin: 0;
	text-align: center;
	color: #4b672b;
}

p.redtext {
	color: #f22528;
	width: 100%;
	display: inline-block;
	text-align: left;
	margin: 0 !important;
	padding: 15px 0 !important;
	font-size: .95em;
	padding: 10px;
	padding-top: 0 !important;
	font-weight: 500;
	margin-bottom: 5px !important;
}
</style>
<script>


$( window ).on( "load", function() {
  $('form input').on('keypress', function(e) {
    return e.which !== 13;
});
});


  $('#sendpedido').click(function(event){
	$("#respuesta").html("");
	$("#respuesta").hide();
	$("#respuesta").show();
	$('.fieldn').removeClass('errorinput');
	$('#cpclasicos').removeClass('errorinput');
	$(".selectcontainer").removeClass("errorinput");
	$('div[class^="dd-container"]').removeClass("errorinput");

	var user = $("#userval").val();
	var nombre = $("#nombreval").val();
	var apellido = $('#apellidoval').val();
	var correo  = $("#correoval").val();
	var tel  = $("#telval").val();
	var direccion = $("#direccionval").val();
	var entrega = $("#datepicker").val();
	var horario = $("#horario input").val();
	var vips = $("#vipscercano2 input").val();
	var referencias = $("#referencias").val();
	var porcentaje = $("#descuentov").text();
	var subtotal = $("#subtotalv").text();
	var descuento = (subtotal/100)*parseInt(porcentaje);

	var total = $("#totalv").text();
	var error = false;

	if (entrega == '' || horario == '' || vips == ''){

		$("#respuesta").append("<div class='errormsg'>Completa los campos</div>");

		$.each($('.fieldn'),function() {
		   if ($(this).val().length == 0) {
			$(this).addClass("errorinput");
		   }
		});
		$.each($('.dd-container input'),function() {
		   if ($(this).val().length == 0) {
			$(this).closest('div[class^="dd-container"]').addClass("errorinput");
		   }
		});
		error = true;
	}

	if($('ul#tabla1 li').length >= 1){

		var paquetes = [];
		$('#tabla1 span').each(function(){
		paquetes.push($(this).text() + " ");
		});
		string1 = paquetes.toString();
		string1 = string1.replace(/,/g, "\n");

		var payload = [];
		$('#tabla1 .plato').each(function(){
		payload.push($(this).attr("data-pay") + "");
		});
		stringpay = payload.toString();
		stringpay = stringpay.replace(/}{/g, "},{");
		//alert(string1);
		var paquetesval = string1;
		var payloadval = stringpay;
		var paquetesli = 1;


	}

	else{
		var paquetesli = 0;
		var paquetesval = "Ninguno";
	}


	if($('ul#tabla2 li').length >= 1){

		var extras = [];
		$('#tabla2 span').each(function(){
		extras.push($(this).text() + " ");
		});
		string2 = extras.toString();
		string2 = string2.replace(/,/g, "\n");
		//alert(string2);
		var extrasval = string2;

		var extrasli = 1;

	}

	else{
			var extrasli = 0;
			var extrasval = "Ninguno";
	}

	if(extrasli == 0 && paquetesli == 0 ){
		//alert("Selecciona al menos un paquete de platillo y guarnición o un extra");
		$("#respuesta").append("<div class='errormsg'>Selecciona al menos un platillo</div>");

		$(".selectcontainer").addClass("errorinput");

		error = true;
	}

	if(cp == 0 ){
		//alert("Selecciona al menos un paquete de platillo y guarnición o un extra");
		$("#respuesta").append("<div class='errormsg'>Ingresa tu C.P. para seleccionar tu Vips más cercano</div>");

		$("#cpclasicos").addClass("errorinput");

		error = true;
	}


	if (error == false){

		$("#respuesta").append("<div class='success' style='width: 100%; padding-left:20%; padding-right: 10%; background-image: url(/img/loadreg.gif); background-size: 4%; background-repeat: no-repeat; background-position: 95% center;'>Estamos enviando tu pedido, por favor espera un momento...</div>");

		$("#sendpedido").prop('disabled', true);
		$("#sendpedido").addClass('nopointer');
		$("#sendpedido").hide();

		var datas = "{'user':'" + user + "', 'nombre':'" + nombre + "', 'apellido':'" + apellido + "','correo':'" + correo + "', 'tel':'" + tel + "', 'direccion':'" + direccion + "', 'paquetes':'" + paquetesval + "', 'extras':'" + extrasval + "', 'subtotal':'" + subtotal + "', 'porcentaje':'" + porcentaje+ "', 'descuento':'" + descuento + "', 'total':'" + total + "', 'entrega':'" + entrega + "', 'horario':'" + horario + "', 'vips':'" + vips + "'}";

		//alert(datas);

      $.ajax({

			type: "POST",
			dataType: 'html',
			url: "/pedidos-especiales/enviar_pedido.php",
			data: "user="+user+"&nombre="+nombre+"&apellido="+apellido+"&correo="+correo+"&tel="+tel+"&direccion="+direccion+"&paquetes="+paquetesval+"&extras="+extrasval+"&subtotal="+subtotal+"&porcentaje="+porcentaje+"&descuento="+descuento+"&total="+total+"&entrega="+entrega+"&horario="+horario+"&vips="+vips+"&referencias="+referencias+"&payload="+payloadval,

      success:function(data){
				gtag('event', 'Enviar pedido', {
				 'event_category': 'Pedidos Especiales',
				 'event_label': 'Pedido Enviado - Web'
				});
				$('#respuesta').html(data);
				$("#sendpedido").prop('disabled', false);
				$("#sendpedido").removeClass('nopointer');
				$("#sendpedido").show();
				 setTimeout(function() {
                $('.success').slideUp("slow");
				$('.errormsg').slideUp("slow");
            }, 15000);

            }
    });

		}
    });

$( document ).on( "ready" , function() {
		checkselect();
});

</script>
<script>

	function updateTotal(){
		$("subtotal").val($("subtotalv").text());
		$("descuento").val($("descuentov").text());
		$("total").val($("totalv").text());


	}

	function checkselect(){

		if ($('#platilloval').attr("data-name") == '')
		{
		$("#select2").addClass("disabledselect");
		}

		else{
			$("#select2").removeClass("disabledselect");
		}

		if ($('#guarnicionval').attr("data-name") == '')
		{
		$("#personas").addClass("disabledselect");
		}

		else{
			$("#personas").removeClass("disabledselect");
		}

	}

	function checkbtn1(){

		if ($('#platilloval').attr("data-name") == '' || $('#guarnicionval').attr("data-name") == '' || $('#personasval').val() == '' )
		{
		$("#add1").addClass("disabledbtn");
		}

		else{
			$("#add1").removeClass("disabledbtn");
		}

	}

	function checkbtn2(){

		if ($('#extraval').attr("data-name") == '')
		{
		$("#add2").addClass("disabledbtn");
		}

		else{
			$("#add2").removeClass("disabledbtn");
		}

	}

	function clearvals1(){

		$('#platilloval').attr("data-name", "");
		$('#guarnicionval').attr("data-name", "");
		$('#personasval').attr("data-cantidad", "");
	}

	function clearvals2(){

		$('#extraval').attr("data-name", "");
	}

	function checkCart1(){

		if($('ul#tabla1 li').length >= 1){
		$(".cart1").fadeIn();

		}

		else{
			$(".cart1").fadeOut();
		}



	}

	function checkCart2(){

		if($('ul#tabla2 li').length >= 1){
		$(".cart2").fadeIn();

		}

		else{
			$(".cart2").fadeOut();
		}



	}

	function addrow1(){

		if ($('#platilloval').attr("data-name") != '' && $('#guarnicionval').attr("data-name") != '' )
		{
		var random = Math.floor(1000 + Math.random() * 9000);

	/*var string1 ="<li class='rowp' id='row"+ random +"'><div class='plato'><img src='"+$("#platilloval").attr("data-img")+"'><p>"+$("#platilloval").attr("data-name")+"</p></div><p class='plus'>+</p><div class='guarnicions'><img src='"+$("#guarnicionval").attr("data-img")+"'><p>"+$("#guarnicionval").attr("data-name")+"</p></div><p class='plus'>+</p><div class='persons'><p>"+$("#personasval").val()+" personas</p></div><div class='deleterow' data-del='"+ random +"' data-price='"+ parseInt($("#platilloval").attr("data-price"))*parseInt($("#personasval").attr("data-cantidad")) +"'></div><span style='display:none;'>"+$("#platilloval").attr("data-name")+" con "+$("#guarnicionval").attr("data-name") + " - $" + parseInt($("#platilloval").attr("data-price"))*parseInt($("#personasval").attr("data-cantidad"))+" - para " + $("#personasval").val()+" personas</span></li>";
	*/
	var stringplatos = '{"user":"' + $('#userval').val() + '", "nombre":"' + $('#platilloval').attr('data-name') + '", "cantidad":"' + $('#guarnicionval').attr('data-price') + '","preciou":"' + $('#platilloval').attr('data-price') + '", "total":"' + parseInt($('#platilloval').attr('data-price'))*parseInt($('#guarnicionval').attr('data-price')) + '", "clave":"' + $('#platilloval').attr('data-name') + '", "foto":"' + $('#platilloval').attr('data-img') + '"}';

	var string1 ="<li class='rowp' id='row"+ random +"'><div class='plato' data-pay='"+stringplatos+"'><img src='"+$("#platilloval").attr("data-img")+"'><p>"+$("#platilloval").attr("data-name")+"</p></div><p class='plus'>Cantidad</p><div class='guarnicions'><img src='"+$("#guarnicionval").attr("data-img")+"'><p>"+$("#guarnicionval").attr("data-name")+"</p></div><div class='precio'>$"+ parseInt($("#platilloval").attr("data-price"))*parseInt($("#guarnicionval").attr("data-price"))+"</div><div class='deleterow' data-del='"+ random +"' data-price='"+ parseInt($("#platilloval").attr("data-price"))*parseInt($("#guarnicionval").attr("data-price")) +"'></div><span style='display:none;'>"+ $("#guarnicionval").attr("data-name") + " "+ $("#platilloval").attr("data-name") + " - $" + parseInt($("#platilloval").attr("data-price")) * parseInt($("#guarnicionval").attr("data-price"))+"</span></li>";




	$("#tabla1").append(string1);
	$(".repite").slideDown();
	var height = $("#tabla1").height();
	$('#tabla1').animate({scrollTop: height});

	var subtotal = $("#subtotalv").text();
	var descuento = $("#descuentov").text();
	var total = $("#totalv").text();
	var precio1 = parseInt($("#platilloval").attr("data-price"))*parseInt($("#guarnicionval").attr("data-price"));
	var precio2 = $("#guarnicionval").attr("data-price");
	//var cantidad = $("#personasval").attr("data-cantidad");
	//subtotal = parseInt(subtotal) + (parseInt(precio1) * parseInt(cantidad));
	subtotal = parseInt(subtotal) + parseInt(precio1);
	var percent = (subtotal/100)*parseInt(descuento);
	total = subtotal - percent;
	if(subtotal <0){
		subtotal = 0;
		}
	if(total <0){
		total = 0;
	}

	$("#subtotalv").html(subtotal);
	$("#totalv").html(total);

	$('#select1').ddslick('select', {index: 0 });
	$('#select2').ddslick('select', {index: 0 });
	$('#personas').ddslick('select', {index: 0 });
  $('#vipscercano2').ddslick({
    showSelectedHTML: true,
  });
	clearvals1();
	checkbtn1();
	updateTotal();
	checkCart1();

		}

}//end addrow1

	function addrowRomeritos(){

		if ($('#platilloval').attr("data-name") == 'Romeritos (1 kg) con tortitas de camarón (12 pzas)')
		{
		var random = Math.floor(1000 + Math.random() * 9000);

	/*var string1 ="<li class='rowp' id='row"+ random +"'><div class='plato'><img src='"+$("#platilloval").attr("data-img")+"'><p>"+$("#platilloval").attr("data-name")+"</p></div><p class='plus'>+</p><div class='guarnicions'><img src='"+$("#guarnicionval").attr("data-img")+"'><p>"+$("#guarnicionval").attr("data-name")+"</p></div><p class='plus'>+</p><div class='persons'><p>"+$("#personasval").val()+" personas</p></div><div class='deleterow' data-del='"+ random +"' data-price='"+ parseInt($("#platilloval").attr("data-price"))*parseInt($("#personasval").attr("data-cantidad")) +"'></div><span style='display:none;'>"+$("#platilloval").attr("data-name")+" con "+$("#guarnicionval").attr("data-name") + " - $" + parseInt($("#platilloval").attr("data-price"))*parseInt($("#personasval").attr("data-cantidad"))+" - para " + $("#personasval").val()+" personas</span></li>";
	*/

	var string1 ="<li class='rowp' id='row"+ random +"'><div class='plato'><img src='"+$("#platilloval").attr("data-img")+"'><p>"+$("#platilloval").attr("data-name")+"</p></div><div class='precio'>$"+ $("#platilloval").attr("data-price") +"</div><div class='deleterow' data-del='"+ random +"' data-price='"+ $("#platilloval").attr("data-price") +"'></div><span style='display:none;'>"+$("#platilloval").attr("data-name")+" - $" + $("#platilloval").attr("data-price")+"</span><div class='notice'><p>Este platillo no incluye guarnición, si quieres una puedes agregarla como adicional.</p></div></li>";

	$("#tabla1").append(string1);
	$(".repite").slideDown();
	var height = $("#tabla1").height();
	$('#tabla1').animate({scrollTop: height});

	var subtotal = $("#subtotalv").text();
	var descuento = $("#descuentov").text();
	var total = $("#totalv").text();
	var precio1 = $("#platilloval").attr("data-price");
	var precio2 = $("#guarnicionval").attr("data-price");
	//var cantidad = $("#personasval").attr("data-cantidad");
	//subtotal = parseInt(subtotal) + (parseInt(precio1) * parseInt(cantidad));
	subtotal = parseInt(subtotal) + parseInt(precio1);
	var percent = (subtotal/100)*parseInt(descuento);
	total = subtotal - percent;
	if(subtotal <0){
		subtotal = 0;
		}
	if(total <0){
		total = 0;
	}

	$("#subtotalv").html(subtotal);
	$("#totalv").html(total);

	$('#select1').ddslick('select', {index: 0 });
	$('#select2').ddslick('select', {index: 0 });
	$('#personas').ddslick('select', {index: 0 });
	clearvals1();
	checkbtn1();
	updateTotal();
	checkCart1();

		}

}//end addrow1


	function addrow2(){

	if ($('#extraval').attr("data-name") != '')
	{
	var random2 = Math.floor(1000 + Math.random() * 9000);

	var string2 ="<li class='rowp' id='row"+ random2 +"'><div class='plato'><img src='"+$("#extraval").attr("data-img")+"'><p>"+$("#extraval").attr("data-name")+"</p></div><div class='precio'>$"+ $("#extraval").attr("data-price") +"</div><div class='deleterow' data-del='"+ random2 +"' data-price='"+ $("#extraval").attr("data-price") +"'></div><span style='display:none;'>"+$("#extraval").attr("data-name")+ " - $" + $("#extraval").attr("data-price")+"</span></li>"

	$("#tabla2").append(string2);
	var height2 = $("#tabla2").height();
	$('#tabla2').animate({scrollTop: height2});

	var subtotal = $("#subtotalv").text();
	var descuento = $("#descuentov").text();
	var total = $("#totalv").text();
	var precio3 = $("#extraval").attr("data-price");
	subtotal = parseInt(subtotal) + parseInt(precio3);
	var percent = (subtotal/100)*parseInt(descuento);
	total = subtotal - percent;

	if(subtotal <0){
		subtotal = 0;
	}
	if(total <0){
		total = 0;
	}
	$("#subtotalv").html(subtotal);
	$("#totalv").html(total);

	$('#select3').ddslick('select', {index: 0 });
	clearvals2();
	checkbtn2();
	updateTotal();
	checkCart2();

	}

}//end click add2

$(function () {
	checkbtn1();
	checkbtn2();
	checkselect();

	$('#horario').ddslick({
    showSelectedHTML: true,
	    onSelected: function(data){
			if($("#horario input").val()!=''){
				$("#horario").removeClass("errorinput");

			}

    }


});
$('#vipscercano2').ddslick({
  showSelectedHTML: true,
});
/*$('#vipscercano').ddslick({
    showSelectedHTML: true
});*/

$('#select1').ddslick({
    showSelectedHTML: true,
    onSelected: function(data){

        //alert(data.selectedData.value);
		 $(".selectcontainer").removeClass("errorinput");
		 $('#platilloval').val(data.selectedData.value);
		 $('#platilloval').attr("data-img", $(data.original[0].children[data.selectedIndex]).attr('data-imagesrc'));
		 $('#platilloval').attr("data-price", $(data.original[0].children[data.selectedIndex]).attr('data-price'));
		 $('#platilloval').attr("data-name", $(data.original[0].children[data.selectedIndex]).attr('data-name'));
		  addrowRomeritos();
		 checkbtn1();
		 checkselect();

		 //alert( $('#extraval').val());
    }
});

$('#select2').ddslick({
    showSelectedHTML: true,
    onSelected: function(data){
        //alert(data.selectedData.value);
		 $('#guarnicionval').val(data.selectedData.value);
		 $('#guarnicionval').attr("data-img", $(data.original[0].children[data.selectedIndex]).attr('data-imagesrc'));
		 $('#guarnicionval').attr("data-price", $(data.original[0].children[data.selectedIndex]).attr('data-price'));
		 $('#guarnicionval').attr("data-name", $(data.original[0].children[data.selectedIndex]).attr('data-name'));
		  addrow1();

		 checkbtn1();
		 checkselect();

		 //alert( $('#extraval').val());
    }
});
$('#select3').ddslick({
    showSelectedHTML: true,
    onSelected: function(data){
        //alert(data.selectedData.value);
		 $(".selectcontainer").removeClass("errorinput");
		 $('#extraval').val(data.selectedData.value);
		 $('#extraval').attr("data-img", $(data.original[0].children[data.selectedIndex]).attr('data-imagesrc'));
		 $('#extraval').attr("data-price", $(data.original[0].children[data.selectedIndex]).attr('data-price')); $('#extraval').attr("data-name", $(data.original[0].children[data.selectedIndex]).attr('data-name'));
		 addrow2();
		 checkbtn2();

		 //alert( $('#extraval').val());
    }
});



$('#personas').ddslick({
    showSelectedHTML: true,
    onSelected: function(data){
        //alert(data.selectedData.value);
		 $('#personasval').val(data.selectedData.value);
		  $('#personasval').attr("data-cantidad", $(data.original[0].children[data.selectedIndex]).attr('data-cantidad'));
		  addrow1();
		 checkbtn1();

		 //alert( $('#extraval').val());
    }
});

$('#datepicker').datepicker({
    maxDate: '2019-10-14',
    minDate: '+3',
	closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
});//end datepicker


$("#registronfl *").click(function(){
	checkbtn1();
	checkbtn2();

});//end click add1


//$("#add1").click(function(){




//$("#add2").click(function(){




$("body").on("click", ".deleterow", function(){
	$(this).remove();
	var id = "#row" + $(this).attr("data-del");
	var subtotal = $("#subtotalv").text();
	var descuento = $("#descuentov").text();
	var total = $("#totalv").text();
	var preciodel = $(this).attr("data-price");
	subtotal = parseInt(subtotal) - parseInt(preciodel);
	var percent = (subtotal/100)*parseInt(descuento);
	total = subtotal - percent;

	if(subtotal <0){
		subtotal = 0;
	}
	if(total <0){
		total = 0;
	}
	$("#subtotalv").html(subtotal);
	$("#totalv").html(total);
	updateTotal();

	$(id).fadeOut(600);


	setTimeout(function(){
	  $(id).remove();
	  	checkCart1();
		checkCart2();
	}, 500);



});//end click .deleterow


$("body").on("click", ".repite", function(){
$(".repite").fadeOut("slow");
	setTimeout(function(){
	$(".repite").removeClass("repite");
	}, 1000);

});//end click .deleterow

$('#datepicker').focus(function(e) {
    $(this).blur();
});

});//end function
</script>


<?php
include('footer-bootstrap.php');
?>
