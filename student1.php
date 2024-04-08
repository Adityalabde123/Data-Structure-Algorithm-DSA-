<?php
 $a1=$_POST["t1"];
 $xml=simplexml_load_file("student1.xml");
 $flag=0;
 if(!$xml)
 {
     die("file not found");
 }
 echo("<table border=1>");
 foreach($xml->stud as $s)
 {
     if($s->course== $a1)
     {
         $flag=1;
         echo("<tr>");
         echo("<td>". $s->rno);
         echo("<td>".$s->sname);
         echo("<td>".$s->address);
         echo("<td>".$s->college);

     }
 }

 if($flag==0)
 {
     echo("Not found....");
 }
?>
