<?php
//connecting to database

$servername= "localhost";  
$username="root";
$password="";
$database = "anujphpdatabase"; //database sepicfy krna hoga agr insert kr rhe h
                            //ye Database already created hai issleye
                            //craete database vegrh nai likh rhe

//creating a connection
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo "nope";
}
else{
   echo "connection is successful";
}
?>