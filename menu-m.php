<?php
ob_start();
	$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
if( isset($_SESSION['uservips'])!="" ){
	$uid=$_SESSION['uservips'];
}

include('headerm.php');

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();


$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
	$url = $uriSegments[2]; //returns foo
	$url2 = $uriSegments[3]; //returns foo
	$url3 = $url."/".$url2;
	$activecat ="";
	$consulta = $mysqli->query("SELECT * FROM menu19 WHERE url = '$url3'");

	while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
	$id= $row['id_plato'];
	$cat2= $row['cat2'];
}
//echo $url3;
//echo $cat2;
if(strlen($url)>4){
$clase="menu menucategoria";
}
else{
	$url = "desayuno";
	$cat2 = "Favoritos";
	$clase="menucompleto";
}

if(strlen($url2)>4){
$clase="menuplatillo";
$plato = $id;
}

if ($detect->isMobile()) {

}

else{
	header('Location: /menu/'.$url3);
	exit(0);
}


?>

<link rel="stylesheet" href="/css/animate.css">
<script src="/js/wow.min.js"></script>
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
 <script src='/slick/slick.min.js'></script>
<style>
.grow { transition: all .35s ease; }
.grow:hover { transform: scale(1.1); }

.grow2 { transition: all .35s ease; }
.grow2:hover { transform: scale(1.05); }


.floating {
    animation-name: floating;
    animation-duration: 3s;
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
    animation-duration:5s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;

}

@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }
}

.categorias {
	width: 100%;
	height: auto;
	float: left;
	padding: 2%%;
	padding-bottom: 0;
	margin-top: 10vh;
	float: left;
}
.timeline {
	margin: 0;
	padding: 0;
	list-style: none;
	max-width: 100%;
	margin: 0 auto;
	counter-reset: step;
}
.timeline li {
	float: left;
	text-align: center;
	width: 20%;
	position: relative;
	font-size: 12px;
	margin-bottom: 5px;
}
.timeline li::before {
	content: '';
	line-height: 15px;
	width: 12px;
	height: 12px;
	display: block;
	border-radius: 100%;
	border: 0;
	margin: 0px auto 11px auto;
	background: #ccc;
	transition: all .35s ease;
	cursor: pointer;
}
.timeline li:hover::before {
transform: scale(1.2);
}
.timeline li::after {
	content: '';
	width: 100%;
	height: 2px;
	background: #4a4a4a;
	display: block;
	position: absolute;
	top: 5px;
	left: 50%;
	z-index: -1;
}
.timeline li:last-child:after {
  content: none;
}

.timeline li.active::before {
	background-color: #ffe512;
	box-shadow: 1px 1px 4px #f0f0f0;
	transform: scale(1.2);
}
#loadcategoria {
	width: 100%;
	float: left;
	border-top: 2px solid #222;
	border-bottom: 2px solid #222;
	margin:0;
}

.carouselcats {
	width: 80%;
	float: left;
	margin-bottom: 0 !important;
	overflow: visible;
}
.carouselcats .slick-dots {
	bottom: -25px;
	display: block !important;
	margin-left: 0;
	width: 100vw !important;
	float: left;
}
.activeitem {
	color: #ed1c2c;
	font-weight: 500;
}
.filtros {
	width: 10%;
	float: left;
	padding: 12px;
	padding-left: 30px;
	background-image: url(/img/2019/filtros.png);
	background-size: 30px;
	background-repeat: no-repeat;
	background-position: 5px;
	border-left: 2px solid #222;
	opacity: 0;
	transition: .35s all ease;
	float: right;
	color:transparent;
}
#loadfiltro.showfiltros {
	height: auto;
	transition: .35s all ease;
	overflow: visible;
	z-index: 5;
	position: relative;
	padding: 10px;
}
.activefiltros {
	opacity: 1;
	transition: .35s all ease;
	cursor: pointer;
	float: right;
	pointer-events:inherit;
}

.itemcats {
	text-align: center;
	cursor: pointer;
	font-size: 11px;
	font-size: 11px;
	/* line-height: 2; */
}
#loadfiltro {
	float: left;
	width: 100%;
	background: rgba(0,0,0,.6);
	margin-top: 0px;
	color: #fff;
	overflow:hidden;
}
#loadfiltro div {
	width: auto;
	padding: 0 1%;
	display: inline-block;
	text-align: center;
	font-size: 14px;
}
#loadfiltro{
	text-align: center;
	height: 0;
	transition: .35s all ease;
	position:relative;
}
.hidefiltros {
	position: absolute;
	width: 22px !important;
	height: 22px;
	background-image: url(/img/close.png);
	background-size: 70%;
	right: 5px;
	background-color: transparent;
	display: inline-block !important;
	padding: 0 !important;
	background-repeat: no-repeat;
	background-position: center;
	top: 5px;
	cursor: pointer;
}
.filtro {
	cursor:pointer;
}

