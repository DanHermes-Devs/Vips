<?php

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

}

else{

	header('Location: /vipstorias');

	exit(0);

}

if($avatarimg=="/img/svg/cuenta.svg"){$avatarimg="/img/svg/avatar.svg";}
if(	$sesion == true){$showlink ="hidden";}
else{$showlink ="";}

?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
<link rel="stylesheet" href="/css/slickvideo.css">


<div class="main">



	<?php include('lateral.php');?>



	<main role="main">





		<style>


		.hidden{display:none;}

		[data-div="#experienciashome"]*{  fill: #ff0025!important; transition: all .4s ease;}

		[data-div="#experienciashome"] path{  fill: #ff0025!important; transition: all .4s ease;}

		[data-div="#experienciashome"] *{color: #ff0025!important;}





		.headblog {

			margin-top: 8vh;

			width: 100%;

		}



		.quote {

			font-weight: bold;

			font-size: .8em;

			text-align: center;

			padding: 2em 1em;

		}



		.comilla {

			font-size: 3em;

			left: 1;

			position: absolute;

			margin-top: -.15em;

			font-family: sans-serif;

		}

		.avatarblog {
	width: 24%;
	float: left;
	margin-top: 0;
	margin-left: 3%;
	text-align: right;
	position: relative;
	padding-right: 1%;
}

		.avatarblog img {
	width: 4em;
	padding: 0;
	border-radius: he;
	height: 4em;
	object-fit: cover;
	border-radius: 50%;
	border: 2px solid #f5a623;
}

		.shareicons {

			width: 50%;

			float: left;

			text-align: right;

			padding-top: .5em;

		}



		textarea {

			border: 2px solid #ddd;

			width: 100%;

			height: 100px;

			padding: 2.5%;

			color: #777;

			float:left;

		}

.btnsendcomment {
	width: auto;
	background: #f5a623;
	color: #fff;
	font-weight: 500;
	padding: 13px 20px;
	text-align: center;
	margin: 1em auto;
	right: 0;
	left: 0;
	position: relative;
	float: none;
	margin-right: 0;
	text-transform: none;
	min-width: 200px;
	font-family: "Program",sans-serif;
	cursor: pointer;
	margin-top: 0;
	border-radius: 30px;
	display: inline-block;
}
		.nuestrocont {

			height: auto;

			background-image: url(img/fotovipstorias.jpg);

			background-size: cover;

			background-position: 10% 20vh;

			background-repeat: no-repeat;

			padding: 5% 0;

			width: 100%;

			float: left;

		}

		.nuestrotext, .nuestrovideo {

			width: 100%;

			float: left;

		}



		.nuestrotext h2 {

			color: #fddc04;

			font-size: 1.5em;

			padding: .5% 5%;

			text-align: center;

		}



		.nuestrotext p {

			color: #fff;

			font-family: arial;

			font-size: .9em;

			max-width: 100%;

			padding: 0 5%;
			text-align: center;

		}



		.nuestrotext .btn {

			background: #f5a623;

			color: #fff;

			padding: 15px;

			font-weight: bold;

			/* text-transform: uppercase; */

			font-family: 'Arial', sans-serif;

			font-size: 1em;

			margin-top: 10px;

			position: relative;

			float: left;

			width: 60%;

			text-align: center;

			margin-top: 10%;

			transition: all .4s ease;

			margin: 0 auto;

			margin-left: 20%;

		}

		.catsvideo {

			width: 100%;

			float: left;

			text-align: center;

			padding-top: 2.5%;

		}

		.catvideo {

			width: 22.1%;

			display: inline-block;

			margin: 0 3.33% 0 0;

		}

		.catvideo:last-child {

			width: 22%;

			display: inline-block;

			margin-right:0;

		}

		.catvideo img{width:100%; transition:.35s all ease;}

		.catvideo img:hover{width:100%; padding:0 5%; cursor:pointer; transition:.35s all ease;}





		.cercacont {

			float: left;

			width: 100%;

			padding: 0;

		}

		.cercacont h2 {



			color: #f5a623;

			font-size: 1.3em;

			margin-top: 0;

			text-align: center;

			padding: 2.5% 5%;

		}

		.redescont {

			float: left;

			width: 100%;

			padding: 2.5% 0%;

		}

		.instacont h3{

			margin-left: 5%;

		}


.redescont h2 {
	color: #e42528;
	font-size: 18px;
	margin-top: 0;
	text-align: center;
	padding: 2.5% 5%;
	font-weight: 500;
}
		.instacont {

			width: 100%;

			float: left;

		}



		.facebookcont, .twittercont {

			width: 100%;

			float: left;

			padding:5%;

		}

		.twittercont {



			padding-bottom: 0;



		}

.instacont h3, .facebookcont h3, .twittercont h3 {
	color: #ed1b2b;
	font-size: 1.2em;
	padding-left: 2em;
	background-repeat: no-repeat;
	background-size: 1.2em;
	padding: 0 5% 0 40px;
	background-position: left center;
	font-weight: 500;
	padding: 5% 10%;
}



		.instacont h3 {	background-image: url(/img/2019/instagram-red.png);}

		.facebookcont h3 {	background-image: url(/img/2019/facebook-red.png);}

		.twittercont h3 {	background-image: url(/img/2019/twitter-red.png);}

		.griditem2.fotogal img{width:100%;}

		.swiper-container {

			height: 160px;

		}



		.swiper-slide img {

			/* max-width: 100%; */

			/* width: 100%; */

			height: 160px;

		}

		.swiper-slide {

			width: auto !important;

		}

		.swiper-wrapper{padding:0!important}





		.main {

			width: 100%;

			z-index: 2;

			position: relative;

			transition: margin-left .2s ease-in;

			-moz-transition: margin-left .2s ease-in;

			-webkit-transition: margin-left .2s ease-in;

		}



		.panelm {

			background: #fff;

			width: 100%;

			color: #222;

			font-size: 1em;

			min-height: 100%;

		}



		/* Overlay */



		.overlayp {

			z-index: 9999;

			position: absolute;

			left: 0;

			top: 0;

			margin-left: 100%;

			transition: margin-left .2s ease-in;

			-moz-transition: margin-left .2s ease-in;

			-webkit-transition: margin-left .2s ease-in;

		}





		.overlayp.active {

			margin-left: 0;

			box-shadow: 0 0 20px rgba(0,0,0,0.5);

		}



		/* Push */



		.pushpm {

			position: fixed;



			left: 0;

			top: 0;

			z-index: 9999;

			margin-left: 100%;

			transition: margin-left .35s ease-in;

			-moz-transition: margin-left .35s ease-in;

			-webkit-transition: margin-left .35s ease-in;

		}



		.pushpm.active {     margin-left: 0;

			position: fixed;

			display: block;

			height: 100%;

			overflow-y: scroll; }



			.main.pactive { margin-left: -100%; }



			.close {

				width: 10%;

				min-height: 8vh;

				background: url(img/back.png);

				background-repeat: no-repeat;

				background-size: 23px;

				background-position: 15% center;

				float: left;

			}



			.header {

				height: 8vh;

				width: 100%;

				float: left;

				border-bottom: 1px solid #ccc;

				position: fixed;

				z-index: 90;

				top: 0;

				background: #fff;

			}

			.titlemenu {

				width: 70%;

				float: left;

				height: 10vh;

				vertical-align: middle;

				padding: 3vh 2vh;

			}





			.panelm .productdesc{

				width:100%;

				float:left;

				padding: 0% 7.5%;

				padding-bottom: 13vh;

			}



			.productdesc h3 {

				color: #333;

				font-size: 1em;

				text-align: center;

			}



			.panelm  .productimg{

				width:100%;

				float:left;

				margin-top: 5%;

			}





			.imgcup{padding:0!important;     margin-top: 8vh;}

			.panel .productdesc h3 {

				color: #ed7124;

				font-size: 1.2em;

				text-align: left;

			}



			.panelm  .productdesc p {

				font-size: 1em;

			}





			.panelm  .productimg img{width:100%;}

			.shareicons li {

				display: inline-block;

				margin-right: 1em;

				background-size: 100%;

			}

			.iconsocial{width:1.5em; height:1.5em;}

			.icon-fb{background-image: url(img/menu/social/facebook.png);}

			.icon-tw{background-image: url(img/menu/social/twitter.png);}

			.icon-ig{background-image: url(img/menu/social/instagram.png);}

			.icon-wa{background-image: url(img/menu/social/whatsapp.png);}



			@media(max-width:1200px){.catvideo {

				width: 22%;

				display: inline-block;

				margin: 0 3.3% 0 0;

				}}





				#instagram-feed .cap-bot {



					float: left;

					list-style: none;

					padding: 0;

					padding: 0%;

					margin: 0;

					padding-bottom: 0;

				}



				#instagram-feed .cap-bot img {

					width: 100%;



				}



				figure { display: block; position: relative; float: left; overflow: hidden; margin: 0; } figcaption { position: absolute; background: black; background: rgba(0,0,0,0.75); color: white; padding: 10px 20px; opacity: 1; -webkit-transition: all 0.6s ease; -moz-transition: all 0.6s ease; -o-transition: all 0.6s ease; } figure:hover figure:hover:before { opacity: 0; } .cap-left:before { bottom: 10px; left: 10px; } .cap-left figcaption { bottom: 0; left: -30%; } .cap-left:hover figcaption { left: 0; } .cap-right:before { bottom: 10px; right: 10px; } .cap-right figcaption { bottom: 0; right: -30%; } .cap-right:hover figcaption { right: 0; } .cap-top:before { top: 10px; left: 10px; } .cap-top figcaption { left: 0; top: -30%; } .cap-top:hover figcaption { top: 0; } .cap-bot::before {

					bottom: 7%;

					left: 5.5%;

					}.cap-bot figcaption {

						/* left: 0; */

						bottom: -30%;

						width: 100%;

						margin-left: 4%;

						} .cap-bot:hover figcaption { bottom: 0; }



						.insta-link {

							font-size: .8em;

							font-family: arial;

							/* padding-right: 10px; */

							color: #ddd;

							margin-bottom: .5em;

							float: left;

							width: 100%;

						}



						figcaption .fa {

							font-weight: 900;

							margin: 0 .25em 0em 1em;

						}



						figcaption{padding: 5%;}



						.cap-bot figcaption {

							/* left: 0; */

							bottom: 0;

							width: 100%;

							margin-left: 0%;

							text-align: right;

						}



						.swiper-slide .cap-bot figcaption{width: 100%; font-family:"Museo 900", sans-serif;}



						figcaption .fa {

							font-weight: 900;

							margin: 0 .25em 0em 1em;

						}

						figcaption{padding: 5%;}



						.cap-bot figcaption {

							/* left: 0; */

							bottom: 0;

							width: 100%;

							margin-left: 0%;

							text-align: right;

						}



						.fab {

							padding-left: 4%;

						}



						#instagram-feed figcaption {
	top: 0%;
	text-align: center;
	font-family: "Program";
	padding: 25% 10%;
	background: rgba(0,0,0,.45);
	font-size: 1.4em;
	bottom: 0%;
}

