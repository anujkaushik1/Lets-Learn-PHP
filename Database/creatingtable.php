<?php

//connecting to database

$servername= "localhost";  
$username="root";
$password="";
$database = "anujphpdatabase"; //database sepicfy krna hoga agr insert kr rhe h
                            //ye Database already created hai issleye
                            //craete database vegrh nai likh rhe

//Creating a connection
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("connection is failed".mysqli_connect_error());  
}
else{
    echo "connection is successful";
}

//creating table

$sql = "CREATE TABLE students1(
                                roll_no INT(10) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
                                name VARCHAR(30) NOT NULL,
                                marks INT(10) NOT NULL,
                                age INT(10) NOT NULL )";
$result=mysqli_query($conn,$sql);

//check if table is craeted or not

if($result){
    echo "table is created";
}
else{
    echo " table was not created". mysqli_error($conn);
}



?>