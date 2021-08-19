<?php

//connecting to database

$servername= "localhost";   //agar koe specified server use kr rhe hote hai
                            // toh uska password or username atta hai 
                            //ab hum xampp use kr rhe hai issleye password empy hai or 
                            //username=root agr password ki jagah kuh or dalenge toh 
                            //error aajega
$username="root";
$password="";

//Creating a connection
$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection is failed".mysqli_connect_error());   //. It is used to print message and exit from the current php script.
}
else{
    echo "connection is successful";
}


?>