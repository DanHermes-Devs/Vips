<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

$entrada = $_GET['id'];

$url = $_GET['url'];
if(strlen($url)<1){$url ='vips';}
$int = intval($url);
$entrada = $int;

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$url = $uriSegments[2]; //returns foo
$int = intval($url);

if ($detect->isMobile()) {
        header('Location: /entrada-m/'.$url.'');
    exit(0);
}
require_once 'dbconnect.php';


$sql3 = "SELECT * FROM entradas WHERE id_entrada = $int OR url = '$url'";
		$result = $mysqli->query($sql3);

			$row2=mysqli_fetch_assoc($result);
			$ide =$row2["id_entrada"];
			$entrada = $ide;
			$titulo =$row2["titulo"];

			$texto =$row2["texto"];
			$imagenn =$row2["imagen"];

			$video =$row2["video"];
			$poster =$row2["poster_video"];
			$fondo =$row2["fondo"];

			$metatitulo =$row2["metatitulo"];
			$metadescripcion =$row2["metadescripcion"];


		if(strlen($video)>1){
			$showvideo ="display:block;";
			$videovips = $video;
		}
		else{ $showvideo ="display:none;";}



 if(strlen($entrada) <1 && strlen($url) <1){
	 
	  header('Location: /vipstorias/');
 }

    if($entrada ==11 || $url == "conviertete-en-un-heroe-con-vips"){

    	$titulo = "Conviértete en un héroe con Vips";
    	 $imagenn = "portada_heroe.jpeg";
    	 $fondo = "fondo_heroe.png";
    	 $texto = '<p>El día de hoy te queremos contar sobre cómo tú puedes ser todo un héroe y ayudar a la vida de muchísimas personas, tan solo con comer en Vips.
      </p>



    <p><a href="https://www.movimientovapormicuenta.org/" target="_blank">¿Cómo? Pues uniéndote al Movimiento Va Por Mi Cuenta</a>, una iniciativa de Fundación Alsea A. C. cuyo objetivo es brindar acceso a la alimentación a los niños mexicanos que más lo necesitan. El Movimiento ha logrado entregar hasta ahora más de un millón y medio de comidas a miles y miles de niños en pobreza alimentaria, y trabaja día con día para ofrecer todavía más; lo único que nos falta, eres tú.
     </p>


    <p class="cont60">¡Así es! Tú puedes ayudar a esta gran misión de una forma súper sencilla: cada que vayas a tu Vips favorito y no sepas qué pedir, te recomendamos elegir nuestras deliciosas donas o algún otro pan dulce de nuestra carta; por cada dona o pieza de pan, Vips aporta al movimiento, lo que nos ayudará a alimentar a más y más niños, pues queremos que ningún niño de México vuelva a irse a dormir con el estómago vacío. </p>

    <p>¡Los logros de Va Por Mi Cuenta han sido increíbles! A la fecha, hemos logrado construir ya 10 comedores en el Estado de México, Ciudad de México, Nuevo León, Coahuila y Oaxaca que no sólo ayudan a niños y niñas todos los días, sino que han tomado la misión de también alimentar a las mamás que van a tener un bebé, asegurando una alimentación de calidad desde antes del nacimiento. En Nuestro Comedor, los pequeños también aprenden importantes lecciones humanas sobre los valores, la dignidad y la familia.
      </p>

    <img src="/img/blog/IMG_4033.JPG" class="img40">

    <p>¿Quieres seguirnos ayudando? Encuentra más Productos Con Causa que donan a Va Por Mi Cuenta en otros restaurantes como Domino’s Pizza, Starbucks, Burger King, Chili’s, The Cheesecake Factory, California Pizza Kitchen, P. F. Chang’s, Italianni’s y El Portón. ¡Créenos que cuando ayudas, sabe mejor! 😜  </p>



    <img src="/img/blog/G0022999.JPG" class="img30">


    <img src="/img/blog/ecatepecalsea20.jpg" class="img30">
    ';
    	 $metatitulo ="Conviértete en un héroe con Vips ";
    	 $metadescripcion = "Vips y el Movimiento Va Por Mi Cuenta se unen en la misión de alimentar a los niños de México junto a Domino’s Pizza, Starbucks, Burger King, Chili’s, The Cheesecake Factory, California Pizza Kitchen, P. F. Chang’s, Italianni’s y El Portón. ";
    }


    if($entrada ==12 || $url == "dia-de-los-abuelos-en-vips"){

    	$titulo = "Día de los abuelos en Vips";
    	 $imagenn = "Portada_abuelo_vips.png";
    	 $fondo = "Fondo_abuelovips.png";
       $texto = '

       <p>Los días 28 de agosto, celebramos en todo México el día de los abuelos y las abuelas, un día donde les agradecemos lo mucho que han hecho por nosotros, los hijos de sus hijos. </p>

<p>Este año, nos dimos a la tarea de recopilar algunas de las historias que los y las abuelitas de México han vivido en Vips. Convocamos a nuestros seguidores en redes sociales a contarnos sus historias para encontrar al <b>Abuelit@ más fan de Vips</b> y estas son algunas de las que nos compartieron: </p>

<p>Primero queremos contarte de <a href="https://www.facebook.com/notes/vips/t%C3%A9rminos-y-condiciones-abuelit-m%C3%A1s-fan-de-vips/2594259227254755/?comment_id=10157910430002818&comment_tracking=%7B%22tn%22%3A%22R4%22%7D" target="_blank">Martha</a>, que no espero a que sus nietos la incluyeran al concurso y nos mandó su propio relato. Martha dice que ella ha sido nuestra fan desde los años setenta, cuando venía a desayunar con nosotros antes de irse a trabajar, una tradición que sigue celebrando con una de sus nietas. Y no es por presumir, pero también nos cuenta que jamás ha tenido una queja en estos casi 50 años y que nuestro café es inolvidable…. </p>

<p><a href="https://www.facebook.com/notes/vips/t%C3%A9rminos-y-condiciones-abuelit-m%C3%A1s-fan-de-vips/2594259227254755/?comment_id=10157908209817818&comment_tracking=%7B%22tn%22%3A%22R3%22%7D" target="_blank">Marisol</a> nos platicó que hace muchos años, fue con su familia a comer su favorita, la sopa Vips y que su abuela le enseñó a hacer gusanitos de papel con las envolturas de los popotes. Al poner los gusanitos a flotar, Marisol quedó encantada del truco y que, desde entonces, no pasa una semana sin que visiten su Vips favorito.  </p>

<p><a href="https://www.facebook.com/notes/vips/t%C3%A9rminos-y-condiciones-abuelit-m%C3%A1s-fan-de-vips/2594259227254755/?comment_id=10157915844162818&comment_tracking=%7B%22tn%22%3A%22R2%22%7D" target="_blank">Patricia</a> nos habló de su papá Enrique, que ahora es abuelo. Él trabajó por muchos años con nosotros y sigue recordando con cariño sus años en Vips. Nos cuenta que él sigue platicando historias sobre su tiempo en el restaurante y que es un asiduo visitante <a href="https://www.facebook.com/VIPSMX/photos/a.359027127817/10157956029902818/?type=3&permPage=1" target="_blank">Mar</a> nos platicó que ella desde siempre desayuna en Vips los domingos con su familia y nunca supo por qué, hasta que descubrió que uno de nuestros meseros ¡le salvó la vida a su abuelo! De ahí la tradición…  </p>

<p>Y esta es sólo una probadita de las <a href="https://www.facebook.com/VIPSMX/posts/10157956037722818?__xts__%5B0%5D=68.ARAUj1fjQb_MNvTcCc8nmHAR0ja9s40QIjK8T2A-ZqLCS17XVUcE3xklYue6KOjaiU7MYCH19o9k3Ek4F8PT9_19SIezo5sF0sp20TyLSKfFB12hdBq-ILzebPxihmbz7e3-BgLAfIfo8Y6U2CCECV-9fIIg0LBbdeclMssZdG65BV36wZ_TTUU&__tn__=-R" target="_blank">cientos de historias</a> que todos ustedes compartieron en nuestro Facebook.  Y si quieres saber aún más, te dejamos <a href="http://www.revistaerre.com/gastronomia.htm" target="_blank">este otro artículo</a> sobre nuestro concurso. ¿Ya nos sigues en redes sociales? Vuélvete nuestro fan virtual y participa en futuras dinámicas que estaremos compartiendo, te puedes ganar un premio 😉 </p>


    <img src="/img/blog/abuelo1.jpg" class="img33">


    <img src="/img/blog/abuelo2.jpg" class="img33">

      <img src="/img/blog/abuelo3.png" class="img33">
    ';
    	 $metatitulo ="Día del abuelo en Vips";
    	 $metadescripcion = "En México celebramos el día del abuelo el 28 de agosto y Vips restaurantes recopiló historias de algunos de nuestros fans sobre sus abuelitos y abuelitas. ";
    }


    if($entrada ==13 || $url == "regresan-los-clasicos-vips"){

    	$titulo = "Regresan los clásicos Vips";
    	 $imagenn = "ClasicosBlog.png";
    	 $fondo = "Fondo.png";
       $texto = '

       <p>
En estos más de 50 años de Vips, hay platillos que sin duda se quedan en la mente de nuestros invitados. Además de un cafecito legendario, ofrecemos comidas increíbles que por algo han permanecido como las favoritas de los mexicanos. El día de hoy, con motivo de nuestra promo de Clásicos a $59, queremos presentarte algunos de ellos y platicarte qué los hace tan maravillosos.
        </p>

        <p><b>Enchiladas Suizas</b> <br><br>
El rey de los clásicos, nuestras enchiladas de pollo con una cremosa salsa verde y cubiertas de gouda gratinado. La leyenda cuenta que fueron inspiradas en las recetas del chef de Maximiliano de Habsburgo, quien solía mezclar comida mexicana con influencias europeas. Más de 100 años después, la receta sigue siendo parte de la cultura mexicana. Conoce mas de ellas en <a href="https://insolenterevista.com/de-donde-son-realmente-las-enchiladas-suizas/" target="_blank">este artículo.</a></p>

<p>
<b>Crepas de Cajeta</b><br><br>
Otro favorito de nuestros invitados, las crepas rellenas de queso crema y acompañadas de helado y plátano son el postre ideal para cualquier antojo. Las crepas son un invento francés que originalmente se creó para celebrar el día de la Candelaria, pero que con el tiempo se volvió tan popular, que ahora ese día es conocido como “El día de las Crepas” en Francia.
</p>

  <img src="/img/blog/ClasicosContenidoBlog.png" class="img100">


<p>
<b>Sopa Especial Vips</b><br><br>
Esta ni te la tenemos que contar, sabemos que conoces a la perfección nuestro inimitable caldo y los frescos tallarines de nuestra sopa estrella. Todas las culturas del mundo tienen alguna versión de este platillo, y suele ser conocido como un remedio natural para recuperar la salud, un hecho que incluso se ha investigado científicamente.
</p>

  <img src="/img/blog/PepitosBlog.png" class="img30" style="float: right;">
<p>
<b>Pepitos Vips de Pollo</b><br><br>
Un platillo inconfundiblemente nuestro; sin importar a qué Vips vayas, encontraras el mismo pan suculento que hace de nuestros pepitos toda una experiencia. Una milanesa de pollo frita a la perfección y un poco de guacamole vuelven a este platillo toda una obra de arte. El pepito es un tipo de sándwich o torta propio de México y Venezuela, aunque originalmente en Europa, pepito se refiere a un tipo de pan dulce. Sin importar el origen, ¡nosotros tenemos los mejores!
</p>





<p>
Y aquí no acaba esto, el caldo tlalpeño, la hamburguesa Vips clásica con queso, el cheesecake con fresas y el queso fundido también son parte de nuestros clásicos, y podrás probarlos todos por tan solo $59 por tiempo limitado. ¿Qué dices?</p>



    ';
    	 $metatitulo ="Los clásicos de Vips ahora con descuento";
    	 $metadescripcion = "¡Nuestra promoción de platillos clásicos de Vips a un precio insuperable te espera! Enchiladas suizas, crepas, sopa especial vips, caldo tlalpeño, hamburguesas, pepitos, cheesecake y queso fundido en promoción.";
    }


	   if($entrada ==14 || $url == "las-maravillas-del-cafecito"){

        	$titulo = "Las maravillas del cafecito";
        	 $imagenn = "Portada_cafecito.png";
        	 $fondo = "Fondo_cafecito.png";
           $texto = '

           <p>
Con motivo del Día Internacional del Café, en Vips queremos contarte un poco sobre la historia de esta bebida que nos ha acompañado por miles de años y que hoy en día, adorna las mesas de todos los Vips de México. Además, queremos presumirte nuestras más nuevas variedades de cappuccinos y lattes, ¿estás listo?

            </p>


      <img src="/img/blog/cafe1.jpg" class="img30" style="float: right;">

	  <br><br><br>

            <p>☕ Su origen Se cuenta que fue descubierto por pastores etíopes en el siglo IX, que descubrieron que sus cabras se volvían muy inquietas al comer una planta en específico. Llevaron el fruto a un monje y este decidió hacer una infusión.
 </p>

    <p>
   ☕ ¿Semilla, flor o fruto? El café es la semilla del fruto de la planta, ¡así que es dos cosas a la vez! Y existen 2 tipos de planta, Arábiga y Robusta, siendo el primero el más popular.
    </p>
	  <br><br><br>

  <img src="/img/blog/foto_cafecito.png" class="img30" style="float: left;">

    <br><br><br>
    <p>
    ☕ Es Espresso, no Expresso Aunque muchos de nosotros le llamamos expresso a esa pequeña tacita de café, su verdadero nombre es espresso, una palabra italiana que significa “presionado”, refiriéndose a la técnica que se utiliza para obtenerlo. La primera máquina de espressos fue patentada en 1884, pero la tecnología ha avanzado muchísimo desde entonces.

    </p>

    <p>
   ☕ Cafecinho Mucha gente no lo sabe, pero Brasil es el principal productor mundial de café, con alrededor de 40% de la producción que consumimos.

    </p>

      <br><br><br>
    <p>

	🔴 Lo nuevo de Vips Además de nuestros clásicos de siempre, hemos agregado a nuestro menú algunas nuevas opciones para aquellos que buscan algo diferente. Por ejemplo el Cappuccino de Almendra Especial, un sabor complejo y elegante con el que nunca habíamos experimentado y que sabemos te encantará. O el nuevo Moka Especial, con una explosión de sabor a chocolate como nunca antes habías probado. ¿Se te antojaron? ¡Búscalos en nuestro menú!


    </p>

        ';
        	 $metatitulo ="Las maravillas del cafecito Vips en el Día Internacional del Café ";
        	 $metadescripcion = " En Vips restaurantes celebramos el pasado día del café con estos datos curiosos sobre la legendaria bebida. ¡No te quedes sin probar los nuevos cappuccinos, lattes y mokas de Vips! ";
        }



        if($entrada ==15 || $url == "que-viva-el-huevo"){

           	$titulo = "¡Que viva el huevo!";
           	 $imagenn = "DiaDelHuevo.jpg";
           	 $fondo = "DiaDelHuevoPortada.jpg";
              $texto = '


              <p>
  Un festejo que suena un poco gracioso, pero que conmemora algo tan icónico como delicioso, el <a href="https://style.shockvisual.net/vips-desayuno-completo-incluye-huevos">Día Internacional del Huevo </a>es una festividad que comenzó hace tan solo 15 años, pero que nos recuerda las mil y un formas en que podemos disfrutar este clásico del desayuno.
               </p>




   	  <br>

               <p>Pochados, fritos o revueltos, como base de postre, de pan o de guiso; los huevos son sin duda la proteína más versátil del mundo y una de las más consumidas. ¡En especial en México! Ya que somos el 4o país que más come huevos en el mundo, con 23 kilos por persona al año en promedio. <b>Eso es al menos un huevo diario.</b></p>

       <p>
       El huevo es el ingrediente más dinámico de toda la cocina, más aún que la harina o la sal. Además de su delicioso sabor, el huevo es utilizado para emulsionar, airear, clarificar, capear, adornar, espesar y muchísimas otras cosas. De hecho, los pliegues de los sombreros de chef están ahí para representar las 100 cosas que se pueden hacer con un huevo en la cocina francesa tradicional.
       </p>
   	  <br>

     <img src="/img/blog/DiaDelHuevo.jpg" class="img30" style="float: left;">

       <br>
       <p>
       Un dato interesante es que el color, la consistencia y el sabor del huevo están determinados por la alimentación de la gallina, entonces cada país y cada región tiene huevos completamente diferentes al resto del mundo, ¡cada huevo es único! Y muchos tampoco saben que la yema es uno de los pocos alimentos que nos proveen naturalmente de vitamina D, lo que los hace aún más sorprendentes. Ah, y ¿sabes que determina el tamaño del
 huevo? Pues la edad de la gallina; las jóvenes ponen pequeñitos y las mayores ponen grandes huevos.
       </p>

       <p>
    Ahora que ya conoces todo lo que hay que saber sobre este <a href="https://es.wiktionary.org/wiki/oblongo" target="_blank">oblongo</a> ingrediente, déjanos contarte sobre los huevos de Vips. Con nosotros encontrarás huevos en todas sus presentaciones; desde los sencillos revueltos a tu gusto, hasta los legendarios y deliciosos huevos Vips, pasando por los divorciados, motuleños, suizos y hasta una selección de huevos para cuidar la línea. No importa de qué tengas antojo, en Vips vas a encontrar tantos sabores como pliegues en el sombrero de un chef.
       </p>



           ';
           	 $metatitulo ="¡Que viva el huevo! Vips celebra el Día Internacional del Huevo 2018";
           	 $metadescripcion = "En Vips restaurantes celebramos este día con nuestra amplia selección de desayunos como los huevos Vips, los suizos o todos nuestros huevos balance, reducidos en calorías y grasas saturadas.";
           }




           if($entrada ==16 || $url == "de-golosos-y-tragones-vips-y-el-pan-de-muerto"){

              	$titulo = "De golosos y tragones: Vips y el pan de muerto";
              	 $imagenn = "panmuerto1_.jpg";
              	 $fondo = "panmuertof_.jpg";
                 $texto = '


                 <p>
  El Día de Muertos es una de las festividades más representativas de nuestro país, una fusión de culturas y tradiciones que crearon nuevo, algo lleno de alegría, color y fiesta. Y, ¿qué sería del mes de octubre sin un pan de muerto? Toda una tradición en estas fechas y toda una celebridad en sí mismo, este delicioso pan tiene una historia tan sorprendente como la fecha que conmemora. Déjanos contarte sobre ella, e invitarte a probar nuestra versión de este clásico mexicano.</p>




      	  <br>
    <img src="/img/blog/panmuerto1_.jpg" class="img30" style="float: right;">
                  <p>El origen del pan de muerto nunca ha
sido del todo claro. Sabemos que antes de la conquista, se celebraba a los santos difuntos con figuras de amaranto, una tradición que como muchas otras, cambió por completo tras la llegada de los españoles a América. Con el tiempo, el amaranto dio paso al trigo y ahí comienza esta deliciosa historia.</p>

          <p>
El pan de muerto es sazonado con flores de azahar y esencia de naranja, lo que le da ese sabor inconfundible. Su forma redonda representa el círculo de la vida y los pequeños huesitos que lo decoran representan los puntos cardinales, que en la cultura azteca eran representados por Tezcatlipoca, Tláloc, Quetzalcóatl y Xipetotec. En algunas partes de nuestro país, el pan es decorado con azúcar color rojo, representando la antigua tradición de cubrir a los difuntos de cinabrio o sulfato de mercurio, de un característico color carmesí. Así que como vez, su forma no es casualidad, sino una representación de sus miles de años de historia.
        </p>
      	  <br>

        <img src="https://vips.com.mx/img/pan-muerto/Adicional.jpg" class="img30" style="float: left;">

          <br>
          <p>
        ¿Quién dirá que una pequeña confección tendría tantos secretos que contarnos?... Y ahora déjanos contarte sobre nuestro secreto: ¡tenemos el mejor pan de muerto que has probado! Si no nos crees, pregúntale a las más de 130,000 personas que lo probaron el año pasado, ¡los números no mienten!
          </p>

          <p>
Si nos visitas desde ahora hasta el 4 de noviembre, podrás pedir <a href="https://vips.com.mx/landing-pan-muerto" target="_blank">tu pan de muerto</a> natural, relleno de cajeta o relleno de chocolate y así descubrir con nosotros porque de golosos y tragones... están llenos los Vips. 💀
      </p>



              ';
              	 $metatitulo ="De golosos y tragones: Vips y el pan de muerto";
              	 $metadescripcion = "Vips restaurantes celebra la llegada de octubre con el tradicional pan de muerto natural, relleno de cajeta o de chocolate.";
              }
			  
			  
           if($entrada ==17 || $url == "open-kitchen-night"){

              	$titulo = "Open Kitchen Night";
              	 $imagenn = "openKitchenP.png";
              	 $fondo = "openKitchenF.png";
                 $texto = '

				     <img src="/img/blog/openk2.jpg" class="img30" style="float: right;">

                 <p>
 En Vips trabajamos arduamente para ofrecerte sólo lo mejor. Somos un restaurante familiar tipo cafetería con más de 50 años de ser el lugar de encuentro y convivencia para personas de todas las edades, cuyo objetivo principal es ofrecer <a href="https://www.mnientretenimiento.com/inicio/noticias/vips-una-cocina-con-sabor-de-hogar/" target="_blank">alimentos memorables</a>, con un sabor inigualable, servicio excepcional y los más altos estándares de calidad. </p>




      	  <br>

                  <p>Desde el 2015, hemos realizado una extensiva renovación; tenemos el objetivo de ser <a href="http://mundoejecutivo.com.mx/economia-negocios/2018/10/18/vips-crecera-mas-mexico-antes-exportar-su-marca" target="_blank">la mejor cadena de restaurantes</a> y de sorprender a nuestros nuevos clientes, así como a quienes nos han acompañado a través de los años, con un gran ambiente, servicio y comida memorable. Hoy, los clientes son más exigentes, buscan un servicio que supere sus expectativas; un valor agregado, además de una experiencia extraordinaria. La renovación de Vips es parte de un proceso integral, basado en cuatro ejes principales: Cultura, Servicio, Imagen y Producto. </p>

				  
				     <img src="https://vips.com.mx/img/blog/openk1.png" class="img20" style="float: left;">
          <p>
En Vips contamos con <a href="https://www.elblogdeyes.com/vips-abre-las-puertas-cocina-openkitchennigh/" target="_blank">deliciosos platillos para toda la familia</a>. Ofrecemos un menú especialmente desarrollado para niños, diseñado bajo los lineamientos nutricionales de The Walt Disney Company para promover el consumo de platillos más saludables; fuera de lo parques de Disney, somos el único restaurante que cuenta con la certificación de Mickey Check, una manera en la que los padres de familia pueden identificar alimentos que promueven el consumo de frutas, verduras, granos enteros, proteínas y lácteos bajos en grasa.
        </p>
      	  <br>

     

          <br>
          <p>
       Como puedes ver, en Vips trabajamos sin parar para seguir creciendo, seguir innovando y seguir siendo tu lugar de reunión por excelencia
          </p>

          <p style="text-align:center;">
¡Nos vemos en Vips! 
      </p>



              ';
              	 $metatitulo =" Open Kitchen Night";
              	 $metadescripcion = " Vips presenta sus innovaciones en los procesos de elaboración de platillos, así como los altos estándares de calidad que mantienen en cada una de estas preparaciones a través de un recorrido con medios de comunicación. ";
              }
			  
			  
			  if($entrada ==18 || $url == "asi-se-vive-el-dia-de-muertos-en-vips"){

              	$titulo = "Así se vive el día de muertos en Vips";
              	 $imagenn = "dia_muertos.jpg";
              	 $fondo = "muertos_fondo.jpg";
                 $texto = '

				         <div class="img30" style="float: right;">
							<div class="carousel">
		
			<div>
				<img src="/img/blog/muertos/01.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/02.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/03.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/04.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/05.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/06.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/07.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/08.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/09.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/10.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/11.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/12.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/13.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/14.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/15.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/16.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/17.jpg">
			</div>

			<div>
				<img src="/img/blog/muertos/18.jpg">
			</div>
			
			<div>
				<img src="/img/blog/muertos/18.jpg">
			</div>
			
		
		</div>
					 </div>
                 <p>
				 El Día de Muertos es una de las celebraciones mexicanas más conocidas alrededor del mundo. Una festividad milenaria que continúa siendo parte integral de nuestra cultura y que en Vips ¡nos encanta! Continúa leyendo y entérate de cómo lo vivimos este año... </p>




      	  <br>

                  <p>En Vips amamos la cultura mexicana y nos preocupamos por mantener vivas nuestras tradiciones, así que en nuestras más de 250 sucursales, decidimos celebrar a lo grande esta fecha. Cada uno de nuestros restaurantes fue decorado por el equipo; papel picado, calaveritas, altares, globos, ¡y hasta una calaca de mesero sirviendo en nuestra fuente de sodas! </p>

				  
				    
          <p>
Por supuesto, no podían faltar los disfraces. Tuvimos de todo, monstruos, superhéroes, vampiros y en uno de nuestros restaurantes, hasta un equipo entero de brujas. Otro detalle que no podía faltar son los altares; nuestros colaboradores crearon bellísimos diseños conmemorando a todos aquellos que se nos fueron durante este año. Cada altar era único, celebrando no sólo la fecha, sino la ciudad donde se encontraba. 
 
        </p>
      	  <br>

     

          <br>
          <p>
       Para los que no venían con mucho espíritu de festejar, tuvimos una maquillista de fiesta. Así, hasta el más serio salió con un look fantasmagórico de Vips. Y claro, ¡no podía faltar el <a href="https://vips.com.mx/landing-pan-muerto" target="_blank">pan de muerto</a>! Natural, relleno de chocolate o de cajeta; el delicioso pan de Vips es toda una tradición en estas fechas y el cierre perfecto para la temporada. 
          </p>

          <p style="text-align:center;">
Aquí, hasta a los fantasmas les decimos ¡nos vemos en Vips! 
      </p>



              ';
              	 $metatitulo ="Así se vive el día de muertos en Vips";
              	 $metadescripcion = "En Vips restaurantes celebramos a lo grande estas fechas y queremos compartirte un poco de lo que se vivó este 1º de noviembre. ¡Nos vemos en Vips!";
              }
			  
			  
			   if($entrada ==19 || $url == "los-platillos-navidenos-y-su-historia"){

              	$titulo = "Los platillos navideños y su historia";
              	 $imagenn = "Portada-navidad.png";
              	 $fondo = "navidad.png";
                 $texto = '
				 
				 <h2 style="width:100%; text-align:center;">Todo lo que siempre quisiste saber sobre esos clásicos que preparamos año con año </h2>


                 <p>
Otro año llega a su fin y Vips lo celebra como sólo Vips sabe; con un delicioso sabor. Para estas fiestas, hemos preparado nuestra increíble selección de cada año, así como diversos desayunos que no te puedes perder. Pero, ¿conoces la historia de los romeritos en mole? ¿Sabes por qué se come pavo en navidad? Sigue leyendo y nosotros te contaremos los secretos que esconden estos platillos…  </p>

 <img src="/img/blog/navidad-arte.png" class="img100" style="float: right;">


      	  <br>

                  <p>Los <b>romeritos</b>, como su nombre lo dice, son de la misma familia que el romero de olor que usamos para cocinar. En México, son parte del grupo de los quelites, que en náhuatl significa “planta comestible”; otros quelites que de seguro conoces son el huauzontle y el berro. Eran alimentos muy preciados para los aztecas, aunque con el tiempo su uso disminuyó. No fue sino hasta la creación del mole, que los romeritos se volvieron todo un clásico; y no particularmente para el día de Navidad, ¡sino para el recalentado!, cuando se había acabado el guajolote de la noche anterior y se tenía que reemplazar con otro ingrediente. 
 </p>

				  
				  
          <p>
La historia del <b>pavo navideño</b> es un poco menos clara… Sabemos que originalmente en Europa se comía ganso en Navidad, y que al llegar la tradición a América, se tuvo que reemplazar por el guajolote. Aunque muchos dicen que tanto su preparación, como la tradición de comerlo en estas fechas, son legado de los aztecas. Tal vez nunca sabremos la verdad, pero lo que sí nos queda claro, es que su preparación con relleno de nueces, carne y pasas, son una herencia norteamericana que con el paso del tiempo hemos adquirido en México. 
 
        </p>
      	 

     
          <p>
       Ahora pasamos al <b>bacalao a la vizcaína</b>, un platillo 100% europeo que se comía sobre todo en vigilia, y que hoy en día se ha convertido en un clásico navideño. El bacalao es un pez inmenso que vive muy por debajo de los 0 grados centígrados en las aguas que rodean a Noruega, un animal carnívoro y uno de los peces más grandes del mundo. La leyenda cuenta que el mercader Simón Gurtubay Zubero de la región de Vizcaya en España ordenó muchos más peces de los que necesitaba, entonces, su pueblo lo empezó a usar en todos sus platillos. Lo agregaron a su famosa salsa vizcaína y el resultado fue este legendario platillo. 
          </p>

          <p>
Otro platillo icónico de estas fiestas es la <b>pierna adobada</b>, y aunque esta no tiene una historia que contar, su sabor habla por sí mismo. ¿No quieres esperar hasta la noche de Navidad para probarlos todos? ¡Entonces ven a Vips! ¿Los quieres todos en tu cena de Navidad? ¡Pues también tenemos para llevar! 
      </p>
	  
	  <a href="cenas-navidad" style="width:100%; text-align:center; float: left; font-size: 1.5em;">Conócelos y haz tu pedido</a>



              ';
              	 $metatitulo ="Los Navideños de Vips y su historia ";
              	 $metadescripcion = "Pavo, romeritos, bacalao y pierna, ¿conoces la historia de estos platillos clásicos de Navidad? ¡Vips restaurantes te la cuenta!";
              }


			  if($entrada ==20 || $url == "ya-tenemos-ganador-del-viaje-doble-al-super-bowl-cortesia-de-visa"){

              	$titulo = "¡Ya tenemos ganador del viaje doble al Super Bowl cortesía de Visa!";
              	 $imagenn = "PortadaNFL.png";
              	 $fondo = "FondoNFL.png";
                 $texto = '
							

                <p>
					Como probablemente sabes, esta temporada de americano hemos transmitido los mejores partidos en todos nuestros Vips y hemos invitado a los usuarios de nuestra Tarjeta de Lealtad digital a visitarnos y llevarse mercancía oficial de la NFL así como un viaje doble al partido más importante del año, el Super Bowl LIII. ¡Así es! Vips, junto con Visa y la NFL, regalaron un viaje a Atlanta, Georgia para los amantes del futbol americano y por fin se ha definido un ganador:
				 </p>

				 <p>
					<b><a href="https://vips.com.mx/viajaconnflyvisa">Germán Basurto</a></b> es un asiduo invitado que vive en la ciudad de Cuernavaca y es fan de los Steelers de Pittsburgh. Él nos acompañó a todos y cada uno de los partidos que transmitimos y ahora, podrá disfrutar del juego del año en esa increíble ciudad al sur de Estados Unidos.
				 </p>
				 
				 <p>
					El Super Bowl LIII será el más grande en la historia de la NFL, donde se enfrentarán los Rams de Los Ángeles contra los Patriots de Nueva Inglaterra, un equipo conocido por ganar su lugar en el Super Bowl una y otra vez.
				 </p>

				 <p>
					Se jugará el día 3 de febrero en el Mercedes-Benz Stadium, con una capacidad de 75,000 asistentes. Aún no se sabe qué equipos serán los elegidos, pero lo que está claro es que el show de medio tiempo será a cargo de Maroon 5. <b>Para que te des una idea, ¡se espera un gasto de al menos 1.3 billones de dólares en cerveza alrededor de todo Estados Unidos!</b>
				 </p>

				 <p>
					Por supuesto, en Vips podrás venir a ver el partido, y te recomendamos probar nuestras nuevas entradas que están increíbles. El Plato mixto es de nuestros favoritos; un inmenso platillo con molletes, sincronizadas, tacos dorados y hasta un delicioso huarachito. ¿O qué tal las nuevas Papas al horno? La de Tres quesos trae una salsa cremosa espectacular y la de Chili tiene un sabor tan auténtico, que te hará sentir que estás en el estadio presenciando el Super Bowl.
				 </p>

				 <p>
					Así que ya sabes, si quieres disfrutar de el Super Bowl como nunca, <a href="https://vips.com.mx/viajaconnflyvisa">¡Nos vemos en Vips!</a>
				 </p>

				  
	



              ';
              	 $metatitulo ="¡Ya tenemos ganador del viaje doble al Super Bowl cortesía de Visa!";
              	 $metadescripcion = "Germán Basurto es un asiduo invitado que vive en la ciudad de Cuernavaca y es fan de los Steelers de Pittsburgh. Él nos acompañó a todos y cada uno de los partidos que transmitimos y ahora, podrá disfrutar del juego del año en esa increíble ciudad al sur de Estados Unidos.";
              }
			  
			  
			  if($entrada ==21 || $url == "tu-historia-con-nuestras-enchiladas-los-relatos-de-nuestros-invitados"){

              	$titulo = "Tu historia con nuestras enchiladas: Los relatos de nuestros invitados";
              	 $imagenn = "Portada_enchiladas.png";
              	 $fondo = "Fondo_enchiladas.png";
                 $texto = '
				 <style>b {font-size: 1.2em;}
				 h5 {
					width: 100%;
					padding: 0 5%;
					text-align: right;
					margin-top: 0;
					padding-top: 0;
					color: #666;
					font-style: italic;
					font-size: 1em;
				}
				 </style>	

                <p>
					A través de estos más de 50 años, Vips ha sido partícipe en la vida de millones de personas, es por esto que le pedimos a nuestros comensales que nos compartieran las historias que han vivido con uno de nuestros platillos más legendarios: las enchiladas.
				 </p>

				 <p>
					<b>Ella no creía, hasta que vio la luz…</b></br>
					Bueno, la historia es así; a mí realmente no me gustaban las enchiladas tanto, pero cuando las probé en el Vips cambié de opinión. Yo las únicas enchiladas que comía son las de mi hermana porque las hace muy ricas, pero la sazón en otras no me satisfacía mucho. Entonces fui al Vips y cuando las probé me encantaron, me enamoraron. Es un platillo que regularmente pido porque aparte de llenador está delicioso y sobretodo que si no cocina mi hermana sus enchiladas, puedo ir al Vips y también me alegran el día. De hecho, me encantan las Rancheras gratinadas y las Suizas que no tienen comparación más que el Vips; las adopto, le quitó la competencia a otros lugares, me encantaron. Para mi Vips es como mi segunda casa.
					
				 </p>
				 <h5>Humberto Jesús Goytia Montes</h5>


				 <p>
					<b>El encuentro de dos mundos</b></br>
					Desde chico soy fanático de las Suizas, pero un día las pedí y mi mamá pidió las de Mole, me dio a probar y también me encantaron. A la siguiente visita le pedí a la señorita que me trajera la mitad de Suizas y la mitad de Mole a lo cual me indicó que no era posible. Mi mamá hablo con el Capitán y le hizo la sugerencia de ponerle salsa Suiza a la mitad y Mole a la otra mitad, el Capitán accedió y me trajeron el platillo con la mitad de cada una. A partir de ahí siempre fui a la misma sucursal y el Capitán siempre me concedió mi deseo, después me cambié de domicilio y he tratado de pedirlo así y no lo he logrado, siempre recordaré a ese Capitán y espero encontrarlo algún día…
					
				 </p>
				 <h5>Octavio Vidales Picos</h5>

				 <p>
					<b>Que viva el amor… por los descuentos</b></br>
					Mi esposa me hizo el favor de pasar a recoger mi ropa a la tintorería, ya que no me iba a dar tiempo de pasar a recogerla a mi. Me comentó que su única recompensa sería una cena en el lugar de mi elección. Se que ella merece mucho, pero era fin de quincena, por lo que decidí llevarla a cenar a un lugar que no me costará mucho dinero y que tuviera un ambiente agradable. No podía darme el lujo de gastar tanto…. Así que vi una lona con unas promociones que desde mi punto de vista parecían poco creíbles, así que nos metimos al Vips y antes de sentarnos llame a un mesero y me asesoro en cuestión de promociones, evitando que mi esposa se enterará de los precios, de lo contrario me armaría un teatrito. Así que cuando nos sentamos, le dije a mi esposa que le recomendaría unas enchiladas que ya había probado con anterioridad y que estaban deliciosas, cuando ni siquiera había visitado un Vips de noche. Así que pidió unas enchiladas Suizas y un refresco. Yo pedí unas alitas y también un refresco, para cuando terminamos de cenar, mi esposa tenía una sonrisa enorme y no paraba de decir que sabían deliciosas. Lo mejor de todo esto es que termino dándome las gracias por la cena y lo mejor es que sólo gaste un poco más de 200 pesos. Así que no gaste mucho y para mi esposa ¡seguiré siendo el amor de su vida!
					
				 </p>
				 <h5>Gilberto Velázquez Herrera</h5>

				 

				  
	



              ';
              	 $metatitulo ="Tu historia con nuestras enchiladas: Los relatos de nuestros invitados";
              	 $metadescripcion = "A través de estos más de 50 años, Vips ha sido partícipe en la vida de millones de personas, es por esto que le pedimos a nuestros comensales que nos compartieran las historias que han vivido con uno de nuestros platillos más legendarios: las enchiladas.";
              }

			  if($entrada ==22 || $url == "mas-historias-con-nuestras-enchiladas-los-relatos-de-nuestros-invitados"){

              	$titulo = "Más historias con nuestras enchiladas: Los relatos de nuestros invitados";
              	 $imagenn = "PortadaEnchiladas2.png";
              	 $fondo = "FondoEnchiladas2.png";
                 $texto = '
				 <style>b {font-size: 1.2em;}
				 h5 {
					width: 100%;
					padding: 0 5%;
					text-align: right;
					margin-top: 0;
					padding-top: 0;
					color: #666;
					font-style: italic;
					font-size: 1em;
				}
				 </style>	

                <p>
					Seguimos recibiendo tus anécdotas con Vips, <a href="reydelaenchilada">entra aquí y mándanos tu historia</a>, ¡puede que te lleves un premio!
				 </p>

				 <p>
					<b>Fantasías enchiladas de ayer y hoy presenta…</b></br>
					Caminaba por el Yaqui, ya eran las 3pm y yo sin desayunar… Volteo para cruzar la calle y alguien me decía “psss, psss” y volteo y no veo a nadie. De nuevo me hacen psss, psss, psss y volteo nuevamente pero veo hacia arriba y no era nadie, eran mis Enchiladas suizas que desde la fotografía colgada de las ventanas del Vips me decían “ven, veeen, cómenos, estamos deliciosas”. Entré y pedí mis únicas y deliciosas enchiladas con su caldillo verde y su queso gratinado, mmmmmm ¡riquísimas!
					
				 </p>
				 <h5>Patty Pozos Chávez</h5>


				 <p>
					<b>Como hechas en casa</b></br>
					Hace ya un año mas o menos, vinieron unos compadres de Sonora a visitarnos, andaban paseando acá en la CDMX y la verdad nos tomaron por sorpresa a mi esposo y a mi. Aparte nos estaban remodelando unas partes de la casa y había un desastre en todos lados, que no sabía ni donde estaban mis trastes de la cocina, Entonces se me ocurrió pedir Enchiladas de Vips, pero para que pensaran que yo cociné, pedí todas iguales... Quedaron encantados con “mis enchiladas”, me pidieron la receta y pues no sabía ni qué decir. Total que tuve que echar a andar mi imaginación e inventar una receta, después de unos días mi comadre me habló para decirme que no le habían quedado igual, que ahora que volvieran a venir (y eso sería más pronto de lo que pensé) las haría conmigo para aprender y pues tuve que confesarle la verdad... Y total que todos nos fuimos a comer las ricas Enchiladas a Vips jajaja...
					
				 </p>
				 <h5>Martha Laura Hernández Pérez</h5>

				 <p>
					<b>El que vio la luz</b></br>
					Tendría unos 8 o 9 años y nunca antes había estado en un Vips, todo me parecía increíble, que hubiera manteles con fotos y que yo pudiera iluminar en los dibujos me parecía fantástico, a esa edad yo no comía picante y las únicas Enchiladas que conocía eran las de mole y para mí picaban. Aunque las había probado, recuerdo que mi hermana mayor pidió unas Enchiladas suizas y no me imaginaba como serían hasta que llegaron a la mesa, entonces vi que no eran cafés y no tenían mole, quizá mi cara de extrañeza y el gusto con el que las comía mi hermana la motivaron a preguntarme, “¿Quieres?”. “¿Pican?” Contesté. Ella me dijo que no y ya tenía preparado un bocado en su tenedor con rumbo a mi boca entonces por primera vez las probé y si no sólo no picaban, sino que eran muy ricas.<br>

					Desde entonces no las perdono, cada que puedo las pido, ahora con los nuevos sabores ya he probado las Norteñas, las de Pipián y las de Frijoles negros con chicharrón y la verdad sigo queriendo probar nuevos sabores. Vips no me ha decepcionado, siempre se puede confiar.
					
				 </p>
				 <h5>Miguel Alvarado-Pérez</h5>

				 

				  
	



              ';
              	 $metatitulo ="Más historias con nuestras enchiladas: Los relatos de nuestros invitados";
              	 $metadescripcion = "Seguimos recibiendo tus anécdotas con Vips, mándanos tu historia, ¡puede que te lleves un premio!";
              }

			  if($entrada ==23 || $url == "redescubre-nuestro-rico-sabor"){

              	$titulo = "Redescubre nuestro rico sabor";
              	 $imagenn = "PortadaMainstream.png";
              	 $fondo = "FondoMainstream.png";
                 $texto = '


                <p>
					Todo México conoce Vips, de eso no hay duda; pero hemos notado que con el tiempo, mucha gente olvidó los grandes momentos que tenemos para ofrecer. La oferta en nuestro país se ha ampliado, la gente cambia… Son muchas las razones, pero de lo que estamos seguros, es que todos que se reencuentra con nosotros, se vuelven a enamorar.
				 </p>
				 
				 <img class="img100" src="/img/blog/crepascajeta.png">

				 <p>
					Es por esto que hemos decidido lanzar la campaña de #RedescubreVips, porque queremos que todo el país vea de lo que se está perdiendo. Estamos muy orgullosos de los cambios que hemos hecho a través de los últimos años, y sabemos que todos nuestros invitados disfrutan al máximo cuando nos visitan. Esperamos que aquellos que venían con sus papás, los que venían a hacer la tarea y a tomar café hace tiempo, nos den otra oportunidad y se sorprendan con todo lo que pueden encontrar en Vips.
					
				 </p>
				 
				 	 <img class="img100" src="/img/blog/huevos.png">
				


				 <p>
					
					Para abrir la campaña, decidimos hacer un pequeño experimento donde invitamos a distintos grupos de personas a probar nuestro sabor a ciegas; los llevamos vendados a uno de nuestros Vips, y al llegar, no pudieron ver a donde entraban. Ya dentro, lo único que podían ver eran cortinas blancas, todo era un misterio; y pues, para qué te contamos más, mejor velo tu mismo:
					
				 </p>
				 
				<video  style="margin:0 10%; width:80%;" controls="" muted="" class="fillWidth visible-lg" id="myVid" poster="/redescubreelsabor/images/postersabor.jpg">
					<source src="/redescubreelsabor/RedescubreVipsLargo.mp4" type="video/mp4; ">        
					Your browser does not support the video tag.
				</video>
				

			

              ';
              	 $metatitulo ="Redescubre nuestro rico sabor";
              	 $metadescripcion = "Redescubre nuestro rico sabor es una campaña donde Vips te reta a volverte a enamorar de su increíble selección. ¿Te atreves?";
              }



			  if($entrada ==24 || $url == "las-enchiladas-de-vips-aun-tienen-mucho-que-contar-los-relatos-de-nuestros-invitados"){

				$titulo = "Las enchiladas de vips aún tienen mucho que contar: los relatos de nuestros invitados";
				 $imagenn = "PortadaEnchilada3.png";
				 $fondo = "fondoEnchilada3.png";
			   $texto = '
			   <style>b {font-size: 1.2em;}
			   h5 {
				  width: 100%;
				  padding: 0 5%;
				  text-align: right;
				  margin-top: 0;
				  padding-top: 0;
				  color: #666;
				  font-style: italic;
				  font-size: 1em;
			  }
			   </style>	

			  <p>
			  ¡Bienvenido a nuestra tercera entrega! Las historias continúan llegando día tras día y estamos muy contentos de compartirte 6 de nuestras favoritas. Te invitamos a continuar leyendo y a descubrir por qué, más de 50 años después, México sigue enamorado de nuestras enchiladas.

			   </p>

			   <p>
				  <b>Amor con sabor a enchilada	</b></br>
				  Tengo una historia de amor… Fui con mis amigas a cenar al Vips unas ricas enchiladas suizas, que son mis favoritas. Estábamos platicando, en eso, se acercó un chico para presentarse. Se llamaba Jefferson y me preguntó que qué era lo que comía y le dije que enchiladas suizas. Él dijo “¡oh! pediré unas porque se ven deliciosas”. Continuó platicando con nosotras y lo invitamos a que se sentara en la mesa. Hicimos sobremesa para esperar a que terminara de cenar y me pidió mi Facebook. De ahí no nos hemos vuelto a separar, el 20 de febrero de 2019 cumplimos 5 años juntos y seguimos celebrando con ricas enchiladas suizas en Vips.
  
			   </p>
			   <h5>Jazmín Aguilar  </h5>


			   <p>
				  <b>Recuerdos escolares </b></br>
				  Los aromas y sabores son un tesoro para la mente. Hoy fui a Vips por unas enchiladas de mole con mi mejor amiga y el aroma nos hizo recordar la primera vez que nos fuimos de pinta, y el sabor nos hizo recordar que, en vez de irnos a un lugar como una plaza, parque o algo, fuimos a comer. Fuimos a la casa de la abuela y nos castigó por faltar a la escuela, pero esas enchiladas fueron inolvidables. Hoy en Vips al probarlas recordamos esa aventura y estábamos atacadas de risa de esa aventura.

			   </p>
			   <h5>Beatriz Viridiana Zamora Trejo
			   </h5>

			   <p>
				  <b>Enchiladas por la paz				  </b></br>
				  Las cosas en el día no estuvieron nada bien entre mi esposo y yo… No pudimos cocinar y estamos aquí comiendo unas deliciosas enchiladas suizas. Nos encantaron a ambos, ¡tanto que su sabor nos ayudó en la reconciliación! Estamos súper contentos, gracias por ponerle sabor y sazón a nuestra relación.

			   </p>
			   <h5>Martina Severiano			   </h5>

			   <p>
			   <b>Convenciendo a la suegra
			   </b></br>
			   Invite a comer a mi suegra y me comento que no quería de mole porque sólo el mole negro le daba el toque a las enchiladas y ese día le pedí unas enchiladas de mole Vips y salió encantada por su sabor y su calidad. Y falta que pruebe la de Tres chiles, que están suculentas y me dijo que para la próxima visita las probaría.

			</p>
			<h5>Miguel Del Valle Rueda De León
			</h5>

			  

		  

			';
				 $metatitulo ="Las enchiladas de vips aún tienen mucho que contar: los relatos de nuestros invitados";
				 $metadescripcion = "Las enchiladas Vips han acompañado a las familias mexicanas por más de 50 años, estas son sus historias.";
			}
			
			  if($entrada ==25 || $url == "fundacion-flor-de-la-paz-cambia-al-mundo-desde-el-primer-sorbo"){

              	$titulo = "Fundación Flor de la Paz: Cambia al mundo desde el primer sorbo";
              	 $imagenn = "Portada_flor.png";
              	 $fondo = "Fondo_flor.png";
                 $texto = '
				 
				  <p>
				Como sabes, en Vips nos preocupamos por todas las comunidades donde nosencontramos y siempre buscamos trabajar con aliados que compartan nuestrosvalores y objetivos. En esta ocasión, queremos contarte sobre Flor de la Paz, una marca mexicana de té de hoja suelta 100% orgánico que puedes encontrar en Vips.</p>

				         <div class="img30" style="float: right;">
							<div class="carousel">
		
			<div>
				<img src="/img/blog/galeriaflor/flor-de-la-paz-19843.png">
			</div>

			<div>
				<img src="/img/blog/galeriaflor/flor-de-la-paz-19811.png">
			</div>
			
			<div>
				<img src="/img/blog/galeriaflor/flor-de-la-paz-19813.png">
			</div>

			<div>
				<img src="/img/blog/galeriaflor/flor-de-la-paz-19815.png">
			</div>

			<div>
				<img src="/img/blog/galeriaflor/flor-de-la-paz-19825.png">
			</div>
			
			<div>
				<img src="/img/blog/galeriaflor/flor-de-la-paz-19834.png">
			</div>

			<div>
				<img src="/img/blog/galeriaflor/flor-de-la-paz-19835.png">
			</div>


			
		
		</div>
					 </div>
                




      	  <br>

                  <p>La fundación Flor de la Paz trabaja bajo un modelo de agricultura (o como ellos lo llaman,Agri-Cultura) 100% orgánico y sustentable, el cual pone hincapié en el cuidado de la tierra.Un modelo de trabajo que, en vez de buscar explotar los recursos naturales, buscasanarlos, respetando los ciclos de las plantas y procurando que el terreno de cultivo seencuentre siempre saludable y pueda proveer de flores herbales a las próximas generaciones</p>

				  
				    
          <p>
Uno de los pilares de la Fundación es el empleo digno, se preocupan por ofrecer a la comunidad una mejor calidad de vida día tras día, apoyando en educación, vivienda, medio ambiente y muchas otras áreas.  Esto es un nuevo modelo de altruismo sustentable que no depende de donativos, pues está encaminado a generar empleo, siempre fomentando una cultura agrícola saludable, contribuyendo en la educación y promoviendo la salud en el campo y zonas marginadas de México.
 
        </p>
      	  <br>

     

          <br>
          <p>
       Los tés, además de deliciosos, ¡son funcionales! Sus mezclas herbales están planeadaspara ayudarte, con fórmulas como “Serenidad” para esos momentos de estrés, o “BuenProvecho” para después de comer. O qué tal “Anochecer”, para un descanso placentero, y por supuesto, los clásicos como Manzanilla, Cedrón, Toronjil y muchos otros que puedes encontrar en Vips. Siempre hechos con flores 100% libres de agroquímicos y pesticidas.
          </p>
		  
		  <img class="img100" src="/img/blog/FlorDeLaPaz.png">

          <p style="text-align:center; float:left; width:100%;">
Así que ya sabes, cada que visites Vips, pide uno de los deliciosos tés Flor de la Paz ydisfruta de un sabor con causa.
      </p>
	  <h3 style="text-align:center; float:left; width:100%;"" >¡Visita la Fundación Flor de la Paz en su <a href="http://flordelapaz.com/">sitio web</a>, <a href="https://www.facebook.com/FundacionFlorDeLaPaz">Facebook</a> e <a href="https://www.instagram.com/flordelapaz_mx/">Instagram</a>!</h3>



              ';
              	 $metatitulo ="Fundación Flor de la Paz: Cambia al mundo desde el primer sorbo";
              	 $metadescripcion = "En esta ocasión, queremos contarte sobre Flor de la Paz, una marca mexicana de té de hoja suelta 100% orgánico que puedes encontrar en Vips.";
              }
			  


			  if($entrada ==26 || $url == "que-viva-la-reina-de-las-enchiladas-vips"){

              	$titulo = "¡Que viva la Reina de las Enchiladas Vips!";
              	 $imagenn = "Portadafam.png";
              	 $fondo = "Fondo-fam.png";
                 $texto = '
				 
				  <p>
				Después de una ardua lucha, el reino de las enchiladas Vips por fin se encuentra en paz. Distintas
familias reales pelearon los títulos de Duque de las Suizas, Caballero de las de Chicharrón, entre
muchos otros y por fin hemos llegado al final de esta batalla campal…</p>

<p>Su alteza real <b style="font-size:19px;">Blanca Lilia Rocha Escobedo</b> ha sido coronada como <a href="https://vips.com.mx/reydelaenchilada">La Reina
de las Enchiladas de Vips</a> y como sus súbditos, nos pone muy contentos
contar con su reverenda presencia.</p>

<h2 style="text-align: center;">La lucha por el trono en números:</h2>

		
<p>• <b>12,915 participantes</b> que comieron enchiladas y pasaron su Tarjeta de Lealtad digital de Vips
(si quieres tu Tarjeta, obtenla <a href="/promociones">aquí</a>)</p>

<p>• <b>54,361 órdenes de enchiladas</b> pedidas<br>
<b>Las más populares:<br>
- 20,412 Suizas<br>
- 11,950 de Pipián verde<br>
- 5347 de Tres Chiles<br></b>

<p/>

<p>• <b>54 miembros de la <a href="/reydelaenchilada">Familia Real</a></b> a lo largo de 6 coronaciones</p>

<p>Además de la batalla de las Familias, le pedimos a nuestros invitados que nos compartieran las
historias que han vivido con nuestras enchiladas; recibimos historias de amor, de aventura y una
que otra de ficción. Puedes encontrar nuestras favoritas en la sección de <a href="/vipstorias">Vipstorias</a>.</p>

<p>Gracias a todos los que participaron y estén atentos, porque muy pronto
tendremos más concursos y dinámicas para que tú también quieras decir</p>

	  <h3 style="text-align:center; float:left; width:100%;"" >¡Nos vemos en Vips!</h3>



              ';
              	 $metatitulo ="¡Que viva la Reina de las Enchiladas Vips!";
              	 $metadescripcion = "Con motivo de nuestra promoción de Enchiladas a $69, Vips restaurante lanzó una convocatoria para encontrar al rey o reina de nuestras enchiladas suizas, rancheras, de mole, tres chiles, pipián, chicharrón y hasta enfrijoladas.";
              }
			  
			  
			  
			  if($entrada ==27 || $url == "este-dia-del-nino-vips-te-tiene-una-sorpresa"){

              	$titulo = "Este Día del niño, Vips te tiene una sorpresa";
              	 $imagenn = "Portada_nino.png";
              	 $fondo = "Fondo_nino.png";
                 $texto = '


                <h3 style="text-align: center;">
					¡Conviértete en Chef por un día con nosotros!
				 </h3>
				 
				 

				 <p>
					En Vips los más pequeños de la casa siempre encontrarán algo divertido. Desde nuestros deliciosos y divertidos platillos para dejar volar la imaginación, hasta los Bolos y ahora los Spyrolocos que han sido la sensación entre nuestros invitados.

					
				 </p>
				 

				 <p>
					
					Para cerrar el mes del niño como se debe, este año les tenemos una súper sorpresa. Sólo necesitas presentarte en uno de los Vips participantes, pedir un platillo del menú infantil, y tu pequeño recibirá una dona que podrá decorar como quiera con glaseados, chocolates, chispas y más. Así es, tus pequeños podrán ser chefs por un día con Vips y disfrutar de nuestras deliciosas donas recién horneadas de la forma más divertida.
					
				 </p>
				 
				 <p>En algunos Vips estará disponible durante toda la semana y en otros sólo durante el Día del niño, <a href="/tyc-dia-del-nino">¡checa las sucursales participantes aquí!</a></p>
				 
				<video  style="margin:0 10%; width:80%;" controls="" muted="" class="fillWidth visible-lg" id="myVid" poster="/video/dia-del-nino.jpg">
					<source src="/video/dia-del-nino.mp4" type="video/mp4; ">        
					Your browser does not support the video tag.
				</video>
				

			

              ';
              	$metatitulo ="Este Día del niño, Vips te tiene una sorpresa";
              	 $metadescripcion = "En Vips los más pequeños de la casa siempre encontrarán algo divertido. Desde nuestros deliciosos y divertidos platillos para dejar volar la imaginación, hasta los Bolos y ahora los Spyrolocos que han sido la sensación entre nuestros invitados.";
              }

			  if($entrada ==28 || $url == "este-dia-de-las-madres-disfruta-del-sabor-de-vips-en-tu-casa"){

              	$titulo = "Este día de las madres, disfruta del sabor de Vips en tu casa";
              	 $imagenn = "Blog_10Mayo.png";
              	 $fondo = "Fondo_mama.png";
                 $texto = '

				 <p>
					En Vips, las mamás son consentidas siempre, por lo que sin duda somos una excelente opción si quieres celebrar esta fecha con algo delicioso. Durante muchísimos años, hemos sido el punto de reunión de mujeres mexicanas que nos acompañan con sus amigas, sus hijos, sus nietos y sus compañeros de trabajo. Es por esto que, año con año, buscamos ofrecer algo especial en esta fecha tan importante que se aproxima, el Día de las Madres.</p>

					<p>Para este año, hemos creado una selección de platillos para celebrar con todo el sazón de Vips. Te presentamos estas 4 deliciosas recetas para que impresiones hasta a la mamá más exigente. Déjanos contarte un poco sobre lo que te tenemos preparado.</p>

					<p>Empezamos con un clásico de clásicos, <b>Spaghetti con albóndigas mini</b>, un platillo de origen neoyorquino pero alma italiana, con salsa de tomate y pequeñas albóndigas especiadas a la perfección.</p>

					<p>Luego tenemos para ti <b>Fettuccini Alfredo</b>, un icónico platillo creado por el chef romano Alfredo di Lelio hace casi 100 años. Esta cremosa pasta con parmesano es todo un cásico en los restaurantes italianos alrededor del mundo y podrás disfrutar de ella en tu Vips favorito.</p>

					<p>También te ofrecemos una receta con un toque mexicano, <b>el Penne al cilantro</b>. Esta receta fusión ha sido creada por nuestros chefs expertos e incluye tiras de pollo, un complemento ideal que lo vuelve toda una comida completa.</p>

					<p>Por último, déjanos contarte de la <b>Milanesa Tampico</b>, que conjunta una jugosa y tradicional milanesa de Vips con los complementos de una tampiqueña. 120 gramos de milanesa de res con enchiladas, frijoles y guacamole. ¡Para chuparse los dedos!</p>

					<p><b>Visítanos y prueba estos platillos para celebrar, así como los deliciosos desayunos que te ofrecemos por tiempo limitado.</b></p>

					<a style="text-align: center; width: 100%; float: left; font-size: 20px; font-weight: 500;" href="/especiales-de-temporada">Conócelos todos</a>
				 </p>
				 

				

			

              ';
              	$metatitulo ="Este día de las madres, disfruta del sabor de Vips en tu casa";
              	 $metadescripcion = "Somos el restaurante favorite de todas las mamás, de eso no nos queda duda. Durante muchísimos años, hemos sido el punto de reunión de mujeres mexicanas que nos acompañan con sus amigas, sus hijos, sus nietos y sus compañeros de trabajo. ";
              }
			  
			  if($entrada ==29 || $url == "llegamos-a-los-100-vips-con-nueva-imagen"){

              	$titulo = "¡Llegamos a los 100 Vips con nueva imagen!";
              	 $imagenn = "vips_restportada.png";
              	 $fondo = "vips_rest_fondo.png";
                 $texto = '

				 <p><b>
					Siempre en constante evolución para ofrecerte la mejor experiencia</b></p>

					<p>Desde el 2016, nos propusimos renovar la imagen de nuestros restaurantes para seguir ofreciéndote deliciosa comida, ahora en un ambiente fresco y diferente. Queremos que sigas disfrutando de nosotros por muchos años y el día de hoy, con la apertura de Vips Parques Plaza en la colonia Anáhuac de la Ciudad de México, llegamos a las 100 tiendas remodeladas.</p>

					<p>¡Así es! De nuestras más de 280 sucursales en 41 ciudades de la República Mexicana, hemos logrado renovar ya más de un tercio con una imagen de la que estamos muy orgullosos. Déjanos contarte un poco sobre lo que puedes encontrar en estos nuevos clásicos…</p>

					<p>Primero que nada, verás que hay innovación de arriba a abajo, no dejamos ni un solo centímetro sin algo nuevo, desde el mobiliario cómodo y moderno, ¡hasta el piso de la tienda! Porque cuando hacemos algo, lo hacemos más y mejor que nadie. Luego, están las fotos, una de nuestras partes favoritas de los nuevos restaurantes; verás que las fotos de Vips son representativas del barrio donde se encuentran, mostrando a la gente que ahí vive, los edificios icónicos de la zona y mucho más. Nuestro gran objetivo es convertirnos en el corazón de las comunidades donde nos encontramos y estamos muy contentos de poder mostrarte un poco del sabor único de cada colonia de nuestro México.</p>

					<p>También renovamos nuestra área infantil, un espacio muy importante, ya que queremos que toda la familia disfrute al máximo de cada visita. ¡Y no puede faltar la fuente de sodas! El lugar donde se preparan todas tus bebidas favoritas, desde nuestras clásicas malteadas hasta el nuevo Clericot con sidra Strongbow.</p>

					<p>Las cocinas también han sido renovadas, teniendo siempre en cuenta los más altos estándares de calidad e higiene para la preparación de alimentos. Y en algunas de nuestras sucursales, encontrarás también la nueva opción de pago en mesa, para mayor comodidad. En fin, son innumerables los cambios que hemos hecho para que vivas la mejor experiencia en todas y cada una de tus visitas.</p>

					<center><p><b>En resumen, no nos queda más qué decirte que…</b></p>
					<p><b>¡nos vemos en Vips!</b></p>
					<a style="background: #f29100; color: #fff; font-weight: 500; border-radius: 30px; padding: 10px 30px; margin-top: 5px; display: inline-block;" href="/ubicaciones">Buscar mi Vips</a>
					</center>

					
			

              ';
              	$metatitulo ="¡Llegamos a los 100 Vips con nueva imagen!";
              	 $metadescripcion = "Siempre en constante evolución para ofrecerte la mejor experiencia";
              }
			  




		?>




		<?php

