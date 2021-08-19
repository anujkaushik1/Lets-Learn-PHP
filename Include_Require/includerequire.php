<?php
echo "<br><br><br>";
require 'dbconnect.php';  //output = connection is successful

?>

<?php

require "dbconnect.php";
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

?>

