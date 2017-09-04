<!doctype html>
<html lang = "es">
  <head>
    <?php include "include/head.php"; ?>
    <link rel = "stylesheet" href = "css/sign-up-in.css">

  </head>
  <body>


    <div class = "wrapper">
      <?php include "include/header.php"; ?>
      <div class = "main-wrapper">
        <div class = "main-container">
          <section class = "sec-1 sec">


            <form class = "reg-form" action = "sign-up-in.php" method = "post">
              <h1>Registración</h1>

              <fieldset>
<!--                <legend><span class = "number">1</span>Información básica</legend>-->
                <label for = "name">Nombre</label>
                <input type = "text" id = "name" name = "user_name">

                <label for = "address">Dirección</label>
                <input type = "text" id = "address" name = "user_address">

                <label for = "phone">Teléfono</label>
                <input type = "text" id = "phone" name = "user_phone">

                <label for = "mail">E-mail</label>
                <input type = "email" id = "email" name = "user_email">

                <label for = "password">Contraseña</label>
                <input type = "password" id = "password" name = "user_password">

                <label for = "password">Confirmación</label>
                <input type = "password" id = "password" name = "user_password">
                <input type = "checkbox" id = "development" value = "interest_development" name = "user_interest"><label
                    class = "light" for = "development">Acepto los términos y condiciones </label><br>

              </fieldset>


              <button type = "submit">Registrar</button>

              <div class = "social-wrap">
                <button class="loginBtn loginBtn--facebook">Ingresá con Facebook</button>
                <button class="loginBtn loginBtn--google">Ingresá con Google</button>
              </div>
            </form>
          </section>
        </div>
      </div>
      <?php include "include/footer.php"; ?>
    </div>
  </body>
