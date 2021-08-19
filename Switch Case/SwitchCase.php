<?php
$a=20;

switch($a){
    case 10:
        echo "this is 10";
    case 20:
        echo "<br>this is 20";
     case 30:
        echo "<br>this is 30";
    case 40:
        echo "<br>this is 40";
}
//output = 
// this is 20
// this is 30
// this is 40
?>

<?php
echo "<br>";
$a=20;

switch($a){
    case 10:
        echo "this is 10";
        break;
    case 20:
        echo "<br>this is 20";
        break;
     case 30:
        echo "<br>this is 30";
        break;
    case 40:
        echo "<br>this is 40";
        break;
}
//output = 
// this is 20

?>
