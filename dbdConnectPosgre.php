<?php
//poner el usuario y la contraseña correctos
$servidor = "localhost"; 
$usuario = "root";
$password = "";
$database ="abogados";

 $enlace = pg_pconnect("host=$servidor dbname=$abogados  user=$usuario password=$password ");

 if (!($enlace)) {
 	echo "Error conectando a la base de datos.";
 	exit();
 }

?>