<?php
class Shares extends Base_controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}
}