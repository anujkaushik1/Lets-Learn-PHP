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

    $sql= "SELECT * FROM students WHERE marks= 100 ";   //anuj jabh database ke andr ki cheez likh rhe ho jo already stored hai toh '' yeh naia ayega
    $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result); //no of rows
    echo $num;

        $row=mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>";
        $row=mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>";
        $row=mysqli_fetch_assoc($result);   //iska answer null ayega because db mei bs 2 values ke marks 100 hai
        echo var_dump($row);
        echo "<br>";

}

?>
