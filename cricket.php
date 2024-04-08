<?php
$xml=simplexml_load_file("cricket.xml");
if(!$xml)
{
    die("file not found");
}
 foreach($xml->cricket AS $a)
 {
    if($a->runs>=1200&& $a->wickets>=50)
    {
        echo("<br><br>player=".$a->player);
        echo("<br><br>runs=".$a->runs);
        echo("<br><br>wickets=".$a->wickets);
        echo("<br><br>not out=".$a->noofnotout);
    }
 }


?>