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

$sql="insert into people values(10,'aditya labde')";
if(mysqli_query($conn,$sql))
{
    echo "record insert succesfully";
}
else
{
    echo "errror inserting".mysqli_error($conn);
}
$conn->close($conn);

?>