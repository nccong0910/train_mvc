<?php

class Delete extends Controller{

	public $ProductModel;

	public function __construct(){

		$this->ProductModel = $this->model("ProductModel");
	}

    public function Manage(){
        $id = $_GET['id'];
        $this->model("ProductModel")->deleteById($id);
		header('location:/');

    }
}
?>