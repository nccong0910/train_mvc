
    <form action="show" method="post"  enctype="multipart/form-data">
        <table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
            <?php $row = mysqli_fetch_array($data["list"]);?>
            <h4><?php echo $row['title']; ?></h4>
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['title']; ?> </td>
                    <td><?php echo $row['description']; ?> </td>
                    <td><img src="/public/<?php echo $row['image']; ?>" style="max-width: 100px;"></td>
                    <td>
                        <?php 
                        if ($row['status'] == 1) {
                            echo "Enabled";
                        }
                        else{ echo "Disabled";
                        }
                        ?>
                    </td>
                    <td><?php echo $row['create_at']; ?></td>
                    <td><?php echo $row['update_at']; ?></td>
                </tr>
        </table>
    </form>
