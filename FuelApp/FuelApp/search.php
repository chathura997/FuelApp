<?php
    require 'connection.php';
    if(ISSET($_POST['search'])){
?>

<div class="container">
    <table class="table table-striped">
        <thead class="alert-info">
            <tr>
                <th>Owner Name</th>
                <th>Town</th>
                <th>Location</th>
                <th>Petrol</th>
                <th>Diesel</th>
                <th>Mobile No</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $keyword = $_POST['keyword'];
                $query = mysqli_query($con, "SELECT * FROM `user` WHERE `Town` LIKE '$keyword%'") or die(mysqli_error($con));
                $count = mysqli_num_rows($query);
                if($count > 0){
                    while($fetch = mysqli_fetch_array($query)){
            ?>
                    <tr>
                        <td><?php echo $fetch['Name']?></td>
                        <td><?php echo $fetch['Town']?></td>
                        <td><?php echo $fetch['Location']?></td>
                        <td><?php echo $fetch['Petrol']?></td>
                        <td><?php echo $fetch['Diesel']?></td>
                        <td><?php echo $fetch['Mobile'] ?></td>
                    </tr>
            <?php
                    }
                }else{
                    echo "<tr><td colspan='6' class='text-danger'><center>No result found!</center></td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<?php        
    }
?>
    