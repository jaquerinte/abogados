<?php


?>

</head>
<body>
</head>
<body>

	<div id="superior">
		<!-- cabecera  -->
	</div>
	<div id="contenedor">
		<!-- contenedor para posicionar todo lo ubicado en el cuerpo -->

		<div id="logo">
			<div id="logotipo"></div>
			<div class="titulo">
				<span><b>Calculadora de accidentes</b></span>
			</div>
		</div>

		<div id="cabecera">


			<div id="menuheader">

			<?php
				if(isset($_SESSION['logged'])) {
			?>
				<ul id="nav">
					<li class="nivel1"><a href='index.php?accion=inicio' class="nivel1"><span>Inicio</span></a></li>
					<li class="nivel1"><a href='' class="nivel1"><span><?php echo $_SESSION['user_name']?></span></a></li>
					<li class="nivel1"><a href='index.php?controlador=Calculadora&accion=inicio' class="nivel1"><span>Calculadora de Accidentes</span></a></li>
					<li class="nivel1"><a href='' class="nivel1"><span>Consulta de valores</span></a></li>
					<!--  <li class="nivel1"><a href='index.php?accion=home' class="nivel1"><span>Inicio</span></a></li> -->

						<!-- comprobar con el php si esta registrado -->
			<?php
				}
			/*
		     if(!isset($_SESSION['valid_user']) ){  ?>
		     
					
					<li class="nivel1"><a href="index.php?accion=formul" class="nivel1"><span>Login </span></a></li>
                     
                 <?php } ?>     
					
						<?php
		     if(isset($_SESSION['valid_user']) ){  ?>
		     
		     		<li class="nivel1"><a href="index.php?accion=panelUsuario" class="nivel1"><span> <?php echo"".$_SESSION['valid_user']." " ?> </span></a></li>
					
					
					<li class="nivel1"><a href="index.php?controlador=Vehiculos&accion=altaVehiculo" class="nivel1"><span>Nuevo
								vehiculo</span></a></li>
                     
                
					
					
					
					<li class="nivel1"><a href="index.php?controlador=Vehiculos&accion=reparacionVehiculo" class="nivel1"><span>Reparaciones</span></a></li>
					
					<li class="nivel1"><a href="index.php?controlador=Vehiculos&accion=ventaVehiculo" class="nivel1"><span>Venta
								vehiculo</span></a> </li>
					
					
			  <?php } ?> 
			  
			   <?php 
			  if(isset($_SESSION['valid_user'])) { //&& $_SESSION['tipo']=='2'?>
			   <li class="nivel1"><a href="index.php?controlador=Vehiculos&accion=listadoVehiculos" class="nivel1"><span>Listado Vehiculos</span></a> </li>
			   <li class="nivel1"><a href="index.php?controlador=Vehiculos&accion=listadoReparacionesPendientes" class="nivel1"><span>Reparaciones pendientes</span></a> </li>
			  
			  <?php }*/?>
			  </ul>
			  </div>
			</div>
			</div>