error_reporting(0);
ini_set('display_errors', 0);

$title ="";
$meta="";
$meta_blog="";
$custom_pixels="";

	ob_start();



	// long long time
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "uservips";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
if(isset($_COOKIE['persistID']))
{
    $userid =   $_COOKIE['persistID'];
    session_start();
   $_SESSION['uservips'] = $userid;


}
	require_once 'dbconnect.php';

	if( isset($_SESSION['uservips'])!="" ){
		$uid=$_SESSION['uservips'];


			$sql3h = "SELECT * FROM registros WHERE id_registro = $uid OR facebook_id= $uid";
	$resulth =$mysqli->query($sql3h);
	 $rowregh=mysqli_fetch_assoc($resulth);

		$nombre = $rowregh['nombre'];
		$apellido = $rowregh['apellido'];
		$correo = $rowregh['correo'];
		$telefono = $rowregh['telefono'];
		$sexo = $rowregh['sexo'];
		$utime = $rowregh['fecha_registro'];
		$cumple = $rowregh['nacimiento'];
		$imagen = $rowregh['foto'];
		$randomn = rand();
		$foto = $rowregh['foto']."?".$randomn;
		$resregh2=$mysqli->query("SELECT * FROM registros WHERE facebook_id = '$uid'");
		$rowregh2=mysqli_fetch_assoc($resregh2);
		$facebookh = $rowregh2['facebook_id'];

		$sesion = true;



	if (strlen($facebookh)>3 AND strlen($imagen)<3){
			$marginavatar = "margin-top: 0px";
		$avatarimg ="https://graph.facebook.com/".$_SESSION['uservips']."/picture?type=large";

	}

	if (strlen($facebookh)>3 AND strlen($imagen)>3){
		$avatarimg ="/".$foto;

	}

	if (strlen($facebookh)<3 AND strlen($imagen)>3){
		$avatarimg ="/".$foto;

	}
	if (strlen($facebookh)<3 AND strlen($imagen)<3){
		$avatarimg="/img/svg/avatar2.svg";

	}

	$sql1 = "SELECT * FROM domicilio WHERE id_usuario = '$uid' LIMIT 1";
$result1 = $mysqli->query($sql1)  or die("Error en".$sql1);
$numfilas1 = $result1->num_rows;


if($numfilas1 ==1){

	$linkdomicilio ='/domicilio3-l';



}

else{
	$linkdomicilio ='/domicilio';

}

if(strlen($telefono) < 10){

	$linkdomicilio ='/domicilio';

}

	}
	else{
		$sesion = false;
		$avatarimg="/img/svg/cuenta.svg";
		$marginavatar = "";
		$linkdomicilio ='/domicilio';
	}

	$title= "<title>".$metatitulo ."</title>";

