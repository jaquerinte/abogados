<?php
class CalculadoraController extends ControllerBase
{
	public function inicio() {
		$this->view->show("calculadoraAcidentesInicio.php");
	}
	
	public function completo() {
		$this->view->show("calculadoraAccidentesCompleto.php");
	}
}
?>