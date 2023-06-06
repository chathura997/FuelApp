<?php 
//Databse Connection file
include('connection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $regno=$_POST['regno'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $town=$_POST['town'];
    $location=$_POST['location'];
    $petrol=$_POST['petrol'];
    $diesel=$_POST['diesel'];

   
    // Query for data insertion
     $query=mysqli_query($con, "insert into user(RegistrationNo,Name,Mobile,Town,Location,Petrol,Diesel) value('$regno','$name', '$mobile','$town', '$location','$petrol','$diesel')");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Search Fuel</title>

    <style>  
        body{
            background-image: url("img/img6.jpg");
            background-attachment: fixed;
            background-position: center;
            background-size: 100%;
        }
    
       .container{
        margin-top: 120px;
        width: 40%;
        background-color: #ffff;
        padding-bottom: 50px;
        padding-top: 5px;
        padding-left: 35px;
        padding-right: 35px;
        border-radius: 15px;
        margin-bottom: 80px;
        margin-top: 30px;
       }
    
       a:hover{
        font-weight: bold;
        
       }
       .nav-item{
        padding-right: 15px;
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
       img{
        width: 50px;
        height: 50px;;
       }
    </style>

</head>
<body>
<?php include 'navigation.php' ?>
    <div class="container justify-content-center">
        <h2 class="text-center mt-3"><b>Fuel Management System</b></h2>
        <h6  class="text-center mt-3">Register your Filling station here</h6>
        <form name="form" class="needs-validation" novalidate method="POST">
            <div class="input-group mb-4 mt-5">
                <input class="form-control" type="text" name="regno" placeholder="Registration number" required>
                <div class="invalid-feedback ">
                Please fill out this field.
            </div>
            </div>
            <div class="form-group mb-4">
                <input class="form-control"  type="text" id="namevalidation" name="name" placeholder="Owner Name" pattern="[A-Z]{30}[a-z]{30}[.- ]{10}"required>
                <div class="invalid-feedback" id="name">    
            </div>
            </div>
            <div class="form-group mb-4">
            <input type="tel"  class="form-control" name="mobile" id="mobile" placeholder="Mobile No" maxlength="10" pattern="[0-9]{10}" required>
            <div class="invalid-feedback" id="mob"></div>
        </div>

        <div class="form-group mb-4">
            <input class="form-control " type="text" name="town" placeholder="Town" required>
            <div class="invalid-feedback">
            Please fill out this field.</div>
        </div>

        <div class="form-group mb-4">
            <input class="form-control " type="text" name="location" placeholder="Location (ex:Near Fly over)" required>
            <div class="invalid-feedback">
            Please fill out this field.</div>
        </div>

        <div class="form-group mb-4">
            <label>Petrol:</label>
            <select name="petrol" class="form-select" aria-label="Default select example" required>
                <option selected disabled value="">Status</option>
                <option value="YES">Yes</option>
                <option value="NO">NO</option>
            </select>
            <div class="invalid-feedback">
            Please Select One Option.
        </div>
        </div>

        <div class="form-group mb-4">
            <label>Diesel:</label>
            <select  name="diesel" class="form-select" aria-label="Default select example" required>
                <option selected disabled value="">Status</option>
                <option value="YES">Yes</option>
                <option value="NO">NO</option>
            </select>
            <div class="invalid-feedback">
            Please Select One Option.
            </div>
        </div>
            <button class="btn btn-primary" type="submit" value="submit" name="submit">Register</button>
            <br><br>
        </form>
        <div class="text-center"><b>View Already Inserted Data!!</b>  <a href="details.php">View</a></div>
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
                             document.getElementById("mob").innerHTML=mobile.validationMessage;
                             document.getElementById("name").innerHTML=namevalidation.validationMessage;
                             
                            
                                    
                            }
                            form.classList.add( 'was-validated' );
                        }, false );
                    } );
        </script>

</body>
</html>