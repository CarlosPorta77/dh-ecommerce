<?php
  require_once("funciones.php");

echo "<h1> Mantenimiento </h1>";
echo "<p>";
echo " Utilizaremos el usuario root con password root en localhost";
echo "<br>";
echo " La base de datos furusato debe estar creada. Si no lo esta ejecute el siguiente comando SQL en su servidor mySql";
echo "<br>";
echo " CREATE DATABASE IF NOT EXISTS furusato DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
echo "<br>";
echo "</p>";
echo "<br>";


echo "<h2> Creando la Tabla Usuario  </h2>";
echo "Tabla creada";
crearTablaUsuario();
echo "<br>";
echo "<h2> Migrando usuarios de Json a MySQL  </h2>";
migrarJsonaMysql();
echo "<br>";
echo "Trabajo completado";

  ?>
