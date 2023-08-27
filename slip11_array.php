<html>
<body>
    <form method="POST" action="slip11_array.php">
        enter value to search:
        <input type="text" name="t1"><br>
        <input type="SUBMIT">
    </form>
</body>
</html>
<?php
$a=array("php","big data","se","dm","ds");
print_r($a);
$val=$_POST["t1"];
if(in_array($val,$a))
print("record found");
else
print("record not found");

?>