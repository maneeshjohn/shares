<?php
class Home extends Base_controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
}