.filtro span {
	font-size: 14px;
	margin: 0 5px;
}
.currentfilter{
	color:#ffe512;
}

.resetfiltros {
	float: left;
	cursor: pointer;
	width: 100% !important;
}

.filtro i {
	margin: 0 10px;
	font-size: 12px;
}

.filtro p {
	margin: 10px;
}
.slick-slide {
	text-align: center;
}

.slick-slide img {
	display: inline-block;
	max-width: 100%;
	max-height: 400px;
	object-position: center;
}

.carouselplatos {
	width: 200%;
	margin-left: -50%;
	background-size: 22.5%;
	background-repeat: no-repeat;
	background-position: 50% 150%;
}
#loadplatos .slick-slide {
	text-align: center;
	margin-right: 5vw;
	margin-left: 5vw;
	cursor:pointer;
	opacity: .6;
	transition:.35s all ease;
}
#loadplatos .slick-slide:hover {
	opacity: 1;
	transition:.35s all ease;
}
#loadplatos .slick-center {
	opacity: 1;
}
#loadplatos {
	width: 100%;
	float: left;
	margin-top: 12px;
	padding: 10% 0 0 0%;
	position:relative;
}
#loaddetalle {
	width: 100%;
	float: left;
	padding: 0px 5%;
	padding-bottom: 2.5%;
	margin-top: 0%;
}
.mid {
	float: left;
	width: 100%;
	text-align: center;
	padding: 0%;
}

.mid h1 {
	color: red;
	font-size: 25px;
	padding: 0 15%;
}
.mid p {
	font-size: 18px;
}

.nutrimental {
	width: 100%;
	padding: 0 5%;
	background-image: url(/img/2019/nutri.png);
	background-repeat: no-repeat;
	background-size: 60px;
	background-position: 5% center;
	float: left;
	border-bottom: solid 3px #767676;
	margin-bottom: 30px;
}
.mid h2 {
	font-size: 30px;
	color: #4f4c4d;
	font-weight: 500;
}

.mid h3 {
	color: #767676;
	font-weight: normal;
	font-size: 20px;
}

.mid .button {
	width: 260px;
	height: 60px;
	border-radius: 40px;
	background-color: #f5a623;
	color: #fff;
	float: none;
	display: inline-block;
	line-height: 60px;
	font-size: 20px;
	font-weight: 500;
	margin: 10px 0;
	max-width:100%;
}

.promosdiv h3 {
	color: #4f4c4d;
	font-size: 25px;
	font-weight: 500;
}

.promosdiv .slick-slide img {
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
	border-radius: 30px;
}

.carouselpromos {
	padding: 0%;
}

.carouselpromos .slick-slide {
	padding: 0 1%;
}

.carouselpromos .slick-dots {
	width: 85%;
}
h3.textshare {
	width: 50%;
	float: left;
	font-size: 15px;
	font-weight: normal;
	color: #4f4c4d;
	padding-right: 5%;
	text-align: right;
}
.iconsshare {
	width: 50%;
	float: left;
}

.iconsshare li {
	width: 33%;
	display: inline-block;
	margin: 0;
}
.iconsshare .icon {
	max-width: 100%;
	width: 34px;
	filter: invert(1);
	opacity: .7;
	margin-top: 0px;
}

#loadplatos.Disney {
	background: #ffef00;
	margin-bottom: 2.5%;
}

.chaticon2 {
	display: none;
}

#prevslide {
	width: 25%;
	height: 400px;
	position: absolute;
	left: 0;
	background: transparent;
	top: 0;
	cursor: pointer;
	z-index:-100;
}

#nextslide {
	width: 25%;
	height: 400px;
	position: absolute;
	right: 0;
	background: transparent;
	top: 0;
	cursor: pointer;
	z-index:-100;
}


*, *:focus, *:active {outline:0;}

.categorias {
	position: fixed;
	top: 0;
	background: #fff;
	z-index: 2;
	margin-top: 0;
	padding-top: 10vh;
}

#loadplatos {
	margin-top: 140px;
}
#disclaimer {
	font-weight: 500;
	font-size: 15px;
	color: #3b3b3b;
	padding: 0 10%;
}
.sticker {
	width: 38px;
	height: 38px;
	position: absolute;
	background-size: 100%;
	margin-left: 1.5%;
	margin-top: -12px;
}

