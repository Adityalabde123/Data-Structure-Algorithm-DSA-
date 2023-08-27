<?php
$a=array(10,20,30,40,50,60,70);

$b=array_splice($a,2,3,77);

echo("deleted elements=<br>");
print_r($b);

echo("inseted array=<br>");
print_r($a);
?>