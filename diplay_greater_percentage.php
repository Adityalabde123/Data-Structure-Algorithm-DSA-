
<?php
$flag=0;
$xml=simplexml_load_file("xml_first.xml");
if(!$xml)
die("file not found");

foreach($xml->student as $s)
{
    if($s->per<80)
    {
    echo("<br><br>rno=".$s->rno);
    echo("<br><br>name=".$s->name);
     $flag=1;
    break;
}
}
  if($flag==0)
  {
    echo("student not found");
  }
?>