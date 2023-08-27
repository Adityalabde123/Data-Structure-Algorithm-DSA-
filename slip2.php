<html>
<body>
<form method="POST" action="slip2.php">
enter string:
<input type="text" name="t1"><br>
enter second string:
<input type="text" name="t2"><br>
1.find small string in the large string:<br>
2.find position of small string in the larg string:
3.compare first n number:
<input type="text" name="t3"><br>
enter choice:
<input type="text" name="t4"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$ch=$_POST["t4"];
switch($ch)
{
    case 1:$s=strstr($s1,$s2);
    if($s==null)
    print("substring not found");
    else
    print("substrin found=".$s);
    break;
    case 2:$s=strpos($s1,$s2);
    if($s==null)
    print("substring not found");
    else
    print("substring found=".$s);
    break;
    case 3:$n=$_POST["t3"];
           $k=strncasecmp($s1,$s2,$n);
           if($k==0)
           {
            print("string are same");

           }
           if($k>0)
           print("first string is greater=".$s1);
           else
           print("second string is greater=".$s2);
           break;
}





?>