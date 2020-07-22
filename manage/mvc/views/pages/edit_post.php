<h2>Edit post</h2>
            <?php $row = mysqli_fetch_array($data["list"]);?>
            <?php $row['title']; ?>
<form action="editpost/<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
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
				<td><img src="/public/<?php echo $row['image']; ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><select id = "status" class = "status" name = "status">
					<option value="Enabled">Enabled</option>
					<option value="Disabled">Disabled</option>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update_n" value="Update" ></td>
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