#instagram-feed figcaption {
	top: 0%;
	text-align: center;
	font-family: "Program";
	padding: 5% 5%;
	background: rgba(0,0,0,.45);
	font-size: 15px;
	bottom: 0%;
}



						.insta-link {

							font-size: 1em;

							font-family:"Museo 900", sans-serif;

							/* padding-right: 10px; */

							color: #ddd;

							margin-bottom: .5em;

							float: right;

							width: 100%;

							position: relative;

							padding-top: 50%;

							text-align: right;

						}



						#instagram-feed .cap-bot {

							width: 100%;



						}



						#instagram-feed {

							text-align: left;

							padding: 0;

						}



						.wrapper{

							width:100%;

							text-align:center;

						}



						.blog{

							width:100%;

							margin:0px auto;

						}

						.insta{

							width:100%;

							margin:0px auto;

						}

						.slick-slide img {

							display: block;

							max-width: 100%;

						}

						.avatarblog {
	width: 100%;
	float: left;
	text-align: center;
}
						.shareicons {
							width: 100%;
							float: left;
							text-align: right;
							padding-top: .5em;
						}
						textarea {
							border: 2px solid #ddd;
							width: 100%;
							height: 100px;
							padding: 2.5%;
							color: #777;
							float:left;
						}

.btnsendcomment {
	width: auto;
	background: #f5a623;
	color: #fff;
	font-weight: 500;
	padding: 10px 15px;
	text-align: center;
	margin: 1em auto;
	right: 0;
	left: 0;
	position: relative;
	float: none;
}

						.productdesc {
							padding: 0 5%;
						}

						.productdesc p {
							font-size: 1em;
							font-family: arial, sans-serif;
							line-height: 1.5;
						}

						.quote {
							font-weight: bold;
							font-size: 2em;
							text-align: center;
							/* padding: 2em 1em; */
							background: #eee;
							padding: 5%;
							margin: 2.5% 0;
						}

						.secondaryimg{width:30%; float:left;}
						.secondtext {
							width: 70%;
							float: left;
							padding: 0 2.5%;
						}
						.comments {
							float: left;
							width: 100%;
							padding:0 5%;
						}

						.shareicons li {
							display: inline-block;
							margin-right: 2em;
							background-size: 100%;
						}
						.iconsocial{width:1.5em; height:1.5em;}
						.icon-fb{background-image: url(img/menu/social/facebook.png);}
						.icon-tw{background-image: url(img/menu/social/twitter.png);}
						.icon-ig{background-image: url(img/menu/social/instagram.png);}
						.icon-wa{background-image: url(img/menu/social/whatsapp.png);}

						.productdesc p {
							font-size: 1em;
							font-family: arial, sans-serif;
							line-height: 1.5;

						}

						.iconsocial {
							width: 2em;
							height: 2em;
						}

						.comments form {
	margin-top: 0;
	width: 100%;
	float: left;
	/* border-top: 1px solid #ccc; */
	padding-top: 2em;
}

						.loginlink {
							color: #aaa;
							padding: 0 0% 2em 5%;
							width: 100%;
							float: left;
							text-align: right;
							text-decoration: underline;
							padding-bottom: 0;
						}

						.mensajearea {
	width: 100%;
	float: left;
	padding: 2.5%;
}

						textarea {
							border: 2px solid #ddd;
							width: 100%;
							height: 100px;
							padding: 2.5%;
							color: #777;
							float: left;
							font-family: arial,sans-serif;
						}

						textarea::placeholder{color:#666}

						.slick-dots {
	bottom: -20px;
	display: block !important;
	max-height: 20px;
	overflow: hidden;
}

						textarea {
	border: 2px solid #ddd;
	width: 100%;
	height: auto;
	color: #777;
	padding: 1em;
	float: left;
	position: relative;
	font-family: inherit;
}

#respuesta, #respuesta2 {
	width: 100%;
	float: right;
	padding: 1% 2.5%;
}