.Disney .sticker {
	width: 150px;
	height: 50px;
	position: relative;
	background-size: 100%;
	background-repeat: no-repeat;
	margin: 0 auto;
	margin-top: 0;
}
</style>
<div class="main">



	<?php include('lateral.php');?>



	<main role="main" class="<?php echo $clase;?>" data-url1="<?php echo $url;?>" data-url2="<?php echo $url2;?>">

	<div class="categorias">
		<ul class='timeline'>
		  <li class='' data-cat="Bebidas">Bebidas</li>
		  <li class='active' data-cat="Desayuno">Desayunos y almuerzos</li>
		  <li class='' data-cat="Comidas-cenas">Comidas y cenas</li>
		  <li class='' data-cat="Infantil">Ni&ntilde;os</li>
		  <li class='' data-cat="Postre">Postres</li>
		</ul>


	<div id="loadcategoria">

		<div class="carouselcats">
		<?php
		include('dbconnect.php');
			//$query = "SELECT cat2 FROM menu19 WHERE cat1='Desayuno' GROUP BY cat2";
		  $query = "SELECT MAX(cat1) AS cat1, MAX(cat2) AS cat2 FROM menu19 WHERE cat2 != '0' GROUP BY cat2  ORDER BY FIELD(cat2, 'Bebidas','Jugo','Café', 'Té', 'Alcohol', 'Favoritos', 'Fruta', 'Pan','Huevos', 'Especialidades Mexicanas-', 'Almuerzos','Entradas', 'Sopas', 'Ensaladas','Del mar', 'Carnes', 'Aves', 'Especialidades Mexicanas', 'Hamburguesas', 'Sándwiches y Molletes', 'Disney', 'Mini menú' )";
          $result = $mysqli->query($query) or die("Fall� la consulta $query");
          while($row = mysqli_fetch_assoc($result)){
						$state = mb_convert_case(strtolower($row['cat2']), MB_CASE_TITLE, "UTF-8");
            echo '
            <div class="itemcats '.$row['cat1'].'" data-parent="'.$row['cat1'].'" data-cat="'.$row['cat2'].'"><p>'.str_replace("-","",$row['cat2']).'</p></div>
            ';
          }

		?>
		</div>
		<div class="filtros" onclick="toggleFiltros();">Filtrar</div>



	</div>

	</div>

	<div id="loadplatos">
	</div>

	<div id="loaddetalle">
					<div class="mid">
					<div class="sticker"></div>
						<h1 id="nombreplato"></h1>
						<p id="descplato"></p>
						<div class="nutrimental"><p  id="nutriplato"></p></div>
						<h4 id="disclaimer"></h4>
						<h3></h3>
						<a class="button domiciliobtn" href="/domicilio"  id="domicilioplato" style="display:none;" onclick="domicilioPlato();">Pedir a domicilio</a><br>
						<a class="button ubicacionbtn" href="/ubicaciones" onclick="clickLocationsearched();" >Buscar sucursal</a>

					</div>
					<div class="mid promosdiv">
						<h3>Promociones aplicables:</h3>

						<div class="carouselpromos">
						<div><a href="https://vips.com.mx/cupones#20Descuento" id="linkcupon" data-promo="https://vips.com.mx/cupones#20Descuento"><img id="adcupon" data-lazy="https://vips.com.mx/img/2019/cupones/Cupon-20-desktop-min.png"></a></div>

							<div><a href="<?php echo $linkad1;?>" id="link1"><img id="ad1" data-lazy="/img/adicionales/0.png"></a></div>
							<div><a href="<?php echo $linkad1;?>" id="link2"><img id="ad2"  data-lazy="/img/adicionales/0.png"></a></div>
						</div>

						<h3 class="textshare">Ant&oacute;jaselo a todos</h3>
						<ul class="iconsshare">
							<a href="https://twitter.com/intent/tweet?text=&amp;url=<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" target="_blank"><li><img class="icon grow" src="/img/twitter.png"></li></a>
							<a href="https://www.facebook.com/sharer/sharer?u=<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" target="_blank"><li><img class="icon grow" src="/img/facebook.png"></li></a>
						</ul>
					</div>
	</div>

</div>

