<html>
    <body>
        <form method="POST" action="student_form.php">
            roll no.:
            <input type="text" name="t1"><br>
            name:
            <input type="text" name="t2"><br>
            phone no:
            <input type="text" name="t3"><br>
            birth date:
            <input type="date" name="t4"><br>
            email id:
            <input type="text" name="t5">\
            <input type="submit" value="display">
            <input type="reset" value="clear"> 
             
        </form>
    </body>
</html>
<?php
$pattern="([0-9]{2})";
$s=$_POST["t1"];
if(ereg($pattern,$s))
echo($s);
else
echo("invalid rollno");

$pattern="[a-z]";
$s2=$_POST["t2"];
if(eregi($pattern,$s2))
echo($s2);
else
echo("invalid name");

$pattern="([0-9]{10})";
$s3=$_POST["t3"];
if(ereg($pattern,$s3))
print($s3);
else
print("invalid number");

$pattern="/^(0?[1-9]|[1-2][0-9]|3[0-1])-(0?[1-9]|1[0-2])-(200[0-9]|201[0-9]|202[0-9]|203[0-9]|204[0-9]|205[0-9]|206[0-9]|2070)$/";
$s4=$_POST["t4"];
if(ereg($pattern,$s4))
print($s4);
else
print("invalid birthdate");


$s5=$_POST["t5"];
$p="^[a-zA-Z0-9_]+@[a-z]+\.[a-z]{2,3}$";
if(ereg($p,$s5))
print($s5);
else
print("invalid")
?>