.success {
	width: 100%;
	background: #DCEDC8;
	padding: 1em;
	color: #558B2F;
	border-radius: 5px;
	float: right;
	min-width: 200px;
}

.errormsg {
	width: 100%;
	background: #ffcdd2;
	padding: 1em;
	color: #b71c1c;
	border-radius: 5px;
	float: right;
	min-width: 200px;
}

.comments {
	float: left;
	width: 100%;
	padding: 10% 5%;
	border: none;
	margin: 0;
	background-image: none;
	background-size: 100%;
	background-repeat: no-repeat;
	background-position: bottom;
	background: #f3f3f3;
}
.slick-dots {
	text-align: left;
	padding-left: 5%;
}

.slick-dots {
	text-align: left;
	padding-left: 5%;
}
.slick-dots li.slick-active button {
	border-color: #fff !important;
	box-shadow: none !important;
	width: 30px;
	border-radius: 10px;
	/* margin: 0; */
}
.slick-dots li {
	display: inline-block;
	vertical-align: top;
	margin: 0 5px;
}

main {
	margin-top: 5vh;
}
.caption {
	display: inline-block;
	position: absolute;
	top: 0;
	left: 0;
	border: none;
	color: #fff;
	margin: 0;
	font-size: 25px;
	font-weight: normal;
	letter-spacing: .02em;
	opacity: 0;
	z-index: 1;
	transition: all .3s ease;
	-webkit-transform: translateY(100px);
	transform: translateY(100px);
	font-family: "Program",sans-serif;
	width: 100%;
	height: 100%;
	padding: 10%;
	text-align: center;
}

