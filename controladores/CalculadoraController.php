<?php
class CalculadoraController extends ControllerBase
{
	public function inicio() {
		$this->view->show("calculadoraAcidentesInicio.php", "");
	}
}
?>