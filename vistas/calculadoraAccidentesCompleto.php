<?php
?>

<div>
	<form action="">
		<div class="panel-group" id="accordion">
  			<div class="panel panel-default">
    			<div class="panel-heading">
    				<h4 class="panel-title">
       					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
     						Seccion 1: Indemnizaciones por causa de muerte</a>
    				</h4>
    			</div>
    			<div id="collapse1" class="panel-collapse collapse">
     				<div class="panel-body"><?php include 'vistas/submenuMuerte.php'; ?></div>
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
     				<div class="panel-body"><?php include 'vistas/submenuSecuelas.php'; ?></div>
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
     				<div class="panel-body">AQUI VA OTRA SECCION</div>
   				</div>
  			</div>
		</div>
	</form>
</div>