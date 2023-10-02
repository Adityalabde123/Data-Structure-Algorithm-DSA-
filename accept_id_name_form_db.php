<html>
    <body>
        <form method="POST" action="#">
            enter id:<input type="text" name="t1"><br>
            enter first name:<input type="text" name="t2"><br>
            enter last name:<input type="text" name="t3"><br>
            <input type="submit" value="SUBMIT">
            
        </form>
    </body>
</html>
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
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
 $sql="INSERT into people1 values('$a','$b','$c')";
if(mysqli_query($conn,$sql))
{
    echo "record inserted successfully";
}
else{
    echo "not inserted".mysqli_error($conn);
}
mysqli_close($conn);
?>