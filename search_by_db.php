<html>
    <body>
        <form method="POST" action="#">
            enter first name<input type="text" name="t1">
            <input type="submit" name="submit" value="SUBMIT">
        </form> 
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $firstnm=$_POST['t1'];
    $host="localhost";
$dbname="sybbaca";
$username="root";
$password="";
$tablenm="people1";
$conn=mysqli_connect("$host","$username","$password","$dbname");
if($conn->connect_error)
{
    die("connection error");
}
  if($a=$conn->query("select * from people1 where first='$firstnm'"))
  {
    echo "no .of records:".$a->num_rows."<br>";
    while($row=$a->fetch_assoc()){
        echo $row['id']."," .$row['first']."". $row['last']."<br>";
    }
  }else{
    echo $connection->error;
  }
}




?>