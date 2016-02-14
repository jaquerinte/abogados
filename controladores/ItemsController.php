<?php
class ItemsController extends ControllerBase
{
	public function test() {
		$this->view->show("test.php", "");
	}
}
?>