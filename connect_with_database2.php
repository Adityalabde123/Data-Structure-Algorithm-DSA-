<?php
$host="localhost";
$dbname="sybbaca";
$username="root";
$password="";
$conn=mysqli_connect("$host","$username","$password","$dbname");
if($conn->connect_error)
{
    die("connection error");
}


$sql="CREATE TABLE people(id int(20) primary key,name varchar(20))";
if($conn->query($sql)==TRUE)
{
    echo "teble created succesfully";
}
else
{
    echo "errror creating table".$conn->error;
}
$conn->close();

?>