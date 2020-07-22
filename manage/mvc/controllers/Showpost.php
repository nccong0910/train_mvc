<?php

/**
 * 
 */
class Showpost extends Controller
{
	
    public $ProductModel;
    public $PostModel;

	public function __construct()
	{
        $this->ProductModel = $this->model("ProductModel");
        $this->PostModel = $this->model("PostModel");
   	}



    public function Manage(){
    	$this->view("master1",[
    		"page"=>"show_post"
    		]);
    }

	public function show(){
        $id = $_GET['id'];
        print_r($_GET);
        //echo $id;
        $xx = $this->model("ProductModel");
        //var_dump($id);
        //$r = $this->ProductModel->showid($id);

        $this->view("master1",[
            "page"=>"show_post",
            "list"=>$xx->showid($id)
        ]);
    }



}


?>