<script>
	$( document ).on( "ready" , function() {
		setInterval(function() {
			detallePlato();
    }, 6000);

	});

	$( document ).on( "ready" , function() {

	$('a[href="/nuevos-chilaquiles"]').hide();
		//alert(".timeline li[data-cat='<?php echo ucwords($url); ?>']");

		setTimeout(function(){
			//$(".timeline .active").trigger("click");
			$(".timeline li[data-cat='<?php echo ucwords($url); ?>']").trigger('click');
		},300);
		setTimeout(function(){
			//$("[data-slick-index='0']").click();
			$(".itemcats[data-cat='<?php echo $cat2; ?>']").click();
			checkDots();


		},500);

		setTimeout(function(){
			$("body").addClass("inited");
				var h1= $(".categorias").height() + $(".topnav").height();
				$("#loadplatos").css("margin-top", h1+"px");
		},1000);

		$('.carouselcats').slick({
			infinite: false,
			slidesToShow: 5,
			slidesToScroll: 5,
			variableWidth: true,
			lazyLoad: 'progressive',
			accessibility: true,
			arrows: false,
			dots:true,
			autoplay: false,
			autoplaySpeed: 4000,
			draggable: true,
			variableWidth: false,
		});

		$('.carouselpromos').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			lazyLoad: 'progressive',
			accessibility: true,
			arrows: false,
			dots:true,
			autoplay: true,
			autoplaySpeed: 3500,
			draggable: true,
			variableWidth: false,
		});


		$('.timeline li').on('click', function() {
			$(".timeline li").removeClass("active");
			$(this).addClass("active");
			$("#loadfiltro").removeClass("showfiltros");
			var filterClass = $(this).attr("data-cat");
			filterClass = "."+filterClass;
			//alert(filterClass);
			$('.carouselcats').slick('slickUnfilter');
			$('.carouselcats').slick('slickFilter', filterClass);
			setTimeout(function(){
			if($("main").hasClass("menucompleto")){
				$(".itemcats").first().click();
				checkDots();
			}
			},100);
		});

		$('.itemcats').on('click', function() {
			$("#loadfiltro").remove();
			$(".itemcats").removeClass("activeitem");
			$(this).addClass("activeitem");
			var filterClass1 = $(this).attr("data-cat");
			var filterClassp = $(this).attr("data-parent");
			$("#loadplatos").attr("class","");
			$("#loadplatos").addClass(filterClass1);
			$("#loaddetalle").attr("class", "");
			$("#loaddetalle").addClass(filterClass1);
			if($(".main").attr("data-url1")!= "" && $(".main").attr("data-url2")== ""){
				loadplatos(filterClass1);
			}
			if($(".main").attr("data-url2")!= ""){
				loadplatillo(filterClass1);
				setTimeout(function(){
					$(".slick-center").prev().trigger("click");
				},1000)
			}
			analytics.track("Product List Viewed", {
				category: filterClassp,
				subcategory: filterClass1
			});


		});

		function checkF2(){
			if ($(".currentfilter").length > 0){
				$("body").addClass('filtered');
			}
			else{
			$("body").removeClass('filtered');
			$(".resetfiltros").trigger("click");
			}
		}

		$('#loadplatos').on('click', function() {
			detallePlato();
		});
	});

	function loadplatos(cat){
		var categoria = cat;
		var txt = encodeURIComponent(categoria);
		//$("#loadplatos").load("/loadplatos.php?cat="+txt);
		$("#loadplatos").load("/loadplatos.php?cat="+txt, function() {
			orderPlates();
		});
	}
	function loadplatillo(cat){
		var categoria = cat;
		var txt = encodeURIComponent(categoria);
		//$("#loadplatos").load("/loadplatos.php?cat="+txt);
		$("#loadplatos").load("/loadplatos.php?id=<?php echo $plato;?>&cat="+txt, function() {
			orderPlates();
			$("main").removeClass("menuplatillo");
			$("main").addClass("menucompleto");
		});
	}


	function orderPlates(){
		$('.carouselplatos').slick({
			infinite: true,
			//centerPadding: '60px',
			slidesToShow: 3,
			centerMode: true,
			slidesToScroll: 1,
			focusOnSelect: true,
			lazyLoad: 'progressive',
			accessibility: true,
			arrows: false,
			dots:false,
			autoplay: false,
			autoplaySpeed: 4000,
			draggable: true,
		});
		setTimeout(function(){
			var h = $("#loadplatos").height();
			detallePlato();
			$("#loadfiltro").detach().detach().appendTo("#loadcategoria");
			//$("#loadplatos").css("height", h+"px");
		},100);

		$('.carouselplatos').on('afterChange', function(event, slick, currentSlide, nextSlide){
	detallePlato();
});
	}

	function detallePlato(){
		var idplato= $(".slick-center").attr("data-code");
		var nombre= $(".slick-center").attr("data-nombre");
		var desc= $(".slick-center").attr("data-desc");
		var nutri= $(".slick-center").attr("data-nutri");
		var domicilio= $(".slick-center").attr("data-domicilio");
		var disclaimer= $(".slick-center").attr("data-disclaimer");
		var icon= $(".slick-center").attr("data-icon");
		var adicional1= $(".slick-center").attr("data-ad1");
		var adicional2= $(".slick-center").attr("data-ad2");
		var link1= $(".slick-center").attr("data-url1");
		var link2= $(".slick-center").attr("data-url2");
		var url= $(".slick-center").attr("data-url");
		var sticker = 'url(/img/2019/menu/platos/'+icon+")";
		var foto = $(".slick-center img").attr("src");
		var cat1 = $(".slick-center").attr("data-parent");
		var cat2 = $(".slick-center").attr("data-cat");

		window.history.replaceState("", "", "/menu-m/"+url);
		$("#sharetw").attr("href", "https://twitter.com/intent/tweet?text=&amp;url=https://vips.com.mx/menu/"+url);
		$("#sharefb").attr("href", "https://www.facebook.com/sharer/sharer?u=https://vips.com.mx/menu/"+url);
		$("#nombreplato").html(nombre);
		$("#descplato").html(desc);
		$("#nutriplato").html(nutri);
		$("#disclaimer").html(disclaimer);
		if(domicilio == "1"){
			$("#domicilioplato").fadeIn();
		}
		else{
			$("#domicilioplato").fadeOut();
		}
		$("#ad1").attr("src", adicional1);
		$("#ad2").attr("src", adicional2);
		$("#link1").attr("href", link1);
		$("#link2").attr("href", link2);
		$("#link1").attr("data-promo", link1);
		$("#link2").attr("data-promo", link2);
		$(".sticker").css("background-image", sticker);

		analytics.track("Product Viewed", {
				  subcategory: cat2,
				  category: cat1,
				  name: nombre,
				  id: idplato,
				  url: 'https://vips.com.mx/menu/' + url,
				  image_url: foto
		});

	}
	function toggleFiltros(){
		$("#loadfiltro").toggleClass("showfiltros");
		$("#prevslide").css("z-index", "2");
		$("#nextslide").css("z-index", "2");
	}

	function hideFiltros(){
		$("#loadfiltro").removeClass("showfiltros");
	}

	function resetFiltros(cat2){
		$('.filtro').removeClass("currentfilter");
		$(".itemcats[data-cat='"+cat2+"']").trigger("click");
	}

	function filtra(cat3){
		$(cat3).toggleClass("currentfilter");
		setTimeout(function(){
			disp( $("#loadfiltro .currentfilter p span").toArray());
		},300)
	}

	function disp( divs ) {
		var a = [];
		for ( var i = 0; i < divs.length; i++ ) {
		var string = "'"+divs[ i ].innerHTML+"'";
		a.push( string );
		}
		var query = a.join( ' OR cat3 = ' );
		//alert(query);
		var parent = $("#loadplatos").attr("class");
		$("#loadplatos").load("/loadplatos.php?parent="+encodeURIComponent(parent)+"&subcat="+encodeURIComponent(query), function() {
			orderPlates();
		});
	}

	function checkDots(){
			if ($(".carouselcats .slick-slide").length > 5){
				$(".carouselcats .slick-dots").css("z-index", "4");
				$(".carouselcats .slick-dots").css("height", "auto");
				$(".carouselcats .slick-dots").css("overflow", "inherit;");
				$(".carouselcats .slick-dots").css("opacity", "1;");
			}
			else{
				$(".carouselcats .slick-dots").css("z-index", "-100");
				$(".carouselcats .slick-dots").css("height", "0");
					$(".carouselcats .slick-dots").css("overflow", "hidden");
					$(".carouselcats .slick-dots").css("opacity", "0;");
			}
	}

	function domicilioPlato(){
		analytics.track("Product Added", {
				  name: $(".slick-center").attr("data-nombre"),
				  subcategory: $(".slick-center").attr("data-cat"),
				  category: $(".slick-center").attr("data-parent")
			});
	}

	$("#link1").click(function(){
		var promo = $(this).attr("data-promo");
		promoViewedMenu(promo);
	});

	$("#link2").click(function(){
		var promo = $(this).attr("data-promo");
		promoViewedMenu(promo);
	});

	$("#linkcupon").click(function(){
		var promo = $(this).attr("data-promo");
		promoViewedMenu(promo);
	});








</script>
			<!-- Footer =============================-->

			<?php include('footerm.php');?>