.slick-dots {
	bottom: 20px;
	display: block !important;
	max-height: 20px;
	overflow: hidden;
	z-index: 3;
}

.slick-dots li button {
	opacity: .84;
}
.entradas {
	text-align: center;
	padding: 0 10%;
}

.entradas p {
	font-weight: 500;
	padding: 10px 0;
}
.entradas img {
	width:100%;
}

.main-slider {
	margin-bottom: 25px;

}

.btnhistoria {
	background: #f5a623;
	color: #fff;
	padding: 10px 20px;
	display: inline-block;
	border-radius: 20px;
	font-weight: 500;
	margin: 15px 0;
}

.comments {
	text-align: center;
}

.popupcomment {
	background: rgba(0,0,0,.8);
	position: fixed;
	width: 100%;
	height: 100%;
	z-index: 77;
	top: 0;
	padding: 10% 5%;
	text-align: center;
}

.formcont {
	background: #fff;
	display: inline-block;
	padding: 10% 5%;
}
#insta .slick-slide {
	float: left;
	height: 100%;
	min-height: 1px;
	padding: 0 1%;
}

.closepop {
	width: 20px;
	height: 20px;
	background: url(/img/close.png);
	background-repeat: no-repeat;
	background-size: 100%;
	margin-bottom: 10px;
	float: right;
}

