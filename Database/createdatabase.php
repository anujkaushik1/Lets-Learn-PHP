<?php

//connecting to database

$servername= "localhost";  
$username="root";
$password="";

//creating a connection
$conn = mysqli_connect($servername,$username,$password);

//creating database
$sql= "CREATE DATABASE Anujphpdatabase";

mysqli_query($conn,$sql);

if(!$conn){
    die("connection is failed".mysqli_connect_error());  
}
else{
    echo "connection is successful";
}


?>