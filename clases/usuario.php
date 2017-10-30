<?php

class Usuario
{
    private $idUsuario;

    private $nombre;

    private $apellido;

    private $telefono;

    private $celular;

    private $direccion;

    private $barrio;

    private $email;

    private $password;

    public function __construct(
        $nombre,
        $apellido,
        $telefono,
        $celular,
        $direccion,
        $barrio,
        $email,
        $password,
        $idUsuario = null
    ) {
        if ($idUsuario == null) {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $this->password = $password;
        }

        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->celular = $celular;
        $this->direccion = $direccion;
        $this->barrio = $barrio;
        $this->email = $email;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function getdireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getBarrio()
    {
        return $this->barrio;
    }

    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function guardarFoto()
    {
        $archivo = $_FILES["foto-perfil"]["tmp_name"];

        $nombreDeLaFoto = $_FILES["foto-perfil"]["name"];
        $extension = pathinfo($nombreDeLaFoto, PATHINFO_EXTENSION);

        $nombre = dirname(__FILE__)."/../img/".$this->email.".$extension";
        move_uploaded_file($archivo, $nombre);
    }
}
