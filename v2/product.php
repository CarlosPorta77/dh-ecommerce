<?php
  require_once("funciones.php");

  if (estaLogueado()) {
      // si necesito un pre action
  }
?>

<?php include "header.php"; ?>

<section class="producto">
  <div class="container">
    <div class="row">
      <div class="col-md-5  col-md-offset-1 ">
        <img class="img-centered img-responsive" src="img/combo1.jpg">
      </div>
      <div class="col-md-5">

        <h2>Combo 1</h2>
        <p> Combinado de maki surtidos, California roll, New York roll, niguiri y sashimi de salmón rosado, pescados blancos y langostino
        </p>


        <div class="ratings">
          <p class="pull-right">24 piezas</p>
          <p class="pull-left">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </p>
            <div class="price">$519</div>
        </div>
        <hr>
        <form id="cart2form" class="form-inline" action="cart.php" method="POST">
              <div class="form-group">
                    <p> Cantidad:
                        <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                          </select>
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                    </p>
              </div>
        </form>
        <br><br>

      </div>
    </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Contenido
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">

            MAKI / ROLLS
            2 hongo shiitake
            2 kiuri (pepino japonés)
            4 salmón rosado
            2 California roll
            2 New York roll
            NIGUIRI
            2 salmón rosado
            1 langostino
            2 pescados blancos del día
            1 piel de salmón grillada con salsa teriyaki
            SASHIMI
            3 salmón rosado
            3 pescados blancos del día              </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Información Nutricional
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <p>
              XX carbohidatros
            </p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Recomendaciones
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            Combinar con producto xx.
          </div>
        </div>
      </div>
    </div>

 </div>
</section>




<?php include "footer.php"; ?>
