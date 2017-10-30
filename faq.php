<?php
require_once("soporte.php");

if ($auth->estaLogueado()) {
    true; // si necesito un pre action
}
?>

<?php include "header.php"; ?>

<section id="faq">
  <div class="jumbotron   faq-c1">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <div class="animated fadeInLeft">
            <h2>Quienes somos</h2>
            <h4 class="lead">Somos un emprendimiento gastronómico dedicado desde el año 1999 a la elaboración de sushi
              calidad Premium para delivery y catering.</h4>
          </div>
        </div>
        <div class="col-md-5 img-logo">
          <div class="animated fadeInUp">
            <img src="img/logo-big.gif">
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="clearfix"></div>
</section>

<div class="wow fadeIn">
  <section class="section-faq">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="wow animated fadeInLeft">
            <img src="img/fotod.jpeg" class="img-responsive img-faq">
          </div>
        </div>
        <div class="col-md-6">
          <div class="wow animated fadeInRight">
            <h3 class="page-header">Acerca de Furusato</h3>
            <p>En un ambiente de suma calidez y profesionalismo nuestros Sushi Masters junto al equipo de sushiman y
              ayudantes logran las más exquisitas y variadas combinaciones fusionando colores y sabores propios de este
              milenario arte culinario.
              En Sushi Furusato Delivery contemplamos cada detalle para brindar calidad a nuestros clientes. Desde la
              cálida atención de nuestros call centers capacitados para brindar asesoramiento, hasta el equipamiento
              refrigerado de nuestra flota de vehículos diseñada para acercarte un sushi exquisito en sabor y frescura.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<div class="wow fadeIn">
  <section class="section-primary">
    <div class="container">
      <div class="wow animated bounceIn">
        <div class="row">
          <div class="col-sm-6">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      ¿Dónde llamo para hacer mi pedido?
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    Podés realizar tu pedido a través de nuestra línea gratuita 0-800-77-SUSHI (78744) o al 4584-4777.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ¿Cuál es el horario de atención?
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Esperamos tu llamado de martes a domingos de 18:30 a 22:30 horas. Los lunes estamos cerrados. Sólo
                    atendemos el turno noche.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Cobran gastos de envío?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    El delivery es sin cargo dentro de la Ciudad de Buenos Aires. Consultá por otros destinos que se
                    encuentren fuera del área de cobertura.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                       href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      ¿Tienen mucha demora?
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    Nuestros platos son elaborados en el momento de tu pedido. La demora máxima estimada durante los
                    días de semana es de 1 hora y 20 minutos, y durante los fines de semana es de 1 hora y 40 minutos.
                    Como dice el refrán: "El que sabe comer, sabe esperar".
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                       href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      ¿Y... va a llegar fresco?
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    Por supuesto. 100% garantizado. Todos nuestros vehículos se encuentran especialmente acondicionados
                    para que recibas un producto en óptimas condiciones.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                       href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      ¿Que medios de pago aceptan?
                    </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">
                    Podés abonar tu pedido en efectivo, tarjetas de débito (Banelco o Maestro) y tarjetas de crédito
                    (VISA, American Express y Mastercard)
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<section class="delivery-map">
  <div class="container">
    <div class="wow animated pulse">
      <div class="row">
        <div class="col-md-6  col-md-offset-4">
          <img class="img-responsive img-map" src="img/radio-delivery.png">
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
