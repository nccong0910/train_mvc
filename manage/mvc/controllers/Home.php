<?php
class Home extends Controller{

    public $ProductModel;


    public function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }

    public function Manage(){
        
        $limit = !empty($_GET['per_page']) ? $_GET['per_page']:5;
        $page = !empty($_GET['page']) ? $_GET['page']:1;
        $prev = $page-1;
        $next = $page+1;
        $start = ($page-1)*$limit;

        $count = $this->model("ProductModel")->getProduct();
        $count = $count->num_rows;
        $pages = ceil($count/$limit);

        $this->view("master1",[
            "page"=>"home",
            "list"=>$this->model("ProductModel")->limitList($start, $limit),
            "pages"=>$pages,
            "prev"=>$prev,
            "next"=>$next,
        ]);
    }
}
?>