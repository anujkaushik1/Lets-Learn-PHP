<?php

//Connecting to database

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
    $sql = "UPDATE students SET marks=50 WHERE marks=100  ";  //set mtlb ye value set krdega
    $result=mysqli_query($conn,$sql);

    if($result!=null){
        echo "data is updated";
    }
    else{
        echo "some probelm";
    }
}

?>