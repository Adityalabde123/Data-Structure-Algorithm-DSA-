
<?php
$xml=simplexml_load_file("xml_first.xml");
if(!$xml)
die("file not found");

foreach($xml->student as $s)
{
    echo("<br><br>roll no=".$s->rno);
    echo("<br><br>name=".$s->name);
    echo("<br><br>per=".$s->per);
}
?>