<?php 
$s1="rbnb college cdj college jts college";
$s2="college";
$k=strstr($s1,$s2);
if($k==null)
{
    print("substring not found ");
}
else
print("substring found=".$k);



?>