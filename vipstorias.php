<?php

include('header.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();



if ($detect->isMobile()) {

    header('Location: vipstorias-m');

    exit(0);

}


if($avatarimg=="/img/svg/cuenta.svg"){$avatarimg="/img/svg/avatar.svg";}
if(	$sesion == true){$showlink ="hidden";}
else{$showlink ="";}

?>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
<link rel="stylesheet" href="/css/slickvideo.css">

<style>
.navbar-fixed-top {
	left: 0;
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
.main {
	/* margin-top: 150px; */
	transition: all .4s ease;
	margin-top: 123px;
}

.caption {
	display: inline-block;
	position: absolute;
	top: 34%;
	left: 45%;
	text-align: left;
	padding: 20px;
	border: none;
	color: #fff;
	margin: 0;
	font-size: 40px;
	font-weight: normal;
	letter-spacing: .02em;
	opacity: 0;
	z-index: 1;
	transition: all .3s ease;
	-webkit-transform: translateY(100px);
	transform: translateY(100px);
	font-family: "Program", sans-serif;
	font-weight: normal;
}
.slick-dots li button {
	opacity: .9;
}

.posts{width:50%; float:left;}

.posts img{width:100%;}

.post1{width:100%; float:left;}

.post2 {
	width: 50%;
	float: left;
	position: relative;
	/* clear: both; */
	max-height: 231px;
}

.posts .cap-bot figcaption {
	width: 100%;
	font-family: "Program",sans-serif;
	font-size: 16px;
	font-weight: 500 !important;
}
.comments {
	float: left;
	width: 90%;
	padding: 0 5%;
	margin: 0;
	background-image: none;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: top center;
	background: #f3f3f3;
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
	line-height: 1.5;

}
.avatarblog {
	width: 15%;
	float: left;
	margin-top: 0;
	margin-left: 0;
	text-align: center;
	position: absolute;
	padding-right: 0;
	top: 20%;
	z-index: 4;
}
.avatarblog img {
	width: 4em;
	padding: 0;
	border-radius: he;
	height: 4em;
	object-fit: cover;
	border-radius: 50%;
	border: 2px solid #f29100;
}
.shareicons {
	width: 100%;
	float: left;
	text-align: right;
	padding-top: .5em;
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
.iconsocial {
	width: 2em;
	height: 2em;
}

.comments form {
	margin-top: 0;
	width: 100%;
	float: left;
	border-top: 0;
	padding-top: 2em;
	position: relative;
	text-align: center;
}
.loginlink {
	color: #aaa;
	padding: 0 0% 2em 5%;
	width: 100%;
	float: left;
	text-align: right;
	text-decoration: underline;
}



	.mute-video {
    background:url(/video/mute.png) no-repeat center;
		color: #ffffff;
    background-size:20px;
    border:0;
    width:20px;
    height:20px;
    text-indent:-999px;
	    z-index: 10;
    position: absolute;
    right: 110px;
    margin-top: 15px;
}
.unmute-video {
    background:url(/video/sound.png) no-repeat center;
    background-size:20px;
}

textarea {
	/* border: 2px solid #ddd; */
	width: 100%;
	height: 200px;
	color: #777;
	/* padding: 1em; */
	float: left;
	position: relative;
	/* font-family: inherit; */
	border: solid 1px #e7e7e7;
	background-color: #ffffff;
	font-family: "Program", sans-serif;
	font-weight: 500;
	font-size: 20px;
	padding: 2.5% 15%;
}

#respuesta, #respuesta2 {
	width: 100%;
	float: right;
	padding: 1% 2.5%;
}

.success {
	width: 30%;
	background: #DCEDC8;
	padding: 1em;
	color: #558B2F;
	border-radius: 5px;
	float: right;
	min-width: 200px;
}

.errormsg {
	width: 30%;
	background: #ffcdd2;
	padding: 1em;
	color: #b71c1c;
	border-radius: 5px;
	float: right;
	min-width: 200px;
}

.hidden{display:none;}
	
[data-div="#experienciashome"] *{  fill: #fff!important; transition: all .4s ease;}

[data-div="#experienciashome"] *{color: #fff!important;}

.scrolled [data-div="#experienciashome"] *{  fill: #ff0025!important; transition: all .4s ease;}

.scrolled [data-div="#experienciashome"] *{color: #ff0025!important;}



.nuestrocont {

	height: auto;

	background-size: cover;

	background-position: center;

	background-repeat: no-repeat;

	padding: 0%;

	width: 100%;

	float: left;

	min-height: 400px;

	overflow: hidden;

	position: relative;

}

.nuestrotext {

	padding: 5%;

	padding-bottom: 7px;

	padding-top: 0;
	padding-top: 100px;

}

.nuestrotext, .nuestrovideo {

	width: 50%;

	float: left;

}



.nuestrovideo {

	position: absolute;

	right: 0;

	top: 0;

	height: 100%;

	width: 50%;

}

.nuestrotext h2 {

	color: #fddc04;
     margin-left: 28%;
	font-size: 2.5em;

	padding: 0 5% 0 0;

		font-family: "Program", sans-serif;

}



.nuestrotext p {

	color: #fff;
	margin-left: 11%;

	font-family: "Program";

	font-size: 1.4em;

	max-width: 80%;

}



.nuestrotext .btn {

	background: #f29100;

	color: #fff;

	padding: 15px;

	font-weight: bold;

	text-transform: uppercase;

	font-family: "Program", sans-serif;

	font-size: 1em;

	margin-top: 10px;

	position: relative;

	float: left;

	width: 50%;

	text-align: center;

	margin-top: 10%;

	transition: all .4s ease;

	/* margin: 0 auto; */

}

.nuestrotext .btn:hover {

	background: #ffac30;

	color: #fff;

	padding: 15px;

	font-weight: bold;

	/* text-transform: uppercase; */

	font-family: "Program", sans-serif;

	font-size: 1em;

	margin-top: 10px;

	position: relative;

	float: left;

	width: 50%;

	text-align: center;

	margin-top: 10%;

	transition: all .4s ease;

	/* margin: 0 auto; */

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





.cercacont {

	float: left;

	width: 100%;

	padding: 2.5% 5%;

	margin-top: -.25em;

	background: #fff;

}

.cercacont h2 {

	color: #f29100;

	font-size: 2em;

	margin-top: 0;

}

.redescont {
	float: left;
	width: 100%;
	padding: 2.5% 7.5%;
}

.redescont h2 {

	color: #e42528;

	font-size: 2em;

	margin-top: 0;

	font-family: "Program", sans-serif;

}

.instacont {
	width: 100%;
	float: left;
	margin-bottom: 2em;
}

.facebookcont, .twittercont {

	width: 50%;

	float: left;

	padding-right:5%;

}



.instacont h3, .facebookcont h3, .twittercont h3 {

	color: #ed1b2b;

	font-family: "Program", sans-serif;

	font-size: 1.5em;

	padding-left: 2em;

	background-repeat: no-repeat;

	background-size: 1.2em;

	padding: 1em 1em 1em 1.7em;

	background-position: left center;
	font-weight:500;

}



.instacont h3 {	background-image: url(/img/2019/instagram-red.png);}

.facebookcont h3 {	background-image: url(/img/2019/facebook-red.png);}

.twittercont h3 {	background-image: url(/img/2019/twitter-red.png);}

.griditem2.fotogal img{width:100%;}



.small{width:50%;}

.halfgal {

	width: 50%;

	float: left;

	padding: 1%;

}



.small {

	width: 48%;

	float: left;

	/* padding: 2.5% 2.5%; */

	/* margin-top: 2.5%; */

	/* margin-right: 5%; */

}



.big {

	padding: 4% 0;

	float: left;

}

.first{padding-top:0;}

.leftimg {

	margin-right: 4%;

}

@media(max-width:1200px){.catvideo {

	width: 22%;

	display: inline-block;

	margin: 0 3.3% 0 0;

}}



#instagram-feed .cap-bot {

	width: 25%;

	float: left;

	list-style: none;

	padding: 0;

		padding: 1%;

	margin: 0;

	padding-bottom: 0;

}



#instagram-feed .cap-bot img {

	width: 100%;



}



figure { display: block; position: relative; float: left; overflow: hidden; margin: 0 20px 20px 0; } figcaption { position: absolute; background: black; background: rgba(0,0,0,0.75); color: white; padding: 10px 20px; opacity: 0; -webkit-transition: all 0.6s ease; -moz-transition: all 0.6s ease; -o-transition: all 0.6s ease; } figure:hover figcaption { opacity: 1; } figure::before {

	content: "+";

	position: absolute;

	font-weight: 800;

	background: black;

	background: rgba(255,255,255,0.75);

	text-shadow: 0 0 5px white;

	color: #666;

	width: 24px;

	height: 24px;

	-webkit-border-radius: 12px;

	-moz-border-radius: 12px;

	border-radius: 12px;

	text-align: center;

	font-size: 14px;

	line-height: 24px;

	-moz-transition: all 0.6s ease;

	opacity: 0;

} figure:hover:before { opacity: 0; } .cap-left:before { bottom: 10px; left: 10px; } .cap-left figcaption { bottom: 0; left: -30%; } .cap-left:hover figcaption { left: 0; } .cap-right:before { bottom: 10px; right: 10px; } .cap-right figcaption { bottom: 0; right: -30%; } .cap-right:hover figcaption { right: 0; } .cap-top:before { top: 10px; left: 10px; } .cap-top figcaption { left: 0; top: -30%; } .cap-top:hover figcaption { top: 0; } .cap-bot::before {

	bottom: 7%;

	left: 5.5%;

}.cap-bot figcaption {

	/* left: 0; */

	bottom: 0%;

	width: 92%;

	margin-left: 4%;

} .cap-bot:hover figcaption { bottom: 0; }



.insta-link {

	font-size: .8em;

	font-family: "Program";

	/* padding-right: 10px; */

	color: #ddd;

	margin-bottom: .5em;

	float: left;

	width: 100%;

}



figcaption .fa {

	font-weight: 900;

	margin: 0 1% 0 10%;

}

figcaption{padding: 5%;}



.cap-bot figcaption {

	/* left: 0; */

	bottom: 0;

	width: 92%;

	margin-left: 0%;

	text-align: center;

}



#instagram-feed figcaption {

	top: 4%;

	text-align: center;

	font-family: "Program", sans-serif;

	padding: 25% 10%;

	background: rgba(0,0,0,0.35);

	font-size: 1.4em;

	bottom: 1%;

}



.insta-link {

	font-size: 1em;

	font-family:"Program", sans-serif;

	/* padding-right: 10px; */

	color: #ddd;

	margin-bottom: .5em;

	float: right;

	width: 100%;

	position: relative;

	padding-top: 50%;

	text-align: right;

}





.catsvideo figure {



	margin: 0;

	cursor:pointer;

}



.catsvideo .cap-bot figcaption {

	/* left: 0; */

	bottom: 0;

	width: 100%;

	margin-left: 0%;

	text-align: center;

	font-family:"Program", sans-serif;

}

#respuesta, #respuesta2 {
	width: 100%;
	float: right;
	padding: 0;
	margin-bottom: 15px;
}

.entradas {
	width: 100%;
	float: left;
	padding: 0 5%;
	background-image: url(/img/fondo.png);
	background-repeat: no-repeat;
	background-size: 20%;
	background-position: -15% 40%;
}

.entrada {
	width: 50%;
	float: left;
	padding: 2% 5%;
}
.entrada img{width:100%;}

.entrada p {
	font-weight: 500;
	padding: 10px 0;
	font-size: 20px;
}

.blackbg {
	position: absolute;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.65);
}

.caption {
	display: inline-block;
	position: absolute;
	top: 30%;
	left: 0;
	/* text-align: left; */
	/* padding: 20px; */
	border: none;
	color: #fff;
	margin: 0;
	font-size: 40px;
	font-weight: normal;
	letter-spacing: .02em;
	opacity: 0;
	z-index: 1;
	transition: all .3s ease;
	-webkit-transform: translateY(100px);
	transform: translateY(100px);
	font-family: "Program",sans-serif;
	/* font-weight: normal; */
	width: 100%;
	padding: 0 5%;
	text-align: center;
}

</style>
<div class="main">
<section class="main-slider">
  <div class="item image">
  <div class="blackbg"></div>

		<img class="slidehomeDesktop" src="/img/blog/vips_rest_fondo.png" data-lazy="/img/blog/vips_rest_fondo.png">
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
		<img class="slidehomeDesktop" src="/img/blog/Fondo_mama.png" data-lazy="/img/blog/Fondo_mama.png">
		<p class="caption"><br>Este <span style="color: #fddc04; font-weight:500;">día de las madres</span>, disfruta del sabor de Vips en tu casa  </p>
  </div>
  

</section>

<div class="entradas">

<?php
		include('dbconnect.php');
			//$query = "SELECT cat2 FROM menu19 WHERE cat1='Desayuno' GROUP BY cat2";
		  $query = "SELECT * FROM entradas ORDER BY id_entrada DESC LIMIT 4";
          $result = $mysqli->query($query) or die("Falló la consulta $query");
          while($row = mysqli_fetch_assoc($result)){
						
            echo '
            <a href="/entrada/'.$row['url'].'"><div class="entrada"><img src="/img/blog/'.$row['imagen'].'"><p>'.$row['titulo'].'</p></div></a>
            ';
          }

		?>
		

</div>
<center><a class="btnsendcomment envia-vipstoria" href="/entradas" style="margin-bottom: 50px;">Ver todas</a></center>

<?php if($sesion==true){ ?>



<div class="comments redescont">
	<form  id="formcomment" onsubmit="return false"  enctype="multipart/form-data" method="post">

	<div class="avatarblog"><img src="<?php echo $avatarimg;?>"></div>
	<input type="hidden" id="tipo" name="tipo" value ="vipstoria">
	<input type="hidden" id="user" name="user" value ="<?php echo $uid;?>">
	<div class="mensajearea">
	<textarea rows="3" id="comment" name="comment" required placeholder="Deja un comentario"></textarea>

	<div id="respuesta"></div>
	<a class="btnsendcomment envia-vipstoria" id="btnsendcomment">¡Cuéntanos tu historia!</a>
	</form>
</div>



	  </div>


<?php }    ?>




<div class="redescont">

	<div class="instacont">



		<h3>Instagram</h3>



<div id="instagram-feed"></div>







	</div>



	<div class="facebookcont">



		<h3>Facebook</h3>









		<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=443271375714375";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));



jQuery(document).ready(function($) {

  $(window).bind("load resize", function(){

  setTimeout(function() {

  var container_width = $('#container').width();

    $('#container').html('<div class="fb-page" ' +

    'data-href="https://www.facebook.com/VIPSMX"' +

    ' data-width="' + container_width + '" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/VIPSMX"><a href="https://www.facebook.com/VIPSMX">Auto*Mat</a></blockquote></div></div>');

    FB.XFBML.parse( );

  }, 100);

});

});



</script>

<div id="container" style="width:100%;">

<div class="fb-page" data-href="https://www.facebook.com/VIPSMX" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/VIPSMX"><a href="https://www.facebook.com/VIPSMX">Auto*Mat</a></blockquote></div></div>

</div>



	</div>





	<div class="twittercont">



		<h3>Twitter</h3>



		<a class="twitter-timeline" data-tweet-limit="1" href="https://twitter.com/VIPS_MX?ref_src=twsrc%5Etfw">Tweets by VIPS_MX</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>

</div>





</div>



<script src="js/instafeed.min.js"></script>

<script>

// *** On ready *** //

$( document ).on( "ready" , function() {

	instagramFeed();



});





// *** Instagram Feed *** //

function instagramFeed() {

    var feed = new Instafeed({

        userId: 3155864410,

        accessToken: '3155864410.1677ed0.07798510389545b68c02db49851cd899',

	    get: 'user',

	    resolution: 'standard_resolution',

	    template: '<a href="{{link}}" target="_blank"><figure class="cap-bot"><img src="{{model.images.standard_resolution.url}}" alt="" googl="true"><figcaption><br><span><i class="fa fa-heart"></i>{{likes}}</span><span><i class="fa fa-comment"></i>{{comments}}</span><a class="insta-link" target="_blank" href="{{link}}">vipsmx<i class="fab  fa-instagram"><br></i></a></figcaption></a></figure></a>',

	    limit: 4, // Number of photo will get from instagram

	    target: 'instagram-feed',



    });

    feed.run();

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
	
	$( document ).on( "ready" , function() {
setTimeout(function(){
	imgResize();	
},300)




});

function imgResize(){
	var h = $(".entrada img").first().height();
	$(".entrada img").css("height", h);
}



</script>

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
<script  src="/js/slickvideo.js"></script>


<!-- Footer =============================-->

<?php include('footer.php');?>

