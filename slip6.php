<!DOCTYPE html>
<html>
<body>
<form method="POST" action="slip6.php">
    enter first string:
    <input type="text" name="t1">
    enter second string:
    <input type="text" name="t2">
    <input type="submit" value="ok">
</form>    
</body>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
print("UPPERCASE=".strtoupper($s1));
echo("<br>lowercase=".strtolower($s1));
echo("<br><br>UPPERCASE=".strtoupper($s2));
echo("<br>lowercase=".strtolower($s2));



$k=strpos($s1,$s2);
if($k==null)
echo("<br>substring not found");
else
echo("substring found ending pos=".$k);

$k=strpos($s1,$s2);
if($k==null)
echo("<br>substring not found");
else
echo("substring found ending pos=".$k);

?>