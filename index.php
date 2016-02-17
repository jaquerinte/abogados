<?php
session_start();
include_once 'libs/FrontController.php';

$_SESSION['logged'] = false;

if(isset($_REQUEST['accion'])){
	$pag = $_REQUEST['accion'];
}else{
	$pag ='home';
}
//Esta función activará el almacenamiento en búfer de salida. Mientras dicho almacenamiento esté activo, no se enviará ninguna salida
//desde el script (aparte de cabeceras), en su lugar la salida se almacenará en un búfer interno.
ob_start();//solucina los problemas que aparecen Warning: Cannot modify header information - headers already sent by
?>

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="vistas/css/style.css" type="text/css" media="all">  
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	
	<body>
	<?php 
		include 'vistas/estructura/header.php';
		
		//array que contiene todas las acciones posibles, se utiliza en el FrontController para que invoque el metodo oportuno
		$acciones = array( "login", "test", "inicio", "completo"
		);
		echo "<div id='center'>";
		if($pag == "home") {	
			include 'vistas/estructura/body.php';
			
		} elseif(in_array($pag, $acciones)) {
			
			FrontController::main();
			
		} else {
			echo"<div id='centro'>";  // Centro
			echo "<span id='mensaje'><center><strong>404 - Pagina no encontrada.<strong></span>";
			echo"</div>"; // Fin Centro
		}
		echo "</div>";
		
		include 'vistas/estructura/foot.php'; //Pone el fin al html
	?>