<?php
include_once("db.php");

class Validator
{
    // Valida informacion de registracion
    public function validarInformacion($informacion, db $db)
    {
        $arrayDeErrores = [];

        foreach ($informacion as $key => $value) {
            $informacion[$key] = trim($value);
        }

        if (strlen($informacion["nombre"]) > 20) {
            $arrayDeErrores["nombre"] = "El nombre es muy largo, solo ingresa tu primer nombre hasta 20 caracteres.";
        }
        if (strlen($informacion["nombre"]) < 3) {
            $arrayDeErrores["nombre"] = "El nombre es invalido. Debe tener más de 3 caracteres.";
        }
        if (strlen($informacion["apellido"]) > 20) {
            $arrayDeErrores["apellido"] = "El apellido es muy largo, solo ingresa tu primer apellido hasta 20 caracteres.";
        }
        if (strlen($informacion["apellido"]) < 3) {
            $arrayDeErrores["apellido"] = "El apellido es invalido. Debe tener más de 3 caracteres.";
        }

        if (strlen($informacion["telefono"]) < 3) {
            $arrayDeErrores["telefono"] = "El telefono es invalido. Debe tener más de 3 caracteres.";
        }
        if (strlen($informacion["telefono"]) > 20) {
            $arrayDeErrores["telefono"] = "El telefono es muy largo, solo es posible ingresar hasta 20 caracteres.";
        }
        if (strlen($informacion["celular"]) < 3) {
            $arrayDeErrores["celular"] = "El telefono móvil es invalido. Debe tener más de 3 caracteres.";
        }
        if (strlen($informacion["celular"]) > 20) {
            $arrayDeErrores["celular"] = "El telefono móvil es muy largo, solo es posible ingresar hasta 20 caracteres.";
        }
        if (strlen($informacion["direccion"]) < 3) {
            $arrayDeErrores["direccion"] = "El direccion es inválida. Debe tener más de 3 caracteres.";
        }
        if (strlen($informacion["direccion"]) > 40) {
            $arrayDeErrores["direccion"] = "El dirección es muy larga, solo es posible ingresar hasta 40 caracteres.";
        }

        if (strlen($informacion["barrio"]) < 3) {
            $arrayDeErrores["barrio"] = "El barrio es invalido. Debe tener más de 3 caracteres.";
        }
        if (strlen($informacion["barrio"]) > 20) {
            $arrayDeErrores["barrio"] = "El nombre del barrio es muy largo, solo es posible ingresar hasta 20 caracteres.";
        }

        if (strlen($informacion["email"]) == 0) {
            $arrayDeErrores["email"] = "Es campo de email es obligatorio";
        } elseif (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
            $arrayDeErrores["email"] = "Ingreso un email que no es válido";
        } elseif ($db->traerPorEmail($informacion["email"]) != null) {
            $arrayDeErrores["email"] = "El email ingresado ya existe en nuestros registros";
        }

        if (strlen($informacion["password"]) < 6) {
            $arrayDeErrores["password"] = "La contraseña tiene que tener al menos 6 caracteres";
        } elseif ($informacion["password"] != $informacion["cpassword"]) {
            $arrayDeErrores["password"] = "La contraseña no verifica";
        }
        $errorDeLaFoto = $_FILES["foto-perfil"]["error"];
        $nombreDeLaFoto = $_FILES["foto-perfil"]["name"];
        $extension = pathinfo($nombreDeLaFoto, PATHINFO_EXTENSION);

        if ($errorDeLaFoto != UPLOAD_ERR_OK) {
            $arrayDeErrores["foto-perfil"] = "Hubo un error al cargar la foto";
        } elseif ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif") {
            $arrayDeErrores["foto-perfil"] = "Eu, subiste algo que no era una imagen";
        }

        return $arrayDeErrores;
    }

    function validarLogin($informacion, db $db)
    {
        $arrayDeErrores = [];

        if (strlen($informacion["email"]) == 0) {
            $arrayDeErrores["email"] = "Debes ingresar un email";
        } elseif (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
            $arrayDeErrores["email"] = "Pusiste un mail que no era valido";
        } elseif ($db->traerPorEmail($informacion["email"]) == null) {
            $arrayDeErrores["email"] = "El usuario no existe";
        } else {
            //Validar la contraseña
            $usuario = $db->traerPorEmail($informacion["email"]);
            if (password_verify($informacion["password"], $usuario->getPassword()) == false) {
                $arrayDeErrores["password"] = "La contraseña no verifica";
            }
        }

        return $arrayDeErrores;
    }
}