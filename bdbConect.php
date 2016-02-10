<?php
//conexion al servidor de bases de datos

$servidor = "localhost";
$usuario = "root";
$password = "";
$enlace = mysql_connect($servidor,$usuario,$password)or die("No se pudo conectar: " . mysql_error());


if (!($enlace)) {
     echo "Error conectando a la base de datos.";
     exit();
   }
 //  else echo "Conexi&oacute;n realizada.<br>";

   // Seleccion de bases de datos
   if (!mysql_select_db("gestor",$enlace)) {
      echo "Error seleccionando la base de datos.";
      exit();
    } 
  //  else echo "Base de datos seleccionada.<br>";
?>