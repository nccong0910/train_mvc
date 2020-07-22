<?php

class Edit extends Controller{
    public $ProductModel;



    public function __construct()
    {
        $this->ProductModel = $this->model("ProductModel");
    }

    public function Manage(){
        $id = $_GET['id'];

        //print_r($_GET);
        var_dump($id);
        $this->view("master1",[
            "page"=>"edit_post",
            "list"=>$this->model("ProductModel")->showid($id)
        ]);
    }


    public function editpost(){
        $id = $_GET['id'];
        print_r($_GET);
        $xy = $this->model("ProductModel")->getById($id);
        
        if (isset($_POST["update_n"])) {
            $title = $_POST["title_n"];
            $description = $_POST["description_n"];
            if($status == "Enabled"){$status =1;}
            else {$status = 0;}
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $current_time = date("Y/m/d h:i:s", time());
            $image = $_FILES["image_n"]['name'];
            
            if($image != null){
                $path = "public/";
                $tmp_name = $_FILES['image_n']['tmp_name'];

                $image = $_FILES['image_n']['name'];

                move_uploaded_file($tmp_name,$path.$image);
                $this->model("ProductModel")->UpdateImage($image,$current_time,$id);

            }

            $kq2 = $this->ProductModel-> UpdatePost($title, $description, $status, $current_time, $id);

            
        }
        
        $this->view("master1",[
            "page"=>"edit_post",
            "list"=>$this->model("ProductModel")->showid($id),
            "result"=>$kq2
            ]);
    }

}
?>