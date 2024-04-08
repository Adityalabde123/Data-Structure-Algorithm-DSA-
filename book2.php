<?php
   $bn=$_POST["s1"];
   $xml=simplexml_load_file("book.xml");
   if(!$xml)
   die("error in file");
foreach($xml->book_information as $a)
{
    if($a->book_name==$bn)
    {
        echo("<br><br>book no=".$a->book_no);
        echo("<br><br>book name=".$a->book_name);
        echo("<br><br>book price=".$a->book_price);
    }
}
?>