$meta = '
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="'.$metadescripcion.'">
	<meta name="author" content="vips.com.mx">
';

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<?php echo $title; ?>
	<?php echo $meta; ?>
	<?php echo $meta_blog; ?>

	<?php echo $custom_pixels; ?>

	<!-- fb meta -->
	  <meta property="og:title" content="<?php echo $metatitulo; ?>" />
	  <meta property="og:type" content="website" />
	  <meta property="og:url" content="https://vips.com.mx/entrada?id=<?php echo $entrada; ?>" />
	  <meta property="og:image" content="https://vips.com.mx/img/blog/<?php echo $imagenn;?>" />
	  <meta property="og:description" content='<?php echo $metadescripción; ?>'/>
	  <link rel="image_src" href="https://vips.com.mx/img/blog/<?php echo $imagenn;?>" />


<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WF88QBJ');</script>

<!-- End Google Tag Manager -->


<!-- Global site tag (gtag.js) - Google Ads: 794291389 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-794291389"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-794291389'); </script>


<!-- Event snippet for Compras conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-794291389/VJD4CIGDl4cBEL3Z3_oC', 'value': 40.0, 'currency': 'MXN', 'transaction_id': '', 'event_callback': callback }); return false; } </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114083909-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114083909-1');
</script>

<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
  analytics.load("JIg0Zvz8yCtIW0RloenNJpvUtMTlkeSE");
  analytics.page();
  }}();
