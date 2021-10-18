<?php
include('headerm.php');
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
}
else{
  header('Location: /buscar');
  exit(0);
}

require_once 'dbconnect2.php';
?>



<div class="main">

	<?php include('lateral.php');?>

	<main role="main">



<style>

#excelimg{
    width: 40px;
position: relative;
display: inline-block;
margin: 0 10px 0 0;
}
#excelimg img{
    width: 40px;
    position: relative;
}
#consultar {
    color: #fff;
}



#consultar {
    background: rgba(0,0,0,.5);
    padding: 40px;
    margin-bottom: 3%;
}

.highlight {
    background-color: yellow;
	color:#333;
}


.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
    background-color: #E77B00;
    border-color: #E77B00;
}

.pagination > li > a, .pagination > li > span {
    color: #E77B00;
}

.registrados-title {
    padding-bottom: 0;

}
.h2total {margin-bottom: 10px;}

</style>



	 <style>
.container {
    width: 100%;
    float: left;
    padding: 0 5%;
margin: 0;}
 .grid, .griditem{100%;}
.outline {
	display: inline-block;
	width: 100%;
	margin: 0;
	text-align: center;
	padding: 10%;
	font-family: arial, sans-serif;
	cursor: pointer;
	border-radius: 50%;
	font-size: .6em;
	line-height: 1.1;
	color: #fff;
	font-family: "Program", sans-serif;
	height: 100%;
	height: 100% !important;
}
.button-group.filters-button-group {
	padding: 1.5em 0%;
	text-align: center;

	max-height: 10em;
	width: 82%;
	/* float: left; */
	height: auto;
}
.outline img {
	max-width: 100%;
	transition: .35s all ease;
	padding: 5% 17.5% 0 17.5%;
	filter: brightness(0) invert(1);
}

.button {
	padding: .2em;
	border: none;
	border-radius: 30%;
	transition: .35s all ease;
	width: 7vw !important;
	max-width: 7vw;
	height: 7vw !important;
	margin: 0 .5em;
}
.button:hover> img{transition:.35s all ease; padding:2.5% 7.5%;}

.button.is-checked {
	border-radius: 50%;
}

.productos-list{width:100%; float:left;}

.titleh3{
	color: #f29100;
	font-size: 1.5em;
	text-align: left;
	font-family: "Program", sans-serif;

}
.titleh3::before {
	content: "";
	position: absolute;
	left: 0;
	top: 2em;
	height: 11px;
	width: 200px;
	border-bottom: 2px solid #f29100;
}
.griditem {
    width: 100%;
    float: left;
    padding: 0;
}

.cattienda {
	text-align: left;
	background: #00b7a4;
	color: #fff;
	/* padding: .3em 1em; */
	width: 50%;
	margin: 0;
	background-image: url(img/greenedge.png);
	/* background-size: 30%; */
	background-repeat: no-repeat;
	background-position: right;
	float: left;
	font-size: .8em;
	/* min-width: 150px; */
	font-weight: normal;
	/* font-family: arial, sans-serif; */
	clip-path: polygon(0 0, 70% 0%, 65% 100%, 0% 100%);
	padding: .5em 1em;
	min-width: 300px;
	background-size: 100%;
	margin-left: 5%;
}
.prodtienda {
	display: inline-block;
	width: 50%;
	margin:0;
	float:left;
}

.prodtienda img {
	width: 50%;
	display: inline-block;
	margin: 0 auto;
	padding: 0;
	float: left;
}

.prods{
	width: 100%;
	float: left;}

.cupon {
	display: inline-block;
	width: 100%;
	margin: 0;
	float: left;
	transition: .35s all ease;
	min-height: 320px;
	border-bottom: 1px solid #ccc;
}
.cupones-cont{width:100%;float:left;}

.cupon img {
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	float: left;
	padding: 10%;
	width: 90%;
	margin-left: 5%;
}

.prodbtns h3 {
	color: #ed7124;
	width: 100%;
	text-align: left;
	padding: 1em .5em;
	float: left;
}

.detailbtn {
	width: 100%;
	background: #979797;
	padding: .8em;
	color: #fff;
	float: left;
	margin-bottom: .5em;
	cursor: pointer;
	text-align: center;
	font-size: 1.1em;
	font-family: "pROGRAM",sans-serif;
	text-transform: none;
	border-radius: 30px;
	font-weight: 500;
}
.pidebtn {
	width: 100%;
	background: #f29100;
	padding: .8em;
	color: #fff;
	float: left;
	margin-bottom: .5em;
	cursor:pointer;
	text-align: center;
	font-size: 1.1em;
}
.grid{
	position: relative;
	height: 206.533px;
}

