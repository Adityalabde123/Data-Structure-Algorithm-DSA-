<?php
$s="india is my country";
$p="^[A-Z 0-9._]+@[a-z]+";
if(eregi($p,$s))
{
  print("valid");
}
else
print("invalid");



?>