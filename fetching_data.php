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

$sql="SELECT * from people1";
echo "<br>";
if($res=mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            echo $row['id'];
            echo $row['first'];
            echo $row['last'];
            echo "<br>";
        }
    }
    else{
        echo "not matching records ";
    }
}
mysqli_close($conn);
?>