<?php
echo "Hello World";
$hello = array(10,20,30,40);
$functioncall= Test($hello);

function Test(array $honeysingh){
   for ($i=0;$i<count($honeysingh);$i++){
       echo $honeysingh[$i];
       echo "<br>";
   }
}   //output=Hello World10
            // 20
            // 30
            // 40

?>

<?php
echo "<br> <br><br>";

echo "2nd function";

function monii (array $marksarray){
    $sum= 0;

    for($i=0;$i<count($marksarray);$i++){
        $sum=$sum+$marksarray[$i];
    }
    echo $sum;
}

$anuj=array(90,90,90,90,90);
$sendingfunction= monii($anuj);

?>

<?php
echo "<br><br><br><br>";
function hello(){
    echo "namaste";
}
$anuj =hello();
?>

