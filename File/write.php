<?php

$filepointer=fopen("kaushik saabh.txt","w"); //iisse ek new file create hojaei

fwrite($filepointer,"my name is anuj kaushik whats your name"); //iske andr ye sbh daal dega 

?>

<?php

$filepointer=fopen("kaushik saabh.txt","a"); 

fwrite($filepointer,"append krdia hai"); 
?>