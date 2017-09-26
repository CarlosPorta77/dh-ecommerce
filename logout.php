<?php

require_once("funciones.php");

if (estaLogueado()) {
  olvidarUsuario(usuarioLogueado()["email"]);
  desloguear(usuarioLogueado()["email"]);

  header("Location:index.php");
}

?>
