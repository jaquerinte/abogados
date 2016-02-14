<?php 
class IndexController extends ControllerBase
{
	public function login() {
		
		if(isset($_REQUEST['usuario'])) {
			$_SESSION['user_name'] = $_REQUEST['usuario'];
			$_SESSION['logged'] = true;
		}
		$this->view->show("inicio.php", "");
	}
	
	public function inicio() {
		$this->view->show("inicio.php", "");
	}
}
?>