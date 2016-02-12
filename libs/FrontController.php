<?php
class FrontController{
	
	static function main(){
		//inclusion de las librerias necesarias:
		
		require 'configuracion.php'; //archivos con configuraciones
		
		//Con el objetivo de no repetir nombre de clases, nuestros controladores
		//terminaran todos en Controller. Por ej, la clase controladora Items, sera ItemsController
		
		//Formamos el nombre del Controlador o en su defecto, tomamos que es el IndexController
		if(! empty($_REQUEST['controlador'])){
			$controllerName = $_REQUEST['controlador'] . 'Controller';
		
		}else{
			$controllerName = "IndexController";
		}
		//Lo mismo sucede con las acciones, si no hay accion, tomamos index como accion
		if(! empty($_REQUEST['accion']))
			$actionName = $_REQUEST['accion'];
		else
			$actionName = "index";
		 
		
		$controllerPath = $config->get('controllersFolder') . $controllerName . '.php';
		 
		
		
		//Incluimos el fichero que contiene nuestra clase controladora solicitada
		if(is_file($controllerPath))
			require $controllerPath;
		else
			die('El controlador no existe - 404 not found');
		
		//Si no existe la clase que buscamos y su accion, tiramos un error 404
		if (is_callable(array($controllerName, $actionName)) == false)
		{
			trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
			return false;
		}
		//Si todo esta bien, creamos una instancia del controlador y llamamos a la accion
		$controller = new $controllerName();
		$controller->$actionName();
	}
}
		
		
		


?>