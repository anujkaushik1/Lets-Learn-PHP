<?php
$anuj= array(array(10,20,30,40),
             array(50,60,70,80),
             array(90,100,110,120));

    echo $anuj[0][0];  //output=10
?>

<?php
echo "<br><br><br>";
$anuj= array(array(10,20,30,40),
             array(50,60,70,80),
             array(90,100,110,120));

for($i=0;$i<count($anuj);$i++){
    for($j=0;$j<count($anuj[$i]);$j++){
        echo $anuj[$i][$j];
        echo "  ";
        
    }
}
?>