</script>


	<!-- FAVICON -->
	<link rel="shortcut icon" href="/img/favicon.png">
	<link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/12437/idangerous.swiper.css'>
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="/css/magnific-popup.css">
	 <link rel="stylesheet" type="text/css" href="/css/tooltipster.bundle.min.css" />
	<link rel="stylesheet" href="/css/vips.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/imagehover.css">
	  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="/css/swiper.css">
	  <script src="/js/jquery-2.2.4.min.js"></script>
	  	  <script type="text/javascript" src="/js/jquery.lazy.min.js"></script>
		   <script src="/js/segment.js"></script>

  <!-- Swiper JS -->
  <script src="/js/swiper.js"></script>
  <!-- Initialize Swiper -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>

.searchexpand {
	overflow: hidden;
	max-width: 51px;
	max-height: 50px;
	transition: .6s all ease;
}
.searchexpand:hover {
	overflow: hidden;
	max-width: 200px;
	max-height: 50px;
transition: .6s all ease;
}

.searchexpand svg{ float:left;}


.searchexpand span {
	float: left;
	padding: 20px 20px 15px 10px !important;
	margin-top: 0 !important;
	height: 3em;
}



.searchmain svg#svg {
	width: 2.25em !important;
	height: 2.5em !important;
	transition: all .4s ease;
	margin-top: .5em;
}

