<?php
$s1="college rbnb";
$s2="college cdjain";
$k=strcmp($s1,$s2);
if($k==0)
print("string are same");
else if($k>0)
print("first string is greater".$s1);
else
print("second string is greater ".$s2);



?>