.slick-slide img {
	display: block;
	max-width: 100%;
	height: 100%;
}

.blackbg {
	position: absolute;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.65);
}
					</style>

<section class="main-slider">
  <div class="item image">
  <div class="blackbg"></div>
		<img class="slidehomeDesktop" src="/img/blog/vips_restportada.png" data-lazy="/img/blog/vips_restportada.png">
		 <p class="caption"><br>¡Llegamos a los <span style="color: #fddc04; font-weight:500;">100 Vips</span>   con nueva imagen!</p>
  </div>
  
   <!-- <div class="item video">
    <video class="slide-video slide-media" loop muted preload="metadata" poster="https://vips.com.mx/redescubreelsabor/images/postersabor.jpg">
      <source src="https://vips.com.mx/redescubreelsabor/RedescubreVipsLargo.mp4" type="video/mp4" />
    </video>
    <p class="caption"></p>
  </div>-->


  <div class="item image">
  <div class="blackbg"></div>
		<img class="slidehomeDesktop" src="/img/2019/banners/Carruselvipstorias1.jpg" data-lazy="/img/blog/Blog_10Mayo.png">
		 <p class="caption"><br>Este <span style="color: #fddc04; font-weight:500;">día de las madres</span>, disfruta del sabor de Vips en tu casa  </p>
  </div>
  

</section>

<div class="entradas">

<?php
		include('dbconnect.php');
			//$query = "SELECT cat2 FROM menu19 WHERE cat1='Desayuno' GROUP BY cat2";
		  $query = "SELECT * FROM entradas ORDER BY id_entrada DESC LIMIT 1";
          $result = $mysqli->query($query) or die("Falló la consulta $query");
          while($row = mysqli_fetch_assoc($result)){
						
            echo '
            <a href="/entrada/'.$row['url'].'"><div class="entrada"><img src="/img/blog/'.$row['imagen'].'"><p>'.$row['titulo'].'</p></div></a>
            ';
          }

		?>
		

