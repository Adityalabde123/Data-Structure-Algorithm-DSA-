<html>
    <body>
        <form method="POST" action="slip4.php">
            enter no 1:
            <input type="number" name="t1"><br>
            enter no2:
            <input type="number" name="t2"><br>
            enter choice:
            <br>1.find mod of the two numbers.
                2.find the power of first number raised to thde second.
                3.find the sum of first n number(consedering first number as n).
                4.find the factorail of second number.
                <input type="text" name="t3"><br>
                <input type="submit"> 

        </form>
    </body>
</html>
<?php
$b=$_POST["t2"];
$a=$_POST["t1"];
$ch=$_POST["t3"];
switch($ch)
{
    case 1:mod($a,$b);break;
    case 2:power($a,$b);break;
    case 3:sum($a);break;
    case 4:fact($b);break;
}
function mod($a,$b)
{
    $c=$a%$b;
    echo("mod of number=".$c);

}
function power($a,$b)
{
    $ans=1;
    for($i=1;$i<=$b;$i++)
    {
        $ans=$ans*$a;
    }
    echo("power=".$ans);
}
function sum($a)
{
    $s=0;
    for($i=1;$i=$a;$i++)
    $s=$s+$i;
    echo("sum=".$s);
}
function fact($n)
{
    $f=1;
    for($i=1;$i<=$n;$i++)
    {
        $f=$f*$i;
        echo("factorail=".$f);


        
    }
}





?>