<?php 
 $con=mysqli_connect("localhost","root","");
 echo("connection was succesfull<br>");
 if($con==false)
 {
    die("error to connect database");
 }
$res= $sql="CREATE DATABASE sybbaca";
mysqli_select_db($con,$sql);
if($res==true)
{
    echo("record affected succesfully<br>");
}
else
{
    echo("record not affected");
}
echo var_dump("$res");

?>