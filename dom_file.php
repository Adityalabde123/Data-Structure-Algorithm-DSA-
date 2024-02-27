<?php
$dom=new DOMDocument();
$dom->load("student.xml");
if($dom==false)
{
    echo("DOM object is not created");
}
else{
    echo("dom object is created");
}
?>