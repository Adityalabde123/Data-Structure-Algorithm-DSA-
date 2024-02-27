<?php
$xml=simplexml_load_file("product_disp.xml");

foreach($xml->item as $s)
{
    echo("<br><br>item name=".$s->itemname);
    echo("<br><br>price=".$s->price);
    echo("<br><br>qty=".$s->qty);
}
?>