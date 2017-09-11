<!doctype html>
<html lang = "es">
  <head>
    <?php include "include/head.php"; ?>
  </head>
  <body>
    <div class = "wrapper">
      <?php include "include/header.php"; ?>
      <div class = "main-wrapper">
        <main class = "main-container">
          <div class = "main__intro">
            <section class = "welcome sec">
              <div class = "welcome__photo"></div>
              <h1 class = "welcome__titulo">Bienvenido a Sushi Furusato</h1>
              <p class = "welcome__texto">Disfrutá de un verdadero sushi calidad Premium. Los mejores ingredientes seleccionados por su frescura
                y sabor. Preparado en el momento tu pedido con la dedicación y experiencia de nuestros Sushi
                Masters.</p>
            </section>
          </div>
          <div class = "main__secciones">
            <section class = "nuestro-menu sec">
              <div class = "nuestro-menu__banner banner">
                <a href = "menu.php">
                  <h2>NUESTRO MENÚ</h2>
                </a>
              </div>
            </section> <!-- /.nuestro-menu -->
            <section class = "promos sec">
              <div class = "promos__banner banner">
                <a href = "promos.php">
                  <h2>P R O M O S</h2>
                </a>
              </div>
            </section>
            <section class = "delivery sec">
              <div class = "delivery__banner banner">
                <a href = "delivery.php">
                  <h2>DELIVERY</h2>
                </a>
              </div>
            </section>
          </div> <!-- /.main-secciones -->
        </main>
      </div>
      <?php include "include/footer.php"; ?>
    </div>
  </body>
</html>
