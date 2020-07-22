<?php

/**
 * 
 */
class Newpost extends Controller
{
	
    public $ProductModel;

	public function __construct()
	{
        $this->ProductModel = $this->model("ProductModel");
   	}



    public function Manage(){
    	$this->view("master1",[
    		"page"=>"newpost"
    		]);
    }

	public function addpost(){
    //get data input
        if (isset($_POST["submit_n"])) {
            
            $title = $_POST["title_n"];
            $description = $_POST["description_n"];
            $image = $_FILES["image_n"]['name'];
            
            if($image != null){
                $path = "public/";
                $tmp_name = $_FILES['image_n']['tmp_name'];
                $image = $_FILES['image_n']['name'];

                move_uploaded_file($tmp_name,$path.$image);
            }
            //echo $title;
            //insert database
            
            $kq = $this->ProductModel-> InsertNewPost($title, $description, $image);

            $this->view("master1",[
                "page"=>"newpost",
                "result"=>$kq
            ]);
        }
    }

}

?>
