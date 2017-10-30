<?php

require_once("soporte.php");
if ($auth->estaLogueado()) {
    header("Location:index.php");
}

$arrayErrores = [];
if ($_POST) {

    //Validar
    $arrayErrores = $validator->validarLogin($_POST, $db);

    //Si es valido, loguear
    if (count($arrayErrores) == 0) {
        $auth->loguear($_POST["email"]);
        if (isset($_POST["recordame"])) {
            $auth->recordarUsuario($_POST["email"]);
        }
        header("Location:index.php");
        exit;
    }
}

?>
<?php include "header.php"; ?>
<section class="login">
  <div class="container">
    <div class="row">
      <div class="col-md-6  col-md-offset-3">
        <div class="panel panel-danger animated fadeInDown">
          <div class="panel-heading">LogIn</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 form-login">
                <form id="login_form" action="login.php" method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" name="email" value="">
                  </div>
                    <?php if (count($arrayErrores) > 0) : ?>
                      <ul class="error" style="color:red">
                          <?php foreach ($arrayErrores as $error) : ?>
                            <li><?=$error?></li>
                          <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  <div class="form-group">
                    <label for="pswd">Password</label>
                    <input id="pswd" class="form-control" type="password" name="password" value="">
                  </div>
                  <div class="form-group">
                    <input id="remember" type="checkbox" name="recordame" value="1">
                    <label for="remember"> Recordame </label>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <button form="login_form" class="btn btn-danger" type="submit" name="button"> Ingresar</button>
            <a class="btn btn-danger" href="forget.php">Olvide el Password</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
