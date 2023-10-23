<?php
session_start();
$u=$_POST["t1"];
$p=$_POST["t2"];

if(isset($_SESSION["cdj"]))
$_SESSION["cdj"]+=1;
else
$_SESSION["cdj"]=0;


if($_SESSION["cdj"]>3)
die("3 attempt over");

if($u=="cdj" & $p=="123")
{
header("Location:http//:www.google.com");
}