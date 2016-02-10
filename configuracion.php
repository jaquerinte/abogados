<?php
include 'libs/Config.php';
include 'libs/ControllerBase.php';
include 'libs/View.php';
include 'libs/ModelBase.php';
include 'libs/SPDO.php';


$config = Config::singleton();

$config->set('controllersFolder', 'controladores/');
$config->set('modelsFolder', 'modelos/');
$config->set('viewsFolder', 'vistas/');

$config->set('lib', 'libs/');
$config->set('css', 'css/');

$config->set('dbhost', 'localhost');
$config->set('dbname', 'gestor');
$config->set('dbuser', 'system_gestor');
$config->set('dbpass', '558987');

?>