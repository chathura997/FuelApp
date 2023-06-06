<?php
//database conection  file
include('connection.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from user where ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'index.php'</script>";     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Fuel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
        background-image: url('img/img3.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
        
    }
    .container-xl{
        background-color: #666;
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
        font-size: 22px;
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
    
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
    table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 18px;
    }    
    
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    .border{
        border-color: #ffff;
        border-radius: 10px;
       }
       .text{
            font-size: 30px;
            font-weight: bold;
       }
      
       a:hover{
        font-weight: bold;
        
       }
       .nav-item{
        padding-right: 15px;
       }
       img{
        width: 50px;
        height: 50px;;
       }
       .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
        height: auto;
       }
</style>
</head>
<body>
<?php require "navigation.php"?>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>Filling Station Management</b></h2>
                    </div>
                       <div class="col-sm-7" align="right">
                        <a href="insert.php" class="btn btn-secondary"><i class="fa-solid fa-circle-plus fa-xl"></i><span> Add New Filling Station</span></a>
                                        
                    </div>
                </div>
            </div>

<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>RegistrationNo</th>
                        <th>Name</th> 
                        <th>Mobile</th> 
                        <th>Town</th>                     
                        <th>Location</th>
                        <th>Petrol</th>
                        <th>Diesel</th>
                        <th>Last Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
    <tbody>
    <?php
    $ret=mysqli_query($con,"select * from user");
    $cnt=1;
    $row=mysqli_num_rows($ret);
    if($row>0){
    while ($row=mysqli_fetch_array($ret)) {
 
?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['RegistrationNo'];?></td>
                        <td><?php echo $row['Name'];?></td>                      
                        <td><?php echo $row['Mobile'];?></td>
                        <td><?php echo $row['Town'];?></td>
                        <td><?php echo $row['Location'];?></td>
                        <td><?php echo $row['Petrol']?></td>
                        <td><?php echo $row['Diesel']?></td>
                        <td> <?php echo $row['Lastupdate'];?></td>
<td>
    <a href="read.php?viewid=<?php echo htmlentities ($row['ID']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
    <a href="edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>                      
    <a href="details.php?delid=<?php echo ($row['ID']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
</td>
</tr>

<?php 
$cnt=$cnt+1;
} } else {
?>

<tr>
<th style="text-align:center; color:red;" colspan="10">No Record Found</th>
</tr>
<?php } ?>                 
              
    </tbody>
</table>
</div>
</div>
</div>


</body>
</html>