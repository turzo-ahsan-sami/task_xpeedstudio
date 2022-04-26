<?php

class Buyers extends Controller{
	protected function Index(){
		$viewmodel = new BuyerModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: ' . ROOT_PATH . 'buyers');
		} else {
			$viewmodel = new BuyerModel();
			$this->returnView($viewmodel->add(), true);
		}
	}

	protected function edit(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: ' . ROOT_PATH . 'buyers');
		} else {
			$viewmodel = new BuyerModel();
			$this->returnView($viewmodel->edit(), true);
		}
	}

	protected function delete(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: ' . ROOT_PATH . 'buyers');
		} else {
			$viewmodel = new BuyerModel();
			$this->returnView($viewmodel->delete(), true);
		}
	}
}

?>