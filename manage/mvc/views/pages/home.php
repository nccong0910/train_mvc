
<table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
	<tr>
		<td>ID</td>
		<td>Thumb</td>
		<td>Title</td>
		<td>Status</td>
		<td>Action</td>
	</tr>
	<?php
	while($row = mysqli_fetch_array($data["list"])){
    	?>
    	<tr>
    		<td><?php echo $row['id']?></td>
    		<td><img src="/public/<?php echo $row['image']; ?>" style="max-width: 100px;"></td>
    		<td><?php echo $row['title']?></td>
    		<td>
    			<?php 
	    		if ($row['status'] == 1) {
	    			echo "Enabled";
	    		}
	    		else{ echo "Disabled";
	    		}
    			?>
    		</td>
    		<td>

    			<a href="./Showpost/show/<?php echo $row['id']; ?>">Show</a>
    			<a href="./Edit/<?php echo $row['id']; ?>">Edit</a>
    			
    			<a onclick="return window.confirm('Delete?');" href="./Delete/<?php echo $row['id']; ?>">Delete</a>
    		</td>
    	</tr>
	<?php } ?>
</table>

<?php

$pages = $data["pages"];
$next = $data["next"];
$prev = $data["prev"];
if($pages !=0) {?>

		<form action="" method="POST">
			<div style= "margin-top: 5px" >
				<label>Page</label>
				<select id = "page_num" name="page_num" style="width: 73px" onchange="location=this.value">
					<option disabled="disabled" selected="selected">--Page--</option>
					<option value = "Home/1">1</option>
					<option value = "Home/5">5</option>
					<option value= "Home/10">10</option>
					<option value = "Home/50">50</option>
					<option value = "Home/0">All</option>
					
				</select>
				<nav aria-label = "Page navigation">
					<ul class = "pagination">
						
							<?php echo "<a href = 'Home/$prev'>";?>
								<span>Previous</span>
							</a>
						
						<?php

							for($i=1 ; $i <= $pages ; $i++){?>
						<a href="Home/<?= $i; ?>"><?= $i ;?></a>
						<?php };?>
						
							<?php echo "<a href = 'Home/$next'>";?>
								<span>Next</span>
							</a>
						
					</ul>
				</nav>
			</div>
		</form>
<?php }

?>
