<?php

session_start();

if (!estaLogueado() && isset($_COOKIE["usuarioLogueado"])) {
    loguear($_COOKIE["usuarioLogueado"]);
}
// Conexion a la base de datos
$dsn = 'mysql:host=localhost;dbname=furusato;charset=utf8mb4;port=3306';
$user ="root";
$pass = "root";

try {
  $db = new PDO($dsn, $user, $pass);
} catch (Exception $e) {
  echo "La conexion a la base de datos falló: " . $e->getMessage();
}



// Valida informacion de registracion
function validarInformacion($informacion)
{
    $arrayDeErrores = [];

    foreach ($informacion as $key => $value) {
        $informacion[$key] = trim($value);
    }

    if ( strlen($informacion["nombre"]) > 20) {
        $arrayDeErrores["nombre"] = "El nombre es muy largo, solo ingresa tu primer nombre hasta 20 caracteres.";
    }
    if (strlen($informacion["nombre"]) < 3 ) {
        $arrayDeErrores["nombre"] = "El nombre es invalido. Debe tener más de 3 caracteres.";
    }
    if ( strlen($informacion["apellido"]) > 20) {
        $arrayDeErrores["apellido"] = "El apellido es muy largo, solo ingresa tu primer apellido hasta 20 caracteres.";
    }
    if (strlen($informacion["apellido"]) < 3 ) {
        $arrayDeErrores["apellido"] = "El apellido es invalido. Debe tener más de 3 caracteres.";
    }

    if (strlen($informacion["telefono"]) < 3 ) {
        $arrayDeErrores["telefono"] = "El telefono es invalido. Debe tener más de 3 caracteres.";
    }
    if ( strlen($informacion["telefono"]) > 20) {
        $arrayDeErrores["telefono"] = "El telefono es muy largo, solo es posible ingresar hasta 20 caracteres.";
    }
    if (strlen($informacion["celular"]) < 3 ) {
        $arrayDeErrores["celular"] = "El telefono móvil es invalido. Debe tener más de 3 caracteres.";
    }
    if ( strlen($informacion["celular"]) > 20) {
        $arrayDeErrores["celular"] = "El telefono móvil es muy largo, solo es posible ingresar hasta 20 caracteres.";
    }
    if (strlen($informacion["direccion"]) < 3 ) {
        $arrayDeErrores["direccion"] = "El direccion es inválida. Debe tener más de 3 caracteres.";
    }
    if ( strlen($informacion["direccion"]) > 40) {
        $arrayDeErrores["direccion"] = "El dirección es muy larga, solo es posible ingresar hasta 40 caracteres.";
    }

    if (strlen($informacion["barrio"]) < 3 ) {
        $arrayDeErrores["barrio"] = "El barrio es invalido. Debe tener más de 3 caracteres.";
    }
    if ( strlen($informacion["barrio"]) > 20) {
        $arrayDeErrores["barrio"] = "El nombre del barrio es muy largo, solo es posible ingresar hasta 20 caracteres.";
    }

    if (strlen($informacion["email"]) == 0) {
        $arrayDeErrores["email"] = "Es campo de email es obligatorio";
    } elseif (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
        $arrayDeErrores["email"] = "Ingreso un email que no es válido";
    } elseif (traerPorEmail($informacion["email"]) != null) {
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



function validarLogin($informacion)
{
    $arrayDeErrores = [];

    if (strlen($informacion["email"]) == 0) {
        $arrayDeErrores["email"] = "Debes ingresar un email";
    } elseif (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
        $arrayDeErrores["email"] = "Pusiste un mail que no era valido";
    } elseif (traerPorEmail($informacion["email"]) == null) {
        $arrayDeErrores["email"] = "El usuario no existe";
    } else {
        //Validar la contraseña
        $usuario = traerPorEmail($informacion["email"]);
        if (password_verify($informacion["password"], $usuario["password"]) == false) {
            $arrayDeErrores["password"] = "La contraseña no verifica";
        }
    }

    return $arrayDeErrores;
}


function armarUsuario($data)
{
    return [
    "nombre" => $data["nombre"],
    "apellido" => $data["apellido"],
    "telefono" => $data["telefono"],
    "celular" => $data["celular"],
    "direccion" => $data["direccion"],
    "barrio" => $data["barrio"],
    "email" => $data["email"],
    "password" => password_hash($data["password"], PASSWORD_DEFAULT),
  ];
}

function guardarUsuarioJson($usuario)
{
    $usuarioJSON = json_encode($usuario);
    file_put_contents("usuarios.json", $usuarioJSON . PHP_EOL, FILE_APPEND);
}

function guardarUsuario($usuario) {
  global $db;

  $sql = "Insert into furusato.usuario values (default,:nombre,:apellido,:telefono,:celular,:direccion,:barrio,:email,:password)";

  $query = $db->prepare($sql);
  $query->bindValue(":nombre",$usuario["nombre"]);
  $query->bindValue(":apellido",$usuario["apellido"]);
  $query->bindValue(":telefono",$usuario["telefono"]);
  $query->bindValue(":celular",$usuario["celular"]);
  $query->bindValue(":direccion",$usuario["direccion"]);
  $query->bindValue(":barrio",$usuario["barrio"]);
  $query->bindValue(":email",$usuario["email"]);
  $query->bindValue(":password",$usuario["password"]);

  $query->execute();

  $usuario["idusuario"] = $db->lastInsertId();

  return $usuario;

}

function traerTodosJson()
{
    $archivo = file_get_contents("usuarios.json");
    $array = explode(PHP_EOL, $archivo);
    array_pop($array);

    $arrayFinal = [];
    foreach ($array as $usuario) {
        $arrayFinal[] = json_decode($usuario, true);
    }

    return $arrayFinal;
}

function traerTodos() {
  global $db;

  $sql = "Select * from furusato.usuario";

  $query = $db->prepare($sql);

  $query->execute();

  $arrayFinal = $query->fetchAll(PDO::FETCH_ASSOC);

  return $arrayFinal;
}

function traerPorEmail($email) {
  global $db;

  $sql = "Select * from furusato.usuario where email = :email";

  $query = $db->prepare($sql);

  $query->bindValue(":email", $email);

  $query->execute();

  $usuario = $query->fetch(PDO::FETCH_ASSOC);

  return $usuario;

}



function traerPorEmailJsonDEPRECATED($email)
{
    $todos = traerTodos();

    foreach ($todos as $usuario) {
        if ($usuario["email"] == $email) {
            return $usuario;
        }
    }

    return null;
}

function loguear($email)
{
    $_SESSION["usuarioLogueado"] = $email;
}

function desloguear($email)
{
    unset($_SESSION['usuarioLogueado']);
    // session_destroy();
}


function estaLogueado()
{
    if (isset($_SESSION["usuarioLogueado"])) {
        return true;
    } else {
        return false;
    }
}

function usuarioLogueado()
{
    if (estaLogueado()) {
        return traerPorEmail($_SESSION["usuarioLogueado"]);
    } else {
        return null;
    }
}

function recordarUsuario($email)
{
    setcookie("usuarioLogueado", $email, time() + 60*60*24*7);
}

function olvidarUsuario($email)
{
    setcookie("usuarioLogueado", $email, time() - 1000);
}

function crearTablaUsuario() {
  global $db;
  //CREATE DATABASE IF NOT EXISTS `furusato` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
  $sql = "CREATE TABLE furusato.usuario ( idusuario bigint(20) unsigned NOT NULL AUTO_INCREMENT,  nombre varchar(100) NOT NULL, apellido varchar(100), telefono varchar(30), celular varchar(30), direccion varchar(100), barrio varchar(100), email varchar(100), password varchar(100), PRIMARY KEY (idusuario) ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;";
  $db->exec($sql);
}

function migrarJsonaMysql(){
  global $db;
  $usuariosJson = traerTodosJson();
  echo "<ul>";
  foreach ($usuariosJson as $usuario) {
    guardarUsuario($usuario);
    echo "<li> ".$usuario["nombre"]." ".$usuario["apellido"]." </li>";
    }
  echo "</ul>";
}
