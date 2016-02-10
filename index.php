<?php
session_start();
include_once 'libs/FrontController.php';

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
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<h2>Pagina de prueba</h2>
		
		<div class="panel-group" id="accordion">
  			<div class="panel panel-default">
    			<div class="panel-heading">
    				<h4 class="panel-title">
        				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        					Seccion 1: Indemnizaciones por causa de muerte</a>
      				</h4>
    			</div>
    		<div id="collapse1" class="panel-collapse collapse in">
      			<div class="panel-body">Esto es una prueba para el menu colapsible de muerte.</div>
    			</div>
  			</div>
  		<div class="panel panel-default">
    		<div class="panel-heading">
      			<h4 class="panel-title">
       				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        				Seccion 2: Indemnizaciones por secuelas</a>
      			</h4>
    		</div>
    		<div id="collapse2" class="panel-collapse collapse">
      			<div class="panel-body">Esto es una prueba para el menu colapsible de secuelas.</div>
    			</div>
  			</div>
  			<div class="panel panel-default">
    			<div class="panel-heading">
      				<h4 class="panel-title">
        				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        				Seccion 3: Indemnizaciones por lesiones temporales.</a>
      				</h4>
    			</div>
    			<div id="collapse3" class="panel-collapse collapse">
      				<div class="panel-body">Esto es una prueba para el menu colapsible de lesiones temporales.</div>
   				</div>
  			</div>
		</div>
	</body>
</html>