.imagenproduct {
	width: 100%;
	float: left;
}

.descproduct {
	float: left;
	width: 100%;
}

.descproduct h3 {
	color: #f29100;
	font-size: 1.2em;
	padding: 2.5% 5%;
	margin: 0;
	padding-bottom: .25em;
	width: 100%;
	float: left;
}
.descproduct p {
    font-family: arial, sans-serif;
    font-weight: normal;
    font-size: .8em;
        padding: 2em 5%;
}
.prodbtns {
	width: 100%;
	display: inline-block;
	padding: 2.5%;
	float: left;
}

.highlight {
    font-weight: bold;
}

.main {

	transition: all .4s ease;
	min-height: 50vh;
padding: 10vh 5%;
}

.resultpage h2 {
	color: #f29100;
	text-decoration: underline;
	margin-bottom: 0;
}
.resultpage p {
	margin-top: 10px;
}

.btn-mas {
	background: #bdbdbd;
	color: #fff;
	display: inline-block;
	padding: .5em 1em;
	width: 100%;
	min-width: 200px;
	max-width: 350px;
	font-family: "Program",sans-serif;
	margin: 1em 0;
	border: none;
	margin-top: 0;
	text-align: center;
}
</style>





<?php
	    $query  = trim($_GET['q']);
		$query  = strip_tags($query);
		$query  = htmlspecialchars($query);

    // gets value sent over search form

    $min_length = 3;
    // you can set minimum length of the query if you want

    if(strlen($query)>2){ // if query length is more or equal minimum length then
	$consulta1 = " (`pagina` LIKE '%".$query."%' OR `url` LIKE '%".$query."%' OR `descripcion` LIKE '%".$query."%') ";
        $query = htmlspecialchars($query);

        // changes characters used in html to their equivalents, for example: < to &gt;

	}

			 $query = htmlspecialchars($query);

        // changes characters used in html to their equivalents, for example: < to &gt;

        //$query = mysqli_real_escape_string($query);

        // makes sure nobody uses SQL injection

        $raw_results = "SELECT * FROM paginas
            WHERE $consulta1 ";





			$result = $mysqli->query($raw_results);







			$numfilas = $result->num_rows;


        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

        if($numfilas> 0){ // if one or more resultss are returned do following
		$numresults = 1;

		  ?>

<div class="griditem">
			<h3 class="titleh3"><?php echo "Mostrando resultados para <strong><i>" .$query ."</i></strong>"; ?></h3>




			<div class="cupones-cont">





			<?php


            while($results = mysqli_fetch_array($result)){
            // $results = mysqli_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			 $pagina =  $results['pagina'];
				 $descripcion=  $results['descripcion'];
         $url =  $results['url'];
	 


			?>

				<a href="<?php echo $url; ?>">
				<div class="resultpage">
				<div class="detailstext">
				<h2><?php echo $pagina; ?></h2>
				<p><?php echo $descripcion; ?></p>
				</div>
				<a class="btn-mas" href="<?php echo $url; ?>">Ver más</a>
				</div>
				</a>




            <?php
}


        }
		
		else{$numresults=0;}
       if($numresults == 0){ // if there is no matching resultss do following
            echo "<center><img src='img/notfound.png' style= 'width:200px; margin:0 5%;'></br><p style='padding: 5%'>No se encontraron resultados para '<strong><i>"  .$query . "</i></strong> '. Intenta nuevamente con otro término.</p></center>";
        }





?>


		</div>
		</div>



<script src="/vips18/js/jquery.mark.min.js">
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$('.scrollto').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
});//]]>



