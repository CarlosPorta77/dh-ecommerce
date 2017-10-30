<?php

include_once("db.php");

class Auth
{
    public function __construct()
    {
        session_start();

        if (! $this->estaLogueado() && isset($_COOKIE["usuarioLogueado"])) {
            $this->loguear($_COOKIE["usuarioLogueado"]);
        }
    }

    public function estaLogueado()
    {
        if (isset($_SESSION["usuarioLogueado"])) {
            return true;
        } else {
            return false;
        }
    }

    public function loguear($email)
    {
        $_SESSION["usuarioLogueado"] = $email;
    }

    public function usuarioLogueado(db $db)
    {
        if ($this->estaLogueado()) {
            return $db->traerPorEmail($_SESSION["usuarioLogueado"]);
        } else {
            return null;
        }
    }

    public function recordarUsuario($email)
    {
        setcookie("usuarioLogueado", $email, time() + 60 * 60 * 24 * 7);
    }

    public function olvidarUsuario($email)
    {
        setcookie("usuarioLogueado", $email, time() - 1000);
    }

    public function desloguear()
    {
        // session_destroy();
        setcookie("usuarioLogueado", "", -1);
        unset($_SESSION['usuarioLogueado']);
    }
}