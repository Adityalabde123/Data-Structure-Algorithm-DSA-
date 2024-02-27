<?php
$xml= new DOMDocument();
$xml->load("student.xml");
if(!$xml)
{
    die("file not found");
}
foreach($xml as $s)
{
    echo("<br>roll no=".$s->rno);
    echo("<br>name=".$s->name);
    echo("<br>per=".$s->per);
}
?>                     