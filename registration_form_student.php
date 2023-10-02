<html>
    <body>
        <h1>Registartion form</h1>
        <form method="POST" action="#">
            enter your first name:
            <input type="text" placeholder="firstname" name="t1"><br>
            enter your last name:
            <input type="text" placeholder="lastname" name="t2"><br>
            enter your age:
            <input type="text" placeholder="age" name="t3"><br>
            enter your email:
            <input type="text" placeholder="email" name="t4"><br>
            enter your address:
            <textarea name="t5" placeholder="address"></textarea><br>
            enter your city:
            <input type="text" placeholder="city" name="t6"><br>
            select your gender:
            male:<input type="radio" name="t7"><br>
            female:<input type="radio" name="t7"><br>
            <input type="submit" value="SUBMIT">
            <input type="reset" value="RESET">
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
$nm=$_POST["t1"];
$lnm=$_POST["t2"];
$age=$_POST["t3"];
$email=$_POST["t4"];
$add=$_POST["t5"];
$city=$_POST["t6"];
if(isset($_POST['t7']))
$gender=$_POST["t7"];

$sql="INSERT INTO student values('$nm','$lnm','$age','$email','$add','$city','$gender')";
if(mysqli_query($conn,$sql)){
    echo "record inserted succesfully";
}
else
{
    echo "not inserted".mysqli_error($conn);
}
mysqli_close($conn);

?>