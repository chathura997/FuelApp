<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Fuel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title select {
    border-color: #ddd;
    border-width: 0 0 1px 0;
    padding: 3px 10px 3px 5px;
    margin: 0 5px;
}
.table-title .show-entries {
    margin-top: 7px;
}

td{
    text-align: center;
}

</style>

</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>Fuel Station Details</b></h2>
                    </div>
                     
                </div>
            </div>
    
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
            <tbody>
               <?php
               $vid=$_GET['viewid'];
               $ret=mysqli_query($con,"select * from user where ID =$vid");
               $cnt=1;
               while ($row=mysqli_fetch_array($ret)) {
                
               ?>
                <tr>
                   <th>Owner Name</th>
                   <td><?php  echo $row['Name'];?></td>
                </tr>
                <tr>
                    <th>RegistrationNo</th>
                    <td><?php  echo $row['RegistrationNo'];?></td>
                </tr>
                <tr>
                   <th>Mobile</th>
                   <td><?php  echo $row['Mobile'];?></td>   
                </tr>
                <tr>
                    <th>Town</th>
                    <td><?php  echo $row['Town'];?></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><?php  echo $row['Location'];?></td>
                </tr>
                <tr>
                   <th>Last Upate</th>
                   <td><?php  echo $row['Lastupdate'];?></td>
                </tr>
                <tr>
                    <th>Petrol</th>
                    <td><?php  echo $row['Petrol'];?></td>     
                </tr>
                <tr>
                    <th>Diesel</th>
                    <td><?php  echo $row['Diesel'];?></td>
                </tr>
               <?php 
               $cnt=$cnt+1;
               }?>
                                
            </tbody>
        </table>
</body>
</html>