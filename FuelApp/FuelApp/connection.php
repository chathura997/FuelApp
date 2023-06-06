<?php
$host="localhost";
$userName="root";
$password="";
$db="webfinal";

$con= mysqli_connect($host,$userName,$password,$db);

if(mysqli_connect_error()){
    die("Connection Unsuccessfull".mysqli_connect_error());
}

?>