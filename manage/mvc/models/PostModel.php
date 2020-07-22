<?php
/**
 * 
 */
class PostModel extends DB{
	
	public function InsertNewPost($title, $description, $image){

		$qr = "INSERT into product(id,title,description,image,status,create_at,update_at) values(null,'$title','$description','$image',1,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP())";

		if(mysqli_query($this->con, $qr)){
			$result = true;
		}
		return json_encode($result);
	}
	
}
?>