<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- NAVBAR -->
    <h1>NAVBAR</h1>

    <div class="container-fluid main"> <!-- GENERAL -->

       <div class="first container-fluid">  <!-- FOTO ESTADIO + GIF ANIMADO-->

        <div class="foto-estadio">
          <h1>foto estadio</h1>
          <img src="fotos/estadio.jpg" alt="" class="img-responsive w-100 h-25">
        </div>

        <div class="gif-animado col-md-6"> <!-- gif animado -->
          <h1 class="text-center text-white">gif animado</h1>
          <div style="width:100%;height:0;padding-bottom:100%;position:relative;"><iframe src="https://giphy.com/embed/RMxFLWc8WXOidgLqPj" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/RMxFLWc8WXOidgLqPj"></a></p>
        </div>

      </div>

      <div class="text-center container-fluid"> <!-- SLIDER con Camisetas destacados -->
        <br><br> <h1>SLIDER con destacados</h1> <br>
        <div class="fotos-camisetas col-md-3 float-left border-right border-dark">
          <img class="w-100" src="fotos/camisetas/camiseta-river.jpg" alt="">
        </div>
        <div class="fotos-camisetas col-md-3 float-left border-right border-dark">
          <img class="w-100" src="fotos/camisetas/camiseta-boca.jpg" alt="">
        </div>
        <div class="fotos-camisetas col-md-3 float-left border-right border-dark">
          <img class="w-100" src="fotos/camisetas/camiseta-mancity.jpg" alt="">
        </div>
        <div class="fotos-camisetas col-md-3 float-left">
          <img class="w-100" src="fotos/camisetas/camiseta-atleticom.jpg" alt="">
        </div>
      </div>

      <div class="promo container-fluid mt-5"> <!-- PROMO KIT BARCELONA -->
        <section class="parrafo float-left col-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>

        <section class="imagen-parrafo float-left col-5">
          <br>
          <img src="fotos/promo-barcelona.jpg" alt="" class="img-fluid">
        </section>
      </div>

      <div class="text-center container-fluid"> <!-- SLIDER con ofertas -->
        <br><br> <h1>SLIDER con ofertas</h1> <br><br>
      </div>

    </div>

    <!-- FOOTER -->
    <h1>FOOTER</h1>

    <!-- PROBANDO CAROUSEL -->
    <div class="carousel slide" data-ride="carousel">

    </div>

  </body>
</html>
