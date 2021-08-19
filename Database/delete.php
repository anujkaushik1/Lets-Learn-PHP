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
    echo "nope";
}
else{
    $sql= "DELETE FROM students WHERE name='kamal'";

    $result= mysqli_query($conn,$sql);

    if($result!=null){
        echo "data is deleted";
    }
    else{
        echo "some problem";
    }
}

?>