<?php
require_once("soporte.php");
require_once("clases/usuario.php");

if (! $auth->estaLogueado()) {
    header("Location:login.php");
}
$usuario = $auth->usuarioLogueado($db);
?>

<?php include "header.php"; ?>

<section>
  <div class="container">
    <h1 class="page-header">Mi perfil</h1>
    <div class="row">
      <div class="col-md-9">
        <div class="profile">
          <div class="row">

            <div class="col-md-4">
              <img src="img/<?=$usuario->getEmail()?>.jpg" class="img-thumbnail">
            </div>

            <div class="col-md-8">
              <div class="form-group  ">
                <div class="input-group">
                  <span class="input-group-addon">Nombre</span>
                  <input type="text" class="form-control" value="<?=$auth->usuarioLogueado($db)->getNombre()?>">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">Apellido</span>
                  <input type="text" class="form-control" value="<?=$auth->usuarioLogueado($db)->getApellido()?>">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">Telefono</span>
                  <input type="text" class="form-control" value="<?=$auth->usuarioLogueado($db)->getTelefono()?>">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">Telefono Movil</span>
                  <input type="text" class="form-control" value="<?=$auth->usuarioLogueado($db)->getCelular()?>">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">Dirección</span>
                  <input type="text" class="form-control" value="<?=$auth->usuarioLogueado($db)->getDireccion()?>">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">Barrio</span>
                  <input type="text" class="form-control" value="<?=$auth->usuarioLogueado($db)->getBarrio()?>">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">Email</span>
                  <input type="text" class="form-control" value="<?=$auth->usuarioLogueado($db)->getEmail()?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="list-group">
          <a href="index.php" class="list-group-item">
            <i class="glyphicon glyphicon-dashboard"></i> Dashboard
          </a>
          <a href="notimplemented.php" class="list-group-item active"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
          <a href="notimplemented.php" class="list-group-item"><i class="glyphicon glyphicon-ok"></i> Actualizar</a>
          <a href="notimplemented.php" class="list-group-item"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
        </div>

      </div>
    </div>
  </div>

</section>

<?php include "footer.php"; ?>
