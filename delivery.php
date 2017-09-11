<!doctype html>
<html lang = "es">
  <head>
    <?php include "include/head.php"; ?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  </head>
  <body>
    <div class = "wrapper">
      <?php include "include/header.php"; ?>
      <div class = "main-wrapper">
        <main class = "main-container">
          <div class = "main__intro">
            <section class = "delivery sec">
              <div class = "delivery__photo"></div>
              <h2 class = "delivery__titulo">Delivery</h2>
              <p class = "delivery__texto">Nuestro radio de entrega dentro de la Ciudad de Buenos Aires: </p>
              <p class = "delivery__mapa"><img src = "./img/delivery-l.gif" alt = ""></p>
            </section>
          </div>
          <div class = "main__secciones">
            <div class = "faq-header sec">Preguntas frecuentes</div>

            <section class = "delivery-faq">
              <div class = "faq-c  sec">
                <p class="faq-icon"><i class = "fa fa-phone fa-3x"></i></p>
                <div class = "faq-q"><span class = "faq-t">+</span>¿Dónde llamo para hacer mi pedido?</div>
                <div class = "faq-a">
                  <p>Podés realizar tu pedido a través de nuestra línea gratuita 0-800-77-SUSHI (78744) o al 4584-4777.</p>
                </div>
              </div>
              <div class = "faq-c  sec">
                <p class="faq-icon"><i class = "fa fa-clock-o fa-3x"></i></p>
                <div class = "faq-q"><span class = "faq-t">+</span>¿Cuál es el horario de atención?</div>
                <div class = "faq-a">
                  <p>Esperamos tu llamado de martes a domingos de 18:30 a 22:30 horas. Los lunes estamos cerrados. Sólo atendemos el turno noche.</p>
                </div>
              </div>
              <div class = "faq-c sec">
                <p class="faq-icon"><i class = "fa fa-usd fa-3x"></i></p>
                <div class = "faq-q"><span class = "faq-t">+</span>¿Cobran gastos de envío?</div>
                <div class = "faq-a">
                  <p>El delivery es sin cargo dentro de la Ciudad de Buenos Aires. Consultá por otros destinos que se encuentren fuera del área de cobertura.</p>
                </div>
              </div>
              <div class = "faq-c sec">
                <p class="faq-icon"><i class = "fa fa-motorcycle fa-3x"></i></p>
                <div class = "faq-q"><span class = "faq-t">+</span>¿Tienen mucha demora?</div>
                <div class = "faq-a">
                  <p>Nuestros platos son elaborados en el momento de tu pedido. La demora máxima estimada durante los días de semana es de 1 hora y 20 minutos, y durante los fines de semana es de 1 hora y 40 minutos. Como dice el refrán: &quot;El que sabe comer, sabe esperar&quot;.</p>
                </div>
              </div>
              <div class = "faq-c sec">
                <p class="faq-icon"><i class = "fa fa-snowflake-o fa-3x"></i></p>
                <div class = "faq-q"><span class = "faq-t">+</span>¿Y... va a llegar fresco?</div>
                <div class = "faq-a">
                  <p>Por supuesto. 100% garantizado. Todos nuestros vehículos se encuentran especialmente acondicionados para que recibas un producto en óptimas condiciones.</p>
                </div>
              </div>
              <div class = "faq-c sec">
                <p class="faq-icon"><i class = "fa fa-money fa-3x"></i></i></p>
                <div class = "faq-q"><span class = "faq-t">+</span>¿Que medios de pago aceptan?</div>
                <div class = "faq-a">
                  <p>Podés abonar tu pedido en efectivo, tarjetas de débito (Banelco o Maestro) y tarjetas de crédito (VISA, American Express y Mastercard)</p>
                </div>
              </div>
            </section> <!-- /.nuestro-menu -->
          </div> <!-- /.main-secciones -->
        </main>
      </div>
      <?php include "include/footer.php"; ?>
    </div>
    <script>
      $(".faq-q").click(function () {
        var container = $(this).parents(".faq-c");
        var answer = container.find(".faq-a");
        var trigger = container.find(".faq-t");
        answer.slideToggle(200);
        if (trigger.hasClass("faq-o")) {
          trigger.removeClass("faq-o");
        }
        else {
          trigger.addClass("faq-o");
        }
      });
    </script>
  </body>
</html>
