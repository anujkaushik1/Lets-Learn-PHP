<?php

$name = "anuj";

echo strlen($name);

?>

<?php
echo "<br>";
$name = "anuj";

echo "my name is".  $name. "and my income is 100000";

?>

// counting words in a string

<?php
echo "<br>";
$name ="my name is anuj kaushik";
echo str_word_count($name);
?>

//REVERSE A STRING
<?php
echo "<br>";
$name = "anuj";
echo strrev($name);
?>


// 

<?php
echo "<br>";
$name = "My name is anuj kaushik";
$is = "is";

echo strpos($name,$is);
?>

//
<?php
echo "<br>";
$name = "Anuj is a nice boy";

echo str_replace("Anuj","Nishant",$name);
?>

//

<?php
echo "<br>";
$name = " Honey singh";
echo str_repeat($name,100);
?>

//
<?php
echo "<br>";
$name = "<pre>     hello   </pre>";
echo $name;

?>