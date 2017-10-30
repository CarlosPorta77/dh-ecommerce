<?php

require_once("soporte.php");

if ($auth->estaLogueado()) {
    $auth->olvidarUsuario($auth->usuarioLogueado($db)->getEmail());
    $auth->desloguear();

    header("Location:index.php");
}