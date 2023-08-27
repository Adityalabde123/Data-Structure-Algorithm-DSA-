<?php
$rno=55;
$name="aman";
$a=array("rno"=>"101","name"=>"sai","per"=>66.77);
extract($a,EXTR_PREFIX_SAME,"s");
echo("roll no=".$rno);
echo("<br>name=".$name);
echo("<br>per=".$per);

echo("<br>roll no=".$s_rno);
echo("<br>name=".$s_name);

?>