</div>
<center><a class="btnsendcomment envia-vipstoria" href="/entradas-m" style="margin-bottom: 50px;">Ver todas</a></center>

				</div>


				<?php if($sesion==true){ ?>

					<div class="comments redescont">
						<h2 style="color:#ed1b2b; padding: 2% 0;">Todos tenemos una historia qué contar…</h2>
						<p style="text-align:center;">En Vips hemos acompañado a la familia mexicana por más de 50 años, y queremos conocer tu experiencia con nosotros y nuestros deliciosos platillos. </p>
						
						<a class="btnhistoria">¡Cuéntanos tu historia!</a>

					
					
				



	  </div>
	  
	  	<div class="popupcomment" style="display:none;">
		<div class="closepop"></div>
					
					<div class="formcont">
							<form  id="formcomment" onsubmit="return false"  enctype="multipart/form-data" method="post">
							
							<h2 style="color:#ed1b2b; padding: 2% 0;">¡Cuéntanos tu historia!</h2>


							<div class="avatarblog"><img src="<?php echo $avatarimg;?>"></div>
							<input type="hidden" id="tipo" name="tipo" value ="vipstoria">
							<input type="hidden" id="user" name="user" value ="<?php echo $uid;?>">
							<div class="mensajearea">
							<textarea rows="3" id="comment" name="comment" required></textarea>

							<div id="respuesta"></div>
							<a class="btnsendcomment envia-vipstoria" id="btnsendcomment">Enviar</a>
							</form>
					</div>
					
					</div>

					</div>

				<?php } ?>

				<div class="redescont">

					<div class="instacont">



						<h3>Instagram</h3>

						<div class="wrapper" id="insta">

							<div class="insta" id="instagram-feed">







							</div>

						</div>



					</div>





					<div class="facebookcont">



						<h3>Facebook</h3>





						<div id="fb-root"></div>

						<script>(function(d, s, id) {

							var js, fjs = d.getElementsByTagName(s)[0];

							if (d.getElementById(id)) return;

							js = d.createElement(s); js.id = id;

							js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0&appId=358730231264346&autoLogAppEvents=1';

							fjs.parentNode.insertBefore(js, fjs);

						}(document, 'script', 'facebook-jssdk'));</script>

						<div id="container" style="width:100%;">

							<div class="fb-page" data-href="https://www.facebook.com/VIPSMX/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/VIPSMX/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VIPSMX/">Vips</a></blockquote></div>

						</div>



					</div>





					<div class="twittercont">



						<h3>Twitter</h3>



						<a class="twitter-timeline" data-tweet-limit="1" href="https://twitter.com/VIPS_MX?ref_src=twsrc%5Etfw">Tweets by VIPS_MX</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

					</div>



				</div>





			</div>



			<!-- 3. Have fun! -->

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

			<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

			<script src="js/instafeed.min.js"></script>

		</script><script src='slick/slick.min.js'></script>
<script  src="/js/slickvideo.js"></script>
		<script>

// *** On ready *** //

$( document ).on( "ready" , function() {

	instagramFeed();

	$('.blog').slick({

		infinite: false,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:true,

	});



	setTimeout(function(){

		slickInsta();}, 6000);



});



// *** Instagram Feed *** //

function instagramFeed() {

	var feed = new Instafeed({

		userId: 3155864410,

		accessToken: '3155864410.1677ed0.07798510389545b68c02db49851cd899',

		get: 'user',

		resolution: 'standard_resolution',

		template: '<div class="post"><a href="{{link}}" target="_blank"><figure class="cap-bot"><img data-lazy="{{model.images.standard_resolution.url}}" alt="" googl="true"><figcaption><br><span><i class="fa fa-heart"></i>{{likes}}</span><span><i class="fa fa-comment"></i>{{comments}}</span><a class="insta-link" target="_blank" href="{{link}}">vipsmx<i class="fab  fa-instagram"><br></i></a></figcaption></figure></a></div>',

	    limit: 4, // Number of photo will get from instagram

	    target: 'instagram-feed',



	});

	feed.run();





}



function slickInsta(){



	$('.insta').slick({

		infinite: false,

		slidesToShow: 2,

		slidesToScroll: 2,
			lazyLoad: 'ondemand',

		accessibility: true,

		arrows: false,

		dots:false,

	});

	$('.insta').slick('reinit');

}





function openPanel(id){



	var o=$('.overlayp'),r=$('.revealp'),p=$('.pushpm'),ob=$('.overlay'),rb=$('.reveal'),pb=$('.pushm'),m=$('.main'),panel=$('.panelm');



	m.toggleClass('pactive');

	p.toggleClass('active');





}



    $('#btnsendcomment').click(function(event){

			var comment  = $("#comment").val();
			var tipo  = $("#tipo").val();
			var user= $("#user").val();


		if (comment == "" || user == "" || tipo == "")
	{
		$("#respuesta").html("<div class='errormsg'>Escribe tu mensaje.</div>");

	}

	else{
        event.preventDefault();
        $.ajax({
            url : "comentar",
            type: "POST",
            data : new FormData($('#formcomment')[0]),
            processData: false,
            contentType: false,
            success:function(data){

				$('#respuesta').html(data);

				 setTimeout(function() {
                $('.success').slideUp("slow");
				$('.errormsg').slideUp("slow");
            }, 5000);



            }
        });

		}
    });
	
	$(".btnhistoria").click(function(){
		$(".popupcomment").fadeIn();
	});

	$(".closepop").click(function(){
		$(".popupcomment").fadeOut();
	});



</script>





<!-- Footer =============================-->

<?php include('footerm.php');?>
