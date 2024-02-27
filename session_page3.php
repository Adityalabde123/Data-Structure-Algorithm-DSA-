<?php
session_start();
$cname=$_SESSION["customer name"];
$add=$_SESSION["address"];
$mob=$_SESSION["phone number"];

$pname=$_POST["t1"];
$qty=$_POST["t2"];
$rate=$_POST["t3"];

$t=$qty*$rate;



echo("<table border=1>");
echo("<tr><td>customer name<td>$cname</tr>");
echo("<tr><td>customer address<td>$add</tr>");
echo("<tr><td>customer phone number<td>$mob</tr>");
echo("<tr><td>product name<td>$pname</tr>");
echo("<tr><td>Quantity<td>$qty</tr>");
echo("<tr><td>rate<td>$rate</tr>");
echo("<tr><td>total amount<td>$t</tr>");
echo("</table>");



?>