</script>
<script type="text/javascript">
 $(document).ready(function() {


var highlightRe = /<span class="highlight">(.*?)<\/span>/g,
    highlightHtml = '<span class="highlight">$1</span>';

	var formatRegexp = function(q) {
    q = q.replace(/e/i,'[eéèêëEÉÈÊË]');
    q = q.replace(/a/i,'[aàâäAÀÁÂÃÄÅÆ]');
    q = q.replace(/c/i,'[cçC]');
    q = q.replace(/i/i,'[iïîIÌÍÎÏ]');
    q = q.replace(/o/i,'[oôöÒÓÔÕÖ]');
    q = q.replace(/u/i,'[uüûUÜÛÙÚ]');
    q = q.replace(/y/i,'[yYÿ^yÝ]');
    return q;
}

<?php
/**
 * Converts all accent characters to ASCII characters.
 *
 * If there are no accent characters, then the string given is just returned.
 *
 * @param string $string Text that might have accent characters
 * @return string Filtered string with replaced "nice" characters.
 */

function remove_accents($string) {
 if (!preg_match('/[\x80-\xff]/', $string))
  return $string;
 if (seems_utf8($string)) {
  $chars = array(
  // Decompositions for Latin-1 Supplement
  chr(195).chr(128) => 'A', chr(195).chr(129) => 'A',
  chr(195).chr(130) => 'A', chr(195).chr(131) => 'A',
  chr(195).chr(132) => 'A', chr(195).chr(133) => 'A',
  chr(195).chr(135) => 'C', chr(195).chr(136) => 'E',
  chr(195).chr(137) => 'E', chr(195).chr(138) => 'E',
  chr(195).chr(139) => 'E', chr(195).chr(140) => 'I',
  chr(195).chr(141) => 'I', chr(195).chr(142) => 'I',
  chr(195).chr(143) => 'I', chr(195).chr(145) => 'N',
  chr(195).chr(146) => 'O', chr(195).chr(147) => 'O',
  chr(195).chr(148) => 'O', chr(195).chr(149) => 'O',
  chr(195).chr(150) => 'O', chr(195).chr(153) => 'U',
  chr(195).chr(154) => 'U', chr(195).chr(155) => 'U',
  chr(195).chr(156) => 'U', chr(195).chr(157) => 'Y',
  chr(195).chr(159) => 's', chr(195).chr(160) => 'a',
  chr(195).chr(161) => 'a', chr(195).chr(162) => 'a',
  chr(195).chr(163) => 'a', chr(195).chr(164) => 'a',
  chr(195).chr(165) => 'a', chr(195).chr(167) => 'c',
  chr(195).chr(168) => 'e', chr(195).chr(169) => 'e',
  chr(195).chr(170) => 'e', chr(195).chr(171) => 'e',
  chr(195).chr(172) => 'i', chr(195).chr(173) => 'i',
  chr(195).chr(174) => 'i', chr(195).chr(175) => 'i',
  chr(195).chr(177) => 'n', chr(195).chr(178) => 'o',
  chr(195).chr(179) => 'o', chr(195).chr(180) => 'o',
  chr(195).chr(181) => 'o', chr(195).chr(182) => 'o',
  chr(195).chr(182) => 'o', chr(195).chr(185) => 'u',
  chr(195).chr(186) => 'u', chr(195).chr(187) => 'u',
  chr(195).chr(188) => 'u', chr(195).chr(189) => 'y',
  chr(195).chr(191) => 'y',
  // Decompositions for Latin Extended-A
  chr(196).chr(128) => 'A', chr(196).chr(129) => 'a',
  chr(196).chr(130) => 'A', chr(196).chr(131) => 'a',
  chr(196).chr(132) => 'A', chr(196).chr(133) => 'a',
  chr(196).chr(134) => 'C', chr(196).chr(135) => 'c',
  chr(196).chr(136) => 'C', chr(196).chr(137) => 'c',
  chr(196).chr(138) => 'C', chr(196).chr(139) => 'c',
  chr(196).chr(140) => 'C', chr(196).chr(141) => 'c',
  chr(196).chr(142) => 'D', chr(196).chr(143) => 'd',
  chr(196).chr(144) => 'D', chr(196).chr(145) => 'd',
  chr(196).chr(146) => 'E', chr(196).chr(147) => 'e',
  chr(196).chr(148) => 'E', chr(196).chr(149) => 'e',
  chr(196).chr(150) => 'E', chr(196).chr(151) => 'e',
  chr(196).chr(152) => 'E', chr(196).chr(153) => 'e',
  chr(196).chr(154) => 'E', chr(196).chr(155) => 'e',
  chr(196).chr(156) => 'G', chr(196).chr(157) => 'g',
  chr(196).chr(158) => 'G', chr(196).chr(159) => 'g',
  chr(196).chr(160) => 'G', chr(196).chr(161) => 'g',
  chr(196).chr(162) => 'G', chr(196).chr(163) => 'g',
  chr(196).chr(164) => 'H', chr(196).chr(165) => 'h',
  chr(196).chr(166) => 'H', chr(196).chr(167) => 'h',
  chr(196).chr(168) => 'I', chr(196).chr(169) => 'i',
  chr(196).chr(170) => 'I', chr(196).chr(171) => 'i',
  chr(196).chr(172) => 'I', chr(196).chr(173) => 'i',
  chr(196).chr(174) => 'I', chr(196).chr(175) => 'i',
  chr(196).chr(176) => 'I', chr(196).chr(177) => 'i',
  chr(196).chr(178) => 'IJ',chr(196).chr(179) => 'ij',
  chr(196).chr(180) => 'J', chr(196).chr(181) => 'j',
  chr(196).chr(182) => 'K', chr(196).chr(183) => 'k',
  chr(196).chr(184) => 'k', chr(196).chr(185) => 'L',
  chr(196).chr(186) => 'l', chr(196).chr(187) => 'L',
  chr(196).chr(188) => 'l', chr(196).chr(189) => 'L',
  chr(196).chr(190) => 'l', chr(196).chr(191) => 'L',
  chr(197).chr(128) => 'l', chr(197).chr(129) => 'L',
  chr(197).chr(130) => 'l', chr(197).chr(131) => 'N',
  chr(197).chr(132) => 'n', chr(197).chr(133) => 'N',
  chr(197).chr(134) => 'n', chr(197).chr(135) => 'N',
  chr(197).chr(136) => 'n', chr(197).chr(137) => 'N',
  chr(197).chr(138) => 'n', chr(197).chr(139) => 'N',
  chr(197).chr(140) => 'O', chr(197).chr(141) => 'o',
  chr(197).chr(142) => 'O', chr(197).chr(143) => 'o',
  chr(197).chr(144) => 'O', chr(197).chr(145) => 'o',
  chr(197).chr(146) => 'OE',chr(197).chr(147) => 'oe',
  chr(197).chr(148) => 'R',chr(197).chr(149) => 'r',
  chr(197).chr(150) => 'R',chr(197).chr(151) => 'r',
  chr(197).chr(152) => 'R',chr(197).chr(153) => 'r',
  chr(197).chr(154) => 'S',chr(197).chr(155) => 's',
  chr(197).chr(156) => 'S',chr(197).chr(157) => 's',
  chr(197).chr(158) => 'S',chr(197).chr(159) => 's',
  chr(197).chr(160) => 'S', chr(197).chr(161) => 's',
  chr(197).chr(162) => 'T', chr(197).chr(163) => 't',
  chr(197).chr(164) => 'T', chr(197).chr(165) => 't',
  chr(197).chr(166) => 'T', chr(197).chr(167) => 't',
  chr(197).chr(168) => 'U', chr(197).chr(169) => 'u',
  chr(197).chr(170) => 'U', chr(197).chr(171) => 'u',
  chr(197).chr(172) => 'U', chr(197).chr(173) => 'u',
  chr(197).chr(174) => 'U', chr(197).chr(175) => 'u',
  chr(197).chr(176) => 'U', chr(197).chr(177) => 'u',
  chr(197).chr(178) => 'U', chr(197).chr(179) => 'u',
  chr(197).chr(180) => 'W', chr(197).chr(181) => 'w',
  chr(197).chr(182) => 'Y', chr(197).chr(183) => 'y',
  chr(197).chr(184) => 'Y', chr(197).chr(185) => 'Z',
  chr(197).chr(186) => 'z', chr(197).chr(187) => 'Z',
  chr(197).chr(188) => 'z', chr(197).chr(189) => 'Z',
  chr(197).chr(190) => 'z', chr(197).chr(191) => 's',
  // Euro Sign
  chr(226).chr(130).chr(172) => 'E',
  // GBP (Pound) Sign
  chr(194).chr(163) => '');
  $string = strtr($string, $chars);
 } else {
  // Assume ISO-8859-1 if not UTF-8
  $chars['in'] = chr(128).chr(131).chr(138).chr(142).chr(154).chr(158)
   .chr(159).chr(162).chr(165).chr(181).chr(192).chr(193).chr(194)
   .chr(195).chr(196).chr(197).chr(199).chr(200).chr(201).chr(202)
   .chr(203).chr(204).chr(205).chr(206).chr(207).chr(209).chr(210)
   .chr(211).chr(212).chr(213).chr(214).chr(216).chr(217).chr(218)
   .chr(219).chr(220).chr(221).chr(224).chr(225).chr(226).chr(227)
   .chr(228).chr(229).chr(231).chr(232).chr(233).chr(234).chr(235)
   .chr(236).chr(237).chr(238).chr(239).chr(241).chr(242).chr(243)
   .chr(244).chr(245).chr(246).chr(248).chr(249).chr(250).chr(251)
   .chr(252).chr(253).chr(255);
  $chars['out'] = "EfSZszYcYuAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy";
  $string = strtr($string, $chars['in'], $chars['out']);
  $double_chars['in'] = array(chr(140), chr(156), chr(198), chr(208), chr(222), chr(223), chr(230), chr(240), chr(254));
  $double_chars['out'] = array('OE', 'oe', 'AE', 'DH', 'TH', 'ss', 'ae', 'dh', 'th');
  $string = str_replace($double_chars['in'], $double_chars['out'], $string);
 }
 return $string;
}

/**
 * Checks to see if a string is utf8 encoded.
 *
 * @author bmorel at ssi dot fr
 *
 * @param string $Str The string to be checked
 * @return bool True if $Str fits a UTF-8 model, false otherwise.
 */
function seems_utf8($Str) { # by bmorel at ssi dot fr
 $length = strlen($Str);
 for ($i = 0; $i < $length; $i++) {
  if (ord($Str[$i]) < 0x80) continue; # 0bbbbbbb
  elseif ((ord($Str[$i]) & 0xE0) == 0xC0) $n = 1; # 110bbbbb
  elseif ((ord($Str[$i]) & 0xF0) == 0xE0) $n = 2; # 1110bbbb
  elseif ((ord($Str[$i]) & 0xF8) == 0xF0) $n = 3; # 11110bbb
  elseif ((ord($Str[$i]) & 0xFC) == 0xF8) $n = 4; # 111110bb
  elseif ((ord($Str[$i]) & 0xFE) == 0xFC) $n = 5; # 1111110b
  else return false; # Does not match any model
  for ($j = 0; $j < $n; $j++) { # n bytes matching 10bbbbbb follow ?
   if ((++$i == $length) || ((ord($Str[$i]) & 0xC0) != 0x80))
   return false;
  }
 }
 return true;
}

function utf8_uri_encode($utf8_string, $length = 0) {
 $unicode = '';
 $values = array();
 $num_octets = 1;
 $unicode_length = 0;
 $string_length = strlen($utf8_string);
 for ($i = 0; $i < $string_length; $i++) {
  $value = ord($utf8_string[$i]);
  if ($value < 128) {
   if ($length && ($unicode_length >= $length))
    break;
   $unicode .= chr($value);
   $unicode_length++;
  } else {
   if (count($values) == 0) $num_octets = ($value < 224) ? 2 : 3;
   $values[] = $value;
   if ($length && ($unicode_length + ($num_octets * 3)) > $length)
    break;
   if (count( $values ) == $num_octets) {
    if ($num_octets == 3) {
     $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]) . '%' . dechex($values[2]);
     $unicode_length += 9;
    } else {
     $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]);
     $unicode_length += 6;
    }
    $values = array();
    $num_octets = 1;
   }
  }
 }
 return $unicode;
}

