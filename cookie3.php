<?php
$rno=$_COOKIE["rno"];
$name=$_COOKIE["nm"];
$cl=$_COOKIE["cl"];
$php=$_POST["t1"];
$cpp=$_COOKIE["t2"];
$ds=$_COOKIE["t3"];
$Rdbms=$_COOKIE["t4"];
$t=$php+$ds+$cpp+$Rdbms;
$p=$t/4;

echo("<table border='1' width='40%'>");
echo("<tr><td> seat no:<td>$rno</tr>");
echo("<tr><td> student name<td>$name</tr>");
echo("<tr><td> class<td>$cl</tr>");
echo("</table>");
echo("<table border='1' width='40%'>");
echo("<tr><th>subject code<th>subject name<th>marks</tr>");
echo("<tr><td>101<td>PHP<td>$php</tr>");
echo("<tr><td>102<td>ds<td>$ds</tr>");
echo("<tr><td>103<td>cpp<td>$cpp</tr>");
echo("<tr><td>104<td>rdbms<td>$Rdbms</tr>");
echo("</table>");
echo("<br>total marks=".$t);
echo("<br>percentage=".$p);




?>