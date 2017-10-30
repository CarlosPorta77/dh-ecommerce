<?php
  require_once("funciones.php");

  if (estaLogueado()) {
      header("Location:index.php");
  }


$arrayErrores = [];
$nombreDefault = "";
$apellidoDefault = "";
$telefonoDefault = "";
$celularDefault = "";
$direccionDefault = "";
$barrioDefault = "";
$emailDefault = "";

// Si vino por POST
if ($_POST) {
    //Validamos
    $arrayErrores = validarInformacion($_POST);

    // Si la validacion es correcta...
    if (count($arrayErrores) == 0) {
        // almacenamos usuario
        $usuario = armarUsuario($_POST);
        guardarUsuario($usuario);

        //guardamos la foto
        $archivo = $_FILES["foto-perfil"]["tmp_name"];
        $nombreDeLaFoto = $_FILES["foto-perfil"]["name"];
        $extension = pathinfo($nombreDeLaFoto, PATHINFO_EXTENSION);
        $nombre = dirname(__FILE__) . "/img/" . $_POST["email"] . ".$extension";
        move_uploaded_file($archivo, $nombre);


        // logueamos usuario y Redirigimos
        loguear($_POST["email"]);
        header("Location:index.php");
        exit;
    }


    $nombreDefault =  $_POST["nombre"];
    $apellidoDefault =  $_POST["apellido"];
    $telefonoDefault =  $_POST["telefono"];
    $celularDefault =  $_POST["celular"];
    $direccionDefault =  $_POST["direccion"];
    $barrioDefault =  $_POST["email"];
    $emailDefault =  $_POST["email"];


}
?>
<?php include "header.php"; ?>


<section class="register">
<div class="container ">
<div class="row">
<div class="col-md-8  col-md-offset-2">
  <div class="panel panel-danger animated fadeInLeft">
  <div class="panel-heading">Formulario de Registro</div>
    <div class="panel-body">

  <div class="row">
    <div class="col-md-10  col-md-offset-1 form-register">

      <form id="form_register" action="register.php" method="POST" enctype="multipart/form-data">

        <!--  form campo nombre -->
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input id="nombre" placeholder= "Ingresa tu nombre" class="form-control" type="text" name="nombre" value="<?=$nombreDefault?>">
          <?php if (isset($arrayErrores["nombre"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["nombre"]?>
            </span>
          <?php endif; ?>
        </div>

        <!--  form campo apellido -->
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input id="apellido" placeholder= "Ingresa tu apellido" class="form-control" type="text" name="apellido" value="<?=$apellidoDefault?>">
          <?php if (isset($arrayErrores["apellido"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["apellido"]?>
            </span>
          <?php endif; ?>
        </div>

        <!--  form campo telefono -->
        <div class="form-group">
          <label for="telefono">Telefono Fijo</label>
          <input id="telefono" placeholder= "Ingresa tu numero de telefono de linea. Si es larga distancia anteponer el prefijo" class="form-control" type="text" name="telefono" value="<?=$telefonoDefault?>">
          <?php if (isset($arrayErrores["telefono"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["telefono"]?>
            </span>
          <?php endif; ?>
        </div>

        <!--  form campo telefono movil -->
        <div class="form-group">
          <label for="celular">Telefono Móvil</label>
          <input id="celular" placeholder= "Ingresa tu numero de telefono movil. Si es larga distancia anteponer el prefijo" class="form-control" type="text" name="celular" value="<?=$celularDefault?>">
          <?php if (isset($arrayErrores["celular"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["celular"]?>
            </span>
          <?php endif; ?>
        </div>

        <!--  form campo direccion -->
        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input id="direccion" placeholder= "Ingresa dirección : Calle  Numero  -  Piso  Depto" class="form-control" type="text" name="direccion" value="<?=$direccionDefault?>">
          <?php if (isset($arrayErrores["direccion"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["direccion"]?>
            </span>
          <?php endif; ?>
        </div>

        <!--  form campo barrio/localidad -->
        <div class="form-group">
          <label for="barrio">Barrio</label>
          <input id="barrio" placeholder= "Ingresa barrio/localidad" class="form-control" type="text" name="barrio" value="<?=$barrioDefault?>">
          <?php if (isset($arrayErrores["barrio"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["barrio"]?>
            </span>
          <?php endif; ?>
        </div>

        <!--  form campo email -->
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" placeholder= "Ingresa tu email" class="form-control" type="text" name="email" value="<?=$emailDefault?>">
          <?php if (isset($arrayErrores["email"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["email"]?>
            </span>
          <?php endif; ?>
        </div>


        <!--  form campo password -->
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" placeholder= "Ingresa password. Debe ser mayor a 8 caracteres" class="form-control" type="password" name="password" value="">
          <?php if (isset($arrayErrores["password"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["password"]?>
            </span>
          <?php endif; ?>
        </div>

    <!--  form confirms campo password -->
        <div class="form-group">
          <label for="confirmpsw">Confirmar Password</label>
          <input id="confirmpsw" class="form-control" placeholder= "Confirma tu password" type="password" name="cpassword" value="">
          <?php if (isset($arrayErrores["cpassword"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["cpassword"]?>
            </span>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="foto">Foto de Perfil</label>

          <?php if (isset($arrayErrores["foto-perfil"])) : ?>
            <input id="foto" class="form-control error" type="file" name="foto-perfil">
          <?php else: ?>
            <input id="foto" class="form-control" type="file" name="foto-perfil">
          <?php endif; ?>
          <?php if (isset($arrayErrores["foto-perfil"])) : ?>
            <span style="color:red;">
              <?=$arrayErrores["foto-perfil"]?>
            </span>
          <?php endif; ?>
        </div>
      </form>
    </div>
    </div>
    </div>
    <div class="panel-footer">
      <button form="form_register" class="btn btn-danger" type="submit" name="button">Registrarme</button>

    </div>

  </div>
</div>
</div>
</div>
</section>




    <?php include "footer.php"; ?>
