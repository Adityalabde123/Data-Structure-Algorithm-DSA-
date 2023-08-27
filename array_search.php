<?php
$a=array(10,20,30,40);
$f=array_search("40",$a);
if($f==false)
echo("value is not found");
else
echo("value is found");
?>