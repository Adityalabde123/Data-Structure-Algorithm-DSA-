<html>
<body>
<form method="post" action="slip1.php">
enter string:
<input type="text" name="t1"><br>
<input type="radio" name="r1" value="1">length of string<br>
<input type="radio" name="r1" value="2">count vowels<br>
<input type="radio" name="r1" value="3">left of right padding<br>
<input type="radio" name="r1" value="4">lower and title case<br>
<input type="radio" name="r1" value="5">remove spaces<br>
<input type="radio" name="r1" value="6">reverse string<br>
<input type="submit">

</form>
</body>
</html>
<?php
$s=$_POST["t1"];
$ch=$_POST["r1"];
switch($ch)
{
    case 1:length($s);break;
    case 2:vowels_count($s);break;
    case 3:left_right_pad($s);break;
    case 4:disp_lower_title($s);break;
    case 5:$s1=ltrim($s);
           echo("string=".$s1);
           print("after removing spacce length=".strlen($s1));
    case 6:echo("string reverse".strrev($s));break;
}
function length($s)
{
    $c=0;
    for($i=0;@$s[$i]!=null;$i++)
    $c++;
    print("length of string".$c);
}
function vowels_count($s)
{
    $cnt=0;
    for($i=0;@$s[$i]!=null;$i++)
    {
        if($s[$i]=='a'||$s[$i]=='A'||$s[$i]=='e'||$s[$i]=='E'||$s[$i]=='i'||$s[$i]=='I'||$s[$i]=='o'||$s[$i]=='O'||$s[$i]=='u'||$s[$i]=='U')
        $cnt++;

    }
    echo("vowels=".$cnt);
}
function left_right_pad($s)
{
    $s=str_pad($s,10,"*",);
       print("string=".$s);
}
function disp_lower_title($s)
{
    $s1=strtolower($s);
        echo("string in lower=".$s1);
    $s2=ucfirst($s1);
    print("<br>title case=".$s2);
}






?>