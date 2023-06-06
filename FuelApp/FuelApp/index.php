<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Fuel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <style>
        .container{
        margin-top: 120px;
        width: 60%;
        background-color: #ffff;
        padding-bottom: 20px;
        padding-top: 5px;
        padding-left: 35px;
        padding-right: 35px;
        border-radius: 15px;
        margin-bottom: 50px;
        height: 200px;
       }
      
       form{
        padding-top: 50px;
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
    <?php require_once "navigation.php"?>
        <div class="container">
    
            <form method="POST" action="">
                <div class="form-inline">
                    <input type="text" class="form-control" name="keyword" placeholder="Search Town" required/><br>
                    <button class="btn btn-success text-center" name="search">Search</button>
                </div>
            </form>
        </div>
        
          
        <?php include 'search.php'?> <br><br><br>

        <?php include 'footer.php'?>

       <
</body>
</html>