.vipsmenu ul li .searchmain span {
	width: auto;
	display: inline-block;
	font-family: "Program", sans-serif;
	font-size: 1em;
	color: #ff0025;
	vertical-align: middle;
	margin-top: -20px;
	padding: 5px;
}

svg#svg {
    width: 2.5em;
    height: 2em;
		transition: all .3s ease;
}
.scrolled svg#svg {

    height: 1.5em;
}





.redsvg svg path {  fill: #ff0025; transition: all .3s ease;}

.free-simple-slider li {

	background-size: 100%;
	background-position: top center;
}

.free-simple-slider .slider-box {
	height: 430px;

}


.buscadormenu {
	width: 100%;
	position: absolute;
	float: left;
	background: url(/img/pleca_search.png);
	background-color: transparent;
	background-size: 100% 100%;
	height: 250px;
	border: none;
	background-repeat: no-repeat;
	transition: all .35s ease;
	z-index: 10;
	overflow: hidden;
	top: 120px;
}

.buscadormenu.closed {
	height: 0;
  transition: all .35s ease;
  overflow: hidden;


}

.scrolled .buscadormenu {
	position: fixed;
	top: 96px;
	width: 100%;
	z-index: 9;
}
.scrolled .buscadormenu {
	position: fixed;
	top: 56px;
	width: 100%;
	z-index: 9;
}
.searchm {
	float: left;
	width: 85%;
	color: #fff;
	text-align: center;
	padding: 2em 2.5% 2em 5%;
	transition: .35s all ease;
}
.leftsearch {
	width: 35%;
	float: left;
}

.itemfilter {
	width: 100%;
	float: left;
	padding: .1em 0;
	font-family: "Program", sans-serif;
	font-size: .9em;
}

.containerchecks {
	width: 33.33%;
	display: inline-block;
	text-align: left;
vertical-align: top;
}

.containerchecks label {
	padding-left: .5em;
}
.search2 {
	border: none;
	border-bottom: 2px solid #fff;
	color: #fff;
	padding: 10px 55px;
	width: 100%;
	max-width: 300px;
	background-image: url(/img/lupaw.png);
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: left center;
	font-weight: light;
	font-family: "Program", ‘Trebuchet MS’, Helvetica, sans-serif;
	font-size: 1em;
	transition: all .4s ease;
	text-align: center;
  background-color: transparent;
	outline:0;
}
  .txtfilters{float:left; width:40%; color:#fff; padding: 2em 1em; transition: .35s all ease;}
  .txtfilters li{width: 50%; float: left; padding: 5px;}
  .closebtn{float:left; width:20%; color:#fff; padding: 2em 1em;}

.closed .txtfilters, .closed .searchm{padding-top: 250px;}
  .buscadormenu ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #fff;
    opacity: 1;
  }
  .buscadormenu ::-moz-placeholder { /* Firefox 19+ */
    color: #fff;
    opacity: 1;
  }
  .buscadormenu :-ms-input-placeholder { /* IE 10+ */
    color: #fff;
    opacity: 1;
  }
  .buscadormenu :-moz-placeholder { /* Firefox 18- */
    color: #fff;
    opacity: 1;
  }

  #iconclose{width:2em; height: 2em; background: url(/img/close.png); background-size: 100%; background-repeat: no-repeat; cursor: pointer;}
.buscador{width:100%;}
.cleanfilters, .send {
	padding: .5em;
	border: 2px solid #fff;
	width: 40%;
	margin: 5% 2.5%;
	display: inline-block;
	text-align: center;
	background: transparent;
	color: #fff;
	font-size: .9em;
	font-weight: bold;
cursor:pointer;
transition:.35s all ease;
}

.cleanfilters:hover, .send:hover { transition:.35s all ease; background:#fff; color:#ff1528;}
.search{pointer-events-none;}
.search2 {
	border: none;
	border-bottom: 2px solid #fff;
	color: #fff;
	padding: 10px 55px;
	width: 100%;
	max-width: 300px;
	background-image: url(/img/lupaw.png);
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: left center;
	font-weight: light;
	font-family: "Program", ‘Trebuchet MS’, Helvetica, sans-serif;
	font-size: 1em;
	transition: all .4s ease;
	text-align: center;
  background-color: transparent;
}
  .txtfilters {
	float: left;
	width: 60%;
	color: #fff;
	padding: 2em 1em;
	transition: .35s all ease;
	text-align: right;
}
  .txtfilters li{width: 50%; float: left; padding: 5px;}
  .closebtn{float:left; width:15%; color:#fff; padding: 2em 1em;}

.closed .txtfilters, .closed .searchm{padding-top: 250px;}
  .buscadormenu ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #fff;
    opacity: 1;
  }

  #iconclose{width:2em; height: 2em; background: url(/img/close.png); background-size: 100%; background-repeat: no-repeat; cursor: pointer;}
.buscador{width:100%;}
.cleanfilters {
  	padding: 1% 5%;
  	border: 1px solid #fff;
  	width: 40%;
    margin: 5% 2.5%;
    display: inline-block;
    text-align: center;

  }

  .send {
    	padding: 1% 5%;
    	border: 1px solid #fff;
    	width: 40%;
      margin: 5% 2.5%;
      display: inline-block;
      text-align: center;
    }

  .buttons {
	float: left;
	width: 100%;
	text-align: right;
margin-top: 2em;
  }

.filtertoggle {
	position: fixed;
	width: 2.5em;
	height: 2.5em;
	background-image: url(/img/menu/filter.png);
	background-repeat: no-repeat;
	background-size: 100%;
	top: 170px;
	z-index: 9;
	left: 1em;
	cursor: pointer;
	background-position: top center;
  transition: .35s all ease;
	display: none;
}


.filtertoggle:hover {
	background-size: 90%;
  transition: .35s all ease;
}


.scrolled .filtertoggle{	top: 110px;}

@keyframes pulse {
    0% {
     transform: scale(1, 1);
    }

    50% {
     transform: scale(1.1, 1.1);
    }

    100% {
    transform: scale(1, 1);
    }
}

.filtertoggle {
    animation: pulse 2s linear infinite;
}

.itemmenuvips span {
	margin-top:-.5vh;
}

	/*.itemmenuvips .svg {
	width: 3em !important;
	height: 2.5em !important;
	margin-bottom: 0;
	border-bottom: 0;
	margin-bottom: -.5vh;
	}

	.scrolled .itemmenuvips .svg {
	width: 2em !important;
	height: 2em !important;
	margin-bottom: 0;
	border-bottom: 0;
	margin-bottom: -.5vh;
	}*/

	.activemas *{  fill: #ff0025!important; transition: all .3s ease;}
	.activemas path{  fill: #ff0025!important; transition: all .3s ease;}
	.activemas *{color: #ff0025!important;}



.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 10px 0;
    z-index: 1;
	top:60px;
	font-family: "Program", sans-serif;
font-size: .8em;
color: #666;
padding-bottom:0;
}
.dropdown-content  ul {
	list-style: none;
	text-align: left!important;
}
.dropdown-content ul li{
text-align: left;
border-bottom: 1px solid #ccc; width:100%;
color: #666!important;
padding:10px;
}

.dropdown-content ul li:hover{
color: red!important;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.animate{animation: pulse 1s linear 6;}


.accountitem .textaccount {
	width: 50%;
	float: left;
	text-align: left;
	padding-top: .50em;
	line-height: 1.15;
}
.accountitem .spanm {
	font-size: .80em;
}

.tooltipster-swing.tooltipster-show {
	margin-left: -5px;
}

.iconmenu.svg.replaced-svg {
	width: 2.8em;
	height: 2em;
	transition: all .35s ease;
}

.scrolled .iconmenu.svg.replaced-svg {
	width: 2em;
    height: 2em;
}

#lupa {
	margin-top: .5em;
	width: 2.5em;
	height: 2.5em;
	fill: red;
}

#lupa path {  fill: #ff0025; transition: all .3s ease;}

.search2 {
	background-image: url(/img/svg/buscaw.svg);

}
.inputs input {

	background-size: 12%;
	background-repeat: no-repeat !important;
	background-position: right center;
}
#correo, #correol{background-image: url(/img/svg/correo.svg)}
#pass, #passl{background-image: url(/img/svg/password.svg)}

.accountitem .iconmenu.svg.replaced-svg {
	width: 2.8em;
	height: 2.8em;
	transition: all .35s ease;
}
.scrolled .accountitem .iconmenu.svg.replaced-svg {
	width: 2.5em;
	height: 2.5em;
	transition: all .35s ease;
}

.vipsmenu ul li img {
	width: 3em;
	height: 3em;
	object-fit: cover;
	object-position: center;
}

.scrolled .vipsmenu ul li img {
	height: 2em;
}

.scrolled .accountitem .textaccount {
	line-height: 1.1;
	margin-top: -.5em;
}
.img20{width:25%; padding:0 5%;}

.slick-prev::before, .slick-next::before {
	color: #ff7200!important;

}
.slick-prev, .slick-next {
	z-index: 1;
}
</style>

<style>

.searchexpand {
	overflow: hidden;
	max-width: 51px;
	max-height: 50px;
	transition: .6s all ease;
}
.searchexpand:hover {
	overflow: hidden;
	max-width: 200px;
	max-height: 50px;
transition: .6s all ease;
}

.searchexpand svg{ float:left;}


.searchexpand span {
	float: left;
	padding: 20px 20px 15px 10px !important;
	margin-top: 0 !important;
	height: 3em;
}



.searchmain svg#svg {
	width: 2.25em !important;
	height: 2.5em !important;
	transition: all .4s ease;
	margin-top: .5em;
}

.vipsmenu ul li .searchmain span {
	width: auto;
	display: inline-block;
	font-family: "AmsiProNarw", sans-serif;
	font-size: 1em;
	color: #ff0025;
	vertical-align: middle;
	margin-top: -20px;
	padding: 5px;
}

svg#svg {
    width: 2.5em;
    height: 2em;
		transition: all .3s ease;
}
.scrolled svg#svg {

    height: 1.5em;
}





.redsvg svg path {  fill: #ff0025; transition: all .3s ease;}

.free-simple-slider li {

	background-size: 100%;
	background-position: top center;
}

.free-simple-slider .slider-box {
	height: 430px;

}


.buscadormenu {
	width: 100%;
	position: absolute;
	float: left;
	background: url(/img/pleca_search.png);
	background-color: transparent;
	background-size: 100% 100%;
	height: 250px;
	border: none;
	background-repeat: no-repeat;
	transition: all .35s ease;
	z-index: 10;
	overflow: hidden;
	top: 120px;
}

.buscadormenu.closed {
	height: 0;
  transition: all .35s ease;
  overflow: hidden;


}

.scrolled .buscadormenu {
	position: fixed;
	top: 96px;
	width: 100%;
	z-index: 9;
}
.scrolled .buscadormenu {
	position: fixed;
	top: 56px;
	width: 100%;
	z-index: 9;
}
.searchm {
	float: left;
	width: 85%;
	color: #fff;
	text-align: center;
	padding: 2em 2.5% 2em 5%;
	transition: .35s all ease;
}
.leftsearch {
	width: 35%;
	float: left;
}

.itemfilter {
	width: 100%;
	float: left;
	padding: .1em 0;
	font-family: "AmsiProNarw", sans-serif;
	font-size: .9em;
}

.containerchecks {
	width: 33.33%;
	display: inline-block;
	text-align: left;
vertical-align: top;
}

.containerchecks label {
	padding-left: .5em;
}
.search2 {
	border: none;
	border-bottom: 2px solid #fff;
	color: #fff;
	padding: 10px 55px;
	width: 100%;
	max-width: 300px;
	background-image: url(/img/lupaw.png);
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: left center;
	font-weight: light;
	font-family: "AmsiProNarw", ‘Trebuchet MS’, Helvetica, sans-serif;
	font-size: 1em;
	transition: all .4s ease;
	text-align: center;
  background-color: transparent;
	outline:0;
}
  .txtfilters{float:left; width:40%; color:#fff; padding: 2em 1em; transition: .35s all ease;}
  .txtfilters li{width: 50%; float: left; padding: 5px;}
  .closebtn{float:left; width:20%; color:#fff; padding: 2em 1em;}

.closed .txtfilters, .closed .searchm{padding-top: 250px;}
  .buscadormenu ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #fff;
    opacity: 1;
  }
  .buscadormenu ::-moz-placeholder { /* Firefox 19+ */
    color: #fff;
    opacity: 1;
  }
  .buscadormenu :-ms-input-placeholder { /* IE 10+ */
    color: #fff;
    opacity: 1;
  }
  .buscadormenu :-moz-placeholder { /* Firefox 18- */
    color: #fff;
    opacity: 1;
  }

  #iconclose{width:2em; height: 2em; background: url(/img/close.png); background-size: 100%; background-repeat: no-repeat; cursor: pointer;}
.buscador{width:100%;}
.cleanfilters, .send {
	padding: .5em;
	border: 2px solid #fff;
	width: 40%;
	margin: 5% 2.5%;
	display: inline-block;
	text-align: center;
	background: transparent;
	color: #fff;
	font-size: .9em;
	font-weight: bold;
cursor:pointer;
transition:.35s all ease;
}

.cleanfilters:hover, .send:hover { transition:.35s all ease; background:#fff; color:#ff1528;}
.search{pointer-events-none;}
.search2 {
	border: none;
	border-bottom: 2px solid #fff;
	color: #fff;
	padding: 10px 55px;
	width: 100%;
	max-width: 300px;
	background-image: url(/img/lupaw.png);
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: left center;
	font-weight: light;
	font-family: "AmsiProNarw", ‘Trebuchet MS’, Helvetica, sans-serif;
	font-size: 1em;
	transition: all .4s ease;
	text-align: center;
  background-color: transparent;
}
  .txtfilters {
	float: left;
	width: 60%;
	color: #fff;
	padding: 2em 1em;
	transition: .35s all ease;
	text-align: right;
}
  .txtfilters li{width: 50%; float: left; padding: 5px;}
  .closebtn{float:left; width:15%; color:#fff; padding: 2em 1em;}

.closed .txtfilters, .closed .searchm{padding-top: 250px;}
  .buscadormenu ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #fff;
    opacity: 1;
  }

  #iconclose{width:2em; height: 2em; background: url(/img/close.png); background-size: 100%; background-repeat: no-repeat; cursor: pointer;}
.buscador{width:100%;}
.cleanfilters {
  	padding: 1% 5%;
  	border: 1px solid #fff;
  	width: 40%;
    margin: 5% 2.5%;
    display: inline-block;
    text-align: center;

  }

  .send {
    	padding: 1% 5%;
    	border: 1px solid #fff;
    	width: 40%;
      margin: 5% 2.5%;
      display: inline-block;
      text-align: center;
    }

  .buttons {
	float: left;
	width: 100%;
	text-align: right;
margin-top: 2em;
  }

.filtertoggle {
	position: fixed;
	width: 2.5em;
	height: 2.5em;
	background-image: url(/img/menu/filter.png);
	background-repeat: no-repeat;
	background-size: 100%;
	top: 170px;
	z-index: 9;
	left: 1em;
	cursor: pointer;
	background-position: top center;
  transition: .35s all ease;
	display: none;
}


.filtertoggle:hover {
	background-size: 90%;
  transition: .35s all ease;
}


.scrolled .filtertoggle{	top: 110px;}

@keyframes pulse {
    0% {
     transform: scale(1, 1);
    }

    50% {
     transform: scale(1.1, 1.1);
    }

    100% {
    transform: scale(1, 1);
    }
}

.filtertoggle {
    animation: pulse 2s linear infinite;
}

.itemmenuvips span {
	margin-top:-.5vh;
}

	/*.itemmenuvips .svg {
	width: 3em !important;
	height: 2.5em !important;
	margin-bottom: 0;
	border-bottom: 0;
	margin-bottom: -.5vh;
	}

	.scrolled .itemmenuvips .svg {
	width: 2em !important;
	height: 2em !important;
	margin-bottom: 0;
	border-bottom: 0;
	margin-bottom: -.5vh;
	}*/

	.activemas *{  fill: #ff0025!important; transition: all .3s ease;}
	.activemas path{  fill: #ff0025!important; transition: all .3s ease;}
	.activemas *{color: #ff0025!important;}



.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 10px 0;
    z-index: 1;
	top:60px;
	font-family: "AmsiProNarw", sans-serif;
font-size: .8em;
color: #666;
padding-bottom:0;
}
.dropdown-content  ul {
	list-style: none;
	text-align: left!important;
}
.dropdown-content ul li{
text-align: left;
border-bottom: 1px solid #ccc; width:100%;
color: #666!important;
padding:10px;
}

.dropdown-content ul li:hover{
color: red!important;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.animate{animation: pulse 1s linear 6;}


.accountitem .textaccount {
	width: 50%;
	float: left;
	text-align: left;
	padding-top: .50em;
	line-height: 1.15;
}

.tooltipster-swing.tooltipster-show {
	margin-left: -5px;
}

.iconmenu.svg.replaced-svg {
	width: 2.8em;
	height: 2em;
	transition: all .35s ease;
}

.scrolled .iconmenu.svg.replaced-svg {
	width: 2em;
    height: 2em;
}

#lupa {
	margin-top: .5em;
	width: 2.5em;
	height: 2.5em;
	fill: red;
}

#lupa path {  fill: #ff0025; transition: all .3s ease;}

.search2 {
	background-image: url(/img/svg/buscaw.svg);

}
.inputs input {

	background-size: 12%;
	background-repeat: no-repeat !important;
	background-position: right center;
}
#correo, #correol{background-image: url(img/svg/correo.svg)}
#pass, #passl{background-image: url(img/svg/password.svg)}

.accountitem .iconmenu.svg.replaced-svg {
	width: 2.8em;
	height: 2.8em;
	transition: all .35s ease;
}
.scrolled .accountitem .iconmenu.svg.replaced-svg {
	width: 2.5em;
	height: 2.5em;
	transition: all .35s ease;
}

.vipsmenu ul li img {
	width: 3em;
	height: 3em;
	object-fit: cover;
	object-position: center;
}

.scrolled .vipsmenu ul li img {
	height: 2em;
}

.scrolled .accountitem .textaccount {
	line-height: 1.1;
	margin-top: -.25em;
}
@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Book.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Book.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Book.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}



@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Medium.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Medium.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
}

@font-face {
    font-family: 'Program';
    src: url('/css/fonts/program/ProgramOT-Bold.woff2') format('woff2'),
        url('/css/fonts/program/ProgramOT-Bold.woff') format('woff'),
        url('/css/fonts/program/ProgramOT-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}

body{font-family: 'Program';}


.navbar-fixed-top, .topnav, .vipsmenu{
	background: #ed1c2c;
	color: #fff;
	transition:all ease .25s;

}

.footer, .disclaimer {
	background: #ed1c2c;
	color: #fff;

}

path {
    fill: #fff !important;
	transition:all ease .25s;

}

.blanco{color:#fff !important;}

.vipsmenu ul li span {
	width: 100%;
	display: inline-block;
	font-family: "Program", sans-serif;
	font-size: .75em;
	font-weight: 500;
	letter-spacing: .5px;
}
.logo {
	width: 20%;
	display: inline-block;
	position: relative;
	float: left;
	text-align: center;
	z-index: 2;
	padding-top: 30px;
	padding-top: 0;
	padding-left: 5%;
	text-align: left;
}

.logo img {
	width: 70%;
	height: 126px;
	width: auto;
	margin: 0;
	padding: 0;
}

.scrolled .logo {
	padding-top: 5px;
	transition: all .4s ease;
}
.scrolled .logo img {
	width: 40%;
	transition: all .4s ease;
	height: 60px;
	width: auto;
}
.scrolled .navbar-fixed-top, .scrolled .topnav, .scrolled .vipsmenu{
	background: #fff;
	color: #222;
	transition:all ease .25s;

}

.scrolled path {
    fill: #222 !important;

}



.activemas * {
    fill: #fff!important;
    transition: all .23s ease;
}

.activemas path {
    fill: #fff!important;
    transition: all .23s ease;
}
.activemas * {
    color: #fff!important;
}

.scrolled .activemas * {
    fill: #eb1c2d!important;
    transition: all .23s ease;
}

.scrolled .activemas path {
    fill: #eb1c2d!important;
    transition: all .23s ease;
}

.scrolled .activemas * {
    color: #eb1c2d!important;
}

</style>




<!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window,document,'script',

'https://connect.facebook.net/en_US/fbevents.js');


fbq('init', '2142550566017118');

fbq('track', 'PageView');

</script>

<noscript>

<img height="1" width="1"

src="https://www.facebook.com/tr?id=2142550566017118&ev=PageView

&noscript=1"/>

</noscript>

<!-- End Facebook Pixel Code -->

<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

</head>
<body id="page-top">


<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF88QBJ"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->



<div class="splash"></div>

<div class="body">

	<!-- HEADER -->
	<header>
		<nav class="navbar-fixed-top">

		<div class="topnav">

			<div class="logo">
			<a href="/"><img src="/img/svg/LOGO_VIPS.svg"></a>

			</div>

			<div class="searchcontainer">
			<form >
				<input class="search" type="text"  id="q2" placeholder=""/>
			</form>

			</div>


			</div>

			<div class="vipsmenu" id="vipsmenu">
				<ul>
					<a href="/menu" class="linkhome" data-div="#menuhome">
						<li class="vmenuitem itemmenuvips">
						<img class="iconmenu svg" src="/img/svg/menu.svg" alt="Menú Vips" title="Menú Vips">
						<span class="spanm">MENÚ VIPS</span>

						</li>
					</a>

					<a href="/domicilio"  data-url="<?php echo $linkdomicilio; ?>" class="linkhome" data-div="#domiciliohome">
					<li class="vmenuitem" id="linkdomicilio">

					<img class="iconmenu svg" src="/img/svg/domicilio.svg" alt="A Domicilio" title="A Domicilio">
					<span class="spanm">A DOMICILIO</span>
					</li>
					</a>


					<a href="/cupones/" class="linkhome" data-div="#tdlhome">
					<li class="vmenuitem" id="linkbeneficios">
					<img class="iconmenu svg" src="/img/2019/Promociones.svg" alt="Promociones" title="Promociones">
					<span class="spanm">CUPONES</span>
					</li>
					</a>

					<li class="vmenuitem" id="linkexperiencias">
					<a href="/vipstorias" class="linkhome" data-div="#experienciashome">
					<img class="iconmenu svg" src="/img/svg/experiencias.svg" alt="Vipstorias" title="Vipstorias">
					<span class="spanm">VIPSTORIAS</span>
					</a>
					</li>



					<a href="/ubicaciones" class="linkhome" data-div="#ubicacioneshome">
					<li class="vmenuitem" id="linkubicaciones">
					<img class="iconmenu svg" src="/img/svg/ubicaciones.svg" alt="Restaurantes" title="Restaurantes">
					<span class="spanm">RESTAURANTES</span>
					</li>
					</a>


					<li class="vmenuitem" id="linkfacturas">
					<a href="https://alsea.interfactura.com/RegistroDocumento.aspx?opc=Vips" target="_blank" class="linkhome" data-div="#facturashome">
					<img class="iconmenu svg" src="/img/svg/facturas.svg" alt="Facturas" title="Facturas">
					<span class="spanm">FACTURAS</span>
					</a>
					</li>

					<li class="vmenuitem searchexpand">
					<a style="cursor:pointer;" class="linkhome searchmain">
					<img class="iconmenu svg" src="/img/svg/busca.svg" style="width: 2.5em; height: 3em;">
						<span >¿ANTOJO?</span>
					</a>
					</li>

					<a 	<?php if($sesion == true){ echo 'href="perfil"';} else{echo ' class="openpoplogin"';}?>>
					<li class="vmenuitem accountitem dropdown" data-div="#cuentahome">
					<div class="icon">
					<img class="iconmenu svg animate" src="<?php echo $avatarimg;?>" style="border-radius: 50%; <?php echo $marginavatar;?>">
					</div>
					<div class="textaccount"> <span class="spanm">MI TARJETA <br> DE LEALTAD</span></div>
					<?php if($sesion == true){
					echo '<div class="dropdown-content">
						<ul><a href="/perfil"><li>MI PERFIL</li></a><a href="/logout"><li>CERRAR SESIÓN</li></a></ul>

					  </div>';

						}
					?>

					</li>
					</a>


				</ul>



			</div>

		</nav>
	</header>

	  <!-- Buscador=============================-->
<div class="buscadormenu">
	<div class="searchm searchm2">

    <form method="post" action="/buscar" id="busqueda">

		<div class="leftsearch">
			  <div class="buscador">
						<input class="search2 buscainput" name="termino" id="q" placeholder=""  type="text" required>
			  </div>

			  <div class="buttons">
				<a class ="cleanfilters">Limpiar Filtros</a>
				  <button class ="send" type="submit">Aceptar</button>

					</div>
		</div>

		<div class="txtfilters">
			<div class="containerchecks" >

			<div class="itemfilter"><input id="sano" name="sano" type="checkbox" class="roundcheck" value="sano"><label for="sano">Estoy comiendo sano</label></div>
			<div style="display: none;" class="itemfilter"><input id="vegetariano" name="vegetariano" type="checkbox" class="roundcheck" value="vegetariano"><label for="vegetariano">Soy vegetariano</label></div>
			<div class="itemfilter"><input id="dulce" name="dulce" type="checkbox" class="roundcheck" value="dulce"><label for="dulce">Algo dulce</label></div>
			<div class="itemfilter"><input id="picoso" name="picoso" type="checkbox" class="roundcheck" value="picoso"><label for="picoso">Algo picoso</label></div>
			</div>


			<div class="containerchecks" >

			<div class="itemfilter"><input id="serie" name="serie" type="checkbox" class="roundcheck" value="serie"><label for="serie">Mientras veo la serie</label></div>
			<div class="itemfilter"><input id="sorpresa" name="sorpresa" type="checkbox" class="roundcheck" value="sorpresa"><label for="sorpresa">Sorpréndeme</label></div>
			</div>



		</div>
	</form>

	</div>


  <div class="closebtn">
    <div id="iconclose"></div>

  </div>
</div>

<div class="togglefilter filtertoggle" id="filtertoggle">
</div>







		<?php





if($avatarimg=="/img/svg/cuenta.svg"){$avatarimg="/img/svg/avatar.svg";}
if($_SESSION['uservips'] !=""){$showlink ="";}
else{$showlink ="hidden";}


?>


<script type="text/javascript">
    document.title = "<?=$titulo;?> | Vips";
</script>

<div class="main">

<link rel="stylesheet" type="text/css" href="/css/animate.css" />
<script src="/js/jquery.viewportchecker.js"></script>

<script>
jQuery(document).ready(function() {
    jQuery('.productdesc p').addClass("invisible").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 100
       });
});
</script>
<style>

.invisible{
     opacity:0;
}
.visible{
     opacity:1;
}

.centerfull {
	background: #f29100;
	color: #fff !important;
	padding: 1em;
	text-transform: uppercase;
	font-family: "Program";
	display: inline-block;
	margin: 0 auto;
	width: 50%;
	text-align: center;
	margin: 0 25%;
}
p:has(.centerfull){ text-align:center; }
.resptext {
    width: 100%;
    float: left;
    padding: 2.5% 5% 5% 5%;
}

.resptext h2{color:#f29100; font-size:2em; margin-top:-5%;}

.resp2img{width:20%; float:left;}
.text-right{width:80%; float:left;}
.resptext p{font-size: .95em;}


.headblog {
	margin-top: 0vh;
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
	width: 15%;
	float: left;
	margin-top: 0;
	margin-left: 0;
	text-align: center;
	position: absolute;
	padding-right: 0;
	top: 10%;
	z-index: 4;
}
.avatarblog img {
	width: 4em;
	padding: 0;
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
	padding: 0 15% 2.55%;
}
textarea {
	width: 100%;
	height: 200px;
	color: #777;
	float: left;
	position: relative;
	border: solid 1px #e7e7e7;
	background-color: #fff;
	font-family: "Program",sans-serif;
	font-weight: 500;
	font-size: 20px;
	padding: 2.5% 15%;
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
	margin-bottom: 50px;
}
.productdesc {
	padding: 0;
}

.productdesc p {
	font-size: 20px;
	line-height: 1.5;
	font-weight: 500;
	color: #838383;
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
	width: 100%;
	float: left;
	padding: 0 5%;
	padding-bottom: .5%;
}
.shareicons li {
	display: inline-block;
	background-size: 100%;
}

.tw {
	margin-right: 0;
}

	.fb {
	margin-right: .5em;
}

.iconsocial{width:1.5em; height:1.5em;}
.icon-fb{background-image: url(/img/menu/social/facebook.png);}
.icon-tw{background-image: url(/img/menu/social/twitter.png);}
.icon-ig{background-image: url(/img/menu/social/instagram.png);}
.icon-wa{background-image: url(/img/menu/social/whatsapp.png);}



.iconsocial {
	width: 2em;
	height: 2em;
}

.comments form {
	margin-top: 0;
	width: 100%;
	float: left;
	border-top: 0;
	padding-top: 0;
	position: relative;
}
.loginlink {
	color: #aaa;
	padding: 0 0% 2em 5%;
	width: 100%;
	float: left;
	text-align: right;
	text-decoration: underline;
}

.mensajearea {
	width: 100%;
	float: left;
	position: relative;
	text-align: center;
}

textarea {
	border: 2px solid #ddd;
	width: 100%;
	height: 100px;
	padding: 2.5%;
	color: #777;
	float: left;
	font-family: inherit;
}
.parallaxbg {
	width: 100%;
	float: left;
	background-size: cover;
	background-position: center;
	padding: 1% 10%;
	min-height: 350px;
	height: 50vh;
	background-attachment: fixed;
	text-align: center;
}
.parallaxbg h1  {
	width: 100%;
	color: #fff;
	text-align: center;
	text-shadow: 1px 1px 6px #333;
	font-family: "Program", sans-serif;
}
.headblog {
	position: relative;
	margin: 0 auto;
	/* left: 0; */
	right: 0;
	width: 50%;
	max-height: 50vh;
	object-fit: contain;
}
.productdesc {
	/* padding: 0; */
	float: left;
	padding-top: 12.5%;
	width: 100%;
	background-image: none;
	background-repeat: no-repeat;
	background-position: center -165vh;
	background-size: 95%;
	padding: 2.5% 0% 0% 0%;

}

.productdesc h1{
	text-align: center;
	color: #4d4d4d;
}
.comments{width:100%; float:left; padding:0 5%; padding-bottom:2.5%;}

 /* Style the header: fixed position (always stay at the top) */

/* The progress container (grey background) */
.progress-container {
	width: 100%;
	height: 8px;
	background: #ccc;
	position: fixed;
	/* top: 0; */
	z-index: 1;
	/* width: 100%; */
	transtion:.35s all ease;
	top: 100px;
}

.scrolled .progress-container {top: 70px; transtion:.35s all ease;}
/* The progress bar (scroll indicator) */
.progress-bar {
  height: 8px;
  background: #f29100;
  width: 0%;
}

.productdesc p:first-child::first-letter {
    font-size: 200%;
    color: #222;
}

.quote {
	font-weight: bold;
	font-size: 2.5em !important;
	text-align: center;
	padding: 2em 1em !important;
	background: #eee;
	padding: 5% !important;
	margin: 2.5% 0;
	line-height: 1.3 !important;
	color: #333;
}





.mute-video {

	background: url(/video/mute.png) no-repeat center;

	color: #ffffff;

	background-size: 20px;

	border: 0;

	width: 20px;

	height: 20px;

	text-indent: -999px;

	z-index: 10;

	position: absolute;

	right: 5%;

	margin-top: 15px;

}

.unmute-video {

    background:url(/video/sound.png) no-repeat center;

    background-size:20px;

}



.post2 {

	padding: 2.%;

	width: 40%;

	margin: 0 auto;

	position: relative;

}
.hidden{display:none;}

.imginterna {
	/* float: left; */
	width: 100%;
padding: 2% 5%;
	max-width: 100%;
	margin: 0 auto;
	position: relative;
}

.img100 {
	width: 100%;
	padding: 5%;
}
.img40 {
	width: 40%;
	padding: 2.5% .55% 2.5% 5%;
}

.img40  + p {float:right; width:60%;}

.img30 {
	width: 50%;
	float: left;
	padding: 2.5% 5%;
}


.img33 {
	width: 33.3%;
	float: left;
	padding: 2.5% 5%;
}

#respuesta, #respuesta2 {
	width: 100%;
	float: right;
	padding: 1% 0;
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

.productdesc a{color:#f29100;}

.carousel img{width:100%;}

.slick-dots li.slick-active button::before {
	opacity: .75;
	color: #ee8f00!important;
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
	background: #fff;
	border: none;
}
.redescont {
	float: left;
	width: 100%;
	padding: 0 7.5%;
	margin-bottom: 5%;
	margin-top: 0;
}
textarea {
	width: 100%;
	height: 125px;
	color: #777;
	float: left;
	position: relative;
	border: solid 1px #e7e7e7;
	background-color: #fff;
	font-family: "Program",sans-serif;
	font-weight: 500;
	font-size: 20px;
	padding: 2.5% 15%;
}
.mensajearea {
	border: 1px solid #bbb;
}

textarea {
	border: 0;
}

.entradas {
	width: 100%;
	float: left;
	padding: 0 10%;
	background-image: url(/img/fondo.png);
	background-repeat: no-repeat;
	background-size: 20%;
	background-position: -15% 40%;
}
.shape1 {
	width: 250px;
	height: 250px;
	background: url(/img/blog/Shape.svg);
	background-repeat: no-repeat;
	background-size: 100%;
	right: -7.5%;
	position: absolute;
	margin-top: -15%;
	z-index:-1;
}
</style>

<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>
<div class="parallaxbg" style="background-image:url(/img/blog/<?php echo $fondo;?>)"><div class="imgnota"><img class="headblog" src="/img/blog/<?php echo $imagenn;?>" alt="<?php echo $metatitulo; ?>" /></div></div>
  <div class="productdesc">

  <div class="entradas">
<h1><?php echo $titulo;?></h1>


		<?php echo $texto;?>



		<div class="post2" style="<?php echo $showvideo; ?>">

<button class="mute-video" style="color: white"></button>





   <div id="video">

           <video id="increibles" preload="preload" muted="muted" controls ="true" loop="loop"  autoplay="false"  poster="img/blog/poster/<?php echo $poster; ?>" width="100%">

    	   <source src="/video/<?php echo $videovips; ?>" type="video/mp4"></video>





<script>

$("video").prop('muted', true);



$(".mute-video").click(function () {

    if ($("video").prop('muted')) {

        $("video").prop('muted', false);

        $(this).addClass('unmute-video');



    } else {

        $("video").prop('muted', true);

        $(this).removeClass('unmute-video');

    }

    console.log($("video").prop('muted'))

});

</script>

        </div>





</div>
<div class="shape1"></div>
</div>
</div>
		<div class="quote" style="display: none">
			<span class="comilla" style="margin-left: -.55em;">"</span>

				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum arcu purus, vel semper tortor aliquam sit amet.
			<span class="comilla">"</span>


		</div>


<ul class="shareicons">
<p>Compartir</p>
      <a target="_new" onclick="shareVipstoria('Facebook', '<?php echo $entrada; ?>', '<?php echo $titulo;?>');" href="https://www.facebook.com/sharer/sharer?u=<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"><li class="iconsocial icon-fb fb"></li></a>
      <a target="_new" onclick="shareVipstoria('Twitter', '<?php echo $entrada; ?>', '<?php echo $titulo;?>');" href="https://twitter.com/intent/tweet?text=<?php echo $titulo;?>&amp;url=<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>&amp;via=Vipsmx"><li class="iconsocial icon-tw tw"></li></a>
</ul>


	<?php if($sesion==true){ ?>



<div class="comments redescont">
	<form  id="formcomment" onsubmit="return false"  enctype="multipart/form-data" method="post">

	<div class="avatarblog"><img src="<?php echo $avatarimg;?>"></div>
	<input type="hidden" id="tipo" name="tipo" value ="comentario-entrada-<?php echo $titulo;?>"">
	<input type="hidden" id="user" name="user" value ="<?php echo $uid;?>">
	<div class="mensajearea">
	<textarea rows="3" id="comment" name="comment" required placeholder="Deja un comentario"></textarea>

	<div id="respuesta"></div>
	<a class="btnsendcomment envia-vipstoria" id="btnsendcomment">Enviar</a>
	</form>
</div>



	  </div>


<?php }    ?>





</div>
</div>


<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}


    $('#btnsendcomment').click(function(event){

			var mensaje  = $("#comment").val();
			var tipo  = $("#tipo").val();
			var user= $("#user").val();


		if (mensaje == "" || user == "" || tipo == "")
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

</script>

</script><script src='/slick/slick.min.js'></script>

<script>

$( document ).on( "ready" , function() {


	$('.carousel').slick({

		infinite: false,

		slidesToShow: 1,

		slidesToScroll: 1,
		lazyLoad: 'ondemand',

		accessibility: true,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 3000,

		arrows: false,

		dots:true,

	});





});

</script>

<!-- Footer =============================-->
<?php include('footer.php');?>
