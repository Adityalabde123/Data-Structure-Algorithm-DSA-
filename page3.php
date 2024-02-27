<?php
session_start();
$eno=$_SESSION["empno"];
$ename=$_SESSION["emp name"];
$add=$_SESSION["emp address"];

$sal=$_POST["t1"];
$da=$_POST["t2"];
$hra=$_POST["t3"];


echo("<br>employee no=".$eno);
echo("<br>employee name=".$ename);
echo("<br>employee address=".$add);
echo("<br>employee salary=".$sal);
echo("<br>employee da=".$da);
echo("<br>employee hra=".$hra);
?>
