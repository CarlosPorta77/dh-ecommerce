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
              <h1>Ingreso</h1>

              <fieldset>
                <!--                <legend><span class = "number">1</span>Información básica</legend>-->
                <label for = "mail">E-mail</label>
                <input type = "email" id = "email" name = "user_email">

                <label for = "password">Contraseña</label>
                <input type = "password" id = "password" name = "user_password">

              </fieldset>


              <button type = "submit">Ingresar</button>
              <div class = "reg-form__pass-options">
                <div>
                  <input type = "checkbox" id = "design" value = "interest_design" name = "user_interest"><label
                      class = "light" for = "design">Recordarme</label>
                </div>

                <a href = "#" class = "reg-form__lost-pass">Olvidé mi contraseña</a>
              </div>

              <div class = "social-wrap">
                <button class = "loginBtn loginBtn--facebook">Ingresá con Facebook</button>
                <button class = "loginBtn loginBtn--google">Ingresá con Google</button>
              </div>

              <div class = "reg-form__opciones">
                <!--                <label>Interests:</label>-->

              </div>
            </form>
          </section>
        </div>
      </div>
      <?php include "include/footer.php"; ?>
    </div>
  </body>
