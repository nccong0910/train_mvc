<?php
class ProductModel extends DB{


    public function getProduct(){
        $sql = "SELECT * FROM product";
        return mysqli_query($this->con, $sql);
    }

    public function limitList($start, $limit){
        $sql = "SELECT * FROM product LIMIT $start,$limit";
        return mysqli_query($this->con, $sql);
    }

    public function showid($id){
        $sql = "SELECT * from product where id = '$id' ";
        return mysqli_query($this->con,$sql);
        //return mysqli_fetch_array($this->con,$result);
    }
    public function getById($id){
        $sql = "SELECT * FROM product WHERE id = $id";
        return mysqli_fetch_array($this->con,$sql);
    }

    public function UpdatePost($title, $description, $status, $update_at, $id){

    
        
        $sql = "UPDATE product set title = '$title', description = '$description',status = '$status' ,update_at = '$update_at' where id = '$id' ";

        if(mysqli_query($this->con, $sql)){
            $result = true;
        }
        return json_encode($result);
    }

    public function UpdateImage($image,$update_at,$id){
        $sql = "UPDATE product set image = '$image', update_at = '$update_at' where id = '$id' ";
        return mysqli_query($this->con, $sql);

    }
    
    public function deleteById($id){
        $sql = "DELETE FROM product WHERE id = '$id'";
        return mysqli_query($this->con, $sql);
    }

}
?>
