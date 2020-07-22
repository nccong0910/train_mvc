<h2>New post</h2>
<form action="Newpost/addpost" method="post" enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			

			<tr>
				<td>Title</td>
				<td><input type="text" name="title_n" value="<?php echo $row['title']; ?>"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description_n" value="<?php echo $row['description']; ?>"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image_n" ></td>
				<td><img src="public/<?php echo $row['image']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit_n" value="Add" ></td>
			</tr>
		</table>
</form>
<?php if(isset($data["result"])){ ?>
	<h3>
	<?php
	if ($data["result"] == "true") {
		echo "Success";
	}
	else{
		echo "Fail";
	}
	?>
	</h3>
<?php } ?>
