<?php 
class IndexController extends ControllerBase
{
	public function login() {
		
		if(isset($_REQUEST['usuario'])) {
			$_SESSION['user_name'] = $_REQUEST['usuario'];
		}
		$this->view->show("inicio.php", "");
	}
}
?>