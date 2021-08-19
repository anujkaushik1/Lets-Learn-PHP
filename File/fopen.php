<?php

$filepointer=fopen("anuj.html","r");

$content=fread($filepointer,filesize("anuj.html"));

echo $content;
fclose($filepointer);



?>