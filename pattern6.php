<?php
$s="30/may/2023";
$p=("([0-9]{2})|([A-Z]{3})|([0-9]{4})");
if(ereg($p,$s))
print("valid");
else
print("invalid");



?>