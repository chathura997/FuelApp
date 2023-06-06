<?php 
//Database Connection
require ('connection.php');
if(isset($_POST['submit']))

{
  	$eid=$_GET['editid'];
	//Getting Post Values
    $regno=$_POST['regno'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $town=$_POST['town'];
    $location=$_POST['location'];
    $petrol=$_POST['petrol'];
    $diesel=$_POST['diesel'];

    //Query for data updation
     $query=mysqli_query($con, "update  user set Petrol='$petrol',Diesel='$diesel'  where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    }

  else

    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Fuel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .container{
        margin-top: 120px;
        width: 40%;
        background-color: #ffff;
        padding-bottom: 20px;
        padding-top: 5px;
        margin-bottom: 30px;
        border-radius: 10px;
        padding-left: 25px;
        padding-right: 25px;
        }

        body{
            
            background-image: url('img/img4.jpg');
            background-repeat: no-repeat;
            background-position:center;
            background-size:100%;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="container justify-content-center">
    <h2 class="text-center mt-3">Update Fuel Station details</h2>
    <p class="text-center mt-3" >Update your info</p>
       
    <form name="form" class="needs-validation" novalidate method="POST">

    <?php
    $eid=$_GET['editid'];
    $ret=mysqli_query($con,"select * from user where ID='$eid'");
    while ($row=mysqli_fetch_array($ret)) {
    ?>
        <div class="input-group mb-4 mt-5">
            <input class="form-control" disabled type="text" name="regno" value="<?php  echo $row['RegistrationNo'];?>"required>
            <div class="invalid-feedback feedback-pos">
            Required filed
          </div>
        </div>
        <div class="form-group mb-4">
            <input class="form-control" disabled type="text" name="name"  value="<?php  echo $row['Name'];?>" required>
            <div class="invalid-feedback feedback-pos">
            Required filed
          </div>
        </div>
        <div class="form-group mb-4">
        <input type="text" class="form-control" disabled name="mobile" required  maxlength="10" pattern="[0-9]{10}" value="<?php  echo $row['Mobile'];?>">

        <div class="invalid-feedback feedback-pos">
            Required filed
        </div>
    </div>
    <div class="form-group mb-4">
        <input class="form-control " type="text" disabled name="towm" required value="<?php  echo $row['Town'];?>">
        <div class="invalid-feedback feedback-pos">
            Required filed
          </div>
    </div>

    <div class="form-group mb-4">
        <input class="form-control " type="text" disabled name="location" required value="<?php  echo $row['Location'];?>">
        <div class="invalid-feedback feedback-pos">
            Required filed
          </div>
    </div>
    
    <div class="form-group mb-4">
        <label>Petrol:</label>
        <select name="petrol" class="form-select" aria-label="Default select example" required value="">
            <option selected value="<?php echo $row['Petrol']?>"><?php echo $row['Petrol']?></option>
            <option  value="YES">YES</option>
            <option  value="NO">NO</option>
        </select>
        <div class="invalid-feedback feedback-pos">
            Required filed
        </div>
    </div>

    <div class="form-group mb-4">
        <label>Diesel:</label>
        <select name="diesel" class="form-select" aria-label="Default select example" required value="">
            <option selected value="<?php echo $row['Diesel']?>"><?php echo $row['Diesel']?></option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
        <div class="invalid-feedback feedback-pos">
            Required filed
        </div>
    <?php 
    }?>

    <div class="form-group mt-4">
    <button type="submit" class="btn btn-primary" name="submit">Update</button> 
    </div>
    </form>
    </div>

    <script>  
                var forms = document.querySelectorAll('.needs-validation');
                        
                Array.prototype.slice.call( forms ).forEach( function( form )
                
                    {
                        form.addEventListener( 'submit', function ( event )
                        {
                             if ( !form.checkValidity( ))
                            {
                             event.preventDefault( )
                             event.stopPropagation( );
                            
                                    
                            }
                            form.classList.add( 'was-validated' );
                        }, false );
                    } );
        </script>



</body>
</html>