/**
 * Sanitizes title, replacing whitespace with dashes.
 *
 * Limits the output to alphanumeric characters, underscore (_) and dash (-).
 * Whitespace becomes a dash.
 *
 * @param string $title The title to be sanitized.
 * @return string The sanitized title.
 */
function slugify($title) {
 $title = strip_tags($title);
 // Preserve escaped octets.
 $title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
 // Remove percent signs that are not part of an octet.
 $title = str_replace('%', '', $title);
 // Restore octets.
 $title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);
 $title = remove_accents($title);
 if (seems_utf8($title)) {
  if (function_exists('mb_strtolower')) {
   $title = mb_strtolower($title, 'UTF-8');
  }
  $title = utf8_uri_encode($title, 200);
 }
 $title = strtolower($title);
 $title = preg_replace('/&.+?;/', '', $title); // kill entities
 $title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
 $title = preg_replace('/\s+/', '-', $title);
 $title = preg_replace('|-+|', '-', $title);
 $title = trim($title, '-');
 return $title;
}

?>

  var term = formatRegexp('<?php echo slugify($_POST['q']); ?>');





 });



$(document).ready(function () {


    var keyword = '<?php echo $_POST['q'] ?>';

    // Determine selected options
    // Remove previous marked elements and mark
    // the new keyword inside the context

        $(".descproduct").mark(keyword);

});




</script>





  <!-- Footer =============================-->
  <?php include('footerm.php');?>
