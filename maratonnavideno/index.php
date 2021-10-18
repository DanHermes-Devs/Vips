<?php
    if(isset($_COOKIE['persistID']))
    {
        $userid =   $_COOKIE['persistID'];
        session_start();
        $_SESSION['uservips'] = $userid;
    }
    if( isset($_SESSION['uservips'])!="" ){
        $uid=$_SESSION['uservips'];
    }
    include('../header-bootstrap.php');
?>
<link rel="stylesheet" href="/css/animate.css">
<link rel='stylesheet prefetch' href='/slick/slick.css'><link rel='stylesheet prefetch' href='/slick/slick-theme.css'>
<link rel='stylesheet prefetch' href='estilos.css'>

  <main>
    <div class="row">
      <div class="col-md-12">
    
      <header></header>
      <section class="main">
        <div class="hero-txt">
            <div class="logo">
                <img src="/img/2019/maraton/logo-maraton-navideno.png" alt="maraton navideño">
            </div>
            <h3 class="subtitle">
                Participa en el Maratón Navideño del 25 de noviembre al 15 de diciembre y gana cenas navideñas, cupones
                sorpresa e increíbles premios.
            </h3>
        </div>
        <div class="personajes">
            <img src="/img/2019/maraton/personajes.png" alt="" class="floating" >
        </div>
        <div class="btn-wrapper">
            <a href="/maratonnavideno/maraton">
                <img src="/img/2019/maraton/btn-login.png" alt="Comenzar maratón" >
            </a>
            </a>
        </div>
    </section>

    <section class="bases">
        <h2 class="title-1">¿Cómo participo?</h2>
        <img src="/img/2019/maraton/rope.svg" alt="" class="cuerda-izquierda">
        <img src="/img/2019/maraton/rope.svg" alt="" class="cuerda-derecha">
        <div class="madera rotate-right">
            <p>1. Ven a Vips y prueba nuestros nuevos <strong>platillos navideños</strong>.</p>
        </div>
        <div class="madera rotate-left">
            <p>2. Entra a nuestro <a href="/maratonnavideno/maraton">maratón navideño</a>, regístrate e ingresa tu ticket.
            </p>
        </div>
        <div class="madera rotate-right">
            <p>3. Elige tu avatar y <strong>acumula puntos</strong>, cada ticket te acerca más a la meta.</p>
        </div>
    </section>

    <section class="video">
        <a href="#" class="btn-play">
            <img src="/img/2019/maraton/btn-play.png" alt="">
        </a>
    </section>

    <section class="puntaje">
        <div class="cuerda-wrapper">
            <img src="/img/2019/maraton/rope.svg" alt="" class="cuerda-izquierda">
        </div>
        <div class="cuerda-wrapper">
            <img src="/img/2019/maraton/rope.svg" alt="" class="cuerda-derecha">
        </div>
        <br><br>
        <div class="madera rotate-right">
            <h2 class="title-2">¿Cómo sumo puntos?</h2>
        </div>
        <div class="puntos-wrapper">
            <div class="opcion">
                <img src="/img/2019/maraton/icon-01-tickets.png" alt="" class="floating" >
                <p>Todos los tickets con un mínimo de $50 participan y <strong>valen 100 puntos</strong>.</p>
            </div>
            <div class="opcion">
                <img src="/img/2019/maraton/icon-02-platillo.png" alt="" class="floating" >
                <p>Los tickets con por lo menos un platillo navideño <strong>valen 200 puntos</strong>.</p>
            </div>
            <div class="opcion">
                <img src="/img/2019/maraton/icon-03-postales.png" alt="" class="floating" >
                <p>Si compartes las postales navideñas por Facebook, <strong>sumas 10 puntos por cada una</strong>*.
                    <br><sub>*Podrás compartir hasta tres postales por semana a tres contactos diferentes.</sub></p>
            </div>
        </div>
    </section>

    <section class="ganadores">
        <h2 class="title-3">¿Cómo gano?</h2>
        <div class="descripcion">
            <p>Habrá tres cortes semanales con tres ganadores en cada uno. Resultarán ganadores los participantes con
                mayor
                número de puntos acumulados.</p>
        </div>
        <div class="cortes">
            <hr>
            <h3 class="title-cortes">Primer Corte</h3>
            <p>El primer corte será el 1º de diciembre, (del 25 de noviembre al 1º de diciembre). Los tres participantes
                con mayor número de puntos, ganarán cada uno una cena navideña para cuatro personas. Los ganadores se
                darán a conocer el 4 de diciembre.
                (Los ganadores del primer corte no podrán ganar en el segundo corte, pero sí en el tercer y último
                corte).
            </p>
            <hr>
            <h3 class="title-cortes">Segundo Corte</h3>
            <p>El segundo corte será del 2 al 8 de diciembre. El participante con mejor puntaje ganará una cena navideña
                para ocho personas, el segundo con mejor puntaje ganará una cena navideña para seis personas y el
                tercero con mejor puntaje, ganará una cena navideña para cuatro personas.
                Los ganadores del segundo corte se darán a conocer el 11 de diciembre.
            </p>
            <hr>
            <h3 class="title-cortes">Tercer Corte</h3>
            <p>El tercer y último corte será del 9 al 15 de diciembre. El participante con mejor puntaje ganará una cena
                para ocho personas más una Pantalla Samsung 50”. El segundo mejor puntaje ganará una cena navideña para
                seis personas y un Nintendo Switch Lite. El tercer mejor puntaje ganará una cena para cuatro personas y
                un Smart Watch (modelo por definir).
                Los ganadores del tercer corte se darán a conocer el 22 de diciembre.
            </p>
        </div>
    </section>

    <section class="cupones">
        <h2 class="title-1">Cupones</h2>
        <p>
            A lo largo de la carrera, habrá cupones de regalo que podrás redimir en tienda
            hasta el <strong>31 de diciembre del 2019</strong>*.
            <br>
            <sub>*Estos beneficios no suman puntos.</sub>
        </p>
        <div class="pavips">
            <img src="/img/2019/maraton/pavips.png" alt="">
        </div>
        <div class="flex-regalos">
            <div class="regalos">
                <img src="/img/2019/maraton/presents.png" alt="">
            </div>
        </div>
    </section>

    <section class="platillos">
        <h2 class="title-1">Descubre nuestros Platillos navideños</h2>
        <div class="slick-desktop">
            <div class="slide">
                <h4 class="title-platillo">Romeritos con tortitas de camarón</h4>
                <img src="/img/2019/maraton/platillos/romeritos-tortitas-de-camaron.png" alt="">
            </div>
            <div class="slide">
                <h4 class="title-platillo">Tortitas de romeritos y bacalao</h4>
                <img src="/img/2019/maraton/platillos/tortitas-romeritos-bacalao.png" alt="">
            </div>
            <div class="slide">
                <h4 class="title-platillo">Sándwich de pavo empanizado</h4>
                <img src="/img/2019/maraton/platillos/sandwich-pavo-empanizado.png" alt="">
            </div>
            <div class="slide">
                <h4 class="title-platillo">Crepas navideñas</h4>
                <img src="/img/2019/maraton/platillos/crepas-navidenas.png" alt="">
            </div>
            <div class="slide">
                <h4 class="title-platillo">Bacalao a la vizcaína</h4>
                <img src="/img/2019/maraton/platillos/bacalao-vizcaina.png" alt="">
            </div>
            <div class="slide">
                <h4 class="title-platillo">Pavo en salsa navideña</h4>
                <img src="/img/2019/maraton/platillos/pavo-salsa-navidena.png" alt="">
            </div>
            <div class="slide">
                <h4 class="title-platillo">Pierna de cerdo en salsa pimienta</h4>
                <img src="/img/2019/maraton/platillos/pierna-cerdo-en-salsa-pimienta.png" alt="">
            </div>
        </div>
        <div class="buscador">
            <a href="/ubicaciones" class="boton-vips">Busca tu vips</a>
            <a href="/tyc-maratonnavideno" class="terms" >Términos y condiciones</a>
        </div>
    </section>
      </div>
    </div>
  </main>

  <script src='/slick/slick.min.js'></script>
  <script>
  $(document).ready(function () {
  $('.slick-desktop').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});
  </script>

<?php
include('../footer-bootstrap.php');
?>
