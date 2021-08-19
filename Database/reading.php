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
    $sql = "SELECT * FROM students";
    $result=mysqli_query($conn,$sql);

    $num=mysqli_num_rows($result); //no of rows
    echo $num;

    echo "<br><br><br><br>";

                 //  $row=mysqli_fetch_assoc($result);  record one by one fetch krke deta hai

    //fetchimg only single record=

    echo "<br><br><br><br>";
    
    $row=mysqli_fetch_assoc($result);
        echo $row['roll_no'] . $row['name'] . $row['marks'].$row['age'];
        echo "<br>";
        
    $row=mysqli_fetch_assoc($result);
    echo $row['roll_no'] . $row['name'] . $row['marks'].$row['age'];
    echo "<br>";
    
    $row=mysqli_fetch_assoc($result);
        echo $row['roll_no'] . $row['name'] . $row['marks'].$row['age'];
        echo "<br>";
        
    $row=mysqli_fetch_assoc($result);
    echo $row['roll_no'] . $row['name'] . $row['marks'].$row['age'];
    echo "<br>";
    

}


?>