<?php

include_once("db.php");
include_once("usuario.php");

class dbMySQL extends db
{
    private $conn;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=furusato;charset=utf8mb4;port=3306';
        $user = "root";
        $pass = "root";

        try {
            $this->conn = new PDO($dsn, $user, $pass);
        } catch (Exception $e) {
            echo "La conexion a la base de datos falló: ".$e->getMessage();
        }
    }

    public function guardarUsuario(Usuario $usuario)
    {

        $sql = "INSERT INTO furusato.usuario VALUES (default,:nombre,:apellido,:telefono,:celular,:direccion,:barrio,:email,:password)";
        $query = $this->conn->prepare($sql);
        $query->bindValue(":nombre", $usuario->getNombre());
        $query->bindValue(":apellido", $usuario->getApellido());
        $query->bindValue(":telefono", $usuario->getTelefono());
        $query->bindValue(":celular", $usuario->getCelular());
        $query->bindValue(":direccion", $usuario->getdireccion());
        $query->bindValue(":barrio", $usuario->getBarrio());
        $query->bindValue(":email", $usuario->getEmail());
        $query->bindValue(":password", $usuario->getPassword());
        $query->execute();

        $usuario->setIdUsuario($this->conn->lastInsertId());

        return $usuario;
    }

    public function traerTodos()
    {
        $sql = "SELECT * FROM furusato.usuario";

        $query = $this->conn->prepare($sql);

        $query->execute();

        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
        $arrayFinal = [];
        foreach ($resultados as $usuario) {
            $arrayFinal[] = new Usuario($usuario["nombre"], $usuario["apellido"], $usuario["telefono"], $usuario["celular"], $usuario["direccion"], $usuario["barrio"], $usuario["email"], $usuario["password"], $usuario["idusuario"]);
        }

        return $arrayFinal;
    }

    public function traerPorEmail($email)
    {
        $sql = "SELECT * FROM furusato.usuario WHERE email = :email";
        $query = $this->conn->prepare($sql);
        $query->bindValue(":email", $email);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $usuario = new Usuario($result["nombre"], $result["apellido"], $result["telefono"], $result["celular"], $result["direccion"], $result["barrio"], $result["email"], $result["password"], $result["idusuario"]);

            return $usuario;
        } else {
            return null;
        }
    }

    public function crearTablaUsuario()
    {

        //CREATE DATABASE IF NOT EXISTS `furusato` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
        $sql = "CREATE TABLE furusato.usuario ( idusuario BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,  nombre VARCHAR(100) NOT NULL, apellido VARCHAR(100), telefono VARCHAR(30), celular VARCHAR(30), direccion VARCHAR(100), barrio VARCHAR(100), email VARCHAR(100), password VARCHAR(100), PRIMARY KEY (idusuario) ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;";
        $this->conn->exec($sql);
    }
}
