<?php

//connecting to database

$servername= "localhost";  
$username="root";
$password="";
$database = "anujphpdatabase"; 
//creating a connection
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("connection is failed".mysqli_connect_error());  
}
else{
    echo "connection is successful";
}

//creating table
$sql =\"INSERT INTO students (roll_no, name, marks,age)
                              VALUES (1,'anuj',100,20)";    //jabh string values daal rhe hai toh '' ye use krna hoga
$result=mysqli_query($conn,$sql);

//check if table is craeted or not

if($result){
    echo "data is inserted";
}
else{
    echo " data is not created". mysqli_error($conn);
}



?>

<?php


function inserting($id,$username,$password){

    global $conn;
    $obj = new databaseoperations();
    $obj->connection();

    

    $sql ="INSERT INTO users (id, username, password)
                          VALUES ('$id','$username','$password')";     //$ vali values ke saath bhi '' yeh ayega
$result=mysqli_query($conn,$sql);

    if($result){
        echo "data is inserted";
    }
    else{
        echo "not inserted";
    }


}

}

$obj = new databaseoperations();

$obj->inserting(1,"anujkaushik1512@gmail.com","password");

?>