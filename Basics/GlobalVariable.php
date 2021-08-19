

<?php
$a =20;
hello();
function hello(){
    global $a;
    echo $a;
}
?>

<?php
$a =100;
echo "<br><br><br>";

function anuj(){
global $a;
$a=130;
echo $a;

}

function nishant(){
    global $a;
    echo $a;
}
anuj();
nishant();  //output= 130 130

?>

<?php
$a =1100;
echo "<br><br><br>";
function anuj1(){
    global $a;
    $a=1500;
    echo $a;
}
function nishant1(){
    global $a;
   echo $a;
}
   nishant1();
   anuj1();
?>
