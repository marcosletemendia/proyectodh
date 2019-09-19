<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
    <?php require_once("configuraciones.php"); ?>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- NAVBAR -->
    <?php require_once("navbar.php"); ?>

    <div class="container-fluid main"> <!-- GENERAL -->

       <div class="first container-fluid px-0">  <!-- FOTO ESTADIO + GIF ANIMADO-->

        <div class="foto-estadio">
          <img src="fotos/estadio.jpg" alt="" class="img-responsive w-100">
        </div>

        <div class="gif-animado col-md-8 h-50 w-50"> <!-- gif animado -->
            <img class="mx-auto d-block h-100 py-3 img-fluid" src="fotos/botines/gif/gif.gif" alt="Gif con botines">
        </div>

      </div>

      <div class="carousel">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="fotos/botines/adidas-nemeziz1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="nemeziz">Botines Adidas New Generation Nemeziz</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="#">Comprar Ahora</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="fotos/botines/adidas-adizero1.jpg" class="d-block w-100" alt="...">
              <div id="carousel-adizero"class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="adizero">Botines Adidas Adizero</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="#">Comprar Ahora</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="fotos/botines/nike-mercurial1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="mercurial">Nuevos Botines Nike Mercurial</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="#">Comprar Ahora</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

      <div class="promo container-fluid mt-3"> <!-- PROMO KIT BARCELONA -->
        <h1 class="text-center pt-2">PROMO KIT BARCELONA</h1>
        <hr class="mt-0 border border-dark"style="width:300px">
        <section class="parrafo float-left col-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>

        <section class="imagen-parrafo float-left col-6">
          <img src="fotos/promo-barcelona.jpg" alt="" class="img-fluid">
        </section>
      </div>

      <div class="ofertas text-center container-fluid mt-3"> <!-- SLIDER con ofertas -->
        <h1 class="text-light pt-2">OFERTAS DE ACCESORIOS</h1>
        <hr class="mt-0 border border-white"style="width:250px">
        <div class="mt-1 fotos-accesorios col-xs-12 col-sm-6 col-md-6 col-lg-3 mb-sm-3 mb-md-3 float-left">
          <img class="w-100 rounded" src="fotos/accesorios/conos.jpg" alt="">
        </div>
        <div class="mt-1 fotos-accesorios col-xs-12 col-sm-6 col-md-6 col-lg-3 mb-sm-3 mb-md-3 float-left">
          <img class="w-100 rounded" src="fotos/accesorios/guantes.jpg" alt="">
        </div>
        <div class="mt-1 fotos-accesorios col-xs-12 col-sm-6 col-md-6 col-lg-3 mb-sm-3 mb-md-3 float-left">
          <img class="w-100 rounded" src="fotos/accesorios/silbato.jpg" alt="">
        </div>
        <div class="mt-1 fotos-accesorios col-xs-12 col-sm-6 col-md-6 col-lg-3 mb-sm-3 mb-md-3 float-left">
          <img class="w-100 rounded" src="fotos/accesorios/inflador.jpg" alt="">
        </div>
      </div>

    </div>

    <!-- FOOTER -->
    <?php require_once("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
