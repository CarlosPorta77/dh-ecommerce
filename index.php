<?php
  require_once("funciones.php");

  if (estaLogueado()) {
      // si necesito un pre action
  }
?>

  <?php include "header.php"; ?>

  <div class="container-fluid">
    <div class = "wow animated fadeIn">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/b1.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-md-12">
                  <h2>Disfrutá de un verdadero sushi calidad Premium</h2>
                  <p> Los mejores ingredientes seleccionados por su frescura y sabor</p>
                  <p><a class="btn btn-primary" href="menu.php">Pedí Ahora</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/b2.png" class="img-responsive" >
          <div class="carousel-caption">
            <div class="row">
              <div class="col-md-12">
                <h2>Calidad Premium, como te merecés</h2>
                <p> Preparado en el momento tu pedido con la dedicación y experiencia de nuestros Sushi Masters</p>
                <p><a class="btn btn-primary" href="menu.php">Pedí ahora</a></p>
              </div>

            </div>
          </div>
        </div>

        <div class="item">
          <img src="img/b3.png" class="img-responsive">
          <div class="carousel-caption">
            <div class="row">
              <div class="col-md-12">
                <h2>Delivery & Catering</h2>
                <p> Disfrutá de un verdadero sushi calidad Premium</p>
                <p><a class="btn btn-primary" href="menu.php">Pedí ya</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!---    middle section -->

    <section id="index-middle">
      <div class="container-fluid">
       <div class = "wow animated fadeIn">
        <div class="row">
          <div class="col-sm-4">
            <img src="img/foto-04.jpg" class="index-img">
            <h2>NUESTRO MENÚ</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>

          </div>
          <div class="col-sm-4">
            <img src="img/foto-02.jpg" class="index-img">
            <h2>P R O M O S</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>

          </div>
          <div class="col-sm-4">
            <img src="img/foto-03.jpg" class="index-img">
              <h2>CATERING</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>

          </div>
        </div>
      </div>
    </div>
    </section>

  <?php include "footer.php"; ?>
